<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Fashion Store A Fashion Category Flat Bootstarp Resposive Website Template | Home :: w3layouts</title>
<link href="<?php echo base_url();?>web/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<!--theme-style-->
<link href="<?php echo base_url();?>web/css/style.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--fonts-->
<link href='http://fonts.googleapis.com/css?family=Libre+Baskerville:400,700,400italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Oswald:400,700,300' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
<!--//fonts-->
</head>
<body> 
	  <!--header-->
		<div class="header">
		<div class="header-top">
			<div class="container">
				<div class="header-grid">
					<ul>
						<li  ><a href="#" class="scroll">Articles</a></li>
						<li><a href="#" class="scroll">Contact  </a></li>
						<li><a href="#" class="scroll">Privacy</a></li>
						<li><a href="#" class="scroll">Terms</a></li>						
					</ul>
				</div>
				<div class="header-grid-right">
                   <a href="<?php base_url();?>/CanMua/home/verify/logout" class="sign-out"> Sign out</a>
					<label>|</label>
                    
					<a href="<?php base_url();?>/CanMua/home/user/register" class="sign-up"> Sign up</a>
                    
                    <label>|</label>
                    
                     <a href="<?php base_url();?>/CanMua/home/verify/login" class="sign-in"> Sign in</a>
                    
                    
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<div class="container">
		<div class="header-bottom">			
				<div class="logo">
					<a href="<?php echo base_url();?>Index"><img src="<?php echo base_url();?>web/images/a.jpg" width="1140" height="100" " alt=" " ></a>
				</div>
					
				<div class="clearfix"> </div>
			</div>	
			<div class="header-bottom-bottom">
				<div class="top-nav">
					<span class="menu"> </span>
					<ul>
						<li class="active"><a href="<?php echo base_url();?>Index">HOME </a></li>
						<li><a href="<?php echo base_url();?>post/new_post" >NEW</a></li>
						<li><a href="<?php echo base_url();?>home/user/profile" >ACCOUNT</a></li>
						<li><a href="<?php echo base_url();?>post_view/list_by_user" >MY COLLECTION</a></li>
						<li><a href="collection.html" >STORE PRODUCTS</a></li>
						<li><a href="collection.html" >LATEST  PRODUCT</a></li>
					</ul>	
				<script>
					$("span.menu").click(function(){
						$(".top-nav ul").slideToggle(500, function(){
						});
					});
				</script>
					
					<div class="clearfix"> </div>					
				</div>
				<div class="search">
					<form>
						<input type="text" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" >
						<input type="submit"  value="">
					</form>
				</div>
				<div class="clearfix"> </div>
				</div>
		</div>
	</div>
	<!--content-->
	<?php echo $content_for_layout ;?>
	<!---->
	<div class="footer">
		<div class="container">
				<div class="footer-class">
				<div class="class-footer">
					<ul>
						<li ><a href="<?php echo base_url();?>Index" class="scroll">HOME </a><label>|</label></li>
						<li><a href="<?php echo base_url();?>post/new_post" class="scroll">NEW</a><label>|</label></li>
						<li><a href="<?php echo base_url();?>home/user/profile" class="scroll">ACCOUNT</a><label>|</label></li>
						<li><a href="<?php echo base_url();?>post_view/list_by_user" class="scroll">MY COLLECTION</a><label>|</label></li>
						<li><a href="collection.html" class="scroll">STORE PRODUCTS</a><label>|</label></li>
						<li><a href="collection.html" class="scroll">LATEST  PRODUCTS</a></li>
					</ul>
					 <p class="footer-grid">&copy; 2015<a href="http://w3layouts.com/" target="_blank"></a> </p>
				</div>	 
				<div class="footer-left">
					
				</div> 
				<div class="clearfix"> </div>
			 	</div>
		 </div>
	</div>
</body>
</html>