<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class VerifyLogin extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('user_login','',TRUE);
	}

	function index()
	{
		$this->load->library('form_validation');

		$this->form_validation->set_rules('username','username','trim|required');
		$this->form_validation->set_rules('password', 'password', 'trim|required|callback_check_database');

		if($this->form_validation->run()==FALSE)
		{
			// Validasi Gagal, Arahkan Kembali Ke Login
			$this->load->view('login_view');
		}
		else
		{
			//Berhasil Login
			redirect('karyawan','refresh');
		}

	}

	function check_database($password)
	{
		$username = $this->input->post('username');

   //query the database
		$result = $this->user_login->login($username, $password);

		if($result)
		{
			$sess_array = array();
			foreach($result as $row)
			{
				$sess_array = array(
					'username' => $row->username
					);
				$this->session->set_userdata('logined', $sess_array);
				$this->session->set_userdata('username', $row->username);
				$this->session->set_userdata('status', $row->status);  
			}
			return TRUE;
		}
		else
		{
			$this->form_validation->set_message('check_database', 'Invalid username or password');
			return false;
		}
	}
}