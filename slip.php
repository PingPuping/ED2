<?php 
    session_start();
    require_once("php/dbconnector.php");

    $return_date = $_POST['return_date'];
    $single_order = $_POST['single_order'];
    $multi_order = $_POST['multi_order'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>slip</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/colors_bt5.css">
    <link rel="stylesheet" href="css/sta.css">
</head>
<body>
    <?php 
        include("template/navbar.php"); 
    ?>
    <div class="container">
        <div class="row justify-content-center mt-4">
            <div class="col-lg-12 col-md-10">

                <div class="card shadow" style="border-radius: 20px;">
                    
                    <div class="card-body p-3">
                        <h1 class="card-title text-center">สรุปรายการ</h1>
                        <?php
                            echo $return_date."<br>";
                            print_r($multi_order);
                            echo $single_order;
                        ?>
                    </div>

                    <div class="row">
                        <table class="table"> 
                            <thead>
                                <th>รหัสอุปกรณ์</th>
                                <th>ยีห้อ</th>
                                <th>รุ่น</th>
                            </thead>
                            <tbody>
                            <?php
                                // ดึงข้อมูล order ที่ user เลือกมาแสดงให้เห็นก่อน                                        
                                if(isset($multi_order)){ //ุ                                            
                                // กรณีเลือกหลายรายการ
                                    for($i=0;$i<=count($multi_order)-1;$i++){
                                        $sql_show_order="SELECT tool.pID, tool.brand, tool.model FROM `tool` WHERE pID='$multi_order[$i]'";
                                        $result_show_order = mysqli_query($condb,$sql_show_order);
                                        $data_order = mysqli_fetch_array($result_show_order);  

                                    ?>
                                    <tr>
                                        <td><?php echo$data_order['pID']; ?></td>
                                        <td><?php echo$data_order['brand']; ?></td>
                                        <td><?php echo$data_order['model']; ?></td>
                                    </tr>
                                    <?php 
                                        } }else{ 
                                        $sql_show_order="SELECT tool.pID, tool.brand, tool.model FROM `tool` WHERE pID='$single_order'";
                                        $result_show_order = mysqli_query($condb,$sql_show_order);
                                        $data_order = mysqli_fetch_array($result_show_order); 
                                    ?>
                                    <tr>
                                        <td><?php echo$data_order['pID']; ?></td>
                                        <td><?php echo$data_order['brand']; ?></td>
                                        <td><?php echo$data_order['model']; ?></td>
                                    </tr>
                                    <?php
                                        }
                                    ?>
                            </tbody>    
                        </table>
                    </div>
                </div>


            </div>
        </div>

    </div>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/color_status.js"></script>
    <script>
      feather.replace()
    </script>
</body>
</html>