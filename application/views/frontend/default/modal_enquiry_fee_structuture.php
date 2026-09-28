<button type="button" class="btn close rounded-circle p-0" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
<div class="row mt-0">
   <div class="col-lg-12">
      <div class="col-md-12 h-enquiry no-shadow p-3">
          <h5 class="text-center">Download Brochure</h5>
         <form action="<?php echo base_url();?>check_admission_enquiry" class="add-ajax-modal-form mt-10" onsubmit="return checkMForm(this);" method="POST">
            <input type="hidden" name="form_type" value="fee_structure">
            <div class="row">
               <div class="col-md-12">
                  <div class="form-group mb-0">
                     <label>Admission For Class<i class="text-dander">*</i></label>
                     <select class="form-control" name="class_id" required>
                        <option value="">Select Class</option>
                        <?php foreach ($class_list as $class) { ?>
                          <option value="<?php echo $class['id']; ?>"><?php echo $class['name']; ?></option>
                        <?php } ?>
                     </select>
                     <span class="invalid-feedback"></span>
                  </div>
               </div>
               <div class="col-md-12">
                  <div class="form-group mb-0">
                     <label>Students Name<i class="text-dander">*</i></label>
                     <input type="text" class="form-control" name="child_name" placeholder="Child Name" required>
                     <span class="invalid-feedback"></span>
                  </div>
               </div>
               <div class="col-md-12">
                  <div class="form-group mb-0">
                     <label>Parent Name<i class="text-dander">*</i></label>
                     <input type="text" class="form-control" name="parent_name" placeholder="Parent Name" required>
                     <span class="invalid-feedback"></span>
                  </div>
               </div>
               <div class="col-md-12">
                  <div class="form-group mb-0">
                     <label>Phone<i class="text-dander">*</i></label>
                     <input type="tel" class="signup-form-control" name="phone" required>
                     <span class="invalid-feedback"></span>
                  </div>
               </div>
               <div class="col-md-12">
                  <div class="form-group mb-0">
                     <label>Email</label>
                     <input type="email" class="form-control" name="email" placeholder="Email">
                     <span class="invalid-feedback"></span>
                  </div>
               </div>
               <div class="col-md-12">
                  <div class="form-group mb-0">
                     <label>Branch / Location<i class="text-dander">*</i></label>
                     <select class="form-control" name="branch_id" required>
                        <option value="">Select Branch</option>
                        <?php if (!empty($branches)) { foreach ($branches->result_array() as $branch) { ?>
                          <option value="<?php echo $branch['id']; ?>"><?php echo $branch['name']; ?></option>
                        <?php } } ?>
                     </select>
                     <span class="invalid-feedback"></span>
                  </div>
               </div>
               <input type="hidden" name="know_about_us" value="Website">
               <div class="col-md-12 mt-2">
                  <div class="wpforms-submit-container pt-0">
                   <button type="submit" class="btn btn-enquiry wpforms-submit btn_merify btn_verify" name="btn_merify">Submit</button>
                </div>
               </div>
            </div>
         </form>
      </div>
   </div>
</div>
   
 <script>  
  // Initialize intl-tel-input when modal loads
  if (typeof initializeIntlTelInput === 'function') {
      initializeIntlTelInput();
  }
  
  function checkMForm(form){
   form.btn_merify.disabled = true; 
	jQuery('.btn_merify').attr("disabled", true);
	jQuery('.btn_merify').html('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span><span class="ms-25 align-middle">Loading...</span>');
    return true;
  }   

  jQuery('.add-ajax-modal-form').submit(function(e) {
        e.preventDefault();  
          jQuery(".loader").show(); 
          jQuery('.btn_merify').attr("disabled", true)
          jQuery('.btn_merify').html('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span><span class="ms-25 align-middle">Loading...</span>');
          var url = jQuery(this).attr('action');
   
         // Get form
        var form = jQuery('.add-ajax-modal-form')[0];

        // Get country code from intl-tel-input and store in separate field
        var phoneInput = form.querySelector('input[name="phone"]');
        if (phoneInput && phoneInput.itiInstance) {
            var countryData = phoneInput.itiInstance.getSelectedCountryData();
            if (countryData && countryData.dialCode) {
                var countryCode = '+' + countryData.dialCode;
                var existingField = form.querySelector('input[name="phone_country_code"]');
                if (existingField) existingField.remove();
                var hiddenInput = document.createElement('input');
                hiddenInput.type = 'hidden';
                hiddenInput.name = 'phone_country_code';
                hiddenInput.value = countryCode;
                form.appendChild(hiddenInput);
            }
        }

        // FormData object 
         var data = new FormData(form);
        
        jQuery.ajax({
            type: 'POST',
            url: url,
            async: true,
            dataType: 'json',
            data: data,     
            processData: false,
            contentType: false,
            success: function(res) {
                if (res.status == '200' || res.status == 200) { 
                  jQuery(".loader").fadeOut("slow"); 
                  if (res.download_url) window.open(res.download_url, '_blank');
                  if (res.url) window.location.href = res.url;
                }
                else {   
                    jQuery.each(res.errors, function(key, value){
                        jQuery('[name="'+key+'"]').addClass('is-invalid');
                        jQuery('[name="'+key+'"]').next().html(value); 
                        if(value == ""){
                            jQuery('[name="'+key+'"]').removeClass('is-invalid');
                            jQuery('[name="'+key+'"]').addClass('is-valid');
                        }
                    });  
					 
                   Swal.fire({
            			title: "Error!",
            			text: res.message ,
            			icon: "error",
            			customClass: {
            				confirmButton: "btn btn-primary"
            			},
            			buttonsStyling: !1
            		})
                    jQuery('.btn_merify').html('Submit');
                    jQuery('.btn_merify').attr("disabled", false);
                    jQuery(".loader").fadeOut("slow"); 
                }
            }
        });
        return false;
     });

</script>