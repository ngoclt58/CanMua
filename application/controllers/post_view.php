<?php

class Post_view extends CI_Controller{
  
    function __construct(){
        parent::__construct();
        
        $this->load->helper(array("url","date","my_data"));
        $this->load->library(array("form_validation","my_layout","session","my_auth","email"));
        
        $this->load->library('encrypt');
        $this->load->database();
        $this->load->model("mpost");
		$this->load->model("muser"); 
    }
    
    //--- Trang chu, hiển thị tất cả bài đăng
    function index(){
              
        if(!$this->my_auth->is_Login())
        {
            redirect(base_url()."home/verify/login");
            exit();
        }
        else
        {
			$this->load->view("layout/top");
			
			
            	$data['info'] = $this->mpost->getalldata();
				$data['owner']=FALSE;
				$this->load->view('post_view',$data);
			
			$this->load->view("layout/bottom");
        }
    }
   
   
   // Hiển thị bài do người dùng đăng
   function list_by_user(){
	   if(!$this->my_auth->is_Login())
        {
            redirect(base_url()."home/verify/login");
            exit();
        }
        else
        {
			$this->load->view("layout/top");
            $userid = $this->my_auth->userid;
			
            	$data['info'] = $this->mpost->getInfo($userid);
				$data['owner']=TRUE;
				$this->load->view('frontend/home',$data);
			
			$this->load->view("layout/bottom");
        }
   }
   
   
   //Hiển thị một bài
   function view_one_post($postid){
       $this->load->view("layout/top");
            $data['info'] = $this->mpost->getOnePost($postid);	
			$this->load->view('single',$data);
			$this->load->view("layout/bottom");
   }
}

