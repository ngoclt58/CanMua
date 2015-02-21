<?php
session_start();
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "canmua";
$conn = new mysqli($host, $user, $pass, $db);
if(!$conn){
	die("không kết nối được vào MySQL server");
}
$danhMuc = $_POST['danhMuc'];
$khuVuc =$_POST['khuVuc'];
$tenSP= $_POST['tenSP'];
$yeuCau= $_POST['yeuCau'];
$lienHe=$_POST['lienHe'];
$email = $_SESSION['email'];
$query = mysqli_query($conn,"SELECT * FROM dangBai");
mysqli_query($conn,"INSERT INTO dangBai (danhMuc,khuVuc,tenSP,yeuCau,lienHe,email) VALUES ('$danhMuc','$khuVuc','$tenSP','$yeuCau','$lienHe','$email')");
header("location:http://localhost/CanMua/DanhSach/list.php");
mysqli_close($conn); 

?>

</body>
</html>