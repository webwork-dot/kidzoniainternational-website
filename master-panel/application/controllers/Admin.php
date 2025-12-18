<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        
        /*cache control*/
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
        $this->output->set_header('Pragma: no-cache');
        date_default_timezone_set('Asia/Calcutta');
        $this->load->model('crud_model');  
    }
    
    function paginate($url, $total_rows)
    {
        //initialize pagination
        $page     = $this->security->xss_clean($this->input->get('page'));
        $per_page = $this->input->get('show', true);
        if (empty($page)) {
            $page = 0;
        }
        
        if ($page != 0) {
            $page = $page - 1;
        }
        
        if (empty($per_page)) {
            $per_page = 20;
        }
        $config['num_links']          = 4;
        $config['base_url']           = $url;
        $config['total_rows']         = $total_rows;
        $config['per_page']           = $per_page;
        $config['reuse_query_string'] = true;
        $this->pagination->initialize($config);
        
        return array(
            'per_page' => $per_page,
            'offset' => $page * $per_page
        );
    }
    
    public function system_password($param1 = "", $param2 = "") {
        if ($this->session->userdata('super_user_id') != true) {
           redirect(site_url('login'), 'refresh');
        }
        
        if($param1=='change_password'){
           $this->crud_model->change_system_password(); 
        }
        else{
            $page_data['page_name']  = 'system_password';
            $page_data['page_title'] = 'Kidzonia International | Change System Password';
            $this->load->view('backend/system_password.php', $page_data);
        }
    }
    
    public function index()
    {
        if ($this->session->userdata('admin_login') == true) {
            $this->dashboard();
        } else {
            redirect(site_url('login'), 'refresh');
        }
    }
    
    public function dashboard()
    {
        if ($this->session->userdata('admin_login') != true) {
            redirect(site_url('login'), 'refresh');
        }
        
        $page_data['sliders']                               = $this->crud_model->count_sliders();
        $page_data['awards_and_recognitions']               = $this->crud_model->count_awards_and_recognitions();
        $page_data['print_medias']                          = $this->crud_model->count_print_medias();
        $page_data['achievements']                          = $this->crud_model->count_achievements();
        $page_data['branches']                              = $this->crud_model->count_branches();
        $page_data['gallery']                               = $this->crud_model->count_gallery();
        $page_data['events']                                = $this->crud_model->count_events();
        $page_data['parents_testimonials']                  = $this->crud_model->count_parents_testimonials();
        $page_data['careers']                               = $this->crud_model->count_careers();
        $page_data['brochure']                              = $this->crud_model->count_brochure();
        $page_data['career_enquiry']                        = $this->crud_model->count_career_enquiry();
        // $page_data['category']          = $this->crud_model->count_category();
        // $page_data['products']          = $this->crud_model->count_products();
        $page_data['blogs']             = $this->crud_model->count_blogs();
        // $page_data['contact_enquiry']   = $this->crud_model->count_contact_enquiry();

        $page_data['page_name']    = 'dashboard';
        $page_data['page_title']   = 'Kidzonia International | Dashboard';
        $this->load->view('backend/index.php', $page_data);
    }
    
    // manage sliders

    public function banner($param1 = "", $param2 = "") {
        if ($this->session->userdata('admin_login') != true) {
            redirect(site_url('login'), 'refresh');
        }
        if ($param1 == "add_post") {
            $this->crud_model->add_banner($param2);
        } elseif ($param1 == "edit_post") {
            $this->crud_model->edit_banner($param2);
        } elseif ($param1 == "delete") {
            $this->crud_model->delete_banner($param2);
            redirect(site_url('admin/banner'), 'refresh');
        }else {
            
            $page_data['navigate']  = 'home_section';
            $page_data['count_slider']  = $this->crud_model->get_banner_count()->num_rows();
            $page_data['page_name']  = 'banner';
            $page_data['page_title'] = 'Kidzonia International | Banner';
            $this->load->view('backend/index', $page_data);
        }
    }  
      
    public function banner_form($param1 = "", $param2 = "") {
        if ($this->session->userdata('admin_login') != true) {
          redirect(site_url('login'), 'refresh');
        }        
         
        if ($param1 == 'add') {            
            $page_data['page_name']     = 'banner_add';
            $page_data['navigate']  = 'home_section';
            $page_data['page_title']    = 'Kidzonia International | Add Banner';
            $this->load->view('backend/index', $page_data);
        }
        elseif ($param1 == 'edit') {
            $data                       = $this->crud_model->get_banner_by_id($param2)->row_array();
            $page_data['data']          = $data;
            $page_data['page_name']     = 'banner_edit';
            $page_data['navigate']  = 'home_section';
            $page_data['id']            = $param2;
            $page_data['page_title']    = 'Kidzonia International | Edit Banner';
            $this->load->view('backend/index', $page_data);
        }
    }

    public function get_banner()  { 
        if ($this->input->is_ajax_request()) {
            $this->crud_model->get_banner();
        }
    }
    
    // About US
    public function about_us($param1 = "", $param2 = "")
    {
        if ($this->session->userdata('admin_login') != true) {
            redirect(site_url('login'), 'refresh');
        }
        if ($param1 == "add_post") {
            $this->crud_model->add_about_us($param2);
        } elseif ($param1 == "edit_post") {
            $this->crud_model->edit_about_us($param2);
        } elseif ($param1 == "delete") {
            $this->crud_model->delete_about_us($param2);
            redirect(site_url('admin/about-us'), 'refresh');
        } else {
            $page_data['navigate']  = 'about_us';
            $page_data['page_name']  = 'about_us';
            $page_data['page_title'] = 'Kidzonia International | About Us';
            $this->load->view('backend/index', $page_data);
        }
    }

    public function about_us_form($param1 = "", $param2 = "")
    {
        if ($this->session->userdata('admin_login') != true) {
            redirect(site_url('login'), 'refresh');
        }

        if ($param1 == 'add') {
            $page_data['navigate']  = 'about_us';
            $page_data['page_name']     = 'about_us_add';
            $page_data['page_title']    = 'Kidzonia International | About Us';
            $this->load->view('backend/index', $page_data);
        } elseif ($param1 == 'edit') {
            $page_data['navigate']  = 'about_us';
            $data                       = $this->crud_model->get_about_us_by_id($param2)->row_array();
            $page_data['data']          = $data;
            $page_data['page_name']     = 'about_us_edit';
            $page_data['id']            = $param2;
            $page_data['page_title']    = 'Kidzonia International | About Us';
            $this->load->view('backend/index', $page_data);
        }
    }

    public function get_about_us()
    {
        if ($this->input->is_ajax_request()) {
            $this->crud_model->get_about_us();
        }
    }
    
    // Our Team
    public function our_team($param1 = "", $param2 = "")
    {
        if ($this->session->userdata('admin_login') != true) {
            redirect(site_url('login'), 'refresh');
        }
        if ($param1 == "add_post") {
            $this->crud_model->add_our_team($param2);
        } elseif ($param1 == "edit_post") {
            $this->crud_model->edit_our_team($param2);
        } elseif ($param1 == "delete") {
            $this->crud_model->delete_our_team($param2);
            redirect(site_url('admin/our-team'), 'refresh');
        } else {
            $page_data['navigate']  = 'about_us';
            $page_data['page_name']  = 'our_team';
            $page_data['page_title'] = 'Kidzonia International | Our Team';
            $this->load->view('backend/index', $page_data);
        }
    }

    public function our_team_form($param1 = "", $param2 = "")
    {
        if ($this->session->userdata('admin_login') != true) {
            redirect(site_url('login'), 'refresh');
        }

        if ($param1 == 'add') {
            $page_data['navigate']  = 'about_us';
            $page_data['page_name']     = 'our_team_add';
            $page_data['page_title']    = 'Kidzonia International | Our Team';
            $this->load->view('backend/index', $page_data);
        } elseif ($param1 == 'edit') {
            $page_data['navigate']  = 'about_us';
            $data                       = $this->crud_model->get_our_team_by_id($param2)->row_array();
            $page_data['data']          = $data;
            $page_data['page_name']     = 'our_team_edit';
            $page_data['id']            = $param2;
            $page_data['page_title']    = 'Kidzonia International | Our Team';
            $this->load->view('backend/index', $page_data);
        }
    }

    public function get_our_team()
    {
        if ($this->input->is_ajax_request()) {
            $this->crud_model->get_our_team();
        }
    }
    
    // Our Learning Space
    public function learning_space($param1 = "", $param2 = "")
    {
        if ($this->session->userdata('admin_login') != true) {
            redirect(site_url('login'), 'refresh');
        }
        if ($param1 == "add_post") {
            $this->crud_model->add_learning_space($param2);
        } elseif ($param1 == "edit_post") {
            $this->crud_model->edit_learning_space($param2);
        } elseif ($param1 == "delete") {
            $this->crud_model->delete_learning_space($param2);
            redirect(site_url('admin/about-us'), 'refresh');
        } else {
            $page_data['navigate']  = 'learning_space';
            $page_data['page_name']  = 'learning_space';
            $page_data['page_title'] = 'Kidzonia International | Our Learning Spaces & Amenities';
            $this->load->view('backend/index', $page_data);
        }
    }

    public function learning_space_form($param1 = "", $param2 = "")
    {
        if ($this->session->userdata('admin_login') != true) {
            redirect(site_url('login'), 'refresh');
        }

        if ($param1 == 'add') {
            $page_data['navigate']  = 'learning_space';
            $page_data['page_name']     = 'learning_space_add';
            $page_data['page_title']    = 'Kidzonia International | Our Learning Spaces & Amenities';
            $this->load->view('backend/index', $page_data);
        } elseif ($param1 == 'edit') {
            $page_data['navigate']  = 'learning_space';
            $data                       = $this->crud_model->get_learning_space_by_id($param2)->row_array();
            $page_data['data']          = $data;
            $page_data['page_name']     = 'learning_space_edit';
            $page_data['id']            = $param2;
            $page_data['page_title']    = 'Kidzonia International | Our Learning Spaces & Amenities';
            $this->load->view('backend/index', $page_data);
        }
    }

    public function get_learning_space()
    {
        if ($this->input->is_ajax_request()) {
            $this->crud_model->get_learning_space();
        }
    }
    
    
    // Curriculum Slider
    public function curriculum_slider($param1 = "", $param2 = "")
    {
        if ($this->session->userdata('admin_login') != true) {
            redirect(site_url('login'), 'refresh');
        }
        if ($param1 == "add_post") {
            $this->crud_model->add_curriculum_slider($param2);
        } elseif ($param1 == "edit_post") {
            $this->crud_model->edit_curriculum_slider($param2);
        } elseif ($param1 == "delete") {
            $this->crud_model->delete_curriculum_slider($param2);
            redirect(site_url('admin/curriculum-slider'), 'refresh');
        } else {
            $page_data['navigate']  = 'our_curriculum';
            $page_data['page_name']  = 'curriculum_slider';
            $page_data['page_title'] = 'Kidzonia International | Curriculum Slider';
            $this->load->view('backend/index', $page_data);
        }
    }

    public function curriculum_slider_form($param1 = "", $param2 = "")
    {
        if ($this->session->userdata('admin_login') != true) {
            redirect(site_url('login'), 'refresh');
        }

        if ($param1 == 'add') {
            $page_data['navigate']  = 'our_curriculum';
            $page_data['page_name']     = 'curriculum_slider_add';
            $page_data['page_title']    = 'Kidzonia International | Curriculum Slider';
            $this->load->view('backend/index', $page_data);
        } elseif ($param1 == 'edit') {
            $page_data['navigate']  = 'our_curriculum';
            $data                       = $this->crud_model->get_curriculum_slider_by_id($param2)->row_array();
            $page_data['data']          = $data;
            $page_data['page_name']     = 'curriculum_slider_edit';
            $page_data['id']            = $param2;
            $page_data['page_title']    = 'Kidzonia International | Curriculum Slider';
            $this->load->view('backend/index', $page_data);
        }
    }

    public function get_curriculum_slider()
    {
        if ($this->input->is_ajax_request()) {
            $this->crud_model->get_curriculum_slider();
        }
    }
        
    // Programmes Content
    public function programmes_content($param1 = "", $param2 = "")
    {
        if ($this->session->userdata('admin_login') != true) {
            redirect(site_url('login'), 'refresh');
        }
        if ($param1 == "add_post") {
            $this->crud_model->add_programmes_content($param2);
        } elseif ($param1 == "edit_post") {
            $this->crud_model->edit_programmes_content($param2);
        } elseif ($param1 == "delete") {
            $this->crud_model->delete_programmes_content($param2);
            redirect(site_url('admin/programmes-content'), 'refresh');
        } else {
            $page_data['navigate']  = 'our_programmes';
            $page_data['page_name']  = 'programmes_content';
            $page_data['page_title'] = 'Kidzonia International | Programmes Content';
            $this->load->view('backend/index', $page_data);
        }
    }

    public function programmes_content_form($param1 = "", $param2 = "")
    {
        if ($this->session->userdata('admin_login') != true) {
            redirect(site_url('login'), 'refresh');
        }

        if ($param1 == 'add') {
            $page_data['navigate']  = 'our_programmes';
            $page_data['page_name']     = 'programmes_content_add';
            $page_data['page_title']    = 'Kidzonia International | Programmes Content';
            $this->load->view('backend/index', $page_data);
        } elseif ($param1 == 'edit') {
            $page_data['navigate']  = 'our_programmes';
            $data                       = $this->crud_model->get_programmes_content_by_id($param2)->row_array();
            $page_data['data']          = $data;
            $page_data['page_name']     = 'programmes_content_edit';
            $page_data['id']            = $param2;
            $page_data['page_title']    = 'Kidzonia International | Programmes Content';
            $this->load->view('backend/index', $page_data);
        }
    }

    public function get_programmes_content()
    {
        if ($this->input->is_ajax_request()) {
            $this->crud_model->get_programmes_content();
        }
    }
        
    // Programmes Content
    public function programmes_icon($param1 = "", $param2 = "")
    {
        if ($this->session->userdata('admin_login') != true) {
            redirect(site_url('login'), 'refresh');
        }
        if ($param1 == "add_post") {
            $this->crud_model->add_programmes_icon($param2);
        } elseif ($param1 == "edit_post") {
            $this->crud_model->edit_programmes_icon($param2);
        } elseif ($param1 == "delete") {
            $this->crud_model->delete_programmes_icon($param2);
            redirect(site_url('admin/programmes-icon'), 'refresh');
        } else {
            $page_data['navigate']  = 'our_programmes';
            $page_data['page_name']  = 'programmes_icon';
            $page_data['page_title'] = 'Kidzonia International | Programmes Icon';
            $this->load->view('backend/index', $page_data);
        }
    }

    public function programmes_icon_form($param1 = "", $param2 = "")
    {
        if ($this->session->userdata('admin_login') != true) {
            redirect(site_url('login'), 'refresh');
        }

        if ($param1 == 'add') {
            $page_data['navigate']  = 'our_programmes';
            $page_data['page_name']     = 'programmes_icon_add';
            $page_data['page_title']    = 'Kidzonia International | Programmes Icon';
            $this->load->view('backend/index', $page_data);
        } elseif ($param1 == 'edit') {
            $page_data['navigate']  = 'our_programmes';
            $data                       = $this->crud_model->get_programmes_icon_by_id($param2)->row_array();
            $page_data['data']          = $data;
            $page_data['page_name']     = 'programmes_icon_edit';
            $page_data['id']            = $param2;
            $page_data['page_title']    = 'Kidzonia International | Programmes Icon';
            $this->load->view('backend/index', $page_data);
        }
    }

    public function get_programmes_icon()
    {
        if ($this->input->is_ajax_request()) {
            $this->crud_model->get_programmes_icon();
        }
    }
        
    // Day at kidzonia
    public function kidzonia_day($param1 = "", $param2 = "")
    {
        if ($this->session->userdata('admin_login') != true) {
            redirect(site_url('login'), 'refresh');
        }
        if ($param1 == "add_post") {
            $this->crud_model->add_kidzonia_day($param2);
        } elseif ($param1 == "edit_post") {
            $this->crud_model->edit_kidzonia_day($param2);
        } elseif ($param1 == "delete") {
            $this->crud_model->delete_kidzonia_day($param2);
            redirect(site_url('admin/kidzonia-day'), 'refresh');
        } else {
            $page_data['navigate']  = 'kidzonia_day';
            $page_data['page_name']  = 'kidzonia_day';
            $page_data['page_title'] = 'Kidzonia International | Kidzonia Day';
            $this->load->view('backend/index', $page_data);
        }
    }

    public function kidzonia_day_form($param1 = "", $param2 = "")
    {
        if ($this->session->userdata('admin_login') != true) {
            redirect(site_url('login'), 'refresh');
        }

        if ($param1 == 'add') {
            $page_data['navigate']  = 'kidzonia_day';
            $page_data['page_name']     = 'kidzonia_day_add';
            $page_data['page_title']    = 'Kidzonia International | Programmes Content';
            $this->load->view('backend/index', $page_data);
        } elseif ($param1 == 'edit') {
            $page_data['navigate']  = 'kidzonia_day';
            $data                       = $this->crud_model->get_kidzonia_day_by_id($param2)->row_array();
            $page_data['data']          = $data;
            $page_data['page_name']     = 'kidzonia_day_edit';
            $page_data['id']            = $param2;
            $page_data['page_title']    = 'Kidzonia International | Kidzonia Day';
            $this->load->view('backend/index', $page_data);
        }
    }

    public function get_kidzonia_day()
    {
        if ($this->input->is_ajax_request()) {
            $this->crud_model->get_kidzonia_day();
        }
    }
    
    // Kidzonia Commits
    public function kidzonia_commits($param1 = "", $param2 = "")
    {
        if ($this->session->userdata('admin_login') != true) {
            redirect(site_url('login'), 'refresh');
        }
        if ($param1 == "add_post") {
            $this->crud_model->add_kidzonia_commits($param2);
        } elseif ($param1 == "edit_post") {
            $this->crud_model->edit_kidzonia_commits($param2);
        } elseif ($param1 == "delete") {
            $this->crud_model->delete_kidzonia_commits($param2);
            redirect(site_url('admin/kidzonia-commits'), 'refresh');
        } else {
            $page_data['navigate']  = 'kidzonia_commits';
            $page_data['page_name']  = 'kidzonia_commits';
            $page_data['page_title'] = 'Kidzonia International | Kidzonia Commits';
            $this->load->view('backend/index', $page_data);
        }
    }

    public function kidzonia_commits_form($param1 = "", $param2 = "")
    {
        if ($this->session->userdata('admin_login') != true) {
            redirect(site_url('login'), 'refresh');
        }

        if ($param1 == 'add') {
            $page_data['navigate']  = 'kidzonia_commits';
            $page_data['page_name']     = 'kidzonia_commits_add';
            $page_data['page_title']    = 'Kidzonia International | Kidzonia Commits';
            $this->load->view('backend/index', $page_data);
        } elseif ($param1 == 'edit') {
            $page_data['navigate']  = 'kidzonia_commits';
            $data                       = $this->crud_model->get_kidzonia_commits_by_id($param2)->row_array();
            $page_data['data']          = $data;
            $page_data['page_name']     = 'kidzonia_commits_edit';
            $page_data['id']            = $param2;
            $page_data['page_title']    = 'Kidzonia International | Kidzonia Commits';
            $this->load->view('backend/index', $page_data);
        }
    }

    public function get_kidzonia_commits()
    {
        if ($this->input->is_ajax_request()) {
            $this->crud_model->get_kidzonia_commits();
        }
    }
    
    // Ixplore
    public function ixplore($param1 = "", $param2 = "")
    {
        if ($this->session->userdata('admin_login') != true) {
            redirect(site_url('login'), 'refresh');
        }
        if ($param1 == "add_post") {
            $this->crud_model->add_ixplore($param2);
        } elseif ($param1 == "edit_post") {
            $this->crud_model->edit_ixplore($param2);
        } elseif ($param1 == "delete") {
            $this->crud_model->delete_ixplore($param2);
            redirect(site_url('admin/ixplore'), 'refresh');
        } else {
            $page_data['navigate']  = 'ixplore';
            $page_data['page_name']  = 'ixplore';
            $page_data['page_title'] = 'Kidzonia International | Ixplore';
            $this->load->view('backend/index', $page_data);
        }
    }

    public function ixplore_form($param1 = "", $param2 = "")
    {
        if ($this->session->userdata('admin_login') != true) {
            redirect(site_url('login'), 'refresh');
        }

        if ($param1 == 'add') {
            $page_data['navigate']  = 'ixplore';
            $page_data['page_name']     = 'ixplore_add';
            $page_data['page_title']    = 'Kidzonia International | Ixplore';
            $this->load->view('backend/index', $page_data);
        } elseif ($param1 == 'edit') {
            $page_data['navigate']  = 'ixplore';
            $data                       = $this->crud_model->get_ixplore_by_id($param2)->row_array();
            $page_data['data']          = $data;
            $page_data['page_name']     = 'ixplore_edit';
            $page_data['id']            = $param2;
            $page_data['page_title']    = 'Kidzonia International | Ixplore';
            $this->load->view('backend/index', $page_data);
        }
    }

    public function get_ixplore()
    {
        if ($this->input->is_ajax_request()) {
            $this->crud_model->get_ixplore();
        }
    }
    
    // Whizkids
    public function whizkids($param1 = "", $param2 = "")
    {
        if ($this->session->userdata('admin_login') != true) {
            redirect(site_url('login'), 'refresh');
        }
        if ($param1 == "add_post") {
            $this->crud_model->add_whizkids($param2);
        } elseif ($param1 == "edit_post") {
            $this->crud_model->edit_whizkids($param2);
        } elseif ($param1 == "delete") {
            $this->crud_model->delete_whizkids($param2);
            redirect(site_url('admin/whizkids'), 'refresh');
        } else {
            $page_data['navigate']  = 'whizkids';
            $page_data['page_name']  = 'whizkids';
            $page_data['page_title'] = 'Kidzonia International | Whizkids';
            $this->load->view('backend/index', $page_data);
        }
    }

    public function whizkids_form($param1 = "", $param2 = "")
    {
        if ($this->session->userdata('admin_login') != true) {
            redirect(site_url('login'), 'refresh');
        }

        if ($param1 == 'add') {
            $page_data['navigate']  = 'whizkids';
            $page_data['page_name']     = 'whizkids_add';
            $page_data['page_title']    = 'Kidzonia International | Whizkids';
            $this->load->view('backend/index', $page_data);
        } elseif ($param1 == 'edit') {
            $page_data['navigate']  = 'whizkids';
            $data                       = $this->crud_model->get_whizkids_by_id($param2)->row_array();
            $page_data['data']          = $data;
            $page_data['page_name']     = 'whizkids_edit';
            $page_data['id']            = $param2;
            $page_data['page_title']    = 'Kidzonia International | Whizkids';
            $this->load->view('backend/index', $page_data);
        }
    }

    public function get_whizkids()
    {
        if ($this->input->is_ajax_request()) {
            $this->crud_model->get_whizkids();
        }
    }
    
    // Admissions
    public function admissions($param1 = "", $param2 = "")
    {
        if ($this->session->userdata('admin_login') != true) {
            redirect(site_url('login'), 'refresh');
        }
        if ($param1 == "add_post") {
            $this->crud_model->add_admissions($param2);
        } elseif ($param1 == "edit_post") {
            $this->crud_model->edit_admissions($param2);
        } elseif ($param1 == "delete") {
            $this->crud_model->delete_admissions($param2);
            redirect(site_url('admin/admissions'), 'refresh');
        } else {
            $page_data['navigate']  = 'admissions';
            $page_data['page_name']  = 'admissions';
            $page_data['page_title'] = 'Kidzonia International | Admissions';
            $this->load->view('backend/index', $page_data);
        }
    }

    public function admissions_form($param1 = "", $param2 = "")
    {
        if ($this->session->userdata('admin_login') != true) {
            redirect(site_url('login'), 'refresh');
        }

        if ($param1 == 'add') {
            $page_data['navigate']  = 'admissions';
            $page_data['page_name']     = 'admissions_add';
            $page_data['page_title']    = 'Kidzonia International | Admissions';
            $this->load->view('backend/index', $page_data);
        } elseif ($param1 == 'edit') {
            $page_data['navigate']  = 'admissions';
            $data                       = $this->crud_model->get_admissions_by_id($param2)->row_array();
            $page_data['data']          = $data;
            $page_data['page_name']     = 'admissions_edit';
            $page_data['id']            = $param2;
            $page_data['page_title']    = 'Kidzonia International | Admissions';
            $this->load->view('backend/index', $page_data);
        }
    }

    public function get_admissions()
    {
        if ($this->input->is_ajax_request()) {
            $this->crud_model->get_admissions();
        }
    }
    
    
    // Our Teachers
    public function our_teachers($param1 = "", $param2 = "")
    {
        if ($this->session->userdata('admin_login') != true) {
            redirect(site_url('login'), 'refresh');
        }
        if ($param1 == "add_post") {
            $this->crud_model->add_our_teachers($param2);
        } elseif ($param1 == "edit_post") {
            $this->crud_model->edit_our_teachers($param2);
        } elseif ($param1 == "delete") {
            $this->crud_model->delete_our_teachers($param2);
            redirect(site_url('admin/our-teachers'), 'refresh');
        } else {
            $page_data['navigate']  = 'our_teachers';
            $page_data['page_name']  = 'our_teachers';
            $page_data['page_title'] = 'Kidzonia International | Our Teachers';
            $this->load->view('backend/index', $page_data);
        }
    }

    public function our_teachers_form($param1 = "", $param2 = "")
    {
        if ($this->session->userdata('admin_login') != true) {
            redirect(site_url('login'), 'refresh');
        }

        if ($param1 == 'add') {
            $page_data['navigate']  = 'our_teachers';
            $page_data['page_name']     = 'our_teachers_add';
            $page_data['page_title']    = 'Kidzonia International | Our Teachers';
            $this->load->view('backend/index', $page_data);
        } elseif ($param1 == 'edit') {
            $page_data['navigate']  = 'our_teachers';
            $data                       = $this->crud_model->get_our_teachers_by_id($param2)->row_array();
            $page_data['data']          = $data;
            $page_data['page_name']     = 'our_teachers_edit';
            $page_data['id']            = $param2;
            $page_data['page_title']    = 'Kidzonia International | Our Teachers';
            $this->load->view('backend/index', $page_data);
        }
    }

    public function get_our_teachers()
    {
        if ($this->input->is_ajax_request()) {
            $this->crud_model->get_our_teachers();
        }
    }
         
    // About Curriculum
    
    public function about_curriculum($param1 = "", $param2 = "")
    {
        if ($this->session->userdata('admin_login') != true) {
            redirect(site_url('login'), 'refresh');
        } else if ($param1 == 'update') {
            $this->crud_model->update_about_curriculum($param2);
        } else {
            $page_data['navigate']      = 'our_curriculum';
            $page_data['id']            = $param1;
            $page_data['data']          = $this->common_model->getRowByParentId('about_curriculum', '*', '1', 'id');
            $page_data['page_name']     = 'about_curriculum';
            $page_data['page_title']    = 'Kidzonia International | About Curriculum';
            $this->load->view('backend/index', $page_data);
        }
    }
    
    // Home About 
    
    public function home_about($param1 = "", $param2 = "")
    {
        if ($this->session->userdata('admin_login') != true) {
            redirect(site_url('login'), 'refresh');
        } else if ($param1 == 'update') {
            $this->crud_model->update_home_about($param2);
        } else {
            $page_data['navigate']  = 'home_section';
            $page_data['id']            = $param1;
            $page_data['data']          = $this->common_model->getRowByParentId('home_about', '*', '1', 'id');
            $page_data['page_name']     = 'home_about';
            $page_data['page_title']    = 'Kidzonia International | About US';
            $this->load->view('backend/index', $page_data);
        }
    }
    
    // manage sliders

    public function sliders($param1 = "", $param2 = "") {
        if ($this->session->userdata('admin_login') != true) {
            redirect(site_url('login'), 'refresh');
        }
        if ($param1 == "add_post") {
            $this->crud_model->add_sliders($param2);
        } elseif ($param1 == "edit_post") {
            $this->crud_model->edit_sliders($param2);
        } elseif ($param1 == "delete") {
            $this->crud_model->delete_sliders($param2);
            redirect(site_url('admin/pop-up'), 'refresh');
        }else {
            
            $page_data['count_slider']  = $this->crud_model->get_sliders_count()->num_rows();
            $page_data['page_name']  = 'sliders';
            $page_data['page_title'] = 'Kidzonia International | Pop-Up Banner';
            $this->load->view('backend/index', $page_data);
        }
    }  
      
    public function sliders_form($param1 = "", $param2 = "") {
        if ($this->session->userdata('admin_login') != true) {
          redirect(site_url('login'), 'refresh');
        }        
         
        if ($param1 == 'add') {            
            $page_data['page_name']     = 'sliders_add';
            $page_data['page_title']    = 'Kidzonia International | Add Pop-Up Banner';
            $this->load->view('backend/index', $page_data);
        }
        elseif ($param1 == 'edit') {
            $data                       = $this->crud_model->get_sliders_by_id($param2)->row_array();
            $page_data['data']          = $data;
            $page_data['page_name']     = 'sliders_edit';
            $page_data['id']            = $param2;
            $page_data['page_title']    = 'Kidzonia International | Edit Pop-Up Banner';
            $this->load->view('backend/index', $page_data);
        }
    }

    public function get_sliders()  { 
        if ($this->input->is_ajax_request()) {
            $this->crud_model->get_sliders();
        }
    }
    
    // Manage Brochure Enquiry
    public function brochure_enquiry($param1 = "", $param2 = "") {
        if ($this->session->userdata('admin_login') != true) {
            redirect(site_url('login'), 'refresh');
        }
        elseif ($param1 == "delete") {
            $this->crud_model->delete_brochure_enquiry($param2);
            redirect(site_url('admin/brochure-enquiry'), 'refresh');
        }else {
            $page_data['page_name']  = 'brochure_enquiry';
            $page_data['page_title'] = 'Kidzonia International | Brochure Enquiry';
            $this->load->view('backend/index', $page_data);
        }
    } 
    
    public function get_brochure_enquiry() { 
        if ($this->input->is_ajax_request()) {
            $this->crud_model->get_brochure_enquiry();
        }
    }
    
    // Manage Admission Enquiry
    public function admission_enquiry($param1 = "", $param2 = "") {
        if ($this->session->userdata('admin_login') != true) {
            redirect(site_url('login'), 'refresh');
        }
        elseif ($param1 == "delete") {
            $this->crud_model->delete_admission_enquiry($param2);
            redirect(site_url('admin/admission-enquiry'), 'refresh');
        }else {
            $page_data['page_name']  = 'admission_enquiry';
            $page_data['page_title'] = 'Kidzonia International | Admission Enquiry';
            $this->load->view('backend/index', $page_data);
        }
    }
    
    public function get_admission_enquiry() { 
        if ($this->input->is_ajax_request()) {
            $this->crud_model->get_admission_enquiry();
        }
    }
    
    // Manage Youtube Enquiry
    public function youtube_enquiry($param1 = "", $param2 = "") {
        if ($this->session->userdata('admin_login') != true) {
            redirect(site_url('login'), 'refresh');
        }
        elseif ($param1 == "delete") {
            $this->crud_model->delete_youtube_enquiry($param2);
            redirect(site_url('admin/youtube-enquiry'), 'refresh');
        }else {
            $page_data['page_name']  = 'youtube_enquiry';
            $page_data['page_title'] = 'Kidzonia International | Youtube Enquiry';
            $this->load->view('backend/index', $page_data);
        }
    }
    
    public function get_youtube_enquiry() { 
        if ($this->input->is_ajax_request()) {
            $this->crud_model->get_youtube_enquiry();
        }
    }
    
    // Manage Summer Camp Enquiry
    public function summer_camp_enquiry($param1 = "", $param2 = "") {
        if ($this->session->userdata('admin_login') != true) {
            redirect(site_url('login'), 'refresh');
        }
        elseif ($param1 == "delete") {
            $this->crud_model->delete_summer_camp_enquiry($param2);
            redirect(site_url('admin/summer-camp-enquiry'), 'refresh');
        }else {
            $page_data['page_name']  = 'summer_camp_enquiry';
            $page_data['page_title'] = 'Kidzonia International | Summer Camp Enquiry';
            $this->load->view('backend/index', $page_data);
        }
    }
    
    public function get_summer_camp_enquiry() { 
        if ($this->input->is_ajax_request()) {
            $this->crud_model->get_summer_camp_enquiry();
        }
    }
    
    // Manage Callback Enquiry
    public function callback_enquiry($param1 = "", $param2 = "") {
        if ($this->session->userdata('admin_login') != true) {
            redirect(site_url('login'), 'refresh');
        }
        elseif ($param1 == "delete") {
            $this->crud_model->delete_callback_enquiry($param2);
            redirect(site_url('admin/callback-enquiry'), 'refresh');
        }else {
            $page_data['page_name']  = 'callback_enquiry';
            $page_data['page_title'] = 'Kidzonia International | Callback Enquiry';
            $this->load->view('backend/index', $page_data);
        }
    }
    
    public function get_callback_enquiry() { 
        if ($this->input->is_ajax_request()) {
            $this->crud_model->get_callback_enquiry();
        }
    }
    
    // Manage Registered Event Enquiry
    public function registered_event($param1 = "", $param2 = "") {
        if ($this->session->userdata('admin_login') != true) {
            redirect(site_url('login'), 'refresh');
        }
        elseif ($param1 == "delete") {
            $this->crud_model->delete_reg_evnt_enquiry($param2);
            redirect(site_url('admin/registered-event'), 'refresh');
        }else {
            $page_data['page_name']  = 'registered_event';
            $page_data['page_title'] = 'Kidzonia International | Registered Event Enquiry';
            $this->load->view('backend/index', $page_data);
        }
    }
    
    public function get_registered_event() { 
        if ($this->input->is_ajax_request()) {
            $this->crud_model->get_registered_event();
        }
    }
    
    // Manage Career Enquiry
    public function career_enquiry($param1 = "", $param2 = "") {
        if ($this->session->userdata('admin_login') != true) {
            redirect(site_url('login'), 'refresh');
        }
        elseif ($param1 == "delete") {
            $this->crud_model->delete_career_enquiry($param2);
            redirect(site_url('admin/career-enquiry'), 'refresh');
        }else {
            $page_data['page_name']  = 'career_enquiry';
            $page_data['page_title'] = 'Kidzonia International | Careers Enquiry';
            $this->load->view('backend/index', $page_data);
        }
    }
    
    public function get_career_enquiry() { 
        if ($this->input->is_ajax_request()) {
            $this->crud_model->get_career_enquiry();
        }
    }
    
    // Manage Career
    public function careers($param1 = "", $param2 = "") {
        if ($this->session->userdata('admin_login') != true) {
            redirect(site_url('login'), 'refresh');
        }
        if ($param1 == "add_post") {
            $this->crud_model->add_careers($param2);
        } elseif ($param1 == "edit_post") {
            $this->crud_model->edit_careers($param2);
        } elseif ($param1 == "delete") {
            $this->crud_model->delete_careers($param2);
            redirect(site_url('admin/careers'), 'refresh');
        }else {
            $page_data['page_name']  = 'careers';
            $page_data['page_title'] = 'Kidzonia International | Careers';
            $this->load->view('backend/index', $page_data);
        }
    } 

    public function careers_form($param1 = "", $param2 = "") {
        if ($this->session->userdata('admin_login') != true) {
          redirect(site_url('login'), 'refresh');
        }        
         
        if ($param1 == 'add') {            
            $page_data['page_name']     = 'careers_add';
            $page_data['page_title']    = 'Kidzonia International | Add Career';
            $this->load->view('backend/index', $page_data);
        }
        elseif ($param1 == 'edit') {
            $data                       = $this->crud_model->get_careers_by_id($param2)->row_array();
            $page_data['data']          = $data;
            $page_data['page_name']     = 'careers_edit';
            $page_data['id']            = $param2;
            $page_data['page_title']    = 'Kidzonia International | Edit Career';
            $this->load->view('backend/index', $page_data);
        }
    }

    public function get_careers() { 
        if ($this->input->is_ajax_request()) {
            $this->crud_model->get_careers();
        }
    }
    
    // Manage Parent Testimonial
    public function parents_testimonials($param1 = "", $param2 = "") {
        if ($this->session->userdata('admin_login') != true) {
            redirect(site_url('login'), 'refresh');
        }
        if ($param1 == "add_post") {
            $this->crud_model->add_parents_testimonials($param2);
        } elseif ($param1 == "edit_post") {
            $this->crud_model->edit_parents_testimonials($param2);
        } elseif ($param1 == "delete") {
            $this->crud_model->delete_parents_testimonials($param2);
            redirect(site_url('admin/parents-testimonials'), 'refresh');
        }else {
            $page_data['page_name']  = 'parents_testimonials';
            $page_data['page_title'] = 'Kidzonia International | Parent Testimonial';
            $this->load->view('backend/index', $page_data);
        }
    } 

    public function parents_testimonials_form($param1 = "", $param2 = "") {
        if ($this->session->userdata('admin_login') != true) {
          redirect(site_url('login'), 'refresh');
        }        
         
        if ($param1 == 'add') {            
            $page_data['branches']     = $this->crud_model->get_branch()->result_array();
            $page_data['page_name']     = 'parents_testimonials_add';
            $page_data['page_title']    = 'Kidzonia International | Add Parent Testimonial';
            $this->load->view('backend/index', $page_data);
        }
        elseif ($param1 == 'edit') {
            $page_data['branches']     = $this->crud_model->get_branch()->result_array();
            $data                       = $this->crud_model->get_parents_testimonials_by_id($param2)->row_array();
            $page_data['data']          = $data;
            $page_data['page_name']     = 'parents_testimonials_edit';
            $page_data['id']            = $param2;
            $page_data['page_title']    = 'Kidzonia International | Edit Parent Testimonial';
            $this->load->view('backend/index', $page_data);
        }
    }

    public function get_parents_testimonials()  { 
        if ($this->input->is_ajax_request()) {
            $this->crud_model->get_parents_testimonials();
        }
    }

    // Manage Awards and Recognization

    public function awards_and_recognitions($param1 = "", $param2 = "") {
        if ($this->session->userdata('admin_login') != true) {
            redirect(site_url('login'), 'refresh');
        }
        if ($param1 == "add_post") {
            $this->crud_model->add_awards_and_recognitions($param2);
        } elseif ($param1 == "edit_post") {
            $this->crud_model->edit_awards_and_recognitions($param2);
        } elseif ($param1 == "delete") {
            $this->crud_model->delete_awards_and_recognitions($param2);
            redirect(site_url('admin/awards-and-recognitions'), 'refresh');
        }else {
            $page_data['page_name']  = 'awards_and_recognitions';
            $page_data['page_title'] = 'Kidzonia International | Awards & Recognitions';
            $this->load->view('backend/index', $page_data);
        }
    } 
      
    public function awards_and_recognitions_form($param1 = "", $param2 = "") {
        if ($this->session->userdata('admin_login') != true) {
          redirect(site_url('login'), 'refresh');
        }        
         
        if ($param1 == 'add') {            
            $page_data['page_name']     = 'awards_and_recognitions_add';
            $page_data['page_title']    = 'Kidzonia International | Add Awards & Recognization';
            $this->load->view('backend/index', $page_data);
        }
        elseif ($param1 == 'edit') {
            $data                       = $this->crud_model->get_awards_and_recognitions_by_id($param2)->row_array();
            $page_data['data']          = $data;
            $page_data['page_name']     = 'awards_and_recognitions_edit';
            $page_data['id']            = $param2;
            $page_data['page_title']    = 'Kidzonia International | Edit Awards & Recognization';
            $this->load->view('backend/index', $page_data);
        }
    }

    public function get_awards_and_recognitions()  { 
        if ($this->input->is_ajax_request()) {
            $this->crud_model->get_awards_and_recognitions();
        }
    }
    
    // Manage Achievements

    public function achievements($param1 = "", $param2 = "") {
        if ($this->session->userdata('admin_login') != true) {
            redirect(site_url('login'), 'refresh');
        }
        if ($param1 == "add_post") {
            $this->crud_model->add_achievements($param2);
        } elseif ($param1 == "edit_post") {
            $this->crud_model->edit_achievements($param2);
        } elseif ($param1 == "delete") {
            $this->crud_model->delete_achievements($param2); 
            redirect(site_url('admin/achievements'), 'refresh');
        }else {
            $page_data['page_name']  = 'achievements';
            $page_data['page_title'] = 'Kidzonia International | Achievements';
            $this->load->view('backend/index', $page_data);
        }
    } 
      
    public function achievements_form($param1 = "", $param2 = "") {
        if ($this->session->userdata('admin_login') != true) {
          redirect(site_url('login'), 'refresh');
        }        
         
        if ($param1 == 'add') {            
            $page_data['page_name']     = 'achievements_add';
            $page_data['page_title']    = 'Kidzonia International | Add Achievement';
            $this->load->view('backend/index', $page_data);
        }
        elseif ($param1 == 'edit') {
            $data                       = $this->crud_model->get_achievements_by_id($param2)->row_array();
            $page_data['data']          = $data;
            $page_data['page_name']     = 'achievements_edit';
            $page_data['id']            = $param2;
            $page_data['page_title']    = 'Kidzonia International | Edit Achievements';
            $this->load->view('backend/index', $page_data);
        }
    }

    public function get_achievements()  { 
        if ($this->input->is_ajax_request()) {
            $this->crud_model->get_achievements();
        }
    }
    
    // Manage Awards and Recognization

    public function print_media($param1 = "", $param2 = "") {
        if ($this->session->userdata('admin_login') != true) {
            redirect(site_url('login'), 'refresh');
        }
        if ($param1 == "add_post") {
            $this->crud_model->add_print_media($param2);
        } elseif ($param1 == "edit_post") {
            $this->crud_model->edit_print_media($param2);
        } elseif ($param1 == "delete") {
            $this->crud_model->delete_print_media($param2);
            redirect(site_url('admin/print-media'), 'refresh');
        }else {
            $page_data['page_name']  = 'print_media';
            $page_data['page_title'] = 'Kidzonia International | Print Media';
            $this->load->view('backend/index', $page_data);
        }
    } 
      
    public function print_media_form($param1 = "", $param2 = "") {
        if ($this->session->userdata('admin_login') != true) {
          redirect(site_url('login'), 'refresh');
        }        
         
        if ($param1 == 'add') {            
            $page_data['page_name']     = 'print_media_add';
            $page_data['page_title']    = 'Kidzonia International | Add Print Media';
            $this->load->view('backend/index', $page_data);
        }
        elseif ($param1 == 'edit') {
            $data                       = $this->crud_model->get_print_media_by_id($param2)->row_array();
            $page_data['data']          = $data;
            $page_data['page_name']     = 'print_media_edit';
            $page_data['id']            = $param2;
            $page_data['page_title']    = 'Kidzonia International | Edit Print Media';
            $this->load->view('backend/index', $page_data);
        }
    }

    public function get_print_media()  { 
        if ($this->input->is_ajax_request()) {
            $this->crud_model->get_print_media();
        }
    }
    
    // manage category

    public function category($param1 = "", $param2 = "") {
        if ($this->session->userdata('admin_login') != true) {
            redirect(site_url('login'), 'refresh');
        }
        if ($param1 == "add_post") {
            $this->crud_model->add_category($param2);
        } elseif ($param1 == "edit_post") {
            $this->crud_model->edit_category($param2);
        } elseif ($param1 == "delete") {
            $this->crud_model->delete_category($param2);
            redirect(site_url('admin/product-category'), 'refresh');
        }else {
            $page_data['page_name']  = 'category';
            $page_data['page_title'] = 'Kidzonia International | Product Category';
            $this->load->view('backend/index', $page_data);
        }
    }  
      
    public function category_form($param1 = "", $param2 = "") {
        if ($this->session->userdata('admin_login') != true) {
          redirect(site_url('login'), 'refresh');
        }        
         
        if ($param1 == 'add') {            
            $page_data['page_name']     = 'category_add';
            $page_data['page_title']    = 'Kidzonia International | Add Product Category';
            $this->load->view('backend/index', $page_data);
        }
        elseif ($param1 == 'edit') {
            $data                       = $this->crud_model->get_category_by_id($param2)->row_array();
            $page_data['data']          = $data;
            $page_data['page_name']     = 'category_edit';
            $page_data['id']            = $param2;
            $page_data['page_title']    = 'Kidzonia International | Edit Product Category';
            $this->load->view('backend/index', $page_data);
        }
    }

    public function get_category()  { 
        if ($this->input->is_ajax_request()) {
            $this->crud_model->get_category();
        }
    }
    
    // manage portfolio
    
    public function products($param1 = "", $param2 = "") {
        if ($this->session->userdata('admin_login') != true) {
            redirect(site_url('login'), 'refresh');
        }
        if ($param1 == "add_post") {
            $this->crud_model->add_products($param2);
        } elseif ($param1 == "edit_post") {
            $this->crud_model->edit_products($param2);
        } elseif ($param1 == "delete") {
            $this->crud_model->delete_products($param2);
            redirect(site_url('admin/products'), 'refresh');
        }else {
            $page_data['page_name']  = 'products';
            $page_data['page_title'] = 'Kidzonia International | Products';
            $this->load->view('backend/index', $page_data);
        }
    }  
    
    public function products_form($param1 = "", $param2 = "") {
        if ($this->session->userdata('admin_login') != true) {
          redirect(site_url('login'), 'refresh');
        }
        
        $page_data['categories']     = $this->crud_model->get_categories()->result_array();
         
        if ($param1 == 'add') {
            $page_data['page_name']     = 'products_add';
            $page_data['page_title']    = 'Kidzonia International | Add Product';
            $this->load->view('backend/index', $page_data);
        }
        elseif ($param1 == 'edit') {
            $data                       = $this->crud_model->get_products_by_id($param2)->row_array();
            $page_data['data']          = $data;
            $page_data['page_name']     = 'products_edit';
            $page_data['id']            = $param2;
            $page_data['page_title']    = 'Kidzonia International | Edit Product';
            $this->load->view('backend/index', $page_data);
        }
    }

    public function get_products()  { 
        if ($this->input->is_ajax_request()) {
            $this->crud_model->get_products();
        }
    }
    
    // manage events

    public function event($param1 = "", $param2 = "") {
        if ($this->session->userdata('admin_login') != true) {
            redirect(site_url('login'), 'refresh');
        }
        if ($param1 == "add_post") {
            $this->crud_model->add_event($param2);
        } elseif ($param1 == "edit_post") {
            $this->crud_model->edit_event($param2);
        } elseif ($param1 == "delete") {
            $this->crud_model->delete_event($param2);
            redirect(site_url('admin/event'), 'refresh');
        }else {
            $page_data['page_name']  = 'event';
            $page_data['page_title'] = 'Kidzonia International | Events';
            $this->load->view('backend/index', $page_data);
        }
    }  
      
    public function event_form($param1 = "", $param2 = "") {
        if ($this->session->userdata('admin_login') != true) {
          redirect(site_url('login'), 'refresh');
        }        
         
        if ($param1 == 'add') {            
            $page_data['page_name']     = 'event_add';
            $page_data['page_title']    = 'Kidzonia International | Add Event';
            $this->load->view('backend/index', $page_data);
        }
        elseif ($param1 == 'edit') {
            $data                       = $this->crud_model->get_event_by_id($param2)->row_array();
            $page_data['data']          = $data;
            $page_data['page_name']     = 'event_edit';
            $page_data['id']            = $param2;
            $page_data['page_title']    = 'Kidzonia International | Edit Blog';
            $this->load->view('backend/index', $page_data);
        }
    }

    public function get_event()  { 
        if ($this->input->is_ajax_request()) {
            $this->crud_model->get_event();
        }
    }
    
    // manage blogs image

    public function blogs_image($param1 = "", $param2 = "") {
        if ($this->session->userdata('admin_login') != true) {
            redirect(site_url('login'), 'refresh');
        }
        if ($param1 == "add_post") {
            $this->crud_model->add_blogs_image($param2);
        } elseif ($param1 == "delete") {
            $this->crud_model->delete_blogs_image($param2);
            redirect(site_url('admin/blogs-image'), 'refresh');
        } else {
            $page_data['page_name']  = 'blogs_image';
            $page_data['page_title'] = 'Kidzonia International | Blogs Image';
            $this->load->view('backend/index', $page_data);
        }
    }  
      
    public function blogs_image_form($param1 = "", $param2 = "") {
        if ($this->session->userdata('admin_login') != true) {
          redirect(site_url('login'), 'refresh');
        }        
         
        if ($param1 == 'add') {            
            $page_data['page_name']     = 'blogs_image_add';
            $page_data['page_title']    = 'Kidzonia International | Add Blog Image';
            $this->load->view('backend/index', $page_data);
        }
        
    }

    public function get_blogs_image()  { 
        if ($this->input->is_ajax_request()) {
            $this->crud_model->get_blogs_image();
        }
    }
    
    public function digital_news($param1 = "", $param2 = "") {
        if ($this->session->userdata('admin_login') != true) {
            redirect(site_url('login'), 'refresh');
        }
        if ($param1 == "add_post") {
            $this->crud_model->add_digital_news($param2);
        } elseif ($param1 == "edit_post") {
            $this->crud_model->edit_digital_news($param2);
        } elseif ($param1 == "delete") {
            $this->crud_model->delete_digital_news($param2);
            redirect(site_url('admin/digital_news'), 'refresh');
        }else {
            $page_data['page_name']  = 'digital_news';
            $page_data['page_title'] = 'Kidzonia International | Digital News';
            $this->load->view('backend/index', $page_data);
        }
    }  
      
    public function digital_news_form($param1 = "", $param2 = "") {
        if ($this->session->userdata('admin_login') != true) {
            redirect(site_url('login'), 'refresh');
        }        
         
        if ($param1 == 'add') {            
            $page_data['page_name']     = 'digital_news_add';
            $page_data['page_title']    = 'Kidzonia International | Add Digital News';
            $this->load->view('backend/index', $page_data);
        }
        elseif ($param1 == 'edit') {
            $data                       = $this->crud_model->get_digital_news_by_id($param2)->row_array();
            $page_data['data']          = $data;
            $page_data['page_name']     = 'digital_news_edit';
            $page_data['id']            = $param2;
            $page_data['page_title']    = 'Kidzonia International | Edit Digital News';
            $this->load->view('backend/index', $page_data);
        }
    }

    public function get_digital_news()  { 
        if ($this->input->is_ajax_request()) {
            $this->crud_model->get_digital_news();
        }
    }
    
    // manage blogs

    public function blogs($param1 = "", $param2 = "") {
        if ($this->session->userdata('admin_login') != true) {
            redirect(site_url('login'), 'refresh');
        }
        if ($param1 == "add_post") {
            $this->crud_model->add_blogs($param2);
        } elseif ($param1 == "edit_post") {
            $this->crud_model->edit_blogs($param2);
        } elseif ($param1 == "delete") {
            $this->crud_model->delete_blogs($param2);
            redirect(site_url('admin/blogs'), 'refresh');
        }else {
            $page_data['page_name']  = 'blogs';
            $page_data['page_title'] = 'Kidzonia International | Blogs';
            $this->load->view('backend/index', $page_data);
        }
    }  
      
    public function blogs_form($param1 = "", $param2 = "") {
        if ($this->session->userdata('admin_login') != true) {
          redirect(site_url('login'), 'refresh');
        }        
         
        if ($param1 == 'add') {            
            $page_data['page_name']     = 'blogs_add';
            $page_data['page_title']    = 'Kidzonia International | Add Blog';
            $this->load->view('backend/index', $page_data);
        }
        elseif ($param1 == 'edit') {
            $data                       = $this->crud_model->get_blogs_by_id($param2)->row_array();
            $page_data['data']          = $data;
            $page_data['page_name']     = 'blogs_edit';
            $page_data['id']            = $param2;
            $page_data['page_title']    = 'Kidzonia International | Edit Blog';
            $this->load->view('backend/index', $page_data);
        }
    }

    public function get_blogs()  { 
        if ($this->input->is_ajax_request()) {
            $this->crud_model->get_blogs();
        }
    }
    
    // manage branch gallery image
    public function branch_gallery_image($param1 = "", $param2 = "") {
        if ($this->session->userdata('admin_login') != true) {
            redirect(site_url('login'), 'refresh');
        }
        if ($param1 == "add_post") {
            $this->crud_model->add_gallery_images($param2);
        } elseif ($param1 == "edit_post") {
            $this->crud_model->edit_gallery_images($param2);
        } elseif ($param1 == "delete") {
            $this->crud_model->delete_gallery_image($param2);
            redirect(site_url('admin/gallery-image'), 'refresh');
        }else {
            $page_data['page_name']  = 'gallery_image';
            $page_data['page_title'] = 'Kidzonia International | Gallery Image';
            $this->load->view('backend/index', $page_data);
        }
    }  
    
    public function branch_gallery_image_form($param1 = "", $param2 = "") {
        if ($this->session->userdata('admin_login') != true) {
          redirect(site_url('login'), 'refresh');
        }        
         
        if ($param1 == 'add') {
            
            $page_data['branches']     = $this->crud_model->get_branch()->result_array();
            $page_data['page_name']     = 'gallery_image_add';
            $page_data['page_title']    = 'Kidzonia International | Add Gallery Image';
            $this->load->view('backend/index', $page_data);
        }
        elseif ($param1 == 'edit') {
            $page_data['branches']      = $this->crud_model->get_branch()->result_array();
            $data                       = $this->crud_model->get_gallery_image_by_name($param2)->result_array();
            
            $page_data['title']          = $this->crud_model->get_gallery_title_and_branch($param2);
            $page_data['data']          = $data;
            $page_data['page_name']     = 'gallery_image_edit';
            $page_data['id']            = $param2;
            $page_data['page_title']    = 'Kidzonia International | Edit Gallery Image';
            $this->load->view('backend/index', $page_data);
        }
    }  
    
    public function get_gallery_image()  { 
        if ($this->input->is_ajax_request()) {
            $this->crud_model->get_gallery_image();
        }
    }
    
    public function delete_branch_gallery_image_by_id($id){
        echo $this->crud_model->delete_branch_gallery_image_by_id($id);
    }
    
    
    // manage gallery
    public function gallery($param1 = "", $param2 = "") {
        if ($this->session->userdata('admin_login') != true) {
            redirect(site_url('login'), 'refresh');
        }
        if ($param1 == "add_post") {
            $this->crud_model->add_gallery($param2);
        } elseif ($param1 == "edit_post") {
            $this->crud_model->edit_gallery($param2);
        } elseif ($param1 == "delete") {
            $this->crud_model->delete_gallery($param2);
            redirect(site_url('admin/gallery'), 'refresh');
        }else {
            $page_data['page_name']  = 'gallery';
            $page_data['page_title'] = 'Kidzonia International | Gallery';
            $this->load->view('backend/index', $page_data);
        }
    }  
    
    public function gallery_image($param1 = "",$main = "") {
        $this->crud_model->delete_gallery_image_by_id($param1, $main);
        redirect(site_url('admin/gallery/edit/' . $main), 'refresh');
    }  
      
    public function gallery_form($param1 = "", $param2 = "") {
        if ($this->session->userdata('admin_login') != true) {
          redirect(site_url('login'), 'refresh');
        }        
         
        if ($param1 == 'add') {
            
            $page_data['branches']     = $this->crud_model->get_branch()->result_array();
            $page_data['page_name']     = 'gallery_add';
            $page_data['page_title']    = 'Kidzonia International | Add Gallery';
            $this->load->view('backend/index', $page_data);
        }
        elseif ($param1 == 'edit') {
            $page_data['branches']     = $this->crud_model->get_branch()->result_array();
            $data                       = $this->crud_model->get_gallery_by_id($param2)->row_array();
            $campus_images              = $this->crud_model->get_gallery_campus_by_id($param2)->result_array();
            $gallery_images             = $this->crud_model->get_gallery_image_by_id($param2)->result_array();
            $page_data['campus_images']          = $campus_images;
            $page_data['gallery_images']          = $gallery_images;
            $page_data['data']          = $data;
            $page_data['page_name']     = 'gallery_edit';
            $page_data['id']            = $param2;
            $page_data['page_title']    = 'Kidzonia International | Edit Gallery';
            $this->load->view('backend/index', $page_data);
        }
    }

    public function delete_gallery_image_remove()  { 
        $id = $this->input->post('id');
        $delete = $this->crud_model->delete_gallery_image_by_id($id);
        if($delete){
            echo $id;
        } else {
            echo "failed";
        }
    }

    public function delete_campus_gallery_remove($id){
        echo $this->crud_model->delete_campus_gallery_remove($id);
    }

    public function get_gallery()  { 
        if ($this->input->is_ajax_request()) {
            $this->crud_model->get_gallery();
        }
    }
    
    // manage branches
    public function branches($param1 = "", $param2 = "") {
        if ($this->session->userdata('admin_login') != true) {
            redirect(site_url('login'), 'refresh');
        }
        if ($param1 == "add_post") {
            $this->crud_model->add_branches($param2);
        } elseif ($param1 == "edit_post") {
            $this->crud_model->edit_branches($param2);
        } elseif ($param1 == "delete") {
            $this->crud_model->delete_branches($param2); 
            redirect(site_url('admin/branches'), 'refresh');
        } else {
            $page_data['page_name']  = 'branches';
            $page_data['page_title'] = 'Kidzonia International | Branches';
            $this->load->view('backend/index', $page_data);
        }
    }  
      
    public function branches_form($param1 = "", $param2 = "") {
        if ($this->session->userdata('admin_login') != true) {
          redirect(site_url('login'), 'refresh');
        }        
         
        if ($param1 == 'add') {            
            $page_data['page_name']     = 'branches_add';
            $page_data['page_title']    = 'Kidzonia International | Add Branch';
            $this->load->view('backend/index', $page_data);
        } elseif ($param1 == 'edit') {
            $data                       = $this->crud_model->get_branch_by_id($param2)->row_array();
            $page_data['data']          = $data;
            $page_data['page_name']     = 'branches_edit';
            $page_data['id']            = $param2;
            $page_data['page_title']    = 'Kidzonia International | Edit Branch';
            $this->load->view('backend/index', $page_data);
        }
    }

    public function get_branches() {
        if ($this->input->is_ajax_request()) {
            $this->crud_model->get_branches();
        }
    }
    
    // manage contact_enquiry
    public function contact_enquiry($param1 = "", $param2 = "") {
        if ($this->session->userdata('admin_login') != true) {
            redirect(site_url('login'), 'refresh');
        }
        if ($param1 == "delete") {
            $this->crud_model->delete_contact_enquiry($param2);
            redirect(site_url('admin/contact_enquiry'), 'refresh');
        } else {
            $page_data['page_name']  = 'contact_enquiry';
            $page_data['page_title'] = 'Kidzonia International | Contact Enquiry';
            $this->load->view('backend/index', $page_data);
        }
    }  
     
    public function get_contact_enquiry()  { 
        if ($this->input->is_ajax_request()) {
            $this->crud_model->get_contact_enquiry();
        }
    }
    
    // Sitemap Management
    public function sitemap_management() {
        if ($this->session->userdata('admin_login') != true) {
            redirect(site_url('login'), 'refresh');
        }
        
        $page_data['page_name']  = 'sitemap_management';
        $page_data['page_title'] = 'Sitemap Management';
        
        // Check if sitemap file exists and get last modified date
        $sitemap_path = dirname(FCPATH) . '/sitemap.xml';
        $sitemap_path = str_replace('\\', '/', $sitemap_path);
        $sitemap_path = realpath($sitemap_path) ?: $sitemap_path;
        
        if (file_exists($sitemap_path)) {
            $page_data['sitemap_exists'] = true;
            $page_data['last_generated'] = date("F d, Y h:i A", filemtime($sitemap_path));
        } else {
            $page_data['sitemap_exists'] = false;
            $page_data['last_generated'] = 'Never';
        }
        
        // Get base URL for sitemap
        $page_data['base_url'] = rtrim($this->config->item('base_url'), '/');
        $page_data['base_url'] = str_replace('/master-panel', '', $page_data['base_url']);
        
        $this->load->view('backend/index', $page_data);
    }
    
    public function generate_sitemap() {
        if ($this->session->userdata('admin_login') != true) {
            echo json_encode(['status' => 'error', 'message' => 'Unauthorized access']);
            return;
        }
        
        try {
            ini_set('memory_limit', '512M');
            ini_set('max_execution_time', 300);
            
            // Get frontend base URL
            $base_url = rtrim($this->config->item('base_url'), '/');
            $base_url = str_replace('/master-panel', '', $base_url);
            
            // Start XML
            $xml = '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
            $xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"' . "\n";
            $xml .= '        xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"' . "\n";
            $xml .= '        xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9' . "\n";
            $xml .= '              http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">' . "\n\n";
            
            $current_date = date('Y-m-d\TH:i:s+00:00');
            
            // Homepage
            $xml .= $this->generate_url_entry($base_url . '/', $current_date, 'always', '1.00');
            
            // Get active blogs - URL format: /blog-details/(slug)
            try {
                if ($this->db->table_exists('blogs')) {
                    $this->db->group_start();
                    $this->db->where('status', '1');
                    $this->db->or_where('status', 1);
                    $this->db->group_end();
                    $this->db->order_by('id', 'ASC');
                    $query = $this->db->get('blogs');
                    if ($query && $query->num_rows() > 0) {
                        $blogs = $query->result();
                        foreach ($blogs as $blog) {
                            $blog_slug = !empty($blog->slug) ? $blog->slug : slugify($blog->name);
                            
                            if (!empty($blog->name) && !empty($blog_slug)) {
                                $xml .= $this->generate_url_entry(
                                    $base_url . '/blog-details/' . $blog_slug,
                                    $current_date,
                                    'always',
                                    '0.80'
                                );
                            }
                        }
                    }
                }
            } catch (Exception $e) {
                log_message('error', 'Sitemap Generation Error (Blogs): ' . $e->getMessage());
            }
            
            // Get all events - URL format: /event/(slug)/(id)
            try {
                if ($this->db->table_exists('event')) {
                    $this->db->order_by('id', 'ASC');
                    $query = $this->db->get('event');
                    if ($query && $query->num_rows() > 0) {
                        $events = $query->result();
                        foreach ($events as $event) {
                            $event_name = !empty($event->name) ? $event->name : (!empty($event->title) ? $event->title : '');
                            $event_slug = !empty($event->slug) ? $event->slug : (!empty($event_name) ? slugify($event_name) : '');
                            $event_id = !empty($event->id) ? $event->id : '';
                            
                            if (!empty($event_id) && !empty($event_slug)) {
                                $xml .= $this->generate_url_entry(
                                    $base_url . '/event/' . $event_slug . '/' . $event_id,
                                    $current_date,
                                    'always',
                                    '0.80'
                                );
                            }
                        }
                    }
                }
            } catch (Exception $e) {
                log_message('error', 'Sitemap Generation Error (Events): ' . $e->getMessage());
            }
            
            // Get active branches - URL format: /explore-centers/(city)/(slug)
            try {
                if ($this->db->table_exists('branches')) {
                    $this->db->group_start();
                    $this->db->where('status', '1');
                    $this->db->or_where('status', 1);
                    $this->db->or_where('status', 'active');
                    $this->db->group_end();
                    $this->db->order_by('id', 'ASC');
                    $query = $this->db->get('branches');
                    if ($query && $query->num_rows() > 0) {
                        $branches = $query->result();
                        foreach ($branches as $branch) {
                            $branch_slug = !empty($branch->slug) ? $branch->slug : slugify($branch->name);
                            $branch_city = !empty($branch->city) ? strtolower($branch->city) : 'hyderabad';
                            
                            if (!empty($branch->name) && !empty($branch_slug)) {
                                $xml .= $this->generate_url_entry(
                                    $base_url . '/explore-centers/' . $branch_city . '/' . $branch_slug,
                                    $current_date,
                                    'always',
                                    '0.80'
                                );
                            }
                        }
                    }
                }
            } catch (Exception $e) {
                log_message('error', 'Sitemap Generation Error (Branches): ' . $e->getMessage());
            }
            
            // Static pages based on frontend routes
            $static_pages = [
                'admissions' => '0.80',
                'career' => '0.80',
                'about-us' => '0.80',
                'our-learning-spaces-amenities' => '0.80',
                'awards-recognitions' => '0.80',
                'our-curriculum' => '0.80',
                'our-programmes' => '0.80',
                'a-day-at-kidzonia' => '0.80',
                'kidzonia-commits' => '0.80',
                'ixplore' => '0.80',
                'whizkids' => '0.80',
                'our-teachers' => '0.80',
                'print-media' => '0.80',
                'achievements' => '0.80',
                'kidzonia-gallery' => '0.80',
                'blogs' => '0.80',
                'digital-news' => '0.80',
                'explore-centers/hyderabad' => '0.80',
                'explore-centers/mumbai' => '0.80',
                'explore-centers/pune' => '0.80',
                'contact-us' => '0.80',
                'privacy-policy' => '0.80',
            ];
            
            foreach ($static_pages as $page => $priority) {
                $xml .= $this->generate_url_entry(
                    $base_url . '/' . $page,
                    $current_date,
                    'always',
                    $priority
                );
            }
            
            $xml .= "\n</urlset>";
            
            // Save sitemap to root directory
            $sitemap_path = dirname(FCPATH) . '/sitemap.xml';
            $sitemap_path = str_replace('\\', '/', $sitemap_path);
            $sitemap_dir = dirname($sitemap_path);
            
            // Check if directory exists
            if (!is_dir($sitemap_dir)) {
                if (!@mkdir($sitemap_dir, 0755, true)) {
                    echo json_encode([
                        'status' => 'error',
                        'message' => 'Failed to create directory. Path: ' . $sitemap_dir . '. Please check permissions.'
                    ]);
                    return;
                }
            }
            
            // Check if directory is writable
            if (!is_writable($sitemap_dir)) {
                @chmod($sitemap_dir, 0755);
                if (!is_writable($sitemap_dir)) {
                    echo json_encode([
                        'status' => 'error',
                        'message' => 'Directory is not writable. Path: ' . $sitemap_dir . '. Please set permissions to 755 or 777.'
                    ]);
                    return;
                }
            }
            
            // Check if file exists and its permissions
            $file_exists = file_exists($sitemap_path);
            $file_writable = $file_exists ? is_writable($sitemap_path) : true;
            
            if ($file_exists && !$file_writable) {
                @chmod($sitemap_path, 0644);
                $file_writable = is_writable($sitemap_path);
            }
            
            // Check disk space
            $free_space = disk_free_space($sitemap_dir);
            if ($free_space !== false && $free_space < 1048576) {
                echo json_encode([
                    'status' => 'error',
                    'message' => 'Insufficient disk space. Free space: ' . round($free_space / 1024 / 1024, 2) . ' MB. Path: ' . $sitemap_dir
                ]);
                return;
            }
            
            error_clear_last();
            $write_success = false;
            $error_details = '';
            
            // Attempt 1: file_put_contents
            $write_result = file_put_contents($sitemap_path, $xml, LOCK_EX);
            if ($write_result !== false) {
                $write_success = true;
            } else {
                $error = error_get_last();
                $error_details .= 'file_put_contents failed. PHP Error: ' . ($error['message'] ?? 'Unknown error') . '. ';
                
                // Attempt 2: Try to delete and then write
                if ($file_exists && !$file_writable) {
                    if (@unlink($sitemap_path)) {
                        $error_details .= 'Old file deleted. ';
                        $write_result = file_put_contents($sitemap_path, $xml, LOCK_EX);
                        if ($write_result !== false) {
                            $write_success = true;
                        } else {
                            $error = error_get_last();
                            $error_details .= 'file_put_contents after delete failed. PHP Error: ' . ($error['message'] ?? 'Unknown error') . '. ';
                        }
                    } else {
                        $error_details .= 'Failed to delete old file. ';
                    }
                }
                
                // Attempt 3: Use fopen/fwrite
                if (!$write_success) {
                    $fp = @fopen($sitemap_path, 'w');
                    if ($fp) {
                        if (@fwrite($fp, $xml) !== false) {
                            @fclose($fp);
                            $write_success = true;
                            $error_details .= 'fopen/fwrite succeeded. ';
                        } else {
                            @fclose($fp);
                            $error = error_get_last();
                            $error_details .= 'fopen/fwrite failed. PHP Error: ' . ($error['message'] ?? 'Unknown error') . '. ';
                        }
                    } else {
                        $error = error_get_last();
                        $error_details .= 'fopen failed. PHP Error: ' . ($error['message'] ?? 'Unknown error') . '. ';
                        
                        // Attempt 4: Write to temp file and rename
                        $temp_sitemap_path = $sitemap_dir . '/sitemap.xml.tmp';
                        $temp_write_result = file_put_contents($temp_sitemap_path, $xml, LOCK_EX);
                        if ($temp_write_result !== false) {
                            $error_details .= 'Wrote to temp file. ';
                            if (@rename($temp_sitemap_path, $sitemap_path)) {
                                $write_success = true;
                                $error_details .= 'Renamed temp file. ';
                            } else {
                                $error = error_get_last();
                                $error_details .= 'Rename failed. PHP Error: ' . ($error['message'] ?? 'Unknown error') . '. ';
                                if (@copy($temp_sitemap_path, $sitemap_path)) {
                                    $write_success = true;
                                    $error_details .= 'Copied temp file. ';
                                    @unlink($temp_sitemap_path);
                                } else {
                                    $error = error_get_last();
                                    $error_details .= 'Copy failed. PHP Error: ' . ($error['message'] ?? 'Unknown error') . '. ';
                                }
                            }
                        } else {
                            $error = error_get_last();
                            $error_details .= 'Writing to temp file failed. PHP Error: ' . ($error['message'] ?? 'Unknown error') . '. ';
                        }
                    }
                }
            }
            
            if ($write_success) {
                @chmod($sitemap_path, 0644);
                $response = [
                    'status' => 'success',
                    'message' => 'Sitemap generated successfully!',
                    'date' => date("F d, Y h:i A"),
                    'path' => $sitemap_path,
                    'size' => filesize($sitemap_path) . ' bytes'
                ];
                echo json_encode($response);
            } else {
                echo json_encode([
                    'status' => 'error',
                    'message' => 'Failed to write sitemap file. ' . $error_details .
                                 ' Path: ' . $sitemap_path .
                                 ' Directory writable: ' . (is_writable($sitemap_dir) ? 'Yes' : 'No') .
                                 ' File exists: ' . ($file_exists ? 'Yes' : 'No') .
                                 ' File writable: ' . ($file_writable ? 'Yes' : 'No')
                ]);
            }
        } catch (Exception $e) {
            log_message('error', 'Sitemap Generation Error: ' . $e->getMessage());
            echo json_encode([
                'status' => 'error',
                'message' => 'Error! Fatal error generating sitemap: ' . $e->getMessage()
            ]);
        }
    }
    
    private function generate_url_entry($url, $lastmod, $changefreq, $priority) {
        $entry = "<url>\n";
        $entry .= "  <loc>" . htmlspecialchars($url, ENT_XML1, 'UTF-8') . "</loc>\n";
        $entry .= "  <lastmod>" . $lastmod . "</lastmod>\n";
        $entry .= "  <changefreq>" . $changefreq . "</changefreq>\n";
        $entry .= "  <priority>" . $priority . "</priority>\n";
        $entry .= "</url>\n";
        return $entry;
    }
    
}