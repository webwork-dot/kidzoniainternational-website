<div id="featured-title" class="clearfix simple"
  style="background-image: url(<?php echo base_url(); ?>uploads/2023/02/featured-title-bg.png);">
  <div class="edukul-container clearfix">
    <div class="inner-wrap">
      <div class="title-group">
        <h1 class="main-title">
          Admission Enquiry
        </h1>
      </div>
    </div>
  </div>
</div>
<!-- /#featured-title -->
<!-- Main Content -->
<div id="main-content" class="site-main clearfix" style="">
  <div id="content-wrap">
    <div class="vc-custom-col-spacing clearfix vc-col-spacing-30">
      <section class="wpb_row vc_row-fluid row-content-position-Default">
        <div class="edukul-container">
          <div class="row-inner clearfix">
            <div class="wpb_column vc_column_container vc_col-sm-12">
              <div class="vc_column-inner">
                <div class="wpb_wrapper">
                  <div class="edukul-spacer clearfix" data-desktop="40" data-mobi="20" data-smobi="20"></div>
                  <div class="edukul-content-box clearfix">
                    <div class="vc-custom-col-inner-spacing clearfix vc-col-inner-spacing-80">
                      <div class="wpb_row vc_inner vc_row-fluid d-flex align-items-center">
                        <div class="wpb_column vc_column_container vc_col-sm-5 m-auto">
                          <div class="vc_column-inner">
                            <div class="wpb_wrapper">
                              <div class="wpb_single_image wpb_content_element vc_align_left">
                                <figure class="wpb_wrapper vc_figure">
                                  <div class="vc_single_image-wrapper vc_box_border_grey"><img loading="lazy"
                                      src="<?php echo base_url(); ?>uploads/2023/04/About-us-image-1-revised.png"
                                      alt="Admissions open" class="vc_single_image-img attachment-full" /></div>
                                  <div class="vc_single_image-wrapper vc_box_border_grey"><img loading="lazy"
                                      src="<?php echo base_url(); ?>uploads/2023/04/Middle_School_Section_1.png"
                                      alt="Admissions open" class="vc_single_image-img attachment-full" /></div>
                                </figure>
                              </div>
                              <div class="edukul-spacer clearfix" data-desktop="0" data-mobi="40" data-smobi="40"></div>
                            </div>
                          </div>
                        </div>
                        <div class="wpb_column vc_column_container vc_col-sm-7">
                          <div class="vc_column-inner">
                            <div class="wpb_wrapper">
                              <div class="wpforms-container  col-md-12 h-enquiry">
                                <h3>Admission Enquiry For Academic Year 2026-27</h3>
                                <form action="<?php echo base_url(); ?>check_admission_enquiry" class="add-ajax-redirect-image-form mt-10" onsubmit="return checkForm(this);" method='POST'>
                                  <!--<form action="<?php echo base_url(); ?>check_admission_enquiry" method="post" class="add-ajax-admission-form mt-10" onsubmit="return checkForm(this);">-->
                                  <div class="row">
                                     <input type="hidden" id="web_source" name="web_source" value="admission-enquiry">
                                     <input type="hidden" name="form_type" value="admission_enquiry">
                                    <div class="col-md-12">
                                      <div class="form-group mb-2">
                                        <label class="col-theme-blue">Admission For Class<i
                                            class="text-dander">*</i></label>
                                        <select class="form-control" name="class_id" required>
                                          <option value="">Select Class</option>
                                          <?php foreach ($class_list as $class) { ?>
                                            <option value="<?php echo $class['id']; ?>"><?php echo $class['name']; ?>
                                            </option>
                                          <?php } ?>
                                        </select>
                                        <span class="invalid-feedback"></span>
                                      </div>
                                    </div>

                                    <div class="col-md-12">
                                      <div class="form-group mb-2">
                                        <label class="col-theme-blue">Students Name<i class="text-dander">*</i></label>
                                        <input type="text" class="form-control" name="child_name"
                                          placeholder="Child Name" required>
                                        <span class="invalid-feedback"></span>
                                      </div>
                                    </div>

                                    <div class="col-md-12">
                                      <div class="form-group mb-2">
                                        <label class="col-theme-blue">Parent Name<i class="text-dander">*</i></label>
                                        <input type="text" class="form-control" name="parent_name"
                                          placeholder="Parent Name" required>
                                        <span class="invalid-feedback"></span>
                                      </div>
                                    </div>

                                    <div class="col-md-12">
                                      <div class="form-group mb-2">
                                        <label class="col-theme-blue">Phone<i class="text-dander">*</i></label> <br>
                                        <input type="tel" class="form-control"
                                          name="phone"  required>
                                        <span class="invalid-feedback"></span>
                                      </div>
                                    </div>

                                    <div class="col-md-12">
                                      <div class="form-group mb-2">
                                        <label class="col-theme-blue">Email</label>
                                        <input type="email" class="form-control" name="email" placeholder="Email">
                                        <span class="invalid-feedback"></span>
                                      </div>
                                    </div>

                                    <input type="hidden" name="know_about_us" value="Website">

                                    <div class="col-md-12">
                                      <div class="form-group mb-2">
                                        <label class="col-theme-blue">Location<i
                                            class="text-dander">*</i></label>
                                        <select class="form-control" name="location" required>
                                          <option value="">Select Location</option>
                                          <option value="Ameenpur">Ameenpur</option>
                                          <option value="Nallagandla">Nallagandla</option>
                                        </select>

                                        <span class="invalid-feedback"></span>
                                      </div>
                                    </div>

                                    <div class="col-md-12">
                                      <div class="form-group mb-2">
                                        <label class="col-theme-blue">Security Check: What is <?php echo generate_math_captcha(); ?> ?</label>
                                        <input type="number" name="captcha_answer" class="form-control" placeholder="Enter answer" required>
                                      </div>
                                    </div>

                                    <div class="col-md-12 mt-2">
                                      <div class="wpforms-submit-container pt-0">
                                        <button type="submit"
                                          class="custom-kcis-btn px-5 py-4 btn_merify w-100 btn_verify"
                                          name="btn_verify">
                                          Submit</button>
                                      </div>
                                    </div>
                                  </div>

                                </form>
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
  <!-- /#content-wrap -->
</div>




<!-- Main Content -->
<div id="main-content" class="site-main clearfix" style="">
  <div id="content-wrap">
    <div id="site-content" class="site-content clearfix">
      <div id="inner-content" class="inner-content-wrap">
        <article class="page-content post-19469 page type-page status-publish hentry">
          <section class="wpb-content-wrapper">
            <div class="vc-custom-col-spacing clearfix vc-col-spacing-30">
              <section class="wpb_row vc_row-fluid row-content-position-Default">
                <div class="edukul-container">
                  <div class="row-inner clearfix">
                    <div class="wpb_column vc_column_container vc_col-sm-12">
                      <div class="vc_column-inner">
                        <div class="wpb_wrapper">
                          <div class="edukul-content-box clearfix">
                            <div class="vc-custom-col-inner-spacing clearfix vc-col-inner-spacing-80">
                              <div class="wpb_row vc_inner vc_row-fluid d-flex align-items-center">
                                <div class="wpb_column vc_column_container vc_col-sm-6">
                                  <div class="vc_column-inner">
                                    <div class="wpb_wrapper">
                                      <div class="edukul-headings clearfix " data-font=55 data-mfont=36 style="">
                                        <h2 class="heading clearfix "
                                          style="color:#122051;line-height:47px;margin-bottom:28px;font-size:55px;">
                                          Application Process
                                        </h2>
                                        <div class="extra-content clearfix" style="">
                                          <p></p>
                                        </div>
                                      </div>
                                      <div class="wpb_text_column wpb_content_element  explore-text">
                                        <div class="wpb_wrapper">
                                          <p class="text-md-center">Choosing the Right Path for Your Child's Future at
                                            Kidzonia Credence International School</p>
                                          <p class="text-md-center">Selecting a school for your child is a pivotal
                                            decision that lays the foundation for their future success. At Kidzonia
                                            Credence International School (KCIS), we recognize the significance of this
                                            choice and have designed an admissions process to guide you in determining
                                            if KCIS, with its high academic standards, is the optimal choice for your
                                            child's education.</p>
                                          <p class="text-md-center">Our Parent Orientation and Admission Counseling
                                            program are tailored to help you understand the procedures and requirements
                                            for school admissions. This comprehensive session aims to address any
                                            queries you may have about the application process, ensuring a smooth
                                            experience. By carefully following the provided instructions, you can
                                            effortlessly navigate the admissions process and save time while filling out
                                            the admission form.</p>
                                          <p class="text-md-center">KCIS offers admissions for Nursery, Kindergarten,
                                            and Grades I to VI, subject to seat availability and eligibility</p>
                                        </div>
                                      </div>
                                      <div class="edukul-spacer clearfix" data-desktop="57" data-mobi="30"
                                        data-smobi="30"></div>
                                    </div>
                                  </div>
                                </div>
                                <div class="wpb_column vc_column_container vc_col-sm-6">
                                  <div class="vc_column-inner">
                                    <div class="wpb_wrapper">
                                      <div class="edukul-simple-image no-effect custom fimg-622193301" style=""
                                        data-stretch-left=-53px>
                                        <div><img decoding="async" alt="KidzoniaCredence"
                                            src="<?php echo base_url(); ?>uploads/2023/04/Admissions_1.jpg" />
                                        </div>
                                      </div>
                                      <div class="edukul-spacer clearfix" data-desktop="0" data-mobi="40"
                                        data-smobi="40"></div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="edukul-content-box clearfix">
                            <div class="vc-custom-col-inner-spacing clearfix vc-col-inner-spacing-80">
                              <div class="wpb_row vc_inner vc_row-fluid d-flex align-items-center">
                                <div class="wpb_column vc_column_container vc_col-sm-6">
                                  <div class="vc_column-inner">
                                    <div class="wpb_wrapper">
                                      <div class="edukul-simple-image no-effect   custom fimg-1724743371" style=""
                                        data-stretch-left=-53px>
                                        <div><img decoding="async" alt="KidzoniaCredence"
                                            src="<?php echo base_url(); ?>uploads/2023/04/Admission_2.jpg" />
                                        </div>
                                      </div>
                                      <div class="edukul-spacer clearfix" data-desktop="0" data-mobi="40"
                                        data-smobi="40"></div>
                                    </div>
                                  </div>
                                </div>
                                <div class="wpb_column vc_column_container vc_col-sm-6">
                                  <div class="vc_column-inner">
                                    <div class="wpb_wrapper">
                                      <div class="edukul-headings clearfix " data-font=55 data-mfont=36 style="">
                                        <h2 class="heading clearfix "
                                          style="color:#122051;line-height:47px;margin-bottom:28px;font-size:55px;">
                                          Obtaining the application form
                                        </h2>
                                      </div>
                                      <div class="edukul-spacer clearfix" data-desktop="30" data-mobi="20"
                                        data-smobi="20"></div>
                                      <div class="wpb_text_column wpb_content_element  explore-text">
                                        <div class="wpb_wrapper">
                                          <p class="text-md-center">The KCIS admission package, available at the school
                                            office, contains all the essential details regarding our admission policies
                                            and the application form. This kit includes crucial information on
                                            eligibility criteria, cost structures, and key instructions for the
                                            application process. The reasonably priced admission package ensures easy
                                            access for interested parents.</p>
                                          <p class="text-md-center">Alternatively, the application form can be
                                            conveniently downloaded from the internet and submitted online. The duly
                                            completed application form should be submitted to the school office on or
                                            before the stipulated date.</p>
                                          <p class="text-md-center">Join Kidzonia Credence International School, the
                                            Best International School in Hyderabad, where every step is a stride towards
                                            a global education that fosters excellence and prepares your child for a
                                            future without boundaries.</p>
                                        </div>
                                      </div>
                                      <div class="edukul-spacer clearfix" data-desktop="57" data-mobi="30"
                                        data-smobi="30"></div>
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

            <div class="vc-custom-col-spacing clearfix vc-col-spacing-30">
              <section
                class="wpb_row vc_row-fluid age vc_custom_1682136618796 vc_row-has-fill no-padding row-content-position-Default">
                <div class="row-inner clearfix">
                  <div class="wpb_column vc_column_container vc_col-sm-12">
                    <div class="vc_column-inner">
                      <div class="wpb_wrapper edukul-container">

                        <div class="edukul-headings clearfix " data-font=55 data-mfont=36 style="">
                          <h2 class="heading clearfix " style="margin-bottom:28px;font-size:55px;">
                            Age Criteria For Admission
                          </h2>
                        </div>
                        <div class="edukul-content-box clearfix">
                          <div class="vc-custom-col-inner-spacing clearfix vc-col-inner-spacing-30">
                            <div class="wpb_row vc_inner vc_row-fluid">
                              <div class="wpb_column vc_column_container vc_col-sm-3">
                                <div class="vc_column-inner">
                                  <div class="wpb_wrapper">
                                    <div class="edukul-content-box clearfix " data-padding="30px"
                                      data-mobipadding="10px 30px 30px" data-margin="" data-mobimargin=""
                                      data-mobiwidth="200">
                                      <div class="inner ctb-560612238"
                                        style="background-position:left top;background-repeat:no-repeat; height:200px;"
                                        data-background="#1c2156" data-translatey="-5">
                                        <div class="edukul-icon-box clearfix icon-top simple" style="">
                                          <div class="wrap-inner" style="position: relative;">
                                            <h3 class="heading  white text-center"
                                              style="font-size:22px;line-height:36px;margin-bottom:13px;">
                                              <span class="text-white">Foundational</span>
                                            </h3>
                                            <div class="desc" style="color:#c1c2d0;font-size:16px;line-height:26px;">
                                              <p class="text-white text-center">Nursery to Class 2<br />
                                                3 to 8 years</p>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="edukul-spacer clearfix" data-desktop="0" data-mobi="20" data-smobi="20">
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="wpb_column vc_column_container vc_col-sm-3">
                                <div class="vc_column-inner">
                                  <div class="wpb_wrapper">
                                    <div class="edukul-content-box clearfix " data-padding="30px"
                                      data-mobipadding="10px 30px 30px" data-margin="" data-mobimargin=""
                                      data-mobiwidth="200">
                                      <div class="inner ctb-496139837"
                                        style="background-position:left top;background-repeat:no-repeat; height:200px;"
                                        data-background="#1c2156" data-translatey="-5">
                                        <div class="edukul-icon-box clearfix icon-top align-left  simple" style="">
                                          <div class="wrap-inner" style="position: relative;">
                                            <h3 class="heading  white text-center"
                                              style="color:#ffffff;font-size:22px;line-height:36px;margin-top:26px;margin-bottom:13px;">
                                              <span>Preparatory
                                                School</span>
                                            </h3>
                                            <div class="desc" style="color:#c1c2d0;font-size:16px;line-height:26px;">
                                              <p class="text-white text-center">Class 3 to 5<br />
                                                8 to 11 years</p>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="edukul-spacer clearfix" data-desktop="0" data-mobi="20" data-smobi="20">
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="wpb_column vc_column_container vc_col-sm-3">
                                <div class="vc_column-inner">
                                  <div class="wpb_wrapper">
                                    <div class="edukul-content-box clearfix " data-padding="30px"
                                      data-mobipadding="10px 30px 30px" data-margin="" data-mobimargin=""
                                      data-mobiwidth="200">
                                      <div class="inner ctb-779509844"
                                        style="background-position:left top;background-repeat:no-repeat; height:200px;"
                                        data-background="#1c2156" data-translatey="-5">
                                        <div class="edukul-icon-box clearfix icon-top align-left  simple" style="">
                                          <div class="wrap-inner" style="position: relative;">
                                            <h3 class="heading  text-white text-center"
                                              style="color:#ffffff;font-size:22px;line-height:36px;margin-top:26px;margin-bottom:13px;">
                                              <span>Middle School</span>
                                            </h3>
                                            <div class="desc" style="color:#c1c2d0;font-size:16px;line-height:26px;">
                                              <p class="text-white text-center">Class 6 to 8<br />
                                                11 to 14 years</p>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="edukul-spacer clearfix" data-desktop="0" data-mobi="20" data-smobi="20">
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="wpb_column vc_column_container vc_col-sm-3">
                                <div class="vc_column-inner">
                                  <div class="wpb_wrapper">
                                    <div class="edukul-content-box clearfix " data-padding="30px"
                                      data-mobipadding="10px 30px 30px" data-margin="" data-mobimargin=""
                                      data-mobiwidth="200">
                                      <div class="inner ctb-1022129380"
                                        style="background-position:left top;background-repeat:no-repeat; height:200px;"
                                        data-background="#1c2156" data-translatey="-5">
                                        <div class="edukul-icon-box clearfix icon-top align-left  simple" style="">
                                          <div class="wrap-inner" style="position: relative;">
                                            <h3 class="heading  text-white text-center"
                                              style="color:#ffffff;font-size:22px;line-height:36px;margin-top:26px;margin-bottom:13px;">
                                              <span>Secondary
                                                School</span>
                                            </h3>
                                            <div class="desc" style="color:#c1c2d0;font-size:16px;line-height:26px;">
                                              <p class="text-white text-center">Class 9 to 12<br />
                                                14 to 18 years</p>
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
                        <div class="edukul-spacer clearfix" data-desktop="30" data-mobi="30" data-smobi="40"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
            </div>
            <div class="vc-custom-col-spacing clearfix vc-col-spacing-30">
              <section
                class="wpb_row vc_row-fluid vc_custom_1677826809873 vc_row-has-fill row-content-position-Default">
                <div class="edukul-container">
                  <div class="row-inner clearfix">
                    <div class="wpb_column vc_column_container vc_col-sm-12">
                      <div class="vc_column-inner">
                        <div class="wpb_wrapper">
                          <div class="wpb_text_column wpb_content_element ">
                            <div class="wpb_wrapper">
                              <h3><strong>A list of documents required:</strong></h3>

                            </div>
                          </div>

                          <div class="edukul-spacer clearfix" data-desktop="30" data-mobi="30" data-smobi="30"></div>
                          <div class="edukul-content-box clearfix">
                            <div class="vc-custom-col-inner-spacing clearfix vc-col-inner-spacing-60">
                              <div class="wpb_row vc_inner vc_row-fluid">
                                <div class="wpb_column vc_column_container vc_col-sm-4">
                                  <div class="vc_column-inner">
                                    <div class="wpb_wrapper">
                                      <div class="wpb_text_column wpb_content_element  doc-text">
                                        <div class="wpb_wrapper">
                                          <ul class="big-font">
                                            <li>Certified copy of the School
                                              Report of the previous
                                              academic year (if
                                              applicable).</li>
                                            <li>Three passport size
                                              photographs, two stamp size
                                              photographs of the child and
                                              one photograph of parents.
                                            </li>
                                            <li>One certified copy of the
                                              Child’s Birth Certificate.
                                            </li>
                                            <li>Original Copy of the T.C.
                                              (if applicable).</li>
                                          </ul>

                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="wpb_column vc_column_container vc_col-sm-4">
                                  <div class="vc_column-inner">
                                    <div class="wpb_wrapper">
                                      <div class="wpb_text_column wpb_content_element  doc-text">
                                        <div class="wpb_wrapper">
                                          <ul class="big-font">
                                            <li>A certified copy of the
                                              Caste Certificate (if the
                                              student belongs to SC / ST /
                                              BC)</li>
                                            <li>SSSM ID</li>
                                            <li>Aadhaar Card</li>
                                            <li>Proof of Residence. (Ration
                                              Card /Voter ID / Aadhaar
                                              Card / Electricity /
                                              Telephone Bill / Passport)
                                              (The above documents should
                                              be in the name of parents)
                                            </li>
                                          </ul>

                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="wpb_column vc_column_container vc_col-sm-4">
                                  <div class="vc_column-inner">
                                    <div class="wpb_wrapper">
                                      <div class="wpb_text_column wpb_content_element  doc-text">
                                        <div class="wpb_wrapper">
                                          <ul class="big-font">
                                            <li>Medical Certificate of the
                                              child. (only for children
                                              with special needs)</li>
                                            <li>Proof of Sibling. (Wherever
                                              applicable)</li>
                                            <li>Vaccination Card (to be duly
                                              stamped by a qualified
                                              pediatrician)</li>
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
                </div>
              </section>
            </div>
            <div class="vc-custom-col-spacing clearfix vc-col-spacing-30">
              <section class="wpb_row vc_row-fluid row-content-position-Default">
                <div class="edukul-container">
                  <div class="row-inner clearfix">
                    <div class="wpb_column vc_column_container vc_col-sm-12">
                      <div class="vc_column-inner">
                        <div class="wpb_wrapper">
                          <div class="edukul-spacer clearfix" data-desktop="30" data-mobi="30" data-smobi="40"></div>
                          <div class="edukul-headings clearfix text-center" data-font=55 data-mfont=36 style="">
                            <h2 class="heading clearfix " style="color:#122051;margin-bottom:28px;font-size:55px;">
                              FAQs
                            </h2>
                          </div>
                          <div class="edukul-content-box clearfix">
                            <div class="vc-custom-col-inner-spacing clearfix vc-col-inner-spacing-30">
                              <div class="wpb_row vc_inner vc_row-fluid">
                                <div class="wpb_column vc_column_container vc_col-sm-6">
                                  <div class="vc_column-inner">
                                    <div class="wpb_wrapper">
                                      <div class="edukul-accordions toggles">
                                        <div class="accordion-item style-2" style="margin-bottom:30px;">
                                          <h3 class="accordion-heading" style="font-size:16px;">
                                            <span class="inner" style="">
                                              What grades are offered?
                                            </span>
                                          </h3>
                                          <div class="accordion-content" style="">
                                            <p>We offer classes from Nursery
                                              to Grade 5.</p>
                                          </div>
                                        </div>
                                        <div class="accordion-item style-2" style="margin-bottom:30px;">
                                          <h3 class="accordion-heading" style="font-size:16px;">
                                            <span class="inner" style="">
                                              Where are KCIS's locations?
                                            </span>
                                          </h3>
                                          <div class="accordion-content" style="">
                                            <p>Our school is currently in
                                              two locations in Hyderabad:
                                              Nallagandla and Ameenpur.
                                            </p>
                                          </div>
                                        </div>
                                        <div class="accordion-item style-2" style="margin-bottom:30px;">
                                          <h3 class="accordion-heading" style="font-size:16px;">
                                            <span class="inner" style="">
                                              How do I apply for
                                              admission?
                                            </span>
                                          </h3>
                                          <div class="accordion-content" style="">
                                            <p>To apply for admission, you
                                              can fill in the above form
                                              or contact the school office
                                              for more information. You
                                              can email <a
                                                href="mailto:pr.kcis@credenceinternational.org">pr.kcis@credenceinternational.org</a>
                                              or call <a href="tel:+919100222967">9100222967</a>
                                            </p>
                                          </div>
                                        </div>
                                        <div class="accordion-item style-2" style="margin-bottom:30px;">
                                          <h3 class="accordion-heading" style="font-size:16px;">
                                            <span class="inner" style="">
                                              What are the age
                                              requirements for Nursery
                                              admission?
                                            </span>
                                          </h3>
                                          <div class="accordion-content" style="">
                                            <p>Children should be at least 3
                                              years old by the start of
                                              the academic year to be
                                              eligible for Nursery
                                              admission.</p>
                                          </div>
                                        </div>
                                        <div class="accordion-item style-2" style="margin-bottom:30px;">
                                          <h3 class="accordion-heading" style="">
                                            <span class="inner" style="">
                                              What is the curriculum
                                              followed?
                                            </span>
                                          </h3>
                                          <div class="accordion-content" style="">
                                            <p>We follow Cambridge&#8217;s
                                              integrated curriculum that
                                              promotes experiential
                                              learning. It includes
                                              academic subjects, sports,
                                              arts, and other
                                              co-curricular activities
                                              along with field trips and
                                              roleplays.</p>
                                          </div>
                                        </div>
                                        <div class="accordion-item style-2" style="margin-bottom:30px;">
                                          <h3 class="accordion-heading" style="">
                                            <span class="inner" style="">
                                              Is transport facility
                                              provided?
                                            </span>
                                          </h3>
                                          <div class="accordion-content" style="">
                                            <p>Yes, we provide safe and
                                              reliable transportation
                                              facility for students within
                                              a 10 km radius of our school
                                              campuses.</p>
                                          </div>
                                        </div>
                                        <div class="accordion-item style-2" style="margin-bottom:30px;">
                                          <h3 class="accordion-heading" style="">
                                            <span class="inner" style="">
                                              What are the school timings?
                                            </span>
                                          </h3>
                                          <div class="accordion-content" style="">
                                            <p>The school timings vary
                                              depending on the grade
                                              level. For nursery &#8211;
                                              8:30 am to 12:30 pm. Kidzo
                                              Junior &amp; Senior &#8211;
                                              8:30am to 1:30pm. Grade 1 to
                                              5 &#8211; 8:30 am to 3:30
                                              pm. On the 1st and 3rd
                                              Saturdays for primary
                                              schoolers &#8211; 8:30 am to
                                              2:30 pm.</p>
                                          </div>
                                        </div>
                                        <div class="accordion-item style-2" style="margin-bottom:30px;">
                                          <h3 class="accordion-heading" style="">
                                            <span class="inner" style="">
                                              Can parents visit Kidzonia
                                              to learn more about the
                                              admission process?
                                            </span>
                                          </h3>
                                          <div class="accordion-content" style="">
                                            <p>Yes, parents are welcome to
                                              visit our school campus and
                                              meet with our admission
                                              counselors to learn more
                                              about the admission process
                                              and other details about our
                                              school.</p>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="wpb_column vc_column_container vc_col-sm-6">
                                  <div class="vc_column-inner">
                                    <div class="wpb_wrapper">
                                      <div class="edukul-accordions toggles">
                                        <div class="accordion-item style-2" style="margin-bottom:30px;">
                                          <h3 class="accordion-heading" style="font-size:16px;">
                                            <span class="inner" style="">
                                              What are the class sizes?
                                            </span>
                                          </h3>
                                          <div class="accordion-content" style="">
                                            <p>Our class sizes are designed
                                              to be small, allowing for
                                              personalized attention and a
                                              conducive learning
                                              environment. For nursery
                                              kids, it&#8217;s 2:20 and
                                              from Junior KG to 5th grade,
                                              it&#8217;s 1:25.</p>
                                          </div>
                                        </div>
                                        <div class="accordion-item style-2" style="margin-bottom:30px;">
                                          <h3 class="accordion-heading" style="font-size:16px;">
                                            <span class="inner" style="">
                                              Does KCIS offer any
                                              after-school programs?
                                            </span>
                                          </h3>
                                          <div class="accordion-content" style="">
                                            <p>Yes, we offer after-school
                                              activities in sports like
                                              Cricket, Taekwondo, Skating,
                                              Football, etc.</p>
                                          </div>
                                        </div>
                                        <div class="accordion-item style-2" style="margin-bottom:30px;">
                                          <h3 class="accordion-heading" style="font-size:16px;">
                                            <span class="inner" style="">
                                              How can I get in touch with
                                              KCIS for further inquiries?
                                            </span>
                                          </h3>
                                          <div class="accordion-content" style="">
                                            <p>You can contact us through
                                              our website forms, email, or
                                              phone to inquire about
                                              admission procedures, fees,
                                              or any other questions you
                                              may have. Email: <a
                                                href="mailto:pr.kcis@credenceinternational.org">pr.kcis@credenceinternational.org</a>
                                              | Phone: <a href="tel:+919100222967"> 9100222967 </a></p>
                                          </div>
                                        </div>
                                        <div class="accordion-item style-2" style="margin-bottom:30px;">
                                          <h3 class="accordion-heading" style="font-size:16px;">
                                            <span class="inner" style="">
                                              Does KCIS have a library?
                                            </span>
                                          </h3>
                                          <div class="accordion-content" style="">
                                            <p>Yes, we have a well-equipped
                                              library that provides
                                              students with access to a
                                              wide range of books and
                                              learning materials.</p>
                                          </div>
                                        </div>
                                        <div class="accordion-item style-2" style="margin-bottom:30px;">
                                          <h3 class="accordion-heading" style="">
                                            <span class="inner" style="">
                                              What are the assessments and
                                              examinations like at
                                              Kidzonia?
                                            </span>
                                          </h3>
                                          <div class="accordion-content" style="">
                                            <p>We have a balanced assessment
                                              system that includes both
                                              formative and summative
                                              assessments, ensuring a
                                              holistic evaluation of a
                                              student&#8217;s progress.
                                            </p>
                                          </div>
                                        </div>
                                        <div class="accordion-item style-2" style="margin-bottom:30px;">
                                          <h3 class="accordion-heading" style="">
                                            <span class="inner" style="">
                                              What are the co-curricular
                                              activities offered?
                                            </span>
                                          </h3>
                                          <div class="accordion-content" style="">
                                            <p>We offer various
                                              co-curricular activities
                                              such as Taekwondo, Skating,
                                              Music, Classical and
                                              Freestyle Dance, etc to
                                              enhance student&#8217;s
                                              skills and interests beyond
                                              the classroom. There are
                                              sports activities like
                                              Cricket, Football,
                                              Basketball, Throwball,
                                              Kabadi, etc.</p>
                                          </div>
                                        </div>
                                        <div class="accordion-item style-2" style="margin-bottom:30px;">
                                          <h3 class="accordion-heading" style="">
                                            <span class="inner" style="">
                                              Does KCIS have a code of
                                              conduct or discipline
                                              policy?
                                            </span>
                                          </h3>
                                          <div class="accordion-content" style="">
                                            <p>Yes, we have a code of
                                              conduct and discipline
                                              policy that outlines
                                              expected behavior, rules,
                                              and consequences to maintain
                                              a safe and respectful
                                              learning environment. We
                                              follow a zero-tolerance
                                              policy for any minor
                                              instances of misconduct or
                                              rule-breaking from staff.
                                            </p>
                                          </div>
                                        </div>
                                        <div class="accordion-item style-2" style="margin-bottom:5px;">
                                          <h3 class="accordion-heading" style="">
                                            <span class="inner" style="">
                                              Can parents visit the school
                                              during school hours to meet
                                              with teachers or staff?
                                            </span>
                                          </h3>
                                          <div class="accordion-content" style="">
                                            <p>Parents are welcome to
                                              schedule appointments to
                                              meet with teachers or staff
                                              during designated visiting
                                              hours or by prior
                                              arrangement with the school
                                              office.</p>
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
                  </div>
                </div>
              </section>
            </div>
            <div class="vc-custom-col-spacing clearfix vc-col-spacing-30">
              <section class="wpb_row vc_row-fluid row-content-position-Default">
                <div class="edukul-container">
                  <div class="row-inner clearfix">
                    <div class="wpb_column vc_column_container vc_col-sm-12">
                      <div class="vc_column-inner">
                        <div class="wpb_wrapper">
                          <div class="edukul-spacer clearfix" data-desktop="30" data-mobi="30" data-smobi="60"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
            </div>
            <div class="vc-custom-col-spacing clearfix vc-col-spacing-30">
              <section class="wpb_row vc_row-fluid row-content-position-Default">
                <div class="edukul-container">
                  <div class="row-inner clearfix">
                    <div class="wpb_column vc_column_container vc_col-sm-12">
                      <div class="vc_column-inner">
                        <div class="wpb_wrapper">
                          <div class="wpb_text_column wpb_content_element ">
                            <div class="wpb_wrapper">

                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
            </div>
            <div class="vc-custom-col-spacing clearfix vc-col-spacing-30">
              <section
                class="wpb_row vc_row-fluid vc_custom_1677943833177 vc_row-has-fill row-content-position-Default">
                <div class="edukul-container">
                  <div class="row-inner clearfix">
                    <div class="wpb_column vc_column_container vc_col-sm-12">
                      <div class="vc_column-inner">
                        <div class="wpb_wrapper">
                          <div class="wpb_text_column wpb_content_element  mf">
                            <div class="wpb_wrapper">
                              <h3 class="mf" style="text-align: center;">Make KCIS as your
                                Child&#8217;s Learning Partner. For admission, enquiries
                                click below.</h3>

                            </div>
                          </div>

                          <div class="edukul-spacer clearfix" data-desktop="30" data-mobi="30" data-smobi="30"></div>
                          <div class="wpb_raw_code wpb_content_element wpb_raw_html">
                            <div class="wpb_wrapper">
                              <center><a href="<?php echo base_url(); ?>admission-enquiry"
                                  class="edukul-button btn-1584004131 medium no_icon custom custom outline solid custom"
                                  style="border-width:1px;" data-background="#fbbc00" data-text="#122051"
                                  data-border="#fbbc00" data-text-hover="#fbbc00" data-background-hover="#122051"
                                  data-border-hover="#122051">
                                  <span style="">Enquire Now </span>
                                </a></center>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
            </div>
          </section>
        </article>

      </div>
    </div><!-- /#site-content -->

  </div><!-- /#content-wrap -->
</div><!-- /.main-content -->

<script>
    // Initialize intl-tel-input when page loads
    jQuery(document).ready(function($) {
        if (typeof initializeIntlTelInput === 'function') {
            initializeIntlTelInput();
        }
    });
</script>