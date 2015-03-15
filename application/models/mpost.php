<?php
class mpost extends CI_Model{

    private $_table = "post";
    
    function __contruct(){
        parent::__construct();
        $this->load->database();
    }

    //--- Lay tat ca du lieu
    function getalldata(){
        $query = $this->db->get($this->_table);
        if($query)
            return $query->result_array();
        else
            return FALSE;
    }
	
	//Lay tong so post cua id
	function getSumRow($id){
		$this->db->where("userid",$id);
		$query = $this->db->get($this->_table);
	    return $query->num_rows(); 
	}
    
    //--- Lay thong tin qua id
    function getInfo($id){
		$this->db->where("userid",$id);
        $query = $this->db->get($this->_table);
        if($query)
            return $query->result_array();
        else
            return FALSE;
    }
	
	//--- Lay thong tin 1 record qua id
    function getRowInfo($id,$num){
        $this->db->where("userid",$id);
        $query = $this->db->get($this->_table);
        if($query)
            return $query->row_array($num);
        else
            return FALSE;
    }
	
	//Lay thong tin 1 post qua id
	function getOnePost($postid){
        $this->db->where("postid",$postid);
        $query = $this->db->get($this->_table);
        if($query)
            return $query->row_array();
        else
            return FALSE;
    }

    //---- Lay thong tin qua email
    function getInfoByEmail($email){
        $this->db->where("email",$email);
        $query = $this->db->get($this->_table);

        if($query)
            return $query->row_array();
        else
            return FALSE;
    }

    //--- Them post moi
    function addPost($data){
        if($this->db->insert($this->_table,$data))
            return TRUE;
        else
            return FALSE;
    }

    //--- Xoa post
    function deletePost($id){
        if($id!=1){
            $this->db->where("userid",$id);
            $this->db->delete($this->_table);
        }
    }

    //--- Cap nhat post
    function updatePost($data,$id){
        $this->db->where("postid",$id);
        if($this->db->update($this->_table,$data))
            return TRUE;
        else
            return FALSE;
    }

    // Tong so record
    function num_rows(){
        return $this->db->count_all($this->_table);
    }
    
} 
?>
