<!-- <!DOCTYPE html>
<html>
    <head>
    <title>Home</title>
    </head>
    <body>
        <div class="myhome">
            <h1 style="font-size:100px">Brand New Laptop</h1>
            <div class="rowhome">
                <div class="columnhome">
                <a href="cart.php">
                <img src="image/apple laptop.jpg" alt="AppleLaptop" style="width:100%;height:100%;">
                </a>
                <p style="font-size:50px;position:relative;top:110px;">MacBookPro13"<br>RM 5,599<br><br>Feature:<br>Retina display<br>Apple M1 chip<br>Backlit Magic Keyboard<br>Two Thunderbolt / USB 4 ports with support<br><br>
                </p>
                </div>
                <div class="columnhome">
                <a href="cart.php">
                <img src="image/acer laptop.jpg" alt="AcerLaptop" style="width:100%;height:100%;">
                </a>
                <p style="font-size:50px;">Swift X AMD<br>RM4,299<br><br>Feature:<br>1.39kg<br>GeForce RTX 3050Ti<br>16gb memory<br><br></p>
                </div>
                <div class="columnhome">
                <a href="cart.php">
                <img src="image/dell laptop.jpg" alt="DellLaptop" style="width:100%;height:100%;">
                </a>
                <p style="font-size:50px;position:relative;top:30px;">Dell XPS 13<br>RM6,979<br><br>Feature:<br>3200x1800 pixels<br>TouchScreen<br>128GB SSD Storage<br><br></p>
                </div>
            </div>
        </div>
    </body>
</html> -->


<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
//if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    //header("location: login.php");
    //exit;
//}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">-->
    <!-- <style>
        body{ font: 14px sans-serif; text-align: center; }
    </style> -->
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
            /* border-style: solid;
            border-color: black;
            border-width: 1px;
            border-radius: 30px;
            background-color: white; */
            text-align: center;
        }
    </style>

    <?php include('includes/footer.php'); ?>
</body>
</html>