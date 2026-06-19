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
    }

    public function get_blogs()
    {
        $data = $this->db->select('name,slug,image,id')
            ->order_by('id', 'DESC')
            ->get('blogs');

        return $data;
    }

    public function get_recent_blogs_for_home()
    {
        $data = $this->db->select('*')
            ->where('status', '1')
            ->limit(8)
            ->order_by('id', 'DESC')
            ->get('blogs');

        return $data;
    }

    public function get_pop_up()
    {
        $data = $this->db->select('*')
            ->limit(1)
            ->get('sliders');

        return $data;
    }

    public function get_careers()
    {
        $data = $this->db->select('*')
            ->order_by('id', 'desc')
            ->get('careers');
        return $data;
    }

    public function get_landing_page_video()
    {
        $data = $this->db->select('file,image , id')
            ->limit(3)
            ->get('banner');
        return $data;
    }

    public function get_home_about_us()
    {
        $data = $this->db->select('*')
            ->limit(1)
            ->get('home_about');
        return $data->row_array();
    }

    public function get_curri_abt()
    {
        $data = $this->db->select('*')
            ->limit(1)
            ->get('about_curriculum');
        return $data->row_array();
    }

    public function get_about_us()
    {
        $data = $this->db->select('*')
            ->get('about_us');
        return $data->result_array();
    }

    public function get_our_team()
    {
        $data = $this->db->select('*')
            ->get('our_team');
        return $data->result_array();
    }

    public function get_team_details_by_id($slug)
    {
        $data = $this->db->select('*')
            ->where('slug', $slug)
            ->get('our_team');

        return $data;
    }

    public function get_learning_spaces()
    {
        $data = $this->db->select('*')
            ->get('learning_space');
        return $data->result_array();
    }

    public function get_our_teachers()
    {
        $data = $this->db->select('*')
            ->get('our_teachers');
        return $data->result_array();
    }

    public function get_our_programmes()
    {
        $data = $this->db->select('*')
            ->get('programmes_content');
        return $data->result_array();
    }

    public function get_seo_curriculums()
    {
        return $this->db->get('seo_curriculums')->result_array();
    }

    public function get_day_at_kidzonia()
    {
        $data = $this->db->select('*')
            ->get('kidzonia_day');
        return $data->result_array();
    }

    public function get_programmes_icons()
    {
        $data = $this->db->select('*')
            ->get('programmes_icon');
        return $data->result_array();
    }

    public function get_kidzonia_commits()
    {
        $data = $this->db->select('*')
            ->get('kidzonia_commits');
        return $data->result_array();
    }

    public function get_ixplore()
    {
        $data = $this->db->select('*')
            ->get('ixplore');
        return $data->result_array();
    }

    public function get_whizkids()
    {
        $data = $this->db->select('*')
            ->get('whizkids');
        return $data->result_array();
    }
    
    public function get_admissions()
    {
        $data = $this->db->select('*')
            ->get('admissions');
        return $data->result_array();
    }

    public function send_whatsapp_msg($phone, $templated_id, $template_lang = 'en_GB', $template_param = [])
    {
        $data = array();
        $data['countryCode'] = "+91";
        $data['phoneNumber'] = $phone;
        $data['callbackData'] = "some text here";
        $data['type'] = "Template";

        $buttonValues = [
            "1" => $template_param
        ];
        $data['template'] = array(
            "name" => $templated_id,
            "languageCode" => $template_lang,
            "headerValues" => [],
            "bodyValues" => $template_param,
            "buttonValues" => $buttonValues,
        );
        $postdata = json_encode($data);
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://api.interakt.ai/v1/public/message/',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => $postdata,
            CURLOPT_HTTPHEADER => array(
                'Authorization: Basic UGNNRlpYaUwxeXNKRmg3NktJUWo4a2l0U3IzSzJVRzY1T2FPckgwbGljUTo=',
                'Content-Type: application/json',
                'Cookie: ApplicationGatewayAffinity=a8f6ae06c0b3046487ae2c0ab287e175; ApplicationGatewayAffinityCORS=a8f6ae06c0b3046487ae2c0ab287e175'
            )
        ));

        $response = curl_exec($curl);
        //echo $response;exit();
        curl_close($curl);
        return $response;
    }


    public function submit_career()
    {
        $url = base_url();
        $resultpost = array(
            "status" => 200,
            "message" => get_phrase('form_submitted_successfull'),
            "url" => $url,
        );

        if ($_FILES['file']['name'] != "") {
            $year  = date("Y");
            $month = date("m");
            $day   = date("d");
            $directory = "uploads/career_enquiry/" . "$year/$month/$day";

            if (!is_dir($directory)) {
                mkdir($directory, 0755, true);
            }

            $upload_path = $directory;

            $tmpFilePath = $_FILES['file']['tmp_name'];
            $ext2 = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);

            if ($tmpFilePath != "") {
                $this->load->helper('string');
                $token = random_string('alnum', 10);
                if (isset($_FILES['file']) && is_uploaded_file($_FILES['file']['tmp_name'])) {
                    $file = 'resume_' . $token . '.' . $ext2;
                    move_uploaded_file($_FILES['file']['tmp_name'], $upload_path . '/' . $file);
                    $data['resume'] = $upload_path . '/' . $file;
                }
            }
        }

        $data['name']           = $this->input->post('name');
        $data['phone']          = $this->input->post('phone');
        $data['email']          = $this->input->post('email');
        $data['branch_id']      = $this->input->post('branch');
        $data['career_id']      = $this->input->post('career_id');
        $data['chat_with_us']   = $this->input->post('chat_with_us');

        $data['created_at']     = date("Y-m-d H:i:s");

        $this->db->insert('career_enquiry', $data);

        $this->session->set_flashdata('flash_message', get_phrase('form_submitted_successfull'));
        return simple_json_output($resultpost);
    }



    public function get_blogs_by_id($slug)
    {
        $data = $this->db->select('*')
            ->where('slug', $slug)
            ->where('status', '1')
            ->get('blogs');

        return $data;
    }

    public function get_event_by_id($id)
    {
        $data = $this->db->select('*')
            ->where('id', $id)
            ->where('status', '1')
            ->get('events');

        return $data;
    }

    public function get_recent_blogs_by_id($slug)
    {
        $data = $this->db->select('id,name,slug,image,date')
            ->where('slug !=', $slug)
            ->where('status', '1')
            ->limit(10)
            ->order_by('id', 'DESC')
            ->get('blogs');

        return $data;
    }

    public function get_branches()
    {
        $data = $this->db->select('name,id,city,slug')
            ->get('branches');

        return $data;
    }

    public function get_header_branches()
    {
        $data = $this->db->select('name,id,city,slug')
            ->where('LOWER(city)', 'hyderabad')
            ->where('status', '0')
            ->get('branches');

        return $data;
    }
    public function get_hyderabad_branches()
    {
        $data = $this->db->select('*')
            ->where('city', 'Hyderabad')
            ->get('branches');

        return $data;
    }

    public function get_campus_photos_by_id($id)
    {

        $gallery = $this->db->select('id')
            ->where('branch_id', $id)
            ->get('gallery')
            ->row_array();

        $data = $this->db->select('image_default')
            ->where('gallery_id', $gallery['id'])
            ->get('gallery_campus_photos');

        return $data;
    }

    public function get_gallery_photos_by_id($id)
    {
        $gallery = $this->db->select('id')
            ->where('branch_id', $id)
            ->get('gallery')
            ->row_array();

        $data = $this->db->select('image,title')
            ->where('gallery_id', $gallery['id'])
            ->get('image_gallery');

        return $data;
    }

    public function get_home_kidzonia_gallery()
    {
        $data = array();
        $query = $this->db->query("SELECT b.id as branch_id,b.name,b.slug,g.id,g.branch_id,g.alt FROM gallery as g LEFT JOIN branches as b ON g.branch_id = b.id  WHERE g.status='1' order by g.id desc LIMIT 10");
        foreach ($query->result_array() as $row) {
            $gal_id = $row['id'];
            $branch_id = $row['branch_id'];
            $url = $row['slug'];
            $name = $row['name'];
            $alt = $row['alt'];

            $image = $this->db->select('image_default')
                ->where('gallery_id', $gal_id)
                ->order_by('id', 'DESC')
                ->limit(1)
                ->get('gallery_campus_photos')
                ->row_array();

            $pic = '';
            if ($image['image_default'] != '' || $image['image_default'] != NULL) {
                $pic =  $image['image_default'];
            } else {
                $pic = "";
            }

            $data[] = array(
                "id" => $branch_id,
                "url" => $url,
                "name" => $name,
                "alt" => $alt,
                "pic" => $pic
            );
        }
        return $data;
    }

    public function get_kidzonia_gallery()
    {
        $data = array();
        $query = $this->db->query("SELECT b.id as branch_id,b.name,b.slug,g.id,g.branch_id FROM gallery as g LEFT JOIN branches as b ON g.branch_id = b.id  WHERE g.status='1' order by g.id desc");
        foreach ($query->result_array() as $row) {
            $gal_id = $row['id'];
            $branch_id = $row['branch_id'];
            $url = $row['slug'];
            $name = $row['name'];

            $image = $this->db->select('image_default')
                ->where('gallery_id', $gal_id)
                ->order_by('id', 'DESC')
                ->limit(1)
                ->get('gallery_campus_photos')
                ->row_array();

            $pic = '';
            if ($image['image_default'] != '' || $image['image_default'] != NULL) {
                $pic =  $image['image_default'];
            } else {
                $pic = "";
            }

            $data[] = array(
                "id" => $branch_id,
                "url" => $url,
                "name" => $name,
                "pic" => $pic
            );
        }

        return $data;
    }

    public function get_gallery_title_by_id($slug)
    {
        $data = $this->db->select('name,image')
            ->where('slug', $slug)
            ->get('branches');

        return $data;
    }



    public function get_gallery_image_details_by_id($id)
    {
        $data = $this->db->select('image,title')
            ->where('gallery_id', $id)
            ->get('image_gallery')
            ->result_array();

        return $data;
    }

    public function get_gallery()
    {
        $data = array();
        $query = $this->db->query("SELECT b.name,g.id FROM branches as b INNER JOIN gallery as g ON b.id = g.branch_id WHERE g.status='1' order by b.name asc");
        foreach ($query->result_array() as $row) {
            $gal_id = $row['id'];
            $branch_name = $row['name'];

            $campus_array = array();
            $query_campus = $this->db->query("SELECT image_default FROM gallery_campus_photos where gallery_id='$gal_id' order by id LIMIT 5");
            foreach ($query_campus->result_array() as $row_campus) {
                $image = $row_campus['image_default'];
                if ($image != '' && $image != null) {
                    $campus_array[] = base_url() . $image;
                }
            }

            $gallery_array = array();
            $query_gal = $this->db->query("SELECT image,title FROM image_gallery where gallery_id='$gal_id' order by id LIMIT 5");
            foreach ($query_gal->result_array() as $row_gal) {
                $image = $row_gal['image'];
                if ($image != '' && $image != null) {
                    $gallery_array[] = array(
                        "title" => $row_gal['title'],
                        "image" => base_url() . $image,
                    );
                }
            }

            $data[] = array(
                "branch_name" => $branch_name,
                "campus_array" => $campus_array,
                "gallery_array" => $gallery_array,
            );
        }

        return $data;
    }


    public function get_paginated_career_count($filter_data)
    {
        $sql_filter = "";

        if (isset($filter_data['keywords']) && $filter_data['keywords'] != ""):
            $keyword        = $filter_data['keywords'];
            $sql_filter .= " AND (title like '%" . $keyword . "%' 
            OR experience like '%" . $keyword . "%')";
        endif;

        $query = $this->db->query("SELECT id FROM careers WHERE id<>'' $sql_filter ORDER BY id desc");
        return $query->num_rows();
    }


    public function get_paginated_career($filter_data, $per_page, $offset)
    {
        $resultdata = array();

        $sql_filter = "";
        if (isset($filter_data['keywords']) && $filter_data['keywords'] != ""):
            $keyword        = $filter_data['keywords'];
            $sql_filter .= " AND (title like '%" . $keyword . "%' 
            OR experience like '%" . $keyword . "%')";
        endif;

        $query = $this->db->query("SELECT id, title, slug, pdf, experience, description FROM careers  WHERE id<>'' $sql_filter ORDER BY id desc LIMIT  $offset,$per_page");
        if (!empty($query)) {
            foreach ($query->result_array() as $item) {
                $title = ellipsis($item['title'], 35);
                $description_ = strip_tags($item['description']);
                $description = ellipsis($description_, 100);
                $resultdata[] = array(
                    "id"           => $item['id'],
                    "title"        => $title,
                    "pdf"          => $item['pdf'],
                    "experience"   => $item['experience'],
                    "description"  => $description
                );
            }
        }
        return $resultdata;
    }

    public function get_paginated_blogs_count($filter_data)
    {
        $sql_filter = "";

        if (isset($filter_data['keywords']) && $filter_data['keywords'] != ""):
            $keyword        = $filter_data['keywords'];
            $sql_filter .= " AND (name '%" . $keyword . "%')";
        endif;

        $query = $this->db->query("SELECT id FROM blogs WHERE status='1' $sql_filter ORDER BY id desc");
        return $query->num_rows();
    }

    public function get_paginated_digital_news($filter_data, $per_page, $offset)
    {
        $resultdata = array();
        $sql_filter = "";
        if (isset($filter_data['keywords']) && $filter_data['keywords'] != ""):
            $keyword        = $filter_data['keywords'];
            $sql_filter .= " AND (name like '%" . $keyword . "%')";
        endif;

        $query = $this->db->query("SELECT id, name,slug,image,url,alt FROM digital_news WHERE status='1' $sql_filter ORDER BY id desc LIMIT  $offset,$per_page");
        if (!empty($query)) {
            foreach ($query->result_array() as $item) {
                $resultdata[] = array(
                    "id"        => $item['id'],
                    "alt"        => $item['alt'],
                    "name"      => $item['name'],
                    "slug"      => $item['slug'],
                    "image"     => $item['image'],
                    "url"     => $item['url'],
                );
            }
        }
        return $resultdata;
    }

    public function get_paginated_digital_news_count($filter_data)
    {
        $sql_filter = "";
        if (isset($filter_data['keywords']) && $filter_data['keywords'] != ""):
            $keyword        = $filter_data['keywords'];
            $sql_filter .= " AND (name '%" . $keyword . "%')";
        endif;

        $query = $this->db->query("SELECT id FROM digital_news WHERE status='1' $sql_filter ORDER BY id desc");
        return $query->num_rows();
    }


    public function get_paginated_blogs($filter_data, $per_page, $offset)
    {
        $resultdata = array();

        $sql_filter = "";
        if (isset($filter_data['keywords']) && $filter_data['keywords'] != ""):
            $keyword        = $filter_data['keywords'];
            $sql_filter .= " AND (name like '%" . $keyword . "%')";
        endif;

        // $query = $this->db->query("SELECT id,name,slug,image FROM blogs WHERE status='1' $sql_filter ORDER BY id desc LIMIT $offset,$per_page");
        $query = $this->db->query("SELECT id,name,slug,image,created_at,alt FROM blogs WHERE status='1' $sql_filter ORDER BY id desc LIMIT $offset,$per_page");
        if (!empty($query)) {
            foreach ($query->result_array() as $item) {
                $resultdata[] = array(
                    "id"        => $item['id'],
                    "alt"        => $item['alt'],
                    "name"      => $item['name'],
                    "slug"      => $item['slug'],
                    "image"     => $item['image'],
                    "date"      => $item['created_at'],
                );
            }
        }
        return $resultdata;
    }


    public function get_explore_centers_list($slug)
    {
        $resultdata     = array();
        $query = $this->db->query("SELECT id, name, slug, city, email, mobile_1, mobile_2, location_url, address FROM branches WHERE status='0' AND LOWER(city) = LOWER('$slug')");
        //   echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            foreach ($query->result_array() as $item) {
                $resultdata[] = array(
                    "id"             => $item['id'],
                    "name"           => $item['name'],
                    "slug"           => $item['slug'],
                    "city"           => $item['city'],
                    "email"          => $item['email'],
                    "mobile_1"       => $item['mobile_1'],
                    "mobile_2"       => $item['mobile_2'],
                    "location_url"   => $item['location_url'],
                    "address"        => $item['address'],
                );
            }
        }

        return $resultdata;
    }

    public function get_explore_centers_details($slug)
    {
        $resultdata     = array();
        $query = $this->db->query("SELECT id, name, slug, city, email, map, mobile_1, mobile_2, location_url, address FROM branches WHERE slug = '$slug' LIMIT 1");
        //   echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            $item = $query->row_array();
            $id = $item['id'];
            $campus            = $this->crud_model->get_gallery_campus_details_by_id($id);
            //   echo $this->db->last_query();exit();
            $gallery           = $this->crud_model->get_gallery_details_by_id($id);
            $parents           = $this->crud_model->get_parents_testimonials_by_id($id);

            $resultdata = array(
                "id"             => $item['id'],
                "name"           => $item['name'],
                "slug"           => $item['slug'],
                "city"           => $item['city'],
                "email"          => $item['email'],
                "mobile_1"       => $item['mobile_1'],
                "mobile_2"       => $item['mobile_2'],
                "location_url"   => $item['location_url'],
                "map"            => $item['map'],
                "address"        => $item['address'],
                "campus"         => $campus,
                "gallery"        => $gallery,
            );
        }
        return $resultdata;
    }

    public function get_branch_seo($slug)
    {
        $data = $this->db->select('seo_name,seo_url,seo_telephone,seo_same_as1,seo_email,seo_same_as2,seo_same_as3,seo_same_as4,seo_street_address,seo_address_locality,seo_address_region,seo_postal_code')
            ->where('slug', $slug)
            ->get('branches');
        return $data->row_array();
    }

    public function get_paginated_print_media_count($filter_data)
    {
        $sql_filter = "";
        if (isset($filter_data['keywords']) && $filter_data['keywords'] != ""):
            $keyword        = $filter_data['keywords'];
            $sql_filter .= " AND (id like '%" . $keyword . "%')";
        endif;

        $query = $this->db->query("SELECT id FROM print_media WHERE id<>'' $sql_filter ORDER BY id desc");
        return $query->num_rows();
    }

    public function get_paginated_print_media($filter_data, $per_page, $offset)
    {
        $resultdata = array();
        $sql_filter = "";
        if (isset($filter_data['keywords']) && $filter_data['keywords'] != ""):
            $keyword        = $filter_data['keywords'];
            $sql_filter .= " AND (id like '%" . $keyword . "%')";
        endif;

        $query = $this->db->query("SELECT id, alt, image FROM print_media  WHERE id<>'' $sql_filter ORDER BY id desc LIMIT  $offset,$per_page");
        if (!empty($query)) {
            foreach ($query->result_array() as $item) {
                $resultdata[] = array(
                    "id"      => $item['id'],
                    "alt"      => $item['alt'],
                    "image"   => $item['image'],
                );
            }
        }
        return $resultdata;
    }

    public function get_paginated_achievements_count($filter_data)
    {
        $sql_filter = "";
        if (isset($filter_data['keywords']) && $filter_data['keywords'] != ""):
            $keyword        = $filter_data['keywords'];
            $sql_filter .= " AND (name like '%" . $keyword . "%')";
        endif;

        $query = $this->db->query("SELECT id FROM achievements WHERE id<>'' $sql_filter ORDER BY id desc");
        return $query->num_rows();
    }

    public function get_paginated_achievements($filter_data, $per_page, $offset)
    {
        $resultdata = array();
        $sql_filter = "";
        if (isset($filter_data['keywords']) && $filter_data['keywords'] != ""):
            $keyword        = $filter_data['keywords'];
            $sql_filter .= " AND (name like '%" . $keyword . "%')";
        endif;

        $query = $this->db->query("SELECT id,name,image,description,alt FROM achievements  WHERE id<>'' $sql_filter ORDER BY id desc LIMIT  $offset,$per_page");
        if (!empty($query)) {
            foreach ($query->result_array() as $item) {
                $resultdata[] = array(
                    "id"          => $item['id'],
                    "alt"          => $item['alt'],
                    "name"        => $item['name'],
                    "image"       => $item['image'],
                    "description" => $item['description'],
                );
            }
        }
        return $resultdata;
    }
    /*   
    public function get_gallery_campus_details_by_id ($id) {
        $data = $this->db->select('image_default')
                        ->where('gallery_id', $id)
                        ->get('gallery_campus_photos')
                        ->result_array();
                        
        return $data;
    }*/
    public function get_gallery_campus_details_by_id($branch_slug)
    {
        $resultdata = array();

        $query = $this->db->query("
            SELECT 
                gc.id,
                gc.image_default AS image, 
                br.image AS branch_image 
            FROM 
                gallery AS g 
            INNER JOIN 
                gallery_campus_photos AS gc ON g.id = gc.gallery_id 
            INNER JOIN 
                branches AS br ON g.branch_id = br.id 
            WHERE 
                br.slug = '$branch_slug' 
            ORDER BY 
                gc.id DESC
        ");

        if ($query->num_rows() > 0) {
            foreach ($query->result_array() as $item) {
                $resultdata[] = array(
                    "id"           => $item['id'],
                    "name"         => isset($item['name']) ? $item['name'] : '',
                    "image"        => $item['image'],
                    "branch_image" => $item['branch_image']
                );
            }
        }

        return $resultdata;
    }



    public function get_gallery_details_by_id($branch_id)
    {
        $resultdata     = array();
        $query = $this->db->query("SELECT g.id, g.image, g.title FROM gallery_image as g INNER JOIN branches as b ON g.branch_id=b.id  WHERE b.slug = '$branch_id'  GROUP BY g.title ORDER BY g.id DESC");
        //   echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            foreach ($query->result_array() as $item) {
                $resultdata[] = array(
                    "id"     => $item['id'],
                    "branch_id"     => $branch_id,
                    "image"  => $item['image'],
                    "title"  => $item['title'],
                );
            }
        }
        return $resultdata;
    }

    public function get_parents_testimonials_by_id($branch_slug)
    {
        $result_data = [];
        
        // Use query bindings to prevent SQL injection
        $query = $this->db->query("
            SELECT t.id, t.url 
            FROM parents_testimonials AS t 
            INNER JOIN branches AS b 
            ON t.branch_id = b.id  
            WHERE b.slug = ? 
            ORDER BY t.id DESC
        ", [$branch_slug]);
    
        if ($query->num_rows() > 0) {
            foreach ($query->result_array() as $item) {
                $result_data[] = [
                    "id"        => $item['id'],
                    "branch_id" => $branch_slug,
                    "url"       => $item['url'],
                ];
            }
        }
        return $result_data;
    }
    


    public function get_ajax_gallery_images($branch_id, $title)
    {
        $resultdata     = array();
        $branch = $this->db->select('id')->where('slug', $branch_id)->get('branches')->row_array();
        $branch_id = $branch['id'];
        $query = $this->db->query("SELECT id, image,title FROM gallery_image WHERE branch_id = '$branch_id' AND LOWER(title) = LOWER('$title') ORDER BY id ASC");
        //echo $this->db->last_query();exit();
        if ($query->num_rows() > 0) {
            foreach ($query->result_array() as $item) {
                $resultdata[] = array(
                    "id"     => $item['id'],
                    "image"  => $item['image'],
                    "title"  => $item['title'],
                );
            }
        }
        return simple_json_output($resultdata);
    }

   public function ajax_call_back_enquiry()
     {
    $this->kcis_leads = $this->load->database('kcis_leads', TRUE);
    $this->db->trans_start(); // Start a transaction

    // --- Start of reCAPTCHA verification logic ---
    // $recaptcha_response = $this->input->post('g-recaptcha-response');

    // if (empty($recaptcha_response)) {
    //     $resultpost = [
    //         "status" => 400,
    //         "message" => "Please complete the reCAPTCHA before submitting."
    //     ];
    //     $this->db->trans_rollback();
    //     return simple_json_output($resultpost);
    // }
    
    // $secret_key = $this->config->item('recaptcha_secret_key');
    // $verification_url = 'https://www.google.com/recaptcha/api/siteverify';
    // $request_data = http_build_query([
    //     'secret' => $secret_key,
    //     'response' => $recaptcha_response
    // ]);

    // $ch = curl_init($verification_url);
    // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    // curl_setopt($ch, CURLOPT_POSTFIELDS, $request_data);
    // $response_json = curl_exec($ch);
    // curl_close($ch);

    // $response_data = json_decode($response_json);
    
    // if (!$response_data->success) {
    //     $resultpost = [
    //         "status" => 400,
    //         "message" => "reCAPTCHA verification failed. Please try again."
    //     ];
    //     $this->db->trans_rollback();
    //     return simple_json_output($resultpost);
    // }
    // --- End of reCAPTCHA verification logic ---

    // The rest of your form validation and processing logic follows
    $this->form_validation->set_rules('parent_name', 'Parent Name', 'trim|required');
    $this->form_validation->set_rules('child_name', 'Child Name', 'trim|required');
    $this->form_validation->set_rules('email', 'Email', 'trim|valid_email', array(
        'required' => 'The email field is required.',
        'valid_email' => 'Please enter a valid email address.'
    ));
    $this->form_validation->set_rules(
        'phone',
        'Phone Number',
        'trim|required|numeric|exact_length[10]',
        array(
            'required' => 'The %s field is required.',
            'numeric' => 'The %s field must contain only numeric characters.',
            'exact_length' => 'The %s field must be exactly 10 digits.'
        )
    );
      
    if ($this->form_validation->run() == FALSE) {
        $errors = array(
            'parent_name' => form_error('parent_name'),
            'child_name' => form_error('child_name'),
            'email'      => form_error('email'),
            'phone'      => form_error('phone'),
        );
        $errors_ = array_map('strip_tags', array_filter($errors));
        $allErrors = implode('<br> ', $errors_);

        $resultpost = array(
            "status" => 400,
            "message" => $allErrors,
            "errors" => $errors,
        );
        $this->db->trans_rollback();
    } else {
        $curr_date  = date("Y-m-d H:i:s");
        $ip_address = $this->input->ip_address();
        $data = array();
        
        $otp = $this->generatePIN();
        $phone = clean_and_escape($this->input->post('phone'));
        $templated_id = 'kidzonia_otp';
        $template_lang = 'en';
        $template_param = [$otp];
        $response = $this->send_whatsapp_msg($phone, $templated_id, $template_lang, $template_param);
        
        $data['otp']         = $otp;
        $data['is_show']     = '0';
        $data['parent_name'] = clean_and_escape($this->input->post('parent_name'));
        $data['child_name']  = clean_and_escape($this->input->post('child_name'));
        $data['email']       = clean_and_escape($this->input->post('email'));
        $data['phone']       = clean_and_escape($this->input->post('phone'));
        $data['phone_country_code'] = clean_and_escape($this->input->post('phone_country_code')) ?: '+91';
        $data['message']     = clean_and_escape($this->input->post('message'));
        $data['know_about_us'] = clean_and_escape($this->input->post('know_about_us'));
        $data['ip_address']  = $ip_address;
        $data['created_at']  = date("Y-m-d H:i:s");

        if ($this->db->insert('call_back_enquiry', $data)){
            $id = $this->db->insert_id();
            $this->db->trans_complete();
            $url = base_url('thank-you');
            $resultpost = array(
                "status" => 200,
                "message" => 'Your Enquiry has been successfully submitted.',
                "id" => $id,
                "url" => $url,
            );
        } else {
            $resultpost = array(
                "status" => 400,
                "message" => 'There is some issue while adding',
            );
        }
    }

    if ($this->db->trans_status() === FALSE) {
        $resultpost = array(
            "status" => 400,
            "message" => 'There is some issue while adding',
        );
        $this->db->trans_rollback();
    } else {
        $this->db->trans_commit();
    }

    return simple_json_output($resultpost);
}


    public function generatePIN($digits = 4)
    {
        $i   = 0; //counter
        $pin = "";
        while ($i < $digits) {
            $pin .= mt_rand(0, 9);
            $i++;
        }
        return $pin;
    }

    public function resend_admission_otp()
    {
        $result_post = array();

        $id = $this->input->post('id');
        $data = $this->db->where('id', $id)->get('temp_admission');

        if ($data->num_rows() > 0) {
            $data = $data->row_array();
            $templated_id = 'kidzonia_otp';
            $template_lang = 'en';
            $template_param = [$data['otp']];
            $response = $this->send_whatsapp_msg($data['phone'], $templated_id, $template_lang, $template_param);

            $resultpost = array(
                "status" => 200,
                "message" => 'OTP Sent Successfully',
            );
        } else {
            $resultpost = array(
                "status" => 400,
                "message" => 'Some Error Occured',
            );
        }

        echo json_encode($resultpost);
    }

    public function resend_callback_otp()
    {
        $result_post = array();

        $id = $this->input->post('id');
        $data = $this->db->where('id', $id)->get('call_back_enquiry');

        if ($data->num_rows() > 0) {
            $data = $data->row_array();
            $templated_id = 'kidzonia_otp';
            $template_lang = 'en';
            $template_param = [$data['otp']];
            $response = $this->send_whatsapp_msg($data['phone'], $templated_id, $template_lang, $template_param);

            $resultpost = array(
                "status" => 200,
                "message" => 'OTP Sent Successfully',
            );
        } else {
            $resultpost = array(
                "status" => 400,
                "message" => 'Some Error Occured',
            );
        }

        echo json_encode($resultpost);
    }

    public function check_admission_enquiry() {
        $this->kcis_leads = $this->load->database('kcis_leads', TRUE);
        $this->db->trans_start(); // Start a transaction
            $form_type = $this->input->post('form_type') ?: 'admission_enquiry';
    
        // --- Start of reCAPTCHA verification logic ---
        // $recaptcha_response = $this->input->post('g-recaptcha-response');
    
        // if (empty($recaptcha_response)) {
        //     $resultpost = [
        //         "status" => 400,
        //         "message" => "Please complete the reCAPTCHA before submitting."
        //     ];
        //     $this->db->trans_rollback();
        //     return simple_json_output($resultpost);
        // }
        
        // $secret_key = $this->config->item('recaptcha_secret_key');
        // $verification_url = 'https://www.google.com/recaptcha/api/siteverify';
        // $request_data = http_build_query([
        //     'secret' => $secret_key,
        //     'response' => $recaptcha_response
        // ]);
    
        // $ch = curl_init($verification_url);
        // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        // curl_setopt($ch, CURLOPT_POSTFIELDS, $request_data);
        // $response_json = curl_exec($ch);
        // curl_close($ch);
    
        // $response_data = json_decode($response_json);
        
        // if (!$response_data->success) {
        //     $resultpost = [
        //         "status" => 400,
        //         "message" => "reCAPTCHA verification failed. Please try again."
        //     ];
        //     $this->db->trans_rollback();
        //     return simple_json_output($resultpost);
        // }
        // --- End of reCAPTCHA verification logic ---
    
        // The rest of your form validation and processing logic follows
        $this->form_validation->set_rules('class_id', 'Class', 'trim|required');
        $this->form_validation->set_rules('child_name', 'Child Name', 'trim|required');
        $this->form_validation->set_rules('parent_name', 'Parent Name', 'trim|required');
        $this->form_validation->set_rules('know_about_us', 'know about us', 'trim|required');
        $this->form_validation->set_rules('location', 'Location', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|valid_email', array(
            'valid_email' => 'Please enter a valid email address.'
        ));
        $this->form_validation->set_rules(
            'phone',
            'Phone Number',
            'trim|required|numeric|exact_length[10]',
            array(
                'required' => 'The %s field is required.',
                'numeric' => 'The %s field must contain only numeric characters.',
                'exact_length' => 'The %s field must be exactly 10 digits.'
            )
        );
    
        if ($form_type === 'admission_enquiry' || $form_type === 'contact_us' || $form_type === 'callback') {
            $this->form_validation->set_rules('captcha_input', 'Captcha', 'trim|required|integer');
        }
          
        $phone = ($this->input->post('phone'));
        $check_mobile = $this->kcis_leads->query("SELECT id FROM leads WHERE mobile='$phone' LIMIT 1")->num_rows();
          
        if ($check_mobile>0) {
           $resultpost = array(
                "status" => 400,
                "message" => "Primary Mobile Already Exist !",
           );
        } elseif ($this->form_validation->run() == FALSE) {
            $errors = array(
                'class_id'     => form_error('class_id'),
                'child_name'   => form_error('child_name'),
                'parent_name'  => form_error('parent_name'),
                'know_about_us' => form_error('know_about_us'),
                'email'        => form_error('email'),
                'phone'        => form_error('phone'),
                'location'     => form_error('location'),
                'captcha_input' => form_error('captcha_input'),
            );
            $errors_ = array_map('strip_tags', array_filter($errors));
            $allErrors = implode('<br> ', $errors_);
    
            $resultpost = array(
                "status" => 400,
                "message" => $allErrors,
                "errors" => $errors,
            );
        } elseif (($form_type === 'admission_enquiry' || $form_type === 'contact_us' || $form_type === 'callback') && !verify_math_captcha($this->input->post('captcha_input'))) {
            $resultpost = array(
                "status" => 400,
                "message" => 'Invalid captcha answer. Please try again.',
                "errors" => array(
                    'captcha_input' => 'Invalid captcha answer. Please try again.'
                ),
            );
        } else {
            $curr_date = date("Y-m-d H:i:s");
            $class_id = ($this->input->post('class_id'));
            $class_name = $this->get_kips_program_name($class_id);
    
            $ip_address = $this->input->ip_address();
            
            $phone = ($this->input->post('phone'));
            
            $data = array();
            $data['class_id']    = $class_id;
            $data['class']       = $class_name;
            $data['parent_name'] = ($this->input->post('parent_name'));
            $data['child_name']  = ($this->input->post('child_name'));
            $data['email']       = ($this->input->post('email'));
            $data['phone']       = $phone;
            $data['phone_country_code'] = clean_and_escape($this->input->post('phone_country_code')) ?: '';
            $data['location']    = ($this->input->post('location'));
            $data['know_about_us']  = ($this->input->post('know_about_us'));
            $data['ip_address']  = $ip_address;
            $data['created_at']  = $curr_date;
            $data['form_type']   = $form_type;
            
            // Capture referer - use stored external referer from session
            // Only use HTTP_REFERER if session doesn't have one (first page load)
            $referer = $this->session->userdata('referer_url');
            if (empty($referer) || $referer === 'Direct/Internal Navigation') {
                $http_referer = $this->input->server('HTTP_REFERER');
                // Only use HTTP_REFERER if it's external
                if (!empty($http_referer)) {
                    $current_domain = parse_url(base_url(), PHP_URL_HOST);
                    $parsed_referer = parse_url($http_referer);
                    $referer_host = isset($parsed_referer['host']) ? $parsed_referer['host'] : '';
                    if ($referer_host !== $current_domain) {
                        $referer = $http_referer;
                    } else {
                        $referer = 'Direct/Internal Navigation';
                    }
                } else {
                    $referer = 'Direct/Internal Navigation';
                }
            }
    
            $data['utm_source']   = $this->session->userdata('utm_source');
            $data['utm_medium']   = $this->session->userdata('utm_medium');
            $data['utm_id']       = $this->session->userdata('utm_id');
            $data['utm_campaign'] = $this->session->userdata('utm_campaign');
            $data['utm_term']     = $this->session->userdata('utm_term');
            $data['utm_content']  = $this->session->userdata('utm_content');
            $data['referrer_url'] = $referer ? html_escape($referer) : 'Direct/Internal Navigation';
        
            if ($this->db->insert('admission_enquiry', $data)) {
                $leads = array();
                $leads = array(
                    "first_name"       => ($this->input->post('parent_name')),
                    "child_first_name" => ($this->input->post('child_name')),
                    "mobile"           => $phone,
                    "mobile_country_code" => clean_and_escape($this->input->post('phone_country_code')) ?: '',
                    "email"            => ($this->input->post('email')),
                    "how_know"         => ($this->input->post('know_about_us')),
                    "program_id"       => $class_id,
                    "location"         => ($this->input->post('location')),
                    "web_source" => 'kips',
                    
                    "utm_source"   => $this->session->userdata('utm_source'),
                    "utm_medium"   => $this->session->userdata('utm_medium'),
                    "utm_id"       => $this->session->userdata('utm_id'),
                    "utm_campaign" => $this->session->userdata('utm_campaign'),
                    "utm_term"     => $this->session->userdata('utm_term'),
                    "utm_content"  => $this->session->userdata('utm_content'),
                    
                    "referrer_url"     => $referer ? html_escape($referer) : 'Direct/Internal Navigation',
                    "site_name"        => 'Kidzonia International',
                    "is_website"       => 2,
                    "campaign_id"      => 16,
                    "date_of_lead"     => $curr_date,
                    "added_date"       => $curr_date
                );
    
                $insert_id = null;
                $leads['academic_year'] = $this->common_model->get_current_academic_year();
                if ($this->kcis_leads->insert('leads', $leads)) {
                    $insert_id = $this->kcis_leads->insert_id();
                    $leads_log = array();
                    $leads_log = array(
                        "lead_id"    => $insert_id,
                        "tag"        => 'add',
                        "added_date" => $curr_date
                    );
                    $this->kcis_leads->insert('leads_log', $leads_log);
                }

                $notification_context = array(
                    'form_type' => $form_type,
                    'reference_type' => 'lead',
                    'reference_id' => isset($insert_id) ? $insert_id : null,
                );
    
                // Send notifications (email, SMS, WhatsApp)
                $parent_email = ($this->input->post('email'));
                $parent_name = ($this->input->post('parent_name'));
                
                // Send email
                try {
                    $this->send_admission_enquiry_email($parent_email, $parent_name, $notification_context);
                } catch (Exception $e) {
                    log_message('error', 'Failed to send admission enquiry email: ' . $e->getMessage());
                }
    
                // Send SMS
                try {
                    $this->send_admission_enquiry_sms($phone, $notification_context);
                } catch (Exception $e) {
                    log_message('error', 'Failed to send admission enquiry SMS: ' . $e->getMessage());
                }
    
                // Send WhatsApp
                try {
                    $this->send_admission_enquiry_whatsapp($phone, $parent_name, $notification_context);
                } catch (Exception $e) {
                    log_message('error', 'Failed to send admission enquiry WhatsApp: ' . $e->getMessage());
                }
    
                // Send tracking notification email with UTM and referer information
                try {
                    $tracking_data = array(
                        'parent_name' => $this->input->post('parent_name'),
                        'email' => $this->input->post('email'),
                        'phone' => $phone,
                        'child_name' => $this->input->post('child_name'),
                        'location' => $this->input->post('location'),
                        'class_name' => $class_name,
                        'know_about_us' => $this->input->post('know_about_us'),
                        'utm_source' => $this->session->userdata('utm_source'),
                        'utm_medium' => $this->session->userdata('utm_medium'),
                        'utm_campaign' => $this->session->userdata('utm_campaign'),
                        'utm_term' => $this->session->userdata('utm_term'),
                        'utm_content' => $this->session->userdata('utm_content'),
                        'utm_id' => $this->session->userdata('utm_id'),
                        'referrer_url' => $referer,
                        'ip_address' => $ip_address,
                        'submission_time' => $curr_date
                    );
                    $this->send_tracking_notification_email($tracking_data, 'Admission Enquiry', $notification_context);
                } catch (Exception $e) {
                    log_message('error', 'Failed to send tracking notification email: ' . $e->getMessage());
                }
    
                $url = base_url('thank-you');
                $resultpost = array(
                    "status" => 200,
                    "message" => 'Your Enquiry has been successfully submitted.',
                    "url" => $url,
                );
                if ($form_type === 'download_brochure') {
                    $resultpost['download_url'] = base_url('download_brochure_url');
                }
            } else {
                $resultpost = array(
                    "status" => 400,
                    "message" => 'There is some issue while adding',
                );
            }
        }
    
        if ($this->db->trans_status() === FALSE) {
            $resultpost = array(
                "status" => 400,
                "message" => 'There is some issue while adding',
            );
            $this->db->trans_rollback();
        } else {
            $this->db->trans_commit();
        }
    
        return simple_json_output($resultpost);
    }
    public function check_admission_enquiries()   {
        $this->kcis_leads = $this->load->database('kcis_leads', TRUE);
        $this->db->trans_start(); // Start a transaction

        $this->form_validation->set_rules('class_id', 'Class', 'trim|required');
        $this->form_validation->set_rules('child_name', 'Child Name', 'trim|required');
        $this->form_validation->set_rules('parent_name', 'Parent Name', 'trim|required');
        $this->form_validation->set_rules('know_about_us', 'know about us', 'trim|required');
        $this->form_validation->set_rules('location', 'Location', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|valid_email', array(
            'valid_email' => 'Please enter a valid email address.'
        ));
        $this->form_validation->set_rules(
            'phone',
            'Phone Number',
            'trim|required|numeric|exact_length[10]',
            array(
                'required' => 'The %s field is required.',
                'numeric' => 'The %s field must contain only numeric characters.',
                'exact_length' => 'The %s field must be exactly 10 digits.'
            )
        );
         
        $phone = clean_and_escape($this->input->post('phone'));
        $check_mobile = $this->kcis_leads->query("SELECT id FROM leads WHERE mobile='$phone' LIMIT 1")->num_rows();
        
        if ($check_mobile>0) {
           $resultpost = array(
                "status" => 400,
                "message" => "Primary Mobile Already Exist !",
            );
        }
        elseif ($this->form_validation->run() == FALSE) {
            $errors = array(
                'class_id'     => form_error('class_id'),
                'child_name'   => form_error('child_name'),
                'parent_name'  => form_error('parent_name'),
                'know_about_us' => form_error('know_about_us'),
                'email'        => form_error('email'),
                'phone'        => form_error('phone'),
                'location'        => form_error('location'),
            );
            $errors_ = array_map('strip_tags', array_filter($errors));
            $allErrors = implode('<br> ', $errors_);

            $resultpost = array(
                "status" => 400,
                "message" => $allErrors,
                "errors" => $errors,
            );
        } else {
            $curr_date = date("Y-m-d H:i:s");
            $class_id = clean_and_escape($this->input->post('class_id'));
            $class_name = $this->get_kips_program_name($class_id);

            $ip_address = $this->input->ip_address();
            $otp = $this->generatePIN();

            $phone = clean_and_escape($this->input->post('phone'));
            $this->db->where('phone', $phone)->delete('temp_admission');

            $templated_id = 'kidzonia_otp';
            $template_lang = 'en';
            $template_param = [$otp];
            $response = $this->send_whatsapp_msg($phone, $templated_id, $template_lang, $template_param);

            $data = array();
            $data['class_id']    = $class_id;
            $data['class']       = $class_name;
            $data['parent_name'] = clean_and_escape($this->input->post('parent_name'));
            $data['child_name']  = clean_and_escape($this->input->post('child_name'));
            $data['email']       = clean_and_escape($this->input->post('email'));
            $data['phone']       = $phone;
            $data['location']    = clean_and_escape($this->input->post('location'));
            $data['know_about_us']  = clean_and_escape($this->input->post('know_about_us'));
            $data['ip_address']  = $ip_address;
            $data['otp']  = $otp;
            $data['created_at']  = $curr_date;
            
            $data['utm_source']   = $this->session->userdata('utm_source');
            $data['utm_medium']   = $this->session->userdata('utm_medium');
            $data['utm_id']       = $this->session->userdata('utm_id');
            $data['utm_campaign'] = $this->session->userdata('utm_campaign');
            $data['utm_term']     = $this->session->userdata('utm_term');
            $data['utm_content']  = $this->session->userdata('utm_content');
            
    
            if ($this->db->insert('temp_admission', $data)) {
                $insert_id = $this->db->insert_id();
                $this->db->trans_complete();

                $resultpost = array(
                    "status" => 200,
                    "message" => 'Your Enquiry has been successfully submitted.',
                    "id" => $insert_id,
                );
            } else {
                $resultpost = array(
                    "status" => 400,
                    "message" => 'There is some issue while adding',
                );
            }
        }

        if ($this->db->trans_status() === FALSE) {
            $resultpost = array(
                "status" => 400,
                "message" => 'There is some issue while adding',
            );
            $this->db->trans_rollback();
        } else {
            $this->db->trans_commit();
        }

        return simple_json_output($resultpost);
    }
 
    public function ajax_admission_otp_enquiry()
    {
        $this->kcis_leads = $this->load->database('kcis_leads', TRUE);

        $id = $this->input->post('id');
        $otp = $this->input->post('otp');

        $data = $this->db->select('*')->where('id', $id)->where('otp', $otp)->get('temp_admission');

        if ($data->num_rows() > 0) {
            $temp = $data->row_array();

            $curr_date = date("Y-m-d H:i:s");
            $data = array();
            $data['class_id']    = $temp['class_id'];
            $data['class']       = $temp['class'];
            $data['parent_name'] = $temp['parent_name'];
            $data['child_name']  = $temp['child_name'];
            $data['email']       = $temp['email'];
            $data['phone']       = $temp['phone'];
            $data['location']       = $temp['location'];
            $data['know_about_us']     = $temp['know_about_us'];
            $data['ip_address']  = $temp['ip_address'];
            
            $data['utm_source']   = $temp['utm_source'];
            $data['utm_medium']   = $temp['utm_medium'];
            $data['utm_id']       = $temp['utm_id'];
            $data['utm_campaign'] = $temp['utm_campaign'];
            $data['utm_term']     = $temp['utm_term'];
            $data['utm_content']  = $temp['utm_content'];
            $data['referrer_url']  = $temp['referrer_url'];

            $data['created_at']  = $curr_date;
            if ($this->db->insert('admission_enquiry', $data)) {
                $leads = array();
                $leads = array(
                    "first_name"       => $temp['parent_name'],
                    "child_first_name" => $temp['child_name'],
                    "mobile"           => $temp['phone'],
                    "email"            => $temp['email'],
                    "how_know"         => $temp['know_about_us'],
                    "program_id"       => $temp['class_id'],
                    "location"       => $temp['location'],
                    "utm_source"    => $temp['utm_source'],
                    "utm_medium"    => $temp['utm_medium'],
                    "utm_id"        => $temp['utm_id'],
                    "utm_campaign"  => $temp['utm_campaign'],
                    "utm_term"      => $temp['utm_term'],
                    "utm_content"   => $temp['utm_content'],
                    "referrer_url"   => $temp['referrer_url'],
                    "is_website"       => 2,
                    "campaign_id"      => 16,
                    "date_of_lead"     => $curr_date,
                    "added_date"       => $curr_date
                );

                $leads['academic_year'] = $this->common_model->get_current_academic_year();
                if ($this->kcis_leads->insert('leads', $leads)) {
                    $insert_id = $this->kcis_leads->insert_id();
                    $leads_log = array();
                    $leads_log = array(
                        "lead_id"    => $insert_id,
                        "tag"        => 'add',
                        "added_date" => $curr_date
                    );
                    $this->kcis_leads->insert('leads_log', $leads_log);
                }

                $details_msg = 'Admission Enquiry From Kidzonia International website <br><b>Child Name:- </b> ' . $temp['child_name'] . ' <br><b>Parent Name:- </b> ' . $temp['first_name'] . ' <br><b>Class:- </b> ' . $temp['class'];

                $msg = $this->email_model->sample_mail_message($details_msg);
                $this->email_model->sent_simple_mail($msg, 'webwork.co.in@gmail.com', 'Admission');
                $this->email_model->sent_simple_mail($msg, 'nilofer@kidzoniainternational.in', 'Admission');
                $this->email_model->sent_simple_mail($msg, 'info@kidzoniainternational.in', 'Admission');
                $this->email_model->sent_simple_mail($msg, 'admissions.kcis@credenceinternational.org', 'Admission');

                $url = base_url('thank-you');
                $resultpost = array(
                    "status" => 200,
                    "message" => 'Your Enquiry has been successfully submitted.',
                    "url" => $url,
                );
            } else {
                $resultpost = array(
                    "status" => 400,
                    "message" => 'Some Error Occured',
                );
            }
        } else {
            $resultpost = array(
                "status" => 400,
                "message" => 'Wrong OTP Code',
            );
        }

        return simple_json_output($resultpost);
    }

    public function ajax_callback_otp_enquiry()
    {
        $this->kcis_leads = $this->load->database('kcis_leads', TRUE);

        $id = $this->input->post('id');
        $otp = $this->input->post('otp');

        $data = $this->db->select('*')->where('id', $id)->where('otp', $otp)->get('call_back_enquiry');

        if ($data->num_rows() > 0) {
            $temp = $data->row_array();

            $curr_date = date("Y-m-d H:i:s");
            $data               = array();
            $data['is_show']    = 1;

            if ($this->db->where('id', $id)->update('call_back_enquiry', $data)) {

                $leads = array();
                $leads = array(
                    "first_name"       => $temp['parent_name'],
                    "child_first_name" => $temp['child_name'],
                    "mobile"           => $temp['phone'],
                    "email"            => $temp['email'],
                    "how_know"         => $temp['know_about_us'],
                    "is_website"       => 2,
                    "campaign_id"      => 16,
                    "date_of_lead"     => $curr_date,
                    "added_date"       => $curr_date
                );

                $leads['academic_year'] = $this->common_model->get_current_academic_year();
                if ($this->kcis_leads->insert('leads', $leads)) {
                    $insert_id = $this->kcis_leads->insert_id();
                    $leads_log = array();
                    $leads_log = array(
                        "lead_id"    => $insert_id,
                        "tag"        => 'add',
                        "added_date" => $curr_date
                    );
                    $this->kcis_leads->insert('leads_log', $leads_log);
                }

                $url = base_url('thank-you');
                $resultpost = array(
                    "status" => 200,
                    "message" => 'Your Enquiry has been successfully submitted.',
                    "url" => $url,
                );
            } else {
                $resultpost = array(
                    "status" => 400,
                    "message" => 'Some Error Occured',
                );
            }
        } else {
            $resultpost = array(
                "status" => 400,
                "message" => 'Wrong OTP Code',
            );
        }

        return simple_json_output($resultpost);
    }

    public function ajax_admission_enquiry()
    {
        $this->kcis_leads = $this->load->database('kcis_leads', TRUE);
        $this->db->trans_start(); // Start a transaction

        $this->form_validation->set_rules('class_id', 'Class', 'trim|required');
        $this->form_validation->set_rules('child_name', 'Child Name', 'trim|required');
        $this->form_validation->set_rules('parent_name', 'Parent Name', 'trim|required');
        $this->form_validation->set_rules('know_about_us', 'know about us', 'trim|required');
        $this->form_validation->set_rules('location', 'Location', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|valid_email', array(
            'valid_email' => 'Please enter a valid email address.'
        ));
        $this->form_validation->set_rules(
            'phone',
            'Phone Number',
            'trim|required|numeric|exact_length[10]',
            array(
                'required' => 'The %s field is required.',
                'numeric' => 'The %s field must contain only numeric characters.',
                'exact_length' => 'The %s field must be exactly 10 digits.'
            )
        );
        
                 
        $phone = clean_and_escape($this->input->post('phone'));
        $check_mobile = $this->kcis_leads->query("SELECT id FROM leads WHERE mobile='$phone' LIMIT 1")->num_rows();
        
        if ($check_mobile>0) {
           $resultpost = array(
                "status" => 400,
                "message" => "Primary Mobile Already Exist !",
            );
        }
        elseif ($this->form_validation->run() == FALSE) {
            $errors = array(
                'class_id'     => form_error('class_id'),
                'child_name'   => form_error('child_name'),
                'parent_name'  => form_error('parent_name'),
                'know_about_us' => form_error('know_about_us'),
                'email'        => form_error('email'),
                'phone'        => form_error('phone'),
                'location'        => form_error('location'),
            );
            $errors_ = array_map('strip_tags', array_filter($errors));
            $allErrors = implode('<br> ', $errors_);

            $resultpost = array(
                "status" => 400,
                "message" => $allErrors,
                "errors" => $errors,
            );
        } else {
            $curr_date = date("Y-m-d H:i:s");
            $class_id = clean_and_escape($this->input->post('class_id'));
            $class_name = $this->get_kips_program_name($class_id);
            //SELECT `id`, `class_id`, `class`, `parent_name`, `child_name`, `email`, `phone`, `know_about_us`, `created_at` FROM `admission_enquiry` WHERE 1	
            $ip_address = $this->input->ip_address();
            $data = array();
            $data['class_id']    = $class_id;
            $data['class']       = $class_name;
            $data['parent_name'] = clean_and_escape($this->input->post('parent_name'));
            $data['child_name']  = clean_and_escape($this->input->post('child_name'));
            $data['email']       = clean_and_escape($this->input->post('email'));
            $data['phone']       = clean_and_escape($this->input->post('phone'));
            $data['phone_country_code'] = clean_and_escape($this->input->post('phone_country_code')) ?: '+91';
            $data['location']       = clean_and_escape($this->input->post('location'));
            $data['know_about_us']     = clean_and_escape($this->input->post('know_about_us'));
            $data['ip_address']  = $ip_address;
            $data['created_at']  = $curr_date;
            if ($this->db->insert('admission_enquiry', $data)) {
                $leads = array();
                $leads = array(
                    "first_name"       => $data['parent_name'],
                    "child_first_name" => $data['child_name'],
                    "mobile"           => $data['phone'],
                    "email"            => $item['email'],
                    "how_know"         => $item['know_about_us'],
                    "program_id"       => $class_id,
                    "is_website"       => 2,
                    "campaign_id"      => 16,
                    "date_of_lead"     => $curr_date,
                    "added_date"       => $curr_date
                );

                $leads['academic_year'] = $this->common_model->get_current_academic_year();
                if ($this->kcis_leads->insert('leads', $leads)) {
                    $insert_id = $this->kcis_leads->insert_id();
                    $leads_log = array();
                    $leads_log = array(
                        "lead_id"    => $insert_id,
                        "tag"        => 'add',
                        "added_date" => $curr_date
                    );
                    $this->kcis_leads->insert('leads_log', $leads_log);
                }


                $this->db->trans_complete();
                $url = base_url('thank-you');
                $resultpost = array(
                    "status" => 200,
                    "message" => 'Your Enquiry has been successfully submitted.',
                    "url" => $url,
                );
            } else {
                $resultpost = array(
                    "status" => 400,
                    "message" => 'There is some issue while adding',
                );
            }
        }

        if ($this->db->trans_status() === FALSE) {
            $resultpost = array(
                "status" => 400,
                "message" => 'There is some issue while adding',
            );
            $this->db->trans_rollback();
        } else {
            $this->db->trans_commit();
        }

        return simple_json_output($resultpost);
    }

    public function ajax_download_brochure_enquiry()
    {
        $this->db->trans_start(); // Start a transaction

        $this->form_validation->set_rules('name', 'Name', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email', array(
            'required' => 'The email field is required.',
            'valid_email' => 'Please enter a valid email address.'
        ));
        $this->form_validation->set_rules(
            'mobile',
            'Mobile Number',
            'trim|required|numeric|exact_length[10]',
            array(
                'required' => 'The %s field is required.',
                'numeric' => 'The %s field must contain only numeric characters.',
                'exact_length' => 'The %s field must be exactly 10 digits.'
            )
        );
        if ($this->form_validation->run() == FALSE) {
            $errors = array(
                'name'    => form_error('name'),
                'email'   => form_error('email'),
                'mobile'  => form_error('mobile'),
            );
            $errors_ = array_map('strip_tags', array_filter($errors));
            $allErrors = implode('<br> ', $errors_);

            $resultpost = array(
                "status" => 400,
                "message" => $allErrors,
                "errors" => $errors,
            );
        } else {

            $ip_address = $this->input->ip_address();
            $data = array();
            $data['name']        = clean_and_escape($this->input->post('name'));
            $data['email']       = clean_and_escape($this->input->post('email'));
            $data['mobile']      = clean_and_escape($this->input->post('mobile'));
            $data['mobile_country_code'] = clean_and_escape($this->input->post('mobile_country_code')) ?: '+91';
            $data['ip_address']  = $ip_address;
            $data['created_at']  = date("Y-m-d H:i:s");
            if ($this->db->insert('brochure', $data)) {
                $parent_id = $this->db->insert_id();
                $this->db->trans_complete();
                $this->session->set_userdata('is_check_brochure', 1);
                $url = base_url('download_brochure_url');
                $url2 = $this->agent->referrer();
                $resultpost = array(
                    "status" => 200,
                    "message" => 'Please click "OK" to proceed with downloading the brochure.',
                    "url" => $url,
                    "url2" => $url2,
                );
            } else {
                $resultpost = array(
                    "status" => 400,
                    "message" => 'There is some issue while adding',
                );
            }
        }

        if ($this->db->trans_status() === FALSE) {
            $resultpost = array(
                "status" => 400,
                "message" => 'There is some issue while adding',
            );
            $this->db->trans_rollback();
        } else {
            $this->db->trans_commit();
        }

        return simple_json_output($resultpost);
    }

    public function ajax_summer_camp_enquiry()
    {
        $data       =  array();
        $data['student_name']       =  clean_and_escape($this->input->post('child_name'));
        $data['parent_name']       =  clean_and_escape($this->input->post('parent_name'));
        $data['phone']       =  clean_and_escape($this->input->post('phone'));
        $data['email']       =  clean_and_escape($this->input->post('email'));
        $data['location']       =  clean_and_escape($this->input->post('location'));
        $data['about_us']       =  clean_and_escape($this->input->post('know_about_us'));
        $data['created_at']       =  date("Y-m-d H:i:s");

        $this->db->insert('summer_camp_enquiry', $data);

        $url = base_url('thank-you');
        $resultpost = array(
            "status" => 200,
            "message" => 'Registration for the summer camp has been completed successfully.',
            "url" => $url,
        );

        return simple_json_output($resultpost);
    }

    public function ajax_youtube_enquiry()
    {
        $data       =  array();
        $data['name']       =  clean_and_escape($this->input->post('name'));
        $data['phone']       =  clean_and_escape($this->input->post('phone'));
        $data['phone_country_code'] = clean_and_escape($this->input->post('phone_country_code')) ?: '+91';
        $data['email']       =  clean_and_escape($this->input->post('email'));
        $data['created_at']       =  date("Y-m-d H:i:s");

        $this->db->insert('youtube_enquiry', $data);

        $url = 'https://www.youtube.com/channel/UCf5AA00VNIF2LXZXPWQtlCQ';
        $resultpost = array(
            "status" => 200,
            "message" => 'Registration for the youtube has been completed successfully.',
            "url" => $url,
        );

        return simple_json_output($resultpost);
    }

    public function ajax_register_event()
    {
        $this->db->trans_start(); // Start a transaction

        $this->form_validation->set_rules('event_id', 'Event', 'trim|required');
        $this->form_validation->set_rules('name', 'Name', 'trim|required');
        $this->form_validation->set_rules(
            'phone',
            'Phone Number',
            'trim|required|numeric|exact_length[10]',
            array(
                'required' => 'The %s field is required.',
                'numeric' => 'The %s field must contain only numeric characters.',
                'exact_length' => 'The %s field must be exactly 10 digits.'
            )
        );
        $this->form_validation->set_rules('gender', 'Gender', 'trim|required');
        $this->form_validation->set_rules('location', 'Location', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            $errors = array(
                'event_id' => form_error('event_id'),
                'name'     => form_error('name'),
                'phone'    => form_error('phone'),
                'gender'   => form_error('gender'),
                'location' => form_error('location'),
            );
            $errors_ = array_map('strip_tags', array_filter($errors));
            $allErrors = implode('<br> ', $errors_);

            $resultpost = array(
                "status" => 400,
                "message" => $allErrors,
                "errors" => $errors,
            );
        } else {

            $ip_address = $this->input->ip_address();
            $data = array();
            $data['name']       =  clean_and_escape($this->input->post('name'));
            $data['gender']     =  clean_and_escape($this->input->post('gender'));
            $data['phone']      =  clean_and_escape($this->input->post('phone'));
            $data['phone_country_code'] = clean_and_escape($this->input->post('phone_country_code')) ?: '+91';
            $data['event_id']   =  clean_and_escape($this->input->post('event_id'));
            $data['location']   =  clean_and_escape($this->input->post('location'));
            $data['created_at'] = date("Y-m-d H:i:s");
            $data['ip_address']  = $ip_address;
            $data['created_at']  = date("Y-m-d H:i:s");
            if ($this->db->insert('register_event', $data)) {
                $parent_id = $this->db->insert_id();
                $this->db->trans_complete();
                $url = base_url('thank-you');
                $resultpost = array(
                    "status" => 200,
                    "message" => 'Registration for the event has been completed successfully.',
                    "url" => $url,
                );
            } else {
                $resultpost = array(
                    "status" => 400,
                    "message" => 'There is some issue while adding',
                );
            }
        }

        if ($this->db->trans_status() === FALSE) {
            $resultpost = array(
                "status" => 400,
                "message" => 'There is some issue while adding',
            );
            $this->db->trans_rollback();
        } else {
            $this->db->trans_commit();
        }

        return simple_json_output($resultpost);
    }

    public function ajax_submit_career()
{
    $this->kcis_leads = $this->load->database('kcis_leads', TRUE);
    $this->db->trans_start();

    // --- Start of reCAPTCHA verification logic ---
    // $recaptcha_response = $this->input->post('g-recaptcha-response');

    // if (empty($recaptcha_response)) {
    //     $resultpost = [
    //         'status' => 400,
    //         'message' => 'Please complete the reCAPTCHA before submitting.',
    //     ];
    //     $this->db->trans_rollback();
    //     return simple_json_output($resultpost);
    // }
    
    // $secret_key = $this->config->item('recaptcha_secret_key');
    // $verification_url = 'https://www.google.com/recaptcha/api/siteverify';
    // $request_data = http_build_query([
    //     'secret' => $secret_key,
    //     'response' => $recaptcha_response,
    // ]);

    // $ch = curl_init($verification_url);
    // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    // curl_setopt($ch, CURLOPT_POSTFIELDS, $request_data);
    // $response_json = curl_exec($ch);
    // curl_close($ch);

    // $response_data = json_decode($response_json, true);

    // if (!$response_data['success']) {
    //     $resultpost = [
    //         'status' => 400,
    //         'message' => 'reCAPTCHA verification failed. Please try again.',
    //     ];
    //     $this->db->trans_rollback();
    //     return simple_json_output($resultpost);
    // }
    // --- End of reCAPTCHA verification logic ---
    
    // The rest of your original code follows
    $this->form_validation->set_rules('name', 'Name', 'trim|required');
    $this->form_validation->set_rules('branch', 'Branch', 'trim|required');
    $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email', array(
        'required' => 'The email field is required.',
        'valid_email' => 'Please enter a valid email address.'
    ));
    $this->form_validation->set_rules(
        'phone',
        'Phone Number',
        'trim|required|numeric|exact_length[10]',
        array(
            'required' => 'The %s field is required.',
            'numeric' => 'The %s field must contain only numeric characters.',
            'exact_length' => 'The %s field must be exactly 10 digits.'
        )
    );

    if ($this->form_validation->run() == FALSE) {
        $errors = array(
            'name' => form_error('name'),
            'branch' => form_error('branch'),
            'email' => form_error('email'),
            'phone' => form_error('phone'),
        );
        $errors_ = array_map('strip_tags', array_filter($errors));
        $allErrors = implode('<br> ', $errors_);
        $resultpost = array(
            "status" => 400,
            "message" => $allErrors,
            "errors" => $errors,
        );
        $this->db->trans_rollback();
    } else {
        $curr_date = date("Y-m-d H:i:s");
        $ip_address = $this->input->ip_address();
        $data = array();
        if ($_FILES['file']['name'] != "") {
            $year = date("Y");
            $month = date("m");
            $day = date("d");
            $directory = "uploads/career_enquiry/" . "$year/$month/$day";
            if (!is_dir($directory)) {
                mkdir($directory, 0755, true);
            }
            $upload_path = $directory;
            $tmpFilePath = $_FILES['file']['tmp_name'];
            $ext2 = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
            if ($tmpFilePath != "") {
                $this->load->helper('string');
                $token = random_string('alnum', 10);
                if (isset($_FILES['file']) && is_uploaded_file($_FILES['file']['tmp_name'])) {
                    $file = 'resume_' . $token . '.' . $ext2;
                    move_uploaded_file($_FILES['file']['tmp_name'], $upload_path . '/' . $file);
                    $data['resume'] = $upload_path . '/' . $file;
                }
            }
        }
        $branch_id = clean_and_escape($this->input->post('branch'));
        $branch_name = $this->common_model->getNameById('branches', 'name', $branch_id);
        $data['career_id'] = $this->input->post('career_id');
        $data['name'] = clean_and_escape($this->input->post('name'));
        $data['phone'] = clean_and_escape($this->input->post('phone'));
        $data['phone_country_code'] = clean_and_escape($this->input->post('phone_country_code')) ?: '+91';
        $data['email'] = clean_and_escape($this->input->post('email'));
        $data['branch_id'] = $branch_id;
        $data['branch'] = $branch_name;
        $data['chat_with_us'] = clean_and_escape($this->input->post('chat_with_us'));
        $data['ip_address'] = $ip_address;
        $data['created_at'] = date("Y-m-d H:i:s");

        if ($this->db->insert('career_enquiry', $data)) {
            $career_enquiry_id = $this->db->insert_id();
            $curl = curl_init();
            $url = 'http://panel.surakaedusociety.com/hr/remote_career_leads';
            curl_setopt_array($curl, array(
                CURLOPT_URL => $url,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'POST',
                CURLOPT_POSTFIELDS => array(
                    'name' => $data['name'],
                    'email' => $data['email'],
                    'phone' => $data['phone'],
                    'applied_for' => clean_and_escape($this->input->post('career_name')),
                    'applied_school' => $data['branch'],
                    'remark' => $data['chat_with_us'],
                    'ip_address' => 1,
                    'resume' => new CURLFILE($data['resume']),
                ),
            ));
            $response = curl_exec($curl);
            curl_close($curl);

            $career_name = clean_and_escape($this->input->post('career_name'));
            if (empty($career_name) && !empty($data['career_id'])) {
                $career_name = $this->common_model->getNameById('careers', 'title', $data['career_id']);
            }

            $notification_context = array(
                'form_type' => 'career_application',
                'reference_type' => 'career_enquiry',
                'reference_id' => $career_enquiry_id,
            );

            try {
                if (!empty($data['email'])) {
                    $this->send_career_application_email($data['email'], $data['name'], $career_name, $data['branch'], $notification_context);
                }
            } catch (Exception $e) {
                log_message('error', 'Failed to send career application email: ' . $e->getMessage());
            }

            try {
                if (!empty($data['phone'])) {
                    $this->send_career_application_whatsapp($data['phone'], $data['name'], $career_name, $data['branch'], $notification_context);
                }
            } catch (Exception $e) {
                log_message('error', 'Failed to send career application WhatsApp: ' . $e->getMessage());
            }

            try {
                if (!empty($data['phone'])) {
                    $this->send_career_application_sms($data['phone'], $data['name'], $career_name, $data['branch'], $notification_context);
                }
            } catch (Exception $e) {
                log_message('error', 'Failed to send career application SMS: ' . $e->getMessage());
            }

            $this->db->trans_complete();
            $url = base_url('thank-you');
            $resultpost = array(
                "status" => 200,
                "message" => 'Your Enquiry has been successfully submitted.',
                "url" => $url,
            );
        } else {
            $resultpost = array(
                "status" => 400,
                "message" => 'There is some issue while adding',
            );
        }
    }
    if ($this->db->trans_status() === FALSE) {
        $resultpost = array(
            "status" => 400,
            "message" => 'There is some issue while adding',
        );
        $this->db->trans_rollback();
    } else {
        $this->db->trans_commit();
    }

    return simple_json_output($resultpost);
}


    public function get_kips_program_list()
    {
        $this->kcis_leads = $this->load->database('kcis_leads', TRUE);
        $query = $this->kcis_leads->query("SELECT id,name FROM program WHERE school_id='51' GROUP BY name ORDER BY sequence LIMIT 7 ");
        $count = $query->num_rows();
        $data  = array();
        foreach ($query->result_array() as $row) {
            $data[] = array(
                "id"  => $row['id'],
                "name" => $row['name'],
            );
        }
        return $data;
    }

    public function get_kips_program_name($id)
    {
        $this->kcis_leads = $this->load->database('kcis_leads', TRUE);
        $query = $this->kcis_leads->query("SELECT name FROM program WHERE id='$id' AND school_id='51' LIMIT 1");
        $count = $query->num_rows();
        if ($count > 0) {
            $program_name = $query->row()->name;
        } else {
            $program_name = '';
        }
        return $program_name;
    }


    public function ajax_contact_enquiry()
	{
		$this->db->trans_start();   

		// The rest of your form validation and processing logic
		$this->form_validation->set_rules('name', 'Name', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'trim|valid_email', [
			'valid_email' => 'Please enter a valid email address.',
		]);
		$this->form_validation->set_rules(
			'phone',
			'Phone Number',
			'trim|required|numeric|exact_length[10]',
			[
				'required' => 'The %s field is required.',
				'numeric' => 'The %s field must contain only numeric characters.',
				'exact_length' => 'The %s field must be exactly 10 digits.',
			]
		);

		if ($this->form_validation->run() == FALSE) {
			$errors = [
				'name' => form_error('name'),
				'email' => form_error('email'),
				'phone' => form_error('phone'),
			];
			$errors_ = array_map('strip_tags', array_filter($errors));
			$allErrors = implode('<br> ', $errors_);

			$resultpost = [
				"status" => 400,
				"message" => $allErrors,
				"errors" => $errors,
			];
			$this->db->trans_rollback();
		} else {
			$data = [
				'name' => clean_and_escape($this->input->post('name')),
				'email' => clean_and_escape($this->input->post('email')),
				'phone' => clean_and_escape($this->input->post('phone')),
				'phone_country_code' => clean_and_escape($this->input->post('phone_country_code')) ?: '+91',
				'chat_with_us' => clean_and_escape($this->input->post('chat_with_us')),
				'subject' => clean_and_escape($this->input->post('subject')),
				'ip_address' => $this->input->ip_address(),
				'created_at' => date("Y-m-d H:i:s"),
			];

			if ($this->db->insert('contact_enquiry', $data)) {
				$this->db->trans_commit();
				$resultpost = [
					'status' => 200,
					'message' => 'Your Enquiry has been successfully submitted.',
					'url' => base_url('thank-you'),
				];
			} else {
				$this->db->trans_rollback();
				$resultpost = [
					'status' => 400,
					'message' => 'There is some issue while adding',
				];
			}
		}

		if ($this->db->trans_status() === FALSE) {
			$this->db->trans_rollback();
			$resultpost = [
				"status" => 400,
				"message" => 'There is some issue while adding',
			];
		} else {
			$this->db->trans_commit();
		}

		return simple_json_output($resultpost);
	}

    private function log_website_notification($data)
    {
        $data['type'] = isset($data['type']) ? $data['type'] : 'website';
        $data['website'] = 'kips';
        $this->common_model->log_notification($data);
    }

    private function notification_context_to_log_fields($context = array())
    {
        return array(
            'form_type' => isset($context['form_type']) ? $context['form_type'] : null,
            'reference_type' => isset($context['reference_type']) ? $context['reference_type'] : null,
            'reference_id' => isset($context['reference_id']) ? $context['reference_id'] : null,
        );
    }

    private function buzzify_response_is_success($http_code, $response)
    {
        if ((int) $http_code !== 200) {
            return false;
        }
        $response_lower = strtolower((string) $response);
        return strpos($response_lower, 'success') !== false ||
            strpos($response_lower, 'sent') !== false ||
            strpos($response_lower, 'ok') !== false ||
            strpos($response_lower, 'messageid') !== false ||
            (strpos($response_lower, 'error') === false && strpos($response_lower, 'fail') === false);
    }

    public function send_admission_enquiry_email($user_email, $parent_name, $context = array())
    {
        $subject = 'Thank You for Your Admission Enquiry - Kidzonia International';
        try {
            if (empty($user_email)) {
                $this->log_website_notification(array_merge($this->notification_context_to_log_fields($context), array(
                    'channel' => 'email', 'event_type' => 'admission_enquiry', 'provider' => 'zeptomail',
                    'template_name' => $subject, 'recipient' => '', 'recipient_name' => $parent_name,
                    'status' => 'skipped', 'error_message' => 'Email empty',
                )));
                return false;
            }

            $display_name = !empty($parent_name) ? htmlspecialchars($parent_name) : 'Parent';
            $message = '<p>Dear ' . $display_name . ',</p>
                <p>We are grateful for your recent inquiry and appreciate your interest in our school.</p>
                <p>Your questions are important to us, and we thank you for reaching out.</p>
                <p>Our team will get back to you shortly to address all your queries.</p>
                <p>Kindly find below the links to know more about our school:</p>
                <p>Website: <a href="https://www.kidzoniainternational.in">https://www.kidzoniainternational.in</a><br>
                Instagram: <a href="https://instagram.com/kidzonia_hyderabad?igshid=MzRlODBiNWFlZA==">https://instagram.com/kidzonia_hyderabad</a><br>
                Facebook: <a href="https://www.facebook.com/KidzoniaPreschoolHyderabad?mibextid=ZbWKwL">https://www.facebook.com/KidzoniaPreschoolHyderabad</a><br>
                YouTube: <a href="https://youtube.com/@KIDZONIAINTERNATIONALPRESCHOOL?si=v37dXLROEXXubzJ_">https://youtube.com/@KIDZONIAINTERNATIONALPRESCHOOL</a><br>
                Location: <a href="https://www.kidzoniainternational.in/contact-us">https://www.kidzoniainternational.in/contact-us</a></p>
                <p>Warm regards,<br>Team Kidzonia International</p>';

            $sent = $this->email_model->sent_simple_mail(
                $this->email_model->sample_mail_message($message),
                $user_email,
                $subject
            );

            $this->log_website_notification(array_merge($this->notification_context_to_log_fields($context), array(
                'channel' => 'email', 'event_type' => 'admission_enquiry', 'provider' => 'zeptomail',
                'template_name' => $subject, 'recipient' => $user_email, 'recipient_name' => $parent_name,
                'status' => $sent ? 'sent' : 'failed', 'error_message' => $sent ? null : 'ZeptoMail send failed',
            )));

            return $sent;
        } catch (Exception $e) {
            $this->log_website_notification(array_merge($this->notification_context_to_log_fields($context), array(
                'channel' => 'email', 'event_type' => 'admission_enquiry', 'provider' => 'zeptomail',
                'template_name' => $subject, 'recipient' => $user_email, 'recipient_name' => $parent_name,
                'status' => 'failed', 'error_message' => $e->getMessage(),
            )));
            log_message('error', 'Admission Enquiry Email Error: ' . $e->getMessage());
            return false;
        }
    }

    public function send_admission_enquiry_sms($phone, $context = array())
    {
        $template_id = '1207178169265515300';
        try {
            if (empty($phone)) {
                $this->log_website_notification(array_merge($this->notification_context_to_log_fields($context), array(
                    'channel' => 'sms', 'event_type' => 'admission_enquiry', 'provider' => 'buzzify',
                    'template_name' => $template_id, 'recipient' => '', 'status' => 'skipped', 'error_message' => 'Phone empty',
                )));
                return false;
            }

            $apikey = '9CuEkpgFFaeSqL9a';
            $senderid = 'KIPSES';
            $mobile_no = '91' . $phone;
            $url = "http://buzzify.in/V2/http-api-post.php";
            $message = "Dear Parent, Thank you for connecting with Kidzonia International School! We've received your inquiry and our team will contact you shortly regarding admissions. Warm regards, Team KIPS";
            $post_data = array(
                "apikey" => $apikey, "senderid" => $senderid, "number" => $mobile_no,
                "message" => $message, "template_id" => $template_id, "format" => "json"
            );

            $curl = curl_init($url);
            curl_setopt($curl, CURLOPT_POST, true);
            curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($post_data));
            curl_setopt($curl, CURLOPT_HTTPHEADER, array("Content-Type: application/json"));
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($curl, CURLOPT_TIMEOUT, 30);

            $response = curl_exec($curl);
            $http_code = curl_getinfo($curl, CURLINFO_HTTP_CODE);
            $curl_error = curl_error($curl);
            curl_close($curl);

            if ($curl_error) {
                $this->log_website_notification(array_merge($this->notification_context_to_log_fields($context), array(
                    'channel' => 'sms', 'event_type' => 'admission_enquiry', 'provider' => 'buzzify',
                    'template_name' => $template_id, 'recipient' => $phone, 'status' => 'failed',
                    'http_code' => $http_code, 'request_payload' => $post_data, 'response_payload' => $response,
                    'error_message' => $curl_error,
                )));
                return false;
            }

            $is_success = $this->buzzify_response_is_success($http_code, $response);
            $this->log_website_notification(array_merge($this->notification_context_to_log_fields($context), array(
                'channel' => 'sms', 'event_type' => 'admission_enquiry', 'provider' => 'buzzify',
                'template_name' => $template_id, 'recipient' => $phone, 'status' => $is_success ? 'sent' : 'failed',
                'http_code' => $http_code, 'request_payload' => $post_data, 'response_payload' => $response,
                'error_message' => $is_success ? null : 'Buzzify send failed',
            )));

            if (!$is_success) {
                log_message('error', 'Buzzify SMS Response: ' . $response);
            }
            return $is_success;
        } catch (Exception $e) {
            $this->log_website_notification(array_merge($this->notification_context_to_log_fields($context), array(
                'channel' => 'sms', 'event_type' => 'admission_enquiry', 'provider' => 'buzzify',
                'template_name' => $template_id, 'recipient' => $phone, 'status' => 'failed', 'error_message' => $e->getMessage(),
            )));
            log_message('error', 'Admission Enquiry SMS Error: ' . $e->getMessage());
            return false;
        }
    }

    public function send_admission_enquiry_whatsapp($phone, $parent_name = '', $context = array())
    {
        $template_name = 'submitted_online_enquiry_all_kcis_and_kips_gg';
        try {
            if (empty($phone)) {
                $this->log_website_notification(array_merge($this->notification_context_to_log_fields($context), array(
                    'channel' => 'whatsapp', 'event_type' => 'admission_enquiry', 'provider' => 'interakt',
                    'template_name' => $template_name, 'recipient' => '', 'recipient_name' => $parent_name,
                    'status' => 'skipped', 'error_message' => 'Phone empty',
                )));
                return false;
            }

            $api_endpoint = 'https://api.interakt.ai/v1/public/message/';
            $api_key = 'UGNNRlpYaUwxeXNKRmg3NktJUWo4a2l0U3IzSzJVRzY1T2FPckgwbGljUTo=';
            $postData = array(
                'countryCode' => '+91', 'phoneNumber' => $phone, 'type' => 'Template',
                'template' => array(
                    'name' => $template_name, 'languageCode' => 'en',
                    'bodyValues' => array(
                        !empty($parent_name) ? $parent_name : 'Parent',
                        'KIPS',
                    )
                )
            );

            $curl = curl_init($api_endpoint);
            curl_setopt($curl, CURLOPT_POST, true);
            curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($postData));
            curl_setopt($curl, CURLOPT_HTTPHEADER, array('Authorization: Basic ' . $api_key, 'Content-Type: application/json'));
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($curl, CURLOPT_TIMEOUT, 30);

            $response = curl_exec($curl);
            $http_code = curl_getinfo($curl, CURLINFO_HTTP_CODE);
            $curl_error = curl_error($curl);
            curl_close($curl);

            if ($curl_error) {
                $this->log_website_notification(array_merge($this->notification_context_to_log_fields($context), array(
                    'channel' => 'whatsapp', 'event_type' => 'admission_enquiry', 'provider' => 'interakt',
                    'template_name' => $template_name, 'recipient' => $phone, 'recipient_name' => $parent_name,
                    'status' => 'failed', 'http_code' => $http_code, 'request_payload' => $postData,
                    'response_payload' => $response, 'error_message' => $curl_error,
                )));
                return false;
            }

            $is_success = ($http_code == 200 || $http_code == 201);
            $this->log_website_notification(array_merge($this->notification_context_to_log_fields($context), array(
                'channel' => 'whatsapp', 'event_type' => 'admission_enquiry', 'provider' => 'interakt',
                'template_name' => $template_name, 'recipient' => $phone, 'recipient_name' => $parent_name,
                'status' => $is_success ? 'sent' : 'failed', 'http_code' => $http_code,
                'request_payload' => $postData, 'response_payload' => $response,
                'error_message' => $is_success ? null : 'Interakt send failed',
            )));

            if ($is_success) {
                log_message('info', 'Interakt WhatsApp Response: ' . $response);
            } else {
                log_message('error', 'Interakt WhatsApp Response: ' . $response . ' HTTP Code: ' . $http_code);
            }
            return $is_success;
        } catch (Exception $e) {
            $this->log_website_notification(array_merge($this->notification_context_to_log_fields($context), array(
                'channel' => 'whatsapp', 'event_type' => 'admission_enquiry', 'provider' => 'interakt',
                'template_name' => $template_name, 'recipient' => $phone, 'recipient_name' => $parent_name,
                'status' => 'failed', 'error_message' => $e->getMessage(),
            )));
            log_message('error', 'Admission Enquiry WhatsApp Error: ' . $e->getMessage());
            return false;
        }
    }

    public function send_career_application_email($user_email, $name, $career_title, $branch_name, $context = array())
    {
        $subject = 'Thank You for Your Career Application - Kidzonia International';
        try {
            if (empty($user_email)) {
                $this->log_website_notification(array_merge($this->notification_context_to_log_fields($context), array(
                    'channel' => 'email', 'event_type' => 'career_application', 'provider' => 'zeptomail',
                    'template_name' => $subject, 'recipient' => '', 'recipient_name' => $name,
                    'status' => 'skipped', 'error_message' => 'Email empty',
                )));
                return false;
            }

            $message = '<p>Dear ' . htmlspecialchars($name) . ',</p>
                <p>Thank you for applying for the position of <strong>' . htmlspecialchars($career_title) . '</strong> at <strong>' . htmlspecialchars($branch_name) . '</strong>.</p>
                <p>We have received your career application successfully. Our HR team will review your profile and contact you shortly.</p>
                <p>For more details, visit: <a href="https://www.kidzoniainternational.in">www.kidzoniainternational.in</a></p>';

            $sent = $this->email_model->sent_simple_mail(
                $this->email_model->sample_mail_message($message),
                $user_email,
                $subject
            );

            $this->log_website_notification(array_merge($this->notification_context_to_log_fields($context), array(
                'channel' => 'email', 'event_type' => 'career_application', 'provider' => 'zeptomail',
                'template_name' => $subject, 'recipient' => $user_email, 'recipient_name' => $name,
                'status' => $sent ? 'sent' : 'failed', 'error_message' => $sent ? null : 'ZeptoMail send failed',
            )));

            return $sent;
        } catch (Exception $e) {
            $this->log_website_notification(array_merge($this->notification_context_to_log_fields($context), array(
                'channel' => 'email', 'event_type' => 'career_application', 'provider' => 'zeptomail',
                'template_name' => $subject, 'recipient' => $user_email, 'recipient_name' => $name,
                'status' => 'failed', 'error_message' => $e->getMessage(),
            )));
            log_message('error', 'Career Application Email Error: ' . $e->getMessage());
            return false;
        }
    }

    public function send_career_application_whatsapp($phone, $name, $career_title, $branch_name, $context = array())
    {
        $template_name = 'kidzonia_career_inquiry';
        try {
            if (empty($phone)) {
                $this->log_website_notification(array_merge($this->notification_context_to_log_fields($context), array(
                    'channel' => 'whatsapp', 'event_type' => 'career_application', 'provider' => 'interakt',
                    'template_name' => $template_name, 'recipient' => '', 'recipient_name' => $name,
                    'status' => 'skipped', 'error_message' => 'Phone empty',
                )));
                return false;
            }

            $api_endpoint = 'https://api.interakt.ai/v1/public/message/';
            $api_key = 'UGNNRlpYaUwxeXNKRmg3NktJUWo4a2l0U3IzSzJVRzY1T2FPckgwbGljUTo=';
            $postData = array(
                'countryCode' => '+91', 'phoneNumber' => $phone, 'type' => 'Template',
                'template' => array(
                    'name' => $template_name, 'languageCode' => 'en',
                    'headerValues' => array('https://www.kidzoniainternational.in/uploads/2023/07/kidzonia_logo.png'),
                    'bodyValues' => array($name, $career_title, $branch_name, 'www.kidzoniainternational.in')
                )
            );

            $curl = curl_init($api_endpoint);
            curl_setopt($curl, CURLOPT_POST, true);
            curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($postData));
            curl_setopt($curl, CURLOPT_HTTPHEADER, array('Authorization: Basic ' . $api_key, 'Content-Type: application/json'));
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($curl, CURLOPT_TIMEOUT, 30);

            $response = curl_exec($curl);
            $http_code = curl_getinfo($curl, CURLINFO_HTTP_CODE);
            $curl_error = curl_error($curl);
            curl_close($curl);

            if ($curl_error) {
                $this->log_website_notification(array_merge($this->notification_context_to_log_fields($context), array(
                    'channel' => 'whatsapp', 'event_type' => 'career_application', 'provider' => 'interakt',
                    'template_name' => $template_name, 'recipient' => $phone, 'recipient_name' => $name,
                    'status' => 'failed', 'http_code' => $http_code, 'request_payload' => $postData,
                    'response_payload' => $response, 'error_message' => $curl_error,
                )));
                return false;
            }

            $is_success = ($http_code == 200 || $http_code == 201);
            $this->log_website_notification(array_merge($this->notification_context_to_log_fields($context), array(
                'channel' => 'whatsapp', 'event_type' => 'career_application', 'provider' => 'interakt',
                'template_name' => $template_name, 'recipient' => $phone, 'recipient_name' => $name,
                'status' => $is_success ? 'sent' : 'failed', 'http_code' => $http_code,
                'request_payload' => $postData, 'response_payload' => $response,
                'error_message' => $is_success ? null : 'Interakt send failed',
            )));

            if ($is_success) {
                log_message('info', 'Interakt Career WhatsApp Response: ' . $response);
            } else {
                log_message('error', 'Interakt Career WhatsApp Response: ' . $response . ' HTTP Code: ' . $http_code);
            }
            return $is_success;
        } catch (Exception $e) {
            $this->log_website_notification(array_merge($this->notification_context_to_log_fields($context), array(
                'channel' => 'whatsapp', 'event_type' => 'career_application', 'provider' => 'interakt',
                'template_name' => $template_name, 'recipient' => $phone, 'recipient_name' => $name,
                'status' => 'failed', 'error_message' => $e->getMessage(),
            )));
            log_message('error', 'Career Application WhatsApp Error: ' . $e->getMessage());
            return false;
        }
    }

    public function send_career_application_sms($phone, $name, $career_title, $branch_name, $context = array())
    {
        $template_id = '1207178170992440494';
        try {
            if (empty($phone)) {
                $this->log_website_notification(array_merge($this->notification_context_to_log_fields($context), array(
                    'channel' => 'sms', 'event_type' => 'career_application', 'provider' => 'buzzify',
                    'template_name' => $template_id, 'recipient' => '', 'recipient_name' => $name,
                    'status' => 'skipped', 'error_message' => 'Phone empty',
                )));
                return false;
            }

            $apikey = '9CuEkpgFFaeSqL9a';
            $senderid = 'KIPSES';
            $mobile_no = '91' . $phone;
            $url = "http://buzzify.in/V2/http-api-post.php";
            $message = 'Dear ' . $name . ' , Thank you for applying for ' . $career_title . ' at Kidzonia International, ' . $branch_name . ' . We have received your career application. Our HR team will contact you shortly. Team KIPS';
            $post_data = array(
                "apikey" => $apikey, "senderid" => $senderid, "number" => $mobile_no,
                "message" => $message, "template_id" => $template_id, "format" => "json"
            );

            $curl = curl_init($url);
            curl_setopt($curl, CURLOPT_POST, true);
            curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($post_data));
            curl_setopt($curl, CURLOPT_HTTPHEADER, array("Content-Type: application/json"));
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($curl, CURLOPT_TIMEOUT, 30);

            $response = curl_exec($curl);
            $http_code = curl_getinfo($curl, CURLINFO_HTTP_CODE);
            $curl_error = curl_error($curl);
            curl_close($curl);

            if ($curl_error) {
                $this->log_website_notification(array_merge($this->notification_context_to_log_fields($context), array(
                    'channel' => 'sms', 'event_type' => 'career_application', 'provider' => 'buzzify',
                    'template_name' => $template_id, 'recipient' => $phone, 'recipient_name' => $name,
                    'status' => 'failed', 'http_code' => $http_code, 'request_payload' => $post_data,
                    'response_payload' => $response, 'error_message' => $curl_error,
                )));
                return false;
            }

            $is_success = $this->buzzify_response_is_success($http_code, $response);
            $this->log_website_notification(array_merge($this->notification_context_to_log_fields($context), array(
                'channel' => 'sms', 'event_type' => 'career_application', 'provider' => 'buzzify',
                'template_name' => $template_id, 'recipient' => $phone, 'recipient_name' => $name,
                'status' => $is_success ? 'sent' : 'failed', 'http_code' => $http_code,
                'request_payload' => $post_data, 'response_payload' => $response,
                'error_message' => $is_success ? null : 'Buzzify send failed',
            )));

            if (!$is_success) {
                log_message('error', 'Buzzify Career SMS Response: ' . $response);
            }
            return $is_success;
        } catch (Exception $e) {
            $this->log_website_notification(array_merge($this->notification_context_to_log_fields($context), array(
                'channel' => 'sms', 'event_type' => 'career_application', 'provider' => 'buzzify',
                'template_name' => $template_id, 'recipient' => $phone, 'recipient_name' => $name,
                'status' => 'failed', 'error_message' => $e->getMessage(),
            )));
            log_message('error', 'Career Application SMS Error: ' . $e->getMessage());
            return false;
        }
    }

    public function send_tracking_notification_email($form_data, $form_type = 'Admission Enquiry', $context = array())
    {
        $subject = 'New ' . $form_type . ' Submission - UTM Tracking Information';
        try {
            $notification_email = $this->config->item('tracking_notification_email');
            
            if (empty($notification_email)) {
                log_message('error', 'Tracking notification email not configured in config.php - using default');
                $notification_email = 'info@kidzoniainternational.in';
            }
            
            // Log the email address being used
            log_message('info', '🔔 UTM Tracking Email - Sending to: ' . $notification_email);

            // Email model is already autoloaded, no need to load again
            // Extract UTM parameters
            $utm_source = isset($form_data['utm_source']) ? htmlspecialchars($form_data['utm_source']) : 'N/A';
            $utm_medium = isset($form_data['utm_medium']) ? htmlspecialchars($form_data['utm_medium']) : 'N/A';
            $utm_campaign = isset($form_data['utm_campaign']) ? htmlspecialchars($form_data['utm_campaign']) : 'N/A';
            $utm_term = isset($form_data['utm_term']) ? htmlspecialchars($form_data['utm_term']) : 'N/A';
            $utm_content = isset($form_data['utm_content']) ? htmlspecialchars($form_data['utm_content']) : 'N/A';
            $utm_id = isset($form_data['utm_id']) ? htmlspecialchars($form_data['utm_id']) : 'N/A';
            
            // Get referer - prefer referrer_url, fallback to referer
            $referer = isset($form_data['referrer_url']) ? $form_data['referrer_url'] : (isset($form_data['referer']) ? $form_data['referer'] : 'N/A');
            
            // Extract domain from referer for display
            $referer_domain_display = 'N/A';
            if ($referer != 'N/A' && !empty($referer)) {
                if (strpos($referer, 'Direct') !== false || strpos($referer, 'Internal') !== false) {
                    $referer_domain_display = $referer;
                } else {
                    $parsed = parse_url($referer);
                    if (isset($parsed['host'])) {
                        $referer_domain_display = $parsed['host'];
                    } else {
                        $referer_domain_display = $referer;
                    }
                }
            }
            
            $referer = htmlspecialchars($referer);
            $ip_address = isset($form_data['ip_address']) ? htmlspecialchars($form_data['ip_address']) : 'N/A';
            
            // Format submission time to 12-hour format with AM/PM
            $submission_time_raw = isset($form_data['submission_time']) ? $form_data['submission_time'] : date('Y-m-d H:i:s');
            $submission_time = date('Y-m-d h:i:s A', strtotime($submission_time_raw));

            // Get site name
            $site_name = 'Kidzonia International';

            // Build email message
            $email_msg = '<div style="font-family: Arial, sans-serif; line-height: 1.6; color: #333; max-width: 800px;">
                <div style="background-color: #39234a; color: #fff; padding: 15px; text-align: center; margin-bottom: 20px;">
                    <h1 style="margin: 0; font-size: 24px; color: #fff;">' . htmlspecialchars($site_name) . '</h1>
                </div>
                <h2 style="color: #2c3e50; border-bottom: 2px solid #e08043; padding-bottom: 10px;">New ' . htmlspecialchars($form_type) . ' Submission</h2>
                
                <h3 style="color: #39234a; margin-top: 20px;">Form Submission Details</h3>
                <table style="width: 100%; border-collapse: collapse; margin-bottom: 20px;">
                    <tr style="background-color: #f5f5f5;">
                        <td style="padding: 8px; border: 1px solid #ddd; font-weight: bold; width: 200px;">Parent Name:</td>
                        <td style="padding: 8px; border: 1px solid #ddd;">' . (isset($form_data['parent_name']) && !empty($form_data['parent_name']) ? htmlspecialchars($form_data['parent_name']) : (isset($form_data['full_name']) && !empty($form_data['full_name']) ? htmlspecialchars($form_data['full_name']) : (isset($form_data['name']) && !empty($form_data['name']) ? htmlspecialchars($form_data['name']) : 'N/A'))) . '</td>
                    </tr>
                    <tr>
                        <td style="padding: 8px; border: 1px solid #ddd; font-weight: bold;">Email:</td>
                        <td style="padding: 8px; border: 1px solid #ddd;">' . (isset($form_data['email']) ? htmlspecialchars($form_data['email']) : 'N/A') . '</td>
                    </tr>
                    <tr style="background-color: #f5f5f5;">
                        <td style="padding: 8px; border: 1px solid #ddd; font-weight: bold;">Phone:</td>
                        <td style="padding: 8px; border: 1px solid #ddd;">' . (isset($form_data['phone']) ? htmlspecialchars($form_data['phone']) : (isset($form_data['phone_no']) ? htmlspecialchars($form_data['phone_no']) : 'N/A')) . '</td>
                    </tr>';

            // Add Student Name field (always show if available)
            if (isset($form_data['student_name']) && !empty($form_data['student_name'])) {
                $email_msg .= '<tr>
                        <td style="padding: 8px; border: 1px solid #ddd; font-weight: bold;">Student Name:</td>
                        <td style="padding: 8px; border: 1px solid #ddd;">' . htmlspecialchars($form_data['student_name']) . '</td>
                    </tr>';
            } elseif (isset($form_data['child_name']) && !empty($form_data['child_name'])) {
                $email_msg .= '<tr>
                        <td style="padding: 8px; border: 1px solid #ddd; font-weight: bold;">Student Name:</td>
                        <td style="padding: 8px; border: 1px solid #ddd;">' . htmlspecialchars($form_data['child_name']) . '</td>
                    </tr>';
            }

            // Add Location field
            if (isset($form_data['location']) && !empty($form_data['location'])) {
                $email_msg .= '<tr>
                        <td style="padding: 8px; border: 1px solid #ddd; font-weight: bold;">Location:</td>
                        <td style="padding: 8px; border: 1px solid #ddd;">' . htmlspecialchars($form_data['location']) . '</td>
                    </tr>';
            }

            // Add Admission for Class field
            if (isset($form_data['class_name']) && !empty($form_data['class_name'])) {
                $email_msg .= '<tr>
                        <td style="padding: 8px; border: 1px solid #ddd; font-weight: bold;">Admission for Class:</td>
                        <td style="padding: 8px; border: 1px solid #ddd;">' . htmlspecialchars($form_data['class_name']) . '</td>
                    </tr>';
            }

            // Add How did you come to know about us field
            if (isset($form_data['know_about_us']) && !empty($form_data['know_about_us'])) {
                $email_msg .= '<tr>
                        <td style="padding: 8px; border: 1px solid #ddd; font-weight: bold;">How did you come to know about us?</td>
                        <td style="padding: 8px; border: 1px solid #ddd;">' . htmlspecialchars($form_data['know_about_us']) . '</td>
                    </tr>';
            }

            $email_msg .= '</table>

                <h3 style="color: #39234a; margin-top: 30px;">UTM Tracking Information</h3>
                <table style="width: 100%; border-collapse: collapse; margin-bottom: 20px;">
                    <tr style="background-color: #e7f0f8;">
                        <td style="padding: 8px; border: 1px solid #ddd; font-weight: bold; width: 200px;">UTM Source:</td>
                        <td style="padding: 8px; border: 1px solid #ddd;">' . $utm_source . '</td>
                    </tr>
                    <tr>
                        <td style="padding: 8px; border: 1px solid #ddd; font-weight: bold;">UTM Medium:</td>
                        <td style="padding: 8px; border: 1px solid #ddd;">' . $utm_medium . '</td>
                    </tr>
                    <tr style="background-color: #e7f0f8;">
                        <td style="padding: 8px; border: 1px solid #ddd; font-weight: bold;">UTM Campaign:</td>
                        <td style="padding: 8px; border: 1px solid #ddd;">' . $utm_campaign . '</td>
                    </tr>
                    <tr>
                        <td style="padding: 8px; border: 1px solid #ddd; font-weight: bold;">UTM Term (Keyword):</td>
                        <td style="padding: 8px; border: 1px solid #ddd;">' . $utm_term . '</td>
                    </tr>
                    <tr style="background-color: #e7f0f8;">
                        <td style="padding: 8px; border: 1px solid #ddd; font-weight: bold;">UTM Content:</td>
                        <td style="padding: 8px; border: 1px solid #ddd;">' . $utm_content . '</td>
                    </tr>
                    <tr>
                        <td style="padding: 8px; border: 1px solid #ddd; font-weight: bold;">UTM ID:</td>
                        <td style="padding: 8px; border: 1px solid #ddd;">' . $utm_id . '</td>
                    </tr>
                    <tr style="background-color: #e7f0f8;">
                        <td style="padding: 8px; border: 1px solid #ddd; font-weight: bold;">Referer Domain:</td>
                        <td style="padding: 8px; border: 1px solid #ddd;">' . htmlspecialchars($referer_domain_display) . '</td>
                    </tr>
                    <tr>
                        <td style="padding: 8px; border: 1px solid #ddd; font-weight: bold;">Referer URL:</td>
                        <td style="padding: 8px; border: 1px solid #ddd;">' . ($referer != 'N/A' && strpos($referer, 'Direct') === false ? '<a href="' . htmlspecialchars($referer) . '" target="_blank">' . $referer . '</a>' : htmlspecialchars($referer)) . '</td>
                    </tr>
                    <tr style="background-color: #e7f0f8;">
                        <td style="padding: 8px; border: 1px solid #ddd; font-weight: bold;">IP Address:</td>
                        <td style="padding: 8px; border: 1px solid #ddd;">' . $ip_address . '</td>
                    </tr>
                    <tr>
                        <td style="padding: 8px; border: 1px solid #ddd; font-weight: bold;">Submission Time:</td>
                        <td style="padding: 8px; border: 1px solid #ddd;">' . $submission_time . '</td>
                    </tr>
                </table>

                <p style="margin-top: 20px; color: #666; font-size: 12px;">This is an automated notification from ' . htmlspecialchars($site_name) . ' website tracking system.</p>
            </div>';

            // Send email using email_model (it's autoloaded, but verify it exists)
            if (!isset($this->email_model)) {
                $this->load->model('email_model');
            }
            
            log_message('info', 'Calling email_model->sent_simple_mail() with email: ' . $notification_email);
            
            $email_result = $this->email_model->sent_simple_mail($email_msg, $notification_email, $subject);
            
            $this->log_website_notification(array_merge($this->notification_context_to_log_fields($context), array(
                'channel' => 'email', 'event_type' => 'tracking_email', 'provider' => 'zeptomail',
                'template_name' => $subject, 'recipient' => $notification_email,
                'recipient_name' => isset($form_data['parent_name']) ? $form_data['parent_name'] : null,
                'status' => $email_result ? 'sent' : 'failed',
                'error_message' => $email_result ? null : 'ZeptoMail send failed',
            )));

            if (!$email_result) {
                log_message('error', 'Tracking notification email FAILED to send to: ' . $notification_email . ' | Form Type: ' . $form_type);
                log_message('error', 'Check application/logs/ for detailed email error messages');
                return false;
            }
            
            log_message('info', '✅ Tracking notification email sent successfully to: ' . $notification_email . ' | Form Type: ' . $form_type);
            return true;
        } catch (Exception $e) {
            $this->log_website_notification(array_merge($this->notification_context_to_log_fields($context), array(
                'channel' => 'email', 'event_type' => 'tracking_email', 'provider' => 'zeptomail',
                'template_name' => $subject, 'recipient' => isset($notification_email) ? $notification_email : '',
                'status' => 'failed', 'error_message' => $e->getMessage(),
            )));
            log_message('error', 'Failed to send tracking notification email: ' . $e->getMessage());
            return false;
        }
    }
}