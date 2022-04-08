<?php 
session_start();
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
            .btn{
                width: 300px;
                height: 100px;
                border: none;
                color: white;
                background-color: #8a8f94;
                border-radius: 4px;
                box-shadow: inset 0 0 0 0 #f9e506;
                font-size:1.5rem;
                padding: 6px;
                outline:none;
            }
           
            .btn, a:link { 
                text-decoration: none; 
            }

            .btn-success {
            color: #fff;
            background-color: #5cb85c;
            border-color: #4cae4c;
            }
            .btn-success:focus{
            color: #fff;
            background-color: #449d44;
            border-color: #255625;
            }
            .btn-success:hover {
            color: #fff;
            background-color: #449d44;
            border-color: #398439;
            }
            .btn-success:active{
            color: #fff;
            background-color: #449d44;
            border-color: #398439;
            }
            .btn-success:active:hover {
            color: #fff;
            background-color: #398439;
            border-color: #255625;
            }
        
            .btn-primary {
            color: #fff;
            background-color: #0a0a0a;
            border-color: #2e6da4;
            }
            .btn-primary:focus{
            color: #fff;
            background-color:#27272b;
            border-color: #27272b;
            }
            .btn-primary:hover {
            color: #fff;
            background-color: #27272b;
            border-color: #27272b;
            }
            .btn-primary:active{
            color: #fff;
            background-color: #27272b;
            border-color:#27272b;
            }
            .btn-primary:active:hover{
            color: #fff;
            background-color: #27272b;
            border-color:#27272b;
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
                                <h3>'.$row['pname'].'</h3>
                                <h3>Description:</h3>
                                <p>'.$row['pdescription'].'</p>
                            </div>
                            <div class="ptextbox2">
                                <h3>Price: RM'.$row['price'].'</h3>';
                                if(!isset($_SESSION["loggedin"])){
                                    echo '<p><a href="login.php" role="button" class="btn btn-primary >Buy Now</a></p>';
                                }else{
                                    if(check_if_added_to_cart($row['id'])){
                                        echo '<a href="#" class=btn btn-success disabled >Added to cart</a>';
                                    }else{
                                        if(check_if_added_to_cart($row['id'])){
                                            echo '<a href="#" class= btn btn-success disabled >Added to cart</a>';
                                        }else{
                                            echo '<a href="cart_add.php?id='.$row['id'].'" class="btn btn-primary " name="add" value="add" class="btn btn-primary ">Add to cart</a>';
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