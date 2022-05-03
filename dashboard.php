<!-- php and query -->
<?php 
    require_once("php/dbconnector.php");
    session_start();

    

    // จำนวนอุปกรณ์ทั้งหมด
    $sql_tool = "SELECT * FROM `tool` WHERE 1";
    $result_sql_tool = mysqli_query($condb,$sql_tool);
    $total_tool = mysqli_num_rows($result_sql_tool);


    // $sql_count = "SELECT COUNT(type) as cunt_type
    // FROM `tool` GROUP BY tool.type;";
    

    // // $sql_count = "SELECT COUNT(type) as cunt_type FROM `tool` GROUP BY tool.type;";
    // $result_sql_count = mysqli_query($condb,$sql_count);
    // $row_count = mysqli_num_rows($result_sql_count);

    // print_r($row_count);

    
    // ดึงข้้อมูลและหา "จำนวนกล้อง" ทั้งหมด
    $sql_cam = "SELECT * FROM `tool` WHERE type='CAM'";
    $result_sql_cam = mysqli_query($condb,$sql_cam);
    $total_cam = mysqli_num_rows($result_sql_cam);

    $sql_cam_status = "SELECT
    COUNT(tool.pID) AS pd_val, 
    CASE 
    WHEN type_status.status = 'Ready' THEN 'Count_Ready'
    WHEN type_status.status = 'NotReady' THEN 'Count_NoTReady'
    ELSE 'Count_Fix'
    END count_sta
    FROM
    tool
    JOIN type_status ON tool.statusp = type_status.statusID
    WHERE tool.type = 'CAM'
    GROUP BY
    type_status.statusID;";
    $result_cam_status = mysqli_query($condb,$sql_cam_status);
    $sum_cam = array();
    while($data_cam = mysqli_fetch_array($result_cam_status)){
        array_push($sum_cam,array($data_cam['pd_val'],$data_cam['count_sta']));
    }
    $cam_label = array("Count_Ready" => "พร้อม", "Count_NotReady" => "ไม่พร้อม", "Count_Fix" => "ซ่อม");
    $cam_data = array("Count_Ready" => $sum_cam[0][0], "Count_NotReady" => $sum_cam[1][0], "Count_Fix" => $sum_cam[2][0]);



    // ดึงข้้อมูลและหา "จำนวนไมค์" ทั้งหมด
    $sql_mic = "SELECT * FROM `tool` WHERE type='MIC'";
    $result_sql_mic = mysqli_query($condb,$sql_mic);
    $total_mic = mysqli_num_rows($result_sql_mic);

    $sql_mic_status = "SELECT
    COUNT(tool.pID) AS pd_val, 
    CASE 
    WHEN type_status.status = 'Ready' THEN 'Count_Ready'
    WHEN type_status.status = 'NotReady' THEN 'Count_NoTReady'
    ELSE 'Count_Fix'
    END count_sta
    FROM
    tool
    JOIN type_status ON tool.statusp = type_status.statusID
    WHERE tool.type = 'MIC'
    GROUP BY
    type_status.statusID;";
    $result_mic_status = mysqli_query($condb,$sql_mic_status);
    $sum_mic = array();
    while($data_mic = mysqli_fetch_array($result_mic_status)){
        array_push($sum_mic,array($data_mic['pd_val'],$data_mic['count_sta']));
    }
    $mic_label = array("Count_Ready" => "พร้อม", "Count_NotReady" => "ไม่พร้อม", "Count_Fix" => "ซ่อม");
    $mic_data = array("Count_Ready" => $sum_mic[0][0], "Count_NotReady" => $sum_mic[1][0], "Count_Fix" => $sum_mic[2][0]);



    // ดึงข้้อมูลและหา "จำนวนขาตั้ง" ทั้งหมด
    $sql_trip = "SELECT * FROM `tool` WHERE type='TRIP';";
    $result_sql_trip = mysqli_query($condb,$sql_trip);
    $total_trip = mysqli_num_rows($result_sql_trip);

    $sql_trip_status = "SELECT
    COUNT(tool.pID) AS pd_val, 
    CASE 
    WHEN type_status.status = 'Ready' THEN 'Count_Ready'
    WHEN type_status.status = 'NotReady' THEN 'Count_NoTReady'
    ELSE 'Count_Fix'
    END count_sta
    FROM
    tool
    JOIN type_status ON tool.statusp = type_status.statusID
    WHERE tool.type = 'TRIP'
    GROUP BY
    type_status.statusID;";
    $result_trip_status = mysqli_query($condb,$sql_trip_status);
    $sum_trip = array();
    while($data_trip = mysqli_fetch_array($result_trip_status)){
        array_push($sum_trip,array($data_trip['pd_val'],$data_trip['count_sta']));
    }
    $trip_label = array("Count_Ready" => "พร้อม", "Count_NotReady" => "ไม่พร้อม", "Count_Fix" => "ซ่อม");
    $trip_data = array("Count_Ready" => $sum_trip[0][0], "Count_NotReady" => $sum_trip[1][0], "Count_Fix" => $sum_trip[2][0]);



    // ดึงข้้อมูลและหา "จำนวนไฟ" ทั้งหมด
    $sql_ligh = "SELECT * FROM `tool` WHERE type='LIGH'";
    $result_sql_ligh = mysqli_query($condb,$sql_ligh);
    $total_ligh = mysqli_num_rows($result_sql_ligh);

    $sql_ligh_status = "SELECT
    COUNT(tool.pID) AS pd_val, 
    CASE 
    WHEN type_status.status = 'Ready' THEN 'Count_Ready'
    WHEN type_status.status = 'NotReady' THEN 'Count_NoTReady'
    ELSE 'Count_Fix'
    END count_sta
    FROM
    tool
    JOIN type_status ON tool.statusp = type_status.statusID
    WHERE tool.type = 'LIGH'
    GROUP BY
    type_status.statusID;";
    $result_ligh_status = mysqli_query($condb,$sql_ligh_status);
    $sum_ligh = array();
    while($data_ligh = mysqli_fetch_array($result_ligh_status)){
        array_push($sum_ligh,array($data_ligh['pd_val'],$data_ligh['count_sta']));
    }
    $ligh_label = array("Count_Ready" => "พร้อม", "Count_NotReady" => "ไม่พร้อม", "Count_Fix" => "ซ่อม");
    $ligh_data = array("Count_Ready" => $sum_ligh[0][0], "Count_NotReady" => $sum_ligh[1][0], "Count_Fix" => $sum_ligh[2][0]);


    
    // ดึงข้้อมูลและหา "จำนวนฉาก" ทั้งหมด
    $sql_scrn = "SELECT * FROM `tool` WHERE type='SCRN'";
    $result_sql_scrn = mysqli_query($condb,$sql_scrn);
    $total_scrn= mysqli_num_rows($result_sql_scrn); 

    $sql_scrn_status = "SELECT
    COUNT(tool.pID) AS pd_val, 
    CASE 
    WHEN type_status.status = 'Ready' THEN 'Count_Ready'
    WHEN type_status.status = 'NotReady' THEN 'Count_NoTReady'
    ELSE 'Count_Fix'
    END count_sta
    FROM
    tool
    JOIN type_status ON tool.statusp = type_status.statusID
    WHERE tool.type = 'SCRN'
    GROUP BY
    type_status.statusID;";
    $result_scrn_status = mysqli_query($condb,$sql_scrn_status);
    $sum_scrn = array();
    while($data_scrn = mysqli_fetch_array($result_scrn_status)){
        array_push($sum_scrn,array($data_scrn['pd_val'],$data_scrn['count_sta']));
    }
    $scrn_label = array("Count_Ready" => "พร้อม", "Count_NotReady" => "ไม่พร้อม", "Count_Fix" => "ซ่อม");
    $scrn_data = array("Count_Ready" => $sum_scrn[0][0], "Count_NotReady" => $sum_scrn[1][0], "Count_Fix" => $sum_scrn[2][0]);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/colors_bt5.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.1/chart.min.js"></script>
</head>
<body>
    <!-- เรียกใช้ Navbar -->
    <div class="fixed-top">
        <?php include("template/navbar.php");?>
    </div>
    <section class="bg-light">
        <div class="container pt-5">

            <div class="row mt-5">

            <!-- จำนวนอุปกรณ์ทั้งหมด -->
            <div class="row mb-3">
                <div class="col-12">
                    <div class="card shadow p-4 " style="border-radius: 10px;">
                        <div class="card-title">
                            <h4 class="text-center">จำนวนอุปกรณ์ทั้งหมด</h4>
                        </div>
                        <div class="card-body">
                            <h1 class="card-text text-center "><b><?php echo $total_tool ; ?> ชิ้น</b></h1>
                        </div>
                    </div>
                </div>

            </div>

            <!-- จำนวนล้อง -->
            <div class="row mb-3 d-flex align-items-center">
                <p class="text-secondary">กล้อง</p>
                <hr>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="card shadow p-4" style="border-radius: 10px;">
                        <div class="card-title">
                            <h6 class="text-center">จำนวนกล้องทั้งหมด</h6>
                        </div>
                        <div class="card-body">
                            <h3 class="card-text text-center"> <b><?php echo $total_cam ; ?> ตัว</b></h3>
                        </div>
                    </div>
                </div>

                <!-- กราฟกล้อง -->
                <div class="col-lg-8 col-md-8 col-sm-12">
                    <div class="card shadow " style="border-radius: 10px;">
                        <div class="card-header " >
                            <h5>สถานะกล้อง</h5>
                        </div>
                        <div class="card-body ">
                            <div id="canvas-holder"><canvas id="chart-area_cam"></canvas></div>
                        </div>
                    </div>
                </div>
             </div>
            </div>

            <!-- จำนวนไมค์ -->
            <div class="row mb-3 d-flex align-items-center">
                <p class="text-secondary">ไมค์โครโฟน</p>
                <hr>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="card shadow p-4" style="border-radius: 10px;">
                        <div class="card-title">
                            <h6 class="text-center">จำนวนไมค์โครโฟนทั้งหมด</h6>
                        </div>
                        <!--  -->
                        <div class="card-body">
                            <h3 class="card-text text-center"> <b><?php echo $total_mic; ?> ตัว</b></h3>
                        </div>
                    </div>
                </div>

                <!-- กราฟไมค์ -->
                <div class="col-lg-8 col-md-8 col-sm-12">
                    <div class="card shadow" style="border-radius: 10px;">
                        <div class="card-header" >
                            <h5>สถานะไมคโครโฟน</h5>
                        </div>
                        <div class="card-body">
                            <div id="canvas-holder" ><canvas id="chart-area_mic"/></div>
                        </div>
                    </div>
                </div>
            </div>

                
            <!-- จำนวนไฟ -->
            <div class="row mb-3 d-flex align-items-center">
                <p class="text-secondary">ไฟ</p>
                <hr>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="card shadow p-4" style="border-radius: 10px;">
                        <div class="card-title">
                            <h6 class="text-center ">จำนวนไฟทั้งหมด</h6>
                        </div>
                        <div class="card-body">
                            <h3 class="card-text text-center"> <b><?php echo $total_ligh; ?> ตัว</b></h3>
                        </div>
                    </div >
                </div>

                <!-- กราฟไฟ -->
                <div class="col-lg-8 col-md-8 col-sm-12">
                    <div class="card shadow" style="border-radius: 10px;">
                        <div class="card-header" >
                            <h5>สถานะไฟ</h5>
                        </div>
                        <div class="card-body">
                            <div id="canvas-holder" ><canvas id="chart-area_ligh"/></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- จำนวนขาตั้ง -->
            <div class="row mb-3 d-flex align-items-center">
                <p class="text-secondary">ขาตั้งกล้อง</p>
                <hr>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="card shadow p-4" style="border-radius: 10px;">
                        <div class="card-title">
                            <h6 class="text-center">จำนวนขาตั้งทั้งหมด</h6>
                        </div>
                        <div class="card-body">
                            <h3 class="card-text text-center"> <b><?php echo $total_trip; ?> ตัว</b></h3>
                        </div>
                    </div>
                </div>

                <!-- กราฟขาตั้ง -->
                <div class="col-lg-8 col-md-8 col-sm-12">
                    <div class="card shadow" style="border-radius: 10px;">
                        <div class="card-header" >
                            <h5>สถานะขาตั้งกล้อง</h5>
                        </div>
                        <div class="card-body">
                            <div id="canvas-holder" ><canvas id="chart-area_trip"/></div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- จำนวนฉาก -->
            <div class="row mb-3 d-flex align-items-center">
                <p class="text-secondary">ฉาก</p>
                <hr>
                <div class="col-lg-4 col-md-4 col-sm-12 ">
                    <div class="card shadow p-4" style="border-radius: 10px;">
                        <div class="card-title">
                            <h6 class="text-center">จำนวนฉากทั้งหมด</h6>
                        </div>
                        <div class="card-body">
                            <h3 class="card-text text-center"> <b><?php echo $total_scrn; ?> ฉาก</b></h3>
                        </div>
                    </div>
                </div>

                <!-- กราฟฉาก -->
                <div class="col-lg-8 col-md-8 col-sm-12">
                    <div class="card shadow" style="border-radius: 10px;">
                        <div class="card-header" >
                            <h5>สถานะฉาก</h5>
                        </div>
                        <div class="card-body">
                            <div id="canvas-holder" ><canvas id="chart-area_scrn"/></div>
                        </div>
                    </div>
                </div>
             </div>

            </div>

        </div>


    </section>

    <!-- Chart.js -->
    <script>
        var config_cam = {
        type: 'pie',
        data: {
          
            labels: [<?PHP echo "'".implode("','",$cam_label)."'"; ?>],
            datasets: [{
                data: [<?PHP echo implode(",",$cam_data); ?> ],
                backgroundColor: ["#F7464A","#46BFBD","#FDB45C","#949FB1","#4D5360"]
            }]

            
        },
        options: {
            responsive: true
        }
        };

        var config_mic = {
        type: 'pie',
        data: {
          
            labels: [<?PHP echo "'".implode("','",$mic_label)."'"; ?>],
            datasets: [{
                data: [<?PHP echo implode(",",$mic_data); ?> ],
                backgroundColor: ["#F7464A","#46BFBD","#FDB45C","#949FB1","#4D5360"]
            }]

            
        },
        options: {
            responsive: true
        }
        };

        var config_ligh = {
        type: 'pie',
        data: {
          
            labels: [<?PHP echo "'".implode("','",$ligh_label)."'"; ?>],
            datasets: [{
                data: [<?PHP echo implode(",",$ligh_data); ?> ],
                backgroundColor: ["#F7464A","#46BFBD","#FDB45C","#949FB1","#4D5360"]
            }]

            
        },
        options: {
            responsive: true
        }
        };

        var config_trip = {
        type: 'pie',
        data: {
          
            labels: [<?PHP echo "'".implode("','",$trip_label)."'"; ?>],
            datasets: [{
                data: [<?PHP echo implode(",",$trip_data); ?> ],
                backgroundColor: ["#F7464A","#46BFBD","#FDB45C","#949FB1","#4D5360"]
            }]

            
        },
        options: {
            responsive: true
        }
        };

        var config_scrn = {
        type: 'pie',
        data: {
          
            labels: [<?PHP echo "'".implode("','",$scrn_label)."'"; ?>],
            datasets: [{
                data: [<?PHP echo implode(",",$scrn_data); ?> ],
                backgroundColor: ["#F7464A","#46BFBD","#FDB45C","#949FB1","#4D5360"]
            }]

            
        },
        options: {
            responsive: true
        }
        };

        window.onload = function() {
            var ctx_cam = document.getElementById("chart-area_cam").getContext("2d");
            window.myPie = new Chart(ctx_cam, config_cam)

            var ctx_mic = document.getElementById("chart-area_mic").getContext("2d");
            window.myPie = new Chart(ctx_mic, config_mic)

            var ctx_ligh = document.getElementById("chart-area_ligh").getContext("2d");
            window.myPie = new Chart(ctx_ligh, config_ligh)

            var ctx_trip = document.getElementById("chart-area_trip").getContext("2d");
            window.myPie = new Chart(ctx_trip, config_trip)

            var ctx_scrn = document.getElementById("chart-area_scrn").getContext("2d");
            window.myPie = new Chart(ctx_scrn, config_scrn)
        };
    
    </script>

    <div>
        <?php include("template/footer.php");?>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.1/chart.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>