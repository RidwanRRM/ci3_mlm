<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->model('Admin_model');
	}

	function index()
	{
		$data['title'] = "Sistem Informasi Notaris";
		$data['AllUser'] = $this->Admin_model->getLoginGroup();
		$this->load->view('login/login_view', $data);
	}

	function change_pass()
	{
		$this->load->view('login/change_password');
	}
}
