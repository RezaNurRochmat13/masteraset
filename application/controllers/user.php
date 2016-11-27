<?php

class user extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('muser');
		$this->load->helper('form','url','session');
		$this->load->library('pagination');
		$this->load->database();
	}

	public function getData(){
		$jumlah_data = $this->muser->jumlah_data();
	    $config['base_url'] = base_url().'index.php/user/getData/';
	    $config['total_rows'] = $jumlah_data;
	    $config['per_page'] = 5;
	    $from = $this->uri->segment(3);

	    //Konfigurasi pagination bootrap
	    $config['full_tag_open'] = '<ul class="pagination">';
	    $config['full_tag_close'] = '</ul>';
	    $config['first_link'] = true;
	    $config['last_link'] = false;
	    $config['first_tag_open'] = '<li>';
	    $config['first_tag_close'] = '</li>';
	    $config['prev_link'] = '&laquo';
	    $config['prev_tag_open'] = '<li class="prev">';
	    $config['prev_tag_close'] = '</li>';
	    $config['next_link'] = '&raquo';
	    $config['next_tag_open'] = '<li>';
	    $config['next_tag_close'] = '</li>';
	    $config['last_tag_open'] = '<li>';
	    $config['last_tag_close'] = '</li>';
	    $config['cur_tag_open'] = '<li class="active"><a href="#">';
	    $config['cur_tag_close'] = '</a></li>';
	    $config['num_tag_open'] = '<li>';
	    $config['num_tag_close'] = '</li>';

	    $this->pagination->initialize($config);   
	    $data['quser'] = $this->muser->data($config['per_page'],$from);
		$this->load->view('vpengguna',$data);
	}

	public function tambahData(){
		if($this->input->post('submit')){
			$this->muser->tambah();
			$msg = "<div class='alert alert-success'> Data successfully inserted.</div>";
        	$this->session->set_flashdata("msg", $msg); 
			redirect('user/getData');
		}

		$this->load->view('vformpengguna');
	}

	public function edit($id_pengguna){
		$where = array('id_user' => $id_pengguna);
		$data['edit_pengguna'] = $this->muser->edit_data($where,'user')->result();
		$this->load->view('vdetpengguna',$data);
	}

	public function update(){
		$id_pengguna=$this->input->post('id_user');
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$data = array(
			'username' => $username,
			'password' => MD5($password)
			);

		$where = array(

			'id_user' => $id_pengguna
			);

		$this->muser->update_data($where,$data,'user');
		$msg1 = "<div class='alert alert-info'> Password successfully updated .</div>";
        $this->session->set_flashdata("msg1", $msg1); 
		redirect('user/getData');
	}

	public function delete($id){
		$where = array('id_user' => $id);
		$this->muser->delete($where,'user');
		$msg2 = "<div class='alert alert-danger'> Data successfully deleted.</div>";
        $this->session->set_flashdata("msg2", $msg2); 
		redirect('user/getData');
	}
}

?>