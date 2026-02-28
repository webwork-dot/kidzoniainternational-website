<style>

    .custom-pdf {
        padding: 4px;
        font-size: 12px;
        border-radius: 5px;
        color: red;
        border: 1px dashed red;
    }
    
    .custom-pdf:hover {
        color: red;
    }
    
</style>

<div class="row">
   <div class="col-12">
      <div class="card">
         <div class="card-body py-1 my-0">
            <?php echo form_open('admin/careers/edit_post/' . $id, ['class' => 'add-ajax-editor-image-form', 'enctype' => 'multipart/form-data', 'onsubmit' => 'return checkForm(this);' ]);?>
            <div class="row">
                
               <div class="col-12 col-sm-6 mb-1">
                  <label class="form-label">Title <span class="required">*</span></label>
                  <input type="text" class="form-control" name="title" value="<?php echo $data['title'];?>" placeholder="Enter Title" required>
               </div>
               
               <div class="col-12 col-sm-6 mb-1">
                  <label class="form-label">Experience <span class="required">*</span></label>
                  <input type="text" class="form-control" name="experience" value="<?php echo $data['experience'];?>" placeholder="Enter Experience" required>
               </div>
               
                <div class="col-12 col-sm-6 mb-1">
                  <label class="form-label">PDF <span class="required">*</span></label>
                  <input type="file" class="form-control" name="file" accept=".pdf" style="margin-bottom: 10px;">
                  <?php if($data['pdf'] != "" || $data['pdf'] != NULL) {?>
                     <a class='custom-pdf' href='<?php echo main_url() . $data['pdf'];?>' target='_blank'>View Pdf</a>
                  <?php } ?>
                </div>

               
               <div class="col-12 col-sm-12 mb-1">
                  <label class="form-label">Description <span class="required">*</span></label>
                  <textarea class="form-control" id="editor1" name="description" rows="" required><?php echo $data['description'];?></textarea>
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