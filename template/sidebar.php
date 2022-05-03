<nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse">
     <div class="list-group list-group-flush  mt-4 ">
        <a href="index.php" class="list-group-item list-group-item-action py-3 ripple shadow-sm">
            <i data-feather="home"class="me-3"></i><span>Home</span>
        </a>
        <?php if($_SESSION['role']==1){ ?>
            <a href="dashboard_new.php" class="list-group-item list-group-item-action py-3 ripple shadow-sm">
                <i data-feather="pie-chart"class="me-3"></i><span>Dashboard</span>
            </a>
            <a href="list_tool.php" class="list-group-item list-group-item-action py-3 ripple shadow-sm">
                <i data-feather="monitor"class="me-3"></i><span>List tool</span>
            </a>
            <a href="list_user.php" class="list-group-item list-group-item-action py-3 ripple shadow-sm">
                <i data-feather="book"class="me-3"></i><span>List user</span>
            </a>
        <?php } ?>
    </div>
</nav> 