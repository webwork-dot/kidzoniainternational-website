<script src="<?php echo base_url('app-assets/vendors/js/forms/select/select2.full.min.js');?> "></script>
<script src="<?php echo base_url('app-assets/js/core/app-menu.min.js');?>"></script>
<script src="<?php echo base_url('app-assets/js/core/app.min.js');?>"></script>
<script src="<?php echo base_url('app-assets/js/scripts/customizer.min.js');?>"></script>
<script src="<?php echo base_url('app-assets/vendors/js/forms/validation/jquery.validate.min.js');?>"></script>
<script src="<?php echo base_url('app-assets/js/scripts/pages/auth-login.js');?>"></script>
<script src="<?php echo base_url('app-assets/js/scripts/charts/chart-apex.min.js');?>"></script>
<script src="<?php echo base_url('app-assets/js/scripts/charts/chart-chartjs.min.js');?>"></script>
<script src="<?php echo base_url('app-assets/vendors/js/charts/apexcharts.min.js');?>"></script>
<script src="<?php echo base_url('app-assets/vendors/js/charts/chart.min.js');?>"></script>

<script src="<?php echo base_url('app-assets/vendors/js/pickers/pickadate/picker.js');?>"></script>
<script src="<?php echo base_url('app-assets/vendors/js/pickers/pickadate/picker.date.js');?>"></script>
<script src="<?php echo base_url('app-assets/vendors/js/pickers/flatpickr/flatpickr.min.js');?>"></script>
<!--<script src="<?php echo base_url('app-assets/js/scripts/forms/pickers/form-pickers.min.js');?>"></script>-->
<script src="<?php echo base_url('app-assets/js/scripts/forms/form-select2.min.js');?>"></script>
<script src="<?php echo base_url('app-assets/js/scripts/jquery-ui.js');?>"></script>


<!--<script src="<?php echo base_url('app-assets/vendors/js/calendar/fullcalendar.min.js');?>  "></script>-->
<!--<script src="<?php echo base_url('app-assets/js/scripts/pages/app-calendar-events.min.js');?> "></script>-->
<!--<script src="<?php echo base_url('app-assets/js/scripts/pages/app-calendar.min.js');?> "></script>-->

<script src="<?php echo base_url('app-assets/js/scripts/extensions/ext-component-toastr.min.js');?>"></script>

<script src="<?php echo base_url('app-assets/vendors/js/forms/repeater/jquery.repeater.min.js');?> "></script>
<script src="<?php echo base_url('app-assets/js/scripts/forms/form-repeater.min.js');?> "></script>

<script>
  function isNumberKey(evt, element) {
    var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57) && !(charCode == 46))
        return false;
    else {
        var len = $(element).val().length;
        var index = $(element).val().indexOf('.');
        if (index > 0 && charCode == 46) {
            return false;
        }
        if (index > 0) {
            var CharAfterdot = (len + 1) - index;
            if (CharAfterdot > 100) {
                return false;
            }
        }

    }
    return true;
}

    $(document).ready(function(){ 
        $('.flatpickr-basic').flatpickr({
    	dateFormat: "Y-m-d",
    	maxDate: new Date()
    });  
        
        
         $(".allow_numeric").on("input", function(evt) {
          var self = $(this);
          self.val(self.val().replace(/[^\d].+/, ""));
          if ((evt.which < 48 || evt.which > 57)) 
          {
            evt.preventDefault();
          }
         });
         
         $(".allow_decimal").on("input", function(evt) {
          var self = $(this);
          self.val(self.val().replace(/[^0-9\.]/g, ''));
          if ((evt.which != 46 || self.val().indexOf('.') != -1) && (evt.which < 48 || evt.which > 57)) 
          {
            evt.preventDefault();
          }
         });
         
         
         $('.alphaonly').bind('keyup blur',function(){ 
           var node = $(this);
           node.val(node.val().replace(/[^a-zA-Z\s]/g,'') ); }
         );
         
     });
 
    function confirm_delete_(b,url) {
       var a = {
          id: b
      };
    
      var href = url;
      var confirmDlg = duDialog(null, "Are you sure?", {
        init: true,
        dark: false, 
        buttons: duDialog.OK_CANCEL,
        okText: 'Proceed',
        callbacks: {
          okClick: function(e) {
            $(".dlg-actions").find("button").attr("disabled",true);
            $(".ok-action").html('<i class="fa fa-spinner fa-pulse"></i> Please wait!');
            $(".loader").show();  
            $.ajax({
              type: 'POST',
              url: href,
              dataType: 'json', 
              data: a,
            })
            .done(function(res) {
              confirmDlg.hide();
              if (res.status == '200') {
                $(".loader").fadeOut("slow");  
        		$(".row-"+b).fadeOut("slow");
                 Swal.fire({
        			title: "Success!",
        			text: 'Mapping Deleted Successfully' ,
        			icon: "success",
        			customClass: {
        				confirmButton: "btn btn-primary"
        			},
        			buttonsStyling: !1
        		}); 
        		
              } else {
                $(".loader").fadeOut("slow");  
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
            })
            .fail(function(response) {
                $(".loader").fadeOut("slow");  
                Swal.fire({
        			title: "Error!",
        			text: res.message ,
        			icon: "error",
        			customClass: {
        				confirmButton: "btn btn-primary"
        			},
        			buttonsStyling: !1
        		})
            });
          }
        }
      });
      confirmDlg.show();
   } 
  
  function checkForm(form) // Submit button clicked
  {
    form.btn_verify.disabled = true; 
	$('.btn_verify').attr("disabled", true);
	$('.btn_verify').html('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span><span class="ms-25 align-middle">Loading...</span>');
     
    return true;
  }
    
        $('.add-ajax-form').submit(function(e) { 
        e.preventDefault();  
        $(".loader").show(); 
        $('.btn_verify').attr("disabled", true)
        $('.btn_verify').html('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span><span class="ms-25 align-middle">Loading...</span>');
        var url = $(this).attr('action');
        $.ajax({
            type: 'POST',
            url: url,
            async: true,
            dataType: 'json',
            data: $(".add-ajax-form").serialize(),
            success: function(res) {
                if (res.status == '200') {
                    $(".loader").fadeOut("slow"); 
                    location.reload();
                }
                else {	
                    Swal.fire({
            			title: "Error!",
            			text: res.message ,
            			icon: "error",
            			customClass: {
            				confirmButton: "btn btn-primary"
            			},
            			buttonsStyling: !1
            		})
                    $('.btn_verify').html('Submit');
                    $('.btn_verify').attr("disabled", false);
                    $(".loader").fadeOut("slow"); 
                }
            }
        });
        return false;
    });
    
    
      
   $('.add-ajax-image-form').submit(function(e) {
        e.preventDefault();  
          $(".loader").show(); 
          $('.btn_verify').attr("disabled", true)
          $('.btn_verify').html('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span><span class="ms-25 align-middle">Loading...</span>');
          var url = $(this).attr('action');
   
         // Get form
        var form = $('.add-ajax-image-form')[0];

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
                    location.reload();
                }
                else {    
                    Swal.fire({
            			title: "Error!",
            			text: res.message ,
            			icon: "error",
            			customClass: {
            				confirmButton: "btn btn-primary"
            			},
            			buttonsStyling: !1
            		})
                    $('.btn_verify').html('Submit');
                    $('.btn_verify').attr("disabled", false);
                    $(".loader").fadeOut("slow"); 
                }
            }
        });
        return false;
    }); 
    
     

    $('.add-ajax-redirect-form').submit(function(e) {
        e.preventDefault();  
        $(".loader").show(); 
        $('.btn_verify').attr("disabled", true)
        $('.btn_verify').html('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span><span class="ms-25 align-middle">Loading...</span>');
        var url = $(this).attr('action');
        $.ajax({
            type: 'POST',
            url: url,
            async: true,
            dataType: 'json',
            data: $(".add-ajax-redirect-form").serialize(),
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
                    Swal.fire({
            			title: "Error!",
            			text: res.message ,
            			icon: "error",
            			customClass: {
            				confirmButton: "btn btn-primary"
            			},
            			buttonsStyling: !1
            		})
                    $('.btn_verify').html('Submit');
                    $('.btn_verify').attr("disabled", false);
                    $(".loader").fadeOut("slow"); 
                }
            }
        });
        return false;
    });
	
	
	  $('.add-ajax-redirect-image-form').submit(function(e) {
        e.preventDefault();  
          $(".loader").show(); 
          $('.btn_verify').attr("disabled", true)
          $('.btn_verify').html('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span><span class="ms-25 align-middle">Loading...</span>');
          var url = $(this).attr('action');
   
         // Get form
        var form = $('.add-ajax-redirect-image-form')[0];

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
                   Swal.fire({
            			title: "Error!",
            			text: res.message ,
            			icon: "error",
            			customClass: {
            				confirmButton: "btn btn-primary"
            			},
            			buttonsStyling: !1
            		})
                    $('.btn_verify').html('Submit');
                    $('.btn_verify').attr("disabled", false);
                    $(".loader").fadeOut("slow"); 
                }
            }
        });
        return false;
    });
    
    
    $('.add-ajax-editor-image-form').submit(function(e) {
        e.preventDefault();  
          $(".loader").show(); 
          $('.btn_verify').attr("disabled", true)
          $('.btn_verify').html('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span><span class="ms-25 align-middle">Loading...</span>');
          var url = $(this).attr('action');
		  
          for ( instance in CKEDITOR.instances ) {
            CKEDITOR.instances[instance].updateElement();
        }
         // Get form
        var form = $('.add-ajax-editor-image-form')[0];

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
                   Swal.fire({
            			title: "Error!",
            			text: res.message ,
            			icon: "error",
            			customClass: {
            				confirmButton: "btn btn-primary"
            			},
            			buttonsStyling: !1
            		})
                    $('.btn_verify').html('Submit');
                    $('.btn_verify').attr("disabled", false);
                    $(".loader").fadeOut("slow"); 
                }
            }
        });
        return false;
    }); 
	
	
	    	  
</script>

<script>
 $(window).on('load',  function(){
   if (feather) {
     feather.replace({ width: 14, height: 14 });
   }
 })
</script>
<script>
$(".co_sector_ajax").select2({
        minimumInputLength: 2,
        ajax: {
            url: "<?php echo base_url();?>co-ajax-doctors-list",
            type: "POST",
            dataType: 'json',
            placeholder: "Search Doctor Name & Mobile No",
            delay: 250,
            data: function (params) {
                return {
                    searchTerm: params.term // search term
                };
            },
            processResults: function (response) {
                return {
                    results: response
                };
            },
            cache: true
        }
    });
</script>    
<script>
    var base_url = "<?php echo base_url();?>";
</script>