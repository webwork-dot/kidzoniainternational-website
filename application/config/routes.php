<?php defined('BASEPATH') OR exit('No direct script access allowed');

$route['404_override']                          = 'home/page_not_found';
$route['not-found']                             = 'home/not_found';
$route['default_controller']                    = 'home/index';

// Invalid or old event URLs redirect to custom not-found page
$route['event/tete-a-tete-parent-teacher-meeting/34'] = 'home/not_found';
$route['event/first-day-of-school/33'] = 'home/not_found';
$route['event/emoticon-hub/35'] = 'home/not_found';
$route['event/van-mahotsav/36'] = 'home/not_found';
$route['event/guru-purnima/37'] = 'home/not_found';
$route['event/back-to-school/32'] = 'home/not_found';
$route['event/sree-rama-navami/29'] = 'home/not_found';
$route['event/mother-child-fitness-challenge/31'] = 'home/not_found';
$route['event/good-friday/30'] = 'home/not_found';
$route['event/eid-mubarak/28'] = 'home/not_found';
$route['event/happy-ugadi/27'] = 'home/not_found';
$route['event/happy-holi/26'] = 'home/not_found';
$route['event/children-s-day/20'] = 'home/not_found';
$route['event/new-year-2025/22'] = 'home/not_found';
$route['event/happy-maha-shivaratri/25'] = 'home/not_found';

$route['home-2']                                = 'home/index2';

$route['about-us']                              = 'home/about_us';
$route['our-learning-spaces-amenities']         = 'home/our_learning_spaces_amenities';
$route['awards-recognitions']                   = 'home/awards_recognitions';
$route['our-curriculum']                        = 'home/our_curriculum';
$route['our-programmes']                        = 'home/our_programmes';
$route['a-day-at-kidzonia']                     = 'home/a_day_at_kidzonia';
$route['kidzonia-commits']                      = 'home/kidzonia_commits';
$route['ixplore']                               = 'home/ixplore';
$route['whizkids']                              = 'home/whizkids';
$route['privacy-policy']                        = 'home/privacy_policy';

$route['digital-news']                          = 'home/digital_news';
 
$route['summer-camp']                           = 'home/summer_camp';
$route['admission-enquiry']                            = 'home/admissions';
$route['our-teachers']                          = 'home/our_teachers';
$route['print-media']                           = 'home/newsroom';
$route['achievements']                          = 'home/achievements';
$route['kidzonia-gallery']                      = 'home/kidzonia_gallery';
$route['explore-centers/hyderabad/tellapur']                            = 'home/tellapur';
$route['explore-centers/hyderabad/lingampally']                            = 'home/lingampally';
$route['explore-centers/hyderabad/ramachandrapuram']                            = 'home/ramachandrapuram';
$route['explore-centers/hyderabad/chanda-nagar']                            = 'home/chanda_nagar';
$route['explore-centers/hyderabad/pragathi-nagar']                            = 'home/pragathi_nagar';
$route['explore-centers/hyderabad/(:any)']                 = 'home/gallery_details/$1';

// New preschool-in URL routes
$route['preschool-in-serilingampally-hyderabad']            = 'home/gallery_details/serilingampally';
$route['preschool-in-nallagandla-hyderabad']                = 'home/gallery_details/nallagandla';
$route['preschool-in-nallagandla']                          = 'home/gallery_details/nallagandla';
$route['preschool-in-nallagandla-navodaya-hyderabad']        = 'home/gallery_details/nallagandla-navodaya';
$route['preschool-in-suraksha-enclave-ameenpur-hyderabad']  = 'home/gallery_details/suraksha-enclave-ameenpur';
$route['preschool-in-kphb-kukatpally-hyderabad']            = 'home/gallery_details/kphb-kukatpally';
$route['preschool-in-tellapur-hyderabad']                    = 'home/tellapur';
$route['preschool-in-lingampally-hyderabad']                = 'home/lingampally';
$route['preschool-in-ramachandrapuram-hyderabad']           = 'home/ramachandrapuram';
$route['preschool-in-chanda-nagar-hyderabad']               = 'home/chanda_nagar';
$route['preschool-in-pragathi-nagar-hyderabad']             = 'home/pragathi_nagar';
$route['preschool-in-hyderabad']                             = 'home/hyderabad';

$route['blogs']                                 = 'home/blogs';
$route['blog-details/(:any)']            = 'home/blog_details/$1';
$route['event/(:any)/(:num)']                   = 'home/event_details/$1/$2';
$route['explore-centers/mumbai']                = 'home/explore_centers/mumbai';
$route['explore-centers/hyderabad']             = 'home/explore_centers/hyderabad';
$route['explore-centers/pune']                  = 'home/explore_centers/pune';
$route['explore-centers/(:any)/(:any)']         = 'home/explore_centers_branches/$1/$2';

// $route['our-team/shahid-sheikh']             = 'home/our_team_shahid';
// $route['our-team/nilofer-shaikh']            = 'home/our_team_nilofer';
// $route['our-team/abhishek-doshi']            = 'home/our_team_abhishek';
// $route['our-team/sudhir-kukreja']            = 'home/our_team_sudhir';
// $route['our-team/rajeev-khotari']            = 'home/our_team_rajeev';

$route['our-team/(:any)']            = 'home/our_team/$1';



$route['contact-us']                            = 'home/contact_us';
$route['career']                                = 'home/career';
$route['sales-executives']                      = 'home/sales_executives';

$route['serilingampally-gallery']               = 'home/serilingampally_gallery';
$route['nallagandla-gallery']                   = 'home/nallagandla_gallery';
$route['navodaya-nallagandla-gallery']          = 'home/navodaya_nallagandla_gallery';
$route['ameenpur-gallery']                      = 'home/ameenpur_gallery';

$route['thank-you']                             = 'home/thank_you';
$route['download_brochure_url']                 = 'home/download_brochure_url';
$route['check_admission_enquiry']               = 'home/check_admission_enquiry';
$route['ajax_admission_otp_enquiry']            = 'home/ajax_admission_otp_enquiry';
$route['ajax_callback_otp_enquiry']             = 'home/ajax_callback_otp_enquiry';
$route['ajax_call_back_enquiry']                = 'home/ajax_call_back_enquiry';
$route['ajax_youtube_enquiry']                  = 'home/ajax_youtube_enquiry';
$route['ajax_download_brochure_enquiry']        = 'home/ajax_download_brochure_enquiry';
$route['ajax_register_event']                   = 'home/ajax_register_event';
$route['ajax_admission_enquiry']                = 'home/ajax_admission_enquiry';
$route['ajax_summer_camp_enquiry']              = 'home/ajax_summer_camp_enquiry';
$route['ajax_submit_career']                    = 'home/ajax_submit_career';
$route['ajax_contact_enquiry']                  = 'home/ajax_contact_enquiry';

$route['sitemap']                            = 'home/sitemap';

// Test endpoints for messaging
$route['test_email'] = 'home/test_email';
$route['test_sms'] = 'home/test_sms';
$route['test_whatsapp'] = 'home/test_whatsapp';




$route['translate_uri_dashes']                  = FALSE;