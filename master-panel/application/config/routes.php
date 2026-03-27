<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$r_admin                                            = 'admin';
$route['default_controller']                        = 'login';
$route['404_override']                              = '';
$route['translate_uri_dashes']                      = FALSE;
$route['system-password']                           = 'admin/system_password';              

// CMS
$route[$r_admin . '/seo-content']                      = 'admin/seo_content';
$route[$r_admin . '/seo-content/add']                  = 'admin/seo_content_form/add';
$route[$r_admin . '/seo-content/edit/(:num)']          = 'admin/seo_content_form/edit/$1';
$route[$r_admin . '/seo-content/add_post']             = 'admin/seo_content/add_post';
$route[$r_admin . '/seo-content/edit_post/(:num)']     = 'admin/seo_content/edit_post/$1';
$route[$r_admin . '/seo-content/delete/(:num)']        = 'admin/seo_content/delete/$1';

$route['Admin/seo-content']                            = 'admin/seo_content';
$route['Admin/seo-content/add']                        = 'admin/seo_content_form/add';
$route['Admin/seo-content/edit/(:num)']                = 'admin/seo_content_form/edit/$1';
$route['Admin/seo-content/add_post']                   = 'admin/seo_content/add_post';
$route['Admin/seo-content/edit_post/(:num)']           = 'admin/seo_content/edit_post/$1';
$route['Admin/seo-content/delete/(:num)']              = 'admin/seo_content/delete/$1';

$route[$r_admin . '/banner']                       = 'admin/banner';
$route[$r_admin . '/banner/add']                   = 'admin/banner_form/add';
$route[$r_admin . '/banner/edit/(:num)']           = 'admin/banner_form/edit/$1';

$route[$r_admin . '/home-about']                    = 'admin/home_about';

$route[$r_admin . '/about-us']                       = 'admin/about_us';
$route[$r_admin . '/about-us/add']                   = 'admin/about_us_form/add';
$route[$r_admin . '/about-us/edit/(:num)']           = 'admin/about_us_form/edit/$1';


$route[$r_admin . '/our-team']                       = 'admin/our_team';
$route[$r_admin . '/our-team/add']                   = 'admin/our_team_form/add';
$route[$r_admin . '/our-team/edit/(:num)']           = 'admin/our_team_form/edit/$1';

$route[$r_admin . '/learning-space']                = 'admin/learning_space';
$route[$r_admin . '/learning-space/add']            = 'admin/learning_space_form/add';
$route[$r_admin . '/learning-space/edit/(:num)']    = 'admin/learning_space_form/edit/$1';

$route[$r_admin . '/about-curriculum']              = 'admin/about_curriculum';

$route[$r_admin . '/curriculum-slider']             = 'admin/curriculum_slider';
$route[$r_admin . '/curriculum-slider/add']         = 'admin/curriculum_slider_form/add';
$route[$r_admin . '/curriculum-slider/edit/(:num)'] = 'admin/curriculum_slider_form/edit/$1';

$route[$r_admin . '/programmes-content']                = 'admin/programmes_content';
$route[$r_admin . '/programmes-content/add']            = 'admin/programmes_content_form/add';
$route[$r_admin . '/programmes-content/edit/(:num)']    = 'admin/programmes_content_form/edit/$1';

$route[$r_admin . '/programmes-icon']                = 'admin/programmes_icon';
$route[$r_admin . '/programmes-icon/add']            = 'admin/programmes_icon_form/add';
$route[$r_admin . '/programmes-icon/edit/(:num)']    = 'admin/programmes_icon_form/edit/$1';

$route[$r_admin . '/kidzonia-day']                = 'admin/kidzonia_day';
$route[$r_admin . '/kidzonia-day/add']            = 'admin/kidzonia_day_form/add';
$route[$r_admin . '/kidzonia-day/edit/(:num)']    = 'admin/kidzonia_day_form/edit/$1';

$route[$r_admin . '/kidzonia-commits']                = 'admin/kidzonia_commits';
$route[$r_admin . '/kidzonia-commits/add']            = 'admin/kidzonia_commits_form/add';
$route[$r_admin . '/kidzonia-commits/edit/(:num)']    = 'admin/kidzonia_commits_form/edit/$1';

$route[$r_admin . '/ixplore']                = 'admin/ixplore';
$route[$r_admin . '/ixplore/add']            = 'admin/ixplore_form/add';
$route[$r_admin . '/ixplore/edit/(:num)']    = 'admin/ixplore_form/edit/$1';

$route[$r_admin . '/whizkids']                = 'admin/whizkids';
$route[$r_admin . '/whizkids/add']            = 'admin/whizkids_form/add';
$route[$r_admin . '/whizkids/edit/(:num)']    = 'admin/whizkids_form/edit/$1';

$route[$r_admin . '/admissions']                = 'admin/admissions';
$route[$r_admin . '/admissions/add']            = 'admin/admissions_form/add';
$route[$r_admin . '/admissions/edit/(:num)']    = 'admin/admissions_form/edit/$1';

$route[$r_admin . '/our-teachers']                = 'admin/our_teachers';
$route[$r_admin . '/our-teachers/add']            = 'admin/our_teachers_form/add';
$route[$r_admin . '/our-teachers/edit/(:num)']    = 'admin/our_teachers_form/edit/$1';

// CMS Ended

$route[$r_admin . '/pop-up']                       = 'admin/sliders';
$route[$r_admin . '/pop-up/add']                   = 'admin/sliders_form/add';
$route[$r_admin . '/pop-up/edit/(:num)']           = 'admin/sliders_form/edit/$1';

$route[$r_admin . '/achievements']                       = 'admin/achievements';
$route[$r_admin . '/achievements/add']                   = 'admin/achievements_form/add';
$route[$r_admin . '/achievements/edit/(:num)']           = 'admin/achievements_form/edit/$1';

$route[$r_admin . '/print-media']                       = 'admin/print_media';
$route[$r_admin . '/print-media/add']                   = 'admin/print_media_form/add';
$route[$r_admin . '/print-media/edit/(:num)']           = 'admin/print_media_form/edit/$1';

$route[$r_admin . '/parents-testimonials']                       = 'admin/parents_testimonials';
$route[$r_admin . '/parents-testimonials/add']                   = 'admin/parents_testimonials_form/add';
$route[$r_admin . '/parents-testimonials/edit/(:num)']           = 'admin/parents_testimonials_form/edit/$1';

$route[$r_admin . '/brochure-enquiry']              = 'admin/brochure_enquiry';

$route[$r_admin . '/career-enquiry']                = 'admin/career_enquiry';

$route[$r_admin . '/registered-event']              = 'admin/registered_event';

$route[$r_admin . '/callback-enquiry']              = 'admin/callback_enquiry';

$route[$r_admin . '/admission-enquiry']             = 'admin/admission_enquiry';
$route[$r_admin . '/summer-camp-enquiry']             = 'admin/summer_camp_enquiry';
$route[$r_admin . '/youtube-enquiry']             = 'admin/youtube_enquiry';

$route[$r_admin . '/careers']                       = 'admin/careers';
$route[$r_admin . '/careers/add']                   = 'admin/careers_form/add';
$route[$r_admin . '/careers/edit/(:num)']           = 'admin/careers_form/edit/$1';

$route[$r_admin . '/awards-and-recognitions']                         = 'admin/awards_and_recognitions';
$route[$r_admin . '/awards-and-recognitions/add']                     = 'admin/awards_and_recognitions_form/add';
$route[$r_admin . '/awards-and-recognitions/edit/(:num)']             = 'admin/awards_and_recognitions_form/edit/$1';

$route[$r_admin . '/product-category']              = 'admin/category';
$route[$r_admin . '/product-category/add']          = 'admin/category_form/add';
$route[$r_admin . '/product-category/edit/(:num)']  = 'admin/category_form/edit/$1';

$route[$r_admin . '/blogs-image']                         = 'admin/blogs_image';
$route[$r_admin . '/blogs-image/add']                     = 'admin/blogs_image_form/add';

$route[$r_admin . '/blogs']                         = 'admin/blogs';
$route[$r_admin . '/blogs/add']                     = 'admin/blogs_form/add';
$route[$r_admin . '/blogs/edit/(:num)']             = 'admin/blogs_form/edit/$1';

$route[$r_admin . '/digital_news']                         = 'admin/digital_news';
$route[$r_admin . '/digital_news/add']                     = 'admin/digital_news_form/add';
$route[$r_admin . '/digital_news/edit/(:num)']             = 'admin/digital_news_form/edit/$1';

$route[$r_admin . '/event']                         = 'admin/event';
$route[$r_admin . '/event/add']                     = 'admin/event_form/add';
$route[$r_admin . '/event/edit/(:num)']             = 'admin/event_form/edit/$1';

$route[$r_admin . '/gallery']                       = 'admin/gallery';
$route[$r_admin . '/gallery/add']                   = 'admin/gallery_form/add';
$route[$r_admin . '/gallery/edit/(:num)']           = 'admin/gallery_form/edit/$1';

$route[$r_admin . '/gallery-image']                 = 'admin/branch_gallery_image';
$route[$r_admin . '/gallery-image/add']             = 'admin/branch_gallery_image_form/add';
$route[$r_admin . '/gallery-image/edit/(:any)']     = 'admin/branch_gallery_image_form/edit/$1';

$route[$r_admin . '/branches']                      = 'admin/branches';
$route[$r_admin . '/branches/add']                  = 'admin/branches_form/add';
$route[$r_admin . '/branches/edit/(:num)']          = 'admin/branches_form/edit/$1';

$route[$r_admin . '/seo-curriculums']                = 'admin/seo_curriculums';
$route[$r_admin . '/seo-curriculums/add']            = 'admin/seo_curriculums_form/add';
$route[$r_admin . '/seo-curriculums/edit/(:num)']    = 'admin/seo_curriculums_form/edit/$1';
$route[$r_admin . '/seo-curriculums/add_post']       = 'admin/seo_curriculums/add_post';
$route[$r_admin . '/seo-curriculums/edit_post/(:num)'] = 'admin/seo_curriculums/edit_post/$1';
$route[$r_admin . '/seo-curriculums/delete/(:num)']  = 'admin/seo_curriculums/delete/$1';
$route[$r_admin . '/get_seo_curriculums']            = 'admin/get_seo_curriculums';


$route[$r_admin . '/products']                      = 'admin/products';
$route[$r_admin . '/products/add']                  = 'admin/products_form/add';
$route[$r_admin . '/products/edit/(:num)']          = 'admin/products_form/edit/$1';

$route[$r_admin . '/contact-enquiry']               = 'admin/contact_enquiry';

// Sitemap Management
$route[$r_admin . '/sitemap-management']                 = 'admin/sitemap_management';
$route[$r_admin . '/generate_sitemap']                   = 'admin/generate_sitemap';