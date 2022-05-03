<?php
    require_once("php/dbconnector.php");
    session_start();
    $sqluser = "SELECT * FROM user";
    $resultuser = mysqli_query($condb,$sqluser);

    if($_SESSION['role']!=1){
        ?><script type="text/javascript"> window.location = 'index.php'; </script><?php
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/colors_bt5.css">
    <link rel="stylesheet" href="css/sta.css">
    <script src="https://unpkg.com/feather-icons"></script>
</head>
<body>
    <div class="sticky-top">
        <?php include("template/navbar.php");?>
    </div>
    <div class="row">
        <div class="col-2">
        <?php include("template/sidebar.php");?>
        </div>
        <div class="col-10">
        <div class="mt-4">
            <h1>List user</h1>
        </div>
        <hr>
        <table class="table">
            <thead>
                <th>ลำดับ</th>
                <th>ประเภท</th>
                <th>รหัสนิสิต/รหัสบุคลากร</th>
                <th>ชื่อ</th>
                <th>นามสกุล</th>
                <th>วิชาเอกที่ 1</th>
                <th>วิชาเอกที่ 2</th>
                <th>ลบผู้ใช้</th>
            </thead>
            <tbody>
                <?php 
                    $i = 1;
                    while($datauser = mysqli_fetch_array($resultuser)){ 
                ?>
                <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $datauser['type_user']; ?></td>
                    <td><?php echo $datauser['id_login']; ?></td>
                    <td><?php echo $datauser['name']; ?></td>
                    <td><?php echo $datauser['lastname']; ?></td>
                    <td><?php echo $datauser['stmajor']; ?></td>
                    <td><?php echo $datauser['ndmajor']; ?></td>
                    
                    <td>
                        <a href="php/DBsystem.php?act=delete&uid=<?php echo $datauser['id_login']; ?>"><button type="button" class="btn btn-danger">ลบผู้ใช้</button></a>
                        <!-- ? = get -->
                    </td>
                    
                </tr>	
                <?php
                    $i++;
                    }
                ?>
            </tbody>
        </table>
 
        </div>
    </div>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/color_status.js"></script>
    <script>
      feather.replace()
    </script>
</body>
</html>

