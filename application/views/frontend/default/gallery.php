
<div id="featured-title" class="clearfix simple"
    style="background-image: url(<?php echo base_url();?>uploads/2023/02/featured-title-bg.png);">
    <div class="edukul-container clearfix">
        <div class="inner-wrap">
            <div class="title-group">
                <h1 class="main-title">
                    Gallery </h1>
            </div>
        </div>
    </div>
</div><!-- /#featured-title -->


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
                                <?php foreach($gallery as $gal) {?>
                                <div class="col-xl-3 col-md-6 col-12 mb-4">
                                    <div class="card custom-card">
                                        <div class="img-container">
                                            <a href="<?php echo base_url() . 'gallery-detail/' . $gal['slug'] . '/' . $gal['id'];?>">
                                                <img src="<?php echo base_url() . $gal['image'];?>" alt="<?php echo $gal['slug'];?>"/>
                                            </a>
                                        </div>
                                        <a href="<?php echo base_url() . 'gallery-detail/' . $gal['slug'] . '/' . $gal['id'];?>" class="py-3 mb-0 text-center custom-card-links"> <?php echo $gal['name'];?> </a>
                                    </div>
                                </div>
                                <?php } ?>
                                
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