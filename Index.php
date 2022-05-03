<?php 
    session_start();
    require_once("php/dbconnector.php");

    // ดึง PrimaryKey ของอุปกรณ์กับสถาณะมาจาก Database

    $sql_status = "SELECT
    tool.pID,
    type_status.status
    FROM
        tool
    INNER JOIN type_status ON tool.statusp = type_status.statusID;";
    $result_sql_status = mysqli_query($condb,$sql_status);
    $stasus_all = array();
    // เอาที่ดึงออกมาได้มายัดไว้ในอาเรย์ และเอาไปแสงนการ์ดอุปกรณ์ต่าง ๆ 
    while ($data_status = mysqli_fetch_array($result_sql_status)){
        array_push($stasus_all,array($data_status['pID'],$data_status['status']));
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/colors_bt5.css">
    <script src="https://unpkg.com/feather-icons"></script>
</head>
<body>
    <div class="sticky-top">
        <?php include('template/navbar.php');?>
    </div>
    <div class="container-fluid  ">

        <div class="row">
            <!-- Sidebar -->
            <div class="col-2 border">
                <?php include('template/sidebar.php');?>
            </div>
            <!-- Main -->
            <div class="col-10">
                <h5 class="mt-4">รายการอุปกรณ์</h5>
                <hr>
                <form action="order.php"  target="_blank" method="GET">
                    <!-- CAMERA Row -->
                    <p>Camera</p>
                    <hr>
                    <div class="row p-1 mb-4" id="CAMrow">
                            <!-- camera row 1 -->
                            <div class="row mb-3">

                                <div class="col-lg-3 col-md-6 col-sm-12 d-flex justify-content-center">
                                    <div class="card shadow" style="width: 22rem; border-radius: 25px;">
                                        <div class="d-flex justify-content-center p-4">
                                            <img src="photo/rp.jpg" class="card-img-top p-1" alt="..." ">
                                        </div>
                                        <div class="card-body d-flex flex-column justify-content-center">
                                            <!-- Product data -->
                                            <h6 class="card-title">Canon</h6>
                                            <h3 class="card-title">EOS RP</h3>
                                            <h6 id="t_status">สถานะ :<b>
                                                <?php 
                                                    if($stasus_all[0][1]=="Ready" or $stasus_all[1][1]=="Ready"){
                                                        echo "Ready";
                                                    }else{
                                                        echo "NotReady";
                                                    } 
                                                ?>
                                            </b></h5>
                                            
                                            <!-- Form -->
                                            <div class="form-check mt-2">
                                                <input class="form-check-input" type="checkbox" value="<?php echo $stasus_all[0][0]; ?>" name="Iv[]" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    <b>เลือก</b>
                                                </label>
                                            </div>
                                            <a href="order.php?pid=<?php echo $stasus_all[0][0]; ?>" class="btn bd-purple-500" target="_blank">ยืมเลย</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-6 col-sm-12 d-flex justify-content-center">
                                    <div class="card shadow" style="width: 22rem; border-radius: 25px;">
                                        <div class="d-flex justify-content-center p-4">
                                            <img src="photo/d7500.jpg" class="card-img-top p-1" alt="..." ">
                                        </div>
                                        <div class="card-body d-flex flex-column justify-content-center">
                                            <!-- Product data -->
                                            <h6 class="card-title">Nikon</h6>
                                            <h3 class="card-title">D7500</h3>
                                            <h6 id="t_status">สถานะ :<b><?php echo $stasus_all[2][1]; ?></b></h4>
                                            <!-- Form -->
                                            <div class="form-check mt-2">
                                                <input class="form-check-input" type="checkbox" value="<?php echo $stasus_all[2][0]; ?>" name="Iv[]" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    <b>เลือก</b>
                                                </label>
                                            </div>
                                            <a href="order.php?pid=<?php echo $stasus_all[2][0]; ?>" class="btn bd-purple-500" target="_blank">ยืมเลย</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-6 col-sm-12 d-flex justify-content-center">
                                    <div class="card shadow" style="width: 22rem; border-radius: 25px;">
                                        <div class="d-flex justify-content-center p-4">
                                            <img src="photo/200d.jpg" class="card-img-top p-1" alt="..." ">
                                        </div>
                                        <div class="card-body d-flex flex-column justify-content-center">
                                            <!-- Product data -->
                                            <h6 class="card-title">Canon</h6>
                                            <h3 class="card-title">EOS 200DII</h3>
                                            <h6 id="t_status">สถานะ :<b><?php echo $stasus_all[3][1]; ?></b></h4>
                                            <!-- Form -->
                                            <div class="form-check mt-2">
                                                <input class="form-check-input" type="checkbox" value="<?php echo $stasus_all[3][0]; ?>" name="Iv[]" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    <b>เลือก</b>
                                                </label>
                                            </div>
                                            <a href="order.php?pid=<?php echo $stasus_all[3][0]; ?>" class="btn bd-purple-500" target="_blank">ยืมเลย</a>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-lg-3 col-md-6 col-sm-12 d-flex justify-content-center">
                                    <div class="card shadow" style="width: 22rem; border-radius: 25px;">
                                        <div class="d-flex justify-content-center p-4">
                                            <img src="photo/lumixg7.jpg" class="card-img-top p-1" alt="...">
                                        </div>
                                        <div class="card-body d-flex flex-column justify-content-center">
                                            <!-- Product data -->
                                            <h6 class="card-title">Lumix</h6>
                                            <h3 class="card-title">G7</h3>
                                            <h6 id="t_status">สถานะ :<b><?php echo $stasus_all[4][1]; ?></b></h4>
                                            <!-- Form -->
                                            <div class="form-check mt-2">
                                                <input class="form-check-input" type="checkbox" value="<?php echo $stasus_all[4][0]; ?>"  name="Iv[]" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    <b>เลือก</b>
                                                </label>
                                            </div>
                                            <a href="order.php?pid=<?php echo $stasus_all[4][0]; ?>" class="btn bd-purple-500" target="_blank">ยืมเลย</a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                    </div>
                   

                    <!-- MICRow -->
                    <p>Microphone</p>
                    <hr>
                    <div class="row p-1 mb-4" id="MICrow">
                        <!-- microphone row 1 -->
                        <div class="row mb-3">
                        <div class="col-lg-3 col-md-6 col-sm-12 col-sm-12 d-flex justify-content-center">
                            <div class="card shadow" style="width: 22rem; border-radius: 25px;">
                                <div class="d-flex justify-content-center p-4">
                                    <img src="photo/saramic.jpg" class="card-img-top p-1" alt="...">
                                </div>
                                <div class="card-body d-flex flex-column justify-content-center">
                                    <h6 class="card-title">Saramonic</h6>
                                    <h3 class="card-title">SR-VRMIC</h3>
                                    <h6 id="t_status">สถานะ :<b><?php echo $stasus_all[5][1]; ?></b></h4>
                                    <!-- Form -->
                                    <div class="form-check mt-2">
                                        <input class="form-check-input" type="checkbox" value="<?php echo $stasus_all[5][0]; ?>" name="Iv[]" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            <b>เลือก</b>
                                        </label>
                                    </div>
                                    <a href="order.php?pid=<?php echo $stasus_all[5][0]; ?>" class="btn bd-purple-500" target="_blank">ยืมเลย</a>
                                </div>
                            </div>
                        </div>
                        
                            <div class="col-lg-3 col-md-6 col-sm-12 col-sm-12 d-flex justify-content-center">
                                <div class="card shadow" style="width: 22rem; border-radius: 25px;">
                                <div class="d-flex justify-content-center p-4">
                                    <img src="photo/sonymic.jpg" class="card-img-top p-1" alt="...">
                                </div>
                                    <div class="card-body d-flex flex-column justify-content-center">
                                        <h6 class="card-title">Sony</h6>
                                        <h3 class="card-title">UWP-D21</h3>
                                        <h6 id="t_status">สถานะ :<b><?php echo $stasus_all[6][1]; ?></b></h4>
                                        <!-- Form -->
                                        <div class="form-check mt-2">
                                            <input class="form-check-input" type="checkbox" value="<?php echo $stasus_all[6][0]; ?>" name="Iv[]" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                <b>เลือก</b>
                                            </label>
                                        </div>
                                        <a href="order.php?pid=<?php echo $stasus_all[6][0]; ?>" class="btn bd-purple-500" target="_blank">ยืมเลย</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 col-sm-12 col-sm-12 d-flex justify-content-center">
                                <div class="card shadow" style="width: 22rem; border-radius: 25px;">
                                    <div class="d-flex justify-content-center p-4">
                                        <img src="photo/deitymic.jpg" class="card-img-top p-1" alt="...">
                                    </div>
                                    <div class="card-body d-flex flex-column justify-content-center">
                                        <h6 class="card-title">Deity</h6>
                                        <h3 class="card-title">DT70110D34</h3>
                                        <h6>สถานะ :<b><?php echo $stasus_all[7][1]; ?></b></h4>
                                        <!-- Form -->
                                        <div class="form-check mt-2">
                                            <input class="form-check-input" type="checkbox" value="<?php echo $stasus_all[7][0]; ?>" name="Iv[]" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                <b>เลือก</b>
                                            </label>
                                        </div>
                                        <a href="order.php?pid=<?php echo $stasus_all[7][0]; ?>" class="btn bd-purple-500" target="_blank">ยืมเลย</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 col-sm-12 col-sm-12 d-flex justify-content-center">
                                <div class="card shadow" style="width: 22rem; border-radius: 25px;">
                                    <div class="d-flex justify-content-center p-4">
                                        <img src="photo/saramic2.jpg" class="card-img-top p-1" alt="...">
                                    </div>
                                   
                                    <div class="card-body d-flex flex-column justify-content-center">
                                        <h6 class="card-title">Saramonic</h6>
                                        <h3 class="card-title">SoundBird T3</h3>
                                        <h6 id="t_status">สถานะ :<b><?php echo $stasus_all[8][1]; ?></b></h4>
                                        <!-- Form -->
                                        <div class="form-check mt-2">
                                            <input class="form-check-input" type="checkbox" value="<?php echo $stasus_all[8][0]; ?>" name="Iv[]" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                <b>เลือก</b>
                                            </label>
                                        </div>
                                        <a href="order.php?pid=<?php echo $stasus_all[8][0]; ?>" class="btn bd-purple-500" target="_blank">ยืมเลย</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>


                    <!-- Tripod -->
                    <p>Tripod</p>
                    <hr>
                    <div class="row p-1 mb-4" id="TRIProw">
                        <!-- tripod row 1 -->
                        <div class="row mb-3">
                            <div class="col-lg-3 col-md-6 col-sm-12 col-sm-12 d-flex justify-content-center">
                                <div class="card shadow" style="width: 22rem; border-radius: 25px;">
                                    <div class="d-flex justify-content-center p-4">
                                        <img src="photo/trip1.jpg" class="card-img-top p-1" alt="...">
                                    </div>
                                    <div class="card-body d-flex flex-column justify-content-center">
                                        <h6 class="card-title">Miliboo</h6>
                                        <h3 class="card-title">MUFB</h3>
                                        <h6 id="t_status">สถานะ :<b><?php echo $stasus_all[9][1]; ?></b></h4>
                                        <!-- Form -->
                                        <div class="form-check mt-2">
                                            <input class="form-check-input" type="checkbox" value="<?php echo $stasus_all[9][0]; ?>" name="Iv[]" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                <b>เลือก</b>
                                            </label>
                                        </div>
                                        <a href="order.php?pid=<?php echo $stasus_all[9][0]; ?>" class="btn bd-purple-500" target="_blank">ยืมเลย</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 col-sm-12 col-sm-12 d-flex justify-content-center">
                                <div class="card shadow" style="width: 22rem; border-radius: 25px;">
                                    <div class="d-flex justify-content-center p-4">
                                        <img src="photo/trip2.jpg" class="card-img-top p-1" alt="...">
                                    </div>
                                    <div class="card-body d-flex flex-column justify-content-center">
                                        <h6 class="card-title">Manfrotto</h6>
                                        <h3 class="card-title">Befree 2N1</h3>
                                        <h6 id="t_status">สถานะ :<b><?php echo $stasus_all[10][1]; ?></b></h4>
                                        <!-- Form -->
                                        <div class="form-check mt-2">
                                            <input class="form-check-input" type="checkbox" value="<?php echo $stasus_all[10][0]; ?>" name="Iv[]" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                <b>เลือก</b>
                                            </label>
                                        </div>
                                        <a href="order.php?pid=<?php echo $stasus_all[10][0]; ?>" class="btn bd-purple-500" target="_blank">ยืมเลย</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 col-sm-12 col-sm-12 d-flex justify-content-center">
                                <div class="card shadow" style="width: 22rem; border-radius: 25px;">
                                    <div class="d-flex justify-content-center p-4">
                                        <img src="photo/trip3.jpg" class="card-img-top p-1" alt="...">
                                    </div>
                                    <div class="card-body d-flex flex-column justify-content-center">
                                        <h6 class="card-title">Miliboo</h6>
                                        <h3 class="card-title">MTT609B</h3>
                                        <h6 id="t_status">สถานะ :<b><?php echo $stasus_all[11][1]; ?></b></h4>
                                        <!-- Form -->
                                        <div class="form-check mt-2">
                                            <input class="form-check-input" type="checkbox" value="<?php echo $stasus_all[11][0]; ?>" name="Iv[]" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                <b>เลือก</b>
                                            </label>
                                        </div>
                                        <a href="order.php?pid=<?php echo $stasus_all[11][0]; ?>" class="btn bd-purple-500" target="_blank">ยืมเลย</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 col-sm-12 col-sm-12 d-flex justify-content-center">
                                <div class="card shadow" style="width: 22rem; border-radius: 25px;">
                                    <div class="d-flex justify-content-center p-4">
                                        <img src="photo/trip4.jpg" class="card-img-top p-1" alt="...">
                                    </div>
                                    <div class="card-body d-flex flex-column justify-content-center">
                                        <h6 class="card-title">Peak Design</h6>
                                        <h3 class="card-title">Carbon Fiber</h3>
                                        <h6 id="t_status">สถานะ :<b><?php echo $stasus_all[12][1]; ?></b></h4>
                                        <!-- Form -->
                                        <div class="form-check mt-2">
                                            <input class="form-check-input" type="checkbox" value="<?php echo $stasus_all[12][0]; ?>" name="Iv[]" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                <b>เลือก</b>
                                            </label>
                                        </div>
                                        <a href="order.php?pid=<?php echo $stasus_all[12][0]; ?>" class="btn bd-purple-500" target="_blank">ยืมเลย</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>


                    <!-- Light -->
                    <p>Light</p>
                    <hr>
                    <div class="row p-1 mb-4" id="LIGHrow">
                        <!-- ligh row 1 -->
                        <div class="row mb-3">
                            <div class="col-lg-3 col-md-6 col-sm-12 col-sm-12 d-flex justify-content-center">
                                <div class="card shadow" style="width: 22rem; border-radius: 25px;">
                                    <div class="d-flex justify-content-center p-4">
                                        <img src="photo/godox.jpg" class="card-img-top p-1" alt="...">
                                    </div>
                                    <div class="card-body d-flex flex-column justify-content-center">
                                        <h6 class="card-title">Godox</h6>
                                        <h3 class="card-title">QS1200II</h3>
                                        <h6 id="t_status">สถานะ :<b><?php echo $stasus_all[13][1]; ?></b></h4>
                                        <!-- Form -->
                                        <div class="form-check mt-2">
                                            <input class="form-check-input" type="checkbox" value="<?php echo $stasus_all[13][0]; ?>" name="Iv[]" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                <b>เลือก</b>
                                            </label>
                                        </div>
                                        <a href="order.php?pid=<?php echo $stasus_all[13][0]; ?>" class="btn bd-purple-500" target="_blank">ยืมเลย</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 col-sm-12 col-sm-12 d-flex justify-content-center">
                                <div class="card shadow" style="width: 22rem; border-radius: 25px;">
                                    <div class="d-flex justify-content-center p-4">
                                        <img src="photo/canonli.jpg" class="card-img-top p-1" alt="...">
                                    </div>
                                   
                                    <div class="card-body d-flex flex-column justify-content-center">
                                        <h6 class="card-title">Canon</h6>
                                        <h3 class="card-title">MR-14EX II</h3>
                                        <h6 id="t_status">สถานะ :<b><?php echo $stasus_all[14][1]; ?></b></h4>
                                        <!-- Form -->
                                        <div class="form-check mt-2">
                                            <input class="form-check-input" type="checkbox" value="<?php echo $stasus_all[14][0]; ?>" name="Iv[]" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                <b>เลือก</b>
                                            </label>
                                        </div>
                                        <a href="order.php?pid=<?php echo $stasus_all[14][0]; ?>" class="btn bd-purple-500" target="_blank">ยืมเลย</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 col-sm-12 col-sm-12 d-flex justify-content-center">
                                <div class="card shadow" style="width: 22rem; border-radius: 25px;">
                                    <div class="d-flex justify-content-center p-4">
                                       <img src="photo/nanlux.jpg" class="card-img-top p-1" alt="..."> 
                                    </div>
                                    <div class="card-body d-flex flex-column justify-content-center">
                                        <h6 class="card-title">Nanlux</h6>
                                        <h3 class="card-title">Dyno 1200C</h3>
                                        <h6 id="t_status">สถานะ :<b><?php echo $stasus_all[15][1]; ?></b></h4>
                                        <!-- Form -->
                                        <div class="form-check mt-2">
                                            <input class="form-check-input" type="checkbox" value="<?php echo $stasus_all[15][0]; ?>" name="Iv[]" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                <b>เลือก</b>
                                            </label>
                                        </div>
                                        <a href="order.php?pid=<?php echo $stasus_all[15][0]; ?>" class="btn bd-purple-500" target="_blank">ยืมเลย</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 col-sm-12 col-sm-12 d-flex justify-content-center">
                                <div class="card shadow" style="width: 22rem; border-radius: 25px;">
                                    <div class="d-flex justify-content-center p-4">
                                        <img src="photo/apli.jpg" class="card-img-top p-1" alt="...">
                                    </div>
                                    <div class="card-body d-flex flex-column justify-content-center">
                                        <h6 class="card-title">Aputure</h6>
                                        <h3 class="card-title">AL-MC 4-Light</h3>
                                        <h6 id="t_status">สถานะ :<b><?php echo $stasus_all[16][1]; ?></b></h4>
                                        <!-- Form -->
                                        <div class="form-check mt-2">
                                            <input class="form-check-input" type="checkbox" value="<?php echo $stasus_all[16][0]; ?>" name="Iv[]" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                <b>เลือก</b>
                                            </label>
                                        </div>
                                        <a href="order.php?pid=<?php echo $stasus_all[16][0]; ?>" class="btn bd-purple-500" target="_blank">ยืมเลย</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>


                    <!-- Screen -->
                    <p>Screen</p>
                    <hr>
                    <div class="row p-1 mb-4" id="SCRNrow">
                        <!-- screen row 1 -->
                        <div class="row mb-3">
                            <div class="col-lg-3 col-md-6 col-sm-12 col-sm-12 d-flex justify-content-center">
                                <div class="card shadow" style="width: 22rem; border-radius: 25px;">
                                    <div class="d-flex justify-content-center p-4">
                                        <img src="photo/gs.jpg" class="card-img-top p-1" alt="...">
                                    </div>
                                    <div class="card-body d-flex flex-column justify-content-center">
                                        <h6 class="card-title">No Brand</h6>
                                        <h3 class="card-title">Green screen</h3>
                                        <h6 id="t_status">สถานะ :<b><?php echo $stasus_all[17][1]; ?></b></h4>
                                        <!-- Form -->
                                        <div class="form-check mt-2">
                                            <input class="form-check-input" type="checkbox" value="<?php echo $stasus_all[17][0]; ?>" name="Iv[]" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                <b>เลือก</b>
                                            </label>
                                        </div>
                                        <a href="order.php?pid=<?php echo $stasus_all[17][0]; ?>" class="btn bd-purple-500" target="_blank">ยืมเลย</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 col-sm-12 col-sm-12 d-flex justify-content-center">
                                <div class="card shadow" style="width: 22rem; border-radius: 25px;">
                                    <div class="d-flex justify-content-center p-4">
                                        <img src="photo/ws.jpg" class="card-img-top p-1" alt="..."> 
                                    </div>
                                    <div class="card-body d-flex flex-column justify-content-center">
                                        <h6 class="card-title">No Brand</h6>
                                        <h3 class="card-title">White screen</h3>
                                        <h6 id="t_status">สถานะ :<b><?php echo $stasus_all[18][1]; ?></b></h4>
                                        <!-- Form -->
                                        <div class="form-check mt-2">
                                            <input class="form-check-input" type="checkbox" value="<?php echo $stasus_all[18][0]; ?>" name="Iv[]" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                <b>เลือก</b>
                                            </label>
                                        </div>
                                        <a href="order.php?pid=<?php echo $stasus_all[18][0]; ?>" class="btn bd-purple-500" target="_blank">ยืมเลย</a>
                                    </div>
                                </div>
                            </div>


                            <div class="col-3">

                            </div>
                            <div class="col-3">

                            </div>
                        </div>
                    </div>


                    <!-- Confirm -->
                    <div class="row  mb-5 ms-1 fixed-bottom " id="confrow">
                        <div class="col-2">
                            <div class="card shadow" style="border-radius: 15px;">
                                <div class="card-body ">
                                    <div class="d-flex justify-content-center">
                                        <button type="submit" class="btn bd-purple-500 btn-lg me-3" >เลือกสร็จสิ้น</button>
                                        <button type="reset" class="btn btn-outline-danger " >ยกเลิก</button>
                                    </div>

                                </div>
                            </div>

                        </div>

                    </div>
                </form>

            </div>
        </div>
    </div>
    <div>
        <?php include("template/footer.php");?>
    </div>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/color_status.js"></script>
    <script>
      feather.replace()
    </script>
</body>
</html>