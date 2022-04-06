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
            echo "<h1>Desktops</h1>";
        }
        elseif ($page=="laptop"){
            echo "<title>Laptop</title>";
            echo "<h1>Laptops</h1>";
        }
        elseif ($page=="mouse"){
            echo "<title>Mouse</title>";
            echo "<h1>Mouse</h1>";
        }
        elseif ($page=="speaker"){
            echo "<title>Speaker</title>";
            echo "<h1>Speakers</h1>";
        }
        elseif ($page=="smartphone"){
            echo "<title>Smartphone</title>";
            echo "<h1>Smartphone</h1>";
        }
        elseif ($page=="monitor"){
            echo "<title>Monitor</title>";
            echo "<h1>Monitors</h1>";
        }
        ?>
        
    </head>
    <body>
        
        <div class="main">
        
        <?php
                       
                if($page=="laptop"){
                    echo '<Strong>
                    <div class="row">
                        <div class ="column">
                                        <a href="cart.php">
                                            <img src="image/apple laptop.jpg" width ="100%" alt="Apple Laptop">
                                        </a>
                                            <div class="caption">
                                                <h3>MacBookPro13"</h3>
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
                                                <img src="image/imac desktop.jpg" width ="100%" alt="imac desktop">
                                            </a>
                                                <div class="caption">
                                                    <h3>IMAC Desktop</h3>
                                                    <p>Price: RM 12,000</p> </Strong>';
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
                                            <img src="image/acer desktop.jpg" width ="60%" alt="ACER desktop">
                                        </a>
                                        
                                            <div class="caption">
                                                <h3>ACER Desktop</h3>
                                                <p>Price: RM 6,000</p></Strong>';
                                                
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
                                            <img src="image/dell desktop.jpg"  width ="80.5%" alt="DELL desktop">
                                        </a>
                                            <div class="caption">
                                                <h3>DELL Desktop</h3>
                                                <p>Price: RM 5,000</p></Strong>';
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
                         if($page=="monitor"){
                            echo '<Strong>
                            <div class="row">
                                <div class ="column">
                                                <a href="cart.php">
                                                    <img src="image/aoc monitor.jpg" width ="60%" alt="aoc monitor">
                                                </a>
                                                    <div class="caption">
                                                        <h3>AOC Monitor</h3>
                                                        <p>Price: RM 1,000</p> </Strong>';
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
                                                <img src="image/dell monitor.jpg" width ="75%" alt="dell monitor">
                                            </a>
                                            
                                                <div class="caption">
                                                    <h3>DELL Monitor</h3>
                                                    <p>Price: RM 600</p></Strong>';
                                                    
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
                                                <img src="image/samsung monitor.jpg"  width ="80.5%" alt="samsung monitor">
                                            </a>
                                                <div class="caption">
                                                    <h3>SAMSUNG Monitor</h3>
                                                    <p>Price: RM 900</p></Strong>';
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
                         if($page=="mouse"){
                            echo '<Strong>
                            <div class="row">
                                <div class ="column">
                                                <a href="cart.php">
                                                    <img src="image/glorious mouse.jpg" width ="60%"  >
                                                </a>
                                                    <div class="caption">
                                                        <h3>Glorious Model O Gaming Mouse</h3>
                                                        <p>Price: RM 450</p> </Strong>';
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
                                                <img src="image/logitech mouse.jpg" width ="75%" >
                                            </a>
                                            
                                                <div class="caption">
                                                    <h3>Logitech G502 Gaming Mouse</h3>
                                                    <p>Price: RM 168</p></Strong>';
                                                    
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
                                                <img src="image/razer death mouse.jpg"  width ="50%" >
                                            </a>
                                                <div class="caption">
                                                    <h3>Razer DeathAdder Pro V2 Wireless Gaming Mouse</h3>
                                                    <p>Price: RM 340</p></Strong>';
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
                         if($page=="speaker"){
                            echo '<Strong>
                            <div class="row">
                                <div class ="column">
                                                <a href="cart.php">
                                                    <img src="image/sony speaker.jpg" width ="75%"  >
                                                </a>
                                                    <div class="caption">
                                                        <h3>SONY Speaker</h3>
                                                        <p>Price: RM 230</p> </Strong>';
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
                                                <img src="image/marshall speaker.jpg" width ="50%" >
                                            </a>
                                            
                                                <div class="caption">
                                                    <h3>Marshall Speaker</h3>
                                                    <p>Price: RM 1688</p></Strong>';
                                                    
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
                                                <img src="image/jbl speaker.jpg"  width ="50%" >
                                            </a>
                                                <div class="caption">
                                                    <h3>JBL Bluetooth Speaker</h3>
                                                    <p>Price: RM 340</p></Strong>';
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
                         if($page=="smartphone"){
                            echo '<Strong>
                            <div class="row">
                                <div class ="column">
                                                <a href="cart.php">
                                                    <img src="image/iphone.jpg" width ="75%"  >
                                                </a>
                                                    <div class="caption">
                                                        <h3>IPHONE 13</h3>
                                                        <p>Price: RM 6000</p> </Strong>';
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
                                                <img src="image/samsung.jpg" width ="50%" >
                                            </a>
                                            
                                                <div class="caption">
                                                    <h3>Samsung Galaxy S21</h3>
                                                    <p>Price: RM 5000</p></Strong>';
                                                    
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
                                                <img src="image/huawei.jpg"  width ="50%" >
                                            </a>
                                                <div class="caption">
                                                    <h3>HUAWEI P50 PRo</h3>
                                                    <p>Price: RM 3400</p></Strong>';
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