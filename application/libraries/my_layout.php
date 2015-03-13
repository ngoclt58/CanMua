<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php   
if (!defined('BASEPATH')) exit('No direct script access allowed'); 

class my_layout { 
     
    var $obj; 
    var $layout; 
     
    function my_layout($layout = "layout_main") 
    { 
        $this->obj =& get_instance(); 
        $this->layout = $layout; 
    } 

    function setLayout($layout) 
    { 
      $this->layout = $layout; 
    } 
     
    function view($view, $data=null, $return=false) 
    { 
        $loadedData = array(); 
        $loadedData['content_for_layout'] = $this->obj->load->view($view,$data,true); 
         
        if($return) 
        { 
            $output = $this->obj->load->view($this->layout, $loadedData, true); 
            return $output; 
        } 
        else 
        { 
            $this->obj->load->view($this->layout, $loadedData, false); 
        } 
    } 
} 
?> 
</body>
</html>