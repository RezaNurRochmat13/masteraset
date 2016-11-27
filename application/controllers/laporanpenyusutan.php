<?php if(! defined('BASEPATH')) exit('No direct access allowed');

class laporanpenyusutan extends CI_Controller{


	public function __construct(){
		parent::__construct();
		$this->load->model('mlaporanpenyusutan');
		$this->load->helper('form','url');
		$this->load->library('pagination');
		$this->load->database();
	}

	public function getLaporanPenyusutan()
	{
		$jumlah_data = $this->mlaporanpenyusutan->jumlah_data();
	    $config['base_url'] = base_url().'index.php/laporanpenyusutan/getLaporanPenyusutan/';
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
	    $data['qlaporanpenyusutan'] = $this->mlaporanpenyusutan->data($config['per_page'],$from);
		$this->load->view('vlaporanpenyusutan',$data);
	}
}
?>