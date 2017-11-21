<?php 
/**
* 
*/
class penyedia extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('penyedia_model');

		if(!$this->session->userdata('logined') || $this->session->userdata('logined') != true)
		{
			redirect('/');
		}

	}
	function index()
	{
		$data['penyedia']=$this->penyedia_model->ambil_data();
		$this->load->view('penyedia/penyedia_list',$data);

	}

	function tambah()
	{
		$data=array(
			'nama_penyedia'=>set_value('nama_penyedia'),
			'alamat_penyedia'=>set_value('alamat_penyedia'),
			'id_penyedia'=>set_value('id_penyedia'),
			'button'=>'Tambah',
			'action'=>site_url('penyedia/tambah_aksi'),

			);
		$this->load->view('penyedia/penyedia_form',$data);
}

function tambah_aksi()
{
	$data=array(
			'nama_penyedia'=>$this->input->post('nama_penyedia'),
			'alamat_penyedia'=>$this->input->post('alamat_penyedia'),
			
			);
	$this->penyedia_model->tambah_data($data);
	redirect(site_url('penyedia'));
}
function delete($id)
{
	$this->penyedia_model->hapus_data($id);
	redirect(site_url('penyedia'));

}

function edit($id)
{
$pyd=$this->penyedia_model->ambil_data_id($id);	
$data=array(
			'nama_penyedia'=>set_value('nama_penyedia',$pyd->nama_penyedia),
			'alamat_penyedia'=>set_value('alamat_penyedia',$pyd->alamat_penyedia),
			'id_penyedia'=>set_value('id_penyedia',$pyd->id_penyedia),
			'button'=>'Edit',
			'action'=>site_url('penyedia/edit_aksi'),

			);
$this->load->view('penyedia/penyedia_form',$data);
}
function edit_aksi()
{
	$data=array(
			'nama_penyedia'=>$this->input->post('nama_penyedia'),
			'alamat_penyedia'=>$this->input->post('alamat_penyedia'),
			
			);
	$id=$this->input->post('id');
	$this->penyedia_model->edit_data($id,$data);
	redirect(site_url('penyedia'));

}

}
 ?>