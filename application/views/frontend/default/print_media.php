<style>
    .custom-news-image {
        height: 95px !important;
        border-radius: 5px !important;
        object-fit: contain !important;
    }
</style>

<div id="featured-title" class="clearfix simple"
    style="background-image: url(<?php echo base_url();?>uploads/2023/02/featured-title-bg.png);">
    <div class="edukul-container clearfix">
        <div class="inner-wrap">
            <div class="title-group">
                <h1 class="main-title">
                    Print Media </h1>
            </div>
        </div>
    </div>
</div><!-- /#featured-title -->

<?php
    $alt = ["CBSE School Near Me", "Cambridge School", "International CBSE", "International Cambridge", "Cambridge Near Me"];
?>

<!-- Main Content -->
<div id="main-content" class="site-main clearfix" style="">
    <div id="content-wrap">
        <div id="site-content" class="site-content clearfix">
            <div id="inner-content" class="inner-content-wrap">
                <article class="page-content post-13228 page type-page status-publish hentry">
                    <section class="wpb-content-wrapper">
                        
                        <div class="bt-wrapper my-5">
                            <div class="container">
                              <div class="row">
                                <?php foreach($media as $med) { ?>
                                <div class="col-xl-3 col-md-6 col-12 mb-4">
                                    <div class="card custom-card">
                                        <div class="img-container">
                                            <a href="<?php echo base_url() . $med['image'];?>" data-fancybox="gallery" class="fancybox">
                                                <img src="<?php echo base_url() . $med['image'];?>" alt="<?php echo $alt[array_rand($alt)]; ?>"/>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <?php } ?>
                                
                              </div>
                            </div>
                        </div>

                        <div class="bt-wrapper my-5">
                            <div class="container">
                              <div class="row">
                               
                                <div class="col-xl-3 col-md-6 col-12 mb-4">
                                    <div class="card">
                                        <div class="img-container">
                                            <a href="https://m.dailyhunt.in/news/india/english/republic+news+india-epaper-dhfacc36dfce9c4bb68db0e89d033c921b/kidzonia+international+preschool+marks+a+decade+of+brilliance+a+grand+celebration+on+the+10th+annual+day-newsid-dhfacc36dfce9c4bb68db0e89d033c921b_9b7fde80b37811ee8cfbe0ba6e6bf1dc?sm=Y" target="_blank">
                                                <img class="custom-news-image" src="<?php echo base_url();?>assets/images/1-daily-hunt.png" alt="<?php echo $alt[array_rand($alt)]; ?>"/>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-6 col-12 mb-4">
                                    <div class="card">
                                        <div class="img-container">
                                            <a href="https://republicnewsindia.com/kidzonia-international-preschool-marks-a-decade-of-brilliance-a-grand-celebration-on-the-10th-annual-day/" target="_blank">
                                                <img class="custom-news-image" src="<?php echo base_url();?>assets/images/2-republic.png" alt="<?php echo $alt[array_rand($alt)]; ?>"/>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-6 col-12 mb-4">
                                    <div class="card">
                                        <div class="img-container">
                                            <a href="https://flipboard.com/@republicnewsind/-kidzonia-international-preschool-marks-/a-TJm4iyAASRS7IJmWoV4miw%3Aa%3A3544623556-fc18b991c1%2Frepublicnewsindia.com" target="_blank">
                                                <img class="custom-news-image" src="<?php echo base_url();?>assets/images/3-flipboard.png" alt="<?php echo $alt[array_rand($alt)]; ?>"/>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-6 col-12 mb-4">
                                    <div class="card">
                                        <div class="img-container">
                                            <a href="https://theindianbulletin.com/kidzonia-international-preschool-marks-a-decade-of-brilliance-a-grand-celebration-on-the-10th-annual-day/" target="_blank">
                                                <img class="custom-news-image" src="<?php echo base_url();?>assets/images/4-the-indian-bulletin.jpg" alt="<?php echo $alt[array_rand($alt)]; ?>"/>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-6 col-12 mb-4">
                                    <div class="card">
                                        <div class="img-container">
                                            <a href="https://rdtimes.in/kidzonia-international-preschool-marks-a-decade-of-brilliance-a-grand-celebration-on-the-10th-annual-day/" target="_blank">
                                                <img class="custom-news-image" src="<?php echo base_url();?>assets/images/5-rd-times.png" alt="<?php echo $alt[array_rand($alt)]; ?>"/>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-6 col-12 mb-4">
                                    <div class="card">
                                        <div class="img-container">
                                            <a href="https://indiansentinel.in/kidzonia-international-preschool-marks-a-decade-of-brilliance-a-grand-celebration-on-the-10th-annual-day/" target="_blank">
                                                <img class="custom-news-image" src="<?php echo base_url();?>assets/images/6-indian-sentinel.jpg" alt="<?php echo $alt[array_rand($alt)]; ?>"/>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-6 col-12 mb-4">
                                    <div class="card">
                                        <div class="img-container">
                                            <a href="https://abhyudaytimes.com/kidzonia-international-preschool-marks-a-decade-of-brilliance-a-grand-celebration-on-the-10th-annual-day/" target="_blank">
                                                <img class="custom-news-image" src="<?php echo base_url();?>assets/images/7-abhyuday-times.png" alt="<?php echo $alt[array_rand($alt)]; ?>"/>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                
                              </div>
                            </div>
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

                                                    <div class="edukul-spacer clearfix" data-desktop="30" data-mobi="30"
                                                        data-smobi="30"></div>
                                                    <div class="wpb_raw_code wpb_content_element wpb_raw_html">
                                                        <div class="wpb_wrapper">
                                                            <center><a href="<?php echo base_url();?>admission-enquiry"
                                                                    class="edukul-button btn-1584004131 medium no_icon custom custom outline solid custom"
                                                                    style="border-width:1px;" data-background="#fbbc00"
                                                                    data-text="#122051" data-border="#fbbc00"
                                                                    data-text-hover="#fbbc00"
                                                                    data-background-hover="#122051"
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