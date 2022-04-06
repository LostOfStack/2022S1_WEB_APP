<?php
session_start();
    require 'connection.php';
    if(!isset($_SESSION['email'])){
        header('location: login.php');
    }
    $user_id=$_SESSION['id'];
    $user_products_query="select it.id,it.name,it.price from users_items ut inner join items it on it.id=ut.item_id where ut.user_id='$user_id'";
    $user_products_result=mysqli_query($con,$user_products_query) or die(mysqli_error($con));
    $no_of_user_products= mysqli_num_rows($user_products_result);
    $sum=0;
    if($no_of_user_products==0){
        //echo "Add items to cart first.";
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
        <?php include('includes/header.php'); ?>
        <?php $page = null; include('includes/navigation.php'); ?>

        
        <h1>Shopping Cart</h1>

        <table width='80%' border = 1 >

            <tr>
                <th>Subject</th> <th>Message</th> <th>Type</th> <th>Posted Date</th> <th> Action </th>
            </tr>
            <?php  
                while($row = mysqli_fetch_array($result)) {         
                    echo "<tr>";
                    echo "<td>".$row['subject']."</td>";
                    echo "<td>".$row['message']."</td>";
                    echo "<td>".$row['type']."</td>"; 
                    echo "<td>".$row['posted']."</td>";		
                    echo "<td><a href='edit.php?id=".$row['id']."'>Edit</a> | <a href='delete.php?id=".$row['id']."'>Delete</a></td></tr>";        
                }
            ?>
        </table>

        <?php include('includes/footer.php'); ?>
    </body>
</html>