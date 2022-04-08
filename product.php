<?php 
require 'check_if_added.php';
require 'config.php';
$page = $_GET["page"];
$sql = "SELECT * FROM product WHERE ptype='$page'";
$result = mysqli_query($con, $sql);
$numRow = mysqli_num_rows($result);
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
            .pcontainer{
                position:static;
                width: 1200px;
                height: <?php echo $numRow * 420 ?>px;
                margin-left:auto;
                margin-right:auto;
                padding:10px;
            }
            .pbox{
                box-sizing: border-box;
                float:left;
                width:100%;
                height:370px;
                background-color:white;
                margin-top:10px;
                margin-bottom:10px;
            }
            .pimg{
                box-sizing: border-box;
                float:left;
                width:380px;
                height:380px;
                margin:auto;
            }
            .pimg img{
                max-width:360px;
                width:auto;
                height:auto;
                max-height:360px;
            }
            .ptextbox2{
                text-align:center;
                padding:10px;
                margin:auto;
                box-sizing: border-box;
                float:right;
                height:380px;
                width:200px;
            }
            .ptextbox{
                padding:10px;
                margin:auto;
                box-sizing: border-box;
                float:left;
                height:380px;
                width:600px;
            }
            .btn {
                text-decoration: none;
                font-size: 1.5rem;
                position: relative;
                margin: 32px;
            }
            .btn-primary{
                background: #000;
                color: #fff;
                border-radius: 1000px;
                transition: transform 0.3s ease;
            }
            .btn-primary::after, .btn-primary::before{
                content:"";
                position: absolute;
                opacity: 0.3;
                background: #000;
                border-radius: inherit;
                width: 100%;
                height: 100%;
                left:0;
                bottom: 0;
                z-index: -1;
                transition: transform 0.3 ease;
            }
            .btn-primary:hover{
                transform: translate(-12px,-12px);
            }
            .btn-primary:hover::after{
                transform: translate(4px,4px);
            }
            .btn-primary:hover::before{
                transform: translate(7px,7px);
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
                echo '<div class="pcontainer">';
                while($row = mysqli_fetch_array($result)){
                    echo '
                        <div class="pbox">
                            <div class="pimg">
                                <a href="cart.php"><img src="'.$row['img_directory'].'"></a>
                            </div>

                            <div class="ptextbox">
                                <h2>'.$row['brand'].'</h2>
                                <h3>'.$row['name'].'</h3>
                                <h3>Description:</h3>
                                <p>'.$row['description'].'</p>
                            </div>
                            <div class="ptextbox2">
                                <h3>Price: RM'.$row['price'].'</h3>';
                                if(!isset($_SESSION["loggedin"])){
                                    echo '<p><a href="login.php" role="button" class="btn btn-primary ">Buy Now</a></p>';
                                }else{
                                    if(check_if_added_to_cart($row['id'])){
                                        echo '<a href="#" class=btn btn-success disabled>Added to cart</a>';
                                    }else{
                                        if(check_if_added_to_cart($row['id'])){
                                            echo '<a href="#" class=btn btn-success disabled>Added to cart</a>';
                                        }else{
                                            echo '<a href="cart_add.php?id='.$row['id'].'" class="btn btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>';
                                        }
                                    }
                                }
                            echo '</div>';
                        echo'</div>';
                }
                echo '</div>';
            ?>
        </div>
        <?php include('includes/footer.php'); ?>
    </body>
</html>