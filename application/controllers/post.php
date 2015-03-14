<?php

class Post extends CI_Controller{
  
    function __construct(){
        parent::__construct();
        
        $this->load->helper(array("url","date","my_data"));
        $this->load->library(array("form_validation","my_layout","session","my_auth","email"));
        $this->my_layout->setLayout("layout/frontend");
        $this->load->library('encrypt');
        $this->load->database();
        $this->load->model("mpost");
		$this->load->model("muser"); 
    }
    
    
    function index(){
              
        
   
    }
    
    //Chinh sua 1 bai viet
    function edit(){
        
        if(!$this->my_auth->is_Login())
        {
            redirect(base_url()."home/verify/login");
            exit();
        }
        else
        {
            $postid = $this->my_auth->postid;
            $data['info'] = $this->mpost->getInfo($postid); 
            
            if(isset($_POST['ok']))
            {
                $this->form_validation->set_rules("tenSP","Ten SP","required");
				$this->form_validation->set_rules("khuVuc","Khu Vuc","required");
                $this->form_validation->set_rules("yeuCau","Yeu Cau","required");
                $this->form_validation->set_rules("lienHe","LienHe","required");
                
                if($this->form_validation->run()==FALSE){
                    $data['error'] = "";
                    $this->my_layout->view("editpost_view",$data);
                
                }else{
                    
                      $update = array(
                                    "tenSP" => $this->input->post("tenSP"),
                                    "email"     => $this->input->post("email"),
                                    "lienHe"   => $this->input->post("lienHe"),
                                    "gender"    => $_POST['gender'],
                                    "update_date"  => date("Y-m-d H:i:s"),
                                 );
                      //--- Xử lý ảnh : phần này không bắt buộc
                      $img = "";
                      $flag = TRUE;
                      if($_FILES['image']['name'] != NULL)
                      {
                            $config['upload_path']   = './public/images/post/';
                            $config['allowed_types'] = 'gif|jpg|png';
                            $config['max_size']      = '5000';
                            $config['max_width']     = '2000';
                            $config['max_height']    = '2000';
                            $config['encrypt_name']  = true; // ma hoa ten file
                            $config['remove_spaces'] = true; // xoa khoang trang
                            $this->load->library('upload', $config);

                            if(!$this->upload->do_upload("image"))
                            {
                                $data['error'] = $this->upload->display_errors();
                                $this->my_layout->view("post_form",$data);
                                $flag = FALSE;
                            }
                            else
                            {
                                $img = $this->upload->data();
                                $update['image'] = $img['file_name'];
                                //--- Xóa ảnh củ
                               if(is_file($config['upload_path'].$data['info']['image']))
                                    @unlink($config['upload_path'].$data['info']['image']);
                                
                            }
                      }
                      
                      if($flag==TRUE){
                          $this->mpost->updatePost($update,$postid);
                          redirect(base_url()."home/user"); 
                      }
                }
            }
            else
            {
                $this->my_layout->view("editpost_view",$data);     
            } 
        }
    }
    
    
    //--- Tao 1 bai dang moi
    function new_post()
    {
        //--- Neu chua login thi khong dang duoc bai
        if(!$this->my_auth->is_Login()){
            redirect(base_url()."home/verify/login");
            exit();
        }
        
        $this->form_validation->set_rules("tenSP","Tên sản phẩm","required");
        $this->form_validation->set_rules("yeuCau","Yêu cầu","required");
        $this->form_validation->set_rules("email","Email","required|valid_email");
        $this->form_validation->set_rules("lienHe","Liên hệ","required");
		$this->form_validation->set_rules("danhMuc","Danh mục","required");
		$this->form_validation->set_rules("khuVuc","Khu vực","required");
  
        if($this->form_validation->run()==FALSE){
            
            $this->my_layout->view("post_form",array("error"=>""));
        }
        else
        {
                $add = array(
                        "tenSP" => $this->input->post("tenSP"),
						"userid" => $this->my_auth->userid,
						"khuVuc"  => $this->input->post("khuVuc"),
						"danhMuc"  => $this->input->post("danhMuc"),
                        "yeuCau"  => $this->input->post("yeuCau"),
                        "email"     => $this->input->post("email"),
                        "lienHe"   => $this->input->post("lienHe"),
                        "add_date"  => date("Y-m-d H:i:s"),
                );

                //--- Xử lý ảnh : phần này không bắt buộc
                $img = "";
                $flag = TRUE;
                if($_FILES['userfile']['name'] != NULL){
                    $config['upload_path']   = './public/images/post/'; //duong dan luu anh
                    $config['allowed_types'] = 'gif|jpg|png';
                    $config['max_size']      = '5000';
                    $config['max_width']     = '2000';
                    $config['max_height']    = '2000';
                    $config['encrypt_name']  = true; // ma hoa ten file
                    $config['remove_spaces'] = true; // xoa khoang trang
                    $this->load->library('upload', $config);

                    if(!$this->upload->do_upload())
                    {
                        $data['error'] = $this->upload->display_errors();
                        $this->my_layout->view("post_form",$data);
                        $flag = FALSE;
                    }
                    else
                    {
                        $img = $this->upload->data();
                        $add['image'] = $img['file_name'];
                    }
                }
				       $this->mpost->addPost($add);
					   redirect(base_url()."post/post_complete");
                    }
                
        }
        
    
    //--- Đăng bài thành công
    function post_complete(){
                $data['report'] = "You has been post completed ! <br/>
                                    <br/>";
                                   
                $this->my_layout->view("post_complete",$data);	
	}
}
?>
