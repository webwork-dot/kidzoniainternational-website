<style>
.custom-padding-responsive {
  padding-bottom: 250px !important;
}

@media(max-width: 1221px) {
  .custom-padding-responsive {
    padding-bottom: 150px !important;
  }
}

@media(max-width: 991px) {
  .custom-padding-responsive {
    padding-bottom: 80px !important;
  }
}

.u-tube-btn {
  color: white !important;
  background: red;
  padding: 6px 12px;
  font-size: 14px !important;
  border-radius: 8px;
  transition: background 0.4s ease;
}

.u-tube-btn:hover {
  background: #a90000;
}

.mb-2 {
  margin-bottom: 10px;
}
</style>

<div id="featured-title" class="clearfix simple"
  style="background-image: url(<?php echo base_url();?>uploads/2023/02/featured-title-bg.png);padding-bottom:10px">
  <div class="edukul-container clearfix">
    <div class="inner-wrap">
      <div class="title-group">
        <h1 class="main-title"> Kidzos Chronicles</h1>
      </div>
    </div>
    <div class="wpb_text_column wpb_content_element  explore-text ">
      <div class="wpb_wrapper">
        <a class="u-tube-btn" href="<?php echo !empty($kidzos_chronicles['channel_url']) ? htmlspecialchars($kidzos_chronicles['channel_url'], ENT_QUOTES, 'UTF-8') : 'https://www.youtube.com/@KidzosChronicles/videos'; ?>"><i
            class="fa fa-play me-2"></i>Youtube</a>
      </div>
    </div>
  </div>
</div><!-- /#featured-title -->


<!-- Main Content -->
<div id="main-content" class="site-main clearfix" style="">
  <div id="content-wrap">
    <div id="site-content" class="site-content clearfix">
      <div id="inner-content" class="inner-content-wrap">
        <article class="page-content post-19505 page type-page status-publish hentry">
          <section class="wpb-content-wrapper">


            <div class="vc-custom-col-spacing clearfix vc-col-spacing-30">
              <section class="wpb_row vc_row-fluid row-content-position-Default">
                <div class="edukul-container">
                  <div class="row-inner clearfix">
                    <div class="wpb_column vc_column_container vc_col-sm-12">
                      <div class="vc_column-inner">
                        <div class="wpb_wrapper">
                          <div class="edukul-spacer clearfix" data-desktop="60" data-mobi="60" data-smobi="60"></div>
                          <div class="wpb_text_column wpb_content_element  explore-text">
                            <div class="wpb_wrapper">
                              <?php if (!empty($kidzos_chronicles['center_content'])) : ?>
                                <?php echo $kidzos_chronicles['center_content']; ?>
                              <?php else : ?>
                              <p class="text-md-center">Welcome to Kidzos Chronicles, the ultimate destination for young
                                explorers seeking a burst of fun, laughter, and a whole lot of "wow" moments! Created by
                                the brilliant minds of Kidzonia, this podcast is not just any podcast – it's an
                                incredible voyage into the fascinating realms of world news, sports adventures, travel
                                escapades, delicious foodie discoveries, nifty school tricks, mind-blowing tech wonders,
                                and much more! </p>

                              <p class="text-md-center">Here at Kidzos Chronicles, we're all about the cool and the
                                curious! It is the coolest podcast in town, made by kids, for kids, and it feels like a
                                secret clubhouse where we share the most awesome ideas and learn amazing things
                                together.</p>

                              <p class="text-md-center">But wait, there's more! Brace yourselves for the super cool part
                                – special guest appearances! We chat with athletes who score big, leaders who shape the
                                world, and scientists unravelling the mysteries of the universe. The lineup is as
                                diverse and exciting as the adventures we embark on. </p>

                              <p class="text-md-center">So, if you're ready for a podcast that's a perfect blend of fun,
                                friendship, and a dash of "wow," you're in the right place. Wave goodbye to boredom and
                                say hello to chuckles, delightful surprises, and an abundance of fun. Kidzos Chronicles
                                is the podcast that proves that every laugh, every fact, and every "whoa, that's cool!"
                                is carefully crafted with you in mind. </p>

                              <p class="text-md-center">Join our gang, where kids are the stars and curiosity is our
                                superpower! Let's explore the world together, where the adventure never ends! Hit that
                                subscribe button, because Kidzos Chronicles is where the fun never stops! </p>
                              <?php endif; ?>

                            </div>
                          </div>

                          <div class="edukul-spacer clearfix" data-desktop="60" data-mobi="60" data-smobi="60"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
            </div>



            <div class="vc-custom-col-spacing clearfix vc-col-spacing-0px">
              <section class="wpb_row vc_row-fluid no-padding row-content-position-Default">
                <div class="row-inner clearfix">
                  <div class="wpb_column vc_column_container vc_col-sm-12">
                    <div class="vc_column-inner">
                      <div class="wpb_wrapper">
                        <div class="edukul-carousel-box  has-bullets bullet- bullet50" data-auto="true" data-loop="true"
                          data-gap="5" data-column="3" data-column2="2" data-column3="1">
                          <div class="owl-carousel owl-theme">
                            <?php
                            $video_list = !empty($kidzos_chronicles_videos) ? $kidzos_chronicles_videos : array();
                            if (empty($video_list)) {
                              $default_urls = array(
                                'https://www.youtube.com/embed/mcQU5r1h8Xc?si=t_QqLl-CkeGJUQHF',
                                'https://www.youtube.com/embed/DIY6tVMuaQg?si=26Z71Glp7SJlFgug',
                                'https://www.youtube.com/embed/axxf8ET2vRk?si=ymoUSFoFIPO378dG',
                                'https://www.youtube.com/embed/fLrnMVuZgvM?si=fSQBHgoi24CaFoHb',
                                'https://www.youtube.com/embed/pFVmlu3beuw?si=mWY-EEUtmg0OAQ11',
                                'https://www.youtube.com/embed/FpeQcSVaBDc?si=yQILI828_UYA4Xng',
                                'https://www.youtube.com/embed/A5WxLjFYX4U?si=j8XHguRB7Rw1ad0r',
                                'https://www.youtube.com/embed/oc4kzqhM6BY?si=yr9yKj97i4t2W1MV',
                              );
                              foreach ($default_urls as $url) { $video_list[] = array('video_url' => $url); }
                            }
                            foreach ($video_list as $video) {
                              $url = isset($video['video_url']) ? trim($video['video_url']) : '';
                              if ($url === '') continue;
                              if (strpos($url, '/embed/') === false && preg_match('/[?&]v=([a-zA-Z0-9_-]+)/', $url, $m)) {
                                $url = 'https://www.youtube.com/embed/' . $m[1];
                              } elseif (strpos($url, '/embed/') === false && preg_match('#youtu\.be/([a-zA-Z0-9_-]+)#', $url, $m)) {
                                $url = 'https://www.youtube.com/embed/' . $m[1];
                              }
                              $embed_src = htmlspecialchars($url, ENT_QUOTES, 'UTF-8');
                            ?>
                            <div class="edukul-content-box clearfix " data-padding="" data-mobipadding="" data-margin=""
                              data-mobimargin="">
                              <div class="inner ctb-1765544595"
                                style="background-position:left top;background-repeat:no-repeat;" data-background="">
                                <div class="wpb_single_image wpb_content_element vc_align_left">
                                  <figure class="wpb_wrapper vc_figure">
                                    <div class="vc_single_image-wrapper   vc_box_border_grey">
                                      <iframe width="640" height="360"
                                        src="<?php echo $embed_src; ?>"
                                        frameborder="0" allowfullscreen></iframe>
                                    </div>
                                  </figure>
                                </div>
                              </div>
                            </div>
                            <?php } ?>
                          </div>
                        </div>
                        <div class="edukul-spacer clearfix" data-desktop="60" data-mobi="30" data-smobi="30"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
            </div>
            <div class="vc-custom-col-spacing clearfix vc-col-spacing-30">
              <section
                class="wpb_row vc_row-fluid vc_custom_1677943833177 vc_row-has-fill row-content-position-Default">
                <div class="edukul-container">
                  <div class="row-inner clearfix">
                    <div class="wpb_column vc_column_container vc_col-sm-12">
                      <div class="vc_column-inner">
                        <div class="wpb_wrapper">
                          <div class="wpb_text_column wpb_content_element  mf">
                            <div class="wpb_wrapper">
                              <h3 class="mf" style="text-align: center;">Make KCIS as your
                                Child&#8217;s Learning Partner. For admission, enquiries
                                click below.</h3>

                            </div>
                          </div>

                          <div class="edukul-spacer clearfix" data-desktop="30" data-mobi="30" data-smobi="30"></div>
                          <div class="wpb_raw_code wpb_content_element wpb_raw_html">
                            <div class="wpb_wrapper">
                              <center><a href="<?php echo base_url();?>admission-enquiry"
                                  class="edukul-button btn-1584004131 medium no_icon custom custom outline solid custom"
                                  style="border-width:1px;" data-background="#fbbc00" data-text="#122051"
                                  data-border="#fbbc00" data-text-hover="#fbbc00" data-background-hover="#122051"
                                  data-border-hover="#122051">
                                  <span style="">Enquire Now </span>
                                </a></center>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
            </div>
          </section>
        </article>

      </div>
    </div><!-- /#site-content -->

  </div><!-- /#content-wrap -->
</div><!-- /.main-content -->