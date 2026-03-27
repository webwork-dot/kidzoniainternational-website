<style>
.custom-logo-style {
  width: 40%;
  position: absolute;
  left: 30%;
  top: 0px;
}
</style>

<!-- Preload Swiper CSS for better performance -->
<link rel="preload" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
<noscript><link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"></noscript>

<?php 
$all_branches = $this->crud_model->get_branches()->result_array();
$seo_curriculums = $this->crud_model->get_seo_curriculums();

// Filter for header: Specific Hyderabad IDs and show all cities
$header_branch_ids = [2, 3, 4, 7, 8];
$grouped_branches = [];
foreach($all_branches as $branch){
    $city = strtolower($branch['city']);
    if ($city == 'hyderabad') {
        if (in_array($branch['id'], $header_branch_ids)) {
            $grouped_branches[$city][] = $branch;
        }
    } else {
        // Just ensure the city key exists for Mumbai/Pune even if branches are hidden later
        if (!isset($grouped_branches[$city])) {
            $grouped_branches[$city] = [];
        }
        $grouped_branches[$city][] = $branch;
    }
}
?>
<a href="javascript:void(0);"
  onclick="showAjaxEnquiryModal('<?php echo base_url();?>modal/popup_front/modal_enquiry_now','Enquiry Now!');"
  class="sidebar-contact">
  <div class="toggle_sidebar_icon">&nbsp;&nbsp;Request a Callback</div>
</a>
<a href="<?= base_url();?>admission-enquiry" class="sidebar-contact">
  <div class="toggle_sidebar_icon_2">&nbsp;&nbsp;Enquiry Now!</div>
</a>

<div class="vmore-widget-wrap vmore-element-populated vmore  pull-bs-canvas-right col-md-1">
  <div
    class="vmore-element vmore-element-6ba2a6cb vmore-widget__width-auto vmore-view-default vmore-position-top vmore-mobile-position-top vmore-widget vmore-widget-icon-box"
    data-id="6ba2a6cb" data-element_type="widget" id="Menu" data-widget_type="icon-box.default">
    <div class="vmore-widget-container">
      <div class="vmore-icon-box-wrapper">
        <div class="vmore-icon-box-content">
          <h3 class="vmore-icon-box-title">
            <a href="#">
              CONTACT
            </a>
          </h3>
        </div>
        <div class="vmore-icon-box-icon">
          <a href="#" class="vmore-icon vmore-animation-skew-forward " tabindex="-1">
            <svg xmlns="http://www.w3.org/2000/svg" id="Capa_1" height="512" viewBox="0 0 512.266 512.266" width="512">
              <path
                d="m476.393 67.628h-440.52c-19.78 0-35.873 16.092-35.873 35.872v167.269c0 4.143 3.357 7.5 7.5 7.5s7.5-3.357 7.5-7.5v-121.687l166.065 107.051-166.065 107.051v-58.549c0-4.143-3.357-7.5-7.5-7.5s-7.5 3.357-7.5 7.5v104.13c0 19.78 16.093 35.872 35.873 35.872h440.52c19.78 0 35.873-16.092 35.873-35.872v-305.265c0-19.78-16.093-35.872-35.873-35.872zm20.873 341.137c0 .596-.271 3.269-.347 3.694-.072.39-.154.777-.246 1.161-2.197 9.171-10.444 16.017-20.28 16.017h-440.52c-11.51 0-20.873-9.363-20.873-20.872v-27.734l179.907-115.975 45.615 29.405c4.74 3.056 10.173 4.584 15.607 4.584 5.437 0 10.875-1.53 15.622-4.59l45.534-29.446 179.979 116.021v27.735zm0-277.53-65.347 42.125c-3.481 2.244-4.484 6.886-2.24 10.367 2.245 3.481 6.885 4.485 10.367 2.24l57.22-36.886v214.102l-166.159-107.111 79.736-51.564c3.479-2.249 4.475-6.893 2.226-10.37-2.25-3.479-6.896-4.477-10.37-2.226l-139.082 89.941c-4.546 2.929-10.421 2.931-14.967 0l-233.65-150.618v-27.735c0-11.509 9.363-20.872 20.873-20.872h440.52c11.51 0 20.873 9.363 20.873 20.872z">
              </path>
            </svg>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="bs-canvas bs-canvas-right position-fixed bg-cart h-100 canvas-minfo">
  <div class="bs-canvas-header side-cart-header">
    <img class="btAltLogo custom-logo-style" src="<?= base_url();?>uploads/2023/07/kidzonia_logo.png"
      alt="Kidzonia International - Best Nursery, Preschool & Childcare in Hyderabad, Mumbai and Pune">
    <button type="button" class="bs-canvas-close close" aria-label="Close"><i class="bi bi-x-square-fill"></i></button>
  </div>

  <div class="bs-canvas-body">

    <div class="desktop-cart--empty-cart-container">
      <div class="desktop-cart--empty-cart-left">


        <a class="btn btn-canvas" href="<?= base_url().'admission-enquiry';?>">Admission Process </a>
        <a class="btn btn-canvas" href="javascript:void(0);"
          onclick="showAjaxEnquiryModal('<?php echo base_url();?>modal/popup_front/modal_enquiry_download_brochure','Download Brochure');">Download
          E-Brochure </a>
        <a class="btn btn-canvas" href="<?= base_url().'career';?>">Career</a>


        <div
          class="bt_bb_column_inner col-xxl-12 col-xl-12 col-xs-12 col-sm-12 col-md-12 col-lg-12 bt_bb_align_left bt_bb_vertical_align_top bt_bb_shape_inherit">
          <div class="bt_bb_column_inner_content">
            <header
              class="bt_bb_headline bt_bb_color_scheme_5 bt_bb_dash_none bt_bb_superheadline bt_bb_size_normal bt_bb_align_inherit btNoHeadline">
              <h4 class="bt_bb_headline_tag"><span class="bt_bb_headline_superheadline">Kidzonia International
                  Preschool, Daycare and Playschool</span></h4>
            </header>
            <div
              class="bt_bb_separator_v2 bt_bb_border_style_none bt_bb_top_spacing_none bt_bb_bottom_spacing_20 bt_bb_border_thickness_1 bt_bb_icon_size_normal bt_bb_text_size_normal bt_bb_separator_v2_without_content">
              <div class="bt_bb_separator_v2_inner"><span class="bt_bb_separator_v2_inner_before"></span><span
                  class="bt_bb_separator_v2_inner_content"><span data-ico-="&#x;"
                    class="bt_bb_icon_holder"></span></span><span class="bt_bb_separator_v2_inner_after"></span></div>
            </div>
            <div
              class="bt_bb_icon bt_bb_color_scheme_14 bt_bb_text_color_scheme_5 bt_bb_style_borderless  bt_bb_semitransparent_text bt_bb_size_small bt_bb_shape_circle bt_bb_align_inherit bt_bb_title_size_large"
              class="bt_bb_icon_holder"><span><span data-ico-remixiconsmap="" class="bt_bb_icon_holder"><span>
                    <b>Suraka Educational Society,</b><br>
                    2nd floor, 169/33, Ratnadeep Lane,
                    beside GHMC Park, near kidzonia school,
                    HUDA Layout, Nallagandla, Hyderabad, Telangana
                    500019</span></span></div>
            <div
              class="bt_bb_separator_v2 bt_bb_border_style_none bt_bb_top_spacing_none bt_bb_bottom_spacing_15 bt_bb_border_thickness_1 bt_bb_icon_size_normal bt_bb_text_size_normal bt_bb_separator_v2_without_content">
              <div class="bt_bb_separator_v2_inner"><span class="bt_bb_separator_v2_inner_before"></span><span
                  class="bt_bb_separator_v2_inner_content"><span data-ico-="&#x;"
                    class="bt_bb_icon_holder"></span></span><span class="bt_bb_separator_v2_inner_after"></span></div>
            </div>
            <div
              class="bt_bb_icon bt_bb_color_scheme_14 bt_bb_text_color_scheme_5 bt_bb_style_borderless  bt_bb_semitransparent_text bt_bb_size_small bt_bb_shape_circle bt_bb_align_inherit bt_bb_title_size_large">
              <span data-ico-remixiconsdevice="&#xe951;" class="bt_bb_icon_holder"><span>+91 9100 25 6256</span></span>
            </div>
            <div
              class="bt_bb_separator_v2 bt_bb_border_style_none bt_bb_top_spacing_none bt_bb_bottom_spacing_15 bt_bb_border_thickness_1 bt_bb_icon_size_normal bt_bb_text_size_normal bt_bb_separator_v2_without_content">
              <div class="bt_bb_separator_v2_inner"><span class="bt_bb_separator_v2_inner_before"></span><span
                  class="bt_bb_separator_v2_inner_content"><span data-ico-="&#x;"
                    class="bt_bb_icon_holder"></span></span><span class="bt_bb_separator_v2_inner_after"></span></div>
            </div>
            <div
              class="bt_bb_icon bt_bb_color_scheme_14 bt_bb_text_color_scheme_5 bt_bb_style_borderless  bt_bb_semitransparent_text bt_bb_size_small bt_bb_shape_circle bt_bb_align_inherit bt_bb_title_size_large">
              <span data-ico-remixiconsbusiness="&#xe96b;"
                class="bt_bb_icon_holder"><span>info@kidzoniainternational.in</span></span></div>

          </div>

          <div data-bb-version="4.6.0"
            class="bt_bb_separator_v2 bt_bb_border_style_none bt_bb_top_spacing_none bt_bb_bottom_spacing_normal bt_bb_border_thickness_1 bt_bb_icon_size_normal bt_bb_text_size_normal bt_bb_separator_v2_without_content">
            <div class="bt_bb_separator_v2_inner">
              <span class="bt_bb_separator_v2_inner_before"></span><span class="bt_bb_separator_v2_inner_content"><span
                  data-ico-="&#x;" class="bt_bb_icon_holder"></span></span><span
                class="bt_bb_separator_v2_inner_after"></span>
            </div>
          </div>
          <div data-bb-version="4.6.0" class="bt_bb_row_inner"></div>
          <div data-bb-version="4.6.1"
            class="bt_bb_icon bt_bb_color_scheme_6 bt_bb_style_filled bt_bb_align_content_center bt_bb_size_normal bt_bb_shape_circle bt_bb_align_inherit"
            style="
                          --primary-color: var(--accent-color);
                          --secondary-color:#ffffff;
                        "
            data-bt-override-class='{"bt_bb_align_content_":{"current_class":"bt_bb_align_content_center","xxl":"center"},"bt_bb_size_":{"current_class":"bt_bb_size_normal","xxl":"normal"},"bt_bb_align_":{"current_class":"bt_bb_align_inherit","xxl":"inherit"}}'>
            <a href="https://www.facebook.com/KidzoniaPreschoolHyderabad?mibextid=ZbWKwL" target="_blank"
              data-ico-fontawesome="&#xf09a;" class="bt_bb_icon_holder"></a>
          </div>
          <div data-bb-version="4.6.1"
            class="bt_bb_icon bt_bb_color_scheme_6 bt_bb_style_filled bt_bb_align_content_center bt_bb_size_normal bt_bb_shape_circle bt_bb_align_inherit"
            style="
                          --primary-color: var(--accent-color);
                          --secondary-color:#ffffff;
                        "
            data-bt-override-class='{"bt_bb_align_content_":{"current_class":"bt_bb_align_content_center","xxl":"center"},"bt_bb_size_":{"current_class":"bt_bb_size_normal","xxl":"normal"},"bt_bb_align_":{"current_class":"bt_bb_align_inherit","xxl":"inherit"}}'>
            <a href="https://instagram.com/kidzonia_hyderabad?igshid=MzRlODBiNWFlZA==" target="_blank"
              data-ico-fontawesome="&#xf16d;" class="bt_bb_icon_holder"></a>
          </div>
          <div data-bb-version="4.6.1"
            class="bt_bb_icon bt_bb_color_scheme_6 bt_bb_style_filled bt_bb_align_content_center bt_bb_size_normal bt_bb_shape_circle bt_bb_align_inherit"
            style="
                          --primary-color: var(--accent-color);
                          --secondary-color:#ffffff;
                        "
            data-bt-override-class='{"bt_bb_align_content_":{"current_class":"bt_bb_align_content_center","xxl":"center"},"bt_bb_size_":{"current_class":"bt_bb_size_normal","xxl":"normal"},"bt_bb_align_":{"current_class":"bt_bb_align_inherit","xxl":"inherit"}}'>
            <a href="https://youtube.com/@KIDZONIAINTERNATIONALPRESCHOOL?si=v37dXLROEXXubzJ_" target="_blank"
              data-ico-remixicons-logos="&#xe9b9;" class="bt_bb_icon_holder"></a>
          </div>
          <div data-bb-version="4.6.1"
            class="bt_bb_icon bt_bb_color_scheme_6 bt_bb_style_filled bt_bb_align_content_center bt_bb_size_normal bt_bb_shape_circle bt_bb_align_inherit"
            style="
                          --primary-color: var(--accent-color);
                          --secondary-color:#ffffff;
                        "
            data-bt-override-class='{"bt_bb_align_content_":{"current_class":"bt_bb_align_content_center","xxl":"center"},"bt_bb_size_":{"current_class":"bt_bb_size_normal","xxl":"normal"},"bt_bb_align_":{"current_class":"bt_bb_align_inherit","xxl":"inherit"}}'>
            <a href="https://twitter.com/Kidzoniapre_Hyd" target="_blank" data-ico-remixicons-logos="&#xe99d;"
              class="bt_bb_icon_holder"></a>
          </div>
          <div data-bb-version="4.6.1"
            class="bt_bb_icon bt_bb_color_scheme_6 bt_bb_style_filled bt_bb_align_content_center bt_bb_size_normal bt_bb_shape_circle bt_bb_align_inherit"
            style="
                          --primary-color: var(--accent-color);
                          --secondary-color:#ffffff;
                        "
            data-bt-override-class='{"bt_bb_align_content_":{"current_class":"bt_bb_align_content_center","xxl":"center"},"bt_bb_size_":{"current_class":"bt_bb_size_normal","xxl":"normal"},"bt_bb_align_":{"current_class":"bt_bb_align_inherit","xxl":"inherit"}}'>
            <a href="https://www.linkedin.com/in/kidzonia-hyderabad-87451428a/" target="_blank"
              data-ico-fontawesome="&#xf0e1;" class="bt_bb_icon_holder"></a>
          </div>
          <div data-bb-version="4.6.0"
            class="bt_bb_separator_v2 bt_bb_border_style_none bt_bb_top_spacing_none bt_bb_bottom_spacing_medium bt_bb_border_thickness_1 bt_bb_icon_size_normal bt_bb_text_size_normal bt_bb_separator_v2_without_content"
            data-bt-override-class='{"bt_bb_top_spacing_":{"current_class":"bt_bb_top_spacing_none","xxl":"none"},"bt_bb_bottom_spacing_":{"current_class":"bt_bb_bottom_spacing_medium","xxl":"medium"},"bt_bb_border_thickness_":{"current_class":"bt_bb_border_thickness_1","xxl":"1"},"bt_bb_icon_size_":{"current_class":"bt_bb_icon_size_normal","xxl":"normal"},"bt_bb_text_size_":{"current_class":"bt_bb_text_size_normal","xxl":"normal"}}'>
            <div class="bt_bb_separator_v2_inner">
              <span class="bt_bb_separator_v2_inner_before"></span><span class="bt_bb_separator_v2_inner_content"><span
                  data-ico-="&#x;" class="bt_bb_icon_holder"></span></span><span
                class="bt_bb_separator_v2_inner_after"></span>
            </div>
          </div>


        </div>


      </div>
    </div>

  </div>

</div>



<div class="btVerticalHeaderTop">
  <div class="btVerticalMenuTrigger">&nbsp; <div class="bt_bb_icon" data-bt-override-class="{}">
      <a href="#" target="_self" data-ico-fa="&#xf0c9;" class="bt_bb_icon_holder"></a>
    </div>
  </div>
  <div class="btLogoArea">
    <div class="logo">
      <span>
        <a href="<?php echo base_url();?>">
          <img class="btMainLogo" data-hw="1.7223974763407" src="<?= base_url();?>uploads/2023/07/kidzonia_logo.png"
            alt="Kidzonia International - Best Nursery, Preschool & Childcare in Hyderabad, Mumbai and Pune" fetchpriority="high" width="200" height="116">
          <img class="btAltLogo" src="<?= base_url();?>uploads/2023/07/kidzonia_logo.png"
            alt="Kidzonia International - Best Nursery, Preschool & Childcare in Hyderabad, Mumbai and Pune" fetchpriority="high" width="200" height="116">
        </a>
      </span>
    </div>
    <!-- /logo -->
  </div>
  <!-- /btLogoArea -->
</div>
<header class="mainHeader btClear " style="background: white; color: black;">
  <div class="mainHeaderInner">
    <div class="btLogoArea menuHolder btClear">
      <div class="port">
        <div class="btHorizontalMenuTrigger">&nbsp; <div class="bt_bb_icon" data-bt-override-class="{}">
            <a href="#" target="_self" data-ico-fa="&#xf0c9;" class="bt_bb_icon_holder"></a>
          </div>
        </div>
        <div class="logo">
          <span>
            <a href="<?php echo base_url();?>">
              <img class="btMainLogo" data-hw="1.7223974763407" src="<?= base_url();?>uploads/2023/07/kidzonia_logo.png"
                alt="Kidzonia International - Best Nursery, Preschool & Childcare in Hyderabad, Mumbai and Pune">
              <img class="btAltLogo" src="<?= base_url();?>uploads/2023/07/kidzonia_logo.png"
                alt="Kidzonia International - Best Nursery, Preschool & Childcare in Hyderabad, Mumbai and Pune">
            </a>
          </span>
        </div>
        <!-- /logo -->
        <div class="menuPort">
          <div class="topBarInMenu">
            <div class="topBarInMenuCell">
              <div
                class="btButtonWidget bt_bb_button bt_bb_width_inline bt_bb_shape_inherit  bt_bb_align_inherit m-call-btn bt_bb_icon_style_border bt_bb_icon_position_left bt_bb_size_small bt_bb_shape_inherit bt_bb_color_scheme_18 btWithIcon btWithLink"
                style="--primary-color: var(--dark-font-color); --secondary-color: var(--accent-color); ">

                <a href="tel:9100256256" target="_self" class="bt_bb_link"><span class="bt_bb_button_text">9100 256
                    256</span><span data-ico-remixiconsdevice="" class="bt_bb_icon_holder"></span></a>
              </div>
            </div>
            <!-- /topBarInMenu -->
          </div>




          <!-- /topBarInMenuCell -->
          <nav>
            <ul id="menu-kidzonia" class="menu">
              <li id="menu-item-3206"
                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-1764 current_page_item menu-item-3206">
                <a href="<?php echo base_url();?>" aria-current="page" title="Home">Home</a>
              </li>
              <li id="menu-item-3207"
                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-3207">
                <a href="#" title="About Us">About Us</a>
                <ul class="sub-menu">
                  <li id="menu-item-3583"
                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3583">
                    <a href="<?php echo base_url();?>about-us" title="About Us">About Us</a>
                  </li>
                  <li id="menu-item-3706"
                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3706">
                    <a href="<?php echo base_url();?>our-learning-spaces-amenities"
                      title="Our Learning Spaces & Amenities">Our Learning Spaces &#038; Amenities</a>
                  </li>
                  <li id="menu-item-3912"
                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3912">
                    <a href="<?php echo base_url();?>awards-recognitions">Awards &#038; Recognitions</a>
                  </li>
                </ul>
              </li>
              <li id="menu-item-3218"
                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-3218">
                <a href="#">Kidzonia World</a>
                <ul class="sub-menu">
                  <li id="menu-item-3673"
                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3673">
                    <a href="<?php echo base_url();?>our-curriculum" title="Our Curriculum">Our Curriculum</a>
                  </li>
                  <li id="menu-item-3798"
                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3798">
                    <a href="<?php echo base_url();?>our-programmes" title="Our Programmes">Our Programmes</a>
                  </li>
                  <li id="menu-item-3696"
                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3696">
                    <a href="<?php echo base_url();?>a-day-at-kidzonia" title="A Day at Kidzonia">A Day at Kidzonia</a>
                  </li>
                  <li id="menu-item-3743"
                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3743">
                    <a href="<?php echo base_url();?>kidzonia-commits" title="Kidzonia Commits">Kidzonia Commits</a>
                  </li>
                  <li id="menu-item-3743"
                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3743">
                    <a href="<?php echo base_url();?>ixplore" title="Ixplore">ixplore</a>
                  </li>
                  <li id="menu-item-3743"
                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3743">
                    <a href="<?php echo base_url();?>whizkids" title="Whizkids">Whizkids</a>
                  </li>
                </ul>
              </li>
              <li id="menu-item-3229"
                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-3229">
                <a href="#" title="Admissions">Admissions</a>
                <ul class="sub-menu">
                  <li id="menu-item-4250"
                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4250">
                    <a href="<?php echo base_url();?>admission-enquiry" title="Admissions">Admissions</a>
                  </li>
                  <li id="menu-item-4209"
                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4209">
                    <a href="<?php echo base_url();?>our-teachers" title="Our Teachers">Our Teachers</a>
                  </li>
                </ul>
              </li>
              <li id="menu-item-3230"
                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-3230">
                <a href="#" title="Media">Media</a>
                <ul class="sub-menu">
                  <li id="menu-item-5473"
                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5473">
                    <a href="<?php echo base_url();?>print-media" title="Print Media">Print Media</a>
                  </li>
                  <li id="menu-item-5479"
                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5479">
                    <a href="<?php echo base_url();?>achievements" title="Achievements">Achievements</a>
                  </li>
                  <li id="menu-item-5456"
                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5456">
                    <a href="<?php echo base_url();?>kidzonia-gallery" title="Kidzonia Gallery">Kidzonia Gallery</a>
                  </li>
                  <li id="menu-item-4515"
                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4515">
                    <a href="<?php echo base_url();?>blogs" title="Blogs">Blogs</a>
                  </li>
                  <li id="menu-item-4515"
                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4515">
                    <a href="<?php echo base_url();?>digital-news" title="Digital News">Digital News</a>
                  </li>
                </ul>
              </li>
              <li id="menu-item-4631"
                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-4631">
                <a href="#" title="Explore Centers">Explore Centers</a>
                <ul class="sub-menu">
                  <?php foreach($grouped_branches as $city => $city_branches){ ?>
                  <li id="menu-item-city-<?php echo $city; ?>"
                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-city-<?php echo $city; ?>">
                    <a href="<?php echo $this->common_model->get_seo_url('', 'preschool', $city); ?>" title="<?php echo ucfirst($city); ?>"><?php echo ucfirst($city); ?></a>
                     <?php if($city == 'hyderabad'){ ?>
                     <ul class="sub-menu">
                       <?php foreach($city_branches as $branch){ ?>
                       <li id="menu-item-branch-<?php echo $branch['id']; ?>"
                         class="menu-item menu-item-type-post_type menu-item-object-page menu-item-branch-<?php echo $branch['id']; ?>">
                         <a href="<?php echo $this->common_model->get_seo_url($branch['slug'], 'preschool', $city); ?>"
                           title="<?php echo $branch['name']; ?>"><?php echo $branch['name']; ?></a>
                       </li>
                       <?php } ?>
                     </ul>
                     <?php } ?>
                  </li>
                  <?php } ?>
                </ul>
              </li>
              <li id="menu-item-4098"
                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-4098">
                <a href="#" title="Contact Us">Contact Us</a>
                <ul class="sub-menu">
                  <li id="menu-item-4099"
                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4099">
                    <a href="<?php echo base_url();?>contact-us" title="Contact Us">Contact Us</a>
                  </li>
                  <li id="menu-item-4189"
                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4189">
                    <a href="<?php echo base_url();?>career" title="Career">Career</a>
                  </li>
                </ul>
              </li>
			  
			  

<style>			  
.shop-btn { 
    display: inline !important;
    align-items: center;
    gap: 6px;
    border: 1px solid #ddd;
    padding: 8px 15px !important;
    border-radius: 5px;
    background: #336699;
    color: #fff !important;
    text-decoration: none;
    transition: all 0.3s ease-in-out;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
}

.shop-btn svg {
    width: 20px;
    height: 20px;
}

.shop-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 6px 18px rgba(0, 0, 0, 0.25);
    background: #dd2a1b;
}
</style>
		    <li id="menu-item-4098"
                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-4098 d-inline-block">
						<a href="https://shop.academosedutech.com" target="_blank" 
						   class="shop-btn" title="Shop Now">
							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M7.5 7.67001V6.70001C7.5 4.45001 9.31 2.24001 11.56 2.03001C14.24 1.77001 16.5 3.88001 16.5 6.51001V7.89001" stroke="#fff" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path><path d="M8.99999 22H15C19.02 22 19.74 20.39 19.95 18.43L20.7 12.43C20.97 9.99 20.27 8 16 8H7.99999C3.72999 8 3.02999 9.99 3.29999 12.43L4.04999 18.43C4.25999 20.39 4.97999 22 8.99999 22Z" stroke="#fff" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path><path d="M15.4955 12H15.5045" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path><path d="M8.49451 12H8.50349" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path></svg> Shop
						</a>
					</li>



			  
			  
            </ul>
          </nav>
        </div>
        <!-- .menuPort -->
      </div>
      <!-- /port -->
    </div>
    <!-- /menuHolder / btBelowLogoArea -->
  </div>
  <!-- / inner header for scrolling -->
</header>