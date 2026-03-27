<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-body py-1 my-0">
        <?php echo form_open('admin/seo-curriculums/add_post', ['class' => 'add-ajax-editor-image-form', 'enctype' => 'multipart/form-data', 'onsubmit' => 'return checkForm(this);']); ?>
        <div class="row">
          
          <div class="col-12 col-md-6 mb-1">
            <label class="form-label">Curriculum Name<span class="required">*</span></label>
            <input type="text" class="form-control" name="name" placeholder="e.g. Nursery, Montessori" required>
            <small class="text-muted">The slug will be automatically generated from the name.</small>
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
