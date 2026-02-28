<?php
 $system_title = "";
 $logged_in_user_role = strtolower($this->session->userdata('super_role'));
?>
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
   <head>
	  <!-- all the meta tags -->
      <?php include 'metas.php'; ?>
      <title><?php echo get_phrase($page_title); ?></title>
      <!-- all the css files -->
      <?php include 'includes_top.php'; ?>
	  <style>
	  .mtop-2 {margin-top: 2rem!important;}
	  </style>
   </head>
   <body class="vertical-layout vertical-menu-modern navbar-floating footer-static" data-open="click" data-menu="vertical-menu-modern" data-col="">

    <div class="loader"></div>
      <!-- HEADER -->
    <?php include 'header.php'; ?>

      <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
         <div class="navbar-header">
            <ul class="nav navbar-nav flex-row justify-content-center">
               <li class="nav-item">
                  <a class="navbar-brand " href="<?php echo base_url();?>">
                      <img src="<?php echo base_url();?>app-assets/images/logo/logo.png" height="80">
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
<?php $this->session->unset_userdata('info_message');endif;?>   

<?php if ($this->session->flashdata('error_message') != ""):?>
   <div id="alert" class="alert alert-danger alert-dismissible fade show error-shake" role="alert">
      <div class="alert-body"><?php echo $this->session->flashdata('error_message'); ?></div><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php $this->session->unset_userdata('error_message');endif;?>   

<?php if ($this->session->flashdata('flash_message') != ""):?>
   <div id="alert" class="alert alert-success x alert-dismissible fade show error-shake" role="alert">
      <div class="alert-body"><?php echo $this->session->flashdata('flash_message'); ?></div><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php $this->session->unset_userdata('flash_message');endif;?>      
                
               <!-- BEGIN PlACE PAGE CONTENT HERE -->
				<?php include $logged_in_user_role.'/'.$page_name.'.php';?>
			   <!-- END PLACE PAGE CONTENT HERE -->
			   
            </div>
         </div>
      </div>
  
      <div class="sidenav-overlay"></div>
      <div class="drag-target"></div>
      <!-- all the js files -->
    <?php include 'includes_bottom.php'; ?>

    <?php include 'modal.php'; ?>
    <?php include 'common_scripts.php'; ?>
   </body>
</html>

<script> 
    setTimeout(function() {
        $('#alert').hide('fast');
    }, 2000);
</script>