<?php


class muser extends CI_Model{


	function data($number,$offset){
		$this->db->select('*');
		return $query = $this->db->get('user',$number,$offset)->result();		
	}
 
	function jumlah_data(){
		$this->db->select('*');
		return $this->db->get('user')->num_rows();
	}

	function tambah(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$data = array(
			'username' => $username,
			'password' => MD5($password)
			);

		$this->db->insert('user',$data);

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
}



?>