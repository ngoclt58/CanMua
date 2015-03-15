<link href="<?php echo base_url();?>web/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?php echo base_url();?>web/css/style.css" rel="stylesheet" type="text/css" media="all" />	

<div class="box_entry" id="box_entry">
<h2>Infomation your account</h2>
    <img src="<?php echo base_url()?>public/images/avata/<?php echo $info['image']; ?>"  width="150px"/><br/>
    <ul>
        <li>Username : <?php echo $info['username'];?></li>
        <li>Full name : <?php echo $info['full_name'];?></li>
        <li>Email : <?php echo $info['email'];?></li>
        <li>Address : <?php echo $info['address'];?></li>
        <li>Phone : <?php echo $info['phone'];?></li>
        <li>Level : <?php if($info['level']==1) echo "Administrator";
                          if($info['level']==2) echo "Member"; ?></li>
        <li>Gender : <?php if($info['gender']==1) echo "Male";
                           if($info['gender']==2) echo "Female"; ?></li> 
                           
        <li><a href="<?php echo base_url()."home/user/edit/".$info['userid'];?>" >Update your account</a></li> 
        <li><a href="<?php echo base_url()."home/verify/logout";?>" >Sign out</a></li>                                   
    </ul>
</div>