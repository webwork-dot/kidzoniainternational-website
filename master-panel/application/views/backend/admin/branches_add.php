<script src="//cdn.ckeditor.com/4.13.0/standard/ckeditor.js"></script>
<div class="row">
   <div class="col-12">
      <div class="card">
         <div class="card-body py-1 my-0">
            <?php echo form_open('admin/branches/add_post', ['class' => 'add-ajax-editor-image-form', 'enctype' => 'multipart/form-data', 'onsubmit' => 'return checkForm(this);' ]);?>
            <div class="row">
 
               <div class="col-12 col-sm-4 mb-1">
                  <label class="form-label">Select City <span class="required">*</span></label>
                  <select class="form-select" name="city" required>
                     <option value="">Select City</option>
                     <option value="Pune">Pune</option>
                     <option value="Hyderabad">Hyderabad</option>
                     <option value="Mumbai">Mumbai</option>
                  </select>
               </div>
                
               <div class="col-12 col-sm-4 mb-1">
                  <label class="form-label">Branch Name <span class="required">*</span></label>
                  <input type="text" class="form-control" name="name" placeholder="Enter Branch Name" required>
               </div>
               
               <div class="col-12 col-sm-4 mb-1">
                  <label class="form-label">Email <span class="required">*</span></label>
                  <input type="email" class="form-control" name="email" placeholder="Enter Email" required>
               </div>
                
               <div class="col-12 col-sm-4 mb-1">
                  <label class="form-label">Mobile no. 1 <span class="required">*</span></label>
                  <input type="text" class="form-control" name="mobile_1" placeholder="Enter Mobile no." required>
               </div>
               
               <div class="col-12 col-sm-4 mb-1">
                  <label class="form-label">Mobile no. 2 </label>
                  <input type="text" class="form-control" name="mobile_2" placeholder="Enter Mobile no." >
               </div>
               
               <div class="col-12 col-sm-4 mb-1">
                  <label class="form-label">Location URL <span class="required">*</span></label>
                  <input type="text" class="form-control" name="location_url" placeholder="Enter Location" required>
               </div>
               
               <div class="col-12 col-sm-8 mb-1">
                  <label class="form-label">Address <span class="required">*</span></label>
                  <textarea class="form-control" name="address" placeholder="Enter Address" rows="5" required></textarea>
               </div>
               <div class="col-12 col-sm-4 mb-1">
                  <label class="form-label">Upload Image<span class="required">*</span></label>
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