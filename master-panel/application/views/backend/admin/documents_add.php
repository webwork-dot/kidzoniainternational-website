<div class="row">
   <div class="col-12">
      <div class="card">
         <div class="card-body py-1 my-0">
            <?php echo form_open('admin/documents/add_post', ['class' => 'add-ajax-editor-image-form', 'enctype' => 'multipart/form-data', 'onsubmit' => 'return checkForm(this);' ]);?>
            <div class="row">

               <div class="col-12 col-sm-6 mb-1">
                  <label class="form-label">Title <span class="required">*</span></label>
                  <input type="text" class="form-control" name="title" placeholder="Enter Document Title" required>
               </div>

               <div class="col-12 col-sm-6 mb-1">
                  <label class="form-label">Display Order <span class="required">*</span></label>
                  <input type="number" class="form-control" name="display_order" value="0" min="0" placeholder="Enter Order" required>
               </div>

               <div class="col-12 col-sm-6 mb-1">
                  <label class="form-label">Document File (PDF) <span class="required">*</span></label>
                  <input type="file" class="form-control" name="file" accept=".pdf,.PDF" required>
               </div>

               <div class="col-12 col-sm-6 mb-1">
                  <label class="form-label">Status <span class="required">*</span></label>
                  <select class="form-control" name="status" required>
                     <option value="1" selected>Active</option>
                     <option value="0">Inactive</option>
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
