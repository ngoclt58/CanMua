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

$email=$_POST['email'];
$password=$_POST['password'];

$check = mysqli_query($conn,"SELECT * FROM account WHERE email='$email'");

if(mysqli_num_row($check)>0)
{
   $mat_khau=mysqli($conn, "SELECT password FROM account WHERE email = '$email'");
   if($password==$matkhau)
   {
       echo "Dang nhap thanh cong";
   }
   else
   {
       echo "Sai mat khau";
   }
}
else
{
   echo "Tai khoan khong ton tai";
}

mysqli_close($conn);
?>
</body>
</html>
