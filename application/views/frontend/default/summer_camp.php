<style>
    .owl-prev {
        position: relative;
        right: 38px;
        order: 1; /* Display the left button first */
    }

    .owl-next {
        position: relative;
        left: 38px;
        order: 2; /* Display the right button second */
    }
    
</style>
<div class="btContentWrap btClear m-admission">
   <div class="btContentHolder">
      <div class="btContent">
         <div class="bt_bb_wrapper">
  
           <section
               id="bt_bb_section656da18c45764"
               class="admission-main bt_bb_section bt_bb_layout_boxed_1400 bt_bb_vertical_align_top bt_bb_bottom_section_coverage_image bt_bb_section_with_bottom_coverage_image bt_bb_negative_margin_none bt_bb_top_spacing_large bt_bb_bottom_spacing_large"
               data-bt-override-class='{"bt_bb_top_spacing_":{"current_class":"bt_bb_top_spacing_medium","xxl":"medium","xl":"medium"},"bt_bb_bottom_spacing_":{"current_class":"bt_bb_bottom_spacing_none","xxl":"none","xl":"none","md":"medium","sm":"medium","xs":"medium"}}'
               >
               <div class="bt_bb_port">
                  <div class="bt_bb_cell">
                     <div class="bt_bb_cell_inner">
                        <div
                           class="bt_bb_row_wrapper bt_bb_row_push_left bt_bb_content_wide bt_bb_row_width_boxed_1200"
                           >
                           <div
                              class="bt_bb_row bt_bb_negative_margin_"
                              data-bt-override-class="{}"
                              >
                              <div
                                 class="bt_bb_column col-xxl-6 col-xl-6 col-xs-12 col-sm-12 col-md-12 col-lg-6 bt_bb_vertical_align_middle  bt_bb_align_right bt_bb_padding_30 bt_bb_animation_fade_in animate bt_bb_shape_inherit"
                                 data-width="6"
                                 data-bt-override-class='{"bt_bb_align_":{"current_class":"bt_bb_align_right","xxl":"right","xl":"right","md":"left","sm":"left","xs":"left"},"bt_bb_padding_":{"current_class":"bt_bb_padding_30","xxl":"30","xl":"30","sm":"normal","xs":"normal"}}'
                                 >
                                 <div class="bt_bb_column_content">
                                    <div id="owl-carousel-summer" class="bt_bb_column_content_inner owl-carousel owl-carousel-summer">
                                       <img src="<?php echo base_url();?>assets/images/summer-camp-1.jpeg" class="attachment-full size-full" />
                                       <img src="<?php echo base_url();?>assets/images/summer-camp-2.jpeg" class="attachment-full size-full" />
                                    </div>
                                 </div>
                              </div>
                              <div
                                 class="bt_bb_column col-xxl-6 col-xl-6 col-xs-12 col-sm-12 col-md-12 col-lg-6 bt_bb_vertical_align_middle bt_bb_align_left bt_bb_padding_10 bt_bb_animation_fade_in animate bt_bb_shape_inherit"
                                 data-width="6"
                                 data-bt-override-class='{"bt_bb_align_":{"current_class":"bt_bb_align_left","xxl":"left","xl":"left"},"bt_bb_padding_":{"current_class":"bt_bb_padding_10","xxl":"10","xl":"10","sm":"normal","xs":"normal"}}'
                                 >
                                 <div class="bt_bb_column_content">
                                    <div class="bt_bb_column_content_inner">
                                       <div class="wpforms-container  col-md-12 h-enquiry">
                                          <h3>Preschool Summer Camp Enquiry Form Academic Year 2024-25</h3>
                                          <form action="<?php echo base_url();?>ajax_summer_camp_enquiry" class="add-ajax-redirect-image-form mt-10" onsubmit="return checkForm(this);">
                                            <div class="row">  
                                               <div class="col-md-12">
                                                  <div class="form-group mb-2">
                                                     <label>Students Name<i class="text-dander">*</i></label>
                                                     <input type="text" class="form-control" name="child_name" placeholder="Child Name" required>
                                                     <span class="invalid-feedback"></span>
                                                  </div>
                                               </div>         
                                			
                                               <div class="col-md-12">
                                                  <div class="form-group mb-2">
                                                     <label>Parent Name<i class="text-dander">*</i></label>
                                                     <input type="text" class="form-control" name="parent_name" placeholder="Parent Name" required>
                                                     <span class="invalid-feedback"></span>
                                                  </div>
                                               </div>  
                                           
                                               <div class="col-md-12">
                                                  <div class="form-group mb-2">
                                                     <label>Phone<i class="text-dander">*</i></label>
                                                     <input type="tel" minlength="10" maxlength="10" class="signup-form-control" oninput="sanitizeInput(this)" onfocus="openDialer(this)" class="form-control" name="phone" placeholder="Phone" required>
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
                                                 <select class="form-control" name="location" required="">
                                                    <option value="">Select Location</option>
                                                    <option value="Serilingampally">Serilingampally</option>
                                                    <option value="Nallagandla">Nallagandla</option>
                                                    <option value="Nallagandla - 2">Nallagandla - 2</option>
                                                    <option value="Surksha Enclave Ameenpur">Surksha Enclave Ameenpur</option>
                                                    <option value="KPHB, Kukatpally ">KPHB, Kukatpally </option>
                                                 </select>
                                                 <span class="invalid-feedback"></span>
                                                </div>
                                               </div>  
                                              
                                				<div class="col-md-12">
                                                 <div class="form-group mb-2">
                                                 <label>How did you come to know about us ?<i class="text-dander">*</i></label>
                                                 <select class="form-control" name="know_about_us"  required>
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
                                             
                                               <div class="col-md-12 mt-2">
                                                  <div class="wpforms-submit-container pt-0">
                                                   <button type="submit" class="btn btn-enquiry wpforms-submit btn_verify" name="btn_verify">
                                                   Submit</button>
                                                </div>
                                               </div>
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
                <img decoding="async" src="<?php echo base_url();?>uploads/2022/04/bottom_white_wave_01.png" alt="bt_bb_section_bottom_section_coverage_image">
              </div>
            </section>
            
         </div>
      </div>
      <!-- /boldthemes_content -->
   </div>
   <!-- /contentHolder -->
</div>
<!-- /contentWrap -->
<script type="text/javascript" src="<?php echo base_url();?>assets/themes/bambino/bold-page-builder/content_elements/bt_bb_accordion/bt_bb_accordionaec2.js?ver=6.4.1" id="bt_bb_accordion-js"></script>