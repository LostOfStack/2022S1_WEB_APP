<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <?php 
        include('includes/header.php');
        $page = $_GET["page"];
        include('includes/navigation.php');

        if ($page=="desktop"){
            echo "<title>Dekstop</title>";
        }
        ?>
        
    </head>
    <body>
        <div class="main">
        <?php
                if($page=="laptop"){
                    echo "laptop";
                }
                if(isset($_SESSION['status']))
                {
                    echo"<h4>".$_SESSION['status']."</h4>";
                    unset($_SESSION['status']);
                }
            ?>
            <form action = "config.php" method="POST">
                <div class ="form-group mb-3">
                    <input type ="checkbox" name ="brands[]" value ="Acer"> Acer <br>
                    <input type ="checkbox" name ="brands[]" value ="Apple"> Apple<br>
                    <input type ="checkbox" name ="brands[]" value ="Dell"> Dell <br>
                    <input type ="checkbox" name ="brands[]" value ="Samsung"> Samsung <br>
                </div>
                <div class = "form-group mb-3"> 
                    <button type="submit" name ="save_multiple_checkbox" class="btn btn-primary"> Save Multiple Checkbox </button>
                </div>
            </form> 
         
                <div class="row">
                    <div class ="column">
                                    <a href="cart.php">
                                        <img src="image/apple laptop.jpg" width ="100%" alt="Apple Laptop">
                                    </a>
                                        <div class="caption">
                                            <h3>Apple Laptop</h3>
                                            <p>Price: RM 9,000</p>
                                            <?php 
                                            if(!isset($_SESSION['email'])){  ?>
                                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                            <?php
                                            }
                                            else{
                                                 if(check_if_added_to_cart(1)){
                                                     echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                                }
                                                else{
                                                ?>
                                                <a href="cart_add.php?id=1" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                                }
                                            }
                                            ?>
                                        </div>
                     </div>

                     <div class ="column">   
                            <a href="cart.php">
                                <img src="image/acer laptop.jpg" width ="75%" alt="ACER Laptop">
                            </a>
                            
                                <div class="caption">
                                    <h3>ACER Laptop</h3>
                                    <p>Price: RM 4,000</p>
                                    <?php 
                                    if(!isset($_SESSION['email'])){  ?>
                                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                            <?php
                                            }
                                            else{
                                                 if(check_if_added_to_cart(2)){
                                                     echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                                }
                                                else{
                                                ?>
                                                <a href="cart_add.php?id=1" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                                }
                                            }
                                            ?>
                                </div>
                    </div>
                   
                    <div class ="column">
                            <a href="cart.php">
                                <img src="image/dell laptop.jpg"  width ="80.5%" alt="DELL Laptop">
                            </a>
                                <div class="caption">
                                    <h3>DELL Laptop</h3>
                                    <p>Price: RM 4,000</p>
                                    <?php 
                                    if(!isset($_SESSION['email'])){  ?>
                                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                            <?php
                                            }
                                            else{
                                                 if(check_if_added_to_cart(3)){
                                                     echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                                }
                                                else{
                                                ?>
                                                <a href="cart_add.php?id=1" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                                }
                                            }
                                            ?>
                                </div>
                    </div>
                </div>

            
        </div>
        <?php include('includes/footer.php'); ?>
       
    </body>
</html>

