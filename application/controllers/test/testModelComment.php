<?php
require_once(APPPATH . '/models/mcomment.php');

class TestModelComment extends mcomment
{
	public function __construct(){
        parent::__construct();
		$this->load->library('unit_test');
    }
	
	function runTest()
	{
		$this->testGetSumRow();
		$this->testGetInfo();
		$this->testGetOneComment();
		echo $this->unit->report();
	}
	function testGetSumRow()
	{	
		
		$this->unit->run($this->getSumRow(8),4,"test sum post");
		$this->unit->run($this->getSumRow(5),0,"test sum post");
	}
	
	function testGetInfo()
	{
		$this->unit->run($this->getInfo(2),FALSE, "test info");
		$this->unit->run($this->getInfo(4),FALSE, "test info");
		
	}
	
	function testGetOneComment()
	{
		$this->unit->run($this->getOneComment(45),array(45,8,2015-03-18 06:26:48
		,M?nh c?n bán 1 máy IP6 plus m?i 99%, liên h? m?nh nhé: 01836728846,trangnt,ba8d47b4a03f35ab15a0beec6d65e0dc.jpg),"test Comment")
		$this->unit->run($this->getOneComment(3),FALSE,"test comment");
	}
	
}
?>