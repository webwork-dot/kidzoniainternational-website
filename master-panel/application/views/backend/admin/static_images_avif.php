<?php
$st = isset($static_status) && is_array($static_status) ? $static_status : array();
$write_ok = !empty($avif_self_test['write_ok']);
$can_convert = !empty($avif_supported) && $write_ok;
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="<?php echo site_url('admin/dashboard'); ?>">Dashboard</a></li>
                        <li class="breadcrumb-item active">Static Images → AVIF</li>
                    </ol>
                </div>
                <h4 class="page-title">Static Images → AVIF</h4>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title mb-3">Server</h4>
                    <p class="mb-1">
                        <strong>AVIF encoding:</strong>
                        <span class="badge badge-<?php echo !empty($avif_supported) ? 'success' : 'danger'; ?>">
                            <?php echo !empty($avif_supported) ? 'Available' : 'Not available'; ?>
                        </span>
                    </p>
                    <p class="mb-0">
                        <strong>Write self-test:</strong>
                        <span class="badge badge-<?php echo $write_ok ? 'success' : 'danger'; ?>">
                            <?php echo $write_ok ? 'OK' : 'Failed'; ?>
                        </span>
                        <span class="small text-muted"><?php echo html_escape(!empty($avif_self_test['message']) ? $avif_self_test['message'] : ''); ?></span>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title mb-3">Scan Summary <small class="text-muted">(assets/ + img/)</small></h4>
                    <div class="row text-center">
                        <div class="col-6 col-md-3 mb-2">
                            <div class="border rounded p-2">
                                <div class="h4 mb-0" id="stat-total"><?php echo (int) (!empty($st['total_rasters']) ? $st['total_rasters'] : 0); ?></div>
                                <small>Total rasters</small>
                            </div>
                        </div>
                        <div class="col-6 col-md-3 mb-2">
                            <div class="border rounded p-2">
                                <div class="h4 mb-0 text-warning" id="stat-used-pending"><?php echo (int) (!empty($st['used_pending']) ? $st['used_pending'] : 0); ?></div>
                                <small>Used → need AVIF</small>
                            </div>
                        </div>
                        <div class="col-6 col-md-3 mb-2">
                            <div class="border rounded p-2">
                                <div class="h4 mb-0 text-success" id="stat-used-avif"><?php echo (int) (!empty($st['used_has_avif']) ? $st['used_has_avif'] : 0); ?></div>
                                <small>Used already AVIF</small>
                            </div>
                        </div>
                        <div class="col-6 col-md-3 mb-2">
                            <div class="border rounded p-2">
                                <div class="h4 mb-0 text-danger" id="stat-unused"><?php echo (int) (!empty($st['unused']) ? $st['unused'] : 0); ?></div>
                                <small>Unused (candidates)</small>
                            </div>
                        </div>
                    </div>
                    <p class="small text-muted mb-0 mt-2">
                        Used = referenced in views/CSS/JS or DB. GIF used files are skipped for conversion.
                        Unused files can be moved to <code>assets/_unused_static/</code> (not deleted immediately).
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title mb-3">Convert used → AVIF</h4>
                    <div id="convert-message" class="mb-2"></div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label>Batch size</label>
                            <input type="number" id="convert-limit" class="form-control" value="15" min="1" max="50">
                        </div>
                        <div class="form-group col-md-8">
                            <div class="custom-control custom-checkbox mt-4">
                                <input type="checkbox" class="custom-control-input" id="convert-dry-run">
                                <label class="custom-control-label" for="convert-dry-run">Dry run (preview only)</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="update-refs" checked>
                                <label class="custom-control-label" for="update-refs">Update code/DB references to .avif</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="delete-old-static">
                                <label class="custom-control-label" for="delete-old-static">Delete original after convert</label>
                            </div>
                        </div>
                    </div>
                    <button type="button" class="btn btn-primary" id="convert-batch-btn" <?php echo !$can_convert ? 'disabled' : ''; ?>>Convert One Batch</button>
                    <button type="button" class="btn btn-success ml-1" id="convert-all-btn" <?php echo !$can_convert ? 'disabled' : ''; ?>>Convert All Used</button>
                    <button type="button" class="btn btn-danger ml-1" id="convert-stop-btn" style="display:none;">Stop</button>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title mb-3">Quarantine unused</h4>
                    <div id="quarantine-message" class="mb-2"></div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label>Batch size</label>
                            <input type="number" id="quarantine-limit" class="form-control" value="30" min="1" max="100">
                        </div>
                        <div class="form-group col-md-8">
                            <div class="custom-control custom-checkbox mt-4">
                                <input type="checkbox" class="custom-control-input" id="quarantine-dry-run" checked>
                                <label class="custom-control-label" for="quarantine-dry-run">Dry run (preview only)</label>
                            </div>
                        </div>
                    </div>
                    <button type="button" class="btn btn-warning" id="quarantine-batch-btn">Quarantine One Batch</button>
                    <button type="button" class="btn btn-outline-warning ml-1" id="quarantine-all-btn">Quarantine All Unused</button>
                    <button type="button" class="btn btn-outline-danger ml-1" id="purge-btn">Purge Quarantine Folder</button>
                    <p class="small text-muted mt-2 mb-0">Quarantine moves files to <code>assets/_unused_static/</code>. Purge permanently deletes that folder’s contents.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="header-title">Sample: used needing AVIF</h5>
                    <pre id="sample-used" class="bg-light border rounded p-2 small" style="max-height:220px;overflow:auto;"><?php
                        echo !empty($st['sample_used_pending'])
                            ? html_escape(implode("\n", $st['sample_used_pending']))
                            : 'None';
                    ?></pre>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="header-title">Sample: unused candidates</h5>
                    <pre id="sample-unused" class="bg-light border rounded p-2 small" style="max-height:220px;overflow:auto;"><?php
                        echo !empty($st['sample_unused'])
                            ? html_escape(implode("\n", $st['sample_unused']))
                            : 'None';
                    ?></pre>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <h5 class="header-title mb-0">Log</h5>
                        <button type="button" class="btn btn-sm btn-outline-secondary" id="refresh-static-btn">Refresh Scan</button>
                    </div>
                    <div id="loading-spinner" style="display:none;" class="mb-2">
                        <div class="spinner-border spinner-border-sm text-primary" role="status"></div>
                        <span id="progress-text" class="ml-2">Working...</span>
                    </div>
                    <pre id="static-log" class="p-3 bg-light border rounded" style="max-height:280px;overflow:auto;font-size:12px;"></pre>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
$(document).ready(function() {
    var canConvert = <?php echo $can_convert ? 'true' : 'false'; ?>;
    var stopConvert = false;
    var stopQuarantine = false;

    function logLine(msg) {
        var $log = $('#static-log');
        $log.append(msg + "\n");
        $log.scrollTop($log[0].scrollHeight);
    }

    function setBusy(busy) {
        $('#convert-batch-btn, #convert-all-btn').prop('disabled', busy || !canConvert);
        $('#quarantine-batch-btn, #quarantine-all-btn, #purge-btn, #refresh-static-btn').prop('disabled', busy);
        $('#convert-stop-btn').toggle(busy && !stopConvert);
        $('#loading-spinner').toggle(busy);
    }

    function applyStatus(st) {
        if (!st) return;
        $('#stat-total').text(st.total_rasters || 0);
        $('#stat-used-pending').text(st.used_pending || 0);
        $('#stat-used-avif').text(st.used_has_avif || 0);
        $('#stat-unused').text(st.unused || 0);
        $('#sample-used').text((st.sample_used_pending && st.sample_used_pending.length) ? st.sample_used_pending.join("\n") : 'None');
        $('#sample-unused').text((st.sample_unused && st.sample_unused.length) ? st.sample_unused.join("\n") : 'None');
    }

    function refreshStatus() {
        return $.ajax({
            url: '<?php echo site_url("admin/static-images-avif/status"); ?>',
            type: 'GET',
            dataType: 'json',
            timeout: 180000
        }).done(function(res) {
            if (res.status === 'success') {
                applyStatus(res.static_status);
            }
        });
    }

    function convertBatch() {
        return $.ajax({
            url: '<?php echo site_url("admin/static-images-avif/convert"); ?>',
            type: 'POST',
            dataType: 'json',
            timeout: 300000,
            data: {
                limit: $('#convert-limit').val() || 15,
                dry_run: $('#convert-dry-run').is(':checked') ? '1' : '0',
                delete_old: $('#delete-old-static').is(':checked') ? '1' : '0',
                update_refs: $('#update-refs').is(':checked') ? '1' : '0'
            }
        }).done(function(res) {
            if (res.status === 'success') {
                logLine(res.message + ' Remaining used: ' + (res.result && res.result.remaining != null ? res.result.remaining : '?'));
                if (res.result && res.result.failed && res.result.failed.length) {
                    $.each(res.result.failed, function(_, item) {
                        logLine('FAIL ' + item.path + ' — ' + item.error);
                    });
                }
            } else {
                logLine('Error: ' + (res.message || 'Unknown'));
                $('#convert-message').html('<div class="alert alert-danger">' + (res.message || 'Error') + '</div>');
            }
        }).fail(function(xhr, status) {
            logLine(status === 'timeout' ? 'Convert timed out' : 'Convert request failed');
        });
    }

    function quarantineBatch() {
        return $.ajax({
            url: '<?php echo site_url("admin/static-images-avif/quarantine"); ?>',
            type: 'POST',
            dataType: 'json',
            timeout: 300000,
            data: {
                limit: $('#quarantine-limit').val() || 30,
                dry_run: $('#quarantine-dry-run').is(':checked') ? '1' : '0'
            }
        }).done(function(res) {
            if (res.status === 'success') {
                logLine(res.message + ' Unused remaining: ' + (res.result && res.result.remaining != null ? res.result.remaining : '?'));
            } else {
                logLine('Error: ' + (res.message || 'Unknown'));
            }
        }).fail(function() {
            logLine('Quarantine request failed');
        });
    }

    $('#refresh-static-btn').on('click', function() {
        setBusy(true);
        $('#progress-text').text('Scanning...');
        refreshStatus().always(function() { setBusy(false); });
    });

    $('#convert-batch-btn').on('click', function() {
        setBusy(true);
        $('#progress-text').text('Converting batch...');
        convertBatch().always(function() {
            refreshStatus().always(function() { setBusy(false); });
        });
    });

    $('#convert-stop-btn').on('click', function() {
        stopConvert = true;
        logLine('Stop requested...');
    });

    $('#convert-all-btn').on('click', function() {
        if ($('#convert-dry-run').is(':checked')) {
            alert('Uncheck Dry run to convert all.');
            return;
        }
        if (!confirm('Convert all used static images to AVIF and update references?')) return;
        stopConvert = false;
        setBusy(true);
        $('#progress-text').text('Converting all used...');
        function loop() {
            if (stopConvert) {
                logLine('Convert stopped.');
                refreshStatus().always(function() { setBusy(false); });
                return;
            }
            convertBatch().done(function(res) {
                var remaining = res && res.result ? res.result.remaining : 0;
                var converted = res && res.result ? res.result.converted : 0;
                if (remaining > 0 && converted > 0 && !stopConvert) {
                    $('#progress-text').text('Used remaining: ' + remaining);
                    setTimeout(loop, 400);
                } else {
                    if (remaining === 0) logLine('Done converting used static images.');
                    else if (converted === 0) logLine('Stopped: nothing converted in last batch.');
                    refreshStatus().always(function() { setBusy(false); });
                }
            }).fail(function() { setBusy(false); });
        }
        loop();
    });

    $('#quarantine-batch-btn').on('click', function() {
        setBusy(true);
        $('#progress-text').text('Quarantining...');
        quarantineBatch().always(function() {
            refreshStatus().always(function() { setBusy(false); });
        });
    });

    $('#quarantine-all-btn').on('click', function() {
        if ($('#quarantine-dry-run').is(':checked')) {
            alert('Uncheck Dry run to quarantine all.');
            return;
        }
        if (!confirm('Move ALL unused static images to assets/_unused_static/? You can purge later.')) return;
        stopQuarantine = false;
        setBusy(true);
        $('#progress-text').text('Quarantining all unused...');
        function loop() {
            if (stopQuarantine) {
                refreshStatus().always(function() { setBusy(false); });
                return;
            }
            quarantineBatch().done(function(res) {
                var remaining = res && res.result ? res.result.remaining : 0;
                var moved = res && res.result ? res.result.moved : 0;
                if (remaining > 0 && moved > 0) {
                    $('#progress-text').text('Unused remaining: ' + remaining);
                    setTimeout(loop, 400);
                } else {
                    if (remaining === 0) logLine('Done quarantining unused images.');
                    refreshStatus().always(function() { setBusy(false); });
                }
            }).fail(function() { setBusy(false); });
        }
        loop();
    });

    $('#purge-btn').on('click', function() {
        if (!confirm('Permanently delete files inside assets/_unused_static/? This cannot be undone.\n\nOK = delete now, Cancel = abort.')) return;
        setBusy(true);
        $('#progress-text').text('Purging quarantine...');
        $.ajax({
            url: '<?php echo site_url("admin/static-images-avif/purge"); ?>',
            type: 'POST',
            dataType: 'json',
            data: { dry_run: '0', limit: 500 }
        }).done(function(res) {
            logLine(res.message || 'Purge done');
        }).always(function() {
            refreshStatus().always(function() { setBusy(false); });
        });
    });
});
</script>
