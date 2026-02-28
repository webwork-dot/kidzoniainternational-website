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
        <a href="<?php echo site_url() . 'admin/programmes-content'; ?>" class="sub-links <?php echo ($page_name == 'programmes_content') ? 'active' : ''; ?>">Programmes Content</a>
        <a href="<?php echo site_url() . 'admin/programmes-icon'; ?>" class="sub-links <?php echo ($page_name == 'programmes_icon') ? 'active' : ''; ?>">Programmes Icon</a>
    </div>
</nav>