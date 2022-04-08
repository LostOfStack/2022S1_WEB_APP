
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"  href="/2022S1_WEB_APP/Style.css">
    
</head>

<?php

    if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] != true){ // guest header // Check if the user is logged in, if not then redirect him to login page
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
