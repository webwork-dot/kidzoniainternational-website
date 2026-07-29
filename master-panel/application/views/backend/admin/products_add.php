<script src="//cdn.ckeditor.com/4.13.0/standard/ckeditor.js"></script>
<div class="row">
   <div class="col-12">
      <div class="card">
         <div class="card-body py-1 my-0">
            <?php echo form_open('admin/products/add_post', ['class' => 'add-ajax-editor-image-form', 'enctype' => 'multipart/form-data', 'onsubmit' => 'return checkForm(this);' ]);?>
            <div class="row">
                
               <div class="col-12 col-sm-4 mb-1">
                  <label class="form-label">Name <span class="required">*</span></label>
                  <input type="text" class="form-control" name="name" placeholder="Name" required>
               </div>
               
               <div class="col-12 col-sm-4 mb-1">
                  <label class="form-label">Select Category <span class="required">*</span></label>
                  <select class="form-select select2" multiple name="category_id[]" data-placeholder="Select Category">
                     <?php foreach($categories as $cat){ ?>
                     <option value="<?php echo $cat['id']; ?>"><?php echo $cat['name']; ?></option>
                     <?php } ?>
                  </select>
               </div>
               
               <div class="col-12 col-sm-4 mb-1">
                  <label class="form-label">Status <span class="required">*</span></label>
                  <select class="form-select" name="status" required>
                     <option value="1">Active</option>
                     <option value="0">Inactive</option>
                  </select>
               </div>
               
               <div class="col-12 col-md-4 mb-1">
                  <label class="form-label">Upload Image (650x250) <span class="required">*</span></label>
                  <input type="file" class="form-control" name="image" placeholder="Upload Image" accept="image/*" required>
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

<script>
    $(function () {
        CKEDITOR.replace('editor1');
    })
</script>