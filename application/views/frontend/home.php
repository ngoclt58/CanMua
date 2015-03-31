<!doctype html>
<html>
<head>

<title><?php echo $title?></title>
<link href="<?php echo base_url();?>web/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="<?php echo base_url();?>web/js/jquery.min.js"></script>
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
<div class="content">
		<div class="container">
		<div class="women-in">
			<div class="col-md-9 col-d">
				<div class="banner">
					<div class="banner-matter">
						<label>Quick...</label>
						<h2>Register</h2>
						<p>Easy...</p>
						
						</div>
						<div class="you">
							<span>Free</span>
							<small>now</small>
						</div>			
						<p  class="para-in">TOM&amp;JQUERY</p>
				</div>
				<!---->
				<div class="in-line">
					<div class="para-an">
						<h3>LATEST PRODUCT </h3>
						<p>Check our all latest products in this section.</p>
					</div>
					<div class="lady-in">
						
                            <?php foreach($info as $temp){?>
                            <div class="col-md-4 you-para">
							<a href="<?php echo base_url();?>post_view/view_one_post/<?php echo $temp['postid'];?>"><img class="img-responsive pic-in" src="<?php echo base_url();?>public/images/post/<?php echo $temp['image']; ?>" alt=" " ></a>
							<p><?php echo $temp['tenSP']?></p>
							<span><label class="cat-in"> </label> <a href="<?php echo base_url();?>post_view/view_one_post/<?php echo $temp['postid'];?>"> Detail </a></span>
                            </div>
                            <?php }?>
						
                    <div class="clearfix"> 
                    </div>
					</div>
				</div>
			</div>
					
			<div class="col-md-3 col-m-left">
				<div class="in-left">				
					<p class="code"></p>		
					<div class="cool">		
					</div>		
				</div>
				<div class="discount">
					<a href="single.html"><img class="img-responsive pic-in" src="<?php echo base_url();?>web/images/p2.jpg" alt=" " >	</a>		
						<p class="no-more">Exclusive <b>discount</b> <span>Womens wear</span></p>					
					<a href="#" class="know-more">know more</a>
				</div>
				<div class="discount">
					<a href="single.html"><img class="img-responsive pic-in" src="<?php echo base_url();?>web/images/p3.jpg" alt=" " ></a>			
						<p class="no-more no-get">Get Exclusive <b>discount on</b> <span>Ladies wear</span></p>					
					<a href="#" class="know-more">know more</a>
				</div>
				<div class="twitter-in">
					<h5>TWITTER  UPDATES</h5>
					<span class="twitter-ic">	</span>
					<div class="up-date">
						<p>@An abbjiscbxkja						</p>
						<p class="ago">About 1 hour ago via twitterfeed</p>
					</div>
					<div class="up-date">
						<p>@Ngoc nánnscnknjjknas						</p>
						<p class="ago">About 1 hour ago via twitterfeed</p>
					</div>
					<a href="#" class="tweets">More Tweets</a>
					<div class="clearfix"> </div>
				</div>
			</div>
			<div class="clearfix"> </div>
			</div>
			<!---->
			<div class="lady-in-on">
			<div class="buy-an">
						<h3>OTHER PRODUCTS</h3>
						<p>Check our all latest products in this section.</p>
					</div>
					<ul id="flexiselDemo1">	
                    <?php foreach($info as $temp){?>		
				<li><a href="<?php echo base_url();?>post_view/view_one_post/<?php echo $temp['postid'];?>"><img class="img-responsive women" src="<?php echo base_url();?>public/images/post/<?php echo $temp['image'];?>" alt=""></a>
				<div class="hide-in">
				<p><?php echo $temp['tenSP'];?></p>
				</div></li>
                <?php }?>
            </ul>
            		<script type="text/javascript">
		$(window).load(function() {
			$("#flexiselDemo1").flexisel({
				visibleItems: 4,
				animationSpeed: 1000,
				autoPlay: true,
				autoPlaySpeed: 3000,    		
				pauseOnHover: true,
				enableResponsiveBreakpoints: true,
		    	responsiveBreakpoints: { 
		    		portrait: { 
		    			changePoint:480,
		    			visibleItems: 1
		    		}, 
		    		landscape: { 
		    			changePoint:640,
		    			visibleItems: 2
		    		},
		    		tablet: { 
		    			changePoint:768,
		    			visibleItems: 3
		    		}
		    	}
		    });
		    
		});
	</script>
	<script type="text/javascript" src="<?php echo base_url();?>web/js/jquery.flexisel.js"></script>
		</div>
	</div>
	</div>
</body>
</html>