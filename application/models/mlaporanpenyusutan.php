<?php

class mlaporanpenyusutan extends CI_Model{

	var $tabel = 'master_aset';


	function __construct(){
		parent::__construct();
	}


	function data($number,$offset){
		$this->db->select('penyusutan_aset.kode_aset,penyusutan_aset.nama_aset,penyusutan_aset.pic,penyusutan_aset.deskripsi_aset,
							penyusutan_aset.tanggal_susut,penyusutan_aset.harga_susut,
							kategori_aset.nama_kategori_aset');
		$this->db->where('penyusutan_aset.kode_kategori_aset=kategori_aset.kode_kategori_aset');
		return $query = $this->db->get('penyusutan_aset,kategori_aset',$number,$offset)->result();		
	}
 
	function jumlah_data(){
		$this->db->select('penyusutan_aset.kode_aset,penyusutan_aset.nama_aset,penyusutan_aset.pic,penyusutan_aset.deskripsi_aset,
							penyusutan_aset.tanggal_susut,penyusutan_aset.harga_susut,
							kategori_aset.nama_kategori_aset');
		$this->db->where('penyusutan_aset.kode_kategori_aset=kategori_aset.kode_kategori_aset');
		return $this->db->get('penyusutan_aset,kategori_aset')->num_rows();
	}
}


?>