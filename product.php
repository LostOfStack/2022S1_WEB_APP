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
            <?php
             if(isset($_SESSION['status']))
                {
                    echo"<h4>".$_SESSION['status']."</h4>";
                    unset($_SESSION['status']);
                }
            ?>
        <div class="main">
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
        <?php
                if($page=="laptop"){
                    echo '<Strong>
                    <div class="row">
                        <div class ="column">
                                        <a href="cart.php">
                                            <img src="image/apple laptop.jpg" width ="100%" alt="Apple Laptop">
                                        </a>
                                            <div class="caption">
                                                <h3>Apple Laptop</h3>
                                                <p>Price: RM 9,000</p> </Strong>';
                                                if(!isset($_SESSION['email'])){ 
                                                   echo '<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>';
                                                }
                                                else{
                                                    if(check_if_added_to_cart(1)){
                                                        echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                                   }
                                                   else{
    
                                                   echo '<a href="cart_add.php?id=1" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>';
                                                   }
                                                }
                                           echo '</div>';
                         echo '</div>';                  
                                                
                        echo '<Strong>
                            <div class ="column">   
                                    <a href="cart.php">
                                        <img src="image/acer laptop.jpg" width ="75%" alt="ACER Laptop">
                                    </a>
                                    
                                        <div class="caption">
                                            <h3>ACER Laptop</h3>
                                            <p>Price: RM 4,000</p></Strong>';
                                            
                                            if(!isset($_SESSION['email'])){ 
                                                echo '<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>';
                                            }
                                            else{
                                                if(check_if_added_to_cart(2)){
                                                    echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                                }
                                                else{

                                                echo '<a href="cart_add.php?id=1" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>';
                                                }
                                            }
                                        echo '</div>';
                             echo '</div>';      

                        echo '<Strong>
                            <div class ="column">
                                    <a href="cart.php">
                                        <img src="image/dell laptop.jpg"  width ="80.5%" alt="DELL Laptop">
                                    </a>
                                        <div class="caption">
                                            <h3>DELL Laptop</h3>
                                            <p>Price: RM 4,000</p></Strong>';
                                            if(!isset($_SESSION['email'])){ 
                                                echo '<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>';
                                            }
                                            else{
                                                if(check_if_added_to_cart(3)){
                                                    echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                                }
                                                else{

                                                echo '<a href="cart_add.php?id=1" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>';
                                                }
                                            }
                                        echo '</div>';
                             echo '</div>';
                     echo '</div>';
                    }
                    if($page=="desktop"){
                        echo '<Strong>
                        <div class="row">
                            <div class ="column">
                                            <a href="cart.php">
                                                <img src="image/apple laptop.jpg" width ="100%" alt="Apple Laptop">
                                            </a>
                                                <div class="caption">
                                                    <h3>Apple Laptop</h3>
                                                    <p>Price: RM 9,000</p> </Strong>';
                                                    if(!isset($_SESSION['email'])){ 
                                                       echo '<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>';
                                                    }
                                                    else{
                                                        if(check_if_added_to_cart(1)){
                                                            echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                                       }
                                                       else{
        
                                                       echo '<a href="cart_add.php?id=1" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>';
                                                       }
                                                    }
                                               echo '</div>';
                             echo '</div>';                  
                                                    
                            echo '<Strong>
                                <div class ="column">   
                                        <a href="cart.php">
                                            <img src="image/acer laptop.jpg" width ="75%" alt="ACER Laptop">
                                        </a>
                                        
                                            <div class="caption">
                                                <h3>ACER Laptop</h3>
                                                <p>Price: RM 4,000</p></Strong>';
                                                
                                                if(!isset($_SESSION['email'])){ 
                                                    echo '<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>';
                                                }
                                                else{
                                                    if(check_if_added_to_cart(2)){
                                                        echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                                    }
                                                    else{
    
                                                    echo '<a href="cart_add.php?id=1" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>';
                                                    }
                                                }
                                            echo '</div>';
                                 echo '</div>';      
    
                            echo '<Strong>
                                <div class ="column">
                                        <a href="cart.php">
                                            <img src="image/dell laptop.jpg"  width ="80.5%" alt="DELL Laptop">
                                        </a>
                                            <div class="caption">
                                                <h3>DELL Laptop</h3>
                                                <p>Price: RM 4,000</p></Strong>';
                                                if(!isset($_SESSION['email'])){ 
                                                    echo '<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>';
                                                }
                                                else{
                                                    if(check_if_added_to_cart(3)){
                                                        echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                                    }
                                                    else{
    
                                                    echo '<a href="cart_add.php?id=1" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>';
                                                    }
                                                }
                                            echo '</div>';
                                 echo '</div>';
                         echo '</div>';
                        }
            ?>
                
            </div>
            
        <?php include('includes/footer.php'); ?>
       
    </body>
</html>