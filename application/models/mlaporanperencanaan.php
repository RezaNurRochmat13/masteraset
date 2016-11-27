<?php

class mlaporanperencanaan extends CI_Model{

	function __construct(){
		parent::__construct();
	}

	
	function data($number,$offset){
		$this->db->select('master_aset.kode_aset,master_aset.nama_aset,master_aset.pic,master_aset.deskripsi_aset,
							master_aset.tanggal_perolehan,master_aset.harga_perolehan,
							kategori_aset.nama_kategori_aset,status_aset.nama_status_aset');
		$this->db->where('master_aset.kode_kategori_aset=kategori_aset.kode_kategori_aset 
							AND master_aset.kode_status_aset=status_aset.kode_status_aset');
		return $query = $this->db->get('master_aset,kategori_aset,status_aset',$number,$offset)->result();		
	}
 
	function jumlah_data(){
		$this->db->select('master_aset.kode_aset,master_aset.nama_aset,master_aset.pic,master_aset.deskripsi_aset,
							master_aset.tanggal_perolehan,master_aset.harga_perolehan,
							kategori_aset.nama_kategori_aset,status_aset.nama_status_aset');
		$this->db->where('master_aset.kode_kategori_aset=kategori_aset.kode_kategori_aset 
							AND master_aset.kode_status_aset=status_aset.kode_status_aset');
		return $this->db->get('master_aset,kategori_aset,status_aset')->num_rows();
	}
}


?>