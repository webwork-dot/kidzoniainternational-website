<!-- Topbar Start -->
 <nav class="header-navbar navbar navbar-expand-lg align-items-center floating-nav navbar-light navbar-shadow container-xxl">
         <div class="navbar-container d-flex content">
            <div class="bookmark-wrapper d-flex align-items-center">
               <ul class="nav navbar-nav">
                  <li class="nav-item d-none d-lg-block">
                     <a class="nav-link bookmark-star fw-bolder"><?php echo $page_title; ?></a>
                  </li>
               </ul>
            </div>
            <ul class="nav navbar-nav align-items-center ms-auto">
                <li class="nav-item dropdown dropdown-user">
                  <a class="nav-link dropdown-toggle dropdown-user-link" id="dropdown-user" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
   
					 <div class="user-nav d-sm-flex d-none">
					 <span class="user-name fw-bolder">Master Panel</span><span class="user-status">Admin</span></div>
                     <span class="avatar"><img class="round" src="<?php echo base_url('uploads/user_image/placeholder.png'); ?>" alt="avatar" height="40" width="40"></span>
                  </a>
                  <div class="dropdown-menu dropdown-menu-end" style="top: 46px!important;">
                  <a style="padding: 10px" class="dropdown-item" href="<?php echo site_url('system-password'); ?>"><i class="feather icon-user"></i> <?php echo get_phrase('change_password'); ?></a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="<?php echo site_url('login/logout'); ?>"><i class="feather icon-power"></i> Logout</a>
                   </div>
                </li>
            </ul>
         </div>
      </nav>
<!-- end Topbar -->
