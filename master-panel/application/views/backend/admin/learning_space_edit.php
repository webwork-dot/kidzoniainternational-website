<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-body py-1 my-0">
        <?php echo form_open('admin/learning_space/edit_post/' . $id, ['class' => 'add-ajax-editor-image-form', 'enctype' => 'multipart/form-data', 'onsubmit' => 'return checkForm(this);']); ?>
        <div class="row">
          <div class="col-12 col-md-4 mb-1">
            <label class="form-label">Title<span class="required">*</span></label>
            <input type="text" class="form-control" name="title" placeholder="Title" value="<?php echo $data['title']; ?>"  required>
          </div>
          
          <div class="col-12 col-md-4 mb-1">
            <label class="form-label">Upload Image</label>
            <input type="file" class="form-control" name="image" placeholder="Upload Image" accept="image/*">
            <?php if ($data['image'] != '') { ?>
              <img class="me-1 mt-2 rounded" src="<?php echo main_url() . $data['image']; ?>" height="123" />
            <?php } else { ?>
              <p class="mt-2">Not Found Image</p>
            <?php } ?>
          </div>
          
        <div class="col-12 col-md-4 mb-1">
            <label class="form-label">Alt Image Tag<span class="required">*</span></label>
            <input type="text" class="form-control" name="alt1" placeholder="Alt Image Tag" value="<?php echo $data['alt1']; ?>" required>
          </div>
          
          <div class="col-12 col-md-4 mb-1">
            <label class="form-label">Upload Pop Image</label>
            <input type="file" class="form-control" name="heading" placeholder="Upload Image" accept="image/*">
            <?php if ($data['heading'] != '') { ?>
              <img class="me-1 mt-2 rounded" src="<?php echo main_url() . $data['heading']; ?>" height="123" />
            <?php } else { ?>
              <p class="mt-2">Not Found Image</p>
            <?php } ?>
          </div>
          
        <div class="col-12 col-md-4 mb-1">
            <label class="form-label">Alt Pop Image Tag<span class="required">*</span></label>
            <input type="text" class="form-control" name="alt2" placeholder="Alt Pop Image Tag" value="<?php echo $data['alt2']; ?>" required>
          </div>

          <div class="col-md-12 mb-2">
            <div class="form-group">
              <h5 class="mb-0">Content</h5>
              <textarea class="form-control" id="editor1" name="description" rows="" ><?php echo $data['description']; ?></textarea>
            </div>
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


<script>
  $(function() {
    CKEDITOR.replace('editor1');
  })
</script>