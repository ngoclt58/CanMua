<?php
require_once(APPPATH . '/models/mpost.php');

class TestModelPost extends mpost
{
	public function __construct(){
        parent::__construct
		$this->load->library('unit_test');
    }
	
	function runTest()
	{
		$this->testGetSumRow();
		$this->testGetOnePost();
		$this->testGetInfoEmail();
		echo $this->unit->report();
	}
	function testGetSumRow()
	{	
		
		$this->unit->run($this->getSumRow(68),7,"test sum post");
		$this->unit->run($this->getSumRow(71),2,"test sum post");
		$this->unit->run($this->getSumRow(4),0,"test sum post");
	}
	
	function testGetOnePost()
	{
		$this->unit->run($this->getOnePost(-1),FALSE,"test get post");
	}
	function testGetInfoEmail()
	{
		$this->unit->run($this->getInfoByEmail(1@123.com),FALSE, "get info by email");
	}
}
?>