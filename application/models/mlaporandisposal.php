<?php

class mlaporandisposal extends CI_Model{

	var $tabel = 'master_aset';


	function __construct(){
		parent::__construct();
	}

	function getAllLaporanDisposal(){
		$this->db->select('master_aset.kode_aset,master_aset.nama_aset,master_aset.pic,master_aset.deskripsi_aset,
							master_aset.tanggal_perolehan,master_aset.harga_perolehan,
							kategori_aset.nama_kategori_aset,status_aset.nama_status_aset');
		$this->db->from('master_aset,kategori_aset,status_aset');
		$this->db->where('master_aset.kode_kategori_aset=kategori_aset.kode_kategori_aset 
							AND master_aset.kode_status_aset=status_aset.kode_status_aset');
		$query = $this->db->get();
		if($query->num_rows() > 0){
			return $query->result();
		}
	}
}


?>