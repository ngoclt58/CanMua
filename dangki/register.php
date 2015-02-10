<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "canmua";
$conn = new mysqli($host, $user, $pass, $db);
if( !$conn){
      //Không kết nối được, thoát ra và báo lỗi
      die("không nết nối được vào MySQL server");
};
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$email=$_POST['email'];
$password=$_POST['password'];

mysqli_query($conn,"SELECT * FROM account");
mysqli_query($conn,"INSERT INTO account (firstname,lastname,email,password) VALUES ('$firstname','$lastname','$email','$password')");
mysqli_close($conn);
?>
 <a href="../form/index.php?e=<?php echo $email?>"> Tiep tuc
 </a> 

</body>
</html>
