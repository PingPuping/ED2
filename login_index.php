<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/colors_bt5.css">
</head>
<body>
    <section class="vh-100 bg-light">
        <div class="container ">
            <div class="vh-100 d-flex flex-row justify-content-center align-items-center">
                <div class="col-lg-12 col-md-10">
                    <div class="card shadow-lg" style="border-radius: 25px;">
                        <div class="card-body p-md-5">
                            <div class="row align-items-center">
                                <div class="col-lg-6 col-md-6 col-sm-12 ">
                                    <img src="photo/login02-01.jpg" class="img-fluid" alt="Sample image">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="mx-4">
                                        <form action="php/login_dose.php" method="POST" class="p-4">

                                            <h1 class="text-center"><b>เข้าสู่ระบบ</b></h1>

                                            <div class="mb-4 ">
                                                <label for="IDlogin" class="form-label">ID :</label>
                                                <input type="text" class="form-control shadow" id="IDlogin" placeholder="รหัสนิสิต/รหัสบุคลากร" name="id_login" require style="border-radius: 10px;">
                                            </div>

                                            <div class="mb-4 ">
                                                <label for="PWlogin" class="form-label">Password :</label>
                                                <input type="password" class="form-control shadow" id="PWlogin" placeholder="รหัสผ่านของคุณ" name="pw_login" require style="border-radius: 10px;">
                                            </div>

                                            <!-- ปุ่ม Login -->
                                            <div class="d-flex flex-column justify-content-center px-5">
                                                <button type="submit" class="btn bd-purple-500 btn-lg shadow" style="border-radius: 10px;">เข้าสู่ระบบ</button>
                                                <a href="regis.php" class="text-center mt-1">หากยังไม่ได้ลงทะเบียน</a>
                                                <a href="person_ac.php" class="text-center mt-1">หากลืมรหัสผ่าน</a>
                                            </div>
                                        </form> 
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <script src="js/bootstrap.min.js"></script>
</body>
</html>

