<?php
    require_once("php/dbconnector.php");
    session_start();
    $sqltool = "SELECT * FROM tool
    INNER JOIN type_status ON tool.statusp = type_status.statusID";
    $resulttool = mysqli_query($condb,$sqltool);
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
        <div class="col-2 border">
            <?php include("template/sidebar.php");?>
        </div>
        <div class="col-10">
                <div class="mt-4">
                    <h1>List tool</h1>
                </div>
                <hr>
                <table class="table">
                    <thead>
                        <th>รหัสอุปกรณ์</th>
                        <th>ประเภท</th>
                        <th>ยีห้อ</th>
                        <th>รุ่น</th>
                        <th>สถานะ</th>
                        <th>เปลี่ยนสถานะ</th>
                    </thead>
                    <tbody>
                        <?php 
                            $i = 1;
                            while($datatool = mysqli_fetch_array($resulttool)){ 
                        ?>
                        <tr>
                            <td><?php echo $datatool['pID']; ?></td>
                            <td><?php echo $datatool['type']; ?></td>
                            <td><?php echo $datatool['brand']; ?></td>
                            <td><?php echo $datatool['model']; ?></td>
                            <td><?php echo $datatool['status']; ?></td>
                            <td>
                                <a href="edit_status.php?pid=<?php echo $datatool['pID']; ?>"><button type="button" class="btn btn-warning">เปลี่ยนสถานะ</button></a>
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

