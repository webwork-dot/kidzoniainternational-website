<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        /*cache control*/
        date_default_timezone_set('Asia/Kolkata');
    }

    function paginate($url, $total_rows)
    {
        //initialize pagination
        $page = $this->security->xss_clean($this->input->get('page'));
        $per_page = $this->input->get('show', true);
        if (empty($page)) {
            $page = 0;
        }

        if ($page != 0) {
            $page = $page - 1;
        }

        if (empty($per_page)) {
            $per_page = 15;
        }
        $config['num_links'] = 4;
        $config['base_url'] = $url;
        $config['total_rows'] = $total_rows;
        $config['per_page'] = $per_page;
        $config['reuse_query_string'] = true;
        $this->pagination->initialize($config);
        return array('per_page' => $per_page, 'offset' => $page * $per_page);
    }

    public function page_not_found()
    {
        redirect(base_url());
    }

    public function index()
    {
        $page_data['about_us']           = $this->crud_model->get_home_about_us();
        $page_data['blogs']             = $this->crud_model->get_recent_blogs_for_home()->result_array();
        $page_data['pop_up']            = $this->crud_model->get_pop_up()->row_array();
        $page_data['awards']            = $this->common_model->selectByidsINWhere('', 'awards_and_recognitions', '4', '0');
        $page_data['parents']           = $this->common_model->selectByidsINWhere('', 'parents_testimonials', '3', '0');
        //$page_data['gallery']           = $this->crud_model->get_gallery();
        $page_data['video'] = $this->crud_model->get_landing_page_video()->result_array();
        $page_data['gallery']            = $this->crud_model->get_home_kidzonia_gallery();
        $page_data['events']            = $this->common_model->selectByidsINWhere('', 'events', '8', '0');
        $page_data['page_name']         = "home";
        $page_data['page_title']        = "International Preschool in Hyderabad | Nalagandla, Serilingampally, Ameenpur, Pragathi Nagar, Chandanagar, - Kidzonia International School";
        $page_data['meta_description']  = "Explore Kidzonia International Preschool in Hyderabad. A premier nursery with a nurturing environment and innovative curriculum, offering an exceptional playschool experience.";
        $page_data['meta_keyword']      = "international preschool in hyderabad, international preschool in nalagandla, international preschool in serilingampally, international preschool in ameenpur, international preschool in pragathinagar, international preschool in chandanagar, kidzonia preschool, kidzonia international school";
        $page_data['canonical_url']     = 'https://www.kidzoniainternational.in/';
        $page_data['seo'] = array(
            "seo_name" => "Kidzonia International",
            "seo_url" => "https://www.kidzoniainternational.in/",
            "seo_telephone" => "+91 9100 25 6256",
            "seo_same_as1" => "https://www.facebook.com/KidzoniaPreschoolHyderabad?mibextid=ZbWKwL",
            "seo_same_as2" => "https://www.instagram.com/kidzonia_hyderabad/?igshid=MzRlODBiNWFlZA%3D%3D",
            "seo_same_as3" => "https://www.youtube.com/@KIDZONIAINTERNATIONALPRESCHOOL",
            "seo_same_as4" => "https://www.linkedin.com/in/kidzonia-hyderabad-87451428a",
        );
        $this->load->view('frontend/default/index', $page_data);
    }

    public function index2()
    {
        $page_data['blogs']             = $this->crud_model->get_recent_blogs_for_home()->result_array();
        $page_data['pop_up']            = $this->crud_model->get_pop_up()->row_array();
        $page_data['awards']            = $this->common_model->selectByidsINWhere('', 'awards_and_recognitions', '4', '0');
        $page_data['parents']           = $this->common_model->selectByidsINWhere('', 'parents_testimonials', '3', '0');
        $page_data['events']            = $this->common_model->selectByidsINWhere('', 'events', '8', '0');
        $page_data['gallery']           = $this->crud_model->get_gallery();
        $page_data['page_name']         = "home2";
        $page_data['page_title']        = "International preschool, Daycare and Playschool Near me | Kidzonia";
        $page_data['meta_description']  = "";
        $page_data['meta_keyword']      = "";
        $this->load->view('frontend/default/index', $page_data);
    }

    public function about_us()
    {
        $page_data['about_us']           = $this->crud_model->get_about_us();
        $page_data['team']           = $this->crud_model->get_our_team();
        $page_data['page_name']         = "about_us";
        $page_data['page_title']        = "Best Preschool Near Me | Best Playschool & Nursery School Near Me - Kidzonia International";
        $page_data['meta_description']  = "Kidzonia International Preschool, the epitome of excellence in early education. As a top-tier Nursery School and the Best Playschool, we prioritize holistic development, providing a nurturing environment for your child's growth and learning.";
        $page_data['meta_keyword']      = "best playschool near me, nursery school near me, best preschool near me";
        $page_data['canonical_url']     = "https://www.kidzoniainternational.in/about-us";
        $this->load->view('frontend/default/index', $page_data);
    }

    public function our_team($param1 = '')
    {
        $data = $this->crud_model->get_team_details_by_id($param1)->row_array();
        $page_data['data']         = $data;
        $page_data['page_name']         = "our_team";
        $page_data['page_title']        = "International preschool, Daycare and Playschool Near me | Kidzonia";
        $page_data['meta_description']  = "";
        $page_data['meta_keyword']      = "";
        $this->load->view('frontend/default/index', $page_data);
    }

    public function our_learning_spaces_amenities()
    {
        $page_data['page_name']         = "our_learning_spaces_amenities";
        $page_data['spaces']           = $this->crud_model->get_learning_spaces();
        $page_data['page_title']        = "Best Montessori School in Hyderabad Nallagandla Near Me";
        $page_data['meta_description']  = "Join the Best Montessori School near you! Ignite your child's potential
        at our top-rated Nallagandla preschool. Experience excellence today!";
        $page_data['canonical_url']     = "https://kidzoniainternational.in/our-learning-spaces-amenities";
        $page_data['meta_keyword']      = "Best International Preschool In Lingampally, best preschool near me, top preschool in hyderabad, international preschool, Montessori School In Nallagandla, Nursery Admission in Serilingampally, Nursery School Near me";
        $this->load->view('frontend/default/index', $page_data);
    }

    public function awards_recognitions()
    {
        $page_data['awards']            = $this->common_model->selectByidsINWhere('', 'awards_and_recognitions', '', '');
        $page_data['page_name']         = "awards_recognitions";
        $page_data['page_title']        = "Awards & Recognitions | Kidzonia International School";
        $page_data['meta_description']  = "Explore the prestigious awards & recognitions that make Kidzonia International School one of the leading schools for quality education and growth.";
        $page_data['meta_keyword']      = "awards & recognitions";
        $page_data['canonical_url']     = "https://kidzoniainternational.in/awards-recognitions";
        $this->load->view('frontend/default/index', $page_data);
    }

    public function our_curriculum()
    {
        $page_data['page_name']         = "our_curriculum";
        $page_data['curri_abt']           = $this->crud_model->get_curri_abt();
        $page_data['page_title']        = "Kidzonia International School Curriculum | Nurturing Future Leaders";
        $page_data['meta_description']  = "Kidzonia School curriculum blends academics, activities & values to nurture young minds with global standards and innovative learning methods.";
        $page_data['meta_keyword']      = "kidzonia international school curriculum";
        $page_data['canonical_url']     = "https://kidzoniainternational.in/our-curriculum/";
        $this->load->view('frontend/default/index', $page_data);
    }

    public function our_programmes()
    {
        $page_data['page_name']         = "our_programmes";
        $page_data['our_programmes']           = $this->crud_model->get_our_programmes();
        $page_data['programmes_icons']           = $this->crud_model->get_programmes_icons();
        $page_data['page_title']        = "Kidzonia International School | Academic Programmes";
        $page_data['meta_description']  = "Discover Kidzonia International School programmes that nurture young learners with CBSE, Pre Primary, Nursery & innovative academic approaches.";
        $page_data['meta_keyword']      = "our programmes";
        $page_data['canonical_url']     = "https://kidzoniainternational.in/our-programmes/";
        $this->load->view('frontend/default/index', $page_data);
    }

    public function a_day_at_kidzonia()
    {
        $page_data['page_name']         = "a_day_at_kidzonia";
        $page_data['kidzonia_day']           = $this->crud_model->get_day_at_kidzonia();
        $page_data['page_title']        = "Preprimary School Near Me | A day at Kidzonia";
        $page_data['meta_description']  = "Discover Kidzonia: Your child's launchpad! Nurture their potential
        with our top-notch Preprimary School. Admissions open for 2024-25. Enroll now!";
        $page_data['meta_keyword']      = "Best International Preschool In Lingampally, best preschool near me, top preschool in hyderabad, international preschool, Montessori School In Nallagandla, Nursery Admission in Serilingampally, Best Nursery in Nallagandla, Best Nursery in Hyderabad, Nursery in Serilingampally, top 10 Nursery Schools in Hyderabad, DayCare Centre in Hyderabad, Nursery School Near me, list of Preschool in Nallagandla, Childcare in Serilingampally";
        $page_data['canonical_url']     = "https://kidzoniainternational.in/a-day-at-kidzonia/";
        $this->load->view('frontend/default/index', $page_data);
    }

    public function kidzonia_commits()
    {
        $page_data['page_name']         = "kidzonia_commits";
        $page_data['commits']           = $this->crud_model->get_kidzonia_commits();
        $page_data['page_title']        = "Kidzonia School Commitment to Excellence & Growth";
        $page_data['meta_description']  = "Kidzonia International School is dedicated to providing world-class education with a strong commitment to values, innovation, and child development.";
        $page_data['meta_keyword']      = "kidzonia commits";
        $page_data['canonical_url']     = "https://kidzoniainternational.in/kidzonia-commits/";
        $this->load->view('frontend/default/index', $page_data);
    }

    public function ixplore()
    {
        $page_data['page_name']         = "ixplore";
        $page_data['ixplore']           = $this->crud_model->get_ixplore();
        $page_data['page_title']        = "Best Nursery Schools | Ixplore | Playschool";
        $page_data['meta_description']  = "IXplore: Your Child's Adventure Starts Here! Best Nursery Schools for
        ages 2-6. Watch your child blossom in our engaging Playschool environment.";
        $page_data['canonical_url']     = "https://www.kidzoniainternational.in/ixplore";
        $page_data['meta_keyword']      = "";
        $this->load->view('frontend/default/index', $page_data);
    }

    public function whizkids()
    {
        $page_data['page_name']         = "whizkids";
        $page_data['whizkids']           = $this->crud_model->get_whizkids();
        $page_data['page_title']        = "International preschool, Daycare and Playschool Near me | Kidzonia";
        $page_data['meta_description']  = "At WhizKids Junction, we are passionate about fostering a dynamic
and enriching environment where young minds thrive.";
        $page_data['meta_keyword']      = "Unleash your child's potential at WhizKids Junction!
        Explore our top-rated Playschool for a fun-filled learning journey. Best Nursery
        Schools nearby!";
        $page_data['canonical_url']     = "https://www.kidzoniainternational.in/whizkids";
        $this->load->view('frontend/default/index', $page_data);
    }

    public function our_teachers()
    {
        $page_data['page_name']         = "our_teachers";
        $page_data['teachers']           = $this->crud_model->get_our_teachers();
        $page_data['page_title']        = "Montessori School In Nallagandla | Our teachers";
        $page_data['meta_description']  = "Kidzonia: Top Montessori School in Nallagandla. Expert
        teachers, modern classrooms, & global learning resources for your child's bright
        future.
        ";
        $page_data['meta_keyword']      = "Best International Preschool In Lingampally, best preschool near me, top preschool in hyderabad, international preschool, Montessori School In Nallagandla, Nursery Admission in Serilingampally, Best Nursery in Nallagandla, Nursery School Near me, list of Preschool in Nallagandla, Childcare in Serilingampally";
        $page_data['canonical_url']     = 'https://kidzoniainternational.in/our-teachers/';
        $this->load->view('frontend/default/index', $page_data);
    }

    public function admissions()
    {
        $page_data['awards']            = $this->common_model->selectByidsINWhere('', 'awards_and_recognitions', '4', '0');
        $page_data['class_list']        = $this->crud_model->get_kips_program_list();
        $page_data['branches']          = $this->crud_model->get_header_branches()->result_array();
        $page_data['admissions']        = $this->crud_model->get_admissions();
        $page_data['page_name']         = "admissions";
        $page_data['page_title']        = "Admission Process in Kidzonia - Kidzonia International";
        $page_data['meta_description']  = "Experience a seamless admission process at Kidzonia Preschool. Begin by filling our user-friendly application form, followed by a personalized interaction. We prioritize your child's smooth transition, ensuring a hassle-free enrollment into our nurturing educational environment.";
        $page_data['meta_keyword']      = "admission process in kidzonia";
        $page_data['canonical_url']     = 'https://www.kidzoniainternational.in/admissions';

        $this->load->view('frontend/default/index', $page_data);
    }

    /**
     * Capture UTM parameters and referer from JavaScript
     * Stores in session for use during form submission
     * Only accessible via POST requests (AJAX or form POST)
     */
    public function capture_utm()
    {
        // Only allow POST requests - block direct GET access to prevent JSON showing on page
        if (strtoupper($this->input->server('REQUEST_METHOD')) !== 'POST') {
            // Return JSON 404 instead of showing page 404 to prevent issues
            $this->output
                ->set_status_header(404)
                ->set_content_type('application/json')
                ->set_output(json_encode(array(
                    'status' => 404,
                    'message' => 'Method not allowed'
                )));
            return;
        }

        $this->load->library('session');
        
        // Get UTM parameters from POST
        $utm_params = array();
        
        // Check if sent as array format
        $post_utm_params = $this->input->post('utm_params');
        if (!empty($post_utm_params) && is_array($post_utm_params)) {
            $utm_params = $post_utm_params;
        } else {
            // Extract individual UTM parameters
            $utm_params = array(
                'utm_source' => $this->input->post('utm_source'),
                'utm_medium' => $this->input->post('utm_medium'),
                'utm_campaign' => $this->input->post('utm_campaign'),
                'utm_term' => $this->input->post('utm_term'),
                'utm_content' => $this->input->post('utm_content'),
                'utm_id' => $this->input->post('utm_id')
            );
        }
        
        // Get referer information
        $referer = $this->input->post('referer') ?: '';
        $referer_domain = $this->input->post('referer_domain') ?: '';
        $source_type = $this->input->post('source_type') ?: '';
        $detected_source = $this->input->post('detected_source') ?: '';
        
        // If no referer from POST, check HTTP_REFERER but only if it's external
        if (empty($referer)) {
            $http_referer = $this->input->server('HTTP_REFERER');
            if (!empty($http_referer)) {
                $current_domain = parse_url(base_url(), PHP_URL_HOST);
                $parsed_referer = parse_url($http_referer);
                $referer_host = isset($parsed_referer['host']) ? $parsed_referer['host'] : '';
                // Only use if external
                if (!empty($referer_host) && $referer_host !== $current_domain) {
                    $referer = $http_referer;
                    $referer_domain = $referer_host;
                }
            }
        }
        
        // Only store referer if it's from an external domain (not our own site)
        // This ensures we capture where the user originally came from, not internal navigation
        $current_domain = parse_url(base_url(), PHP_URL_HOST);
        $referer_host = '';
        if (!empty($referer)) {
            $parsed_referer = parse_url($referer);
            $referer_host = isset($parsed_referer['host']) ? $parsed_referer['host'] : '';
        }
        
        // Only store external referer (not from our own domain)
        if (!empty($referer) && !empty($referer_host) && $referer_host !== $current_domain) {
            // Store external referer
            $this->session->set_userdata('referer_url', html_escape($referer));
            $this->session->set_userdata('referer_domain', html_escape($referer_host));
        } elseif (empty($this->session->userdata('referer_url'))) {
            // If no external referer and no stored referer, mark as direct
            $this->session->set_userdata('referer_url', 'Direct/Internal Navigation');
            $this->session->set_userdata('referer_domain', 'Direct');
        }
        
        // If no UTM source but we detected a source from referer, use that
        if (empty($utm_params['utm_source']) && $detected_source) {
            $utm_params['utm_source'] = $detected_source;
        }
        
        // Store UTM parameters in session
        foreach ($utm_params as $key => $value) {
            if (!empty($value)) {
                $this->session->set_userdata($key, html_escape($value));
            }
        }
        
        // Store source type and detected source
        if (!empty($source_type)) {
            $this->session->set_userdata('source_type', html_escape($source_type));
        }
        if (!empty($detected_source)) {
            $this->session->set_userdata('detected_source', html_escape($detected_source));
        }
        
        // Return success response as JSON only
        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode(array(
                'status' => 200,
                'message' => 'UTM parameters captured successfully'
            )));
    }


    // public function test_whatsapp()
    // {
    //     $response = $this->crud_model->send_whatsapp_msg('6351401743', 'kidzonia_otp', 'en', ['1234']);
    //     echo json_encode($response);
    // }



    public function summer_camp()
    {
        $page_data['awards']            = $this->common_model->selectByidsINWhere('', 'awards_and_recognitions', '4', '0');
        $page_data['branches']          = $this->crud_model->get_header_branches()->result_array();
        $page_data['page_name']         = "summer_camp";
        $page_data['page_title']        = "Summer Camp Process in Kidzonia - Kidzonia International";
        $page_data['meta_description']  = "Experience a seamless summer camp process at Kidzonia Preschool. Begin by filling our user-friendly application form, followed by a personalized interaction. We prioritize your child's smooth transition, ensuring a hassle-free enrollment into our nurturing educational environment.";
        $page_data['meta_keyword']      = "summer camp process in kidzonia";
        $page_data['canonical_url']     = 'https://www.kidzoniainternational.in/admissions';
        $this->load->view('frontend/default/index', $page_data);
    }

    public function newsroom()
    {
        $filter_data['keywords'] = $this->input->get('keywords');
        $total_count              = $this->crud_model->get_paginated_print_media_count($filter_data);
        $page_data['total_count'] = $total_count;
        $pagination               = $this->paginate(base_url() . 'print-media', $total_count);
        $page_data['news']     = $this->crud_model->get_paginated_print_media($filter_data, $pagination['per_page'], $pagination['offset']);

        $page_data['page_name']         = "newsroom";
        $page_data['page_title']        = "Newsroom, blogs - Best International Pre-School | Kidzonia";
        $page_data['meta_description']  = "Kidzonia International Pre School |Pen is more powerful than a gun. It is proved by creating different Newsletters, blogs, Quotes, etc. Enhance creativity as a writer & it is published on the website.";
        $page_data['meta_keyword']      = "Best International Preschool In Lingampally, best preschool near me, top preschool in hyderabad, international preschool, Montessori School In Nallagandla, Nursery Admission in Serilingampally, Best Nursery in Nallagandla, Best Nursery in Hyderabad, Nursery in Serilingampally, list of Preschool in Nallagandla, Childcare in Serilingampally";
        $page_data['canonical_url']     = 'https://kidzoniainternational.in/print-media/';
        $this->load->view('frontend/default/index', $page_data);
    }

    public function achievements()
    {
        $filter_data['keywords']     = $this->input->get('keywords');
        $total_count                 = $this->crud_model->get_paginated_achievements_count($filter_data);
        $page_data['total_count']    = $total_count;
        $pagination                  = $this->paginate(base_url() . 'achievements', $total_count);
        $page_data['achievements']   = $this->crud_model->get_paginated_achievements($filter_data, $pagination['per_page'], $pagination['offset']);

        $page_data['page_name']         = "achievements";
        $page_data['page_title']        = "Empowering Little Achievers| Kidzonia's Success Stories.";
        $page_data['meta_description']  = "Unleash your child's potential and let them explore a world of endless possibilities at KidZonia International, an immersive edutainment destination where learning is fun and rewarding. Through engaging in role-playing activities and become the future leaders of tomorrow.";
        $page_data['meta_keyword']      = "Best International Preschool In Lingampally, Nursery Admission in Serilingampally, Best Nursery in Nallagandla, Best Nursery in Hyderabad, Nursery in Serilingampally, top 10 Nursery Schools in Hyderabad, DayCare Centre in Hyderabad, Nursery School Near me, list of Preschool in Nallagandla, Childcare in Serilingampally";
        $page_data['canonical_url']     = 'https://kidzoniainternational.in/achievements/';
        $this->load->view('frontend/default/index', $page_data);
    }

    public function kidzonia_gallery()
    {
        $page_data['data']              = $this->crud_model->get_kidzonia_gallery();
        $page_data['page_name']         = "kidzonia_gallery";
        $page_data['page_title']        = "Kidzonia International | A Gallery of Exciting Experiences";
        $page_data['meta_description']  = "Unleash your child's imagination at Kidzonia International Pre School, a world-class edutainment destination where kids can explore their passions and discover new  Possibilities.";
        $page_data['meta_keyword']      = "Best International Preschool In Lingampally, best preschool near me, top preschool in hyderabad, international preschool, Montessori School In Nallagandla, Nursery Admission in Serilingampally, Best Nursery in Nallagandla, Best Nursery in Hyderabad, Nursery in Serilingampally, top 10 Nursery Schools in Hyderabad, DayCare Centre in Hyderabad, Nursery School Near me, list of Preschool in Nallagandla, Childcare in Serilingampally, Montessori School in Ameenpur, Best International Preschool In KPHB";
        $page_data['canonical_url']     = 'https://kidzoniainternational.in/kidzonia-gallery/';
        $this->load->view('frontend/default/index', $page_data);
    }

    public function gallery_details($param1 = '', $param2 = '')
    {

        $allowed_locations = [
            'nallagandla',
            'suraksha-enclave-ameenpur',
            'serilingampally',
            'nallagandla-navodaya',
            'kphb-kukatpally',
            'pragathi-nagar',
            ''
        ];

        if (!in_array($param1, $allowed_locations)) {
            redirect('not-found');
        }

        $title                          = $this->crud_model->get_gallery_title_by_id($param1)->row_array();
        $location_name = !empty($param1) ? ucfirst(str_replace('-', ' ', $param1)) : 'HO';

        $page_data['title']             = $title['name'];
        $page_data['banner']             = $title['image'];
        $page_data['campus_galleries']         = $this->crud_model->get_gallery_campus_details_by_id($param1);
        $page_data['galleries']           = $this->crud_model->get_gallery_details_by_id($param1);
        $page_data['parents']           = $this->crud_model->get_parents_testimonials_by_id($param1);
        $page_data['awards']            = $this->common_model->selectByidsINWhere('', 'awards_and_recognitions', '4', '0');
        $page_data['events']            = $this->common_model->selectByidsINWhere('', 'events', '8', '0');

        $page_data['location_name']     = $location_name; 
        $page_data['page_name']         = "gallery_details";
        $page_data['page_title']        = "International preschool, Daycare and Playschool Near me | Kidzonia";
        $page_data['meta_description']  = "";
        $page_data['meta_keyword']      = "";
        $page_data['get_directions']      = "";

        // Footer Address
        switch ($param1) {
            case 'nallagandla':
                $page_data['page_title']        = "Best Preschool, Nursery & Childcare in Nalagandla | Nursery Admission | Montessori School, DayCare Centre & Preprimary School in Nalagandla - Kidzonia International";
                $page_data['content'] = 'Kidzonia, a premier <a href="https://www.kidzoniainternational.in/" target="_blank">Preschool in Nalagandla</a>, makes learning playful yet purposeful. Our Discover Curriculum nurtures each child\'s unique personality, fostering creativity and confidence from the Nursery stage onward. Through a blend of digital tools, hands-on experiences, and theme-based learning, we inspire curiosity and a lifelong passion for knowledge — distinguishing us as one of the top Montessori schools in the area.';
                $page_data['meta_description']  = "Discover the best preschool in Nalagandla, a distinguished Montessori School offering premier preprimary education. Our inclusive environment extends to a trusted DayCare Centre, ensuring comprehensive early childhood development for a promising future.";
                $page_data['meta_keyword']      = "preschool in nalagandla, nursery in nalagandla, childcare in nalagandla, montessori school in nalagandla, daycare centre in nalagandla, preprimary school in nalagandla, best preschool in nalagandla, best nursery in nalagandla, nursery admission in nalagandla";
                $page_data['canonical_url']     = 'https://www.kidzoniainternational.in/preschool-in-nallagandla-hyderabad';
                $page_data['footer_address'] = "169/33 Beside GHMC Park, Near Ratnadeep Lane, HUDA Layout, Nalagandla, Hyderabad, Telangana – 500 019.";
                $page_data['footer_phone'] = "+91 9100256256 / 7288078692";
                $page_data['footer_email'] = "nallagandla@kidzoniainternational.in";
                $page_data['get_directions']      = '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3805.713016168667!2d78.3081978!3d17.473444699999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcb92db33dcdb71%3A0xa1515a2cb19bee!2sKidzonia%20International%20Preschool%20in%20Nallagandla!5e0!3m2!1sen!2sin!4v1729247151430!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
                break;
            case 'suraksha-enclave-ameenpur':
                $page_data['page_title']        = "Best Preschool, Nursery & Childcare in Ameenpur | Nursery Admission | Montessori School, DayCare Centre & Preprimary School in Ameenpur - Kidzonia International";
                $page_data['content'] = 'At Kidzonia, the premier <a href="https://www.kidzoniainternational.in/" target="_blank">Preschool in Ameenpur</a>, learning is more than lessons, it\'s a journey of imagination, discovery, and growth. From the very first Nursery year, our Discover Curriculum celebrates each child\'s individuality, blending playful exploration with purposeful learning. Through a creative mix of digital innovation and hands-on experiences, we inspire curiosity, build confidence, and instill a lifelong love for knowledge, setting a new benchmark for Montessori education in the region.';
                $page_data['meta_description']  = "Explore the best preschool in Ameenpur, a distinguished Montessori School offering excellence in preprimary education. Our nurturing environment extends to a reliable DayCare Centre, ensuring holistic early childhood development for a promising future.";
                $page_data['meta_keyword']      = "preschool in ameenpur, nursery in ameenpur, montessori school in ameenpur, daycare centre in ameenpur, preprimary school in ameenpur, best preschool in ameenpur, best nursery in ameenpur, nursery admission in ameenpur, childcare in ameenpur";
                $page_data['canonical_url']     = 'https://www.kidzoniainternational.in/preschool-in-suraksha-enclave-ameenpur-hyderabad';
                $page_data['footer_address'] = "Plot No. 13, Suraksha Enclave, Chandanagar, Ameenpur. Hyderabad, Telangana – 502 032";
                $page_data['footer_phone'] = "+91 6309767979";
                $page_data['footer_email'] = "ameenpur@kidzoniainternational.in";
                $page_data['get_directions']      = '<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15220.27137082883!2d78.3192318!3d17.5042746!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcb93daa1e87b19%3A0x71681190fd5e7190!2sKidzonia%20International%20Preschool%20%7C%20Best%20Preschool%20in%20Ameenpur!5e0!3m2!1sen!2sin!4v1729247390182!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
                break;
            case 'serilingampally':
                $page_data['page_title']        = "Best Preschool, Nursery & Childcare in Serilingampally | Nursery Admission | Montessori School, DayCare Centre & Preprimary in Serilingampally - Kidzonia International";
                $page_data['content'] = 'At Kidzonia, a leading <a href="https://www.kidzoniainternational.in/" target="_blank">Preschool in Serilingampally</a>, learning is both playful and purposeful. Our Discover Curriculum celebrates each child\'s unique personality, fostering creativity, curiosity, and confidence from the Nursery stage onward. Combining digital tools with hands-on, theme-based learning, we inspire a lifelong passion for knowledge while building essential skills for future success. This innovative approach sets us apart as one of the top Montessori schools in the area.';

                $page_data['meta_description']  = "Uncover excellence at the best preschool in Serilingampally, a distinguished Montessori School providing top-notch preprimary education. Our inclusive atmosphere extends to a trusted DayCare Centre, ensuring holistic early childhood development for a bright future.";
                $page_data['meta_keyword']      = "preschool in serilingampally, nursery in serilingampally, childcare in serilingampally, montessori school in serilingampally, daycare centre in serilingampally, preprimary school in serilingampally, best preschool in serilingampally, best nursery in serilingampally, nursery admission in serilingampally";
                $page_data['canonical_url']     = 'https://www.kidzoniainternational.in/preschool-in-serilingampally-hyderabad';
                $page_data['footer_address'] = "Marigold Apartment, Near Nallagandla Flyover, Serilingampally, Hyderabad, Telangana – 500 019.";
                $page_data['footer_phone'] = "+91 7207378692 / 7207178692";
                $page_data['footer_email'] = "serilingampally@kidzoniainternational.in";
                $page_data['get_directions']      = '<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15221.723936849523!2d78.3134752!3d17.4869282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcb92c067566a71%3A0x379653ba6a08e205!2sKidzonia%20International%20Preschool%20%7C%20Best%20Preschool%20in%20Serilingampally!5e0!3m2!1sen!2sin!4v1729246148964!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
                break;
            case 'nallagandla-navodaya':
                $page_data['page_title']        = "Top International Schools in Nallagandla | Best CBSE, Pre Primary, Nursery, Kindergarten & Daycare Schools in Nallagandla Hyderabad - Kidzonia International";
                $page_data['content'] = 'Kidzonia, the leading <a href="https://www.kidzoniainternational.in/" target="_blank">Preschool in Nallagandla Navodaya</a>, turns early learning into an inspiring adventure. From Nursery onwards, our Discover Curriculum blends creativity, play, and structured learning to nurture confidence, curiosity, and essential skills. With a perfect mix of digital innovation and hands-on experiences, we ignite a lifelong passion for learning, making us a top choice for Montessori education in the region.';
                $page_data['meta_description']  = "Discover the top international schools in Nallagandla, Hyderabad, known for academic excellence, holistic development, and a nurturing environment for your child's bright future.";
                $page_data['meta_keyword']      = "schools in nallagandla, pre primary schools in nallagandla, cbse schools in nallagandla, international schools in nallagandla, best schools in nallagandla, top international schools in nallagandla, schools near nallagandla,schools in nallagandlahyderabad, pre schools in nallagandla, nursery schools in nallagandla, kindergarten schools in nallagandla, best international schools near nallagandla, daycare schools in nallagandla, pre schools in nallagandlahyderabad, pre primary schools in nallagandla hyderabad";
                $page_data['canonical_url']     = 'https://www.kidzoniainternational.in/preschool-in-nallagandla-navodaya-hyderabad';
                $page_data['footer_address'] = "Plot No 127, Navodaya H. S, D. No-2-55/KGB/N/127, Kanchi Gachibowli Rd, Serilingampalle (M), Telangana - 500 019";
                $page_data['footer_phone'] = "+91 9000273256";
                $page_data['footer_email'] = "kips.navodaya@kidzoniainternational.in";
                $page_data['get_directions']      = '<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7611.788900250971!2d78.3024695!3d17.4647653!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcb932797ca4b83%3A0x9439fc259db67e1f!2sKidzonia%20International%20Preschool%20in%20Navodaya!5e0!3m2!1sen!2sin!4v1729247268438!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
                break;
            case 'kphb-kukatpally':
                $page_data['page_title']        = "Top International Schools in KPHB Kukatpally | Best CBSE, Pre Primary, Nursery, Kindergarten & Daycare Schools in KPHB Kukatpally, Hyderabad - Kidzonia International";
                $page_data['content'] = 'Kidzonia, the trusted <a href="https://www.kidzoniainternational.in/" target="_blank">Preschool in KPHB, Kukatpally</a>, turns early education into a joyful adventure. From Nursery onwards, our Discover Curriculum blends play, creativity, and structured learning to spark curiosity, build confidence, and develop essential skills. With the perfect mix of digital innovation and hands-on activities, we inspire a lifelong love for learning, making us the preferred choice for Montessori education in the region.';

                $page_data['meta_description']  = "A playful learning paradise! Kidzonia is a top international preschool in KPHB, Hyderabad, offering a unique Montessori curriculum.";
                $page_data['meta_keyword']      = "schools in kphb, pre primary schools in kphb, cbse schools in kphb, international schools in kphb, best schools in kphb, top international schools in kphb, schools near kphb, schools in kphbhyderabad, pre schools in kphb,nursery schools in kphb, kindergarten schools in kphb, best international schools near kphb, daycare schools in kphb, pre schools in kphbhyderabad, pre primary schools in kphbhyderabad, schools in kukatpally, pre primary schools in kukatpally, cbse schools in kukatpally, international schools in kukatpally, best schools in kukatpally, top international schools in kukatpally, schools near kukatpally, schools in kukatpallyhyderabad, pre schools in kukatpally, nursery schools in kukatpally, kindergarten schools in kukatpally, best international schools near kukatpally, daycare schools in kukatpally, pre schools in kukatpallyhyderabad, pre primary schools in kukatpallyhyderabad";
                $page_data['canonical_url']     = 'https://www.kidzoniainternational.in/preschool-in-kphb-kukatpally-hyderabad';
                $page_data['footer_address'] = "19 KPHB 5th Phase Rd, Kukatpally, Hyderabad, Telengana, 500072";
                $page_data['footer_phone'] = "+91 8522066635 / 9100256256";
                $page_data['footer_email'] = "kips.kphb@kidzoniainternational.in";
                $page_data['get_directions']      = '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3805.577133339571!2d78.39164047512314!3d17.479942300132315!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcb9185427ce7fd%3A0x697acf091bd5d11e!2s19%2C%20KPHB%205th%20Phase%20Rd%2C%20Kukatpally%20Housing%20Board%20Colony%2C%20Kukatpally%2C%20Hyderabad%2C%20Telangana%20500072!5e0!3m2!1sen!2sin!4v1746193052907!5m2!1sen!2sin" width="10%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
                break;
            case 'pragathi-nagar':
                $page_data['page_title']        = "Best Preschool, Nursery & Childcare in Pragathi Nagar | Nursery Admission | Montessori School, DayCare Centre & Preprimary School in Pragathi Nagar - Kidzonia International";
                $page_data['content'] = 'In the playful yet structured world of Kidzonia, learning becomes an exciting journey of growth and discovery. As a leading <a href="https://www.kidzoniainternational.in/" target="_blank">Preschool in Pragathi Nagar</a>, we offer our signature Discover Curriculum, designed to embrace the unique personalities of young learners and create an inspiring environment that fosters creativity and self-expression. Grounded in both digital innovation and hands-on experiential learning, this theme-based programme empowers children right from their Nursery years. It builds confidence, nurtures curiosity, and instills a lifelong love for knowledge, qualities that make us one of the top Montessori schools in the region.';

                $page_data['meta_description']  = "Discover the best preschool in Pragathi Nagar, a distinguished Montessori School providing top-notch preprimary education. Our inclusive atmosphere extends to a trusted DayCare Centre, ensuring holistic early childhood development for a bright future.";
                $page_data['meta_keyword']      = "preschool in pragathinagar, nursery in pragathinagar, childcare in pragathinagar, montessori school in pragathinagar, daycare centre in pragathinagar, preprimary school in pragathinagar, best preschool in pragathinagar, best nursery in pragathinagar, nursery admission in pragathinagar";
                $page_data['canonical_url']     = 'https://www.kidzoniainternational.in/explore-centers/hyderabad/pragathi-nagar';
                $page_data['footer_address'] = "7-167/2/2, Villa no :2,Mega Vista Villas, Pragathi Nagar, Near Jagan Studios, Kakatiya
                Hills, Hyderabad, Telangana 500090";
                $page_data['footer_phone'] = "+91 9849775540, +91 8639106092";
                $page_data['footer_email'] = "pragathinagar@kidzoniainternational.in";
                $page_data['get_directions']      = '<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15217.890782497734!2d78.3912914!3d17.5326674!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcb8f03fc2b9479%3A0x5bfec9e38b84d87f!2sKidzonia%20International%20Preschool%20%7C%20Best%20Preschool%20in%20Pragathinagar!5e0!3m2!1sen!2sin!4v1733233668044!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
                break;
            default:
                $page_data['footer_address'] = "<b>Suraka Educational Society,</b><br>
                                                              2nd floor, 169/33, Ratnadeep Lane,
                                                              beside GHMC Park, near kidzonia school,
                                                              HUDA Layout, Nallagandla, Hyderabad, Telangana
                                                              500019";
                $page_data['footer_phone'] = "+91 9100 25 6256";
                $page_data['footer_email'] = "info@kidzoniainternational.in";
                $page_data['get_directions']      = '';
                break;
        }

        $this->load->view('frontend/default/index', $page_data);
    }



    public function serilingampally_gallery()
    {
        $page_data['page_name']         = "serilingampally_gallery";
        $page_data['page_title']        = "International preschool, Daycare and Playschool Near me | Kidzonia";
        $page_data['meta_description']  = "";
        $page_data['meta_keyword']      = "";
        $this->load->view('frontend/default/index', $page_data);
    }

    public function nallagandla_gallery()
    {
        $page_data['page_name']         = "nallagandla_gallery";
        $page_data['page_title']        = "International preschool, Daycare and Playschool Near me | Kidzonia";
        $page_data['meta_description']  = "";
        $page_data['meta_keyword']      = "";
        $this->load->view('frontend/default/index', $page_data);
    }

    public function navodaya_nallagandla_gallery()
    {
        $page_data['page_name']         = "navodaya_nallagandla_gallery";
        $page_data['page_title']        = "International preschool, Daycare and Playschool Near me | Kidzonia";
        $page_data['meta_description']  = "";
        $page_data['meta_keyword']      = "";
        $this->load->view('frontend/default/index', $page_data);
    }

    public function ameenpur_gallery()
    {
        $page_data['page_name']         = "ameenpur_gallery";
        $page_data['page_title']        = "International preschool, Daycare and Playschool Near me | Kidzonia";
        $page_data['meta_description']  = "";
        $page_data['meta_keyword']      = "";
        $this->load->view('frontend/default/index', $page_data);
    }

    public function blogs()
    {
        $filter_data['keywords']  = $this->input->get('keywords');
        $total_count              = $this->crud_model->get_paginated_blogs_count($filter_data);
        $page_data['total_count'] = $total_count;
        $pagination               = $this->paginate(base_url() . 'blogs', $total_count);
        $page_data['blogs']      = $this->crud_model->get_paginated_blogs($filter_data, $pagination['per_page'], $pagination['offset']);


        $page_data['page_name']         = "blogs";
        $page_data['page_title']        = "Kidzonia International Pre-School |Top Schools Hyderabad Nallagandla";
        $page_data['meta_title']        = "Kidzonia International Pre-School |Top Schools Hyderabad Nallagandla";
        $page_data['meta_description']  = "Best International Schools in Hyderabad, Top international schools in Hyderabad, Montessori  Schools in Hyderabad, best schools in Hyderabad.";
        $page_data['meta_keyword']      = "Best Nursery in Nallagandla, Best Nursery in Hyderabad, Nursery in Serilingampally, top 10 Nursery Schools in Hyderabad, DayCare Centre in Hyderabad, Nursery School Near me, list of Preschool in Nallagandla, Childcare in Serilingampally, Montessori School in Ameenpur, Best International Preschool In KPHB";
        $page_data['canonical_url']      = "https://kidzoniainternational.in/blogs/";
        $this->load->view('frontend/default/index', $page_data);
    }



    public function digital_news()
    {
        $filter_data['keywords']   = $this->input->get('keywords');
        $total_count               = $this->crud_model->get_paginated_digital_news_count($filter_data);
        $page_data['total_count']  = $total_count;
        $pagination                = $this->paginate(base_url() . 'digital-news', $total_count);
        $page_data['digital_news'] = $this->crud_model->get_paginated_digital_news($filter_data, $pagination['per_page'], $pagination['offset']);


        $page_data['page_name']         = "digital_news";
        $page_data['page_title']        = "Digital News | Kidzonia International Preschool";
        $page_data['meta_description']  = "Stay updated with the latest news and updates from Kidzonia
International Preschool. Discover innovative learning programs, exciting events, and
inspiring stories.";
        $page_data['meta_keyword']      = "";
        $page_data['canonical_url']      = "https://www.kidzoniainternational.in/digital-news";
        $this->load->view('frontend/default/index', $page_data);
    }

    public function blog_details($param1 = '', $param2 = '')
    {
        $data = $this->crud_model->get_blogs_by_id($param1)->row_array();
        $items = $this->crud_model->get_recent_blogs_by_id($param1)->result_array();

        $page_data['data']               = $data;
        $page_data['related_articles']   = $items;
        $page_data['page_name']         = "blog_details";
        $page_data['page_title']        = $data['meta_title'];
        $page_data['meta_description']  = $data['meta_description'];
        $page_data['meta_keyword']      = $data['meta_keyword'];
        $this->load->view('frontend/default/index', $page_data);
    }

    public function event_details($param1 = '', $param2 = '')
    {
        $data = $this->crud_model->get_event_by_id($param2)->row_array();

        $page_data['data']         = $data;
        $page_data['related_articles']         = $items;
        $page_data['page_name']         = "event_details";
        $page_data['page_title']        = "International preschool, Daycare and Playschool Near me | Kidzonia";
        $page_data['meta_description']  = "";
        $page_data['meta_keyword']      = "";
        $this->load->view('frontend/default/index', $page_data);
    }


    public function sitemap()
    {
        $page_data['page_name']         = "sitemap";
        $page_data['page_title']        = "Best International School in Hyderabad Nallagandla ";
        $page_data['meta_description']  = "Kidzonia International Pre School, one of the top international schools located in Nallagandla, helps your children reach their full potential through advanced learning.Contact us now for admissions for the academic year 2024-25";
        $page_data['meta_keyword']      = "international preschool, Montessori School In Nallagandla, Nursery Admission in Serilingampally, Best Nursery in Nallagandla, Best Nursery in Hyderabad, Nursery in Serilingampally, top 10 Nursery Schools in Hyderabad, DayCare Centre in Hyderabad, Nursery School Near me, list of Preschool in Nallagandla, Childcare in Serilingampally, Montessori School in Ameenpur, Best International Preschool In KPH";
        $page_data['canonical_url']      = "https://kidzoniainternational.in/sitemap";
        $this->load->view('frontend/default/index', $page_data);
    }

    public function contact_us()
    {
        $page_data['page_name']         = "contact_us";
        $page_data['page_title']        = "Contact Us | Kidzonia International School Hyderabad";
        $page_data['meta_description']  = "Reach out to Kidzonia International School for admission enquiries, programmes, and campus information. We are here to guide your child’s journey.";
        $page_data['meta_keyword']      = "contact us";
        $page_data['canonical_url']      = "https://kidzoniainternational.in/contact-us/";
        $this->load->view('frontend/default/index', $page_data);
    }



    public function career()
    {
        $filter_data['keywords'] = $this->input->get('keywords');
        $total_count              = $this->crud_model->get_paginated_career_count($filter_data);
        $page_data['total_count'] = $total_count;
        $pagination               = $this->paginate(base_url() . 'career', $total_count);
        $page_data['careers']      = $this->crud_model->get_paginated_career($filter_data, $pagination['per_page'], $pagination['offset']);

        $page_data['page_name']         = "career";
        $page_data['page_title']        = "Careers at Kidzonia - Kidzonia International";
        $page_data['meta_description']  = "Embark on a rewarding journey with careers at Kidzonia Preschool. Join a dynamic team committed to shaping young minds. Explore opportunities that foster professional growth and contribute to the holistic development of children. Elevate your career with us!";
        $page_data['meta_keyword']      = "careers at kidzonia";
        $page_data['canonical_url']     = 'https://www.kidzoniainternational.in/career';
        $this->load->view('frontend/default/index', $page_data);
    }

    public function sales_executives()
    {
        $page_data['page_name']         = "sales_executives";
        $page_data['page_title']        = "International preschool, Daycare and Playschool Near me | Kidzonia";
        $page_data['meta_description']  = "";
        $page_data['meta_keyword']      = "";
        $this->load->view('frontend/default/index', $page_data);
    }


    public function explore_centers($slug = "")
    {
        if ($slug != "") {
            $data = $this->crud_model->get_explore_centers_list($slug);
            if (empty($data)) {
                redirect(site_url('not-found'), 'refresh');
            } else {
                $page_data['data']                = $data;
                $page_data['page_name']         = "explore_centers";

                if ($slug == 'hyderabad') {
                    $page_data['page_title']        = "Best Nursery, Preschool & Childcare in Hyderabad | Montessori School | Preprimary School &DayCare Centre in Hyderabad - Kidzonia International";
                    $page_data['meta_description']  = "Uncover excellence at the best preschool in Hyderabad, a distinguished Montessori School offering premier preprimary education. Our nurturing environment extends to a trusted DayCare Centre, ensuring comprehensive early childhood development.";
                    $page_data['meta_keyword']      = "preschool in hyderabad, nursery in hyderabad, childcare in hyderabad, montessori school in hyderabad, preprimary school in hyderabad, best nursery in hyderabad, best preschool in hyderabad, daycare centre in hyderabad";
                    $page_data['canonical_url']     = 'https://www.kidzoniainternational.in/explore-centers/hyderabad';
                    $page_data['seo'] = array(
                        "seo_name" => "Kidzonia International Preschool, Hyderabad",
                        "seo_url" => "https://www.kidzoniainternational.in/explore-centers/hyderabad",
                        "seo_telephone" => "+91 9100 25 6256",
                        "seo_same_as1" => "https://www.facebook.com/KidzoniaPreschoolHyderabad?mibextid=ZbWKwL",
                        "seo_same_as2" => "https://www.instagram.com/kidzonia_hyderabad/?igshid=MzRlODBiNWFlZA%3D%3D",
                        "seo_same_as3" => "https://www.youtube.com/@KIDZONIAINTERNATIONALPRESCHOOL",
                        "seo_same_as4" => "https://www.linkedin.com/in/kidzonia-hyderabad-87451428a",
                    );
                } else if ($slug == 'mumbai') {
                    $page_data['page_title']        = "Kidzonia International School Mumbai | Enroll Now";
                    $page_data['meta_description']  = "Discover Kidzonia International School Mumbai offering world-class preschool, CBSE & international curriculum for holistic child development.";
                    $page_data['meta_keyword']      = "kidzonia international school mumbai";
                    $page_data['canonical_url']     = 'https://kidzoniainternational.in/explore-centers/mumbai/';
                } else if ($slug == 'pune') {
                    $page_data['page_title']        = "Kidzonia International School Pune | International Curriculum & Care";
                    $page_data['meta_description']  = "Discover Kidzonia International School Pune offering preschool, CBSE & international curriculum designed to nurture creativity and holistic growth.";
                    $page_data['meta_keyword']      = "kidzonia international school pune";
                    $page_data['canonical_url']     = 'https://kidzoniainternational.in/explore-centers/pune/';
                } else {
                    $page_data['page_title']        = "";
                    $page_data['meta_description']  = "";
                    $page_data['meta_keyword']      = "";
                    $page_data['canonical_url']     = 'https://www.kidzoniainternational.in/';
                }


                $this->load->view('frontend/default/index', $page_data);
            }
        } else {
            redirect(site_url('not-found'), 'refresh');
        }
    }

    public function explore_centers_branches($param1 = '', $param2 = '')
    {
        if ($param2 != "") {
            $data = $this->crud_model->get_explore_centers_details($param2);
            $page_data['seo'] = $this->crud_model->get_branch_seo($param2);
            if (empty($data)) {
                redirect(site_url('not-found'), 'refresh');
            } else {
                $page_data['title']             = $data['name'];
                $page_data['data']             = $data;
                $page_data['page_name']         = "explore_centers_branches";

                if ($param2 == 'nallagandla') {
                    $page_data['page_title']        = "Top International Preschool | Nallagandla Near Me | Play School";
                    $page_data['meta_description']  = "Kidzonia: Your child's gateway to a brighter future. Top international
preschool in Nallagandla, offering a Montessori-inspired curriculum.";
                    $page_data['meta_keyword']      = "preschool in nalagandla, nursery in nalagandla, childcare in nalagandla, montessori school in nalagandla, daycare centre in nalagandla, preprimary school in nalagandla, best preschool in nalagandla, best nursery in nalagandla, nursery admission in nalagandla";
                    $page_data['canonical_url']     = 'https://www.kidzoniainternational.in/explore-centers/hyderabad/nallagandla';
                } else if ($param2 == 'surksha-enclave-ameenpur') {
                    $page_data['page_title']        = "Best International Preschool | Ameenpur Near Me | Hyderabad";
                    $page_data['meta_description']  = "Kidzonia: A top Montessori school in Ameenpur, Hyderabad. Providing a nurturing and stimulating learning experience for your child.";
                    $page_data['meta_keyword']      = "preschool in ameenpur, nursery in ameenpur, montessori school in ameenpur, daycare centre in ameenpur, preprimary school in ameenpur, best preschool in ameenpur, best nursery in ameenpur, nursery admission in ameenpur, childcare in ameenpur";
                    $page_data['canonical_url']     = 'https://www.kidzoniainternational.in/explore-centers/hyderabad/surksha-enclave-ameenpur';
                }
                // else if($param2=='chandanagar'){
                //     $page_data['page_title']        = "Best Preschool, Nursery & Childcare in Chandanagar | Montessori School, DayCare Centre & Preprimary School in Chandanagar - Kidzonia International";
                //     $page_data['meta_description']  = "Uncover excellence at the best preschool in Chandanagar, a distinguished Montessori School offering premier preprimary education. Our inclusive environment extends to a reliable DayCare Centre, ensuring holistic early childhood development for a promising future.";
                //     $page_data['meta_keyword']      = "preschool in chandanagar, nursery in chandanagar, childcare in chandanagar, montessori school in chandanagar, daycare centre in chandanagar, preprimary school in chandanagar,best preschool in chandanagar, best nursery in chandanagar, nursery admission in chandanagar";
                //     $page_data['canonical_url']     = 'https://www.kidzoniainternational.in/explore-centers/hyderabad/chandanagar';
                // }
                else if ($param2 == 'serilingampally') {
                    $page_data['page_title']        = "Best International Preschool | Serilingamapally Near Me | Play";
                    $page_data['meta_description']  = "Looking for the best preschool in Serilingampally? Kidzonia offers a nurturing environment for your child's growth and development.";
                    $page_data['meta_keyword']      = "preschool in serilingampally, nursery in serilingampally, childcare in serilingampally, montessori school in serilingampally, daycare centre in serilingampally, preprimary school in serilingampally, best preschool in serilingampally, best nursery in serilingampally, nursery admission in serilingampally";
                    $page_data['canonical_url']     = 'https://www.kidzoniainternational.in/explore-centers/hyderabad/serilingampally';
                } else if ($param2 == 'pragathinagar') {
                    $page_data['page_title']        = "Best International Preschool Near Pragathi Nagar | Kidzonia";
                    $page_data['meta_description']  = "Best International Preschool Near Pragathi Nagar | Kidzonia - Nurture your child's potential with our play-based curriculum. Join our community of happy learners today!";
                    $page_data['meta_keyword']      = "preschool in pragathinagar, nursery in pragathinagar, childcare in pragathinagar, montessori school in pragathinagar, daycare centre in pragathinagar, preprimary school in pragathinagar, best preschool in pragathinagar, best nursery in pragathinagar, nursery admission in pragathinagar";
                    $page_data['canonical_url']     = 'https://www.kidzoniainternational.in/explore-centers/hyderabad/pragathinagar';
                } else if ($param2 == 'nallagandla-2') {
                    $page_data['page_title']        = "Best International Preschool | Nallagandla Navodaya Near Me";
                    $page_data['meta_description']  = " Discover Kidzonia, the best Montessori preschool near Nallagandla Navodaya. A fun and nurturing environment for your child's holistic development.";
                    $page_data['meta_keyword']      = "Best International Preschool In Lingampally, best preschool near me, top preschool in hyderabad, international preschool, Montessori School In Nallagandla, Nursery Admission in Serilingampally, Best Nursery in Nallagandla, Best Nursery in Hyderabad, Nursery in Serilingampally, top 10 Nursery Schools in Hyderabad, DayCare Centre in Hyderabad, Nursery School Near me, list of Preschool in Nallagandla, Childcare in Serilingampally, Montessori School in Ameenpur, Best International Preschool In KPHB";
                    $page_data['canonical_url']     = 'https://www.kidzoniainternational.in/explore-centers/hyderabad/nallagandla-navodaya';
                } else if ($param2 == 'kphb-kukatpally') {
                    $page_data['page_title']        = "Top Montessori International Preschool | KPHB Near Me | Hyd";
                    $page_data['meta_description']  = "A playful learning paradise! Kidzonia is a top international preschool in KPHB, Hyderabad, offering a unique Montessori curriculum.";
                    $page_data['meta_keyword']      = "Best International Preschool In Lingampally, best preschool near me, top preschool in hyderabad, international preschool, Montessori School In Nallagandla, Nursery Admission in Serilingampally, Best Nursery in Nallagandla, Best Nursery in Hyderabad, Nursery in Serilingampally, top 10 Nursery Schools in Hyderabad, DayCare Centre in Hyderabad, Nursery School Near me, list of Preschool in Nallagandla, Childcare in Serilingampally, Montessori School in Ameenpur, Best International Preschool In KPHB";
                    $page_data['canonical_url']     = 'https://www.kidzoniainternational.in/explore-centers/hyderabad/kphb-kukatpally';
                } else {
                    $page_data['page_title']        = "";
                    $page_data['meta_description']  = "";
                    $page_data['meta_keyword']      = "";
                    $page_data['canonical_url']     = 'https://www.kidzoniainternational.in/';
                }



                $this->load->view('frontend/default/index', $page_data);
            }
        } else {
            redirect(site_url('not-found'), 'refresh');
        }
    }

    public function not_found()
    {
        $page_data['page_name']         = "not_found";
        $page_data['page_title']        = "International preschool, Daycare and Playschool Near me | Kidzonia";
        $page_data['meta_description']  = "";
        $page_data['meta_keyword']      = "";
        $this->load->view('frontend/default/index', $page_data);
    }


    public function get_ajax_gallery_images()
    {
        $branch_id = $this->input->post('branch_id', true);
        $title = $this->input->post('title', true);
        $this->crud_model->get_ajax_gallery_images($branch_id, $title);
    }

    public function thank_you()
    {
        $page_data['page_name']         = "thank_you";
        $page_data['page_title']        = "International preschool, Daycare and Playschool Near me | Kidzonia";
        $page_data['meta_description']  = "";
        $page_data['meta_keyword']      = "";
        $this->load->view('frontend/default/index', $page_data);
    }

    public function ajax_youtube_enquiry()
    {
        if ($this->input->is_ajax_request()) {
            $this->crud_model->ajax_youtube_enquiry();
        } else {
            $res = array("status" => 400, "message" => 'Invalid Request');
            return simple_json_output($res);
        }
    }

    public function ajax_call_back_enquiry()
    {
        if ($this->input->is_ajax_request()) {
            $this->crud_model->ajax_call_back_enquiry();
        } else {
            $res = array("status" => 400, "message" => 'Invalid Request');
            return simple_json_output($res);
        }
    }

    public function ajax_download_brochure_enquiry()
    {
        if ($this->input->is_ajax_request()) {
            $this->crud_model->ajax_download_brochure_enquiry();
        } else {
            $res = array("status" => 400, "message" => 'Invalid Request');
            return simple_json_output($res);
        }
    }

    public function download_brochure_url()
    {
        $pdfFilePath = FCPATH . 'assets/Kidzonia-Brochure.pdf';

        if (file_exists($pdfFilePath)) {
            $this->load->helper('download');
            force_download($pdfFilePath, NULL);

            $referrer = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : base_url();
            redirect($referrer, 'refresh');
        } else {
            redirect('not-found', 'refresh');
        }
    }

    public function ajax_register_event()
    {
        if ($this->input->is_ajax_request()) {
            $this->crud_model->ajax_register_event();
        } else {
            $res = array("status" => 400, "message" => 'Invalid Request');
            return simple_json_output($res);
        }
    }

    public function ajax_summer_camp_enquiry()
    {
        $this->crud_model->ajax_summer_camp_enquiry();
    }

    public function resend_admission_otp()
    {
        $this->crud_model->resend_admission_otp();
    }

    public function resend_callback_otp()
    {
        $this->crud_model->resend_callback_otp();
    }

    public function ajax_admission_otp_enquiry()
    {
        $this->crud_model->ajax_admission_otp_enquiry();
    }

    public function ajax_callback_otp_enquiry()
    {
        $this->crud_model->ajax_callback_otp_enquiry();
    }

    public function check_admission_enquiry()
    {
        if ($this->input->is_ajax_request()) {
            $this->crud_model->check_admission_enquiry();
        } else {
            $res = array("status" => 400, "message" => 'Invalid Request');
            return simple_json_output($res);
        }
    }

    public function ajax_admission_enquiry()
    {
        if ($this->input->is_ajax_request()) {
            $this->crud_model->ajax_admission_enquiry();
        } else {
            $res = array("status" => 400, "message" => 'Invalid Request');
            return simple_json_output($res);
        }
    }

    public function ajax_submit_career()
    {
        if ($this->input->is_ajax_request()) {
            $this->crud_model->ajax_submit_career();
        } else {
            $res = array("status" => 400, "message" => 'Invalid Request');
            return simple_json_output($res);
        }
    }
    public function ajax_contact_enquiry()
    {
        if ($this->input->is_ajax_request()) {
            $this->crud_model->ajax_contact_enquiry();
        } else {
            $res = array("status" => 400, "message" => 'Invalid Request');
            return simple_json_output($res);
        }
    }

    public function remote_career_leads()
    {
        $curl = curl_init();
        $url = 'https://erp.kidzonia.co.in/panel/hr/remote_career_leads';
        curl_setopt_array($curl, array(
            CURLOPT_URL => $url,  // Specify your API endpoint URL here
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => array(
                'name' => 'Deepak Thakur',
                'email' => 'thakurd558@gmail.com',
                'phone' => '7738339572',
                'applied_for' => '3',
                'applied_school' => '3',
                'remark' => '',
                'ip_address' => '',
                'resume' => new CURLFILE('uploads/career_enquiry/2024/01/20/resume_TbuLGFq7KY.pdf'),  // Specify the correct path to your file
            ),
        ));

        $response = curl_exec($curl);

        if (curl_errno($curl)) {
            echo 'Curl error: ' . curl_error($curl);
        }

        curl_close($curl);
        echo $response;
    }

    public function privacy_policy()
    {
        $page_data['page_name']         = "privacy_policy";
        $page_data['page_title']        = "Privacy Policy | Kidzonia International School";
        $page_data['meta_description']  = "Read the Privacy Policy of Kidzonia International School. We value your trust and ensure the safety, confidentiality, and protection of your data.";
        $page_data['meta_keyword']      = "privacy policy";
        $page_data['canonical_url']     = "https://www.kidzoniainternational.in/privacy-policy";
        $this->load->view('frontend/default/index', $page_data);
    }

    public function tellapur()
    {
        $page_data['page_name']         = "tellapur";
        $page_data['page_title']        = "Best CBSE & International Pre Schools in Tellapur, Hyderabad | Pre Primary, Kindergarten, Nursery & Daycare - Kidzonia International";
        $page_data['meta_description']  = "Explore the best CBSE, International, Pre Primary, Nursery & Daycare schools in Tellapur, Hyderabad. Find top schools near Tellapur for your child.";
        $page_data['meta_keyword']      = "schools in tellapur, pre primary schools in tellapur, cbse schools in tellapur, international schools in tellapur, best schools in tellapur, top international schools in tellapur, schools near tellapur, schools in tellapur hyderabad, top international schools in tellapur, pre schools in tellapur, nursery schools in tellapur, kindergarten schools in tellapur, daycare schools in tellapur";
        $page_data['canonical_url']     = "https://www.kidzoniainternational.in/preschool-in-tellapur-hyderabad";
        $this->load->view('frontend/default/index', $page_data);
    }

    public function lingampally()
    {
        $page_data['page_name']         = "lingampally";
        $page_data['page_title']        = "Best CBSE & International Pre Schools In Lingampally, Hyderabad | Pre Primary, Kindergarten, Nursery & Daycare - Kidzonia International";
        $page_data['meta_description']  = "Top CBSE & International schools in Lingampally, Hyderabad. From Pre Primary to Daycare, find the right school for your child’s growth and success.";
        $page_data['meta_keyword']      = "schools in lingampally, pre primary schools in lingampally, cbse schools in lingampally, international schools in lingampally, best schools in lingampally, top international schools in lingampally, schools near lingampally,schools in lingampally hyderabad, pre schools in lingampally, nursery schools in lingampally, kindergarten schools in lingampally, best international schools near lingampally, daycare schools in lingampally, pre schools in lingampally hyderabad, pre primary schools in lingampally hyderabad";
        $page_data['canonical_url']     = "https://www.kidzoniainternational.in/preschool-in-lingampally-hyderabad";
        $this->load->view('frontend/default/index', $page_data);
    }

    public function ramachandrapuram()
    {
        $page_data['page_name']         = "ramachandrapuram";
        $page_data['page_title']        = "Best CBSE & International Pre Schools In Ramachandrapuram | Pre Primary, Kindergarten, Nursery & Daycare - Kidzonia International";
        $page_data['meta_description']  = "Discover top CBSE, International, Daycare & Kindergarten schools in Ramachandrapuram. Choose the best school in Hyderabad for your child’s future.";
        $page_data['meta_keyword']      = "schools in ramachandrapuram, pre primary schools in ramachandrapuram, cbse schools in ramachandrapuram, international schools in ramachandrapuram, best schools in ramachandrapuram, top international schools in ramachandrapuram, schools near ramachandrapuram, schools in ramachandrapuram hyderabad, pre schools in ramachandrapuram, nursery schools in ramachandrapuram, kindergarten schools in ramachandrapuram, best international schools near ramachandrapuram, daycare schools in ramachandrapuram";
        $page_data['canonical_url']     = "https://www.kidzoniainternational.in/preschool-in-ramachandrapuram-hyderabad";
        $this->load->view('frontend/default/index', $page_data);
    }

    public function chanda_nagar()
    {
        $page_data['page_name']         = "chanda_nagar";
        $page_data['page_title']        = "Best CBSE & International Pre Schools In Suraksha Chanda Nagar, Hyderabad | Pre Primary, Kindergarten, Nursery & Daycare - Kidzonia International";
        $page_data['meta_description']  = "Discover top CBSE, International, Pre Primary, Nursery & Kindergarten schools in Suraksha Chanda Nagar, Hyderabad. Enroll your child today!";
        $page_data['meta_keyword']      = "schools in suraksha chanda nagar, pre primary schools in suraksha chanda nagar, cbse schools in suraksha chanda nagar, international schools in suraksha chanda nagar, best schools in suraksha chanda nagar, top international schools in suraksha chanda nagar, schools near suraksha chanda nagar, schools in suraksha chanda nagar hyderabad, cbse schools in suraksha chanda nagar, top international schools in suraksha chanda nagar, pre schools in suraksha chanda nagar, nursery schools in suraksha chanda nagar, kindergarten schools in suraksha chanda nagar, best international schools near suraksha chanda nagar, daycare schools in suraksha chanda nagar, pre schools in suraksha chanda nagar hyderabad, pre primary schools in suraksha chanda nagar hyderabad";
        $page_data['canonical_url']     = "https://www.kidzoniainternational.in/preschool-in-chanda-nagar-hyderabad";
        $this->load->view('frontend/default/index', $page_data);
    }

    // Test endpoints for messaging
    public function test_email()
    {
        $email = $this->input->post('email') ?: 'safwansumra098@gmail.com';
        $name = $this->input->post('name') ?: 'safwan';
        
        $result = $this->crud_model->send_admission_enquiry_email($email, $name);
        
        if ($result) {
            echo json_encode(['status' => 200, 'message' => 'Email sent successfully to ' . $email]);
        } else {
            echo json_encode(['status' => 400, 'message' => 'Failed to send email']);
        }
    }

    public function test_sms()
    {
        $phone = $this->input->post('phone') ?: '9967526630';
        
        $result = $this->crud_model->send_admission_enquiry_sms($phone);
        
        if ($result) {
            echo json_encode(['status' => 200, 'message' => 'SMS sent successfully to ' . $phone]);
        } else {
            echo json_encode(['status' => 400, 'message' => 'Failed to send SMS']);
        }
    }

    public function test_whatsapp()
    {
        $phone = $this->input->post('phone') ?: '9967526630';
        
        $result = $this->crud_model->send_admission_enquiry_whatsapp($phone);
        
        if ($result) {
            echo json_encode(['status' => 200, 'message' => 'WhatsApp sent successfully to ' . $phone]);
        } else {
            echo json_encode(['status' => 400, 'message' => 'Failed to send WhatsApp']);
        }
    }
}
