<style>
  .newsletter-sidebar {
    background: #ffffff;
    border-radius: 10px;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
    border: 1px solid #eaeaea;
    padding: 20px;
  }
  .newsletter-sidebar-title {
    font-size: 20px;
    font-weight: 700;
    color: #122051;
    border-bottom: 2px solid #fbbc00;
    padding-bottom: 10px;
    margin-bottom: 15px;
  }
  .newsletter-list {
    list-style: none;
    padding: 0;
    margin: 0;
  }
  .newsletter-list-item {
    margin-bottom: 10px;
  }
  .newsletter-link {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 12px 15px;
    border-radius: 8px;
    background: #f8f9fa;
    color: #333333;
    font-weight: 500;
    text-decoration: none;
    transition: all 0.3s ease;
    border: 1px solid #e9ecef;
  }
  .newsletter-link:hover, .newsletter-link.active {
    background: #122051;
    color: #ffffff !important;
    border-color: #122051;
    box-shadow: 0 2px 8px rgba(18, 32, 81, 0.3);
  }
  .newsletter-link .badge-active {
    background: #fbbc00;
    color: #122051;
    font-size: 11px;
    padding: 3px 8px;
    border-radius: 12px;
    font-weight: bold;
  }
  .pdf-viewer-container {
    background: #ffffff;
    border-radius: 10px;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
    border: 1px solid #eaeaea;
    padding: 20px;
    margin-bottom: 30px;
  }
  .pdf-frame {
    width: 100%;
    height: 800px;
    border: 1px solid #e0e0e0;
    border-radius: 8px;
  }
  @media (max-width: 768px) {
    .pdf-frame {
      height: 500px;
    }
  }
</style>

<div class="container pt-50 pb-60" style="padding-top: 50px; padding-bottom: 60px;">
  <div class="row mb-4">
    <div class="col-lg-12 text-center">
      <div class="section-title">
        <h5 style="color: #fbbc00; font-weight: 600;"><i class="fa fa-newspaper-o me-2"></i> Monthly Publication</h5>
        <h2 style="color: #122051; font-weight: 700;">Our Newsletter</h2>
        <p class="mt-2 text-muted">
          Read our monthly newsletters to stay updated with school activities, events, student achievements, and notices!
        </p>
      </div>
    </div>
  </div>

  <div class="row">
    <!-- Main PDF Content (Left Area) -->
    <div class="col-lg-8 col-xl-8 mb-4">
      <div class="pdf-viewer-container">
        <?php if (!empty($active_newsletter)): ?>
          <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center pb-3 mb-3 border-bottom" style="display: flex; justify-content: space-between; align-items: center; border-bottom: 1px solid #eee; padding-bottom: 15px; margin-bottom: 15px;">
            <div>
              <h3 class="mb-1" style="color: #122051; font-weight: 700; margin: 0;">
                <?= html_escape($active_newsletter['title']); ?>
              </h3>
              <span class="text-muted"><i class="fa fa-calendar me-1"></i> Edition: <?= html_escape($active_newsletter['month'] . ' ' . $active_newsletter['year']); ?></span>
            </div>
            <div class="mt-2 mt-md-0">
              <a href="<?= base_url($active_newsletter['pdf_file']); ?>" target="_blank" class="btn btn-custom btn-sm" style="background-color: #122051; border-color: #122051; color: #fff; border-radius: 20px; padding: 8px 20px; text-decoration: none; display: inline-block;">
                <i class="fa fa-download me-1"></i> Download PDF
              </a>
            </div>
          </div>

          <div class="embed-responsive">
            <iframe class="pdf-frame" src="<?= base_url($active_newsletter['pdf_file']); ?>#toolbar=1" type="application/pdf">
              <p>Your browser does not support inline PDF viewing. <a href="<?= base_url($active_newsletter['pdf_file']); ?>" target="_blank">Click here to download the newsletter PDF.</a></p>
            </iframe>
          </div>
        <?php else: ?>
          <div class="text-center py-5" style="text-align: center; padding: 40px 0;">
            <i class="fa fa-file-pdf-o fa-4x text-muted mb-3" style="font-size: 4em; color: #ccc;"></i>
            <h4>No Newsletter Available</h4>
            <p class="text-muted">No monthly newsletter PDFs have been uploaded yet. Please check back soon!</p>
          </div>
        <?php endif; ?>
      </div>
    </div>

    <!-- Right Sidebar (Other Months) -->
    <div class="col-lg-4 col-xl-4 mb-4">
      <div class="newsletter-sidebar">
        <h4 class="newsletter-sidebar-title"><i class="fa fa-archive me-2"></i> All Monthly Newsletters</h4>
        
        <?php if (!empty($all_newsletters)): ?>
          <ul class="newsletter-list">
            <?php foreach ($all_newsletters as $nl): ?>
              <?php 
                $is_active = (!empty($active_newsletter) && $active_newsletter['id'] == $nl['id']);
              ?>
              <li class="newsletter-list-item">
                <a href="<?= base_url('newsletter/' . $nl['id']); ?>" class="newsletter-link <?= $is_active ? 'active' : ''; ?>">
                  <div>
                    <i class="fa fa-file-pdf-o me-2"></i>
                    <span><?= html_escape($nl['month'] . ' ' . $nl['year']); ?></span>
                  </div>
                  <?php if ($is_active): ?>
                    <span class="badge-active">Viewing Now</span>
                  <?php else: ?>
                    <i class="fa fa-chevron-right text-muted"></i>
                  <?php endif; ?>
                </a>
              </li>
            <?php endforeach; ?>
          </ul>
        <?php else: ?>
          <p class="text-muted text-center py-3">No archived newsletters found.</p>
        <?php endif; ?>
      </div>
    </div>
  </div>
</div>
