<?php 
/**
* 
*/
class barang extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('barang_model');
		$this->load->model('penyedia_model');
		if(!$this->session->userdata('logined') || $this->session->userdata('logined') != true)
		{
			redirect('/');
		}

	}
	function index()
	{
		$data['barang']=$this->barang_model->ambil_data();
		$this->load->view('barang/barang_list',$data);

	}

	function tambah()
	{
		$data=array(
			'nama_barang'=>set_value('nama_barang'),
			'jenis_barang'=>set_value('jenis_barang'),
			'id_barang'=>set_value('id_barang'),
			'id_penyedia'=>set_value('id_penyedia'),
			'penyedia' => $this->penyedia_model->ambil_data(),
			'button'=>'Tambah',
			'action'=>site_url('barang/tambah_aksi'),

			);
		$this->load->view('barang/barang_form',$data);
}

function tambah_aksi()
{
	$data=array(
			'nama_barang'=>$this->input->post('nama_barang'),
			'jenis_barang'=>$this->input->post('jenis_barang'),
			'id_penyedia'=>$this->input->post('id_penyedia'),
			);
	$this->barang_model->tambah_data($data);
	redirect(site_url('barang'));
}
function delete($id)
{
	$this->barang_model->hapus_data($id);
	redirect(site_url('barang'));

}

function edit($id)
{
$brg=$this->barang_model->ambil_data_id($id);	
$data=array(
			'nama_barang'=>set_value('nama_barang',$brg->nama_barang),
			'jenis_barang'=>set_value('jenis_barang',$brg->jenis_barang),
			'id_barang'=>set_value('id_barang',$brg->id_barang),
			'penyedia' => $this->penyedia_model->ambil_data(),
			'id_penyedia'=>set_value('id_penyedia',$brg->id_penyedia),
			'button'=>'Edit',
			'action'=>site_url('barang/edit_aksi'),

			);
$this->load->view('barang/barang_form',$data);
}
function edit_aksi()
{
	$data=array(
			'nama_barang'=>$this->input->post('nama_barang'),
			'jenis_barang'=>$this->input->post('jenis_barang'),
			'id_penyedia'=>$this->input->post('id_penyedia'),
			);
	$id=$this->input->post('id');
	$this->barang_model->edit_data($id,$data);
	redirect(site_url('barang'));

}

}
 ?>