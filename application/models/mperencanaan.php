<?php

class mperencanaan extends CI_Model{

	function __construct(){
		parent::__construct();
	}

	function getAllData(){
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

	function getAllKategori(){
		$this->db->select('*');
		$this->db->from('kategori_aset');

		$query = $this->db->get();
		if($query->num_rows() > 0){
			return $query->result();
		}
	}

	function tambah(){
		$kode_aset = $this->input->post('kode_aset');
		$nama_aset = $this->input->post('nama_aset');
		$pic = $this->input->post('pic');
		$deskripsi_aset = $this->input->post('deskripsi_aset');
		$harga_perolehan = $this->input->post('harga_perolehan');
		$tanggal_perolehan = $this->input->post('tanggal_perolehan');
		$kode_kategori_aset = $this->input->post('kode_kategori_aset');
		$kode_status_aset = $this->input->post('kode_status_aset');
		$kode_penyusutan = $this->input->post('kode_penyusutan');
		$tanggal_susut=$this->input->post('tanggal_perolehan');
		$harga_susut=$this->input->post('harga_perolehan');
		/*$tanggal_susut = date("Y-m-d", strtotime("+1 years", strtotime($tanggal_perolehan)));
		$harga_susut = ($harga_perolehan * 0.2);
*/

			$data = array(
			'kode_aset' => $kode_aset,
			'nama_aset' => $nama_aset,
			'pic' => $pic,
			'deskripsi_aset' => $deskripsi_aset,
			'harga_perolehan' => $harga_perolehan,
			'tanggal_perolehan' => $tanggal_perolehan,
			'kode_kategori_aset' => $kode_kategori_aset,
			'kode_status_aset' => $kode_status_aset
			);
			$this->db->insert('master_aset',$data);
			$id = $this->db->insert_id();

			$data1 = array(
			'kode_aset' => $kode_aset,
			'nama_aset' => $nama_aset,
			'pic' => $pic,
			'deskripsi_aset' => $deskripsi_aset,
			'harga_susut' => $harga_susut,
			'tanggal_susut' => $tanggal_susut,
			'kode_kategori_aset' => $kode_kategori_aset

		
			);
			$this->db->insert('penyusutan_aset',$data1);

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

	function search($keyword)
    {
    	$this->db->select('master_aset.kode_aset,master_aset.nama_aset,master_aset.pic,master_aset.deskripsi_aset,
							master_aset.tanggal_perolehan,master_aset.harga_perolehan,
							kategori_aset.nama_kategori_aset,status_aset.nama_status_aset');
		$this->db->where('master_aset.kode_kategori_aset=kategori_aset.kode_kategori_aset 
							AND master_aset.kode_status_aset=status_aset.kode_status_aset');
        $this->db->like('master_aset.nama_aset',$keyword);
        $query  =   $this->db->get('master_aset,kategori_aset,status_aset');
        return $query->result();
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