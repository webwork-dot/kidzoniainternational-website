<style>
  .documents-page {
    padding: 40px 0 80px;
  }

  .documents-page .documents-title {
    font-family: Georgia, "Times New Roman", Times, serif;
    font-size: 42px;
    font-weight: 700;
    color: #1a1a1a;
    margin: 0 0 30px;
    line-height: 1.2;
  }

  .documents-table-wrap {
    width: 100%;
    overflow-x: auto;
  }

  .documents-table {
    width: 100%;
    border-collapse: collapse;
    border-spacing: 0;
  }

  .documents-table .section-head th {
    background: #1e4d8c;
    color: #fff;
    text-align: center;
    font-size: 15px;
    font-weight: 700;
    letter-spacing: 0.5px;
    padding: 14px 16px;
    text-transform: uppercase;
  }

  .documents-table .col-head th {
    background: #3a7bd5;
    color: #fff;
    font-size: 13px;
    font-weight: 700;
    letter-spacing: 0.4px;
    padding: 12px 16px;
    text-transform: uppercase;
    text-align: left;
  }

  .documents-table .col-head th.col-action {
    text-align: center;
  }

  .documents-table tbody tr:nth-child(odd) {
    background: rgba(245, 245, 245, 0.85);
  }

  .documents-table tbody tr:nth-child(even) {
    background: rgba(255, 255, 255, 0.7);
  }

  .documents-table tbody td {
    padding: 16px;
    font-size: 15px;
    color: #222;
    vertical-align: middle;
    border-bottom: 1px solid rgba(0, 0, 0, 0.04);
  }

  .documents-table tbody td.col-sl {
    width: 90px;
  }

  .documents-table tbody td.col-action {
    width: 180px;
    text-align: center;
  }

  .documents-table .view-doc-btn {
    display: inline-block;
    background: #3a7bd5;
    color: #fff !important;
    text-decoration: none !important;
    padding: 8px 18px;
    border-radius: 50px;
    font-size: 13px;
    font-weight: 600;
    white-space: nowrap;
    transition: background 0.2s ease;
  }

  .documents-table .view-doc-btn:hover {
    background: #1e4d8c;
    color: #fff !important;
  }

  .documents-empty {
    padding: 30px;
    text-align: center;
    color: #666;
    background: #f7f7f7;
  }

  @media (max-width: 767px) {
    .documents-page .documents-title {
      font-size: 28px;
    }

    .documents-table tbody td,
    .documents-table .col-head th {
      padding: 12px 10px;
      font-size: 13px;
    }

    .documents-table tbody td.col-sl {
      width: 50px;
    }

    .documents-table .view-doc-btn {
      padding: 7px 12px;
      font-size: 12px;
    }
  }
</style>

<div class="btContentWrap btClear">
  <div class="btContentHolder">
    <div class="btContent">
      <div class="bt_bb_wrapper">
        <section
          class="bt_bb_section bt_bb_color_scheme_1 bt_bb_layout_boxed_1200 bt_bb_vertical_align_top bt_bb_bottom_section_coverage_image bt_bb_section_with_bottom_coverage_image bt_bb_top_spacing_large bt_bb_bottom_spacing_large bt_bb_negative_margin_none"
          style="--section-primary-color: #ffffff; --section-secondary-color: #282828;">
          <div class="bt_bb_background_image_holder_wrapper">
            <div
              class="bt_bb_background_image_holder bt_bb_parallax"
              data-parallax="0.4"
              data-parallax-offset="0"
              data-parallax-zoom-start="1"
              data-parallax-zoom-end="1"
              data-parallax-blur-start="0"
              data-parallax-blur-end="0"
              data-parallax-opacity-start="1"
              data-parallax-opacity-end="1"
              style="background-image: url(<?php echo base_url(); ?>uploads/2023/07/Contact_Banner.jpg);"></div>
          </div>
          <div class="bt_bb_port">
            <div class="bt_bb_cell">
              <div class="bt_bb_cell_inner">
                <div class="bt_bb_row_wrapper">
                  <div class="bt_bb_row">
                    <div class="bt_bb_column col-xxl-7 col-xl-7 col-xs-12 col-sm-12 col-md-12 col-lg-7 bt_bb_vertical_align_middle bt_bb_align_left bt_bb_padding_normal bt_bb_animation_fade_in animate">
                      <div class="bt_bb_column_content">
                        <div class="bt_bb_column_content_inner">
                          <div class="bt_bb_separator_v2 bt_bb_border_style_none bt_bb_top_spacing_none bt_bb_bottom_spacing_large bt_bb_border_thickness_1">
                            <div class="bt_bb_separator_v2_inner">
                              <span class="bt_bb_separator_v2_inner_before"></span>
                              <span class="bt_bb_separator_v2_inner_content"><span class="bt_bb_icon_holder"></span></span>
                              <span class="bt_bb_separator_v2_inner_after"></span>
                            </div>
                          </div>
                          <header class="bt_bb_headline bt_bb_color_scheme_6 bt_bb_dash_none bt_bb_size_extrahuge bt_bb_align_inherit"
                            style="--primary-color: #ffffff; --secondary-color: var(--accent-color);">
                            <h1 class="bt_bb_headline_tag">
                              <span class="bt_bb_headline_content"><span>Document</span></span>
                            </h1>
                          </header>
                          <div class="bt_bb_separator_v2 bt_bb_border_style_none bt_bb_top_spacing_100 bt_bb_bottom_spacing_large bt_bb_border_thickness_1">
                            <div class="bt_bb_separator_v2_inner">
                              <span class="bt_bb_separator_v2_inner_before"></span>
                              <span class="bt_bb_separator_v2_inner_content"><span class="bt_bb_icon_holder"></span></span>
                              <span class="bt_bb_separator_v2_inner_after"></span>
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
          <div class="bt_bb_section_bottom_section_coverage_image">
            <img src="<?php echo base_url(); ?>assets/images/bottom_white_wave_03.png" alt="" />
          </div>
        </section>

        <section class="bt_bb_section bt_bb_layout_boxed_1200 bt_bb_vertical_align_top bt_bb_top_spacing_medium bt_bb_bottom_spacing_large">
          <div class="bt_bb_port">
            <div class="bt_bb_cell">
              <div class="bt_bb_cell_inner">
                <div class="bt_bb_row_wrapper">
                  <div class="bt_bb_row">
                    <div class="bt_bb_column col-xxl-12 col-xl-12 col-xs-12 col-sm-12 col-md-12 col-lg-12 bt_bb_vertical_align_top bt_bb_padding_normal">
                      <div class="bt_bb_column_content">
                        <div class="bt_bb_column_content_inner">
                          <div class="documents-page">
                            <h2 class="documents-title">Document</h2>
                            <div class="documents-table-wrap">
                              <?php if (!empty($documents)): ?>
                              <table class="documents-table">
                                <thead>
                                  <tr class="section-head">
                                    <th colspan="3">DOCUMENTS AND INFORMATION:</th>
                                  </tr>
                                  <tr class="col-head">
                                    <th>SL NO.</th>
                                    <th>DOCUMENT/INFORMATION</th>
                                    <th class="col-action">ACTION</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <?php $sl = 1; foreach ($documents as $doc): ?>
                                  <tr>
                                    <td class="col-sl"><?php echo $sl++; ?></td>
                                    <td><?php echo html_escape($doc['title']); ?></td>
                                    <td class="col-action">
                                      <?php if (!empty($doc['file'])): ?>
                                      <a class="view-doc-btn" href="<?php echo base_url() . $doc['file']; ?>" target="_blank" rel="noopener">View Document</a>
                                      <?php else: ?>
                                      —
                                      <?php endif; ?>
                                    </td>
                                  </tr>
                                  <?php endforeach; ?>
                                </tbody>
                              </table>
                              <?php else: ?>
                              <div class="documents-empty">No documents available.</div>
                              <?php endif; ?>
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
