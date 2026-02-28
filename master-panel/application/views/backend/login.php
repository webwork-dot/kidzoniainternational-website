<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
   <head>
      <?php include 'metas.php'; ?>
      <title><?php echo $page_title; ?></title>
      <?php include 'includes_top.php'; ?> 
   </head>
   <div class="app-content content ">
      <div class="content-overlay"></div>
      <div class="header-navbar-shadow"></div>
      <div class="content-wrapper">
         <div class="content-header row">
         </div>
         <div class="content-body">
            <div class="auth-wrapper auth-basic px-2">
               <div class="auth-inner my-2">
                  <div class="card mb-0">
                     <div class="card-body1" >
                        <a href="#" class="brand-logo">
                            <img src="<?php echo base_url();?>app-assets/images/logo/logo.png" height="70">
                            <h2 class="" style="font-size: 25px;font-weight: 600;color: #323232;margin-top: 20px;"></h2>
                        </a>
                        <h4 class="card-title text-center mb-1" style="font-size:22px;">Login</h4>
                        <p class="card-text text-center mb-2">Please sign-in to your account</p>
                        <body class="vertical-layout vertical-menu-modern blank-page navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="blank-page">
                           <?php if ($this->session->flashdata('info_message') != ""):?>
                           <div id="alert" class="alert alert-primary alert-dismissible fade show" role="alert">
                              <div class="alert-body"><?php echo $this->session->flashdata('info_message'); ?></div>
                              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                           </div>
                           <?php endif;?>
                           <?php if ($this->session->flashdata('error_message') != ""):?>
                           <div id="alert" class="alert alert-danger alert-dismissible fade show" role="alert">
                              <div class="alert-body"><?php echo $this->session->flashdata('error_message'); ?></div>
                              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                           </div>
                           <?php endif;?>
                           <?php if ($this->session->flashdata('flash_message') != ""):?>
                           <div id="alert" class="alert alert-success alert-dismissible fade show" role="alert">
                              <div class="alert-body"><?php echo $this->session->flashdata('flash_message'); ?></div>
                              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                           </div>
                           <?php endif;?>
                           <form class="auth-login-form mt-2" action="<?php echo site_url('login/validate_login/admin'); ?>" method="POST">
                              <div class="mb-1">
                                 <label class="form-label" for="email-id-icon">Username</label>
                                 <div class="input-group input-group-merge">
                                    <span class="input-group-text"><i data-feather="mail"></i></span>
                                    <input type="text" id="email-id-icon" class="form-control" name="email" placeholder="Enter Email or Mobile Number">
                                 </div>
                              </div>
                              <div class="mb-1" style="margin-bottom:.75rem!important">
                                 <label class="form-label" for="password-icon">Password</label>
                                 <div class="input-group input-group-merge form-password-toggle">
                                    <span class="input-group-text"><i data-feather="lock"></i></span>
                                    <input type="password" id="password-icon" class="form-control" name="password" placeholder="Password" aria-describedby="login-password">
                                    <span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span>
                                 </div>
                              </div>
                              <button class="btn btn-primary w-100">Sign In</button>
                           </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <?php include 'includes_bottom.php'; ?>
   </body>
</html>