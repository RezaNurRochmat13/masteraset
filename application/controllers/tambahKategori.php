<?php

class tambahKategori extends CI_Controller{

	function __construct(){

		parent::__construct();
		$this->load->model('tambahKategoriAset');
		$this->load->helper('form','url');
    $this->load->library('pagination');
    $this->load->database();

	}

	function tambahKategori(){
		if($this->input->post('submit')){
			$this->tambahKategoriAset->tambah();
		$msg = "<div class='alert alert-success'> Data successfully inserted.</div>";
        $this->session->set_flashdata("msg", $msg); 
			redirect('tambahKategori/getKategori');
			
		}

		$this->load->view('vformtambahkategori');

	}

	 function getKategori()
	{
		$jumlah_data = $this->tambahKategoriAset->jumlah_data();
    $config['base_url'] = base_url().'index.php/tambahKategori/getKategori/';
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
    $data['qkategori'] = $this->tambahKategoriAset->data($config['per_page'],$from);
    $this->load->view('vkategoriaset',$data);
	}

	function edit($id){
      $where = array('kode_kategori_aset' => $id);
      $data['edit_kategori'] = $this->tambahKategoriAset->edit_data($where,'kategori_aset')->result();
      $this->load->view('vdetkategori',$data);
    }

   	function update(){
        $id = $this->input->post('kode_kategori_aset');
        $nama_kategori_aset = $this->input->post('nama_kategori_aset');

          $data = array(
          'nama_kategori_aset' => $nama_kategori_aset
          );

        $where = array(
          'kode_kategori_aset' => $id
        );

        $this->tambahKategoriAset->update_data($where,$data,'kategori_aset');
         $msg1 = "<div class='alert alert-info'> Data updated successfully.</div>";
          $this->session->set_flashdata("msg1", $msg1); 
        redirect('tambahKategori/getKategori');
      }

   	function delete($id){
    	  $where = array('kode_kategori_aset' => $id);
        $this->tambahKategoriAset->delete($where,'kategori_aset');
        $msg2 = "<div class='alert alert-danger'> Data deleted successfully.</div>";
          $this->session->set_flashdata("msg2", $msg2); 
        redirect('tambahKategori/getKategori');
      
	   }

}





?>