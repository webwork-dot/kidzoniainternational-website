<?php
$alt = ["CBSE School Near Me", "Cambridge School", "International CBSE", "International Cambridge", "Cambridge Near Me", "CBSE", "Cambridge", "International CBSE", ($branch_slug == 'ameenpur') ? "Cambridge Ameenpur" : "Cambridge Nallagandla", "International Cambridge", "KCIS", "English Medium School"];
?>

<style>
.sports-img {
  height: 300px;
  object-fit: cover;
}

.edukul-icon img {
  height: 270px;
  object-fit: cover;
}
</style>

<?php if (isset($h1_title) && empty($data['poster'])): ?>
<div id="featured-title" class="clearfix simple"
    style="background-image: url(<?php echo base_url();?>uploads/2023/02/featured-title-bg.png);">
    <div class="edukul-container clearfix">
        <div class="inner-wrap">
            <div class="title-group">
                <h1 class="main-title"><?php echo $h1_title; ?></h1>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>

<div id="main-content" class="site-main clearfix">
    <div id="content-wrap">
        <div id="site-content" class="site-content clearfix">
            <div id="inner-content" class="inner-content-wrap">
                <article class="page-content">
                    <section class="wpb-content-wrapper">
                        <?php if (!empty($data['poster'])): ?>
                        <div class="vc-custom-col-spacing clearfix vc-col-spacing-30">
                          <section class="wpb_row vc_row-fluid row-content-position-Default">
                            <div class="edukul-container">
                              <div class="row-inner clearfix">
                                <div class="wpb_column vc_column_container vc_col-sm-12">
                                  <div class="vc_column-inner">
                                    <div class="wpb_wrapper">
                                      <p class="rs-p-wp-fix"></p>
                                      <rs-module-wrap id="rev_slider_14_1_wrapper" data-source="gallery"
                                        style="visibility:hidden;background:transparent;padding:0;margin:0px auto;margin-top:0;margin-bottom:0;">
                                        <rs-module id="rev_slider_14_1" style="" data-version="6.6.11">
                                          <rs-slides style="overflow: hidden; position: absolute;">
                                            <rs-slide style="position: absolute;" data-key="rs-33" data-title="Slide"
                                              data-anim="ms:600;" data-in="o:0;" data-out="a:false;">
                                              <img decoding="async" src="<?php echo base_url() . $data['poster']; ?>"
                                                alt="<?php echo $alt[array_rand($alt)]; ?>" title="Nallagandla"
                                                class="rev-slidebg tp-rs-img rs-lazyload"
                                                data-lazyload="//kidzoniacredenceinternational.org/wp-content/plugins/revslider/public/assets/assets/transparent.png"
                                                data-parallax="5" data-no-retina>
                                              <rs-layer id="slider-14-slide-33-layer-0" data-type="image" data-rsp_ch="on"
                                                data-xy="x:c;xo:0,0,0,83px;y:t,t,m,m;yo:0,0,0,-8px;"
                                                data-text="w:normal;s:20,10,7,4;l:0,13,9,6;"
                                                data-dim="w:1929px,1032px,822px,711px;h:750px,401px,320px,276px;"
                                                data-frame_999="o:0;st:w;" style="z-index:7;">
                                                <img fetchpriority="high" decoding="async"
                                                  src="<?php echo base_url() . $data['poster']; ?>" alt="<?php echo $alt[array_rand($alt)]; ?>"
                                                  class="tp-rs-img rs-lazyload" width="1929" height="750"
                                                  data-lazyload="<?php echo base_url() . $data['poster']; ?>" data-no-retina>
                                              </rs-layer>
                                            </rs-slide>
                                          </rs-slides>
                                        </rs-module>
                                      </rs-module-wrap>
                                      <!-- END REVOLUTION SLIDER -->
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </section>
                        </div>
                        <?php if (isset($h1_title)): ?>
                        <div class="vc-custom-col-spacing clearfix vc-col-spacing-30">
                          <section class="wpb_row vc_row-fluid row-content-position-Default">
                            <div class="edukul-container">
                              <div class="row-inner clearfix">
                                <div class="wpb_column vc_column_container vc_col-sm-12">
                                  <div class="vc_column-inner">
                                    <div class="wpb_wrapper">
                                      <div class="edukul-headings clearfix text-center" data-font=55 data-mfont=36 style="margin-top: 0px; margin-bottom: 30px;">
                                        <h1 class="heading clearfix text-center" style="color:#122051;font-size:55px;text-transform: capitalize;">
                                          <?php echo $h1_title; ?>
                                        </h1>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </section>
                        </div>
                        <?php endif; ?>
                        <?php endif; ?>
                        <?php if ($data['principle_image'] != "" && $data['principle_image'] != NULL) {
                                        if ($data['principle_desk'] != "" && $data['principle_desk'] != NULL) {
                                    ?>
                        <div class="vc-custom-col-spacing clearfix vc-col-spacing-30">
                          <section id="principals-desk"
                            class="wpb_row vc_row-fluid vc_custom_1681274529242 vc_row-has-fill no-padding row-content-position-Default">
                            <div class="row-inner clearfix">
                              <div class="wpb_column vc_column_container vc_col-sm-12">
                                <div class="vc_column-inner">
                                  <div class="wpb_wrapper">
                                    <div class="edukul-content-box clearfix " data-padding="20px 100px 20px 100px"
                                      data-mobipadding="40px 50px 20px 50px" data-margin="" data-mobimargin="">
                                      <div class="inner ctb-1710884629"
                                        style="background-position:left top;background-repeat:no-repeat;" data-background="">
                                        <div class="edukul-content-box clearfix">
                                          <div class="vc-custom-col-inner-spacing clearfix vc-col-inner-spacing-30">
                                            <div class="wpb_row vc_inner vc_row-fluid">
                                              <div class="wpb_column vc_column_container vc_col-sm-4">
                                                <div class="vc_column-inner">
                                                  <div class="wpb_wrapper">
                                                    <div class="wpb_single_image wpb_content_element vc_align_left">

                                                      <figure class="wpb_wrapper vc_figure">
                                                        <div class="vc_single_image-wrapper   vc_box_border_grey">
                                                          <img decoding="async" width="500" height="420"
                                                            src="<?php echo base_url() . $data['principle_image']; ?>"
                                                            class="vc_single_image-img attachment-full"
                                                            alt="<?php echo $alt[array_rand($alt)]; ?>" title="principal"
                                                            sizes="(max-width: 500px) 100vw, 500px" />
                                                        </div>
                                                      </figure>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                              <div class="wpb_column vc_column_container vc_col-sm-8">
                                                                                    <div class="edukul-headings clearfix" data-font=55 data-mfont=36 style="">
                                      <h1 class="heading clearfix" style="color:#122051;font-size:55px;">
                                        From Principal's Desk
                                      </h1>
                                    </div>
                                                <div class="vc_column-inner">
                                                  <div class="wpb_wrapper">
                                                    <div class="wpb_text_column wpb_content_element  fmtxt">
                                                      <div class="wpb_wrapper">
                                                        <?php echo $data['principle_desk']; ?>
                                                      </div>
                                                    </div>

                                                    <div class="edukul-spacer clearfix" data-desktop="30" data-mobi="30"
                                                      data-smobi="30"></div>
                                                    <?php if ($data['principle_desk'] != "" && $data['principle_desk'] != NULL) { ?>
                                                    <div class="wpb_text_column wpb_content_element  sign">
                                                      <div class="wpb_wrapper">
                                                        <p><?php echo $data['principle_signature']; ?></p>
                                                      </div>
                                                    </div>
                                                    <?php } ?>
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
                              </div>
                            </div>
                          </section>
                        </div>
                        <?php }
                                    } ?>
                        <?php if ($branch_slug == 'nallagandla') : ?>
                        <div class="vc-custom-col-spacing clearfix vc-col-spacing-30">
                          <section class="wpb_row vc_row-fluid vc_custom_1680952004653 row-content-position-Default">
                            <div class="edukul-container">
                              <div class="row-inner clearfix">
                                <div class="wpb_column vc_column_container vc_col-sm-12">
                                  <div class="vc_column-inner">
                                    <div class="wpb_wrapper">
                                      <div class="wpb_single_image wpb_content_element vc_align_center">
                                        <figure class="wpb_wrapper vc_figure">
                                          <div class="vc_single_image-wrapper   vc_box_border_grey"><img decoding="async"
                                              width="300" height="100"
                                              src="<?php echo base_url(); ?>uploads/2023/04/Cambridge_Logo.png"
                                              class="vc_single_image-img attachment-medium" alt="Cambridge_Logo" title="Cambridge_Logo" /></div>
                                        </figure>
                                      </div>
                                      <div class="edukul-spacer clearfix" data-desktop="30" data-mobi="30" data-smobi="30"></div>
                                      <div class="wpb_text_column wpb_content_element  edukul-text">
                                        <div class="wpb_wrapper">
                                          <h6 style="text-align: center;"><span>Elevate your child's education to a global standard
                                              at Kidzonia Credence International School. As a beacon of academic brilliance, we
                                              proudly embrace the renowned International Cambridge Curriculum. With a commitment to
                                              grooming students for a life that transcends borders, we hold our Cambridge Assessment
                                              Registration Number: IA285, ensuring the highest standards of international
                                              education.</span>
                                          </h6>
                                        </div>
                                      </div>
                                      <div class="edukul-spacer clearfix" data-desktop="30" data-mobi="30" data-smobi="30"></div>
                                      <div class="wpb_raw_code wpb_content_element wpb_raw_html">
                                        <div class="wpb_wrapper">
                                          <center>
                                            <a href="<?php echo base_url() . "cambridge-assessment"; ?>" target="_blank"
                                              class="edukul-button btn-1584004131 medium no_icon custom custom outline solid custom"
                                              style="border-width:1px;" data-background="#fbbc00" data-text="#122051"
                                              data-border="#fbbc00" data-text-hover="#fbbc00" data-background-hover="#122051"
                                              data-border-hover="#122051">
                                              <span style="font-size: 16px;">Learn More About Cambridge Assessment</span>
                                            </a>
                                          </center>
                                        </div>
                                      </div>
                                      <div class="edukul-spacer clearfix" data-desktop="30" data-mobi="30" data-smobi="30"></div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </section>
                        </div>
                        <?php endif; ?>

                        <div class="vc-custom-col-spacing clearfix vc-col-spacing-30">
                          <section
                            class="wpb_row vc_row-fluid overflow-inherit vc_custom_1693733924460 vc_row-has-fill row-content-position-Default">
                            <div class="edukul-container">
                              <div class="row-inner clearfix">
                                <div class="wpb_column vc_column_container vc_col-sm-12">
                                  <div class="vc_column-inner">
                                    <div class="wpb_wrapper">
                                      <div class="edukul-spacer clearfix" data-desktop="30" data-mobi="30" data-smobi="30"></div>
                                      <div class="edukul-headings clearfix text-center" data-font=55 data-mfont=36>
                                        <h2 class="heading clearfix "
                                          style="color:#ffffff;max-width:800px;margin-left: auto; margin-right: auto;margin-bottom:28px;font-size:55px;">
                                          A School of Experiences
                                        </h2>
                                      </div>
                                      <div class="wpb_text_column wpb_content_element  edukul-text">
                                        <div class="wpb_wrapper">
                                          <p class="text-center text-white">Kidzonia Credence International School (KCIS) is not
                                            just
                                            an educational institution; it's a dynamic think-tank reshaping the landscape of
                                            learning. Our overarching goal is to seamlessly deliver global education within the
                                            Indian context, empowering students to be catalysts for transformative change.
                                            Emphasising experiential learning, we believe exposing children to real-world scenarios
                                            is the most effective method of imparting knowledge. These firsthand experiences create
                                            indelible memories, enhancing information retention and recall.</p>
                                        </div>
                                      </div>
                                      <div class="edukul-spacer clearfix" data-desktop="200" data-mobi="120" data-smobi="120"></div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </section>
                        </div>


                        <div class="vc-custom-col-spacing clearfix vc-col-spacing-30">
                          <section
                            class="wpb_row vc_row-fluid overflow-inherit vc_custom_1574408607622 vc_row-has-fill row-content-position-Default">
                            <div class="edukul-container">
                              <div class="row-inner clearfix">
                                <div class="wpb_column vc_column_container vc_col-sm-12">
                                  <div class="vc_column-inner">
                                    <div class="wpb_wrapper">
                                      <div class="edukul-content-box clearfix">
                                        <div class="vc-custom-col-inner-spacing clearfix vc-col-inner-spacing-30">
                                          <div class="wpb_row vc_inner vc_row-fluid">
                                            <div class="wpb_column vc_column_container vc_col-sm-3">
                                              <div class="vc_column-inner">
                                                <div class="wpb_wrapper">
                                                  <div class="edukul-content-box clearfix " data-padding="20px 0px 10px"
                                                    data-mobipadding="50px 45px 55px" data-margin="-168px 0 0 0"
                                                    data-mobimargin="-50px 0 0 0">
                                                    <div class="inner ctb-1196942495"
                                                      style="background-position:left top;background-repeat:no-repeat;"
                                                      data-background="#fbbc00" data-rounded="26px">
                                                      <div class="wpb_single_image wpb_content_element vc_align_left">
                                                        <figure class="wpb_wrapper vc_figure">
                                                          <a href="<?php echo base_url() . "pre-primary"; ?>" target="_self"
                                                            class="vc_single_image-wrapper   vc_box_border_grey"><img
                                                              fetchpriority="high" decoding="async" width="540" height="540"
                                                              src="<?php echo base_url(); ?>uploads/2023/04/Pre-Primary.png"
                                                              class="vc_single_image-img attachment-full" alt="Pre Primary"
                                                              title="Pre Primary" sizes="(max-width: 540px) 100vw, 540px" /></a>
                                                        </figure>
                                                      </div>
                                                      <div class="edukul-spacer clearfix" data-desktop="10" data-mobi="10"
                                                        data-smobi="10"></div>
                                                      <div class="wpb_text_column wpb_content_element  ase">
                                                        <div class="wpb_wrapper">
                                                          <p style="text-align: center;"><a
                                                              href="<?php echo base_url() . "pre-primary"; ?>" class="ase"><span
                                                                style="color: #fff;">Pre Primary</span></a></p>
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </div>
                                                  <div class="edukul-spacer clearfix" data-desktop="0" data-mobi="80"
                                                    data-smobi="80"></div>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="wpb_column vc_column_container vc_col-sm-3">
                                              <div class="vc_column-inner">
                                                <div class="wpb_wrapper">
                                                  <div class="edukul-content-box clearfix " data-padding="20px 0px 10px"
                                                    data-mobipadding="50px 45px 55px" data-margin="-168px 0 0 0"
                                                    data-mobimargin="-50px 0 0 0">
                                                    <div class="inner ctb-2080033068"
                                                      style="background-position:left top;background-repeat:no-repeat;"
                                                      data-background="#e7e6dd" data-rounded="26px">
                                                      <div class="wpb_single_image wpb_content_element vc_align_left">
                                                        <figure class="wpb_wrapper vc_figure">
                                                          <a href="<?php echo base_url() . "primary"; ?>" target="_self"
                                                            class="vc_single_image-wrapper   vc_box_border_grey"><img
                                                              decoding="async" width="540" height="540"
                                                              src="<?php echo base_url(); ?>uploads/2023/04/Primary-1.png"
                                                              class="vc_single_image-img attachment-full" alt="Primary"
                                                              title="Primary" sizes="(max-width: 540px) 100vw, 540px" /></a>
                                                        </figure>
                                                      </div>
                                                      <div class="edukul-spacer clearfix" data-desktop="10" data-mobi="10"
                                                        data-smobi="10"></div>
                                                      <div class="wpb_text_column wpb_content_element  ase">
                                                        <div class="wpb_wrapper">
                                                          <p style="text-align: center;"><a
                                                              href="<?php echo base_url() . "primary"; ?>" class="ase"><span
                                                                style="color: #122051;">Primary</span></a></p>
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </div>
                                                  <div class="edukul-spacer clearfix" data-desktop="0" data-mobi="80"
                                                    data-smobi="80"></div>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="wpb_column vc_column_container vc_col-sm-3">
                                              <div class="vc_column-inner">
                                                <div class="wpb_wrapper">
                                                  <div class="edukul-content-box clearfix " data-padding="20px 0px 10px"
                                                    data-mobipadding="50px 45px 55px" data-margin="-168px 0 0 0"
                                                    data-mobimargin="-50px 0 0 0">
                                                    <div class="inner ctb-1897733785"
                                                      style="background-position:left top;background-repeat:no-repeat;"
                                                      data-background="#3261ad" data-rounded="26px">
                                                      <div class="wpb_single_image wpb_content_element vc_align_left">
                                                        <figure class="wpb_wrapper vc_figure">
                                                          <a href="<?php echo base_url() . "middle-school"; ?>" target="_self"
                                                            class="vc_single_image-wrapper   vc_box_border_grey"><img loading="lazy"
                                                              decoding="async" width="540" height="540"
                                                              src="<?php echo base_url(); ?>uploads/2023/04/Middle-1.png"
                                                              class="vc_single_image-img attachment-full" alt="Middle"
                                                              title="Middle" sizes="(max-width: 540px) 100vw, 540px" /></a>
                                                        </figure>
                                                      </div>
                                                      <div class="edukul-spacer clearfix" data-desktop="10" data-mobi="10"
                                                        data-smobi="10"></div>
                                                      <div class="wpb_text_column wpb_content_element  ase">
                                                        <div class="wpb_wrapper">
                                                          <p style="text-align: center;"><a
                                                              href="<?php echo base_url() . "middle-school"; ?>" class="ase"><span
                                                                style="color: #fff;">Middle</span></a></p>
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </div>
                                                  <div class="edukul-spacer clearfix" data-desktop="0" data-mobi="80"
                                                    data-smobi="80"></div>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="wpb_column vc_column_container vc_col-sm-3">
                                              <div class="vc_column-inner">
                                                <div class="wpb_wrapper">
                                                  <div class="edukul-content-box clearfix " data-padding="20px 0px 10px"
                                                    data-mobipadding="50px 45px 55px" data-margin="-168px 0 0 0"
                                                    data-mobimargin="-50px 0 0 0">
                                                    <div class="inner ctb-914299560"
                                                      style="background-position:left top;background-repeat:no-repeat;"
                                                      data-background="#fbbc00" data-rounded="26px">
                                                      <div class="wpb_single_image wpb_content_element vc_align_left">
                                                        <figure class="wpb_wrapper vc_figure">
                                                          <a href="<?php echo base_url() . "high-school"; ?>" target="_self"
                                                            class="vc_single_image-wrapper   vc_box_border_grey"><img loading="lazy"
                                                              decoding="async" width="540" height="540"
                                                              src="<?php echo base_url(); ?>uploads/2023/04/web.png"
                                                              class="vc_single_image-img attachment-full"
                                                              alt="Teacher with students" title="Secondary"
                                                              sizes="(max-width: 540px) 100vw, 540px" /></a>
                                                        </figure>
                                                      </div>
                                                      <div class="edukul-spacer clearfix" data-desktop="10" data-mobi="10"
                                                        data-smobi="10"></div>
                                                      <div class="wpb_text_column wpb_content_element  ase">
                                                        <div class="wpb_wrapper">
                                                          <p style="text-align: center;"><a
                                                              href="<?php echo base_url() . "high-school"; ?>" class="ase"><span
                                                                style="color: #fff;">Secondary</span></a></p>
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
                                      <div class="edukul-spacer clearfix" data-desktop="30" data-mobi="30" data-smobi="45"></div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </section>
                        </div>

                        
                        <?php if(!empty($why_choose_us)): ?>
                        <div class="vc-custom-col-spacing clearfix vc-col-spacing-30">
                            <section class="wpb_row vc_row-fluid row-content-position-Default">
                                <div class="edukul-container">
                                    <div class="row-inner clearfix">
                                        <div class="wpb_column vc_column_container vc_col-sm-12">
                                            <div class="vc_column-inner">
                                                <div class="wpb_wrapper">
                                                    <div class="seo-content-section mb-5 mt-4">
                                                        <h2 class="heading clearfix text-center mb-4" style="color: #122051; font-weight: bold;">Why Choose Kidzonia Credence International School?</h2>
                                                        <div class="content-text" style="font-size: 16px; line-height: 1.8; color: #555;">
                                                            <?php echo $why_choose_us; ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                        <?php endif; ?>

                        <div class="vc-custom-col-spacing clearfix vc-col-spacing-30">
                          <section class="wpb_row vc_row-fluid row-content-position-Default">
                            <div class="edukul-container">
                              <div class="row-inner clearfix">
                                <div class="wpb_column vc_column_container vc_col-sm-12">
                                  <div class="vc_column-inner">
                                    <div class="wpb_wrapper">
                                      <div class="edukul-spacer clearfix" data-desktop="30" data-mobi="30" data-smobi="30"></div>
                                      <div class="edukul-content-box clearfix">
                                        <div class="vc-custom-col-inner-spacing clearfix vc-col-inner-spacing-80">
                                        <div class="wpb_row vc_inner vc_row-fluid d-flex align-items-center">
                                            <div class="wpb_column vc_column_container vc_col-md-6 vc_col-sm-12">
                                              <div class="vc_column-inner">
                                                <div class="wpb_wrapper">
                                                  <div class="wpb_single_image wpb_content_element vc_align_left">
                                                    <figure class="wpb_wrapper vc_figure">
                                                      <div class="vc_single_image-wrapper   vc_box_border_grey"><img loading="lazy"
                                                          decoding="async" width="598" height="683"
                                                          src="<?php echo base_url(); ?>uploads/2023/04/Section1_Home_ExploreCurriculum.png"
                                                          class="vc_single_image-img attachment-full" alt="CBSE curriculum"
                                                          title="Section1_Home_ExploreCurriculum"
                                                          sizes="(max-width: 598px) 100vw, 598px" /></div>
                                                    </figure>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="wpb_column vc_column_container vc_col-md-6 vc_col-sm-12">
                                              <div class="vc_column-inner">
                                                <div class="wpb_wrapper">
                                                  <div class="edukul-headings clearfix " data-font=55 data-mfont=36>
                                                    <h2 class="heading clearfix text-center mb-4"
                                                      style="color:#122051;line-height:47px;font-size:55px;">
                                                      Explore
                                                      Curriculum
                                                    </h2>
                                                  </div>
                                                  <div class="wpb_text_column wpb_content_element  exptxt">
                                                    <div class="wpb_wrapper">
                                                      <p class="text-center">Step into the vibrant tapestry of the Kidzonia
                                                        Explore Curriculum, meticulously woven with real-world threads and thematic
                                                        elements. We transcend the traditional approach, understanding that subjects
                                                        come alive not in isolation but in meaningful conversation. Our curriculum
                                                        envisions knowledge as a flourishing garden, where context serves as fertile
                                                        soil, personal connections act as nourishing rain, and active engagement
                                                        acts as the sun that makes it all bloom.</p><br>
                                                      <p class="text-center">Join Kidzonia Credence International School - A
                                                        Montessori School in Hyderabad, and experience the best of international
                                                        education. As the top school near you, we nurture young minds with a
                                                        curriculum that goes beyond boundaries, fostering global perspectives and
                                                        preparing them for a future without limits.</p>
                                                    </div>
                                                  </div>
                                                  <div class="edukul-spacer clearfix" data-desktop="57" data-mobi="30"
                                                    data-smobi="30"></div>
                                                  <div class="button-wrap icon-right"
                                                    style="display: flex;margin: 0 auto;width: max-content;"><a
                                                      href="<?php echo base_url() . 'explore-curriculum'; ?>" target="_self"
                                                      class="edukul-button btn-1016583015 medium icon_style_1 custom custom"
                                                      style="border-radius:5px;" data-background="#4582ff" data-text="#ffffff">
                                                      <span style="font-size: 16px;">Explore more about EXPLORE! </span>
                                                    </a>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="edukul-spacer clearfix" data-desktop="30" data-mobi="30" data-smobi="30"></div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </section>
                        </div>

                        <div class="vc-custom-col-spacing clearfix vc-col-spacing-30">
                          <section
                            class="wpb_row vc_row-fluid bgyellow vc_custom_1693738967860 vc_row-has-fill row-content-position-Default">
                            <div class="edukul-container">
                              <div class="row-inner clearfix">
                                <div class="wpb_column vc_column_container vc_col-sm-12">
                                  <div class="vc_column-inner">
                                    <div class="wpb_wrapper">
                                      <div class="edukul-spacer clearfix" data-desktop="30" data-mobi="30" data-smobi="30"></div>
                                      <div class="edukul-content-box clearfix">
                                        <div class="vc-custom-col-inner-spacing clearfix vc-col-inner-spacing-30">
                                          <div class="wpb_row vc_inner vc_row-fluid">
                                            <div class="wpb_column vc_column_container vc_col-sm-3">
                                              <div class="vc_column-inner">
                                                <div class="wpb_wrapper">
                                                  <div class="edukul-counter clearfix style-1 text-center" data-font=55>
                                                    <div class="inner">
                                                      <div class="icon-wrap"></div>
                                                      <div class="text-wrap">
                                                        <h3 class="number-wrap heading"
                                                          style="color:#122051;margin-top:10px;font-size:55px;"><span
                                                            class="prefix "></span><span class="number " data-speed="5000"
                                                            data-from="0" data-to="2000"> 2000</span><span class="suffix "
                                                            style="color:#122051;">+</span></h3>
                                                        <div class="title" style="font-weight:800;color:#ffffff;font-size:22px;">
                                                          NURTURED CHILDREN
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </div>
                                                  <div class="edukul-spacer clearfix" data-desktop="0" data-mobi="30"
                                                    data-smobi="30"></div>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="wpb_column vc_column_container vc_col-sm-3">
                                              <div class="vc_column-inner">
                                                <div class="wpb_wrapper">
                                                  <div class="edukul-counter clearfix style-1 text-center" data-font=55>
                                                    <div class="inner">
                                                      <div class="icon-wrap"></div>
                                                      <div class="text-wrap">
                                                        <h3 class="number-wrap heading"
                                                          style="color:#122051;margin-top:10px;font-size:55px;"><span
                                                            class="prefix "></span><span class="number " data-speed="5000"
                                                            data-from="0" data-to="10"> 10</span><span class="suffix "
                                                            style="color:#122051;">+</span></h3>
                                                        <div class="title" style="font-weight:800;color:#ffffff;font-size:22px;">
                                                          YEARS IN EDUCATION
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </div>
                                                  <div class="edukul-spacer clearfix" data-desktop="0" data-mobi="30"
                                                    data-smobi="30"></div>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="wpb_column vc_column_container vc_col-sm-3">
                                              <div class="vc_column-inner">
                                                <div class="wpb_wrapper">
                                                  <div class="edukul-counter clearfix style-1 text-center" data-font=55>
                                                    <div class="inner">
                                                      <div class="icon-wrap"></div>
                                                      <div class="text-wrap">
                                                        <h3 class="number-wrap heading"
                                                          style="color:#122051;margin-top:10px;font-size:55px;"><span
                                                            class="prefix "></span><span class="number " data-speed="5000"
                                                            data-from="0" data-to="12"> 12</span><span class="suffix "
                                                            style="color:#122051;">+</span></h3>
                                                        <div class="title" style="font-weight:800;color:#ffffff;font-size:22px;">
                                                          LEARNING ACTIVITIES
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </div>
                                                  <div class="edukul-spacer clearfix" data-desktop="0" data-mobi="30"
                                                    data-smobi="30"></div>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="wpb_column vc_column_container vc_col-sm-3">
                                              <div class="vc_column-inner">
                                                <div class="wpb_wrapper">
                                                  <div class="edukul-counter clearfix style-1 text-center" data-font=55>
                                                    <div class="inner">
                                                      <div class="icon-wrap"></div>
                                                      <div class="text-wrap">
                                                        <h3 class="number-wrap heading"
                                                          style="color:#122051;margin-top:10px;font-size:55px;"><span
                                                            class="prefix "></span><span class="number " data-speed="5000"
                                                            data-from="0" data-to="6"> 6</span><span class="suffix "
                                                            style="color:#122051;">+</span></h3>
                                                        <div class="title" style="font-weight:800;color:#ffffff;font-size:22px;">
                                                          AWARDS &amp; ACCOLADES
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
                                      <div class="edukul-spacer clearfix" data-desktop="30" data-mobi="30" data-smobi="30"></div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </section>
                        </div>

                        <?php if ($branch_slug == 'nallagandla') : ?>
                        <div class="vc-custom-col-spacing clearfix vc-col-spacing-30">
                          <section class="wpb_row vc_row-fluid row-content-position-Default">
                            <div class="edukul-container">
                              <div class="row-inner clearfix">
                                <div class="wpb_column vc_column_container vc_col-sm-12">
                                  <div class="vc_column-inner">
                                    <div class="wpb_wrapper">
                                      <div class="edukul-spacer clearfix" data-desktop="30" data-mobi="30" data-smobi="30"></div>
                                      <div class="edukul-headings clearfix text-center" data-font=55 data-mfont=36>
                                        <h2 class="heading clearfix "
                                          style="color:#122051;max-width:550px;margin-left: auto; margin-right: auto;font-size:55px;">
                                          Young Achievers
                                        </h2>
                                      </div>
                                      <div class="edukul-spacer clearfix" data-desktop="30" data-mobi="30" data-smobi="30"></div>
                                      <div class="edukul-carousel-box  has-arrows arrow- arrow-bottom arrow50" data-auto="true"
                                        data-loop="false" data-gap="30" data-column="4" data-column2="2" data-column3="1">
                                        <div class="owl-carousel owl-theme">

                                          <?php foreach ($achievers as $achieve) { ?>
                                          <div class="edukul-image-box clearfix style-1">
                                            <div class="item">
                                              <div class="inner">
                                                <div class="thumb"><img loading="lazy" decoding="async" width="540" height="540"
                                                    src="<?php echo base_url() . $achieve['image']; ?>"
                                                    class="attachment-full size-full" alt="<?php echo $achieve['name']; ?>"
                                                    sizes="(max-width: 540px) 100vw, 540px" /></div>
                                                <div class="text-wrap ">
                                                  <div class="text-inner">
                                                    <h4 class="title">
                                                      <?php echo $achieve['name']; ?>
                                                    </h4>
                                                    <div class="desc"><?php echo $achieve['achievement']; ?></div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                          <?php } ?>

                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </section>
                        </div>
                        <?php endif; ?>
                        <?php if ($branch_slug == 'ameenpur') : ?>
                        <div class="vc-custom-col-spacing clearfix vc-col-spacing-30">
                          <section class="wpb_row vc_row-fluid row-content-position-Default">
                            <div class="edukul-container">
                              <div class="row-inner clearfix">
                                <div class="wpb_column vc_column_container vc_col-sm-12">
                                  <div class="vc_column-inner">
                                    <div class="wpb_wrapper">
                                      <div class="edukul-spacer clearfix" data-desktop="30" data-mobi="30" data-smobi="30"></div>
                                      <div class="edukul-headings clearfix text-center" data-font=55 data-mfont=36>
                                        <h2 class="heading clearfix "
                                          style="color:#122051;max-width:550px;margin-left: auto; margin-right: auto;font-size:55px;">
                                          Young Achievers
                                        </h2>
                                      </div>
                                      <div class="edukul-spacer clearfix" data-desktop="30" data-mobi="30" data-smobi="30"></div>
                                      <div class="edukul-carousel-box  has-arrows arrow- arrow-bottom arrow50" data-auto="true"
                                        data-loop="false" data-gap="30" data-column="4" data-column2="2" data-column3="1">
                                        <div class="owl-carousel owl-theme">
                                          <div class="edukul-image-box clearfix style-1">
                                            <div class="item">
                                              <div class="inner">
                                                <div class="thumb"><img loading="lazy" decoding="async" width="540" height="540"
                                                    src="<?php echo base_url() ?>assets/images/ameenpur-achievers/1.jpeg"
                                                    class="attachment-full size-full sports-img" alt="Best International School" />
                                                </div>
                                                <div class="text-wrap ">
                                                  <div class="text-inner">
                                                    <h4 class="title">
                                                      Sports Tournament (24-25)
                                                    </h4>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="edukul-image-box clearfix style-1">
                                            <div class="item">
                                              <div class="inner">
                                                <div class="thumb"><img loading="lazy" decoding="async" width="540" height="540"
                                                    src="<?php echo base_url() ?>assets/images/ameenpur-achievers/2.jpeg"
                                                    class="attachment-full size-full sports-img"
                                                    alt="Cambridge Internatioanl School" /></div>
                                                <div class="text-wrap ">
                                                  <div class="text-inner">
                                                    <h4 class="title">
                                                      Sports Tournament (24-25)
                                                    </h4>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="edukul-image-box clearfix style-1">
                                            <div class="item">
                                              <div class="inner">
                                                <div class="thumb"><img loading="lazy" decoding="async" width="540" height="540"
                                                    src="<?php echo base_url() ?>assets/images/ameenpur-achievers/3.jpeg"
                                                    class="attachment-full size-full sports-img" alt="Cambridge Near Me" /></div>
                                                <div class="text-wrap ">
                                                  <div class="text-inner">
                                                    <h4 class="title">
                                                      Sports Tournament (24-25)
                                                    </h4>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="edukul-image-box clearfix style-1">
                                            <div class="item">
                                              <div class="inner">
                                                <div class="thumb"><img loading="lazy" decoding="async" width="540" height="540"
                                                    src="<?php echo base_url() ?>assets/images/ameenpur-achievers/4.jpeg"
                                                    class="attachment-full size-full sports-img" alt="CBSE Near Me" /></div>
                                                <div class="text-wrap ">
                                                  <div class="text-inner">
                                                    <h4 class="title">
                                                      Sports Tournament (24-25)
                                                    </h4>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="edukul-image-box clearfix style-1">
                                            <div class="item">
                                              <div class="inner">
                                                <div class="thumb"><img loading="lazy" decoding="async" width="540" height="540"
                                                    src="<?php echo base_url() ?>assets/images/ameenpur-achievers/5.jpeg"
                                                    class="attachment-full size-full sports-img" alt="CBSE" /></div>
                                                <div class="text-wrap ">
                                                  <div class="text-inner">
                                                    <h4 class="title">
                                                      Sports Tournament (24-25)
                                                    </h4>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="edukul-image-box clearfix style-1">
                                            <div class="item">
                                              <div class="inner">
                                                <div class="thumb"><img loading="lazy" decoding="async" width="540" height="540"
                                                    src="<?php echo base_url() ?>assets/images/ameenpur-achievers/6.jpeg"
                                                    class="attachment-full size-full sports-img" alt="CAMBRIDGE NEAR ME" /></div>
                                                <div class="text-wrap ">
                                                  <div class="text-inner">
                                                    <h4 class="title">
                                                      SOF Rankers
                                                    </h4>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="edukul-image-box clearfix style-1">
                                            <div class="item">
                                              <div class="inner">
                                                <div class="thumb"><img loading="lazy" decoding="async" width="540" height="540"
                                                    src="<?php echo base_url() ?>assets/images/ameenpur-achievers/7.jpeg"
                                                    class="attachment-full size-full sports-img" alt="CBSE NEAR ME" /></div>
                                                <div class="text-wrap ">
                                                  <div class="text-inner">
                                                    <h4 class="title">
                                                      SOF Rankers
                                                    </h4>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="edukul-image-box clearfix style-1">
                                            <div class="item">
                                              <div class="inner">
                                                <div class="thumb"><img loading="lazy" decoding="async" width="540" height="540"
                                                    src="<?php echo base_url() ?>assets/images/ameenpur-achievers/8.jpeg"
                                                    class="attachment-full size-full sports-img" alt="HIGH SCHOOL" /></div>
                                                <div class="text-wrap ">
                                                  <div class="text-inner">
                                                    <h4 class="title">
                                                      SOF Rankers
                                                    </h4>
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
                              </div>
                            </div>
                          </section>
                        </div>
                        <?php endif; ?>

                        <?php if ($branch_slug == 'nallagandla') : ?>
                        <!-- <div class="vc-custom-col-spacing clearfix vc-col-spacing-30">
                          <section class="wpb_row vc_row-fluid row-content-position-Default">
                            <div class="edukul-container">
                              <div class="row-inner clearfix">
                                <div class="wpb_column vc_column_container vc_col-sm-12">
                                  <div class="vc_column-inner">
                                    <div class="wpb_wrapper">
                                      <div class="edukul-spacer clearfix" data-desktop="30" data-mobi="30" data-smobi="30"></div>
                                      <div class="edukul-content-box clearfix">
                                        <div class="vc-custom-col-inner-spacing clearfix vc-col-inner-spacing-80">
                                          <div class="wpb_row vc_inner vc_row-fluid d-flex align-items-center">
                                            <div class="wpb_column vc_column_container vc_col-md-6 vc_col-sm-12">
                                              <div class="vc_column-inner">
                                                <div class="wpb_wrapper">
                                                  <div class="wpb_single_image wpb_content_element vc_align_left">
                                                    <figure class="wpb_wrapper vc_figure">
                                                      <div class="vc_single_image-wrapper   vc_box_border_grey"><img loading="lazy"
                                                          decoding="async" width="598" height="598"
                                                          src="<?php echo base_url(); ?>assets/images/rohit.png"
                                                          class="vc_single_image-img attachment-full" alt="Section1_Home_ExploreCurriculum"
                                                          title="Section1_Home_ExploreCurriculum"
                                                          sizes="(max-width: 598px) 100vw, 598px" /></div>
                                                    </figure>
                                                  </div>
                                                  <div class="edukul-spacer clearfix" data-desktop="0" data-mobi="40"
                                                    data-smobi="40"></div>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="wpb_column vc_column_container vc_col-md-6 vc_col-sm-12">
                                              <div class="vc_column-inner">
                                                <div class="wpb_wrapper">
                                                  <div class="edukul-headings clearfix " data-font=55 data-mfont=36>
                                                    <h2 class="heading clearfix text-center"
                                                      style="color:#122051;line-height:47px;margin-bottom:28px;font-size:55px;">
                                                      CricKingdom At The KCIS Nallagandla
                                                    </h2>

                                                    <h4 class="text-center">Discover Cricket Excellence at CricKingdom by Rohit
                                                      Sharma</h4>
                                                  </div>
                                                  <div class="wpb_text_column wpb_content_element  exptxt">
                                                    <div class="wpb_wrapper">
                                                      <p style="text-align: center">Step onto the pitch where champions are made.
                                                        CricKingdom by Rohit Sharma, hosted at The
                                                        KCIS School Nallagandla, offers an unparalleled cricket training experience.
                                                        Under the guidance
                                                        of international cricket professionals and using the finest facilities, our
                                                        program is tailored to
                                                        propel aspiring cricketers into the leagues of the elites. Whether you're
                                                        beginning your journey or
                                                        honing advanced skills, CricKingdom is your gateway to the global cricket
                                                        arena.</p>
                                                    </div>
                                                  </div>
                                                  <div class="edukul-spacer clearfix" data-desktop="57" data-mobi="30"
                                                    data-smobi="30"></div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="edukul-spacer clearfix" data-desktop="30" data-mobi="30" data-smobi="60"></div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </section>
                        </div> -->
                        <?php endif; ?>

                        <?php if (!empty($campus_images) || !empty($gallery_images)): ?>
                        <div class="vc-custom-col-spacing clearfix vc-col-spacing-30">
                          <section class="wpb-content-wrapper">
                            <div class="bt-wrapper my-5">
                              <?php if (!empty($campus_images)) { ?>
                              <div class="container">
                                <h2 class="text-center h2-size">Campus Photos</h2>
                                <div class="row">
                                  <?php foreach ($campus_images as $camp) { ?>
                                  <div class="col-xl-3 col-md-6 col-12 mb-4">
                                    <div class="card custom-card">
                                      <div class="img-container">
                                        <a href="<?php echo base_url() . $camp['image']; ?>" data-fancybox="gallery"
                                          class="fancybox">
                                          <img src="<?php echo base_url() . $camp['image']; ?>"
                                            alt="<?php echo $alt[array_rand($alt)]; ?>" />
                                        </a>
                                      </div>
                                    </div>
                                  </div>
                                  <?php } ?>
                                </div>
                              </div>
                              <?php } ?>

                              <?php if (!empty($gallery_images)) { ?>
                              <div class="container">
                                <div class="edukul-spacer clearfix" data-desktop="30" data-mobi="30" data-smobi="60"></div>
                                <h2 class="text-center h2-size">Gallery Images</h2>
                                <div class="edukul-carousel-box has-arrows arrow-bottom arrow50" data-auto="true" data-loop="false"
                                  data-gap="30" data-column="4" data-column2="2" data-column3="1">
                                  <div class="owl-carousel owl-theme">
                                    <?php
                                                                $j = 1;
                                                                foreach ($gallery_images as $gal) { ?>
                                    <div class="edukul-image-box clearfix style-1">
                                      <div class="item">
                                        <div class="inner">
                                          <div class="thumb">
                                            <?php
                                                                                    $i = 1;
                                                                                    foreach ($gal['images'] as $img) {
                                                                                        if ($i == 1) { ?>
                                            <a href="<?php echo base_url() . $img['image']; ?>"
                                              data-fancybox="gallery-<?php echo $j; ?>" class="fancybox">
                                              <img src="<?php echo base_url() . $img['image']; ?>" class="attachment-full size-full"
                                                alt="<?php echo $alt[array_rand($alt)]; ?>" />
                                            </a>
                                            <?php } else { ?>
                                            <a href="<?php echo base_url() . $img['image']; ?>"
                                              data-fancybox="gallery-<?php echo $j; ?>" class="fancybox">
                                              <img src="<?php echo base_url() . $img['image']; ?>" class="hidden"
                                                alt="<?php echo $alt[array_rand($alt)]; ?>" />
                                            </a>
                                            <?php }
                                                                                        $i++;
                                                                                    } ?>
                                          </div>
                                          <div class="text-wrap">
                                            <div class="text-inner">
                                              <h4 class="title text-center">
                                                <?php echo $gal['title']; ?>
                                              </h4>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <?php $j++;
                                                                } ?>
                                  </div>
                                </div>
                              </div>
                              <?php } ?>
                            </div>
                          </section>
                        </div>
                        <?php endif; ?>

                        <?php if(!empty($awards)): ?>
                        <div class="vc-custom-col-spacing clearfix vc-col-spacing-30">
                          <section class="wpb_row vc_row-fluid vc_custom_1679472253883 vc_row-has-fill row-content-position-Default"
                            style="background-image: url(<?php echo base_url(); ?>uploads/2023/03/awards_bga052.jpg?id=13409) !important;background-repeat: no-repeat;background-size: cover;
                							background-position: center;">
                            <div class="edukul-container">
                              <div class="row-inner clearfix">
                                <div class="wpb_column vc_column_container vc_col-sm-12">
                                  <div class="vc_column-inner">
                                    <div class="wpb_wrapper">
                                      <div class="edukul-spacer clearfix" data-desktop="30" data-mobi="30" data-smobi="60"></div>
                                      <div class="edukul-headings clearfix text-center" data-font=55 data-mfont=36 style="">
                                        <h2 class="heading clearfix "
                                          style="color:#ffffff;max-width:850px;margin-left: auto; margin-right: auto;font-size:55px;">
                                          Awards & Accolades
                                        </h2>
                                      </div>
                                      <div class="edukul-spacer clearfix" data-desktop="30" data-mobi="30" data-smobi="60"></div>
                                      <div class="edukul-carousel-box has-arrows arrow-bottom arrow50" data-auto="false" data-loop="false" data-gap="30" data-column="3" data-column2="2"
                                        data-column3="1">
                                        <div class="owl-carousel owl-theme">
                                          <?php foreach ($awards as $award) { ?>
                                          <div class="edukul-content-box clearfix mb-5" data-padding="32px 45px 32px 45px"
                                            data-mobipadding="32px 45px 32px 45px" data-margin="" data-mobimargin="">
                                            <div class="inner ctb-371979939 p-3"
                                              style="background-position:left top;background-repeat:no-repeat; min-height:400px; max-height: 400px;"
                                              data-background="#1c2156" data-translatey="-5">
                                              <div class="edukul-icon-box clearfix icon-top align-left  simple" style="">
                                                <div class="wrap-inner" style="position: relative;">
                                                  <div class="edukul-icon icon-1375251588 custom custom" data-icon="#fbbc00"
                                                    data-background="">
                                                    <img src="<?php echo base_url() . $award['image']; ?>"
                                                      alt="<?php echo $alt[array_rand($alt)]; ?>">
                                                  </div>
                                                  <h3 class="heading  white"
                                                    style="color:#ffffff;font-size:18px;line-height:26px;margin-top:26px;margin-bottom:13px;">
                                                    <span><?php echo $award['name']; ?></span>
                                                  </h3>
                                                  <div class="desc" style="color:#ffffff;font-size:14px;line-height:30px;">
                                                    <p class="text-white"><?php echo $award['description']; ?></p>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                          <?php } ?>
                                        </div>
                                      </div>
                                      <div class="edukul-spacer clearfix" data-desktop="30" data-mobi="30" data-smobi="30"></div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </section>
                        </div>
                        <?php endif; ?>

                        <?php if(!empty($prnt_testimonial)): ?>
                        <div class="vc-custom-col-spacing clearfix vc-col-spacing-30 vc_custom_1682563920733">
                          <section
                            class="wpb_row vc_row-fluid vc_custom_1679040851888 vc_row-has-fill row-content-position-Default">
                            <div class="edukul-container">
                              <div class="row-inner clearfix">
                                <div class="wpb_column vc_column_container vc_col-sm-12">
                                  <div class="vc_column-inner">
                                    <div class="wpb_wrapper">
                                      <div class="edukul-spacer clearfix" data-desktop="30" data-mobi="30" data-smobi="60"></div>
                                      <div class="edukul-headings clearfix text-center" data-font=55 data-mfont=36 style="">
                                        <h2 class="heading clearfix "
                                          style="color:#122051;max-width:600px;margin-left: auto; margin-right: auto;font-size:55px;">
                                          Parents' Testimonials
                                        </h2>
                                      </div>
                                      <div class="edukul-spacer clearfix" data-desktop="30" data-mobi="30" data-smobi="30"></div>
                                      <div class="edukul-carousel-box  has-arrows arrow- arrow-bottom arrow50" data-auto="false"
                                        data-loop="false" data-gap="30" data-column="3" data-column2="2" data-column3="1">
                                        <div class="owl-carousel owl-theme">
                                          <?php foreach ($prnt_testimonial as $testi) { 
                                            if (!empty($testi['url']) && !empty($testi['image'])) { ?>
                                            <div class="edukul-content-box clearfix " data-padding="" data-mobipadding="" data-margin="" data-mobimargin="" data-width="357">
                                              <div class="inner p-0" style="background-image:url(<?php echo base_url() . $testi['image']; ?>); background-position:center center; background-repeat:no-repeat; background-size:cover; height:200px; border-radius:12px; overflow:hidden;">
                                                <div class="edukul-video-icon clearfix white text-center small" style="margin-top: 50px;">
                                                  <a class="icon-wrap popup-video" href="<?php echo $testi['url']; ?>">
                                                    play<span class="circle"></span>
                                                  </a>
                                                </div>
                                              </div>
                                            </div>
                                            <?php } else { ?>
                                            <div class="edukul-testimonials clearfix style-1">
                                              <div class="item">
                                                <div class="inner">
                                                  <div class="icon-wrap"></div>
                                                  <div class="text-wrap">
                                                    <div class="text"><?php echo $testi['description']; ?></div>
                                                    <h4 class="name"><?php echo $testi['name']; ?></h4>
                                                    <div class="position"><?php echo $testi['designation']; ?></div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                            <?php } 
                                          } ?>
                                        </div>
                                      </div>
                                      <div class="edukul-spacer clearfix" data-desktop="30" data-mobi="30" data-smobi="30"></div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </section>
                        </div>
                        <?php endif; ?>

                        <?php if(!empty($upcoming_events)): ?>
                        <div class="vc-custom-col-spacing clearfix vc-col-spacing-30">
                          <section class="wpb_row vc_row-fluid row-content-position-Default" id="events">
                            <div class="edukul-container">
                              <div class="row-inner clearfix">
                                <div class="wpb_column vc_column_container vc_col-sm-12">
                                  <div class="vc_column-inner">
                                    <div class="wpb_wrapper">
                                      <div class="edukul-spacer clearfix" data-desktop="30" data-mobi="30" data-smobi="60"></div>
                                      <div class="edukul-headings clearfix text-center" data-font=55 data-mfont=36 style="">
                                        <h2 class="heading clearfix "
                                          style="color:#122051;max-width:600px;margin-left: auto; margin-right: auto;font-size:55px;">
                                          Upcoming Events
                                        </h2>
                                      </div>
                                      <div class="edukul-spacer clearfix" data-desktop="30" data-mobi="30" data-smobi="30"></div>
                                      <div class="edukul-carousel-box  has-arrows arrow- arrow-bottom arrow50" data-auto="false"
                                        data-loop="false" data-gap="30" data-column="3" data-column2="2" data-column3="1">
                                        <div class="owl-carousel owl-theme">
                                          <?php foreach ($upcoming_events as $event) { ?>
                                          <div class="edukul-event-box clearfix style-1">
                                            <div class="item">
                                              <div class="inner">
                                                <div class="thumb">
                                                  <img loading="lazy" decoding="async" width="540" height="400"
                                                    src="<?php echo base_url() . $event['image']; ?>"
                                                    class="attachment-full size-full" alt="<?php echo $event['title']; ?>"
                                                    sizes="(max-width: 540px) 100vw, 540px" />
                                                  <div class="date"><span
                                                      class="day"><?php echo date('d', strtotime($event['date'])); ?></span><span
                                                      class="month"><?php echo date('M', strtotime($event['date'])); ?></span>
                                                  </div>
                                                </div>
                                                <div class="text-wrap">
                                                  <h4 class="title"><a
                                                      href="<?php echo base_url() . 'event-details/' . $event['slug']; ?>"><?php echo $event['title']; ?></a>
                                                  </h4>
                                                  <div class="meta-wrap"><span class="meta time"><i
                                                        class="far fa-clock"></i><?php echo $event['time']; ?></span><span
                                                      class="meta location"><i
                                                        class="fas fa-map-marker-alt"></i><?php echo $event['location']; ?></span>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                          <?php } ?>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </section>
                        </div>
                        <?php endif; ?>

                        <?php if(!empty($data['location_url'])): ?>
                        <div class="vc-custom-col-spacing clearfix vc-col-spacing-30">
                          <section class="wpb_row vc_row-fluid row-content-position-Default">
                            <div class="row-inner clearfix">
                              <div class="wpb_column vc_column_container vc_col-sm-12">
                                <div class="vc_column-inner">
                                  <div class="wpb_wrapper">
                                    <div class="edukul-spacer clearfix" data-desktop="30" data-mobi="30" data-smobi="60"></div>
                                    <div class="wpb_raw_code wpb_content_element wpb_raw_html">
                                      <div class="wpb_wrapper">
                                        <iframe
                                          src="<?php echo $data['location_url']; ?>"
                                          width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                          referrerpolicy="no-referrer-when-downgrade"></iframe>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </section>
                        </div>
                        <?php endif; ?>

                        <?php if(!empty($faqs)): ?>
                        <div class="vc-custom-col-spacing clearfix vc-col-spacing-30">
                            <section class="wpb_row vc_row-fluid row-content-position-Default mt-5 mb-5">
                                <div class="edukul-container">
                                    <div class="row-inner clearfix">
                                        <div class="wpb_column vc_column_container vc_col-sm-12">
                                            <div class="vc_column-inner">
                                                <div class="wpb_wrapper">
                                                    <div class="faq-section mb-5">
                                                        <h2 class="heading clearfix text-center mb-4" style="color: #122051; font-weight: bold;">Frequently Asked Questions</h2>
                                                        <div class="accordion custom-faq-accordion" id="accordionFaq">
                                                            <?php foreach($faqs as $index => $faq): ?>
                                                            <div class="accordion-item mb-3 border-0 shadow-sm overflow-hidden" style="border-radius: 12px;">
                                                                <h2 class="accordion-header" id="heading<?php echo $index; ?>">
                                                                    <button class="accordion-button <?php echo $index == 0 ? '' : 'collapsed'; ?> fw-bold py-4 px-4" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $index; ?>" aria-expanded="<?php echo $index == 0 ? 'true' : 'false'; ?>" aria-controls="collapse<?php echo $index; ?>" style="background-color: #f8f9fa; color: #122051; box-shadow: none;">
                                                                        <span class="me-3" style="color: #fbbc00;">Q.</span> <?php echo $faq['question']; ?>
                                                                    </button>
                                                                </h2>
                                                                <div id="collapse<?php echo $index; ?>" class="accordion-collapse collapse <?php echo $index == 0 ? 'show' : ''; ?>" aria-labelledby="heading<?php echo $index; ?>" data-bs-parent="#accordionFaq">
                                                                    <div class="accordion-body py-4 px-4" style="background-color: #ffffff; color: #666; font-size: 15px; line-height: 1.7;">
                                                                        <?php echo $faq['answer']; ?>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <?php endforeach; ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>

                        <!-- Schema Markup -->
                        <script type="application/ld+json">
                        {
                          "@context": "https://schema.org",
                          "@type": "School",
                          "name": "<?php echo addslashes($h1_title); ?>",
                          "description": "<?php echo addslashes($meta_description); ?>",
                          "url": "<?php echo current_url(); ?>",
                          "image": "<?php echo base_url() . $data['poster']; ?>",
                          "address": {
                            "@type": "PostalAddress",
                            "streetAddress": "<?php echo addslashes($data['address']); ?>",
                            "addressLocality": "Hyderabad",
                            "addressRegion": "Telangana",
                            "addressCountry": "IN"
                          }
                        }
                        </script>

                        <!-- JSON-LD FAQ Schema -->
                        <script type="application/ld+json">
                        {
                          "@context": "https://schema.org",
                          "@type": "FAQPage",
                          "mainEntity": <?php
                          $schema_faqs = [];
                          foreach ($faqs as $faq) {
                            $schema_faqs[] = [
                              "@type" => "Question",
                              "name" => $faq['question'],
                              "acceptedAnswer" => [
                                "@type" => "Answer",
                                "text" => strip_tags($faq['answer'])
                              ]
                            ];
                          }
                          echo json_encode($schema_faqs, JSON_UNESCAPED_SLASHES);
                          ?>
                        }
                        </script>
                        <?php endif; ?>


                        <div class="vc-custom-col-spacing clearfix vc-col-spacing-30">
                            <section class="wpb_row vc_row-fluid vc_custom_1677943833177 vc_row-has-fill row-content-position-Default">
                                <div class="edukul-container">
                                    <div class="row-inner clearfix">
                                        <div class="wpb_column vc_column_container vc_col-sm-12">
                                            <div class="vc_column-inner">
                                                <div class="wpb_wrapper">
                                                    <div class="wpb_text_column wpb_content_element mf">
                                                        <div class="wpb_wrapper">
                                                            <h3 class="mf" style="text-align: center;">Make KCIS as your Child's Learning Partner. For admission, enquiries click below.</h3>
                                                        </div>
                                                    </div>
                                                    <div class="edukul-spacer clearfix" data-desktop="30" data-mobi="30" data-smobi="30"></div>
                                                    <div class="wpb_raw_code wpb_content_element wpb_raw_html">
                                                        <div class="wpb_wrapper">
                                                            <center>
                                                                <a href="<?php echo base_url();?>admission-enquiry" class="edukul-button medium outline solid custom" style="border-width:1px;" data-background="#fbbc00" data-text="#122051" data-border="#fbbc00" data-text-hover="#fbbc00" data-background-hover="#122051" data-border-hover="#122051">
                                                                    <span>Enquire Now</span>
                                                                </a>
                                                            </center>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>

                        <!-- OUR NEWSLETTER Section -->
                        <div class="vc-custom-col-spacing clearfix vc-col-spacing-30">
                          <section class="wpb_row vc_row-fluid vc_custom_newsletter vc_row-has-fill row-content-position-Default" style="background: #fdfbf7; padding: 40px 0; border-radius: 12px; margin-bottom: 30px; margin-top: 30px;">
                            <div class="edukul-container">
                              <div class="row align-items-center text-center text-md-start">
                                <div class="col-md-8 mb-3 mb-md-0" style="padding-left: 30px;">
                                  <h3 style="color: #122051; font-weight: 700; margin-bottom: 8px;">OUR NEWSLETTER</h3>
                                  <p style="color: #666; margin: 0; font-size: 15px;">Read our latest monthly publications, events, and school updates in PDF format<?= !empty($data['name']) ? ' for ' . html_escape($data['name']) : ''; ?>.</p>
                                </div>
                                <div class="col-md-4 text-center text-md-end" style="padding-right: 30px;">
                                  <?php $branch_slug_param = !empty($branch_slug) ? $branch_slug : (!empty($branch['slug']) ? $branch['slug'] : (!empty($data['slug']) ? $data['slug'] : '')); ?>
                                  <a href="<?= base_url('newsletter?branch=' . $branch_slug_param); ?>" class="btn" style="background-color: #122051; color: #ffffff; border-radius: 25px; padding: 10px 30px; font-weight: 600; text-decoration: none; box-shadow: 0 4px 10px rgba(18, 32, 81, 0.25);">
                                     View Newsletter
                                  </a>
                                </div>
                              </div>
                            </div>
                          </section>
                        </div>

                    </section>
                </article>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
  var tpj = jQuery;
  if (window.RS_MODULES === undefined) window.RS_MODULES = {};
  if (RS_MODULES.modules === undefined) RS_MODULES.modules = {};
  RS_MODULES.modules["revslider141"] = {
    once: RS_MODULES.modules["revslider141"] !== undefined ? RS_MODULES.modules["revslider141"].once : undefined,
    init: function() {
      window.revapi14 = window.revapi14 === undefined || window.revapi14 === null || window.revapi14.length === 0 ?
        jQuery("#rev_slider_14_1") : window.revapi14;
      if (window.revapi14.data("get_visible_revapi") === undefined) window.revapi14.data("get_visible_revapi", "revapi14");
      RS_MODULES.modules["revslider141"].once = false;
      window.revapi14.revolutioninit({
        revapi: "revapi14",
        DPR: "dpr",
        sliderLayout: "fullwidth",
        visibilityLevels: "1240,1024,778,480",
        gridwidth: "1929,1032,822,711",
        gridheight: "750,401,320,276",
        lazyType: "smart",
        perspective: 600,
        perspectiveType: "global",
        editorMode: true,
        responsiveLevels: "1240,1024,778,480",
        progressBar: {
          disableProgressBar: true
        },
        navigation: {
          onHoverStop: false
        },
        parallax: {
          levels: [5, 10, 15, 20, 25, 30, 45, 46, 47, 48, 49, 50, 51, 30, 35, 40],
          type: "scroll",
          origo: "slidercenter",
          speed: 0
        },
        viewPort: {
          global: false,
          enable: false,
          visible_area: "20%"
        },
        fallbacks: {
          allowHTML5AutoPlayOnAndroid: true
        },
      });

    }
  } // End of RevInitGUI
  if (window.RS_MODULES.checkMinimal) window.RS_MODULES.checkMinimal();
</script><script id="rs-initialisation-scripts">
var tpj = jQuery;

var revapi14;

if (window.RS_MODULES === undefined) window.RS_MODULES = {};
if (RS_MODULES.modules === undefined) RS_MODULES.modules = {};
RS_MODULES.modules["revslider141"] = {
  once: RS_MODULES.modules["revslider141"] !== undefined ? RS_MODULES.modules["revslider141"].once : undefined,
  init: function() {
    window.revapi14 = window.revapi14 === undefined || window.revapi14 === null || window.revapi14.length === 0 ?
      document.getElementById("rev_slider_14_1") : window.revapi14;
    if (window.revapi14 === null || window.revapi14 === undefined || window.revapi14.length == 0) {
      window.revapi14initTry = window.revapi14initTry === undefined ? 0 : window.revapi14initTry + 1;
      if (window.revapi14initTry < 20) requestAnimationFrame(function() {
        RS_MODULES.modules["revslider141"].init()
      });
      return;
    }
    window.revapi14 = jQuery(window.revapi14);
    if (window.revapi14.revolution == undefined) {
      revslider_showDoubleJqueryError("rev_slider_14_1");
      return;
    }
    revapi14.revolutionInit({
      revapi: "revapi14",
      DPR: "dpr",
      sliderLayout: "fullwidth",
      visibilityLevels: "1240,1024,778,480",
      gridwidth: "1920,1024,778,480",
      gridheight: "800,500,320,270",
      lazyType: "smart",
      spinner: "spinner0",
      perspective: 600,
      perspectiveType: "local",
      editorheight: "800,500,320,270",
      responsiveLevels: "1240,1024,778,480",
      progressBar: {
        disableProgressBar: true
      },
      navigation: {
        onHoverStop: false
      },
      parallax: {
        levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 46, 47, 48, 49, 50, 51, 55],
        type: "mouse"
      },
      viewPort: {
        global: true,
        globalDist: "-200px",
        enable: false,
        visible_area: "20%"
      },
      fallbacks: {
        allowHTML5AutoPlayOnAndroid: true
      },
    });

  }
} // End of RevInitScript

if (window.RS_MODULES.checkMinimal !== undefined) {
  window.RS_MODULES.checkMinimal();
};
</script>

