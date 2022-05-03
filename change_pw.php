<?php 

    require_once("php/dbconnector.php");
    
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
</head>
<body>
    <div class="container">
        <div class="vh-100 d-flex justify-content-center align-items-center">
            <div class="col-lg-12 col-md-10">
                <div class="card d-flex  p-4 shadow-lg" style="border-radius: 25px;">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <img src="" alt="" class="img-fluid">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 p-3">
                                <h1 class="card-title mb-4">เปลี่ยนรหัสผ่าน</h1>
                                <div>
                                    
                                    <form action="php/change_password.php" method="POST">
                                        <hr>
                                        <div class="mb-2 ">
                                            <label for="q_1" class="form-label">รหัสผ่านใหม่ :</label>
                                            <input type="password" class="form-control shadow mb-3"  name="new_pw" require style="border-radius: 10px;">
                                        </div>
                                        <div class="mb-2">
                                            <label for="q_2" class="form-label">ยืนยันรหัสผ่านใหม่ :</label>
                                            <input type="password" class="form-control shadow mb-3"  name="conf_new_pw" require style="border-radius: 10px;">
                                        </div>
                                        <input type="hidden" name="" id="">
                                        <button type="submit" class="btn bd-purple-500" style="border-radius: 10px;">ยืนยันรหัสผ่าน</button>
                                    </form>
                                </div>

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