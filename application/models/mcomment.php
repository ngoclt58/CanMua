<?php
class mcomment extends CI_Model{

    private $_table = "comment";
    
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
	function getSumRow($postid){
		$this->db->where("postid",$postid);
		$query = $this->db->get($this->_table);
	    return $query->num_rows(); 
	}
    
    //--- Lay thong tin qua id
    function getInfo($postid){
		$this->db->where("postid",$postid);
        $query = $this->db->get($this->_table);
        if($query)
            return $query->result_array();
        else
            return FALSE;
    }
	
	//--- Lay thong tin 1 record qua id
    function getRowInfo($postid,$num){
        $this->db->where("postid",$postid);
        $query = $this->db->get($this->_table);
        if($query)
            return $query->row_array($num);
        else
            return FALSE;
    }
	
	//Lay thong tin 1 post qua id
	function getOneComment($id){
        $this->db->where("id",$id);
        $query = $this->db->get($this->_table);
        if($query)
            return $query->row_array();
        else
            return FALSE;
    }


    //--- Them comment moi
    function addComment($data){
        if($this->db->insert($this->_table,$data))
            return TRUE;
        else
            return FALSE;
    }

    //--- Xoa comment
    function deleteComment($id){
        if($id!=1){
            $this->db->where("id",$id);
            $this->db->delete($this->_table);
        }
    }

    //--- Cap nhat comment
    function updatePost($data,$id){
        $this->db->where("id",$id);
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
