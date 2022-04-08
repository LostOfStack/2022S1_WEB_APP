<?php
    require 'config.php';
    include('includes/header.php');


        $user_id=$_GET['id'];
        $confirm_query="update user_items set status='Confirmed' where user_id=$user_id";
        $confirm_query_result=mysqli_query($con,$confirm_query) or die(mysqli_error($con));
        
?>
<!DOCTYPE html>
<html>
<head>
    <title>Confirm Order</title>
    <style>
        .wrapper{
                width: 80%; 
                padding: 20px;
                margin-top: 150px;
                margin-left: auto;
                margin-right: auto;
                padding: 10px;
                position: static;
                border-style: solid;
                border-color: black;
                border-width: 1px;
                border-radius: 10px;
                background-color: white;
                text-align: center;
            }
    </style>
</head>
<body>
        <div>
            
            <br>
            <div class="wrapper">
                <div class="row">
                    <div class="col-xs-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading"></div>
                            <div class="panel-body">
                                <p style="font-size:24px">Your order is confirmed. Items will be delivered within 3 Days. Thank you for shopping with us. <a href="index.php">Click here</a> to purchase any other item.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</body>
<?php include('includes/footer.php'); ?>
       
       </body>
   </html>