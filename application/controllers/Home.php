<?php

defined('BASEPATH') or exit('No direct script access allowed');
date_default_timezone_set("Asia/Jakarta");

class Home extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url', 'inflector', 'file'));
		$this->load->library('form_validation');
		$this->load->model(array('user', 'Admin_model'));
	}

	public function index()
	{
		if ($this->session->userdata('logged_in')) {
			$session_data 		= $this->session->userdata('logged_in');
			$data['nama'] 		= $session_data['nama'];
			$data['level'] 		= $session_data['level'];
			$data['status'] 	= $session_data['status'];
			$data['tahun']		= $session_data['tahun'];
			$data['title'] = "Home";
			$data['aktif'] 				= 'class="active treemenu"';
			$data['xaktif'] 			= 'class="active"';
			$this->load->view('pages/header', $data);
			$this->load->view('pages/navigation', $data);
			$this->load->view('home/index', $data);
			$this->load->view('pages/footer');
		} else {
			redirect('login', 'refresh');
		}
	}


	function logout()
	{
		$this->session->unset_userdata('logged_in');
		session_destroy();
		redirect('login', 'refresh');
	}


	public function change_password()
	{
		if ($this->session->userdata('logged_in')) {
			$session_data 		= $this->session->userdata('logged_in');
			$data['username'] 	= $session_data['username'];
			$this->load->view('login/change_password', $data);
		} else {
			$data['url'] = base_url('index.php/login');
			$this->load->view('pages/ajax_redirect', $data);
		}
	}
}
