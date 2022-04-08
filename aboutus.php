<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
    <title>About Us</title>
        <?php 
            include('includes/header.php');
            $page = null;
            include('includes/navigation.php');

        ?>
    </head>
    <body>

        <div class="main">
            <h1>About Us</h1>
        </div>

        <div class="aboutus01">
            <img src="image/Creative.png" alt="Hardwareology">
        <div>

        <div class="aboutus02">
            <h1 style="text-align:center">Hardwareology</h1>
            <h2>History:</h2>
            <p>Created in early first quater of 2022.<br>End in early second quater of 2022.<br>You ask for history? the headquater is combination of 4 computers only, once wiseman said <strong><em>"A lot of richest company, their headquater start from their own garage."</em></strong></p>
            <h2>Mission:</h2>
            <p><i>To maintain mankind live under technology, One person one purchase, keep my wallet noice and fat.</i></p>
            <h2>Vision:</h2>
            <p>Your money belongs to me, My money also belongs me</p>
        </div>
        

        <?php include('includes/footer.php'); ?>
    </body>
</html>
