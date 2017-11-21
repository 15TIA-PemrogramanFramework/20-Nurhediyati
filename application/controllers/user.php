<?php 
/**
* 
*/
class user extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');

		if(!$this->session->userdata('logined') || $this->session->userdata('logined') != true)
		{
			redirect('/');
		}

	}
	function index()
	{
		$data['user']=$this->user_model->ambil_data();
		$this->load->view('user/user_list',$data);

	}

	function tambah()
	{
		$data=array(
			'user_name'=>set_value('user_name'),
			'password'=>set_value('password'),
			'status'=>set_value('status'),
			'button'=>'Tambah',
			'action'=>site_url('user/tambah_aksi'),

			);
		$this->load->view('user/user_form',$data);
}

function tambah_aksi()
{
	$data=array(
			'user_name'=>$this->input->post('user_name'),
			'password'=>$this->input->post('password'),
			'status'=>$this->input->post('status'),
			);
	$this->user_model->tambah_data($data);
	redirect(site_url('user'));
}
function delete($id)
{
	$this->user_model->hapus_data($id);
	redirect(site_url('user'));

}

function edit($id)
{
$u=$this->user_model->ambil_data_id($id);	
$data=array(
			'user_name'=>set_value('user_name',$u->user_name),
			'password'=>set_value('password',$u->password),
			'status'=>set_value('status',$u->status),
			'button'=>'Edit',
			'action'=>site_url('user/edit_aksi'),

			);
$this->load->view('user/user_form',$data);
}
function edit_aksi()
{
	$data=array(
			'user_name'=>$this->input->post('user_name'),
			'password'=>$this->input->post('password'),
			'status'=>$this->input->post('status'),
			);
	$id=$this->input->post('id');
	$this->user_model->edit_data($id,$data);
	redirect(site_url('user'));

}

}
 ?>