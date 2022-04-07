<?php
    session_start();
    require 'config.php';
    if(!isset($_SESSION['loggedin'])){
        header('location:index.php');
    }else{
        $user_id=$_GET['id'];
        $confirm_query="update user_items set status='Confirmed' where user_id=$user_id";
        $confirm_query_result=mysqli_query($con,$confirm_query) or die(mysqli_error($con));
        
    }
?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
        <div>
           
             <?php include('includes/header.php'); ?>
            
            <br>
            <div class="container">
                <div class="row">
                    <div class="col-xs-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading"></div>
                            <div class="panel-body">
                                <p>Your order is confirmed. Thank you for shopping with us. <a href="product.php">Click here</a> to purchase any other item.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</body>
<?php include('includes/footer.php'); ?>
       
       </body>
   </html>