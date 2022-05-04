<?php 
    require_once("dbconnector.php");

    // รับคาจากฟอรมRegister
    $name_prefix = $_POST['name_prefix'];
    $type_user = $_POST['type_user'];
    $name = $_POST['name'];
    $lastname = $_POST['lastname'];
    $stmajor = $_POST['stmajor'];
    $ndmajor = $_POST['ndmajor'];
    $tel = $_POST['tel'];
    $home_tel = $_POST['home_tel'];
    $gmail = $_POST['gmail'];
    $gafe_mail = $_POST['gafe_mail'];
    $line_id = $_POST['line_id'];
    $address = $_POST['address'];
    $province = $_POST['province'];
    $zip_code = $_POST['zip_code'];
    $q_1 = $_POST['q_1'];
    $q_2 = $_POST['q_2'];
    $id_login = $_POST['id_login'];
    $pw_login = sha1(trim(base64_encode($_POST['pw_login'])));
    $nd_pw_login = $_POST['nd_pw_login'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/colors_bt5.css">
</head>
<body>
    <section class="bg-light">
        <div class="container">
            <?php
                // เช็ครหัสตั้งกับรหัสยืนยันตรงกันมั้ย
                if($_POST['pw_login']==$_POST['nd_pw_login']){ 
            ?>
                <!-- Check ว่าเคยมาลงทะเบียนหรือยัง -->
                <?php 
                    
                    $result_check_regis ="SELECT * FROM `user` WHERE user.id_login = '$id_login'";
                    $check_regis = mysqli_query($condb,$result_check_regis);
                    $row_check_regis = mysqli_num_rows($check_regis);
                ?>
                <!-- เข้าเงื่อนไขและนำข้อมูลลงDatabase -->
                <?php 
                if($row_check_regis>=1){ 
                    ?><script type="text/javascript"> window.alert("ท่านเคยลงทะเบียนไปแล้ว กรุณาลองเข้าสู่ระบบอีกครั้ง");</script><?php
                    ?><script type="text/javascript"> window.location = '../login_index.php'; </script><?php

                }else{ 
                    $sql_register = "INSERT INTO `user`(
                        `type_user`,
                        `name_prefix`,
                        `name`,
                        `lastname`,
                        `stmajor`,
                        `ndmajor`,
                        `tel`,
                        `home_tel`,
                        `gmail`,
                        `gafe_mail`,
                        `line_id`,
                        `address`,
                        `province`,
                        `zip_code`,
                        `id_login`,
                        `pw_login`,
                        `q_1`,
                        `q_2`
                    )VALUES(
                        '$type_user',     
                        '$name_prefix',
                        '$name',
                        '$lastname',
                        '$stmajor',
                        '$ndmajor',
                        '$tel',
                        '$home_tel',
                        '$gmail',
                        '$gafe_mail',
                        '$line_id',
                        '$address',
                        '$province',
                        '$zip_code',
                        '$id_login',
                        '$pw_login',
                        '$q_1',
                        '$q_2'
                    )";
                    
                    $result_register = mysqli_query($condb,$sql_register);

                    if($result_register){
                        ?><script type="text/javascript"> window.alert("ลงทะเบียนสำเร็จ กรุณาเข้าสู่ระบบอีกครั้ง");</script><?php 
                        header('location: ../login_index.php');
                        
                    }else{
                        ?><script type="text/javascript"> window.alert("ลงทะเบียนไม่สำเร็จ ผิดพลาด!");</script><?php
                        header('location: ../regis.php');
                    }

                
                }?>
            <?php
                }else{
                    header('location: ../regis.php'); 
                }
            ?>
        </div>
    </section>


    <script src="js/bootstrap.min.js"></script>
</body>
</html>




