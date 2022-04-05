<!-- <!DOCTYPE html>
<html>
    <head>
    <title>Home</title>
    </head>
    <body>
        


        
    </body>
</html> -->


<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- <style>
        body{ font: 14px sans-serif; text-align: center; }
    </style> -->
</head>
<body>
    
    <?php include('includes/header.php'); ?>
    <?php $page = "home"; include('includes/navigation.php'); ?>

    <div class="wrapper">
    <h1 class="my-5">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h1>
    <p>
        <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
        <a href="logout.php" class="btn btn-danger ml-3">Sign Out of Your Account</a>
    </p>
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