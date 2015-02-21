<?php include '../CANMUA.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
</head>
<body>
<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "canmua";
$check = false;
$conn = new mysqli($host, $user, $pass, $db);
if(isset($_SESSION['email'])){
	$email = $_SESSION['email'];
	$check = mysqli_query($conn,"SELECT * FROM dangbai WHERE email='$email'") or die("không nết nối được vào MySQL server");
}
if(!isset($email)){
	die('<center><h1>Chua co SP nao!</h1></center>');
}
?>

<center>

<table border="3" >
        <tr>
             <th colspan="5"><h2>DANH SÁCH SẢN PHẨM ĐÃ ĐĂNG</h2></th>
        </tr>
        <tr>
             <th><h2>Danh mục</h2></th>
             <th><h2>Tên sản phẩm</h2></th>
             <th><h2>Yêu cầu</h2></th>
             <th><h2>Liên hệ</h2></th>
             <th><h2>Khu vực</h2></th>
        </tr>
<?php
while($row = mysqli_fetch_array($check)){
?>
        <tr>
             <td><h3><?php echo $row["danhMuc"] ?></h3></td>
             <td><h3><?php echo $row["tenSP"]   ?></h3></td>
             <td><h3><?php echo $row["yeuCau"]  ?></h3></td>
             <td><h3><?php echo $row["lienHe"]  ?></h3></td>
             <td><h3><?php echo $row["khuVuc"]  ?></h3></td>
        </tr>
<?php
}
?>
</table>

</center>
</body>
</html>
