<div id="featured-title" class="clearfix simple"
    style="background-image: url(<?php echo base_url();?>uploads/2023/02/featured-title-bg.png);">
    <div class="edukul-container clearfix">
        <div class="inner-wrap">
            <div class="title-group">
                <h1 class="main-title">
                    <?php echo $data['name'];?> </h1>
            </div>
        </div>
    </div>
</div><!-- /#featured-title -->


<!-- Main Content -->
<div id="main-content" class="site-main clearfix" style="">
    <div id="content-wrap" class="edukul-container mt-4">
        <div id="site-content" class="site-content single-event clearfix">
            <div id="inner-content" class="inner-content-wrap">

                <div class="event-detail-wrap"> 
                    <div id="event-description">
                        <p><?php echo $data['description'];?></p>
                        <p>
                            <img fetchpriority="high" decoding="async"
                                src="<?php echo base_url() . $data['image'];?>" alt="<?php echo $data['name'];?> "
                                width="300" height="203" class="alignnone wp-image-22210 size-medium"
                                sizes="(max-width: 300px) 100vw, 300px" />
                        </p>
                    </div><!-- /entry-content -->

                    <div id="event-info">
                        <p></p>
                        <h4 class="title"> Event Info </h4>
                        <ul>
                            <li>
                                <span>Location:</span>
                                <span><?php echo $data['location'];?></span>
                            </li>
                            <li>
                                <span>Date:</span>
                                <span>
                                    <?php 
                                        $dateObject = DateTime::createFromFormat("Y-m-d", $data['date']); 
                                        $outputDate = $dateObject->format("j M, Y"); 
                                        echo $outputDate; 
                                    ?>
                                </span>
                            </li>
                            <li>
                                <span>Time:</span>
                                <span>
                                    <?php 
                                        $timeObject = DateTime::createFromFormat("H:i:s", $data['time_from']);
                                        $outputTime = $timeObject->format("g:i A");
                                        echo $outputTime;
                                    ?>
                                    <span style="text-transform: lowercase;">to</span>
                                    <?php 
                                        $timeObject = DateTime::createFromFormat("H:i:s", $data['time_to']);
                                        $outputTime = $timeObject->format("g:i A");
                                        echo $outputTime;
                                    ?>
                                </span>
                            </li>
                            <li>
                                <span>Phone:</span>
                                <span><?php echo $data['phone'];?></span>
                            </li>
                        </ul>
                        <div class="w-100 text-center mt-2">
                            <button class="w-100 py-4" onclick="showAjaxEnquiryModal('<?php echo base_url();?>modal/popup_front/modal_register_events/<?php echo $data['id'];?>','Register For Events');">Register for Event</button>
                        </div>
                    </div>
                </div>

            </div><!-- /#inner-content -->
        </div><!-- /#site-content -->
    </div><!-- /#content-wrap -->

</div><!-- /.main-content -->