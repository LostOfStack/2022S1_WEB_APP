<!DOCTYPE html>
<html>
    <head>
    <title>Contact Us</title>
        <?php 
            include('includes/header.php');
            $page = null;
            include('includes/navigation.php');
        ?>

        <style>
            .contactus01{
                margin-top: 50px;
                margin-right: auto;
                padding: 20px;
                position: static;
                width: 40%;
                border-style: solid;
                border-color: black;
                border-radius: 30px;
                background-color: white;
                text-align: left;
                box-shadow: 5px 10px 5px #888888;
                min-width: 400px;
            }
        </style>
    </head>
    <body>

        <div class="main">
            <h1>Contact Us</h1>
            <img src="image/aboutus.jpg" alt="company picture" style="width:536px; height:356px;">
        </div>
        <div class="contactus01">
            <h1 style="text-align:center">Hardwareology</h1>
            <p style="color:red">*Don't contact! It won't work! Nobody gonna to reply you!</p>
            <p>Contact Number:<br>0123456789</p>
            <br>
            <p>Email:<br>hardwareology@gmail.com</p>
            <br>
            <p>Follow Us on our Facebook to get latest Update!<br><a href="https://www.facebook.com/UTARnet" target="_blank">Hardwareology</a></p>
            <p style="color:red">&No such facebook page exist, we didn't create it, the link direct you to Utar Facebook page</p>
            <Email>

        </div>
        <?php include('includes/footer.php'); ?>
    </body>
</html>


