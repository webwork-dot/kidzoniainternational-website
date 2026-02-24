<button type="button" class="btn close rounded-circle p-0" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
<div class="row mt-0">
   <div class="col-lg-12">
      <div class="col-md-12 h-enquiry">
          <h5 class="text-center">IXplore</h5>
         <form action="<?php echo base_url();?>check_admission_enquiry" class="add-ajax-modal-form mt-10" onsubmit="return checkMForm(this);" method="POST">
            <input type="hidden" name="form_type" value="youtube_enquiry">
            <div class="row">
               <div class="col-md-12">
                  <div class="form-group mb-2">
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
                  <div class="form-group mb-2">
                     <label>Location<i class="text-dander">*</i></label>
                     <select class="form-control" name="location" required>
                        <option value="">Select Location</option>
                        <?php foreach ($branches as $branch) { ?>
                          <option value="<?php echo $branch['name']; ?>"><?php echo $branch['name']; ?></option>
                        <?php } ?>
                     </select>
                     <span class="invalid-feedback"></span>
                  </div>
               </div>
               <div class="col-md-12">
                  <div class="form-group mb-2">
                     <label>Students Name<i class="text-dander">*</i></label>
                     <input type="text" class="form-control" name="child_name" placeholder="Child Name" required>
                     <span class="invalid-feedback"></span>
                  </div>
               </div>
               <div class="col-md-12">
                  <div class="form-group mb-2">
                     <label>Parent Name<i class="text-dander">*</i></label>
                     <input type="text" class="form-control" name="parent_name" placeholder="Parent Name" required>
                     <span class="invalid-feedback"></span>
                  </div>
               </div>
               <div class="col-md-12">
                  <div class="form-group mb-2">
                     <label>Phone<i class="text-dander">*</i></label>
                     <input type="tel" class="signup-form-control form-control" name="phone" placeholder="Phone" required>
                     <span class="invalid-feedback"></span>
                  </div>
               </div>
               <div class="col-md-12">
                  <div class="form-group mb-2">
                     <label>Email</label>
                     <input type="email" class="form-control" name="email" placeholder="Email">
                     <span class="invalid-feedback"></span>
                  </div>
               </div>
               <div class="col-md-12">
                  <div class="form-group mb-2">
                     <label>How did you come to know about us ?<i class="text-dander">*</i></label>
                     <select class="form-control" name="know_about_us" required>
                        <option value="">Select Source</option>
                        <option value="Banner">Banner</option>
                        <option value="Community Event">Community Event</option>
                        <option value="Facebook">Facebook</option>
                        <option value="Field Data">Field Data</option>
                        <option value="Flyers">Flyers</option>
                        <option value="Friends">Friends</option>
                        <option value="Google">Google</option>
                        <option value="Instagram">Instagram</option>
                        <option value="No parking Board">No parking Board</option>
                        <option value="Parent Referral">Parent Referral</option>
                        <option value="Pole Kiosk">Pole Kiosk</option>
                        <option value="Poster Ads">Poster Ads</option>
                        <option value="Previous Student">Previous Student</option>
                        <option value="Pro Eves">Pro Eves</option>
                        <option value="School Hoarding">School Hoarding</option>
                        <option value="Sibling">Sibling</option>
                        <option value="Staff Child">Staff Child</option>
                        <option value="Staff Referral">Staff Referral</option>
                        <option value="Website">Website</option>
                        <option value="WhatsApp">WhatsApp</option>
                     </select>
                     <span class="invalid-feedback"></span>
                  </div>
               </div>
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
	$('.btn_merify').attr("disabled", true);
	$('.btn_merify').html('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span><span class="ms-25 align-middle">Loading...</span>');
    return true;
  } 
  $('.add-ajax-modal-form').submit(function(e) {
        e.preventDefault();  
          $(".loader").show(); 
          $('.btn_merify').attr("disabled", true)
          $('.btn_merify').html('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span><span class="ms-25 align-middle">Loading...</span>');
          var url = $(this).attr('action');
   
         // Get form - use the form that triggered the submit
        var form = this;

        // Extract country code before form submission
        if (typeof extractCountryCode === 'function') {
            extractCountryCode(form);
        } else {
            // Fallback: Get country code from intl-tel-input and store in separate field
            var phoneInput = form.querySelector('input[name="phone"]');
            if (phoneInput) {
                var itiInstance = phoneInput.itiInstance || window.intlTelInput.getInstance(phoneInput);
                if (itiInstance) {
                    var countryData = itiInstance.getSelectedCountryData();
                    if (countryData && countryData.dialCode) {
                        var countryCode = '+' + countryData.dialCode;
                        
                        // Remove existing country code field if any
                        var existingField = form.querySelector('input[name="phone_country_code"]');
                        if (existingField) {
                            existingField.remove();
                        }
                        // Create hidden input with country code only
                        var hiddenInput = document.createElement('input');
                        hiddenInput.type = 'hidden';
                        hiddenInput.name = 'phone_country_code';
                        hiddenInput.value = countryCode;
                        form.appendChild(hiddenInput);
                    }
                }
            }
        }

        // FormData object 
         var data = new FormData(form);
        
        $.ajax({
            type: 'POST',
            url: url,
            async: true,
            dataType: 'json',
            data: data,     
            processData: false,
            contentType: false,
            success: function(res) {
                if (res.status == '200' || res.status == 200) { 
                  $(".loader").fadeOut("slow"); 
                  if (res.url) window.location.href = res.url;
                }
                else {   
                    $.each(res.errors, function(key, value){
                        $('[name="'+key+'"]').addClass('is-invalid'); //select parent twice to select div form-group class and add has-error class
                        $('[name="'+key+'"]').next().html(value); //select span help-block class set text error string
                        if(value == ""){
                            $('[name="'+key+'"]').removeClass('is-invalid');
                            $('[name="'+key+'"]').addClass('is-valid');
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
                    $('.btn_merify').html('Submit');
                    $('.btn_merify').attr("disabled", false);
                    $(".loader").fadeOut("slow"); 
                }
            }
        });
        return false;
    });
</script>