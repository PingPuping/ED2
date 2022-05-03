<?php

    require_once("dbconnector.php");
    session_start();

    $user_id = $_SESSION['uid'];
    $new_pw = $_POST['new_pw'];
    $conf_new_pw = $_POST['conf_new_pw'];

    if($new_pw == $conf_new_pw){

        $sql_change_pw = "UPDATE `user` SET `pw_login` = '$new_pw' WHERE id_login = '$user_id'";
        $result_change_pw = mysqli_query($condb,$sql_change_pw);

        if($result_change_pw){
            header("location: ../login_index.php");
            session_destroy();
        }else{
            ?><script type="text/javascript"> window.alert("การเปลี่ยนรหัสผิดพลาด");</script><?php
            header("location: ../change_pw.php");
        }
        
        

    }else{
        header("location: ../change_pw.php");
    }

?>

