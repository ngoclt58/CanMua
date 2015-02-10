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
$email = $_SESSION['email'];
$conn = new mysqli($host, $user, $pass, $db);
if( !$conn){
   ưdie("không nết nối được vào MySQL server");
};
$check = mysqli_query($conn,"SELECT * FROM dangbai WHERE email=$email");
if(!$check){
	die('Chua co SP nao!');
}
while($row = mysqli_fetch_assoc($check)){
    echo "1";
}
?>
</body>
</html>
