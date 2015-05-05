<?php
require_once(APPPATH . '/controllers/home/user.php');
//test file User trong constroller/home
//require_once dirname(__FILE__).'/../home/user.php';


class TestUser extends User
{

	public function __construct(){
        parent::__construct();
		$this->load->library('unit_test');
    }
	
	function runTest()
	{
		$this->testCheckUser();
		$this->testCheckEmail();
		$this->testCheckPhone();
		echo $this->unit->report();
	}
	function testCheckUser()
	{	
		$test=$this->checkUser("123");
		$this->unit->run($test,TRUE,"test valid username");
		
		$this->unit->run($this->checkUser("hungnm"),FALSE, "test invalid username");
	}
	
	function testCheckEmail()
	{
		$this->unit->run($this->checkEmail("hungnm_580@vnu.edu.vn"),FALSE,"Email has been exit");
		$this->unit->run($this->checkEmail("a"),FALSE,"invalid email");
		$this->unit->run($this->checkEmail("trangnt_580@vnu.edu.vn"),TRUE,"valid email");
	}
	
	function testCheckPhone()
	{
		$this->unit->run($this->validPhone("01689399949"),TRUE,"valid Phone");
		$this->unit->run($this->validPhone(1),FALSE,"invalid Phone");
	}
	
}
?>