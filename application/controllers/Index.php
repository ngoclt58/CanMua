<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
class Index extends CI_Controller{
    

    public function __construct() {
        parent::__construct();
        
        $this->load->helper(array("url","date","my_data"));
        $this->load->library(array("form_validation","my_layout","session","my_auth","email"));
        
        $this->load->library('encrypt');
        $this->load->database();
        $this->load->model("mpost");
		$this->load->model("muser");
    }

    // Controller mặc định cho trang chủ
    public function index(){
        $data['title'] = "Trang chủ";
			$this->load->view("layout/top");
			
            	$data['info'] = $this->mpost->getalldata();
				$data['owner']=FALSE;
				$this->load->view('frontend/home',$data);	
			$this->load->view("layout/bottom");
        
    }

    //Gioi thieu
   public function about(){
        $data['title'] = "Giới thiệu";
        $this-> my_layout->view("frontend/about",$data);
    }
    
    //Dich vu
    public function services(){
        $data['title'] = "Dịch vụ";
        $this-> my_layout->view("frontend/services",$data);
    }
} 
?>
</body>
