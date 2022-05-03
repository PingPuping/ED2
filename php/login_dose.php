<?php


    require_once("dbconnector.php");

    // ค้าที่รับมาจากฟอร์ม
    $user_id = mysqli_real_escape_string($condb,$_POST['id_login']);
    $user_password = ($_POST['pw_login']);

    // เอามาเรียกข้อมูลจาก Database
    $login = "SELECT * FROM user WHERE user.id_login = '$user_id' AND user.pw_login = '$user_password'";
    // $login = "SELECT * FROM user WHERE user.id = 631010056 AND user.password = 565758";

    // เอาคำสั่งเข้าใน DB
    $result_login = mysqli_query($condb,$login);
    // นับแถวว่าดึงออกมาได้กี่แถว
    $result_row = mysqli_num_rows($result_login);

    // เช็คว่าดึงออกมาได้แุุุถวเดียวใช่มั้ย
    if($result_row==1){
        session_start();
        // ถ้าได้แถวเดียวให้ดึงข้อมูลออกมาเป้น object
        $data = mysqli_fetch_object($result_login);
        $_SESSION['ss_user'] = $data->name;
        $_SESSION['ss_lname'] = $data->lastname;
        $_SESSION['ss_stmajor'] = $data->stmajor;
        $_SESSION['ss_ndmajor'] = $data->ndmajor;
        $_SESSION['id_login'] = $data->id_login;

        if($_SESSION['id_login']==63105010056){
            $_SESSION['role'] = 1 ;
        }else{
            $_SESSION['role'] = 2 ;
        }
        // และไปที่หน้า Index
        ?><script type="text/javascript"> window.location = '../index.php'; </script><?php
    }else{
        // echo "fail";
        ?><script type="text/javascript"> window.location = '../login_index.php'; </script><?php
    }

?>
