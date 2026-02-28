<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library('session');
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
        $this->output->set_header('Pragma: no-cache');
    }
    
    public function index() {
        
        if ($this->session->userdata('admin_login')) {
            redirect(site_url('admin'), 'refresh');
        }  
        else {
            $page_data['page_name'] = 'login';
            $page_data['page_title'] = 'Kidzonia International | Login';
            $this->load->view('backend/login', $page_data);
        }
    }
    
    public function validate_login($from = "")
    {
        $email    = $this->input->post('email');
        $password = sha1($this->input->post('password'));
        $query = $this->db->query("SELECT * FROM sys_users WHERE (email = '$email' AND email != '' || phone='$email') AND password = '$password' AND status='1'");
   
        if ($query->num_rows() > 0) {
            $row = $query->row();
            $this->session->set_userdata('super_user_id', $row->id);
            $this->session->set_userdata('super_role_id', $row->role_id);
            $this->session->set_userdata('super_email',   $row->email);
            $this->session->set_userdata('super_mobile',  $row->phone);
            $this->session->set_userdata('super_type',    $row->type);
            $this->session->set_userdata('super_name',    $row->first_name.' '.$row->last_name);
            $this->session->set_flashdata('flash_message', get_phrase('welcome').' '.$row->first_name.' '.$row->last_name);
            if ($row->role_id == 1) {
                $this->session->set_userdata('super_role', 'admin');
                $this->session->set_userdata('admin_login', '1');
                redirect(site_url('admin/dashboard'), 'refresh');
            }
        } else {
            $this->session->set_flashdata('error_message', get_phrase('invalid_login_credentials'));
            redirect(site_url('login'), 'refresh');
        }
    }
    
    public function logout($from = "")
    {
        //destroy sessions of specific userdata. We've done this for not removing the cart session
        $this->session_destroy();
        redirect(site_url('login'), 'refresh');
    }
    
    public function session_destroy()
    {
        $this->session->unset_userdata('super_user_id');
        $this->session->unset_userdata('super_role_id');
        $this->session->unset_userdata('super_email');
        $this->session->unset_userdata('super_mobile');
        $this->session->unset_userdata('super_type');
        $this->session->unset_userdata('super_name');
        if ($this->session->userdata('admin_login') == 1) {
            $this->session->unset_userdata('admin_login');
        } else {
            $this->session->unset_userdata('admin_login');
        }
    }
    
    function forgot_password($from = "")
    {
        $email        = $this->input->post('email');
        //resetting user password here
        $new_password = substr(md5(rand(100000000, 20000000000)), 0, 7);
        
        // Checking credential for admin
        $query = $this->db->get_where('users', array(
            'email' => $email
        ));
        if ($query->num_rows() > 0) {
            $this->db->where('email', $email);
            $this->db->update('users', array(
                'password' => sha1($new_password)
            ));
            // send new password to user email
            $this->email_model->password_reset_email($new_password, $email);
            $this->session->set_flashdata('flash_message', get_phrase('please_check_your_email_for_new_password'));
            if ($from == 'backend') {
                redirect(site_url('login'), 'refresh');
            } else {
                redirect(site_url('home'), 'refresh');
            }
        } else {
            $this->session->set_flashdata('error_message', get_phrase('password_reset_failed'));
            if ($from == 'backend') {
                redirect(site_url('login'), 'refresh');
            } else {
                redirect(site_url('home'), 'refresh');
            }
        }
    }
    
    public function verify_email_address($verification_code = "")
    {
        $user_details = $this->db->get_where('users', array(
            'verification_code' => $verification_code
        ));
        if ($user_details->num_rows() == 0) {
            $this->session->set_flashdata('error_message', get_phrase('email_duplication'));
        } else {
            $user_details = $user_details->row_array();
            $updater      = array(
                'status' => 1
            );
            $this->db->where('id', $user_details['id']);
            $this->db->update('users', $updater);
            $this->session->set_flashdata('flash_message', get_phrase('congratulations') . '!' . get_phrase('your_email_address_has_been_successfully_verified') . '.');
        }
        redirect(site_url('home'), 'refresh');
    }
    
}