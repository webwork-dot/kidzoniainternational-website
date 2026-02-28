<style>
    .sub-links {
        border-top-right-radius: 15px;
        border-top-left-radius: 15px;
        padding: 4px 12px;
        background: #fff;
        margin-right: 1px;
    }
    
    .sub-links.active {
        background: #61b9bb;
        color: #fff;
    }
</style>

<nav class="sub-nav">
    <div class="d-flex">
        <a href="<?php echo site_url() . 'admin/about-curriculum'; ?>" class="sub-links <?php echo ($page_name == 'about_curriculum') ? 'active' : ''; ?>">About Curriculum</a>
        <a href="<?php echo site_url() . 'admin/curriculum-slider'; ?>" class="sub-links <?php echo ($page_name == 'curriculum_slider') ? 'active' : ''; ?>">Curriculum Slider</a>
    </div>
</nav>