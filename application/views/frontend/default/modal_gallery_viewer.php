<?php 
$m_galleries=$this->common_model->getResultById_multiple('gallery_image','image, title',array('branch_id'=>$param2));

?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css"/>
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
    
<button type="button" class="btn close rounded-circle p-0" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
<div class="row mt-2">
    <?php foreach($m_galleries as $gal){?>
   <div class="col-lg-3 mb-4">
    <a data-fancybox="gallery" data-src="<?= base_url() . $gal['image'];?>" data-caption="<?= $gal['title'];?>">
    <img src="<?= base_url() . $gal['image'];?>"  class="attachment-full size-full" />
   </a>
   </div>
    <?php } ?>
</div>
  