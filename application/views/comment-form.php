
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="<?php echo base_url()."web/css/style.css";?>" rel="stylesheet" type="text/css" />
<title>Comment</title>

</head>
<body>
<div class="comment-form" id="comment-form">
<?php
    $content = array(
                        'name'        => 'content',
                        'id'          => 'content',
                        'size'        => '250',
						 'style'       => 'width:50%',
						'placeholder' => 'Comment...'
                    );
?>
<div class="fg_password">
<?php
    echo form_open(base_url()."post/comment/".$postid);
    echo form_input($content);
    echo form_close();

?>
<br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
</div>
</div>
</body>
</html>