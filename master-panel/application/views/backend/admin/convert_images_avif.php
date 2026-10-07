<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="<?php echo site_url('admin/dashboard'); ?>">Dashboard</a></li>
                        <li class="breadcrumb-item active">Convert Images to AVIF</li>
                    </ol>
                </div>
                <h4 class="page-title">Convert Images to AVIF</h4>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title mb-3">Server Support</h4>
                    <p class="mb-1">
                        <strong>AVIF encoding:</strong>
                        <span class="badge badge-<?php echo !empty($avif_supported) ? 'success' : 'danger'; ?>">
                            <?php echo !empty($avif_supported) ? 'Available' : 'Not available'; ?>
                        </span>
                    </p>
                    <?php
                        $write_ok = !empty($avif_self_test['write_ok']);
                        $test_msg = !empty($avif_self_test['message']) ? $avif_self_test['message'] : '';
                    ?>
                    <p class="mb-1">
                        <strong>Write self-test:</strong>
                        <span class="badge badge-<?php echo $write_ok ? 'success' : 'danger'; ?>">
                            <?php echo $write_ok ? 'OK' : 'Failed'; ?>
                        </span>
                        <span class="small text-muted"><?php echo html_escape($test_msg); ?></span>
                    </p>
                    <?php if (empty($avif_supported) || !$write_ok) { ?>
                        <p class="text-danger mb-0 small">
                            AVIF write is not working on this server. New uploads fall back to JPEG until fixed
                            (need working GD <code>imageavif</code> or Imagick AVIF write).
                        </p>
                    <?php } else { ?>
                        <p class="text-muted mb-0 small">
                            New master-panel image uploads are saved as AVIF. Use this tool to convert existing JPG/PNG/WebP files.
                        </p>
                    <?php } ?>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title mb-3">Pending Conversion</h4>
                    <p class="mb-1">
                        <strong>Images remaining:</strong>
                        <span id="pending-total" class="badge badge-warning"><?php echo (int) $pending_total; ?></span>
                    </p>
                    <div id="pending-by-table" class="small text-muted" style="max-height: 160px; overflow:auto;">
                        <?php if (!empty($pending_by_table)) { ?>
                            <ul class="mb-0 pl-3">
                                <?php foreach ($pending_by_table as $label => $count) { ?>
                                    <li><?php echo html_escape($label); ?>: <?php echo (int) $count; ?></li>
                                <?php } ?>
                            </ul>
                        <?php } else { ?>
                            <span>No convertible images found.</span>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title mb-3">Run Conversion</h4>
                    <div id="convert-message" class="mb-3"></div>

                    <div class="form-row align-items-end">
                        <div class="form-group col-md-3">
                            <label>Batch size</label>
                            <input type="number" id="batch-limit" class="form-control" value="20" min="1" max="100">
                        </div>
                        <div class="form-group col-md-3">
                            <div class="custom-control custom-checkbox mt-4">
                                <input type="checkbox" class="custom-control-input" id="dry-run">
                                <label class="custom-control-label" for="dry-run">Dry run (preview only — does not reduce count)</label>
                            </div>
                        </div>
                        <div class="form-group col-md-3">
                            <div class="custom-control custom-checkbox mt-4">
                                <input type="checkbox" class="custom-control-input" id="delete-old" checked>
                                <label class="custom-control-label" for="delete-old">Delete originals after convert</label>
                            </div>
                        </div>
                        <div class="form-group col-md-3">
                            <button type="button" class="btn btn-outline-secondary btn-block" id="refresh-status-btn">Refresh Status</button>
                        </div>
                    </div>

                    <div class="text-center mt-2">
                        <?php $can_convert = !empty($avif_supported) && !empty($avif_self_test['write_ok']); ?>
                        <button type="button" class="btn btn-primary btn-lg" id="run-batch-btn" <?php echo !$can_convert ? 'disabled' : ''; ?>>
                            Run One Batch
                        </button>
                        <button type="button" class="btn btn-success btn-lg ml-2" id="run-all-btn" <?php echo !$can_convert ? 'disabled' : ''; ?>>
                            Convert All (loop)
                        </button>
                        <button type="button" class="btn btn-danger btn-lg ml-2" id="stop-btn" style="display:none;">
                            Stop
                        </button>
                    </div>

                    <div class="mt-3 text-center" id="loading-spinner" style="display:none;">
                        <div class="spinner-border text-primary" role="status">
                            <span class="sr-only">Loading...</span>
                        </div>
                        <p class="mt-2 mb-0" id="progress-text">Working...</p>
                    </div>

                    <div class="mt-4">
                        <h5>Log</h5>
                        <pre id="convert-log" class="p-3 bg-light border rounded" style="max-height: 280px; overflow:auto; font-size: 12px;"></pre>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
$(document).ready(function() {
    var stopRequested = false;

    function logLine(msg) {
        var $log = $('#convert-log');
        $log.append(msg + "\n");
        $log.scrollTop($log[0].scrollHeight);
    }

    var canConvert = <?php echo (!empty($avif_supported) && !empty($avif_self_test['write_ok'])) ? 'true' : 'false'; ?>;

    function setBusy(busy) {
        $('#run-batch-btn, #run-all-btn').prop('disabled', busy || !canConvert);
        $('#refresh-status-btn').prop('disabled', busy);
        $('#stop-btn').toggle(busy);
        $('#loading-spinner').toggle(busy);
    }

    function updateStatus(data) {
        if (!data) return;
        if (typeof data.pending_total !== 'undefined') {
            $('#pending-total').text(data.pending_total || 0);
        }
        if (data.pending_by_table) {
            var html = '';
            if (Object.keys(data.pending_by_table).length) {
                html = '<ul class="mb-0 pl-3">';
                $.each(data.pending_by_table, function(label, count) {
                    html += '<li>' + $('<div>').text(label).html() + ': ' + count + '</li>';
                });
                html += '</ul>';
            } else {
                html = '<span>No convertible images found.</span>';
            }
            $('#pending-by-table').html(html);
        }
    }

    function refreshStatus() {
        return $.ajax({
            url: '<?php echo site_url("admin/convert-images-avif/status"); ?>',
            type: 'GET',
            dataType: 'json'
        }).done(function(res) {
            if (res.status === 'success') {
                updateStatus(res);
            }
        });
    }

    function runBatch() {
        var payload = {
            limit: $('#batch-limit').val() || 20,
            dry_run: $('#dry-run').is(':checked') ? '1' : '0',
            delete_old: $('#delete-old').is(':checked') ? '1' : '0'
        };

        return $.ajax({
            url: '<?php echo site_url("admin/convert-images-avif/run"); ?>',
            type: 'POST',
            dataType: 'json',
            data: payload,
            timeout: 180000
        }).done(function(res) {
            if (res.status === 'success') {
                logLine(res.message + ' Remaining: ' + (res.result && res.result.remaining != null ? res.result.remaining : '?'));
                if (res.result && res.result.failed && res.result.failed.length) {
                    $.each(res.result.failed, function(_, item) {
                        logLine('FAIL ' + item.table + '#' + item.id + ' ' + item.path + ' — ' + item.error);
                    });
                }
                if (res.result) {
                    updateStatus({
                        pending_total: res.result.remaining,
                        pending_by_table: null
                    });
                }
            } else {
                logLine('Error: ' + (res.message || 'Unknown error'));
                $('#convert-message').html(
                    '<div class="alert alert-danger">' + (res.message || 'Unknown error') + '</div>'
                );
            }
        }).fail(function(xhr, status) {
            var msg = status === 'timeout' ? 'Request timed out' : 'Request failed';
            logLine(msg);
            $('#convert-message').html('<div class="alert alert-danger">' + msg + '</div>');
        });
    }

    $('#refresh-status-btn').on('click', function() {
        setBusy(true);
        $('#progress-text').text('Refreshing status...');
        refreshStatus().always(function() {
            setBusy(false);
        });
    });

    $('#run-batch-btn').on('click', function() {
        setBusy(true);
        $('#progress-text').text('Running batch...');
        runBatch().always(function() {
            refreshStatus().always(function() {
                setBusy(false);
            });
        });
    });

    $('#stop-btn').on('click', function() {
        stopRequested = true;
        logLine('Stop requested...');
    });

    $('#run-all-btn').on('click', function() {
        if ($('#dry-run').is(':checked')) {
            alert('Uncheck Dry run to convert all. Dry run only supports a single batch preview.');
            return;
        }
        if (!confirm('This will convert remaining images to AVIF and update the database. Continue?')) {
            return;
        }
        stopRequested = false;
        setBusy(true);
        $('#progress-text').text('Converting all...');

        function loop() {
            if (stopRequested) {
                logLine('Stopped by user.');
                refreshStatus().always(function() { setBusy(false); });
                return;
            }
            runBatch().done(function(res) {
                var remaining = res && res.result ? res.result.remaining : 0;
                var converted = res && res.result ? res.result.converted : 0;
                var failedCount = res && res.result && res.result.failed ? res.result.failed.length : 0;
                // Continue only while something was successfully converted (or would be, in dry run — disabled here)
                if (remaining > 0 && converted > 0 && failedCount === 0 && !stopRequested) {
                    $('#progress-text').text('Remaining: ' + remaining);
                    setTimeout(loop, 400);
                } else if (remaining > 0 && converted > 0 && !stopRequested) {
                    // Some failures — keep going but slower; stop if a full batch fails
                    $('#progress-text').text('Remaining: ' + remaining + ' (some failures)');
                    setTimeout(loop, 400);
                } else {
                    if (remaining === 0) {
                        logLine('Done. No remaining convertible images.');
                    } else if (converted === 0) {
                        logLine('Stopped: no images converted in last batch (check failures / AVIF support).');
                    }
                    refreshStatus().always(function() { setBusy(false); });
                }
            }).fail(function() {
                setBusy(false);
            });
        }
        loop();
    });
});
</script>
