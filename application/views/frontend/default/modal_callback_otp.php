<button type="button" class="btn close rounded-circle p-0 close-admission" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
<div class="row mt-0">
   <div class="col-lg-12">
      <div class="col-md-12 h-enquiry">
          <h5>Verify your OTP</h5>
          <p>Please enter the OTP code we have sent to you via whatsapp to your mobile for verification</p>
          <form action="<?php echo base_url();?>ajax_callback_otp_enquiry" class="add-ajax-modal-form mt-10" onsubmit="return checkMForm(this);">
            <div class="row">
                <input type="hidden" name="id" value="<?= $param2; ?>" id="admission_id">
                <div class="col-md-12">
                    <div class="form-group mb-2">
                        <input type="tel" minlength="4" maxlength="4" class="signup-form-control" oninput="sanitizeInput(this)" onfocus="openDialer(this)" class="form-control" name="otp" placeholder="Enter OTP" required>
                        <span class="invalid-feedback"></span>
                    </div>
                </div>   
               
                <div class="col-md-12 mt-2">
                    <div class="wpforms-submit-container pt-0">
                    <button type="submit" class="btn btn-enquiry wpforms-submit btn_merify" name="btn_merify">Submit</button>
                </div>
                </div>
            </div>
            <!-- .wpforms-field-container -->
          
          </form>
         
         <div class="text-center mt-2" id="resend-otp"></div>
         
      </div>
   </div>
</div>
   
 <script>  
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
   
         // Get form
        var form = $('.add-ajax-modal-form')[0];

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
            	  }).then(() => { 
            	      window.location.href = res.url;
            	  });
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

    function otpTimer () {
        let timer;
        
        let otpMessage = document.querySelector('#resend-otp');
        let time = 30;
        timer = setInterval(() => {
            if(time != 0) {
                otpMessage.innerHTML = '<small>Resend OTP in ' + time + ' Seconds</small>';
                time--;
            } else {
                otpMessage.innerHTML = '<small><a href="javascript:void(0);" onclick="resendOTP()" style="color: #7c68af;">Resend OTP</a></small>';
                clearInterval(timer);
            }
        }, 1000)
        
        document.querySelector('.close-admission').addEventListener('click', (e) => {
            clearInterval(timer);
        })
    }

    otpTimer();
    
    function resendOTP(){
        $.ajax({
            type: 'POST',
            url: '<?php echo base_url(); ?>home/resend_callback_otp',
            data: {id: document.querySelector('#admission_id').value },
            dataType: 'json',
            success: function(res) {
                if(res.status == 200){
                    Swal.fire({
                		title: "Success!",
                		text: res.message,
                		icon: "success",
                		customClass: {
                			confirmButton: "btn btn-primary"
                		},
                		buttonsStyling: !1
                	}).then(() => {
                	    otpTimer();
                    });
                } else {
                    Swal.fire({
            			title: "Error!",
            			text: res.message ,
            			icon: "error",
            			customClass: {
            				confirmButton: "btn btn-primary"
            			},
            			buttonsStyling: !1
            		})
                }
            }
        });
    }
    
</script>