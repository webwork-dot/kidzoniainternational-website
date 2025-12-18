<?php $events = $this->common_model->selectByidsINWhere('','events','8','0');?>

<button type="button" class="btn close rounded-circle p-0" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
<div class="row mt-0">
   <div class="col-lg-12">
      <div class="col-md-12 h-enquiry">
          <h5 class="text-center">Register For Events </h5>
         <form action="<?php echo base_url();?>ajax_register_event" class="add-ajax-modal-form mt-10" onsubmit="return checkMForm(this);">
            <div class="row">
               <div class="col-md-12">
                  <div class="form-group mb-2">
                 <label>Name Of The Event<i class="text-dander">*</i></label>
                 <select class="form-control" name="event_id"  required>
                    <option value="">Select Event</option>
                    <?php foreach($events as $evt){ ?>
                        <option value="<?php echo $evt->id;?>"><?php echo $evt->name;?></option>
                    <?php } ?>
                 </select>
                 <span class="invalid-feedback"></span>
                </div>
              </div>   
                              
                                      
               <div class="col-md-12">
                  <div class="form-group mb-2">
                     <label>Name<i class="text-dander">*</i></label>
                     <input type="text" class="form-control" name="name" placeholder="Name" required>
                     <span class="invalid-feedback"></span>
                  </div>
               </div>  
               
               <div class="col-md-12">
                  <div class="form-group mb-2">
                     <label>Phone<i class="text-dander">*</i></label>
                     <input type="tel" minlength="10" maxlength="10" class="signup-form-control" oninput="sanitizeInput(this)" onfocus="openDialer(this)" class="form-control" name="phone" placeholder="Phone " required>
                     <span class="invalid-feedback"></span>
                  </div>
               </div>   
               
               <div class="col-md-12">
                  <div class="form-group mb-2">
                 <label>Gender</label>
                 <select class="form-control" name="gender" required>
                    <option value="">Select a Gender</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                 </select>
                 <span class="invalid-feedback"></span>
                </div>
              </div>   
           
               <div class="col-md-12">
                  <div class="form-group mb-2">
                     <label>Location<i class="text-dander">*</i></label>
                     <input type="text" class="form-control" name="location" placeholder="Location" required>
                     <span class="invalid-feedback"></span>
                  </div>
               </div>
            
               <div class="col-md-12 mt-2">
                  <div class="wpforms-submit-container pt-0">
                   <button type="submit" class="btn btn-enquiry wpforms-submit btn_merify" name="btn_merify">
                   Submit</button>
                </div>
               </div>
            </div>
          
         </form>
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
            	  }).then(() => {window.location.href = res.url; });
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