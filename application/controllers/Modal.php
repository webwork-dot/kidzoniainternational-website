<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
 *  @author   : Creativeitem
 *  date    : 14 september, 2017
 *  Ekattor School Management System Pro
 *  http://codecanyon.net/user/Creativeitem
 *  http://support.creativeitem.com
 */
class Modal extends CI_Controller {


	function __construct()
  {
    parent::__construct();
    $this->load->database();
    $this->load->library('session');
    /*cache control*/
    $this->output->set_header('Last-Modified: ' . gmdate("D, d M Y H:i:s") . ' GMT');
    $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
    $this->output->set_header('Pragma: no-cache');
    $this->output->set_header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
  }

	function popup($page_name = '' , $param2 = '' , $param3 = '', $param4 = '', $param5 = ''){
		$logged_in_user_role 		= strtolower($this->session->userdata('role'));
		$page_data['param2']		=	$param2;
		$page_data['param3']		=	$param3;
		$page_data['param4']		=	$param4;
		$page_data['param5']		=	$param5;
		$this->load->view( 'backend/'.$logged_in_user_role.'/'.$page_name.'.php' ,$page_data);
	}
	
	function popup_front($page_name = '' , $param2 = '' , $param3 = '', $param4 = '', $param5 = ''){
		$page_data['param2']		=	$param2;
		$page_data['param3']		=	$param3;
		$page_data['param4']		=	$param4;
		$page_data['param5']		=	$param5;
		$enquiry_modals = array('modal_enquiry_now', 'modal_enquiry_download_brochure', 'modal_youtube_enq');
		if (in_array($page_name, $enquiry_modals)) {
			$this->load->model('crud_model');
			$page_data['class_list'] = $this->crud_model->get_kips_program_list();
			$page_data['branches'] = $this->crud_model->get_header_branches()->result_array();
		}
		$this->load->view( 'frontend/default/'.$page_name.'.php' ,$page_data);
	}
	
	function popup_media($page_name = '' , $param2 = '' , $param3 = '', $param4 = '', $param5 = ''){
		$page_data['param2']		=	$param2;
		$page_data['param3']		=	$param3;
		$page_data['param4']		=	$param4;
		$page_data['param5']		=	$param5;
		$this->load->view( 'frontend/default/user/'.$page_name.'.php' ,$page_data);
	}
}