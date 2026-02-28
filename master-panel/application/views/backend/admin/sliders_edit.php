<div class="row">
   <div class="col-12">
      <div class="card">
         <div class="card-body py-1 my-0">
            <?php echo form_open('admin/sliders/edit_post/'.$id, ['class' => 'add-ajax-redirect-image-form', 'enctype' => 'multipart/form-data', 'onsubmit' => 'return checkForm(this);' ]);?>
            <div class="row">
                
               <div class="col-12 col-md-4 mb-1">
                  <label class="form-label">Upload Image (750x750) </label>
                  <input type="file" class="form-control" name="image_file" placeholder="Upload Image" accept="image/*">
                  <?php if($data['file']!=''){?>
                  <img class="me-1 mt-2 rounded" src="<?php echo main_url().$data['file'];?>" height="123"/>
                  <?php } else { ?>
                  <p class="mt-2">Not Found Image</p>
                  <?php } ?>
               </div>
               
               <div class="col-12 col-sm-4 mb-1">
                  <label class="form-label">URL *</label>
                  <input type="text" class="form-control" name="url" placeholder="Enter URL" value="<?php echo $data['url'];?>" required>
               </div>
               
               <div class="col-12 col-sm-4 mb-1">
                  <label class="form-label">Status *</label>
                  <select class=" form-select" name="status" required>
                     <option value="1" <?php echo ($data['status'] == '1') ? 'selected':'';?>>Active</option>
                     <option value="0" <?php echo ($data['status'] == '0') ? 'selected':'';?>>Inactive</option>
                  </select>
               </div>
               
            </div>
               <div class="row">
                  <div class="col-12">
                     <button type="submit" class="dt-button add-new btn btn-primary waves-effect waves-float waves-light mt-1 me-1 btnf btn_verify" name="btn_verify"><?php echo get_phrase('update'); ?></button>
                  </div>
               </div>
            <?php echo form_close(); ?>
         </div>
      </div>
   </div>
</div>