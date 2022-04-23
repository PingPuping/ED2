
<!-- Navbar -->
    <nav class="navbar navbar-expand-sm navbar-dark bd-purple-500 ">
        <div class="container">
            <!-- Navbar-brand -->
            <a href="index.php" class="navbar-brand mb-0 h1 fs-2">ED-TOOL</a>
            <!-- Navbar-item -->
            <!-- Toggler -->
            <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbar1">
                <span class="navbar-toggler-icon" ></span>
            </button>
            <!-- Navbar-Item -->
            <div id="navbar1" class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="dashboard.php">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="list_tool.php">รายการอุปกรณ์</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="list_user.php">รายชื่อสมาชิก</a>
                    </li> -->

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <?php 
                                 if(!(isset($_SESSION['ss_user']))){
                                    echo  "Username";
                                 }else{
                                    echo $_SESSION['ss_user'];
                                 }
                                 
                            
                            ?>
                        </a>
                        <!-- Dropdown -->
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">ดูโปรไฟล์</a></li>
                            <li><a class="dropdown-item" href="#">ประวัติการยืม</a></li>

                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item text-danger" href="php/logout.php" >
                                <?php  
                                    if(!(isset($_SESSION['ss_user']))){
                                       echo  "เข้าสู่ระบบ";
                                    }else{
                                        echo "ออกจากระบบ";
                                    }
                                ?>
                            </a></li>
                        </ul>
                    </li>

                </ul>
            </div>
        </div>
    </nav>