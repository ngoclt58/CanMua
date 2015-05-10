<?php //test model/mcomment
class McommentTest extends PHPUnit_Framework_TestCase{
	private $CI;
	public function setUp() {
		$this->CI = &get_instance();
		$this->CI->load->database();
		$this->CI->load->model('mcomment');
	}
	public function testGetAllData(){
		$x = count($this->CI->mcomment->getalldata());
		$this->assertEquals(4,$x );
	}
	public function testGetSumRow(){
		$this->assertEquals(0,$this->CI->mcomment->getSumRow(6));
		$this->assertEquals(4,$this->CI->mcomment->getSumRow(8));
	}
	public function testGetInfo(){
		$a = $this->CI->mcomment;
		$this->assertEquals(array(),$a->getInfo(7));
		$data = $a->getInfo(8);
		$this->assertEquals(4,count($data));
	}
	public function testGetRowInfo(){
		$this->assertEquals(array(),$this->CI->mcomment->getRowInfo(7,1));
		
		$data = $this->CI->mcomment->getRowInfo(8,0);
		$this->assertEquals('trangnt',$data['username']);
	}
	public function testGetOneComment(){
		$data = $this->CI->mcomment->getOneComment(45);
		$this->assertEquals($data['add_date'],'2015-03-18 06:26:48');
		$this->assertEquals(array(),$this->CI->mcomment->getOneComment(30));
		}
	public function testAddComment(){
		//$this->assertEquals(array(),$this->CI->mcomment->addcomment(7));
	}
	public function testDeleteComment(){
		//$this->CI->mcomment->deleteComment(7);
		$this->CI->mcomment->deleteComment(7);
		$x = count($this->CI->mcomment->getalldata());
		$this->assertEquals(4,$x );
		
	}
	public function testUpdatePost(){
		$data = array('id'=>'45','postid'=>'8',
		'add_date'=>'2015-03-18 06:26:48',
		'content' => 'Mình cần bán 1 máy IP6 plus mới 99% 01836728846',
		'username' =>'trangnt',
		'image' => 'ba8d47b4a03f35ab15a0beec6d65e0dc.jpg');
		$this->assertTrue($this->CI->mcomment->updatePost($data,45));
	}
	public function test_num_rows(){
		$this->assertEquals(1, count($this->CI->mcomment->num_rows()));
	}
}
?>