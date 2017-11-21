<?php 
/**
* 
*/
class karyawan extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('karyawan_model');

		if(!$this->session->userdata('logined') || $this->session->userdata('logined') != true)
		{
			redirect('/');
		}

	}
	function index()
	{
		$data['karyawan']=$this->karyawan_model->ambil_data();
		$this->load->view('karyawan/karyawan_list',$data);

	}

	function tambah()
	{
		$data=array(
			'nama_karyawan'=>set_value('nama_karyawan'),
			'notelp_karyawan'=>set_value('notelp_karyawan'),
			'alamat_karyawan'=>set_value('alamat_karyawan'),
			'id_karyawan'=>set_value('id_karyawan'),
			'button'=>'Tambah',
			'action'=>site_url('karyawan/tambah_aksi'),
			);
		$this->load->view('karyawan/karyawan_form',$data);
	}

	function tambah_aksi()
	{
		$data=array(
			'nama_karyawan'=>$this->input->post('nama_karyawan'),
			'notelp_karyawan'=>$this->input->post('notelp_karyawan'),
			'alamat_karyawan'=>$this->input->post('alamat_karyawan'),
			);
		$this->karyawan_model->tambah_data($data);
		redirect(site_url('karyawan'));
	}

	function delete($id)
	{
		$this->karyawan_model->hapus_data($id);
		redirect(site_url('karyawan'));

	}

	function edit($id)
	{
		$kry=$this->karyawan_model->ambil_data_id($id);	
		$data=array(
			'nama_karyawan'=>set_value('nama_karyawan',$kry->nama_karyawan),
			'notelp_karyawan'=>set_value('notelp_karyawan',$kry->notelp_karyawan),
			'alamat_karyawan'=>set_value('alamat_karyawan',$kry->alamat_karyawan),
			'id_karyawan'=>set_value('id_karyawan',$kry->id_karyawan),
			'button'=>'Edit',
			'action'=>site_url('karyawan/edit_aksi'),

			);
		$this->load->view('karyawan/karyawan_form',$data);
	}
	function edit_aksi()
	{
		$data=array(
			'nama_karyawan'=>$this->input->post('nama_karyawan'),
			'notelp_karyawan'=>$this->input->post('notelp_karyawan'),
			'alamat_karyawan'=>$this->input->post('alamat_karyawan'),
			);
		$id=$this->input->post('id');
		$this->karyawan_model->edit_data($id,$data);
		redirect(site_url('karyawan'));

	}

}
?>