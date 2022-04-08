<?php
    require 'config.php';
    include('includes/header.php');
    // if(!isset($_SESSION["loggedin"])){
    //     header('location: login.php');
    // }
    $user_id=$_SESSION['id'];
    $user_products_query="select it.id,it.name,it.price from user_items ut inner join product it on it.id=ut.item_id where ut.user_id='$user_id'";
    $user_products_result=mysqli_query($con,$user_products_query) or die(mysqli_error($con));
    $no_of_user_products= mysqli_num_rows($user_products_result);
    $sum=0;
    if($no_of_user_products==0){
    ?>
        <script>
        window.alert("No items in the cart!!");
        </script>
    <?php
    }else{
        while($row=mysqli_fetch_array($user_products_result)){
            $sum=$sum+$row['price']; 
       }
    }
?>
<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        <style>
            td{
                text-align: center;
            }
        </style>
        
        <?php $page = null; include('includes/navigation.php'); ?>

        
        <h1>Shopping Cart</h1>

        <br>
            <div id="table">
                <table class="table table-bordered table-striped" width='80%' border=1>
                    <tbody>
                        <tr>
                            <th>Item Number</th><th>Item Name</th><th>Price</th><th></th>
                        </tr>
                       <?php 
                        $user_products_result=mysqli_query($con,$user_products_query) or die(mysqli_error($con));
                        $no_of_user_products= mysqli_num_rows($user_products_result);
                        $counter=1;
                       while($row=mysqli_fetch_array($user_products_result)){
                           
                         ?>
                        <tr>
                            <td><?php echo $counter ?></td><td><?php echo $row['name']?></td><td><?php echo $row['price']?></td>
                            <td><a href='cart_remove.php?id=<?php echo $row['id'] ?>'>Remove</a></td>
                        </tr>
                       <?php $counter=$counter+1;}?>
                        <tr>
                            <th></th><th>Total</th><th>Rs <?php echo $sum;?>/-</th><th><a href="confirmpayment.php?id=<?php echo $user_id?>" class="btn btn-primary">Confirm Order</a></th>
                        </tr>
                    </tbody>
                </table>
            </div>
            <br><br><br><br><br><br><br><br><br><br>

        <?php include('includes/footer.php'); ?>
    </body>
</html>