<?php 

    session_start();
    require_once("php/dbconnector.php");

    // รับค่าPk
    $_GET['pid']; //แบบยืมชื้นเดียว
    $order_all = $_GET['Iv']; //แบบยืมหลายชิ้น

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/colors_bt5.css">
    <link rel="stylesheet" href="css/sta.css">
</head>
<body>
    <?php 
        include("template/navbar.php"); 
        echo $_GET['pid'];
    ?>

    
</body>
</html>
