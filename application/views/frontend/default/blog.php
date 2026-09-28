<div id="featured-title" class="clearfix simple"
    style="background-image: url(<?php echo base_url();?>uploads/2023/02/featured-title-bg.png);">
    <div class="edukul-container clearfix">
        <div class="inner-wrap">
            <div class="title-group">
                <h1 class="main-title">
                    Blog </h1>
            </div>
        </div>
    </div>
</div><!-- /#featured-title -->

 <?php if(!empty($blogs)):?>  
 <section id="custom-blog-section">
    <div class="container">
        <div class="row d-flex"> 
        <?php foreach($blogs as $blog){?>
            <div class="col-12 col-md-6 col-lg-4 p-3"> 
            <a href="<?php echo base_url() . 'blog-details/' . $blog['id'] . '/' . $blog['slug'];?>">
                <div class="box custom-box"> 
                    <img src="<?php echo base_url() . $blog['image'];?>" class="img-fluid" alt="<?php echo $blog['name']?>">
                    <div class="blog-title pb-0">
                    <span class="text-secondary" ><?php
                                                    $newData = new DateTime($blog['created_at']);
                                                    $formattedDate = $newData->format("d M, Y");
                                                    echo $formattedDate; 
                                                    ?>
                    </span>
                    <br>
                         <a href="<?php echo base_url() . 'blog-details/' . $blog['id'] . '/' . $blog['slug'];?>" style="font-weight: bold">
                            <?php 
                                $title = substr($blog['name'], 0, 85);
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
             <ul class="pagination m-paginate justify-content-center mt-2">
                 <?php echo $this->pagination->create_links(); ?>
             </ul>
          </div>
       </div>
     </div>
        
      </div>
</section>
<?php endif;?>  
