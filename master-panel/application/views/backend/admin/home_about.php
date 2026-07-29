<style>

.btlr-0 {
    border-top-left-radius: 0px;
}

</style>
 
<?php include('_navigation_home.php'); ?>

<div class="row ">
  <div class="col-12">
    <div class="card btlr-0" style="border-top-left-radius: 0 !important;">
      <div class="card-body py-1 my-0">
        <?php echo form_open('admin/home_about/update/1', ['class' => 'add-ajax-editor-image-form', 'enctype' => 'multipart/form-data', 'onsubmit' => 'return checkForm(this);']); ?>
        <div class="row mt-1">
            <div class="col-4 col-sm-4 mb-2">
                <div class="form-group">
                  <label class="control-label">Title</label>
                  <input type="text" class="form-control" name="title" value="<?php echo $data['title']; ?>" placeholder="Title">
                </div>
              </div>
          <div class="col-64 col-sm-4 mb-2">
            <div class="form-group">
              <label class="control-label">Image <span class="required" style="font-size: 12px;">*</span></label>
              <input type="file" class="form-control" name="image" accept="image/*">
              <?php if (!empty($data['image'])) : ?>
                <a href="<?php echo main_url() . $data['image']; ?>" target="_blank">
                  <img class="mt-1" src="<?php echo main_url() . $data['image']; ?>" height="60" width="60">
                </a>
              <?php endif; ?>
            </div>
          </div>
          
          <div class="col-4 col-sm-4 mb-2">
            <div class="form-group">
              <label class="control-label">Alt</label>
              <input type="text" class="form-control" name="alt" value="<?php echo $data['alt']; ?>" placeholder="Alt Tag">
            </div>
          </div>
          
          <div class="col-md-12 mb-2">
            <div class="form-group">
              <h5 class="mb-0">Content</h5>
              <textarea class="form-control" id="editor1" name="description" rows=""><?php echo $data['description']; ?></textarea>
            </div>
          </div>
          <div class="col-12">
            <button type="submit" class="dt-button add-new btn btn-primary waves-effect waves-float waves-light mb-10 me-1 btnf btn_verify" name="btn_verify"><?php echo get_phrase('update'); ?></button>
          </div>
        </div>
        <?php echo form_close(); ?>
      </div>
    </div>
  </div>
</div>
</div>
<script>
  $(function() {
    CKEDITOR.replace('editor1');
  })
</script>