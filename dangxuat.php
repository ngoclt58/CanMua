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
   session_destroy(); 
   header("location:http://localhost/CanMua/form/index.php");
?>
</body>
</html>
