<?php
    //--- Giu gia tri cua form
    $tenSP = array(
                        "name"  => "tenSP",
                        "id"    => "tenSP",
                        "size"  => "30",
                        "value" => set_value("tenSP"),
                    );
    $khuVuc = array(
                        'name'        => 'khuVuc',
                        'id'          => 'fname',
                        'size'        => '30',
                        'value'       => set_value('khuVuc'),
                    );

    $yeuCau = array(
                        'name'        => 'yeuCau',
                        'id'          => 'lname',
                        'size'        => '30',
                        'value'       => set_value('yeuCau'),
                    );

    $danhMuc = array(
                        'name'        => 'danhMuc',
                        'id'          => 'lname',
                        'size'        => '30',
                        'value'       => set_value('danhMuc'),
                    );
    $lienHe = array(
                        'name'        => 'lienHe',
                        'id'          => 'lienHe',
                        'size'        => '30',
                        'value'       => set_value('lienHe'),
                    );
    $email = array(
                        'name'        => 'email',
                        'id'          => 'email',
                        'size'        => '30',
                        'value'       => set_value('email'),
                    );
?>

<div class="box_entry" id="box_entry">
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
     <form action="" method="post" enctype="multipart/form-data">
        <fieldset>
        <legend>ĐĂNG BÀI</legend>

        <label>Tên sản phẩm</label><br /><?php echo form_input($tenSP);?><br />

        <label>Khu Vực</label><br /><?php echo form_input($khuVuc);?><br />

        <label>Yêu Cầu</label><br /><?php echo form_input($yeuCau);?><br />

        <label>Danh Mục</label><br /><?php echo form_input($danhMuc);?><br />

        <label>Email</label><br /><?php echo form_input($email);?><br />

        <label>Liên Hệ</label><br /><?php echo form_input($lienHe);?><br />

        <br/>
        <br/>
        <label>Ảnh minh họa</label><input type="file" id="userfile" name="userfile" ><br/>
        <center>	
        <label>&nbsp;</label> <input type="submit" name="ok" value="OK" ><br />
        </center>
        <br />
        </fieldset>
    </form>
    </div>
</div>