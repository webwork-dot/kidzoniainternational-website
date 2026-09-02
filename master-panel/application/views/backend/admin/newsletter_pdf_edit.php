<div class="row">
   <div class="col-12">
      <div class="card">
         <div class="card-header">
            <h4 class="card-title">Edit Monthly Newsletter PDF</h4>
         </div>
         <div class="card-body">
            <?php echo form_open('admin/newsletter-pdf/edit_post/' . $data['id'], ['class' => 'add-ajax-redirect-image-form', 'enctype' => 'multipart/form-data', 'onsubmit' => 'return checkForm(this);' ]);?>
            <div class="row">
                <div class="col-12 col-sm-6 mb-1">
                   <label class="form-label">Title <span class="required">*</span></label>
                   <input type="text" class="form-control" name="title" value="<?= html_escape($data['title']); ?>" required>
                </div>
                <div class="col-12 col-sm-6 mb-1">
                   <label class="form-label">Select Branch</label>
                   <select class="form-select" name="branch_id">
                      <option value="" <?= (empty($data['branch_id'])) ? 'selected' : ''; ?>>All Branches</option>
                      <?php if (!empty($branches)): ?>
                         <?php foreach ($branches as $b): ?>
                            <option value="<?= $b['id']; ?>" <?= (!empty($data['branch_id']) && $data['branch_id'] == $b['id']) ? 'selected' : ''; ?>><?= html_escape($b['name']); ?></option>
                         <?php endforeach; ?>
                      <?php endif; ?>
                   </select>
                </div>
               <div class="col-12 col-sm-3 mb-1">
                  <label class="form-label">Month <span class="required">*</span></label>
                  <select class="form-select" name="month" required>
                     <option value="">Select Month</option>
                     <?php 
                     $months = array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");
                     foreach ($months as $m) {
                         $selected = ($m == $data['month']) ? 'selected' : '';
                         echo "<option value='$m' $selected>$m</option>";
                     }
                     ?>
                  </select>
               </div>
               <div class="col-12 col-sm-3 mb-1">
                  <label class="form-label">Year <span class="required">*</span></label>
                  <input type="number" class="form-control" name="year" value="<?= html_escape($data['year']); ?>" required>
               </div>
               <div class="col-12 col-sm-6 mb-1">
                  <label class="form-label">Upload New PDF File (Leave empty to keep existing)</label>
                  <input type="file" class="form-control" name="pdf_file" accept="application/pdf">
                  <?php if (!empty($data['pdf_file'])): ?>
                     <small class="text-muted">Current file: <a href="<?= base_url('../' . $data['pdf_file']); ?>" target="_blank">View PDF</a></small>
                  <?php endif; ?>
               </div>
               <div class="col-12 col-sm-6 mb-1">
                  <label class="form-label">Status <span class="required">*</span></label>
                  <select class="form-select" name="status" required>
                     <option value="1" <?= ($data['status'] == 1) ? 'selected' : ''; ?>>Active</option>
                     <option value="0" <?= ($data['status'] == 0) ? 'selected' : ''; ?>>Inactive</option>
                  </select>
               </div>
            </div>
            
            <div class="row mt-1">
                <div class="col-12">
                    <button type="submit" class="dt-button add-new btn btn-primary waves-effect waves-float waves-light me-1 btnf btn_verify" name="btn_verify"><?php echo get_phrase('submit'); ?></button>
                    <a href="<?php echo site_url('admin/newsletter-pdf'); ?>" class="btn btn-outline-secondary">Cancel</a>
                </div>
            </div>
               
            <?php echo form_close(); ?>
         </div>
      </div>
   </div>
</div>
