<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="<?php echo site_url('admin/dashboard'); ?>">Dashboard</a></li>
                        <li class="breadcrumb-item active">Sitemap Management</li>
                    </ol>
                </div>
                <h4 class="page-title">Sitemap Management</h4>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title mb-3">Sitemap Information</h4>
                    
                    <div class="mb-3">
                        <p><strong>Status:</strong> 
                            <?php if ($sitemap_exists): ?>
                                <span class="badge bg-success">Exists</span>
                            <?php else: ?>
                                <span class="badge bg-danger">Not Found</span>
                            <?php endif; ?>
                        </p>
                        <p><strong>Last Generated:</strong> <?php echo $last_generated; ?></p>
                        <?php if ($sitemap_exists): ?>
                            <p><strong>Sitemap URL:</strong> <a href="<?php echo $base_url; ?>/sitemap.xml" target="_blank"><?php echo $base_url; ?>/sitemap.xml</a></p>
                        <?php endif; ?>
                    </div>
                    
                    <button type="button" class="btn btn-primary" id="generateSitemapBtn">
                        <i data-feather="refresh-cw"></i> Generate Sitemap Now
                    </button>
                    
                    <div id="sitemapMessage" class="mt-3"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
$(document).ready(function() {
    $('#generateSitemapBtn').on('click', function() {
        var btn = $(this);
        var originalText = btn.html();
        
        btn.prop('disabled', true).html('<i data-feather="loader"></i> Generating...');
        $('#sitemapMessage').html('<div class="alert alert-info">Generating sitemap, please wait...</div>');
        
        $.ajax({
            url: '<?php echo site_url("admin/generate_sitemap"); ?>',
            type: 'POST',
            dataType: 'json',
            success: function(response) {
                if (response.status === 'success') {
                    $('#sitemapMessage').html('<div class="alert alert-success">' + response.message + '<br>Generated on: ' + response.date + '<br>File size: ' + response.size + '</div>');
                    setTimeout(function() {
                        location.reload();
                    }, 2000);
                } else {
                    $('#sitemapMessage').html('<div class="alert alert-danger">' + response.message + '</div>');
                }
                btn.prop('disabled', false).html(originalText);
                feather.replace();
            },
            error: function(xhr, status, error) {
                $('#sitemapMessage').html('<div class="alert alert-danger">Error! Failed to generate sitemap. Please try again.</div>');
                btn.prop('disabled', false).html(originalText);
                feather.replace();
            }
        });
    });
});
</script>

