<?php
require_once(APPPATH . '/controllers/home/user.php');
class TestEmailandUser extends User
{
	public function __construct(){
        parent::__construct();
		$this->load->library('unit_test');
    }
	
	function testCheckUser()
	{	
		$test=$this->checkUser("123");
		$this->unit->run($test,TRUE,"test valid username");
		
		$this->unit->run($this->checkUser("hungnm"),FALSE, "test invalid username");
		echo $this->unit->report();
	}
	
	function testCheckEmail()
	{
		$this->unit->run($this->checkEmail("hungnm_580@vnu.edu.vn"),FALSE,"Email has been exit");
		$this->unit->run($this->checkEmail("a"),FALSE,"invalid email");
		$this->unit->run($this->checkEmail("trangnt_580@vnu.edu.vn"),TRUE,"valid email");
		echo $this->unit->report();
		
	}
}
?>