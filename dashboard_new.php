<?php 
    session_start();
    require_once("php/dbconnector.php");

    //ดึงข้อมูลผู้ใช้งาน
    $sql_user = "SELECT * FROM `user` WHERE 1";
    $result_sql_user = mysqli_query($condb,$sql_user);
    $quantity_user = mysqli_num_rows($result_sql_user);
    
    //ดึงข้อมูลนิสิต
    $sql_user = "SELECT * FROM user WHERE type_user ='นิสิต'";
    $result_sql_user = mysqli_query($condb,$sql_user);
    $quantity_std = mysqli_num_rows($result_sql_user);

    //ดึงข้อมูลอาจารย์
    $sql_user = "SELECT * FROM `user` WHERE type_user = 'อาจารย์'";
    $result_sql_user = mysqli_query($condb,$sql_user);
    $quantity_tch = mysqli_num_rows($result_sql_user);

    //ดึงข้อมูลเอกประถม
    $sql_user = "SELECT * FROM `user` WHERE stmajor = 'เอกการประถมศึกษา'";
    $result_sql_user = mysqli_query($condb,$sql_user);
    $quantity_pri = mysqli_num_rows($result_sql_user);
    
    //ดึงข้อมูลเอกอุตสา
    $sql_user = "SELECT * FROM `user` WHERE stmajor = 'เอกอุตสาหกรรมการศึกษา'";
    $result_sql_user = mysqli_query($condb,$sql_user);
    $quantity_ind = mysqli_num_rows($result_sql_user);

    //ดึงข้อมูลเอกเทคโน
    $sql_user = "SELECT * FROM `user` WHERE stmajor = 'เอกเทคโนโลยีการศึกษา'";
    $result_sql_user = mysqli_query($condb,$sql_user);
    $quantity_tech = mysqli_num_rows($result_sql_user);

    //ดึงข้อมูลเอกจิตวิทยา
    $sql_user = "SELECT * FROM `user` WHERE stmajor = 'เอกจิตวิทยา และการแนะแนว'";
    $result_sql_user = mysqli_query($condb,$sql_user);
    $quantity_psy = mysqli_num_rows($result_sql_user);

    //ดึงข้อมูลเอกวัดประเมิน
    $sql_user = "SELECT * FROM `user` WHERE stmajor = 'เอกการวัดประเมิน และวิจัยการศึกษา'";
    $result_sql_user = mysqli_query($condb,$sql_user);
    $quantity_meas = mysqli_num_rows($result_sql_user);
    
    //ดึงข้อมูลเอกการศึกษาพิเศษ
    $sql_user = "SELECT * FROM `user` WHERE stmajor = 'เอกการศึกษาพิเศษ'";
    $result_sql_user = mysqli_query($condb,$sql_user);
    $quantity_spec = mysqli_num_rows($result_sql_user);

    //ดึงข้อมูลเอกการศึกษาตลอดชีวิต
    $sql_user = "SELECT * FROM `user` WHERE stmajor = 'เอกการศึกษาตลอดชีวิต'";
    $result_sql_user = mysqli_query($condb,$sql_user);
    $quantity_life = mysqli_num_rows($result_sql_user);

    //ดึงข้อมูลเอกพัฒนาชุมชน
    $sql_user = "SELECT * FROM `user` WHERE stmajor = 'การศึกษาเพื่อพัฒนาชุมชน'";
    $result_sql_user = mysqli_query($condb,$sql_user);
    $quantity_major = mysqli_num_rows($result_sql_user);

    //ดึงข้อมูลอุปกรณ์ทั้งหมด
    $sql_tool = "SELECT * FROM `tool` WHERE 1";
    $result_sql_tool = mysqli_query($condb,$sql_tool);
    $quantity_tool = mysqli_num_rows($result_sql_tool);

    //ดึงข้อมูลกล้อง
    $sql_cam = "SELECT * FROM `tool` WHERE type='CAM'";
    $result_sql_cam = mysqli_query($condb,$sql_cam);
    $quantity_cam = mysqli_num_rows($result_sql_cam);
    //พร้อม
    $sql_cam = "SELECT * FROM `tool` WHERE type ='CAM' AND statusp =1";
    $result_sql_cam = mysqli_query($condb,$sql_cam);
    $quantity_readycam = mysqli_num_rows($result_sql_cam);  
    //ไม่พร้อม
    $sql_cam = "SELECT * FROM `tool` WHERE type ='CAM' AND statusp =2";
    $result_sql_cam = mysqli_query($condb,$sql_cam);
    $quantity_notreadycam = mysqli_num_rows($result_sql_cam); 
    //ซ่อมบำรุง
    $sql_cam = "SELECT * FROM `tool` WHERE type ='CAM' AND statusp =3";
    $result_sql_cam = mysqli_query($condb,$sql_cam);
    $quantity_fixcam = mysqli_num_rows($result_sql_cam);

    //ดึงข้อมูลไมค์
    $sql_mic = "SELECT * FROM `tool` WHERE type='MIC'";
    $result_sql_mic = mysqli_query($condb,$sql_mic);
    $quantity_mic = mysqli_num_rows($result_sql_mic);
    //พร้อม
    $sql_mic = "SELECT * FROM `tool` WHERE type ='MIC' AND statusp =1";
    $result_sql_mic = mysqli_query($condb,$sql_mic);
    $quantity_readymic = mysqli_num_rows($result_sql_mic);  
    //ไม่พร้อม
    $sql_mic = "SELECT * FROM `tool` WHERE type ='MIC' AND statusp =2";
    $result_sql_mic = mysqli_query($condb,$sql_mic);
    $quantity_notreadymic = mysqli_num_rows($result_sql_mic);  
    //ซ่อมบำรุง
    $sql_mic = "SELECT * FROM `tool` WHERE type ='MIC' AND statusp =3";
    $result_sql_mic = mysqli_query($condb,$sql_mic);
    $quantity_fixmic = mysqli_num_rows($result_sql_mic);  
    
    //ดึงข้อมูลขาตั้ง
    $sql_trip = "SELECT * FROM `tool` WHERE type='TRIP';";
    $result_sql_trip = mysqli_query($condb,$sql_trip);
    $quantity_trip = mysqli_num_rows($result_sql_trip);
    //พร้อม
    $sql_trip = "SELECT * FROM `tool` WHERE type ='TRIP' AND statusp =1";
    $result_sql_trip = mysqli_query($condb,$sql_trip);
    $quantity_readytrip = mysqli_num_rows($result_sql_trip);  
    //ไม่พร้อม
    $sql_trip = "SELECT * FROM `tool` WHERE type ='TRIP' AND statusp =2";
    $result_sql_trip = mysqli_query($condb,$sql_trip);
    $quantity_notreadytrip = mysqli_num_rows($result_sql_trip);   
    //ซ่อมบำรุง
    $sql_trip = "SELECT * FROM `tool` WHERE type ='TRIP' AND statusp =3";
    $result_sql_trip = mysqli_query($condb,$sql_trip);
    $quantity_fixtrip = mysqli_num_rows($result_sql_trip);  

    //ดึงข้อมูลไฟ
    $sql_ligh = "SELECT * FROM `tool` WHERE type='LIGH'";
    $result_sql_ligh = mysqli_query($condb,$sql_ligh);
    $quantity_ligh = mysqli_num_rows($result_sql_ligh);
    //พร้อม
    $sql_ligh = "SELECT * FROM `tool` WHERE type ='LIGH' AND statusp =1";
    $result_sql_ligh = mysqli_query($condb,$sql_ligh);
    $quantity_readyligh = mysqli_num_rows($result_sql_ligh);  
    //ไม่พร้อม
    $sql_ligh = "SELECT * FROM `tool` WHERE type ='LIGH' AND statusp =2";
    $result_sql_ligh = mysqli_query($condb,$sql_ligh);
    $quantity_notreadyligh = mysqli_num_rows($result_sql_ligh);  
    //ซ่อมบำรุง
    $sql_ligh = "SELECT * FROM `tool` WHERE type ='LIGH' AND statusp =3";
    $result_sql_ligh = mysqli_query($condb,$sql_ligh);
    $quantity_fixligh = mysqli_num_rows($result_sql_ligh);  
   
    //ดึงข้อมูลฉาก
    $sql_scrn = "SELECT * FROM `tool` WHERE type='SCRN'";
    $result_sql_scrn = mysqli_query($condb,$sql_scrn);
    $quantity_scrn= mysqli_num_rows($result_sql_scrn); 
    //พร้อม
    $sql_scrn = "SELECT * FROM `tool` WHERE type ='LIGH' AND statusp =1";
    $result_sql_scrn = mysqli_query($condb,$sql_scrn);
    $quantity_readyscrn = mysqli_num_rows($result_sql_scrn);  
    //ไม่พร้อม
    $sql_scrn = "SELECT * FROM `tool` WHERE type ='LIGH' AND statusp =2";
    $result_sql_scrn = mysqli_query($condb,$sql_scrn);
    $quantity_notreadyscrn = mysqli_num_rows($result_sql_scrn);  
    //ซ่อมบำรุง
    $sql_scrn = "SELECT * FROM `tool` WHERE type ='LIGH' AND statusp =3";
    $result_sql_scrn = mysqli_query($condb,$sql_scrn);
    $quantity_fixscrn = mysqli_num_rows($result_sql_scrn);  
    
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
    <link rel="stylesheet" href="css/sta.css">
    <script src="https://unpkg.com/feather-icons"></script>
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
            <div class="col-10">
            <h1 class="mt-4">Dashboard</h1>
                <hr>
                <div class="row">

                    <div class="col-lg-6 col-md-6 col-sm-12 ">

                        <div >
                            <div class="card shadow p-4 mb-4" style="border-radius: 10px;">
                                <div class="card-title">
                                    <h6 class="text-center">จำนวนผู้ใช้งานทั้งหมด</h6>
                                </div>
                                <div class="card-body">
                                    <h3 class="card-text text-center"> <b><?php echo $quantity_user ?> คน </b></h3>
                                        <div class="d-flex justify-content-center">
                                            <div class="card me-3 p-3">
                                                <p>นิสิตทั้งหมด </p>
                                                <h4 class="card-text text-center"> <b><?php echo $quantity_std ?> คน </b></h4>
                                            </div>
                                            <div class="card ms-3 p-3">
                                                <p>อาจารย์ทั้งหมด </p>
                                                <h4 class="card-text text-center"> <b><?php echo $quantity_tch ?> คน </b></h4>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="card shadow p-4" style="border-radius: 10px;">
                                <div class="card-title">
                                    <h6 class="text-center">จำนวนนิสิตในแต่ละเอก</h6>
                                </div>
                                <div class="card-body">
                                <p>เอกการประถมศึกษา <h6 class="card-text text-center"> <b><?php echo $quantity_pri ?> คน </b></h4></p>
                                <hr>
                                <p>เอกอุตสาหกรรมการศึกษา <h6 class="card-text text-center"> <b><?php echo $quantity_pri ?> คน </b></h4></p>
                                <hr>
                                <p>เอกเทคโนโลยีการศึกษา <h6 class="card-text text-center"> <b><?php echo $quantity_tech ?> คน </b></h4></p>
                                <hr>
                                <p>เอกจิตวิทยา และการแนะแนว <h6 class="card-text text-center"> <b><?php echo $quantity_psy ?> คน </b></h4></p>
                                <hr>
                                <p>เอกการวัดประเมิน และวิจัยการศึกษา <h6 class="card-text text-center"> <b><?php echo $quantity_meas ?> คน </b></h4></p>
                                <hr>
                                <p>เอกการศึกษาพิเศษ <h6 class="card-text text-center"> <b><?php echo $quantity_spec ?> คน </b></h4></p>
                                <hr>
                                <p>เอกการศึกษาตลอดชีวิต <h6 class="card-text text-center"> <b><?php echo $quantity_life ?> คน </b></h4></p>
                                <hr>
                                <p>เอกการศึกษาเพื่อพัฒนาชุมชน <h6 class="card-text text-center"> <b><?php echo $quantity_major ?> คน </b></h4></p>
                                <hr>
                                </div>
                                
                            </div>
                        </div> 
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12 ">
                        <div>
                            <div class="card shadow p-4" style="border-radius: 10px;">
                                <div class="card-title">
                                    <h6 class="text-center">จำนวนอุปกรณ์ทั้งหมด</h6>
                                </div>
                                <div class="card-body">
                                    <h3 class="card-text text-center"> <b><?php echo $quantity_tool ?> ชิ้น </b></h3>
                                </div>
                                <hr>

                                <div class="card-title">
                                    <h6 class="text-center">จำนวนกล้องทั้งหมด</h6>
                                </div>
                                <div class="card-body">
                                    <h4 class="card-text text-center"> <b><?php echo $quantity_cam ?> ตัว </b></h4>
                                </div>
                                <div class="card-body">
                                    <p>จำนวนกล้องที่พร้อมให้ยืม <h6 class="card-text text-center"> <b><?php echo $quantity_readycam ?> ตัว </b></h4></p>
                                    <p>จำนวนกล้องที่ไม่พร้อมให้ยืม <h6 class="card-text text-center"> <b><?php echo $quantity_notreadycam ?> ตัว </b></h4></p>
                                    <p>จำนวนกล้องที่กำลังชำรุด/ซ่อมบำรุง/สูญหาย <h6 class="card-text text-center"> <b><?php echo $quantity_fixcam ?> ตัว </b></h4></p>
                                </div>
                                <hr>

                                <div class="card-title">
                                    <h6 class="text-center">จำนวนไมโครโฟนทั้งหมด</h6>
                                </div>
                                <div class="card-body">
                                    <h4 class="card-text text-center"> <b><?php echo $quantity_mic ?> ตัว </b></h4>
                                </div>
                                <div class="card-body">
                                    <p>จำนวนไมโครโฟนที่พร้อมให้ยืม <h6 class="card-text text-center"> <b><?php echo $quantity_readymic ?> ตัว </b></h4></p>
                                    <p>จำนวนไมโครโฟนที่ไม่พร้อมให้ยืม <h6 class="card-text text-center"> <b><?php echo $quantity_notreadymic ?> ตัว </b></h4></p>
                                    <p>จำนวนไมโครโฟนที่กำลังชำรุด/ซ่อมบำรุง/สูญหาย <h6 class="card-text text-center"> <b><?php echo $quantity_fixmic ?> ตัว </b></h4></p>
                                </div>
                                <hr>

                                <div class="card-title">
                                    <h6 class="text-center">จำนวนขาตั้งกล้องทั้งหมด</h6>
                                </div>
                                <div class="card-body">
                                    <h4 class="card-text text-center"> <b><?php echo $quantity_trip ?> ตัว </b></h4>
                                </div>
                                <div class="card-body">
                                    <p>จำนวนขาตั้งกล้องที่พร้อมให้ยืม <h6 class="card-text text-center"> <b><?php echo $quantity_readytrip ?> ตัว </b></h4></p>
                                    <p>จำนวนขาตั้งกล้องที่ไม่พร้อมให้ยืม <h6 class="card-text text-center"> <b><?php echo $quantity_notreadytrip ?> ตัว </b></h4></p>
                                    <p>จำนวนขาตั้งกล้องที่กำลังชำรุด/ซ่อมบำรุง/สูญหาย <h6 class="card-text text-center"> <b><?php echo $quantity_fixtrip ?> ตัว </b></h4></p>
                                </div>
                                <hr>

                                <div class="card-title">
                                    <h6 class="text-center">จำนวนไฟทั้งหมด</h6>
                                </div>
                                <div class="card-body">
                                    <h4 class="card-text text-center"> <b><?php echo $quantity_ligh ?> ตัว </b></h4>
                                </div>
                                <div class="card-body">
                                    <p>จำนวนไฟที่พร้อมให้ยืม <h6 class="card-text text-center"> <b><?php echo $quantity_readyligh ?> ตัว </b></h4></p>
                                    <p>จำนวนไฟที่ไม่พร้อมให้ยืม <h6 class="card-text text-center"> <b><?php echo $quantity_notreadyligh ?> ตัว </b></h4></p>
                                    <p>จำนวนไฟที่กำลังชำรุด/ซ่อมบำรุง/สูญหาย <h6 class="card-text text-center"> <b><?php echo $quantity_fixligh ?> ตัว </b></h4></p>
                                </div>
                                <hr>

                                <div class="card-title">
                                    <h6 class="text-center">จำนวนฉากทั้งหมด</h6>
                                </div>
                                <div class="card-body">
                                    <h4 class="card-text text-center"> <b><?php echo $quantity_scrn ?> ฉาก </b></h4>
                                </div>
                                <div class="card-body">
                                    <p>จำนวนฉากที่พร้อมให้ยืม <h6 class="card-text text-center"> <b><?php echo $quantity_readyscrn ?> ฉาก </b></h4></p>
                                    <p>จำนวนฉากที่ไม่พร้อมให้ยืม <h6 class="card-text text-center"> <b><?php echo $quantity_notreadyscrn ?> ฉาก </b></h4></p>
                                    <p>จำนวนฉากที่กำลังชำรุด/ซ่อมบำรุง/สูญหาย <h6 class="card-text text-center"> <b><?php echo $quantity_fixscrn ?> ฉาก </b></h4></p>
                                </div>
                                <hr>
                            </div>
                        </div> 
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