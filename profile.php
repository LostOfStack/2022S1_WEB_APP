<!DOCTYPE html>
<html>
    <head>
        <style>
            .main{
                margin-top: 150px;
                height: 1600px;
                padding: 10px;
                position: static;
            }
        </style>
    </head>
    <body>
        <?php include('includes/header.php'); ?>
        <?php $page = null; include('includes/navigation.php'); ?>
        <div class="main">
            <h1>Profile</h1>
            <img src="/2022S1_WEB_APP/image/profile.jpg" style="border-radius: 25%; width: 300px; height: 300px">
        </div>
        <?php include('includes/footer.php'); ?>
    </body>
</html>