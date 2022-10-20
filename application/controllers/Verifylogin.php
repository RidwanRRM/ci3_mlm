<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class VerifyLogin extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('user', '', TRUE);
		$this->load->model('Admin_model');
		$this->load->helper(array('form', 'url'));
	}

	function index()
	{
		//This method will have the credentials validation
		$this->load->library('form_validation');
		$data['AllUser'] = $this->Admin_model->getLoginGroup();

		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|callback_check_database');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('login/login_view', $data);
		} elseif ($this->form_validation->run() == TRUE) {
			if ($this->input->post('token') != $this->session->csrf_token || !$this->input->post('token') || !$this->session->csrf_token) {
				$this->session->unset_userdata('csrf_token');
				$this->output->set_status_header(403);
				show_error('Token salah, silakan tekan tombol kembali pada browser anda');
				return false;
			}
			if ($this->session->userdata('logged_in')) {
				$session_data         = $this->session->userdata('logged_in');
				$data['level']         = $session_data['level'];
				$data['id_users']         = $session_data['id_users'];
				$level = $data['level'];
				if ($level == 0) {
					redirect('admin/Users', 'refresh');
				} else {
					redirect('admin/registrasi_member', 'refresh');
				}
			}
		}
	}

	function check_database($password)
	{
		//Field validation succeeded.  Validate against database
		$username = $this->input->post('username');
		$tahun = $this->input->post('tahun');
		//query the database
		$result = $this->user->login($username, $password);

		if ($result) {
			$sess_array = array();
			foreach ($result as $row) {
				$sess_array = array(
					'username' => $row->username,
					'nama' => $row->nama,
					'level' => $row->level,
					'id_users' => $row->id_users,
					'parent' => $row->parent,
					'tahun' => $tahun,
					'status' => $row->status
				);
				$this->session->set_userdata('logged_in', $sess_array);
			}
			return TRUE;
		} else {
			$cresult = $this->user->cekuser($username);
			if ($cresult) {
				$this->form_validation->set_message('check_database', 'Invalid password');
			} else {
				$this->form_validation->set_message('check_database', 'Invalid username');
			}
			return FALSE;
		}
	}
	function new_password()
	{
		if ($this->session->userdata('logged_in')) {
			$session_data         = $this->session->userdata('logged_in');
			$data['level']        = $session_data['level'];
			$data['username']     = $session_data['username'];
			$data['tahun']        = $session_data['tahun'];
			// $data['id_users']        = $session_data['id_users'];
			$this->load->library('form_validation');

			$this->form_validation->set_rules('username', 'Username', 'trim|required');
			$this->form_validation->set_rules('password', 'Password', 'trim|required', array('required' => 'You have not provided a %s.'));
			$this->form_validation->set_rules('npassword', 'Retype Password', 'trim|required|matches[password]', array('required' => 'You have not provided a %s.', 'matches' => 'Retype password not same with password'));
			$tahun = $data['tahun'];
			$level = $data['level'];
			$pass = $this->input->post('password');
			$npass = $this->input->post('npassword');

			if ($this->form_validation->run() == FALSE) {
				$data = array();
				$data['username']         = $session_data['username'];
				// $data['xusername'] = $data['username'];
				$this->load->view('login/change_password', $data);
				// redirect('home/change_password', 'refresh');
			} else {
				$item = array(
					'username' => $this->input->post('username'),
					'password' => md5($this->input->post('password')),
					'lup' => date("Y-m-d H:i:s")
				);
				// $this->user->inslogin($item);
				$this->session->set_flashdata('flash', 'Password berhasil diubah!');
				$this->Admin_model->ubahPasswordByUser($data['username'], $item);

				if ($level == 1) {
					$data['url'] = base_url('index.php/admin/users');
				} else if ($level == 2) {
					$data['url'] = base_url('index.php/notaris/monitoring');
				} else if ($level == 3) {
					$data['url'] = base_url('index.php/perbankan/monitoring_prioritas');
				}
				$this->load->view('pages/ajax_redirect', $data);
			}
		}
	}
}
