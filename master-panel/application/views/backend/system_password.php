<?php
 $system_title ="RAPL CRM";
 $logged_in_user_role = strtolower($this->session->userdata('super_role'));
?>
<!DOCTYPE html>

<html class="loading md-view" lang="en" data-textdirection="ltr">
   <head>
	  <!-- all the meta tags -->
      <?php include 'metas.php'; ?>
      <title><?php echo get_phrase($page_title); ?> | <?php echo $system_title; ?></title>
      <!-- all the css files -->
      <?php include 'includes_top.php'; ?>
	  <style>
	  .mtop-2 {margin-top: 2rem!important;}
	  .table-link {font-weight: 500; color: #2496f7 !important;}
	  </style>
   </head>
      <!-- HEADER -->
 

<?php if ($this->session->userdata('super_role_id')==13) {?>  
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/m-custom.css')?>">
<body class="vertical-layout vertical-menu-modern navbar-floating footer-static flash-monitor">
    <div class="loader"></div>
      <!-- HEADER -->
    <?php include 'md_header.php'; ?>	  
<?php } else{?>  
   <body class="vertical-layout vertical-menu-modern navbar-floating footer-static" data-open="click" data-menu="vertical-menu-modern" data-col="">
    <div class="loader"></div>
    <?php include 'header.php'; ?>
      <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
         <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
               <li class="nav-item">
                  <a class="navbar-brand" href="<?php echo base_url();?>">
                      <img src="<?php echo base_url();?>app-assets/images/logo/logo.png" height="80">
                      <h2 class="" style="font-size: 20px;font-weight: 600;color: #323232;margin-top: 4px;">ETHNIC WEAR</h2>
                  </a>
               </li>
            </ul>
         </div>
         <div class="shadow-bottom"></div>
         <div class="main-menu-content">
      
		 <!-- SIDEBAR -->
		 <?php include $logged_in_user_role.'/'.'navigation.php' ?>
         </div>
      </div>
<?php } ?>
	  

      <div class="app-content content ">
         <div class="content-overlay"></div>
         <div class="header-navbar-shadow"></div>
         <div class="content-wrapper container-xxl p-0">
            <div class="content-header row">
            </div>
            <div class="content-body">
      
          
<?php if ($this->session->flashdata('info_message') != ""):?>
   <div id="alert" class="alert alert-primary alert-dismissible fade show error-shake" role="alert">
      <div class="alert-body"><?php echo $this->session->flashdata('info_message'); ?></div><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php endif;?>

<?php if ($this->session->flashdata('error_message') != ""):?>
   <div id="alert" class="alert alert-danger alert-dismissible fade show error-shake" role="alert">
      <div class="alert-body"><?php echo $this->session->flashdata('error_message'); ?></div><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php endif;?>

<?php if ($this->session->flashdata('flash_message') != ""):?>
   <div id="alert" class="alert alert-success alert-dismissible fade show error-shake" role="alert">
      <div class="alert-body"><?php echo $this->session->flashdata('flash_message'); ?></div><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php endif;?>      
                

<div class="row">
  <div class="col-12">
    <!-- profile -->
    <div class="card">
      <div class="card-body py-1 my-0">

        <!-- form -->
        <form class="flash-ajax-redirect-form" action="<?php echo site_url('admin/system_password/change_password'); ?>" onsubmit="return checkForm(this);"  enctype="multipart/form-data" method="post">
          <div class="row">   
            <div class="col-12 col-sm-6 mb-1">
                <div class="mb-1">
                  <label class="form-label" for="current_password">Old Password <span class="required">*</span></label>
                  <div class="input-group input-group-merge form-password-toggle">
                    <span class="input-group-text"><i data-feather="lock"></i></span>
                    <input type="password" id="current_password" class="form-control" name="current_password" placeholder="Old Password" required>
                    <span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span>
                  </div>
              </div>
             </div>
          </div>     
          
          <div class="row">   
            <div class="col-12 col-sm-6 mb-1">
                <div class="mb-1">
                  <label class="form-label" for="password">New Password <span class="required">*</span></label>
                  <div class="input-group input-group-merge form-password-toggle">
                    <span class="input-group-text"><i data-feather="lock"></i></span>
                    <input type="password" id="password" class="form-control" name="password" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"  placeholder="New Password" required>
                    <span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span>
                  </div>
                  <small>
              </div>
             </div>
          </div>  
          
          <div class="row">   
            <div class="col-12 col-sm-6 mb-1">
                <div class="mb-1">
                  <label class="form-label" for="confirm_password">Confirm Password <span class="required">*</span></label>
                  <div class="input-group input-group-merge form-password-toggle">
                    <span class="input-group-text"><i data-feather="lock"></i></span>
                    <input type="password" id="confirm_password" class="form-control" name="confirm_password"  placeholder="Confirm Password" required>
                    <span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span>
                  </div>
                  <span id='message'></span>
              </div>
             </div>
          </div>
          
           <div class="row">  
            <div class="col-12">
              <button type="submit" class="btn btn-primary mt-1 me-1 btnf check">Change</button>
            </div>
          </div>
        </form>
        <!--/ form -->
      </div>
    </div>
    </div>
</div>
  
<script>
    $('#password, #confirm_password').on('keyup', function () {
  if ($('#password').val() == $('#confirm_password').val()) {
    $('#message').html('').css('color', 'green');
     $('.check').prop('disabled', false);
  } else {
    $('#message').html('Not Matching').css('color', 'red');
    $('.check').prop('disabled', true);
  }
});
</script>

			   
			   
			   
            </div>
         </div>
      </div>
  
      <div class="sidenav-overlay"></div>
      <div class="drag-target"></div>
      <!-- all the js files -->
    <?php include 'modal.php'; ?>
    <?php include 'includes_bottom.php'; ?>

    <?php include 'common_scripts.php'; ?>
   </body>
</html>

<script> 
var skin_layout=localStorage.getItem('light-layout-current-skin');
 $("html").addClass(skin_layout);
 if(skin_layout=='dark-layout'){
    $(".nav-link-style").find(".ficon").replaceWith(feather.icons.sun.toSvg({class: "ficon"	}));  
 }
 else{
    $(".nav-link-style").find(".ficon").replaceWith(feather.icons.moon.toSvg({class: "ficon"})); 
     
 }
 window.onbeforeunload = function () {
    window.scrollTo(0, 0);
}

$('.flash-ajax-redirect-form').submit(function(e) {
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
        data: $(".flash-ajax-redirect-form").serialize(),
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
                $('.btn_verify').html('Submit');
                $('.btn_verify').attr("disabled", false);
                $(".loader").fadeOut("slow"); 
            }
        }
    });
    return false;
});
</script>