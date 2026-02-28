<div class="row">
   <div class="col-12">
      <div class="card">
         <div class="card-body py-1 my-0">
            <?php echo form_open('admin/parents_testimonials/add_post', ['class' => 'add-ajax-redirect-image-form', 'enctype' => 'multipart/form-data', 'onsubmit' => 'return checkForm(this);' ]);?>
            <div class="row">
               <div class="col-12 col-sm-4 mb-1">
                  <label class="form-label">Select Branch <span class="required">*</span></label>
                  <select class="form-select" name="branch_id" required>
                     <option value="">Select Branch</option>
                     <?php foreach($branches as $branch){?>
                     <option value="<?php echo $branch['id'];?>"><?php echo $branch['name'];?></option>
                     <?php }?>
                  </select>
               </div>
               <div class="col-12 col-sm-4 mb-1">
                  <label class="form-label">Thumbnail (400 x 225)<span class="required">*</span></label>
                  <input type="file" class="form-control" name="image_file" placeholder="Upload Image" accept="image/*" required>
               </div>
               <div class="col-12 col-sm-4 mb-1">
                  <label class="form-label">Url <span class="required">*</span></label>
                  <input type="text" class="form-control" name="url" placeholder="Enter URL" required>
               </div>
            </div>
            <div class="row">
               <div class="col-12">
                  <button type="submit"
                     class="dt-button add-new btn btn-primary waves-effect waves-float waves-light mt-1 me-1 btnf btn_verify"
                     name="btn_verify"><?php echo get_phrase('submit'); ?></button>
               </div>
            </div>
            <?php echo form_close(); ?>
         </div>
      </div>
   </div>
</div>