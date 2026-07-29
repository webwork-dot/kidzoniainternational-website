<style>
   .card {
   margin-bottom: 1rem;}
   h2{
   font-size:2rem!important; font-weight:bold;margin-top: 10px!important;margin-bottom: 10px!important;
   }
   .dashborad .feather {
   color: #409a559c;
   width: 35px;
   height: auto;
   }
   .card-body{
   padding: 0.5rem;}
   .my-2 {
   margin-top: 0.5rem!important;
   margin-bottom: 0.5rem!important;
   }
   .extra-padd{
   padding-right: calc(var(--bs-gutter-x) * .5);
   padding-left: calc(var(--bs-gutter-x) * .5);
   margin-top: var(--bs-gutter-y);
   }
   .avatar.bg-light-primary {
   background:rgba(59,147,79,.12)!important
   }
   .dashborad .avatar .avatar-content {
   width: 27px;
   height: 27px;
   }
   .dashborad .center{
   text-align:center;
   }
   .dashborad .col-lg-4 .tilebox-one h6{
   font-size: 12px;
   }
   a.active {
   background: #d4222d;
   color: white;
   font-weight: 600;
   background: linear-gradient(118deg,#1e652e,rgb(66 157 87));
   box-shadow: 0 0 5px 1px rgb(30 101 46 / 46%);
   color: #FFF;
   font-weight: 400;
   border-radius: 4px;
   }
   a.a-flex {
   padding: 8px 8px 8px 8px;
   display: block;
   margin: 0 0 0px;
   text-align: center;
   }
   .no-padd {
   padding: 0px;
   }
   .f-size{
   font-size:12px;
   }
   .badge.badge-light-primary {
   margin-top: 5px;
   background-color: rgba(62, 151, 83,.12);
   color: #1e652e!important;
   }
   .card .card-title {
   font-weight: 500;
   font-size: 14px;
   margin-bottom: 0.5rem!important;
   }
   .card .card-title {
   font-weight: 500;
   font-size: 14px;
   margin-bottom: 0rem!important;
   }
   .birthday .card-header{
   background: linear-gradient(118deg,#1e652e,rgb(66 157 87));
   box-shadow: 0 0 5px 1px rgb(30 101 46 / 46%);
   padding: 0;
   text-align: center;
   display: block;
   }
   .birthday .card-header h6{
   color: white;
   padding: 10px 0px;
   font-weight: 800;
   font-size: 11px;
   }
   .birthday .card-body {
   padding-bottom: 0;
   border-bottom: 1px solid #ddd;
   padding-top: 0 !important;
   }
   .avatar.bg-light-primary1 {
   background: rgb(240, 133, 36, .12)!important;
   }
   .feather.feather-plus-square{
   color: #ef7f1a !important;}
   .avatar.bg-light-primary2 {
   background: rgb(16, 229, 255, .12)!important;
   }
   .feather.feather2{
   color:#00cfe8 !important;
   }
   .mx-stats .card-header {
   display: flex;
   flex-wrap: nowrap;
   align-content: space-between;
   justify-content: space-between;
   margin: auto 0 !important;
   padding: 15px 15px;
   min-height: 100px;
   }
   .mx-stats .card-header p {
   line-height: 16px;
   /* min-height: 30px;*/
   font-weight: 600;
   line-height: 18px;
   margin: 0px;
   }
   .mx-stats .card-header h2 {
   margin-top: 0px !important;
   }
   .card-congratulations {
   background: -webkit-linear-gradient(332deg,#7367F0,rgba(115,103,240,.7));
   background: linear-gradient(118deg,#7367F0,rgba(115,103,240,.7));
   color: #FFF;
   }
   .card-congratulations .bg-primary {
   --bs-bg-opacity: 1;
   background-color: rgba(var(--bs-primary-rgb),var(--bs-bg-opacity))!important;
   }
   .m-anni .card-header {
   align-items: flex-start;
   }
   .m-doctor .avatar .avatar-content {
   width: 40px;
   height: 40px;
   }
   .m-doctor  .font-medium-5 {
   font-size: 2rem!important;
   margin-top: 5px;
   font-weight: 500;
   }
   .m-asm  .avatar .avatar-content {
   width: 40px;
   height: 40px;
   }
   .m-asm  .font-medium-5 {
   font-size: 2rem!important;
   margin-top: 0px;
   margin-left: 5px;;
   }
   .ml-0{ margin-left: 0px!important;}
   .m-doctor  .avatar.avatar-xl .avatar-content {
   height: 70px!important;
   width: 70px!important;
   line-height: 45px;
   }
   .m-doctor  .avatar.avatar-xl .avatar-content i{
   font-size: 2.57rem!important;
   font-weight: 500;
   }
    .m-your  .avatar .avatar-content {
   width: 40px;
   height: 40px;
   }
   .m-your  .font-medium-5 {
   font-size: 2rem!important;
   margin-top: 0px;
   margin-left: 5px;;
   }
       .m-doctor .card-header {
   min-height: auto !important;;
   }
   
   .bno-radius{
    border-bottom-right-radius: 0px !important;
    border-bottom-left-radius: 0px !important;
    }
.dash-sidebar .avatar.avatar-xl .avatar-content {
    line-height: 42px;
    font-weight: 400;
}

.dash-sidebar .m-doctor .avatar .avatar-content {
    width: 26px;
    height: 26px;
    line-height: 14px;
}
.dash-sidebar .m-doctor .avatar .avatar-content {
    width: 26px;
    height: 26px;
    line-height: 14px;
}

.dash-sidebar .m-doctor .font-medium-5 {
    font-size: 1.5rem!important;
}
.dash-sidebar .m-doctor .card-header{
    padding: 10px 10px;
}
</style>
<section class="m-doctor mx-stats">
<div class="row match-height">
    
   <div class="col-lg-3 col-sm-6 col-12">
      <a href="<?php echo base_url().'admin/sliders';?>">
         <div class="card">
            <div class="card-header d-flex">
               <div>
                  <h2 class="text-bold-700 mb-0"><?php echo $sliders; ?> </h2>
                  <p><b>Pop-Up</b></p>
               </div>
               <div class="avatar bg-rgba-primary p-50 m-0">
                  <div class="avatar-content">
                     <i class="feather icon-sliders text-primary font-medium-5"></i>
                  </div>
               </div>
            </div>
         </div>
      </a>
   </div>
  
   <div class="col-lg-3 col-sm-6 col-12">
      <a href="<?php echo base_url().'admin/awards-and-recognitions';?>">
         <div class="card">
            <div class="card-header d-flex">
               <div>
                  <h2 class="text-bold-700 mb-0"><?php echo $awards_and_recognitions; ?> </h2>
                  <p title="Awards and Recognization"><b>Awards &amp; Recog...</b></p>
               </div>
               <div class="avatar bg-rgba-primary p-50 m-0">
                  <div class="avatar-content">
                     <i class="feather icon-users text-primary font-medium-5"></i>
                  </div>
               </div>
            </div>
         </div>
      </a>
   </div>
   
   <div class="col-lg-3 col-sm-6 col-12">
      <a href="<?php echo base_url().'admin/print-media';?>">
         <div class="card">
            <div class="card-header d-flex">
               <div>
                  <h2 class="text-bold-700 mb-0"><?php echo $print_medias; ?> </h2>
                  <p><b>Print Medias</b></p>
               </div>
               <div class="avatar bg-rgba-primary p-50 m-0">
                  <div class="avatar-content">
                     <i class="feather icon-camera text-primary font-medium-5"></i>
                  </div>
               </div>
            </div>
         </div>
      </a>
   </div>
   
   <div class="col-lg-3 col-sm-6 col-12">
      <a href="<?php echo base_url().'admin/achievements';?>">
         <div class="card">
            <div class="card-header d-flex">
               <div>
                  <h2 class="text-bold-700 mb-0"><?php echo $achievements; ?> </h2>
                  <p><b>Achievements</b></p>
               </div>
               <div class="avatar bg-rgba-primary p-50 m-0">
                  <div class="avatar-content">
                     <i class="feather icon-award text-primary font-medium-5"></i>
                  </div>
               </div>
            </div>
         </div>
      </a>
   </div>
   
   <div class="col-lg-3 col-sm-6 col-12">
      <a href="<?php echo base_url().'admin/branches';?>">
         <div class="card">
            <div class="card-header d-flex">
               <div>
                  <h2 class="text-bold-700 mb-0"><?php echo $branches; ?> </h2>
                  <p><b>Branches</b></p>
               </div>
               <div class="avatar bg-rgba-primary p-50 m-0">
                  <div class="avatar-content">
                     <i class="feather icon-package text-primary font-medium-5"></i>
                  </div>
               </div>
            </div>
         </div>
      </a>
   </div>
   
   <div class="col-lg-3 col-sm-6 col-12">
      <a href="<?php echo base_url().'admin/gallery';?>">
         <div class="card">
            <div class="card-header d-flex">
               <div>
                  <h2 class="text-bold-700 mb-0"><?php echo $gallery; ?> </h2>
                  <p><b>Gallery</b></p>
               </div>
               <div class="avatar bg-rgba-primary p-50 m-0">
                  <div class="avatar-content">
                     <i class="feather icon-folder text-primary font-medium-5"></i>
                  </div>
               </div>
            </div>
         </div>
      </a>
   </div>
   
   <!--
   <div class="col-lg-3 col-sm-6 col-12">
      <a href="<?php echo base_url().'admin/product-category';?>">
         <div class="card">
            <div class="card-header d-flex">
               <div>
                  <h2 class="text-bold-700 mb-0"><?php echo $category; ?> </h2>
                  <p><b>Product Categories</b></p>
               </div>
               <div class="avatar bg-rgba-primary p-50 m-0">
                  <div class="avatar-content">
                     <i class="feather icon-grid text-primary font-medium-5"></i>
                  </div>
               </div>
            </div>
         </div>
      </a>
   </div>
   <div class="col-lg-3 col-sm-6 col-12">
      <a href="<?php echo base_url().'admin/products';?>">
         <div class="card">
            <div class="card-header d-flex">
               <div>
                  <h2 class="text-bold-700 mb-0"><?php echo $products; ?> </h2>
                  <p><b>Products</b></p>
               </div>
               <div class="avatar bg-rgba-primary p-50 m-0">
                  <div class="avatar-content">
                     <i class="feather icon-package text-primary font-medium-5"></i>
                  </div>
               </div>
            </div>
         </div>
      </a>
   </div>
   -->
   
   <div class="col-lg-3 col-sm-6 col-12">
      <a href="<?php echo base_url().'admin/blogs';?>">
         <div class="card">
            <div class="card-header d-flex">
               <div>
                  <h2 class="text-bold-700 mb-0"><?php echo $blogs; ?> </h2>
                  <p><b>Blogs</b></p>
               </div>
               <div class="avatar bg-rgba-primary p-50 m-0">
                  <div class="avatar-content">
                     <i class="feather icon-edit text-primary font-medium-5"></i>
                  </div>
               </div>
            </div>
         </div>
      </a>
   </div>
   
   <div class="col-lg-3 col-sm-6 col-12">
      <a href="<?php echo base_url().'admin/event';?>">
         <div class="card">
            <div class="card-header d-flex">
               <div>
                  <h2 class="text-bold-700 mb-0"><?php echo $events; ?> </h2>
                  <p><b>Events</b></p>
               </div>
               <div class="avatar bg-rgba-primary p-50 m-0">
                  <div class="avatar-content">
                     <i class="feather icon-star text-primary font-medium-5"></i>
                  </div>
               </div>
            </div>
         </div>
      </a>
   </div>
   
   <div class="col-lg-3 col-sm-6 col-12">
      <a href="<?php echo base_url().'admin/parents-testimonials';?>">
         <div class="card">
            <div class="card-header d-flex">
               <div>
                  <h2 class="text-bold-700 mb-0"><?php echo $parents_testimonials; ?> </h2>
                  <p><b>Parent Testimonials</b></p>
               </div>
               <div class="avatar bg-rgba-primary p-50 m-0">
                  <div class="avatar-content">
                     <i class="feather icon-video text-primary font-medium-5"></i>
                  </div>
               </div>
            </div>
         </div>
      </a>
   </div>
   
   <div class="col-lg-3 col-sm-6 col-12">
      <a href="<?php echo base_url().'admin/careers';?>">
         <div class="card">
            <div class="card-header d-flex">
               <div>
                  <h2 class="text-bold-700 mb-0"><?php echo $careers; ?> </h2>
                  <p><b>Career</b></p>
               </div>
               <div class="avatar bg-rgba-primary p-50 m-0">
                  <div class="avatar-content">
                     <i class="feather icon-trending-up text-primary font-medium-5"></i>
                  </div>
               </div>
            </div>
         </div>
      </a>
   </div>
   
   <div class="col-lg-3 col-sm-6 col-12">
      <a href="<?php echo base_url().'admin/brochure-enquiry';?>">
         <div class="card">
            <div class="card-header d-flex">
               <div>
                  <h2 class="text-bold-700 mb-0"><?php echo $brochure; ?> </h2>
                  <p><b>Brochure Enquiry</b></p>
               </div>
               <div class="avatar bg-rgba-primary p-50 m-0">
                  <div class="avatar-content">
                     <i class="feather icon-clipboard text-primary font-medium-5"></i>
                  </div>
               </div>
            </div>
         </div>
      </a>
   </div>
   
   <div class="col-lg-3 col-sm-6 col-12">
      <a href="<?php echo base_url().'admin/career-enquiry';?>">
         <div class="card">
            <div class="card-header d-flex">
               <div>
                  <h2 class="text-bold-700 mb-0"><?php echo $career_enquiry; ?> </h2>
                  <p><b>Career Enquiry</b></p>
               </div>
               <div class="avatar bg-rgba-primary p-50 m-0">
                  <div class="avatar-content">
                     <i class="feather icon-file-text text-primary font-medium-5"></i>
                  </div>
               </div>
            </div>
         </div>
      </a>
   </div>
   
   <!--
   <div class="col-lg-3 col-sm-6 col-12">
      <a href="<?php echo base_url().'admin/contact-enquiry';?>">
         <div class="card">
            <div class="card-header d-flex">
               <div>
                  <h2 class="text-bold-700 mb-0"><?php echo 0; ?> </h2>
                  <p><b>Contact Enquiries</b></p>
               </div>
               <div class="avatar bg-rgba-primary p-50 m-0">
                  <div class="avatar-content">
                     <i class="feather icon-phone text-primary font-medium-5"></i>
                  </div>
               </div>
            </div>
         </div>
      </a>
   </div>
   -->
   
</div>
</section>