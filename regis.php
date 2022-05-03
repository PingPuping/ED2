<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/colors_bt5.css">
</head>
<body>
    <section class="bg-light">
        <div class="container ">
            <div class="row d-flex justify-content-center align-items-center ">
                <div class="col-lg-12 col-md-10">
                    <div class="card text-black shadow-lg" style="border-radius: 25px;">
                        <div class="card-body">
                            <!-- Form register -->
                            <form action="php/register_dose.php" method="POST" class="p-4" >
                                <h4 class="text-center"><b>สร้างบัญชีผู้ใช้งาน</b></h4>
                                <hr>
                                <!-- ข้อมูลส่วนบุคคล -->
                                <div>
                                    <b><p>ข้อมูลส่วนตัว</p></b>
                                    <!-- คำนำหน้า ชื่อ-นามสกุล-->
                                    <div class="row">
                                        <div class="col-lg-1 col-md-1 col-sm-12">
                                            <label for="name_prefix" class="form-label">ตำแหน่ง</label>
                                            <select class="form-select mb-3" aria-label="Default select example"  name="type_user" require style="border-radius: 10px;">
                                                <option value="นิสิต">นิสิต</option>
                                                <option value="อาจารย์">อาจารย์</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-1 col-md-1 col-sm-12">
                                            <label for="name_prefix" class="form-label">คำนำหน้า</label>
                                            <select class="form-select mb-3" aria-label="Default select example" name="name_prefix" require style="border-radius: 10px;">
                                                <option value="นาย">นาย</option>
                                                <option value="นาง">นาง</option>
                                                <option value="นางสาว">นางสาว</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-5 col-md-5 col-sm-12">
                                            <label for="name" class="form-label">ชื่อ : </label>
                                            <input type="text" class="form-control mb-3" name="name" id="name"  placeholder="ใส่ชื่อของคุณ" require style="border-radius: 10px;">
                                            
                                        </div>
                                        <div class="col-lg-5 col-md-5 col-sm-12">
                                            <label for="lastname" class="form-label">นามสกุล : </label>
                                            <input type="text" class="form-control mb-3" name="lastname" id="name"  placeholder="ใส่นามสกุลของคุณ" require style="border-radius: 10px;">
                                        </div>
                                    </div>
                                    <!-- Seelect สาขาวิชาเอก -->
                                    <!-- Select วิชาเอกที่ 1 -->
                                    <div class="row">
                                        
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <label for="stmajor" class="form-label">วิชาเอกที่ 1 : </label>
                                                <select class="form-select mb-3" aria-label="Default select example" name="stmajor" require style="border-radius: 10px;">
                                                    <option value="เอกการประถมศึกษา">เอกการประถมศึกษา</option>
                                                    <option value="เอกอุตสาหกรรมศึกษา">เอกอุตสาหกรรมศึกษา</option>
                                                    <option value="เอกเทคโนโลยีการศึกษา">เอกเทคโนโลยีการศึกษา</option>
                                                    <option value="เอกจิตวิทยา และการแนะแนว">เอกจิตวิทยา และการแนะแนว</option>
                                                    <option value="เอกการวัดประเมิน และวิจัยการศึกษา">เอกการวัดประเมิน และวิจัยการศึกษา</option>
                                                    <option value="เอกการศึกษาพิเศษ">เอกการศึกษาพิเศษ</option>
                                                    <option value="เอกการศึกษาตลอดชีวิต">เอกการศึกษาตลอดชีวิต</option>
                                                    <option value="การศึกษาเพื่อพัฒนาชุมชน">การศึกษาเพื่อพัฒนาชุมชน</option>
                                                </select>
                                            
                                        </div>
                                        <!-- Select วิชาเอกที่ 2 -->
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <label for="ndmajor" class="form-label">วิชาเอกที่ 2 : </label>
                                                <select class="form-select mb-3" aria-label="Default select example" name="ndmajor" require style="border-radius: 10px;">
                                                    <option value="เอกการศึกษาปฐมวัย">เอกการศึกษาปฐมวัย</option>
                                                    <option value="เอกการจัดการเรียนรู้ภาษาไทย">เอกการจัดการเรียนรู้ภาษาไทย</option>
                                                    <option value="เอกการจัดการเรียนรู้ภษาอังกฤษ">เอกการจัดการเรียนรู้ภษาอังกฤษ</option>
                                                    <option value="เอกการจัดการเรียนรู้สังคมศึกษา">เอกการจัดการเรียนรู้สังคมศึกษา</option>
                                                    <option value="เอกการจัดการเรียนรู้คณิตศาสตร์">เอกการจัดการเรียนรู้คณิตศาสตร์</option>
                                                    <option value="เอกการจัดการเรียนรู้วิทยาศาสตร์">เอกการจัดการเรียนรู้วิทยาศาสตร์</option>
                                                    <option value="เอกคอมพิวเตอร์ศึกษา">เอกคอมพิวเตอร์ศึกษา</option>
                                                </select>
                                            
                                        </div>
                                    </div>

                                    <!--เบอร์โทรศัพท์ -->
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <label for="tel" class="form-label">เบอร์โทรศัพท์มือถือ :</label>
                                            <input type="text" class="form-control mb-3" name="tel" id="tel" placeholder="เบอร์โทรศัพท์มือถือ" require style="border-radius: 10px;">
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <label for="home_tel" class="form-label">เบอร์โทรศัพท์บ้าน (ถ้ามี) :</label>
                                            <input type="text" class="form-control mb-3" name="home_tel" id="home_tel" placeholder="เบอร์โทรศัพท์บ้าน" style="border-radius: 10px;" require>
                                            
                                        </div>
                                    </div>

                                    <!-- gmail -->
                                    <div class="row">
                                        <div class="col-lg-4 col-md-4 col-sm-12">
                                            <label for="gmail" class="form-label">G-mail :</label>
                                            <input type="email" class="form-control mb-3" name="gmail" id="gmail" placeholder="" value="@gmail.com" require style="border-radius: 10px;">
                                            
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-12">
                                            <label for="gafe_mail" class="form-label">Gafe-mail :</label>
                                            <input type="email" class="form-control mb-3" name="gafe_mail" id="gafe_mail" placeholder="เบอร์โทรศัพท์มือถือ" value="@g.swu.ac.th" require style="border-radius: 10px;">
                                            
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-12">
                                            <label for="line_id" class="form-label">Line ID :</label>
                                            <input type="text" class="form-control mb-3" name="line_id" id="line_id "placeholder="Line ID" style="border-radius: 10px;">
                                            
                                        </div>
                                    </div>

                                </div>
                                <hr>
                                <!-- ที่อยู่ -->
                                <div>
                                    <b><p>ที่อยู่ที่ติดต่อได้</p></b>
                                    <label for="address" class="form-label">ที่อยู่ :</label>
                                    <textarea class="form-control mb-3" id="address" name="address" rows="3" placeholder="รายละเอียดที่อยู่ที่ติดต่อได้"  style="border-radius: 10px;"></textarea>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <label for="province" class="form-label">จังหวัด :</label>
                                        <input type="text" class="form-control mb-3" name="province" id="province" placeholder="จังหวัดที่อยู่"  style="border-radius: 10px;">
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <label for="zip_code" class="form-label">รหัสไปรษณีย์ :</label>
                                        <input type="text" class="form-control mb-3" name="zip_code" id="zip_code" placeholder="รหัสไปรษณีย์"  style="border-radius: 10px;">
                                    </div>
                                </div>
                                 <hr>
                                 <!-- คำถาม -->
                                 <b><p>จงตอบคำถาม</p></b>
                                 <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <label for="q_1" class="form-label">วิชาเอกที่ 1 ที่คุณชอบเรียนมากทีสุด :</label>
                                        <input type="text" class="form-control mb-3" placeholder="รหัสวิชา เข่น EDT324" id="q_1" name="q_1" require style="border-radius: 10px;">
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <label for="q_2" class="form-label">วิชาเอกที่ 2 ที่คุณชอบเรียนมากทีสุด :</label>
                                        <input type="text" class="form-control mb-3" placeholder="รหัสวิชา เข่น CED214" id="q_2" name="q_2" require style="border-radius: 10px;">
                                    </div>
                                 </div>

                                 <!-- บัญชี -->
                                 <b><p>บัญชี</p></b>
                                 <div>
                                    <label for="IDlogin" class="form-label">ID :</label>
                                    <input type="text" class="form-control mb-3" id="IDlogin" placeholder="รหัสนิสิต/รหัสบุคลากร" name="id_login" require style="border-radius: 10px;">
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <label for="PWlogin" class="form-label">Password :</label>
                                        <input type="password" class="form-control mb-3" id="PWlogin" placeholder="รหัสผ่านของคุณ" name="pw_login" require style="border-radius: 10px;">
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <label for="ndPWlogin" class="form-label">ยืนยัน Password :</label>
                                        <input type="password" class="form-control mb-3" id="ndPWlogin" placeholder="รหัสผ่านของคุณ" name="nd_pw_login" require style="border-radius: 10px;">
                                    </div>
                                </div>

                                <hr>
                                <!-- ปุ่มยืนยัน -->
                                <div class="d-flex flex-row justify-content-center">
                                    <button type="submit" class="btn bd-purple-500 btn-lg m-1" style="border-radius: 10px;">ลงทะเบียน</button>
                                    <button type="reset" class="btn btn-secondary btn-sm m-1" style="border-radius: 10px;">Clearform</button>   
                                </div>
                            </form>

                        </div>
                    </div>
                </div>

            </div>

        </div>

    </section>

 <!-- col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1 -->


    <script src="js/bootstrap.min.js"></script>
</body>
</html>
