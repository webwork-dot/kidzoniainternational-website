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
        <a href="<?php echo site_url() . 'admin/banner'; ?>" class="sub-links <?php echo ($page_name == 'banner') ? 'active' : ''; ?>">Banner</a>
        <a href="<?php echo site_url() . 'admin/home-about'; ?>" class="sub-links <?php echo ($page_name == 'home_about') ? 'active' : ''; ?>">About Kidzonia</a>
    </div>
</nav>