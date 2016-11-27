<?php if(! defined('BASEPATH')) exit('No direct access allowed');

class penyusutan extends CI_Controller{


	public function __construct(){
		parent::__construct();
		$this->load->model('mpenyusutan');
		$this->load->helper('form','url');
    $this->load->library('pagination');
    $this->load->database();
	}

	public function getData()
	{
		$jumlah_data = $this->mpenyusutan->jumlah_data();
    $config['base_url'] = base_url().'index.php/penyusutan/getData/';
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
    $data['qdata'] = $this->mpenyusutan->data($config['per_page'],$from);
    $this->load->view('vpenyusutan',$data);
	}

	

    function susut($id){
      $where=array('kode_aset' => $id);
      $data['susut'] = $this->mpenyusutan->susut($where,'penyusutan_aset')->result();
      $data['kategori'] = $this->mpenyusutan->getKategori();
      $this->load->view('vdetsusut',$data);

    }

    function susutkan(){
        $id = $this->input->post('kode_aset');
        $nama_aset = $this->input->post('nama_aset');
        $pic = $this->input->post('pic');
        $deskripsi_aset = $this->input->post('deskripsi_aset');
        $harga_susut = $this->input->post('harga_susut');
        $tanggal_susut = $this->input->post('tanggal_susut');
        $kode_kategori_aset = $this->input->post('kode_kategori_aset');
        $update_at = $this->input->post('update_at');

          $data = array(
          'nama_aset' => $nama_aset,
          'pic' => $pic,
          'deskripsi_aset' => $deskripsi_aset,
          'harga_susut' => ($harga_susut * 0.98),
          'tanggal_susut' => date("Y-m-d", strtotime("+1 years", strtotime($tanggal_susut))),
          'kode_kategori_aset' => $kode_kategori_aset,
          'update_at' => date("Y-m-d")
          );

        $where = array(
          'kode_aset' => $id
        );

        $this->mpenyusutan->susutkan($where,$data,'penyusutan_aset');
        $msg1 = "<div class='alert alert-info'> Susut data successfully.</div>";
        $this->session->set_flashdata("msg1", $msg1); 
        redirect('penyusutan/getData');

    } 

    function edit($id){
      $where = array('kode_aset' => $id);
      $data['edit'] = $this->mpenyusutan->edit_data($where,'penyusutan_aset')->result();
      $data['kategori'] = $this->mpenyusutan->getKategori();
      $this->load->view('vdetpenyusutan',$data);
    }

   	function update(){
        $id = $this->input->post('kode_aset');
        $nama_aset = $this->input->post('nama_aset');
        $pic = $this->input->post('pic');
        $deskripsi_aset = $this->input->post('deskripsi_aset');
        $harga_susut = $this->input->post('harga_susut');
        $tanggal_susut = $this->input->post('tanggal_susut');
        $kode_kategori_aset = $this->input->post('kode_kategori_aset');
        $update_at = $this->input->post('update_at');

          $data = array(
          'nama_aset' => $nama_aset,
          'pic' => $pic,
          'deskripsi_aset' => $deskripsi_aset,
          'harga_susut' => $harga_susut,
          'tanggal_susut' => $tanggal_susut,
          'kode_kategori_aset' => $kode_kategori_aset,
          'update_at' => date("Y-m-d")
          );

        $where = array(
          'kode_aset' => $id
        );

        $this->mpenyusutan->update_data($where,$data,'penyusutan_aset');
        $msg1 = "<div class='alert alert-info'> Registered data successfully.</div>";
        $this->session->set_flashdata("msg1", $msg1); 
        redirect('penyusutan/getData');
      }

    

   	function delete($id){
    	  $where = array('kode_aset' => $id);
        $this->mpenyusutan->delete($where,'penyusutan_aset');
        $msg2 = "<div class='alert alert-danger'> Disposal data successfully.</div>";
        $this->session->set_flashdata("msg2", $msg2); 
        redirect('penyusutan/getData');
      
	   }

     function cariData()
    {
        $keyword    =   $this->input->post('keyword');
        $data['qdata']    =   $this->mpenyusutan->search($keyword);
        $this->load->view('vpenyusutan',$data);
    }


}
?>