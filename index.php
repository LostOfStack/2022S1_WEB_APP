
<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
    
</head>
<body>
    
    <?php include('includes/header.php'); ?>
    <?php $page = "home"; include('includes/navigation.php'); ?>

    <div class="myhome">
        <?php 
            if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true)
                echo '<h1>Welcome, our guest!</h1>';
            else
                echo '<h1>Welcome, <b>'.htmlspecialchars($_SESSION["username"]).'</b>!!!</h1>';
        ?>
        <h1 style="font-size:100px;text-align:center;">Our Main Product</h1>
    </div>
    <div class="rowhome">
            <div class="columnhome">
            <a href="/2022S1_WEB_APP/product.php?page=laptop">
            <img src="image/apple laptop.jpg" alt="LaptopPage" style="width:70%;height:100%;">
            </a>
            </p>
            </div>
            <div class="columnhome">
            <a href="/2022S1_WEB_APP/product.php?page=desktop">
            <img src="image/dell desktop.jpg" alt="DesktopPage" style="width:70%;height:100%;">
            </a>
            </div>
            <div class="columnhome">
            <a href="/2022S1_WEB_APP/product.php?page=monitor">
            <img src="image/aoc monitor.jpg" alt="MonitorPage" style="width:70%;height:100%;">
            </a>
            </div>
        </div>
        <div class="rowhome">
            <div class="columnhome">
            <p style="font-size:50px;">Laptop
            </p>
            </div>
            <div class="columnhome">
            <p style="font-size:50px;">Desktop</p>
            </div>
            <div class="columnhome">
            <p style="font-size:50px;">Monitor</p>
            </div>
        </div>
        <h2 style="font-size:100px;text-align:center;">Other Product</h2>
    <div class="rowhome">
            <div class="columnhome">
            <a href="/2022S1_WEB_APP/product.php?page=smartphone">
            <img src="image/huawei.jpg" alt="SmartPhonePage" style="width:70%;height:100%;">
            </a>
            </p>
            </div>
            <div class="columnhome">
            <a href="/2022S1_WEB_APP/product.php?page=mouse">
            <img src="image/glorious mouse.jpg" alt="MousePage" style="width:70%;height:100%;">
            </a>
            </div>
            <div class="columnhome">
            <a href="/2022S1_WEB_APP/product.php?page=speaker">
            <img src="image/jbl speaker.jpg" alt="SpeakerPage" style="width:70%;height:100%;">
            </a>
            </div>
        </div>
        <div class="rowhome">
            <div class="columnhome">
            <p style="font-size:50px;">SmartPhone
            </p>
            </div>
            <div class="columnhome">
            <p style="font-size:50px;">Mouse</p>
            </div>
            <div class="columnhome">
            <p style="font-size:50px;">Speaker</p>
            </div>
        </div>
        <h2 style="font-size:100px;text-align:center;">Why Choose Us</h2>
        <div class="rowhome">
            <div class="columnhome">
            <img src="image/cash2.png" alt="CashLogo" style="width:55%;height:100%;">
            </a>
            </p>
            </div>
            <div class="columnhome">
            <img src="image/Clock.png" alt="CashLogo" style="width:40%;height:100%;">
            </a>
            </div>
            <div class="columnhome">
            <img src="image/suitcase.png" alt="CashLogo" style="width:40%;height:100%;">
            </a>
            </div>
        </div>
        <div class="rowhome">
            <div class="columnhome">
            <p style="font-size:50px;">Low Cost
            </p>
            </div>
            <div class="columnhome">
            <p style="font-size:50px;">Fast</p>
            </div>
            <div class="columnhome">
            <p style="font-size:50px;">Professional</p>
            </div>
        </div>
    <style>
        .wrapper{
            margin-top: 150px;
            margin-left: auto;
            margin-right: auto;
            padding: 10px;
            position: static;
            text-align: center;
        }
    </style>

    <?php include('includes/footer.php'); ?>
</body>
</html>