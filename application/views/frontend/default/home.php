<!-- Include Swiper CSS -->
<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"
/>
<style>
   video {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: auto;
      object-fit: contain;
      z-index: 0;
   }

   .pt-b-5 {
      padding-top: 3rem !important;
   }

   .mt-b-5 {
      margin-top: 3rem !important;
   }

   @media (max-width: 767px) {
      .pt-b-5 {
         padding-top: 0.5rem !important;
      }

      .mt-b-5 {
         margin-top: 0.5rem !important;
      }

      .bt_bb_card .bt_bb_headline .bt_bb_headline_content span {
         font-size: 21px !important;
      }
   }
   .video-popup {
  position: fixed;
  top: 13vh;
  left: 0;
  width: 100%;
  height: 100%;
  display: none; /* hidden by default */
  justify-content: center;
  align-items: center;
  background: rgba(0, 0, 0, 0.7); /* semi-transparent overlay */
  z-index: 9999;
}

.video-popup-content {
  /*position: relative;*/
  max-width: 80%;
  max-height: 80%;
  background: #000;
  padding: 10px;
  border-radius: 10px;
  display: flex;
  justify-content: center;
  align-items: center;
}

.video-popup-content video {
  width: 100%;
  height: auto;
  max-height: 100%;
  display: block;
}


.close-popup {
  position: absolute;
  top: -15px;
  right: -15px;
  color: #fff;
  background: #000;
  border-radius: 50%;
  padding: 5px 10px;
  font-size: 24px;
  cursor: pointer;
  z-index: 10000;
}

   
   .svg-block.image-left image {-webkit-transform:translateX(-19%);-ms-transform:translateX(-19%);transform:translateX(-19%)}.svg-block.video-block{position:relative}.svg-block.video-block p{position:absolute;top:50%;left:50%;-webkit-transform:translate(-50%,-50%);-ms-transform:translate(-50%,-50%);transform:translate(-50%,-50%)}.svg-block svg{width:100%}.svg-block svg mask{mask-type:alpha}@media (max-width:767px){.svg-block{max-width:100%;margin-left:auto;margin-right:auto}}@media (max-width:480px){.svg-block{max-width:100%}}.video-btn{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-box-align:center;-webkit-align-items:center;-ms-flex-align:center;align-items:center;font-family:"Poppins",sans-serif;font-style:normal;font-weight:600;font-size:14px;letter-spacing:.05em;color:rgba(229,9,20,.8)}.video-btn:hover{text-decoration:underline;color:#46AADD}.video-btn .play-ico{margin-right:13px}.video-btn .play-ico span{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-box-align:center;-webkit-align-items:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:center;-webkit-justify-content:center;-ms-flex-pack:center;justify-content:center;width:36px;height:36px;-webkit-border-radius:50%;border-radius:50%;background:rgba(229,9,20,.8)}.video-btn .play-ico.x2 img{height:16px;width:auto;}.video-btn .play-ico.animate{position:relative;z-index:10}.video-btn .play-ico.animate::before{content:'';position:absolute;top:50%;left:50%;width:80%;z-index:1;height:80%;-webkit-border-radius:50%;border-radius:50%;background:rgb(255 255 255 / 80%);opacity:1;-webkit-transform:translate(-50%,-50%);-ms-transform:translate(-50%,-50%);transform:translate(-50%,-50%);z-index:-1;-webkit-transition:all .3s;transition:all .3s;-webkit-animation:pulseElem 1s infinite linear;animation:pulseElem 1s infinite linear}.video-btn .play-ico.animate::before{width:120%;height:120%}.video-btn .play-ico.animate span{position:relative;z-index:10}.video-btn .play-ico.animate .play-ico{position:relative;z-index:10;margin:0}.video-btn .play-ico img{height:16px;margin-right:-4px;-webkit-filter:brightness(0) invert(1)!important;filter:brightness(0) invert(1)!important}@media (max-width:480px){.video-btn .play-ico.animate{position:relative;z-index:10}.video-btn .play-ico.animate::before{display:none}}@-webkit-keyframes pulseElem{0%{width:80%;height:80%;opacity:1}100%{width:150%;height:150%;opacity:0}}@keyframes pulseElem{0%{width:80%;height:80%;opacity:1}100%{width:150%;height:150%;opacity:0}}.course-box-wrap a{color:#000}
.awards-recognition-img{
 max-height:261px !important;
 min-height:261px important;
 width:100% !important;
}


@media (min-width: 768px) and (max-width: 1024px) {
   #bt_bb_section656da16aae9f6 {
      max-height: 360px !important;
   }
   
   .btTransparentLightHeader .btVerticalMenuTrigger .bt_bb_icon:before, .btAccentDarkHeader .btVerticalMenuTrigger .bt_bb_icon:before, .btLightAccentHeader .btVerticalMenuTrigger .bt_bb_icon:before, .btHasAltLogo .btVerticalMenuTrigger .bt_bb_icon:before, .btTransparentLightHeader .btVerticalMenuTrigger .bt_bb_icon:after, .btAccentDarkHeader .btVerticalMenuTrigger .bt_bb_icon:after, .btLightAccentHeader .btVerticalMenuTrigger .bt_bb_icon:after, .btHasAltLogo .btVerticalMenuTrigger .bt_bb_icon:after, .btTransparentLightHeader .btVerticalMenuTrigger .bt_bb_icon .bt_bb_icon_holder:before, .btAccentDarkHeader .btVerticalMenuTrigger .bt_bb_icon .bt_bb_icon_holder:before, .btLightAccentHeader .btVerticalMenuTrigger .bt_bb_icon .bt_bb_icon_holder:before, .btHasAltLogo .btVerticalMenuTrigger .bt_bb_icon .bt_bb_icon_holder:before{
      border-top-color: #000 !important;
   }


}

@media (max-width: 768px) {
   #bt_bb_section656da16aae9f6 {
      max-height: 170px !important;
   }

   .btTransparentLightHeader .btVerticalMenuTrigger .bt_bb_icon:before, .btAccentDarkHeader .btVerticalMenuTrigger .bt_bb_icon:before, .btLightAccentHeader .btVerticalMenuTrigger .bt_bb_icon:before, .btHasAltLogo .btVerticalMenuTrigger .bt_bb_icon:before, .btTransparentLightHeader .btVerticalMenuTrigger .bt_bb_icon:after, .btAccentDarkHeader .btVerticalMenuTrigger .bt_bb_icon:after, .btLightAccentHeader .btVerticalMenuTrigger .bt_bb_icon:after, .btHasAltLogo .btVerticalMenuTrigger .bt_bb_icon:after,.btTransparentLightHeader .btVerticalMenuTrigger .bt_bb_icon .bt_bb_icon_holder:before, .btAccentDarkHeader .btVerticalMenuTrigger .bt_bb_icon .bt_bb_icon_holder:before, .btLightAccentHeader .btVerticalMenuTrigger .bt_bb_icon .bt_bb_icon_holder:before, .btHasAltLogo .btVerticalMenuTrigger .bt_bb_icon .bt_bb_icon_holder:before{
      border-top-color: #000 !important;
   }

   .bt_bb_layout_boxed_1200 .bt_bb_cell{
      max-width: calc(100% - 75px) !important;
   }

   .bt_bb_size_extralarge.bt_bb_headline h1, .bt_bb_size_extralarge.bt_bb_headline h2, .bt_bb_size_extralarge.bt_bb_headline h3, .bt_bb_size_extralarge.bt_bb_headline h4, .bt_bb_size_extralarge.bt_bb_headline h5, .bt_bb_size_extralarge.bt_bb_headline h6{
      text-align: left !important;
   }
}

</style>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css"/>
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>

<div class="btContentWrap btClear">
   <div class="btContentHolder">
      <div class="btContent">
         <div class="bt_bb_wrapper">

            <!-- banner -->

            <section data-bb-version="4.5.9" style="margin-top:72px" id="bt_bb_section656da16aae9f6" class="m-slider bt_bb_section bt_bb_layout_boxed_1400 bt_bb_vertical_align_top bt_bb_bottom_section_coverage_image bt_bb_section_with_bottom_coverage_image bt_bb_top_spacing_large bt_bb_bottom_spacing_large bt_bb_negative_margin_none" style="background-color:rgb(255,255,255);" data-bt-override-class="{&quot;bt_bb_top_spacing_&quot;:{&quot;current_class&quot;:&quot;bt_bb_top_spacing_large&quot;,&quot;xxl&quot;:&quot;large&quot;},&quot;bt_bb_bottom_spacing_&quot;:{&quot;current_class&quot;:&quot;bt_bb_bottom_spacing_large&quot;,&quot;xxl&quot;:&quot;large&quot;}}">
            <div class="bt_bb_background_image_holder_wrapper swiper">
                <div class="swiper-wrapper">
                    <?php foreach ($video as $item): ?>
                        <div class="swiper-slide">
                            <img src="<?= base_url() . $item['image']; ?>" alt="" style="width:100%;">
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            
               <div class="bt_bb_port">
                  <div class="bt_bb_cell">
                     <div class="bt_bb_cell_inner">
                        <div class="bt_bb_row_wrapper">
                           <div class="bt_bb_row bt_bb_column_gap_0 bt_bb_negative_margin_none" data-bt-override-class="{}">
                              <div class="bt_bb_column col-xxl-8 col-xl-8 col-xs-12 col-sm-12 col-md-12 col-lg-12 bt_bb_vertical_align_middle bt_bb_align_left bt_bb_padding_normal bt_bb_animation_fade_in animate" data-width="8" data-bt-override-class="{&quot;bt_bb_align_&quot;:{&quot;current_class&quot;:&quot;bt_bb_align_left&quot;,&quot;xxl&quot;:&quot;left&quot;,&quot;xl&quot;:&quot;left&quot;},&quot;bt_bb_padding_&quot;:{&quot;current_class&quot;:&quot;bt_bb_padding_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;,&quot;xl&quot;:&quot;normal&quot;,&quot;sm&quot;:&quot;0&quot;,&quot;xs&quot;:&quot;0&quot;}}">
                                 <div class="bt_bb_column_content">
                                    <div class="bt_bb_column_content_inner" style="height: 450px;">
                                       <div class="bt_bb_separator_v2 bt_bb_border_style_none bt_bb_top_spacing_none bt_bb_bottom_spacing_medium bt_bb_border_thickness_1 bt_bb_icon_size_normal bt_bb_text_size_normal bt_bb_separator_v2_without_content" data-bt-override-class="{&quot;bt_bb_top_spacing_&quot;:{&quot;current_class&quot;:&quot;bt_bb_top_spacing_none&quot;,&quot;xxl&quot;:&quot;none&quot;,&quot;xl&quot;:&quot;none&quot;},&quot;bt_bb_bottom_spacing_&quot;:{&quot;current_class&quot;:&quot;bt_bb_bottom_spacing_medium&quot;,&quot;xxl&quot;:&quot;medium&quot;,&quot;xl&quot;:&quot;medium&quot;},&quot;bt_bb_border_thickness_&quot;:{&quot;current_class&quot;:&quot;bt_bb_border_thickness_1&quot;,&quot;xxl&quot;:&quot;1&quot;,&quot;xl&quot;:&quot;1&quot;},&quot;bt_bb_icon_size_&quot;:{&quot;current_class&quot;:&quot;bt_bb_icon_size_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;,&quot;xl&quot;:&quot;normal&quot;},&quot;bt_bb_text_size_&quot;:{&quot;current_class&quot;:&quot;bt_bb_text_size_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;,&quot;xl&quot;:&quot;normal&quot;}}">
                                          <div class="bt_bb_separator_v2_inner">
                                             <span class="bt_bb_separator_v2_inner_before"></span>
                                             <span class="bt_bb_separator_v2_inner_content">
                                                <span data-ico-="&#x;" class="bt_bb_icon_holder"></span>
                                             </span>
                                             <span class="bt_bb_separator_v2_inner_after"></span>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="bt_bb_column col-xxl-4 col-xl-4 col-xs-12 col-sm-12 col-md-12 col-lg-12 bt_bb_vertical_align_top bt_bb_align_left bt_bb_padding_normal bt_bb_shape_inherit" data-width="4" data-bt-override-class="{&quot;bt_bb_align_&quot;:{&quot;current_class&quot;:&quot;bt_bb_align_left&quot;,&quot;xxl&quot;:&quot;left&quot;,&quot;xl&quot;:&quot;left&quot;},&quot;bt_bb_padding_&quot;:{&quot;current_class&quot;:&quot;bt_bb_padding_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;,&quot;xl&quot;:&quot;normal&quot;}}">
                                 <div class="bt_bb_column_content">
                                    <div class="bt_bb_column_content_inner"></div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- cell_inner -->
                  </div>
                  <!-- cell -->
               </div>
               <!-- port -->
               <div class="bt_bb_section_bottom_section_coverage_image">
                  <img decoding="async" src="<?= base_url(); ?>uploads/2022/04/bottom_white_wave_01.png" alt="bt_bb_section_bottom_section_coverage_image" />
               </div>
            </section>

            <!-- about -->

            <section id="bt_bb_section656da16aaf66e" class=" bt_bb_section bt_bb_layout_wide bt_bb_vertical_align_top bt_bb_top_spacing_medium bt_bb_bottom_spacing_none" data-bt-override-class="{&quot;bt_bb_top_spacing_&quot;:{&quot;current_class&quot;:&quot;bt_bb_top_spacing_medium&quot;,&quot;xxl&quot;:&quot;medium&quot;,&quot;xl&quot;:&quot;medium&quot;},&quot;bt_bb_bottom_spacing_&quot;:{&quot;current_class&quot;:&quot;bt_bb_bottom_spacing_none&quot;,&quot;xxl&quot;:&quot;none&quot;,&quot;xl&quot;:&quot;none&quot;,&quot;md&quot;:&quot;medium&quot;,&quot;sm&quot;:&quot;medium&quot;,&quot;xs&quot;:&quot;medium&quot;}}">
               <div class="bt_bb_port">
                  <div class="bt_bb_cell">
                     <div class="bt_bb_cell_inner">
                        <div class="bt_bb_row_wrapper bt_bb_row_push_left bt_bb_content_wide bt_bb_row_width_boxed_1200">
                           <div class="bt_bb_row bt_bb_negative_margin_" data-bt-override-class="{}">
                              <div class="bt_bb_column col-xxl-6 col-xl-6 col-xs-12 col-sm-12 col-md-12 col-lg-6 bt_bb_vertical_align_top bt_bb_align_right bt_bb_padding_30 bt_bb_animation_fade_in animate bt_bb_shape_inherit" data-width="6" data-bt-override-class="{&quot;bt_bb_align_&quot;:{&quot;current_class&quot;:&quot;bt_bb_align_right&quot;,&quot;xxl&quot;:&quot;right&quot;,&quot;xl&quot;:&quot;right&quot;,&quot;md&quot;:&quot;left&quot;,&quot;sm&quot;:&quot;left&quot;,&quot;xs&quot;:&quot;left&quot;},&quot;bt_bb_padding_&quot;:{&quot;current_class&quot;:&quot;bt_bb_padding_30&quot;,&quot;xxl&quot;:&quot;30&quot;,&quot;xl&quot;:&quot;30&quot;,&quot;sm&quot;:&quot;normal&quot;,&quot;xs&quot;:&quot;normal&quot;}}">
                                 <div class="bt_bb_column_content">
                                    <div class="bt_bb_column_content_inner">
                                       <div class="bt_bb_image bt_bb_shape_square bt_bb_target_self bt_bb_align_inherit bt_bb_hover_style_simple bt_bb_content_display_always bt_bb_content_align_middle" data-bt-override-class="{&quot;bt_bb_align_&quot;:{&quot;current_class&quot;:&quot;bt_bb_align_inherit&quot;,&quot;xxl&quot;:&quot;inherit&quot;,&quot;xl&quot;:&quot;inherit&quot;}}">
                                          <span>
                                             <img loading="lazy" decoding="async" width="660" height="540" src="<?= base_url() . $about_us['image']; ?>" class="attachment-full size-full mimg1" alt="Kidzonia International School - International Preschool in Hyderabad" />
                                          </span>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="bt_bb_column col-xxl-6 col-xl-6 col-xs-12 col-sm-12 col-md-12 col-lg-6 bt_bb_vertical_align_middle bt_bb_align_left bt_bb_padding_10 bt_bb_animation_fade_in animate bt_bb_shape_inherit" data-width="6" data-bt-override-class="{&quot;bt_bb_align_&quot;:{&quot;current_class&quot;:&quot;bt_bb_align_left&quot;,&quot;xxl&quot;:&quot;left&quot;,&quot;xl&quot;:&quot;left&quot;},&quot;bt_bb_padding_&quot;:{&quot;current_class&quot;:&quot;bt_bb_padding_10&quot;,&quot;xxl&quot;:&quot;10&quot;,&quot;xl&quot;:&quot;10&quot;,&quot;sm&quot;:&quot;normal&quot;,&quot;xs&quot;:&quot;normal&quot;}}">
                                 <div class="bt_bb_column_content">
                                    <div class="bt_bb_column_content_inner">
                                       <div class="bt_bb_separator_v2 bt_bb_border_style_none bt_bb_top_spacing_none bt_bb_bottom_spacing_medium bt_bb_border_thickness_1 bt_bb_icon_size_normal bt_bb_text_size_normal bt_bb_separator_v2_without_content" data-bt-override-class="{&quot;bt_bb_top_spacing_&quot;:{&quot;current_class&quot;:&quot;bt_bb_top_spacing_none&quot;,&quot;xxl&quot;:&quot;none&quot;,&quot;xl&quot;:&quot;none&quot;},&quot;bt_bb_bottom_spacing_&quot;:{&quot;current_class&quot;:&quot;bt_bb_bottom_spacing_medium&quot;,&quot;xxl&quot;:&quot;medium&quot;,&quot;xl&quot;:&quot;medium&quot;},&quot;bt_bb_border_thickness_&quot;:{&quot;current_class&quot;:&quot;bt_bb_border_thickness_1&quot;,&quot;xxl&quot;:&quot;1&quot;,&quot;xl&quot;:&quot;1&quot;},&quot;bt_bb_icon_size_&quot;:{&quot;current_class&quot;:&quot;bt_bb_icon_size_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;,&quot;xl&quot;:&quot;normal&quot;},&quot;bt_bb_text_size_&quot;:{&quot;current_class&quot;:&quot;bt_bb_text_size_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;,&quot;xl&quot;:&quot;normal&quot;}}">
                                          <div class="bt_bb_separator_v2_inner">
                                             <span class="bt_bb_separator_v2_inner_before"></span>
                                             <span class="bt_bb_separator_v2_inner_content">
                                                <span data-ico-="&#x;" class="bt_bb_icon_holder"></span>
                                             </span>
                                             <span class="bt_bb_separator_v2_inner_after"></span>
                                          </div>
                                       </div>
                                       <div class="bt_bb_floating_image bt_bb_floating_image_horizontal_position_default bt_bb_floating_image_vertical_position_default bt_bb_floating_image_animation_delay_default bt_bb_floating_image_animation_duration_default bt_bb_floating_image_animation_style_ease_out bt_bb_animation_fade_in bt_bb_animation_move_down animate mgt0" style="margin-top: -3em;" data-speed="0.4" data-direction="">
                                          <div class="bt_bb_floating_image_image" data-speed="0.4" data-direction="">
                                             <div class="bt_bb_image" data-bt-override-class="{}">
                                                <span>
                                                   <img loading="lazy" decoding="async" width="65" height="45" src="<?= base_url(); ?>uploads/2023/07/Leaf_Element.png?tr=w-65,h-45" class="attachment-full size-full mimg2" alt="Kidzonia Preschool" />
                                                </span>
                                             </div>
                                          </div>
                                       </div>
                                       <header data-bb-version="4.5.9" class="bt_bb_headline bt_bb_subheadline_text_transform_default bt_bb_dash_none bt_bb_size_extralarge bt_bb_align_inherit" data-bt-override-class="{&quot;bt_bb_size_&quot;:{&quot;current_class&quot;:&quot;bt_bb_size_extralarge&quot;,&quot;xxl&quot;:&quot;extralarge&quot;},&quot;bt_bb_align_&quot;:{&quot;current_class&quot;:&quot;bt_bb_align_inherit&quot;,&quot;xxl&quot;:&quot;inherit&quot;}}">
                                          <h2 class="bt_bb_headline_tag">
                                             <span class="bt_bb_headline_content">
                                                <span class="mx80"><?php echo $about_us['title']; ?></span>
                                             </span>
                                          </h2>
                                       </header>
                                       <div class="bt_bb_separator_v2 bt_bb_border_style_none bt_bb_top_spacing_none bt_bb_bottom_spacing_small bt_bb_border_thickness_1 bt_bb_icon_size_normal bt_bb_text_size_normal bt_bb_separator_v2_without_content" data-bt-override-class="{&quot;bt_bb_top_spacing_&quot;:{&quot;current_class&quot;:&quot;bt_bb_top_spacing_none&quot;,&quot;xxl&quot;:&quot;none&quot;,&quot;xl&quot;:&quot;none&quot;},&quot;bt_bb_bottom_spacing_&quot;:{&quot;current_class&quot;:&quot;bt_bb_bottom_spacing_small&quot;,&quot;xxl&quot;:&quot;small&quot;,&quot;xl&quot;:&quot;small&quot;},&quot;bt_bb_border_thickness_&quot;:{&quot;current_class&quot;:&quot;bt_bb_border_thickness_1&quot;,&quot;xxl&quot;:&quot;1&quot;,&quot;xl&quot;:&quot;1&quot;},&quot;bt_bb_icon_size_&quot;:{&quot;current_class&quot;:&quot;bt_bb_icon_size_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;,&quot;xl&quot;:&quot;normal&quot;},&quot;bt_bb_text_size_&quot;:{&quot;current_class&quot;:&quot;bt_bb_text_size_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;,&quot;xl&quot;:&quot;normal&quot;}}">
                                          <div class="bt_bb_separator_v2_inner">
                                             <span class="bt_bb_separator_v2_inner_before"></span>
                                             <span class="bt_bb_separator_v2_inner_content">
                                                <span data-ico-="&#x;" class="bt_bb_icon_holder"></span>
                                             </span>
                                             <span class="bt_bb_separator_v2_inner_after"></span>
                                          </div>
                                       </div>
                                       <div class="bt_bb_text">
                                          <p><?php echo $about_us['description']; ?></p>
                                       </div>
                                       <div class="bt_bb_separator_v2 bt_bb_border_style_none bt_bb_top_spacing_none bt_bb_bottom_spacing_40 bt_bb_border_thickness_1 bt_bb_icon_size_normal bt_bb_text_size_normal bt_bb_separator_v2_without_content" data-bt-override-class="{&quot;bt_bb_top_spacing_&quot;:{&quot;current_class&quot;:&quot;bt_bb_top_spacing_none&quot;,&quot;xxl&quot;:&quot;none&quot;,&quot;xl&quot;:&quot;none&quot;},&quot;bt_bb_bottom_spacing_&quot;:{&quot;current_class&quot;:&quot;bt_bb_bottom_spacing_40&quot;,&quot;xxl&quot;:&quot;40&quot;,&quot;xl&quot;:&quot;40&quot;},&quot;bt_bb_border_thickness_&quot;:{&quot;current_class&quot;:&quot;bt_bb_border_thickness_1&quot;,&quot;xxl&quot;:&quot;1&quot;,&quot;xl&quot;:&quot;1&quot;},&quot;bt_bb_icon_size_&quot;:{&quot;current_class&quot;:&quot;bt_bb_icon_size_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;,&quot;xl&quot;:&quot;normal&quot;},&quot;bt_bb_text_size_&quot;:{&quot;current_class&quot;:&quot;bt_bb_text_size_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;,&quot;xl&quot;:&quot;normal&quot;}}">
                                          <div class="bt_bb_separator_v2_inner">
                                             <span class="bt_bb_separator_v2_inner_before"></span>
                                             <span class="bt_bb_separator_v2_inner_content">
                                                <span data-ico-="&#x;" class="bt_bb_icon_holder"></span>
                                             </span>
                                             <span class="bt_bb_separator_v2_inner_after"></span>
                                          </div>
                                       </div>
                                       <div data-bb-version="4.6.1" class="bt_bb_button  bt_bb_color_scheme_6 bt_bb_icon_position_left bt_bb_style_filled bt_bb_size_normal bt_bb_width_inline bt_bb_shape_inherit  bt_bb_text_transform_inherit bt_bb_align_left" style="; --primary-color:#ffffff; --secondary-color:var(--accent-color);" data-bt-override-class="{&quot;bt_bb_size_&quot;:{&quot;current_class&quot;:&quot;bt_bb_size_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;},&quot;bt_bb_align_&quot;:{&quot;current_class&quot;:&quot;bt_bb_align_left&quot;,&quot;xxl&quot;:&quot;left&quot;}}">
                                          <a href="javascript:void(0);" onclick="showAjaxEnquiryModal('<?php echo base_url(); ?>modal/popup_front/modal_enquiry_download_brochure','Download Brochure');" class="bt_bb_link" title="Download Brochure">
                                             <span class="bt_bb_button_text">Download Brochure</span>
                                          </a>
                                       </div>
                                     <div class="slider-btn bt_bb_button  bt_bb_color_scheme_6 bt_bb_icon_position_left bt_bb_style_filled bt_bb_size_normal bt_bb_width_inline bt_bb_shape_inherit  bt_bb_text_transform_inherit bt_bb_align_left" style="margin-left: 10px">
          <a href="javascript:void(0);" class="btn ss-btn smoth-scroll bt_bb_link" id="virtualTourBtn">
    <i class="fas fa-play-circle"></i> Virtual Tour
</a>
        </div>


                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- cell_inner -->
                  </div>
                  <!-- cell -->
               </div>
               <!-- port -->
            </section>
            
<!-- Replace your current Video Popup section with this: -->
<div id="videoPopup" style="height:75vh; display:none;" class="video-popup">
  <div class="video-popup-content">
    <span class="close-popup">&times;</span>
    <video id="modalVideo" class="w-100" controls preload="none" data-src="<?php echo base_url(); ?>assets/video/new-kidzonia.mp4">
          Your browser does not support the video tag.
        </video>
  </div>
</div>

       <section data-bb-version="4.5.9" id="bt_bb_section656da16ab035a" class="bt_bb_section bt_bb_layout_boxed_1400 bt_bb_vertical_align_top bt_bb_top_section_coverage_image bt_bb_section_with_top_coverage_image bt_bb_bottom_section_coverage_image bt_bb_section_with_bottom_coverage_image bt_bb_top_spacing_medium bt_bb_bottom_spacing_large bt_bb_negative_margin_none" style=";background-color:rgb(247,243,238);" data-bt-override-class="{&quot;bt_bb_top_spacing_&quot;:{&quot;current_class&quot;:&quot;bt_bb_top_spacing_medium&quot;,&quot;xxl&quot;:&quot;medium&quot;},&quot;bt_bb_bottom_spacing_&quot;:{&quot;current_class&quot;:&quot;bt_bb_bottom_spacing_large&quot;,&quot;xxl&quot;:&quot;large&quot;}}">
               <div class="bt_bb_port">
                  <div class="bt_bb_cell">
                     <div class="bt_bb_cell_inner">
                        <div class="bt_bb_row_wrapper">
                           <div class="bt_bb_row" data-bt-override-class="{}">
                              <div class="bt_bb_column col-xxl-12 col-xl-12 col-xs-12 col-sm-12 col-md-12 col-lg-12 bt_bb_vertical_align_top bt_bb_align_left bt_bb_padding_normal bt_bb_shape_inherit" data-width="12" data-bt-override-class="{}">
                                 <div class="bt_bb_column_content">
                                    <div class="bt_bb_column_content_inner">
                                       <div class="bt_bb_separator_v2 bt_bb_border_style_none bt_bb_top_spacing_none bt_bb_bottom_spacing_large bt_bb_border_thickness_1 bt_bb_icon_size_normal bt_bb_text_size_normal bt_bb_separator_v2_without_content bt_bb_hidden_xs bt_bb_hidden_ms bt_bb_hidden_sm bt_bb_hidden_md" data-bt-override-class="{&quot;bt_bb_top_spacing_&quot;:{&quot;current_class&quot;:&quot;bt_bb_top_spacing_none&quot;,&quot;xxl&quot;:&quot;none&quot;,&quot;xl&quot;:&quot;none&quot;},&quot;bt_bb_bottom_spacing_&quot;:{&quot;current_class&quot;:&quot;bt_bb_bottom_spacing_large&quot;,&quot;xxl&quot;:&quot;large&quot;,&quot;xl&quot;:&quot;large&quot;},&quot;bt_bb_border_thickness_&quot;:{&quot;current_class&quot;:&quot;bt_bb_border_thickness_1&quot;,&quot;xxl&quot;:&quot;1&quot;,&quot;xl&quot;:&quot;1&quot;},&quot;bt_bb_icon_size_&quot;:{&quot;current_class&quot;:&quot;bt_bb_icon_size_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;,&quot;xl&quot;:&quot;normal&quot;},&quot;bt_bb_text_size_&quot;:{&quot;current_class&quot;:&quot;bt_bb_text_size_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;,&quot;xl&quot;:&quot;normal&quot;}}">
                                          <div class="bt_bb_separator_v2_inner">
                                             <span class="bt_bb_separator_v2_inner_before"></span>
                                             <span class="bt_bb_separator_v2_inner_content">
                                                <span data-ico-="&#x;" class="bt_bb_icon_holder"></span>
                                             </span>
                                             <span class="bt_bb_separator_v2_inner_after"></span>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="bt_bb_row_wrapper">
                           <div class="bt_bb_row" data-bt-override-class="{}">
                              <div class="bt_bb_column col-xxl-12 col-xl-12 col-xs-12 col-sm-12 col-md-12 col-lg-12 bt_bb_vertical_align_top bt_bb_align_center bt_bb_padding_normal bt_bb_animation_fade_in animate bt_bb_shape_inherit" data-width="12" data-bt-override-class="{&quot;bt_bb_align_&quot;:{&quot;current_class&quot;:&quot;bt_bb_align_center&quot;,&quot;xxl&quot;:&quot;center&quot;,&quot;xl&quot;:&quot;center&quot;},&quot;bt_bb_padding_&quot;:{&quot;current_class&quot;:&quot;bt_bb_padding_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;,&quot;xl&quot;:&quot;normal&quot;}}">
                                 <div class="bt_bb_column_content">
                                    <div class="bt_bb_column_content_inner">
                                       <div class="bt_bb_separator_v2 bt_bb_border_style_none bt_bb_top_spacing_none bt_bb_bottom_spacing_medium bt_bb_border_thickness_1 bt_bb_icon_size_normal bt_bb_text_size_normal bt_bb_separator_v2_without_content" data-bt-override-class="{&quot;bt_bb_top_spacing_&quot;:{&quot;current_class&quot;:&quot;bt_bb_top_spacing_none&quot;,&quot;xxl&quot;:&quot;none&quot;,&quot;xl&quot;:&quot;none&quot;},&quot;bt_bb_bottom_spacing_&quot;:{&quot;current_class&quot;:&quot;bt_bb_bottom_spacing_medium&quot;,&quot;xxl&quot;:&quot;medium&quot;,&quot;xl&quot;:&quot;medium&quot;},&quot;bt_bb_border_thickness_&quot;:{&quot;current_class&quot;:&quot;bt_bb_border_thickness_1&quot;,&quot;xxl&quot;:&quot;1&quot;,&quot;xl&quot;:&quot;1&quot;},&quot;bt_bb_icon_size_&quot;:{&quot;current_class&quot;:&quot;bt_bb_icon_size_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;,&quot;xl&quot;:&quot;normal&quot;},&quot;bt_bb_text_size_&quot;:{&quot;current_class&quot;:&quot;bt_bb_text_size_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;,&quot;xl&quot;:&quot;normal&quot;}}">
                                          <div class="bt_bb_separator_v2_inner">
                                             <span class="bt_bb_separator_v2_inner_before"></span>
                                             <span class="bt_bb_separator_v2_inner_content">
                                                <span data-ico-="&#x;" class="bt_bb_icon_holder"></span>
                                             </span>
                                             <span class="bt_bb_separator_v2_inner_after"></span>
                                          </div>
                                       </div>
                                       <div class="bt_bb_floating_image bt_bb_floating_image_horizontal_position_default bt_bb_floating_image_vertical_position_default bt_bb_floating_image_animation_delay_default bt_bb_floating_image_animation_duration_default bt_bb_floating_image_animation_style_ease_out bt_bb_animation_fade_in bt_bb_animation_move_down animate" style="margin-top: -3em; position: relative;" data-speed="0.4" data-direction="">
                                          <div class="bt_bb_floating_image_image" data-speed="0.4" data-direction="">
                                             <div class="bt_bb_image mb7" data-bt-override-class="{}">
                                                <span>
                                                   <img loading="lazy" decoding="async" width="65" height="45" src="<?= base_url(); ?>uploads/2023/07/Leaf_Element.png" class="attachment-full size-full mimg2 mimg_auto"  alt="Kidzonia International School"/>
                                                </span>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="bt_bb_separator_v2 bt_bb_border_style_none bt_bb_top_spacing_none bt_bb_bottom_spacing_small bt_bb_border_thickness_1 bt_bb_icon_size_normal bt_bb_text_size_normal bt_bb_separator_v2_without_content" data-bt-override-class="{&quot;bt_bb_top_spacing_&quot;:{&quot;current_class&quot;:&quot;bt_bb_top_spacing_none&quot;,&quot;xxl&quot;:&quot;none&quot;,&quot;xl&quot;:&quot;none&quot;},&quot;bt_bb_bottom_spacing_&quot;:{&quot;current_class&quot;:&quot;bt_bb_bottom_spacing_small&quot;,&quot;xxl&quot;:&quot;small&quot;,&quot;xl&quot;:&quot;small&quot;},&quot;bt_bb_border_thickness_&quot;:{&quot;current_class&quot;:&quot;bt_bb_border_thickness_1&quot;,&quot;xxl&quot;:&quot;1&quot;,&quot;xl&quot;:&quot;1&quot;},&quot;bt_bb_icon_size_&quot;:{&quot;current_class&quot;:&quot;bt_bb_icon_size_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;,&quot;xl&quot;:&quot;normal&quot;},&quot;bt_bb_text_size_&quot;:{&quot;current_class&quot;:&quot;bt_bb_text_size_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;,&quot;xl&quot;:&quot;normal&quot;}}">
                                          <div class="bt_bb_separator_v2_inner">
                                             <span class="bt_bb_separator_v2_inner_before"></span>
                                             <span class="bt_bb_separator_v2_inner_content">
                                                <span data-ico-="&#x;" class="bt_bb_icon_holder"></span>
                                             </span>
                                             <span class="bt_bb_separator_v2_inner_after"></span>
                                          </div>
                                       </div>
                                       <header data-bb-version="4.6.1" class="bt_bb_headline bt_bb_subheadline_text_transform_default bt_bb_dash_none bt_bb_size_extralarge bt_bb_align_inherit" data-bt-override-class="{&quot;bt_bb_size_&quot;:{&quot;current_class&quot;:&quot;bt_bb_size_extralarge&quot;,&quot;xxl&quot;:&quot;extralarge&quot;},&quot;bt_bb_align_&quot;:{&quot;current_class&quot;:&quot;bt_bb_align_inherit&quot;,&quot;xxl&quot;:&quot;inherit&quot;}}">
                                          <h4 style="font-size:45px" class="bt_bb_headline_tag">
                                             <span class="bt_bb_headline_content">
                                                <span>JOIN ONE OF THE TOP 10 <br /> PRESCHOOLS IN INDIA </span>
                                             </span>
                                          </h4>
                                       </header>
                                       <div class="bt_bb_separator_v2 bt_bb_border_style_none bt_bb_top_spacing_none bt_bb_bottom_spacing_normal bt_bb_border_thickness_1 bt_bb_icon_size_normal bt_bb_text_size_normal bt_bb_separator_v2_without_content" data-bt-override-class="{&quot;bt_bb_top_spacing_&quot;:{&quot;current_class&quot;:&quot;bt_bb_top_spacing_none&quot;,&quot;xxl&quot;:&quot;none&quot;,&quot;xl&quot;:&quot;none&quot;},&quot;bt_bb_bottom_spacing_&quot;:{&quot;current_class&quot;:&quot;bt_bb_bottom_spacing_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;,&quot;xl&quot;:&quot;normal&quot;},&quot;bt_bb_border_thickness_&quot;:{&quot;current_class&quot;:&quot;bt_bb_border_thickness_1&quot;,&quot;xxl&quot;:&quot;1&quot;,&quot;xl&quot;:&quot;1&quot;},&quot;bt_bb_icon_size_&quot;:{&quot;current_class&quot;:&quot;bt_bb_icon_size_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;,&quot;xl&quot;:&quot;normal&quot;},&quot;bt_bb_text_size_&quot;:{&quot;current_class&quot;:&quot;bt_bb_text_size_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;,&quot;xl&quot;:&quot;normal&quot;}}">
                                          <div class="bt_bb_separator_v2_inner">
                                             <span class="bt_bb_separator_v2_inner_before"></span>
                                             <span class="bt_bb_separator_v2_inner_content">
                                                <span data-ico-="&#x;" class="bt_bb_icon_holder"></span>
                                             </span>
                                             <span class="bt_bb_separator_v2_inner_after"></span>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="bt_bb_row_wrapper">
                           <div class="bt_bb_row bt_bb_column_gap_0 bt_bb_negative_margin_ custom-top-10-preschool" data-bt-override-class="{}">
                              <div class="bt_bb_column col-xxl-4 col-xl-4 col-xs-12 col-sm-12 col-md-4 col-lg-4 bt_bb_vertical_align_top bt_bb_align_center bt_bb_padding_normal bt_bb_animation_fade_in animate bt_bb_shape_inherit" data-width="4" data-bt-override-class="{}">
                                 <div class="bt_bb_column_content">
                                    <div class="bt_bb_column_content_inner grid-2col">
                                        
                                       <div data-bb-version="4.5.9" class="bt_bb_organic_animation bt_bb_organic_animation_fill bt_bb_title_size_normal bt_bb_icon_color_scheme_9 bt_bb_icon_size_normal" style="width:370px;; --icon-primary-color:#282828; --icon-secondary-color:var(--alternate-color);">
                                          <div class="item item--style-1" data-morph-path="M 444.96404,266.56453 C 457.96774,175.13774 387.39406,71.817158 293.36662,55.332153 c -35.00247,-6.135 -58.72247,-9.445 -101.74994,2.930005 -62.65496,18.007472 -78.93745,-6.685005 -78.93745,-6.685005 0,0 -34.413702,121.208787 -37.749995,153.307417 -15.536144,148.08958 75.999975,214.33238 156.879915,225.12486 94.61245,12.63001 195.08376,-36.47551 213.15489,-163.4449 z" data-animation-path-duration="2000" data-animation-path-delay="0" data-animation-path-easing="easeInOutQuint" data-path-elasticity="400" data-path-scaleX="1" data-path-scaleY="1" data-path-translateX="0" data-path-translateY="0" data-path-rotate="-30" data-animation-image-duration="1000" data-animation-image-delay="0" data-animation-image-easing="easeOutElastic" data-image-elasticity="400" data-image-scaleX="1.1" data-image-scaleY="1.1" data-image-translateX="0" data-image-translateY="30" data-image-rotate="-60" data-animation-deco-duration="1200" data-animation-deco-delay="1000" data-animation-deco-easing="easeOutElastic" data-deco-elasticity="400" data-deco-scaleX="0.85" data-deco-scaleY="0.85" data-deco-translateX="-5" data-deco-translateY="-3" data-deco-rotate="60">
                                             <svg class="item__svg" viewBox="0 0 500 500" width="300" height="300">
                                                <clipPath id="bt_bb_organic_animation_656da16ab0aa3">
                                                   <path class="item__clippath" d="M 424.96404,266.56453 C 440.90903,175.60459 385.39406,81.817158 291.36662,65.332153 c -35.00247,-6.135 -56.72247,-5.445 -99.74994,6.930005 -62.65496,18.007472 -78.93745,-20.685005 -78.93745,-20.685005 0,0 -24.082495,121.244937 -27.749995,153.307417 -13.4175,116.30992 65.999975,194.33238 146.879915,205.12486 94.61245,12.63001 177.2024,-52.49246 193.15489,-143.4449 z" />
                                                </clipPath>
                                                <g class="item__deco" style="fill: rgb(255,255,255);">
                                                   <!--use xlink:href="#deco1" /-->
                                                   <path class="item__clippath" d="M 286.3778,428.52934 C 180.25786,447.13183 77.839179,382.36437 58.606685,272.66568 51.449182,231.82947 59.254178,206.48947 73.691679,156.29075 94.700399,83.19329 35.559185,64.197049 35.559185,64.197049 c 0,0 141.452425,-28.096239 178.858655,-32.374989 135.69491,-15.653751 226.72112,76.99998 239.31234,171.35991 14.73501,110.38119 -61.24121,206.73613 -167.35238,225.34737 z" />
                                                </g>
                                                <g clip-path="url(#bt_bb_organic_animation_656da16ab0aa3)" class="item__img__g">
                                                   <image class="item__img" xlink:href="<?= base_url(); ?>uploads/2023/07/BG1.jpg" x="0" y="0" height="100%" width="100%" />
                                                </g>
                                                <g clip-path="url(#bt_bb_organic_animation_656da16ab0aa3)" class="item_hover__img_g">
                                                   <image class="item_hover__img" xlink:href="<?= base_url(); ?>uploads/2023/07/BG1.jpg" x="0" y="0" height="100%" width="100%" />
                                                </g>
                                             </svg>
                                             <div class="item__meta">
                                                <div class="item__meta_inner">
                                                   <h2 class="item__title">20,000+ Nurtured Children</h2>
                                                </div>
                                             </div>
                                          </div>
                                       </div> 
                                       
                                       <div data-bb-version="4.5.9" class="bt_bb_separator_v2 bt_bb_border_style_none bt_bb_top_spacing_none bt_bb_bottom_spacing_normal bt_bb_border_thickness_1 bt_bb_icon_size_normal bt_bb_text_size_normal bt_bb_separator_v2_without_content mdnone" data-bt-override-class="{&quot;bt_bb_top_spacing_&quot;:{&quot;current_class&quot;:&quot;bt_bb_top_spacing_none&quot;,&quot;xxl&quot;:&quot;none&quot;,&quot;xl&quot;:&quot;normal&quot;},&quot;bt_bb_bottom_spacing_&quot;:{&quot;current_class&quot;:&quot;bt_bb_bottom_spacing_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;,&quot;xl&quot;:&quot;normal&quot;},&quot;bt_bb_border_thickness_&quot;:{&quot;current_class&quot;:&quot;bt_bb_border_thickness_1&quot;,&quot;xxl&quot;:&quot;1&quot;},&quot;bt_bb_icon_size_&quot;:{&quot;current_class&quot;:&quot;bt_bb_icon_size_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;},&quot;bt_bb_text_size_&quot;:{&quot;current_class&quot;:&quot;bt_bb_text_size_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;}}">
                                          <div class="bt_bb_separator_v2_inner">
                                             <span class="bt_bb_separator_v2_inner_before"></span>
                                             <span class="bt_bb_separator_v2_inner_content">
                                                <span data-ico-="&#x;" class="bt_bb_icon_holder"></span>
                                             </span>
                                             <span class="bt_bb_separator_v2_inner_after"></span>
                                          </div>
                                       </div>
                                       
                                       <div data-bb-version="4.5.9" class="bt_bb_organic_animation bt_bb_organic_animation_fill bt_bb_title_size_normal bt_bb_icon_color_scheme_9 bt_bb_icon_size_normal" style="width:370px;; --icon-primary-color:#282828; --icon-secondary-color:var(--alternate-color);">
                                          <div class="item item--style-1" data-morph-path="M 444.96404,266.56453 C 457.96774,175.13774 387.39406,71.817158 293.36662,55.332153 c -35.00247,-6.135 -58.72247,-9.445 -101.74994,2.930005 -62.65496,18.007472 -78.93745,-6.685005 -78.93745,-6.685005 0,0 -34.413702,121.208787 -37.749995,153.307417 -15.536144,148.08958 75.999975,214.33238 156.879915,225.12486 94.61245,12.63001 195.08376,-36.47551 213.15489,-163.4449 z" data-animation-path-duration="2000" data-animation-path-delay="0" data-animation-path-easing="easeInOutQuint" data-path-elasticity="400" data-path-scaleX="1" data-path-scaleY="1" data-path-translateX="0" data-path-translateY="0" data-path-rotate="-30" data-animation-image-duration="1000" data-animation-image-delay="0" data-animation-image-easing="easeOutElastic" data-image-elasticity="400" data-image-scaleX="1.1" data-image-scaleY="1.1" data-image-translateX="0" data-image-translateY="30" data-image-rotate="-60" data-animation-deco-duration="1200" data-animation-deco-delay="1000" data-animation-deco-easing="easeOutElastic" data-deco-elasticity="400" data-deco-scaleX="0.85" data-deco-scaleY="0.85" data-deco-translateX="-5" data-deco-translateY="-3" data-deco-rotate="60">
                                             <svg class="item__svg" viewBox="0 0 500 500" width="300" height="300">
                                                <clipPath id="bt_bb_organic_animation_656da16ab0dd7">
                                                   <path class="item__clippath" d="M 424.96404,266.56453 C 440.90903,175.60459 385.39406,81.817158 291.36662,65.332153 c -35.00247,-6.135 -56.72247,-5.445 -99.74994,6.930005 -62.65496,18.007472 -78.93745,-20.685005 -78.93745,-20.685005 0,0 -24.082495,121.244937 -27.749995,153.307417 -13.4175,116.30992 65.999975,194.33238 146.879915,205.12486 94.61245,12.63001 177.2024,-52.49246 193.15489,-143.4449 z" />
                                                </clipPath>
                                                <g class="item__deco" style="fill: rgb(255,255,255);">
                                                   <!--use xlink:href="#deco1" /-->
                                                   <path class="item__clippath" d="M 286.3778,428.52934 C 180.25786,447.13183 77.839179,382.36437 58.606685,272.66568 51.449182,231.82947 59.254178,206.48947 73.691679,156.29075 94.700399,83.19329 35.559185,64.197049 35.559185,64.197049 c 0,0 141.452425,-28.096239 178.858655,-32.374989 135.69491,-15.653751 226.72112,76.99998 239.31234,171.35991 14.73501,110.38119 -61.24121,206.73613 -167.35238,225.34737 z" />
                                                </g>
                                                <g clip-path="url(#bt_bb_organic_animation_656da16ab0dd7)" class="item__img__g">
                                                   <image class="item__img" xlink:href="
                                                <?= base_url(); ?>uploads/2023/07/BG2.jpg" x="0" y="0" height="100%" width="100%" />
                                                </g>
                                                <g clip-path="url(#bt_bb_organic_animation_656da16ab0dd7)" class="item_hover__img_g">
                                                   <image class="item_hover__img" xlink:href="<?= base_url(); ?>uploads/2023/07/BG2.jpg" x="0" y="0" height="100%" width="100%" />
                                                </g>
                                             </svg>
                                             <div class="item__meta">
                                                <div class="item__meta_inner">
                                                   <h2 class="item__title">44+ <br /> Branches <br /> In India </h2>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="bt_bb_separator_v2 bt_bb_border_style_none bt_bb_top_spacing_none bt_bb_bottom_spacing_normal bt_bb_border_thickness_1 bt_bb_icon_size_normal bt_bb_text_size_normal bt_bb_separator_v2_without_content mdnone" data-bt-override-class="{&quot;bt_bb_top_spacing_&quot;:{&quot;current_class&quot;:&quot;bt_bb_top_spacing_none&quot;,&quot;xxl&quot;:&quot;none&quot;,&quot;xl&quot;:&quot;none&quot;},&quot;bt_bb_bottom_spacing_&quot;:{&quot;current_class&quot;:&quot;bt_bb_bottom_spacing_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;,&quot;xl&quot;:&quot;normal&quot;},&quot;bt_bb_border_thickness_&quot;:{&quot;current_class&quot;:&quot;bt_bb_border_thickness_1&quot;,&quot;xxl&quot;:&quot;1&quot;,&quot;xl&quot;:&quot;1&quot;},&quot;bt_bb_icon_size_&quot;:{&quot;current_class&quot;:&quot;bt_bb_icon_size_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;,&quot;xl&quot;:&quot;normal&quot;},&quot;bt_bb_text_size_&quot;:{&quot;current_class&quot;:&quot;bt_bb_text_size_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;,&quot;xl&quot;:&quot;normal&quot;}}">
                                          <div class="bt_bb_separator_v2_inner">
                                             <span class="bt_bb_separator_v2_inner_before"></span>
                                             <span class="bt_bb_separator_v2_inner_content">
                                                <span data-ico-="&#x;" class="bt_bb_icon_holder"></span>
                                             </span>
                                             <span class="bt_bb_separator_v2_inner_after"></span>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="bt_bb_column col-xxl-4 col-xl-4 col-xs-12 col-sm-12 col-md-4 col-lg-4 bt_bb_vertical_align_middle bt_bb_align_center bt_bb_padding_normal bt_bb_animation_fade_in animate bt_bb_shape_inherit" data-width="4" data-bt-override-class="{&quot;bt_bb_align_&quot;:{&quot;current_class&quot;:&quot;bt_bb_align_center&quot;,&quot;xxl&quot;:&quot;center&quot;,&quot;xl&quot;:&quot;center&quot;},&quot;bt_bb_padding_&quot;:{&quot;current_class&quot;:&quot;bt_bb_padding_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;,&quot;xl&quot;:&quot;normal&quot;}}">
                                 <div class="bt_bb_column_content">
                                    <div class="bt_bb_column_content_inner">
                                       <div class="bt_bb_separator_v2 bt_bb_border_style_none bt_bb_top_spacing_none bt_bb_bottom_spacing_normal bt_bb_border_thickness_1 bt_bb_icon_size_normal bt_bb_text_size_normal bt_bb_separator_v2_without_content bt_bb_hidden_xs bt_bb_hidden_ms bt_bb_hidden_sm bt_bb_hidden_md" data-bt-override-class="{&quot;bt_bb_top_spacing_&quot;:{&quot;current_class&quot;:&quot;bt_bb_top_spacing_none&quot;,&quot;xxl&quot;:&quot;none&quot;,&quot;xl&quot;:&quot;none&quot;},&quot;bt_bb_bottom_spacing_&quot;:{&quot;current_class&quot;:&quot;bt_bb_bottom_spacing_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;,&quot;xl&quot;:&quot;normal&quot;},&quot;bt_bb_border_thickness_&quot;:{&quot;current_class&quot;:&quot;bt_bb_border_thickness_1&quot;,&quot;xxl&quot;:&quot;1&quot;,&quot;xl&quot;:&quot;1&quot;},&quot;bt_bb_icon_size_&quot;:{&quot;current_class&quot;:&quot;bt_bb_icon_size_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;,&quot;xl&quot;:&quot;normal&quot;},&quot;bt_bb_text_size_&quot;:{&quot;current_class&quot;:&quot;bt_bb_text_size_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;,&quot;xl&quot;:&quot;normal&quot;}}">
                                          <div class="bt_bb_separator_v2_inner">
                                             <span class="bt_bb_separator_v2_inner_before"></span>
                                             <span class="bt_bb_separator_v2_inner_content">
                                                <span data-ico-="&#x;" class="bt_bb_icon_holder"></span>
                                             </span>
                                             <span class="bt_bb_separator_v2_inner_after"></span>
                                          </div>
                                       </div>
                                       <div class="bt_bb_image bt_bb_shape_square bt_bb_target_self bt_bb_align_inherit bt_bb_hover_style_simple bt_bb_content_display_always bt_bb_content_align_middle" data-bt-override-class="{&quot;bt_bb_align_&quot;:{&quot;current_class&quot;:&quot;bt_bb_align_inherit&quot;,&quot;xxl&quot;:&quot;inherit&quot;,&quot;xl&quot;:&quot;inherit&quot;}}">
                                          <span>
                                             <img loading="lazy" decoding="async" width="520" height="640" src="<?= base_url(); ?>uploads/2023/07/afg4wu1gzxq0sjcftdhx.avif" class="attachment-full size-full mart" alt="International Preschool in Hyderabad" />
                                          </span>
                                       </div>
                                       <div class="bt_bb_separator_v2 bt_bb_border_style_none bt_bb_top_spacing_none bt_bb_bottom_spacing_normal bt_bb_border_thickness_1 bt_bb_icon_size_normal bt_bb_text_size_normal bt_bb_separator_v2_without_content" data-bt-override-class="{&quot;bt_bb_top_spacing_&quot;:{&quot;current_class&quot;:&quot;bt_bb_top_spacing_none&quot;,&quot;xxl&quot;:&quot;none&quot;,&quot;xl&quot;:&quot;none&quot;},&quot;bt_bb_bottom_spacing_&quot;:{&quot;current_class&quot;:&quot;bt_bb_bottom_spacing_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;,&quot;xl&quot;:&quot;normal&quot;},&quot;bt_bb_border_thickness_&quot;:{&quot;current_class&quot;:&quot;bt_bb_border_thickness_1&quot;,&quot;xxl&quot;:&quot;1&quot;,&quot;xl&quot;:&quot;1&quot;},&quot;bt_bb_icon_size_&quot;:{&quot;current_class&quot;:&quot;bt_bb_icon_size_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;,&quot;xl&quot;:&quot;normal&quot;},&quot;bt_bb_text_size_&quot;:{&quot;current_class&quot;:&quot;bt_bb_text_size_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;,&quot;xl&quot;:&quot;normal&quot;}}">
                                          <div class="bt_bb_separator_v2_inner">
                                             <span class="bt_bb_separator_v2_inner_before"></span>
                                             <span class="bt_bb_separator_v2_inner_content">
                                                <span data-ico-="&#x;" class="bt_bb_icon_holder"></span>
                                             </span>
                                             <span class="bt_bb_separator_v2_inner_after"></span>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="bt_bb_column col-xxl-4 col-xl-4 col-xs-12 col-sm-12 col-md-4 col-lg-4 bt_bb_vertical_align_top bt_bb_align_center bt_bb_padding_normal bt_bb_animation_fade_in animate bt_bb_shape_inherit" data-width="4" data-bt-override-class="{}">
                                 <div class="bt_bb_column_content">
                                    <div class="bt_bb_column_content_inner">
                                       <div data-bb-version="4.5.9" class="bt_bb_organic_animation bt_bb_organic_animation_fill bt_bb_title_size_normal bt_bb_icon_color_scheme_9 bt_bb_icon_size_normal" style="width:370px;; --icon-primary-color:#282828; --icon-secondary-color:var(--alternate-color);">
                                          <div class="item item--style-1" data-morph-path="M 444.96404,266.56453 C 457.96774,175.13774 387.39406,71.817158 293.36662,55.332153 c -35.00247,-6.135 -58.72247,-9.445 -101.74994,2.930005 -62.65496,18.007472 -78.93745,-6.685005 -78.93745,-6.685005 0,0 -34.413702,121.208787 -37.749995,153.307417 -15.536144,148.08958 75.999975,214.33238 156.879915,225.12486 94.61245,12.63001 195.08376,-36.47551 213.15489,-163.4449 z" data-animation-path-duration="2000" data-animation-path-delay="0" data-animation-path-easing="easeInOutQuint" data-path-elasticity="400" data-path-scaleX="1" data-path-scaleY="1" data-path-translateX="0" data-path-translateY="0" data-path-rotate="-30" data-animation-image-duration="1000" data-animation-image-delay="0" data-animation-image-easing="easeOutElastic" data-image-elasticity="400" data-image-scaleX="1.1" data-image-scaleY="1.1" data-image-translateX="0" data-image-translateY="30" data-image-rotate="-60" data-animation-deco-duration="1200" data-animation-deco-delay="1000" data-animation-deco-easing="easeOutElastic" data-deco-elasticity="400" data-deco-scaleX="0.85" data-deco-scaleY="0.85" data-deco-translateX="-5" data-deco-translateY="-3" data-deco-rotate="60">
                                             <svg class="item__svg" viewBox="0 0 500 500" width="300" height="300">
                                                <clipPath id="bt_bb_organic_animation_656da16ab1542">
                                                   <path class="item__clippath" d="M 424.96404,266.56453 C 440.90903,175.60459 385.39406,81.817158 291.36662,65.332153 c -35.00247,-6.135 -56.72247,-5.445 -99.74994,6.930005 -62.65496,18.007472 -78.93745,-20.685005 -78.93745,-20.685005 0,0 -24.082495,121.244937 -27.749995,153.307417 -13.4175,116.30992 65.999975,194.33238 146.879915,205.12486 94.61245,12.63001 177.2024,-52.49246 193.15489,-143.4449 z" />
                                                </clipPath>
                                                <g class="item__deco" style="fill: rgb(255,255,255);">
                                                   <!--use xlink:href="#deco1" /-->
                                                   <path class="item__clippath" d="M 286.3778,428.52934 C 180.25786,447.13183 77.839179,382.36437 58.606685,272.66568 51.449182,231.82947 59.254178,206.48947 73.691679,156.29075 94.700399,83.19329 35.559185,64.197049 35.559185,64.197049 c 0,0 141.452425,-28.096239 178.858655,-32.374989 135.69491,-15.653751 226.72112,76.99998 239.31234,171.35991 14.73501,110.38119 -61.24121,206.73613 -167.35238,225.34737 z" />
                                                </g>
                                                <g clip-path="url(#bt_bb_organic_animation_656da16ab1542)" class="item__img__g">
                                                   <image class="item__img" xlink:href="
                                                <?= base_url(); ?>uploads/2023/07/BG4.jpg" x="0" y="0" height="100%" width="100%" />
                                                </g>
                                                <g clip-path="url(#bt_bb_organic_animation_656da16ab1542)" class="item_hover__img_g">
                                                   <image class="item_hover__img" xlink:href="<?= base_url(); ?>uploads/2023/07/BG4.jpg" x="0" y="0" height="100%" width="100%" />
                                                </g>
                                             </svg>
                                             <div class="item__meta">
                                                <div class="item__meta_inner">
                                                   <h2 class="item__title">Presence in CITIES <br /> 3 </h2>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="bt_bb_separator_v2 bt_bb_border_style_none bt_bb_top_spacing_none bt_bb_bottom_spacing_normal bt_bb_border_thickness_1 bt_bb_icon_size_normal bt_bb_text_size_normal bt_bb_separator_v2_without_content mdnone" data-bt-override-class="{&quot;bt_bb_top_spacing_&quot;:{&quot;current_class&quot;:&quot;bt_bb_top_spacing_none&quot;,&quot;xxl&quot;:&quot;none&quot;,&quot;xl&quot;:&quot;none&quot;},&quot;bt_bb_bottom_spacing_&quot;:{&quot;current_class&quot;:&quot;bt_bb_bottom_spacing_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;,&quot;xl&quot;:&quot;normal&quot;},&quot;bt_bb_border_thickness_&quot;:{&quot;current_class&quot;:&quot;bt_bb_border_thickness_1&quot;,&quot;xxl&quot;:&quot;1&quot;,&quot;xl&quot;:&quot;1&quot;},&quot;bt_bb_icon_size_&quot;:{&quot;current_class&quot;:&quot;bt_bb_icon_size_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;,&quot;xl&quot;:&quot;normal&quot;},&quot;bt_bb_text_size_&quot;:{&quot;current_class&quot;:&quot;bt_bb_text_size_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;,&quot;xl&quot;:&quot;normal&quot;}}">
                                          <div class="bt_bb_separator_v2_inner">
                                             <span class="bt_bb_separator_v2_inner_before"></span>
                                             <span class="bt_bb_separator_v2_inner_content">
                                                <span data-ico-="&#x;" class="bt_bb_icon_holder"></span>
                                             </span>
                                             <span class="bt_bb_separator_v2_inner_after"></span>
                                          </div>
                                       </div>
                                       <div data-bb-version="4.5.9" class="bt_bb_organic_animation bt_bb_organic_animation_fill bt_bb_title_size_normal bt_bb_icon_color_scheme_9 bt_bb_icon_size_normal" style="width:370px;; --icon-primary-color:#282828; --icon-secondary-color:var(--alternate-color);">
                                          <div class="item item--style-1" data-morph-path="M 444.96404,266.56453 C 457.96774,175.13774 387.39406,71.817158 293.36662,55.332153 c -35.00247,-6.135 -58.72247,-9.445 -101.74994,2.930005 -62.65496,18.007472 -78.93745,-6.685005 -78.93745,-6.685005 0,0 -34.413702,121.208787 -37.749995,153.307417 -15.536144,148.08958 75.999975,214.33238 156.879915,225.12486 94.61245,12.63001 195.08376,-36.47551 213.15489,-163.4449 z" data-animation-path-duration="2000" data-animation-path-delay="0" data-animation-path-easing="easeInOutQuint" data-path-elasticity="400" data-path-scaleX="1" data-path-scaleY="1" data-path-translateX="0" data-path-translateY="0" data-path-rotate="-30" data-animation-image-duration="1000" data-animation-image-delay="0" data-animation-image-easing="easeOutElastic" data-image-elasticity="400" data-image-scaleX="1.1" data-image-scaleY="1.1" data-image-translateX="0" data-image-translateY="30" data-image-rotate="-60" data-animation-deco-duration="1200" data-animation-deco-delay="1000" data-animation-deco-easing="easeOutElastic" data-deco-elasticity="400" data-deco-scaleX="0.85" data-deco-scaleY="0.85" data-deco-translateX="-5" data-deco-translateY="-3" data-deco-rotate="60">
                                             <svg class="item__svg" viewBox="0 0 500 500" width="300" height="300">
                                                <clipPath id="bt_bb_organic_animation_656da16ab1b13">
                                                   <path class="item__clippath" d="M 424.96404,266.56453 C 440.90903,175.60459 385.39406,81.817158 291.36662,65.332153 c -35.00247,-6.135 -56.72247,-5.445 -99.74994,6.930005 -62.65496,18.007472 -78.93745,-20.685005 -78.93745,-20.685005 0,0 -24.082495,121.244937 -27.749995,153.307417 -13.4175,116.30992 65.999975,194.33238 146.879915,205.12486 94.61245,12.63001 177.2024,-52.49246 193.15489,-143.4449 z" />
                                                </clipPath>
                                                <g class="item__deco" style="fill: rgb(255,255,255);">
                                                   <!--use xlink:href="#deco1" /-->
                                                   <path class="item__clippath" d="M 286.3778,428.52934 C 180.25786,447.13183 77.839179,382.36437 58.606685,272.66568 51.449182,231.82947 59.254178,206.48947 73.691679,156.29075 94.700399,83.19329 35.559185,64.197049 35.559185,64.197049 c 0,0 141.452425,-28.096239 178.858655,-32.374989 135.69491,-15.653751 226.72112,76.99998 239.31234,171.35991 14.73501,110.38119 -61.24121,206.73613 -167.35238,225.34737 z" />
                                                </g>
                                                <g clip-path="url(#bt_bb_organic_animation_656da16ab1b13)" class="item__img__g">
                                                   <image class="item__img" xlink:href="
                                                <?= base_url(); ?>uploads/2023/07/BG3.jpg" x="0" y="0" height="100%" width="100%" />
                                                </g>
                                                <g clip-path="url(#bt_bb_organic_animation_656da16ab1b13)" class="item_hover__img_g">
                                                   <image class="item_hover__img" xlink:href="<?= base_url(); ?>uploads/2023/07/BG3.jpg" x="0" y="0" height="100%" width="100%" />
                                                </g>
                                             </svg>
                                             <div class="item__meta">
                                                <div class="item__meta_inner">
                                                   <h2 class="item__title">Accredited with 28+ <br /> Awards </h2>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="bt_bb_separator_v2 bt_bb_border_style_none bt_bb_top_spacing_none bt_bb_bottom_spacing_normal bt_bb_border_thickness_1 bt_bb_icon_size_normal bt_bb_text_size_normal bt_bb_separator_v2_without_content mdnone" data-bt-override-class="{&quot;bt_bb_top_spacing_&quot;:{&quot;current_class&quot;:&quot;bt_bb_top_spacing_none&quot;,&quot;xxl&quot;:&quot;none&quot;,&quot;xl&quot;:&quot;none&quot;},&quot;bt_bb_bottom_spacing_&quot;:{&quot;current_class&quot;:&quot;bt_bb_bottom_spacing_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;,&quot;xl&quot;:&quot;normal&quot;,&quot;md&quot;:&quot;none&quot;,&quot;sm&quot;:&quot;none&quot;,&quot;xs&quot;:&quot;none&quot;},&quot;bt_bb_border_thickness_&quot;:{&quot;current_class&quot;:&quot;bt_bb_border_thickness_1&quot;,&quot;xxl&quot;:&quot;1&quot;,&quot;xl&quot;:&quot;1&quot;},&quot;bt_bb_icon_size_&quot;:{&quot;current_class&quot;:&quot;bt_bb_icon_size_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;,&quot;xl&quot;:&quot;normal&quot;},&quot;bt_bb_text_size_&quot;:{&quot;current_class&quot;:&quot;bt_bb_text_size_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;,&quot;xl&quot;:&quot;normal&quot;}}">
                                          <div class="bt_bb_separator_v2_inner">
                                             <span class="bt_bb_separator_v2_inner_before"></span>
                                             <span class="bt_bb_separator_v2_inner_content">
                                                <span data-ico-="&#x;" class="bt_bb_icon_holder"></span>
                                             </span>
                                             <span class="bt_bb_separator_v2_inner_after"></span>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="bt_bb_row_wrapper">
                           <div class="bt_bb_row" data-bt-override-class="{}">
                              <div class="bt_bb_column col-xxl-12 col-xl-12 col-xs-12 col-sm-12 col-md-12 col-lg-12 bt_bb_vertical_align_top bt_bb_align_left bt_bb_padding_normal bt_bb_shape_inherit" data-width="12" data-bt-override-class="{}">
                                 <div class="bt_bb_column_content">
                                    <div class="bt_bb_column_content_inner">
                                       <div class="bt_bb_separator_v2 bt_bb_border_style_none bt_bb_top_spacing_none bt_bb_bottom_spacing_normal bt_bb_border_thickness_1 bt_bb_icon_size_normal bt_bb_text_size_normal bt_bb_separator_v2_without_content bt_bb_hidden_xs bt_bb_hidden_ms bt_bb_hidden_sm bt_bb_hidden_md" data-bt-override-class="{&quot;bt_bb_top_spacing_&quot;:{&quot;current_class&quot;:&quot;bt_bb_top_spacing_none&quot;,&quot;xxl&quot;:&quot;none&quot;,&quot;xl&quot;:&quot;none&quot;},&quot;bt_bb_bottom_spacing_&quot;:{&quot;current_class&quot;:&quot;bt_bb_bottom_spacing_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;,&quot;xl&quot;:&quot;normal&quot;},&quot;bt_bb_border_thickness_&quot;:{&quot;current_class&quot;:&quot;bt_bb_border_thickness_1&quot;,&quot;xxl&quot;:&quot;1&quot;,&quot;xl&quot;:&quot;1&quot;},&quot;bt_bb_icon_size_&quot;:{&quot;current_class&quot;:&quot;bt_bb_icon_size_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;,&quot;xl&quot;:&quot;normal&quot;},&quot;bt_bb_text_size_&quot;:{&quot;current_class&quot;:&quot;bt_bb_text_size_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;,&quot;xl&quot;:&quot;normal&quot;}}">
                                          <div class="bt_bb_separator_v2_inner">
                                             <span class="bt_bb_separator_v2_inner_before"></span>
                                             <span class="bt_bb_separator_v2_inner_content">
                                                <span data-ico-="&#x;" class="bt_bb_icon_holder"></span>
                                             </span>
                                             <span class="bt_bb_separator_v2_inner_after"></span>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- cell_inner -->
                  </div>
                  <!-- cell -->
               </div>
               <!-- port -->
               <div class="bt_bb_section_top_section_coverage_image">
                  <img decoding="async" src="<?= base_url(); ?>uploads/2022/04/top_white_wave_03.png" alt="bt_bb_section_top_section_coverage_image" />
               </div>
               <div class="bt_bb_section_bottom_section_coverage_image">
                  <img decoding="async" src="<?= base_url(); ?>uploads/2022/04/bottom_white_wave_03.png" alt="bt_bb_section_bottom_section_coverage_image" />
               </div>
            </section>
            <section data-bb-version="4.5.9" id="bt_bb_section656da16ab1fd8" class="m-admission  bt_bb_section bt_bb_layout_boxed_1200 bt_bb_vertical_align_top bt_bb_bottom_section_coverage_image bt_bb_section_with_bottom_coverage_image bt_bb_top_spacing_medium bt_bb_bottom_spacing_large bt_bb_negative_margin_none" style=";background-color:rgb(255,255,255);" data-bt-override-class="{&quot;bt_bb_top_spacing_&quot;:{&quot;current_class&quot;:&quot;bt_bb_top_spacing_medium&quot;,&quot;xxl&quot;:&quot;medium&quot;},&quot;bt_bb_bottom_spacing_&quot;:{&quot;current_class&quot;:&quot;bt_bb_bottom_spacing_large&quot;,&quot;xxl&quot;:&quot;large&quot;}}">
               <div class="bt_bb_port m-program">
                  <div class="bt_bb_cell">
                     <div class="bt_bb_cell_inner">
                        <div class="bt_bb_row_wrapper">
                           <div class="bt_bb_row" data-bt-override-class="{}">
                              <div class="bt_bb_column col-xxl-12 col-xl-12 col-xs-12 col-sm-12 col-md-12 col-lg-12 bt_bb_vertical_align_top bt_bb_align_left bt_bb_padding_normal bt_bb_animation_fade_in animate bt_bb_shape_inherit" data-width="12" data-bt-override-class="{&quot;bt_bb_align_&quot;:{&quot;current_class&quot;:&quot;bt_bb_align_left&quot;,&quot;xxl&quot;:&quot;left&quot;,&quot;xl&quot;:&quot;left&quot;},&quot;bt_bb_padding_&quot;:{&quot;current_class&quot;:&quot;bt_bb_padding_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;,&quot;xl&quot;:&quot;normal&quot;}}">
                                 <div class="bt_bb_column_content">
                                    <div class="bt_bb_column_content_inner">
                                       <header data-bb-version="4.5.9" class="bt_bb_headline bt_bb_subheadline_text_transform_default bt_bb_color_scheme_9 bt_bb_dash_none bt_bb_size_large bt_bb_align_inherit mb10" style="; --primary-color:#282828; --secondary-color:var(--alternate-color);" data-bt-override-class="{&quot;bt_bb_size_&quot;:{&quot;current_class&quot;:&quot;bt_bb_size_large&quot;,&quot;xxl&quot;:&quot;large&quot;},&quot;bt_bb_align_&quot;:{&quot;current_class&quot;:&quot;bt_bb_align_inherit&quot;,&quot;xxl&quot;:&quot;inherit&quot;}}">
                                          <h2 class="bt_bb_headline_tag">
                                             <span class="bt_bb_headline_content">
                                                <span>Our Programs</span>
                                             </span>
                                          </h2>
                                       </header>
                                       <div class="bt_bb_text">
                                          <p>Our extracurricular programs, combined with our proprietary digital lesson-planning tool, empower teachers to design personalized learning experiences tailored to each age group.</p>
                                       </div>
                                       <div data-bb-version="4.5.9" class="bt_bb_separator_v2 bt_bb_border_style_none bt_bb_top_spacing_none bt_bb_bottom_spacing_50 bt_bb_border_thickness_1 bt_bb_icon_size_normal bt_bb_text_size_normal bt_bb_separator_v2_without_content" data-bt-override-class="{&quot;bt_bb_top_spacing_&quot;:{&quot;current_class&quot;:&quot;bt_bb_top_spacing_none&quot;,&quot;xxl&quot;:&quot;none&quot;},&quot;bt_bb_bottom_spacing_&quot;:{&quot;current_class&quot;:&quot;bt_bb_bottom_spacing_50&quot;,&quot;xxl&quot;:&quot;50&quot;},&quot;bt_bb_border_thickness_&quot;:{&quot;current_class&quot;:&quot;bt_bb_border_thickness_1&quot;,&quot;xxl&quot;:&quot;1&quot;},&quot;bt_bb_icon_size_&quot;:{&quot;current_class&quot;:&quot;bt_bb_icon_size_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;},&quot;bt_bb_text_size_&quot;:{&quot;current_class&quot;:&quot;bt_bb_text_size_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;}}">
                                          <div class="bt_bb_separator_v2_inner">
                                             <span class="bt_bb_separator_v2_inner_before"></span>
                                             <span class="bt_bb_separator_v2_inner_content">
                                                <span data-ico-="&#x;" class="bt_bb_icon_holder"></span>
                                             </span>
                                             <span class="bt_bb_separator_v2_inner_after"></span>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="bt_bb_row_wrapper">
                           <div class="bt_bb_row bt_bb_column_gap_15 bt_bb_negative_margin_" data-bt-override-class="{}">
                              <div data-bb-version="4.5.9" class="bt_bb_column col-xxl-2_4 col-xl-2_4 col-xs-6 col-sm-6 col-md-6 col-lg-2_4 bt_bb_vertical_align_top bt_bb_align_left bt_bb_padding_normal bt_bb_animation_fade_in bt_bb_animation_move_up animate" data-width="2.4" data-bt-override-class="{&quot;bt_bb_align_&quot;:{&quot;current_class&quot;:&quot;bt_bb_align_left&quot;,&quot;xxl&quot;:&quot;left&quot;},&quot;bt_bb_padding_&quot;:{&quot;current_class&quot;:&quot;bt_bb_padding_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;}}">
                                 <div class="bt_bb_column_content">
                                    <div class="bt_bb_column_content_inner">
                                       <div data-bb-version="4.6.1" class="bt_bb_card bt_bb_padding_25 btWithLink bt_bb_image_position_rotate bt_bb_color_scheme_2" style="background-color:rgb(250,249,249);; --primary-color:#282828; --secondary-color:#ffffff;" data-bt-override-class="{&quot;bt_bb_padding_&quot;:{&quot;current_class&quot;:&quot;bt_bb_padding_25&quot;,&quot;xxl&quot;:&quot;25&quot;}}">
                                          <a href="<?php echo base_url(); ?>our-programmes" target="_self" class="btCardLink"></a>
                                          <div class="bt_bb_card_content">
                                             <div class="bt_bb_separator_v2 bt_bb_border_style_none bt_bb_top_spacing_none bt_bb_bottom_spacing_normal bt_bb_border_thickness_1 bt_bb_icon_size_normal bt_bb_text_size_normal bt_bb_separator_v2_without_content" data-bt-override-class="{&quot;bt_bb_top_spacing_&quot;:{&quot;current_class&quot;:&quot;bt_bb_top_spacing_none&quot;,&quot;xxl&quot;:&quot;none&quot;,&quot;xl&quot;:&quot;none&quot;},&quot;bt_bb_bottom_spacing_&quot;:{&quot;current_class&quot;:&quot;bt_bb_bottom_spacing_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;,&quot;xl&quot;:&quot;normal&quot;},&quot;bt_bb_border_thickness_&quot;:{&quot;current_class&quot;:&quot;bt_bb_border_thickness_1&quot;,&quot;xxl&quot;:&quot;1&quot;,&quot;xl&quot;:&quot;1&quot;},&quot;bt_bb_icon_size_&quot;:{&quot;current_class&quot;:&quot;bt_bb_icon_size_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;,&quot;xl&quot;:&quot;normal&quot;},&quot;bt_bb_text_size_&quot;:{&quot;current_class&quot;:&quot;bt_bb_text_size_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;,&quot;xl&quot;:&quot;normal&quot;}}">
                                                <div class="bt_bb_separator_v2_inner">
                                                   <span class="bt_bb_separator_v2_inner_before"></span>
                                                   <span class="bt_bb_separator_v2_inner_content">
                                                      <span data-ico-="&#x;" class="bt_bb_icon_holder"></span>
                                                   </span>
                                                   <span class="bt_bb_separator_v2_inner_after"></span>
                                                </div>
                                             </div>
                                             <header data-bb-version="4.5.9" class="bt_bb_headline bt_bb_subheadline_text_transform_default bt_bb_dash_none bt_bb_size_extrasmall bt_bb_align_inherit" style=";color:rgb(97,185,187);border-color:rgb(97,185,187);" data-bt-override-class="{&quot;bt_bb_size_&quot;:{&quot;current_class&quot;:&quot;bt_bb_size_extrasmall&quot;,&quot;xxl&quot;:&quot;extrasmall&quot;},&quot;bt_bb_align_&quot;:{&quot;current_class&quot;:&quot;bt_bb_align_inherit&quot;,&quot;xxl&quot;:&quot;inherit&quot;}}">
                                                <h4 class="bt_bb_headline_tag">
                                                   <span class="bt_bb_headline_content">
                                                      <span>Play Group</span>
                                                   </span>
                                                </h4>
                                             </header>
                                             <div class="bt_bb_separator_v2 bt_bb_border_style_none bt_bb_top_spacing_none bt_bb_bottom_spacing_extra_small bt_bb_border_thickness_1 bt_bb_icon_size_normal bt_bb_text_size_normal bt_bb_separator_v2_without_content" data-bt-override-class="{&quot;bt_bb_top_spacing_&quot;:{&quot;current_class&quot;:&quot;bt_bb_top_spacing_none&quot;,&quot;xxl&quot;:&quot;none&quot;,&quot;xl&quot;:&quot;none&quot;},&quot;bt_bb_bottom_spacing_&quot;:{&quot;current_class&quot;:&quot;bt_bb_bottom_spacing_extra_small&quot;,&quot;xxl&quot;:&quot;extra_small&quot;,&quot;xl&quot;:&quot;extra_small&quot;},&quot;bt_bb_border_thickness_&quot;:{&quot;current_class&quot;:&quot;bt_bb_border_thickness_1&quot;,&quot;xxl&quot;:&quot;1&quot;,&quot;xl&quot;:&quot;1&quot;},&quot;bt_bb_icon_size_&quot;:{&quot;current_class&quot;:&quot;bt_bb_icon_size_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;,&quot;xl&quot;:&quot;normal&quot;},&quot;bt_bb_text_size_&quot;:{&quot;current_class&quot;:&quot;bt_bb_text_size_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;,&quot;xl&quot;:&quot;normal&quot;}}">
                                                <div class="bt_bb_separator_v2_inner">
                                                   <span class="bt_bb_separator_v2_inner_before"></span>
                                                   <span class="bt_bb_separator_v2_inner_content">
                                                      <span data-ico-="&#x;" class="bt_bb_icon_holder"></span>
                                                   </span>
                                                   <span class="bt_bb_separator_v2_inner_after"></span>
                                                </div>
                                             </div>
                                             <div class="bt_bb_text">
                                                <p>
                                                   <strong>Age: </strong>2 years to 3 years
                                                </p>
                                             </div>
                                          </div>
                                          <div class="bt_bb_card_image">
                                             <img decoding="async" src="<?= base_url(); ?>uploads/2023/07/pqkozjjrcnpjdvdky3rh.avif" alt="Play Group">
                                          </div>
                                       </div>
                                       <div class="bt_bb_separator_v2 bt_bb_border_style_none bt_bb_bottom_spacing_normal bt_bb_icon_size_normal bt_bb_text_size_normal bt_bb_separator_v2_without_content" data-bt-override-class="null">
                                          <div class="bt_bb_separator_v2_inner">
                                             <span class="bt_bb_separator_v2_inner_before"></span>
                                             <span class="bt_bb_separator_v2_inner_content">
                                                <span data-ico-="&#x;" class="bt_bb_icon_holder"></span>
                                             </span>
                                             <span class="bt_bb_separator_v2_inner_after"></span>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="bt_bb_column col-xxl-2_4 col-xl-2_4 col-xs-6 col-sm-6 col-md-6 col-lg-2_4 bt_bb_vertical_align_top bt_bb_align_left bt_bb_padding_normal bt_bb_animation_fade_in bt_bb_animation_move_up animate bt_bb_shape_inherit" data-width="2.4" data-bt-override-class="{&quot;bt_bb_align_&quot;:{&quot;current_class&quot;:&quot;bt_bb_align_left&quot;,&quot;xxl&quot;:&quot;left&quot;,&quot;xl&quot;:&quot;left&quot;},&quot;bt_bb_padding_&quot;:{&quot;current_class&quot;:&quot;bt_bb_padding_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;,&quot;xl&quot;:&quot;normal&quot;}}">
                                 <div class="bt_bb_column_content">
                                    <div class="bt_bb_column_content_inner">
                                       <div data-bb-version="4.6.1" class="bt_bb_card bt_bb_padding_25 btWithLink bt_bb_image_position_rotate bt_bb_color_scheme_2" style="background-color:rgb(247,243,238);; --primary-color:#282828; --secondary-color:#ffffff;" data-bt-override-class="{&quot;bt_bb_padding_&quot;:{&quot;current_class&quot;:&quot;bt_bb_padding_25&quot;,&quot;xxl&quot;:&quot;25&quot;}}">
                                          <a href="<?php echo base_url(); ?>our-programmes" target="_self" class="btCardLink"></a>
                                          <div class="bt_bb_card_content">
                                             <div class="bt_bb_separator_v2 bt_bb_border_style_none bt_bb_top_spacing_none bt_bb_bottom_spacing_normal bt_bb_border_thickness_1 bt_bb_icon_size_normal bt_bb_text_size_normal bt_bb_separator_v2_without_content" data-bt-override-class="{&quot;bt_bb_top_spacing_&quot;:{&quot;current_class&quot;:&quot;bt_bb_top_spacing_none&quot;,&quot;xxl&quot;:&quot;none&quot;,&quot;xl&quot;:&quot;none&quot;},&quot;bt_bb_bottom_spacing_&quot;:{&quot;current_class&quot;:&quot;bt_bb_bottom_spacing_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;,&quot;xl&quot;:&quot;normal&quot;},&quot;bt_bb_border_thickness_&quot;:{&quot;current_class&quot;:&quot;bt_bb_border_thickness_1&quot;,&quot;xxl&quot;:&quot;1&quot;,&quot;xl&quot;:&quot;1&quot;},&quot;bt_bb_icon_size_&quot;:{&quot;current_class&quot;:&quot;bt_bb_icon_size_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;,&quot;xl&quot;:&quot;normal&quot;},&quot;bt_bb_text_size_&quot;:{&quot;current_class&quot;:&quot;bt_bb_text_size_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;,&quot;xl&quot;:&quot;normal&quot;}}">
                                                <div class="bt_bb_separator_v2_inner">
                                                   <span class="bt_bb_separator_v2_inner_before"></span>
                                                   <span class="bt_bb_separator_v2_inner_content">
                                                      <span data-ico-="&#x;" class="bt_bb_icon_holder"></span>
                                                   </span>
                                                   <span class="bt_bb_separator_v2_inner_after"></span>
                                                </div>
                                             </div>
                                             <header data-bb-version="4.5.9" class="bt_bb_headline bt_bb_subheadline_text_transform_default bt_bb_dash_none bt_bb_size_extrasmall bt_bb_align_inherit" style=";color:rgb(97,185,187);border-color:rgb(97,185,187);" data-bt-override-class="{&quot;bt_bb_size_&quot;:{&quot;current_class&quot;:&quot;bt_bb_size_extrasmall&quot;,&quot;xxl&quot;:&quot;extrasmall&quot;},&quot;bt_bb_align_&quot;:{&quot;current_class&quot;:&quot;bt_bb_align_inherit&quot;,&quot;xxl&quot;:&quot;inherit&quot;}}">
                                                <h4 class="bt_bb_headline_tag">
                                                   <span class="bt_bb_headline_content">
                                                      <span>Nursery</span>
                                                   </span>
                                                </h4>
                                             </header>
                                             <div class="bt_bb_separator_v2 bt_bb_border_style_none bt_bb_top_spacing_none bt_bb_bottom_spacing_extra_small bt_bb_border_thickness_1 bt_bb_icon_size_normal bt_bb_text_size_normal bt_bb_separator_v2_without_content" data-bt-override-class="{&quot;bt_bb_top_spacing_&quot;:{&quot;current_class&quot;:&quot;bt_bb_top_spacing_none&quot;,&quot;xxl&quot;:&quot;none&quot;,&quot;xl&quot;:&quot;none&quot;},&quot;bt_bb_bottom_spacing_&quot;:{&quot;current_class&quot;:&quot;bt_bb_bottom_spacing_extra_small&quot;,&quot;xxl&quot;:&quot;extra_small&quot;,&quot;xl&quot;:&quot;extra_small&quot;},&quot;bt_bb_border_thickness_&quot;:{&quot;current_class&quot;:&quot;bt_bb_border_thickness_1&quot;,&quot;xxl&quot;:&quot;1&quot;,&quot;xl&quot;:&quot;1&quot;},&quot;bt_bb_icon_size_&quot;:{&quot;current_class&quot;:&quot;bt_bb_icon_size_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;,&quot;xl&quot;:&quot;normal&quot;},&quot;bt_bb_text_size_&quot;:{&quot;current_class&quot;:&quot;bt_bb_text_size_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;,&quot;xl&quot;:&quot;normal&quot;}}">
                                                <div class="bt_bb_separator_v2_inner">
                                                   <span class="bt_bb_separator_v2_inner_before"></span>
                                                   <span class="bt_bb_separator_v2_inner_content">
                                                      <span data-ico-="&#x;" class="bt_bb_icon_holder"></span>
                                                   </span>
                                                   <span class="bt_bb_separator_v2_inner_after"></span>
                                                </div>
                                             </div>
                                             <div class="bt_bb_text">
                                                <p>
                                                   <strong>Age:</strong> 3 years to 4 years
                                                </p>
                                             </div>
                                          </div>
                                          <div class="bt_bb_card_image">
                                             <img decoding="async" src="<?= base_url(); ?>uploads/2023/07/poswevyxe9dxqmjbmgmv.avif" alt="Nursery">
                                          </div>
                                       </div>
                                       <div class="bt_bb_separator_v2 bt_bb_border_style_none bt_bb_bottom_spacing_normal bt_bb_icon_size_normal bt_bb_text_size_normal bt_bb_separator_v2_without_content" data-bt-override-class="null">
                                          <div class="bt_bb_separator_v2_inner">
                                             <span class="bt_bb_separator_v2_inner_before"></span>
                                             <span class="bt_bb_separator_v2_inner_content">
                                                <span data-ico-="&#x;" class="bt_bb_icon_holder"></span>
                                             </span>
                                             <span class="bt_bb_separator_v2_inner_after"></span>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="bt_bb_column col-xxl-2_4 col-xl-2_4 col-xs-6 col-sm-6 col-md-6 col-lg-2_4 bt_bb_vertical_align_top bt_bb_align_left bt_bb_padding_normal bt_bb_animation_fade_in bt_bb_animation_move_up animate bt_bb_shape_inherit" data-width="2.4" data-bt-override-class="{&quot;bt_bb_align_&quot;:{&quot;current_class&quot;:&quot;bt_bb_align_left&quot;,&quot;xxl&quot;:&quot;left&quot;,&quot;xl&quot;:&quot;left&quot;},&quot;bt_bb_padding_&quot;:{&quot;current_class&quot;:&quot;bt_bb_padding_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;,&quot;xl&quot;:&quot;normal&quot;}}">
                                 <div class="bt_bb_column_content">
                                    <div class="bt_bb_column_content_inner">
                                       <div data-bb-version="4.6.1" class="bt_bb_card bt_bb_padding_25 btWithLink bt_bb_image_position_rotate bt_bb_color_scheme_2" style="background-color:rgb(250,249,249);; --primary-color:#282828; --secondary-color:#ffffff;" data-bt-override-class="{&quot;bt_bb_padding_&quot;:{&quot;current_class&quot;:&quot;bt_bb_padding_25&quot;,&quot;xxl&quot;:&quot;25&quot;}}">
                                          <a href="<?php echo base_url(); ?>our-programmes" target="_self" class="btCardLink"></a>
                                          <div class="bt_bb_card_content">
                                             <div class="bt_bb_separator_v2 bt_bb_border_style_none bt_bb_top_spacing_none bt_bb_bottom_spacing_normal bt_bb_border_thickness_1 bt_bb_icon_size_normal bt_bb_text_size_normal bt_bb_separator_v2_without_content" data-bt-override-class="{&quot;bt_bb_top_spacing_&quot;:{&quot;current_class&quot;:&quot;bt_bb_top_spacing_none&quot;,&quot;xxl&quot;:&quot;none&quot;,&quot;xl&quot;:&quot;none&quot;},&quot;bt_bb_bottom_spacing_&quot;:{&quot;current_class&quot;:&quot;bt_bb_bottom_spacing_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;,&quot;xl&quot;:&quot;normal&quot;},&quot;bt_bb_border_thickness_&quot;:{&quot;current_class&quot;:&quot;bt_bb_border_thickness_1&quot;,&quot;xxl&quot;:&quot;1&quot;,&quot;xl&quot;:&quot;1&quot;},&quot;bt_bb_icon_size_&quot;:{&quot;current_class&quot;:&quot;bt_bb_icon_size_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;,&quot;xl&quot;:&quot;normal&quot;},&quot;bt_bb_text_size_&quot;:{&quot;current_class&quot;:&quot;bt_bb_text_size_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;,&quot;xl&quot;:&quot;normal&quot;}}">
                                                <div class="bt_bb_separator_v2_inner">
                                                   <span class="bt_bb_separator_v2_inner_before"></span>
                                                   <span class="bt_bb_separator_v2_inner_content">
                                                      <span data-ico-="&#x;" class="bt_bb_icon_holder"></span>
                                                   </span>
                                                   <span class="bt_bb_separator_v2_inner_after"></span>
                                                </div>
                                             </div>
                                             <header data-bb-version="4.5.9" class="bt_bb_headline bt_bb_subheadline_text_transform_default bt_bb_dash_none bt_bb_size_extrasmall bt_bb_align_inherit" style=";color:rgb(97,185,187);border-color:rgb(97,185,187);" data-bt-override-class="{&quot;bt_bb_size_&quot;:{&quot;current_class&quot;:&quot;bt_bb_size_extrasmall&quot;,&quot;xxl&quot;:&quot;extrasmall&quot;},&quot;bt_bb_align_&quot;:{&quot;current_class&quot;:&quot;bt_bb_align_inherit&quot;,&quot;xxl&quot;:&quot;inherit&quot;}}">
                                                <h4 class="bt_bb_headline_tag">
                                                   <span class="bt_bb_headline_content">
                                                      <span>Kidzo Junior</span>
                                                   </span>
                                                </h4>
                                             </header>
                                             <div class="bt_bb_separator_v2 bt_bb_border_style_none bt_bb_top_spacing_none bt_bb_bottom_spacing_extra_small bt_bb_border_thickness_1 bt_bb_icon_size_normal bt_bb_text_size_normal bt_bb_separator_v2_without_content" data-bt-override-class="{&quot;bt_bb_top_spacing_&quot;:{&quot;current_class&quot;:&quot;bt_bb_top_spacing_none&quot;,&quot;xxl&quot;:&quot;none&quot;,&quot;xl&quot;:&quot;none&quot;},&quot;bt_bb_bottom_spacing_&quot;:{&quot;current_class&quot;:&quot;bt_bb_bottom_spacing_extra_small&quot;,&quot;xxl&quot;:&quot;extra_small&quot;,&quot;xl&quot;:&quot;extra_small&quot;},&quot;bt_bb_border_thickness_&quot;:{&quot;current_class&quot;:&quot;bt_bb_border_thickness_1&quot;,&quot;xxl&quot;:&quot;1&quot;,&quot;xl&quot;:&quot;1&quot;},&quot;bt_bb_icon_size_&quot;:{&quot;current_class&quot;:&quot;bt_bb_icon_size_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;,&quot;xl&quot;:&quot;normal&quot;},&quot;bt_bb_text_size_&quot;:{&quot;current_class&quot;:&quot;bt_bb_text_size_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;,&quot;xl&quot;:&quot;normal&quot;}}">
                                                <div class="bt_bb_separator_v2_inner">
                                                   <span class="bt_bb_separator_v2_inner_before"></span>
                                                   <span class="bt_bb_separator_v2_inner_content">
                                                      <span data-ico-="&#x;" class="bt_bb_icon_holder"></span>
                                                   </span>
                                                   <span class="bt_bb_separator_v2_inner_after"></span>
                                                </div>
                                             </div>
                                             <div class="bt_bb_text">
                                                <p>
                                                   <strong>Age:</strong> 4 years to 5 years
                                                </p>
                                             </div>
                                          </div>
                                          <div class="bt_bb_card_image">
                                             <img decoding="async" src="<?= base_url(); ?>uploads/2023/07/udzsrcost04dqtnxm34n.avif?tr=w-300" alt="Kidzo Junior">
                                          </div>
                                       </div>
                                       <div class="bt_bb_separator_v2 bt_bb_border_style_none bt_bb_bottom_spacing_normal bt_bb_icon_size_normal bt_bb_text_size_normal bt_bb_separator_v2_without_content" data-bt-override-class="null">
                                          <div class="bt_bb_separator_v2_inner">
                                             <span class="bt_bb_separator_v2_inner_before"></span>
                                             <span class="bt_bb_separator_v2_inner_content">
                                                <span data-ico-="&#x;" class="bt_bb_icon_holder"></span>
                                             </span>
                                             <span class="bt_bb_separator_v2_inner_after"></span>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="bt_bb_column col-xxl-2_4 col-xl-2_4 col-xs-6 col-sm-6 col-md-6 col-lg-2_4 bt_bb_vertical_align_top bt_bb_align_left bt_bb_padding_normal bt_bb_animation_fade_in bt_bb_animation_move_up animate bt_bb_shape_inherit" data-width="2.4" data-bt-override-class="{&quot;bt_bb_align_&quot;:{&quot;current_class&quot;:&quot;bt_bb_align_left&quot;,&quot;xxl&quot;:&quot;left&quot;,&quot;xl&quot;:&quot;left&quot;},&quot;bt_bb_padding_&quot;:{&quot;current_class&quot;:&quot;bt_bb_padding_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;,&quot;xl&quot;:&quot;normal&quot;}}">
                                 <div class="bt_bb_column_content">
                                    <div class="bt_bb_column_content_inner">
                                       <div data-bb-version="4.6.1" class="bt_bb_card bt_bb_padding_25 btWithLink bt_bb_image_position_rotate bt_bb_color_scheme_2" style="background-color:rgb(247,243,238);; --primary-color:#282828; --secondary-color:#ffffff;" data-bt-override-class="{&quot;bt_bb_padding_&quot;:{&quot;current_class&quot;:&quot;bt_bb_padding_25&quot;,&quot;xxl&quot;:&quot;25&quot;}}">
                                          <a href="<?php echo base_url(); ?>our-programmes" target="_self" class="btCardLink"></a>
                                          <div class="bt_bb_card_content">
                                             <div class="bt_bb_separator_v2 bt_bb_border_style_none bt_bb_top_spacing_none bt_bb_bottom_spacing_normal bt_bb_border_thickness_1 bt_bb_icon_size_normal bt_bb_text_size_normal bt_bb_separator_v2_without_content" data-bt-override-class="{&quot;bt_bb_top_spacing_&quot;:{&quot;current_class&quot;:&quot;bt_bb_top_spacing_none&quot;,&quot;xxl&quot;:&quot;none&quot;,&quot;xl&quot;:&quot;none&quot;},&quot;bt_bb_bottom_spacing_&quot;:{&quot;current_class&quot;:&quot;bt_bb_bottom_spacing_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;,&quot;xl&quot;:&quot;normal&quot;},&quot;bt_bb_border_thickness_&quot;:{&quot;current_class&quot;:&quot;bt_bb_border_thickness_1&quot;,&quot;xxl&quot;:&quot;1&quot;,&quot;xl&quot;:&quot;1&quot;},&quot;bt_bb_icon_size_&quot;:{&quot;current_class&quot;:&quot;bt_bb_icon_size_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;,&quot;xl&quot;:&quot;normal&quot;},&quot;bt_bb_text_size_&quot;:{&quot;current_class&quot;:&quot;bt_bb_text_size_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;,&quot;xl&quot;:&quot;normal&quot;}}">
                                                <div class="bt_bb_separator_v2_inner">
                                                   <span class="bt_bb_separator_v2_inner_before"></span>
                                                   <span class="bt_bb_separator_v2_inner_content">
                                                      <span data-ico-="&#x;" class="bt_bb_icon_holder"></span>
                                                   </span>
                                                   <span class="bt_bb_separator_v2_inner_after"></span>
                                                </div>
                                             </div>
                                             <header data-bb-version="4.5.9" class="bt_bb_headline bt_bb_subheadline_text_transform_default bt_bb_dash_none bt_bb_size_extrasmall bt_bb_align_inherit" style=";color:rgb(97,185,187);border-color:rgb(97,185,187);" data-bt-override-class="{&quot;bt_bb_size_&quot;:{&quot;current_class&quot;:&quot;bt_bb_size_extrasmall&quot;,&quot;xxl&quot;:&quot;extrasmall&quot;},&quot;bt_bb_align_&quot;:{&quot;current_class&quot;:&quot;bt_bb_align_inherit&quot;,&quot;xxl&quot;:&quot;inherit&quot;}}">
                                                <h4 class="bt_bb_headline_tag">
                                                   <span class="bt_bb_headline_content">
                                                      <span>Kidzo Senior</span>
                                                   </span>
                                                </h4>
                                             </header>
                                             <div class="bt_bb_separator_v2 bt_bb_border_style_none bt_bb_top_spacing_none bt_bb_bottom_spacing_extra_small bt_bb_border_thickness_1 bt_bb_icon_size_normal bt_bb_text_size_normal bt_bb_separator_v2_without_content" data-bt-override-class="{&quot;bt_bb_top_spacing_&quot;:{&quot;current_class&quot;:&quot;bt_bb_top_spacing_none&quot;,&quot;xxl&quot;:&quot;none&quot;,&quot;xl&quot;:&quot;none&quot;},&quot;bt_bb_bottom_spacing_&quot;:{&quot;current_class&quot;:&quot;bt_bb_bottom_spacing_extra_small&quot;,&quot;xxl&quot;:&quot;extra_small&quot;,&quot;xl&quot;:&quot;extra_small&quot;},&quot;bt_bb_border_thickness_&quot;:{&quot;current_class&quot;:&quot;bt_bb_border_thickness_1&quot;,&quot;xxl&quot;:&quot;1&quot;,&quot;xl&quot;:&quot;1&quot;},&quot;bt_bb_icon_size_&quot;:{&quot;current_class&quot;:&quot;bt_bb_icon_size_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;,&quot;xl&quot;:&quot;normal&quot;},&quot;bt_bb_text_size_&quot;:{&quot;current_class&quot;:&quot;bt_bb_text_size_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;,&quot;xl&quot;:&quot;normal&quot;}}">
                                                <div class="bt_bb_separator_v2_inner">
                                                   <span class="bt_bb_separator_v2_inner_before"></span>
                                                   <span class="bt_bb_separator_v2_inner_content">
                                                      <span data-ico-="&#x;" class="bt_bb_icon_holder"></span>
                                                   </span>
                                                   <span class="bt_bb_separator_v2_inner_after"></span>
                                                </div>
                                             </div>
                                             <div class="bt_bb_text">
                                                <p>
                                                   <strong>Age:</strong> 5 years to 6 years
                                                </p>
                                             </div>
                                          </div>
                                          <div class="bt_bb_card_image">
                                             <img decoding="async" src="<?= base_url(); ?>uploads/2023/07/Kidzo-Senior.avif?tr=w-300" alt="Kidzo Senior">
                                          </div>
                                       </div>
                                       <div class="bt_bb_separator_v2 bt_bb_border_style_none bt_bb_top_spacing_none bt_bb_bottom_spacing_normal bt_bb_border_thickness_1 bt_bb_icon_size_normal bt_bb_text_size_normal bt_bb_separator_v2_without_content bt_bb_hidden_xs bt_bb_hidden_ms bt_bb_hidden_sm" data-bt-override-class="{&quot;bt_bb_top_spacing_&quot;:{&quot;current_class&quot;:&quot;bt_bb_top_spacing_none&quot;,&quot;xxl&quot;:&quot;none&quot;,&quot;xl&quot;:&quot;none&quot;},&quot;bt_bb_bottom_spacing_&quot;:{&quot;current_class&quot;:&quot;bt_bb_bottom_spacing_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;,&quot;xl&quot;:&quot;normal&quot;},&quot;bt_bb_border_thickness_&quot;:{&quot;current_class&quot;:&quot;bt_bb_border_thickness_1&quot;,&quot;xxl&quot;:&quot;1&quot;,&quot;xl&quot;:&quot;1&quot;},&quot;bt_bb_icon_size_&quot;:{&quot;current_class&quot;:&quot;bt_bb_icon_size_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;,&quot;xl&quot;:&quot;normal&quot;},&quot;bt_bb_text_size_&quot;:{&quot;current_class&quot;:&quot;bt_bb_text_size_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;,&quot;xl&quot;:&quot;normal&quot;}}">
                                          <div class="bt_bb_separator_v2_inner">
                                             <span class="bt_bb_separator_v2_inner_before"></span>
                                             <span class="bt_bb_separator_v2_inner_content">
                                                <span data-ico-="&#x;" class="bt_bb_icon_holder"></span>
                                             </span>
                                             <span class="bt_bb_separator_v2_inner_after"></span>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="bt_bb_column col-xxl-2_4 col-xl-2_4 col-xs-6 col-sm-6 col-md-6 col-lg-2_4 bt_bb_vertical_align_top bt_bb_align_left bt_bb_padding_normal bt_bb_animation_fade_in bt_bb_animation_move_up animate bt_bb_shape_inherit" data-width="2.4" data-bt-override-class="{&quot;bt_bb_align_&quot;:{&quot;current_class&quot;:&quot;bt_bb_align_left&quot;,&quot;xxl&quot;:&quot;left&quot;,&quot;xl&quot;:&quot;left&quot;},&quot;bt_bb_padding_&quot;:{&quot;current_class&quot;:&quot;bt_bb_padding_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;,&quot;xl&quot;:&quot;normal&quot;}}">
                                 <div class="bt_bb_column_content">
                                    <div class="bt_bb_column_content_inner">
                                       <div data-bb-version="4.6.1" class="bt_bb_card bt_bb_padding_25 btWithLink bt_bb_image_position_rotate bt_bb_color_scheme_2" style="background-color:rgb(250,249,249);; --primary-color:#282828; --secondary-color:#ffffff;" data-bt-override-class="{&quot;bt_bb_padding_&quot;:{&quot;current_class&quot;:&quot;bt_bb_padding_25&quot;,&quot;xxl&quot;:&quot;25&quot;}}">
                                          <a href="<?php echo base_url(); ?>our-programmes" target="_self" class="btCardLink"></a>
                                          <div class="bt_bb_card_content">
                                             <div class="bt_bb_separator_v2 bt_bb_border_style_none bt_bb_top_spacing_none bt_bb_bottom_spacing_normal bt_bb_border_thickness_1 bt_bb_icon_size_normal bt_bb_text_size_normal bt_bb_separator_v2_without_content" data-bt-override-class="{&quot;bt_bb_top_spacing_&quot;:{&quot;current_class&quot;:&quot;bt_bb_top_spacing_none&quot;,&quot;xxl&quot;:&quot;none&quot;,&quot;xl&quot;:&quot;none&quot;},&quot;bt_bb_bottom_spacing_&quot;:{&quot;current_class&quot;:&quot;bt_bb_bottom_spacing_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;,&quot;xl&quot;:&quot;normal&quot;},&quot;bt_bb_border_thickness_&quot;:{&quot;current_class&quot;:&quot;bt_bb_border_thickness_1&quot;,&quot;xxl&quot;:&quot;1&quot;,&quot;xl&quot;:&quot;1&quot;},&quot;bt_bb_icon_size_&quot;:{&quot;current_class&quot;:&quot;bt_bb_icon_size_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;,&quot;xl&quot;:&quot;normal&quot;},&quot;bt_bb_text_size_&quot;:{&quot;current_class&quot;:&quot;bt_bb_text_size_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;,&quot;xl&quot;:&quot;normal&quot;}}">
                                                <div class="bt_bb_separator_v2_inner">
                                                   <span class="bt_bb_separator_v2_inner_before"></span>
                                                   <span class="bt_bb_separator_v2_inner_content">
                                                      <span data-ico-="&#x;" class="bt_bb_icon_holder"></span>
                                                   </span>
                                                   <span class="bt_bb_separator_v2_inner_after"></span>
                                                </div>
                                             </div>
                                             <header data-bb-version="4.5.9" class="bt_bb_headline bt_bb_subheadline_text_transform_default bt_bb_dash_none bt_bb_size_extrasmall bt_bb_align_inherit" style=";color:rgb(97,185,187);border-color:rgb(97,185,187);" data-bt-override-class="{&quot;bt_bb_size_&quot;:{&quot;current_class&quot;:&quot;bt_bb_size_extrasmall&quot;,&quot;xxl&quot;:&quot;extrasmall&quot;},&quot;bt_bb_align_&quot;:{&quot;current_class&quot;:&quot;bt_bb_align_inherit&quot;,&quot;xxl&quot;:&quot;inherit&quot;}}">
                                                <h4 class="bt_bb_headline_tag">
                                                   <span class="bt_bb_headline_content">
                                                      <span>Day Care</span>
                                                   </span>
                                                </h4>
                                             </header>
                                             <div class="bt_bb_separator_v2 bt_bb_border_style_none bt_bb_top_spacing_none bt_bb_bottom_spacing_extra_small bt_bb_border_thickness_1 bt_bb_icon_size_normal bt_bb_text_size_normal bt_bb_separator_v2_without_content" data-bt-override-class="{&quot;bt_bb_top_spacing_&quot;:{&quot;current_class&quot;:&quot;bt_bb_top_spacing_none&quot;,&quot;xxl&quot;:&quot;none&quot;,&quot;xl&quot;:&quot;none&quot;},&quot;bt_bb_bottom_spacing_&quot;:{&quot;current_class&quot;:&quot;bt_bb_bottom_spacing_extra_small&quot;,&quot;xxl&quot;:&quot;extra_small&quot;,&quot;xl&quot;:&quot;extra_small&quot;},&quot;bt_bb_border_thickness_&quot;:{&quot;current_class&quot;:&quot;bt_bb_border_thickness_1&quot;,&quot;xxl&quot;:&quot;1&quot;,&quot;xl&quot;:&quot;1&quot;},&quot;bt_bb_icon_size_&quot;:{&quot;current_class&quot;:&quot;bt_bb_icon_size_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;,&quot;xl&quot;:&quot;normal&quot;},&quot;bt_bb_text_size_&quot;:{&quot;current_class&quot;:&quot;bt_bb_text_size_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;,&quot;xl&quot;:&quot;normal&quot;}}">
                                                <div class="bt_bb_separator_v2_inner">
                                                   <span class="bt_bb_separator_v2_inner_before"></span>
                                                   <span class="bt_bb_separator_v2_inner_content">
                                                      <span data-ico-="&#x;" class="bt_bb_icon_holder"></span>
                                                   </span>
                                                   <span class="bt_bb_separator_v2_inner_after"></span>
                                                </div>
                                             </div>
                                             <div class="bt_bb_text">
                                                <p>
                                                   <strong>Age:</strong> 18 months above
                                                </p>
                                             </div>
                                          </div>
                                          <div class="bt_bb_card_image">
                                             <img decoding="async" src="<?= base_url(); ?>uploads/2023/07/Daycare.avif?tr=w-300" alt="Day Care">
                                          </div>
                                       </div>
                                       <div class="bt_bb_separator_v2 bt_bb_border_style_none bt_bb_top_spacing_none bt_bb_bottom_spacing_normal bt_bb_border_thickness_1 bt_bb_icon_size_normal bt_bb_text_size_normal bt_bb_separator_v2_without_content bt_bb_hidden_xs bt_bb_hidden_ms bt_bb_hidden_sm" data-bt-override-class="{&quot;bt_bb_top_spacing_&quot;:{&quot;current_class&quot;:&quot;bt_bb_top_spacing_none&quot;,&quot;xxl&quot;:&quot;none&quot;,&quot;xl&quot;:&quot;none&quot;},&quot;bt_bb_bottom_spacing_&quot;:{&quot;current_class&quot;:&quot;bt_bb_bottom_spacing_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;,&quot;xl&quot;:&quot;normal&quot;},&quot;bt_bb_border_thickness_&quot;:{&quot;current_class&quot;:&quot;bt_bb_border_thickness_1&quot;,&quot;xxl&quot;:&quot;1&quot;,&quot;xl&quot;:&quot;1&quot;},&quot;bt_bb_icon_size_&quot;:{&quot;current_class&quot;:&quot;bt_bb_icon_size_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;,&quot;xl&quot;:&quot;normal&quot;},&quot;bt_bb_text_size_&quot;:{&quot;current_class&quot;:&quot;bt_bb_text_size_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;,&quot;xl&quot;:&quot;normal&quot;}}">
                                          <div class="bt_bb_separator_v2_inner">
                                             <span class="bt_bb_separator_v2_inner_before"></span>
                                             <span class="bt_bb_separator_v2_inner_content">
                                                <span data-ico-="&#x;" class="bt_bb_icon_holder"></span>
                                             </span>
                                             <span class="bt_bb_separator_v2_inner_after"></span>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div data-bb-version="4.5.9" class="bt_bb_row_wrapper">
                           <div class="bt_bb_row" data-bt-override-class="{}">
                              <div data-bb-version="4.5.9" class="bt_bb_column col-xxl-12 col-xl-12 col-xs-12 col-sm-12 col-md-12 col-lg-12 bt_bb_vertical_align_top bt_bb_align_left bt_bb_padding_normal bt_bb_shape_inherit" data-width="12" data-bt-override-class="{}">
                                 <div class="bt_bb_column_content">
                                    <div class="bt_bb_column_content_inner"></div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- cell_inner -->
                  </div>
                  <!-- cell -->
               </div>
               <!-- port -->
               <div class="bt_bb_section_bottom_section_coverage_image">
                  <img decoding="async" src="<?= base_url(); ?>uploads/2022/04/bottom_white_wave_01.png" alt="bt_bb_section_bottom_section_coverage_image" />
               </div>
            </section>

            <section data-bb-version="4.5.9" id="bt_bb_section656da16ab3ac5" class="k-diff bt_bb_section bt_bb_layout_boxed_1200 bt_bb_vertical_align_top bt_bb_top_section_coverage_image bt_bb_section_with_top_coverage_image bt_bb_bottom_section_coverage_image bt_bb_section_with_bottom_coverage_image bt_bb_top_spacing_150 bt_bb_bottom_spacing_none bt_bb_negative_margin_none" style=";background-color:rgb(248,245,238);" data-bt-override-class="{&quot;bt_bb_top_spacing_&quot;:{&quot;current_class&quot;:&quot;bt_bb_top_spacing_150&quot;,&quot;xxl&quot;:&quot;150&quot;},&quot;bt_bb_bottom_spacing_&quot;:{&quot;current_class&quot;:&quot;bt_bb_bottom_spacing_none&quot;,&quot;xxl&quot;:&quot;none&quot;}}">
               <div class="bt_bb_port">
                  <div class="bt_bb_cell">
                     <div class="bt_bb_cell_inner">
                        <div data-bb-version="4.5.9" class="bt_bb_row_wrapper">
                           <div class="bt_bb_row" data-bt-override-class="{}">
                              <div data-bb-version="4.5.9" class="bt_bb_column col-xxl-12 col-xl-12 col-xs-12 col-sm-12 col-md-12 col-lg-12 bt_bb_vertical_align_top bt_bb_align_left bt_bb_padding_normal bt_bb_shape_inherit" data-width="12" data-bt-override-class="{}">
                                 <div class="bt_bb_column_content">
                                    <div class="bt_bb_column_content_inner">
                                       <div class="bt_bb_separator_v2 bt_bb_border_style_none bt_bb_top_spacing_none bt_bb_bottom_spacing_40 bt_bb_border_thickness_1 bt_bb_icon_size_normal bt_bb_text_size_normal bt_bb_separator_v2_without_content" data-bt-override-class="{&quot;bt_bb_top_spacing_&quot;:{&quot;current_class&quot;:&quot;bt_bb_top_spacing_none&quot;,&quot;xxl&quot;:&quot;none&quot;,&quot;xl&quot;:&quot;none&quot;},&quot;bt_bb_bottom_spacing_&quot;:{&quot;current_class&quot;:&quot;bt_bb_bottom_spacing_40&quot;,&quot;xxl&quot;:&quot;40&quot;,&quot;xl&quot;:&quot;40&quot;},&quot;bt_bb_border_thickness_&quot;:{&quot;current_class&quot;:&quot;bt_bb_border_thickness_1&quot;,&quot;xxl&quot;:&quot;1&quot;,&quot;xl&quot;:&quot;1&quot;},&quot;bt_bb_icon_size_&quot;:{&quot;current_class&quot;:&quot;bt_bb_icon_size_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;,&quot;xl&quot;:&quot;normal&quot;},&quot;bt_bb_text_size_&quot;:{&quot;current_class&quot;:&quot;bt_bb_text_size_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;,&quot;xl&quot;:&quot;normal&quot;}}">
                                          <div class="bt_bb_separator_v2_inner">
                                             <span class="bt_bb_separator_v2_inner_before"></span>
                                             <span class="bt_bb_separator_v2_inner_content">
                                                <span data-ico-="&#x;" class="bt_bb_icon_holder"></span>
                                             </span>
                                             <span class="bt_bb_separator_v2_inner_after"></span>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="bt_bb_row_wrapper">
                           <div class="bt_bb_row" data-bt-override-class="{}">
                              <div class="bt_bb_column col-xxl-6 col-xl-6 col-xs-12 col-sm-12 col-md-12 col-lg-6 bt_bb_vertical_align_top bt_bb_align_center bt_bb_padding_normal bt_bb_animation_fade_in animate bt_bb_shape_inherit" style="position: relative;" data-width="6" data-bt-override-class="{&quot;bt_bb_align_&quot;:{&quot;current_class&quot;:&quot;bt_bb_align_center&quot;,&quot;xxl&quot;:&quot;center&quot;,&quot;xl&quot;:&quot;center&quot;},&quot;bt_bb_padding_&quot;:{&quot;current_class&quot;:&quot;bt_bb_padding_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;,&quot;xl&quot;:&quot;normal&quot;}}">

                                 <div class="bt_bb_column_content">
                                    <div class="bt_bb_column_content_inner">
                                       <div class="bt_bb_floating_image bt_bb_floating_image_horizontal_position_right bt_bb_floating_image_vertical_position_top bt_bb_floating_image_animation_delay_default bt_bb_floating_image_animation_duration_default bt_bb_floating_image_animation_style_ease_out bt_bb_hidden_xs bt_bb_hidden_ms bt_bb_hidden_sm bt_bb_animation_fade_in bt_bb_animation_move_down animate" style=" top: -2em;" data-speed="0.4" data-direction="">
                                          <div class="bt_bb_floating_image_image" data-speed="0.4" data-direction="">
                                             <div class="bt_bb_image" data-bt-override-class="{}">
                                                <span>
                                                   <img loading="lazy" decoding="async" width="184" height="184" src="<?= base_url(); ?>uploads/2023/07/Bubble_1.png" class="attachment-full size-full" alt="Best Preschool in Hyderabad" />
                                                </span>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="bt_bb_image bt_bb_shape_square bt_bb_target_self bt_bb_align_inherit bt_bb_hover_style_simple bt_bb_content_display_always bt_bb_content_align_middle" data-bt-override-class="{&quot;bt_bb_align_&quot;:{&quot;current_class&quot;:&quot;bt_bb_align_inherit&quot;,&quot;xxl&quot;:&quot;inherit&quot;,&quot;xl&quot;:&quot;inherit&quot;}}">
                                          <span>
                                             <img loading="lazy" decoding="async" width="590" height="550" src="<?= base_url(); ?>uploads/2023/07/The_Kidzonia_Difference_1.avif?tr=w-800" class="attachment-full size-full mimg3" alt="Kidzonia International School">
                                          </span>
                                       </div>
                                       <div class="bt_bb_separator_v2 bt_bb_border_style_none bt_bb_top_spacing_none bt_bb_bottom_spacing_medium bt_bb_border_thickness_1 bt_bb_icon_size_normal bt_bb_text_size_normal bt_bb_separator_v2_without_content pb1" data-bt-override-class="{&quot;bt_bb_top_spacing_&quot;:{&quot;current_class&quot;:&quot;bt_bb_top_spacing_none&quot;,&quot;xxl&quot;:&quot;none&quot;,&quot;xl&quot;:&quot;none&quot;},&quot;bt_bb_bottom_spacing_&quot;:{&quot;current_class&quot;:&quot;bt_bb_bottom_spacing_medium&quot;,&quot;xxl&quot;:&quot;medium&quot;,&quot;xl&quot;:&quot;medium&quot;},&quot;bt_bb_border_thickness_&quot;:{&quot;current_class&quot;:&quot;bt_bb_border_thickness_1&quot;,&quot;xxl&quot;:&quot;1&quot;,&quot;xl&quot;:&quot;1&quot;},&quot;bt_bb_icon_size_&quot;:{&quot;current_class&quot;:&quot;bt_bb_icon_size_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;,&quot;xl&quot;:&quot;normal&quot;},&quot;bt_bb_text_size_&quot;:{&quot;current_class&quot;:&quot;bt_bb_text_size_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;,&quot;xl&quot;:&quot;normal&quot;}}">
                                          <div class="bt_bb_separator_v2_inner">
                                             <span class="bt_bb_separator_v2_inner_before"></span>
                                             <span class="bt_bb_separator_v2_inner_content">
                                                <span data-ico-="&#x;" class="bt_bb_icon_holder"></span>
                                             </span>
                                             <span class="bt_bb_separator_v2_inner_after"></span>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="bt_bb_column col-xxl-6 col-xl-6 col-xs-12 col-sm-12 col-md-12 col-lg-6 bt_bb_vertical_align_middle bt_bb_align_left bt_bb_padding_double bt_bb_animation_fade_in animate bt_bb_shape_inherit" data-width="6" data-bt-override-class="{&quot;bt_bb_align_&quot;:{&quot;current_class&quot;:&quot;bt_bb_align_left&quot;,&quot;xxl&quot;:&quot;left&quot;,&quot;xl&quot;:&quot;left&quot;},&quot;bt_bb_padding_&quot;:{&quot;current_class&quot;:&quot;bt_bb_padding_double&quot;,&quot;xxl&quot;:&quot;double&quot;,&quot;xl&quot;:&quot;double&quot;}}">
                                 <div class="bt_bb_column_content">
                                    <div class="bt_bb_column_content_inner">
                                       <header data-bb-version="4.5.9" class="bt_bb_headline bt_bb_subheadline_text_transform_default bt_bb_color_scheme_9 bt_bb_dash_none bt_bb_size_extralarge bt_bb_align_inherit" style="; --primary-color:#282828; --secondary-color:var(--alternate-color);" data-bt-override-class="{&quot;bt_bb_size_&quot;:{&quot;current_class&quot;:&quot;bt_bb_size_extralarge&quot;,&quot;xxl&quot;:&quot;extralarge&quot;},&quot;bt_bb_align_&quot;:{&quot;current_class&quot;:&quot;bt_bb_align_inherit&quot;,&quot;xxl&quot;:&quot;inherit&quot;}}">
                                          <h2 class="bt_bb_headline_tag">
                                             <span class="bt_bb_headline_content">
                                                <span>The Kidzonia Difference</span>
                                             </span>
                                          </h2>
                                       </header>
                                       <div class="bt_bb_separator_v2 bt_bb_border_style_none bt_bb_top_spacing_none bt_bb_bottom_spacing_40 bt_bb_border_thickness_1 bt_bb_icon_size_normal bt_bb_text_size_normal bt_bb_separator_v2_without_content" data-bt-override-class="{&quot;bt_bb_top_spacing_&quot;:{&quot;current_class&quot;:&quot;bt_bb_top_spacing_none&quot;,&quot;xxl&quot;:&quot;none&quot;,&quot;xl&quot;:&quot;none&quot;},&quot;bt_bb_bottom_spacing_&quot;:{&quot;current_class&quot;:&quot;bt_bb_bottom_spacing_40&quot;,&quot;xxl&quot;:&quot;40&quot;,&quot;xl&quot;:&quot;40&quot;},&quot;bt_bb_border_thickness_&quot;:{&quot;current_class&quot;:&quot;bt_bb_border_thickness_1&quot;,&quot;xxl&quot;:&quot;1&quot;,&quot;xl&quot;:&quot;1&quot;},&quot;bt_bb_icon_size_&quot;:{&quot;current_class&quot;:&quot;bt_bb_icon_size_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;,&quot;xl&quot;:&quot;normal&quot;},&quot;bt_bb_text_size_&quot;:{&quot;current_class&quot;:&quot;bt_bb_text_size_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;,&quot;xl&quot;:&quot;normal&quot;}}">
                                          <div class="bt_bb_separator_v2_inner">
                                             <span class="bt_bb_separator_v2_inner_before"></span>
                                             <span class="bt_bb_separator_v2_inner_content">
                                                <span data-ico-="&#x;" class="bt_bb_icon_holder"></span>
                                             </span>
                                             <span class="bt_bb_separator_v2_inner_after"></span>
                                          </div>
                                       </div>
                                       <div data-bb-version="4.5.9" class="bt_bb_service bt_bb_style_outline bt_bb_size_large bt_bb_shape_circle bt_bb_align_inherit btNoTitle bt_bb_colored_icon_color_scheme_9" style="; --icon-colored-icon-primary-color:#282828; --icon-colored-icon-secondary-color:var(--alternate-color);" data-bt-override-class="{&quot;bt_bb_size_&quot;:{&quot;current_class&quot;:&quot;bt_bb_size_large&quot;,&quot;xxl&quot;:&quot;large&quot;},&quot;bt_bb_align_&quot;:{&quot;current_class&quot;:&quot;bt_bb_align_inherit&quot;,&quot;xxl&quot;:&quot;inherit&quot;}}">
                                          <div class="bt_bb_service_colored_icon">
                                             <span>
                                                <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100">
                                                   <defs>
                                                      <style>
                                                         .cls-1 {
                                                            fill: #333538;
                                                         }

                                                         .cls-2 {
                                                            fill: #ffb129;
                                                         }
                                                      </style>
                                                   </defs>
                                                   <title>_</title>
                                                   <g id="_Group_" data-name="&lt;Group&gt;">
                                                      <g id="_Group_2" data-name="&lt;Group&gt;">
                                                         <path id="_Compound_Path_" data-name="&lt;Compound Path&gt;" class="cls-1" d="M50,21.87A23,23,0,0,0,32.36,59.58a21.15,21.15,0,0,1,4.94,13.58h0v5.15a7.56,7.56,0,0,0,7.55,7.55H47.6V88.6a2.4,2.4,0,0,0,4.8,0V85.85h2.74A7.56,7.56,0,0,0,62.7,78.3v-5s0-.08,0-.13a21.15,21.15,0,0,1,4.94-13.57A23,23,0,0,0,50,21.87ZM57.89,78.3A2.75,2.75,0,0,1,55.15,81H44.85a2.75,2.75,0,0,1-2.74-2.74V75.56H57.89V78.3ZM64,56.5a26,26,0,0,0-6,14.26H52.4v-13a2.4,2.4,0,0,0-4.8,0v13H42A26,26,0,0,0,36,56.5,18.18,18.18,0,1,1,64,56.5Z" />
                                                         <path id="_Path_" data-name="&lt;Path&gt;" class="cls-1" d="M83.46,42.46H80.88a2.4,2.4,0,0,0,0,4.8h2.59a2.4,2.4,0,0,0,0-4.8Z" />
                                                         <path id="_Path_2" data-name="&lt;Path&gt;" class="cls-1" d="M19.13,42.46H16.55a2.4,2.4,0,0,0,0,4.8h2.59a2.4,2.4,0,0,0,0-4.8Z" />
                                                         <path id="_Path_3" data-name="&lt;Path&gt;" class="cls-1" d="M71.84,19.39,70,21.21a2.4,2.4,0,1,0,3.4,3.4l1.82-1.82a2.4,2.4,0,0,0-3.4-3.4Z" />
                                                         <path id="_Path_4" data-name="&lt;Path&gt;" class="cls-1" d="M26.58,65.1l-1.82,1.82a2.4,2.4,0,0,0,3.4,3.4L30,68.5a2.4,2.4,0,1,0-3.4-3.4Z" />
                                                         <path id="_Path_5" data-name="&lt;Path&gt;" class="cls-1" d="M26.58,24.61a2.4,2.4,0,1,0,3.4-3.4l-1.82-1.82a2.4,2.4,0,1,0-3.4,3.4Z" />
                                                         <path id="_Path_6" data-name="&lt;Path&gt;" class="cls-1" d="M73.42,65.1A2.4,2.4,0,1,0,70,68.5l1.82,1.82a2.4,2.4,0,1,0,3.4-3.4Z" />
                                                         <path id="_Path_7" data-name="&lt;Path&gt;" class="cls-1" d="M50,16.38A2.4,2.4,0,0,0,52.4,14V11.4a2.4,2.4,0,0,0-4.8,0V14A2.4,2.4,0,0,0,50,16.38Z" />
                                                      </g>
                                                      <path id="_Path_8" data-name="&lt;Path&gt;" class="cls-2" d="M57.89,78.3A2.75,2.75,0,0,1,55.15,81H44.85a2.75,2.75,0,0,1-2.74-2.74V75.56H57.89V78.3Z" />
                                                   </g>
                                                </svg>
                                             </span>
                                          </div>
                                          <div class="bt_bb_service_content">
                                             <div class="bt_bb_service_content_supertitle">Multiple Intelligences</div>
                                             <div class="bt_bb_service_content_text">At Kidzonia, our "DISCOVER" preschool programme celebrates the uniqueness of each child. Drawing inspiration from Dr. Howard Gardner's Theory of Multiple Intelligences, we recognise and nurture individual learning styles, making us a top Montessori school in Hyderabad.</div>
                                          </div>
                                       </div>
                                       <div class="bt_bb_separator_v2 bt_bb_border_style_none bt_bb_top_spacing_none bt_bb_bottom_spacing_40 bt_bb_border_thickness_1 bt_bb_icon_size_normal bt_bb_text_size_normal bt_bb_separator_v2_without_content" data-bt-override-class="{&quot;bt_bb_top_spacing_&quot;:{&quot;current_class&quot;:&quot;bt_bb_top_spacing_none&quot;,&quot;xxl&quot;:&quot;none&quot;,&quot;xl&quot;:&quot;none&quot;},&quot;bt_bb_bottom_spacing_&quot;:{&quot;current_class&quot;:&quot;bt_bb_bottom_spacing_40&quot;,&quot;xxl&quot;:&quot;40&quot;,&quot;xl&quot;:&quot;40&quot;},&quot;bt_bb_border_thickness_&quot;:{&quot;current_class&quot;:&quot;bt_bb_border_thickness_1&quot;,&quot;xxl&quot;:&quot;1&quot;,&quot;xl&quot;:&quot;1&quot;},&quot;bt_bb_icon_size_&quot;:{&quot;current_class&quot;:&quot;bt_bb_icon_size_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;,&quot;xl&quot;:&quot;normal&quot;},&quot;bt_bb_text_size_&quot;:{&quot;current_class&quot;:&quot;bt_bb_text_size_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;,&quot;xl&quot;:&quot;normal&quot;}}">
                                          <div class="bt_bb_separator_v2_inner">
                                             <span class="bt_bb_separator_v2_inner_before"></span>
                                             <span class="bt_bb_separator_v2_inner_content">
                                                <span data-ico-="&#x;" class="bt_bb_icon_holder"></span>
                                             </span>
                                             <span class="bt_bb_separator_v2_inner_after"></span>
                                          </div>
                                       </div>
                                       <div data-bb-version="4.5.9" class="bt_bb_service bt_bb_style_outline bt_bb_size_large bt_bb_shape_circle bt_bb_align_inherit btNoTitle bt_bb_colored_icon_color_scheme_9" style="; --icon-colored-icon-primary-color:#282828; --icon-colored-icon-secondary-color:var(--alternate-color);" data-bt-override-class="{&quot;bt_bb_size_&quot;:{&quot;current_class&quot;:&quot;bt_bb_size_large&quot;,&quot;xxl&quot;:&quot;large&quot;},&quot;bt_bb_align_&quot;:{&quot;current_class&quot;:&quot;bt_bb_align_inherit&quot;,&quot;xxl&quot;:&quot;inherit&quot;}}">
                                          <div class="bt_bb_service_colored_icon">
                                             <span>
                                                <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100">
                                                   <defs>
                                                      <style>
                                                         .cls-1 {
                                                            fill: #ffb129;
                                                         }

                                                         .cls-2 {
                                                            fill: #333538;
                                                         }
                                                      </style>
                                                   </defs>
                                                   <title>_</title>
                                                   <path id="_Path_" data-name="&lt;Path&gt;" class="cls-1" d="M60.93,32.88c-.88,1-3.76,3.58-10.93,3.58s-10.09-2.57-10.93-3.57V27.78L50,31.12l10.93-3.34Z" />
                                                   <polygon id="_Path_2" data-name="&lt;Path&gt;" class="cls-1" points="50 25.4 32.52 20.06 50 14.72 67.48 20.06 50 25.4" />
                                                   <g id="toga_world" data-name="toga world">
                                                      <path id="_Compound_Path_" data-name="&lt;Compound Path&gt;" class="cls-2" d="M50,9,22.67,17.35v5.41L33.6,26.11v8.26l.29.58c.36.72,3.84,7,16.11,7s15.75-6.26,16.11-7l.29-.58V26.11l5.47-1.67v9.29h5.47V17.35ZM60.93,32.88c-.88,1-3.76,3.58-10.93,3.58s-10.09-2.57-10.93-3.57V27.78L50,31.12l10.93-3.34ZM50,25.4,32.52,20.06,50,14.72l17.48,5.34ZM70.2,38.73a17.15,17.15,0,0,1-3.84,3.94A24.47,24.47,0,0,1,74.44,58.2H63.61a61,61,0,0,0-1.87-12.92,26.5,26.5,0,0,1-5.19,1.51,54.56,54.56,0,0,1,1.6,11.41H41.85a54.56,54.56,0,0,1,1.6-11.41,26.5,26.5,0,0,1-5.19-1.51A61,61,0,0,0,36.39,58.2H25.56a24.47,24.47,0,0,1,8.08-15.53,17.15,17.15,0,0,1-3.84-3.94,30.07,30.07,0,1,0,40.4,0ZM25.56,63.67H36.39c.3,7.46,1.85,14.88,4.53,20.11A24.64,24.64,0,0,1,25.56,63.67ZM50,85.53c-3.14,0-7.6-8.43-8.15-21.87H58.15C57.6,77.1,53.14,85.53,50,85.53Zm9.08-1.76c2.68-5.23,4.23-12.65,4.53-20.11H74.44A24.64,24.64,0,0,1,59.08,83.77Z" />
                                                   </g>
                                                </svg>
                                             </span>
                                          </div>
                                          <div class="bt_bb_service_content">
                                             <div class="bt_bb_service_content_supertitle">Thematics &amp; Experiential Learning</div>
                                             <div class="bt_bb_service_content_text">Learning at Kidzonia, transcends traditional boundaries. Our thematic approach integrates subjects in a manner that is both fun and contextually relevant, ensuring a comprehensive understanding and application of concepts.</div>
                                          </div>
                                       </div>
                                       <div class="bt_bb_separator_v2 bt_bb_border_style_none bt_bb_top_spacing_none bt_bb_bottom_spacing_40 bt_bb_border_thickness_1 bt_bb_icon_size_normal bt_bb_text_size_normal bt_bb_separator_v2_without_content" data-bt-override-class="{&quot;bt_bb_top_spacing_&quot;:{&quot;current_class&quot;:&quot;bt_bb_top_spacing_none&quot;,&quot;xxl&quot;:&quot;none&quot;,&quot;xl&quot;:&quot;none&quot;},&quot;bt_bb_bottom_spacing_&quot;:{&quot;current_class&quot;:&quot;bt_bb_bottom_spacing_40&quot;,&quot;xxl&quot;:&quot;40&quot;,&quot;xl&quot;:&quot;40&quot;},&quot;bt_bb_border_thickness_&quot;:{&quot;current_class&quot;:&quot;bt_bb_border_thickness_1&quot;,&quot;xxl&quot;:&quot;1&quot;,&quot;xl&quot;:&quot;1&quot;},&quot;bt_bb_icon_size_&quot;:{&quot;current_class&quot;:&quot;bt_bb_icon_size_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;,&quot;xl&quot;:&quot;normal&quot;},&quot;bt_bb_text_size_&quot;:{&quot;current_class&quot;:&quot;bt_bb_text_size_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;,&quot;xl&quot;:&quot;normal&quot;}}">
                                          <div class="bt_bb_separator_v2_inner">
                                             <span class="bt_bb_separator_v2_inner_before"></span>
                                             <span class="bt_bb_separator_v2_inner_content">
                                                <span data-ico-="&#x;" class="bt_bb_icon_holder"></span>
                                             </span>
                                             <span class="bt_bb_separator_v2_inner_after"></span>
                                          </div>
                                       </div>
                                       <div data-bb-version="4.5.9" class="bt_bb_service bt_bb_style_outline bt_bb_size_large bt_bb_shape_circle bt_bb_align_inherit btNoTitle bt_bb_colored_icon_color_scheme_9" style="; --icon-colored-icon-primary-color:#282828; --icon-colored-icon-secondary-color:var(--alternate-color);" data-bt-override-class="{&quot;bt_bb_size_&quot;:{&quot;current_class&quot;:&quot;bt_bb_size_large&quot;,&quot;xxl&quot;:&quot;large&quot;},&quot;bt_bb_align_&quot;:{&quot;current_class&quot;:&quot;bt_bb_align_inherit&quot;,&quot;xxl&quot;:&quot;inherit&quot;}}">
                                          <div class="bt_bb_service_colored_icon">
                                             <span>
                                                <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100">
                                                   <defs>
                                                      <style>
                                                         .cls-1 {
                                                            fill: #ffb129;
                                                         }

                                                         .cls-2 {
                                                            fill: #333538;
                                                         }
                                                      </style>
                                                   </defs>
                                                   <title>_</title>
                                                   <g id="_Group_" data-name="&lt;Group&gt;">
                                                      <path id="_Path_" data-name="&lt;Path&gt;" class="cls-1" d="M77.44,71.7h0a3.82,3.82,0,0,1-3.81,3.81H26.37a3.82,3.82,0,0,1-3.81-3.81V71a3.82,3.82,0,0,1,3.81-3.81H73.63A3.82,3.82,0,0,1,77.44,71Z" />
                                                      <g id="_Group_2" data-name="&lt;Group&gt;">
                                                         <g id="_Group_3" data-name="&lt;Group&gt;">
                                                            <path id="_Compound_Path_" data-name="&lt;Compound Path&gt;" class="cls-2" d="M74.6,62.28V43a23.49,23.49,0,0,0-17-22.56V16.56a7.56,7.56,0,0,0-15.13,0V20.4A23.49,23.49,0,0,0,25.4,43V62.28A8.8,8.8,0,0,0,17.59,71v.69a8.8,8.8,0,0,0,8.79,8.79H40.32v.83a9.68,9.68,0,1,0,19.36,0v-.83H73.63a8.8,8.8,0,0,0,8.79-8.79V71A8.8,8.8,0,0,0,74.6,62.28ZM47.41,16.56a2.59,2.59,0,0,1,5.18,0v3c-.47,0-1,0-1.43,0H48.84c-.48,0-1,0-1.43,0v-3ZM30.37,43A18.49,18.49,0,0,1,48.84,24.48h2.31A18.49,18.49,0,0,1,69.63,43V62.22H30.37ZM50,86a4.71,4.71,0,0,1-4.7-4.7v-.83h9.4v.83h0A4.71,4.71,0,0,1,50,86ZM77.44,71.7h0a3.82,3.82,0,0,1-3.81,3.81H26.37a3.82,3.82,0,0,1-3.81-3.81V71a3.82,3.82,0,0,1,3.81-3.81H73.63A3.82,3.82,0,0,1,77.44,71Z" />
                                                         </g>
                                                      </g>
                                                   </g>
                                                </svg>
                                             </span>
                                          </div>
                                          <div class="bt_bb_service_content">
                                             <div class="bt_bb_service_content_supertitle">Technology Aided Learning</div>
                                             <div class="bt_bb_service_content_text">As one of the best preschools in Hyderabad, we blend cutting-edge technology with experiential learning and fun. This innovative approach keeps our children engaged and abreast of evolving pedagogical trends and learning methodologies.</div>
                                          </div>
                                       </div>
                                       <div class="bt_bb_separator_v2 bt_bb_border_style_none bt_bb_top_spacing_none bt_bb_bottom_spacing_40 bt_bb_border_thickness_1 bt_bb_icon_size_normal bt_bb_text_size_normal bt_bb_separator_v2_without_content" data-bt-override-class="{&quot;bt_bb_top_spacing_&quot;:{&quot;current_class&quot;:&quot;bt_bb_top_spacing_none&quot;,&quot;xxl&quot;:&quot;none&quot;,&quot;xl&quot;:&quot;none&quot;},&quot;bt_bb_bottom_spacing_&quot;:{&quot;current_class&quot;:&quot;bt_bb_bottom_spacing_40&quot;,&quot;xxl&quot;:&quot;40&quot;,&quot;xl&quot;:&quot;40&quot;},&quot;bt_bb_border_thickness_&quot;:{&quot;current_class&quot;:&quot;bt_bb_border_thickness_1&quot;,&quot;xxl&quot;:&quot;1&quot;,&quot;xl&quot;:&quot;1&quot;},&quot;bt_bb_icon_size_&quot;:{&quot;current_class&quot;:&quot;bt_bb_icon_size_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;,&quot;xl&quot;:&quot;normal&quot;},&quot;bt_bb_text_size_&quot;:{&quot;current_class&quot;:&quot;bt_bb_text_size_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;,&quot;xl&quot;:&quot;normal&quot;}}">
                                          <div class="bt_bb_separator_v2_inner">
                                             <span class="bt_bb_separator_v2_inner_before"></span>
                                             <span class="bt_bb_separator_v2_inner_content">
                                                <span data-ico-="&#x;" class="bt_bb_icon_holder"></span>
                                             </span>
                                             <span class="bt_bb_separator_v2_inner_after"></span>
                                          </div>
                                       </div>
                                       <div data-bb-version="4.5.9" class="bt_bb_button bt_bb_color_scheme_18 bt_bb_icon_position_left bt_bb_style_gradient_filled bt_bb_size_medium bt_bb_width_inline bt_bb_shape_inherit bt_bb_target_self bt_bb_text_transform_inherit bt_bb_align_inherit bt_bb_hidden_xs bt_bb_hidden_ms bt_bb_hidden_sm bt_bb_hidden_lg bt_bb_hidden_xl" style="; --primary-color:var(--third-color); --secondary-color:var(--accent-color);" data-bt-override-class="{&quot;bt_bb_size_&quot;:{&quot;current_class&quot;:&quot;bt_bb_size_medium&quot;,&quot;xxl&quot;:&quot;medium&quot;},&quot;bt_bb_align_&quot;:{&quot;current_class&quot;:&quot;bt_bb_align_inherit&quot;,&quot;xxl&quot;:&quot;inherit&quot;}}">
                                          <a href="<?php echo base_url(); ?>services" target="_self" class="bt_bb_link" title="Enroll now">
                                             <span class="bt_bb_button_text">Enroll now</span>
                                          </a>
                                       </div>
                                       <div class="bt_bb_separator_v2 bt_bb_border_style_none bt_bb_top_spacing_none bt_bb_bottom_spacing_medium bt_bb_border_thickness_1 bt_bb_icon_size_normal bt_bb_text_size_normal bt_bb_separator_v2_without_content" data-bt-override-class="{&quot;bt_bb_top_spacing_&quot;:{&quot;current_class&quot;:&quot;bt_bb_top_spacing_none&quot;,&quot;xxl&quot;:&quot;none&quot;,&quot;xl&quot;:&quot;none&quot;},&quot;bt_bb_bottom_spacing_&quot;:{&quot;current_class&quot;:&quot;bt_bb_bottom_spacing_medium&quot;,&quot;xxl&quot;:&quot;medium&quot;,&quot;xl&quot;:&quot;medium&quot;},&quot;bt_bb_border_thickness_&quot;:{&quot;current_class&quot;:&quot;bt_bb_border_thickness_1&quot;,&quot;xxl&quot;:&quot;1&quot;,&quot;xl&quot;:&quot;1&quot;},&quot;bt_bb_icon_size_&quot;:{&quot;current_class&quot;:&quot;bt_bb_icon_size_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;,&quot;xl&quot;:&quot;normal&quot;},&quot;bt_bb_text_size_&quot;:{&quot;current_class&quot;:&quot;bt_bb_text_size_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;,&quot;xl&quot;:&quot;normal&quot;}}">
                                          <div class="bt_bb_separator_v2_inner">
                                             <span class="bt_bb_separator_v2_inner_before"></span>
                                             <span class="bt_bb_separator_v2_inner_content">
                                                <span data-ico-="&#x;" class="bt_bb_icon_holder"></span>
                                             </span>
                                             <span class="bt_bb_separator_v2_inner_after"></span>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- cell_inner -->
                  </div>
                  <!-- cell -->
               </div>
               <!-- port -->
               <div class="bt_bb_section_top_section_coverage_image">
                  <img decoding="async" src="<?= base_url(); ?>uploads/2022/04/top_white_wave_03.png" alt="bt_bb_section_top_section_coverage_image" />
               </div>
               <div class="bt_bb_section_bottom_section_coverage_image">
                  <img decoding="async" src="<?= base_url(); ?>uploads/2022/04/bottom_white_wave_02.png" alt="bt_bb_section_bottom_section_coverage_image" />
               </div>
            </section>

            <section data-bb-version="4.5.9" id="bt_bb_section656da16ab4899" class="container bt_bb_section bt_bb_layout_boxed_1200 bt_bb_vertical_align_top bt_bb_top_spacing_medium bt_bb_bottom_spacing_normal bt_bb_negative_margin_none" data-bt-override-class="{&quot;bt_bb_top_spacing_&quot;:{&quot;current_class&quot;:&quot;bt_bb_top_spacing_medium&quot;,&quot;xxl&quot;:&quot;medium&quot;},&quot;bt_bb_bottom_spacing_&quot;:{&quot;current_class&quot;:&quot;bt_bb_bottom_spacing_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;}}">
               <div class="bt_bb_port">
                  <div class="bt_bb_cell">
                     <div class="bt_bb_cell_inner">
                        <div class="bt_bb_row_wrapper">
                           <div class="bt_bb_row" data-bt-override-class="{}">
                              <div class="bt_bb_column col-xxl-12 col-xl-12 col-xs-12 col-sm-12 col-md-12 col-lg-12 bt_bb_vertical_align_top bt_bb_align_center bt_bb_padding_normal bt_bb_animation_fade_in animate bt_bb_shape_inherit" data-width="12" data-bt-override-class="{&quot;bt_bb_align_&quot;:{&quot;current_class&quot;:&quot;bt_bb_align_center&quot;,&quot;xxl&quot;:&quot;center&quot;,&quot;xl&quot;:&quot;center&quot;},&quot;bt_bb_padding_&quot;:{&quot;current_class&quot;:&quot;bt_bb_padding_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;,&quot;xl&quot;:&quot;normal&quot;}}">
                                 <div class="bt_bb_column_content">
                                    <div class="bt_bb_column_content_inner">
                                       <header data-bb-version="4.5.9" class="bt_bb_headline bt_bb_subheadline_text_transform_default bt_bb_color_scheme_5 bt_bb_dash_none bt_bb_size_extralarge bt_bb_align_inherit" style="; --primary-color:#282828; --secondary-color:var(--accent-color);" data-bt-override-class="{&quot;bt_bb_size_&quot;:{&quot;current_class&quot;:&quot;bt_bb_size_extralarge&quot;,&quot;xxl&quot;:&quot;extralarge&quot;},&quot;bt_bb_align_&quot;:{&quot;current_class&quot;:&quot;bt_bb_align_inherit&quot;,&quot;xxl&quot;:&quot;inherit&quot;}}">
                                          <h3 class="bt_bb_headline_tag">
                                             <span class="bt_bb_headline_content">
                                                <span>Awards & Recognitions</span>
                                             </span>
                                          </h3>
                                       </header>
                                       <div class="bt_bb_separator_v2 bt_bb_border_style_none bt_bb_top_spacing_none bt_bb_bottom_spacing_50 bt_bb_border_thickness_1 bt_bb_icon_size_normal bt_bb_text_size_normal bt_bb_separator_v2_without_content" data-bt-override-class="{&quot;bt_bb_top_spacing_&quot;:{&quot;current_class&quot;:&quot;bt_bb_top_spacing_none&quot;,&quot;xxl&quot;:&quot;none&quot;,&quot;xl&quot;:&quot;none&quot;},&quot;bt_bb_bottom_spacing_&quot;:{&quot;current_class&quot;:&quot;bt_bb_bottom_spacing_50&quot;,&quot;xxl&quot;:&quot;50&quot;,&quot;xl&quot;:&quot;50&quot;},&quot;bt_bb_border_thickness_&quot;:{&quot;current_class&quot;:&quot;bt_bb_border_thickness_1&quot;,&quot;xxl&quot;:&quot;1&quot;,&quot;xl&quot;:&quot;1&quot;},&quot;bt_bb_icon_size_&quot;:{&quot;current_class&quot;:&quot;bt_bb_icon_size_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;,&quot;xl&quot;:&quot;normal&quot;},&quot;bt_bb_text_size_&quot;:{&quot;current_class&quot;:&quot;bt_bb_text_size_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;,&quot;xl&quot;:&quot;normal&quot;}}">
                                          <div class="bt_bb_separator_v2_inner">
                                             <span class="bt_bb_separator_v2_inner_before"></span>
                                             <span class="bt_bb_separator_v2_inner_content">
                                                <span data-ico-="&#x;" class="bt_bb_icon_holder"></span>
                                             </span>
                                             <span class="bt_bb_separator_v2_inner_after"></span>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="bt_bb_row_wrapper">
                           <div class="bt_bb_row bt_bb_column_gap_15 bt_bb_negative_margin_ owl-carousel owl-carousel-awards" data-bt-override-class="{}">
                              <?php foreach ($awards as $awrd) { ?>
                                 <div class="bt_bb_column w-100 col-xxl-3 col-xl-3 col-xs-12 col-sm-12 col-md-6 col-lg-6 bt_bb_vertical_align_top bt_bb_align_left bt_bb_padding_normal bt_bb_animation_fade_in animate bt_bb_shape_inherit" data-width="3" data-bt-override-class="{&quot;bt_bb_align_&quot;:{&quot;current_class&quot;:&quot;bt_bb_align_left&quot;,&quot;xxl&quot;:&quot;left&quot;,&quot;xl&quot;:&quot;left&quot;},&quot;bt_bb_padding_&quot;:{&quot;current_class&quot;:&quot;bt_bb_padding_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;,&quot;xl&quot;:&quot;normal&quot;}}" style="max-width: 100% !important;">
                                    <div class="bt_bb_column_content">
                                       <div class="bt_bb_column_content_inner">
                                          <div data-bb-version="4.5.9" class="bt_bb_image bt_bb_shape_soft-rounded bt_bb_target_lightbox bt_bb_use_lightbox bt_bb_align_inherit bt_bb_hover_style_simple bt_bb_content_display_always bt_bb_content_align_middle bt_bb_right_negative_margin_none bt_bb_left_negative_margin_none" data-bt-override-class="{&quot;bt_bb_align_&quot;:{&quot;current_class&quot;:&quot;bt_bb_align_inherit&quot;,&quot;xxl&quot;:&quot;inherit&quot;}}">
                                             <a href="#lightbox" target="_blank" title="World Education Summit">
                                                <img loading="lazy" decoding="async" src="<?= base_url() . $awrd->image; ?>?tr=w-300" class="attachment-full size-full awards-recognition-img" alt="<?= $awrd->name; ?>" />
                                             </a>
                                          </div>
                                          <div data-bb-version="4.5.9" class="bt_bb_separator_v2 bt_bb_border_style_none bt_bb_top_spacing_normal bt_bb_bottom_spacing_normal bt_bb_border_thickness_1 bt_bb_icon_size_normal bt_bb_text_size_normal bt_bb_separator_v2_without_content bt_bb_hidden_lg bt_bb_hidden_xl" data-bt-override-class="{&quot;bt_bb_top_spacing_&quot;:{&quot;current_class&quot;:&quot;bt_bb_top_spacing_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;},&quot;bt_bb_bottom_spacing_&quot;:{&quot;current_class&quot;:&quot;bt_bb_bottom_spacing_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;},&quot;bt_bb_border_thickness_&quot;:{&quot;current_class&quot;:&quot;bt_bb_border_thickness_1&quot;,&quot;xxl&quot;:&quot;1&quot;},&quot;bt_bb_icon_size_&quot;:{&quot;current_class&quot;:&quot;bt_bb_icon_size_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;},&quot;bt_bb_text_size_&quot;:{&quot;current_class&quot;:&quot;bt_bb_text_size_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;}}">
                                             <div class="bt_bb_separator_v2_inner">
                                                <span class="bt_bb_separator_v2_inner_before"></span>
                                                <span class="bt_bb_separator_v2_inner_content">
                                                   <span data-ico-="&#x;" class="bt_bb_icon_holder"></span>
                                                </span>
                                                <span class="bt_bb_separator_v2_inner_after"></span>
                                             </div>
                                          </div>
                                          <div data-bb-version="4.5.9" class="bt_bb_text">
                                             <p style="text-align: center;">
                                                <strong><?= $awrd->name; ?></strong>
                                                <br /><?= $awrd->description; ?>
                                             </p>
                                          </div>
                                          <div data-bb-version="4.5.9" class="bt_bb_separator_v2 bt_bb_top_spacing_none bt_bb_bottom_spacing_none bt_bb_icon_size_normal bt_bb_text_size_normal bt_bb_separator_v2_without_content" data-bt-override-class="null">
                                             <div class="bt_bb_separator_v2_inner">
                                                <span class="bt_bb_separator_v2_inner_before"></span>
                                                <span class="bt_bb_separator_v2_inner_content">
                                                   <span data-ico-="&#x;" class="bt_bb_icon_holder"></span>
                                                </span>
                                                <span class="bt_bb_separator_v2_inner_after"></span>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              <?php } ?>
                           </div>
                        </div>
                     </div>
                     <!-- cell_inner -->
                  </div>
                  <!-- cell -->
               </div>
               <!-- port -->
            </section>
            <section data-bb-version="4.7.6" id="bt_bb_section656da16ab5a91" class="bt_bb_section bt_bb_layout_boxed_1200 bt_bb_vertical_align_top bt_bb_top_spacing_medium bt_bb_bottom_spacing_normal bt_bb_hidden_xs bt_bb_hidden_ms bt_bb_hidden_sm bt_bb_hidden_md bt_bb_hidden_lg bt_bb_hidden_xl bt_bb_negative_margin_none" data-bt-override-class="{&quot;bt_bb_top_spacing_&quot;:{&quot;current_class&quot;:&quot;bt_bb_top_spacing_medium&quot;,&quot;xxl&quot;:&quot;medium&quot;},&quot;bt_bb_bottom_spacing_&quot;:{&quot;current_class&quot;:&quot;bt_bb_bottom_spacing_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;}}">
               <div class="bt_bb_port">
                  <div class="bt_bb_cell">
                     <div class="bt_bb_cell_inner">
                        <div class="bt_bb_row_wrapper">
                           <div class="bt_bb_row" data-bt-override-class="{}">
                              <div class="bt_bb_column col-xxl-12 col-xl-12 col-xs-12 col-sm-12 col-md-12 col-lg-12 bt_bb_vertical_align_top bt_bb_align_center bt_bb_padding_normal bt_bb_animation_fade_in animate bt_bb_shape_inherit" data-width="12" data-bt-override-class="{&quot;bt_bb_align_&quot;:{&quot;current_class&quot;:&quot;bt_bb_align_center&quot;,&quot;xxl&quot;:&quot;center&quot;,&quot;xl&quot;:&quot;center&quot;},&quot;bt_bb_padding_&quot;:{&quot;current_class&quot;:&quot;bt_bb_padding_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;,&quot;xl&quot;:&quot;normal&quot;}}">
                                 <div class="bt_bb_column_content">
                                    <div class="bt_bb_column_content_inner">
                                       <header data-bb-version="4.7.6" class="bt_bb_headline bt_bb_subheadline_text_transform_default bt_bb_color_scheme_5 bt_bb_dash_none bt_bb_size_extralarge bt_bb_align_inherit" style="; --primary-color:#282828; --secondary-color:var(--accent-color);" data-bt-override-class="{&quot;bt_bb_size_&quot;:{&quot;current_class&quot;:&quot;bt_bb_size_extralarge&quot;,&quot;xxl&quot;:&quot;extralarge&quot;},&quot;bt_bb_align_&quot;:{&quot;current_class&quot;:&quot;bt_bb_align_inherit&quot;,&quot;xxl&quot;:&quot;inherit&quot;}}">
                                          <h3 class="bt_bb_headline_tag">
                                             <span class="bt_bb_headline_content">
                                                <span> IXPLORE</span>
                                             </span>
                                          </h3>
                                       </header>
                                       <div class="bt_bb_separator_v2 bt_bb_border_style_none bt_bb_top_spacing_none bt_bb_bottom_spacing_50 bt_bb_border_thickness_1 bt_bb_icon_size_normal bt_bb_text_size_normal bt_bb_separator_v2_without_content" data-bt-override-class="{&quot;bt_bb_top_spacing_&quot;:{&quot;current_class&quot;:&quot;bt_bb_top_spacing_none&quot;,&quot;xxl&quot;:&quot;none&quot;,&quot;xl&quot;:&quot;none&quot;},&quot;bt_bb_bottom_spacing_&quot;:{&quot;current_class&quot;:&quot;bt_bb_bottom_spacing_50&quot;,&quot;xxl&quot;:&quot;50&quot;,&quot;xl&quot;:&quot;50&quot;},&quot;bt_bb_border_thickness_&quot;:{&quot;current_class&quot;:&quot;bt_bb_border_thickness_1&quot;,&quot;xxl&quot;:&quot;1&quot;,&quot;xl&quot;:&quot;1&quot;},&quot;bt_bb_icon_size_&quot;:{&quot;current_class&quot;:&quot;bt_bb_icon_size_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;,&quot;xl&quot;:&quot;normal&quot;},&quot;bt_bb_text_size_&quot;:{&quot;current_class&quot;:&quot;bt_bb_text_size_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;,&quot;xl&quot;:&quot;normal&quot;}}">
                                          <div class="bt_bb_separator_v2_inner">
                                             <span class="bt_bb_separator_v2_inner_before"></span>
                                             <span class="bt_bb_separator_v2_inner_content">
                                                <span data-ico-="&#x;" class="bt_bb_icon_holder"></span>
                                             </span>
                                             <span class="bt_bb_separator_v2_inner_after"></span>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div data-bb-version="4.7.6" class="bt_bb_row_wrapper">
                           <div class="bt_bb_row" data-bt-override-class="{}">
                              <div data-bb-version="4.7.6" class="bt_bb_column col-xxl-12 col-xl-12 col-xs-12 col-sm-12 col-md-12 col-lg-12 bt_bb_vertical_align_top bt_bb_align_left bt_bb_padding_normal bt_bb_shape_inherit" data-width="12" data-bt-override-class="{}">
                                 <div class="bt_bb_column_content">
                                    <div class="bt_bb_column_content_inner">
                                       <div data-bb-version="4.7.6" class="bt_bb_video"></div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- cell_inner -->
                  </div>
                  <!-- cell -->
               </div>
               <!-- port -->
            </section>

            <section data-bb-version="4.6.0" id="bt_bb_section656da16abeb25" class="bt_bb_section bt_bb_layout_boxed_1200 bt_bb_vertical_align_top bt_bb_top_section_coverage_image bt_bb_section_with_top_coverage_image bt_bb_bottom_section_coverage_image bt_bb_section_with_bottom_coverage_image bt_bb_top_spacing_large bt_bb_bottom_spacing_80 bt_bb_negative_margin_none" style=";background-color:rgb(248,245,238);" data-bt-override-class="{&quot;bt_bb_top_spacing_&quot;:{&quot;current_class&quot;:&quot;bt_bb_top_spacing_large&quot;,&quot;xxl&quot;:&quot;large&quot;},&quot;bt_bb_bottom_spacing_&quot;:{&quot;current_class&quot;:&quot;bt_bb_bottom_spacing_80&quot;,&quot;xxl&quot;:&quot;80&quot;}}">
               <div class="bt_bb_port">
                  <div class="bt_bb_cell">
                     <div class="bt_bb_cell_inner">
                        <div class="bt_bb_row_wrapper">
                           <div class="bt_bb_row" data-bt-override-class="{}">
                              <div class="bt_bb_column col-xxl-12 col-xl-12 col-xs-12 col-sm-12 col-md-12 col-lg-12 bt_bb_vertical_align_middle bt_bb_align_left bt_bb_padding_double bt_bb_animation_fade_in animate bt_bb_shape_inherit" data-width="12" data-bt-override-class="{&quot;bt_bb_align_&quot;:{&quot;current_class&quot;:&quot;bt_bb_align_left&quot;,&quot;xxl&quot;:&quot;left&quot;,&quot;xl&quot;:&quot;left&quot;},&quot;bt_bb_padding_&quot;:{&quot;current_class&quot;:&quot;bt_bb_padding_double&quot;,&quot;xxl&quot;:&quot;double&quot;,&quot;xl&quot;:&quot;double&quot;}}">
                                 <div class="bt_bb_column_content">
                                    <div class="bt_bb_column_content_inner">
                                       <header data-bb-version="4.6.0" class=" bt_bb_headline bt_bb_subheadline_text_transform_default bt_bb_color_scheme_9 bt_bb_dash_none bt_bb_size_extralarge bt_bb_align_center" style="; --primary-color:#282828; --secondary-color:var(--alternate-color);" data-bt-override-class="{&quot;bt_bb_size_&quot;:{&quot;current_class&quot;:&quot;bt_bb_size_extralarge&quot;,&quot;xxl&quot;:&quot;extralarge&quot;},&quot;bt_bb_align_&quot;:{&quot;current_class&quot;:&quot;bt_bb_align_center&quot;,&quot;xxl&quot;:&quot;center&quot;}}">
                                          <h2 class="bt_bb_headline_tag">
                                             <span class="bt_bb_headline_content">
                                                <span>Parents Testimonials</span>
                                             </span>
                                          </h2>
                                       </header>

                                       <div data-bb-version="4.5.9" class="bt_bb_separator_v2 bt_bb_border_style_none bt_bb_top_spacing_none bt_bb_bottom_spacing_20 bt_bb_border_thickness_1 bt_bb_icon_size_normal bt_bb_text_size_normal bt_bb_separator_v2_without_content" data-bt-override-class="{&quot;bt_bb_top_spacing_&quot;:{&quot;current_class&quot;:&quot;bt_bb_top_spacing_none&quot;,&quot;xxl&quot;:&quot;none&quot;},&quot;bt_bb_bottom_spacing_&quot;:{&quot;current_class&quot;:&quot;bt_bb_bottom_spacing_20&quot;,&quot;xxl&quot;:&quot;20&quot;},&quot;bt_bb_border_thickness_&quot;:{&quot;current_class&quot;:&quot;bt_bb_border_thickness_1&quot;,&quot;xxl&quot;:&quot;1&quot;},&quot;bt_bb_icon_size_&quot;:{&quot;current_class&quot;:&quot;bt_bb_icon_size_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;},&quot;bt_bb_text_size_&quot;:{&quot;current_class&quot;:&quot;bt_bb_text_size_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;}}">
                                          <div class="bt_bb_separator_v2_inner">
                                             <span class="bt_bb_separator_v2_inner_before"></span>
                                             <span class="bt_bb_separator_v2_inner_content">
                                                <span data-ico-="&#x;" class="bt_bb_icon_holder"></span>
                                             </span>
                                             <span class="bt_bb_separator_v2_inner_after"></span>
                                          </div>
                                       </div>

                                       <div class="bt_bb_row owl-carousel owl-carousel-parent-testimonial" data-bt-override-class="{}">
                                          <?php $id = 1;
                                          foreach ($parents as $parent) {

                                             $value = explode("v=", $parent->url);
                                             $videoId = $value[1];
                                          ?>
                                             <div data-bb-version="4.5.9" class="bt_bb_column col-xxl-12 col-xl-12 col-xs-12 col-sm-12 col-md-12 col-lg-12 bt_bb_vertical_align_top bt_bb_align_left bt_bb_padding_normal" data-width="4" data-bt-override-class="{&quot;bt_bb_align_&quot;:{&quot;current_class&quot;:&quot;bt_bb_align_left&quot;,&quot;xxl&quot;:&quot;left&quot;},&quot;bt_bb_padding_&quot;:{&quot;current_class&quot;:&quot;bt_bb_padding_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;}}">
                                                <div class="media-card svg-block video-block">
                                                    <a data-fancybox="videos-gallery" data-src="<?php echo $parent->url; ?>" data-caption="<?php echo $parent->url; ?>">
                                                        <p class="video-btn">
                                                           <span class="play-ico animate x2"><span><img src="<?= base_url();?>assets/images/play.svg" class="lazy"></span></span>
                                                        </p>
                                                        <img src="<?= base_url().$parent->thumbnail; ?>" class="fancybox img-fluid">
                                                    </a>
                                                </div>
                                             </div>
                                          <?php } ?>
                                       </div>

                                       <div data-bb-version="4.5.9" class="bt_bb_separator_v2 bt_bb_border_style_none bt_bb_top_spacing_none bt_bb_bottom_spacing_10 bt_bb_border_thickness_1 bt_bb_icon_size_normal bt_bb_text_size_normal bt_bb_separator_v2_without_content" data-bt-override-class="{&quot;bt_bb_top_spacing_&quot;:{&quot;current_class&quot;:&quot;bt_bb_top_spacing_none&quot;,&quot;xxl&quot;:&quot;none&quot;},&quot;bt_bb_bottom_spacing_&quot;:{&quot;current_class&quot;:&quot;bt_bb_bottom_spacing_10&quot;,&quot;xxl&quot;:&quot;10&quot;},&quot;bt_bb_border_thickness_&quot;:{&quot;current_class&quot;:&quot;bt_bb_border_thickness_1&quot;,&quot;xxl&quot;:&quot;1&quot;},&quot;bt_bb_icon_size_&quot;:{&quot;current_class&quot;:&quot;bt_bb_icon_size_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;},&quot;bt_bb_text_size_&quot;:{&quot;current_class&quot;:&quot;bt_bb_text_size_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;}}">
                                          <div class="bt_bb_separator_v2_inner">
                                             <span class="bt_bb_separator_v2_inner_before"></span>
                                             <span class="bt_bb_separator_v2_inner_content">
                                                <span data-ico-="&#x;" class="bt_bb_icon_holder"></span>
                                             </span>
                                             <span class="bt_bb_separator_v2_inner_after"></span>
                                          </div>
                                       </div>


                                       <div class="d-none d-md-flex bt_bb_separator_v2 bt_bb_border_style_none bt_bb_top_spacing_none bt_bb_bottom_spacing_medium bt_bb_border_thickness_1 bt_bb_icon_size_normal bt_bb_text_size_normal bt_bb_separator_v2_without_content" data-bt-override-class="{&quot;bt_bb_top_spacing_&quot;:{&quot;current_class&quot;:&quot;bt_bb_top_spacing_none&quot;,&quot;xxl&quot;:&quot;none&quot;,&quot;xl&quot;:&quot;none&quot;},&quot;bt_bb_bottom_spacing_&quot;:{&quot;current_class&quot;:&quot;bt_bb_bottom_spacing_medium&quot;,&quot;xxl&quot;:&quot;medium&quot;,&quot;xl&quot;:&quot;medium&quot;},&quot;bt_bb_border_thickness_&quot;:{&quot;current_class&quot;:&quot;bt_bb_border_thickness_1&quot;,&quot;xxl&quot;:&quot;1&quot;,&quot;xl&quot;:&quot;1&quot;},&quot;bt_bb_icon_size_&quot;:{&quot;current_class&quot;:&quot;bt_bb_icon_size_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;,&quot;xl&quot;:&quot;normal&quot;},&quot;bt_bb_text_size_&quot;:{&quot;current_class&quot;:&quot;bt_bb_text_size_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;,&quot;xl&quot;:&quot;normal&quot;}}">
                                          <div class="bt_bb_separator_v2_inner">
                                             <span class="bt_bb_separator_v2_inner_before"></span>
                                             <span class="bt_bb_separator_v2_inner_content">
                                                <span data-ico-="&#x;" class="bt_bb_icon_holder"></span>
                                             </span>
                                             <span class="bt_bb_separator_v2_inner_after"></span>
                                          </div>
                                       </div>

                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>

                  </div>

               </div>

               <div class="bt_bb_section_top_section_coverage_image">
                  <img decoding="async" src="<?= base_url(); ?>uploads/2022/04/top_white_wave_03.png" alt="bt_bb_section_top_section_coverage_image" />
               </div>
               <div class="bt_bb_section_bottom_section_coverage_image">
                  <img decoding="async" src="<?= base_url(); ?>uploads/2022/04/bottom_white_wave_02.png" alt="bt_bb_section_bottom_section_coverage_image" />
               </div>
            </section>

            <section data-bb-version="4.5.9" id="bt_bb_section656da16ab88f3" class="container bt_bb_section bt_bb_layout_boxed_1200 bt_bb_vertical_align_top bt_bb_top_spacing_normal bt_bb_bottom_spacing_normal bt_bb_negative_margin_none" data-bt-override-class="{&quot;bt_bb_top_spacing_&quot;:{&quot;current_class&quot;:&quot;bt_bb_top_spacing_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;},&quot;bt_bb_bottom_spacing_&quot;:{&quot;current_class&quot;:&quot;bt_bb_bottom_spacing_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;}}">
               <div class="bt_bb_port">
                  <div class="bt_bb_cell mw100">
                     <div class="bt_bb_cell_inner">
                        <div class="bt_bb_row_wrapper">
                           <div class="bt_bb_cell mw100">
                              <div class="bt_bb_cell_inner">
                                 <div class="bt_bb_row_wrapper">
                                    <div class="bt_bb_row" data-bt-override-class="{}">
                                       <div class="bt_bb_column col-xxl-12 col-xl-12 col-xs-12 col-sm-12 col-md-12 col-lg-12 bt_bb_vertical_align_top bt_bb_align_center bt_bb_padding_normal bt_bb_animation_fade_in animate bt_bb_shape_inherit" data-width="12" data-bt-override-class="{&quot;bt_bb_align_&quot;:{&quot;current_class&quot;:&quot;bt_bb_align_center&quot;,&quot;xxl&quot;:&quot;center&quot;,&quot;xl&quot;:&quot;center&quot;},&quot;bt_bb_padding_&quot;:{&quot;current_class&quot;:&quot;bt_bb_padding_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;,&quot;xl&quot;:&quot;normal&quot;}}">
                                          <div class="bt_bb_column_content">
                                             <div class="bt_bb_column_content_inner">
                                                <header data-bb-version="4.5.9" class="bt_bb_headline bt_bb_subheadline_text_transform_default bt_bb_color_scheme_5 bt_bb_dash_none bt_bb_size_extralarge bt_bb_align_inherit" style="; --primary-color:#282828; --secondary-color:var(--accent-color);" data-bt-override-class="{&quot;bt_bb_size_&quot;:{&quot;current_class&quot;:&quot;bt_bb_size_extralarge&quot;,&quot;xxl&quot;:&quot;extralarge&quot;},&quot;bt_bb_align_&quot;:{&quot;current_class&quot;:&quot;bt_bb_align_inherit&quot;,&quot;xxl&quot;:&quot;inherit&quot;}}">
                                                   <h2 class="bt_bb_headline_tag">
                                                      <span class="bt_bb_headline_content">
                                                         <span>Kidzonia Campuses</span>
                                                      </span>
                                                   </h2>
                                                </header>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <!-- cell_inner -->
                           </div>
                        </div>
                        <!-- cell -->
                     </div>
                     <div class="bt_bb_separator_v2 bt_bb_border_style_none bt_bb_top_spacing_none bt_bb_bottom_spacing_50 bt_bb_border_thickness_1 bt_bb_icon_size_normal bt_bb_text_size_normal bt_bb_separator_v2_without_content" data-bt-override-class="{&quot;bt_bb_top_spacing_&quot;:{&quot;current_class&quot;:&quot;bt_bb_top_spacing_none&quot;,&quot;xxl&quot;:&quot;none&quot;,&quot;xl&quot;:&quot;none&quot;},&quot;bt_bb_bottom_spacing_&quot;:{&quot;current_class&quot;:&quot;bt_bb_bottom_spacing_50&quot;,&quot;xxl&quot;:&quot;50&quot;,&quot;xl&quot;:&quot;50&quot;},&quot;bt_bb_border_thickness_&quot;:{&quot;current_class&quot;:&quot;bt_bb_border_thickness_1&quot;,&quot;xxl&quot;:&quot;1&quot;,&quot;xl&quot;:&quot;1&quot;},&quot;bt_bb_icon_size_&quot;:{&quot;current_class&quot;:&quot;bt_bb_icon_size_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;,&quot;xl&quot;:&quot;normal&quot;},&quot;bt_bb_text_size_&quot;:{&quot;current_class&quot;:&quot;bt_bb_text_size_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;,&quot;xl&quot;:&quot;normal&quot;}}">
                        <div class="bt_bb_separator_v2_inner">
                           <span class="bt_bb_separator_v2_inner_before"></span>
                           <span class="bt_bb_separator_v2_inner_content">
                              <span data-ico-="&#x;" class="bt_bb_icon_holder"></span>
                           </span>
                           <span class="bt_bb_separator_v2_inner_after"></span>
                        </div>
                     </div>

                     <div class="bt_bb_row owl-carousel owl-carousel-gallery" data-bt-override-class="{}">
                        <?php foreach ($gallery as $d) { ?>
                           <div class="col-12 col-md-12 col-lg-12 p-3">
                              <a href="<?php echo base_url() . 'explore-centers/hyderabad/' . $d['url']; ?>">
                                 <div class="box custom-box">
                                    <img src="<?php echo base_url() . $d['pic']; ?>?tr=w-400" class="img-fluid" title="<?php echo $d['alt']; ?>" alt="<?php echo $d['alt']; ?>">
                                    <div class="blog-title text-center pb-0">
                                       <a href="<?php echo base_url() . 'explore-centers/hyderabad/' . $d['url']; ?>">
                                          <?php echo $d['name']; ?>
                                       </a>
                                    </div>
                                 </div>
                              </a>
                           </div>

                        <?php  } ?>
                     </div>

                     <!-- cell_inner -->
                  </div>
                  <!-- cell -->
               </div>
               <!-- port -->
            </section>


            <section data-bb-version="4.6.0" id="bt_bb_section656da16abeb25" class="bt_bb_section bt_bb_layout_boxed_1200 bt_bb_vertical_align_top bt_bb_top_section_coverage_image bt_bb_section_with_top_coverage_image bt_bb_bottom_section_coverage_image bt_bb_section_with_bottom_coverage_image bt_bb_top_spacing_large bt_bb_bottom_spacing_80 bt_bb_negative_margin_none" style=";background-color:rgb(248,245,238);" data-bt-override-class="{&quot;bt_bb_top_spacing_&quot;:{&quot;current_class&quot;:&quot;bt_bb_top_spacing_large&quot;,&quot;xxl&quot;:&quot;large&quot;},&quot;bt_bb_bottom_spacing_&quot;:{&quot;current_class&quot;:&quot;bt_bb_bottom_spacing_80&quot;,&quot;xxl&quot;:&quot;80&quot;}}">
               <div class="bt_bb_port">
                  <div class="bt_bb_cell">
                     <div class="bt_bb_cell_inner">
                        <div class="bt_bb_row_wrapper">
                           <div class="bt_bb_row" data-bt-override-class="{}">
                              <div class="bt_bb_column col-xxl-12 col-xl-12 col-xs-12 col-sm-12 col-md-12 col-lg-12 bt_bb_vertical_align_middle bt_bb_align_left bt_bb_padding_double bt_bb_animation_fade_in animate bt_bb_shape_inherit" data-width="12" data-bt-override-class="{&quot;bt_bb_align_&quot;:{&quot;current_class&quot;:&quot;bt_bb_align_left&quot;,&quot;xxl&quot;:&quot;left&quot;,&quot;xl&quot;:&quot;left&quot;},&quot;bt_bb_padding_&quot;:{&quot;current_class&quot;:&quot;bt_bb_padding_double&quot;,&quot;xxl&quot;:&quot;double&quot;,&quot;xl&quot;:&quot;double&quot;}}">
                                 <div class="bt_bb_column_content">
                                    <div class="bt_bb_column_content_inner">
                                       <header data-bb-version="4.6.0" class="bt_bb_headline bt_bb_subheadline_text_transform_default bt_bb_color_scheme_9 bt_bb_dash_none bt_bb_size_extralarge bt_bb_align_center" style="; --primary-color:#282828; --secondary-color:var(--alternate-color);" data-bt-override-class="{&quot;bt_bb_size_&quot;:{&quot;current_class&quot;:&quot;bt_bb_size_extralarge&quot;,&quot;xxl&quot;:&quot;extralarge&quot;},&quot;bt_bb_align_&quot;:{&quot;current_class&quot;:&quot;bt_bb_align_center&quot;,&quot;xxl&quot;:&quot;center&quot;}}">
                                          <h2 class="bt_bb_headline_tag">
                                             <span class="bt_bb_headline_content">
                                                <span>Blogs</span>
                                             </span>
                                          </h2>
                                       </header>
                                       <div data-bb-version="4.5.9" class="bt_bb_separator_v2 bt_bb_border_style_none bt_bb_top_spacing_none bt_bb_bottom_spacing_20 bt_bb_border_thickness_1 bt_bb_icon_size_normal bt_bb_text_size_normal bt_bb_separator_v2_without_content" data-bt-override-class="{&quot;bt_bb_top_spacing_&quot;:{&quot;current_class&quot;:&quot;bt_bb_top_spacing_none&quot;,&quot;xxl&quot;:&quot;none&quot;},&quot;bt_bb_bottom_spacing_&quot;:{&quot;current_class&quot;:&quot;bt_bb_bottom_spacing_20&quot;,&quot;xxl&quot;:&quot;20&quot;},&quot;bt_bb_border_thickness_&quot;:{&quot;current_class&quot;:&quot;bt_bb_border_thickness_1&quot;,&quot;xxl&quot;:&quot;1&quot;},&quot;bt_bb_icon_size_&quot;:{&quot;current_class&quot;:&quot;bt_bb_icon_size_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;},&quot;bt_bb_text_size_&quot;:{&quot;current_class&quot;:&quot;bt_bb_text_size_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;}}">
                                          <div class="bt_bb_separator_v2_inner">
                                             <span class="bt_bb_separator_v2_inner_before"></span>
                                             <span class="bt_bb_separator_v2_inner_content">
                                                <span data-ico-="&#x;" class="bt_bb_icon_holder"></span>
                                             </span>
                                             <span class="bt_bb_separator_v2_inner_after"></span>
                                          </div>
                                       </div>
                                       <div data-bb-version="4.6.0" class="row d-flex owl-carousel owl-carousel-blogs">
                                          <?php foreach ($blogs as $blog) { ?>
                                             <div class="col-12 col-md-12 col-lg-12 p-3">
                                                <a href="<?php echo base_url() . 'blog-details/' . $blog['slug']; ?>">
                                                   <div class="box custom-box">
                                                      <img src="<?php echo base_url() . $blog['image']; ?>?tr=w-400" class="img-fluid" alt="<?php echo $blog['alt']; ?>">
                                                      <div class="blog-title">
                                                         <p class="mb-0 text-secondary"><?php
                                                                                          $date = new DateTime($blog['created_at']);
                                                                                          $formattedDate = $date->format('j M, Y');
                                                                                          echo $formattedDate; ?></p>
                                                         <a href="<?php echo base_url() . 'blog-details/' . $blog['slug']; ?>">
                                                            <?php echo substr($blog['name'], 0, 65) . '...'; ?>
                                                         </a>
                                                      </div>
                                                   </div>
                                                </a>
                                             </div>
                                          <?php } ?>
                                       </div>
                                       <div data-bb-version="4.5.9" class="bt_bb_separator_v2 bt_bb_border_style_none bt_bb_top_spacing_none bt_bb_bottom_spacing_10 bt_bb_border_thickness_1 bt_bb_icon_size_normal bt_bb_text_size_normal bt_bb_separator_v2_without_content" data-bt-override-class="{&quot;bt_bb_top_spacing_&quot;:{&quot;current_class&quot;:&quot;bt_bb_top_spacing_none&quot;,&quot;xxl&quot;:&quot;none&quot;},&quot;bt_bb_bottom_spacing_&quot;:{&quot;current_class&quot;:&quot;bt_bb_bottom_spacing_10&quot;,&quot;xxl&quot;:&quot;10&quot;},&quot;bt_bb_border_thickness_&quot;:{&quot;current_class&quot;:&quot;bt_bb_border_thickness_1&quot;,&quot;xxl&quot;:&quot;1&quot;},&quot;bt_bb_icon_size_&quot;:{&quot;current_class&quot;:&quot;bt_bb_icon_size_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;},&quot;bt_bb_text_size_&quot;:{&quot;current_class&quot;:&quot;bt_bb_text_size_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;}}">
                                          <div class="bt_bb_separator_v2_inner">
                                             <span class="bt_bb_separator_v2_inner_before"></span>
                                             <span class="bt_bb_separator_v2_inner_content">
                                                <span data-ico-="&#x;" class="bt_bb_icon_holder"></span>
                                             </span>
                                             <span class="bt_bb_separator_v2_inner_after"></span>
                                          </div>
                                       </div>
                                       <div data-bb-version="4.6.1" class="bt_bb_button bt_bb_color_scheme_6 bt_bb_icon_position_left bt_bb_style_filled bt_bb_size_normal bt_bb_width_inline bt_bb_shape_inherit bt_bb_target_self bt_bb_text_transform_inherit bt_bb_align_center" style="; --primary-color:#ffffff; --secondary-color:var(--accent-color);" data-bt-override-class="{&quot;bt_bb_size_&quot;:{&quot;current_class&quot;:&quot;bt_bb_size_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;},&quot;bt_bb_align_&quot;:{&quot;current_class&quot;:&quot;bt_bb_align_center&quot;,&quot;xxl&quot;:&quot;center&quot;}}">
                                          <a href="<?php echo base_url(); ?>blogs" target="_self" class="bt_bb_link" title="View All Blogs">
                                             <span class="bt_bb_button_text">View All Blogs</span>
                                          </a>
                                       </div>
                                       <div class="bt_bb_separator_v2 bt_bb_border_style_none bt_bb_top_spacing_none bt_bb_bottom_spacing_medium bt_bb_border_thickness_1 bt_bb_icon_size_normal bt_bb_text_size_normal bt_bb_separator_v2_without_content" data-bt-override-class="{&quot;bt_bb_top_spacing_&quot;:{&quot;current_class&quot;:&quot;bt_bb_top_spacing_none&quot;,&quot;xxl&quot;:&quot;none&quot;,&quot;xl&quot;:&quot;none&quot;},&quot;bt_bb_bottom_spacing_&quot;:{&quot;current_class&quot;:&quot;bt_bb_bottom_spacing_medium&quot;,&quot;xxl&quot;:&quot;medium&quot;,&quot;xl&quot;:&quot;medium&quot;},&quot;bt_bb_border_thickness_&quot;:{&quot;current_class&quot;:&quot;bt_bb_border_thickness_1&quot;,&quot;xxl&quot;:&quot;1&quot;,&quot;xl&quot;:&quot;1&quot;},&quot;bt_bb_icon_size_&quot;:{&quot;current_class&quot;:&quot;bt_bb_icon_size_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;,&quot;xl&quot;:&quot;normal&quot;},&quot;bt_bb_text_size_&quot;:{&quot;current_class&quot;:&quot;bt_bb_text_size_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;,&quot;xl&quot;:&quot;normal&quot;}}">
                                          <div class="bt_bb_separator_v2_inner">
                                             <span class="bt_bb_separator_v2_inner_before"></span>
                                             <span class="bt_bb_separator_v2_inner_content">
                                                <span data-ico-="&#x;" class="bt_bb_icon_holder"></span>
                                             </span>
                                             <span class="bt_bb_separator_v2_inner_after"></span>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- cell_inner -->
                  </div>
                  <!-- cell -->
               </div>
               <!-- port -->
               <div class="bt_bb_section_top_section_coverage_image">
                  <img decoding="async" src="<?= base_url(); ?>uploads/2022/04/top_white_wave_03.png" alt="bt_bb_section_top_section_coverage_image" />
               </div>
               <div class="bt_bb_section_bottom_section_coverage_image">
                  <img decoding="async" src="<?= base_url(); ?>uploads/2022/04/bottom_white_wave_02.png" alt="bt_bb_section_bottom_section_coverage_image" />
               </div>
            </section>



            <section data-bb-version="4.5.9" id="bt_bb_section656da16ab88f3" class="bt_bb_section bt_bb_layout_boxed_1200 bt_bb_vertical_align_top bt_bb_top_spacing_normal bt_bb_bottom_spacing_normal bt_bb_negative_margin_none" data-bt-override-class="{&quot;bt_bb_top_spacing_&quot;:{&quot;current_class&quot;:&quot;bt_bb_top_spacing_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;},&quot;bt_bb_bottom_spacing_&quot;:{&quot;current_class&quot;:&quot;bt_bb_bottom_spacing_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;}}">
               <div class="bt_bb_port">
                  <div class="bt_bb_cell">
                     <div class="bt_bb_cell_inner">
                        <div class="bt_bb_row_wrapper">
                           <div class="bt_bb_cell">
                              <div class="bt_bb_cell_inner">
                                 <div class="bt_bb_row_wrapper">
                                    <div class="bt_bb_row" data-bt-override-class="{}">
                                       <div class="bt_bb_column col-xxl-12 col-xl-12 col-xs-12 col-sm-12 col-md-12 col-lg-12 bt_bb_vertical_align_top bt_bb_align_center bt_bb_padding_normal bt_bb_animation_fade_in animate bt_bb_shape_inherit" data-width="12" data-bt-override-class="{&quot;bt_bb_align_&quot;:{&quot;current_class&quot;:&quot;bt_bb_align_center&quot;,&quot;xxl&quot;:&quot;center&quot;,&quot;xl&quot;:&quot;center&quot;},&quot;bt_bb_padding_&quot;:{&quot;current_class&quot;:&quot;bt_bb_padding_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;,&quot;xl&quot;:&quot;normal&quot;}}">
                                          <div class="bt_bb_column_content">
                                             <div class="bt_bb_column_content_inner">
                                                <header data-bb-version="4.5.9" class="bt_bb_headline bt_bb_subheadline_text_transform_default bt_bb_color_scheme_5 bt_bb_dash_none bt_bb_size_extralarge bt_bb_align_inherit" style="; --primary-color:#282828; --secondary-color:var(--accent-color);" data-bt-override-class="{&quot;bt_bb_size_&quot;:{&quot;current_class&quot;:&quot;bt_bb_size_extralarge&quot;,&quot;xxl&quot;:&quot;extralarge&quot;},&quot;bt_bb_align_&quot;:{&quot;current_class&quot;:&quot;bt_bb_align_inherit&quot;,&quot;xxl&quot;:&quot;inherit&quot;}}">
                                                   <h2 class="bt_bb_headline_tag">
                                                      <span class="bt_bb_headline_content">
                                                         <span>Upcoming Events</span>
                                                      </span>
                                                   </h2>
                                                </header>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <!-- cell_inner -->
                           </div>
                        </div>
                        <!-- cell -->
                     </div>
                     <div class="bt_bb_separator_v2 bt_bb_border_style_none bt_bb_top_spacing_none bt_bb_bottom_spacing_50 bt_bb_border_thickness_1 bt_bb_icon_size_normal bt_bb_text_size_normal bt_bb_separator_v2_without_content" data-bt-override-class="{&quot;bt_bb_top_spacing_&quot;:{&quot;current_class&quot;:&quot;bt_bb_top_spacing_none&quot;,&quot;xxl&quot;:&quot;none&quot;,&quot;xl&quot;:&quot;none&quot;},&quot;bt_bb_bottom_spacing_&quot;:{&quot;current_class&quot;:&quot;bt_bb_bottom_spacing_50&quot;,&quot;xxl&quot;:&quot;50&quot;,&quot;xl&quot;:&quot;50&quot;},&quot;bt_bb_border_thickness_&quot;:{&quot;current_class&quot;:&quot;bt_bb_border_thickness_1&quot;,&quot;xxl&quot;:&quot;1&quot;,&quot;xl&quot;:&quot;1&quot;},&quot;bt_bb_icon_size_&quot;:{&quot;current_class&quot;:&quot;bt_bb_icon_size_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;,&quot;xl&quot;:&quot;normal&quot;},&quot;bt_bb_text_size_&quot;:{&quot;current_class&quot;:&quot;bt_bb_text_size_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;,&quot;xl&quot;:&quot;normal&quot;}}">
                        <div class="bt_bb_separator_v2_inner">
                           <span class="bt_bb_separator_v2_inner_before"></span>
                           <span class="bt_bb_separator_v2_inner_content">
                              <span data-ico-="&#x;" class="bt_bb_icon_holder"></span>
                           </span>
                           <span class="bt_bb_separator_v2_inner_after"></span>
                        </div>
                     </div>
                     <div data-bb-version="4.6.0" class=" row d-flex owl-carousel owl-carousel-event">
                        <?php foreach ($events as $evt) { ?>
                           <div class="col-12 col-md-6 col-lg-4 p-3 w-100">
                              <div class="box custom-box-event bg-white">
                                 <a href="<?= base_url() . 'event/' . $evt->slug . '/' . $evt->id; ?>">
                                    <img src="<?= base_url() . $evt->image; ?>" alt="<?= base_url() . $evt->name; ?>?tr=w-400" title="<?= base_url() . $evt->name; ?>" class="img-fluid">
                                 </a>
                                 <div class="blog-title text-center">
                                    <a href="<?= base_url() . 'event/' . $evt->slug . '/' . $evt->id; ?>">
                                       <?= $evt->name; ?>
                                    </a>
                                 </div>
                              </div>
                           </div>
                        <?php } ?>
                     </div>
                     <div data-bb-version="4.5.9" class="bt_bb_separator_v2 bt_bb_border_style_none bt_bb_top_spacing_none bt_bb_bottom_spacing_10 bt_bb_border_thickness_1 bt_bb_icon_size_normal bt_bb_text_size_normal bt_bb_separator_v2_without_content" data-bt-override-class="{&quot;bt_bb_top_spacing_&quot;:{&quot;current_class&quot;:&quot;bt_bb_top_spacing_none&quot;,&quot;xxl&quot;:&quot;none&quot;},&quot;bt_bb_bottom_spacing_&quot;:{&quot;current_class&quot;:&quot;bt_bb_bottom_spacing_10&quot;,&quot;xxl&quot;:&quot;10&quot;},&quot;bt_bb_border_thickness_&quot;:{&quot;current_class&quot;:&quot;bt_bb_border_thickness_1&quot;,&quot;xxl&quot;:&quot;1&quot;},&quot;bt_bb_icon_size_&quot;:{&quot;current_class&quot;:&quot;bt_bb_icon_size_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;},&quot;bt_bb_text_size_&quot;:{&quot;current_class&quot;:&quot;bt_bb_text_size_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;}}">
                        <div class="bt_bb_separator_v2_inner">
                           <span class="bt_bb_separator_v2_inner_before"></span>
                           <span class="bt_bb_separator_v2_inner_content">
                              <span data-ico-="&#x;" class="bt_bb_icon_holder"></span>
                           </span>
                           <span class="bt_bb_separator_v2_inner_after"></span>
                        </div>
                     </div>
                     <div data-bb-version="4.6.1" class="bt_bb_button bt_bb_color_scheme_6 bt_bb_icon_position_left bt_bb_style_filled bt_bb_size_normal bt_bb_width_inline bt_bb_shape_inherit bt_bb_target_self bt_bb_text_transform_inherit bt_bb_align_center" style="; --primary-color:#ffffff; --secondary-color:var(--accent-color);" data-bt-override-class="{&quot;bt_bb_size_&quot;:{&quot;current_class&quot;:&quot;bt_bb_size_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;},&quot;bt_bb_align_&quot;:{&quot;current_class&quot;:&quot;bt_bb_align_center&quot;,&quot;xxl&quot;:&quot;center&quot;}}">
                        <a href="javascript:void(0);" onclick="showAjaxEnquiryModal('<?php echo base_url(); ?>modal/popup_front/modal_register_events','Register For Events');" class="bt_bb_link" title="Register For Events">
                           <span class="bt_bb_button_text">
                              Register For Events
                           </span>
                        </a>
                     </div>
                     <div class="bt_bb_separator_v2 bt_bb_border_style_none bt_bb_top_spacing_none bt_bb_bottom_spacing_medium bt_bb_border_thickness_1 bt_bb_icon_size_normal bt_bb_text_size_normal bt_bb_separator_v2_without_content" data-bt-override-class="{&quot;bt_bb_top_spacing_&quot;:{&quot;current_class&quot;:&quot;bt_bb_top_spacing_none&quot;,&quot;xxl&quot;:&quot;none&quot;,&quot;xl&quot;:&quot;none&quot;},&quot;bt_bb_bottom_spacing_&quot;:{&quot;current_class&quot;:&quot;bt_bb_bottom_spacing_medium&quot;,&quot;xxl&quot;:&quot;medium&quot;,&quot;xl&quot;:&quot;medium&quot;},&quot;bt_bb_border_thickness_&quot;:{&quot;current_class&quot;:&quot;bt_bb_border_thickness_1&quot;,&quot;xxl&quot;:&quot;1&quot;,&quot;xl&quot;:&quot;1&quot;},&quot;bt_bb_icon_size_&quot;:{&quot;current_class&quot;:&quot;bt_bb_icon_size_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;,&quot;xl&quot;:&quot;normal&quot;},&quot;bt_bb_text_size_&quot;:{&quot;current_class&quot;:&quot;bt_bb_text_size_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;,&quot;xl&quot;:&quot;normal&quot;}}">
                        <div class="bt_bb_separator_v2_inner">
                           <span class="bt_bb_separator_v2_inner_before"></span>
                           <span class="bt_bb_separator_v2_inner_content">
                              <span data-ico-="&#x;" class="bt_bb_icon_holder"></span>
                           </span>
                           <span class="bt_bb_separator_v2_inner_after"></span>
                        </div>
                     </div>
                     <!-- cell_inner -->
                  </div>
                  <!-- cell -->
               </div>
               <!-- port -->
            </section>


         </div>
      </div>
      <!-- /boldthemes_content -->
   </div>
   <!-- /contentHolder -->
</div>
<!-- /contentWrap -->
<div id="wa"></div>
<div class="sgpb-main-popup-data-container-5768" style="display: none;">
   <div class="sg-popup-builder-content" id="" data-id="5768" data-events="[{&quot;param&quot;:&quot;load&quot;,&quot;value&quot;:&quot;&quot;,&quot;hiddenOption&quot;:[]}]" data-options='{"sgpb-image-url":"<?= base_url() . $pop_up['file']; ?>?tr=w-600,h-600","sgpb-type":"image","sgpb-is-preview":"0","sgpb-is-active":"checked","sgpb-behavior-after-special-events":[[{"param":"select_event"}]],"sgpb-popup-z-index":"9999","sgpb-popup-themes":"sgpb-theme-1","sgpb-overlay-color":"","sgpb-overlay-opacity":"0.8","sgpb-content-custom-class":"sg-popup-content","sgpb-esc-key":"on","sgpb-enable-close-button":"on","sgpb-close-button-delay":"0","sgpb-close-button-position":"bottomRight","sgpb-button-position-top":"","sgpb-button-position-right":"9","sgpb-button-position-bottom":"9","sgpb-button-position-left":"","sgpb-button-image":"","sgpb-button-image-width":"21","sgpb-button-image-height":"21","sgpb-border-color":"#000000","sgpb-border-radius":"0","sgpb-border-radius-type":"%","sgpb-button-text":"Close","sgpb-overlay-click":"on","sgpb-popup-dimension-mode":"responsiveMode","sgpb-responsive-dimension-measure":"auto","sgpb-width":"640px","sgpb-height":"480px","sgpb-max-width":"","sgpb-max-height":"","sgpb-min-width":"120px","sgpb-min-height":"","sgpb-copy-to-clipboard-message":"Copied to Clipboard!","sgpb-open-animation-effect":"No effect","sgpb-close-animation-effect":"No effect","sgpb-enable-content-scrolling":"on","sgpb-popup-order":"0","sgpb-popup-delay":"0","sgpb-post-id":"5768","sgpb-enable-popup-overlay":"on","sgpb-button-image-data":"","sgpb-background-image-data":"","sgpbConditions":null}'>
      <div class="sgpb-popup-builder-content-5768 sgpb-popup-builder-content-html"><img  width="1" height="1" class="sgpb-preloaded-image-5768" alt="Admissions" src="<?= base_url() . $pop_up['file']; ?>?tr=w-600,h-600" style="position:absolute;right:9999999999999px;"></div>
   </div>
</div>


<!-- Include Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
<script>
  const swiper = new Swiper('.bt_bb_background_image_holder_wrapper.swiper', {
    loop: true,
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    autoplay: {
      delay: 5000,
    },
    slidesPerView: 1,
    spaceBetween: 10,
  });
  
</script>

<script>
   document.addEventListener('DOMContentLoaded', function() {
      var video = document.getElementById('bgVideo');
      video.defaultMuted = false;
      video.muted = false;
      var playPromise = video.play();

      if (playPromise !== undefined) {
         playPromise.then(() => {
            console.log('Video playing');
         }).catch((error) => {
            console.log('Autoplay prevented', error);
            document.body.addEventListener('click', function() {
               video.play();
            }, {
               once: true
            });
         });
      }
   });
</script>
<script>
  $(document).ready(function() {
  const videoPopup = $('#videoPopup');
  const modalVideo = $('#modalVideo')[0]; // get the actual video DOM element

  function openPopup() {
    videoPopup.css('display', 'flex');
    // Lazy-load video source only when popup opens (avoids ~13.6 MB on initial page load)
    if (!modalVideo.src) {
      modalVideo.src = modalVideo.getAttribute('data-src') || '';
    }
    modalVideo.play();
  }

  function closePopup() {
    videoPopup.hide();
    modalVideo.pause();
    modalVideo.currentTime = 0; // rewind
  }

  $('#virtualTourBtn').click(function(e) {
    e.preventDefault(); // prevent page scroll
    openPopup();
  });

  $('.close-popup').click(function() {
    closePopup();
  });

  $(document).mouseup(function(e) {
    var container = $(".video-popup-content");
    if (videoPopup.is(':visible') && !container.is(e.target) && container.has(e.target).length === 0) {
      closePopup();
    }
  });

  $(document).keyup(function(e) {
    if (e.key === "Escape" && videoPopup.is(':visible')) {
      closePopup();
    }
  });
});

</script>

