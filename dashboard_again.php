<!-- query -->
<?php 
    session_start();
    require_once("php/dbconnector.php");

    // ดึงข้อมูล User
    $sql_user = "SELECT * FROM `user`";
    $result_sql_user = mysqli_query($condb,$sql_user);
    $row_user = mysqli_num_rows($result_sql_user);
    
    // ดึงข้อมูลประเภทผู้ใช้งาน
    $sql_c_t_user = "SELECT type_user, COUNT('type_user')AS Ct  FROM `user` GROUP BY type_user;";
    $result_c_t_user = mysqli_query($condb,$sql_c_t_user);

    $sum_type_user = array();
    while($data_c_t_user = mysqli_fetch_array($result_c_t_user)){
        array_push($sum_type_user,array($data_c_t_user['type_user'],$data_c_t_user['Ct']));
    }

    // ดึงข้อมูลอุปกรณ์
    $sql_tool = "SELECT * FROM `tool`";
    $result_sql_tool = mysqli_query($condb,$sql_tool);
    $row_tool = mysqli_num_rows($result_sql_tool);

    // ดึงข้อมูลประเภทอุปกรณ์
    $sql_type_tool ="SELECT type, COUNT('type')AS c_type  FROM `tool` GROUP BY type;";
    $result_t_t = mysqli_query($condb,$sql_type_tool);

    $sum_t_t = array();
    while($data_t_t = mysqli_fetch_array($result_t_t)){
        array_push($sum_t_t,array($data_t_t['type'],$data_t_t['c_type']));
    }


    $sql_num_status = "SELECT
    type_status.status,COUNT('type_status.status')AS c_status
    FROM
        tool  
    INNER JOIN type_status ON tool.statusp = type_status.statusID
    GROUP BY type_status.status;";
    $result_num_status = mysqli_query($condb,$sql_num_status);

    $sum_num = array();
    while($data_num_stasus = mysqli_fetch_array($result_num_status)){
        array_push($sum_num,array($data_num_stasus['status'],$data_num_stasus['c_status']));
    }

    $tool_label = array("Fix" => "ซ่อม","Ready" => "พร้อม","NotReady" => "ไม่พร้อม");
    $tool_data = array("Fix" => $sum_num[0][1],"Ready" => $sum_num[2][1],"NotReady" => $sum_num[1][1]);



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blank</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/colors_bt5.css">
    <link rel="stylesheet" href="css/sta.css">
    <script src="https://unpkg.com/feather-icons"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.1/chart.min.js"></script>
</head>
<body>
    <div class="sticky-top">
        <?php include("template/navbar.php");?>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-2">
                <?php include("template/sidebar.php");?>
            </div>
            <!-- Content -->
            <div class="col-10">
                <div class="row mt-4">
                    
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <!-- Dashboard_User --> 
                        <div class="card shadow p-2" style="border-radius: 25px">
                            <div class="card-body">
                                <h5 class="card-text"><b>ผู้ใช้งาน</b></h5>
                                <!-- Content User -->
                                <div class="row">
                                    <div class="mt-3 text-center">
                                        <h5>จำนวนผู้ใช้งานทั้งหมด</h5>
                                        <h3><b> <?php echo $row_user; ?>: คน</b></h3>
                                    </div>
                                </div>
                                <div class="row">
                                    <!-- การ์ดแจกแจงจำนวน User -->
                                    <div class="card" style="border-radius: 25px">
                                        <div class="card-body" >
                                            <div class="row">
                                                <div class="d-flex justify-content-center">
                                                    <div class="m-3 p-1 text-center">
                                                        <h5>นิสิต</h5>
                                                        <h3><b> <?php echo $sum_type_user[0][1]; ?>: คน</b></h3>
                                                    </div>
                                                    <div class="m-3 p-1 text-center">
                                                        <h5>อาจารย์</h5>
                                                        <h3><b> <?php echo $sum_type_user[1][1]; ?>: คน</b></h3>
                                                    </div>

                                                </div> 
                                            </div>
                                        </div>
                                    </div>  
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-6 col-md-6 col-sm-12"> 
                        <!-- Dashboard_อุปกรณ์ -->
                        <div class="card shadow p-2" style="border-radius: 25px">
                            <div class="card-body">
                                <h5 class="card-text"><b>อุปกรณ์</b></h5>
                                <!-- Content User -->
                                <div class="row">
                                    <div class="mt-3 text-center">
                                        <h5>จำนวนอุปกรณ์ทั้งหมด</h5>
                                        <h3><b> <?php echo $row_tool; ?>: ชิ้น</b></h3>
                                    </div>
                                </div>
                                <div class="row">
                                    <!-- การ์ดแจกแจงจำนวนอุปกรณ์ -->
                                    <div class="card" style="border-radius: 25px">
                                        <div class="card-body" >
                                            <div class="row">
                                                <div class="d-flex justify-content-center">
                                                    <div class="m-3 p-1 text-center">
                                                        <h5>กล้อง</h5>
                                                        <h3><b> <?php echo $sum_t_t[0][1]; ?>: ตัว</b></h3>
                                                    </div>
                                                    <div class="m-3 p-1 text-center">
                                                        <h5>ไฟ</h5>
                                                        <h3><b> <?php echo $sum_t_t[1][1]; ?>: ตัว</b></h3>
                                                    </div>
                                                    <div class="m-3 p-1 text-center">
                                                        <h5>ไมโครโฟน</h5>
                                                        <h3><b> <?php echo $sum_t_t[2][1]; ?>: ตัว</b></h3>
                                                    </div>
                                                    <div class="m-3 p-1 text-center">
                                                        <h5>ฉาก</h5>
                                                        <h3><b> <?php echo $sum_t_t[3][1]; ?>: ฉาก</b></h3>
                                                    </div>
                                                    <div class="m-3 p-1 text-center">
                                                        <h5>ขาตั้ง</h5>
                                                        <h3><b> <?php echo $sum_t_t[4][1]; ?>: ตัว</b></h3>
                                                    </div>
                                                </div> 
                                            </div>
                                        </div>
                                    </div>  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Row ใหญ่ -->
                <div class="row mt-4">
                    <div class="col-12">
                        <div class="card shadow p-4 " style="border-radius: 25px">
                            <h5 class="card-text"><b>สถานะอุปกรณ์ทั้งหมดอุปกรณ์</b></h5>
                            <div class="card-body " >
                                <div id="canvas-holder"><canvas id="chart-area_tool"></canvas></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- For chart -->
    <script>
        // Config
        var config_tool = {
        type: 'bar',
        data: {
          
            labels: [<?PHP echo "'".implode("','",$tool_label)."'"; ?>],
            datasets: [{
                data: [<?PHP echo implode(",",$tool_data); ?> ],
                backgroundColor: ["#F7464A","#46BFBD","#FDB45C","#949FB1","#4D5360"]
            }]

            
        },
        options: {
            responsive: true
        }
        };
        // Onload
        window.onload = function() {

            var ctx_tool = document.getElementById("chart-area_tool").getContext("2d");
            window.myPie = new Chart(ctx_tool,config_tool)

        };

    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.1/chart.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/color_status.js"></script>
    <script>
      feather.replace()
    </script>
</body>
</html>