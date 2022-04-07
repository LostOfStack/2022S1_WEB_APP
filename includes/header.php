
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet"  href="/2022S1_WEB_APP/Style.css">
    
</head>

<?php
    session_start();

    // Check if the user is logged in, if not then redirect him to login page
    if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){ // guest header
        echo '<header class="container">
            <div class="crop">
                <a href = "/2022S1_WEB_APP/index.php"><img src="/2022S1_WEB_APP/image/Hardwareology.png" alt="Hardwareology"></a>
            </div>
            <div class="login">
                <a href = "/2022S1_WEB_APP/login.php">Log in</a>
            </div>
        </header>';

    } else{ // user header
        echo '<header class="container">
            <div class="crop">
                <a href = "/2022S1_WEB_APP/index.php"><img src="/2022S1_WEB_APP/image/Hardwareology.png" alt="Hardwareology"></a>
            </div>
            <div class="logout">
                <a href = "/2022S1_WEB_APP/logout.php">Log out</a>
            </div>
            <div class="profile">
                <a href = "/2022S1_WEB_APP/profile.php"><img src="/2022S1_WEB_APP/image/profileIcon.png" alt="Profile"></a>
            </div>
        </header>';

    }
?>

<style>
    .login{
        width:180px;
        height:35px;
        position: fixed;
        top: 15px;
        right: 10px;
    }

    .login a:link, .login a:visited {
        background-color: black;
        border-width:2px;
        border-color: white;
        border-style: solid;
        color: white;
        padding: 14px 25px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
    }

    .login a:hover, .login a:active {
        background-color: #33AF33;
    }

    .logout{
        width:180px;
        height:35px;
        position: fixed;
        top: 15px;
        right: 10px;
    }

    .logout a:link, .logout a:visited {
        background-color: black;
        border-width:2px;
        border-color: white;
        border-style: solid;
        color: white;
        padding: 14px 25px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
    }

    .logout a:hover, .logout a:active {
        background-color: red;
    }

    .crop img {
        width: 300px;
        height: 80px;
    }
    
    .profile img{
        width: 50px;
        height: 50px;
    }

    .container{
        background-color: black;
        width: 100%;
        position: fixed;
        top: 0px;
        left: 0px;
    }

    .profile a{
        font-size:48px;
        color:gray;
        position: fixed;
        top: 15px;
        right: 15px;
    }
</style>