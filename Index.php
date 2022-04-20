<?php 
    session_start();
    require_once("php/dbconnector.php");
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

</head>
<body>
   <div class="fixed-top">
        <?php include('template/navbar.php');?>
    </div>
    <div class="container-fluid pt-4 ">
        <h5>รายการอุปกรณ์</h5>
        <hr>
        <div class="row">
            <!-- Sidebar -->
            <div class="col-2 border">
                <?php include('template/sidebar.php'); ?>
            </div>
            <!-- Main -->
            <div class="col-10">
                <form action="order.php" method="GET">
                    <!-- CAMERA Row -->
                    <p>Camera</p>
                    <hr>
                    <div class="row p-1 mb-4" id="CAMrow">
                            <!-- camera row 1 -->
                            <div class="row mb-3">

                                <div class="col-lg-3 col-md-6 col-sm-12 d-flex justify-content-center">
                                    <div class="card shadow" style="width: 22rem;">
                                        <div class="d-flex justify-content-center">
                                            <img src="photo/rp.jpg" class="card-img-top p-1" alt="..." style="width: 20rem;">
                                        </div>
                                        <div class="card-body d-flex flex-column justify-content-center">
                                            <!-- Product data -->
                                            <h6 class="card-title">Canon</h6>
                                            <h3 class="card-title">EOS RP</h3>
                                            <h4 class="ready"><b><?php echo "Ready"; ?></b></h4>
                                            <!-- Form -->
                                            <div class="form-check mt-2">
                                                <input class="form-check-input" type="checkbox" value="CAM1" name="Iv[]" id="flexCheckDefault">
                                                <input type="hidden" name="Iv" value="101" id="">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    <b>เลือก</b>
                                                </label>
                                            </div>
                                            <a href="order.php?pid=101" class="btn bd-purple-500">ยืมเลย</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-6 col-sm-12 d-flex justify-content-center">
                                    <div class="card shadow" style="width: 22rem;">
                                        <div class="d-flex justify-content-center">
                                            <img src="photo/200d.jpg" class="card-img-top p-1" alt="..." style="width: 20rem;">
                                        </div>
                                        <div class="card-body d-flex flex-column justify-content-center">
                                            <h6 class="card-title">Canon</h6>
                                            <h3 class="card-title">EOS 200DII</h3>
                                            <p class="ready"><b>Ready</b></p>
                                            <!-- Form -->
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="CAM2" name="Iv[]" id="flexCheckDefault">
                                                <input type="hidden" name="IIv" value="102" id="">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    <b>เลือก</b>
                                                </label>
                                            </div>
                                            <a href="order.php?pid=102" class="btn bd-purple-500">ยืมเลย</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-6 col-sm-12 d-flex justify-content-center">
                                    <div class="card shadow" style="width: 22rem;">
                                        <div>
                                            <img src="photo/d7500.jpg" class="card-img-top p-1" alt="..."  style="width: 20rem;">
                                        </div>
                                        <div class="card-body d-flex flex-column justify-content-center">
                                            <h6 class="card-title">Nikon</h6>
                                            <h3 class="card-title">D7500</h3>
                                            <p class="ready"><b>Ready</b></p>
                                            <!-- Form -->
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="CAM3" name="Iv[]" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    <b>เลือก</b>
                                                </label>
                                            </div>
                                            <a href="order.php?pid=103" class="btn bd-purple-500">ยืมเลย</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-12 d-flex justify-content-center">
                                    <div class="card shadow" style="width: 22rem;">
                                        <div>
                                            <img src="photo/lumixg7.jpg" class="card-img-top p-1" alt="..." style="width: 20rem;">
                                        </div>
                                        <div class="card-body d-flex flex-column justify-content-center">
                                            <h6 class="card-title">Lumix</h6>
                                            <h3 class="card-title">G7</h3>
                                            <p class="ready"><b>Ready</b></p>
                                            <!-- Form -->
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="CAM4"  name="Iv[]" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    <b>เลือก</b>
                                                </label>
                                            </div>
                                            <a href="order.php?pid=104" class="btn bd-purple-500">ยืมเลย</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                   

                    <!-- MICRow -->
                    <p>Microphone</p>
                    <hr>
                    <div class="row p-1 mb-4" id="CAMrow">
                        <!-- camera row 1 -->
                        <div class="row mb-3">
                            <div class="col-lg-3 col-md-6 col-sm-12 col-sm-12 d-flex justify-content-center">
                                <div class="card shadow" style="width: 22rem;">
                                <div>
                                    <img src="photo/sonymic.jpg" class="card-img-top p-1" alt="..." style="width: 20rem;">
                                </div>
                                    <div class="card-body">
                                        <h6 class="card-title">Sony</h6>
                                        <h3 class="card-title">UWP-D21</h3>
                                        <p class="ready"><b>Ready</b></p>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="MIC1" name="Iv[]" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                <b>เลือก</b>
                                            </label>
                                        </div>
                                        <a href="order.php" class="btn bd-purple-500">ยืมเลย</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12 col-sm-12 d-flex justify-content-center">
                                <div class="card shadow" style="width: 22rem;">
                                    <img src="photo/saramic.jpg" class="card-img-top p-1" alt="..." style="width: 20rem;">
                                    <div class="card-body">
                                        <h6 class="card-title">Saramonic</h6>
                                        <h3 class="card-title">SR-VRMIC</h3>
                                        <p class="ready"><b>Ready</b></p>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="MIC2" name="Iv[]" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                <b>เลือก</b>
                                            </label>
                                        </div>
                                        <a href="order.php" class="btn bd-purple-500">ยืมเลย</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12 col-sm-12 d-flex justify-content-center">
                                <div class="card shadow" style="width: 22rem;">
                                    <img src="photo/deitymic.jpg" class="card-img-top p-1" alt="..." style="width: 20rem;">
                                    <div class="card-body">
                                        <h6 class="card-title">Deity</h6>
                                        <h3 class="card-title">DT70110D34</h3>
                                        <p class="ready"><b>Ready</b></p>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="MIC3" name="Iv[]" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                <b>เลือก</b>
                                            </label>
                                        </div>
                                        <a href="order.php" class="btn bd-purple-500">ยืมเลย</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12 col-sm-12 d-flex justify-content-center">
                                <div class="card shadow" style="width: 22rem;">
                                    <img src="photo/saramic2.jpg" class="card-img-top p-1" alt="..." style="width: 20rem;">
                                    <div class="card-body">
                                        <h6 class="card-title">Saramonic</h6>
                                        <h3 class="card-title">SoundBird T3</h3>
                                        <p class="ready"><b>Ready</b></p>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="MIC4" name="Iv[]" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                <b>เลือก</b>
                                            </label>
                                        </div>
                                        <a href="order.php" class="btn bd-purple-500">ยืมเลย</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- Tripod -->
                    <p>Tripod</p>
                    <hr>
                    <div class="row p-1 mb-4" id="CAMrow">
                        <!-- camera row 1 -->
                        <div class="row mb-3">
                            <div class="col-lg-3 col-md-6 col-sm-12 col-sm-12 d-flex justify-content-center">
                                <div class="card shadow" style="width: 22rem;">
                                    <img src="photo/trip1.jpg" class="card-img-top p-1" alt="..." style="width: 20rem;">
                                    <div class="card-body">
                                        <h6 class="card-title">Miliboo</h6>
                                        <h3 class="card-title">MUFB</h3>
                                        <p class="ready"><b>Ready</b></p>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="TRI1" name="Iv[]" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                <b>เลือก</b>
                                            </label>
                                        </div>
                                        <a href="order.php" class="btn bd-purple-500">ยืมเลย</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12 col-sm-12 d-flex justify-content-center">
                                <div class="card shadow" style="width: 22rem;">
                                    <img src="photo/trip2.jpg" class="card-img-top p-1" alt="..." style="width: 20rem;">
                                    <div class="card-body">
                                        <h6 class="card-title">Manfrotto</h6>
                                        <h3 class="card-title">Befree 2N1</h3>
                                        <p class="ready"><b>Ready</b></p>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="TRI2" name="Iv[]" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                <b>เลือก</b>
                                            </label>
                                        </div>
                                        <a href="order.php" class="btn bd-purple-500">ยืมเลย</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12 col-sm-12 d-flex justify-content-center" style="width: 20rem;">
                                <div class="card shadow" style="width: 22rem;">
                                    <img src="photo/trip3.jpg" class="card-img-top p-1" alt="...">
                                    <div class="card-body">
                                        <h6 class="card-title">Miliboo</h6>
                                        <h3 class="card-title">MTT609B</h3>
                                        <p class="ready"><b>Ready</b></p>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="TRI3" name="Iv[]" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                <b>เลือก</b>
                                            </label>
                                        </div>
                                        <a href="order.php" class="btn bd-purple-500">ยืมเลย</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12 col-sm-12 d-flex justify-content-center">
                                <div class="card shadow" style="width: 22rem;">
                                    <img src="photo/trip4.jpg" class="card-img-top p-1" alt="..." style="width: 20rem;">
                                    <div class="card-body">
                                        <h6 class="card-title">Peak Design</h6>
                                        <h3 class="card-title">Carbon Fiber</h3>
                                        <p class="ready"><b>Ready</b></p>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="TRI4" name="Iv[]" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                <b>เลือก</b>
                                            </label>
                                        </div>
                                        <a href="order.php" class="btn bd-purple-500">ยืมเลย</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- Light -->
                    <p>Light</p>
                    <hr>
                    <div class="row p-1 mb-4" id="CAMrow">
                        <!-- camera row 1 -->
                        <div class="row mb-3">
                            <div class="col-lg-3 col-md-6 col-sm-12 col-sm-12 d-flex justify-content-center">
                                <div class="card shadow" style="width: 22rem;">
                                    <img src="photo/godox.jpg" class="card-img-top p-1" alt="..." style="width: 20rem;">
                                    <div class="card-body">
                                        <h6 class="card-title">Godox</h6>
                                        <h3 class="card-title">QS1200II</h3>
                                        <p class="ready"><b>Ready</b></p>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="LIG1" name="Iv[]" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                <b>เลือก</b>
                                            </label>
                                        </div>
                                        <a href="order.php" class="btn bd-purple-500">ยืมเลย</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12 col-sm-12 d-flex justify-content-center">
                                <div class="card shadow" style="width: 22rem;">
                                    <img src="photo/canonli.jpg" class="card-img-top p-1" alt="..." style="width: 20rem;">
                                    <div class="card-body">
                                        <h6 class="card-title">Canon</h6>
                                        <h3 class="card-title">MR-14EX II</h3>
                                        <p class="ready"><b>Ready</b></p>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="LIG2" name="Iv[]" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                <b>เลือก</b>
                                            </label>
                                        </div>
                                        <a href="order.php" class="btn bd-purple-500">ยืมเลย</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12 col-sm-12 d-flex justify-content-center">
                                <div class="card shadow" style="width: 22rem;">
                                    <img src="photo/nanlux.jpg" class="card-img-top p-1" alt="..." style="width: 20rem;">
                                    <div class="card-body">
                                        <h6 class="card-title">Nanlux</h6>
                                        <h3 class="card-title">Dyno 1200C</h3>
                                        <p class="ready"><b>Ready</b></p>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="LIG3" name="Iv[]" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                <b>เลือก</b>
                                            </label>
                                        </div>
                                        <a href="order.php" class="btn bd-purple-500">ยืมเลย</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12 col-sm-12 d-flex justify-content-center">
                                <div class="card shadow" style="width: 22rem;">
                                    <img src="photo/apli.jpg" class="card-img-top p-1" alt="..." style="width: 20rem;">
                                    <div class="card-body">
                                        <h6 class="card-title">Aputure</h6>
                                        <h3 class="card-title">AL-MC 4-Light</h3>
                                        <p class="ready"><b>Ready</b></p>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="LIG4" name="Iv[]" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                <b>เลือก</b>
                                            </label>
                                        </div>
                                        <a href="order.php" class="btn bd-purple-500">ยืมเลย</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- Screen -->
                    <p>Screen</p>
                    <hr>
                    <div class="row p-1 mb-4" id="CAMrow">
                        <!-- camera row 1 -->
                        <div class="row mb-3">
                            <div class="col-lg-3 col-md-6 col-sm-12 col-sm-12 d-flex justify-content-center">
                                <div class="card shadow" style="width: 22rem;">
                                    <img src="photo/ws.jpg" class="card-img-top p-1" alt="..." style="width: 20rem;">
                                    <div class="card-body">
                                        <h6 class="card-title">No Brand</h6>
                                        <h3 class="card-title">White screen</h3>
                                        <p class="ready"><b>Ready</b></p>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="SCR1" name="Iv[]" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                <b>เลือก</b>
                                            </label>
                                        </div>
                                        <a href="order.php" class="btn bd-purple-500">ยืมเลย</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12 col-sm-12 d-flex justify-content-center">
                                <div class="card shadow" style="width: 22rem;">
                                    <img src="photo/gs.jpg" class="card-img-top p-1" alt="..." style="width: 20rem;">
                                    <div class="card-body">
                                        <h6 class="card-title">No Brand</h6>
                                        <h3 class="card-title">Green screen</h3>
                                        <p class="ready"><b>Ready</b></p>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="SCR2" name="Iv[]" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                <b>เลือก</b>
                                            </label>
                                        </div>
                                        <a href="order.php" class="btn bd-purple-500">ยืมเลย</a>
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
                    <div class="row p-1 mb-4 " id="confrow">
                        <div class="col d-flex justify-content-end align-items-start">
                            <button type="submit" class="btn bd-purple-500 btn-lg me-3" >เลือกสร็จสิ้น</button>
                            <input type="reset" class="btn btn-danger btn-lg" name="" id="">
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
</body>
</html>