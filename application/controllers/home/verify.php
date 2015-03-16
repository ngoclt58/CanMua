	<?php
class Verify extends CI_Controller{
    
    function __construct(){
        
        parent::__construct();
        $this->load->helper(array("url","form"));
		$this->load->library("my_layout");
        $this->load->library(array("form_validation","session","my_auth"));
        $this->my_layout->setLayout("layout/frontend");
        $this->load->database();
        $this->load->model("muser");
        
    }
    
    //--- Login
    function login()
    {   
        if($this->my_auth->is_Login())
        {
            redirect(base_url()."home/user");
            exit();
        }
        
        $this->form_validation->set_rules("username","Username","required");
        $this->form_validation->set_rules("password","Password","required");
        
        if($this->form_validation->run()==FALSE)
        {
            $this->my_layout->view("frontend/login",array("error"=>""));         
        }
        else
        {   
             $u = $this->input->post("username");
             $p = $this->input->post("password");
             $session = $this->muser->checkLogin($u,$p);
             
             if($session)
             {
                 if(!$this->my_auth->is_Active($session['userid'])){
                    
                    $data['error'] = "Please check mail and active your account !";
                    $this->my_layout->view("frontend/login",$data);
                 }
                 else
                 {
                      $data = array(
                                    "username"  => $session['username'],
                                    "userid"    => $session['userid'],
                                    "level"  => $session['level'],
                                );
                                
                     $this->my_auth->set_userdata($data);
					 if($this->my_auth->is_Admin())
         			{
            			redirect(base_url()."admin/user");
            			exit();
        			}
                     redirect(base_url()."Index");
                 }
             }
             else
             {  
                $this->my_layout->view("frontend/login",array("error"=>"Username or Password wrong"));    
             }
        }
    }
    
    //---- Logout
    function logout()
    {
        $this->my_auth->sess_destroy();
		redirect(base_url()."home/verify/login");
    }

}