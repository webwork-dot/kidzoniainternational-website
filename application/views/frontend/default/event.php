<style>
.branch-label { 
    position: absolute;
    top: 0;
    padding: 0px 10px;
    color: white;
    border-radius: 5px;
    right: 0;
    background: rgba(18, 32, 81, 0.8);
}
</style>

<div id="featured-title" class="clearfix simple"
    style="background-image: url(<?php echo base_url();?>uploads/2023/02/featured-title-bg.png);">
    <div class="edukul-container clearfix">
        <div class="inner-wrap">
            <div class="title-group">
                <h1 class="main-title">
                    Events </h1>
            </div>
        </div>
    </div>
</div><!-- /#featured-title -->

 <?php if(!empty($events)):?>  
 <section id="custom-blog-section">
    <div class="container">
        <div class="row d-flex"> 
        <?php foreach($events as $event){?>
            <div class="col-12 col-md-6 col-lg-4 p-3"> 
            <a href="<?php echo base_url() . 'events-details/' . $event['slug'] . '/' . $event['id'];?>" style="position: relative">
                <div class="box custom-box"> 
                    <img src="<?php echo base_url() . $event['image'];?>" class="img-fluid" alt="<?php echo $event['branch_name'];?>">
                    <div class="branch-label"><?php echo $event['branch_name'];?></div>
                    <div class="blog-title pb-0">
                         <a href="<?php echo base_url() . 'events-details/' . $event['slug'] . '/' . $event['id'];?>" style="font-weight: bold">
                            <?php 
                                $title = substr($event['name'], 0, 85);
                                echo (strlen($title) >= 85) ? $title . "..." : $title;;
                            ?>
                         </a>
                    </div>
                </div> 
             </a>
            </div>
        <?php } ?>
        </div> 
        
     <div class="d-flex justify-content-center mx-0 row">
       <div class="col-sm-12 col-md-12">
          <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_3_paginate">
             <ul class="pagination justify-content-center mt-2">
                 <?php echo $this->pagination->create_links(); ?>
             </ul>
          </div>
       </div>
     </div>
        
      </div>
</section>
<?php endif;?>  
