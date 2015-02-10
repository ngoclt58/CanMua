<?php
session_start();
?>

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
     die("không nết nối được vào MySQL server");
};
$email=$_POST['email'];
$password=$_POST['password'];

$check = mysqli_query($conn,"SELECT * FROM account WHERE email='$email'");
$row=mysqli_fetch_assoc($check);

if($row['id']>0)
{
   if($row['password']==$password)
   {
       $_SESSION["name"]=$row['lastname'];
       $_SESSION["email"]=$row['email'];
       $_SESSION["lastname"]=$row['lastname'];
       $_SESSION["password"]=$row['password']; 
	   header("location:http://localhost/CanMua/CANMUA.php");
   }
   else
   {
       header("location:http://localhost/CanMua/form/index.php?error=1");
   }
}
else
{
   header("location:http://localhost/CanMua/form/index.php?error=-1");
}

mysqli_close($conn);
?>
</body>
</html>
