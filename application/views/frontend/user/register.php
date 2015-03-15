<?php
    //--- Giu gia tri cua form
    $full_name = array(
                        "name"  => "full_name",
                        "id"    => "full_name",
                        "size"  => "30",
                        "value" => set_value("full_name")
                    );
    $username = array(
                        'name'        => 'username',
                        'id'          => 'fname',
                        'size'        => '30',
                        'value'       => set_value('username'),
                    );

    $password = array(
                        'name'        => 'password',
                        'id'          => 'lname',
                        'size'        => '30',
                        'value'       => set_value('password'),
                    );

    $repassword = array(
                        'name'        => 'repassword',
                        'id'          => 'lname',
                        'size'        => '30',
                        'value'       => set_value('repassword'),
                    );
    $address = array(
                        'name'        => 'address',
                        'id'          => 'address',
                        'size'        => '30',
                        'value'       => set_value('address'),
                    );
    $phone = array(
                        'name'        => 'phone',
                        'id'          => 'phone',
                        'size'        => '30',
                        'value'       => set_value('phone'),
                    );
    $email = array(
                        'name'        => 'email',
                        'id'          => 'email',
                        'size'        => '30',
                        'value'       => set_value('email'),
                    );
?>

<div id="box_entry">
      <div class="error">
        <ul>
            <?php
                echo validation_errors('<li>','</li>');
                if($error!="" && !empty($error))
                    echo $error;
            ?>
        </ul>
      </div>
      <div class="formSignup">
     <form name="formSignup" id="formSignup" action="" method="post" enctype="multipart/form-data">
        <fieldset>
        <legend>Member Register</legend>

        <label>Full name</label><br /><?php echo form_input($full_name);?><br />

        <label>Username</label><br /><?php echo form_input($username);?><br />

        <label>Password</label><br /><?php echo form_password($password);?><br />

        <label>Re-Password</label><br /><?php echo form_password($repassword);?><br />

        <label>Email</label><br /><?php echo form_input($email);?><br />

        <label>Address</label><br /><?php echo form_input($address);?><br />

        <label>Phone</label><br /><?php echo form_input($phone);?><br />

        <label>Gender</label>
            Male <input name="gender" id="male" value="1" type="radio" />
            Female <input name="gender" id="female" value="2" type="radio"/>
            Unknown <input name="gender" id="unknown" value="3" type="radio"
             />
        <br/>
        <br/>
        <label>Avatar</label><input type="file" id="userfile" name="userfile" ><br/>
        <center>	
        <label>&nbsp;</label> <input type="submit" name="ok" value="Register" ><br />
        </center>
        <br />
        </fieldset>
    </form>
    </div>
</div>