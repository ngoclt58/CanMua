<?php //test model/muser
class MuserTest extends PHPUnit_Framework_TestCase{
	private $CI;
	
	public function setUp() {
		$this->CI = &get_instance();
		$this->CI->load->database();
		$this->CI->load->model('muser');
	}

	public function testGetAllData(){
		$p= $this->CI->muser;
		$posts = $p->getalldata(2,0);
		$this->assertEquals(2, count($posts));
	}
	public function testGetUsername($id){
		$this->assertEquals('hungnm',$this->CI->muser->getUsername(68));
		$this->assertEquals(NULL,$this->CI->muser->getUsername(50));
	}
	public function testGetImage($id){
		$this->assertEquals('ea992a5813a02d498659e2325a32d3b6.jpg',$this->CI->muser->getImage(68));
		$this->assertEquals(NULL,$this->CI->muser->getImage(50));
		$this->assertEquals(NULL,$this->CI->muser->getImage(72));
		
	}
	public function testGetInfo($id){
		$this->assertEquals(array(),$this->CI->muser->getInfo(52));
		$data = $this->CI->muser->getInfo(68);
		$this->assertEquals('Hưng Yên',$data['address']);
	}
	public function testGetInfoByEmail(){
		$this->assertEquals(array(),$this->CI->muser->getInfoByEmail(54));
		$data = $this->CI->muser->getInfoByEmail('hungnm_580@vnu.edu.vn');
		$this->assertEquals('Hưng Yên',$data['address']);
	}
	public function testAddUser(){
		$data=array();
		//$this->assertFalse($this->CI->muser->addUser($data));
	}
	public function testDeleteUser(){
		/*$this->CI->muser->deleteUser(74);
		$posts = $this->CI->muser->getalldata(10,0);
		$this->assertEquals(6,count($p));*/
	}
	public function testUpdateUser(){
		$data=array();
		//$this->assertFalse($this->CI->muser->updateUser($data,0));
	}
	public function testNumRows(){
		$this->assertEquals(5,$this->CI->muser->num_rows());
	}
	public function testGetUser(){
		$this->assertTrue($this->CI->muser->getUser(68,'hungnm'));
		$this->assertTrue($this->CI->muser->getUser(52,'hungnm'));
	}
	public function testActived(){
		$this->assertFalse($this->CI->muser->actived('hungnm'));
		$this->assertTrue($this->CI->muser->actived(68));
	}
	public function testCheckActive(){
		$this->assertFalse($this->CI->muser->checkActive(49,2));
	}
	public function testCheckEmail(){
		$this->assertTrue($this->CI->muser->checkEmail('hungnm',50));
		$this->assertTrue($this->CI->muser->checkEmail('hungnm_580@vnu.edu.vn',68));
	}
	public function testCheckLogin(){
		$this->assertFalse($this->CI->muser->checkLogin('hungn',1));
	}
}
?>