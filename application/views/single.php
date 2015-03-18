
<!DOCTYPE html>
<html>
<head>
<title>Product</title>
<link href="file:///C|/wamp/www/CanMua2/web/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="file:///C|/wamp/www/CanMua2/web/js/jquery.min.js"></script>
<!-- Custom Theme files -->
<!--theme-style-->
<link href="file:///C|/wamp/www/CanMua2/web/css/style.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--fonts-->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Oswald:400,700,300' rel='stylesheet' type='text/css'>
<!--//fonts-->
<link rel="stylesheet" href="file:///C|/wamp/www/CanMua2/web/css/etalage.css">
<script src="file:///C|/wamp/www/CanMua2/web/js/jquery.etalage.min.js"></script>
<script>
			jQuery(document).ready(function($){

				$('#etalage').etalage({
					thumb_image_width: 300,
					thumb_image_height: 400,
					source_image_width: 900,
					source_image_height: 1200,
					show_hint: true,
					click_callback: function(image_anchor, instance_id){
						alert('Callback example:\nYou clicked on an image with the anchor: "'+image_anchor+'"\n(in Etalage instance: "'+instance_id+'")');
					}
				});

			});
		</script>
<!-- the jScrollPane script -->
<script type="text/javascript" src="file:///C|/wamp/www/CanMua2/web/js/jquery.jscrollpane.min.js"></script>
		<script type="text/javascript" id="sourcecode">
			$(function()
			{
				$('.scroll-pane').jScrollPane();
			});
		</script> 
</head>
<body> 
	 	<!--content-->
	<div class="content">
		<div class="container">
		<div class="single">
		<div class="col-md-9">
			<div class="single_grid">
				<div class="grid images_3_of_2">
                        <a href="#"><img class="etalage_thumb_image img-responsive" src="<?php echo base_url()?>public/images/post/<?php echo $info['image']; ?>"  height="10px" alt=" " ></a>
						 <div class="clearfix"> </div>		
				  </div> 
				  <!---->
				  <div class="span1_of_1_des">
				  <div class="desc1">
					<h3><?php echo $info['tenSP']?> </h3>
				<br/>	<p><h4><u>Yêu cầu:</u> <?php echo $info['yeuCau']?></h4></p>
					<h5><a href="#"></a></h5>
					<div class="available">
						<h4></h4>
						
						<div class="form-in">
							<a href="#">Add To Cart</a>
						</div>
						<span class="span_right"><a href="#">login to save in list </a></span>
						<div class="clearfix"></div>
					</div>
					<div class="share-desc">
						<div class="share">
							<h4>Share Product :</h4>
							<ul class="share_nav">
								<li><a href="#"><img src="<?php echo base_url();?>web/images/facebook.png" title="facebook"></a></li>
								<li><a href="#"><img src="<?php echo base_url();?>web/images/twitter.png" title="Twiiter"></a></li>
								<li><a href="#"><img src="<?php echo base_url();?>web/images/rss.png" title="Rss"></a></li>
								<li><a href="#"><img src="<?php echo base_url();?>web/images/gpluse.png" title="Google+"></a></li>
				    		</ul>
						</div>
						<div class="clearfix"></div>
					</div>
			   	 </div>
			   	</div>
          	    <div class="clearfix"></div>
          	   </div>
							<div class="resp-tabs-container">
							    <h2 class="resp-accordion resp-tab-active" role="tab" aria-controls="tab_item-0"><span class="resp-arrow"></span>Product Description</h2><div class="tab-1 resp-tab-content resp-tab-content-active" aria-labelledby="tab_item-0" style="display:block">
                                <?php foreach($comment as $temp){?>
									<div class="facts">
                                    <a href="#"><img class="etalage_thumb_image img-responsive" src="<?php echo base_url();?>public/images/avata/<?php echo $temp['image']; ?>"  height="60px" width="60px" alt=" " ><b><?php echo $temp['username']?></b></a>
                                   
									  <p ><?php echo $temp['content']?></p>
                                      <span><?php echo $temp['add_date']?></span>
										       
							        </div>
                                    <br />
                                    <?php }?>
							    	</div>
							      
							
					 </div>
					 <script src="file:///C|/wamp/www/CanMua2/web/js/easyResponsiveTabs.js" type="text/javascript"></script>
		    <script type="text/javascript">
			    $(document).ready(function () {
			        $('#horizontalTab').easyResponsiveTabs({
			            type: 'default', //Types: default, vertical, accordion           
			            width: 'auto', //auto or any width like 600px
			            fit: true   // 100% fit in a container
			        });
			    });
			   </script>	

	</div>
	</div>
	<!---->
	<div class="col-md-3">
	  <div class="w_sidebar">
		<section  class="sky-form">
					<h4>catogories</h4>
						<div class="row1 scroll-pane">
							<div class="col col-4">
								<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>Điện tử</label>
							</div>
							<div class="col col-4">
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Viễn thông</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Điện lạnh</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Thiết bị tin học</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Âm thanh</label>
								<label class="checkbox"><input type="checkbox" name="checkbox" ><i></i>Kỹ thuật số</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Đồ gia dụng</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Xe điện</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Phụ kiện</label>
							</div>
						</div>
		</section>
		
		<section class="sky-form">
			
		</section>
		<section class="sky-form">
						
												
		</section>
	</div>
   </div>
   <div class="clearfix"> </div>
	</div>
	</div>
	</div>
	<!---->
		
</body>
</html>