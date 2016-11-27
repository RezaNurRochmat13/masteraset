<?php


class tambahKategoriAset extends CI_Model{

	var $tabel = 'kategori_aset';

	function getAllKategori(){
		$this->db->from($this->tabel);
		$query = $this->db->get();

		if($query->num_rows() > 0){
			return $query->result();
		}
	}

	function tambah(){
		$kode_kategori_aset = $this->input->post('kode_kategori_aset');
		$nama_kategori_aset = $this->input->post('nama_kategori_aset');

		$data = array(
			'kode_kategori_aset' => $kode_kategori_aset,
			'nama_kategori_aset' => $nama_kategori_aset
			);

		$this->db->insert('kategori_aset',$data);

	}

	function edit_data($where,$table){		
	return $this->db->get_where($table,$where);
	}

	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}	
	function delete($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	function data($number,$offset){
		return $query = $this->db->get('kategori_aset',$number,$offset)->result();		
	}
 
	function jumlah_data(){
		return $this->db->get('kategori_aset')->num_rows();
	}
}



?>