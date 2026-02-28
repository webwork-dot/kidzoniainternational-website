<script src="//cdn.ckeditor.com/4.13.0/standard/ckeditor.js"></script>
<div class="row">
   <div class="col-12">
      <div class="card">
         <div class="card-body py-1 my-0">
            <?php echo form_open('admin/digital_news/edit_post/'.$id, ['class' => 'add-ajax-editor-image-form', 'enctype' => 'multipart/form-data', 'onsubmit' => 'return checkForm(this);' ]);?>
            <div class="row">
               <div class="col-12 col-sm-4 mb-1">
                  <label class="form-label">Name <span class="required">*</span></label>
                  <input type="text" class="form-control" name="name" placeholder="Name" value="<?php echo $data['name'];?>" required>
               </div>
               <div class="col-12 col-sm-4 mb-1">
                  <label class="form-label">Date <span class="required">*</span></label>
                  <input type="date" class="form-control flatpickr-basic" name="date" placeholder="YYYY-MM-DD" value="<?php echo date('Y-m-d',strtotime($data['date']));?>" required>
               </div>
               <div class="col-12 col-sm-4 mb-1">
                  <label class="form-label">Status <span class="required">*</span></label>
                  <select class="form-select" name="status" required>
                     <option value="1" <?php echo ($data['status'] == 1) ? 'selected':''; ?>>Active</option>
                     <option value="0" <?php echo ($data['status'] == 0) ? 'selected':''; ?>>Inactive</option>
                  </select>
               </div>
               <div class="col-12 col-md-4 mb-1">
                  <label class="form-label">Upload Image (1200x800)</label>
                  <input type="file" class="form-control" name="image_file" placeholder="Upload Image" accept="image/*">
               </div>
                <div class="col-12 col-sm-4 mb-1">
                  <label class="form-label">Alt Tag</label>
                  <input type="text" class="form-control" name="alt" value="<?php echo $data['alt'];?>" placeholder="Image Alt Tag">
               </div>
               <?php if($data['image']!='') { ?>
               <div class="col-12 col-sm-4 mb-1 mt-2">
                  <img class="me-1 mt-2 rounded" src="<?php echo main_url().$data['image'];?>" height="127"/>
               </div>
               <?php } ?>
               <div class="col-12 col-sm-12 mb-1">
                  <label class="form-label">URL <span class="required">*</span></label>
                  <input type="text" class="form-control" name="url" placeholder="URL" value="<?php echo $data['url'];?>">
               </div>
               
               <div class="col-12 col-sm-4 mb-1">
                  <label class="form-label">Meta Title</label>
                  <input type="text" class="form-control" name="meta_title" placeholder="Meta Title" value="<?php echo $data['meta_title'];?>">
               </div>
               <div class="col-12 col-sm-4 mb-1">
                  <label class="form-label">Meta Keyword</label>
                  <input type="text" class="form-control" name="meta_keyword" placeholder="Meta Keyword" value="<?php echo $data['meta_keyword'];?>">
               </div>
               <div class="col-12 col-sm-8 mb-1">
                  <label class="form-label">Meta Description</label>
                  <textarea class="form-control" name="meta_description" placeholder="Meta Description"><?php echo $data['meta_description'];?></textarea>
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
    $(function () {
        CKEDITOR.replace('editor1');
    })
</script>