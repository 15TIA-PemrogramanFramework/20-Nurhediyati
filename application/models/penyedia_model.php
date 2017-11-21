<?php 
/**
* 
*/
class penyedia_model extends CI_Model
{
	
	public $nama_table ='penyedia';
	public $id         ='id_penyedia';
	public $order	   ='DESC';

	function __construct()
	{
		parent::__construct();
	}

	//untuk mengambil data seluruh mahasiswa
	function ambil_data(){
		$this->db->order_by($this->id,$this->order);
		return $this->db->get($this->nama_table)->result();

	}

	function ambil_data_id($id){
		$this->db->where($this->id,$id);
		return $this->db->get($this->nama_table)->row();
	}

	function cek_login($username,$password){
		$this->db->where('nama',$username);
		$this->db->where('prodi',$password);
		return $this->db->get($this->nama_table)->row();
	}

	//untuk insert data seluruh mahasiswa
	function tambah_data($data){
		 $this->db->insert($this->nama_table,$data);
		 return $this->db->get($this->nama_table)->result();
		
	}

	//untuk hapus data seluruh mahasiswa
	function hapus_data($id){
		 $this->db->where($this->id,$id);
		 $this->db->delete($this->nama_table);
	
}

	function edit_data($id,$data){
		 $this->db->where($this->id,$id);
		 $this->db->update($this->nama_table,$data);
}
}
 ?>