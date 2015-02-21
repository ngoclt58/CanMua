<?php
session_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<!--
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script language="javascript">
$(document).ready(function() {
	var arr = new Array();
	arr[0]="images/1.jpg";
	arr[1]="images/8.jpg";
	arr[2]="images/e.jpg";
	arr[3]="images/4.jpg";
	arr[4]="images/5.jpg";
	arr[5]="images/7.jpg";
	i=0;
	fadeSlide();
	$("#next").click(function(){
		i++;
		if(i==arr.length)
			i=0;
		img.src= arr[i];
		$("#img").fadeOut();
		$("#img").fadeIn();
	});
	$("#pre").click(function(){
		i--;
		if(i==-1)
			i=arr.length-1;
		img.src= arr[i];
		$("#img").fadeOut();
		$("#img").fadeIn();	
	});
	
});

function fadeSlide()
{
		setTimeout(function(){
		img = document.getElementById("img");
		var arr = new Array();
		arr[0]="images/1.jpg";
		arr[1]="images/8.jpg";
		arr[2]="images/e.jpg";
		arr[3]="images/4.jpg";
		arr[4]="images/5.jpg";
		arr[5]="images/7.jpg";	
		i++;
		if(i==-1) i==arr.legnth-1;
		if(i==arr.length)
			i=0;
		img.src = arr[i];
		$("#img").fadeOut();
		$("#img").fadeIn();		
		fadeSlide();
		},4000);
}
</script> -->
<link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <!-- <a href="dangki/dangki.html"> <input type="button" value="đăng kí" /> </a>
	<a href="8-login-form/index.html"><input type="button" value="đăng nhập" /> </a></div> 	
<table width="818" border="0" cellpadding="0" cellspacing="0" align="center">
<tr>
	<td><a href="#"><img src="images/prev.png" id="pre" /></td>
	<td>
		<img src="images/1.jpg" id="img" />
    </td>
    <td><a href="#"> <img src="images/next.png" id="next" /></td>
</tr>
</table>
</div>-->
	<div class="container">
    	<div class="head_01"> 
        	<div class="head_01_img">
                <img src="images/anh02.jpg" /> &nbsp;&nbsp; 
                <img src="images/Facebook.png" /> 
                <img src="images/skype.png" />
            </div>
            <form>
        	<div class="head_01_button">  	
        	<?php
                if(!isset($_SESSION['email'])){
            ?>
                <a href="/CanMua/dangki/dangki.html"> <input type="button" value="đăng kí" /> </a>
				<a href="/CanMua/form/index.php"><input type="button" value="đăng nhập" /> </a>
             <?php
                }
				else{
             ?>
             <a href="/CanMua/dangxuat.php"> <input type="button" value="đăng xuất" /> </a>
             <?php
				}
			 ?>
            </div>
            </form> 
			<div class="head_01_search">
    			<div class="head_01_search_text"><input type="text" placeholder="Tìm kiếm" style="width:300px; height:20px"/> </div>
    			<div class="head_01_search_text" style="height:26px; width:75px; color:#FF0; background-color:#F00; text-align:center;"> SEARCH </div>
    		</div>
        </div>
    	<!-- ----------------------------------------------------------------------------------- -->
        <div class="main">
        	<div class="main_01">
                <div class="main_info"><a href="#"> Trang chủ </div> </a>
                <div class="main_info"><a href="#"> Giới Thiệu </div> </a>
                <div class="main_info"><a href="#"> Tin Tức </div> </a>
                <div class="main_info"><a href="#"> Sản phẩm </div> </a>
                <div class="main_info"><a href="#"> Khuyến Mãi </div> </a>
                <div class="main_info"><a href="#"> Tư Vấn </div> </a>
                <div class="main_info"><a href="/CanMua/DanhSach/list.php"> Danh sách </div> </a>
                <div class="main_info"><a href="#"> Liên Hệ </div> </a>
                <div class="main_info"><a href="../dangxuat.php"> Đăng xuất </div> </a>
            </div>  
            
            <div class="main_02">
            	<div class="main_02_img"><img src="images/aaa.png"  /> </div>
        	 	<div class="main_02_img"><img src="images/1.jpg" id="img" /></div>
                <div class="main_02_img">
                	<div class="main_02_banner"> CÁC SẢN PHẨM CẦN MUA </div>
                    <div>
                    	<div class="main_02_button"><a href="#">Điện thoại </a></div>
                        <div class="main_02_button"><a href="#"> Máy tính </a></div>
                        <div class="main_02_button"><a href="#"> Linh Kiện </a></div>
                        <div class="main_02_button"><a href="#"> Máy Ảnh </a></div>    
                    </div>
                    <div>
                    	<div class="main_02_button"><a href="#"> Ô Tô </a></div>
                        <div class="main_02_button"><a href="#"> Xe máy </a></div>
                        <div class="main_02_button"><a href="#"> Xe Đạp </a></div>
                        <div class="main_02_button"><a href="#"> Xích Lô </a></div> 
                    </div>
                    <div>
                    	<div class="main_02_button"><a href="#"> Nước Hoa </a></div>
                        <div class="main_02_button"><a href="#"> Mỹ Phẩm </a></div>
                        <div class="main_02_button"><a href="#"> Thời Trang </a></div>
                        <div class="main_02_button"><a href="#"> Sách </a></div> 
                    </div>
                    <div>
                    	<div class="main_02_button"><a href="#"> Nội Thất </a></div>
                        <div class="main_02_button"><a href="#"> Ngoại Thất </a></div>
                        <div class="main_02_button"><a href="#"> Giải Trí </a></div>
                        <div class="main_02_button"><a href="#"> Thực Phẩm </a></div> 
                    </div>
                    <div>
                    	<table width="340px" border="0">
                          <tr>
                            <td><span style="font-size:20px; color:#F30;" class="main_02_news"><a href="#">Các tin tức mới</a></span><img src="images/demo08.jpg" /><hr /></td>
                          </tr>
                          <tr>
                            <td><span><img src="images/tamgiac.jpg" /></span><span class="main_02_new"><a href="#"> Cần mua điện thoại abc</a></span> </td>
                          </tr>
                          <tr>
                            <td><span><img src="images/tamgiac.jpg" /></span><span class="main_02_new"><a href="#"> Cần mua xe xyz </a></span></td>
                          </tr>
                           <tr>
                            <td><span><img src="images/tamgiac.jpg" /></span><span class="main_02_new"><a href="#"> Cần mua abcxyz </a></span></td>
                          </tr>
                          <tr>
                            <td><span><img src="images/tamgiac.jpg" /></span><span class="main_02_new"><a href="#"> Cần mua xyzabc </a></span></td>
                          </tr>
                        </table>

                    
                    </div>
                </div>
                <div class="main_02_img">
                	<img src="images/anh.png" />
                </div>
            <div>
            
           
         
            
        </div>
	</div>
</body>
</html>
