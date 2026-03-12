<style>
  @media (min-width: 768px) and (max-width: 1024px) {

    .bt_bb_style_filled.bt_bb_tabs ul.bt_bb_tabs_header {
      display: flex;
    }
  }


  @media screen and (max-width: 768px) {
    .bt_bb_style_filled.bt_bb_tabs ul.bt_bb_tabs_header {
      border: none;
      display: flex;
      justify-content: space-between;
      gap: 20px;
      font-size: 12px;
    }

    .bt_bb_style_filled.bt_bb_tabs ul.bt_bb_tabs_header li.bt_bb_tab_title span.bt_bb_tab_title {
      padding: 10px 21px 10px 10px;
    }

    .bt_bb_style_filled.bt_bb_tabs ul.bt_bb_tabs_header li.bt_bb_tab_title {
      margin: 0;
    }

    .btDropButtons .bt_bb_style_filled.bt_bb_tabs ul.bt_bb_tabs_header li.bt_bb_tab_title {
      border-top-right-radius: 25px;
    }
  }

  .admission-faq {
    max-width: 980px;
    margin: 0 auto;
  }

  .admission-faq .faq-item {
    border: 1px solid #e8ddcf;
    border-radius: 14px;
    background: #fff;
    margin-bottom: 14px;
    overflow: hidden;
  }

  .admission-faq .faq-question {
    width: 100%;
    border: none;
    background: #fff;
    padding: 16px 18px;
    display: flex;
    align-items: flex-start;
    gap: 12px;
    text-align: left;
    color: #282828;
    font-weight: 600;
    cursor: pointer;
  }

  .admission-faq .faq-icon {
    width: 26px;
    height: 26px;
    border-radius: 50%;
    background: #f7f3ee;
    color: #7d66a8;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    font-weight: 700;
    flex: 0 0 26px;
    line-height: 1;
  }

  .admission-faq .faq-question-text {
    flex: 1;
    line-height: 1.4;
  }

  .admission-faq .faq-toggle {
    color: #7d66a8;
    font-size: 22px;
    line-height: 1;
    flex: 0 0 auto;
    margin-top: -2px;
  }

  .admission-faq .faq-answer {
    display: none;
    padding: 0 18px 16px 56px;
    color: #555;
    line-height: 1.6;
  }

  .admission-faq .faq-item.is-open .faq-answer {
    display: block;
  }

  @media screen and (max-width: 768px) {
    .admission-faq .faq-question {
      padding: 14px;
    }

    .admission-faq .faq-answer {
      padding: 0 14px 14px 52px;
    }
  }
</style>

<div class="btContentWrap btClear m-admission">
  <div class="btContentHolder">
    <div class="btContent">
      <div class="bt_bb_wrapper">
        <section id="bt_bb_section656da18c45764"
          class="admission-main bt_bb_section bt_bb_layout_boxed_1400 bt_bb_vertical_align_top bt_bb_bottom_section_coverage_image bt_bb_section_with_bottom_coverage_image bt_bb_negative_margin_none bt_bb_top_spacing_large bt_bb_bottom_spacing_large"
          data-bt-override-class='{"bt_bb_top_spacing_":{"current_class":"bt_bb_top_spacing_medium","xxl":"medium","xl":"medium"},"bt_bb_bottom_spacing_":{"current_class":"bt_bb_bottom_spacing_none","xxl":"none","xl":"none","md":"medium","sm":"medium","xs":"medium"}}'>
          <div class="bt_bb_port">
            <div class="bt_bb_cell">
              <div class="bt_bb_cell_inner">
                <div class="bt_bb_row_wrapper bt_bb_row_push_left bt_bb_content_wide bt_bb_row_width_boxed_1200">
                  <div class="bt_bb_row bt_bb_negative_margin_" data-bt-override-class="{}">
                    <div
                      class="bt_bb_column col-xxl-6 col-xl-6 col-xs-12 col-sm-12 col-md-12 col-lg-6 bt_bb_vertical_align_middle  bt_bb_align_right bt_bb_padding_30 bt_bb_animation_fade_in animate bt_bb_shape_inherit"
                      data-width="6"
                      data-bt-override-class='{"bt_bb_align_":{"current_class":"bt_bb_align_right","xxl":"right","xl":"right","md":"left","sm":"left","xs":"left"},"bt_bb_padding_":{"current_class":"bt_bb_padding_30","xxl":"30","xl":"30","sm":"normal","xs":"normal"}}'>
                      <div class="bt_bb_column_content">
                        <div class="bt_bb_column_content_inner tcent">
                          <img src="<?php echo base_url(); ?>assets/images/bg-admission-1.jpg"
                            class="attachment-full size-full" alt="Kidzonia Preschool" />
                        </div>
                      </div>
                    </div>
                    <div
                      class="bt_bb_column col-xxl-6 col-xl-6 col-xs-12 col-sm-12 col-md-12 col-lg-6 bt_bb_vertical_align_middle bt_bb_align_left bt_bb_padding_10 bt_bb_animation_fade_in animate bt_bb_shape_inherit"
                      data-width="6"
                      data-bt-override-class='{"bt_bb_align_":{"current_class":"bt_bb_align_left","xxl":"left","xl":"left"},"bt_bb_padding_":{"current_class":"bt_bb_padding_10","xxl":"10","xl":"10","sm":"normal","xs":"normal"}}'>
                      <div class="bt_bb_column_content">
                        <div class="bt_bb_column_content_inner">
                          <div class="wpforms-container  col-md-12 h-enquiry">
                            <h3>Admission Enquiry - Kidzonia International Preschool & DayCare</h3>
                            <form action="<?php echo base_url(); ?>check_admission_enquiry"
                              class="add-ajax-redirect-image-form mt-10" onsubmit="return checkForm(this);"
                              method='POST'>
                              <!--<form action="<?php echo base_url(); ?>check_admission_enquiry" class="add-ajax-admission-form mt-10" onsubmit="return checkForm(this);">-->
                              <input type="hidden" name="form_type" value="admission_enquiry">
                              <div class="row">
                                <div class="col-md-12">
                                  <div class="form-group mb-2">
                                    <label>Admission For Class<i class="text-dander">*</i></label>
                                    <select class="form-control" name="class_id" required>
                                      <option value="">Select Class</option>
                                      <?php foreach ($class_list as $class) { ?>
                                        <option value="<?php echo $class['id']; ?>"><?php echo $class['name']; ?></option>
                                      <?php } ?>
                                    </select>
                                    <span class="invalid-feedback"></span>
                                  </div>
                                </div>
                                <div class="col-md-12">
                                  <div class="form-group mb-2">
                                    <label>Students Name<i class="text-dander">*</i></label>
                                    <input type="text" class="form-control" name="child_name" placeholder="Child Name"
                                      required>
                                    <span class="invalid-feedback"></span>
                                  </div>
                                </div>

                                <div class="col-md-12">
                                  <div class="form-group mb-2">
                                    <label>Parent Name<i class="text-dander">*</i></label>
                                    <input type="text" class="form-control" name="parent_name" placeholder="Parent Name"
                                      required>
                                    <span class="invalid-feedback"></span>
                                  </div>
                                </div>

                                <div class="col-md-12">
                                  <div class="form-group mb-2">
                                    <label>Phone<i class="text-dander">*</i></label>
                                    <input type="tel" class="signup-form-control form-control" name="phone"
                                      placeholder="Phone" required>
                                    <span class="invalid-feedback"></span>
                                  </div>
                                </div>

                                <div class="col-md-12">
                                  <div class="form-group mb-2">
                                    <label>Email</label>
                                    <input type="email" class="form-control" name="email" placeholder="Email">
                                    <span class="invalid-feedback"></span>
                                  </div>
                                </div>

                                <div class="col-md-12">
                                  <div class="form-group mb-2">
                                    <label>Location<i class="text-dander">*</i></label>
                                    <select class="form-control" name="location" required>
                                      <option value="">Select Location</option>
                                      <?php foreach ($branches as $branch) { ?>
                                        <option value="<?php echo $branch['name']; ?>"><?php echo $branch['name']; ?>
                                        </option>
                                      <?php } ?>
                                    </select>
                                    <span class="invalid-feedback"></span>
                                  </div>
                                </div>

                                <div class="col-md-12">
                                  <div class="form-group mb-2">
                                    <label>How did you come to know about us ?<i class="text-dander">*</i></label>
                                    <select class="form-control" name="know_about_us" required>
                                      <option value="">Select Source</option>
                                      <option value="Banner">Banner</option>
                                      <option value="Community Event">Community Event</option>
                                      <option value="Facebook">Facebook</option>
                                      <option value="Field Data">Field Data</option>
                                      <option value="Flyers">Flyers</option>
                                      <option value="Friends">Friends</option>
                                      <option value="Google">Google</option>
                                      <option value="Instagram">Instagram</option>
                                      <option value="No parking Board">No parking Board</option>
                                      <option value="Parent Referral">Parent Referral</option>
                                      <option value="Pole Kiosk">Pole Kiosk</option>
                                      <option value="Poster Ads">Poster Ads</option>
                                      <option value="Previous Student">Previous Student</option>
                                      <option value="Pro Eves">Pro Eves</option>
                                      <option value="School Hoarding">School Hoarding</option>
                                      <option value="Sibling">Sibling</option>
                                      <option value="Staff Child">Staff Child</option>
                                      <option value="Staff Referral">Staff Referral</option>
                                      <option value="Website">Website</option>
                                      <option value="WhatsApp">WhatsApp</option>
                                    </select>

                                    <span class="invalid-feedback"></span>
                                  </div>
                                </div>
                                <!--<div class="col-md-12 mt-2 g-recaptcha" data-sitekey="<?php echo $this->config->item('recaptcha_site_key'); ?>"></div>-->

                                  <div class="col-md-12">
                                    <div class="form-group mb-2">
                                      <label>Security Check: What is <?php echo generate_math_captcha(); ?> ?<i class="text-dander">*</i></label>
                                      <input type="number" name="captcha_answer" class="form-control" placeholder="Enter your answer" required>
                                      <span class="invalid-feedback"></span>
                                    </div>
                                  </div>

                                  <div class="col-md-12 mt-2">
                                    <div class="wpforms-submit-container pt-0">
                                      <button type="submit" class="btn btn-enquiry wpforms-submit btn_verify"
                                        name="btn_verify">
                                        Submit</button>
                                    </div>
                                  </div>
                                <!--<a href="javascript:void(0);"  onclick="showAjaxEnquiryModal('<?php echo base_url(); ?>modal/popup_front/modal_admission_otp','Enter OTP!');">-->
                                <!--     <div>&nbsp;&nbsp;Request a Callback</div>-->
                                <!-- </a>-->

                              </div>
                              <!-- .wpforms-field-container -->

                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- cell_inner -->
            </div>
            <!-- cell -->
          </div>
          <!-- port -->
          <div class="bt_bb_section_bottom_section_coverage_image">
            <img decoding="async" src="<?php echo base_url(); ?>uploads/2022/04/bottom_white_wave_01.png"
              alt="Kidozonia International PlaySchool">
          </div>
        </section>

        <section data-bb-version="4.6.0"
          class="bt_bb_section bt_bb_layout_boxed_1200 bt_bb_vertical_align_top bt_bb_top_spacing_normal bt_bb_bottom_spacing_medium bt_bb_negative_margin_none"
          data-bt-override-class='{"bt_bb_top_spacing_":{"current_class":"bt_bb_top_spacing_normal","xxl":"normal"},"bt_bb_bottom_spacing_":{"current_class":"bt_bb_bottom_spacing_medium","xxl":"medium"}}'>
          <div class="bt_bb_port pt-0">
            <div class="bt_bb_cell">
              <div class="bt_bb_cell_inner">
                <div class="bt_bb_row_wrapper">
                  <div class="bt_bb_row" data-bt-override-class="{}">
                    <div
                      class="bt_bb_column col-xxl-12 col-xl-12 col-xs-12 col-sm-12 col-md-12 col-lg-12 bt_bb_vertical_align_top bt_bb_align_center bt_bb_padding_normal bt_bb_animation_fade_in animate bt_bb_shape_inherit"
                      data-width="12"
                      data-bt-override-class='{"bt_bb_align_":{"current_class":"bt_bb_align_center","xxl":"center","xl":"center"},"bt_bb_padding_":{"current_class":"bt_bb_padding_normal","xxl":"normal","xl":"normal"}}'>
                      <div class="bt_bb_column_content">
                        <div class="bt_bb_column_content_inner">
                          <header data-bb-version="4.6.0"
                            class="bt_bb_headline bt_bb_subheadline_text_transform_default bt_bb_dash_none bt_bb_size_extralarge bt_bb_align_inherit"
                            data-bt-override-class='{"bt_bb_size_":{"current_class":"bt_bb_size_extralarge","xxl":"extralarge"},"bt_bb_align_":{"current_class":"bt_bb_align_inherit","xxl":"inherit"}}'>
                            <h3 class="bt_bb_headline_tag">
                              <span class="bt_bb_headline_content"><span>Admission FAQ's</span></span>
                            </h3>
                          </header>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="bt_bb_row_wrapper">
                  <div class="bt_bb_row" data-bt-override-class="{}">
                    <div
                      class="bt_bb_column col-xxl-12 col-xl-12 col-xs-12 col-sm-12 col-md-12 col-lg-12 bt_bb_vertical_align_top bt_bb_align_left bt_bb_padding_normal bt_bb_animation_fade_in animate bt_bb_shape_inherit"
                      data-width="12"
                      data-bt-override-class='{"bt_bb_align_":{"current_class":"bt_bb_align_left","xxl":"left","xl":"left"},"bt_bb_padding_":{"current_class":"bt_bb_padding_normal","xxl":"normal","xl":"normal"}}'>
                      <div class="bt_bb_column_content">
                        <div class="bt_bb_column_content_inner">
                          <div class="admission-faq" id="admissionFaq">
                            <div class="faq-item is-open">
                              <button type="button" class="faq-question" aria-expanded="true">
                                <span class="faq-icon" aria-hidden="true">?</span>
                                <span class="faq-question-text">What is the fee structure at Kidzonia International?</span>
                                <span class="faq-toggle" aria-hidden="true">−</span>
                              </button>
                              <div class="faq-answer" style="display:block;">
                                <p>We believe in complete transparency. Our fees are highly competitive for the international standards we provide. The fee covers tuition, premium facilities, and our DISCOVER curriculum. Please fill out the enquiry form for a detailed breakdown for your branch.</p>
                              </div>
                            </div>

                            <div class="faq-item">
                              <button type="button" class="faq-question" aria-expanded="false">
                                <span class="faq-icon" aria-hidden="true">?</span>
                                <span class="faq-question-text">What is the admission process?</span>
                                <span class="faq-toggle" aria-hidden="true">+</span>
                              </button>
                              <div class="faq-answer">
                                <p>Step 1: Fill out the online enquiry form. Step 2: Schedule a campus tour. Step 3: Submit the admission form with documents and the confirmation fee.</p>
                              </div>
                            </div>

                            <div class="faq-item">
                              <button type="button" class="faq-question" aria-expanded="false">
                                <span class="faq-icon" aria-hidden="true">?</span>
                                <span class="faq-question-text">What is the minimum age for Playgroup and Nursery?</span>
                                <span class="faq-toggle" aria-hidden="true">+</span>
                              </button>
                              <div class="faq-answer">
                                <p>Playgroup: 2 to 3 years. Nursery: 3 to 4 years. We also offer Kidzo Junior (4-5 years) and Kidzo Senior (5-6 years).</p>
                              </div>
                            </div>

                            <div class="faq-item">
                              <button type="button" class="faq-question" aria-expanded="false">
                                <span class="faq-icon" aria-hidden="true">?</span>
                                <span class="faq-question-text">Do you accept mid-year admissions?</span>
                                <span class="faq-toggle" aria-hidden="true">+</span>
                              </button>
                              <div class="faq-answer">
                                <p>Yes, subject to seat availability. We ensure a smooth transition for children joining mid-session.</p>
                              </div>
                            </div>

                            <div class="faq-item">
                              <button type="button" class="faq-question" aria-expanded="false">
                                <span class="faq-icon" aria-hidden="true">?</span>
                                <span class="faq-question-text">Do you offer daycare facilities?</span>
                                <span class="faq-toggle" aria-hidden="true">+</span>
                              </button>
                              <div class="faq-answer">
                                <p>Yes, for children aged 18 months to 10 years. We offer extended hours and a safe environment for children of working parents.</p>
                              </div>
                            </div>

                            <div class="faq-item">
                              <button type="button" class="faq-question" aria-expanded="false">
                                <span class="faq-icon" aria-hidden="true">?</span>
                                <span class="faq-question-text">Are meals provided?</span>
                                <span class="faq-toggle" aria-hidden="true">+</span>
                              </button>
                              <div class="faq-answer">
                                <p>Yes, we provide wholesome, nutritionally balanced meals prepared under strict hygiene standards.</p>
                              </div>
                            </div>

                            <div class="faq-item">
                              <button type="button" class="faq-question" aria-expanded="false">
                                <span class="faq-icon" aria-hidden="true">?</span>
                                <span class="faq-question-text">Is transportation available?</span>
                                <span class="faq-toggle" aria-hidden="true">+</span>
                              </button>
                              <div class="faq-answer">
                                <p>Yes, we offer safe transportation with trained support staff across our branches.</p>
                              </div>
                            </div>

                            <div class="faq-item">
                              <button type="button" class="faq-question" aria-expanded="false">
                                <span class="faq-icon" aria-hidden="true">?</span>
                                <span class="faq-question-text">How do you ensure safety?</span>
                                <span class="faq-toggle" aria-hidden="true">+</span>
                              </button>
                              <div class="faq-answer">
                                <p>We have 24/7 CCTV surveillance, restricted entry, child-safe furniture, and background-checked staff.</p>
                              </div>
                            </div>

                            <div class="faq-item">
                              <button type="button" class="faq-question" aria-expanded="false">
                                <span class="faq-icon" aria-hidden="true">?</span>
                                <span class="faq-question-text">Q: Do you offer daycare facilities, and what are the timings?</span>
                                <span class="faq-toggle" aria-hidden="true">+</span>
                              </button>
                              <div class="faq-answer">
                                <p>A: Yes, we provide a secure and engaging extended Daycare program for children aged 18 months to 10 years. It is designed specifically to support working parents, offering a safe "home away from home" environment.</p>
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

        <section data-bb-version="4.5.9" id="bt_bb_section656da16ab1fd8"
          class="m-program bt_bb_section bt_bb_layout_boxed_1200 bt_bb_vertical_align_top bt_bb_bottom_section_coverage_image bt_bb_section_with_bottom_coverage_image bt_bb_top_spacing_medium bt_bb_bottom_spacing_large bt_bb_negative_margin_none"
          style=";background-color:rgb(255,255,255);"
          data-bt-override-class="{&quot;bt_bb_top_spacing_&quot;:{&quot;current_class&quot;:&quot;bt_bb_top_spacing_medium&quot;,&quot;xxl&quot;:&quot;medium&quot;},&quot;bt_bb_bottom_spacing_&quot;:{&quot;current_class&quot;:&quot;bt_bb_bottom_spacing_large&quot;,&quot;xxl&quot;:&quot;large&quot;}}">
          <div class="bt_bb_port">
            <div class="bt_bb_cell">
              <div class="bt_bb_cell_inner">
                <div class="bt_bb_row_wrapper">
                  <div class="bt_bb_row" data-bt-override-class="{}">
                    <div
                      class="bt_bb_column col-xxl-12 col-xl-12 col-xs-12 col-sm-12 col-md-12 col-lg-12 bt_bb_vertical_align_top bt_bb_align_left bt_bb_padding_normal bt_bb_animation_fade_in animate bt_bb_shape_inherit"
                      data-width="12"
                      data-bt-override-class="{&quot;bt_bb_align_&quot;:{&quot;current_class&quot;:&quot;bt_bb_align_left&quot;,&quot;xxl&quot;:&quot;left&quot;,&quot;xl&quot;:&quot;left&quot;},&quot;bt_bb_padding_&quot;:{&quot;current_class&quot;:&quot;bt_bb_padding_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;,&quot;xl&quot;:&quot;normal&quot;}}">
                      <div class="bt_bb_column_content">
                        <div class="bt_bb_column_content_inner">
                          <header data-bb-version="4.5.9"
                            class="bt_bb_headline bt_bb_subheadline_text_transform_default bt_bb_color_scheme_9 bt_bb_dash_none bt_bb_size_large bt_bb_align_inherit"
                            style="; --primary-color:#282828; --secondary-color:var(--alternate-color);"
                            data-bt-override-class="{&quot;bt_bb_size_&quot;:{&quot;current_class&quot;:&quot;bt_bb_size_large&quot;,&quot;xxl&quot;:&quot;large&quot;},&quot;bt_bb_align_&quot;:{&quot;current_class&quot;:&quot;bt_bb_align_inherit&quot;,&quot;xxl&quot;:&quot;inherit&quot;}}">
                            <h3 class="bt_bb_headline_tag">
                              <span class="bt_bb_headline_content">
                                <span>Our Programs</span>
                              </span>
                            </h3>
                          </header>

                          <div class="bt_bb_text">
                            <p>Our extra curricular combined with our own digital lesson planning tool, enable teachers
                              to create personalized learning experiences, appropriate to every age group.</p>
                          </div>
                          <div data-bb-version="4.5.9"
                            class="bt_bb_separator_v2 bt_bb_border_style_none bt_bb_top_spacing_none bt_bb_bottom_spacing_50 bt_bb_border_thickness_1 bt_bb_icon_size_normal bt_bb_text_size_normal bt_bb_separator_v2_without_content"
                            data-bt-override-class="{&quot;bt_bb_top_spacing_&quot;:{&quot;current_class&quot;:&quot;bt_bb_top_spacing_none&quot;,&quot;xxl&quot;:&quot;none&quot;},&quot;bt_bb_bottom_spacing_&quot;:{&quot;current_class&quot;:&quot;bt_bb_bottom_spacing_50&quot;,&quot;xxl&quot;:&quot;50&quot;},&quot;bt_bb_border_thickness_&quot;:{&quot;current_class&quot;:&quot;bt_bb_border_thickness_1&quot;,&quot;xxl&quot;:&quot;1&quot;},&quot;bt_bb_icon_size_&quot;:{&quot;current_class&quot;:&quot;bt_bb_icon_size_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;},&quot;bt_bb_text_size_&quot;:{&quot;current_class&quot;:&quot;bt_bb_text_size_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;}}">
                            <div class="bt_bb_separator_v2_inner">
                              <span class="bt_bb_separator_v2_inner_before"></span>
                              <span class="bt_bb_separator_v2_inner_content">
                                <span data-ico-="&#x;" class="bt_bb_icon_holder"></span>
                              </span>
                              <span class="bt_bb_separator_v2_inner_after"></span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="bt_bb_row_wrapper">
                  <div class="bt_bb_row bt_bb_column_gap_15 bt_bb_negative_margin_" data-bt-override-class="{}">
                    <div data-bb-version="4.5.9"
                      class="bt_bb_column col-xxl-2_4 col-xl-2_4 col-xs-6 col-sm-6 col-md-6 col-lg-2_4 bt_bb_vertical_align_top bt_bb_align_left bt_bb_padding_normal bt_bb_animation_fade_in bt_bb_animation_move_up animate"
                      data-width="2.4"
                      data-bt-override-class="{&quot;bt_bb_align_&quot;:{&quot;current_class&quot;:&quot;bt_bb_align_left&quot;,&quot;xxl&quot;:&quot;left&quot;},&quot;bt_bb_padding_&quot;:{&quot;current_class&quot;:&quot;bt_bb_padding_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;}}">
                      <div class="bt_bb_column_content">
                        <div class="bt_bb_column_content_inner">
                          <div data-bb-version="4.6.1"
                            class="bt_bb_card bt_bb_padding_25 btWithLink bt_bb_image_position_rotate bt_bb_color_scheme_2"
                            style="background-color:rgb(250,249,249);; --primary-color:#282828; --secondary-color:#ffffff;"
                            data-bt-override-class="{&quot;bt_bb_padding_&quot;:{&quot;current_class&quot;:&quot;bt_bb_padding_25&quot;,&quot;xxl&quot;:&quot;25&quot;}}">
                            <a href="<?php echo base_url(); ?>our-programmes" target="_self" class="btCardLink"></a>
                            <div class="bt_bb_card_content">
                              <div
                                class="bt_bb_separator_v2 bt_bb_border_style_none bt_bb_top_spacing_none bt_bb_bottom_spacing_normal bt_bb_border_thickness_1 bt_bb_icon_size_normal bt_bb_text_size_normal bt_bb_separator_v2_without_content"
                                data-bt-override-class="{&quot;bt_bb_top_spacing_&quot;:{&quot;current_class&quot;:&quot;bt_bb_top_spacing_none&quot;,&quot;xxl&quot;:&quot;none&quot;,&quot;xl&quot;:&quot;none&quot;},&quot;bt_bb_bottom_spacing_&quot;:{&quot;current_class&quot;:&quot;bt_bb_bottom_spacing_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;,&quot;xl&quot;:&quot;normal&quot;},&quot;bt_bb_border_thickness_&quot;:{&quot;current_class&quot;:&quot;bt_bb_border_thickness_1&quot;,&quot;xxl&quot;:&quot;1&quot;,&quot;xl&quot;:&quot;1&quot;},&quot;bt_bb_icon_size_&quot;:{&quot;current_class&quot;:&quot;bt_bb_icon_size_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;,&quot;xl&quot;:&quot;normal&quot;},&quot;bt_bb_text_size_&quot;:{&quot;current_class&quot;:&quot;bt_bb_text_size_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;,&quot;xl&quot;:&quot;normal&quot;}}">
                                <div class="bt_bb_separator_v2_inner">
                                  <span class="bt_bb_separator_v2_inner_before"></span>
                                  <span class="bt_bb_separator_v2_inner_content">
                                    <span data-ico-="&#x;" class="bt_bb_icon_holder"></span>
                                  </span>
                                  <span class="bt_bb_separator_v2_inner_after"></span>
                                </div>
                              </div>
                              <header data-bb-version="4.5.9"
                                class="bt_bb_headline bt_bb_subheadline_text_transform_default bt_bb_dash_none bt_bb_size_extrasmall bt_bb_align_inherit"
                                style=";color:rgb(97,185,187);border-color:rgb(97,185,187);"
                                data-bt-override-class="{&quot;bt_bb_size_&quot;:{&quot;current_class&quot;:&quot;bt_bb_size_extrasmall&quot;,&quot;xxl&quot;:&quot;extrasmall&quot;},&quot;bt_bb_align_&quot;:{&quot;current_class&quot;:&quot;bt_bb_align_inherit&quot;,&quot;xxl&quot;:&quot;inherit&quot;}}">
                                <h4 class="bt_bb_headline_tag">
                                  <span class="bt_bb_headline_content">
                                    <span>Play Group</span>
                                  </span>
                                </h4>
                              </header>
                              <div
                                class="bt_bb_separator_v2 bt_bb_border_style_none bt_bb_top_spacing_none bt_bb_bottom_spacing_extra_small bt_bb_border_thickness_1 bt_bb_icon_size_normal bt_bb_text_size_normal bt_bb_separator_v2_without_content"
                                data-bt-override-class="{&quot;bt_bb_top_spacing_&quot;:{&quot;current_class&quot;:&quot;bt_bb_top_spacing_none&quot;,&quot;xxl&quot;:&quot;none&quot;,&quot;xl&quot;:&quot;none&quot;},&quot;bt_bb_bottom_spacing_&quot;:{&quot;current_class&quot;:&quot;bt_bb_bottom_spacing_extra_small&quot;,&quot;xxl&quot;:&quot;extra_small&quot;,&quot;xl&quot;:&quot;extra_small&quot;},&quot;bt_bb_border_thickness_&quot;:{&quot;current_class&quot;:&quot;bt_bb_border_thickness_1&quot;,&quot;xxl&quot;:&quot;1&quot;,&quot;xl&quot;:&quot;1&quot;},&quot;bt_bb_icon_size_&quot;:{&quot;current_class&quot;:&quot;bt_bb_icon_size_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;,&quot;xl&quot;:&quot;normal&quot;},&quot;bt_bb_text_size_&quot;:{&quot;current_class&quot;:&quot;bt_bb_text_size_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;,&quot;xl&quot;:&quot;normal&quot;}}">
                                <div class="bt_bb_separator_v2_inner">
                                  <span class="bt_bb_separator_v2_inner_before"></span>
                                  <span class="bt_bb_separator_v2_inner_content">
                                    <span data-ico-="&#x;" class="bt_bb_icon_holder"></span>
                                  </span>
                                  <span class="bt_bb_separator_v2_inner_after"></span>
                                </div>
                              </div>
                              <div class="bt_bb_text">
                                <p>
                                  <strong>Age: </strong>2 years to 3 years
                                </p>
                              </div>
                            </div>
                            <div class="bt_bb_card_image">
                              <img decoding="async" src="<?= base_url(); ?>uploads/2023/07/Playgroup.jpg"
                                alt="Kidozonia Preschool age">
                            </div>
                          </div>
                          <div
                            class="bt_bb_separator_v2 bt_bb_border_style_none bt_bb_bottom_spacing_normal bt_bb_icon_size_normal bt_bb_text_size_normal bt_bb_separator_v2_without_content"
                            data-bt-override-class="null">
                            <div class="bt_bb_separator_v2_inner">
                              <span class="bt_bb_separator_v2_inner_before"></span>
                              <span class="bt_bb_separator_v2_inner_content">
                                <span data-ico-="&#x;" class="bt_bb_icon_holder"></span>
                              </span>
                              <span class="bt_bb_separator_v2_inner_after"></span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div
                      class="bt_bb_column col-xxl-2_4 col-xl-2_4 col-xs-6 col-sm-6 col-md-6 col-lg-2_4 bt_bb_vertical_align_top bt_bb_align_left bt_bb_padding_normal bt_bb_animation_fade_in bt_bb_animation_move_up animate bt_bb_shape_inherit"
                      data-width="2.4"
                      data-bt-override-class="{&quot;bt_bb_align_&quot;:{&quot;current_class&quot;:&quot;bt_bb_align_left&quot;,&quot;xxl&quot;:&quot;left&quot;,&quot;xl&quot;:&quot;left&quot;},&quot;bt_bb_padding_&quot;:{&quot;current_class&quot;:&quot;bt_bb_padding_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;,&quot;xl&quot;:&quot;normal&quot;}}">
                      <div class="bt_bb_column_content">
                        <div class="bt_bb_column_content_inner">
                          <div data-bb-version="4.6.1"
                            class="bt_bb_card bt_bb_padding_25 btWithLink bt_bb_image_position_rotate bt_bb_color_scheme_2"
                            style="background-color:rgb(247,243,238);; --primary-color:#282828; --secondary-color:#ffffff;"
                            data-bt-override-class="{&quot;bt_bb_padding_&quot;:{&quot;current_class&quot;:&quot;bt_bb_padding_25&quot;,&quot;xxl&quot;:&quot;25&quot;}}">
                            <a href="<?php echo base_url(); ?>our-programmes" target="_self" class="btCardLink"></a>
                            <div class="bt_bb_card_content">
                              <div
                                class="bt_bb_separator_v2 bt_bb_border_style_none bt_bb_top_spacing_none bt_bb_bottom_spacing_normal bt_bb_border_thickness_1 bt_bb_icon_size_normal bt_bb_text_size_normal bt_bb_separator_v2_without_content"
                                data-bt-override-class="{&quot;bt_bb_top_spacing_&quot;:{&quot;current_class&quot;:&quot;bt_bb_top_spacing_none&quot;,&quot;xxl&quot;:&quot;none&quot;,&quot;xl&quot;:&quot;none&quot;},&quot;bt_bb_bottom_spacing_&quot;:{&quot;current_class&quot;:&quot;bt_bb_bottom_spacing_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;,&quot;xl&quot;:&quot;normal&quot;},&quot;bt_bb_border_thickness_&quot;:{&quot;current_class&quot;:&quot;bt_bb_border_thickness_1&quot;,&quot;xxl&quot;:&quot;1&quot;,&quot;xl&quot;:&quot;1&quot;},&quot;bt_bb_icon_size_&quot;:{&quot;current_class&quot;:&quot;bt_bb_icon_size_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;,&quot;xl&quot;:&quot;normal&quot;},&quot;bt_bb_text_size_&quot;:{&quot;current_class&quot;:&quot;bt_bb_text_size_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;,&quot;xl&quot;:&quot;normal&quot;}}">
                                <div class="bt_bb_separator_v2_inner">
                                  <span class="bt_bb_separator_v2_inner_before"></span>
                                  <span class="bt_bb_separator_v2_inner_content">
                                    <span data-ico-="&#x;" class="bt_bb_icon_holder"></span>
                                  </span>
                                  <span class="bt_bb_separator_v2_inner_after"></span>
                                </div>
                              </div>
                              <header data-bb-version="4.5.9"
                                class="bt_bb_headline bt_bb_subheadline_text_transform_default bt_bb_dash_none bt_bb_size_extrasmall bt_bb_align_inherit"
                                style=";color:rgb(97,185,187);border-color:rgb(97,185,187);"
                                data-bt-override-class="{&quot;bt_bb_size_&quot;:{&quot;current_class&quot;:&quot;bt_bb_size_extrasmall&quot;,&quot;xxl&quot;:&quot;extrasmall&quot;},&quot;bt_bb_align_&quot;:{&quot;current_class&quot;:&quot;bt_bb_align_inherit&quot;,&quot;xxl&quot;:&quot;inherit&quot;}}">
                                <h4 class="bt_bb_headline_tag">
                                  <span class="bt_bb_headline_content">
                                    <span>Nursery</span>
                                  </span>
                                </h4>
                              </header>
                              <div
                                class="bt_bb_separator_v2 bt_bb_border_style_none bt_bb_top_spacing_none bt_bb_bottom_spacing_extra_small bt_bb_border_thickness_1 bt_bb_icon_size_normal bt_bb_text_size_normal bt_bb_separator_v2_without_content"
                                data-bt-override-class="{&quot;bt_bb_top_spacing_&quot;:{&quot;current_class&quot;:&quot;bt_bb_top_spacing_none&quot;,&quot;xxl&quot;:&quot;none&quot;,&quot;xl&quot;:&quot;none&quot;},&quot;bt_bb_bottom_spacing_&quot;:{&quot;current_class&quot;:&quot;bt_bb_bottom_spacing_extra_small&quot;,&quot;xxl&quot;:&quot;extra_small&quot;,&quot;xl&quot;:&quot;extra_small&quot;},&quot;bt_bb_border_thickness_&quot;:{&quot;current_class&quot;:&quot;bt_bb_border_thickness_1&quot;,&quot;xxl&quot;:&quot;1&quot;,&quot;xl&quot;:&quot;1&quot;},&quot;bt_bb_icon_size_&quot;:{&quot;current_class&quot;:&quot;bt_bb_icon_size_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;,&quot;xl&quot;:&quot;normal&quot;},&quot;bt_bb_text_size_&quot;:{&quot;current_class&quot;:&quot;bt_bb_text_size_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;,&quot;xl&quot;:&quot;normal&quot;}}">
                                <div class="bt_bb_separator_v2_inner">
                                  <span class="bt_bb_separator_v2_inner_before"></span>
                                  <span class="bt_bb_separator_v2_inner_content">
                                    <span data-ico-="&#x;" class="bt_bb_icon_holder"></span>
                                  </span>
                                  <span class="bt_bb_separator_v2_inner_after"></span>
                                </div>
                              </div>
                              <div class="bt_bb_text">
                                <p>
                                  <strong>Age:</strong> 3 years to 4 years
                                </p>
                              </div>
                            </div>
                            <div class="bt_bb_card_image">
                              <img decoding="async" src="<?= base_url(); ?>uploads/2023/07/Nursery.jpg"
                                alt="Kidozonia LKG School">
                            </div>
                          </div>
                          <div
                            class="bt_bb_separator_v2 bt_bb_border_style_none bt_bb_bottom_spacing_normal bt_bb_icon_size_normal bt_bb_text_size_normal bt_bb_separator_v2_without_content"
                            data-bt-override-class="null">
                            <div class="bt_bb_separator_v2_inner">
                              <span class="bt_bb_separator_v2_inner_before"></span>
                              <span class="bt_bb_separator_v2_inner_content">
                                <span data-ico-="&#x;" class="bt_bb_icon_holder"></span>
                              </span>
                              <span class="bt_bb_separator_v2_inner_after"></span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div
                      class="bt_bb_column col-xxl-2_4 col-xl-2_4 col-xs-6 col-sm-6 col-md-6 col-lg-2_4 bt_bb_vertical_align_top bt_bb_align_left bt_bb_padding_normal bt_bb_animation_fade_in bt_bb_animation_move_up animate bt_bb_shape_inherit"
                      data-width="2.4"
                      data-bt-override-class="{&quot;bt_bb_align_&quot;:{&quot;current_class&quot;:&quot;bt_bb_align_left&quot;,&quot;xxl&quot;:&quot;left&quot;,&quot;xl&quot;:&quot;left&quot;},&quot;bt_bb_padding_&quot;:{&quot;current_class&quot;:&quot;bt_bb_padding_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;,&quot;xl&quot;:&quot;normal&quot;}}">
                      <div class="bt_bb_column_content">
                        <div class="bt_bb_column_content_inner">
                          <div data-bb-version="4.6.1"
                            class="bt_bb_card bt_bb_padding_25 btWithLink bt_bb_image_position_rotate bt_bb_color_scheme_2"
                            style="background-color:rgb(250,249,249);; --primary-color:#282828; --secondary-color:#ffffff;"
                            data-bt-override-class="{&quot;bt_bb_padding_&quot;:{&quot;current_class&quot;:&quot;bt_bb_padding_25&quot;,&quot;xxl&quot;:&quot;25&quot;}}">
                            <a href="<?php echo base_url(); ?>our-programmes" target="_self" class="btCardLink"></a>
                            <div class="bt_bb_card_content">
                              <div
                                class="bt_bb_separator_v2 bt_bb_border_style_none bt_bb_top_spacing_none bt_bb_bottom_spacing_normal bt_bb_border_thickness_1 bt_bb_icon_size_normal bt_bb_text_size_normal bt_bb_separator_v2_without_content"
                                data-bt-override-class="{&quot;bt_bb_top_spacing_&quot;:{&quot;current_class&quot;:&quot;bt_bb_top_spacing_none&quot;,&quot;xxl&quot;:&quot;none&quot;,&quot;xl&quot;:&quot;none&quot;},&quot;bt_bb_bottom_spacing_&quot;:{&quot;current_class&quot;:&quot;bt_bb_bottom_spacing_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;,&quot;xl&quot;:&quot;normal&quot;},&quot;bt_bb_border_thickness_&quot;:{&quot;current_class&quot;:&quot;bt_bb_border_thickness_1&quot;,&quot;xxl&quot;:&quot;1&quot;,&quot;xl&quot;:&quot;1&quot;},&quot;bt_bb_icon_size_&quot;:{&quot;current_class&quot;:&quot;bt_bb_icon_size_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;,&quot;xl&quot;:&quot;normal&quot;},&quot;bt_bb_text_size_&quot;:{&quot;current_class&quot;:&quot;bt_bb_text_size_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;,&quot;xl&quot;:&quot;normal&quot;}}">
                                <div class="bt_bb_separator_v2_inner">
                                  <span class="bt_bb_separator_v2_inner_before"></span>
                                  <span class="bt_bb_separator_v2_inner_content">
                                    <span data-ico-="&#x;" class="bt_bb_icon_holder"></span>
                                  </span>
                                  <span class="bt_bb_separator_v2_inner_after"></span>
                                </div>
                              </div>
                              <header data-bb-version="4.5.9"
                                class="bt_bb_headline bt_bb_subheadline_text_transform_default bt_bb_dash_none bt_bb_size_extrasmall bt_bb_align_inherit"
                                style=";color:rgb(97,185,187);border-color:rgb(97,185,187);"
                                data-bt-override-class="{&quot;bt_bb_size_&quot;:{&quot;current_class&quot;:&quot;bt_bb_size_extrasmall&quot;,&quot;xxl&quot;:&quot;extrasmall&quot;},&quot;bt_bb_align_&quot;:{&quot;current_class&quot;:&quot;bt_bb_align_inherit&quot;,&quot;xxl&quot;:&quot;inherit&quot;}}">
                                <h4 class="bt_bb_headline_tag">
                                  <span class="bt_bb_headline_content">
                                    <span>Kidzo Junior</span>
                                  </span>
                                </h4>
                              </header>
                              <div
                                class="bt_bb_separator_v2 bt_bb_border_style_none bt_bb_top_spacing_none bt_bb_bottom_spacing_extra_small bt_bb_border_thickness_1 bt_bb_icon_size_normal bt_bb_text_size_normal bt_bb_separator_v2_without_content"
                                data-bt-override-class="{&quot;bt_bb_top_spacing_&quot;:{&quot;current_class&quot;:&quot;bt_bb_top_spacing_none&quot;,&quot;xxl&quot;:&quot;none&quot;,&quot;xl&quot;:&quot;none&quot;},&quot;bt_bb_bottom_spacing_&quot;:{&quot;current_class&quot;:&quot;bt_bb_bottom_spacing_extra_small&quot;,&quot;xxl&quot;:&quot;extra_small&quot;,&quot;xl&quot;:&quot;extra_small&quot;},&quot;bt_bb_border_thickness_&quot;:{&quot;current_class&quot;:&quot;bt_bb_border_thickness_1&quot;,&quot;xxl&quot;:&quot;1&quot;,&quot;xl&quot;:&quot;1&quot;},&quot;bt_bb_icon_size_&quot;:{&quot;current_class&quot;:&quot;bt_bb_icon_size_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;,&quot;xl&quot;:&quot;normal&quot;},&quot;bt_bb_text_size_&quot;:{&quot;current_class&quot;:&quot;bt_bb_text_size_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;,&quot;xl&quot;:&quot;normal&quot;}}">
                                <div class="bt_bb_separator_v2_inner">
                                  <span class="bt_bb_separator_v2_inner_before"></span>
                                  <span class="bt_bb_separator_v2_inner_content">
                                    <span data-ico-="&#x;" class="bt_bb_icon_holder"></span>
                                  </span>
                                  <span class="bt_bb_separator_v2_inner_after"></span>
                                </div>
                              </div>
                              <div class="bt_bb_text">
                                <p>
                                  <strong>Age:</strong> 4 years to 5 years
                                </p>
                              </div>
                            </div>
                            <div class="bt_bb_card_image">
                              <img decoding="async" src="<?= base_url(); ?>uploads/2023/07/Kidzo-Junior.jpg"
                                alt="Kidozonia UKG School">
                            </div>
                          </div>
                          <div
                            class="bt_bb_separator_v2 bt_bb_border_style_none bt_bb_bottom_spacing_normal bt_bb_icon_size_normal bt_bb_text_size_normal bt_bb_separator_v2_without_content"
                            data-bt-override-class="null">
                            <div class="bt_bb_separator_v2_inner">
                              <span class="bt_bb_separator_v2_inner_before"></span>
                              <span class="bt_bb_separator_v2_inner_content">
                                <span data-ico-="&#x;" class="bt_bb_icon_holder"></span>
                              </span>
                              <span class="bt_bb_separator_v2_inner_after"></span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div
                      class="bt_bb_column col-xxl-2_4 col-xl-2_4 col-xs-6 col-sm-6 col-md-6 col-lg-2_4 bt_bb_vertical_align_top bt_bb_align_left bt_bb_padding_normal bt_bb_animation_fade_in bt_bb_animation_move_up animate bt_bb_shape_inherit"
                      data-width="2.4"
                      data-bt-override-class="{&quot;bt_bb_align_&quot;:{&quot;current_class&quot;:&quot;bt_bb_align_left&quot;,&quot;xxl&quot;:&quot;left&quot;,&quot;xl&quot;:&quot;left&quot;},&quot;bt_bb_padding_&quot;:{&quot;current_class&quot;:&quot;bt_bb_padding_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;,&quot;xl&quot;:&quot;normal&quot;}}">
                      <div class="bt_bb_column_content">
                        <div class="bt_bb_column_content_inner">
                          <div data-bb-version="4.6.1"
                            class="bt_bb_card bt_bb_padding_25 btWithLink bt_bb_image_position_rotate bt_bb_color_scheme_2"
                            style="background-color:rgb(247,243,238);; --primary-color:#282828; --secondary-color:#ffffff;"
                            data-bt-override-class="{&quot;bt_bb_padding_&quot;:{&quot;current_class&quot;:&quot;bt_bb_padding_25&quot;,&quot;xxl&quot;:&quot;25&quot;}}">
                            <a href="<?php echo base_url(); ?>our-programmes" target="_self" class="btCardLink"></a>
                            <div class="bt_bb_card_content">
                              <div
                                class="bt_bb_separator_v2 bt_bb_border_style_none bt_bb_top_spacing_none bt_bb_bottom_spacing_normal bt_bb_border_thickness_1 bt_bb_icon_size_normal bt_bb_text_size_normal bt_bb_separator_v2_without_content"
                                data-bt-override-class="{&quot;bt_bb_top_spacing_&quot;:{&quot;current_class&quot;:&quot;bt_bb_top_spacing_none&quot;,&quot;xxl&quot;:&quot;none&quot;,&quot;xl&quot;:&quot;none&quot;},&quot;bt_bb_bottom_spacing_&quot;:{&quot;current_class&quot;:&quot;bt_bb_bottom_spacing_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;,&quot;xl&quot;:&quot;normal&quot;},&quot;bt_bb_border_thickness_&quot;:{&quot;current_class&quot;:&quot;bt_bb_border_thickness_1&quot;,&quot;xxl&quot;:&quot;1&quot;,&quot;xl&quot;:&quot;1&quot;},&quot;bt_bb_icon_size_&quot;:{&quot;current_class&quot;:&quot;bt_bb_icon_size_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;,&quot;xl&quot;:&quot;normal&quot;},&quot;bt_bb_text_size_&quot;:{&quot;current_class&quot;:&quot;bt_bb_text_size_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;,&quot;xl&quot;:&quot;normal&quot;}}">
                                <div class="bt_bb_separator_v2_inner">
                                  <span class="bt_bb_separator_v2_inner_before"></span>
                                  <span class="bt_bb_separator_v2_inner_content">
                                    <span data-ico-="&#x;" class="bt_bb_icon_holder"></span>
                                  </span>
                                  <span class="bt_bb_separator_v2_inner_after"></span>
                                </div>
                              </div>
                              <header data-bb-version="4.5.9"
                                class="bt_bb_headline bt_bb_subheadline_text_transform_default bt_bb_dash_none bt_bb_size_extrasmall bt_bb_align_inherit"
                                style=";color:rgb(97,185,187);border-color:rgb(97,185,187);"
                                data-bt-override-class="{&quot;bt_bb_size_&quot;:{&quot;current_class&quot;:&quot;bt_bb_size_extrasmall&quot;,&quot;xxl&quot;:&quot;extrasmall&quot;},&quot;bt_bb_align_&quot;:{&quot;current_class&quot;:&quot;bt_bb_align_inherit&quot;,&quot;xxl&quot;:&quot;inherit&quot;}}">
                                <h4 class="bt_bb_headline_tag">
                                  <span class="bt_bb_headline_content">
                                    <span>Kidzo Senior</span>
                                  </span>
                                </h4>
                              </header>
                              <div
                                class="bt_bb_separator_v2 bt_bb_border_style_none bt_bb_top_spacing_none bt_bb_bottom_spacing_extra_small bt_bb_border_thickness_1 bt_bb_icon_size_normal bt_bb_text_size_normal bt_bb_separator_v2_without_content"
                                data-bt-override-class="{&quot;bt_bb_top_spacing_&quot;:{&quot;current_class&quot;:&quot;bt_bb_top_spacing_none&quot;,&quot;xxl&quot;:&quot;none&quot;,&quot;xl&quot;:&quot;none&quot;},&quot;bt_bb_bottom_spacing_&quot;:{&quot;current_class&quot;:&quot;bt_bb_bottom_spacing_extra_small&quot;,&quot;xxl&quot;:&quot;extra_small&quot;,&quot;xl&quot;:&quot;extra_small&quot;},&quot;bt_bb_border_thickness_&quot;:{&quot;current_class&quot;:&quot;bt_bb_border_thickness_1&quot;,&quot;xxl&quot;:&quot;1&quot;,&quot;xl&quot;:&quot;1&quot;},&quot;bt_bb_icon_size_&quot;:{&quot;current_class&quot;:&quot;bt_bb_icon_size_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;,&quot;xl&quot;:&quot;normal&quot;},&quot;bt_bb_text_size_&quot;:{&quot;current_class&quot;:&quot;bt_bb_text_size_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;,&quot;xl&quot;:&quot;normal&quot;}}">
                                <div class="bt_bb_separator_v2_inner">
                                  <span class="bt_bb_separator_v2_inner_before"></span>
                                  <span class="bt_bb_separator_v2_inner_content">
                                    <span data-ico-="&#x;" class="bt_bb_icon_holder"></span>
                                  </span>
                                  <span class="bt_bb_separator_v2_inner_after"></span>
                                </div>
                              </div>
                              <div class="bt_bb_text">
                                <p>
                                  <strong>Age:</strong> 5 years to 6 years
                                </p>
                              </div>
                            </div>
                            <div class="bt_bb_card_image">
                              <img decoding="async" src="<?= base_url(); ?>uploads/2023/07/Kidzo-Senior.jpg"
                                alt="Kidozonia Nursery School">
                            </div>
                          </div>
                          <div
                            class="bt_bb_separator_v2 bt_bb_border_style_none bt_bb_top_spacing_none bt_bb_bottom_spacing_normal bt_bb_border_thickness_1 bt_bb_icon_size_normal bt_bb_text_size_normal bt_bb_separator_v2_without_content bt_bb_hidden_xs bt_bb_hidden_ms bt_bb_hidden_sm"
                            data-bt-override-class="{&quot;bt_bb_top_spacing_&quot;:{&quot;current_class&quot;:&quot;bt_bb_top_spacing_none&quot;,&quot;xxl&quot;:&quot;none&quot;,&quot;xl&quot;:&quot;none&quot;},&quot;bt_bb_bottom_spacing_&quot;:{&quot;current_class&quot;:&quot;bt_bb_bottom_spacing_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;,&quot;xl&quot;:&quot;normal&quot;},&quot;bt_bb_border_thickness_&quot;:{&quot;current_class&quot;:&quot;bt_bb_border_thickness_1&quot;,&quot;xxl&quot;:&quot;1&quot;,&quot;xl&quot;:&quot;1&quot;},&quot;bt_bb_icon_size_&quot;:{&quot;current_class&quot;:&quot;bt_bb_icon_size_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;,&quot;xl&quot;:&quot;normal&quot;},&quot;bt_bb_text_size_&quot;:{&quot;current_class&quot;:&quot;bt_bb_text_size_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;,&quot;xl&quot;:&quot;normal&quot;}}">
                            <div class="bt_bb_separator_v2_inner">
                              <span class="bt_bb_separator_v2_inner_before"></span>
                              <span class="bt_bb_separator_v2_inner_content">
                                <span data-ico-="&#x;" class="bt_bb_icon_holder"></span>
                              </span>
                              <span class="bt_bb_separator_v2_inner_after"></span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div
                      class="bt_bb_column col-xxl-2_4 col-xl-2_4 col-xs-6 col-sm-6 col-md-6 col-lg-2_4 bt_bb_vertical_align_top bt_bb_align_left bt_bb_padding_normal bt_bb_animation_fade_in bt_bb_animation_move_up animate bt_bb_shape_inherit"
                      data-width="2.4"
                      data-bt-override-class="{&quot;bt_bb_align_&quot;:{&quot;current_class&quot;:&quot;bt_bb_align_left&quot;,&quot;xxl&quot;:&quot;left&quot;,&quot;xl&quot;:&quot;left&quot;},&quot;bt_bb_padding_&quot;:{&quot;current_class&quot;:&quot;bt_bb_padding_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;,&quot;xl&quot;:&quot;normal&quot;}}">
                      <div class="bt_bb_column_content">
                        <div class="bt_bb_column_content_inner">
                          <div data-bb-version="4.6.1"
                            class="bt_bb_card bt_bb_padding_25 btWithLink bt_bb_image_position_rotate bt_bb_color_scheme_2"
                            style="background-color:rgb(250,249,249);; --primary-color:#282828; --secondary-color:#ffffff;"
                            data-bt-override-class="{&quot;bt_bb_padding_&quot;:{&quot;current_class&quot;:&quot;bt_bb_padding_25&quot;,&quot;xxl&quot;:&quot;25&quot;}}">
                            <a href="<?php echo base_url(); ?>our-programmes" target="_self" class="btCardLink"></a>
                            <div class="bt_bb_card_content">
                              <div
                                class="bt_bb_separator_v2 bt_bb_border_style_none bt_bb_top_spacing_none bt_bb_bottom_spacing_normal bt_bb_border_thickness_1 bt_bb_icon_size_normal bt_bb_text_size_normal bt_bb_separator_v2_without_content"
                                data-bt-override-class="{&quot;bt_bb_top_spacing_&quot;:{&quot;current_class&quot;:&quot;bt_bb_top_spacing_none&quot;,&quot;xxl&quot;:&quot;none&quot;,&quot;xl&quot;:&quot;none&quot;},&quot;bt_bb_bottom_spacing_&quot;:{&quot;current_class&quot;:&quot;bt_bb_bottom_spacing_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;,&quot;xl&quot;:&quot;normal&quot;},&quot;bt_bb_border_thickness_&quot;:{&quot;current_class&quot;:&quot;bt_bb_border_thickness_1&quot;,&quot;xxl&quot;:&quot;1&quot;,&quot;xl&quot;:&quot;1&quot;},&quot;bt_bb_icon_size_&quot;:{&quot;current_class&quot;:&quot;bt_bb_icon_size_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;,&quot;xl&quot;:&quot;normal&quot;},&quot;bt_bb_text_size_&quot;:{&quot;current_class&quot;:&quot;bt_bb_text_size_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;,&quot;xl&quot;:&quot;normal&quot;}}">
                                <div class="bt_bb_separator_v2_inner">
                                  <span class="bt_bb_separator_v2_inner_before"></span>
                                  <span class="bt_bb_separator_v2_inner_content">
                                    <span data-ico-="&#x;" class="bt_bb_icon_holder"></span>
                                  </span>
                                  <span class="bt_bb_separator_v2_inner_after"></span>
                                </div>
                              </div>
                              <header data-bb-version="4.5.9"
                                class="bt_bb_headline bt_bb_subheadline_text_transform_default bt_bb_dash_none bt_bb_size_extrasmall bt_bb_align_inherit"
                                style=";color:rgb(97,185,187);border-color:rgb(97,185,187);"
                                data-bt-override-class="{&quot;bt_bb_size_&quot;:{&quot;current_class&quot;:&quot;bt_bb_size_extrasmall&quot;,&quot;xxl&quot;:&quot;extrasmall&quot;},&quot;bt_bb_align_&quot;:{&quot;current_class&quot;:&quot;bt_bb_align_inherit&quot;,&quot;xxl&quot;:&quot;inherit&quot;}}">
                                <h4 class="bt_bb_headline_tag">
                                  <span class="bt_bb_headline_content">
                                    <span>Day Care</span>
                                  </span>
                                </h4>
                              </header>
                              <div
                                class="bt_bb_separator_v2 bt_bb_border_style_none bt_bb_top_spacing_none bt_bb_bottom_spacing_extra_small bt_bb_border_thickness_1 bt_bb_icon_size_normal bt_bb_text_size_normal bt_bb_separator_v2_without_content"
                                data-bt-override-class="{&quot;bt_bb_top_spacing_&quot;:{&quot;current_class&quot;:&quot;bt_bb_top_spacing_none&quot;,&quot;xxl&quot;:&quot;none&quot;,&quot;xl&quot;:&quot;none&quot;},&quot;bt_bb_bottom_spacing_&quot;:{&quot;current_class&quot;:&quot;bt_bb_bottom_spacing_extra_small&quot;,&quot;xxl&quot;:&quot;extra_small&quot;,&quot;xl&quot;:&quot;extra_small&quot;},&quot;bt_bb_border_thickness_&quot;:{&quot;current_class&quot;:&quot;bt_bb_border_thickness_1&quot;,&quot;xxl&quot;:&quot;1&quot;,&quot;xl&quot;:&quot;1&quot;},&quot;bt_bb_icon_size_&quot;:{&quot;current_class&quot;:&quot;bt_bb_icon_size_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;,&quot;xl&quot;:&quot;normal&quot;},&quot;bt_bb_text_size_&quot;:{&quot;current_class&quot;:&quot;bt_bb_text_size_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;,&quot;xl&quot;:&quot;normal&quot;}}">
                                <div class="bt_bb_separator_v2_inner">
                                  <span class="bt_bb_separator_v2_inner_before"></span>
                                  <span class="bt_bb_separator_v2_inner_content">
                                    <span data-ico-="&#x;" class="bt_bb_icon_holder"></span>
                                  </span>
                                  <span class="bt_bb_separator_v2_inner_after"></span>
                                </div>
                              </div>
                              <div class="bt_bb_text">
                                <p>
                                  <strong>Age:</strong> 18 months above
                                </p>
                              </div>
                            </div>
                            <div class="bt_bb_card_image">
                              <img decoding="async" src="<?= base_url(); ?>uploads/2023/07/Daycare.jpg"
                                alt="Kidozonia Best Preschool">
                            </div>
                          </div>
                          <div
                            class="bt_bb_separator_v2 bt_bb_border_style_none bt_bb_top_spacing_none bt_bb_bottom_spacing_normal bt_bb_border_thickness_1 bt_bb_icon_size_normal bt_bb_text_size_normal bt_bb_separator_v2_without_content bt_bb_hidden_xs bt_bb_hidden_ms bt_bb_hidden_sm"
                            data-bt-override-class="{&quot;bt_bb_top_spacing_&quot;:{&quot;current_class&quot;:&quot;bt_bb_top_spacing_none&quot;,&quot;xxl&quot;:&quot;none&quot;,&quot;xl&quot;:&quot;none&quot;},&quot;bt_bb_bottom_spacing_&quot;:{&quot;current_class&quot;:&quot;bt_bb_bottom_spacing_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;,&quot;xl&quot;:&quot;normal&quot;},&quot;bt_bb_border_thickness_&quot;:{&quot;current_class&quot;:&quot;bt_bb_border_thickness_1&quot;,&quot;xxl&quot;:&quot;1&quot;,&quot;xl&quot;:&quot;1&quot;},&quot;bt_bb_icon_size_&quot;:{&quot;current_class&quot;:&quot;bt_bb_icon_size_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;,&quot;xl&quot;:&quot;normal&quot;},&quot;bt_bb_text_size_&quot;:{&quot;current_class&quot;:&quot;bt_bb_text_size_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;,&quot;xl&quot;:&quot;normal&quot;}}">
                            <div class="bt_bb_separator_v2_inner">
                              <span class="bt_bb_separator_v2_inner_before"></span>
                              <span class="bt_bb_separator_v2_inner_content">
                                <span data-ico-="&#x;" class="bt_bb_icon_holder"></span>
                              </span>
                              <span class="bt_bb_separator_v2_inner_after"></span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div data-bb-version="4.5.9" class="bt_bb_row_wrapper">
                  <div class="bt_bb_row" data-bt-override-class="{}">
                    <div data-bb-version="4.5.9"
                      class="bt_bb_column col-xxl-12 col-xl-12 col-xs-6 col-sm-6 col-md-12 col-lg-12 bt_bb_vertical_align_top bt_bb_align_left bt_bb_padding_normal bt_bb_shape_inherit"
                      data-width="12" data-bt-override-class="{}">
                      <div class="bt_bb_column_content">
                        <div class="bt_bb_column_content_inner"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- cell_inner -->
            </div>
            <!-- cell -->
          </div>
          <!-- port -->
          <div class="bt_bb_section_bottom_section_coverage_image">
            <img decoding="async" src="<?= base_url(); ?>uploads/2022/04/bottom_white_wave_01.png"
              alt="Kidozonia Daycare School" />
          </div>
        </section>

        <section data-bb-version="4.6.0" id="bt_bb_section656da18e421b6"
          class="bt_bb_section bt_bb_layout_boxed_1200 bt_bb_vertical_align_top bt_bb_top_section_coverage_image bt_bb_section_with_top_coverage_image bt_bb_bottom_section_coverage_image bt_bb_section_with_bottom_coverage_image bt_bb_top_spacing_extra_large bt_bb_bottom_spacing_large bt_bb_negative_margin_none"
          style="background-color: rgb(249, 244, 241)"
          data-bt-override-class='{"bt_bb_top_spacing_":{"current_class":"bt_bb_top_spacing_extra_large","xxl":"extra_large"},"bt_bb_bottom_spacing_":{"current_class":"bt_bb_bottom_spacing_large","xxl":"large"}}'>
          <div class="bt_bb_port">
            <div class="bt_bb_cell">
              <div class="bt_bb_cell_inner">
                <div class="bt_bb_row_wrapper">
                  <div class="bt_bb_row" data-bt-override-class="{}">
                    <div
                      class="bt_bb_column col-xxl-12 col-xl-12 col-xs-12 col-sm-12 col-md-12 col-lg-9 bt_bb_vertical_align_top bt_bb_align_left bt_bb_padding_normal bt_bb_animation_fade_in animate bt_bb_shape_inherit"
                      data-width="12"
                      data-bt-override-class='{"bt_bb_align_":{"current_class":"bt_bb_align_left","xxl":"left","xl":"left"},"bt_bb_padding_":{"current_class":"bt_bb_padding_normal","xxl":"normal","xl":"normal"}}'>
                      <div class="bt_bb_column_content">
                        <div class="bt_bb_column_content_inner">
                          <header data-bb-version="4.6.0"
                            class="bt_bb_headline bt_bb_subheadline_text_transform_default bt_bb_color_scheme_5 bt_bb_dash_none bt_bb_size_extralarge bt_bb_align_inherit"
                            style="
                              --primary-color: #282828;
                              --secondary-color: var(--accent-color);
                            "
                            data-bt-override-class='{"bt_bb_size_":{"current_class":"bt_bb_size_extralarge","xxl":"extralarge"},"bt_bb_align_":{"current_class":"bt_bb_align_inherit","xxl":"inherit"}}'>
                            <h3 class="bt_bb_headline_tag">
                              <span class="bt_bb_headline_content"><span>Admission Eligibility & Process</span></span>
                            </h3>
                          </header>
                          <div
                            class="bt_bb_separator_v2 bt_bb_border_style_none bt_bb_top_spacing_none bt_bb_bottom_spacing_20 bt_bb_border_thickness_1 bt_bb_icon_size_normal bt_bb_text_size_normal bt_bb_separator_v2_without_content"
                            data-bt-override-class='{"bt_bb_top_spacing_":{"current_class":"bt_bb_top_spacing_none","xxl":"none","xl":"none"},"bt_bb_bottom_spacing_":{"current_class":"bt_bb_bottom_spacing_20","xxl":"20","xl":"20"},"bt_bb_border_thickness_":{"current_class":"bt_bb_border_thickness_1","xxl":"1","xl":"1"},"bt_bb_icon_size_":{"current_class":"bt_bb_icon_size_normal","xxl":"normal","xl":"normal"},"bt_bb_text_size_":{"current_class":"bt_bb_text_size_normal","xxl":"normal","xl":"normal"}}'>
                            <div class="bt_bb_separator_v2_inner">
                              <span class="bt_bb_separator_v2_inner_before"></span><span
                                class="bt_bb_separator_v2_inner_content"><span data-ico-="&#x;"
                                  class="bt_bb_icon_holder"></span></span><span
                                class="bt_bb_separator_v2_inner_after"></span>
                            </div>
                          </div>
                          <div
                            class="bt_bb_separator_v2 bt_bb_border_style_none bt_bb_top_spacing_none bt_bb_bottom_spacing_40 bt_bb_border_thickness_1 bt_bb_icon_size_normal bt_bb_text_size_normal bt_bb_separator_v2_without_content"
                            data-bt-override-class='{"bt_bb_top_spacing_":{"current_class":"bt_bb_top_spacing_none","xxl":"none","xl":"none"},"bt_bb_bottom_spacing_":{"current_class":"bt_bb_bottom_spacing_40","xxl":"40","xl":"40"},"bt_bb_border_thickness_":{"current_class":"bt_bb_border_thickness_1","xxl":"1","xl":"1"},"bt_bb_icon_size_":{"current_class":"bt_bb_icon_size_normal","xxl":"normal","xl":"normal"},"bt_bb_text_size_":{"current_class":"bt_bb_text_size_normal","xxl":"normal","xl":"normal"}}'>
                            <div class="bt_bb_separator_v2_inner">
                              <span class="bt_bb_separator_v2_inner_before"></span><span
                                class="bt_bb_separator_v2_inner_content"><span data-ico-="&#x;"
                                  class="bt_bb_icon_holder"></span></span><span
                                class="bt_bb_separator_v2_inner_after"></span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div
                      class="bt_bb_column col-xxl-3 col-xl-3 col-xs-12 col-sm-12 col-md-12 col-lg-3 bt_bb_vertical_align_top bt_bb_align_right bt_bb_padding_normal bt_bb_animation_fade_in bt_bb_animation_move_left animate bt_bb_shape_inherit"
                      data-width="3"
                      data-bt-override-class='{"bt_bb_align_":{"current_class":"bt_bb_align_right","xxl":"right","xl":"right","md":"left","sm":"left","xs":"left"},"bt_bb_padding_":{"current_class":"bt_bb_padding_normal","xxl":"normal","xl":"normal"}}'>
                      <div class="bt_bb_column_content">
                        <div class="bt_bb_column_content_inner">
                          <div
                            class="bt_bb_separator_v2 bt_bb_border_style_none bt_bb_top_spacing_none bt_bb_bottom_spacing_none bt_bb_border_thickness_1 bt_bb_icon_size_normal bt_bb_text_size_normal bt_bb_separator_v2_without_content"
                            data-bt-override-class='{"bt_bb_top_spacing_":{"current_class":"bt_bb_top_spacing_none","xxl":"none","xl":"none"},"bt_bb_bottom_spacing_":{"current_class":"bt_bb_bottom_spacing_none","xxl":"none","xl":"none","md":"40","sm":"40","xs":"40"},"bt_bb_border_thickness_":{"current_class":"bt_bb_border_thickness_1","xxl":"1","xl":"1"},"bt_bb_icon_size_":{"current_class":"bt_bb_icon_size_normal","xxl":"normal","xl":"normal"},"bt_bb_text_size_":{"current_class":"bt_bb_text_size_normal","xxl":"normal","xl":"normal"}}'>
                            <div class="bt_bb_separator_v2_inner">
                              <span class="bt_bb_separator_v2_inner_before"></span><span
                                class="bt_bb_separator_v2_inner_content"><span data-ico-="&#x;"
                                  class="bt_bb_icon_holder"></span></span><span
                                class="bt_bb_separator_v2_inner_after"></span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="bt_bb_row_wrapper">
                  <div class="bt_bb_row" data-bt-override-class="{}">
                    <div
                      class="bt_bb_column col-xxl-12 col-xl-12 col-xs-12 col-sm-12 col-md-12 col-lg-12 bt_bb_vertical_align_top bt_bb_align_left bt_bb_padding_normal bt_bb_animation_fade_in animate bt_bb_shape_inherit"
                      data-width="12"
                      data-bt-override-class='{"bt_bb_align_":{"current_class":"bt_bb_align_left","xxl":"left","xl":"left"},"bt_bb_padding_":{"current_class":"bt_bb_padding_normal","xxl":"normal","xl":"normal"}}'>
                      <div class="bt_bb_column_content">
                        <div class="bt_bb_column_content_inner">
                          <div class="bt_bb_tabs bt_bb_color_scheme_6 bt_bb_style_filled" style="
                              --tabs-primary-color: #ffffff;
                              --tabs-secondary-color: var(--accent-color);
                            " data-bt-override-class="{}">
                            <ul class="bt_bb_tabs_header">
                              <li class="bt_bb_tab_title">
                                <span class="bt_bb_tab_title">Admission Eligibility</span>
                              </li>
                              <li class="bt_bb_tab_title">
                                <span class="bt_bb_tab_title">Admission Procedure</span>
                              </li>
                              <li class="bt_bb_tab_title">
                                <span class="bt_bb_tab_title">Documents</span>
                              </li>
                            </ul>
                            <div class="bt_bb_tabs_tabs">
                              <div class="bt_bb_tab_item">
                                <div class="bt_bb_tab_content">
                                  <div class="bt_bb_row_inner" style="background-color: rgb(255, 255, 255)">
                                    <div
                                      class="bt_bb_column_inner col-xxl-12 col-xl-12 col-xs-12 col-sm-12 col-md-12 col-lg-12 bt_bb_align_left bt_bb_vertical_align_top bt_bb_shape_inherit"
                                      data-width="12" data-bt-override-class="{}">
                                      <div class="bt_bb_column_inner_content">
                                        <div class="bt_bb_card bt_bb_padding_25 btWithLink bt_bb_color_scheme_2" style="
                                            --primary-color: #282828;
                                            --secondary-color: #ffffff;
                                          "
                                          data-bt-override-class='{"bt_bb_padding_":{"current_class":"bt_bb_padding_25","xxl":"25","xl":"25"}}'>
                                          <a href="#" target="_self" class="btCardLink"></a>
                                          <div class="bt_bb_card_content">
                                            <div
                                              class="bt_bb_separator_v2 bt_bb_border_style_none bt_bb_top_spacing_none bt_bb_bottom_spacing_normal bt_bb_border_thickness_1 bt_bb_icon_size_normal bt_bb_text_size_normal bt_bb_separator_v2_without_content"
                                              data-bt-override-class='{"bt_bb_top_spacing_":{"current_class":"bt_bb_top_spacing_none","xxl":"none","xl":"none"},"bt_bb_bottom_spacing_":{"current_class":"bt_bb_bottom_spacing_normal","xxl":"normal","xl":"normal"},"bt_bb_border_thickness_":{"current_class":"bt_bb_border_thickness_1","xxl":"1","xl":"1"},"bt_bb_icon_size_":{"current_class":"bt_bb_icon_size_normal","xxl":"normal","xl":"normal"},"bt_bb_text_size_":{"current_class":"bt_bb_text_size_normal","xxl":"normal","xl":"normal"}}'>
                                              <div class="bt_bb_separator_v2_inner">
                                                <span class="bt_bb_separator_v2_inner_before"></span><span
                                                  class="bt_bb_separator_v2_inner_content"><span data-ico-="&#x;"
                                                    class="bt_bb_icon_holder"></span></span><span
                                                  class="bt_bb_separator_v2_inner_after"></span>
                                              </div>
                                            </div>
                                            <header data-bb-version="4.6.0"
                                              class="bt_bb_headline bt_bb_subheadline_text_transform_default bt_bb_dash_none bt_bb_size_small bt_bb_align_inherit"
                                              data-bt-override-class='{"bt_bb_size_":{"current_class":"bt_bb_size_small","xxl":"small"},"bt_bb_align_":{"current_class":"bt_bb_align_inherit","xxl":"inherit"}}'>
                                              <h4 class="bt_bb_headline_tag">
                                                <span class="bt_bb_headline_content"><span>Admission
                                                    Eligibility</span></span>
                                              </h4>
                                            </header>
                                            <div
                                              class="bt_bb_separator_v2 bt_bb_border_style_none bt_bb_top_spacing_none bt_bb_bottom_spacing_small bt_bb_border_thickness_1 bt_bb_icon_size_normal bt_bb_text_size_normal bt_bb_separator_v2_without_content"
                                              data-bt-override-class='{"bt_bb_top_spacing_":{"current_class":"bt_bb_top_spacing_none","xxl":"none","xl":"none"},"bt_bb_bottom_spacing_":{"current_class":"bt_bb_bottom_spacing_small","xxl":"small","xl":"small"},"bt_bb_border_thickness_":{"current_class":"bt_bb_border_thickness_1","xxl":"1","xl":"1"},"bt_bb_icon_size_":{"current_class":"bt_bb_icon_size_normal","xxl":"normal","xl":"normal"},"bt_bb_text_size_":{"current_class":"bt_bb_text_size_normal","xxl":"normal","xl":"normal"}}'>
                                              <div class="bt_bb_separator_v2_inner">
                                                <span class="bt_bb_separator_v2_inner_before"></span><span
                                                  class="bt_bb_separator_v2_inner_content"><span data-ico-="&#x;"
                                                    class="bt_bb_icon_holder"></span></span><span
                                                  class="bt_bb_separator_v2_inner_after"></span>
                                              </div>
                                            </div>
                                            <div class="bt_bb_text">
                                              <ul>
                                                <li class="elementor-icon-list-item">
                                                  <span class="elementor-icon-list-text">Play group: 2 to 2.5
                                                    years</span>
                                                </li>
                                                <li class="elementor-icon-list-item">
                                                  <i class="fas fa-check-circle" aria-hidden="true"></i>
                                                  <span class="elementor-icon-list-text">Nursery: 3 years</span>
                                                </li>
                                                <li class="elementor-icon-list-item">
                                                  <i class="fas fa-check-circle" aria-hidden="true"></i>
                                                  <span class="elementor-icon-list-text">Kidzo Junior: 3 to 4
                                                    years</span>
                                                </li>
                                                <li class="elementor-icon-list-item">
                                                  <i class="fas fa-check-circle" aria-hidden="true"></i>
                                                  <span class="elementor-icon-list-text">Kidzo Senior: 5 to 6
                                                    years</span>
                                                </li>
                                                <li class="elementor-icon-list-item">
                                                  <i class="fas fa-check-circle" aria-hidden="true"></i>
                                                  <span class="elementor-icon-list-text">Day Care: Above 18
                                                    months</span>
                                                </li>
                                              </ul>
                                            </div>
                                            <div
                                              class="bt_bb_separator_v2 bt_bb_border_style_none bt_bb_top_spacing_none bt_bb_bottom_spacing_normal bt_bb_border_thickness_1 bt_bb_icon_size_normal bt_bb_text_size_normal bt_bb_separator_v2_without_content"
                                              data-bt-override-class='{"bt_bb_top_spacing_":{"current_class":"bt_bb_top_spacing_none","xxl":"none","xl":"none"},"bt_bb_bottom_spacing_":{"current_class":"bt_bb_bottom_spacing_normal","xxl":"normal","xl":"normal"},"bt_bb_border_thickness_":{"current_class":"bt_bb_border_thickness_1","xxl":"1","xl":"1"},"bt_bb_icon_size_":{"current_class":"bt_bb_icon_size_normal","xxl":"normal","xl":"normal"},"bt_bb_text_size_":{"current_class":"bt_bb_text_size_normal","xxl":"normal","xl":"normal"}}'>
                                              <div class="bt_bb_separator_v2_inner">
                                                <span class="bt_bb_separator_v2_inner_before"></span><span
                                                  class="bt_bb_separator_v2_inner_content"><span data-ico-="&#x;"
                                                    class="bt_bb_icon_holder"></span></span><span
                                                  class="bt_bb_separator_v2_inner_after"></span>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="bt_bb_tab_item">
                                <div class="bt_bb_tab_content">
                                  <div class="bt_bb_row_inner" style="background-color: rgb(255, 255, 255)">
                                    <div
                                      class="bt_bb_column_inner col-xxl-12 col-xl-12 col-xs-12 col-sm-12 col-md-12 col-lg-12 bt_bb_align_left bt_bb_vertical_align_top bt_bb_shape_inherit"
                                      data-width="12" data-bt-override-class="{}">
                                      <div class="bt_bb_column_inner_content">
                                        <div class="bt_bb_card bt_bb_padding_25 btWithLink bt_bb_color_scheme_2" style="
                                            --primary-color: #282828;
                                            --secondary-color: #ffffff;
                                          "
                                          data-bt-override-class='{"bt_bb_padding_":{"current_class":"bt_bb_padding_25","xxl":"25","xl":"25"}}'>
                                          <a href="#" target="_self" class="btCardLink"></a>
                                          <div class="bt_bb_card_content">
                                            <div
                                              class="bt_bb_separator_v2 bt_bb_border_style_none bt_bb_top_spacing_none bt_bb_bottom_spacing_normal bt_bb_border_thickness_1 bt_bb_icon_size_normal bt_bb_text_size_normal bt_bb_separator_v2_without_content"
                                              data-bt-override-class='{"bt_bb_top_spacing_":{"current_class":"bt_bb_top_spacing_none","xxl":"none","xl":"none"},"bt_bb_bottom_spacing_":{"current_class":"bt_bb_bottom_spacing_normal","xxl":"normal","xl":"normal"},"bt_bb_border_thickness_":{"current_class":"bt_bb_border_thickness_1","xxl":"1","xl":"1"},"bt_bb_icon_size_":{"current_class":"bt_bb_icon_size_normal","xxl":"normal","xl":"normal"},"bt_bb_text_size_":{"current_class":"bt_bb_text_size_normal","xxl":"normal","xl":"normal"}}'>
                                              <div class="bt_bb_separator_v2_inner">
                                                <span class="bt_bb_separator_v2_inner_before"></span><span
                                                  class="bt_bb_separator_v2_inner_content"><span data-ico-="&#x;"
                                                    class="bt_bb_icon_holder"></span></span><span
                                                  class="bt_bb_separator_v2_inner_after"></span>
                                              </div>
                                            </div>
                                            <header data-bb-version="4.6.0"
                                              class="bt_bb_headline bt_bb_subheadline_text_transform_default bt_bb_dash_none bt_bb_size_small bt_bb_align_inherit"
                                              data-bt-override-class='{"bt_bb_size_":{"current_class":"bt_bb_size_small","xxl":"small"},"bt_bb_align_":{"current_class":"bt_bb_align_inherit","xxl":"inherit"}}'>
                                              <h4 class="bt_bb_headline_tag">
                                                <span class="bt_bb_headline_content"><span>Admission
                                                    Procedure</span></span>
                                              </h4>
                                            </header>
                                            <div
                                              class="bt_bb_separator_v2 bt_bb_border_style_none bt_bb_top_spacing_none bt_bb_bottom_spacing_small bt_bb_border_thickness_1 bt_bb_icon_size_normal bt_bb_text_size_normal bt_bb_separator_v2_without_content"
                                              data-bt-override-class='{"bt_bb_top_spacing_":{"current_class":"bt_bb_top_spacing_none","xxl":"none","xl":"none"},"bt_bb_bottom_spacing_":{"current_class":"bt_bb_bottom_spacing_small","xxl":"small","xl":"small"},"bt_bb_border_thickness_":{"current_class":"bt_bb_border_thickness_1","xxl":"1","xl":"1"},"bt_bb_icon_size_":{"current_class":"bt_bb_icon_size_normal","xxl":"normal","xl":"normal"},"bt_bb_text_size_":{"current_class":"bt_bb_text_size_normal","xxl":"normal","xl":"normal"}}'>
                                              <div class="bt_bb_separator_v2_inner">
                                                <span class="bt_bb_separator_v2_inner_before"></span><span
                                                  class="bt_bb_separator_v2_inner_content"><span data-ico-="&#x;"
                                                    class="bt_bb_icon_holder"></span></span><span
                                                  class="bt_bb_separator_v2_inner_after"></span>
                                              </div>
                                            </div>
                                            <div class="bt_bb_text">
                                              <ul>
                                                <li class="elementor-icon-list-item">
                                                  <span class="elementor-icon-list-text">Filling of Enquiry
                                                    Form</span>
                                                </li>
                                                <li class="elementor-icon-list-item">
                                                  <i class="fas fa-check-circle" aria-hidden="true"></i>
                                                  <span class="elementor-icon-list-text">Interaction with Centre
                                                    Head</span>
                                                </li>
                                                <li class="elementor-icon-list-item">
                                                  <i class="fas fa-check-circle" aria-hidden="true"></i>
                                                  <span class="elementor-icon-list-text">Confirmation of
                                                    Admission</span>
                                                </li>
                                                <li class="elementor-icon-list-item">
                                                  <i class="fas fa-check-circle" aria-hidden="true"></i>
                                                  <span class="elementor-icon-list-text">Collect Admission
                                                    Form</span>
                                                </li>
                                                <li class="elementor-icon-list-item">
                                                  <i class="fas fa-check-circle" aria-hidden="true"></i>
                                                  <span class="elementor-icon-list-text">Payment of Confirmation Fee
                                                    along with submission of
                                                    completed Admission Form and
                                                    all the required
                                                    documentss</span>
                                                </li>
                                              </ul>
                                            </div>
                                            <div
                                              class="bt_bb_separator_v2 bt_bb_border_style_none bt_bb_top_spacing_none bt_bb_bottom_spacing_normal bt_bb_border_thickness_1 bt_bb_icon_size_normal bt_bb_text_size_normal bt_bb_separator_v2_without_content"
                                              data-bt-override-class='{"bt_bb_top_spacing_":{"current_class":"bt_bb_top_spacing_none","xxl":"none","xl":"none"},"bt_bb_bottom_spacing_":{"current_class":"bt_bb_bottom_spacing_normal","xxl":"normal","xl":"normal"},"bt_bb_border_thickness_":{"current_class":"bt_bb_border_thickness_1","xxl":"1","xl":"1"},"bt_bb_icon_size_":{"current_class":"bt_bb_icon_size_normal","xxl":"normal","xl":"normal"},"bt_bb_text_size_":{"current_class":"bt_bb_text_size_normal","xxl":"normal","xl":"normal"}}'>
                                              <div class="bt_bb_separator_v2_inner">
                                                <span class="bt_bb_separator_v2_inner_before"></span><span
                                                  class="bt_bb_separator_v2_inner_content"><span data-ico-="&#x;"
                                                    class="bt_bb_icon_holder"></span></span><span
                                                  class="bt_bb_separator_v2_inner_after"></span>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="bt_bb_tab_item">
                                <div class="bt_bb_tab_content">
                                  <div class="bt_bb_row_inner" style="background-color: rgb(255, 255, 255)">
                                    <div
                                      class="bt_bb_column_inner col-xxl-12 col-xl-12 col-xs-12 col-sm-12 col-md-12 col-lg-12 bt_bb_align_left bt_bb_vertical_align_top bt_bb_shape_inherit"
                                      data-width="12" data-bt-override-class="{}">
                                      <div class="bt_bb_column_inner_content">
                                        <div class="bt_bb_card bt_bb_padding_25 btWithLink bt_bb_color_scheme_2" style="
                                            --primary-color: #282828;
                                            --secondary-color: #ffffff;
                                          "
                                          data-bt-override-class='{"bt_bb_padding_":{"current_class":"bt_bb_padding_25","xxl":"25","xl":"25"}}'>
                                          <a href="#" target="_self" class="btCardLink"></a>
                                          <div class="bt_bb_card_content">
                                            <div
                                              class="bt_bb_separator_v2 bt_bb_border_style_none bt_bb_top_spacing_none bt_bb_bottom_spacing_normal bt_bb_border_thickness_1 bt_bb_icon_size_normal bt_bb_text_size_normal bt_bb_separator_v2_without_content"
                                              data-bt-override-class='{"bt_bb_top_spacing_":{"current_class":"bt_bb_top_spacing_none","xxl":"none","xl":"none"},"bt_bb_bottom_spacing_":{"current_class":"bt_bb_bottom_spacing_normal","xxl":"normal","xl":"normal"},"bt_bb_border_thickness_":{"current_class":"bt_bb_border_thickness_1","xxl":"1","xl":"1"},"bt_bb_icon_size_":{"current_class":"bt_bb_icon_size_normal","xxl":"normal","xl":"normal"},"bt_bb_text_size_":{"current_class":"bt_bb_text_size_normal","xxl":"normal","xl":"normal"}}'>
                                              <div class="bt_bb_separator_v2_inner">
                                                <span class="bt_bb_separator_v2_inner_before"></span><span
                                                  class="bt_bb_separator_v2_inner_content"><span data-ico-="&#x;"
                                                    class="bt_bb_icon_holder"></span></span><span
                                                  class="bt_bb_separator_v2_inner_after"></span>
                                              </div>
                                            </div>
                                            <header data-bb-version="4.6.0"
                                              class="bt_bb_headline bt_bb_subheadline_text_transform_default bt_bb_dash_none bt_bb_size_small bt_bb_align_inherit"
                                              data-bt-override-class='{"bt_bb_size_":{"current_class":"bt_bb_size_small","xxl":"small"},"bt_bb_align_":{"current_class":"bt_bb_align_inherit","xxl":"inherit"}}'>
                                              <h4 class="bt_bb_headline_tag">
                                                <span class="bt_bb_headline_content"><span>Documents</span></span>
                                              </h4>
                                            </header>
                                            <div
                                              class="bt_bb_separator_v2 bt_bb_border_style_none bt_bb_top_spacing_none bt_bb_bottom_spacing_small bt_bb_border_thickness_1 bt_bb_icon_size_normal bt_bb_text_size_normal bt_bb_separator_v2_without_content"
                                              data-bt-override-class='{"bt_bb_top_spacing_":{"current_class":"bt_bb_top_spacing_none","xxl":"none","xl":"none"},"bt_bb_bottom_spacing_":{"current_class":"bt_bb_bottom_spacing_small","xxl":"small","xl":"small"},"bt_bb_border_thickness_":{"current_class":"bt_bb_border_thickness_1","xxl":"1","xl":"1"},"bt_bb_icon_size_":{"current_class":"bt_bb_icon_size_normal","xxl":"normal","xl":"normal"},"bt_bb_text_size_":{"current_class":"bt_bb_text_size_normal","xxl":"normal","xl":"normal"}}'>
                                              <div class="bt_bb_separator_v2_inner">
                                                <span class="bt_bb_separator_v2_inner_before"></span><span
                                                  class="bt_bb_separator_v2_inner_content"><span data-ico-="&#x;"
                                                    class="bt_bb_icon_holder"></span></span><span
                                                  class="bt_bb_separator_v2_inner_after"></span>
                                              </div>
                                            </div>
                                            <div class="bt_bb_text">
                                              <ul>
                                                <li class="elementor-icon-list-item">
                                                  <span class="elementor-icon-list-text">Completed Application
                                                    Form</span>
                                                </li>
                                                <li class="elementor-icon-list-item">
                                                  <i class="fas fa-check-circle" aria-hidden="true"></i>
                                                  <span class="elementor-icon-list-text">Certified true copy of the
                                                    child’s birth certificate
                                                    issued by the relevant
                                                    Municipal Corporation or
                                                    Passport copy for date of
                                                    birth proof</span>
                                                </li>
                                                <li class="elementor-icon-list-item">
                                                  <i class="fas fa-check-circle" aria-hidden="true"></i>
                                                  <span class="elementor-icon-list-text">Five passport size colour
                                                    photographs of the
                                                    child</span>
                                                </li>
                                                <li class="elementor-icon-list-item">
                                                  <i class="fas fa-check-circle" aria-hidden="true"></i>
                                                  <span class="elementor-icon-list-text">Three stamp size colour
                                                    photographs of the
                                                    child</span>
                                                </li>
                                                <li class="elementor-icon-list-item">
                                                  <i class="fas fa-check-circle" aria-hidden="true"></i>
                                                  <span class="elementor-icon-list-text">Three passport size colour
                                                    photographs of father and
                                                    mother along with ld proof
                                                    and Address proof.</span>
                                                </li>
                                              </ul>
                                            </div>
                                            <div
                                              class="bt_bb_separator_v2 bt_bb_border_style_none bt_bb_top_spacing_none bt_bb_bottom_spacing_normal bt_bb_border_thickness_1 bt_bb_icon_size_normal bt_bb_text_size_normal bt_bb_separator_v2_without_content"
                                              data-bt-override-class='{"bt_bb_top_spacing_":{"current_class":"bt_bb_top_spacing_none","xxl":"none","xl":"none"},"bt_bb_bottom_spacing_":{"current_class":"bt_bb_bottom_spacing_normal","xxl":"normal","xl":"normal"},"bt_bb_border_thickness_":{"current_class":"bt_bb_border_thickness_1","xxl":"1","xl":"1"},"bt_bb_icon_size_":{"current_class":"bt_bb_icon_size_normal","xxl":"normal","xl":"normal"},"bt_bb_text_size_":{"current_class":"bt_bb_text_size_normal","xxl":"normal","xl":"normal"}}'>
                                              <div class="bt_bb_separator_v2_inner">
                                                <span class="bt_bb_separator_v2_inner_before"></span><span
                                                  class="bt_bb_separator_v2_inner_content"><span data-ico-="&#x;"
                                                    class="bt_bb_icon_holder"></span></span><span
                                                  class="bt_bb_separator_v2_inner_after"></span>
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
                          <div
                            class="bt_bb_separator_v2 bt_bb_border_style_none bt_bb_bottom_spacing_large bt_bb_icon_size_normal bt_bb_text_size_normal bt_bb_separator_v2_without_content"
                            data-bt-override-class="null">
                            <div class="bt_bb_separator_v2_inner">
                              <span class="bt_bb_separator_v2_inner_before"></span><span
                                class="bt_bb_separator_v2_inner_content"><span data-ico-="&#x;"
                                  class="bt_bb_icon_holder"></span></span><span
                                class="bt_bb_separator_v2_inner_after"></span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div data-bb-version="4.6.0" class="bt_bb_row_wrapper">
                  <div
                    class="bt_bb_row bt_bb_column_gap_10 bt_bb_hidden_xs bt_bb_hidden_ms bt_bb_hidden_sm bt_bb_hidden_md bt_bb_hidden_lg bt_bb_hidden_xl bt_bb_negative_margin_none"
                    data-bt-override-class="{}">
                    <div
                      class="bt_bb_column col-xxl-4 col-xl-4 col-xs-12 col-sm-12 col-md-12 col-lg-4 bt_bb_vertical_align_top bt_bb_align_left bt_bb_padding_normal bt_bb_animation_fade_in bt_bb_animation_move_up animate bt_bb_shape_inherit"
                      data-width="4"
                      data-bt-override-class='{"bt_bb_align_":{"current_class":"bt_bb_align_left","xxl":"left","xl":"left"},"bt_bb_padding_":{"current_class":"bt_bb_padding_normal","xxl":"normal","xl":"normal"}}'>
                      <div class="bt_bb_column_content">
                        <div class="bt_bb_column_content_inner">
                          <div class="bt_bb_card bt_bb_padding_25 btWithLink bt_bb_color_scheme_2" style="
                              --primary-color: #282828;
                              --secondary-color: #ffffff;
                            "
                            data-bt-override-class='{"bt_bb_padding_":{"current_class":"bt_bb_padding_25","xxl":"25","xl":"25"}}'>
                            <a href="#" target="_self" class="btCardLink"></a>
                            <div class="bt_bb_card_content">
                              <div
                                class="bt_bb_separator_v2 bt_bb_border_style_none bt_bb_top_spacing_none bt_bb_bottom_spacing_normal bt_bb_border_thickness_1 bt_bb_icon_size_normal bt_bb_text_size_normal bt_bb_separator_v2_without_content"
                                data-bt-override-class='{"bt_bb_top_spacing_":{"current_class":"bt_bb_top_spacing_none","xxl":"none","xl":"none"},"bt_bb_bottom_spacing_":{"current_class":"bt_bb_bottom_spacing_normal","xxl":"normal","xl":"normal"},"bt_bb_border_thickness_":{"current_class":"bt_bb_border_thickness_1","xxl":"1","xl":"1"},"bt_bb_icon_size_":{"current_class":"bt_bb_icon_size_normal","xxl":"normal","xl":"normal"},"bt_bb_text_size_":{"current_class":"bt_bb_text_size_normal","xxl":"normal","xl":"normal"}}'>
                                <div class="bt_bb_separator_v2_inner">
                                  <span class="bt_bb_separator_v2_inner_before"></span><span
                                    class="bt_bb_separator_v2_inner_content"><span data-ico-="&#x;"
                                      class="bt_bb_icon_holder"></span></span><span
                                    class="bt_bb_separator_v2_inner_after"></span>
                                </div>
                              </div>
                              <div
                                class="bt_bb_icon bt_bb_style_borderless bt_bb_size_large bt_bb_shape_square bt_bb_align_inherit bt_bb_colored_icon_color_scheme_9"
                                style="
                                  --icon-colored-icon-primary-color: #282828;
                                  --icon-colored-icon-secondary-color: var(
                                    --alternate-color
                                  );
                                "
                                data-bt-override-class='{"bt_bb_size_":{"current_class":"bt_bb_size_large","xxl":"large","xl":"large"},"bt_bb_align_":{"current_class":"bt_bb_align_inherit","xxl":"inherit","xl":"inherit"}}'>
                                <span class="bt_bb_icon_holder"><span class="bt_bb_icon_holder_inner"><svg id="Layer_1"
                                      data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100">
                                      <defs>
                                        <style>
                                          .cls-1 {
                                            fill: #ffb129;
                                          }

                                          .cls-2 {
                                            fill: #333538;
                                          }
                                        </style>
                                      </defs>
                                      <title>_</title>
                                      <g id="_Group_" data-name="&lt;Group&gt;">
                                        <g id="_Group_2" data-name="&lt;Group&gt;">
                                          <polygon id="_Path_" data-name="&lt;Path&gt;" class="cls-1"
                                            points="84.31 73.82 61.59 51.18 84.23 28.45 73.47 17.73 50.83 40.46 28.1 17.82 17.38 28.57 40.11 51.22 17.47 73.95 28.22 84.66 50.87 61.94 73.6 84.58 84.31 73.82" />
                                        </g>
                                        <path id="_Compound_Path_" data-name="&lt;Compound Path&gt;" class="cls-2"
                                          d="M50,6A44,44,0,1,0,94,50,44,44,0,0,0,50,6Zm0,6a37.77,37.77,0,0,1,19.54,5.42L50.82,36.22,31.41,16.88A37.75,37.75,0,0,1,50,12ZM16.56,32l19.3,19.23L17.5,69.67A37.87,37.87,0,0,1,16.56,32ZM33.1,84,50.88,66.18,68.13,83.37a37.84,37.84,0,0,1-35,.65Zm40.16-4L50.86,57.69l-23,23.13a38.31,38.31,0,0,1-6.75-6.23L44.35,51.21,19.91,26.86a38.38,38.38,0,0,1,6.43-6.56l24.5,24.4L74.48,21a38.31,38.31,0,0,1,6.26,6.73L57.34,51.18,79.79,73.55A38.38,38.38,0,0,1,73.26,80ZM65.83,51.17,84,33a37.88,37.88,0,0,1-.76,35.49Z" />
                                      </g>
                                    </svg></span></span>
                              </div>
                              <div
                                class="bt_bb_separator_v2 bt_bb_border_style_none bt_bb_top_spacing_none bt_bb_bottom_spacing_normal bt_bb_border_thickness_1 bt_bb_icon_size_normal bt_bb_text_size_normal bt_bb_separator_v2_without_content"
                                data-bt-override-class='{"bt_bb_top_spacing_":{"current_class":"bt_bb_top_spacing_none","xxl":"none","xl":"none"},"bt_bb_bottom_spacing_":{"current_class":"bt_bb_bottom_spacing_normal","xxl":"normal","xl":"normal"},"bt_bb_border_thickness_":{"current_class":"bt_bb_border_thickness_1","xxl":"1","xl":"1"},"bt_bb_icon_size_":{"current_class":"bt_bb_icon_size_normal","xxl":"normal","xl":"normal"},"bt_bb_text_size_":{"current_class":"bt_bb_text_size_normal","xxl":"normal","xl":"normal"}}'>
                                <div class="bt_bb_separator_v2_inner">
                                  <span class="bt_bb_separator_v2_inner_before"></span><span
                                    class="bt_bb_separator_v2_inner_content"><span data-ico-="&#x;"
                                      class="bt_bb_icon_holder"></span></span><span
                                    class="bt_bb_separator_v2_inner_after"></span>
                                </div>
                              </div>
                              <header data-bb-version="4.6.0"
                                class="bt_bb_headline bt_bb_subheadline_text_transform_default bt_bb_dash_none bt_bb_size_small bt_bb_align_inherit"
                                data-bt-override-class='{"bt_bb_size_":{"current_class":"bt_bb_size_small","xxl":"small"},"bt_bb_align_":{"current_class":"bt_bb_align_inherit","xxl":"inherit"}}'>
                                <h4 class="bt_bb_headline_tag">
                                  <span class="bt_bb_headline_content"><span>Admission Eligibility</span></span>
                                </h4>
                              </header>
                              <div
                                class="bt_bb_separator_v2 bt_bb_border_style_none bt_bb_top_spacing_none bt_bb_bottom_spacing_small bt_bb_border_thickness_1 bt_bb_icon_size_normal bt_bb_text_size_normal bt_bb_separator_v2_without_content"
                                data-bt-override-class='{"bt_bb_top_spacing_":{"current_class":"bt_bb_top_spacing_none","xxl":"none","xl":"none"},"bt_bb_bottom_spacing_":{"current_class":"bt_bb_bottom_spacing_small","xxl":"small","xl":"small"},"bt_bb_border_thickness_":{"current_class":"bt_bb_border_thickness_1","xxl":"1","xl":"1"},"bt_bb_icon_size_":{"current_class":"bt_bb_icon_size_normal","xxl":"normal","xl":"normal"},"bt_bb_text_size_":{"current_class":"bt_bb_text_size_normal","xxl":"normal","xl":"normal"}}'>
                                <div class="bt_bb_separator_v2_inner">
                                  <span class="bt_bb_separator_v2_inner_before"></span><span
                                    class="bt_bb_separator_v2_inner_content"><span data-ico-="&#x;"
                                      class="bt_bb_icon_holder"></span></span><span
                                    class="bt_bb_separator_v2_inner_after"></span>
                                </div>
                              </div>
                              <div class="bt_bb_text">
                                <ul>
                                  <li class="elementor-icon-list-item">
                                    <span class="elementor-icon-list-text">Play group: 1.5 to 2.5 years</span>
                                  </li>
                                  <li class="elementor-icon-list-item">
                                    <i class="fas fa-check-circle" aria-hidden="true"></i>
                                    <span class="elementor-icon-list-text">Nursery: 2.5 to 3.5 years</span>
                                  </li>
                                  <li class="elementor-icon-list-item">
                                    <i class="fas fa-check-circle" aria-hidden="true"></i>
                                    <span class="elementor-icon-list-text">Kidzo Junior: 3.5 to 4.5 years</span>
                                  </li>
                                  <li class="elementor-icon-list-item">
                                    <i class="fas fa-check-circle" aria-hidden="true"></i>
                                    <span class="elementor-icon-list-text">Kidzo Senior: 4.5 to 5.5 years</span>
                                  </li>
                                  <li class="elementor-icon-list-item">
                                    <i class="fas fa-check-circle" aria-hidden="true"></i>
                                    <span class="elementor-icon-list-text">Day Care: 6 months to 12 years</span>
                                  </li>
                                </ul>
                              </div>
                              <div
                                class="bt_bb_separator_v2 bt_bb_border_style_none bt_bb_top_spacing_none bt_bb_bottom_spacing_normal bt_bb_border_thickness_1 bt_bb_icon_size_normal bt_bb_text_size_normal bt_bb_separator_v2_without_content"
                                data-bt-override-class='{"bt_bb_top_spacing_":{"current_class":"bt_bb_top_spacing_none","xxl":"none","xl":"none"},"bt_bb_bottom_spacing_":{"current_class":"bt_bb_bottom_spacing_normal","xxl":"normal","xl":"normal"},"bt_bb_border_thickness_":{"current_class":"bt_bb_border_thickness_1","xxl":"1","xl":"1"},"bt_bb_icon_size_":{"current_class":"bt_bb_icon_size_normal","xxl":"normal","xl":"normal"},"bt_bb_text_size_":{"current_class":"bt_bb_text_size_normal","xxl":"normal","xl":"normal"}}'>
                                <div class="bt_bb_separator_v2_inner">
                                  <span class="bt_bb_separator_v2_inner_before"></span><span
                                    class="bt_bb_separator_v2_inner_content"><span data-ico-="&#x;"
                                      class="bt_bb_icon_holder"></span></span><span
                                    class="bt_bb_separator_v2_inner_after"></span>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div
                            class="bt_bb_separator_v2 bt_bb_border_style_none bt_bb_bottom_spacing_normal bt_bb_icon_size_normal bt_bb_text_size_normal bt_bb_separator_v2_without_content"
                            data-bt-override-class="null">
                            <div class="bt_bb_separator_v2_inner">
                              <span class="bt_bb_separator_v2_inner_before"></span><span
                                class="bt_bb_separator_v2_inner_content"><span data-ico-="&#x;"
                                  class="bt_bb_icon_holder"></span></span><span
                                class="bt_bb_separator_v2_inner_after"></span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div
                      class="bt_bb_column col-xxl-4 col-xl-4 col-xs-12 col-sm-12 col-md-12 col-lg-4 bt_bb_vertical_align_top bt_bb_align_left bt_bb_padding_normal bt_bb_animation_fade_in bt_bb_animation_move_up animate bt_bb_shape_inherit"
                      data-width="4"
                      data-bt-override-class='{"bt_bb_align_":{"current_class":"bt_bb_align_left","xxl":"left","xl":"left"},"bt_bb_padding_":{"current_class":"bt_bb_padding_normal","xxl":"normal","xl":"normal"}}'>
                      <div class="bt_bb_column_content">
                        <div class="bt_bb_column_content_inner">
                          <div class="bt_bb_card bt_bb_padding_25 btWithLink bt_bb_color_scheme_2" style="
                              --primary-color: #282828;
                              --secondary-color: #ffffff;
                            "
                            data-bt-override-class='{"bt_bb_padding_":{"current_class":"bt_bb_padding_25","xxl":"25","xl":"25"}}'>
                            <a href="#" target="_self" class="btCardLink"></a>
                            <div class="bt_bb_card_content">
                              <div
                                class="bt_bb_separator_v2 bt_bb_border_style_none bt_bb_top_spacing_none bt_bb_bottom_spacing_normal bt_bb_border_thickness_1 bt_bb_icon_size_normal bt_bb_text_size_normal bt_bb_separator_v2_without_content"
                                data-bt-override-class='{"bt_bb_top_spacing_":{"current_class":"bt_bb_top_spacing_none","xxl":"none","xl":"none"},"bt_bb_bottom_spacing_":{"current_class":"bt_bb_bottom_spacing_normal","xxl":"normal","xl":"normal"},"bt_bb_border_thickness_":{"current_class":"bt_bb_border_thickness_1","xxl":"1","xl":"1"},"bt_bb_icon_size_":{"current_class":"bt_bb_icon_size_normal","xxl":"normal","xl":"normal"},"bt_bb_text_size_":{"current_class":"bt_bb_text_size_normal","xxl":"normal","xl":"normal"}}'>
                                <div class="bt_bb_separator_v2_inner">
                                  <span class="bt_bb_separator_v2_inner_before"></span><span
                                    class="bt_bb_separator_v2_inner_content"><span data-ico-="&#x;"
                                      class="bt_bb_icon_holder"></span></span><span
                                    class="bt_bb_separator_v2_inner_after"></span>
                                </div>
                              </div>
                              <div
                                class="bt_bb_icon btSocks bt_bb_style_borderless bt_bb_align_content_center bt_bb_size_large bt_bb_shape_square bt_bb_align_inherit bt_bb_colored_icon_color_scheme_9"
                                style="
                                  --icon-colored-icon-primary-color: #282828;
                                  --icon-colored-icon-secondary-color: var(
                                    --alternate-color
                                  );
                                "
                                data-bt-override-class='{"bt_bb_align_content_":{"current_class":"bt_bb_align_content_center","xxl":"center","xl":"center"},"bt_bb_size_":{"current_class":"bt_bb_size_large","xxl":"large","xl":"large"},"bt_bb_align_":{"current_class":"bt_bb_align_inherit","xxl":"inherit","xl":"inherit"}}'>
                                <span class="bt_bb_icon_holder"><span class="bt_bb_icon_holder_inner"><svg id="Layer_1"
                                      data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100">
                                      <defs>
                                        <style>
                                          .cls-1 {
                                            fill: #f9b121;
                                          }

                                          .cls-2 {
                                            fill: #333538;
                                          }
                                        </style>
                                      </defs>
                                      <title>_</title>
                                      <g id="_Group_" data-name="&lt;Group&gt;">
                                        <path id="_Path_" data-name="&lt;Path&gt;" class="cls-1"
                                          d="M71.28,85.62V82.46A11.29,11.29,0,0,1,82.55,71.19h3.86A16.44,16.44,0,0,1,71.28,85.62Z" />
                                        <rect id="_Path_2" data-name="&lt;Path&gt;" class="cls-1" x="59.32" y="42.13"
                                          width="27.2" height="4.84" />
                                        <g id="_Group_2" data-name="&lt;Group&gt;">
                                          <g id="_Group_3" data-name="&lt;Group&gt;">
                                            <path id="_Compound_Path_" data-name="&lt;Compound Path&gt;" class="cls-2"
                                              d="M75.24,23.31V9.5H38.35v25A4.39,4.39,0,0,1,34,38.85H27.48a18.84,18.84,0,0,0-2.11,37.56A18.88,18.88,0,0,0,43.61,90.5h26.5A21.28,21.28,0,0,0,91.36,69.25V23.31Zm11.28,14H59.32V28.16h5.84v4.49H70V28.16h5.84v4.5h4.84v-4.5h5.85ZM54.48,33H43.19V28.16H54.48Zm4.84,9.13h27.2V47H59.32ZM49,14.34v4.34h4.84V14.34h5.84v4.34h4.84V14.34H70.4v9H43.19v-9ZM13.48,57.69a14,14,0,0,1,14-14H34a9.24,9.24,0,0,0,8.58-5.85H54.48v10.6a4.39,4.39,0,0,1-4.38,4.38H43.61A18.86,18.86,0,0,0,24.77,71.42,14,14,0,0,1,13.48,57.69Zm16.12,14a14,14,0,0,1,14-14H50.1a9.24,9.24,0,0,0,8.58-5.85H86.52V66.35h-4A16.14,16.14,0,0,0,66.43,82.46v3.2H43.61a14,14,0,0,1-14-14Zm41.66,14V82.46A11.29,11.29,0,0,1,82.54,71.19H86.4A16.44,16.44,0,0,1,71.27,85.62Z" />
                                          </g>
                                        </g>
                                        <rect id="_Path_3" data-name="&lt;Path&gt;" class="cls-1" x="42.52" y="28.16"
                                          width="12.64" height="4.84" />
                                      </g>
                                    </svg></span></span>
                              </div>
                              <div
                                class="bt_bb_separator_v2 bt_bb_border_style_none bt_bb_top_spacing_none bt_bb_bottom_spacing_normal bt_bb_border_thickness_1 bt_bb_icon_size_normal bt_bb_text_size_normal bt_bb_separator_v2_without_content"
                                data-bt-override-class='{"bt_bb_top_spacing_":{"current_class":"bt_bb_top_spacing_none","xxl":"none","xl":"none"},"bt_bb_bottom_spacing_":{"current_class":"bt_bb_bottom_spacing_normal","xxl":"normal","xl":"normal"},"bt_bb_border_thickness_":{"current_class":"bt_bb_border_thickness_1","xxl":"1","xl":"1"},"bt_bb_icon_size_":{"current_class":"bt_bb_icon_size_normal","xxl":"normal","xl":"normal"},"bt_bb_text_size_":{"current_class":"bt_bb_text_size_normal","xxl":"normal","xl":"normal"}}'>
                                <div class="bt_bb_separator_v2_inner">
                                  <span class="bt_bb_separator_v2_inner_before"></span><span
                                    class="bt_bb_separator_v2_inner_content"><span data-ico-="&#x;"
                                      class="bt_bb_icon_holder"></span></span><span
                                    class="bt_bb_separator_v2_inner_after"></span>
                                </div>
                              </div>
                              <header data-bb-version="4.6.0"
                                class="bt_bb_headline bt_bb_subheadline_text_transform_default bt_bb_dash_none bt_bb_size_small bt_bb_align_inherit"
                                data-bt-override-class='{"bt_bb_size_":{"current_class":"bt_bb_size_small","xxl":"small"},"bt_bb_align_":{"current_class":"bt_bb_align_inherit","xxl":"inherit"}}'>
                                <h4 class="bt_bb_headline_tag">
                                  <span class="bt_bb_headline_content"><span>Admission Procedure</span></span>
                                </h4>
                              </header>
                              <div
                                class="bt_bb_separator_v2 bt_bb_border_style_none bt_bb_top_spacing_none bt_bb_bottom_spacing_small bt_bb_border_thickness_1 bt_bb_icon_size_normal bt_bb_text_size_normal bt_bb_separator_v2_without_content"
                                data-bt-override-class='{"bt_bb_top_spacing_":{"current_class":"bt_bb_top_spacing_none","xxl":"none","xl":"none"},"bt_bb_bottom_spacing_":{"current_class":"bt_bb_bottom_spacing_small","xxl":"small","xl":"small"},"bt_bb_border_thickness_":{"current_class":"bt_bb_border_thickness_1","xxl":"1","xl":"1"},"bt_bb_icon_size_":{"current_class":"bt_bb_icon_size_normal","xxl":"normal","xl":"normal"},"bt_bb_text_size_":{"current_class":"bt_bb_text_size_normal","xxl":"normal","xl":"normal"}}'>
                                <div class="bt_bb_separator_v2_inner">
                                  <span class="bt_bb_separator_v2_inner_before"></span><span
                                    class="bt_bb_separator_v2_inner_content"><span data-ico-="&#x;"
                                      class="bt_bb_icon_holder"></span></span><span
                                    class="bt_bb_separator_v2_inner_after"></span>
                                </div>
                              </div>
                              <div class="bt_bb_text">
                                <ul>
                                  <li class="elementor-icon-list-item">
                                    <span class="elementor-icon-list-text">Filling of Enquiry Form</span>
                                  </li>
                                  <li class="elementor-icon-list-item">
                                    <i class="fas fa-check-circle" aria-hidden="true"></i>
                                    <span class="elementor-icon-list-text">Interaction with Centre Head</span>
                                  </li>
                                  <li class="elementor-icon-list-item">
                                    <i class="fas fa-check-circle" aria-hidden="true"></i>
                                    <span class="elementor-icon-list-text">Confirmation of Admission</span>
                                  </li>
                                  <li class="elementor-icon-list-item">
                                    <i class="fas fa-check-circle" aria-hidden="true"></i>
                                    <span class="elementor-icon-list-text">Collect Admission Form</span>
                                  </li>
                                  <li class="elementor-icon-list-item">
                                    <i class="fas fa-check-circle" aria-hidden="true"></i>
                                    <span class="elementor-icon-list-text">Payment of Confirmation Fee along with
                                      submission of completed Admission Form and
                                      all the required documentss</span>
                                  </li>
                                </ul>
                              </div>
                              <div
                                class="bt_bb_separator_v2 bt_bb_border_style_none bt_bb_top_spacing_none bt_bb_bottom_spacing_normal bt_bb_border_thickness_1 bt_bb_icon_size_normal bt_bb_text_size_normal bt_bb_separator_v2_without_content"
                                data-bt-override-class='{"bt_bb_top_spacing_":{"current_class":"bt_bb_top_spacing_none","xxl":"none","xl":"none"},"bt_bb_bottom_spacing_":{"current_class":"bt_bb_bottom_spacing_normal","xxl":"normal","xl":"normal"},"bt_bb_border_thickness_":{"current_class":"bt_bb_border_thickness_1","xxl":"1","xl":"1"},"bt_bb_icon_size_":{"current_class":"bt_bb_icon_size_normal","xxl":"normal","xl":"normal"},"bt_bb_text_size_":{"current_class":"bt_bb_text_size_normal","xxl":"normal","xl":"normal"}}'>
                                <div class="bt_bb_separator_v2_inner">
                                  <span class="bt_bb_separator_v2_inner_before"></span><span
                                    class="bt_bb_separator_v2_inner_content"><span data-ico-="&#x;"
                                      class="bt_bb_icon_holder"></span></span><span
                                    class="bt_bb_separator_v2_inner_after"></span>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div
                            class="bt_bb_separator_v2 bt_bb_border_style_none bt_bb_bottom_spacing_normal bt_bb_icon_size_normal bt_bb_text_size_normal bt_bb_separator_v2_without_content"
                            data-bt-override-class="null">
                            <div class="bt_bb_separator_v2_inner">
                              <span class="bt_bb_separator_v2_inner_before"></span><span
                                class="bt_bb_separator_v2_inner_content"><span data-ico-="&#x;"
                                  class="bt_bb_icon_holder"></span></span><span
                                class="bt_bb_separator_v2_inner_after"></span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div
                      class="bt_bb_column col-xxl-4 col-xl-4 col-xs-12 col-sm-12 col-md-12 col-lg-4 bt_bb_vertical_align_top bt_bb_align_left bt_bb_padding_normal bt_bb_animation_fade_in bt_bb_animation_move_up animate bt_bb_shape_inherit"
                      data-width="4"
                      data-bt-override-class='{"bt_bb_align_":{"current_class":"bt_bb_align_left","xxl":"left","xl":"left"},"bt_bb_padding_":{"current_class":"bt_bb_padding_normal","xxl":"normal","xl":"normal"}}'>
                      <div class="bt_bb_column_content">
                        <div class="bt_bb_column_content_inner">
                          <div class="bt_bb_card bt_bb_padding_25 btWithLink bt_bb_color_scheme_2" style="
                              --primary-color: #282828;
                              --secondary-color: #ffffff;
                            "
                            data-bt-override-class='{"bt_bb_padding_":{"current_class":"bt_bb_padding_25","xxl":"25","xl":"25"}}'>
                            <a href="#" target="_self" class="btCardLink"></a>
                            <div class="bt_bb_card_content">
                              <div
                                class="bt_bb_separator_v2 bt_bb_border_style_none bt_bb_top_spacing_none bt_bb_bottom_spacing_normal bt_bb_border_thickness_1 bt_bb_icon_size_normal bt_bb_text_size_normal bt_bb_separator_v2_without_content"
                                data-bt-override-class='{"bt_bb_top_spacing_":{"current_class":"bt_bb_top_spacing_none","xxl":"none","xl":"none"},"bt_bb_bottom_spacing_":{"current_class":"bt_bb_bottom_spacing_normal","xxl":"normal","xl":"normal"},"bt_bb_border_thickness_":{"current_class":"bt_bb_border_thickness_1","xxl":"1","xl":"1"},"bt_bb_icon_size_":{"current_class":"bt_bb_icon_size_normal","xxl":"normal","xl":"normal"},"bt_bb_text_size_":{"current_class":"bt_bb_text_size_normal","xxl":"normal","xl":"normal"}}'>
                                <div class="bt_bb_separator_v2_inner">
                                  <span class="bt_bb_separator_v2_inner_before"></span><span
                                    class="bt_bb_separator_v2_inner_content"><span data-ico-="&#x;"
                                      class="bt_bb_icon_holder"></span></span><span
                                    class="bt_bb_separator_v2_inner_after"></span>
                                </div>
                              </div>
                              <div
                                class="bt_bb_icon bt_bb_style_borderless bt_bb_size_large bt_bb_shape_square bt_bb_align_inherit bt_bb_colored_icon_color_scheme_9"
                                style="
                                  --icon-colored-icon-primary-color: #282828;
                                  --icon-colored-icon-secondary-color: var(
                                    --alternate-color
                                  );
                                "
                                data-bt-override-class='{"bt_bb_size_":{"current_class":"bt_bb_size_large","xxl":"large","xl":"large"},"bt_bb_align_":{"current_class":"bt_bb_align_inherit","xxl":"inherit","xl":"inherit"}}'>
                                <span class="bt_bb_icon_holder"><span class="bt_bb_icon_holder_inner"><svg id="Layer_1"
                                      data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100">
                                      <defs>
                                        <style>
                                          .cls-1 {
                                            fill: #ffb739;
                                          }

                                          .cls-2 {
                                            fill: #333538;
                                          }
                                        </style>
                                      </defs>
                                      <title>_</title>
                                      <g id="_Group_" data-name="&lt;Group&gt;">
                                        <path id="_Path_" data-name="&lt;Path&gt;" class="cls-1"
                                          d="M75.43,54.27,46.25,23.72a21.89,21.89,0,0,1,7.27-6.93L54,23.92,63.9,25l.66,10,9.92,1.11.66,10,7.81.88A21.89,21.89,0,0,1,75.43,54.27Z" />
                                        <path id="_Compound_Path_" data-name="&lt;Compound Path&gt;" class="cls-2"
                                          d="M64.46,9A26.51,26.51,0,0,0,41.35,48.53L24.59,65.23a4.66,4.66,0,0,1-3.33,1.33h0c-.38,0-.77,0-1.15.05A12.21,12.21,0,1,0,33.44,78.77v0a4.63,4.63,0,0,1,1.33-3.32L51.52,58.68A26.52,26.52,0,1,0,64.46,9ZM86.18,35.54a21.64,21.64,0,0,1-1.09,6.81l-5.43-.61-.66-10-9.92-1.11-.66-10L58.52,19.6l-.32-4.86a21.72,21.72,0,0,1,28,20.8ZM31.38,72a9.4,9.4,0,0,0-2.74,6.73v0a7.41,7.41,0,1,1-8.1-7.38c.23,0,.46,0,.69,0h0A9.42,9.42,0,0,0,28,68.62L44.12,52.54A26.71,26.71,0,0,0,47.5,55.9ZM42.74,35.54A21.62,21.62,0,0,1,44,28.3l26.77,28a21.72,21.72,0,0,1-28-20.79ZM75.43,54.27,46.25,23.72a21.89,21.89,0,0,1,7.27-6.93L54,23.92,63.9,25l.66,10,9.92,1.11.66,10,7.81.88A21.89,21.89,0,0,1,75.43,54.27Z" />
                                      </g>
                                    </svg></span></span>
                              </div>
                              <div
                                class="bt_bb_separator_v2 bt_bb_border_style_none bt_bb_top_spacing_none bt_bb_bottom_spacing_normal bt_bb_border_thickness_1 bt_bb_icon_size_normal bt_bb_text_size_normal bt_bb_separator_v2_without_content"
                                data-bt-override-class='{"bt_bb_top_spacing_":{"current_class":"bt_bb_top_spacing_none","xxl":"none","xl":"none"},"bt_bb_bottom_spacing_":{"current_class":"bt_bb_bottom_spacing_normal","xxl":"normal","xl":"normal"},"bt_bb_border_thickness_":{"current_class":"bt_bb_border_thickness_1","xxl":"1","xl":"1"},"bt_bb_icon_size_":{"current_class":"bt_bb_icon_size_normal","xxl":"normal","xl":"normal"},"bt_bb_text_size_":{"current_class":"bt_bb_text_size_normal","xxl":"normal","xl":"normal"}}'>
                                <div class="bt_bb_separator_v2_inner">
                                  <span class="bt_bb_separator_v2_inner_before"></span><span
                                    class="bt_bb_separator_v2_inner_content"><span data-ico-="&#x;"
                                      class="bt_bb_icon_holder"></span></span><span
                                    class="bt_bb_separator_v2_inner_after"></span>
                                </div>
                              </div>
                              <header data-bb-version="4.6.0"
                                class="bt_bb_headline bt_bb_subheadline_text_transform_default bt_bb_dash_none bt_bb_size_small bt_bb_align_inherit"
                                data-bt-override-class='{"bt_bb_size_":{"current_class":"bt_bb_size_small","xxl":"small"},"bt_bb_align_":{"current_class":"bt_bb_align_inherit","xxl":"inherit"}}'>
                                <h4 class="bt_bb_headline_tag">
                                  <span class="bt_bb_headline_content"><span>Documents</span></span>
                                </h4>
                              </header>
                              <div
                                class="bt_bb_separator_v2 bt_bb_border_style_none bt_bb_top_spacing_none bt_bb_bottom_spacing_small bt_bb_border_thickness_1 bt_bb_icon_size_normal bt_bb_text_size_normal bt_bb_separator_v2_without_content"
                                data-bt-override-class='{"bt_bb_top_spacing_":{"current_class":"bt_bb_top_spacing_none","xxl":"none","xl":"none"},"bt_bb_bottom_spacing_":{"current_class":"bt_bb_bottom_spacing_small","xxl":"small","xl":"small"},"bt_bb_border_thickness_":{"current_class":"bt_bb_border_thickness_1","xxl":"1","xl":"1"},"bt_bb_icon_size_":{"current_class":"bt_bb_icon_size_normal","xxl":"normal","xl":"normal"},"bt_bb_text_size_":{"current_class":"bt_bb_text_size_normal","xxl":"normal","xl":"normal"}}'>
                                <div class="bt_bb_separator_v2_inner">
                                  <span class="bt_bb_separator_v2_inner_before"></span><span
                                    class="bt_bb_separator_v2_inner_content"><span data-ico-="&#x;"
                                      class="bt_bb_icon_holder"></span></span><span
                                    class="bt_bb_separator_v2_inner_after"></span>
                                </div>
                              </div>
                              <div class="bt_bb_text">
                                <ul>
                                  <li class="elementor-icon-list-item">
                                    <span class="elementor-icon-list-text">Completed Application Form</span>
                                  </li>
                                  <li class="elementor-icon-list-item">
                                    <i class="fas fa-check-circle" aria-hidden="true"></i>
                                    <span class="elementor-icon-list-text">Certified true copy of the child’s birth
                                      certificate issued by the relevant
                                      Municipal Corporation or Passport copy for
                                      date of birth proof</span>
                                  </li>
                                  <li class="elementor-icon-list-item">
                                    <i class="fas fa-check-circle" aria-hidden="true"></i>
                                    <span class="elementor-icon-list-text">Five passport size colour photographs of
                                      the child</span>
                                  </li>
                                  <li class="elementor-icon-list-item">
                                    <i class="fas fa-check-circle" aria-hidden="true"></i>
                                    <span class="elementor-icon-list-text">Three stamp size colour photographs of
                                      the child</span>
                                  </li>
                                  <li class="elementor-icon-list-item">
                                    <i class="fas fa-check-circle" aria-hidden="true"></i>
                                    <span class="elementor-icon-list-text">Three passport size colour photographs of
                                      father and mother along with ld proof and
                                      Address proof.</span>
                                  </li>
                                </ul>
                              </div>
                              <div
                                class="bt_bb_separator_v2 bt_bb_border_style_none bt_bb_top_spacing_none bt_bb_bottom_spacing_normal bt_bb_border_thickness_1 bt_bb_icon_size_normal bt_bb_text_size_normal bt_bb_separator_v2_without_content"
                                data-bt-override-class='{"bt_bb_top_spacing_":{"current_class":"bt_bb_top_spacing_none","xxl":"none","xl":"none"},"bt_bb_bottom_spacing_":{"current_class":"bt_bb_bottom_spacing_normal","xxl":"normal","xl":"normal"},"bt_bb_border_thickness_":{"current_class":"bt_bb_border_thickness_1","xxl":"1","xl":"1"},"bt_bb_icon_size_":{"current_class":"bt_bb_icon_size_normal","xxl":"normal","xl":"normal"},"bt_bb_text_size_":{"current_class":"bt_bb_text_size_normal","xxl":"normal","xl":"normal"}}'>
                                <div class="bt_bb_separator_v2_inner">
                                  <span class="bt_bb_separator_v2_inner_before"></span><span
                                    class="bt_bb_separator_v2_inner_content"><span data-ico-="&#x;"
                                      class="bt_bb_icon_holder"></span></span><span
                                    class="bt_bb_separator_v2_inner_after"></span>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="bt_bb_card bt_bb_padding_25 btWithLink bt_bb_color_scheme_2" style="
                              --primary-color: #282828;
                              --secondary-color: #ffffff;
                            "
                            data-bt-override-class='{"bt_bb_padding_":{"current_class":"bt_bb_padding_25","xxl":"25","xl":"25"}}'>
                            <a href="#" target="_self" class="btCardLink"></a>
                            <div class="bt_bb_card_content">
                              <div
                                class="bt_bb_separator_v2 bt_bb_border_style_none bt_bb_top_spacing_none bt_bb_bottom_spacing_normal bt_bb_border_thickness_1 bt_bb_icon_size_normal bt_bb_text_size_normal bt_bb_separator_v2_without_content"
                                data-bt-override-class='{"bt_bb_top_spacing_":{"current_class":"bt_bb_top_spacing_none","xxl":"none","xl":"none"},"bt_bb_bottom_spacing_":{"current_class":"bt_bb_bottom_spacing_normal","xxl":"normal","xl":"normal"},"bt_bb_border_thickness_":{"current_class":"bt_bb_border_thickness_1","xxl":"1","xl":"1"},"bt_bb_icon_size_":{"current_class":"bt_bb_icon_size_normal","xxl":"normal","xl":"normal"},"bt_bb_text_size_":{"current_class":"bt_bb_text_size_normal","xxl":"normal","xl":"normal"}}'>
                                <div class="bt_bb_separator_v2_inner">
                                  <span class="bt_bb_separator_v2_inner_before"></span><span
                                    class="bt_bb_separator_v2_inner_content"><span data-ico-="&#x;"
                                      class="bt_bb_icon_holder"></span></span><span
                                    class="bt_bb_separator_v2_inner_after"></span>
                                </div>
                              </div>
                              <div
                                class="bt_bb_icon bt_bb_style_borderless bt_bb_size_large bt_bb_shape_square bt_bb_align_inherit bt_bb_colored_icon_color_scheme_9"
                                style="
                                  --icon-colored-icon-primary-color: #282828;
                                  --icon-colored-icon-secondary-color: var(
                                    --alternate-color
                                  );
                                "
                                data-bt-override-class='{"bt_bb_size_":{"current_class":"bt_bb_size_large","xxl":"large","xl":"large"},"bt_bb_align_":{"current_class":"bt_bb_align_inherit","xxl":"inherit","xl":"inherit"}}'>
                                <span class="bt_bb_icon_holder"><span class="bt_bb_icon_holder_inner"><svg id="Layer_1"
                                      data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100">
                                      <defs>
                                        <style>
                                          .cls-1 {
                                            fill: #ffb739;
                                          }

                                          .cls-2 {
                                            fill: #333538;
                                          }
                                        </style>
                                      </defs>
                                      <title>_</title>
                                      <g id="_Group_" data-name="&lt;Group&gt;">
                                        <path id="_Path_" data-name="&lt;Path&gt;" class="cls-1"
                                          d="M75.43,54.27,46.25,23.72a21.89,21.89,0,0,1,7.27-6.93L54,23.92,63.9,25l.66,10,9.92,1.11.66,10,7.81.88A21.89,21.89,0,0,1,75.43,54.27Z" />
                                        <path id="_Compound_Path_" data-name="&lt;Compound Path&gt;" class="cls-2"
                                          d="M64.46,9A26.51,26.51,0,0,0,41.35,48.53L24.59,65.23a4.66,4.66,0,0,1-3.33,1.33h0c-.38,0-.77,0-1.15.05A12.21,12.21,0,1,0,33.44,78.77v0a4.63,4.63,0,0,1,1.33-3.32L51.52,58.68A26.52,26.52,0,1,0,64.46,9ZM86.18,35.54a21.64,21.64,0,0,1-1.09,6.81l-5.43-.61-.66-10-9.92-1.11-.66-10L58.52,19.6l-.32-4.86a21.72,21.72,0,0,1,28,20.8ZM31.38,72a9.4,9.4,0,0,0-2.74,6.73v0a7.41,7.41,0,1,1-8.1-7.38c.23,0,.46,0,.69,0h0A9.42,9.42,0,0,0,28,68.62L44.12,52.54A26.71,26.71,0,0,0,47.5,55.9ZM42.74,35.54A21.62,21.62,0,0,1,44,28.3l26.77,28a21.72,21.72,0,0,1-28-20.79ZM75.43,54.27,46.25,23.72a21.89,21.89,0,0,1,7.27-6.93L54,23.92,63.9,25l.66,10,9.92,1.11.66,10,7.81.88A21.89,21.89,0,0,1,75.43,54.27Z" />
                                      </g>
                                    </svg></span></span>
                              </div>
                              <div
                                class="bt_bb_separator_v2 bt_bb_border_style_none bt_bb_top_spacing_none bt_bb_bottom_spacing_normal bt_bb_border_thickness_1 bt_bb_icon_size_normal bt_bb_text_size_normal bt_bb_separator_v2_without_content"
                                data-bt-override-class='{"bt_bb_top_spacing_":{"current_class":"bt_bb_top_spacing_none","xxl":"none","xl":"none"},"bt_bb_bottom_spacing_":{"current_class":"bt_bb_bottom_spacing_normal","xxl":"normal","xl":"normal"},"bt_bb_border_thickness_":{"current_class":"bt_bb_border_thickness_1","xxl":"1","xl":"1"},"bt_bb_icon_size_":{"current_class":"bt_bb_icon_size_normal","xxl":"normal","xl":"normal"},"bt_bb_text_size_":{"current_class":"bt_bb_text_size_normal","xxl":"normal","xl":"normal"}}'>
                                <div class="bt_bb_separator_v2_inner">
                                  <span class="bt_bb_separator_v2_inner_before"></span><span
                                    class="bt_bb_separator_v2_inner_content"><span data-ico-="&#x;"
                                      class="bt_bb_icon_holder"></span></span><span
                                    class="bt_bb_separator_v2_inner_after"></span>
                                </div>
                              </div>
                              <header data-bb-version="4.6.0"
                                class="bt_bb_headline bt_bb_subheadline_text_transform_default bt_bb_dash_none bt_bb_size_small bt_bb_align_inherit"
                                data-bt-override-class='{"bt_bb_size_":{"current_class":"bt_bb_size_small","xxl":"small"},"bt_bb_align_":{"current_class":"bt_bb_align_inherit","xxl":"inherit"}}'>
                                <h4 class="bt_bb_headline_tag">
                                  <span class="bt_bb_headline_content"><span>Documents</span></span>
                                </h4>
                              </header>
                              <div
                                class="bt_bb_separator_v2 bt_bb_border_style_none bt_bb_top_spacing_none bt_bb_bottom_spacing_small bt_bb_border_thickness_1 bt_bb_icon_size_normal bt_bb_text_size_normal bt_bb_separator_v2_without_content"
                                data-bt-override-class='{"bt_bb_top_spacing_":{"current_class":"bt_bb_top_spacing_none","xxl":"none","xl":"none"},"bt_bb_bottom_spacing_":{"current_class":"bt_bb_bottom_spacing_small","xxl":"small","xl":"small"},"bt_bb_border_thickness_":{"current_class":"bt_bb_border_thickness_1","xxl":"1","xl":"1"},"bt_bb_icon_size_":{"current_class":"bt_bb_icon_size_normal","xxl":"normal","xl":"normal"},"bt_bb_text_size_":{"current_class":"bt_bb_text_size_normal","xxl":"normal","xl":"normal"}}'>
                                <div class="bt_bb_separator_v2_inner">
                                  <span class="bt_bb_separator_v2_inner_before"></span><span
                                    class="bt_bb_separator_v2_inner_content"><span data-ico-="&#x;"
                                      class="bt_bb_icon_holder"></span></span><span
                                    class="bt_bb_separator_v2_inner_after"></span>
                                </div>
                              </div>
                              <div class="bt_bb_text">
                                <ul>
                                  <li class="elementor-icon-list-item">
                                    <span class="elementor-icon-list-text">Completed Application Form</span>
                                  </li>
                                  <li class="elementor-icon-list-item">
                                    <i class="fas fa-check-circle" aria-hidden="true"></i>
                                    <span class="elementor-icon-list-text">Certified true copy of the child’s birth
                                      certificate issued by the relevant
                                      Municipal Corporation or Passport copy for
                                      date of birth proof</span>
                                  </li>
                                  <li class="elementor-icon-list-item">
                                    <i class="fas fa-check-circle" aria-hidden="true"></i>
                                    <span class="elementor-icon-list-text">Five passport size colour photographs of
                                      the child</span>
                                  </li>
                                  <li class="elementor-icon-list-item">
                                    <i class="fas fa-check-circle" aria-hidden="true"></i>
                                    <span class="elementor-icon-list-text">Three stamp size colour photographs of
                                      the child</span>
                                  </li>
                                  <li class="elementor-icon-list-item">
                                    <i class="fas fa-check-circle" aria-hidden="true"></i>
                                    <span class="elementor-icon-list-text">Three passport size colour photographs of
                                      father and mother along with ld proof and
                                      Address proof.</span>
                                  </li>
                                </ul>
                              </div>
                              <div
                                class="bt_bb_separator_v2 bt_bb_border_style_none bt_bb_top_spacing_none bt_bb_bottom_spacing_normal bt_bb_border_thickness_1 bt_bb_icon_size_normal bt_bb_text_size_normal bt_bb_separator_v2_without_content"
                                data-bt-override-class='{"bt_bb_top_spacing_":{"current_class":"bt_bb_top_spacing_none","xxl":"none","xl":"none"},"bt_bb_bottom_spacing_":{"current_class":"bt_bb_bottom_spacing_normal","xxl":"normal","xl":"normal"},"bt_bb_border_thickness_":{"current_class":"bt_bb_border_thickness_1","xxl":"1","xl":"1"},"bt_bb_icon_size_":{"current_class":"bt_bb_icon_size_normal","xxl":"normal","xl":"normal"},"bt_bb_text_size_":{"current_class":"bt_bb_text_size_normal","xxl":"normal","xl":"normal"}}'>
                                <div class="bt_bb_separator_v2_inner">
                                  <span class="bt_bb_separator_v2_inner_before"></span><span
                                    class="bt_bb_separator_v2_inner_content"><span data-ico-="&#x;"
                                      class="bt_bb_icon_holder"></span></span><span
                                    class="bt_bb_separator_v2_inner_after"></span>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div
                            class="bt_bb_separator_v2 bt_bb_border_style_none bt_bb_bottom_spacing_normal bt_bb_icon_size_normal bt_bb_text_size_normal bt_bb_separator_v2_without_content"
                            data-bt-override-class="null">
                            <div class="bt_bb_separator_v2_inner">
                              <span class="bt_bb_separator_v2_inner_before"></span><span
                                class="bt_bb_separator_v2_inner_content"><span data-ico-="&#x;"
                                  class="bt_bb_icon_holder"></span></span><span
                                class="bt_bb_separator_v2_inner_after"></span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- cell_inner -->
            </div>
            <!-- cell -->
          </div>
          <!-- port -->
          <div class="bt_bb_section_top_section_coverage_image">
            <img decoding="async" src="<?php echo base_url(); ?>uploads/2022/04/top_white_wave_03.png"
              alt="Kidozonia Daycare School" />
          </div>
          <div class="bt_bb_section_bottom_section_coverage_image">
            <img decoding="async" src="<?php echo base_url(); ?>uploads/2022/04/bottom_white_wave_03.png"
              alt="bt_bb_section_bottom_section_coverage_image" />
          </div>
        </section>

        <!--<section data-bb-version="4.5.9" id="bt_bb_section656da16ab4899" class="bt_bb_section bt_bb_layout_boxed_1200 bt_bb_vertical_align_top bt_bb_top_spacing_medium bt_bb_bottom_spacing_normal bt_bb_negative_margin_none" data-bt-override-class="{&quot;bt_bb_top_spacing_&quot;:{&quot;current_class&quot;:&quot;bt_bb_top_spacing_medium&quot;,&quot;xxl&quot;:&quot;medium&quot;},&quot;bt_bb_bottom_spacing_&quot;:{&quot;current_class&quot;:&quot;bt_bb_bottom_spacing_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;}}">-->
        <!--  <div class="bt_bb_port">-->
        <!--    <div class="bt_bb_cell">-->
        <!--      <div class="bt_bb_cell_inner">-->
        <!--        <div class="bt_bb_row_wrapper">-->
        <!--          <div class="bt_bb_row" data-bt-override-class="{}">-->
        <!--            <div class="bt_bb_column col-xxl-12 col-xl-12 col-xs-12 col-sm-12 col-md-12 col-lg-12 bt_bb_vertical_align_top bt_bb_align_center bt_bb_padding_normal bt_bb_animation_fade_in animate bt_bb_shape_inherit" data-width="12" data-bt-override-class="{&quot;bt_bb_align_&quot;:{&quot;current_class&quot;:&quot;bt_bb_align_center&quot;,&quot;xxl&quot;:&quot;center&quot;,&quot;xl&quot;:&quot;center&quot;},&quot;bt_bb_padding_&quot;:{&quot;current_class&quot;:&quot;bt_bb_padding_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;,&quot;xl&quot;:&quot;normal&quot;}}">-->
        <!--              <div class="bt_bb_column_content">-->
        <!--                <div class="bt_bb_column_content_inner">-->
        <!--                  <header data-bb-version="4.5.9" class="bt_bb_headline bt_bb_subheadline_text_transform_default bt_bb_color_scheme_5 bt_bb_dash_none bt_bb_size_extralarge bt_bb_align_inherit" style="; --primary-color:#282828; --secondary-color:var(--accent-color);" data-bt-override-class="{&quot;bt_bb_size_&quot;:{&quot;current_class&quot;:&quot;bt_bb_size_extralarge&quot;,&quot;xxl&quot;:&quot;extralarge&quot;},&quot;bt_bb_align_&quot;:{&quot;current_class&quot;:&quot;bt_bb_align_inherit&quot;,&quot;xxl&quot;:&quot;inherit&quot;}}">-->
        <!--                    <h3 class="bt_bb_headline_tag">-->
        <!--                      <span class="bt_bb_headline_content">-->
        <!--                        <span>Awards & Recognitions</span>-->
        <!--                      </span>-->
        <!--                    </h3>-->
        <!--                  </header>-->
        <!--                  <div class="bt_bb_separator_v2 bt_bb_border_style_none bt_bb_top_spacing_none bt_bb_bottom_spacing_50 bt_bb_border_thickness_1 bt_bb_icon_size_normal bt_bb_text_size_normal bt_bb_separator_v2_without_content" data-bt-override-class="{&quot;bt_bb_top_spacing_&quot;:{&quot;current_class&quot;:&quot;bt_bb_top_spacing_none&quot;,&quot;xxl&quot;:&quot;none&quot;,&quot;xl&quot;:&quot;none&quot;},&quot;bt_bb_bottom_spacing_&quot;:{&quot;current_class&quot;:&quot;bt_bb_bottom_spacing_50&quot;,&quot;xxl&quot;:&quot;50&quot;,&quot;xl&quot;:&quot;50&quot;},&quot;bt_bb_border_thickness_&quot;:{&quot;current_class&quot;:&quot;bt_bb_border_thickness_1&quot;,&quot;xxl&quot;:&quot;1&quot;,&quot;xl&quot;:&quot;1&quot;},&quot;bt_bb_icon_size_&quot;:{&quot;current_class&quot;:&quot;bt_bb_icon_size_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;,&quot;xl&quot;:&quot;normal&quot;},&quot;bt_bb_text_size_&quot;:{&quot;current_class&quot;:&quot;bt_bb_text_size_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;,&quot;xl&quot;:&quot;normal&quot;}}">-->
        <!--                    <div class="bt_bb_separator_v2_inner">-->
        <!--                      <span class="bt_bb_separator_v2_inner_before"></span>-->
        <!--                      <span class="bt_bb_separator_v2_inner_content">-->
        <!--                        <span data-ico-="&#x;" class="bt_bb_icon_holder"></span>-->
        <!--                      </span>-->
        <!--                      <span class="bt_bb_separator_v2_inner_after"></span>-->
        <!--                    </div>-->
        <!--                  </div>-->
        <!--                </div>-->
        <!--              </div>-->
        <!--            </div>-->
        <!--          </div>-->
        <!--        </div>-->
        <!--        <div class="bt_bb_row_wrapper">-->

        <!--          <div class="bt_bb_row bt_bb_column_gap_15 bt_bb_negative_margin_ owl-carousel owl-carousel-awards" data-bt-override-class="{}">-->
        <!--<div class="bt_bb_row bt_bb_column_gap_15 bt_bb_negative_margin_" data-bt-override-class="{}">-->

        <!--            <?php foreach ($awards as $awrd) { ?>-->
          <!--              <div class="bt_bb_column col-xxl-3 col-xl-3 w-100 col-xs-12 col-sm-12 col-md-6 col-lg-6 bt_bb_vertical_align_top bt_bb_align_left bt_bb_padding_normal bt_bb_animation_fade_in animate bt_bb_shape_inherit" data-width="3" data-bt-override-class="{&quot;bt_bb_align_&quot;:{&quot;current_class&quot;:&quot;bt_bb_align_left&quot;,&quot;xxl&quot;:&quot;left&quot;,&quot;xl&quot;:&quot;left&quot;},&quot;bt_bb_padding_&quot;:{&quot;current_class&quot;:&quot;bt_bb_padding_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;,&quot;xl&quot;:&quot;normal&quot;}}" style="max-width: 100% !important">-->
          <!--<div class="bt_bb_column col-xxl-3 col-xl-3 col-xs-12 col-sm-12 col-md-6 col-lg-6 bt_bb_vertical_align_top bt_bb_align_left bt_bb_padding_normal bt_bb_animation_fade_in animate bt_bb_shape_inherit" data-width="3" data-bt-override-class="{&quot;bt_bb_align_&quot;:{&quot;current_class&quot;:&quot;bt_bb_align_left&quot;,&quot;xxl&quot;:&quot;left&quot;,&quot;xl&quot;:&quot;left&quot;},&quot;bt_bb_padding_&quot;:{&quot;current_class&quot;:&quot;bt_bb_padding_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;,&quot;xl&quot;:&quot;normal&quot;}}">-->
          <!--                <div class="bt_bb_column_content">-->
          <!--                  <div class="bt_bb_column_content_inner">-->
          <!--                    <div data-bb-version="4.5.9" class="bt_bb_image bt_bb_shape_soft-rounded bt_bb_target_lightbox bt_bb_use_lightbox bt_bb_align_inherit bt_bb_hover_style_simple bt_bb_content_display_always bt_bb_content_align_middle bt_bb_right_negative_margin_none bt_bb_left_negative_margin_none" data-bt-override-class="{&quot;bt_bb_align_&quot;:{&quot;current_class&quot;:&quot;bt_bb_align_inherit&quot;,&quot;xxl&quot;:&quot;inherit&quot;}}">-->
          <!--                      <a href="#lightbox" target="_blank" title="<?= htmlspecialchars($awrd->title); ?>">-->
          <!--                        <img loading="lazy" decoding="async" width="966" height="400" src="<?= base_url() . $awrd->image; ?>" class="attachment-full size-full" alt="<?= htmlspecialchars($awrd->alt); ?>" data-full_image_src="<?= base_url() . $awrd->image; ?>" title="<?= htmlspecialchars($awrd->title); ?>" srcset="<?= base_url() . $awrd->image; ?>" sizes="(max-width: 966px) 100vw, 966px" />-->
          <!--                      </a>-->
          <!--                    </div>-->
          <!--                    <div data-bb-version="4.5.9" class="bt_bb_separator_v2 bt_bb_border_style_none bt_bb_top_spacing_normal bt_bb_bottom_spacing_normal bt_bb_border_thickness_1 bt_bb_icon_size_normal bt_bb_text_size_normal bt_bb_separator_v2_without_content bt_bb_hidden_lg bt_bb_hidden_xl" data-bt-override-class="{&quot;bt_bb_top_spacing_&quot;:{&quot;current_class&quot;:&quot;bt_bb_top_spacing_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;},&quot;bt_bb_bottom_spacing_&quot;:{&quot;current_class&quot;:&quot;bt_bb_bottom_spacing_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;},&quot;bt_bb_border_thickness_&quot;:{&quot;current_class&quot;:&quot;bt_bb_border_thickness_1&quot;,&quot;xxl&quot;:&quot;1&quot;},&quot;bt_bb_icon_size_&quot;:{&quot;current_class&quot;:&quot;bt_bb_icon_size_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;},&quot;bt_bb_text_size_&quot;:{&quot;current_class&quot;:&quot;bt_bb_text_size_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;}}">-->
          <!--                      <div class="bt_bb_separator_v2_inner">-->
          <!--                        <span class="bt_bb_separator_v2_inner_before"></span>-->
          <!--                        <span class="bt_bb_separator_v2_inner_content">-->
          <!--                          <span data-ico-="&#x;" class="bt_bb_icon_holder"></span>-->
          <!--                        </span>-->
          <!--                        <span class="bt_bb_separator_v2_inner_after"></span>-->
          <!--                      </div>-->
          <!--                    </div>-->
          <!--                    <div data-bb-version="4.5.9" class="bt_bb_text">-->
          <!--                      <p style="text-align: center;">-->
          <!--                        <strong><?= $awrd->name; ?></strong>-->
          <!--                        <br /><?= $awrd->description; ?>-->
          <!--                      </p>-->
          <!--                    </div>-->
          <!--                    <div data-bb-version="4.5.9" class="bt_bb_separator_v2 bt_bb_top_spacing_none bt_bb_bottom_spacing_none bt_bb_icon_size_normal bt_bb_text_size_normal bt_bb_separator_v2_without_content" data-bt-override-class="null">-->
          <!--                      <div class="bt_bb_separator_v2_inner">-->
          <!--                        <span class="bt_bb_separator_v2_inner_before"></span>-->
          <!--                        <span class="bt_bb_separator_v2_inner_content">-->
          <!--                          <span data-ico-="&#x;" class="bt_bb_icon_holder"></span>-->
          <!--                        </span>-->
          <!--                        <span class="bt_bb_separator_v2_inner_after"></span>-->
          <!--                      </div>-->
          <!--                    </div>-->
          <!--                  </div>-->
          <!--                </div>-->
          <!--              </div>-->
          <!--            <?php } ?>-->
        <!--          </div>-->
        <!--        </div>-->
        <!--      </div>-->
        <!-- cell_inner -->
        <!--    </div>-->
        <!-- cell -->
        <!--  </div>-->
        <!-- port -->
        <!--</section>-->

        <!--<section data-bb-version="4.5.9" id="bt_bb_section656da16ab035a" class="bt_bb_section bt_bb_layout_boxed_1400 bt_bb_vertical_align_top bt_bb_top_section_coverage_image bt_bb_section_with_top_coverage_image bt_bb_bottom_section_coverage_image bt_bb_section_with_bottom_coverage_image bt_bb_top_spacing_medium bt_bb_bottom_spacing_large bt_bb_negative_margin_none" style=";background-color:rgb(247,243,238);" data-bt-override-class="{&quot;bt_bb_top_spacing_&quot;:{&quot;current_class&quot;:&quot;bt_bb_top_spacing_medium&quot;,&quot;xxl&quot;:&quot;medium&quot;},&quot;bt_bb_bottom_spacing_&quot;:{&quot;current_class&quot;:&quot;bt_bb_bottom_spacing_large&quot;,&quot;xxl&quot;:&quot;large&quot;}}">-->
        <!--  <div class="bt_bb_port">-->
        <!--    <div class="bt_bb_cell">-->
        <!--      <div class="bt_bb_cell_inner">-->
        <!--        <div class="bt_bb_row_wrapper">-->
        <!--          <div class="bt_bb_row" data-bt-override-class="{}">-->
        <!--            <div class="bt_bb_column col-xxl-12 col-xl-12 col-xs-12 col-sm-12 col-md-12 col-lg-12 bt_bb_vertical_align_top bt_bb_align_left bt_bb_padding_normal bt_bb_shape_inherit" data-width="12" data-bt-override-class="{}">-->
        <!--              <div class="bt_bb_column_content">-->
        <!--                <div class="bt_bb_column_content_inner">-->
        <!--                  <div class="bt_bb_separator_v2 bt_bb_border_style_none bt_bb_top_spacing_none bt_bb_bottom_spacing_large bt_bb_border_thickness_1 bt_bb_icon_size_normal bt_bb_text_size_normal bt_bb_separator_v2_without_content bt_bb_hidden_xs bt_bb_hidden_ms bt_bb_hidden_sm bt_bb_hidden_md" data-bt-override-class="{&quot;bt_bb_top_spacing_&quot;:{&quot;current_class&quot;:&quot;bt_bb_top_spacing_none&quot;,&quot;xxl&quot;:&quot;none&quot;,&quot;xl&quot;:&quot;none&quot;},&quot;bt_bb_bottom_spacing_&quot;:{&quot;current_class&quot;:&quot;bt_bb_bottom_spacing_large&quot;,&quot;xxl&quot;:&quot;large&quot;,&quot;xl&quot;:&quot;large&quot;},&quot;bt_bb_border_thickness_&quot;:{&quot;current_class&quot;:&quot;bt_bb_border_thickness_1&quot;,&quot;xxl&quot;:&quot;1&quot;,&quot;xl&quot;:&quot;1&quot;},&quot;bt_bb_icon_size_&quot;:{&quot;current_class&quot;:&quot;bt_bb_icon_size_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;,&quot;xl&quot;:&quot;normal&quot;},&quot;bt_bb_text_size_&quot;:{&quot;current_class&quot;:&quot;bt_bb_text_size_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;,&quot;xl&quot;:&quot;normal&quot;}}">-->
        <!--                    <div class="bt_bb_separator_v2_inner">-->
        <!--                      <span class="bt_bb_separator_v2_inner_before"></span>-->
        <!--                      <span class="bt_bb_separator_v2_inner_content">-->
        <!--                        <span data-ico-="&#x;" class="bt_bb_icon_holder"></span>-->
        <!--                      </span>-->
        <!--                      <span class="bt_bb_separator_v2_inner_after"></span>-->
        <!--                    </div>-->
        <!--                  </div>-->
        <!--                </div>-->
        <!--              </div>-->
        <!--            </div>-->
        <!--          </div>-->
        <!--        </div>-->
        <!--        <div class="bt_bb_row_wrapper">-->
        <!--          <div class="bt_bb_row" data-bt-override-class="{}">-->
        <!--            <div class="bt_bb_column col-xxl-12 col-xl-12 col-xs-12 col-sm-12 col-md-12 col-lg-12 bt_bb_vertical_align_top bt_bb_align_center bt_bb_padding_normal bt_bb_animation_fade_in animate bt_bb_shape_inherit" data-width="12" data-bt-override-class="{&quot;bt_bb_align_&quot;:{&quot;current_class&quot;:&quot;bt_bb_align_center&quot;,&quot;xxl&quot;:&quot;center&quot;,&quot;xl&quot;:&quot;center&quot;},&quot;bt_bb_padding_&quot;:{&quot;current_class&quot;:&quot;bt_bb_padding_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;,&quot;xl&quot;:&quot;normal&quot;}}">-->
        <!--              <div class="bt_bb_column_content">-->
        <!--                <div class="bt_bb_column_content_inner">-->

        <!--                  <div class="bt_bb_floating_image bt_bb_floating_image_horizontal_position_default bt_bb_floating_image_vertical_position_default bt_bb_floating_image_animation_delay_default bt_bb_floating_image_animation_duration_default bt_bb_floating_image_animation_style_ease_out bt_bb_animation_fade_in bt_bb_animation_move_down animate" style="margin-top: -3em; position: relative;" data-speed="0.4" data-direction="">-->
        <!--                    <div class="bt_bb_floating_image_image" data-speed="0.4" data-direction="">-->
        <!--                      <div class="bt_bb_image" data-bt-override-class="{}">-->
        <!--                        <span>-->
        <!--                          <img loading="lazy" decoding="async" width="65" height="45" src="-->
        <!--																	<?= base_url(); ?>uploads/2023/07/Leaf_Element.png" class="attachment-full size-full" alt="-->
        <!--																	<?= base_url(); ?>uploads/2023/07/Leaf_Element.png" data-full_image_src="-->
        <!--																	<?= base_url(); ?>uploads/2023/07/Leaf_Element.png" title="Leaf_Element" />-->
        <!--                        </span>-->
        <!--                      </div>-->
        <!--                    </div>-->
        <!--                  </div>-->

        <!--                  <header data-bb-version="4.6.1" class="bt_bb_headline bt_bb_subheadline_text_transform_default bt_bb_dash_none bt_bb_size_extralarge bt_bb_align_inherit" data-bt-override-class="{&quot;bt_bb_size_&quot;:{&quot;current_class&quot;:&quot;bt_bb_size_extralarge&quot;,&quot;xxl&quot;:&quot;extralarge&quot;},&quot;bt_bb_align_&quot;:{&quot;current_class&quot;:&quot;bt_bb_align_inherit&quot;,&quot;xxl&quot;:&quot;inherit&quot;}}">-->
        <!--                    <h3 class="bt_bb_headline_tag hidden-xs hidden-sm">-->
        <!--                      <span class="bt_bb_headline_content">-->
        <!--                        <span>JOIN ONE OF THE TOP 10<br /> PRESCHOOLS IN INDIA </span>-->
        <!--                      </span>-->
        <!--                    </h3>-->
        <!--                    <h3 class="bt_bb_headline_tag  hidden-md hidden-lg">-->
        <!--                      <span class="bt_bb_headline_content">-->
        <!--                        <span>JOIN ONE OF THE TOP 10 PRESCHOOLS IN INDIA </span>-->
        <!--                      </span>-->
        <!--                    </h3>-->
        <!--                  </header>-->
        <!--                  <div class="bt_bb_separator_v2 bt_bb_border_style_none bt_bb_top_spacing_none bt_bb_bottom_spacing_normal bt_bb_border_thickness_1 bt_bb_icon_size_normal bt_bb_text_size_normal bt_bb_separator_v2_without_content" data-bt-override-class="{&quot;bt_bb_top_spacing_&quot;:{&quot;current_class&quot;:&quot;bt_bb_top_spacing_none&quot;,&quot;xxl&quot;:&quot;none&quot;,&quot;xl&quot;:&quot;none&quot;},&quot;bt_bb_bottom_spacing_&quot;:{&quot;current_class&quot;:&quot;bt_bb_bottom_spacing_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;,&quot;xl&quot;:&quot;normal&quot;},&quot;bt_bb_border_thickness_&quot;:{&quot;current_class&quot;:&quot;bt_bb_border_thickness_1&quot;,&quot;xxl&quot;:&quot;1&quot;,&quot;xl&quot;:&quot;1&quot;},&quot;bt_bb_icon_size_&quot;:{&quot;current_class&quot;:&quot;bt_bb_icon_size_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;,&quot;xl&quot;:&quot;normal&quot;},&quot;bt_bb_text_size_&quot;:{&quot;current_class&quot;:&quot;bt_bb_text_size_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;,&quot;xl&quot;:&quot;normal&quot;}}">-->
        <!--                    <div class="bt_bb_separator_v2_inner">-->
        <!--                      <span class="bt_bb_separator_v2_inner_before"></span>-->
        <!--                      <span class="bt_bb_separator_v2_inner_content">-->
        <!--                        <span data-ico-="&#x;" class="bt_bb_icon_holder"></span>-->
        <!--                      </span>-->
        <!--                      <span class="bt_bb_separator_v2_inner_after"></span>-->
        <!--                    </div>-->
        <!--                  </div>-->
        <!--                </div>-->
        <!--              </div>-->
        <!--            </div>-->
        <!--          </div>-->
        <!--        </div>-->
        <!--        <div class="bt_bb_row_wrapper">-->
        <!--          <div class="bt_bb_row bt_bb_column_gap_0 bt_bb_negative_margin_ custom-top-10-preschool" data-bt-override-class="{}">-->
        <!--            <div class="bt_bb_column col-xxl-4 col-xl-4 col-xs-12 col-sm-12 col-md-4 col-lg-4 bt_bb_vertical_align_top bt_bb_align_center bt_bb_padding_normal bt_bb_animation_fade_in animate bt_bb_shape_inherit" data-width="4" data-bt-override-class="{}">-->
        <!--              <div class="bt_bb_column_content">-->
        <!--                <div class="bt_bb_column_content_inner">-->
        <!--                  <div data-bb-version="4.5.9" class="bt_bb_organic_animation bt_bb_organic_animation_fill bt_bb_title_size_normal bt_bb_icon_color_scheme_9 bt_bb_icon_size_normal" style="width:370px;; --icon-primary-color:#282828; --icon-secondary-color:var(--alternate-color);">-->
        <!--                    <div class="item item--style-1" data-morph-path="M 444.96404,266.56453 C 457.96774,175.13774 387.39406,71.817158 293.36662,55.332153 c -35.00247,-6.135 -58.72247,-9.445 -101.74994,2.930005 -62.65496,18.007472 -78.93745,-6.685005 -78.93745,-6.685005 0,0 -34.413702,121.208787 -37.749995,153.307417 -15.536144,148.08958 75.999975,214.33238 156.879915,225.12486 94.61245,12.63001 195.08376,-36.47551 213.15489,-163.4449 z" data-animation-path-duration="2000" data-animation-path-delay="0" data-animation-path-easing="easeInOutQuint" data-path-elasticity="400" data-path-scaleX="1" data-path-scaleY="1" data-path-translateX="0" data-path-translateY="0" data-path-rotate="-30" data-animation-image-duration="1000" data-animation-image-delay="0" data-animation-image-easing="easeOutElastic" data-image-elasticity="400" data-image-scaleX="1.1" data-image-scaleY="1.1" data-image-translateX="0" data-image-translateY="30" data-image-rotate="-60" data-animation-deco-duration="1200" data-animation-deco-delay="1000" data-animation-deco-easing="easeOutElastic" data-deco-elasticity="400" data-deco-scaleX="0.85" data-deco-scaleY="0.85" data-deco-translateX="-5" data-deco-translateY="-3" data-deco-rotate="60">-->
        <!--                      <svg class="item__svg" viewBox="0 0 500 500" width="500" height="500">-->
        <!--                        <clipPath id="bt_bb_organic_animation_656da16ab0aa3">-->
        <!--                          <path class="item__clippath" d="M 424.96404,266.56453 C 440.90903,175.60459 385.39406,81.817158 291.36662,65.332153 c -35.00247,-6.135 -56.72247,-5.445 -99.74994,6.930005 -62.65496,18.007472 -78.93745,-20.685005 -78.93745,-20.685005 0,0 -24.082495,121.244937 -27.749995,153.307417 -13.4175,116.30992 65.999975,194.33238 146.879915,205.12486 94.61245,12.63001 177.2024,-52.49246 193.15489,-143.4449 z" />-->
        <!--                        </clipPath>-->
        <!--                        <g class="item__deco" style="fill: rgb(255,255,255);">-->
        <!--use xlink:href="#deco1" /-->
        <!--                          <path class="item__clippath" d="M 286.3778,428.52934 C 180.25786,447.13183 77.839179,382.36437 58.606685,272.66568 51.449182,231.82947 59.254178,206.48947 73.691679,156.29075 94.700399,83.19329 35.559185,64.197049 35.559185,64.197049 c 0,0 141.452425,-28.096239 178.858655,-32.374989 135.69491,-15.653751 226.72112,76.99998 239.31234,171.35991 14.73501,110.38119 -61.24121,206.73613 -167.35238,225.34737 z" />-->
        <!--                        </g>-->
        <!--                        <g clip-path="url(#bt_bb_organic_animation_656da16ab0aa3)" class="item__img__g">-->
        <!--                          <image class="item__img" xlink:href="-->
        <!--																		<?= base_url(); ?>uploads/2023/07/BG1.jpg" x="0" y="0" height="100%" width="100%" />-->
        <!--                        </g>-->
        <!--                        <g clip-path="url(#bt_bb_organic_animation_656da16ab0aa3)" class="item_hover__img_g">-->
        <!--                          <image class="item_hover__img" xlink:href="<?= base_url(); ?>uploads/2023/07/BG1.jpg" x="0" y="0" height="100%" width="100%" />-->
        <!--                        </g>-->
        <!--                      </svg>-->
        <!--                      <div class="item__meta">-->
        <!--                        <div class="item__meta_inner">-->
        <!--                          <h2 class="item__title">10000+ Nurtured Children</h2>-->
        <!--                        </div>-->
        <!--                      </div>-->
        <!--                    </div>-->
        <!--                  </div>-->
        <!--                  <div data-bb-version="4.5.9" class="bt_bb_separator_v2 bt_bb_border_style_none bt_bb_top_spacing_none bt_bb_bottom_spacing_normal bt_bb_border_thickness_1 bt_bb_icon_size_normal bt_bb_text_size_normal bt_bb_separator_v2_without_content" data-bt-override-class="{&quot;bt_bb_top_spacing_&quot;:{&quot;current_class&quot;:&quot;bt_bb_top_spacing_none&quot;,&quot;xxl&quot;:&quot;none&quot;,&quot;xl&quot;:&quot;normal&quot;},&quot;bt_bb_bottom_spacing_&quot;:{&quot;current_class&quot;:&quot;bt_bb_bottom_spacing_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;,&quot;xl&quot;:&quot;normal&quot;},&quot;bt_bb_border_thickness_&quot;:{&quot;current_class&quot;:&quot;bt_bb_border_thickness_1&quot;,&quot;xxl&quot;:&quot;1&quot;},&quot;bt_bb_icon_size_&quot;:{&quot;current_class&quot;:&quot;bt_bb_icon_size_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;},&quot;bt_bb_text_size_&quot;:{&quot;current_class&quot;:&quot;bt_bb_text_size_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;}}">-->
        <!--                    <div class="bt_bb_separator_v2_inner">-->
        <!--                      <span class="bt_bb_separator_v2_inner_before"></span>-->
        <!--                      <span class="bt_bb_separator_v2_inner_content">-->
        <!--                        <span data-ico-="&#x;" class="bt_bb_icon_holder"></span>-->
        <!--                      </span>-->
        <!--                      <span class="bt_bb_separator_v2_inner_after"></span>-->
        <!--                    </div>-->
        <!--                  </div>-->
        <!--                  <div data-bb-version="4.5.9" class="bt_bb_organic_animation bt_bb_organic_animation_fill bt_bb_title_size_normal bt_bb_icon_color_scheme_9 bt_bb_icon_size_normal" style="width:370px;; --icon-primary-color:#282828; --icon-secondary-color:var(--alternate-color);">-->
        <!--                    <div class="item item--style-1" data-morph-path="M 444.96404,266.56453 C 457.96774,175.13774 387.39406,71.817158 293.36662,55.332153 c -35.00247,-6.135 -58.72247,-9.445 -101.74994,2.930005 -62.65496,18.007472 -78.93745,-6.685005 -78.93745,-6.685005 0,0 -34.413702,121.208787 -37.749995,153.307417 -15.536144,148.08958 75.999975,214.33238 156.879915,225.12486 94.61245,12.63001 195.08376,-36.47551 213.15489,-163.4449 z" data-animation-path-duration="2000" data-animation-path-delay="0" data-animation-path-easing="easeInOutQuint" data-path-elasticity="400" data-path-scaleX="1" data-path-scaleY="1" data-path-translateX="0" data-path-translateY="0" data-path-rotate="-30" data-animation-image-duration="1000" data-animation-image-delay="0" data-animation-image-easing="easeOutElastic" data-image-elasticity="400" data-image-scaleX="1.1" data-image-scaleY="1.1" data-image-translateX="0" data-image-translateY="30" data-image-rotate="-60" data-animation-deco-duration="1200" data-animation-deco-delay="1000" data-animation-deco-easing="easeOutElastic" data-deco-elasticity="400" data-deco-scaleX="0.85" data-deco-scaleY="0.85" data-deco-translateX="-5" data-deco-translateY="-3" data-deco-rotate="60">-->
        <!--                      <svg class="item__svg" viewBox="0 0 500 500" width="500" height="500">-->
        <!--                        <clipPath id="bt_bb_organic_animation_656da16ab0dd7">-->
        <!--                          <path class="item__clippath" d="M 424.96404,266.56453 C 440.90903,175.60459 385.39406,81.817158 291.36662,65.332153 c -35.00247,-6.135 -56.72247,-5.445 -99.74994,6.930005 -62.65496,18.007472 -78.93745,-20.685005 -78.93745,-20.685005 0,0 -24.082495,121.244937 -27.749995,153.307417 -13.4175,116.30992 65.999975,194.33238 146.879915,205.12486 94.61245,12.63001 177.2024,-52.49246 193.15489,-143.4449 z" />-->
        <!--                        </clipPath>-->
        <!--                        <g class="item__deco" style="fill: rgb(255,255,255);">-->
        <!--use xlink:href="#deco1" /-->
        <!--                          <path class="item__clippath" d="M 286.3778,428.52934 C 180.25786,447.13183 77.839179,382.36437 58.606685,272.66568 51.449182,231.82947 59.254178,206.48947 73.691679,156.29075 94.700399,83.19329 35.559185,64.197049 35.559185,64.197049 c 0,0 141.452425,-28.096239 178.858655,-32.374989 135.69491,-15.653751 226.72112,76.99998 239.31234,171.35991 14.73501,110.38119 -61.24121,206.73613 -167.35238,225.34737 z" />-->
        <!--                        </g>-->
        <!--                        <g clip-path="url(#bt_bb_organic_animation_656da16ab0dd7)" class="item__img__g">-->
        <!--                          <image class="item__img" xlink:href="-->
        <!--																			<?= base_url(); ?>uploads/2023/07/BG2.jpg" x="0" y="0" height="100%" width="100%" />-->
        <!--                        </g>-->
        <!--                        <g clip-path="url(#bt_bb_organic_animation_656da16ab0dd7)" class="item_hover__img_g">-->
        <!--                          <image class="item_hover__img" xlink:href="<?= base_url(); ?>uploads/2023/07/BG2.jpg" x="0" y="0" height="100%" width="100%" />-->
        <!--                        </g>-->
        <!--                      </svg>-->
        <!--                      <div class="item__meta">-->
        <!--                        <div class="item__meta_inner">-->
        <!--                          <h2 class="item__title">30+ <br /> Branches <br /> In India </h2>-->
        <!--                        </div>-->
        <!--                      </div>-->
        <!--                    </div>-->
        <!--                  </div>-->
        <!--                  <div class="bt_bb_separator_v2 bt_bb_border_style_none bt_bb_top_spacing_none bt_bb_bottom_spacing_normal bt_bb_border_thickness_1 bt_bb_icon_size_normal bt_bb_text_size_normal bt_bb_separator_v2_without_content" data-bt-override-class="{&quot;bt_bb_top_spacing_&quot;:{&quot;current_class&quot;:&quot;bt_bb_top_spacing_none&quot;,&quot;xxl&quot;:&quot;none&quot;,&quot;xl&quot;:&quot;none&quot;},&quot;bt_bb_bottom_spacing_&quot;:{&quot;current_class&quot;:&quot;bt_bb_bottom_spacing_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;,&quot;xl&quot;:&quot;normal&quot;},&quot;bt_bb_border_thickness_&quot;:{&quot;current_class&quot;:&quot;bt_bb_border_thickness_1&quot;,&quot;xxl&quot;:&quot;1&quot;,&quot;xl&quot;:&quot;1&quot;},&quot;bt_bb_icon_size_&quot;:{&quot;current_class&quot;:&quot;bt_bb_icon_size_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;,&quot;xl&quot;:&quot;normal&quot;},&quot;bt_bb_text_size_&quot;:{&quot;current_class&quot;:&quot;bt_bb_text_size_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;,&quot;xl&quot;:&quot;normal&quot;}}">-->
        <!--                    <div class="bt_bb_separator_v2_inner">-->
        <!--                      <span class="bt_bb_separator_v2_inner_before"></span>-->
        <!--                      <span class="bt_bb_separator_v2_inner_content">-->
        <!--                        <span data-ico-="&#x;" class="bt_bb_icon_holder"></span>-->
        <!--                      </span>-->
        <!--                      <span class="bt_bb_separator_v2_inner_after"></span>-->
        <!--                    </div>-->
        <!--                  </div>-->
        <!--                </div>-->
        <!--              </div>-->
        <!--            </div>-->
        <!--            <div class="bt_bb_column col-xxl-4 col-xl-4 col-xs-12 col-sm-12 col-md-4 col-lg-4 bt_bb_vertical_align_middle bt_bb_align_center bt_bb_padding_normal bt_bb_animation_fade_in animate bt_bb_shape_inherit" data-width="4" data-bt-override-class="{&quot;bt_bb_align_&quot;:{&quot;current_class&quot;:&quot;bt_bb_align_center&quot;,&quot;xxl&quot;:&quot;center&quot;,&quot;xl&quot;:&quot;center&quot;},&quot;bt_bb_padding_&quot;:{&quot;current_class&quot;:&quot;bt_bb_padding_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;,&quot;xl&quot;:&quot;normal&quot;}}">-->
        <!--              <div class="bt_bb_column_content">-->
        <!--                <div class="bt_bb_column_content_inner">-->
        <!--                  <div class="bt_bb_separator_v2 bt_bb_border_style_none bt_bb_top_spacing_none bt_bb_bottom_spacing_normal bt_bb_border_thickness_1 bt_bb_icon_size_normal bt_bb_text_size_normal bt_bb_separator_v2_without_content bt_bb_hidden_xs bt_bb_hidden_ms bt_bb_hidden_sm bt_bb_hidden_md" data-bt-override-class="{&quot;bt_bb_top_spacing_&quot;:{&quot;current_class&quot;:&quot;bt_bb_top_spacing_none&quot;,&quot;xxl&quot;:&quot;none&quot;,&quot;xl&quot;:&quot;none&quot;},&quot;bt_bb_bottom_spacing_&quot;:{&quot;current_class&quot;:&quot;bt_bb_bottom_spacing_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;,&quot;xl&quot;:&quot;normal&quot;},&quot;bt_bb_border_thickness_&quot;:{&quot;current_class&quot;:&quot;bt_bb_border_thickness_1&quot;,&quot;xxl&quot;:&quot;1&quot;,&quot;xl&quot;:&quot;1&quot;},&quot;bt_bb_icon_size_&quot;:{&quot;current_class&quot;:&quot;bt_bb_icon_size_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;,&quot;xl&quot;:&quot;normal&quot;},&quot;bt_bb_text_size_&quot;:{&quot;current_class&quot;:&quot;bt_bb_text_size_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;,&quot;xl&quot;:&quot;normal&quot;}}">-->
        <!--                    <div class="bt_bb_separator_v2_inner">-->
        <!--                      <span class="bt_bb_separator_v2_inner_before"></span>-->
        <!--                      <span class="bt_bb_separator_v2_inner_content">-->
        <!--                        <span data-ico-="&#x;" class="bt_bb_icon_holder"></span>-->
        <!--                      </span>-->
        <!--                      <span class="bt_bb_separator_v2_inner_after"></span>-->
        <!--                    </div>-->
        <!--                  </div>-->
        <!--                  <div class="bt_bb_image bt_bb_shape_square bt_bb_target_self bt_bb_align_inherit bt_bb_hover_style_simple bt_bb_content_display_always bt_bb_content_align_middle" data-bt-override-class="{&quot;bt_bb_align_&quot;:{&quot;current_class&quot;:&quot;bt_bb_align_inherit&quot;,&quot;xxl&quot;:&quot;inherit&quot;,&quot;xl&quot;:&quot;inherit&quot;}}">-->
        <!--                    <span>-->
        <!--                      <img loading="lazy" decoding="async" width="520" height="640" src="-->
        <!--																		<?= base_url(); ?>uploads/2023/07/Home_Section2.png" class="attachment-full size-full" alt="-->
        <!--																		<?= base_url(); ?>uploads/2023/07/Home_Section2.png" data-full_image_src="-->
        <!--																		<?= base_url(); ?>uploads/2023/07/Home_Section2.png" title="Home_Section2" srcset="-->
        <!--																		<?= base_url(); ?>uploads/2023/07/Home_Section2.png 520w, -->
        <!--																		<?= base_url(); ?>uploads/2023/07/Home_Section2.png 320w" sizes="(max-width: 520px) 100vw, 520px" />-->
        <!--                    </span>-->
        <!--                  </div>-->
        <!--                  <div class="bt_bb_separator_v2 bt_bb_border_style_none bt_bb_top_spacing_none bt_bb_bottom_spacing_normal bt_bb_border_thickness_1 bt_bb_icon_size_normal bt_bb_text_size_normal bt_bb_separator_v2_without_content" data-bt-override-class="{&quot;bt_bb_top_spacing_&quot;:{&quot;current_class&quot;:&quot;bt_bb_top_spacing_none&quot;,&quot;xxl&quot;:&quot;none&quot;,&quot;xl&quot;:&quot;none&quot;},&quot;bt_bb_bottom_spacing_&quot;:{&quot;current_class&quot;:&quot;bt_bb_bottom_spacing_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;,&quot;xl&quot;:&quot;normal&quot;},&quot;bt_bb_border_thickness_&quot;:{&quot;current_class&quot;:&quot;bt_bb_border_thickness_1&quot;,&quot;xxl&quot;:&quot;1&quot;,&quot;xl&quot;:&quot;1&quot;},&quot;bt_bb_icon_size_&quot;:{&quot;current_class&quot;:&quot;bt_bb_icon_size_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;,&quot;xl&quot;:&quot;normal&quot;},&quot;bt_bb_text_size_&quot;:{&quot;current_class&quot;:&quot;bt_bb_text_size_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;,&quot;xl&quot;:&quot;normal&quot;}}">-->
        <!--                    <div class="bt_bb_separator_v2_inner">-->
        <!--                      <span class="bt_bb_separator_v2_inner_before"></span>-->
        <!--                      <span class="bt_bb_separator_v2_inner_content">-->
        <!--                        <span data-ico-="&#x;" class="bt_bb_icon_holder"></span>-->
        <!--                      </span>-->
        <!--                      <span class="bt_bb_separator_v2_inner_after"></span>-->
        <!--                    </div>-->
        <!--                  </div>-->
        <!--                </div>-->
        <!--              </div>-->
        <!--            </div>-->
        <!--            <div class="bt_bb_column col-xxl-4 col-xl-4 col-xs-12 col-sm-12 col-md-4 col-lg-4 bt_bb_vertical_align_top bt_bb_align_center bt_bb_padding_normal bt_bb_animation_fade_in animate bt_bb_shape_inherit" data-width="4" data-bt-override-class="{}">-->
        <!--              <div class="bt_bb_column_content">-->
        <!--                <div class="bt_bb_column_content_inner">-->
        <!--                  <div data-bb-version="4.5.9" class="bt_bb_organic_animation bt_bb_organic_animation_fill bt_bb_title_size_normal bt_bb_icon_color_scheme_9 bt_bb_icon_size_normal" style="width:370px;; --icon-primary-color:#282828; --icon-secondary-color:var(--alternate-color);">-->
        <!--                    <div class="item item--style-1" data-morph-path="M 444.96404,266.56453 C 457.96774,175.13774 387.39406,71.817158 293.36662,55.332153 c -35.00247,-6.135 -58.72247,-9.445 -101.74994,2.930005 -62.65496,18.007472 -78.93745,-6.685005 -78.93745,-6.685005 0,0 -34.413702,121.208787 -37.749995,153.307417 -15.536144,148.08958 75.999975,214.33238 156.879915,225.12486 94.61245,12.63001 195.08376,-36.47551 213.15489,-163.4449 z" data-animation-path-duration="2000" data-animation-path-delay="0" data-animation-path-easing="easeInOutQuint" data-path-elasticity="400" data-path-scaleX="1" data-path-scaleY="1" data-path-translateX="0" data-path-translateY="0" data-path-rotate="-30" data-animation-image-duration="1000" data-animation-image-delay="0" data-animation-image-easing="easeOutElastic" data-image-elasticity="400" data-image-scaleX="1.1" data-image-scaleY="1.1" data-image-translateX="0" data-image-translateY="30" data-image-rotate="-60" data-animation-deco-duration="1200" data-animation-deco-delay="1000" data-animation-deco-easing="easeOutElastic" data-deco-elasticity="400" data-deco-scaleX="0.85" data-deco-scaleY="0.85" data-deco-translateX="-5" data-deco-translateY="-3" data-deco-rotate="60">-->
        <!--                      <svg class="item__svg" viewBox="0 0 500 500" width="500" height="500">-->
        <!--                        <clipPath id="bt_bb_organic_animation_656da16ab1542">-->
        <!--                          <path class="item__clippath" d="M 424.96404,266.56453 C 440.90903,175.60459 385.39406,81.817158 291.36662,65.332153 c -35.00247,-6.135 -56.72247,-5.445 -99.74994,6.930005 -62.65496,18.007472 -78.93745,-20.685005 -78.93745,-20.685005 0,0 -24.082495,121.244937 -27.749995,153.307417 -13.4175,116.30992 65.999975,194.33238 146.879915,205.12486 94.61245,12.63001 177.2024,-52.49246 193.15489,-143.4449 z" />-->
        <!--                        </clipPath>-->
        <!--                        <g class="item__deco" style="fill: rgb(255,255,255);">-->
        <!--use xlink:href="#deco1" /-->
        <!--                          <path class="item__clippath" d="M 286.3778,428.52934 C 180.25786,447.13183 77.839179,382.36437 58.606685,272.66568 51.449182,231.82947 59.254178,206.48947 73.691679,156.29075 94.700399,83.19329 35.559185,64.197049 35.559185,64.197049 c 0,0 141.452425,-28.096239 178.858655,-32.374989 135.69491,-15.653751 226.72112,76.99998 239.31234,171.35991 14.73501,110.38119 -61.24121,206.73613 -167.35238,225.34737 z" />-->
        <!--                        </g>-->
        <!--                        <g clip-path="url(#bt_bb_organic_animation_656da16ab1542)" class="item__img__g">-->
        <!--                          <image class="item__img" xlink:href="-->
        <!--																					<?= base_url(); ?>uploads/2023/07/BG4.jpg" x="0" y="0" height="100%" width="100%" />-->
        <!--                        </g>-->
        <!--                        <g clip-path="url(#bt_bb_organic_animation_656da16ab1542)" class="item_hover__img_g">-->
        <!--                          <image class="item_hover__img" xlink:href="<?= base_url(); ?>uploads/2023/07/BG4.jpg" x="0" y="0" height="100%" width="100%" />-->
        <!--                        </g>-->
        <!--                      </svg>-->
        <!--                      <div class="item__meta">-->
        <!--                        <div class="item__meta_inner">-->
        <!--                          <h2 class="item__title">Presence in CITIES <br /> 3 </h2>-->
        <!--                        </div>-->
        <!--                      </div>-->
        <!--                    </div>-->
        <!--                  </div>-->
        <!--                  <div class="bt_bb_separator_v2 bt_bb_border_style_none bt_bb_top_spacing_none bt_bb_bottom_spacing_normal bt_bb_border_thickness_1 bt_bb_icon_size_normal bt_bb_text_size_normal bt_bb_separator_v2_without_content" data-bt-override-class="{&quot;bt_bb_top_spacing_&quot;:{&quot;current_class&quot;:&quot;bt_bb_top_spacing_none&quot;,&quot;xxl&quot;:&quot;none&quot;,&quot;xl&quot;:&quot;none&quot;},&quot;bt_bb_bottom_spacing_&quot;:{&quot;current_class&quot;:&quot;bt_bb_bottom_spacing_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;,&quot;xl&quot;:&quot;normal&quot;},&quot;bt_bb_border_thickness_&quot;:{&quot;current_class&quot;:&quot;bt_bb_border_thickness_1&quot;,&quot;xxl&quot;:&quot;1&quot;,&quot;xl&quot;:&quot;1&quot;},&quot;bt_bb_icon_size_&quot;:{&quot;current_class&quot;:&quot;bt_bb_icon_size_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;,&quot;xl&quot;:&quot;normal&quot;},&quot;bt_bb_text_size_&quot;:{&quot;current_class&quot;:&quot;bt_bb_text_size_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;,&quot;xl&quot;:&quot;normal&quot;}}">-->
        <!--                    <div class="bt_bb_separator_v2_inner">-->
        <!--                      <span class="bt_bb_separator_v2_inner_before"></span>-->
        <!--                      <span class="bt_bb_separator_v2_inner_content">-->
        <!--                        <span data-ico-="&#x;" class="bt_bb_icon_holder"></span>-->
        <!--                      </span>-->
        <!--                      <span class="bt_bb_separator_v2_inner_after"></span>-->
        <!--                    </div>-->
        <!--                  </div>-->
        <!--                  <div data-bb-version="4.5.9" class="bt_bb_organic_animation bt_bb_organic_animation_fill bt_bb_title_size_normal bt_bb_icon_color_scheme_9 bt_bb_icon_size_normal" style="width:370px;; --icon-primary-color:#282828; --icon-secondary-color:var(--alternate-color);">-->
        <!--                    <div class="item item--style-1" data-morph-path="M 444.96404,266.56453 C 457.96774,175.13774 387.39406,71.817158 293.36662,55.332153 c -35.00247,-6.135 -58.72247,-9.445 -101.74994,2.930005 -62.65496,18.007472 -78.93745,-6.685005 -78.93745,-6.685005 0,0 -34.413702,121.208787 -37.749995,153.307417 -15.536144,148.08958 75.999975,214.33238 156.879915,225.12486 94.61245,12.63001 195.08376,-36.47551 213.15489,-163.4449 z" data-animation-path-duration="2000" data-animation-path-delay="0" data-animation-path-easing="easeInOutQuint" data-path-elasticity="400" data-path-scaleX="1" data-path-scaleY="1" data-path-translateX="0" data-path-translateY="0" data-path-rotate="-30" data-animation-image-duration="1000" data-animation-image-delay="0" data-animation-image-easing="easeOutElastic" data-image-elasticity="400" data-image-scaleX="1.1" data-image-scaleY="1.1" data-image-translateX="0" data-image-translateY="30" data-image-rotate="-60" data-animation-deco-duration="1200" data-animation-deco-delay="1000" data-animation-deco-easing="easeOutElastic" data-deco-elasticity="400" data-deco-scaleX="0.85" data-deco-scaleY="0.85" data-deco-translateX="-5" data-deco-translateY="-3" data-deco-rotate="60">-->
        <!--                      <svg class="item__svg" viewBox="0 0 500 500" width="500" height="500">-->
        <!--                        <clipPath id="bt_bb_organic_animation_656da16ab1b13">-->
        <!--                          <path class="item__clippath" d="M 424.96404,266.56453 C 440.90903,175.60459 385.39406,81.817158 291.36662,65.332153 c -35.00247,-6.135 -56.72247,-5.445 -99.74994,6.930005 -62.65496,18.007472 -78.93745,-20.685005 -78.93745,-20.685005 0,0 -24.082495,121.244937 -27.749995,153.307417 -13.4175,116.30992 65.999975,194.33238 146.879915,205.12486 94.61245,12.63001 177.2024,-52.49246 193.15489,-143.4449 z" />-->
        <!--                        </clipPath>-->
        <!--                        <g class="item__deco" style="fill: rgb(255,255,255);">-->
        <!--use xlink:href="#deco1" /-->
        <!--                          <path class="item__clippath" d="M 286.3778,428.52934 C 180.25786,447.13183 77.839179,382.36437 58.606685,272.66568 51.449182,231.82947 59.254178,206.48947 73.691679,156.29075 94.700399,83.19329 35.559185,64.197049 35.559185,64.197049 c 0,0 141.452425,-28.096239 178.858655,-32.374989 135.69491,-15.653751 226.72112,76.99998 239.31234,171.35991 14.73501,110.38119 -61.24121,206.73613 -167.35238,225.34737 z" />-->
        <!--                        </g>-->
        <!--                        <g clip-path="url(#bt_bb_organic_animation_656da16ab1b13)" class="item__img__g">-->
        <!--                          <image class="item__img" xlink:href="-->
        <!--																						<?= base_url(); ?>uploads/2023/07/BG3.jpg" x="0" y="0" height="100%" width="100%" />-->
        <!--                        </g>-->
        <!--                        <g clip-path="url(#bt_bb_organic_animation_656da16ab1b13)" class="item_hover__img_g">-->
        <!--                          <image class="item_hover__img" xlink:href="<?= base_url(); ?>uploads/2023/07/BG3.jpg" x="0" y="0" height="100%" width="100%" />-->
        <!--                        </g>-->
        <!--                      </svg>-->
        <!--                      <div class="item__meta">-->
        <!--                        <div class="item__meta_inner">-->
        <!--                          <h2 class="item__title">Accredited with 14+ <br /> Awards </h2>-->
        <!--                        </div>-->
        <!--                      </div>-->
        <!--                    </div>-->
        <!--                  </div>-->
        <!--                  <div class="bt_bb_separator_v2 bt_bb_border_style_none bt_bb_top_spacing_none bt_bb_bottom_spacing_normal bt_bb_border_thickness_1 bt_bb_icon_size_normal bt_bb_text_size_normal bt_bb_separator_v2_without_content" data-bt-override-class="{&quot;bt_bb_top_spacing_&quot;:{&quot;current_class&quot;:&quot;bt_bb_top_spacing_none&quot;,&quot;xxl&quot;:&quot;none&quot;,&quot;xl&quot;:&quot;none&quot;},&quot;bt_bb_bottom_spacing_&quot;:{&quot;current_class&quot;:&quot;bt_bb_bottom_spacing_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;,&quot;xl&quot;:&quot;normal&quot;,&quot;md&quot;:&quot;none&quot;,&quot;sm&quot;:&quot;none&quot;,&quot;xs&quot;:&quot;none&quot;},&quot;bt_bb_border_thickness_&quot;:{&quot;current_class&quot;:&quot;bt_bb_border_thickness_1&quot;,&quot;xxl&quot;:&quot;1&quot;,&quot;xl&quot;:&quot;1&quot;},&quot;bt_bb_icon_size_&quot;:{&quot;current_class&quot;:&quot;bt_bb_icon_size_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;,&quot;xl&quot;:&quot;normal&quot;},&quot;bt_bb_text_size_&quot;:{&quot;current_class&quot;:&quot;bt_bb_text_size_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;,&quot;xl&quot;:&quot;normal&quot;}}">-->
        <!--                    <div class="bt_bb_separator_v2_inner">-->
        <!--                      <span class="bt_bb_separator_v2_inner_before"></span>-->
        <!--                      <span class="bt_bb_separator_v2_inner_content">-->
        <!--                        <span data-ico-="&#x;" class="bt_bb_icon_holder"></span>-->
        <!--                      </span>-->
        <!--                      <span class="bt_bb_separator_v2_inner_after"></span>-->
        <!--                    </div>-->
        <!--                  </div>-->
        <!--                </div>-->
        <!--              </div>-->
        <!--            </div>-->
        <!--          </div>-->
        <!--        </div>-->
        <!--        <div class="bt_bb_row_wrapper">-->
        <!--          <div class="bt_bb_row" data-bt-override-class="{}">-->
        <!--            <div class="bt_bb_column col-xxl-12 col-xl-12 col-xs-12 col-sm-12 col-md-12 col-lg-12 bt_bb_vertical_align_top bt_bb_align_left bt_bb_padding_normal bt_bb_shape_inherit" data-width="12" data-bt-override-class="{}">-->
        <!--              <div class="bt_bb_column_content">-->
        <!--                <div class="bt_bb_column_content_inner">-->
        <!--                  <div class="bt_bb_separator_v2 bt_bb_border_style_none bt_bb_top_spacing_none bt_bb_bottom_spacing_normal bt_bb_border_thickness_1 bt_bb_icon_size_normal bt_bb_text_size_normal bt_bb_separator_v2_without_content bt_bb_hidden_xs bt_bb_hidden_ms bt_bb_hidden_sm bt_bb_hidden_md" data-bt-override-class="{&quot;bt_bb_top_spacing_&quot;:{&quot;current_class&quot;:&quot;bt_bb_top_spacing_none&quot;,&quot;xxl&quot;:&quot;none&quot;,&quot;xl&quot;:&quot;none&quot;},&quot;bt_bb_bottom_spacing_&quot;:{&quot;current_class&quot;:&quot;bt_bb_bottom_spacing_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;,&quot;xl&quot;:&quot;normal&quot;},&quot;bt_bb_border_thickness_&quot;:{&quot;current_class&quot;:&quot;bt_bb_border_thickness_1&quot;,&quot;xxl&quot;:&quot;1&quot;,&quot;xl&quot;:&quot;1&quot;},&quot;bt_bb_icon_size_&quot;:{&quot;current_class&quot;:&quot;bt_bb_icon_size_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;,&quot;xl&quot;:&quot;normal&quot;},&quot;bt_bb_text_size_&quot;:{&quot;current_class&quot;:&quot;bt_bb_text_size_normal&quot;,&quot;xxl&quot;:&quot;normal&quot;,&quot;xl&quot;:&quot;normal&quot;}}">-->
        <!--                    <div class="bt_bb_separator_v2_inner">-->
        <!--                      <span class="bt_bb_separator_v2_inner_before"></span>-->
        <!--                      <span class="bt_bb_separator_v2_inner_content">-->
        <!--                        <span data-ico-="&#x;" class="bt_bb_icon_holder"></span>-->
        <!--                      </span>-->
        <!--                      <span class="bt_bb_separator_v2_inner_after"></span>-->
        <!--                    </div>-->
        <!--                  </div>-->
        <!--                </div>-->
        <!--              </div>-->
        <!--            </div>-->
        <!--          </div>-->
        <!--        </div>-->
        <!--      </div>-->
        <!-- cell_inner -->
        <!--    </div>-->
        <!-- cell -->
        <!--  </div>-->
        <!-- port -->
        <!--  <div class="bt_bb_section_top_section_coverage_image">-->
        <!--    <img decoding="async" src="-->
        <!--												<?= base_url(); ?>uploads/2022/04/top_white_wave_03.png" alt="Kidozonia Preschool Nearme" />-->
        <!--  </div>-->
        <!--  <div class="bt_bb_section_bottom_section_coverage_image">-->
        <!--    <img decoding="async" src="-->
        <!--													<?= base_url(); ?>uploads/2022/04/bottom_white_wave_03.png" alt="Kidozonia Preschool Activities" />-->
        <!--  </div>-->
        <!--</section>-->

        <!--<section-->
        <!--  data-bb-version="4.6.0"-->
        <!--  id="bt_bb_section656da18e44c8a"-->
        <!--  class="bt_bb_section bt_bb_layout_boxed_1000 bt_bb_vertical_align_top bt_bb_top_spacing_normal bt_bb_bottom_spacing_medium bt_bb_negative_margin_none"-->
        <!--  data-bt-override-class='{"bt_bb_top_spacing_":{"current_class":"bt_bb_top_spacing_normal","xxl":"normal","md":"large","sm":"large","xs":"large"},"bt_bb_bottom_spacing_":{"current_class":"bt_bb_bottom_spacing_medium","xxl":"medium"}}'>-->
        <!--  <div class="bt_bb_port pt-0">-->
        <!--    <div class="bt_bb_cell">-->
        <!--      <div class="bt_bb_cell_inner">-->
        <!--        <div class="bt_bb_row_wrapper">-->
        <!--          <div class="bt_bb_row" data-bt-override-class="{}">-->
        <!--            <div-->
        <!--              class="bt_bb_column col-xxl-3 col-xl-3 col-xs-12 col-sm-12 col-md-12 col-lg-3 bt_bb_vertical_align_top bt_bb_align_left bt_bb_padding_normal bt_bb_shape_inherit"-->
        <!--              data-width="3"-->
        <!--              data-bt-override-class="{}">-->
        <!--              <div class="bt_bb_column_content">-->
        <!--                <div class="bt_bb_column_content_inner"></div>-->
        <!--              </div>-->
        <!--            </div>-->
        <!--            <div-->
        <!--              class="bt_bb_column col-xxl-6 col-xl-6 col-xs-12 col-sm-12 col-md-12 col-lg-6 bt_bb_vertical_align_top bt_bb_align_center bt_bb_padding_normal bt_bb_animation_fade_in animate bt_bb_shape_inherit"-->
        <!--              data-width="6"-->
        <!--              data-bt-override-class='{"bt_bb_align_":{"current_class":"bt_bb_align_center","xxl":"center","xl":"center"},"bt_bb_padding_":{"current_class":"bt_bb_padding_normal","xxl":"normal","xl":"normal"}}'>-->
        <!--              <div class="bt_bb_column_content">-->
        <!--                <div class="bt_bb_column_content_inner">-->
        <!--                  <div-->
        <!--                    class="bt_bb_separator_v2 bt_bb_border_style_none bt_bb_top_spacing_none bt_bb_bottom_spacing_medium bt_bb_border_thickness_1 bt_bb_icon_size_normal bt_bb_text_size_normal bt_bb_separator_v2_without_content"-->
        <!--                    data-bt-override-class='{"bt_bb_top_spacing_":{"current_class":"bt_bb_top_spacing_none","xxl":"none","xl":"none"},"bt_bb_bottom_spacing_":{"current_class":"bt_bb_bottom_spacing_medium","xxl":"medium","xl":"medium"},"bt_bb_border_thickness_":{"current_class":"bt_bb_border_thickness_1","xxl":"1","xl":"1"},"bt_bb_icon_size_":{"current_class":"bt_bb_icon_size_normal","xxl":"normal","xl":"normal"},"bt_bb_text_size_":{"current_class":"bt_bb_text_size_normal","xxl":"normal","xl":"normal"}}'>-->
        <!--                    <div class="bt_bb_separator_v2_inner">-->
        <!--                      <span-->
        <!--                        class="bt_bb_separator_v2_inner_before"></span><span class="bt_bb_separator_v2_inner_content"><span-->
        <!--                          data-ico-="&#x;"-->
        <!--                          class="bt_bb_icon_holder"></span></span><span-->
        <!--                        class="bt_bb_separator_v2_inner_after"></span>-->
        <!--                    </div>-->
        <!--                  </div>-->
        <!--                  <div-->
        <!--                    class="bt_bb_floating_image bt_bb_floating_image_horizontal_position_default bt_bb_floating_image_vertical_position_default bt_bb_floating_image_animation_delay_default bt_bb_floating_image_animation_duration_default bt_bb_floating_image_animation_style_ease_out bt_bb_animation_fade_in bt_bb_animation_move_down animate"-->
        <!--                    style="margin-top: -3em; position: relative"-->
        <!--                    data-speed="0.4"-->
        <!--                    data-direction="">-->
        <!--                    <div-->
        <!--                      class="bt_bb_floating_image_image"-->
        <!--                      data-speed="0.4"-->
        <!--                      data-direction="">-->
        <!--                      <div-->
        <!--                        class="bt_bb_image"-->
        <!--                        data-bt-override-class="{}">-->
        <!--                        <span><img-->
        <!--                            loading="lazy"-->
        <!--                            decoding="async"-->
        <!--                            width="65"-->
        <!--                            height="45"-->
        <!--                            src="<?php echo base_url(); ?>uploads/2023/07/Leaf_Element.png"-->
        <!--                            class="attachment-full size-full"-->
        <!--                            alt="Kidozonia Kindergarten"-->
        <!--                            data-full_image_src="<?php echo base_url(); ?>uploads/2023/07/Leaf_Element.png"-->
        <!--                            title="Leaf_Element" /></span>-->
        <!--                      </div>-->
        <!--                    </div>-->
        <!--                  </div>-->
        <!--                  <div-->
        <!--                    class="bt_bb_separator_v2 bt_bb_border_style_none bt_bb_top_spacing_none bt_bb_bottom_spacing_extra_small bt_bb_border_thickness_1 bt_bb_icon_size_normal bt_bb_text_size_normal bt_bb_separator_v2_without_content"-->
        <!--                    data-bt-override-class='{"bt_bb_top_spacing_":{"current_class":"bt_bb_top_spacing_none","xxl":"none","xl":"none"},"bt_bb_bottom_spacing_":{"current_class":"bt_bb_bottom_spacing_extra_small","xxl":"extra_small","xl":"extra_small"},"bt_bb_border_thickness_":{"current_class":"bt_bb_border_thickness_1","xxl":"1","xl":"1"},"bt_bb_icon_size_":{"current_class":"bt_bb_icon_size_normal","xxl":"normal","xl":"normal"},"bt_bb_text_size_":{"current_class":"bt_bb_text_size_normal","xxl":"normal","xl":"normal"}}'>-->
        <!--                    <div class="bt_bb_separator_v2_inner">-->
        <!--                      <span-->
        <!--                        class="bt_bb_separator_v2_inner_before"></span><span class="bt_bb_separator_v2_inner_content"><span-->
        <!--                          data-ico-="&#x;"-->
        <!--                          class="bt_bb_icon_holder"></span></span><span-->
        <!--                        class="bt_bb_separator_v2_inner_after"></span>-->
        <!--                    </div>-->
        <!--                  </div>-->
        <!--                  <header-->
        <!--                    data-bb-version="4.6.0"-->
        <!--                    class="bt_bb_headline bt_bb_subheadline_text_transform_default bt_bb_dash_none bt_bb_superheadline bt_bb_size_extralarge bt_bb_align_inherit"-->
        <!--                    data-bt-override-class='{"bt_bb_size_":{"current_class":"bt_bb_size_extralarge","xxl":"extralarge"},"bt_bb_align_":{"current_class":"bt_bb_align_inherit","xxl":"inherit"}}'>-->
        <!--                    <h3 class="bt_bb_headline_tag">-->
        <!--                      <span class="bt_bb_headline_superheadline">Here are answers to your questions</span><span class="bt_bb_headline_content"><span>Admission FAQ's</span></span>-->
        <!--                    </h3>-->
        <!--                  </header>-->
        <!--                  <div-->
        <!--                    class="bt_bb_separator_v2 bt_bb_border_style_none bt_bb_top_spacing_none bt_bb_bottom_spacing_medium bt_bb_border_thickness_1 bt_bb_icon_size_normal bt_bb_text_size_normal bt_bb_separator_v2_without_content"-->
        <!--                    data-bt-override-class='{"bt_bb_top_spacing_":{"current_class":"bt_bb_top_spacing_none","xxl":"none","xl":"none"},"bt_bb_bottom_spacing_":{"current_class":"bt_bb_bottom_spacing_medium","xxl":"medium","xl":"medium"},"bt_bb_border_thickness_":{"current_class":"bt_bb_border_thickness_1","xxl":"1","xl":"1"},"bt_bb_icon_size_":{"current_class":"bt_bb_icon_size_normal","xxl":"normal","xl":"normal"},"bt_bb_text_size_":{"current_class":"bt_bb_text_size_normal","xxl":"normal","xl":"normal"}}'>-->
        <!--                    <div class="bt_bb_separator_v2_inner">-->
        <!--                      <span-->
        <!--                        class="bt_bb_separator_v2_inner_before"></span><span class="bt_bb_separator_v2_inner_content"><span-->
        <!--                          data-ico-="&#x;"-->
        <!--                          class="bt_bb_icon_holder"></span></span><span-->
        <!--                        class="bt_bb_separator_v2_inner_after"></span>-->
        <!--                    </div>-->
        <!--                  </div>-->
        <!--                </div>-->
        <!--              </div>-->
        <!--            </div>-->
        <!--            <div-->
        <!--              class="bt_bb_column col-xxl-3 col-xl-3 col-xs-12 col-sm-12 col-md-12 col-lg-3 bt_bb_vertical_align_top bt_bb_align_left bt_bb_padding_normal bt_bb_shape_inherit"-->
        <!--              data-width="3"-->
        <!--              data-bt-override-class="{}">-->
        <!--              <div class="bt_bb_column_content">-->
        <!--                <div class="bt_bb_column_content_inner"></div>-->
        <!--              </div>-->
        <!--            </div>-->
        <!--          </div>-->
        <!--        </div>-->
        <!--        <div class="bt_bb_row_wrapper">-->
        <!--          <div class="bt_bb_row" data-bt-override-class="{}">-->
        <!--            <div-->
        <!--              class="bt_bb_column col-xxl-12 col-xl-12 col-xs-12 col-sm-12 col-md-12 col-lg-12 bt_bb_vertical_align_top bt_bb_align_left bt_bb_padding_normal bt_bb_animation_fade_in animate bt_bb_shape_inherit"-->
        <!--              data-width="12"-->
        <!--              data-bt-override-class='{"bt_bb_align_":{"current_class":"bt_bb_align_left","xxl":"left","xl":"left"},"bt_bb_padding_":{"current_class":"bt_bb_padding_normal","xxl":"normal","xl":"normal"}}'>-->
        <!--              <div class="bt_bb_column_content">-->
        <!--                <div class="bt_bb_column_content_inner">-->
        <!--                  <div-->
        <!--                    class="bt_bb_accordion bt_bb_color_scheme_11 bt_bb_icons_color_scheme_3 bt_bb_style_outline bt_bb_shape_square bt_bb_icon_style_borderless"-->
        <!--                    style="-->
        <!--                      --accordion-primary-color: #282828;-->
        <!--                      --accordion-secondary-color: var(--third-color);-->
        <!--                      --icons-primary-color: var(--accent-color);-->
        <!--                      --icons-secondary-color: #282828;-->
        <!--                    ">-->

        <!--                    <?php foreach ($admissions as $item) { ?>-->
          <!--                      <div class="bt_bb_accordion_item btWithIcon">-->
          <!--                        <div class="bt_bb_accordion_item_title_content">-->
          <!--                          <div-->
          <!--                            class="bt_bb_icon bt_bb_size_normal bt_bb_shape_circle">-->
          <!--                            <span-->
          <!--                              data-ico-fontawesome6solid="&#xea1e;"-->
          <!--                              class="bt_bb_icon_holder"></span>-->
          <!--                          </div>-->
          <!--                          <div class="bt_bb_accordion_item_title">-->
          <!--                            <?php echo $item['title']; ?>-->
          <!--                          </div>-->
          <!--                        </div>-->
          <!--                        <div class="bt_bb_accordion_item_content">-->
          <!--                          <div class="bt_bb_text" style="opacity: 0.7">-->
          <!--                            <p>-->
          <!--                              <?php echo $item['description']; ?>-->
          <!--                            </p>-->
          <!--                          </div>-->
          <!--                        </div>-->
          <!--                      </div>-->
          <!--                    <?php } ?>-->

        <!--                  </div>-->
        <!--                </div>-->
        <!--              </div>-->
        <!--            </div>-->
        <!--          </div>-->
        <!--        </div>-->
        <!--      </div>-->
        <!-- cell_inner -->
        <!--    </div>-->
        <!-- cell -->
        <!--  </div>-->
        <!-- port -->
        <!--</section>-->


      </div>
    </div>
    <!-- /boldthemes_content -->
  </div>
  <!-- /contentHolder -->
</div>
<!-- /contentWrap -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [{
    "@type": "Question",
    "name": "What is the fee structure at Kidzonia International?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "We believe in complete transparency. Our fees are highly competitive for the international standards we provide. The fee covers tuition, premium facilities, and our DISCOVER curriculum. Please fill out the enquiry form for a detailed breakdown for your branch."
    }
  }, {
    "@type": "Question",
    "name": "What is the admission process?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Step 1: Fill out the online enquiry form. Step 2: Schedule a campus tour. Step 3: Submit the admission form with documents and the confirmation fee."
    }
  }, {
    "@type": "Question",
    "name": "Do you offer daycare facilities?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Yes, for children aged 18 months to 10 years. We offer extended hours and a safe environment for children of working parents."
    }
  }, {
    "@type": "Question",
    "name": "How do you ensure safety on campus?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "We have 24/7 CCTV surveillance, restricted entry, child-safe furniture, and background-checked staff."
    }
  }, {
    "@type": "Question",
    "name": "Is transportation available for students?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Yes, we offer safe and reliable transportation with trained support staff across our branches."
    }
  }]
}
</script>
<script>
  document.addEventListener('DOMContentLoaded', function() {
    var faqRoot = document.getElementById('admissionFaq');
    if (!faqRoot) return;

    var items = faqRoot.querySelectorAll('.faq-item');

    items.forEach(function(item) {
      var button = item.querySelector('.faq-question');
      var answer = item.querySelector('.faq-answer');
      var toggle = item.querySelector('.faq-toggle');
      if (!button || !answer || !toggle) return;

      button.addEventListener('click', function() {
        var isOpen = item.classList.contains('is-open');

        if (isOpen) {
          item.classList.remove('is-open');
          button.setAttribute('aria-expanded', 'false');
          answer.style.display = 'none';
          toggle.textContent = '+';
        } else {
          items.forEach(function(otherItem) {
            if (otherItem === item) return;
            var otherButton = otherItem.querySelector('.faq-question');
            var otherAnswer = otherItem.querySelector('.faq-answer');
            var otherToggle = otherItem.querySelector('.faq-toggle');
            if (!otherButton || !otherAnswer || !otherToggle) return;
            otherItem.classList.remove('is-open');
            otherButton.setAttribute('aria-expanded', 'false');
            otherAnswer.style.display = 'none';
            otherToggle.textContent = '+';
          });

          item.classList.add('is-open');
          button.setAttribute('aria-expanded', 'true');
          answer.style.display = 'block';
          toggle.textContent = '−';
        }
      });
    });
  });
</script>
<script type="text/javascript"
  src="<?php echo base_url(); ?>assets/themes/bambino/bold-page-builder/content_elements/bt_bb_accordion/bt_bb_accordionaec2.js?ver=6.4.1"
  id="bt_bb_accordion-js"></script>