<?php 
    session_start();
    require_once("php/dbconnector.php");

    // ปิด Warning
    error_reporting(E_ERROR | E_PARSE);

    // รับ Primary Key ของอุปกรณ์
    $_SESSION['single_order'] = $_GET['pid']; //แบบยืมชื้นเดียว
    $_SESSION['multi_order'] = $_GET['Iv']; //แบบยืมหลายชิ้น

    $single_order = $_SESSION['single_order'];
    $multi_order = $_SESSION['multi_order'];


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Order</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/colors_bt5.css">
    <link rel="stylesheet" href="css/sta.css">
</head>
<body>
    <?php 
        include("template/navbar.php"); 
    ?>
    <section>
        <div class="container">
            <div class="row mt-2">
                <div class="card shadow-lg">
                    <div class="card-body">
                        <div class="d-flex justify-content-center">
                            <h1>รายการของคุณ <?php echo $_SESSION['ss_user']; ?></h1>
                        </div> 
                        <hr>
                        <div class="row">
                            <table  class="table">
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
                            <div>

                            </div>
                            <form action="slip.php" method="POST">
                                <!-- ส่งค่า pk ใน order รายการเดียว -->
                                <input type="hidden" value="<?php echo $single_order; ?>" name="single_order" id=""> 
                                <!-- ส่งค่า pk ใน order หลายรายการ -->
                                <input type="hidden" value="<?php print_r($multi_order); ?>" name="multi_order" id="">
                                <!-- เลือกวันที่คืนของ -->
                                <label for="" class="form-label">กรุณาเลือกวันคืนอุปกรณ์ : <input type="date" class="form-control mb-2" name="return_date" id="return_date"></label><br>
                                <button type="submit" class="btn btn-lg bd-purple-500 me-3" >ยืนยันการยืม</button>
                                <a href="Index.php" class="btn btn-lg btn-danger">ยกเลิกการยืม</a>
                            </form>                  
                        </div>
                    </div>
                </div>
 
            </div>
        </div>
    </section>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/color_status.js"></script>
    <script>
      feather.replace()
    </script>
</body>
</html>
