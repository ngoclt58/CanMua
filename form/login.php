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
$row=mysqli_fetch_assoc($check);

if($row['id']>0)
{
   if($row['password']==$password)
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
