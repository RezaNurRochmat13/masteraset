<?php

class mchart extends CI_Model{

	public function jumlah_aset(){

		$this->db->select('COUNT(kategori_aset.nama_kategori_aset),kategori_aset.nama_kategori_aset');
		$this->db->where('master_aset.kode_kategori_aset=kategori_aset.kode_kategori_aset');
		$this->db->group_by('kategori_aset.nama_kategori_aset');
		$query  =$this->db->get('master_aset,kategori_aset');
		return $query->result();
	}

    function getTanggal(){
        $query=$this->db->query("SELECT DISTINCT YEAR(tanggal_perolehan) AS year FROM master_aset ORDER BY tanggal_perolehan");
        return $query->result();
    }

	function report($filter){
        $query = $this->db->query("SELECT COUNT(kategori_aset.nama_kategori_aset) AS jumlah,kategori_aset.nama_kategori_aset 
            from master_aset,kategori_aset WHERE master_aset.kode_kategori_aset=kategori_aset.kode_kategori_aset 
            and tanggal_perolehan LIKE '$filter%' GROUP BY kategori_aset.kode_kategori_aset");
        return $query->result(); 
      /*  if($query->num_rows() > 0){
            foreach($query->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }*/
    }

    function report_total(){
        $query = $this->db->query("SELECT COUNT(kategori_aset.nama_kategori_aset) AS jumlah,kategori_aset.nama_kategori_aset 
            from master_aset,kategori_aset WHERE master_aset.kode_kategori_aset=kategori_aset.kode_kategori_aset 
            GROUP BY kategori_aset.kode_kategori_aset");
        return $query->result(); 
      /*  if($query->num_rows() > 0){
            foreach($query->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }*/
    }
}


?>