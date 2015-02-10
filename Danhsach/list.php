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
	die('Chua co SP nao!');
}
while($row = mysqli_fetch_array($check)){
		echo "Danh mục: ",$row["danhMuc"],"<br>";
		echo "Khu vực: ", $row["khuVuc"]," <br>";
		echo "Tên sản phẩm: ", $row["tenSP"]," <br>";
		echo "Yêu cầu: ", $row["yeuCau"]," <br>";
		echo "Liên hệ: ", $row["lienHe"]," <br>";
		echo "<br>","<br>";
}
?>
</body>
</html>
