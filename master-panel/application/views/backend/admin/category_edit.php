<script src="//cdn.ckeditor.com/4.13.0/standard/ckeditor.js"></script>
<div class="row">
   <div class="col-12">
      <div class="card">
         <div class="card-body py-1 my-0">
            <?php echo form_open('admin/category/edit_post/' . $data['id'], ['class' => 'add-ajax-editor-image-form', 'enctype' => 'multipart/form-data', 'onsubmit' => 'return checkForm(this);' ]);?>
            <div class="row">
                
               <div class="col-12 col-sm-4 mb-1">
                  <label class="form-label">Category Name <span class="required">*</span></label>
                  <input type="text" class="form-control" name="name" placeholder="Name" value="<?php echo $data['name']; ?>" autocomplete="off" required>
               </div>

               <div class="col-12 col-sm-4 mb-1">
                  <label class="form-label">Status <span class="required">*</span></label>
                  <select class="form-select" name="status" required>
                     <option value="1" <?php echo ($data['status'] == '1')? "selected":""; ?>>Active</option>
                     <option value="0" <?php echo ($data['status'] == '0')? "selected":""; ?>>Inactive</option>
                  </select>
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
