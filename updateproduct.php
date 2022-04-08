<?php 
require 'config.php';
$sql = "SELECT * FROM product ORDER BY id ASC";
$result = mysqli_query($con, $sql);
?>

<!DOCTYPE html>
<html>
    <head>
        <?php include('includes/header.php');?>
        <style>
            
        </style>
    </head>
    <body>
        <table>
            <tr>
                <th>Product Type</th><th>Brand</th><th>Name</th><th>Price</th><th>Description</th><th>Quantity</th><th>Image directory</th>
            </tr>
        <?php
            while($row = mysqli_fetch_array($result)){
                echo "<tr>";
                echo "<td>".$row['ptype']."</td>";
                echo "<td>".$row['brand']."</td>";
                echo "<td>".$row['name']."</td>";
                echo "<td>".$row['price']."</td>";
                echo "<td>".$row['description']."</td>";
                echo "<td>".$row['quantity']."</td>";
                echo "<td>".$row['img_directory']."</td>";
                echo "<td><a href='edit.php?id=".$row['id']."'>Edit</a> | <a href='deleteproduct.php?id=".$row['id']."'>Delete</a></td></tr>";
            }
        ?>
        </table>
        <?php include('includes/footer.php'); ?>
    </body>
</html>