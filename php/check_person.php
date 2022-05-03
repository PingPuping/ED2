<?php
    
    require_once("dbconnector.php");

    $user_id = $_GET['idlogin'];
    $q1 = $_GET['q1'];
    $q2 = $_GET['q2'];

    $sql = "SELECT * 
    FROM `user` WHERE id_login = '$user_id' AND (q_1 = '$q1' OR q_2 = '$q2')
    ";


    $result_check_person = mysqli_query($condb,$sql);

    $row_cps = mysqli_num_rows($result_check_person);

    if($row_cps==1){
        
        header('location: ../change_pw.php');
        
        session_start();
        $_SESSION['uid'] =  $user_id;
    }else{
        header('location: ../person_ac.php');
    }



?>