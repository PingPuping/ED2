<?php
    session_start();
    require_once("php/dbconnector.php");

    $return_date = $_POST['return_date'];
    $single_order = $_SESSION['single_order'];
    $multi_order = $_SESSION['multi_order'];

    $date = date_default_timezone_set("Asia/Bangkok");
    $dateGet = date('y/m/d');
    $uid = $_SESSION['id_login'];
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
                    <div class="card-body p-4">

                        <!-- Header -->
                        <h1 class="card-title text-center">สรุปรายการ</h1>
                        <hr>
                        <!-- แสดงข้อมูลผู้ยืม -->
                        <div class="row d-flex">
                            <div class="col-12 ">
                                <p>ชื่อ : <?php echo $_SESSION['ss_user']; ?></p>
                                <p>นามสกุล : <?php echo $_SESSION['ss_lname']; ?></p>
                                <p>เอกที่ 1 : <?php echo $_SESSION['ss_stmajor']; ?></p>
                                <p>เอกที่ 2 : <?php echo $_SESSION['ss_ndmajor']; ?></p>
                            </div>

                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-12">
                                <!-- ตารางสรุปรายการยืม -->
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
                                                $ToolID = $data_order['pID']

                                        ?>
                                        <?php
                                          $sql_checkmas = "SELECT COUNT(UserID)AND(ReturnDate) AS total FROM his_master WHERE UserID = '$uid' AND GetDate = '$dateGet'; ";
                                          $result_checkmas = mysqli_query($condb,$sql_checkmas);
                                          $datamas = mysqli_fetch_assoc($result_checkmas);
                                          ?>
                                          <?php
                                          if ($datamas['total'] == 1) {


                                          }
                                          else {
                                            $mas = "INSERT INTO his_master (	MasID , UserID , GetDate , ReturnDate , Status ) VALUES (NULL , '$uid' , '$dateGet', '$return_date' , 'ยังไม่คืน')";
                                            $result_mas = mysqli_query($condb, $mas);

                                          }
                                           ?>
                                        <?php
                                        $maid = "SELECT * FROM `his_master` WHERE UserID = '$uid' AND GetDate = '$dateGet'";
                                        $remaid = mysqli_query($condb, $maid);
                                        $datamaid = mysqli_fetch_assoc($remaid);
                                        $masid = $datamaid['MasID']
                                         ?>
                                        <?php
                                          $det = "INSERT INTO his_details (	DetailID , MasID , UserID , ToolID , GetDate , ReturnDate , Status ) VALUES (NULL , '$masid' , '$uid' , '$ToolID' , '$dateGet' , '$return_date' , 'ยังไม่คืน')";
                                          mysqli_query($condb, $det);
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
                                            $ToolID = $data_order['pID']
                                        ?>
                                        <?php
                                          $sql_checkmas = "SELECT COUNT(UserID)AND(ReturnDate) AS total FROM his_master WHERE UserID = '$uid' AND GetDate = '$dateGet'; ";
                                          $result_checkmas = mysqli_query($condb,$sql_checkmas);
                                          $datamas = mysqli_fetch_assoc($result_checkmas);
                                          ?>
                                          <?php
                                          if ($datamas['total'] == 1) {


                                          }
                                          else {
                                            $mas = "INSERT INTO his_master (	MasID , UserID , GetDate , ReturnDate , Status ) VALUES (NULL , '$uid' , '$dateGet', '$return_date' , 'ยังไม่คืน')";
                                            $result_mas = mysqli_query($condb, $mas);

                                          }
                                           ?>
                                        <?php
                                        $maid = "SELECT * FROM `his_master` WHERE UserID = '$uid' AND GetDate = '$dateGet'";
                                        $remaid = mysqli_query($condb, $maid);
                                        $datamaid = mysqli_fetch_assoc($remaid);
                                        $masid = $datamaid['MasID']
                                         ?>
                                        <?php
                                          $det = "INSERT INTO his_details (	DetailID , MasID , UserID , ToolID , GetDate , ReturnDate , Status ) VALUES (NULL , '$masid' , '$uid' , '$ToolID' , '$dateGet' , '$return_date' , 'ยังไม่คืน')";
                                          mysqli_query($condb, $det);
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

                                <h4>จำนวนอุปกรณ์ที่ยืมทั้งหมด :
                                <?php
                                    if(isset($i)){
                                        echo $i;
                                    }else{
                                        echo 1;
                                    }
                                ?> ชิ้น</h4>


                            </div>

                        </div>
                        <hr>
                        <div class="row">
                            <h4 class="text-danger">กำหนดคืนอุปกรณ์ทั้งหมดในวันที่ <?php echo $return_date; ?></h4>
                        </div>
                        <hr>
                        <div>
                            <h5 class="text-danger">**กรุณาถ่ายภาพ หรือบันทึกหน้าจอนี้ไว้</h5>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-center mt-4">
                    <a href="Index.php" class="btn btn-danger btn-lg">กลับสู่หน้าหลัก</a>
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
