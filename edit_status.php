<?php
    require_once("php/dbconnector.php");
    session_start();
    $pid = $_GET['pid']; //รับ Primary key
    $selectrow = "SELECT *
    FROM tool
    LEFT JOIN type_status ON tool.statusp = type_status.statusID
    WHERE tool.pID = '$pid'";
    $resultselectrow = mysqli_query($condb,$selectrow);
    $rowselect = mysqli_fetch_array($resultselectrow);
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
</head>
<body>
    <?php include("template/navbar.php"); ?>

        <div class="container">
            <div class="card p-3 mt-5 shadow p-3 mb-5 bg-body rounded">
                <div class="card-body">
                    <h1 class="card-title">แก้ไขสถานะอุปกรณ์</h1>
                    <h5 class="card-title">รหัสอุปกรณ์ : <?php echo $pid;?></h5>
                    <h5 class="card-title">สถานะปัจจุบัน : <?php echo $rowselect['status'];?></h5>
                    <form action="php/DBsystem.php" method="GET">
                        <input type="hidden" name="pid" id="" value="<?php echo $pid;?>">
                        <input type="hidden" name="act" id="" value="edit">
                        <div class="row">
                            <div class="col">
                                <select name="edit_status" class="form-select" id="">
                                    <option value="1" <?php if($rowselect['status'] == "Ready"){echo"SELECTED";} ?>>Ready</option>
                                    <option value="2" <?php if($rowselect['status'] == "NotReady"){echo"SELECTED";} ?>>NotReady</option>
                                    <option value="3" <?php if($rowselect['status'] == "Fix"){echo"SELECTED";} ?>>Fix</option>
                                </select>
                            </div>
                            <div class="col">
                                <button type="submit" class="btn btn-warning">ยืนยันสถานะ</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>

    <script src="js/bootstrap.min.js"></script>
</body>
</html>