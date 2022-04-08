
<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
    
    <?php include('includes/header.php'); ?>
    <?php $page = "Home"; include('includes/navigation.php'); ?>
</head>
<body>
    
    <div style="margin-left:50px; margin-right:50px;">
        <?php 
            if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true)
                echo '<h1>Welcome, our guest!</h1>';
            else
                echo '<h1>Welcome, <b>'.htmlspecialchars($_SESSION["username"]).'</b>!!!</h1>';
        ?>
        <h1 style="font-size:64px;text-align:center;">Our Main Product</h1>
    
    <div class="rowhome">
            <div class="columnhome">
            <a href="/2022S1_WEB_APP/product.php?page=laptop">
            <img src="image/modifiedapple.png" alt="LaptopPage" style="width:70%;height:100%;">
            </a>
            </p>
            </div>
            <div class="columnhome">
            <a href="/2022S1_WEB_APP/product.php?page=desktop">
            <img src="image/modifieddesktop.png" alt="DesktopPage" style="width:70%;height:100%;">
            </a>
            </div>
            <div class="columnhome">
            <a href="/2022S1_WEB_APP/product.php?page=monitor">
            <img src="image/modifiedmonitor.png" alt="MonitorPage" style="width:70%;height:100%;">
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
        <h2 style="font-size:64px;text-align:center;">Other Product</h2>
    <div class="rowhome">
            <div class="columnhome">
            <a href="/2022S1_WEB_APP/product.php?page=smartphone">
            <img src="image/modifiedphone.png" alt="SmartPhonePage" style="width:70%;height:100%;">
            </a>
            </p>
            </div>
            <div class="columnhome">
            <a href="/2022S1_WEB_APP/product.php?page=mouse">
            <img src="image/modifiedmouse.png" alt="MousePage" style="width:70%;height:100%;">
            </a>
            </div>
            <div class="columnhome">
            <a href="/2022S1_WEB_APP/product.php?page=speaker">
            <img src="image/modifiedspeaker.png" alt="SpeakerPage" style="width:70%;height:100%;">
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
        <h2 style="font-size:64px;text-align:center;">Why Choose Us</h2>
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