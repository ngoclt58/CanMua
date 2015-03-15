<div class="box_entry" id="box_entry">
<?php
    foreach($info as $temp)
  	if(isset($temp['tenSP'])){?>
    <a href= ""><img src="<?php echo base_url();?>public/images/post/<?php echo $temp['image']; ?>"  width="150px"/></a><br/>
    <ul>
        <li>Tên sản phẩm : <?php echo $temp['tenSP'];?></li>
        <li>Khu Vực : <?php echo $temp['khuVuc'];?></li>
        <li>Email : <?php echo $temp['email'];?></li>
        <li>Yêu Cầu : <?php echo $temp['yeuCau'];?></li>
        <li>Danh Mục: <?php echo $temp['danhMuc'];?></li>
        <li>Liên Hệ: <?php echo $temp['lienHe'];?></li>
                      
        		<li><a href="<?php echo base_url()."home/user/edit/".$temp['postid'];?>" >Edit Post</a></li> 
        		<li><a href="<?php echo base_url()."home/verify/logout";?>" >Delete</a></li>     
<?php 	
			 
      }
      else{
?>               
      <br /><center>Bạn chưa đăng sản phẩm nào.</center> <br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
      <?php }?>                   
    </ul>
</div>