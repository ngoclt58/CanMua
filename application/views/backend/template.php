<head>

<title>MANAGER MEMBER</title>
<link href="<?php echo base_url()."public/frontend/css/admin.css"; ?>" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url()."public/frontend/css/paging.css"; ?>" />


</head>
<body>
<div id="main">
  <!-- TOP -->
  <div id="top">
    <h2>MANAGER MEMBER</h2>
      <h2 class="line"></h2>
      <div id="login">Tên đăng nhập : <a href=""><?php echo $this->my_auth->username;?></a> |
            <a href="<?php echo base_url();?>admin/verify/logout">Thoát</a></div>
  </div>
  <!-- EOF TOP -->
  <div id="navigate">
      <ul>
       <li><a href="<?php echo base_url()."admin/user";?>">Danh sách thành viên</a></li>
       <li><a href="<?php echo base_url()."admin/user/add";?>">Thêm thành viên mới</a></li>
       <li><a href="#">Menu</a></li>
      </ul>
  </div>
  <!--EOF Navigate-->
  <div id="containner">

        <?php echo $content_for_layout; ?>

  </div>
  <!-- EOF Containner-->
</div><!--EOF Main-->
</body>
</html>
