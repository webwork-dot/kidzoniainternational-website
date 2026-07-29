<div class="row">
   <div class="col-12">
      <div class="card">
         <div class="card-body py-1 my-0">
            <?php echo form_open('admin/achievements/add_post', ['class' => 'add-ajax-redirect-image-form', 'enctype' => 'multipart/form-data', 'onsubmit' => 'return checkForm(this);' ]);?>
            <div class="row">
                
               <div class="col-12 col-sm-6 mb-1">
                  <label class="form-label">Name <span class="required">*</span></label>
                  <input type="text" class="form-control" name="name" placeholder="Name" required>
               </div>
               
               <div class="col-12 col-md-6 mb-1">
                  <label class="form-label">Upload Image (450 x 262)<span class="required">*</span></label>
                  <input type="file" class="form-control" name="image_file" placeholder="Upload Image" accept="image/*" required>
               </div>
               
                    <div class="col-12 col-sm-6 mb-1">
                      <label class="form-label">Alt Tag</label>
                      <input type="text" class="form-control" name="alt" placeholder="Image Alt Tag">
                   </div>
               
               <div class="col-12 mb-1">
                  <label class="form-label">Description <span class="required">*</span></label>
                  <textarea class="form-control" name="description" placeholder="Enter Description" required></textarea>
               </div>
               
            </div>
            
            <div class="row">
               <div class="col-12">
                  <button type="submit" class="dt-button add-new btn btn-primary waves-effect waves-float waves-light mt-1 me-1 btnf btn_verify" name="btn_verify"><?php echo get_phrase('submit'); ?></button>
               </div>
            </div>
            <?php echo form_close(); ?>
         </div>
      </div>
   </div>
</div>