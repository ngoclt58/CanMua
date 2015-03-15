
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="<?php echo base_url()."public/frontend/css/login.css";?>" rel="stylesheet" type="text/css" />
<title>Forgot password</title>

</head>
<body>
<?php
    $email = array(
                        'name'        => 'email',
                        'id'          => 'email',
                        'size'        => '25',
                    );
    $submit = array(
                        "name"=>"ok",
                        "value"=>"Send",
                    );
?>
<div class="fg_password">
<?php
    echo form_open(base_url()."home/user/fg_password");
    echo form_fieldset("Quên mật khẩu");
    echo form_label("Nhập email  ")." ".form_input($email)."  ";
    echo form_label("").form_submit($submit)."<br/>";
    
    //--------------- ERROR
    echo "<span class=error>";
        echo validation_errors();
        if(isset($error) && $error!="" && !empty($error))
         echo $error;
    echo "</span>";
    //-----------------------
    echo form_fieldset_close();
    echo form_close();

?>
<br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
</div>
</body>
</html>