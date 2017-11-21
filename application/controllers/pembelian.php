<?php 
/**
* 
*/
class pembelian extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('pembelian_model');
		$this->load->model('barang_model');
		$this->load->model('karyawan_model');
		if(!$this->session->userdata('logined') || $this->session->userdata('logined') != true)
		{
			redirect('/');
		}

	}
	function index()
	{
		$data['pembelian']=$this->pembelian_model->ambil_data();
		$this->load->view('pembelian/pembelian_list',$data);

	}

	function tambah()
	{
		$data=array(
			'tanggal'=>set_value('tanggal'),
			'total_belanja'=>set_value('total_belanja'),
			'id_barang'=>set_value('id_barang'),
			'id_pembelian'=>set_value('id_pembelian'),
			'barang' => $this->barang_model->ambil_data(),
			'karyawan'=>$this->karyawan_model->ambil_data(),
			'button'=>'Tambah',
			'action'=>site_url('pembelian/tambah_aksi'),

			);
		$this->load->view('pembelian/pembelian_form',$data);
	}

	function tambah_aksi()
	{
		$data=array(
			'id_karyawan'=>$this->input->post('id_karyawan'),
			'tanggal'=>$this->input->post('tanggal'),
			'total_belanja'=>$this->input->post('total_belanja'),
			'id_barang'=>$this->input->post('id_barang'),
			);
		$this->pembelian_model->tambah_data($data);
		redirect(site_url('pembelian'));
	}
	function delete($id)
	{
		$this->pembelian_model->hapus_data($id);
		redirect(site_url('pembelian'));

	}

	function edit($id)
	{
		$pmb=$this->pembelian_model->ambil_data_id($id);	
		$data=array(
			'tanggal'=>set_value('tanggal',$pmb->tanggal),
			'total_belanja'=>set_value('total_belanja',$pmb->total_belanja),
			'id_barang'=>set_value('id_barang',$pmb->id_barang),
			'id_pembelian'=>set_value('id_pembelian',$pmb->id_pembelian),
			'barang' => $this->barang_model->ambil_data(),
			'karyawan'=>$this->karyawan_model->ambil_data(),
			'button'=>'Edit',
			'action'=>site_url('pembelian/edit_aksi'),

			);
		$this->load->view('pembelian/pembelian_form',$data);
	}
	function edit_aksi()
	{
		$data=array(
			'tanggal'=>$this->input->post('tanggal'),
			'total_belanja'=>$this->input->post('total_belanja'),
			'id_barang'=>$this->input->post('id_barang'),
			);
		$id=$this->input->post('id');
		$this->pembelian_model->edit_data($id,$data);
		redirect(site_url('pembelian'));

	}

}
?>