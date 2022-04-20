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
    $pw_login = $_POST['pw_login'];
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
                if($_POST['pw_login']==$_POST['nd_pw_login']){ 
            ?>
                <!-- Check ว่าเคยมาลงทะเบียนหรือยัง -->
                <?php 
                    $result_check_regis ="SELECT * FROM `user` WHERE user.id_login = '$id_login'";
                    $check_regis = mysqli_query($condb,$result_check_regis);
                    $row_check_regis = mysqli_num_rows($check_regis);
                ?>
                <!-- เข้าเงื่อนไขและนำข้อมูลลงDatabase -->
                <?php if($row_check_regis>=1){ ?>
                <!-- เตือนว่่าเคยลงทะเบยนไปแล้ว -->
                    <div class=" row d-flex justify-content-center align-item-center">
                        <div class="alert alert-danger" role="alert">
                            <h4 class="alert-heading">ท่านเคยลงทะเบียนไปแล้ว</h4>
                            <p>ท่านเคยลงทะเบียนไปแล้ว โปรดไปยังหน้าเข้าสู่ระบบ</p>
                            <hr>
                            <a class="btn btn-light" href="../login_index.php">ไปยังหน้าเข้าสู่ระบบ</a>
                        </div>
                    </div>

                <?php }else{ ?>
                <!-- นำคนมาลงทะเบียน -->

                <!-- เตือนว่าลงทะเบียนเรียบร้อย -->
                <?php }?>
            <?php
                }else{
                    header('location: ../regis_new.php'); 
                }
            ?>
        </div>
    </section>


    <script src="js/bootstrap.min.js"></script>
</body>
</html>




