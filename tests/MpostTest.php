<?php
// test model/mpost
class MPostTest extends PHPUnit_Framework_TestCase {
	private $CI;
	public function setUp() {
		$this->CI = &get_instance();
		$this->CI->load->database();
		$this->CI->load->model('mpost');
	}
	
	public function testGetAllData(){
		$posts = $this->CI->mpost->getalldata();
		$this->assertEquals(13, count($posts));
	}
	
	public function testNumRows() {
		$this->assertEquals(13, $this->CI->mpost->num_rows());
	}
	
	public function testGetSumRows() {
		$this->assertEquals(0, $this->CI->mpost->getSumRow(0));
		$this->assertEquals(0, $this->CI->mpost->getSumRow(7));
		$this->assertEquals(7,$this->CI->mpost->getSumRow(68));
	}
	
	public function testGetInfo(){
		$this->assertEquals(0, count($this->CI->mpost->getInfo(0)));
		$this->assertEquals(7, count($this->CI->mpost->getInfo(68)));
	}
	
	public function testGetRowInfo(){
		$data = $this->CI->mpost->getRowInfo(68,1);
		$this->assertEquals(8, $data['postid']);
		$this->assertEquals(11, count($this->CI->mpost->getRowInfo(68,1)));
	
	}
	
	public function testGetOnePost(){
		$data = $this->CI->mpost->getOnePost(7);
		$this->assertEquals(68,$data['userid']);
		$data = $this->CI->mpost->getOnePost(9);
		$this->assertEquals('Chó',$data['danhMuc']);
		$this->assertEquals(array(),$this->CI->mpost->getOnePost(40));
	}
	
	public function testGetInfoByEmail(){
		$data = $this->CI->mpost->getInfoByEmail('hungnm_580@vnu.edu.vn');
		$this->assertEquals(11,count($data));
		$data = $this->CI->mpost->getInfoByEmail('abc');
		$this->assertEquals(array(),$data);
	}
	
	public function testAddPost(){
		/*$data=array('postid'=>'20','tenSP'=>'Test',
		'khuVuc'=>'Hà Nội','yeuCau'=>'có tiền',
		'danhMuc'=>'testadd',
		'lienHe' => '012345678910',
		'email'=>'minhlavip@gmail.com',
		'image' => NULL,
		'add_date' => '2015-05-06',
		'update_date' => NULL,
		'userid' =>74);
		$this->assertTRUE($this->CI->mpost->addPost($data));*/
	}
	
	public function testDeletePost(){
		$data = $this->CI->mpost->deletePost(100);
		$this->assertEquals(13, $this->CI->mpost->num_rows());
	}
	
	public function testupdatePost(){
		/*$data=array('postid'=>'19','tenSP'=>'Test',
		'khuVuc'=>'Hà Nội','yeuCau'=>'có tiền',
		'danhMuc'=>'testupdate',
		'lienHe' => '012345678910',
		'email'=>'minhlavip@gmail.com',
		'image' => NULL,
		'add_date' => '2015-05-06',
		'update_date' => NULL,
		'userid' =>74);
		$this->assertTrue($this->CI->mpost->updatePost($data,74));
		$this->assertFalse($this->CI->mpost->updatePost(array(),100));*/
		
	}
	
}