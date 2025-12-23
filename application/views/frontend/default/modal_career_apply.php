 <script src="https://www.google.com/recaptcha/api.js?render=SITE_KEY"></script>
 <?php 
$career=$this->common_model->getRowById_multiple('careers','title, slug, pdf, experience, description',array('id'=>$param2));
$branches = $this->crud_model->get_branches()->result_array();
?>

<button type="button" class="btn close rounded-circle p-0" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
<div class="row mt-2">
   <div class="col-lg-7 mb-4 mb-lg-0">
      <div class="positionInfo pe-lg-3 pb-4 h-100">
         <h3 class="font-weight-bold sectionSubTitle yellowTxt mb-0"><?= $career['title'];?></h3>
         <div class="experience orangeTxt mb-1"><b>Experience : </b> <?= $career['experience'];?></div>
         <div><strong>Job Description: </strong><br>
         <?= $career['description'];?>
         </div>
         
         <?php if($career['pdf']!=''):?> 
         <p class="mt-1 mb-1"><strong>More Details: </strong> </p>
         <p> 						
            <object
               data="<?= $career['pdf'];?>#toolbar=0"
               type="application/pdf"
               width="100%"
               height="400px"
               controls controlsList="nodownload">
            </object> 
        </p>
         <?php endif;?>
      
   </div>
   </div>
   <div class="col-lg-5">
      <div class="wpforms-container  col-md-12 h-enquiry">
          <h5 class="text-center">Apply Now</h5>
         <form action="<?php echo base_url();?>ajax_submit_career" class="add-ajax-modal-form mt-10" onsubmit="return checkMForm(this);">
            <div class="row">
               <input type="hidden" id="careerValue" name="career_id" value="<?= $param2;?>" required>
               <input type="hidden" name="career_name" value="<?= $career['title'];?>" required>
               <div class="col-md-12">
                  <div class="form-group mb-2">
                     <label>Name<i class="text-dander">*</i></label>
                     <input type="text" class="form-control" name="name" placeholder="Name" required>
                     <span class="invalid-feedback"></span>
                  </div>
               </div>
               <div class="col-md-12">
                  <div class="form-group mb-2">
                     <label>Email<i class="text-dander">*</i></label>
                     <input type="email" class="form-control" name="email" placeholder="Email" required>
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
                     <label>Center Applying To<i class="text-dander">*</i></label>
                     <select class="form-control" name="branch" style="padding: 0.375rem 0.75rem;" required>
                        <option value="">Center Applying To</option>
                        <?php foreach($branches as $branch){ ?>
                        <option value="<?php echo $branch['id'];?>"><?php echo $branch['name'];?></option>
                        <?php } ?>
                     </select>
                     <span class="invalid-feedback"></span>
                  </div>
               </div>
               <div class="col-md-12">
                  <div class="form-group mb-2">
                     <label>Chat With Us </label>
                     <textarea class="form-control" name="chat_with_us" placeholder="Chat With Us"></textarea>
                     <span class="invalid-feedback"></span>
                  </div>
               </div>
               <div class="col-md-12">
                  <div class="form-group mb-2">
                     <label>Upload Resume</label>
                     <input type="file" class="form-control" name="file" accept=".pdf">
                     <span class="invalid-feedback"></span>
                  </div>
               </div>
               <div class="col-md-12 mt-2 g-recaptcha" data-sitekey="<?php echo $this->config->item('recaptcha_site_key'); ?>"></div>
               <div class="col-md-12 mt-2">
                  <div class="wpforms-submit-container pt-0">
                   <button type="submit" name="wpforms[submit]" id="wpforms-submit-4102" class="btn btn-enquiry wpforms-submit btn_merify" name="btn_merify">
                   Submit</button>
                </div>
               </div>
            </div>
            <!-- .wpforms-field-container -->
          
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
                if (res.status == '200') { 
                  $(".loader").fadeOut("slow"); 
                  Swal.fire({
            		title: "Success!",
            		text: res.message,
            		icon: "success",
            		customClass: {
            			confirmButton: "btn btn-primary"
            		},
            		buttonsStyling: !1
            	  }).then(() => {window.location.href = res.url;});
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