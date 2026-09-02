<div class="row">
   <div class="col-12">
      <div class="card">
         <div class="card-header">
            <h4 class="card-title">Add Monthly Newsletter PDF</h4>
         </div>
         <div class="card-body">
            <?php echo form_open('admin/newsletter-pdf/add_post', ['class' => 'add-ajax-redirect-image-form', 'enctype' => 'multipart/form-data', 'onsubmit' => 'return checkForm(this);' ]);?>
            <div class="row">
               <div class="col-12 col-sm-6 mb-1">
                  <label class="form-label">Title <span class="required">*</span></label>
                  <input type="text" class="form-control" name="title" placeholder="e.g. August 2026 Edition" required>
               </div>
               <div class="col-12 col-sm-6 mb-1">
                  <label class="form-label">Select Branch</label>
                  <select class="form-select" name="branch_id">
                     <option value="">All Branches</option>
                     <?php if (!empty($branches)): ?>
                        <?php foreach ($branches as $b): ?>
                           <option value="<?= $b['id']; ?>"><?= html_escape($b['name']); ?></option>
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
                     $current_month = date('F');
                     foreach ($months as $m) {
                         $selected = ($m == $current_month) ? 'selected' : '';
                         echo "<option value='$m' $selected>$m</option>";
                     }
                     ?>
                  </select>
               </div>
               <div class="col-12 col-sm-3 mb-1">
                  <label class="form-label">Year <span class="required">*</span></label>
                  <input type="number" class="form-control" name="year" value="<?= date('Y');?>" required>
               </div>
               <div class="col-12 col-sm-6 mb-1">
                  <label class="form-label">Upload PDF File <span class="required">*</span></label>
                  <input type="file" class="form-control" name="pdf_file" accept="application/pdf" required>
               </div>
               <div class="col-12 col-sm-6 mb-1">
                  <label class="form-label">Status <span class="required">*</span></label>
                  <select class="form-select" name="status" required>
                     <option value="1">Active</option>
                     <option value="0">Inactive</option>
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
