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

$query = mysqli_query($conn,"SELECT * FROM dangBai");
mysqli_query($conn,"INSERT INTO dangBai (danhMuc,khuVuc,tenSP,yeuCau,lienHe) VALUES ('$danhMuc','$khuVuc','$tenSP','$yeuCau','$lienHe')");
$query = mysqli_query($conn,"SELECT * FROM dangBai");
$kiemtra = mysqli_num_rows($query);
if ($kiemtra = 0)
{
	echo"chua cap nhat du lieu";
} else{
	while($row = mysqli_fetch_array($query)){
		echo  $row["id"],". ";

		echo "Danh mục: ",$row["danhMuc"],"<br>";
		echo "Khu vực: ", $row["khuVuc"]," <br>";
		echo "Tên sản phẩm: ", $row["tenSP"]," <br>";
		echo "Yêu cầu: ", $row["yeuCau"]," <br>";
		echo "Liên hệ: ", $row["lienHe"]," <br>";
		
		
		echo "<br>","<br>";
		
		
	
	}
}
	
mysqli_close($conn); 

?>

</body>
</html>