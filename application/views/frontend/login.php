<?php
    $username = array(
                        'name'        => 'username',
                        'id'          => 'username',
                        'size'        => '25',
                    );
    $password = array(
                        'name'        => 'password',
                        'id'          => 'password',
                        'size'        => '25',
                    );
    $submit = array(
                        "name"=>"ok",
                        "value"=>"OK",
                    );
?>
<head>
<link href="<?php echo base_url()."public/frontend/css/login.css";?>" rel="stylesheet" type="text/css" />
<title>Signin</title>

</head>
<body>
<div class="formSignin">
<?php
    echo form_open(base_url()."home/verify/login");
    echo form_fieldset("Login");
    echo form_label("Username : ")."<br />".form_input($username)."<br/>";
    echo form_label("Password : ")."<br />".form_password($password)."<br/><br/>";
    echo form_label("").form_submit($submit)."<br/>";
    
    echo "<a href='".base_url()."home/user/register'>Register</a> | ";
    echo "<a href='".base_url()."home/user/fg_password'>Forgot Password</a><br/>";
    //--------------- ERROR
    echo "<span class=error>";
        echo validation_errors();
        if($error!="")
         echo $error;
    echo "</span>";
    //-----------------------
    echo form_fieldset_close();
    echo form_close();
    
?>
</div>
</body>
</html>