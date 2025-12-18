<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-body py-1 my-0">
        <?php echo form_open('admin/our_teachers/add_post', ['class' => 'add-ajax-editor-image-form', 'enctype' => 'multipart/form-data', 'onsubmit' => 'return checkForm(this);']); ?>
        <div class="row">
          
          <div class="col-12 col-md-4 mb-1">
            <label class="form-label">Title<span class="required">*</span></label>
            <input type="text" class="form-control" name="title" placeholder="Title"  required>
          </div>
        
          <div class="col-12 col-md-4 mb-1">
            <label class="form-label">Upload Image<span class="required">*</span></label>
            <input type="file" class="form-control" name="image" placeholder="Upload Image" accept="image/*" required>
          </div>
          
          <div class="col-12 col-md-4 mb-1">
            <label class="form-label">Alt<span class="required">*</span></label>
            <input type="text" class="form-control" name="alt" placeholder="Alt Tag"  required>
          </div>

          <div class="col-md-12 mb-2">
            <div class="form-group">
              <h5 class="mb-0">Content</h5>
              <textarea class="form-control" id="editor1" name="description" rows=""></textarea>
            </div>
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
  $(function() {
    CKEDITOR.replace('editor1');
  })
</script>