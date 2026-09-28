<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/sitemap.css">
<style>
  .toggle-btn {
    padding: 10px;
  }
</style>
<div id="featured-title" class="clearfix simple"
  style="background-image: url(<?php echo base_url(); ?>uploads/2023/02/featured-title-bg.png);">
  <div class="edukul-container clearfix">
    <div class="inner-wrap">
      <div class="title-group">
        <h1 class="main-title">Sitemap</h1>
      </div>
    </div>
  </div>
</div>
<!-- /#featured-title -->

<!-- Main Content -->
<div id="main-content" class="site-main clearfix" style="">
  <div id="content-wrap">
    <div id="site-content" class="site-content clearfix">
      <div id="inner-content" class="inner-content-wrap">
        <article class="page-content post-13409 page type-page status-publish hentry">
          <section class="wpb-content-wrapper">
            <div class="vc-custom-col-spacing clearfix vc-col-spacing-30">
              <section class="wpb_row vc_row-fluid row-content-position-Default">
                <div class="edukul-container">
                  <div class="row-inner clearfix">
                    <div class="wpb_column vc_column_container vc_col-sm-12">
                      <div class="vc_column-inner">
                        <div class="wpb_wrapper">
                          <div class="edukul-content-box clearfix">
                            <div class="vc-custom-col-inner-spacing clearfix vc-col-inner-spacing-30">
                              <div class="wpb_row vc_inner vc_row-fluid d-flex align-items-center">
                                <div class="wpb_column vc_column_container vc_col-sm-12">
                                  <div class="vc_column-inner">
                                    <div class="wpb_wrapper">
                                      <div class="sitemap-tree">
                                        <ul class="tree-node root">
                                          <li class="tree-node home">
                                            <a href="/" class="node-content node-link">
                                              <span class="icon">🏠</span> Home
                                            </a>
                                          </li>

                                          <li class="tree-node about">
                                            <a href="/about-us" class="node-content node-link">
                                              <span class="icon">ℹ️</span> About Us
                                            </a>
                                          </li>

                                          <li class="tree-node admission">
                                            <a href="/admission-enquiry" class="node-content node-link">
                                              <span class="icon">📝</span> Admission Enquiry
                                            </a>
                                          </li>

                                          <li class="tree-node why-kcis">
                                            <div class="node-content">
                                              <span class="icon">⭐</span> Why KCIS?
                                              <button class="toggle-btn" onclick="toggleNode(this)"></button>
                                            </div>
                                            <ul class="children">
                                              <li class="tree-node leaf">
                                                <a href="/explore-curriculum" class="node-content node-link">EXPLORE Curriculum</a>
                                              </li>
                                              <li class="tree-node leaf">
                                                <a href="/cambridge-assessment" class="node-content node-link">Cambridge Assessment</a>
                                              </li>
                                              <li class="tree-node leaf">
                                                <a href="/our-teaching-philosophy" class="node-content node-link">Our Teaching Philosophy</a>
                                              </li>
                                              <li class="tree-node leaf">
                                                <a href="/learning-beyond-classroom" class="node-content node-link">Learning Beyond Classroom</a>
                                              </li>
                                              <li class="tree-node leaf">
                                                <a href="/infrastructure" class="node-content node-link">Infrastructure</a>
                                              </li>
                                            </ul>
                                          </li>

                                          <li class="tree-node academics">
                                            <div class="node-content">
                                              <span class="icon">📚</span> Academics
                                              <button class="toggle-btn" onclick="toggleNode(this)"></button>
                                            </div>
                                            <ul class="children">
                                              <li class="tree-node leaf">
                                                <a href="/pre-primary" class="node-content node-link">Pre-Primary</a>
                                              </li>
                                              <li class="tree-node leaf">
                                                <a href="/primary" class="node-content node-link">Primary</a>
                                              </li>
                                              <li class="tree-node leaf">
                                                <a href="/middle-school" class="node-content node-link">Middle School</a>
                                              </li>
                                              <li class="tree-node leaf">
                                                <a href="/high-school" class="node-content node-link">High School</a>
                                              </li>
                                              <li class="tree-node leaf">
                                                <a href="/beyond-academics" class="node-content node-link">Beyond Academics</a>
                                              </li>
                                              <li class="tree-node leaf">
                                                <a href="/ixplore" class="node-content node-link">ixplore</a>
                                              </li>
                                              <li class="tree-node leaf">
                                                <a href="/whizkids" class="node-content node-link">Whizkids</a>
                                              </li>
                                            </ul>
                                          </li>

                                          <li class="tree-node media">
                                            <div class="node-content">
                                              <span class="icon">📱</span> Media
                                              <button class="toggle-btn" onclick="toggleNode(this)"></button>
                                            </div>
                                            <ul class="children">
                                              <li class="tree-node leaf">
                                                <a href="/print-media" class="node-content node-link">Print Media</a>
                                              </li>
                                              <li class="tree-node leaf">
                                                <a href="/gallery" class="node-content node-link">Gallery</a>
                                              </li>
                                              <li class="tree-node leaf">
                                                <a href="/event" class="node-content node-link">Events</a>
                                              </li>
                                              <li class="tree-node leaf">
                                                <a href="/kidzos-chronicles" class="node-content node-link">Kidzos Chronicles</a>
                                              </li>
                                              <li class="tree-node leaf">
                                                <a href="/blog" class="node-content node-link">Blogs</a>
                                              </li>
                                              <li class="tree-node leaf">
                                                <a href="/digital-news" class="node-content node-link">Digital News</a>
                                              </li>
                                            </ul>
                                          </li>

                                          <li class="tree-node contact">
                                            <div class="node-content">
                                              <span class="icon">📞</span> Contact
                                              <button class="toggle-btn" onclick="toggleNode(this)"></button>
                                            </div>
                                            <ul class="children">
                                              <li class="tree-node leaf">
                                                <a href="/contact-us" class="node-content node-link">Contact Us</a>
                                              </li>
                                              <li class="tree-node leaf">
                                                <a href="/careers-kcis" class="node-content node-link">Careers @ KCIS</a>
                                              </li>
                                              <li class="tree-node leaf">
                                                <a href="/our-pre-schools" class="node-content node-link">Our Pre-schools</a>
                                              </li>
                                            </ul>
                                          </li>

                                          <li class="tree-node location">
                                            <div class="node-content">
                                              <span class="icon">📍</span> Location
                                              <button class="toggle-btn" onclick="toggleNode(this)"></button>
                                            </div>
                                            <ul class="children">
                                              <li class="tree-node city">
                                                <div class="node-content">
                                                  <span class="icon">🏙️</span> Hyderabad
                                                  <button class="toggle-btn" onclick="toggleNode(this)"></button>
                                                </div>
                                                <ul class="children">
                                                  <?php foreach ($all_branches as $branch): ?>
                                                  <li class="tree-node branch">
                                                    <div class="node-content">
                                                      <span class="icon">🏫</span> <?php echo $branch['name']; ?>
                                                      <button class="toggle-btn" onclick="toggleNode(this)"></button>
                                                    </div>
                                                    <ul class="children">
                                                      <?php foreach ($seo_curriculums as $curr): 
                                                        $url = $this->common_model->get_seo_url($branch['slug'], $curr['slug'], 'hyderabad');
                                                      ?>
                                                      <li class="tree-node leaf">
                                                        <a href="<?php echo $url; ?>" class="node-content node-link">
                                                          <?php echo ucfirst($curr['name']); ?> in <?php echo $branch['name']; ?>
                                                        </a>
                                                      </li>
                                                      <?php endforeach; ?>
                                                    </ul>
                                                  </li>
                                                  <?php endforeach; ?>
                                                </ul>
                                              </li>
                                            </ul>
                                          </li>
                                        </ul>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
            </div>
      </div>
    </div>
  </div>
</div><!-- /#site-content -->

<script>
  function toggleNode(button) {
    const parentNode = button.closest('.tree-node');
    parentNode.classList.toggle('collapsed');
  }

  // Add some interactive animations
  document.addEventListener('DOMContentLoaded', function() {
    const nodes = document.querySelectorAll('.node-content');

    nodes.forEach((node, index) => {
      node.style.animationDelay = `${index * 0.1}s`;
      node.style.animation = 'fadeInUp 0.6s ease forwards';
    });
  });

  // Add CSS for animations
  const style = document.createElement('style');
  style.textContent = `
            @keyframes fadeInUp {
                from {
                    opacity: 0;
                    transform: translateY(20px);
                }
                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            }

            .node-content {
                opacity: 0;
            }
        `;
  document.head.appendChild(style);
</script>






<!-- <script>
  function toggleNode(button) {
    const parentNode = button.closest('.tree-node');
    parentNode.classList.toggle('collapsed');
  }

  // Add entrance animations
  document.addEventListener('DOMContentLoaded', function() {
    const nodes = document.querySelectorAll('.node-content');

    nodes.forEach((node, index) => {
      node.style.animationDelay = `${index * 0.08}s`;
      node.style.animation = 'slideInFromLeft 0.7s ease forwards';
    });
  });

  // Add CSS for animations
  const style = document.createElement('style');
  style.textContent = `
            @keyframes slideInFromLeft {
                from {
                    opacity: 0;
                    transform: translateX(-30px);
                }
                to {
                    opacity: 1;
                    transform: translateX(0);
                }
            }

            .node-content {
                opacity: 0;
            }

            .tree-node > .node-content:hover {
                animation: none !important;
            }
        `;
  document.head.appendChild(style);
</script> -->