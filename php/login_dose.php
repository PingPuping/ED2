<?php

    session_start();
    require_once("dbconnector.php");

    // ค้าที่รับมาจากฟอร์ม
    $user_id = mysqli_real_escape_string($condb,$_POST['id_login']);
    $user_password = ($_POST['pw_login']);

    // เอามาเรียกข้อมูลจาก Database 
    $login = "SELECT * FROM user WHERE user.id_login = '$user_id' AND user.pw_login = '$user_password'";
    // $login = "SELECT * FROM user WHERE user.id = 631010056 AND user.password = 565758";

    $result_login = mysqli_query($condb,$login);
    $result_row = mysqli_num_rows($result_login);

    
    if($result_row==1){
        $data = mysqli_fetch_object($result_login);
        $_SESSION['ss_user'] = $data->name;
        
        ?><script type="text/javascript"> window.location = '../index.php'; </script><?php
    }else{
        // echo "fail";
        ?><script type="text/javascript"> window.location = '../login_index.php'; </script><?php
    }

?>


