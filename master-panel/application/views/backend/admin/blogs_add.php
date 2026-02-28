<div class="row">
   <div class="col-12">
      <div class="card">
         <div class="card-body py-1 my-0">
            <?php echo form_open('admin/blogs/add_post', ['class' => 'add-ajax-editor-image-form', 'enctype' => 'multipart/form-data', 'onsubmit' => 'return checkForm(this);' ]);?>
            <div class="row">
               <div class="col-12 col-sm-4 mb-1">
                  <label class="form-label">Name <span class="required">*</span></label>
                  <input type="text" class="form-control" name="name" placeholder="Name" required>
               </div>
               <div class="col-12 col-sm-4 mb-1">
                  <label class="form-label">Date <span class="required">*</span></label>
                  <input type="date" class="form-control flatpickr-basic" name="date" placeholder="YYYY-MM-DD" value="<?= date('Y-m-d');?>" required>
               </div>
               <div class="col-12 col-sm-4 mb-1">
                  <label class="form-label">Author <span class="required">*</span></label>
                  <input type="text" class="form-control" name="author" placeholder="Author" required>
               </div>
               <div class="col-12 col-sm-4 mb-1">
                  <label class="form-label">Status <span class="required">*</span></label>
                  <select class="form-select" name="status" required>
                     <option value="1">Active</option>
                     <option value="0">Inactive</option>
                  </select>
               </div>
               <div class="col-12 col-md-4 mb-1">
                  <label class="form-label">Upload Image (1200x800) <span class="required">*</span></label>
                  <input type="file" class="form-control" name="image_file" placeholder="Upload Image" accept="image/*" required>
               </div>
                <div class="col-12 col-sm-4 mb-1">
                  <label class="form-label">Alt Tag</label>
                  <input type="text" class="form-control" name="alt" placeholder="Image Alt Tag">
               </div>
               <div class="col-12 col-sm-12 mb-1">
                  <label class="form-label">Description <span class="required">*</span></label>
                  <textarea class="form-control" id="editor1" name="description" rows="" required></textarea>
               </div>
               
               <div class="col-12 col-sm-4 mb-1">
                  <label class="form-label">Meta Title</label>
                  <input type="text" class="form-control" name="meta_title" placeholder="Meta Title">
               </div>
               <div class="col-12 col-sm-4 mb-1">
                  <label class="form-label">Meta Keyword</label>
                  <input type="text" class="form-control" name="meta_keyword" placeholder="Meta Keyword">
               </div>
               <div class="col-12 col-sm-8 mb-1">
                  <label class="form-label">Meta Description</label>
                  <textarea class="form-control" name="meta_description" placeholder="Meta Description"></textarea>
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