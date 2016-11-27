<?php if(! defined('BASEPATH')) exit('No direct access allowed');

class perencanaan extends CI_Controller{


	function __construct(){
		parent::__construct();
		$this->load->model('mperencanaan');
		$this->load->helper('form','url','session');
    $this->load->library('pagination');
    $this->load->database();

	}

	 function getData(){	
    $jumlah_data = $this->mperencanaan->jumlah_data();
    $config['base_url'] = base_url().'index.php/perencanaan/getData/';
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
    $data['qdata'] = $this->mperencanaan->data($config['per_page'],$from);
    $this->load->view('vperencanaan',$data);
	}

	function tambahData(){
		if($this->input->post('submit')){
			$this->mperencanaan->tambah();
      $msg = "<div class='alert alert-success'> Data successfully inserted.</div>";
      $this->session->set_flashdata("msg", $msg); 
			redirect('perencanaan/getData');
		}
    else
    {
      $data['kategori'] = $this->mperencanaan->getKategori();
      $this->load->view('vformperencanaan',$data);
    }

		

	}
	
    function edit($id){
      $where = array('kode_aset' => $id);
      $data['edit'] = $this->mperencanaan->edit_data($where,'master_aset')->result();
      $data['kategori'] = $this->mperencanaan->getKategori();
      $this->load->view('vdetperencanaan',$data);
    }

   	function update(){
        $id = $this->input->post('kode_aset');
        $nama_aset = $this->input->post('nama_aset');
        $pic = $this->input->post('pic');
        $deskripsi_aset = $this->input->post('deskripsi_aset');
        $harga_perolehan = $this->input->post('harga_perolehan');
        $tanggal_perolehan = $this->input->post('tanggal_perolehan');
        $kode_kategori_aset = $this->input->post('kode_kategori_aset');
        $kode_status_aset = $this->input->post('kode_status_aset');

          $data = array(
          'nama_aset' => $nama_aset,
          'pic' => $pic,
          'deskripsi_aset' => $deskripsi_aset,
          'harga_perolehan' => $harga_perolehan,
          'tanggal_perolehan' => $tanggal_perolehan,
          'kode_kategori_aset' => $kode_kategori_aset,
          'kode_status_aset' => $kode_status_aset
          );

        $where = array(
          'kode_aset' => $id
        );

          $this->mperencanaan->update_data($where,$data,'master_aset');
          $msg1 = "<div class='alert alert-info'> Data updated successfully.</div>";
          $this->session->set_flashdata("msg1", $msg1); 
        redirect('perencanaan/getData');
      }

   	function delete($id){
    	  $where = array('kode_aset' => $id);
        $this->mperencanaan->delete($where,'master_aset');
         $msg2 = "<div class='alert alert-danger'> Data deleted successfully.</div>";
          $this->session->set_flashdata("msg2", $msg2); 
        redirect('perencanaan/getData');
      
	   }


    function cariData()
    {
        $keyword    =   $this->input->post('keyword');
        $data['qdata']    =   $this->mperencanaan->search($keyword);
        $this->load->view('vperencanaan',$data);
    }

    
}

?>