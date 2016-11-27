<?php 

class verifylogin extends CI_Controller{

	 function __construct()
 	{
  		 parent::__construct();
   			$this->load->model('user','',TRUE); //Meload model
        $this->load->helper(array('form','url','security')); //Memanggil fungsi helper
        $this->load->library('session');
         if($this->session->userdata('logged_in')!=null){
           redirect(site_url('grafiktotal/getGrafik'));
    }
    
	 }
 
	public function index(){
    $this->load->library('form_validation'); //Memanggil library form validation
		$this->form_validation->set_rules('username','Username','trim|required|xss_clean'); //Struktur pengisian username
		$this->form_validation->set_rules('password','Password','trim|required|xss_clean|callback_check_database'); //Struktur pengsisian password

		if($this->form_validation->run()==FALSE)
		{
			$this->load->view('login','refresh'); // Jika salah login maka diarahkan tetap di halaman login
		}
		else{
			redirect('grafiktotal/getGrafik','refresh'); //Jika benar maka akan diarahkan ke halaman utama
		}
	}
	function check_database($password){
   			//Field validation succeeded.  Validate against database
   			$username = $this->input->post('username');
 
  			//query the database
   			$result = $this->user->login($username, $password);
 
   			if($result)
  		 		{
     					$sess_array = array();
    						 foreach($result as $row){
     						  $sess_array = array(
                     'id_user' => $row->id_user,
                     'username' => $row->username,
                     'logged_in' => TRUE
                     
                  );
       $this->session->set_userdata('logged_in', $sess_array);
     }
     return TRUE;
   }
   else
   {
     $this->form_validation->set_message('check_database', 'Invalid username or password');
     return false;
   }
  }

}
?>