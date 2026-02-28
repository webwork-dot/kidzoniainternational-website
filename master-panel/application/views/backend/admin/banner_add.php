<div class="row">
   <div class="col-12">
      <div class="card">
         <div class="card-body py-1 my-0">
            <?php echo form_open('admin/banner/add_post', ['class' => 'add-ajax-redirect-image-form', 'enctype' => 'multipart/form-data', 'onsubmit' => 'return checkForm(this);' ]);?>
            <div class="row">
               <div class="col-12 col-md-4 mb-1">
                  <label class="form-label">Upload Video <span class="required">*</span></label>
                  <input type="file" class="form-control" name="video" accept="video/*" > 
           
               </div>
                  <div class="col-12 col-md-4 mb-1">
                 <input type="file" class="form-control" name="image" accept="image/*" > 
                 <img src="<?php echo main_url() . $data['image'];?>" width="100" height="100"> 
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