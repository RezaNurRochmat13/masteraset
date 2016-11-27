<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class home extends CI_Controller {

 function __construct()
 {
   parent::__construct();
   $this->load->library('session');


 }

public function index(){
    if($this->session->userdata('logged_in')){
      $session_data=$this->session->userdata('logged_in');
      $data['username']=$session_data['username'];
    }else{
      redirect('login','refresh');
    }
  }

public function logout(){
    $this->session->sess_destroy();
    redirect('login','refresh');
  }

}

?>