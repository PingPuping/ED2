<?php

    require_once("dbconnector.php");
    session_start();

    $user_id = $_SESSION['uid'];
    $new_pw =  sha1(trim(base64_encode($_POST['new_pw'])));//$_POST['new_pw'];
    $conf_new_pw = sha1(trim(base64_encode($_POST['conf_new_pw'])));//$_POST['conf_new_pw'];

    // ถ้ารหัสคอนเฟิร์ม กับรหัส
    if($new_pw == $conf_new_pw){

        // อัพเดทรหัสผ่าน
        $sql_change_pw = "UPDATE `user` SET `pw_login` = '$new_pw' WHERE id_login = '$user_id'";
        $result_change_pw = mysqli_query($condb,$sql_change_pw);

        // เช็คว่าการเปลี่ยนรหัสทำสำเร็จหรือไม่
        if($result_change_pw){
            
            header("location: ../login_index.php");
            // ถ้าทำเสร็จให้ทำลายเซสชั่นก่อน
            session_destroy();

        }else{
            // ทำไม่สำเร็จให้กลับไปที่
            ?><script type="text/javascript"> window.alert("การเปลี่ยนรหัสผิดพลาด");</script><?php
            header("location: ../change_pw.php");
        }
        
        

    }else{

        header("location: ../change_pw.php");
    }

?>

