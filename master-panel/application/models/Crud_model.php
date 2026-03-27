<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Crud_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        /*cache control*/
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
        $this->output->set_header('Pragma: no-cache');
        date_default_timezone_set('Asia/Calcutta');
    }

    public function get_user_by_id($id)
    {
        $this->db->where('id', $id);
        return $this->db->get('sys_users');
    }

    // counts

    public function count_sliders()
    {
        $count = 0;
        $count = $this->db->query("SELECT id FROM sliders WHERE status='1'")->num_rows();
        return $count;
    }

    public function count_awards_and_recognitions()
    {
        $count = 0;
        $count = $this->db->query("SELECT id FROM awards_and_recognitions")->num_rows();
        return $count;
    }

    public function count_print_medias()
    {
        $count = 0;
        $count = $this->db->query("SELECT id FROM print_media")->num_rows();
        return $count;
    }

    public function count_achievements()
    {
        $count = 0;
        $count = $this->db->query("SELECT id FROM achievements")->num_rows();
        return $count;
    }

    public function count_branches()
    {
        $count = 0;
        $count = $this->db->query("SELECT id FROM branches")->num_rows();
        return $count;
    }

    public function count_gallery()
    {
        $count = 0;
        $count = $this->db->query("SELECT id FROM gallery")->num_rows();
        return $count;
    }

    public function count_events()
    {
        $count = 0;
        $count = $this->db->query("SELECT id FROM events")->num_rows();
        return $count;
    }

    public function count_parents_testimonials()
    {
        $count = 0;
        $count = $this->db->query("SELECT id FROM parents_testimonials")->num_rows();
        return $count;
    }

    public function count_careers()
    {
        $count = 0;
        $count = $this->db->query("SELECT id FROM careers")->num_rows();
        return $count;
    }

    public function count_brochure()
    {
        $count = 0;
        $count = $this->db->query("SELECT id FROM brochure")->num_rows();
        return $count;
    }

    public function count_career_enquiry()
    {
        $count = 0;
        $count = $this->db->query("SELECT id FROM career_enquiry")->num_rows();
        return $count;
    }

    // public function count_category(){
    //     $count=0;
    //     $count = $this->db->query("SELECT id FROM category WHERE status='1'")->num_rows();
    //     return $count;
    // }

    // public function count_products(){
    //     $count=0;
    //     $count = $this->db->query("SELECT id FROM products WHERE status='1'")->num_rows();
    //     return $count;
    // }

    public function count_blogs()
    {
        $count = 0;
        $count = $this->db->query("SELECT id FROM blogs WHERE status='1'")->num_rows();
        return $count;
    }

    // public function count_contact_enquiry(){
    //     $count=0;
    //     $count = $this->db->query("SELECT id FROM contact_enquiry WHERE is_delete='0'")->num_rows();
    //     return $count;
    // }

    public function change_system_password()
    {
        $user_id = $this->session->userdata('super_user_id');
        $resultpost = array(
            "status" => 200,
            "message" => get_phrase('password_changed_successfully'),
            "url" => base_url('dashboard'),
        );

        $user_details = $this->crud_model->get_user_by_id($user_id)->row_array();
        $current_password = $this->input->post('current_password');
        $password = $this->input->post('password');
        $confirm_password = $this->input->post('confirm_password');

        if ($user_details['password'] != sha1($current_password)) {
            $this->session->set_flashdata('error_message', get_phrase('current_password_mismatch!'));
            $resultpost = array(
                "status" => 400,
                "message" => 'Current Password Mismatch!'
            );
        }
        else {
            $data = array();
            $data['password'] = sha1($password);
            $data['last_modified'] = date("Y-m-d H:i:s");
            $this->db->where('id', $user_id);
            $this->db->update('sys_users', $data);
            $this->session->set_flashdata('flash_message', get_phrase('password_updated'));

            $resultpost = array(
                "status" => 200,
                "message" => get_phrase('password_updated'),
                "url" => base_url('login/logout'),
            );
        }
        return simple_json_output($resultpost);
    }

    // manage banner

    public function get_banner()
    {
        $params['draw'] = $_REQUEST['draw'];
        $start = $_REQUEST['start'];
        $length = $_REQUEST['length'];

        $data = array();

        $total_count = $this->db->query("SELECT id FROM banner WHERE (id<>'') ORDER BY id DESC")->num_rows();
        $query = $this->db->query("SELECT id,file , image FROM banner WHERE (id<>'') ORDER BY id DESC LIMIT $start, $length");

        if (!empty($query)) {
            foreach ($query->result_array() as $item) {

                $image = '';
                if ($item['image'] != '') {
                    $image_url = main_url() . $item['image'];
                    $image = '<a href="' . $image_url . '"  class="view-btn" target="_blank">View</a>';
                }
                else {
                    $image = '-';
                }

                $edit_url = base_url() . 'admin/banner/edit/' . $item['id'];
                $delete_url = base_url() . 'admin/banner/delete/' . $item['id'];
                $confim_txt = "Confirm Delete";
                $action = '<a href="' . $edit_url . '" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit"><button type="button" class="btn mr-1 mb-1 icon-btn-edit"><i class="fa fa-pencil" aria-hidden="true"></i></button></a>';
                $action .= '<a href="#" onclick="confirm_modal(\'' . $delete_url . '\',\'' . $confim_txt . '\');"><button type="button" class="btn mr-1 mb-1 icon-btn-del"><i class="fa fa-trash" aria-hidden="true"></i></button></a>';

                $data[] = array(
                    "sr" => ++$start,
                    "image" => $image,
                    "action" => $action
                );
            }
        }

        $json_data = array(
            "draw" => intval($params['draw']),
            "recordsTotal" => $total_count,
            "recordsFiltered" => $total_count,
            "data" => $data
        );
        echo json_encode($json_data);
    }

    public function add_banner()
    {
        $super_type = $this->session->userdata('super_type');
        if ($super_type == 'admin') {
            $url = base_url('admin/banner');
        }

        $resultpost = array(
            "status" => 200,
            "message" => get_phrase('banner_added_successfully'),
            "url" => $url,
        );

        $this->load->model('upload_model');

        if ($_FILES['video']['name'] != "") {
            $fileName = $_FILES['video']['name'];
            $tmp = explode('.', $fileName);
            $fileExtension = end($tmp);

            $uploadable_file = md5(uniqid(rand(), true)) . '.' . $fileExtension;

            $year = date("Y");
            $month = date("m");
            $day = date("d");
            $date_path = "$year/$month/$day/";
            $directory = "../uploads/banner/" . $date_path;
            if (!is_dir($directory)) {
                mkdir($directory, 0755, true);
            }
            $data['file'] = "uploads/banner/" . $date_path . $uploadable_file;

            move_uploaded_file($_FILES['video']['tmp_name'], $directory . $uploadable_file);
        }
        $temp_path = $this->upload_model->upload_temp_image('image');
        if (!empty($temp_path)) {
            $year = date("Y");
            $month = date("m");
            $day = date("d");
            //The folder path for our file should be YYYY/MM/DD
            $directory = "../uploads/banner/" . "$year/$month/$day/";

            //If the directory doesn't already exists.
            if (!is_dir($directory)) {
                mkdir($directory, 0755, true);
            }
            $data["image"] = $this->upload_model->image_upload_inside($temp_path, $directory);
            $this->upload_model->delete_temp_image($temp_path);
        }

        $data['created_at'] = date("Y-m-d H:i:s");
        $this->db->insert('banner', $data);
        $this->session->set_flashdata('flash_message', get_phrase('banner_added_successfully'));
        return simple_json_output($resultpost);
    }

    public function edit_banner($id)
    {
        $super_type = $this->session->userdata('super_type');
        if ($super_type == 'admin') {
            $url = base_url('admin/banner');
        }

        $old_data = $this->get_banner_by_id($id)->row_array();

        $resultpost = array(
            "status" => 200,
            "message" => get_phrase('banner_updated_successfully'),
            "url" => $url,
        );
        $this->load->model('upload_model');

        if ($_FILES['video']['name'] != "") {
            $fileName = $_FILES['video']['name'];
            $tmp = explode('.', $fileName);
            $fileExtension = end($tmp);

            $uploadable_file = md5(uniqid(rand(), true)) . '.' . $fileExtension;

            $year = date("Y");
            $month = date("m");
            $day = date("d");
            $date_path = "$year/$month/$day/";
            $directory = "../uploads/banner/" . $date_path;
            if (!is_dir($directory)) {
                mkdir($directory, 0755, true);
            }
            $data['file'] = "uploads/banner/" . $date_path . $uploadable_file;

            move_uploaded_file($_FILES['video']['tmp_name'], $directory . $uploadable_file);
            delete_file_from_server('../' . $old_data['file']);
        }

        $temp_path = $this->upload_model->upload_temp_image('image');
        if (!empty($temp_path)) {
            $year = date("Y");
            $month = date("m");
            $day = date("d");
            //The folder path for our file should be YYYY/MM/DD
            $directory = "../uploads/banner/" . "$year/$month/$day/";

            //If the directory doesn't already exists.
            if (!is_dir($directory)) {
                mkdir($directory, 0755, true);
            }
            $data["image"] = $this->upload_model->image_upload_inside($temp_path, $directory);
            $this->upload_model->delete_temp_image($temp_path);
        }

        $this->db->where('id', $id);
        $this->db->update('banner', $data);
        $this->session->set_flashdata('flash_message', get_phrase('banner_updated_successfully'));
        return simple_json_output($resultpost);
    }

    public function get_banner_by_id($id)
    {
        $this->db->where('id', $id);
        return $this->db->get('banner');
    }

    public function get_banner_count()
    {
        $this->db->select('id');
        return $this->db->get('banner');
    }
    public function delete_banner($id)
    {
        $row = $this->get_banner_by_id($id)->row_array();
        if ($row != '') {
            $this->db->where('id', $id);
            $this->db->delete('banner');
            $this->session->set_flashdata('flash_message', get_phrase('banner_deleted_successfully'));
            delete_file_from_server('../' . $row['file']);
        }
        else {
            redirect(site_url('admin/banner'), 'refresh');
            $this->session->set_flashdata('error_message', get_phrase('no_data_found'));
        }
    }
    // manage sliders

    public function get_sliders()
    {
        $params['draw'] = $_REQUEST['draw'];
        $start = $_REQUEST['start'];
        $length = $_REQUEST['length'];

        $data = array();

        $total_count = $this->db->query("SELECT id FROM sliders WHERE (id<>'') ORDER BY id DESC")->num_rows();
        $query = $this->db->query("SELECT id,file,url,status FROM sliders WHERE (id<>'') ORDER BY id DESC LIMIT $start, $length");

        if (!empty($query)) {
            foreach ($query->result_array() as $item) {
                $status = '';
                if ($item['status'] == 1) {
                    $status = '<span class="badge badge-success">Active</span>';
                }
                else {
                    $status = '<span class="badge badge-danger">Inactive</span>';
                }

                $image = '';
                if ($item['file'] != '') {
                    $img_url = main_url() . $item['file'];
                    $image = '<img src="' . $img_url . '"  class="rounded" height="50">';
                }
                else {
                    $image = '-';
                }

                $edit_url = base_url() . 'admin/pop-up/edit/' . $item['id'];
                $delete_url = base_url() . 'admin/sliders/delete/' . $item['id'];
                $confim_txt = "Confirm Delete";
                $action = '<a href="' . $edit_url . '" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit"><button type="button" class="btn mr-1 mb-1 icon-btn-edit"><i class="fa fa-pencil" aria-hidden="true"></i></button></a>';
                $action .= '<a href="#" onclick="confirm_modal(\'' . $delete_url . '\',\'' . $confim_txt . '\');"><button type="button" class="btn mr-1 mb-1 icon-btn-del"><i class="fa fa-trash" aria-hidden="true"></i></button></a>';

                $data[] = array(
                    "sr" => ++$start,
                    "image" => $image,
                    "url" => $item['url'],
                    "status" => $status,
                    "action" => $action
                );
            }
        }

        $json_data = array(
            "draw" => intval($params['draw']),
            "recordsTotal" => $total_count,
            "recordsFiltered" => $total_count,
            "data" => $data
        );
        echo json_encode($json_data);
    }

    public function add_sliders()
    {
        $super_type = $this->session->userdata('super_type');
        if ($super_type == 'admin') {
            $url = base_url('admin/pop-up');
        }

        $resultpost = array(
            "status" => 200,
            "message" => get_phrase('pop-up_added_successfully'),
            "url" => $url,
        );

        $this->load->model('upload_model');
        $temp_path = $this->upload_model->upload_temp_image('image_file');
        if (!empty($temp_path)) {
            $year = date("Y");
            $month = date("m");
            $day = date("d");
            //The folder path for our file should be YYYY/MM/DD
            $directory = "../uploads/sliders/" . "$year/$month/$day/";

            //If the directory doesn't already exists.
            if (!is_dir($directory)) {
                mkdir($directory, 0755, true);
            }
            $data["file"] = $this->upload_model->image_upload_packages($temp_path, $directory);
            $this->upload_model->delete_temp_image($temp_path);
        }

        $data['url'] = html_escape($this->input->post('url'));
        $data['status'] = html_escape($this->input->post('status'));
        $data['created_at'] = date("Y-m-d H:i:s");
        $this->db->insert('sliders', $data);
        $this->session->set_flashdata('flash_message', get_phrase('pop-up_added_successfully'));
        return simple_json_output($resultpost);
    }

    public function get_sliders_by_id($id)
    {
        $this->db->where('id', $id);
        return $this->db->get('sliders');
    }

    public function get_sliders_count()
    {
        $this->db->select('id');
        return $this->db->get('sliders');
    }

    public function edit_sliders($id)
    {
        $super_type = $this->session->userdata('super_type');
        if ($super_type == 'admin') {
            $url = base_url('admin/pop-up');
        }

        $resultpost = array(
            "status" => 200,
            "message" => get_phrase('pop-up_updated_successfully'),
            "url" => $url,
        );

        $row = $this->get_sliders_by_id($id)->row_array();

        $this->load->model('upload_model');
        $temp_path = $this->upload_model->upload_temp_image('image_file');
        if (!empty($temp_path)) {
            $year = date("Y");
            $month = date("m");
            $day = date("d");
            //The folder path for our file should be YYYY/MM/DD
            $directory = "../uploads/sliders/" . "$year/$month/$day/";

            //If the directory doesn't already exists.
            if (!is_dir($directory)) {
                mkdir($directory, 0755, true);
            }
            $data["file"] = $this->upload_model->image_upload_packages($temp_path, $directory);
            $this->upload_model->delete_temp_image($temp_path);
            delete_file_from_server('../' . $row['file']);
        }

        $data['url'] = html_escape($this->input->post('url'));
        $data['status'] = html_escape($this->input->post('status'));
        $this->db->where('id', $id);
        $this->db->update('sliders', $data);
        $this->session->set_flashdata('flash_message', get_phrase('pop-up_updated_successfully'));
        return simple_json_output($resultpost);
    }

    public function delete_sliders($id)
    {
        $row = $this->get_sliders_by_id($id)->row_array();
        if ($row != '') {
            $this->db->where('id', $id);
            $this->db->delete('sliders');
            $this->session->set_flashdata('flash_message', get_phrase('pop-up_deleted_successfully'));
            delete_file_from_server('../' . $row['file']);
        }
        else {
            redirect(site_url('admin/pop-up'), 'refresh');
            $this->session->set_flashdata('error_message', get_phrase('no_data_found'));
        }
    }

    // manage Print Media

    public function get_print_media()
    {
        $params['draw'] = $_REQUEST['draw'];
        $start = $_REQUEST['start'];
        $length = $_REQUEST['length'];

        $search_value = $_REQUEST['search']['value'];
        $data = array();
        $keyword_filter = "";

        if (!empty($search_value)) {
            $keyword = $search_value;
            $keyword_filter = " AND (name like '%" . $keyword . "%')";

            $total_count = $this->db->query("SELECT id FROM print_media WHERE (id<>'') $keyword_filter ORDER BY id DESC")->num_rows();
            $query = $this->db->query("SELECT id,image FROM print_media WHERE (id<>'') $keyword_filter ORDER BY id DESC LIMIT $start, $length");
        }
        else {
            $total_count = $this->db->query("SELECT id FROM print_media WHERE (id<>'') $keyword_filter ORDER BY id DESC")->num_rows();
            $query = $this->db->query("SELECT id,image FROM print_media WHERE (id<>'') $keyword_filter ORDER BY id DESC LIMIT $start, $length");
        }

        if (!empty($query)) {
            foreach ($query->result_array() as $item) {

                $image = '';
                if ($item['image'] != '') {
                    $img_url = main_url() . $item['image'];
                    $image = '<img src="' . $img_url . '"  class="rounded" height="50">';
                }
                else {
                    $image = '-';
                }

                $edit_url = base_url() . 'admin/print-media/edit/' . $item['id'];
                $delete_url = base_url() . 'admin/print_media/delete/' . $item['id'];
                $confim_txt = "Confirm Delete";
                $action = '<a href="' . $edit_url . '" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit"><button type="button" class="btn mr-1 mb-1 icon-btn-edit"><i class="fa fa-pencil" aria-hidden="true"></i></button></a>';
                $action .= '<a href="#" onclick="confirm_modal(\'' . $delete_url . '\',\'' . $confim_txt . '\');"><button type="button" class="btn mr-1 mb-1 icon-btn-del"><i class="fa fa-trash" aria-hidden="true"></i></button></a>';

                $data[] = array(
                    "sr" => ++$start,
                    "image" => $image,
                    "action" => $action
                );
            }
        }

        $json_data = array(
            "draw" => intval($params['draw']),
            "recordsTotal" => $total_count,
            "recordsFiltered" => $total_count,
            "data" => $data
        );
        echo json_encode($json_data);
    }

    public function add_print_media()
    {
        $super_type = $this->session->userdata('super_type');
        if ($super_type == 'admin') {
            $url = base_url('admin/print-media');
        }

        $resultpost = array(
            "status" => 200,
            "message" => get_phrase('print_media_added_successfully'),
            "url" => $url,
        );

        $this->load->model('upload_model');
        $temp_path = $this->upload_model->upload_temp_image('image_file');
        if (!empty($temp_path)) {
            $year = date("Y");
            $month = date("m");
            $day = date("d");
            //The folder path for our file should be YYYY/MM/DD
            $directory = "../uploads/print_media/" . "$year/$month/$day/";

            //If the directory doesn't already exists.
            if (!is_dir($directory)) {
                mkdir($directory, 0755, true);
            }
            $data["image"] = $this->upload_model->image_upload_print_media($temp_path, $directory);
            $this->upload_model->delete_temp_image($temp_path);
        }
        $data['alt'] = html_escape($this->input->post('alt'));
        $data['created_at'] = date("Y-m-d H:i:s");
        $this->db->insert('print_media', $data);
        $this->session->set_flashdata('flash_message', get_phrase('print_media_added_successfully'));
        return simple_json_output($resultpost);
    }

    public function get_print_media_by_id($id)
    {
        $this->db->where('id', $id);
        return $this->db->get('print_media');
    }

    public function edit_print_media($id)
    {
        $super_type = $this->session->userdata('super_type');
        if ($super_type == 'admin') {
            $url = base_url('admin/print-media');
        }

        $resultpost = array(
            "status" => 200,
            "message" => get_phrase('print_media_updated_successfully'),
            "url" => $url,
        );

        $row = $this->get_print_media_by_id($id)->row_array();

        $this->load->model('upload_model');
        $temp_path = $this->upload_model->upload_temp_image('image_file');
        if (!empty($temp_path)) {
            $year = date("Y");
            $month = date("m");
            $day = date("d");
            //The folder path for our file should be YYYY/MM/DD
            $directory = "../uploads/print_media/" . "$year/$month/$day/";

            //If the directory doesn't already exists.
            if (!is_dir($directory)) {
                mkdir($directory, 0755, true);
            }
            $data["image"] = $this->upload_model->image_upload_print_media($temp_path, $directory);
            $this->upload_model->delete_temp_image($temp_path);
            delete_file_from_server('../' . $row['image']);
        }

        $data['alt'] = html_escape($this->input->post('alt'));
        $this->db->where('id', $id);
        $this->db->update('print_media', $data);
        $this->session->set_flashdata('flash_message', get_phrase('print_media_updated_successfully'));
        return simple_json_output($resultpost);
    }

    public function delete_print_media($id)
    {
        $row = $this->get_print_media_by_id($id)->row_array();
        if ($row != '') {
            $this->db->where('id', $id);
            $this->db->delete('print_media');
            $this->session->set_flashdata('flash_message', get_phrase('print_media_deleted_successfully'));
            delete_file_from_server('../' . $row['image']);
        }
        else {
            redirect(site_url('admin/teams'), 'refresh');
            $this->session->set_flashdata('error_message', get_phrase('no_data_found'));
        }
    }

    // manage Achievements

    public function get_achievements()
    {
        $params['draw'] = $_REQUEST['draw'];
        $start = $_REQUEST['start'];
        $length = $_REQUEST['length'];

        $search_value = $_REQUEST['search']['value'];
        $data = array();
        $keyword_filter = "";

        if (!empty($search_value)) {
            $keyword = $search_value;
            $keyword_filter = " AND (name like '%" . $keyword . "%')";

            $total_count = $this->db->query("SELECT id FROM achievements WHERE (id<>'') $keyword_filter ORDER BY id DESC")->num_rows();
            $query = $this->db->query("SELECT id,name,image,description FROM achievements WHERE (id<>'') $keyword_filter ORDER BY id DESC LIMIT $start, $length");
        }
        else {
            $total_count = $this->db->query("SELECT id FROM achievements WHERE (id<>'') $keyword_filter ORDER BY id DESC")->num_rows();
            $query = $this->db->query("SELECT id,name,image,description FROM achievements WHERE (id<>'') $keyword_filter ORDER BY id DESC LIMIT $start, $length");
        }

        if (!empty($query)) {
            foreach ($query->result_array() as $item) {

                $image = '';
                if ($item['image'] != '') {
                    $img_url = main_url() . $item['image'];
                    $image = '<img src="' . $img_url . '"  class="rounded" height="50">';
                }
                else {
                    $image = '-';
                }

                $edit_url = base_url() . 'admin/achievements/edit/' . $item['id'];
                $delete_url = base_url() . 'admin/achievements/delete/' . $item['id'];
                $confim_txt = "Confirm Delete";
                $action = '<a href="' . $edit_url . '" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit"><button type="button" class="btn mr-1 mb-1 icon-btn-edit"><i class="fa fa-pencil" aria-hidden="true"></i></button></a>';
                $action .= '<a href="#" onclick="confirm_modal(\'' . $delete_url . '\',\'' . $confim_txt . '\');"><button type="button" class="btn mr-1 mb-1 icon-btn-del"><i class="fa fa-trash" aria-hidden="true"></i></button></a>';

                $data[] = array(
                    "sr" => ++$start,
                    "name" => $item['name'],
                    "image" => $image,
                    "description" => $item['description'],
                    "action" => $action
                );
            }
        }

        $json_data = array(
            "draw" => intval($params['draw']),
            "recordsTotal" => $total_count,
            "recordsFiltered" => $total_count,
            "data" => $data
        );
        echo json_encode($json_data);
    }

    public function add_achievements()
    {
        $super_type = $this->session->userdata('super_type');

        if ($super_type == 'admin') {
            $url = base_url('admin/achievements');
        }

        $resultpost = array(
            "status" => 200,
            "message" => get_phrase('achievement_added_successfully'),
            "url" => $url,
        );

        $this->load->model('upload_model');
        $temp_path = $this->upload_model->upload_temp_image('image_file');
        if (!empty($temp_path)) {
            $year = date("Y");
            $month = date("m");
            $day = date("d");
            //The folder path for our file should be YYYY/MM/DD
            $directory = "../uploads/achievements/" . "$year/$month/$day/";

            //If the directory doesn't already exists.
            if (!is_dir($directory)) {
                mkdir($directory, 0755, true);
            }
            $data["image"] = $this->upload_model->image_upload_achievements($temp_path, $directory);
            $this->upload_model->delete_temp_image($temp_path);
        }

        $data['name'] = html_escape($this->input->post('name'));
        $data['alt'] = html_escape($this->input->post('alt'));
        $data['description'] = html_escape($this->input->post('description'));
        $data['created_at'] = date("Y-m-d H:i:s");
        $this->db->insert('achievements', $data);
        $this->session->set_flashdata('flash_message', get_phrase('achievement_added_successfully'));
        return simple_json_output($resultpost);
    }

    public function get_achievements_by_id($id)
    {
        $this->db->where('id', $id);
        return $this->db->get('achievements');
    }

    public function edit_achievements($id)
    {
        $super_type = $this->session->userdata('super_type');
        if ($super_type == 'admin') {
            $url = base_url('admin/achievements');
        }

        $resultpost = array(
            "status" => 200,
            "message" => get_phrase('achievement_updated_successfully'),
            "url" => $url,
        );

        $row = $this->get_achievements_by_id($id)->row_array();

        $this->load->model('upload_model');
        $temp_path = $this->upload_model->upload_temp_image('image_file');
        if (!empty($temp_path)) {
            $year = date("Y");
            $month = date("m");
            $day = date("d");
            //The folder path for our file should be YYYY/MM/DD
            $directory = "../uploads/achievements/" . "$year/$month/$day/";

            //If the directory doesn't already exists.
            if (!is_dir($directory)) {
                mkdir($directory, 0755, true);
            }

            $data["image"] = $this->upload_model->image_upload_achievements($temp_path, $directory);
            $this->upload_model->delete_temp_image($temp_path);
            delete_file_from_server('../' . $row['image']);
        }

        $data['alt'] = html_escape($this->input->post('alt'));
        $data['name'] = html_escape($this->input->post('name'));
        $data['description'] = html_escape($this->input->post('description'));
        $this->db->where('id', $id);
        $this->db->update('achievements', $data);
        $this->session->set_flashdata('flash_message', get_phrase('achievement_updated_successfully'));
        return simple_json_output($resultpost);
    }

    public function delete_achievements($id)
    {
        $row = $this->get_achievements_by_id($id)->row_array();
        if ($row != '') {
            $this->db->where('id', $id);
            $this->db->delete('achievements');
            $this->session->set_flashdata('flash_message', get_phrase('achievements_deleted_successfully'));
            delete_file_from_server('../' . $row['image']);
        }
        else {
            redirect(site_url('admin/achievements'), 'refresh');
            $this->session->set_flashdata('error_message', get_phrase('no_data_found'));
        }
    }

    // manage Brochure Enquiry
    public function get_brochure_enquiry()
    {
        $params['draw'] = $_REQUEST['draw'];
        $start = $_REQUEST['start'];
        $length = $_REQUEST['length'];

        $search_value = $_REQUEST['search']['value'];
        $data = array();
        $keyword_filter = "";

        if (!empty($search_value)) {
            $keyword = $search_value;
            $keyword_filter = " AND (name like '%" . $keyword . "%')";

            $total_count = $this->db->query("SELECT id FROM brochure WHERE (id<>'') $keyword_filter ORDER BY id DESC")->num_rows();
            $query = $this->db->query("SELECT id,name,mobile,email,created_at FROM brochure WHERE (id<>'') $keyword_filter ORDER BY id DESC LIMIT $start, $length");
        }
        else {
            $total_count = $this->db->query("SELECT id FROM brochure WHERE (id<>'') $keyword_filter ORDER BY id DESC")->num_rows();
            $query = $this->db->query("SELECT id,name,mobile,email,created_at FROM brochure WHERE (id<>'') $keyword_filter ORDER BY id DESC LIMIT $start, $length");
        }

        if (!empty($query)) {
            foreach ($query->result_array() as $item) {

                $created_at = '';
                if ($item['created_at'] != "" || $item['created_at'] != NULL) {

                    $newData = new DateTime($item['created_at']);
                    $formattedDate = $newData->format("d M, Y");
                    $created_at = $formattedDate;
                }
                else {
                    $created_at = '-';
                }

                $delete_url = base_url() . 'admin/brochure_enquiry/delete/' . $item['id'];
                $confim_txt = "Confirm Delete";
                $action = '<a href="#" onclick="confirm_modal(\'' . $delete_url . '\',\'' . $confim_txt . '\');"><button type="button" class="btn mr-1 mb-1 icon-btn-del"><i class="fa fa-trash" aria-hidden="true"></i></button></a>';

                $data[] = array(
                    "sr" => ++$start,
                    "name" => $item['name'],
                    "mobile" => $item['mobile'],
                    "date" => $created_at,
                    "email" => $item['email'],
                    "action" => $action
                );
            }
        }

        $json_data = array(
            "draw" => intval($params['draw']),
            "recordsTotal" => $total_count,
            "recordsFiltered" => $total_count,
            "data" => $data
        );
        echo json_encode($json_data);
    }

    public function get_brochure_enquiry_by_id($id)
    {
        $this->db->where('id', $id);
        return $this->db->get('brochure');
    }

    public function delete_brochure_enquiry($id)
    {
        $row = $this->get_brochure_enquiry_by_id($id)->row_array();
        if ($row != '') {
            $this->db->where('id', $id);
            $this->db->delete('brochure');
            $this->session->set_flashdata('flash_message', get_phrase('brochure_enquiry_deleted_successfully'));
        }
        else {
            redirect(site_url('admin/brochure-enquiry'), 'refresh');
            $this->session->set_flashdata('error_message', get_phrase('no_data_found'));
        }
    }

    // manage Youtube Enquiry Form

    public function get_youtube_enquiry()
    {
        $params['draw'] = $_REQUEST['draw'];
        $start = $_REQUEST['start'];
        $length = $_REQUEST['length'];

        $search_value = $_REQUEST['search']['value'];
        $data = array();
        $keyword_filter = "";

        if (!empty($search_value)) {
            $keyword = $search_value;
            $keyword_filter = " AND (name like '%" . $keyword . "%')";

            $total_count = $this->db->query("SELECT id FROM youtube_enquiry WHERE (id<>'') $keyword_filter ORDER BY id DESC")->num_rows();
            $query = $this->db->query("SELECT id,name,email,phone,created_at FROM youtube_enquiry WHERE (id<>'') $keyword_filter ORDER BY id DESC LIMIT $start, $length");
        }
        else {
            $total_count = $this->db->query("SELECT id FROM youtube_enquiry WHERE (id<>'') $keyword_filter ORDER BY id DESC")->num_rows();
            $query = $this->db->query("SELECT id,name,email,phone,created_at FROM youtube_enquiry WHERE (id<>'') $keyword_filter ORDER BY id DESC LIMIT $start, $length");
        }

        if (!empty($query)) {
            foreach ($query->result_array() as $item) {

                $created_at = '';
                if ($item['created_at'] != "" || $item['created_at'] != NULL) {

                    $newData = new DateTime($item['created_at']);
                    $formattedDate = $newData->format("d M, Y");
                    $created_at = $formattedDate;
                }
                else {
                    $created_at = '-';
                }

                $delete_url = base_url() . 'admin/youtube_enquiry/delete/' . $item['id'];
                $confim_txt = "Confirm Delete";
                $action = '<a href="#" onclick="confirm_modal(\'' . $delete_url . '\',\'' . $confim_txt . '\');"><button type="button" class="btn mr-1 mb-1 icon-btn-del"><i class="fa fa-trash" aria-hidden="true"></i></button></a>';

                $data[] = array(
                    "sr" => ++$start,
                    "name" => $item['name'],
                    "phone" => $item['phone'],
                    "email" => $item['email'],
                    "created_at" => $created_at,
                    "action" => $action
                );
            }
        }

        $json_data = array(
            "draw" => intval($params['draw']),
            "recordsTotal" => $total_count,
            "recordsFiltered" => $total_count,
            "data" => $data
        );
        echo json_encode($json_data);
    }

    public function get_youtube_by_id($id)
    {

        return $this->db->where('id', $id)
            ->get('youtube_enquiry');
    }

    public function delete_youtube_enquiry($id)
    {
        $row = $this->get_youtube_by_id($id)->row_array();
        if ($row != '') {
            $this->db->where('id', $id);
            $this->db->delete('youtube_enquiry');
            $this->session->set_flashdata('flash_message', get_phrase('youtube_enquiry_deleted_successfully'));
        }
        else {
            redirect(site_url('admin/youtube-enquiry'), 'refresh');
            $this->session->set_flashdata('error_message', get_phrase('no_data_found'));
        }
    }

    // manage Admission Enquiry Form

    public function get_summer_camp_enquiry()
    {
        $params['draw'] = $_REQUEST['draw'];
        $start = $_REQUEST['start'];
        $length = $_REQUEST['length'];

        $search_value = $_REQUEST['search']['value'];
        $data = array();
        $keyword_filter = "";

        if (!empty($search_value)) {
            $keyword = $search_value;
            $keyword_filter = " AND (child_name like '%" . $keyword . "%')";

            $total_count = $this->db->query("SELECT id FROM summer_camp_enquiry WHERE (id<>'') $keyword_filter ORDER BY id DESC")->num_rows();
            $query = $this->db->query("SELECT id,student_name,parent_name,email,phone,location,about_us,created_at FROM summer_camp_enquiry WHERE (id<>'') $keyword_filter ORDER BY id DESC LIMIT $start, $length");
        }
        else {
            $total_count = $this->db->query("SELECT id FROM summer_camp_enquiry WHERE (id<>'') $keyword_filter ORDER BY id DESC")->num_rows();
            $query = $this->db->query("SELECT id,student_name,parent_name,email,phone,location,about_us,created_at FROM summer_camp_enquiry WHERE (id<>'') $keyword_filter ORDER BY id DESC LIMIT $start, $length");
        }

        if (!empty($query)) {
            foreach ($query->result_array() as $item) {

                $created_at = '';
                if ($item['created_at'] != "" || $item['created_at'] != NULL) {

                    $newData = new DateTime($item['created_at']);
                    $formattedDate = $newData->format("d M, Y");
                    $created_at = $formattedDate;
                }
                else {
                    $created_at = '-';
                }

                $delete_url = base_url() . 'admin/summer_camp_enquiry/delete/' . $item['id'];
                $confim_txt = "Confirm Delete";
                $action = '<a href="#" onclick="confirm_modal(\'' . $delete_url . '\',\'' . $confim_txt . '\');"><button type="button" class="btn mr-1 mb-1 icon-btn-del"><i class="fa fa-trash" aria-hidden="true"></i></button></a>';

                $data[] = array(
                    "sr" => ++$start,
                    "child" => $item['student_name'],
                    "parent" => $item['parent_name'],
                    "location" => $item['location'],
                    "phone" => $item['phone'],
                    "email" => $item['email'],
                    "know_about_us" => $item['about_us'],
                    "created_at" => $created_at,
                    "action" => $action
                );
            }
        }

        $json_data = array(
            "draw" => intval($params['draw']),
            "recordsTotal" => $total_count,
            "recordsFiltered" => $total_count,
            "data" => $data
        );
        echo json_encode($json_data);
    }

    public function get_summer_camp_enq_by_id($id)
    {

        return $this->db->where('id', $id)
            ->get('summer_camp_enquiry');
    }

    public function delete_summer_camp_enquiry($id)
    {
        $row = $this->get_summer_camp_enq_by_id($id)->row_array();
        if ($row != '') {
            $this->db->where('id', $id);
            $this->db->delete('summer_camp_enquiry');
            $this->session->set_flashdata('flash_message', get_phrase('summer_camp_enquiry_deleted_successfully'));
        }
        else {
            redirect(site_url('admin/summer-camp-enquiry'), 'refresh');
            $this->session->set_flashdata('error_message', get_phrase('no_data_found'));
        }
    }

    // manage Admission Enquiry Form

    public function get_admission_enquiry()
    {
        $params['draw'] = $_REQUEST['draw'];
        $start = $_REQUEST['start'];
        $length = $_REQUEST['length'];

        $search_value = $_REQUEST['search']['value'];
        $data = array();
        $keyword_filter = "";

        if (!empty($search_value)) {
            $keyword = $search_value;
            $keyword_filter = " AND (child_name like '%" . $keyword . "%')";

            $total_count = $this->db->query("SELECT id FROM admission_enquiry WHERE (id<>'') $keyword_filter ORDER BY id DESC")->num_rows();
            $query = $this->db->query("SELECT id,child_name,parent_name,class,email,phone,know_about_us,created_at FROM admission_enquiry WHERE (id<>'') $keyword_filter ORDER BY id DESC LIMIT $start, $length");
        }
        else {
            $total_count = $this->db->query("SELECT id FROM admission_enquiry WHERE (id<>'') $keyword_filter ORDER BY id DESC")->num_rows();
            $query = $this->db->query("SELECT id,child_name,parent_name,class,email,phone,know_about_us,created_at FROM admission_enquiry WHERE (id<>'') $keyword_filter ORDER BY id DESC LIMIT $start, $length");
        }

        if (!empty($query)) {
            foreach ($query->result_array() as $item) {

                $created_at = '';
                if ($item['created_at'] != "" || $item['created_at'] != NULL) {

                    $newData = new DateTime($item['created_at']);
                    $formattedDate = $newData->format("d M, Y");
                    $created_at = $formattedDate;
                }
                else {
                    $created_at = '-';
                }

                $delete_url = base_url() . 'admin/admission_enquiry/delete/' . $item['id'];
                $confim_txt = "Confirm Delete";
                $action = '<a href="#" onclick="confirm_modal(\'' . $delete_url . '\',\'' . $confim_txt . '\');"><button type="button" class="btn mr-1 mb-1 icon-btn-del"><i class="fa fa-trash" aria-hidden="true"></i></button></a>';

                $data[] = array(
                    "sr" => ++$start,
                    "child" => $item['child_name'],
                    "parent" => $item['parent_name'],
                    "class" => $item['class'],
                    "phone" => $item['phone'],
                    "email" => $item['email'],
                    "know_about_us" => $item['know_about_us'],
                    "created_at" => $created_at,
                    "action" => $action
                );
            }
        }

        $json_data = array(
            "draw" => intval($params['draw']),
            "recordsTotal" => $total_count,
            "recordsFiltered" => $total_count,
            "data" => $data
        );
        echo json_encode($json_data);
    }

    public function get_admission_enq_by_id($id)
    {
        return $this->db->where('id', $id)
            ->get('admission_enquiry');
    }

    public function delete_admission_enquiry($id)
    {
        $row = $this->get_admission_enq_by_id($id)->row_array();
        if ($row != '') {
            $this->db->where('id', $id);
            $this->db->delete('admission_enquiry');
            $this->session->set_flashdata('flash_message', get_phrase('admission_enquiry_deleted_successfully'));
        }
        else {
            redirect(site_url('admin/admission-enquiry'), 'refresh');
            $this->session->set_flashdata('error_message', get_phrase('no_data_found'));
        }
    }

    // manage Request A Callback Enquiry

    public function get_callback_enquiry()
    {
        $params['draw'] = $_REQUEST['draw'];
        $start = $_REQUEST['start'];
        $length = $_REQUEST['length'];

        $search_value = $_REQUEST['search']['value'];
        $data = array();
        $keyword_filter = "";

        if (!empty($search_value)) {
            $keyword = $search_value;
            $keyword_filter = " AND (child_name like '%" . $keyword . "%')";
        }

        $total_count = $this->db->query("SELECT id FROM call_back_enquiry WHERE (id<>'') AND is_show='1' $keyword_filter ORDER BY id DESC")->num_rows();
        $query = $this->db->query("SELECT id,child_name,parent_name,know_about_us,email,phone,message,created_at FROM call_back_enquiry WHERE (id<>'') AND is_show='1' $keyword_filter ORDER BY id DESC LIMIT $start, $length");

        if (!empty($query)) {
            foreach ($query->result_array() as $item) {

                $created_at = '';
                if ($item['created_at'] != "" || $item['created_at'] != NULL) {

                    $newData = new DateTime($item['created_at']);
                    $formattedDate = $newData->format("d M, Y");
                    $created_at = $formattedDate;
                }
                else {
                    $created_at = '-';
                }

                $delete_url = base_url() . 'admin/callback_enquiry/delete/' . $item['id'];
                $confim_txt = "Confirm Delete";
                $action = '<a href="#" onclick="confirm_modal(\'' . $delete_url . '\',\'' . $confim_txt . '\');"><button type="button" class="btn mr-1 mb-1 icon-btn-del"><i class="fa fa-trash" aria-hidden="true"></i></button></a>';

                $data[] = array(
                    "sr" => ++$start,
                    "name" => $item['child_name'],
                    "parent" => $item['parent_name'],
                    "know_about_us" => $item['know_about_us'],
                    "phone" => $item['phone'],
                    "email" => $item['email'],
                    "message" => $item['message'],
                    "created_at" => $created_at,
                    "action" => $action
                );
            }
        }

        $json_data = array(
            "draw" => intval($params['draw']),
            "recordsTotal" => $total_count,
            "recordsFiltered" => $total_count,
            "data" => $data
        );
        echo json_encode($json_data);
    }

    public function get_callback_enq_by_id($id)
    {
        return $this->db->where('id', $id)
            ->get('call_back_enquiry');
    }

    public function delete_callback_enquiry($id)
    {
        $row = $this->get_callback_enq_by_id($id)->row_array();
        if ($row != '') {
            $this->db->where('id', $id);
            $this->db->delete('call_back_enquiry');
            $this->session->set_flashdata('flash_message', get_phrase('callback_enquiry_deleted_successfully'));
        }
        else {
            redirect(site_url('admin/callback-enquiry'), 'refresh');
            $this->session->set_flashdata('error_message', get_phrase('no_data_found'));
        }
    }

    // manage Registered Event Enquiry

    public function get_registered_event()
    {
        $params['draw'] = $_REQUEST['draw'];
        $start = $_REQUEST['start'];
        $length = $_REQUEST['length'];

        $search_value = $_REQUEST['search']['value'];
        $data = array();
        $keyword_filter = "";

        if (!empty($search_value)) {
            $keyword = $search_value;
            $keyword_filter = " AND (name like '%" . $keyword . "%')";

            $total_count = $this->db->query("SELECT id FROM register_event WHERE (id<>'') $keyword_filter ORDER BY id DESC")->num_rows();
            $query = $this->db->query("SELECT id,name,gender,event_id,phone,location,created_at FROM register_event WHERE (id<>'') $keyword_filter ORDER BY id DESC LIMIT $start, $length");
        }
        else {
            $total_count = $this->db->query("SELECT id FROM register_event WHERE (id<>'') $keyword_filter ORDER BY id DESC")->num_rows();
            $query = $this->db->query("SELECT id,name,gender,event_id,phone,location,created_at FROM register_event WHERE (id<>'') $keyword_filter ORDER BY id DESC LIMIT $start, $length");
        }

        if (!empty($query)) {
            foreach ($query->result_array() as $item) {

                $created_at = '';
                if ($item['created_at'] != "" || $item['created_at'] != NULL) {

                    $newData = new DateTime($item['created_at']);
                    $formattedDate = $newData->format("d M, Y");
                    $created_at = $formattedDate;
                }
                else {
                    $created_at = '-';
                }

                $event = $this->db->select('name')
                    ->where('id', $item['event_id'])
                    ->get('events')
                    ->row_array();


                $delete_url = base_url() . 'admin/registered_event/delete/' . $item['id'];
                $confim_txt = "Confirm Delete";
                $action = '<a href="#" onclick="confirm_modal(\'' . $delete_url . '\',\'' . $confim_txt . '\');"><button type="button" class="btn mr-1 mb-1 icon-btn-del"><i class="fa fa-trash" aria-hidden="true"></i></button></a>';

                $data[] = array(
                    "sr" => ++$start,
                    "name" => $item['name'],
                    "event" => $event['name'],
                    "gender" => $item['gender'],
                    "location" => $item['location'],
                    "phone" => $item['phone'],
                    "created_at" => $created_at,
                    "action" => $action
                );
            }
        }

        $json_data = array(
            "draw" => intval($params['draw']),
            "recordsTotal" => $total_count,
            "recordsFiltered" => $total_count,
            "data" => $data
        );
        echo json_encode($json_data);
    }

    public function get_reg_event_enq_by_id($id)
    {
        return $this->db->where('id', $id)
            ->get('register_event');
    }

    public function delete_reg_evnt_enquiry($id)
    {
        $row = $this->get_reg_event_enq_by_id($id)->row_array();
        if ($row != '') {
            $this->db->where('id', $id);
            $this->db->delete('register_event');
            $this->session->set_flashdata('flash_message', get_phrase('event_enquiry_deleted_successfully'));
        }
        else {
            redirect(site_url('admin/registered-event'), 'refresh');
            $this->session->set_flashdata('error_message', get_phrase('no_data_found'));
        }
    }

    // manage Career Enquiry

    public function get_career_enquiry()
    {
        $params['draw'] = $_REQUEST['draw'];
        $start = $_REQUEST['start'];
        $length = $_REQUEST['length'];

        $search_value = $_REQUEST['search']['value'];
        $data = array();
        $keyword_filter = "";

        if (!empty($search_value)) {
            $keyword = $search_value;
            $keyword_filter = " AND (name like '%" . $keyword . "%')";

            $total_count = $this->db->query("SELECT id FROM career_enquiry WHERE (id<>'') $keyword_filter ORDER BY id DESC")->num_rows();
            $query = $this->db->query("SELECT id,name,email,chat_with_us,phone,branch_id,career_id,resume,created_at FROM career_enquiry WHERE (id<>'') $keyword_filter ORDER BY id DESC LIMIT $start, $length");
        }
        else {
            $total_count = $this->db->query("SELECT id FROM career_enquiry WHERE (id<>'') $keyword_filter ORDER BY id DESC")->num_rows();
            $query = $this->db->query("SELECT id,name,email,chat_with_us,phone,branch_id,career_id,resume,created_at FROM career_enquiry WHERE (id<>'') $keyword_filter ORDER BY id DESC LIMIT $start, $length");
        }

        if (!empty($query)) {
            foreach ($query->result_array() as $item) {

                $created_at = '';
                if ($item['created_at'] != "" || $item['created_at'] != NULL) {

                    $newData = new DateTime($item['created_at']);
                    $formattedDate = $newData->format("d M, Y");
                    $created_at = $formattedDate;
                }
                else {
                    $created_at = '-';
                }

                $branch = $this->db->select('name')
                    ->where('id', $item['branch_id'])
                    ->get('branches')
                    ->row_array();

                $career = $this->db->select('title')
                    ->where('id', $item['career_id'])
                    ->get('careers')
                    ->row_array();

                $resume = '';
                if ($item['resume'] != "" || $item['resume'] != NULL) {
                    $resume = "<a class='custom-pdf' href='" . main_url() . $item['resume'] . "' target='_blank'>View Pdf</a>";
                }
                else {
                    $resume = '-';
                }

                $delete_url = base_url() . 'admin/career_enquiry/delete/' . $item['id'];
                $confim_txt = "Confirm Delete";
                $action = '<a href="#" onclick="confirm_modal(\'' . $delete_url . '\',\'' . $confim_txt . '\');"><button type="button" class="btn mr-1 mb-1 icon-btn-del"><i class="fa fa-trash" aria-hidden="true"></i></button></a>';

                $data[] = array(
                    "sr" => ++$start,
                    "name" => $item['name'],
                    "email" => $item['email'],
                    "phone" => $item['phone'],
                    "career_id" => $career['title'],
                    "chat" => $item['chat_with_us'],
                    "branch_id" => $branch['name'],
                    "resume" => $resume,
                    "created_at" => $created_at,
                    "action" => $action
                );
            }
        }

        $json_data = array(
            "draw" => intval($params['draw']),
            "recordsTotal" => $total_count,
            "recordsFiltered" => $total_count,
            "data" => $data
        );
        echo json_encode($json_data);
    }

    public function get_career_enq_by_id($id)
    {
        return $this->db->where('id', $id)
            ->get('career_enquiry');
    }

    public function delete_career_enquiry($id)
    {
        $row = $this->get_career_enq_by_id($id)->row_array();
        if ($row != '') {
            $this->db->where('id', $id);
            $this->db->delete('career_enquiry');
            $this->session->set_flashdata('flash_message', get_phrase('career_enquiry_deleted_successfully'));
            delete_file_from_server('../' . $row['resume']);
        }
        else {
            redirect(site_url('admin/career-enquiry'), 'refresh');
            $this->session->set_flashdata('error_message', get_phrase('no_data_found'));
        }
    }

    // manage Career

    public function get_careers()
    {
        $params['draw'] = $_REQUEST['draw'];
        $start = $_REQUEST['start'];
        $length = $_REQUEST['length'];

        $search_value = $_REQUEST['search']['value'];
        $data = array();
        $keyword_filter = "";

        if (!empty($search_value)) {
            $keyword = $search_value;
            $keyword_filter = " AND (name like '%" . $keyword . "%')";

            $total_count = $this->db->query("SELECT id FROM careers WHERE (id<>'') $keyword_filter ORDER BY id DESC")->num_rows();
            $query = $this->db->query("SELECT id,title,pdf,experience,created_at FROM careers WHERE (id<>'') $keyword_filter ORDER BY id DESC LIMIT $start, $length");
        }
        else {
            $total_count = $this->db->query("SELECT id FROM careers WHERE (id<>'') $keyword_filter ORDER BY id DESC")->num_rows();
            $query = $this->db->query("SELECT id,title,pdf,experience,created_at FROM careers WHERE (id<>'') $keyword_filter ORDER BY id DESC LIMIT $start, $length");
        }

        if (!empty($query)) {
            foreach ($query->result_array() as $item) {

                $created_at = '';
                if ($item['created_at'] != "" || $item['created_at'] != NULL) {

                    $newData = new DateTime($item['created_at']);
                    $formattedDate = $newData->format("d M, Y");
                    $created_at = $formattedDate;
                }
                else {
                    $created_at = '-';
                }

                $pdf = '';
                if ($item['pdf'] != "" || $item['pdf'] != NULL) {
                    $pdf = "<a class='custom-pdf' href='" . main_url() . $item['pdf'] . "' target='_blank'>View Pdf</a>";
                }
                else {
                    $pdf = '-';
                }

                $edit_url = base_url() . 'admin/careers/edit/' . $item['id'];
                $delete_url = base_url() . 'admin/careers/delete/' . $item['id'];
                $confim_txt = "Confirm Delete";
                $action = '<a href="' . $edit_url . '" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit"><button type="button" class="btn mr-1 mb-1 icon-btn-edit"><i class="fa fa-pencil" aria-hidden="true"></i></button></a>';
                $action .= '<a href="#" onclick="confirm_modal(\'' . $delete_url . '\',\'' . $confim_txt . '\');"><button type="button" class="btn mr-1 mb-1 icon-btn-del"><i class="fa fa-trash" aria-hidden="true"></i></button></a>';

                $data[] = array(
                    "sr" => ++$start,
                    "title" => $item['title'],
                    "exp" => $item['experience'],
                    "pdf" => $pdf,
                    "created_at" => $created_at,
                    "action" => $action
                );
            }
        }

        $json_data = array(
            "draw" => intval($params['draw']),
            "recordsTotal" => $total_count,
            "recordsFiltered" => $total_count,
            "data" => $data
        );
        echo json_encode($json_data);
    }

    public function add_careers()
    {
        $super_type = $this->session->userdata('super_type');
        if ($super_type == 'admin') {
            $url = base_url('admin/careers');
        }

        $resultpost = array(
            "status" => 200,
            "message" => get_phrase('career_added_successfully'),
            "url" => $url,
        );


        if ($_FILES['file']['name'] != "") {
            $year = date("Y");
            $month = date("m");
            $day = date("d");
            $directory = "../uploads/careers/" . "$year/$month/$day";

            if (!is_dir($directory)) {
                mkdir($directory, 0755, true);
            }

            $upload_path = $directory;
            $upload_path2 = "uploads/careers/" . "$year/$month/$day";

            $tmpFilePath = $_FILES['file']['tmp_name'];
            $ext2 = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);

            if ($tmpFilePath != "") {
                $this->load->helper('string');
                $token = random_string('alnum', 10);
                if (isset($_FILES['file']) && is_uploaded_file($_FILES['file']['tmp_name'])) {
                    $file = 'resume_' . $token . '.' . $ext2;
                    move_uploaded_file($_FILES['file']['tmp_name'], $upload_path . '/' . $file);
                    $data['pdf'] = $upload_path2 . '/' . $file;
                }
            }
        }


        $title = html_escape($this->input->post('title'));
        $data['title'] = html_escape($this->input->post('title'));
        $data['slug'] = $this->common_model->create_unique_slug('careers', 'title', $title, $id = "");
        $data['experience'] = html_escape($this->input->post('experience'));
        $data['description'] = $this->input->post('description');
        $data['created_at'] = date("Y-m-d H:i:s");
        $this->db->insert('careers', $data);
        $this->session->set_flashdata('flash_message', get_phrase('career_added_successfully'));
        return simple_json_output($resultpost);
    }

    public function edit_careers($id)
    {
        $super_type = $this->session->userdata('super_type');
        if ($super_type == 'admin') {
            $url = base_url('admin/careers');
        }

        $resultpost = array(
            "status" => 200,
            "message" => get_phrase('careers_updated_successfully'),
            "url" => $url,
        );

        $row = $this->get_careers_by_id($id)->row_array();

        if ($_FILES['file']['name'] != "") {
            $year = date("Y");
            $month = date("m");
            $day = date("d");
            $directory = "../uploads/careers/" . "$year/$month/$day";

            if (!is_dir($directory)) {
                mkdir($directory, 0755, true);
            }

            $upload_path = $directory;
            $upload_path2 = "uploads/careers/" . "$year/$month/$day";

            $tmpFilePath = $_FILES['file']['tmp_name'];
            $ext2 = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);

            if ($tmpFilePath != "") {
                $this->load->helper('string');
                $token = random_string('alnum', 10);
                if (isset($_FILES['file']) && is_uploaded_file($_FILES['file']['tmp_name'])) {
                    $file = 'resume_' . $token . '.' . $ext2;
                    move_uploaded_file($_FILES['file']['tmp_name'], $upload_path . '/' . $file);
                    $data['pdf'] = $upload_path2 . '/' . $file;
                    if ($row['pdf'] != "" || $row['pdf'] != NULL) {
                        delete_file_from_server('../' . $row['pdf']);
                    }
                }
            }
        }

        $data['title'] = html_escape($this->input->post('title'));
        $data['slug'] = $this->common_model->create_unique_slug('careers', 'title', $data['title'], $id);
        $data['experience'] = html_escape($this->input->post('experience'));
        $data['description'] = html_escape($this->input->post('description'));

        $this->db->where('id', $id);
        $this->db->update('careers', $data);

        $this->session->set_flashdata('flash_message', get_phrase('careers_updated_successfully'));
        return simple_json_output($resultpost);
    }

    public function get_careers_by_id($id)
    {
        $this->db->where('id', $id);
        return $this->db->get('careers');
    }

    public function delete_careers($id)
    {
        $row = $this->get_careers_by_id($id)->row_array();
        if ($row != '') {
            $this->db->where('id', $id);
            $this->db->delete('careers');
            $this->session->set_flashdata('flash_message', get_phrase('career_deleted_successfully'));
            delete_file_from_server('../' . $row['pdf']);
        }
        else {
            redirect(site_url('admin/careers'), 'refresh');
            $this->session->set_flashdata('error_message', get_phrase('no_data_found'));
        }
    }

    // manage Parent Testimonial

    public function get_parents_testimonials()
    {
        $params['draw'] = $_REQUEST['draw'];
        $start = $_REQUEST['start'];
        $length = $_REQUEST['length'];

        $search_value = $_REQUEST['search']['value'];
        $data = array();
        $keyword_filter = "";

        if (!empty($search_value)) {
            $keyword = $search_value;
            $keyword_filter = " AND (name like '%" . $keyword . "%')";

            $total_count = $this->db->query("SELECT id FROM parents_testimonials WHERE (id<>'') $keyword_filter ORDER BY id DESC")->num_rows();
            $query = $this->db->query("SELECT id,url,branch_id,thumbnail FROM parents_testimonials WHERE (id<>'') $keyword_filter ORDER BY id DESC LIMIT $start, $length");
        }
        else {
            $total_count = $this->db->query("SELECT id FROM parents_testimonials WHERE (id<>'') $keyword_filter ORDER BY id DESC")->num_rows();
            $query = $this->db->query("SELECT id,url,branch_id,thumbnail FROM parents_testimonials WHERE (id<>'') $keyword_filter ORDER BY id DESC LIMIT $start, $length");
        }

        if (!empty($query)) {
            foreach ($query->result_array() as $item) {

                $thumbnail = '';
                if ($item['thumbnail'] != '') {
                    $img_url = main_url() . $item['thumbnail'];
                    $thumbnail = '<img src="' . $img_url . '"  class="rounded" height="50">';
                }
                else {
                    $thumbnail = '-';
                }

                $name = $this->db->select('name')
                    ->where('id', $item['branch_id'])
                    ->get('branches')
                    ->row_array();

                $edit_url = base_url() . 'admin/parents-testimonials/edit/' . $item['id'];
                $delete_url = base_url() . 'admin/parents_testimonials/delete/' . $item['id'];
                $confim_txt = "Confirm Delete";
                $action = '<a href="' . $edit_url . '" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit"><button type="button" class="btn mr-1 mb-1 icon-btn-edit"><i class="fa fa-pencil" aria-hidden="true"></i></button></a>';
                $action .= '<a href="#" onclick="confirm_modal(\'' . $delete_url . '\',\'' . $confim_txt . '\');"><button type="button" class="btn mr-1 mb-1 icon-btn-del"><i class="fa fa-trash" aria-hidden="true"></i></button></a>';

                $data[] = array(
                    "sr" => ++$start,
                    "name" => $name['name'],
                    "url" => $item['url'],
                    "thumbnail" => $thumbnail,
                    "action" => $action
                );
            }
        }

        $json_data = array(
            "draw" => intval($params['draw']),
            "recordsTotal" => $total_count,
            "recordsFiltered" => $total_count,
            "data" => $data
        );
        echo json_encode($json_data);
    }

    public function add_parents_testimonials()
    {
        $super_type = $this->session->userdata('super_type');
        if ($super_type == 'admin') {
            $url = base_url('admin/parents-testimonials');
        }

        $resultpost = array(
            "status" => 200,
            "message" => get_phrase('parents_testimonials_added_successfully'),
            "url" => $url,
        );

        $this->load->model('upload_model');
        $temp_path = $this->upload_model->upload_temp_image('image_file');
        if (!empty($temp_path)) {
            $year = date("Y");
            $month = date("m");
            $day = date("d");
            //The folder path for our file should be YYYY/MM/DD
            $directory = "../uploads/parents_testimonial/" . "$year/$month/$day/";

            //If the directory doesn't already exists.
            if (!is_dir($directory)) {
                mkdir($directory, 0755, true);
            }
            $data["thumbnail"] = $this->upload_model->image_upload_print_media($temp_path, $directory);
            $this->upload_model->delete_temp_image($temp_path);
        }

        $data['url'] = html_escape($this->input->post('url'));
        $data['branch_id'] = html_escape($this->input->post('branch_id'));
        $data['created_at'] = date("Y-m-d H:i:s");

        $this->db->insert('parents_testimonials', $data);
        $this->session->set_flashdata('flash_message', get_phrase('parents_testimonials_added_successfully'));
        return simple_json_output($resultpost);
    }

    public function get_parents_testimonials_by_id($id)
    {
        $this->db->where('id', $id);
        return $this->db->get('parents_testimonials');
    }

    public function edit_parents_testimonials($id)
    {
        $super_type = $this->session->userdata('super_type');
        if ($super_type == 'admin') {
            $url = base_url('admin/parents-testimonials');
        }

        $resultpost = array(
            "status" => 200,
            "message" => get_phrase('parents_testimonials_updated_successfully'),
            "url" => $url,
        );

        $row = $this->get_parents_testimonials_by_id($id)->row_array();

        $this->load->model('upload_model');
        $temp_path = $this->upload_model->upload_temp_image('image_file');
        if (!empty($temp_path)) {
            $year = date("Y");
            $month = date("m");
            $day = date("d");
            //The folder path for our file should be YYYY/MM/DD
            $directory = "../uploads/parents_testimonial/" . "$year/$month/$day/";

            //If the directory doesn't already exists.
            if (!is_dir($directory)) {
                mkdir($directory, 0755, true);
            }
            $data["thumbnail"] = $this->upload_model->image_upload_print_media($temp_path, $directory);
            $this->upload_model->delete_temp_image($temp_path);
            delete_file_from_server('../' . $row['thumbnail']);
        }

        $data['url'] = html_escape($this->input->post('url'));
        $data['branch_id'] = html_escape($this->input->post('branch_id'));

        $this->db->where('id', $id);
        $this->db->update('parents_testimonials', $data);
        $this->session->set_flashdata('flash_message', get_phrase('parents_testimonials_updated_successfully'));
        return simple_json_output($resultpost);
    }

    public function delete_parents_testimonials($id)
    {
        $row = $this->get_parents_testimonials_by_id($id)->row_array();
        if ($row != '') {
            $this->db->where('id', $id);
            $this->db->delete('parents_testimonials');
            $this->session->set_flashdata('flash_message', get_phrase('parents_testimonials_deleted_successfully'));
        }
        else {
            redirect(site_url('admin/parents-testimonials'), 'refresh');
            $this->session->set_flashdata('error_message', get_phrase('no_data_found'));
        }
    }

    // manage Awards and recognitions

    public function get_awards_and_recognitions()
    {
        $params['draw'] = $_REQUEST['draw'];
        $start = $_REQUEST['start'];
        $length = $_REQUEST['length'];

        $search_value = $_REQUEST['search']['value'];
        $data = array();
        $keyword_filter = "";

        if (!empty($search_value)) {
            $keyword = $search_value;
            $keyword_filter = " AND (name like '%" . $keyword . "%')";

            $total_count = $this->db->query("SELECT id FROM awards_and_recognitions WHERE (id<>'') $keyword_filter ORDER BY id DESC")->num_rows();
            $query = $this->db->query("SELECT id,name,image,description FROM awards_and_recognitions WHERE (id<>'') $keyword_filter ORDER BY id DESC LIMIT $start, $length");
        }
        else {
            $total_count = $this->db->query("SELECT id FROM awards_and_recognitions WHERE (id<>'') $keyword_filter ORDER BY id DESC")->num_rows();
            $query = $this->db->query("SELECT id,name,image,description FROM awards_and_recognitions WHERE (id<>'') $keyword_filter ORDER BY id DESC LIMIT $start, $length");
        }

        if (!empty($query)) {
            foreach ($query->result_array() as $item) {

                $image = '';
                if ($item['image'] != '') {
                    $img_url = main_url() . $item['image'];
                    $image = '<img src="' . $img_url . '"  class="rounded" height="50">';
                }
                else {
                    $image = '-';
                }

                $edit_url = base_url() . 'admin/awards-and-recognitions/edit/' . $item['id'];
                $delete_url = base_url() . 'admin/awards_and_recognitions/delete/' . $item['id'];
                $confim_txt = "Confirm Delete";
                $action = '<a href="' . $edit_url . '" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit"><button type="button" class="btn mr-1 mb-1 icon-btn-edit"><i class="fa fa-pencil" aria-hidden="true"></i></button></a>';
                $action .= '<a href="#" onclick="confirm_modal(\'' . $delete_url . '\',\'' . $confim_txt . '\');"><button type="button" class="btn mr-1 mb-1 icon-btn-del"><i class="fa fa-trash" aria-hidden="true"></i></button></a>';

                $data[] = array(
                    "sr" => ++$start,
                    "name" => $item['name'],
                    "image" => $image,
                    "description" => $item['description'],
                    "action" => $action
                );
            }
        }

        $json_data = array(
            "draw" => intval($params['draw']),
            "recordsTotal" => $total_count,
            "recordsFiltered" => $total_count,
            "data" => $data
        );
        echo json_encode($json_data);
    }

    public function add_awards_and_recognitions()
    {
        $super_type = $this->session->userdata('super_type');
        if ($super_type == 'admin') {
            $url = base_url('admin/awards-and-recognitions');
        }

        $resultpost = array(
            "status" => 200,
            "message" => get_phrase('award_and_recognization_added_successfully'),
            "url" => $url,
        );

        $this->load->model('upload_model');
        $temp_path = $this->upload_model->upload_temp_image('image_file');
        if (!empty($temp_path)) {
            $year = date("Y");
            $month = date("m");
            $day = date("d");
            //The folder path for our file should be YYYY/MM/DD
            $directory = "../uploads/awards_recognization/" . "$year/$month/$day/";

            //If the directory doesn't already exists.
            if (!is_dir($directory)) {
                mkdir($directory, 0755, true);
            }
            $data["image"] = $this->upload_model->image_upload_packages($temp_path, $directory);
            $this->upload_model->delete_temp_image($temp_path);
        }

        $data['name'] = html_escape($this->input->post('name'));
        $data['alt'] = html_escape($this->input->post('alt'));
        $data['description'] = html_escape($this->input->post('description'));
        $data['created_at'] = date("Y-m-d H:i:s");
        $this->db->insert('awards_and_recognitions', $data);
        $this->session->set_flashdata('flash_message', get_phrase('award_and_recognization_added_successfully'));
        return simple_json_output($resultpost);
    }

    public function get_awards_and_recognitions_by_id($id)
    {
        $this->db->where('id', $id);
        return $this->db->get('awards_and_recognitions');
    }

    public function edit_awards_and_recognitions($id)
    {
        $super_type = $this->session->userdata('super_type');
        if ($super_type == 'admin') {
            $url = base_url('admin/awards-and-recognitions');
        }

        $resultpost = array(
            "status" => 200,
            "message" => get_phrase('award_and_recognization_updated_successfully'),
            "url" => $url,
        );

        $row = $this->get_awards_and_recognitions_by_id($id)->row_array();

        $this->load->model('upload_model');
        $temp_path = $this->upload_model->upload_temp_image('image_file');
        if (!empty($temp_path)) {
            $year = date("Y");
            $month = date("m");
            $day = date("d");
            //The folder path for our file should be YYYY/MM/DD
            $directory = "../uploads/awards_recognization/" . "$year/$month/$day/";

            //If the directory doesn't already exists.
            if (!is_dir($directory)) {
                mkdir($directory, 0755, true);
            }
            $data["image"] = $this->upload_model->image_upload_packages($temp_path, $directory);
            $this->upload_model->delete_temp_image($temp_path);
            delete_file_from_server('../' . $row['image']);
        }

        $data['name'] = html_escape($this->input->post('name'));
        $data['alt'] = html_escape($this->input->post('alt'));
        $data['description'] = html_escape($this->input->post('description'));
        $this->db->where('id', $id);
        $this->db->update('awards_and_recognitions', $data);
        $this->session->set_flashdata('flash_message', get_phrase('award_and_recognization_updated_successfully'));
        return simple_json_output($resultpost);
    }

    public function delete_awards_and_recognitions($id)
    {
        $row = $this->get_awards_and_recognitions_by_id($id)->row_array();
        if ($row != '') {
            $this->db->where('id', $id);
            $this->db->delete('awards_and_recognitions');
            $this->session->set_flashdata('flash_message', get_phrase('award_and_recognization_deleted_successfully'));
            delete_file_from_server('../' . $row['image']);
        }
        else {
            redirect(site_url('admin/teams'), 'refresh');
            $this->session->set_flashdata('error_message', get_phrase('no_data_found'));
        }
    }

    // manage category 
    public function get_category()
    {
        $params['draw'] = $_REQUEST['draw'];
        $start = $_REQUEST['start'];
        $length = $_REQUEST['length'];

        $search_value = $_REQUEST['search']['value'];
        $data = array();
        $keyword_filter = "";

        if (!empty($search_value)) {
            $keyword = $search_value;
            $keyword_filter = " AND (name like '%" . $keyword . "%')";

            $total_count = $this->db->query("SELECT id FROM category WHERE (id<>'') $keyword_filter ORDER BY id DESC")->num_rows();
            $query = $this->db->query("SELECT id,name,status FROM category WHERE (id<>'') $keyword_filter ORDER BY id DESC LIMIT $start, $length");
        }
        else {
            $total_count = $this->db->query("SELECT id FROM category WHERE (id<>'') $keyword_filter ORDER BY id DESC")->num_rows();
            $query = $this->db->query("SELECT id,name,status FROM category WHERE (id<>'') $keyword_filter ORDER BY id DESC LIMIT $start, $length");
        }

        if (!empty($query)) {
            foreach ($query->result_array() as $item) {
                $status = '';
                if ($item['status'] == 1) {
                    $status = '<span class="badge badge-success">Active</span>';
                }
                else {
                    $status = '<span class="badge badge-danger">Inactive</span>';
                }

                $edit_url = base_url() . 'admin/product-category/edit/' . $item['id'];
                $delete_url = base_url() . 'admin/category/delete/' . $item['id'];
                $confim_txt = "Confirm Delete";
                $action = '<a href="' . $edit_url . '" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit"><button type="button" class="btn mr-1 mb-1 icon-btn-edit"><i class="fa fa-pencil" aria-hidden="true"></i></button></a>';
                $action .= '<a href="#" onclick="confirm_modal(\'' . $delete_url . '\',\'' . $confim_txt . '\');"><button type="button" class="btn mr-1 mb-1 icon-btn-del"><i class="fa fa-trash" aria-hidden="true"></i></button></a>';

                $data[] = array(
                    "sr" => ++$start,
                    "name" => $item['name'],
                    "status" => $status,
                    "action" => $action
                );
            }
        }

        $json_data = array(
            "draw" => intval($params['draw']),
            "recordsTotal" => $total_count,
            "recordsFiltered" => $total_count,
            "data" => $data
        );
        echo json_encode($json_data);
    }

    public function get_category_by_id($id)
    {
        $this->db->where('id', $id);
        return $this->db->get('category');
    }

    public function add_category()
    {
        $super_type = $this->session->userdata('super_type');
        if ($super_type == 'admin') {
            $url = base_url('admin/product-category');
        }

        $resultpost = array(
            "status" => 200,
            "message" => get_phrase('category_added_successfully'),
            "url" => $url,
        );

        $name = trim(html_escape($this->input->post('name')));

        $chk_name = $this->db->select('name')
            ->where('name', $name)
            ->get('category');

        if ($chk_name->num_rows() > 0) {

            $resultpost = array(
                "status" => 400,
                "message" => get_phrase('category_already_exist'),
                "url" => base_url('admin/product-category/add'),
            );

            $this->session->set_flashdata('error_message', get_phrase('category_already_exist'));
            return simple_json_output($resultpost);

        }
        else {
            $data['name'] = $name;
            $data['slug'] = $this->common_model->create_unique_slug('products', 'name', $name, $id = "");
            $data['status'] = html_escape($this->input->post('status'));
            $data['created_at'] = date("Y-m-d H:i:s");
            $this->db->insert('category', $data);
            $this->session->set_flashdata('flash_message', get_phrase('category_added_successfully'));
            return simple_json_output($resultpost);
        }
    }

    public function edit_category($id)
    {
        $super_type = $this->session->userdata('super_type');
        if ($super_type == 'admin') {
            $url = base_url('admin/product-category');
        }

        $resultpost = array(
            "status" => 200,
            "message" => get_phrase('category_updated_successfully'),
            "url" => $url,
        );

        $name = trim(html_escape($this->input->post('name')));

        $chk_name = $this->db->select('name')
            ->where('name', $name)
            ->where('id !=', $id)
            ->get('category');

        if ($chk_name->num_rows() > 0) {

            $resultpost = array(
                "status" => 400,
                "message" => get_phrase('category_already_exist'),
                "url" => base_url('admin/product-category/add'),
            );

            $this->session->set_flashdata('error_message', get_phrase('category_already_exist'));
            return simple_json_output($resultpost);

        }
        else {
            $data['name'] = $name;
            $data['slug'] = $this->common_model->create_unique_slug('products', 'name', $name, $id);
            $data['status'] = html_escape($this->input->post('status'));
            $this->db->where('id', $id)->update('category', $data);
            $this->session->set_flashdata('flash_message', get_phrase('category_updated_successfully'));
            return simple_json_output($resultpost);
        }
    }

    public function delete_category($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('category');
        $this->session->set_flashdata('flash_message', get_phrase('category_deleted_successfully'));
    }

    public function get_categories()
    {
        $this->db->select('name,id');
        return $this->db->get('category');
    }

    // manage products

    public function get_products()
    {
        $params['draw'] = $_REQUEST['draw'];
        $start = $_REQUEST['start'];
        $length = $_REQUEST['length'];

        $search_value = $_REQUEST['search']['value'];
        $data = array();
        $keyword_filter = "";

        if (!empty($search_value)) {
            $keyword = $search_value;
            $keyword_filter = " AND (name like '%" . $keyword . "%')";

            $total_count = $this->db->query("SELECT id FROM products WHERE (id<>'') AND (id<>'') $keyword_filter ORDER BY id DESC")->num_rows();
            $query = $this->db->query("SELECT id,name,category_id,image,status,created_at FROM products WHERE (id<>'') AND (id<>'') $keyword_filter ORDER BY id DESC LIMIT $start, $length");
        }
        else {
            $total_count = $this->db->query("SELECT id FROM products WHERE (id<>'') AND (id<>'') $keyword_filter ORDER BY id DESC")->num_rows();
            $query = $this->db->query("SELECT id,name,category_id,image,status,created_at FROM products WHERE (id<>'') AND (id<>'') $keyword_filter ORDER BY id DESC LIMIT $start, $length");
        }

        if (!empty($query)) {
            foreach ($query->result_array() as $item) {
                $status = '';
                if ($item['status'] == 1) {
                    $status = '<span class="badge badge-success">Active</span>';
                }
                else {
                    $status = '<span class="badge badge-danger">Inactive</span>';
                }

                $image = '';
                if ($item['image'] != '') {
                    $img_url = main_url() . $item['image'];
                    $image = '<img src="' . $img_url . '"  class="rounded" height="50">';
                }
                else {
                    $image = '-';
                }

                $category = $item['category_id'];
                $category_name = $this->common_model->getBulkNameIds('category', 'name', $category);

                $edit_url = base_url() . 'admin/products/edit/' . $item['id'];
                $delete_url = base_url() . 'admin/products/delete/' . $item['id'];
                $confim_txt = "Confirm Delete";
                $action = '<a href="' . $edit_url . '" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit"><button type="button" class="btn mr-1 mb-1 icon-btn-edit"><i class="fa fa-pencil" aria-hidden="true"></i></button></a>';
                $action .= '<a href="#" onclick="confirm_modal(\'' . $delete_url . '\',\'' . $confim_txt . '\');"><button type="button" class="btn mr-1 mb-1 icon-btn-del"><i class="fa fa-trash" aria-hidden="true"></i></button></a>';

                $data[] = array(
                    "sr" => ++$start,
                    "name" => $item['name'],
                    "image" => $image,
                    "category" => $category_name,
                    "status" => $status,
                    "action" => $action
                );
            }
        }

        $json_data = array(
            "draw" => intval($params['draw']),
            "recordsTotal" => $total_count,
            "recordsFiltered" => $total_count,
            "data" => $data
        );
        echo json_encode($json_data);
    }

    public function add_products()
    {
        $super_type = $this->session->userdata('super_type');
        if ($super_type == 'admin') {
            $url = base_url('admin/products');
        }

        $resultpost = array(
            "status" => 200,
            "message" => get_phrase('product_added_successfully'),
            "url" => $url,
        );

        $this->load->model('upload_model');
        $temp_path = $this->upload_model->upload_temp_image('image');
        if (!empty($temp_path)) {
            $year = date("Y");
            $month = date("m");
            $day = date("d");
            //The folder path for our file should be YYYY/MM/DD
            $directory = "../uploads/products/" . "$year/$month/$day/";

            //If the directory doesn't already exists.
            if (!is_dir($directory)) {
                mkdir($directory, 0755, true);
            }
            $data["image"] = $this->upload_model->image_upload_packages($temp_path, $directory);
            $this->upload_model->delete_temp_image($temp_path);
        }

        $cat = implode(",", $this->input->post('category_id'));

        $data['name'] = html_escape($this->input->post('name'));
        $data['status'] = html_escape($this->input->post('status'));
        $data['category_id'] = $cat;
        $data['created_at'] = date("Y-m-d H:i:s");
        $this->db->insert('products', $data);
        $this->session->set_flashdata('flash_message', get_phrase('product_added_successfully'));
        return simple_json_output($resultpost);
    }

    public function get_products_by_id($id)
    {
        $this->db->where('id', $id);
        return $this->db->get('products');
    }

    public function edit_products($id)
    {
        $super_type = $this->session->userdata('super_type');
        if ($super_type == 'admin') {
            $url = base_url('admin/products');
        }

        $resultpost = array(
            "status" => 200,
            "message" => get_phrase('product_updated_successfully'),
            "url" => $url,
        );

        $row = $this->get_products_by_id($id)->row_array();

        $this->load->model('upload_model');
        $temp_path = $this->upload_model->upload_temp_image('image');
        if (!empty($temp_path)) {
            $year = date("Y");
            $month = date("m");
            $day = date("d");
            //The folder path for our file should be YYYY/MM/DD
            $directory = "../uploads/products/" . "$year/$month/$day/";

            //If the directory doesn't already exists.
            if (!is_dir($directory)) {
                mkdir($directory, 0755, true);
            }
            $data["image"] = $this->upload_model->image_upload_packages($temp_path, $directory);
            $this->upload_model->delete_temp_image($temp_path);
            delete_file_from_server('../' . $row['image']);
        }

        $cat = implode(",", $this->input->post('category_id'));

        $data['name'] = html_escape($this->input->post('name'));
        $data['status'] = html_escape($this->input->post('status'));
        $data['category_id'] = $cat;
        $data['created_at'] = date("Y-m-d H:i:s");
        $this->db->where('id', $id);
        $this->db->update('products', $data);
        $this->session->set_flashdata('flash_message', get_phrase('product_updated_successfully'));
        return simple_json_output($resultpost);
    }

    public function delete_products($id)
    {
        $row = $this->get_products_by_id($id)->row_array();
        if ($row != '') {
            $this->db->where('id', $id);
            $this->db->delete('products');
            $this->session->set_flashdata('flash_message', get_phrase('product_deleted_successfully'));
            delete_file_from_server('../' . $row['image']);
        }
        else {
            redirect(site_url('admin/teams'), 'refresh');
            $this->session->set_flashdata('error_message', get_phrase('no_data_found'));
        }
    }

    // manage gallery image

    public function get_gallery_image()
    {
        $params['draw'] = $_REQUEST['draw'];
        $start = $_REQUEST['start'];
        $length = $_REQUEST['length'];

        $search_value = $_REQUEST['search']['value'];
        $data = array();
        $keyword_filter = "";

        if (!empty($search_value)) {
            $keyword = $search_value;
            $keyword_filter = " AND (title like '%" . $keyword . "%')";

            // Try this if any error appears and replace all $item['id']; to $item['id_list']; 
            // $total_count = $this->db->query("SELECT GROUP_CONCAT(id) AS id_list FROM gallery_image WHERE (id<>'') $keyword_filter GROUP BY title ORDER BY branch_id DESC")->num_rows();
            // $query = $this->db->query("SELECT GROUP_CONCAT(id) AS id_list,branch_id,image,title FROM gallery_image WHERE (id<>'') $keyword_filter GROUP BY title ORDER BY branch_id DESC LIMIT $start, $length");

            $total_count = $this->db->query("SELECT id FROM gallery_image WHERE (id<>'') $keyword_filter GROUP BY title ORDER BY branch_id DESC")->num_rows();
            $query = $this->db->query("SELECT id,branch_id,image,title FROM gallery_image WHERE (id<>'') $keyword_filter GROUP BY title ORDER BY branch_id DESC LIMIT $start, $length");
        }
        else {

            // Try this if any error appears and replace all $item['id']; to $item['id_list']; 
            // $total_count = $this->db->query("SELECT GROUP_CONCAT(id) AS id_list FROM gallery_image WHERE (id<>'') $keyword_filter GROUP BY title ORDER BY branch_id DESC")->num_rows();
            // $query = $this->db->query("SELECT GROUP_CONCAT(id) AS id_list,branch_id,image,title FROM gallery_image WHERE (id<>'') $keyword_filter GROUP BY title ORDER BY branch_id DESC LIMIT $start, $length");

            $total_count = $this->db->query("SELECT id FROM gallery_image WHERE (id<>'') $keyword_filter GROUP BY title ORDER BY branch_id DESC")->num_rows();
            $query = $this->db->query("SELECT id,branch_id,image,title FROM gallery_image WHERE (id<>'') $keyword_filter GROUP BY title ORDER BY branch_id DESC LIMIT $start, $length");
        }

        if (!empty($query)) {
            foreach ($query->result_array() as $item) {

                $name = $this->db->select('name')
                    ->where('id', $item['branch_id'])
                    ->get('branches')
                    ->row_array();

                $edit_url = base_url() . 'admin/gallery-image/edit/' . $item['id'];
                $delete_url = base_url() . 'admin/branch_gallery_image/delete/' . $item['id'];
                $confim_txt = "Confirm Delete";
                $action = '<a href="' . $edit_url . '" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit"><button type="button" class="btn mr-1 mb-1 icon-btn-edit"><i class="fa fa-pencil" aria-hidden="true"></i></button></a>';
                $action .= '<a href="#" onclick="confirm_modal(\'' . $delete_url . '\',\'' . $confim_txt . '\');"><button type="button" class="btn mr-1 mb-1 icon-btn-del"><i class="fa fa-trash" aria-hidden="true"></i></button></a>';

                $data[] = array(
                    "sr" => ++$start,
                    "name" => $name['name'],
                    "title" => $item['title'],
                    "action" => $action
                );
            }
        }

        $json_data = array(
            "draw" => intval($params['draw']),
            "recordsTotal" => $total_count,
            "recordsFiltered" => $total_count,
            "data" => $data
        );
        echo json_encode($json_data);
    }

    public function add_gallery_images()
    {
        $super_type = $this->session->userdata('super_type');
        if ($super_type == 'admin') {
            $url = base_url('admin/gallery-image');
        }

        $resultpost = array(
            "status" => 200,
            "message" => get_phrase('gallery_images_added_successfully'),
            "url" => $url,
        );

        // echo "<pre>";
        // print_r($_FILES['image_gallery']);
        // exit();

        if ($_FILES['image_gallery']['name'][0] == "" && $_FILES['image_gallery']['name'][0] == NULL) {

            $resultpost = array(
                "status" => 400,
                "message" => get_phrase('atleast_one_image_required'),
                "url" => base_url('admin/gallery-image/add'),
            );

            $this->session->set_flashdata('flash_message', get_phrase('atleast_one_image_required'));
            return simple_json_output($resultpost);

        }
        else {
            $this->load->model('upload_model');

            $branch = html_escape($this->input->post('branch_id'));
            $title = html_escape($this->input->post('title'));

            $files = $_FILES;
            $cpt2 = count($_FILES['image_gallery']['name']);

            for ($i = 0; $i < $cpt2; $i++) {
                $_FILES['image_gallery']['name'] = $files['image_gallery']['name'][$i];
                $_FILES['image_gallery']['type'] = $files['image_gallery']['type'][$i];
                $_FILES['image_gallery']['tmp_name'] = $files['image_gallery']['tmp_name'][$i];
                $_FILES['image_gallery']['error'] = $files['image_gallery']['error'][$i];
                $_FILES['image_gallery']['size'] = $files['image_gallery']['size'][$i];

                $imageFile = $temp_path = '';
                $temp_path = $this->upload_model->upload_temp_image('image_gallery');

                if (!empty($temp_path)) {
                    $year = date("Y");
                    $month = date("m");
                    $day = date("d");
                    //The folder path for our file should be YYYY/MM/DD
                    $directory = "../uploads/gallery_image/" . "$year/$month/$day/";

                    //If the directory doesn't already exists.
                    if (!is_dir($directory)) {
                        mkdir($directory, 0755, true);
                    }
                    $imageFile = $this->upload_model->image_upload_packages($temp_path, $directory);
                    $this->upload_model->delete_temp_image($temp_path);

                    $data_image = array(
                        'branch_id' => $branch,
                        'title' => $title,
                        'image' => $imageFile,
                    );

                    $this->db->insert('gallery_image', $data_image);
                }
            }

            $this->session->set_flashdata('flash_message', get_phrase('gallery_images_added_successfully'));
            return simple_json_output($resultpost);
        }

    }

    public function edit_gallery_images()
    {
        $super_type = $this->session->userdata('super_type');
        if ($super_type == 'admin') {
            $url = base_url('admin/gallery-image');
        }

        $resultpost = array(
            "status" => 200,
            "message" => get_phrase('gallery_images_updated_successfully'),
            "url" => $url,
        );

        // echo "<pre>";
        // print_r($_FILES['image_gallery']);
        // exit();

        $this->load->model('upload_model');

        $branch = html_escape($this->input->post('branch_id'));
        $title = html_escape($this->input->post('title'));

        $files = $_FILES;
        $cpt2 = count($_FILES['image_gallery']['name']);

        for ($i = 0; $i < $cpt2; $i++) {
            $_FILES['image_gallery']['name'] = $files['image_gallery']['name'][$i];
            $_FILES['image_gallery']['type'] = $files['image_gallery']['type'][$i];
            $_FILES['image_gallery']['tmp_name'] = $files['image_gallery']['tmp_name'][$i];
            $_FILES['image_gallery']['error'] = $files['image_gallery']['error'][$i];
            $_FILES['image_gallery']['size'] = $files['image_gallery']['size'][$i];

            $imageFile = $temp_path = '';
            $temp_path = $this->upload_model->upload_temp_image('image_gallery');

            if (!empty($temp_path)) {
                $year = date("Y");
                $month = date("m");
                $day = date("d");
                //The folder path for our file should be YYYY/MM/DD
                $directory = "../uploads/gallery_image/" . "$year/$month/$day/";

                //If the directory doesn't already exists.
                if (!is_dir($directory)) {
                    mkdir($directory, 0755, true);
                }
                $imageFile = $this->upload_model->image_upload_packages($temp_path, $directory);
                $this->upload_model->delete_temp_image($temp_path);

                $data_image = array(
                    'branch_id' => $branch,
                    'title' => $title,
                    'image' => $imageFile,
                );

                $this->db->insert('gallery_image', $data_image);
            }
        }

        $this->session->set_flashdata('flash_message', get_phrase('gallery_images_updated_successfully'));
        return simple_json_output($resultpost);

    }

    public function get_gallery_image_by_name($id)
    {
        $data = $this->db->where('id', $id)
            ->get('gallery_image')
            ->row_array();

        $data2 = $this->db->where('title', $data['title'])
            ->get('gallery_image');
        return $data2;
    }

    public function get_gallery_title_and_branch($id)
    {
        $data = $this->db->where('id', $id)
            ->get('gallery_image')
            ->row_array();

        $name = $data['title'];
        $branch = $this->db->select('name')
            ->where('id', $data['branch_id'])
            ->get('branches')
            ->row_array();

        $branch_name = $branch['name'];
        $data_arr = array('title' => $name, 'branch' => $branch_name);

        return $data_arr;
    }

    public function delete_branch_gallery_image_by_id($id)
    {
        $query_image = $this->db->query("SELECT image FROM gallery_image WHERE id='$id' LIMIT 1")->row_array();
        delete_file_from_server('../' . $query_image['image']);

        $this->db->where('id', $id);
        $delete = $this->db->delete('gallery_image');
        if ($delete) {
            return 'success';
        }
        else {
            return 'failed';
        }
    }

    public function delete_gallery_image($id)
    {

        $rows = $this->get_gallery_image_by_name($id)->result_array();

        if ($rows != '') {
            foreach ($rows as $row) {
                $this->db->where('id', $row['id']);
                $this->db->delete('gallery_image');
                delete_file_from_server('../' . $row['image']);
            }

            $this->session->set_flashdata('flash_message', get_phrase('gallery_deleted_successfully'));

        }
        else {
            redirect(site_url('admin/gallery-image'), 'refresh');
            $this->session->set_flashdata('error_message', get_phrase('no_data_found'));
        }
    }

    // manage gallery

    public function get_gallery()
    {
        $params['draw'] = $_REQUEST['draw'];
        $start = $_REQUEST['start'];
        $length = $_REQUEST['length'];

        $search_value = $_REQUEST['search']['value'];
        $data = array();
        $keyword_filter = "";

        if (!empty($search_value)) {
            $keyword = $search_value;
            $keyword_filter = " AND (name like '%" . $keyword . "%'
		                            OR author like '%" . $keyword . "%')";

            $total_count = $this->db->query("SELECT id FROM gallery WHERE (id<>'') $keyword_filter ORDER BY id DESC")->num_rows();
            $query = $this->db->query("SELECT id,branch_id,status FROM gallery WHERE (id<>'') $keyword_filter ORDER BY id DESC LIMIT $start, $length");
        }
        else {
            $total_count = $this->db->query("SELECT id FROM gallery WHERE (id<>'') $keyword_filter ORDER BY id DESC")->num_rows();
            $query = $this->db->query("SELECT id,branch_id,status FROM gallery WHERE (id<>'') $keyword_filter ORDER BY id DESC LIMIT $start, $length");
        }

        if (!empty($query)) {
            foreach ($query->result_array() as $item) {
                $status = '';
                if ($item['status'] == 1) {
                    $status = '<span class="badge badge-success">Active</span>';
                }
                else {
                    $status = '<span class="badge badge-danger">Inactive</span>';
                }

                $name = $this->db->select('name')
                    ->where('id', $item['branch_id'])
                    ->get('branches')
                    ->row_array();

                if ($name['name'] == '' || $name['name'] == NULL) {
                    $name = '-';
                }

                // if($item['date'] == '0000-00-00 00:00:00'){
                //     $date = '-';
                // } else {
                //     $date = date("d M, Y", strtotime($item['date']));
                // }

                $edit_url = base_url() . 'admin/gallery/edit/' . $item['id'];
                $delete_url = base_url() . 'admin/gallery/delete/' . $item['id'];
                $confim_txt = "Confirm Delete";
                $action = '<a href="' . $edit_url . '" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit"><button type="button" class="btn mr-1 mb-1 icon-btn-edit"><i class="fa fa-pencil" aria-hidden="true"></i></button></a>';
                $action .= '<a href="#" onclick="confirm_modal(\'' . $delete_url . '\',\'' . $confim_txt . '\');"><button type="button" class="btn mr-1 mb-1 icon-btn-del"><i class="fa fa-trash" aria-hidden="true"></i></button></a>';

                $data[] = array(
                    "sr" => ++$start,
                    "name" => $name['name'],
                    "status" => $status,
                    "action" => $action
                );
            }
        }

        $json_data = array(
            "draw" => intval($params['draw']),
            "recordsTotal" => $total_count,
            "recordsFiltered" => $total_count,
            "data" => $data
        );
        echo json_encode($json_data);
    }

    public function add_gallery()
    {
        $super_type = $this->session->userdata('super_type');
        if ($super_type == 'admin') {
            $url = base_url('admin/gallery');
        }

        $resultpost = array(
            "status" => 200,
            "message" => get_phrase('gallery_added_successfully'),
            "url" => $url,
        );

        // echo "<pre>";
        // print_r($_FILES['campus_photos']);
        // exit();

        $this->load->model('upload_model');

        $branch = html_escape($this->input->post('branch_id'));

        $checkBranch = $this->db->select('branch_id')
            ->where('branch_id', $branch)
            ->get('gallery')
            ->num_rows();

        if ($checkBranch > 0) {
            $this->session->set_flashdata('error_message', get_phrase('branch_already_in_use!'));

            $resultpost = array(
                "status" => 400,
                "message" => get_phrase('branch_already_in_use')
            );

            return simple_json_output($resultpost);
        }
        else {

            $data['alt'] = html_escape($this->input->post('alt'));
            $data['branch_id'] = html_escape($this->input->post('branch_id'));
            $data['status'] = html_escape($this->input->post('status'));
            $data['created_at'] = date("Y-m-d H:i:s");
            $this->db->insert('gallery', $data);

            $insert_id = $this->db->insert_id();

            if ($insert_id) {
                $files = $_FILES;
                $cpt = count($_FILES['campus_photos']['name']);

                for ($i = 0; $i < $cpt; $i++) {
                    $_FILES['campus_photos']['name'] = $files['campus_photos']['name'][$i];
                    $_FILES['campus_photos']['type'] = $files['campus_photos']['type'][$i];
                    $_FILES['campus_photos']['tmp_name'] = $files['campus_photos']['tmp_name'][$i];
                    $_FILES['campus_photos']['error'] = $files['campus_photos']['error'][$i];
                    $_FILES['campus_photos']['size'] = $files['campus_photos']['size'][$i];

                    $imageFile = $temp_path = '';
                    $temp_path = $this->upload_model->upload_temp_image('campus_photos');

                    if (!empty($temp_path)) {
                        $year = date("Y");
                        $month = date("m");
                        $day = date("d");
                        //The folder path for our file should be YYYY/MM/DD
                        $directory = "../uploads/campus_photos/" . "$year/$month/$day/";

                        //If the directory doesn't already exists.
                        if (!is_dir($directory)) {
                            mkdir($directory, 0755, true);
                        }
                        $imageFile = $this->upload_model->image_upload_packages($temp_path, $directory);
                        $this->upload_model->delete_temp_image($temp_path);

                        $data_image = array(
                            'gallery_id' => $insert_id,
                            'image_default' => $imageFile,
                            'is_main' => 0,
                        );

                        $this->db->insert('gallery_campus_photos', $data_image);
                    }
                }

            }

            $this->session->set_flashdata('flash_message', get_phrase('gallery_added_successfully'));
            return simple_json_output($resultpost);
        }
    }

    public function edit_gallery($id)
    {
        $super_type = $this->session->userdata('super_type');
        if ($super_type == 'admin') {
            $url = base_url('admin/gallery');
        }

        $resultpost = array(
            "status" => 200,
            "message" => get_phrase('gallery_added_successfully'),
            "url" => $url,
        );

        // echo "<pre>";
        // print_r($_FILES);
        // exit();



        $this->load->model('upload_model');

        $branch = html_escape($this->input->post('branch_id'));

        $checkBranch = $this->db->select('branch_id')
            ->where('branch_id', $branch)
            ->where('id!=', $id)
            ->get('gallery')
            ->num_rows();

        if ($checkBranch > 0) {

            $this->session->set_flashdata('error_message', get_phrase('branch_already_in_use!'));

            $resultpost = array(
                "status" => 400,
                "message" => get_phrase('branch_already_in_use')
            );
            return simple_json_output($resultpost);
        }
        else {

            $data['alt'] = html_escape($this->input->post('alt'));
            $data['branch_id'] = html_escape($this->input->post('branch_id'));
            $data['status'] = html_escape($this->input->post('status'));
            $update = $this->db->where('id', $id)->update('gallery', $data);

            $insert_id = $this->db->insert_id();

            if ($update) {
                $files = $_FILES;
                $cpt = count($_FILES['campus_photos']['name']);

                for ($i = 0; $i < $cpt; $i++) {
                    $_FILES['campus_photos']['name'] = $files['campus_photos']['name'][$i];
                    $_FILES['campus_photos']['type'] = $files['campus_photos']['type'][$i];
                    $_FILES['campus_photos']['tmp_name'] = $files['campus_photos']['tmp_name'][$i];
                    $_FILES['campus_photos']['error'] = $files['campus_photos']['error'][$i];
                    $_FILES['campus_photos']['size'] = $files['campus_photos']['size'][$i];

                    $imageFile = $temp_path = '';
                    $temp_path = $this->upload_model->upload_temp_image('campus_photos');

                    if (!empty($temp_path)) {
                        $year = date("Y");
                        $month = date("m");
                        $day = date("d");
                        //The folder path for our file should be YYYY/MM/DD
                        $directory = "../uploads/campus_photos/" . "$year/$month/$day/";

                        //If the directory doesn't already exists.
                        if (!is_dir($directory)) {
                            mkdir($directory, 0755, true);
                        }

                        $imageFile = $this->upload_model->image_upload_packages($temp_path, $directory);
                        $this->upload_model->delete_temp_image($temp_path);

                        $data_image = array(
                            'gallery_id' => $id,
                            'image_default' => $imageFile,
                            'is_main' => 0,
                        );

                        $this->db->insert('gallery_campus_photos', $data_image);

                    }
                }

            }

            $this->session->set_flashdata('flash_message', get_phrase('gallery_added_successfully'));
            return simple_json_output($resultpost);
        }
    }

    public function get_gallery_by_id($id)
    {
        $data = $this->db->where('id', $id)
            ->get('gallery');
        return $data;
    }

    public function get_gallery_image_by_id($id)
    {
        $data = $this->db->where('gallery_id', $id)
            ->get('image_gallery');
        return $data;
    }

    public function get_gallery_campus_by_id($id)
    {
        $data = $this->db->where('gallery_id', $id)
            ->get('gallery_campus_photos');
        return $data;
    }

    public function delete_campus_gallery_remove($id)
    {
        $query_image = $this->db->query("SELECT image_default FROM gallery_campus_photos WHERE id='$id' LIMIT 1")->row_array();
        delete_file_from_server('../' . $query_image['image_default']);

        $this->db->where('id', $id);
        $delete = $this->db->delete('gallery_campus_photos');
        if ($delete) {
            return 'success';
        }
        else {
            return 'failed';
        }
    }

    // public function delete_gallery_image_by_id($id){

    //     $row = $this->db->where('id',$id)
    //                     ->get('image_gallery')
    //                     ->row_array();

    //     if($row!=''){
    //         delete_file_from_server('../'.$row['image']);
    //         $this->db->where('id', $id);
    //         $this->db->delete('image_gallery');
    //         return true;
    //     }else{
    //         return false;
    //     }

    // }

    public function delete_gallery_image_by_id($id, $main)
    {
        $row = $this->db->where('id', $id)
            ->get('image_gallery')
            ->row_array();
        if ($row != '') {
            $this->db->where('id', $id);
            $this->db->delete('image_gallery');
            $this->session->set_flashdata('flash_message', get_phrase('gallery_image_deleted_successfully'));
            delete_file_from_server('../' . $row['image']);
        }
        else {
            redirect(site_url('admin/gallery/edit/' . $main), 'refresh');
            $this->session->set_flashdata('error_message', get_phrase('no_data_found'));
        }
    }

    public function delete_gallery($id)
    {

        $row = $this->get_gallery_by_id($id)->row_array();
        $row3 = $this->get_gallery_campus_by_id($id);

        if ($row != '') {
            $this->db->where('id', $id);
            $this->db->delete('gallery');
            $this->session->set_flashdata('flash_message', get_phrase('gallery_deleted_successfully'));

            if ($row3->num_rows() > 0) {
                $campus = $row3->result_array();
                foreach ($campus as $img) {
                    $this->db->where('id', $img['id']);
                    $this->db->delete('gallery_campus_photos');
                    delete_file_from_server('../' . $img['image_default']);
                }
            }


        }
        else {
            redirect(site_url('admin/gallery'), 'refresh');
            $this->session->set_flashdata('error_message', get_phrase('no_data_found'));
        }
    }

    public function get_branch()
    {
        $data = $this->db->select('id,name')
            ->get('branches');

        return $data;
    }

    // manage event

    public function get_event()
    {
        $params['draw'] = $_REQUEST['draw'];
        $start = $_REQUEST['start'];
        $length = $_REQUEST['length'];

        $search_value = $_REQUEST['search']['value'];
        $data = array();
        $keyword_filter = "";

        if (!empty($search_value)) {
            $keyword = $search_value;
            $keyword_filter = " AND (name like '%" . $keyword . "%'
		                            OR author like '%" . $keyword . "%')";

            $total_count = $this->db->query("SELECT id FROM events WHERE (id<>'') $keyword_filter ORDER BY id DESC")->num_rows();
            $query = $this->db->query("SELECT id,name,image,date,author,status FROM events WHERE (id<>'') $keyword_filter ORDER BY id DESC LIMIT $start, $length");
        }
        else {
            $total_count = $this->db->query("SELECT id FROM events WHERE (id<>'') $keyword_filter ORDER BY id DESC")->num_rows();
            $query = $this->db->query("SELECT id,name,image,date,author,status FROM events WHERE (id<>'') $keyword_filter ORDER BY id DESC LIMIT $start, $length");
        }

        if (!empty($query)) {
            foreach ($query->result_array() as $item) {
                $status = '';

                if ($item['status'] == 1) {
                    $status = '<span class="badge badge-success">Active</span>';
                }
                else {
                    $status = '<span class="badge badge-danger">Inactive</span>';
                }

                $image = '';
                if ($item['image'] != '') {
                    $img_url = main_url() . $item['image'];
                    $image = '<img src="' . $img_url . '" class="rounded" height="50">';
                }
                else {
                    $image = '-';
                }

                if ($item['date'] == '0000-00-00 00:00:00') {
                    $date = '-';
                }
                else {
                    $date = date("d M, Y", strtotime($item['date']));
                }

                $edit_url = base_url() . 'admin/event/edit/' . $item['id'];
                $delete_url = base_url() . 'admin/event/delete/' . $item['id'];
                $confim_txt = "Confirm Delete";
                $action = '<a href="' . $edit_url . '" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit"><button type="button" class="btn mr-1 mb-1 icon-btn-edit"><i class="fa fa-pencil" aria-hidden="true"></i></button></a>';
                $action .= '<a href="#" onclick="confirm_modal(\'' . $delete_url . '\',\'' . $confim_txt . '\');"><button type="button" class="btn mr-1 mb-1 icon-btn-del"><i class="fa fa-trash" aria-hidden="true"></i></button></a>';

                $data[] = array(
                    "sr" => ++$start,
                    "name" => $item['name'],
                    "image" => $image,
                    "date" => $date,
                    "author" => $item['author'],
                    "status" => $status,
                    "action" => $action
                );
            }
        }

        $json_data = array(
            "draw" => intval($params['draw']),
            "recordsTotal" => $total_count,
            "recordsFiltered" => $total_count,
            "data" => $data
        );
        echo json_encode($json_data);
    }

    public function add_event()
    {

        $super_type = $this->session->userdata('super_type');

        if ($super_type == 'admin') {
            $url = base_url('admin/event');
        }

        $resultpost = array(
            "status" => 200,
            "message" => get_phrase('event_added_successfully'),
            "url" => $url,
        );

        $this->load->model('upload_model');
        $temp_path = $this->upload_model->upload_temp_image('image_file');

        if (!empty($temp_path)) {
            $year = date("Y");
            $month = date("m");
            $day = date("d");
            //The folder path for our file should be YYYY/MM/DD
            $directory = "../uploads/event/" . "$year/$month/$day/";

            //If the directory doesn't already exists.
            if (!is_dir($directory)) {
                mkdir($directory, 0755, true);
            }
            $data["image"] = $this->upload_model->image_upload_inside($temp_path, $directory);
            $this->upload_model->delete_temp_image($temp_path);
        }

        $name = html_escape($this->input->post('name'));

        $data['name'] = html_escape($this->input->post('name'));
        $data['alt'] = html_escape($this->input->post('alt'));
        $data['slug'] = $this->common_model->create_unique_slug('events', 'name', $name, $id = "");
        $data['date'] = html_escape($this->input->post('date'));
        $data['author'] = html_escape($this->input->post('author'));
        $data['description'] = $this->input->post('description');
        $data['meta_title'] = $this->input->post('meta_title');
        $data['meta_keyword'] = $this->input->post('meta_keyword');
        $data['meta_description'] = $this->input->post('meta_description');
        $data['status'] = html_escape($this->input->post('status'));
        $data['created_at'] = date("Y-m-d H:i:s");

        $this->db->insert('events', $data);
        $this->session->set_flashdata('flash_message', get_phrase('event_added_successfully'));
        return simple_json_output($resultpost);
    }

    public function get_event_by_id($id)
    {
        $this->db->where('id', $id);
        return $this->db->get('events');
    }

    public function edit_event($id)
    {
        $super_type = $this->session->userdata('super_type');
        if ($super_type == 'admin') {
            $url = base_url('admin/event');
        }

        $resultpost = array(
            "status" => 200,
            "message" => get_phrase('event_updated_successfully'),
            "url" => $url,
        );

        $row = $this->get_event_by_id($id)->row_array();

        $this->load->model('upload_model');
        $temp_path = $this->upload_model->upload_temp_image('image_file');
        if (!empty($temp_path)) {
            $year = date("Y");
            $month = date("m");
            $day = date("d");
            //The folder path for our file should be YYYY/MM/DD
            $directory = "../uploads/event/" . "$year/$month/$day/";

            //If the directory doesn't already exists.
            if (!is_dir($directory)) {
                mkdir($directory, 0755, true);
            }
            $data["image"] = $this->upload_model->image_upload_inside($temp_path, $directory);
            $this->upload_model->delete_temp_image($temp_path);
            delete_file_from_server('../' . $row['image']);
        }

        $name = html_escape($this->input->post('name'));

        $data['name'] = html_escape($this->input->post('name'));
        $data['alt'] = html_escape($this->input->post('alt'));
        $data['slug'] = $this->common_model->create_unique_slug('events', 'name', $name, $id);
        $data['date'] = html_escape($this->input->post('date'));
        $data['author'] = html_escape($this->input->post('author'));
        $data['description'] = $this->input->post('description');
        $data['meta_title'] = $this->input->post('meta_title');
        $data['meta_keyword'] = $this->input->post('meta_keyword');
        $data['meta_description'] = $this->input->post('meta_description');
        $data['status'] = html_escape($this->input->post('status'));
        $this->db->where('id', $id);
        $this->db->update('events', $data);
        $this->session->set_flashdata('flash_message', get_phrase('event_updated_successfully'));
        return simple_json_output($resultpost);
    }

    public function delete_event($id)
    {
        $row = $this->get_event_by_id($id)->row_array();
        if ($row != '') {
            $this->db->where('id', $id);
            $this->db->delete('events');
            $this->session->set_flashdata('flash_message', get_phrase('event_deleted_successfully'));
            delete_file_from_server('../' . $row['image']);
        }
        else {
            redirect(site_url('admin/event'), 'refresh');
            $this->session->set_flashdata('error_message', get_phrase('no_data_found'));
        }
    }

    // manage blogs image

    public function get_blogs_image()
    {
        $params['draw'] = $_REQUEST['draw'];
        $start = $_REQUEST['start'];
        $length = $_REQUEST['length'];

        $search_value = $_REQUEST['search']['value'];
        $data = array();
        $keyword_filter = "";

        if (!empty($search_value)) {
            $keyword = $search_value;
            $keyword_filter = " AND (image like '%" . $keyword . "%')";

            $total_count = $this->db->query("SELECT id FROM blogs_image WHERE (id<>'') $keyword_filter ORDER BY id DESC")->num_rows();
            $query = $this->db->query("SELECT id,image FROM blogs_image WHERE (id<>'') $keyword_filter ORDER BY id DESC LIMIT $start, $length");
        }
        else {
            $total_count = $this->db->query("SELECT id FROM blogs_image WHERE (id<>'') $keyword_filter ORDER BY id DESC")->num_rows();
            $query = $this->db->query("SELECT id,image FROM blogs_image WHERE (id<>'') $keyword_filter ORDER BY id DESC LIMIT $start, $length");
        }

        if (!empty($query)) {
            foreach ($query->result_array() as $item) {


                $image = '';
                if ($item['image'] != '') {
                    $img_url = main_url() . $item['image'];
                    $image = '<img src="' . $img_url . '"  class="rounded" height="50">';
                }
                else {
                    $image = '-';
                }


                $copy_url = main_url() . $item['image'];
                $delete_url = base_url() . 'admin/blogs_image/delete/' . $item['id'];
                $confim_txt = "Confirm Delete";
                $action = '<a href="javascript:void(0);" onclick="copyURL(\'' . $copy_url . ' \')" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Copy"><button type="button" class="btn mr-1 mb-1 icon-btn-edit"><i class="fa fa-file" aria-hidden="true"></i></button></a>';
                $action .= '<a href="#" onclick="confirm_modal(\'' . $delete_url . '\',\'' . $confim_txt . '\');"><button type="button" class="btn mr-1 mb-1 icon-btn-del"><i class="fa fa-trash" aria-hidden="true"></i></button></a>';

                $data[] = array(
                    "sr" => ++$start,
                    "image" => $image,
                    "action" => $action
                );
            }
        }

        $json_data = array(
            "draw" => intval($params['draw']),
            "recordsTotal" => $total_count,
            "recordsFiltered" => $total_count,
            "data" => $data
        );
        echo json_encode($json_data);
    }

    public function add_blogs_image()
    {
        $super_type = $this->session->userdata('super_type');
        if ($super_type == 'admin') {
            $url = base_url('admin/blogs-image');
        }

        $resultpost = array(
            "status" => 200,
            "message" => get_phrase('blogs_image_added_successfully'),
            "url" => $url,
        );

        $this->load->model('upload_model');
        $temp_path = $this->upload_model->upload_temp_image('image_file');
        if (!empty($temp_path)) {
            $year = date("Y");
            $month = date("m");
            $day = date("d");
            //The folder path for our file should be YYYY/MM/DD
            $directory = "../uploads/blogs_image/" . "$year/$month/$day/";

            //If the directory doesn't already exists.
            if (!is_dir($directory)) {
                mkdir($directory, 0755, true);
            }
            $data["image"] = $this->upload_model->image_upload_inside($temp_path, $directory);
            $this->upload_model->delete_temp_image($temp_path);
        }

        $name = html_escape($this->input->post('name'));

        $data['created_at'] = date("Y-m-d H:i:s");

        $this->db->insert('blogs_image', $data);
        $this->session->set_flashdata('flash_message', get_phrase('blogs_image_added_successfully'));
        return simple_json_output($resultpost);
    }

    public function get_blogs_image_by_id($id)
    {
        $this->db->where('id', $id);
        return $this->db->get('blogs_image');
    }

    public function delete_blogs_image($id)
    {
        $row = $this->get_blogs_image_by_id($id)->row_array();
        if ($row != '') {
            $this->db->where('id', $id);
            $this->db->delete('blogs_image');
            $this->session->set_flashdata('flash_message', get_phrase('blogs_image_deleted_successfully'));
            delete_file_from_server('../' . $row['image']);
        }
        else {
            redirect(site_url('admin/blogs-image'), 'refresh');
            $this->session->set_flashdata('error_message', get_phrase('no_data_found'));
        }
    }

    public function get_digital_news()
    {
        $params['draw'] = $_REQUEST['draw'];
        $start = $_REQUEST['start'];
        $length = $_REQUEST['length'];

        $search_value = $_REQUEST['search']['value'];
        $data = array();
        $keyword_filter = "";

        if (!empty($search_value)) {
            $keyword = $search_value;
            $keyword_filter = " AND (name like '%" . $keyword . "%')";

            $total_count = $this->db->query("SELECT id FROM digital_news WHERE (id<>'') $keyword_filter ORDER BY id DESC")->num_rows();
            $query = $this->db->query("SELECT id,name,image,date,status FROM digital_news WHERE (id<>'') $keyword_filter ORDER BY id DESC LIMIT $start, $length");
        }
        else {
            $total_count = $this->db->query("SELECT id FROM digital_news WHERE (id<>'') $keyword_filter ORDER BY id DESC")->num_rows();
            $query = $this->db->query("SELECT id,name,image,date,status FROM digital_news WHERE (id<>'') $keyword_filter ORDER BY id DESC LIMIT $start, $length");
        }

        if (!empty($query)) {
            foreach ($query->result_array() as $item) {
                $status = '';
                if ($item['status'] == 1) {
                    $status = '<span class="badge badge-success">Active</span>';
                }
                else {
                    $status = '<span class="badge badge-danger">Inactive</span>';
                }

                $image = '';
                if ($item['image'] != '') {
                    $img_url = main_url() . $item['image'];
                    $image = '<img src="' . $img_url . '"  class="rounded" height="50">';
                }
                else {
                    $image = '-';
                }

                if ($item['date'] == '0000-00-00 00:00:00') {
                    $date = '-';
                }
                else {
                    $date = date("d M, Y", strtotime($item['date']));
                }

                $edit_url = base_url() . 'admin/digital_news/edit/' . $item['id'];
                $delete_url = base_url() . 'admin/digital_news/delete/' . $item['id'];
                $confim_txt = "Confirm Delete";
                $action = '<a href="' . $edit_url . '" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit"><button type="button" class="btn mr-1 mb-1 icon-btn-edit"><i class="fa fa-pencil" aria-hidden="true"></i></button></a>';
                $action .= '<a href="#" onclick="confirm_modal(\'' . $delete_url . '\',\'' . $confim_txt . '\');"><button type="button" class="btn mr-1 mb-1 icon-btn-del"><i class="fa fa-trash" aria-hidden="true"></i></button></a>';

                $data[] = array(
                    "sr" => ++$start,
                    "name" => $item['name'],
                    "image" => $image,
                    "date" => $date,
                    "status" => $status,
                    "action" => $action
                );
            }
        }

        $json_data = array(
            "draw" => intval($params['draw']),
            "recordsTotal" => $total_count,
            "recordsFiltered" => $total_count,
            "data" => $data
        );
        echo json_encode($json_data);
    }

    public function add_digital_news()
    {
        $super_type = $this->session->userdata('super_type');
        if ($super_type == 'admin') {
            $url = base_url('admin/digital_news');
        }

        $resultpost = array(
            "status" => 200,
            "message" => get_phrase('blog_added_successfully'),
            "url" => $url,
        );

        $this->load->model('upload_model');
        $temp_path = $this->upload_model->upload_temp_image('image_file');
        if (!empty($temp_path)) {
            $year = date("Y");
            $month = date("m");
            $day = date("d");
            //The folder path for our file should be YYYY/MM/DD
            $directory = "../uploads/digital_news/" . "$year/$month/$day/";

            //If the directory doesn't already exists.
            if (!is_dir($directory)) {
                mkdir($directory, 0755, true);
            }
            $data["image"] = $this->upload_model->image_upload_inside($temp_path, $directory);
            $this->upload_model->delete_temp_image($temp_path);
        }

        $name = html_escape($this->input->post('name'));

        $data['name'] = html_escape($this->input->post('name'));
        $data['alt'] = html_escape($this->input->post('alt'));
        $data['slug'] = $this->common_model->create_unique_slug('digital_news', 'name', $name, $id = "");
        $data['date'] = html_escape($this->input->post('date'));
        $data['url'] = $this->input->post('url');
        $data['meta_title'] = $this->input->post('meta_title');
        $data['meta_keyword'] = $this->input->post('meta_keyword');
        $data['meta_description'] = $this->input->post('meta_description');
        $data['status'] = html_escape($this->input->post('status'));
        $data['created_at'] = date("Y-m-d H:i:s");
        $this->db->insert('digital_news', $data);
        $this->session->set_flashdata('flash_message', get_phrase('digital_news_added_successfully'));
        return simple_json_output($resultpost);
    }

    public function get_digital_news_by_id($id)
    {
        $this->db->where('id', $id);
        return $this->db->get('digital_news');
    }

    public function edit_digital_news($id)
    {
        $super_type = $this->session->userdata('super_type');
        if ($super_type == 'admin') {
            $url = base_url('admin/digital_news');
        }

        $resultpost = array(
            "status" => 200,
            "message" => get_phrase('digital_news_updated_successfully'),
            "url" => $url,
        );

        $row = $this->get_digital_news_by_id($id)->row_array();

        $this->load->model('upload_model');
        $temp_path = $this->upload_model->upload_temp_image('image_file');
        if (!empty($temp_path)) {
            $year = date("Y");
            $month = date("m");
            $day = date("d");
            //The folder path for our file should be YYYY/MM/DD
            $directory = "../uploads/digital_news/" . "$year/$month/$day/";

            //If the directory doesn't already exists.
            if (!is_dir($directory)) {
                mkdir($directory, 0755, true);
            }
            $data["image"] = $this->upload_model->image_upload_inside($temp_path, $directory);
            $this->upload_model->delete_temp_image($temp_path);
            delete_file_from_server('../' . $row['image']);
        }

        $name = html_escape($this->input->post('name'));

        $data['name'] = html_escape($this->input->post('name'));
        $data['alt'] = html_escape($this->input->post('alt'));
        $data['slug'] = $this->common_model->create_unique_slug('digital_news', 'name', $name, $id);
        $data['date'] = html_escape($this->input->post('date'));
        $data['url'] = $this->input->post('url');
        $data['meta_title'] = $this->input->post('meta_title');
        $data['meta_keyword'] = $this->input->post('meta_keyword');
        $data['meta_description'] = $this->input->post('meta_description');
        $data['status'] = html_escape($this->input->post('status'));
        $this->db->where('id', $id);
        $this->db->update('digital_news', $data);
        $this->session->set_flashdata('flash_message', get_phrase('digital_news_updated_successfully'));
        return simple_json_output($resultpost);
    }

    public function delete_digital_news($id)
    {
        $row = $this->get_digital_news_by_id($id)->row_array();
        if ($row != '') {
            $this->db->where('id', $id);
            $this->db->delete('digital_news');
            $this->session->set_flashdata('flash_message', get_phrase('digital_news_deleted_successfully'));
            delete_file_from_server('../' . $row['image']);
        }
        else {
            redirect(site_url('admin/digital_news'), 'refresh');
            $this->session->set_flashdata('error_message', get_phrase('no_data_found'));
        }
    }

    // manage blogs

    public function get_blogs()
    {
        $params['draw'] = $_REQUEST['draw'];
        $start = $_REQUEST['start'];
        $length = $_REQUEST['length'];

        $search_value = $_REQUEST['search']['value'];
        $data = array();
        $keyword_filter = "";

        if (!empty($search_value)) {
            $keyword = $search_value;
            $keyword_filter = " AND (name like '%" . $keyword . "%'
		                            OR author like '%" . $keyword . "%')";

            $total_count = $this->db->query("SELECT id FROM blogs WHERE (id<>'') $keyword_filter ORDER BY id DESC")->num_rows();
            $query = $this->db->query("SELECT id,name,image,date,author,status FROM blogs WHERE (id<>'') $keyword_filter ORDER BY id DESC LIMIT $start, $length");
        }
        else {
            $total_count = $this->db->query("SELECT id FROM blogs WHERE (id<>'') $keyword_filter ORDER BY id DESC")->num_rows();
            $query = $this->db->query("SELECT id,name,image,date,author,status FROM blogs WHERE (id<>'') $keyword_filter ORDER BY id DESC LIMIT $start, $length");
        }

        if (!empty($query)) {
            foreach ($query->result_array() as $item) {
                $status = '';
                if ($item['status'] == 1) {
                    $status = '<span class="badge badge-success">Active</span>';
                }
                else {
                    $status = '<span class="badge badge-danger">Inactive</span>';
                }

                $image = '';
                if ($item['image'] != '') {
                    $img_url = main_url() . $item['image'];
                    $image = '<img src="' . $img_url . '"  class="rounded" height="50">';
                }
                else {
                    $image = '-';
                }

                if ($item['date'] == '0000-00-00 00:00:00') {
                    $date = '-';
                }
                else {
                    $date = date("d M, Y", strtotime($item['date']));
                }

                $edit_url = base_url() . 'admin/blogs/edit/' . $item['id'];
                $delete_url = base_url() . 'admin/blogs/delete/' . $item['id'];
                $confim_txt = "Confirm Delete";
                $action = '<a href="' . $edit_url . '" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit"><button type="button" class="btn mr-1 mb-1 icon-btn-edit"><i class="fa fa-pencil" aria-hidden="true"></i></button></a>';
                $action .= '<a href="#" onclick="confirm_modal(\'' . $delete_url . '\',\'' . $confim_txt . '\');"><button type="button" class="btn mr-1 mb-1 icon-btn-del"><i class="fa fa-trash" aria-hidden="true"></i></button></a>';

                $data[] = array(
                    "sr" => ++$start,
                    "name" => $item['name'],
                    "image" => $image,
                    "date" => $date,
                    "author" => $item['author'],
                    "status" => $status,
                    "action" => $action
                );
            }
        }

        $json_data = array(
            "draw" => intval($params['draw']),
            "recordsTotal" => $total_count,
            "recordsFiltered" => $total_count,
            "data" => $data
        );
        echo json_encode($json_data);
    }

    public function add_blogs()
    {
        $super_type = $this->session->userdata('super_type');
        if ($super_type == 'admin') {
            $url = base_url('admin/blogs');
        }

        $resultpost = array(
            "status" => 200,
            "message" => get_phrase('blog_added_successfully'),
            "url" => $url,
        );

        $this->load->model('upload_model');
        $temp_path = $this->upload_model->upload_temp_image('image_file');
        if (!empty($temp_path)) {
            $year = date("Y");
            $month = date("m");
            $day = date("d");
            //The folder path for our file should be YYYY/MM/DD
            $directory = "../uploads/blogs/" . "$year/$month/$day/";

            //If the directory doesn't already exists.
            if (!is_dir($directory)) {
                mkdir($directory, 0755, true);
            }
            $data["image"] = $this->upload_model->image_upload_inside($temp_path, $directory);
            $this->upload_model->delete_temp_image($temp_path);
        }

        $name = html_escape($this->input->post('name'));

        $data['name'] = html_escape($this->input->post('name'));
        $data['alt'] = html_escape($this->input->post('alt'));
        $data['slug'] = $this->common_model->create_unique_slug('blogs', 'name', $name, $id = "");
        $data['date'] = html_escape($this->input->post('date'));
        $data['author'] = html_escape($this->input->post('author'));
        $data['description'] = $this->input->post('description');
        $data['meta_title'] = $this->input->post('meta_title');
        $data['meta_keyword'] = $this->input->post('meta_keyword');
        $data['meta_description'] = $this->input->post('meta_description');
        $data['status'] = html_escape($this->input->post('status'));
        $data['created_at'] = date("Y-m-d H:i:s");
        $this->db->insert('blogs', $data);
        $this->session->set_flashdata('flash_message', get_phrase('blog_added_successfully'));
        return simple_json_output($resultpost);
    }

    public function get_blogs_by_id($id)
    {
        $this->db->where('id', $id);
        return $this->db->get('blogs');
    }

    public function edit_blogs($id)
    {
        $super_type = $this->session->userdata('super_type');
        if ($super_type == 'admin') {
            $url = base_url('admin/blogs');
        }

        $resultpost = array(
            "status" => 200,
            "message" => get_phrase('blog_updated_successfully'),
            "url" => $url,
        );

        $row = $this->get_blogs_by_id($id)->row_array();

        $this->load->model('upload_model');
        $temp_path = $this->upload_model->upload_temp_image('image_file');
        if (!empty($temp_path)) {
            $year = date("Y");
            $month = date("m");
            $day = date("d");
            //The folder path for our file should be YYYY/MM/DD
            $directory = "../uploads/blogs/" . "$year/$month/$day/";

            //If the directory doesn't already exists.
            if (!is_dir($directory)) {
                mkdir($directory, 0755, true);
            }
            $data["image"] = $this->upload_model->image_upload_inside($temp_path, $directory);
            $this->upload_model->delete_temp_image($temp_path);
            delete_file_from_server('../' . $row['image']);
        }

        $name = html_escape($this->input->post('name'));

        $data['name'] = html_escape($this->input->post('name'));
        $data['alt'] = html_escape($this->input->post('alt'));
        $data['slug'] = $this->common_model->create_unique_slug('blogs', 'name', $name, $id);
        $data['date'] = html_escape($this->input->post('date'));
        $data['author'] = html_escape($this->input->post('author'));
        $data['description'] = $this->input->post('description');
        $data['meta_title'] = $this->input->post('meta_title');
        $data['meta_keyword'] = $this->input->post('meta_keyword');
        $data['meta_description'] = $this->input->post('meta_description');
        $data['status'] = html_escape($this->input->post('status'));
        $this->db->where('id', $id);
        $this->db->update('blogs', $data);
        $this->session->set_flashdata('flash_message', get_phrase('blog_updated_successfully'));
        return simple_json_output($resultpost);
    }

    public function delete_blogs($id)
    {
        $row = $this->get_blogs_by_id($id)->row_array();
        if ($row != '') {
            $this->db->where('id', $id);
            $this->db->delete('blogs');
            $this->session->set_flashdata('flash_message', get_phrase('blog_deleted_successfully'));
            delete_file_from_server('../' . $row['image']);
        }
        else {
            redirect(site_url('admin/blogs'), 'refresh');
            $this->session->set_flashdata('error_message', get_phrase('no_data_found'));
        }
    }

    // Get branches as query object
    public function get_branches($city = "")
    {
        if (!empty($city)) {
            $this->db->where('city', $city);
        }
        return $this->db->get('branches');
    }

    // manage branches (for DataTables AJAX)
    public function get_branches_ajax()
    {
        $params['draw'] = $_REQUEST['draw'];
        $start = $_REQUEST['start'];
        $length = $_REQUEST['length'];

        $search_value = $_REQUEST['search']['value'];
        $data = array();
        $keyword_filter = "";

        if (!empty($search_value)) {
            $keyword = $search_value;
            $keyword_filter = " AND (name like '%" . $keyword . "%')";
        }

        $total_count = $this->db->query("SELECT id FROM branches WHERE (id<>'') $keyword_filter ORDER BY id DESC")->num_rows();
        $query = $this->db->query("SELECT id,city,name,status FROM branches WHERE (id<>'') $keyword_filter ORDER BY id DESC LIMIT $start, $length");

        if (!empty($query)) {

            foreach ($query->result_array() as $item) {
                $status = '';
                if ($item['status'] == 1) {
                    $status = '<span class="badge badge-success">Active</span>';
                }
                else {
                    $status = '<span class="badge badge-danger">Inactive</span>';
                }

                if ($item['date'] == '0000-00-00 00:00:00') {
                    $date = '-';
                }
                else {
                    $date = date("d M, Y", strtotime($item['date']));
                }

                $edit_url = base_url() . 'admin/branches/edit/' . $item['id'];
                $delete_url = base_url() . 'admin/branches/delete/' . $item['id'];
                $confim_txt = "Confirm Delete";
                $action = '<a href="' . $edit_url . '" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit"><button type="button" class="btn mr-1 mb-1 icon-btn-edit"><i class="fa fa-pencil" aria-hidden="true"></i></button></a>';
                $action .= '<a href="#" onclick="confirm_modal(\'' . $delete_url . '\',\'' . $confim_txt . '\');"><button type="button" class="btn mr-1 mb-1 icon-btn-del"><i class="fa fa-trash" aria-hidden="true"></i></button></a>';

                $data[] = array(
                    "sr" => ++$start,
                    "branch_name" => $item['name'],
                    "city_name" => $item['city'],
                    "author" => $item['author'],
                    "action" => $action
                );
            }
        }

        $json_data = array(
            "draw" => intval($params['draw']),
            "recordsTotal" => $total_count,
            "recordsFiltered" => $total_count,
            "data" => $data
        );
        echo json_encode($json_data);
    }

    public function add_branches()
    {
        $super_type = $this->session->userdata('super_type');
        if ($super_type == 'admin') {
            $url = base_url('admin/branches');
        }

        $resultpost = array(
            "status" => 200,
            "message" => get_phrase('branch_added_successfully'),
            "url" => $url,
        );

        $this->load->model('upload_model');
        $temp_path = $this->upload_model->upload_temp_image('image');
        if (!empty($temp_path)) {
            $year = date("Y");
            $month = date("m");
            $day = date("d");
            //The folder path for our file should be YYYY/MM/DD
            $directory = "../uploads/branches/" . "$year/$month/$day/";

            //If the directory doesn't already exists.
            if (!is_dir($directory)) {
                mkdir($directory, 0755, true);
            }
            $data["image"] = $this->upload_model->image_upload_branches($temp_path, $directory);
            $this->upload_model->delete_temp_image($temp_path);
        }

        $name = html_escape($this->input->post('name'));
        $slug = html_escape($this->input->post('slug'));
        if (empty($slug)) {
            $slug = $name;
        }

        $data['name'] = html_escape($this->input->post('name'));
        $data['slug'] = $this->common_model->create_unique_slug('branches', 'slug', $slug, $id = "");
        $data['email'] = html_escape($this->input->post('email'));
        $data['mobile_1'] = html_escape($this->input->post('mobile_1'));
        $data['mobile_2'] = html_escape($this->input->post('mobile_2'));
        $data['location_url'] = html_escape($this->input->post('location_url'));
        $data['address'] = html_escape($this->input->post('address'));
        $data['city'] = html_escape($this->input->post('city'));

        $data['created_at'] = date("Y-m-d H:i:s");
        $this->db->insert('branches', $data);
        $this->session->set_flashdata('flash_message', get_phrase('branch_added_successfully'));
        return simple_json_output($resultpost);

    }

    public function get_branch_by_id($id)
    {
        $this->db->where('id', $id);
        return $this->db->get('branches');
    }

    public function edit_branches($id)
    {
        $super_type = $this->session->userdata('super_type');
        if ($super_type == 'admin') {
            $url = base_url('admin/branches');
        }

        $resultpost = array(
            "status" => 200,
            "message" => get_phrase('branch_updated_successfully'),
            "url" => $url,
        );

        $row = $this->get_branch_by_id($id)->row_array();


        $this->load->model('upload_model');
        $temp_path = $this->upload_model->upload_temp_image('image');
        if (!empty($temp_path)) {
            $year = date("Y");
            $month = date("m");
            $day = date("d");
            //The folder path for our file should be YYYY/MM/DD
            $directory = "../uploads/branches/" . "$year/$month/$day/";

            //If the directory doesn't already exists.
            if (!is_dir($directory)) {
                mkdir($directory, 0755, true);
            }
            $data["image"] = $this->upload_model->image_upload_branches($temp_path, $directory);
            $this->upload_model->delete_temp_image($temp_path);
        }

        $name = html_escape($this->input->post('name'));
        $slug = html_escape($this->input->post('slug'));
        if (empty($slug)) {
            $slug = $name;
        }

        $data['name'] = html_escape($this->input->post('name'));
        $data['slug'] = $this->common_model->create_unique_slug('branches', 'slug', $slug, $id);
        $data['email'] = html_escape($this->input->post('email'));
        $data['mobile_1'] = html_escape($this->input->post('mobile_1'));
        $data['mobile_2'] = html_escape($this->input->post('mobile_2'));
        $data['location_url'] = html_escape($this->input->post('location_url'));
        $data['address'] = html_escape($this->input->post('address'));
        $data['city'] = html_escape($this->input->post('city'));

        $this->db->where('id', $id);
        $this->db->update('branches', $data);
        $this->session->set_flashdata('flash_message', get_phrase('branch_updated_successfully'));
        return simple_json_output($resultpost);
    }

    public function delete_branches($id)
    {
        $row = $this->get_branch_by_id($id)->row_array();
        if ($row != '') {
            $this->db->where('id', $id);
            $this->db->delete('branches');
            $this->session->set_flashdata('flash_message', get_phrase('branch_deleted_successfully'));
        }
        else {
            redirect(site_url('admin/branches'), 'refresh');
            $this->session->set_flashdata('error_message', get_phrase('no_data_found'));
        }
    }

    // manage contact_enquiry

    public function get_contact_enquiry()
    {
        $params['draw'] = $_REQUEST['draw'];
        $start = $_REQUEST['start'];
        $length = $_REQUEST['length'];

        $search_value = $_REQUEST['search']['value'];
        $data = array();
        $keyword_filter = "";

        if (!empty($search_value)) {
            $keyword = $search_value;
            $keyword_filter = " AND (name like '%" . $keyword . "%' 
                                    OR phone like '%" . $keyword . "%' 
                                    OR email like '%" . $keyword . "%'
                                    OR subject like '%" . $keyword . "%'
                                    OR message like '%" . $keyword . "%')";
            $total_count = $this->db->query("SELECT id FROM contact_enquiry WHERE is_delete='0' $keyword_filter ORDER BY id DESC")->num_rows();
            $query = $this->db->query("SELECT id,name,phone,email,subject,message FROM contact_enquiry WHERE is_delete='0' $keyword_filter ORDER BY id DESC LIMIT $start, $length");
        }
        else {
            $total_count = $this->db->query("SELECT id FROM contact_enquiry WHERE is_delete='0' $keyword_filter ORDER BY id DESC")->num_rows();
            $query = $this->db->query("SELECT id,name,phone,email,subject,message FROM contact_enquiry WHERE is_delete='0' $keyword_filter ORDER BY id DESC LIMIT $start, $length");
        }

        if (!empty($query)) {
            foreach ($query->result_array() as $item) {

                $delete_url = base_url() . 'admin/contact_enquiry/delete/' . $item['id'];
                $confim_txt = "Confirm Delete";
                $action = '<a href="#" onclick="confirm_modal(\'' . $delete_url . '\',\'' . $confim_txt . '\');"><button type="button" class="btn mr-1 mb-1 icon-btn-del"><i class="fa fa-trash" aria-hidden="true"></i></button></a>';

                $user_details = '<div class="d-flex justify-content-start align-items-center user-name">
                                	<div class="d-flex flex-column">
                                		<span class="fw-semibold">' . $item['name'] . '</span>
                                		<small class="text-muted">' . $item['phone'] . '</small>
                                		<small class="text-muted">' . $item['email'] . '</small>
                                	</div>
                                </div>';

                $data[] = array(
                    "sr" => ++$start,
                    "user_details" => $user_details,
                    "subject" => $item['subject'],
                    "message" => $item['message'],
                    "action" => $action
                );
            }
        }

        $json_data = array(
            "draw" => intval($params['draw']),
            "recordsTotal" => $total_count,
            "recordsFiltered" => $total_count,
            "data" => $data
        );
        echo json_encode($json_data);
    }


    public function delete_contact_enquiry($id)
    {
        $data['is_delete'] = '1';
        $this->db->where('id', $id);
        $this->db->update('contact_enquiry', $data);
        $this->session->set_flashdata('flash_message', get_phrase('contact_enquiry_deleted_successfully'));
    }

    // check_common_duplication

    public function check_common_duplication($action = "", $table = "", $field = "", $field_name = "", $user_id = "")
    {
        $duplicate_email_check = $this->db->select('id')->get_where($table, array(
            $field => $field_name,
        ));
        if ($action == 'on_create') {
            if ($duplicate_email_check->num_rows() > 0) {
                return false;
            }
            else {
                return true;
            }
        }
        elseif ($action == 'on_update') {
            if ($duplicate_email_check->num_rows() > 0) {
                if ($duplicate_email_check->row()->id == $user_id) {
                    return true;
                }
                else {
                    return false;
                }
            }
            else {
                return true;
            }
        }
    }


    public function update_home_about($id)
    {
        $super_type = $this->session->userdata('super_type');
        if ($super_type == 'admin') {
            $url = base_url('admin/home-about');
        }

        $resultpost = array(
            "status" => 200,
            "message" => get_phrase('about_us_updated_successfully'),
            "url" => $url,
        );


        $this->load->model('upload_model');
        $temp_path = $this->upload_model->upload_temp_image('image');
        if (!empty($temp_path)) {
            $year = date("Y");
            $month = date("m");
            $day = date("d");
            //The folder path for our file should be YYYY/MM/DD
            $directory = "../uploads/medias/" . "$year/$month/$day/";

            //If the directory doesn't already exists.
            if (!is_dir($directory)) {
                mkdir($directory, 0755, true);
            }
            $data["image"] = $this->upload_model->image_upload_packages($temp_path, $directory);
            $this->upload_model->delete_temp_image($temp_path);
        }

        $data['title'] = html_escape($this->input->post('title'));
        $data['alt'] = html_escape($this->input->post('alt'));
        $data['description'] = $this->input->post('description');
        $this->db->where('id', $id);
        $this->db->update('home_about', $data);
        $this->session->set_flashdata('flash_message', get_phrase('about_us_updated_successfully'));
        return simple_json_output($resultpost);
    }

    //About Us

    public function get_about_us()
    {
        $params['draw'] = $_REQUEST['draw'];
        $start = $_REQUEST['start'];
        $length = $_REQUEST['length'];

        $data = array();

        $total_count = $this->db->query("SELECT id FROM about_us WHERE (id<>'') ORDER BY id ASC")->num_rows();
        $query = $this->db->query("SELECT id,image,title FROM about_us WHERE (id<>'') ORDER BY id ASC LIMIT $start, $length");

        if (!empty($query)) {
            foreach ($query->result_array() as $item) {

                $image = '';
                if ($item['image'] != '') {
                    $img_url = main_url() . $item['image'];
                    $image = '<img src="' . $img_url . '"  class="rounded" height="50">';
                }
                else {
                    $image = '-';
                }

                $edit_url = base_url() . 'admin/about-us/edit/' . $item['id'];
                $delete_url = base_url() . 'admin/about_us/delete/' . $item['id'];
                $confim_txt = "Confirm Delete";
                $action = '<a href="' . $edit_url . '" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit"><button type="button" class="btn mr-1 mb-1 icon-btn-edit"><i class="fa fa-pencil" aria-hidden="true"></i></button></a>';
                $action .= '<a href="#" onclick="confirm_modal(\'' . $delete_url . '\',\'' . $confim_txt . '\');"><button type="button" class="btn mr-1 mb-1 icon-btn-del"><i class="fa fa-trash" aria-hidden="true"></i></button></a>';

                $data[] = array(
                    "sr" => ++$start,
                    "title" => $item['title'],
                    "image" => $image,
                    "action" => $action
                );
            }
        }

        $json_data = array(
            "draw" => intval($params['draw']),
            "recordsTotal" => $total_count,
            "recordsFiltered" => $total_count,
            "data" => $data
        );
        echo json_encode($json_data);
    }

    public function add_about_us()
    {
        $super_type = $this->session->userdata('super_type');
        if ($super_type == 'admin') {
            $url = base_url('admin/about-us');
        }

        $resultpost = array(
            "status" => 200,
            "message" => get_phrase('about_us_added_successfully'),
            "url" => $url,
        );

        $this->load->model('upload_model');
        $temp_path = $this->upload_model->upload_temp_image('image');
        if (!empty($temp_path)) {
            $year = date("Y");
            $month = date("m");
            $day = date("d");
            //The folder path for our file should be YYYY/MM/DD
            $directory = "../uploads/about_us/" . "$year/$month/$day/";

            //If the directory doesn't already exists.
            if (!is_dir($directory)) {
                mkdir($directory, 0755, true);
            }
            $data["image"] = $this->upload_model->image_upload_packages($temp_path, $directory);
            $this->upload_model->delete_temp_image($temp_path);
        }

        $data['description'] = $this->input->post('description');
        $data['alt'] = html_escape($this->input->post('alt'));
        $data['title'] = html_escape($this->input->post('title'));
        $this->db->insert('about_us', $data);
        $this->session->set_flashdata('flash_message', get_phrase('about_us_added_successfully'));
        return simple_json_output($resultpost);
    }

    public function get_about_us_by_id($id)
    {
        $this->db->where('id', $id);
        return $this->db->get('about_us');
    }

    public function delete_about_us($id)
    {
        $old_data = $this->get_about_us_by_id($id)->row_array();
        delete_file_from_server('../' . $old_data['image']);

        $this->db->where('id', $id);
        $this->db->delete('about_us');
        $this->session->set_flashdata('flash_message', get_phrase('about_us_deleted_successfully'));
    }

    public function edit_about_us($id)
    {
        $super_type = $this->session->userdata('super_type');
        if ($super_type == 'admin') {
            $url = base_url('admin/about-us');
        }

        $resultpost = array(
            "status" => 200,
            "message" => get_phrase('about_us_updated_successfully'),
            "url" => $url,
        );


        $this->load->model('upload_model');
        $temp_path = $this->upload_model->upload_temp_image('image');
        if (!empty($temp_path)) {
            $year = date("Y");
            $month = date("m");
            $day = date("d");
            //The folder path for our file should be YYYY/MM/DD
            $directory = "../uploads/about_us/" . "$year/$month/$day/";

            //If the directory doesn't already exists.
            if (!is_dir($directory)) {
                mkdir($directory, 0755, true);
            }
            $data["image"] = $this->upload_model->image_upload_packages($temp_path, $directory);
            $this->upload_model->delete_temp_image($temp_path);
        }

        $data['description'] = $this->input->post('description');
        $data['alt'] = html_escape($this->input->post('alt'));
        $data['title'] = html_escape($this->input->post('title'));
        $this->db->where('id', $id);
        $this->db->update('about_us', $data);
        $this->session->set_flashdata('flash_message', get_phrase('about_us_updated_successfully'));
        return simple_json_output($resultpost);
    }

    // Our Team

    public function get_our_team()
    {
        $params['draw'] = $_REQUEST['draw'];
        $start = $_REQUEST['start'];
        $length = $_REQUEST['length'];

        $data = array();

        $total_count = $this->db->query("SELECT id FROM our_team WHERE (id<>'') ORDER BY id ASC")->num_rows();
        $query = $this->db->query("SELECT id,image,title FROM our_team WHERE (id<>'') ORDER BY id ASC LIMIT $start, $length");

        if (!empty($query)) {
            foreach ($query->result_array() as $item) {

                $image = '';
                if ($item['image'] != '') {
                    $img_url = main_url() . $item['image'];
                    $image = '<img src="' . $img_url . '"  class="rounded" height="50">';
                }
                else {
                    $image = '-';
                }

                $edit_url = base_url() . 'admin/our-team/edit/' . $item['id'];
                $delete_url = base_url() . 'admin/our_team/delete/' . $item['id'];
                $confim_txt = "Confirm Delete";
                $action = '<a href="' . $edit_url . '" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit"><button type="button" class="btn mr-1 mb-1 icon-btn-edit"><i class="fa fa-pencil" aria-hidden="true"></i></button></a>';
                $action .= '<a href="#" onclick="confirm_modal(\'' . $delete_url . '\',\'' . $confim_txt . '\');"><button type="button" class="btn mr-1 mb-1 icon-btn-del"><i class="fa fa-trash" aria-hidden="true"></i></button></a>';

                $data[] = array(
                    "sr" => ++$start,
                    "title" => $item['title'],
                    "image" => $image,
                    "action" => $action
                );
            }
        }

        $json_data = array(
            "draw" => intval($params['draw']),
            "recordsTotal" => $total_count,
            "recordsFiltered" => $total_count,
            "data" => $data
        );
        echo json_encode($json_data);
    }

    public function add_our_team()
    {
        $super_type = $this->session->userdata('super_type');
        if ($super_type == 'admin') {
            $url = base_url('admin/our-team');
        }

        $resultpost = array(
            "status" => 200,
            "message" => get_phrase('our_team_added_successfully'),
            "url" => $url,
        );

        $this->load->model('upload_model');
        $temp_path = $this->upload_model->upload_temp_image('image');
        if (!empty($temp_path)) {
            $year = date("Y");
            $month = date("m");
            $day = date("d");
            // The folder path for our file should be YYYY/MM/DD
            $directory = "../uploads/our_team/" . "$year/$month/$day/";

            // If the directory doesn't already exists.
            if (!is_dir($directory)) {
                mkdir($directory, 0755, true);
            }
            $data["image"] = $this->upload_model->image_upload_packages($temp_path, $directory);
            $this->upload_model->delete_temp_image($temp_path);
        }

        // Prepare data
        $data['description'] = $this->input->post('description');
        $data['name'] = html_escape($this->input->post('name'));
        $data['alt'] = html_escape($this->input->post('alt'));
        $data['title'] = html_escape($this->input->post('title'));

        // Generate a URL-friendly slug from the name
        $data['slug'] = url_title($data['name'], 'dash', TRUE);

        // Insert into the database
        $this->db->insert('our_team', $data);
        $this->session->set_flashdata('flash_message', get_phrase('our_team_added_successfully'));

        return simple_json_output($resultpost);
    }


    public function get_our_team_by_id($id)
    {
        $this->db->where('id', $id);
        return $this->db->get('our_team');
    }

    public function delete_our_team($id)
    {
        $old_data = $this->get_our_team_by_id($id)->row_array();
        delete_file_from_server('../' . $old_data['image']);

        $this->db->where('id', $id);
        $this->db->delete('our_team');
        $this->session->set_flashdata('flash_message', get_phrase('our_team_deleted_successfully'));
    }

    public function edit_our_team($id)
    {
        $super_type = $this->session->userdata('super_type');
        if ($super_type == 'admin') {
            $url = base_url('admin/our-team');
        }

        $resultpost = array(
            "status" => 200,
            "message" => get_phrase('our_team_updated_successfully'),
            "url" => $url,
        );

        $this->load->model('upload_model');
        $temp_path = $this->upload_model->upload_temp_image('image');
        if (!empty($temp_path)) {
            $year = date("Y");
            $month = date("m");
            $day = date("d");
            // The folder path for our file should be YYYY/MM/DD
            $directory = "../uploads/our_team/" . "$year/$month/$day/";

            // If the directory doesn't already exists.
            if (!is_dir($directory)) {
                mkdir($directory, 0755, true);
            }
            $data["image"] = $this->upload_model->image_upload_packages($temp_path, $directory);
            $this->upload_model->delete_temp_image($temp_path);
        }

        // Prepare data
        $data['description'] = $this->input->post('description');
        $data['name'] = html_escape($this->input->post('name'));
        $data['alt'] = html_escape($this->input->post('alt'));
        $data['title'] = html_escape($this->input->post('title'));

        // Generate a URL-friendly slug from the name
        $data['slug'] = url_title($data['name'], 'dash', TRUE);

        // Update the team member data by ID
        $this->db->where('id', $id);
        $this->db->update('our_team', $data);
        $this->session->set_flashdata('flash_message', get_phrase('our_team_updated_successfully'));

        return simple_json_output($resultpost);
    }



    //About Us

    public function get_learning_space()
    {
        $params['draw'] = $_REQUEST['draw'];
        $start = $_REQUEST['start'];
        $length = $_REQUEST['length'];

        $data = array();

        $total_count = $this->db->query("SELECT id FROM learning_space WHERE (id<>'') ORDER BY id ASC")->num_rows();
        $query = $this->db->query("SELECT id,image,title FROM learning_space WHERE (id<>'') ORDER BY id ASC LIMIT $start, $length");

        if (!empty($query)) {
            foreach ($query->result_array() as $item) {

                $image = '';
                if ($item['image'] != '') {
                    $img_url = main_url() . $item['image'];
                    $image = '<img src="' . $img_url . '"  class="rounded" height="50">';
                }
                else {
                    $image = '-';
                }

                $edit_url = base_url() . 'admin/learning-space/edit/' . $item['id'];
                $delete_url = base_url() . 'admin/learning_space/delete/' . $item['id'];
                $confim_txt = "Confirm Delete";
                $action = '<a href="' . $edit_url . '" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit"><button type="button" class="btn mr-1 mb-1 icon-btn-edit"><i class="fa fa-pencil" aria-hidden="true"></i></button></a>';
                $action .= '<a href="#" onclick="confirm_modal(\'' . $delete_url . '\',\'' . $confim_txt . '\');"><button type="button" class="btn mr-1 mb-1 icon-btn-del"><i class="fa fa-trash" aria-hidden="true"></i></button></a>';

                $data[] = array(
                    "sr" => ++$start,
                    "title" => $item['title'],
                    "image" => $image,
                    "action" => $action
                );
            }
        }

        $json_data = array(
            "draw" => intval($params['draw']),
            "recordsTotal" => $total_count,
            "recordsFiltered" => $total_count,
            "data" => $data
        );
        echo json_encode($json_data);
    }

    public function add_learning_space()
    {
        $super_type = $this->session->userdata('super_type');
        if ($super_type == 'admin') {
            $url = base_url('admin/learning-space');
        }

        $resultpost = array(
            "status" => 200,
            "message" => get_phrase('learning_space_added_successfully'),
            "url" => $url,
        );

        $this->load->model('upload_model');
        $temp_path = $this->upload_model->upload_temp_image('image');
        if (!empty($temp_path)) {
            $year = date("Y");
            $month = date("m");
            $day = date("d");
            //The folder path for our file should be YYYY/MM/DD
            $directory = "../uploads/learning_space/" . "$year/$month/$day/";

            //If the directory doesn't already exists.
            if (!is_dir($directory)) {
                mkdir($directory, 0755, true);
            }
            $data["image"] = $this->upload_model->image_upload_packages($temp_path, $directory);
            $this->upload_model->delete_temp_image($temp_path);
        }

        $temp_path = $this->upload_model->upload_temp_image('heading');
        if (!empty($temp_path)) {
            $year = date("Y");
            $month = date("m");
            $day = date("d");
            //The folder path for our file should be YYYY/MM/DD
            $directory = "../uploads/learning_space/" . "$year/$month/$day/";

            //If the directory doesn't already exists.
            if (!is_dir($directory)) {
                mkdir($directory, 0755, true);
            }
            $data["heading"] = $this->upload_model->image_upload_packages($temp_path, $directory);
            $this->upload_model->delete_temp_image($temp_path);
        }

        $data['description'] = $this->input->post('description');
        $data['alt1'] = html_escape($this->input->post('alt1'));
        $data['alt2'] = html_escape($this->input->post('alt2'));
        $data['title'] = html_escape($this->input->post('title'));
        $this->db->insert('learning_space', $data);
        $this->session->set_flashdata('flash_message', get_phrase('learning_space_added_successfully'));
        return simple_json_output($resultpost);
    }

    public function get_learning_space_by_id($id)
    {
        $this->db->where('id', $id);
        return $this->db->get('learning_space');
    }

    public function delete_learning_space($id)
    {
        $old_data = $this->get_learning_space_by_id($id)->row_array();
        delete_file_from_server('../' . $old_data['image']);

        $this->db->where('id', $id);
        $this->db->delete('learning_space');
        $this->session->set_flashdata('flash_message', get_phrase('learning_space_deleted_successfully'));
    }

    public function edit_learning_space($id)
    {
        $super_type = $this->session->userdata('super_type');
        if ($super_type == 'admin') {
            $url = base_url('admin/learning-space');
        }

        $resultpost = array(
            "status" => 200,
            "message" => get_phrase('learning_space_updated_successfully'),
            "url" => $url,
        );


        $this->load->model('upload_model');
        $temp_path = $this->upload_model->upload_temp_image('image');
        if (!empty($temp_path)) {
            $year = date("Y");
            $month = date("m");
            $day = date("d");
            //The folder path for our file should be YYYY/MM/DD
            $directory = "../uploads/learning_space/" . "$year/$month/$day/";

            //If the directory doesn't already exists.
            if (!is_dir($directory)) {
                mkdir($directory, 0755, true);
            }
            $data["image"] = $this->upload_model->image_upload_packages($temp_path, $directory);
            $this->upload_model->delete_temp_image($temp_path);
        }

        $temp_path = $this->upload_model->upload_temp_image('heading');
        if (!empty($temp_path)) {
            $year = date("Y");
            $month = date("m");
            $day = date("d");
            //The folder path for our file should be YYYY/MM/DD
            $directory = "../uploads/learning_space/" . "$year/$month/$day/";

            //If the directory doesn't already exists.
            if (!is_dir($directory)) {
                mkdir($directory, 0755, true);
            }
            $data["heading"] = $this->upload_model->image_upload_packages($temp_path, $directory);
            $this->upload_model->delete_temp_image($temp_path);
        }

        $data['description'] = $this->input->post('description');
        $data['title'] = html_escape($this->input->post('title'));
        $data['alt1'] = html_escape($this->input->post('alt1'));
        $data['alt2'] = html_escape($this->input->post('alt2'));
        $this->db->where('id', $id);
        $this->db->update('learning_space', $data);
        $this->session->set_flashdata('flash_message', get_phrase('learning_space_updated_successfully'));
        return simple_json_output($resultpost);
    }

    // Curriculum About 

    public function update_about_curriculum($id)
    {
        $super_type = $this->session->userdata('super_type');
        if ($super_type == 'admin') {
            $url = base_url('admin/about-curriculum');
        }

        $resultpost = array(
            "status" => 200,
            "message" => get_phrase('about_curriculum_updated_successfully'),
            "url" => $url,
        );


        $this->load->model('upload_model');
        $temp_path = $this->upload_model->upload_temp_image('image');
        if (!empty($temp_path)) {
            $year = date("Y");
            $month = date("m");
            $day = date("d");
            //The folder path for our file should be YYYY/MM/DD
            $directory = "../uploads/about_curriculum/" . "$year/$month/$day/";

            //If the directory doesn't already exists.
            if (!is_dir($directory)) {
                mkdir($directory, 0755, true);
            }
            $data["image"] = $this->upload_model->image_upload_packages($temp_path, $directory);
            $this->upload_model->delete_temp_image($temp_path);
        }

        $data['alt'] = html_escape($this->input->post('alt'));
        $data['title'] = html_escape($this->input->post('title'));
        $data['description'] = $this->input->post('description');
        $this->db->where('id', $id);
        $this->db->update('about_curriculum', $data);
        $this->session->set_flashdata('flash_message', get_phrase('about_curriculum_updated_successfully'));
        return simple_json_output($resultpost);
    }

    //Curriculum Slider

    public function get_curriculum_slider()
    {
        $params['draw'] = $_REQUEST['draw'];
        $start = $_REQUEST['start'];
        $length = $_REQUEST['length'];

        $data = array();

        $total_count = $this->db->query("SELECT id FROM curriculum_slider WHERE (id<>'') ORDER BY id ASC")->num_rows();
        $query = $this->db->query("SELECT id,title FROM curriculum_slider WHERE (id<>'') ORDER BY id ASC LIMIT $start, $length");

        if (!empty($query)) {
            foreach ($query->result_array() as $item) {

                $edit_url = base_url() . 'admin/curriculum-slider/edit/' . $item['id'];
                $delete_url = base_url() . 'admin/curriculum_slider/delete/' . $item['id'];
                $confim_txt = "Confirm Delete";
                $action = '<a href="' . $edit_url . '" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit"><button type="button" class="btn mr-1 mb-1 icon-btn-edit"><i class="fa fa-pencil" aria-hidden="true"></i></button></a>';
                $action .= '<a href="#" onclick="confirm_modal(\'' . $delete_url . '\',\'' . $confim_txt . '\');"><button type="button" class="btn mr-1 mb-1 icon-btn-del"><i class="fa fa-trash" aria-hidden="true"></i></button></a>';

                $data[] = array(
                    "sr" => ++$start,
                    "title" => $item['title'],
                    "action" => $action
                );
            }
        }

        $json_data = array(
            "draw" => intval($params['draw']),
            "recordsTotal" => $total_count,
            "recordsFiltered" => $total_count,
            "data" => $data
        );
        echo json_encode($json_data);
    }

    public function add_curriculum_slider()
    {
        $super_type = $this->session->userdata('super_type');
        if ($super_type == 'admin') {
            $url = base_url('admin/curriculum-slider');
        }

        $resultpost = array(
            "status" => 200,
            "message" => get_phrase('curriculum_slider_added_successfully'),
            "url" => $url,
        );

        $data['description'] = $this->input->post('description');
        $data['title'] = html_escape($this->input->post('title'));
        $this->db->insert('curriculum_slider', $data);
        $this->session->set_flashdata('flash_message', get_phrase('curriculum_slider_added_successfully'));
        return simple_json_output($resultpost);
    }

    public function get_curriculum_slider_by_id($id)
    {
        $this->db->where('id', $id);
        return $this->db->get('curriculum_slider');
    }

    public function delete_curriculum_slider($id)
    {
        $old_data = $this->get_curriculum_slider_by_id($id)->row_array();
        delete_file_from_server('../' . $old_data['image']);

        $this->db->where('id', $id);
        $this->db->delete('curriculum_slider');
        $this->session->set_flashdata('flash_message', get_phrase('curriculum_slider_deleted_successfully'));
    }

    public function edit_curriculum_slider($id)
    {
        $super_type = $this->session->userdata('super_type');
        if ($super_type == 'admin') {
            $url = base_url('admin/curriculum-slider');
        }

        $resultpost = array(
            "status" => 200,
            "message" => get_phrase('curriculum_slider_updated_successfully'),
            "url" => $url,
        );

        $data['description'] = $this->input->post('description');
        $data['title'] = html_escape($this->input->post('title'));
        $this->db->where('id', $id);
        $this->db->update('curriculum_slider', $data);
        $this->session->set_flashdata('flash_message', get_phrase('curriculum_slider_updated_successfully'));
        return simple_json_output($resultpost);
    }

    // Programmes Content
    public function get_programmes_content()
    {
        $params['draw'] = $_REQUEST['draw'];
        $start = $_REQUEST['start'];
        $length = $_REQUEST['length'];

        $data = array();

        $total_count = $this->db->query("SELECT id FROM programmes_content WHERE (id<>'') ORDER BY id ASC")->num_rows();
        $query = $this->db->query("SELECT id,image,title FROM programmes_content WHERE (id<>'') ORDER BY id ASC LIMIT $start, $length");

        if (!empty($query)) {
            foreach ($query->result_array() as $item) {

                $image = '';
                if ($item['image'] != '') {
                    $img_url = main_url() . $item['image'];
                    $image = '<img src="' . $img_url . '"  class="rounded" height="50">';
                }
                else {
                    $image = '-';
                }

                $edit_url = base_url() . 'admin/programmes-content/edit/' . $item['id'];
                $delete_url = base_url() . 'admin/programmes_content/delete/' . $item['id'];
                $confim_txt = "Confirm Delete";
                $action = '<a href="' . $edit_url . '" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit"><button type="button" class="btn mr-1 mb-1 icon-btn-edit"><i class="fa fa-pencil" aria-hidden="true"></i></button></a>';
                $action .= '<a href="#" onclick="confirm_modal(\'' . $delete_url . '\',\'' . $confim_txt . '\');"><button type="button" class="btn mr-1 mb-1 icon-btn-del"><i class="fa fa-trash" aria-hidden="true"></i></button></a>';

                $data[] = array(
                    "sr" => ++$start,
                    "title" => $item['title'],
                    "image" => $image,
                    "action" => $action
                );
            }
        }

        $json_data = array(
            "draw" => intval($params['draw']),
            "recordsTotal" => $total_count,
            "recordsFiltered" => $total_count,
            "data" => $data
        );
        echo json_encode($json_data);
    }

    public function add_programmes_content()
    {
        $super_type = $this->session->userdata('super_type');
        if ($super_type == 'admin') {
            $url = base_url('admin/programmes-content');
        }

        $resultpost = array(
            "status" => 200,
            "message" => get_phrase('programmes_content_added_successfully'),
            "url" => $url,
        );

        $this->load->model('upload_model');
        $temp_path = $this->upload_model->upload_temp_image('image');
        if (!empty($temp_path)) {
            $year = date("Y");
            $month = date("m");
            $day = date("d");
            //The folder path for our file should be YYYY/MM/DD
            $directory = "../uploads/programmes_content/" . "$year/$month/$day/";

            //If the directory doesn't already exists.
            if (!is_dir($directory)) {
                mkdir($directory, 0755, true);
            }
            $data["image"] = $this->upload_model->image_upload_packages($temp_path, $directory);
            $this->upload_model->delete_temp_image($temp_path);
        }

        $data['description'] = $this->input->post('description');
        $data['alt'] = html_escape($this->input->post('alt'));
        $data['heading'] = html_escape($this->input->post('heading'));
        $data['title'] = html_escape($this->input->post('title'));
        $this->db->insert('programmes_content', $data);
        $this->session->set_flashdata('flash_message', get_phrase('programmes_content_added_successfully'));
        return simple_json_output($resultpost);
    }

    public function get_programmes_content_by_id($id)
    {
        $this->db->where('id', $id);
        return $this->db->get('programmes_content');
    }

    public function delete_programmes_content($id)
    {
        $old_data = $this->get_programmes_content_by_id($id)->row_array();
        delete_file_from_server('../' . $old_data['image']);

        $this->db->where('id', $id);
        $this->db->delete('programmes_content');
        $this->session->set_flashdata('flash_message', get_phrase('programmes_content_deleted_successfully'));
    }

    public function edit_programmes_content($id)
    {
        $super_type = $this->session->userdata('super_type');
        if ($super_type == 'admin') {
            $url = base_url('admin/programmes-content');
        }

        $resultpost = array(
            "status" => 200,
            "message" => get_phrase('programmes_content_updated_successfully'),
            "url" => $url,
        );


        $this->load->model('upload_model');
        $temp_path = $this->upload_model->upload_temp_image('image');
        if (!empty($temp_path)) {
            $year = date("Y");
            $month = date("m");
            $day = date("d");
            //The folder path for our file should be YYYY/MM/DD
            $directory = "../uploads/programmes_content/" . "$year/$month/$day/";

            //If the directory doesn't already exists.
            if (!is_dir($directory)) {
                mkdir($directory, 0755, true);
            }
            $data["image"] = $this->upload_model->image_upload_packages($temp_path, $directory);
            $this->upload_model->delete_temp_image($temp_path);
        }

        $data['description'] = $this->input->post('description');
        $data['heading'] = html_escape($this->input->post('heading'));
        $data['alt'] = html_escape($this->input->post('alt'));
        $data['title'] = html_escape($this->input->post('title'));
        $this->db->where('id', $id);
        $this->db->update('programmes_content', $data);
        $this->session->set_flashdata('flash_message', get_phrase('programmes_content_updated_successfully'));
        return simple_json_output($resultpost);
    }

    // SEO Curriculums
    public function get_seo_curriculums()
    {
        // Auto-create table if not exists
        $this->db->query("CREATE TABLE IF NOT EXISTS seo_curriculums (
            id INT AUTO_INCREMENT PRIMARY KEY,
            name VARCHAR(255) NOT NULL,
            slug VARCHAR(255) NOT NULL UNIQUE,
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        )");

        // Seed initial data if empty
        $count = $this->db->count_all('seo_curriculums');
        if ($count == 0) {
            $initial_curriculums = [
                ['name' => 'Nursery', 'slug' => 'nursery'],
                ['name' => 'Pre Primary', 'slug' => 'pre-primary'],
                ['name' => 'CBSE', 'slug' => 'cbse'],
                ['name' => 'Kindergarten', 'slug' => 'kindergarten'],
                ['name' => 'Daycare', 'slug' => 'daycare'],
                ['name' => 'International Schools', 'slug' => 'international-schools'],
                ['name' => 'Childcare', 'slug' => 'childcare'],
                ['name' => 'Montessori', 'slug' => 'montessori']
            ];
            $this->db->insert_batch('seo_curriculums', $initial_curriculums);
        }

        $params['draw'] = $_REQUEST['draw'];
        $start = $_REQUEST['start'];
        $length = $_REQUEST['length'];

        $data = array();

        $total_count = $this->db->query("SELECT id FROM seo_curriculums WHERE (id<>'') ORDER BY id DESC")->num_rows();
        $query = $this->db->query("SELECT * FROM seo_curriculums WHERE (id<>'') ORDER BY id DESC LIMIT $start, $length");

        if (!empty($query)) {
            foreach ($query->result_array() as $item) {
                $edit_url = base_url() . 'admin/seo-curriculums/edit/' . $item['id'];
                $delete_url = base_url() . 'admin/seo_curriculums/delete/' . $item['id'];
                $confim_txt = "Confirm Delete";
                $action = '<a href="' . $edit_url . '" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit"><button type="button" class="btn mr-1 mb-1 icon-btn-edit"><i class="fa fa-pencil" aria-hidden="true"></i></button></a>';
                $action .= '<a href="#" onclick="confirm_modal(\'' . $delete_url . '\',\'' . $confim_txt . '\');"><button type="button" class="btn mr-1 mb-1 icon-btn-del"><i class="fa fa-trash" aria-hidden="true"></i></button></a>';

                $data[] = array(
                    "sr" => ++$start,
                    "name" => $item['name'],
                    "slug" => $item['slug'],
                    "action" => $action
                );
            }
        }

        $json_data = array(
            "draw" => intval($params['draw']),
            "recordsTotal" => $total_count,
            "recordsFiltered" => $total_count,
            "data" => $data
        );
        echo json_encode($json_data);
    }

    public function add_seo_curriculum()
    {
        $super_type = $this->session->userdata('super_type');
        if ($super_type == 'admin') {
            $url = base_url('admin/seo-curriculums');
        }

        $resultpost = array(
            "status" => 200,
            "message" => get_phrase('curriculum_added_successfully'),
            "url" => $url,
        );

        $data['name'] = html_escape($this->input->post('name'));
        $data['slug'] = $this->common_model->create_unique_slug('seo_curriculums', 'slug', html_escape($this->input->post('name')));

        $this->db->insert('seo_curriculums', $data);
        $this->session->set_flashdata('flash_message', get_phrase('curriculum_added_successfully'));
        return simple_json_output($resultpost);
    }

    public function get_seo_curriculum_by_id($id)
    {
        $this->db->where('id', $id);
        return $this->db->get('seo_curriculums');
    }

    public function delete_seo_curriculum($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('seo_curriculums');
        $this->session->set_flashdata('flash_message', get_phrase('curriculum_deleted_successfully'));
    }

    public function edit_seo_curriculum($id)
    {
        $super_type = $this->session->userdata('super_type');
        if ($super_type == 'admin') {
            $url = base_url('admin/seo-curriculums');
        }

        $resultpost = array(
            "status" => 200,
            "message" => get_phrase('curriculum_updated_successfully'),
            "url" => $url,
        );

        $data['name'] = html_escape($this->input->post('name'));
        $data['slug'] = $this->common_model->create_unique_slug('seo_curriculums', 'slug', html_escape($this->input->post('name')), $id);

        $this->db->where('id', $id);
        $this->db->update('seo_curriculums', $data);
        $this->session->set_flashdata('flash_message', get_phrase('curriculum_updated_successfully'));
        return simple_json_output($resultpost);
    }

    // Programmes Icon
    public function get_programmes_icon()
    {
        $params['draw'] = $_REQUEST['draw'];
        $start = $_REQUEST['start'];
        $length = $_REQUEST['length'];

        $data = array();

        $total_count = $this->db->query("SELECT id FROM programmes_icon WHERE (id<>'') ORDER BY id ASC")->num_rows();
        $query = $this->db->query("SELECT id,image, description FROM programmes_icon WHERE (id<>'') ORDER BY id ASC LIMIT $start, $length");

        if (!empty($query)) {
            foreach ($query->result_array() as $item) {

                $image = '';
                if ($item['image'] != '') {
                    $img_url = main_url() . $item['image'];
                    $image = '<img src="' . $img_url . '"  class="rounded" height="50">';
                }
                else {
                    $image = '-';
                }

                $edit_url = base_url() . 'admin/programmes-icon/edit/' . $item['id'];
                $delete_url = base_url() . 'admin/programmes_icon/delete/' . $item['id'];
                $confim_txt = "Confirm Delete";
                $action = '<a href="' . $edit_url . '" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit"><button type="button" class="btn mr-1 mb-1 icon-btn-edit"><i class="fa fa-pencil" aria-hidden="true"></i></button></a>';
                $action .= '<a href="#" onclick="confirm_modal(\'' . $delete_url . '\',\'' . $confim_txt . '\');"><button type="button" class="btn mr-1 mb-1 icon-btn-del"><i class="fa fa-trash" aria-hidden="true"></i></button></a>';

                $data[] = array(
                    "sr" => ++$start,
                    "desc" => $item['description'],
                    "image" => $image,
                    "action" => $action
                );
            }
        }

        $json_data = array(
            "draw" => intval($params['draw']),
            "recordsTotal" => $total_count,
            "recordsFiltered" => $total_count,
            "data" => $data
        );
        echo json_encode($json_data);
    }

    public function add_programmes_icon()
    {
        $super_type = $this->session->userdata('super_type');
        if ($super_type == 'admin') {
            $url = base_url('admin/programmes-icon');
        }

        $resultpost = array(
            "status" => 200,
            "message" => get_phrase('programmes_icon_added_successfully'),
            "url" => $url,
        );

        $this->load->model('upload_model');
        $temp_path = $this->upload_model->upload_temp_image('image');
        if (!empty($temp_path)) {
            $year = date("Y");
            $month = date("m");
            $day = date("d");
            //The folder path for our file should be YYYY/MM/DD
            $directory = "../uploads/programmes_icon/" . "$year/$month/$day/";

            //If the directory doesn't already exists.
            if (!is_dir($directory)) {
                mkdir($directory, 0755, true);
            }
            $data["image"] = $this->upload_model->image_upload_packages($temp_path, $directory);
            $this->upload_model->delete_temp_image($temp_path);
        }

        $data['description'] = $this->input->post('description');
        $data['alt'] = html_escape($this->input->post('alt'));
        $this->db->insert('programmes_icon', $data);
        $this->session->set_flashdata('flash_message', get_phrase('programmes_icon_added_successfully'));
        return simple_json_output($resultpost);
    }

    public function get_programmes_icon_by_id($id)
    {
        $this->db->where('id', $id);
        return $this->db->get('programmes_icon');
    }

    public function delete_programmes_icon($id)
    {
        $old_data = $this->get_programmes_icon_by_id($id)->row_array();
        delete_file_from_server('../' . $old_data['image']);

        $this->db->where('id', $id);
        $this->db->delete('programmes_icon');
        $this->session->set_flashdata('flash_message', get_phrase('programmes_icon_deleted_successfully'));
    }

    public function edit_programmes_icon($id)
    {
        $super_type = $this->session->userdata('super_type');
        if ($super_type == 'admin') {
            $url = base_url('admin/programmes-icon');
        }

        $resultpost = array(
            "status" => 200,
            "message" => get_phrase('programmes_icon_updated_successfully'),
            "url" => $url,
        );


        $this->load->model('upload_model');
        $temp_path = $this->upload_model->upload_temp_image('image');
        if (!empty($temp_path)) {
            $year = date("Y");
            $month = date("m");
            $day = date("d");
            //The folder path for our file should be YYYY/MM/DD
            $directory = "../uploads/programmes_icon/" . "$year/$month/$day/";

            //If the directory doesn't already exists.
            if (!is_dir($directory)) {
                mkdir($directory, 0755, true);
            }
            $data["image"] = $this->upload_model->image_upload_packages($temp_path, $directory);
            $this->upload_model->delete_temp_image($temp_path);
        }

        $data['description'] = $this->input->post('description');
        $data['alt'] = html_escape($this->input->post('alt'));
        $this->db->where('id', $id);
        $this->db->update('programmes_icon', $data);
        $this->session->set_flashdata('flash_message', get_phrase('programmes_icon_updated_successfully'));
        return simple_json_output($resultpost);
    }

    // A Day At Kiszonia
    public function get_kidzonia_day()
    {
        $params['draw'] = $_REQUEST['draw'];
        $start = $_REQUEST['start'];
        $length = $_REQUEST['length'];

        $data = array();

        $total_count = $this->db->query("SELECT id FROM kidzonia_day WHERE (id<>'') ORDER BY id ASC")->num_rows();
        $query = $this->db->query("SELECT id,image,title FROM kidzonia_day WHERE (id<>'') ORDER BY id ASC LIMIT $start, $length");

        if (!empty($query)) {
            foreach ($query->result_array() as $item) {

                $image = '';
                if ($item['image'] != '') {
                    $img_url = main_url() . $item['image'];
                    $image = '<img src="' . $img_url . '"  class="rounded" height="50">';
                }
                else {
                    $image = '-';
                }

                $edit_url = base_url() . 'admin/kidzonia-day/edit/' . $item['id'];
                $delete_url = base_url() . 'admin/kidzonia_day/delete/' . $item['id'];
                $confim_txt = "Confirm Delete";
                $action = '<a href="' . $edit_url . '" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit"><button type="button" class="btn mr-1 mb-1 icon-btn-edit"><i class="fa fa-pencil" aria-hidden="true"></i></button></a>';
                $action .= '<a href="#" onclick="confirm_modal(\'' . $delete_url . '\',\'' . $confim_txt . '\');"><button type="button" class="btn mr-1 mb-1 icon-btn-del"><i class="fa fa-trash" aria-hidden="true"></i></button></a>';

                $data[] = array(
                    "sr" => ++$start,
                    "title" => $item['title'],
                    "image" => $image,
                    "action" => $action
                );
            }
        }

        $json_data = array(
            "draw" => intval($params['draw']),
            "recordsTotal" => $total_count,
            "recordsFiltered" => $total_count,
            "data" => $data
        );
        echo json_encode($json_data);
    }

    public function add_kidzonia_day()
    {
        $super_type = $this->session->userdata('super_type');
        if ($super_type == 'admin') {
            $url = base_url('admin/kidzonia-day');
        }

        $resultpost = array(
            "status" => 200,
            "message" => get_phrase('kidzonia_day_added_successfully'),
            "url" => $url,
        );

        $this->load->model('upload_model');
        $temp_path = $this->upload_model->upload_temp_image('image');
        if (!empty($temp_path)) {
            $year = date("Y");
            $month = date("m");
            $day = date("d");
            //The folder path for our file should be YYYY/MM/DD
            $directory = "../uploads/kidzonia_day/" . "$year/$month/$day/";

            //If the directory doesn't already exists.
            if (!is_dir($directory)) {
                mkdir($directory, 0755, true);
            }
            $data["image"] = $this->upload_model->image_upload_packages($temp_path, $directory);
            $this->upload_model->delete_temp_image($temp_path);
        }

        $temp_path = $this->upload_model->upload_temp_image('image1');
        if (!empty($temp_path)) {
            $year = date("Y");
            $month = date("m");
            $day = date("d");
            //The folder path for our file should be YYYY/MM/DD
            $directory = "../uploads/kidzonia_day/" . "$year/$month/$day/";

            //If the directory doesn't already exists.
            if (!is_dir($directory)) {
                mkdir($directory, 0755, true);
            }
            $data["image1"] = $this->upload_model->image_upload_packages($temp_path, $directory);
            $this->upload_model->delete_temp_image($temp_path);
        }

        $data['description'] = $this->input->post('description');
        $data['alt'] = html_escape($this->input->post('alt'));
        $data['alt1'] = html_escape($this->input->post('alt1'));
        $data['title'] = html_escape($this->input->post('title'));
        $this->db->insert('kidzonia_day', $data);
        $this->session->set_flashdata('flash_message', get_phrase('kidzonia_day_added_successfully'));
        return simple_json_output($resultpost);
    }

    public function get_kidzonia_day_by_id($id)
    {
        $this->db->where('id', $id);
        return $this->db->get('kidzonia_day');
    }

    public function delete_kidzonia_day($id)
    {
        $old_data = $this->get_kidzonia_day_by_id($id)->row_array();
        delete_file_from_server('../' . $old_data['image']);

        $this->db->where('id', $id);
        $this->db->delete('kidzonia_day');
        $this->session->set_flashdata('flash_message', get_phrase('kidzonia_day_deleted_successfully'));
    }

    public function edit_kidzonia_day($id)
    {
        $super_type = $this->session->userdata('super_type');
        if ($super_type == 'admin') {
            $url = base_url('admin/kidzonia-day');
        }

        $resultpost = array(
            "status" => 200,
            "message" => get_phrase('kidzonia_day_updated_successfully'),
            "url" => $url,
        );


        $this->load->model('upload_model');
        $temp_path = $this->upload_model->upload_temp_image('image');
        if (!empty($temp_path)) {
            $year = date("Y");
            $month = date("m");
            $day = date("d");
            //The folder path for our file should be YYYY/MM/DD
            $directory = "../uploads/kidzonia_day/" . "$year/$month/$day/";

            //If the directory doesn't already exists.
            if (!is_dir($directory)) {
                mkdir($directory, 0755, true);
            }
            $data["image"] = $this->upload_model->image_upload_packages($temp_path, $directory);
            $this->upload_model->delete_temp_image($temp_path);
        }

        $temp_path = $this->upload_model->upload_temp_image('image1');
        if (!empty($temp_path)) {
            $year = date("Y");
            $month = date("m");
            $day = date("d");
            //The folder path for our file should be YYYY/MM/DD
            $directory = "../uploads/kidzonia_day/" . "$year/$month/$day/";

            //If the directory doesn't already exists.
            if (!is_dir($directory)) {
                mkdir($directory, 0755, true);
            }
            $data["image1"] = $this->upload_model->image_upload_packages($temp_path, $directory);
            $this->upload_model->delete_temp_image($temp_path);
        }

        $data['description'] = $this->input->post('description');
        $data['alt'] = html_escape($this->input->post('alt'));
        $data['alt1'] = html_escape($this->input->post('alt1'));
        $data['title'] = html_escape($this->input->post('title'));
        $this->db->where('id', $id);
        $this->db->update('kidzonia_day', $data);
        $this->session->set_flashdata('flash_message', get_phrase('kidzonia_day_updated_successfully'));
        return simple_json_output($resultpost);
    }

    // Kidzonia Commits
    public function get_kidzonia_commits()
    {
        $params['draw'] = $_REQUEST['draw'];
        $start = $_REQUEST['start'];
        $length = $_REQUEST['length'];

        $data = array();

        $total_count = $this->db->query("SELECT id FROM kidzonia_commits WHERE (id<>'') ORDER BY id ASC")->num_rows();
        $query = $this->db->query("SELECT id,image,title FROM kidzonia_commits WHERE (id<>'') ORDER BY id ASC LIMIT $start, $length");

        if (!empty($query)) {
            foreach ($query->result_array() as $item) {

                $image = '';
                if ($item['image'] != '') {
                    $img_url = main_url() . $item['image'];
                    $image = '<img src="' . $img_url . '"  class="rounded" height="50">';
                }
                else {
                    $image = '-';
                }

                $edit_url = base_url() . 'admin/kidzonia-commits/edit/' . $item['id'];
                $delete_url = base_url() . 'admin/kidzonia_commits/delete/' . $item['id'];
                $confim_txt = "Confirm Delete";
                $action = '<a href="' . $edit_url . '" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit"><button type="button" class="btn mr-1 mb-1 icon-btn-edit"><i class="fa fa-pencil" aria-hidden="true"></i></button></a>';
                $action .= '<a href="#" onclick="confirm_modal(\'' . $delete_url . '\',\'' . $confim_txt . '\');"><button type="button" class="btn mr-1 mb-1 icon-btn-del"><i class="fa fa-trash" aria-hidden="true"></i></button></a>';

                $data[] = array(
                    "sr" => ++$start,
                    "title" => $item['title'],
                    "image" => $image,
                    "action" => $action
                );
            }
        }

        $json_data = array(
            "draw" => intval($params['draw']),
            "recordsTotal" => $total_count,
            "recordsFiltered" => $total_count,
            "data" => $data
        );
        echo json_encode($json_data);
    }

    public function add_kidzonia_commits()
    {
        $super_type = $this->session->userdata('super_type');
        if ($super_type == 'admin') {
            $url = base_url('admin/kidzonia-commits');
        }

        $resultpost = array(
            "status" => 200,
            "message" => get_phrase('kidzonia_commits_added_successfully'),
            "url" => $url,
        );

        $this->load->model('upload_model');
        $temp_path = $this->upload_model->upload_temp_image('image');
        if (!empty($temp_path)) {
            $year = date("Y");
            $month = date("m");
            $day = date("d");
            //The folder path for our file should be YYYY/MM/DD
            $directory = "../uploads/kidzonia_commits/" . "$year/$month/$day/";

            //If the directory doesn't already exists.
            if (!is_dir($directory)) {
                mkdir($directory, 0755, true);
            }
            $data["image"] = $this->upload_model->image_upload_packages($temp_path, $directory);
            $this->upload_model->delete_temp_image($temp_path);
        }

        $data['description'] = $this->input->post('description');
        $data['alt'] = html_escape($this->input->post('alt'));
        $data['title'] = html_escape($this->input->post('title'));
        $this->db->insert('kidzonia_commits', $data);
        $this->session->set_flashdata('flash_message', get_phrase('kidzonia_commits_added_successfully'));
        return simple_json_output($resultpost);
    }

    public function get_kidzonia_commits_by_id($id)
    {
        $this->db->where('id', $id);
        return $this->db->get('kidzonia_commits');
    }

    public function delete_kidzonia_commits($id)
    {
        $old_data = $this->get_kidzonia_commits_by_id($id)->row_array();
        delete_file_from_server('../' . $old_data['image']);

        $this->db->where('id', $id);
        $this->db->delete('kidzonia_commits');
        $this->session->set_flashdata('flash_message', get_phrase('kidzonia_commits_deleted_successfully'));
    }

    public function edit_kidzonia_commits($id)
    {
        $super_type = $this->session->userdata('super_type');
        if ($super_type == 'admin') {
            $url = base_url('admin/kidzonia-commits');
        }

        $resultpost = array(
            "status" => 200,
            "message" => get_phrase('kidzonia_commits_updated_successfully'),
            "url" => $url,
        );


        $this->load->model('upload_model');
        $temp_path = $this->upload_model->upload_temp_image('image');
        if (!empty($temp_path)) {
            $year = date("Y");
            $month = date("m");
            $day = date("d");
            //The folder path for our file should be YYYY/MM/DD
            $directory = "../uploads/kidzonia_commits/" . "$year/$month/$day/";

            //If the directory doesn't already exists.
            if (!is_dir($directory)) {
                mkdir($directory, 0755, true);
            }
            $data["image"] = $this->upload_model->image_upload_packages($temp_path, $directory);
            $this->upload_model->delete_temp_image($temp_path);
        }

        $data['description'] = $this->input->post('description');
        $data['alt'] = html_escape($this->input->post('alt'));
        $data['title'] = html_escape($this->input->post('title'));
        $this->db->where('id', $id);
        $this->db->update('kidzonia_commits', $data);
        $this->session->set_flashdata('flash_message', get_phrase('kidzonia_commits_updated_successfully'));
        return simple_json_output($resultpost);
    }

    // Ixplore
    public function get_ixplore()
    {
        $params['draw'] = $_REQUEST['draw'];
        $start = $_REQUEST['start'];
        $length = $_REQUEST['length'];

        $data = array();

        $total_count = $this->db->query("SELECT id FROM ixplore WHERE (id<>'') ORDER BY id ASC")->num_rows();
        $query = $this->db->query("SELECT id,image,title FROM ixplore WHERE (id<>'') ORDER BY id ASC LIMIT $start, $length");

        if (!empty($query)) {
            foreach ($query->result_array() as $item) {

                $image = '';
                if ($item['image'] != '') {
                    $img_url = main_url() . $item['image'];
                    $image = '<img src="' . $img_url . '"  class="rounded" height="50">';
                }
                else {
                    $image = '-';
                }

                $edit_url = base_url() . 'admin/ixplore/edit/' . $item['id'];
                $delete_url = base_url() . 'admin/ixplore/delete/' . $item['id'];
                $confim_txt = "Confirm Delete";
                $action = '<a href="' . $edit_url . '" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit"><button type="button" class="btn mr-1 mb-1 icon-btn-edit"><i class="fa fa-pencil" aria-hidden="true"></i></button></a>';
                $action .= '<a href="#" onclick="confirm_modal(\'' . $delete_url . '\',\'' . $confim_txt . '\');"><button type="button" class="btn mr-1 mb-1 icon-btn-del"><i class="fa fa-trash" aria-hidden="true"></i></button></a>';

                $data[] = array(
                    "sr" => ++$start,
                    "title" => $item['title'],
                    "image" => $image,
                    "action" => $action
                );
            }
        }

        $json_data = array(
            "draw" => intval($params['draw']),
            "recordsTotal" => $total_count,
            "recordsFiltered" => $total_count,
            "data" => $data
        );
        echo json_encode($json_data);
    }

    public function add_ixplore()
    {
        $super_type = $this->session->userdata('super_type');
        if ($super_type == 'admin') {
            $url = base_url('admin/ixplore');
        }

        $resultpost = array(
            "status" => 200,
            "message" => get_phrase('ixplore_added_successfully'),
            "url" => $url,
        );

        $this->load->model('upload_model');
        $temp_path = $this->upload_model->upload_temp_image('image');
        if (!empty($temp_path)) {
            $year = date("Y");
            $month = date("m");
            $day = date("d");
            //The folder path for our file should be YYYY/MM/DD
            $directory = "../uploads/ixplore/" . "$year/$month/$day/";

            //If the directory doesn't already exists.
            if (!is_dir($directory)) {
                mkdir($directory, 0755, true);
            }
            $data["image"] = $this->upload_model->image_upload_packages($temp_path, $directory);
            $this->upload_model->delete_temp_image($temp_path);
        }

        $data['description'] = $this->input->post('description');
        $data['alt'] = html_escape($this->input->post('alt'));
        $data['heading'] = html_escape($this->input->post('heading'));
        $data['title'] = html_escape($this->input->post('title'));
        $this->db->insert('ixplore', $data);
        $this->session->set_flashdata('flash_message', get_phrase('ixplore_added_successfully'));
        return simple_json_output($resultpost);
    }

    public function get_ixplore_by_id($id)
    {
        $this->db->where('id', $id);
        return $this->db->get('ixplore');
    }

    public function delete_ixplore($id)
    {
        $old_data = $this->get_ixplore_by_id($id)->row_array();
        delete_file_from_server('../' . $old_data['image']);

        $this->db->where('id', $id);
        $this->db->delete('ixplore');
        $this->session->set_flashdata('flash_message', get_phrase('ixplore_deleted_successfully'));
    }

    public function edit_ixplore($id)
    {
        $super_type = $this->session->userdata('super_type');
        if ($super_type == 'admin') {
            $url = base_url('admin/ixplore');
        }

        $resultpost = array(
            "status" => 200,
            "message" => get_phrase('ixplore_updated_successfully'),
            "url" => $url,
        );


        $this->load->model('upload_model');
        $temp_path = $this->upload_model->upload_temp_image('image');
        if (!empty($temp_path)) {
            $year = date("Y");
            $month = date("m");
            $day = date("d");
            //The folder path for our file should be YYYY/MM/DD
            $directory = "../uploads/ixplore/" . "$year/$month/$day/";

            //If the directory doesn't already exists.
            if (!is_dir($directory)) {
                mkdir($directory, 0755, true);
            }
            $data["image"] = $this->upload_model->image_upload_packages($temp_path, $directory);
            $this->upload_model->delete_temp_image($temp_path);
        }

        $data['description'] = $this->input->post('description');
        $data['heading'] = html_escape($this->input->post('heading'));
        $data['alt'] = html_escape($this->input->post('alt'));
        $data['title'] = html_escape($this->input->post('title'));
        $this->db->where('id', $id);
        $this->db->update('ixplore', $data);
        $this->session->set_flashdata('flash_message', get_phrase('ixplore_updated_successfully'));
        return simple_json_output($resultpost);
    }

    // Whizkids
    public function get_whizkids()
    {
        $params['draw'] = $_REQUEST['draw'];
        $start = $_REQUEST['start'];
        $length = $_REQUEST['length'];

        $data = array();

        $total_count = $this->db->query("SELECT id FROM whizkids WHERE (id<>'') ORDER BY id ASC")->num_rows();
        $query = $this->db->query("SELECT id,image,title FROM whizkids WHERE (id<>'') ORDER BY id ASC LIMIT $start, $length");

        if (!empty($query)) {
            foreach ($query->result_array() as $item) {

                $image = '';
                if ($item['image'] != '') {
                    $img_url = main_url() . $item['image'];
                    $image = '<img src="' . $img_url . '"  class="rounded" height="50">';
                }
                else {
                    $image = '-';
                }

                $edit_url = base_url() . 'admin/whizkids/edit/' . $item['id'];
                $delete_url = base_url() . 'admin/whizkids/delete/' . $item['id'];
                $confim_txt = "Confirm Delete";
                $action = '<a href="' . $edit_url . '" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit"><button type="button" class="btn mr-1 mb-1 icon-btn-edit"><i class="fa fa-pencil" aria-hidden="true"></i></button></a>';
                $action .= '<a href="#" onclick="confirm_modal(\'' . $delete_url . '\',\'' . $confim_txt . '\');"><button type="button" class="btn mr-1 mb-1 icon-btn-del"><i class="fa fa-trash" aria-hidden="true"></i></button></a>';

                $data[] = array(
                    "sr" => ++$start,
                    "title" => $item['title'],
                    "image" => $image,
                    "action" => $action
                );
            }
        }

        $json_data = array(
            "draw" => intval($params['draw']),
            "recordsTotal" => $total_count,
            "recordsFiltered" => $total_count,
            "data" => $data
        );
        echo json_encode($json_data);
    }

    public function add_whizkids()
    {
        $super_type = $this->session->userdata('super_type');
        if ($super_type == 'admin') {
            $url = base_url('admin/whizkids');
        }

        $resultpost = array(
            "status" => 200,
            "message" => get_phrase('whizkids_added_successfully'),
            "url" => $url,
        );

        $this->load->model('upload_model');
        $temp_path = $this->upload_model->upload_temp_image('image');
        if (!empty($temp_path)) {
            $year = date("Y");
            $month = date("m");
            $day = date("d");
            //The folder path for our file should be YYYY/MM/DD
            $directory = "../uploads/whizkids/" . "$year/$month/$day/";

            //If the directory doesn't already exists.
            if (!is_dir($directory)) {
                mkdir($directory, 0755, true);
            }
            $data["image"] = $this->upload_model->image_upload_packages($temp_path, $directory);
            $this->upload_model->delete_temp_image($temp_path);
        }

        $data['description'] = $this->input->post('description');
        $data['alt'] = html_escape($this->input->post('alt'));
        $data['heading'] = html_escape($this->input->post('heading'));
        $data['title'] = html_escape($this->input->post('title'));
        $this->db->insert('whizkids', $data);
        $this->session->set_flashdata('flash_message', get_phrase('whizkids_added_successfully'));
        return simple_json_output($resultpost);
    }

    public function get_whizkids_by_id($id)
    {
        $this->db->where('id', $id);
        return $this->db->get('whizkids');
    }

    public function delete_whizkids($id)
    {
        $old_data = $this->get_whizkids_by_id($id)->row_array();
        delete_file_from_server('../' . $old_data['image']);

        $this->db->where('id', $id);
        $this->db->delete('whizkids');
        $this->session->set_flashdata('flash_message', get_phrase('whizkids_deleted_successfully'));
    }

    public function edit_whizkids($id)
    {
        $super_type = $this->session->userdata('super_type');
        if ($super_type == 'admin') {
            $url = base_url('admin/whizkids');
        }

        $resultpost = array(
            "status" => 200,
            "message" => get_phrase('whizkids_updated_successfully'),
            "url" => $url,
        );


        $this->load->model('upload_model');
        $temp_path = $this->upload_model->upload_temp_image('image');
        if (!empty($temp_path)) {
            $year = date("Y");
            $month = date("m");
            $day = date("d");
            //The folder path for our file should be YYYY/MM/DD
            $directory = "../uploads/whizkids/" . "$year/$month/$day/";

            //If the directory doesn't already exists.
            if (!is_dir($directory)) {
                mkdir($directory, 0755, true);
            }
            $data["image"] = $this->upload_model->image_upload_packages($temp_path, $directory);
            $this->upload_model->delete_temp_image($temp_path);
        }

        $data['description'] = $this->input->post('description');
        $data['heading'] = html_escape($this->input->post('heading'));
        $data['alt'] = html_escape($this->input->post('alt'));
        $data['title'] = html_escape($this->input->post('title'));
        $this->db->where('id', $id);
        $this->db->update('whizkids', $data);
        $this->session->set_flashdata('flash_message', get_phrase('whizkids_updated_successfully'));
        return simple_json_output($resultpost);
    }

    // Admissions
    public function get_admissions()
    {
        $params['draw'] = $_REQUEST['draw'];
        $start = $_REQUEST['start'];
        $length = $_REQUEST['length'];

        $data = array();

        $total_count = $this->db->query("SELECT id FROM admissions WHERE (id<>'') ORDER BY id ASC")->num_rows();
        $query = $this->db->query("SELECT id,title FROM admissions WHERE (id<>'') ORDER BY id ASC LIMIT $start, $length");

        if (!empty($query)) {
            foreach ($query->result_array() as $item) {

                $edit_url = base_url() . 'admin/admissions/edit/' . $item['id'];
                $delete_url = base_url() . 'admin/admissions/delete/' . $item['id'];
                $confim_txt = "Confirm Delete";
                $action = '<a href="' . $edit_url . '" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit"><button type="button" class="btn mr-1 mb-1 icon-btn-edit"><i class="fa fa-pencil" aria-hidden="true"></i></button></a>';
                $action .= '<a href="#" onclick="confirm_modal(\'' . $delete_url . '\',\'' . $confim_txt . '\');"><button type="button" class="btn mr-1 mb-1 icon-btn-del"><i class="fa fa-trash" aria-hidden="true"></i></button></a>';

                $data[] = array(
                    "sr" => ++$start,
                    "title" => $item['title'],
                    "action" => $action
                );
            }
        }

        $json_data = array(
            "draw" => intval($params['draw']),
            "recordsTotal" => $total_count,
            "recordsFiltered" => $total_count,
            "data" => $data
        );
        echo json_encode($json_data);
    }

    public function add_admissions()
    {
        $super_type = $this->session->userdata('super_type');
        if ($super_type == 'admin') {
            $url = base_url('admin/admissions');
        }

        $resultpost = array(
            "status" => 200,
            "message" => get_phrase('admissions_added_successfully'),
            "url" => $url,
        );

        $data['description'] = $this->input->post('description');
        $data['title'] = html_escape($this->input->post('title'));
        $this->db->insert('admissions', $data);
        $this->session->set_flashdata('flash_message', get_phrase('whizkids_added_successfully'));
        return simple_json_output($resultpost);
    }

    public function get_admissions_by_id($id)
    {
        $this->db->where('id', $id);
        return $this->db->get('admissions');
    }

    public function delete_admissions($id)
    {

        $this->db->where('id', $id);
        $this->db->delete('admissions');
        $this->session->set_flashdata('flash_message', get_phrase('admissions_deleted_successfully'));
    }

    public function edit_admissions($id)
    {
        $super_type = $this->session->userdata('super_type');
        if ($super_type == 'admin') {
            $url = base_url('admin/admissions');
        }

        $resultpost = array(
            "status" => 200,
            "message" => get_phrase('admissions_updated_successfully'),
            "url" => $url,
        );

        $data['description'] = $this->input->post('description');
        $data['title'] = html_escape($this->input->post('title'));
        $this->db->where('id', $id);
        $this->db->update('admissions', $data);
        $this->session->set_flashdata('flash_message', get_phrase('admissions_updated_successfully'));
        return simple_json_output($resultpost);
    }

    // Our Teachers

    public function get_our_teachers()
    {
        $params['draw'] = $_REQUEST['draw'];
        $start = $_REQUEST['start'];
        $length = $_REQUEST['length'];

        $data = array();

        $total_count = $this->db->query("SELECT id FROM our_teachers WHERE (id<>'') ORDER BY id ASC")->num_rows();
        $query = $this->db->query("SELECT id,image,title FROM our_teachers WHERE (id<>'') ORDER BY id ASC LIMIT $start, $length");

        if (!empty($query)) {
            foreach ($query->result_array() as $item) {

                $image = '';
                if ($item['image'] != '') {
                    $img_url = main_url() . $item['image'];
                    $image = '<img src="' . $img_url . '"  class="rounded" height="50">';
                }
                else {
                    $image = '-';
                }

                $edit_url = base_url() . 'admin/our-teachers/edit/' . $item['id'];
                $delete_url = base_url() . 'admin/our_teachers/delete/' . $item['id'];
                $confim_txt = "Confirm Delete";
                $action = '<a href="' . $edit_url . '" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit"><button type="button" class="btn mr-1 mb-1 icon-btn-edit"><i class="fa fa-pencil" aria-hidden="true"></i></button></a>';
                $action .= '<a href="#" onclick="confirm_modal(\'' . $delete_url . '\',\'' . $confim_txt . '\');"><button type="button" class="btn mr-1 mb-1 icon-btn-del"><i class="fa fa-trash" aria-hidden="true"></i></button></a>';

                $data[] = array(
                    "sr" => ++$start,
                    "title" => $item['title'],
                    "image" => $image,
                    "action" => $action
                );
            }
        }

        $json_data = array(
            "draw" => intval($params['draw']),
            "recordsTotal" => $total_count,
            "recordsFiltered" => $total_count,
            "data" => $data
        );
        echo json_encode($json_data);
    }

    public function add_our_teachers()
    {
        $super_type = $this->session->userdata('super_type');
        if ($super_type == 'admin') {
            $url = base_url('admin/our-teachers');
        }

        $resultpost = array(
            "status" => 200,
            "message" => get_phrase('our_teachers_added_successfully'),
            "url" => $url,
        );

        $this->load->model('upload_model');
        $temp_path = $this->upload_model->upload_temp_image('image');
        if (!empty($temp_path)) {
            $year = date("Y");
            $month = date("m");
            $day = date("d");
            //The folder path for our file should be YYYY/MM/DD
            $directory = "../uploads/our_teachers/" . "$year/$month/$day/";

            //If the directory doesn't already exists.
            if (!is_dir($directory)) {
                mkdir($directory, 0755, true);
            }
            $data["image"] = $this->upload_model->image_upload_packages($temp_path, $directory);
            $this->upload_model->delete_temp_image($temp_path);
        }

        $data['description'] = $this->input->post('description');
        $data['alt'] = html_escape($this->input->post('alt'));
        $data['title'] = html_escape($this->input->post('title'));
        $this->db->insert('our_teachers', $data);
        $this->session->set_flashdata('flash_message', get_phrase('our_teachers_added_successfully'));
        return simple_json_output($resultpost);
    }

    public function get_our_teachers_by_id($id)
    {
        $this->db->where('id', $id);
        return $this->db->get('our_teachers');
    }

    public function delete_our_teachers($id)
    {
        $old_data = $this->get_our_teachers_by_id($id)->row_array();
        delete_file_from_server('../' . $old_data['image']);

        $this->db->where('id', $id);
        $this->db->delete('our_teachers');
        $this->session->set_flashdata('flash_message', get_phrase('our_teachers_deleted_successfully'));
    }

    public function edit_our_teachers($id)
    {
        $super_type = $this->session->userdata('super_type');
        if ($super_type == 'admin') {
            $url = base_url('admin/our-teachers');
        }

        $resultpost = array(
            "status" => 200,
            "message" => get_phrase('our_teachers_updated_successfully'),
            "url" => $url,
        );

        $this->load->model('upload_model');
        $temp_path = $this->upload_model->upload_temp_image('image');
        if (!empty($temp_path)) {
            $year = date("Y");
            $month = date("m");
            $day = date("d");
            //The folder path for our file should be YYYY/MM/DD
            $directory = "../uploads/our_teachers/" . "$year/$month/$day/";

            //If the directory doesn't already exists.
            if (!is_dir($directory)) {
                mkdir($directory, 0755, true);
            }
            $data["image"] = $this->upload_model->image_upload_packages($temp_path, $directory);
            $this->upload_model->delete_temp_image($temp_path);
        }

        $data['description'] = $this->input->post('description');
        $data['alt'] = html_escape($this->input->post('alt'));
        $data['title'] = html_escape($this->input->post('title'));
        $this->db->where('id', $id);
        $this->db->update('our_teachers', $data);
        $this->session->set_flashdata('flash_message', get_phrase('our_teachers_updated_successfully'));
        return simple_json_output($resultpost);
    }

    // Dynamic SEO Content
    public function get_seo_curriculums_list()
    {
        return $this->db->get('seo_curriculums')->result_array();
    }

    public function get_seo_content_by_id($id)
    {
        return $this->db->get_where('seo_branch_curriculum_content', array('id' => $id));
    }

    public function add_seo_content()
    {
        $resultpost = array(
            "status" => 200,
            "message" => get_phrase('seo_content_added_successfully'),
            "url" => base_url('admin/seo-content'),
        );

        $data['branch_id'] = $this->input->post('branch_id');
        $data['curriculum_id'] = $this->input->post('curriculum_id');
        $data['meta_title'] = $this->input->post('meta_title');
        $data['meta_description'] = $this->input->post('meta_description');
        $data['h1_title'] = $this->input->post('h1_title');
        $data['why_choose_us'] = $this->input->post('why_choose_us');

        $questions = $this->input->post('question');
        $answers = $this->input->post('answer');
        $faqs = [];
        if (!empty($questions)) {
            foreach ($questions as $key => $q) {
                if (!empty($q)) {
                    $faqs[] = [
                        'question' => $q,
                        'answer' => $answers[$key]
                    ];
                }
            }
        }
        $data['faqs'] = json_encode($faqs);

        $this->db->insert('seo_branch_curriculum_content', $data);
        $this->session->set_flashdata('flash_message', get_phrase('seo_content_added_successfully'));
        return simple_json_output($resultpost);
    }

    public function edit_seo_content($id)
    {
        $resultpost = array(
            "status" => 200,
            "message" => get_phrase('seo_content_updated_successfully'),
            "url" => base_url('admin/seo-content'),
        );

        $data['branch_id'] = $this->input->post('branch_id');
        $data['curriculum_id'] = $this->input->post('curriculum_id');
        $data['meta_title'] = $this->input->post('meta_title');
        $data['meta_description'] = $this->input->post('meta_description');
        $data['h1_title'] = $this->input->post('h1_title');
        $data['why_choose_us'] = $this->input->post('why_choose_us');

        $questions = $this->input->post('question');
        $answers = $this->input->post('answer');
        $faqs = [];
        if (!empty($questions)) {
            foreach ($questions as $key => $q) {
                if (!empty($q)) {
                    $faqs[] = [
                        'question' => $q,
                        'answer' => $answers[$key]
                    ];
                }
            }
        }
        $data['faqs'] = json_encode($faqs);

        $this->db->where('id', $id);
        $this->db->update('seo_branch_curriculum_content', $data);
        $this->session->set_flashdata('flash_message', get_phrase('seo_content_updated_successfully'));
        return simple_json_output($resultpost);
    }

    public function delete_seo_content($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('seo_branch_curriculum_content');
        $this->session->set_flashdata('flash_message', get_phrase('seo_content_deleted_successfully'));
    }


}
