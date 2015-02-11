<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]> <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]> <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Login Form</title>
  <link rel="stylesheet" href="css/style.css">
  <!--[if lt IE 9]><script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>
<body>
	<section class="container">
    <div class="login">
      <h1>ĐĂNG NHẬP</h1>
      <?php
	        if(isset($_GET['error'])){
				$error=$_GET['error'];
			}
			else{
			    $error=0;
			}
			
		    if($error==-1){
			   echo "Tai khoan khong ton tai!";
			}
			elseif($error==1){
			   echo "Sai mat khau!";
			}
			else{
			   echo "Welcome to my website";
			}
        ?>
      <form method="post" action="login.php">
       <p> <input type="text" name="email" placeholder="Email" value="" >  </p> 
        <p><input type="password" name="password" value="" placeholder="Mật khẩu"></p>
		</br>
        
        <p class="remember_me">
          <label>
            <input type="checkbox" name="remember_me" id="remember_me">
            Duy trì đăng nhập
          </label>
        </p>
        <p class="submit"><input type="submit" name="commit" value="Login"></p>
      </form>

    </div>

    <div class="login-help">
      <p>Quên mật khẩu? <a href="index.html">Nhấp chuột vào đây</a>.</p>
    </div>
  </section>

