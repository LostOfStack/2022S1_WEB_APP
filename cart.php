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
        <title>Cart</title>
    </head>
    <body>
        <style>
            td{
                text-align: center;
            }
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
        
        <?php $page = null; include('includes/navigation.php'); ?>

        
        

        <br>
            <div class="wrapper">
                <h1>Shopping Cart</h1>
                <table class="table table-bordered table-striped" width='100%' border=1>
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
                            <th></th><th>Total</th><th>RM <?php echo $sum;?>/-</th><th><a href="confirmpayment.php?id=<?php echo $user_id?>" class="btn btn-primary">Confirm Order</a></th>
                        </tr>
                    </tbody>
                </table>
            </div>
            <br><br><br><br><br><br><br><br><br><br>

        <?php include('includes/footer.php'); ?>
    </body>
</html>