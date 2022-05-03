<?php
    session_start();
    require_once("dbconnector.php");
    
    if($_GET['act']=="edit"){

        $pk_tool = $_GET['pid'];
        $new_status = $_GET['edit_status'];
        $update_status = "UPDATE `tool` SET `statusp`= '$new_status' WHERE tool.pID = '$pk_tool'";
        $resultupdate = mysqli_query($condb,$update_status);

        if($resultupdate){
            header("location: ../list_tool.php");
        }else{
            echo "Something wrong in Update!";
        }


    }elseif($_GET['act']=='delete'){
        
        // ลบผู้ใช้งาน
        $uid = $_GET['uid'];
        $delete_user = "DELETE FROM `user` WHERE user.id_login ='$uid'";
        $resultdelete = mysqli_query($condb,$delete_user);

        if($resultdelete){
            header("location: ../list_user.php");
        }else{
            echo "Something wrong in Delete!";
        }
        
    }elseif($_GET['act']=='change_pw'){

    }









    // if($_GET['type']=="edit"){
    //     // Edit
    //     $pk_tool = $_GET['pid'];
    //     $new_status = $_GET['edit_status'];
    //     $update_status = "UPDATE `tool` SET `statusp`= '$new_status' WHERE tool.pID = '$pk_tool'";
    //     $resultupdate = mysqli_query($condb,$update_status);

    //     if($resultupdate){
    //         header("location: ../list_tool.php");
    //     }else{
    //         echo "Something wrong in Update!";
    //     }

    // }elseif($_GET['type']=="delete"){
    //     // Delete
    //     $uid = $_GET['uid'];
    //     echo $_GET['type'];
    //     $delete_user = "DELETE FROM `user` WHERE user.id ='$uid'";
    //     $resultdelete = mysqli_query($condb,$delete_user);

    //     if($resultdelete){
    //         header("location: ../list_user.php");
    //     }else{
    //         echo "Something wrong in Delete!";
    //     }

    // }


?>

