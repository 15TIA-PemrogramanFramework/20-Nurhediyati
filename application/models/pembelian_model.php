<?php 
/**
* 
*/
class pembelian_model extends CI_Model
{
	
	public $nama_table ='pembelian';
	public $id         ='id_pembelian';
	public $order	   ='DESC';

	function __construct()
	{
		parent::__construct();
	}

	//untuk mengambil data seluruh mahasiswa
	function ambil_data(){
		$this->db->distinct();
 		$this->db->select('p.id_pembelian, b.nama_barang, p.tanggal, p.total_belanja , k.nama_karyawan');
 		$this->db->from('pembelian p');
 		$this->db->join('barang b', 'p.id_barang = b.id_barang');
 		$this->db->join('karyawan k', 'k.id_karyawan = p.id_karyawan');
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