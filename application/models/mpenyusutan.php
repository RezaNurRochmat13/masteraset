<?php

class mpenyusutan extends CI_Model{

	var $tabel = 'master_aset';


	function __construct(){
		parent::__construct();
	}

	function edit_data($where,$table){		
	return $this->db->get_where($table,$where);
	}

	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}	

	function susut($where,$table){		
	return $this->db->get_where($table,$where);
	}

	function susutkan($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}	

	function delete($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	function data($number,$offset){
		$this->db->select('penyusutan_aset.kode_aset,penyusutan_aset.nama_aset,penyusutan_aset.pic,penyusutan_aset.deskripsi_aset,
							penyusutan_aset.tanggal_susut,penyusutan_aset.harga_susut,penyusutan_aset.update_at,
							kategori_aset.nama_kategori_aset');
		$this->db->where('penyusutan_aset.kode_kategori_aset=kategori_aset.kode_kategori_aset');
		return $query = $this->db->get('penyusutan_aset,kategori_aset',$number,$offset)->result();		
	}
 
	function jumlah_data(){
		$this->db->select('penyusutan_aset.kode_aset,penyusutan_aset.nama_aset,penyusutan_aset.pic,penyusutan_aset.deskripsi_aset,
							penyusutan_aset.tanggal_susut,penyusutan_aset.harga_susut,penyusutan_aset.update_at,
							kategori_aset.nama_kategori_aset');
		$this->db->where('penyusutan_aset.kode_kategori_aset=kategori_aset.kode_kategori_aset');
		return $this->db->get('penyusutan_aset,kategori_aset')->num_rows();
	}

	function search($keyword)
    {
    	$this->db->select('penyusutan_aset.kode_aset,penyusutan_aset.nama_aset,penyusutan_aset.pic,penyusutan_aset.deskripsi_aset,
							penyusutan_aset.tanggal_susut,penyusutan_aset.update_at,
							penyusutan_aset.harga_susut,kategori_aset.nama_kategori_aset');
		$this->db->where('penyusutan_aset.kode_kategori_aset=kategori_aset.kode_kategori_aset');
        $this->db->like('penyusutan_aset.nama_aset',$keyword);
        $query  =   $this->db->get('penyusutan_aset,kategori_aset');
        return $query->result();
    }
    function getKategori(){

		$this->db->select('*');
		$this->db->from('kategori_aset');
		$query = $this->db->get();
		if($query->num_rows() > 0){
			return $query->result();
		}
	}
}


?>