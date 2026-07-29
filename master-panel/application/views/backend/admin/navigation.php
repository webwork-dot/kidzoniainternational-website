<?php
    if (!isset($navigate)) {
        $navigate = '';
    }
?>

<div class="main-menu-content">
    <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
        
        <li class="nav-item <?php if ($page_name == 'dashboard')echo 'active';?>">
        	<a class="d-flex align-items-center" href="<?php echo site_url('admin/dashboard'); ?>">
            	<i data-feather="grid"></i>
            	<span class="menu-title text-truncate fw-bolder" data-i18n="Dashboards">Dashboard</span>
            </a>
        </li>


       
        <div class="nav_head px-2 pt-2">
            <div>CMS</div>
        </div>
        
        <li class="nav-item has-sub hover <?php if ($navigate == 'home_section' || $navigate == 'about_us' || $navigate == 'learning_space' || $navigate == 'our_curriculum' || $navigate == 'our_programmes') echo 'active'; ?>">
            <a href="#"><i data-feather="home"></i>
                <span class="menu-title text-truncate" data-i18n="User">Content Management</span>
            </a>
            <ul class="menu-content">
                <li class="nav-item <?php if ($navigate == 'home_section') echo 'active'; ?>"><a href="<?php echo site_url() . 'admin/banner'; ?>"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="">Home</span></a></li>
                <li class="nav-item <?php if ($navigate == 'about_us') echo 'active'; ?>"><a href="<?php echo site_url() . 'admin/about-us'; ?>"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="">About Us</span></a></li>
                <li class="nav-item <?php if ($navigate == 'learning_space') echo 'active'; ?>"><a href="<?php echo site_url() . 'admin/learning-space'; ?>"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="">Our Learning Space Amenities</span></a></li>
                <li class="nav-item <?php if ($navigate == 'our_curriculum') echo 'active'; ?>"><a href="<?php echo site_url() . 'admin/about-curriculum'; ?>"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="">Our Curriculum</span></a></li>
                <li class="nav-item <?php if ($navigate == 'our_programmes') echo 'active'; ?>"><a href="<?php echo site_url() . 'admin/programmes-content'; ?>"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="">Our Programmes</span></a></li>
                <li class="nav-item <?php if ($navigate == 'kidzonia_day') echo 'active'; ?>"><a href="<?php echo site_url() . 'admin/kidzonia-day'; ?>"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="">A Day at Kidzonia</span></a></li>
                <li class="nav-item <?php if ($navigate == 'kidzonia_commits') echo 'active'; ?>"><a href="<?php echo site_url() . 'admin/kidzonia-commits'; ?>"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="">Kidzonia Commits</span></a></li>
                <li class="nav-item <?php if ($navigate == 'ixplore') echo 'active'; ?>"><a href="<?php echo site_url() . 'admin/ixplore'; ?>"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="">Ixplore</span></a></li>
                <li class="nav-item <?php if ($navigate == 'whizkids') echo 'active'; ?>"><a href="<?php echo site_url() . 'admin/whizkids'; ?>"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="">Whizkids</span></a></li>
                <li class="nav-item <?php if ($navigate == 'admissions') echo 'active'; ?>"><a href="<?php echo site_url() . 'admin/admissions'; ?>"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="">Admissions</span></a></li>
                <li class="nav-item <?php if ($navigate == 'our_teachers') echo 'active'; ?>"><a href="<?php echo site_url() . 'admin/our-teachers'; ?>"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="">Our Teachers</span></a></li>
            </ul>
        </li>
       
        <div class="nav_head px-2 pt-2">
            <div>Site Management</div>
        </div>
       <!--<li class="nav-item <?php if($page_name == 'banner' || $page_name == 'banner_add' || $page_name == 'banner_edit') echo 'active'; ?>">-->
       <!--    <a class="d-flex align-items-center " href="<?php echo site_url() . 'admin/banner' ?>">-->
       <!--        <i data-feather='sliders'></i>-->
       <!--        <span class="menu-title text-truncate fw-bolder" data-i18n="banner">Banner</span>-->
       <!--    </a>-->
       <!--</li>-->
       
       <li class="nav-item <?php if($page_name == 'sliders' || $page_name == 'sliders_add' || $page_name == 'sliders_edit') echo 'active'; ?>">
           <a class="d-flex align-items-center " href="<?php echo site_url() . 'admin/pop-up' ?>">
               <i data-feather='sliders'></i>
               <span class="menu-title text-truncate fw-bolder" data-i18n="sliders">Pop-Up Banner</span>
           </a>
       </li>
       
       <li class="nav-item <?php if($page_name == 'awards_and_recognitions' || $page_name == 'awards_and_recognitions_add' || $page_name == 'awards_and_recognitions_edit') echo 'active'; ?>">
           <a class="d-flex align-items-center " href="<?php echo site_url() . 'admin/awards-and-recognitions' ?>">
               <i data-feather='users'></i>
               <span class="menu-title text-truncate fw-bolder" data-i18n="teams">Awards &amp; Recognitions</span>
           </a>
       </li>
       
       <!--
       <li class="nav-item <?php if($page_name == 'category' || $page_name == 'category_add' || $page_name == 'category_edit' || $page_name == 'products' || $page_name == 'products_add' || $page_name == 'products_edit') echo 'active'; ?>">
           <a class="d-flex align-items-center" href="#">
                <i data-feather='package'></i>
                <span class="menu-title text-truncate" data-i18n="Leads">Portfolio</span>
           </a>
           <ul class="menu-content">
               
                <li class="nav-item <?php if($page_name == 'category' || $page_name == 'category_add' || $page_name == 'category_edit') echo 'active'; ?>">
                    <a class="d-flex align-items-center" href="<?php echo site_url('admin/product-category'); ?>">
                        <i class="feather icon-circle"></i>
                        <span class="menu-title text-truncate fw-bolder">Category</span>
                    </a>
                </li>
                
                <li class="nav-item <?php if($page_name == 'products' || $page_name == 'products_add' || $page_name == 'products_edit') echo 'active'; ?>">
                    <a class="d-flex align-items-center" href="<?php echo site_url('admin/products'); ?>">
                        <i class="feather icon-circle"></i>
                        <span class="menu-title text-truncate fw-bolder">Products</span>
                    </a>
                </li>
                
           </ul>
       </li>
       -->
       
       <li class="nav-item <?php if($page_name == 'print_media' || $page_name == 'print_media_add' || $page_name == 'print_media_edit') echo 'active'; ?>">
           <a class="d-flex align-items-center " href="<?php echo site_url() . 'admin/print-media' ?>">
               <i data-feather='camera'></i>
               <span class="menu-title text-truncate fw-bolder" data-i18n="blogs">Print Media</span>
           </a>
       </li>
       
       <li class="nav-item <?php if($page_name == 'achievements' || $page_name == 'achievements_add' || $page_name == 'achievements_edit') echo 'active'; ?>">
           <a class="d-flex align-items-center " href="<?php echo site_url() . 'admin/achievements' ?>">
               <i data-feather='award'></i>
               <span class="menu-title text-truncate fw-bolder" data-i18n="blogs">Achievements</span>
           </a>
       </li>
       
       <li class="nav-item <?php if($page_name == 'branches' || $page_name == 'branches_add' || $page_name == 'branches_edit') echo 'active'; ?>">
           <a class="d-flex align-items-center " href="<?php echo site_url() . 'admin/branches' ?>">
               <i data-feather='package'></i>
               <span class="menu-title text-truncate fw-bolder" data-i18n="blogs">Branches</span>
           </a>
       </li>     
       
       <li class="nav-item <?php if($page_name == 'gallery_image' || $page_name == 'gallery_image_add' || $page_name == 'gallery_image_edit') echo 'active'; ?>">
           <a class="d-flex align-items-center " href="<?php echo site_url() . 'admin/gallery-image' ?>">
               <i data-feather='folder'></i>
               <span class="menu-title text-truncate fw-bolder" data-i18n="blogs">Gallery Image</span>
           </a>
       </li>
       
       <li class="nav-item <?php if($page_name == 'gallery' || $page_name == 'gallery_add' || $page_name == 'gallery_edit') echo 'active'; ?>">
           <a class="d-flex align-items-center " href="<?php echo site_url() . 'admin/gallery' ?>">
               <i data-feather='folder'></i>
               <span class="menu-title text-truncate fw-bolder" data-i18n="blogs">Campus Image</span>
           </a>
       </li>
       
       
       <li class="nav-item <?php if($page_name == 'blogs' || $page_name == 'blogs_add' || $page_name == 'blogs_edit') echo 'active'; ?>">
           <a class="d-flex align-items-center " href="<?php echo site_url() . 'admin/blogs' ?>">
               <i data-feather='edit'></i>
               <span class="menu-title text-truncate fw-bolder" data-i18n="blogs">Blogs</span>
           </a>
       </li>
       
       <li class="nav-item <?php if($page_name == 'blogs_image' || $page_name == 'blogs_image_add') echo 'active'; ?>">
           <a class="d-flex align-items-center " href="<?php echo site_url() . 'admin/blogs-image' ?>">
               <i data-feather='image'></i>
               <span class="menu-title text-truncate fw-bolder" data-i18n="blogs">Blogs Image</span>
           </a>
       </li>
       
       <li class="nav-item <?php if($page_name == 'digital_news' || $page_name == 'digital_news_add' || $page_name == 'digital_news_edit') echo 'active'; ?>">
           <a class="d-flex align-items-center " href="<?php echo site_url() . 'admin/digital_news' ?>">
               <i data-feather='edit'></i>
               <span class="menu-title text-truncate fw-bolder" data-i18n="digital_news">Digital News</span>
           </a>
       </li>
       
       <li class="nav-item <?php if($page_name == 'event' || $page_name == 'event_add' || $page_name == 'event_edit') echo 'active'; ?>">
           <a class="d-flex align-items-center " href="<?php echo site_url() . 'admin/event' ?>">
               <i data-feather='star'></i>
               <span class="menu-title text-truncate fw-bolder" data-i18n="blogs">Events</span>
           </a>
       </li>
       
       <li class="nav-item <?php if($page_name == 'parents_testimonials' || $page_name == 'parents_testimonials_add' || $page_name == 'parents_testimonials_edit') echo 'active'; ?>">
           <a class="d-flex align-items-center " href="<?php echo site_url() . 'admin/parents-testimonials' ?>">
               <i data-feather='video'></i>
               <span class="menu-title text-truncate fw-bolder" data-i18n="blogs">Parents Testimonials</span>
           </a>
       </li>
       
       <li class="nav-item <?php if($page_name == 'careers' || $page_name == 'careers_add' || $page_name == 'careers_edit') echo 'active'; ?>">
           <a class="d-flex align-items-center " href="<?php echo site_url() . 'admin/careers' ?>">
               <i data-feather='trending-up'></i>
               <span class="menu-title text-truncate fw-bolder" data-i18n="blogs">Career</span>
           </a>
       </li>
       
       <li class="nav-item <?php if($page_name == 'brochure_enquiry') echo 'active'; ?>">
           <a class="d-flex align-items-center " href="<?php echo site_url() . 'admin/brochure-enquiry' ?>">
               <i data-feather='clipboard'></i>
               <span class="menu-title text-truncate fw-bolder" data-i18n="blogs">Brochure Enquiry</span>
           </a>
       </li>
       
       <li class="nav-item <?php if($page_name == 'career_enquiry') echo 'active'; ?>">
           <a class="d-flex align-items-center " href="<?php echo site_url() . 'admin/career-enquiry' ?>">
               <i data-feather='file-text'></i>
               <span class="menu-title text-truncate fw-bolder" data-i18n="blogs">Career Enquiry</span>
           </a>
       </li>
       
       <li class="nav-item <?php if($page_name == 'registered_event') echo 'active'; ?>">
           <a class="d-flex align-items-center " href="<?php echo site_url() . 'admin/registered-event' ?>">
               <i data-feather='file-text'></i>
               <span class="menu-title text-truncate fw-bolder" data-i18n="blogs">Registered Event Enquiry</span>
           </a>
       </li>
       
       <li class="nav-item <?php if($page_name == 'callback_enquiry') echo 'active'; ?>">
           <a class="d-flex align-items-center " href="<?php echo site_url() . 'admin/callback-enquiry' ?>">
               <i data-feather='file-text'></i>
               <span class="menu-title text-truncate fw-bolder" data-i18n="blogs">Callback Enquiry</span>
           </a>
       </li>
       
       <li class="nav-item <?php if($page_name == 'admission_enquiry') echo 'active'; ?>">
           <a class="d-flex align-items-center " href="<?php echo site_url() . 'admin/admission-enquiry' ?>">
               <i data-feather='file-text'></i>
               <span class="menu-title text-truncate fw-bolder" data-i18n="blogs">Admission Enquiry</span>
           </a>
       </li>
       
       <li class="nav-item <?php if($page_name == 'summer_camp_enquiry') echo 'active'; ?>">
           <a class="d-flex align-items-center " href="<?php echo site_url() . 'admin/summer-camp-enquiry' ?>">
               <i data-feather='file-text'></i>
               <span class="menu-title text-truncate fw-bolder" data-i18n="blogs">Summer Camp Enquiry</span>
           </a>
       </li>
       
       
       <li class="nav-item <?php if($page_name == 'youtube_enquiry') echo 'active'; ?>">
           <a class="d-flex align-items-center " href="<?php echo site_url() . 'admin/youtube-enquiry' ?>">
               <i data-feather='file-text'></i>
               <span class="menu-title text-truncate fw-bolder" data-i18n="blogs">Youtube Enquiry</span>
           </a>
       </li>
       
       
       <!-- <li class="nav-item <?php if($page_name == 'contact_enquiry') echo 'active'; ?>">
           <a class="d-flex align-items-center" href="<?php echo site_url() . 'admin/contact-enquiry' ?>">
               <i data-feather='phone'></i>
               <span class="menu-title text-truncate fw-bolder" data-i18n="contact_enquiry">Contact Enquiries</span>
           </a>
       </li> -->
       
       <li class="nav-item <?php if ($page_name == 'sitemap_management') echo 'active'; ?>">
           <a class="d-flex align-items-center" href="<?php echo site_url() . 'admin/sitemap-management'; ?>">
               <i data-feather="sitemap"></i>
               <span class="menu-title text-truncate fw-bolder" data-i18n="sitemap">Sitemap Generator</span>
           </a>
       </li>
       
    </ul>
</div>