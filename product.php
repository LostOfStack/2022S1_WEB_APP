<?php 
//session_start();
require 'check_if_added.php';
require 'config.php';
$page = $_GET["page"];
$sql = "SELECT * FROM product WHERE ptype='$page'";
$result = mysqli_query($con, $sql);
?>

<!DOCTYPE html>
<html>
    <head>
        <?php 
        include('includes/header.php');
        include('includes/navigation.php');

        if ($page=="Desktop"){echo "<title>Dekstop</title>";}
        elseif ($page=="Laptop"){echo "<title>Laptop</title>";}
        elseif ($page=="Mouse"){echo "<title>Mouse</title>";}
        elseif ($page=="Speaker"){echo "<title>Speaker</title>";}
        elseif ($page=="Smartphone"){echo "<title>Smartphone</title>";}
        elseif ($page=="Monitor"){echo "<title>Monitor</title>";}
        ?>
        <style>

            .pbox{
                display:block;
                position:static;
                float: left;
                width:400px;
                height:500px;
                background-color:white;
                text-align: center;
                padding:10px;
                box-sizing: border-box;
            }
            .pimg{
                width:350px;
                height:300px;
                text-align:center;
            }
            .pimg img{
                width:100%;
                
                max-height:300px;
            }

            .ptextbox{
                width:350px;
                height:200px;
            }
        </style>
    </head>
    <body>
        <div class="main">
        <?php 
            if ($page=="Desktop"){echo "<h1>Desktops</h1>";}
            elseif ($page=="Laptop"){echo "<h1>Laptops</h1>";}
            elseif ($page=="Mouse"){echo "<h1>Mouse</h1>";}
            elseif ($page=="Speaker"){echo "<h1>Speakers</h1>";}
            elseif ($page=="Smartphone"){echo "<h1>Smartphone</h1>";}
            elseif ($page=="Monitor"){echo "<h1>Monitors</h1>";}
        ?>
    
        <?php
            while($row = mysqli_fetch_array($result)){
                echo '
                <div class="pbox">
                    <div class="pimg">
                        <a href="cart.php"><img src="'.$row['img_directory'].'"></a>
                    </div>
                    <div class="ptextbox">
                        <h2>'.$row['brand'].'</h2>
                        <h3>'.$row['name'].'</h3>
                        <p>Price: RM'.$row['price'].'</p>';
                        if(!isset($_SESSION["loggedin"])){
                            echo '<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>';
                        }else{
                            if(check_if_added_to_cart($row1['id'])){
                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                            }else{
                                if(check_if_added_to_cart($row['id'])){
                                    echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                }else{
                                    echo '<a href="cart_add.php?id='.$row['id'].'" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>';
                                }
                            }
                        }
                    echo '</div>';
                echo'<div>';
            }
            
        ?>
        </div>
        <?php include('includes/footer.php'); ?>
    </body>
</html>