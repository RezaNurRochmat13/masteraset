<?php if(! defined('BASEPATH')) exit('No direct access allowed');

class grafikaset extends CI_Controller{


	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('mchart');
	}

	public function getGrafikAset()
	{
	
	 	$data['report'] = $this->mchart->report(1);
	 	$data['year'] = $this->mchart->getTanggal();
        $this->load->view('grafikaset', $data);
	}

	public function coba()
	{
		$filter = $this->input->post('tanggal_perolehan');
		$data = $this->mchart->report($filter);
		
		echo json_encode($data);
	}

	public function coba1(){
		$filter = $this->input->post('filter');
		$data = $this->mchart->report();
		echo json_encode($data);
		$this->load->view('grafikaset',$data);

	}
}
?>