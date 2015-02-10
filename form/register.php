<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta charset="utf-8">
  	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  	<title>Login Form</title>
  	<link rel="stylesheet" href="css/style.css">
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
 	<a href="../form/index.html?e=<?php echo $email?>"> Tiep tuc </a> 
<section class="container">
    <div class="login">
      <h1>Login to Web App</h1>
      <form method="post" action="login.php">
       <p> <input type="text" name="email" value="<?php echo $_POST['email'];?> " placeholder="Username or Email">  </p> 
        <p><input type="password" name="password" value="" placeholder="Password"></p>
		
        <p class="remember_me">
          <label>
            <input type="checkbox" name="remember_me" id="remember_me">
            Remember me on this computer
          </label>
        </p>
        <p class="submit"><input type="submit" name="commit" value="Login"></p>
      </form>

    </div>

    <div class="login-help">
      <p>Forgot your password? <a href="index.html">Click here to reset it</a>.</p>
    </div>
  </section>


</body>
</html>
