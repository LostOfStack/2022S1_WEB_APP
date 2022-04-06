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
                                                <h2>APPLE</h2>
                                                <h3>MacBookPro13"</h3>
                                                <p>Price: RM 5,599</p> </Strong>';
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
                                            <h2>ACER</h2>
                                            <h3>Aspire 3 "</h3>
                                            <p>Price: RM 2,099</p></Strong>';
                                            
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
                                            <h2>DELL</h2>
                                            <h3>New XPS 17 Laptop"</h3>
                                            <p>Price: RM 9,945</p></Strong>';
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
                                                    <h2>APPLE</h2>
                                                    <h3>iMac 24" </h3>
                                                    <p>Price: RM 7,249</p> </Strong>';
                                                    if(!isset($_SESSION['email'])){ 
                                                       echo '<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>';
                                                    }
                                                    else{
                                                        if(check_if_added_to_cart(4)){
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
                                                <h2>ACER</h2>
                                                <h3>Acer Aspire AXC895-10400F "</h3>
                                                <p>Price: RM 1,900</p></Strong>';
                                                
                                                if(!isset($_SESSION['email'])){ 
                                                    echo '<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>';
                                                }
                                                else{
                                                    if(check_if_added_to_cart(5)){
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
                                                <h2>DELL</h2>
                                                <h3>New Inspiron Compact Desktop "</h3>
                                                <p>Price: RM 2,099</p></Strong>';
                                                if(!isset($_SESSION['email'])){ 
                                                    echo '<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>';
                                                }
                                                else{
                                                    if(check_if_added_to_cart(6)){
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
                                                        <h2>AOC</h2>
                                                        <h3>AGON 27" Premium Gaming Monitor "</h3>
                                                        <p>Price: RM 900</p> </Strong>';
                                                        if(!isset($_SESSION['email'])){ 
                                                           echo '<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>';
                                                        }
                                                        else{
                                                            if(check_if_added_to_cart(7)){
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
                                                    <h3>DELL</h3>
                                                    <h3>Dell 23" Full HD Monitor P2317H "</h3>
                                                    <p>Price: RM 500</p></Strong>';
                                                    
                                                    if(!isset($_SESSION['email'])){ 
                                                        echo '<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>';
                                                    }
                                                    else{
                                                        if(check_if_added_to_cart(8)){
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
                                                    <h2>SAMSUNG</h2>
                                                    <h3>24" Flat T35 Series "</h3>
                                                    <p>Price: RM 700</p></Strong>';
                                                    if(!isset($_SESSION['email'])){ 
                                                        echo '<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>';
                                                    }
                                                    else{
                                                        if(check_if_added_to_cart(9)){
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
                                                        <h2>Glorious</h2>
                                                        <h3>Glorious Model O Gaming Mouse</h3>
                                                        <p>Price: RM 330</p> </Strong>';
                                                        if(!isset($_SESSION['email'])){ 
                                                           echo '<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>';
                                                        }
                                                        else{
                                                            if(check_if_added_to_cart(10)){
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
                                                    <h2>Logitech</h2>
                                                    <h3>Logitech G502 Hero </h3>
                                                    <p>Price: RM 300</p></Strong>';
                                                    
                                                    if(!isset($_SESSION['email'])){ 
                                                        echo '<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>';
                                                    }
                                                    else{
                                                        if(check_if_added_to_cart(11)){
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
                                                    <h2>RAZER</h2>
                                                    <h3>Razer DeathAdder V2 Pro</h3>
                                                    <p>Price: RM 700</p></Strong>';
                                                    if(!isset($_SESSION['email'])){ 
                                                        echo '<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>';
                                                    }
                                                    else{
                                                        if(check_if_added_to_cart(12)){
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
                                                        <h2>SONY </h2>
                                                        <h3>XB13 EXTRA BASS™ Portable Wireless Speaker </h3>
                                                        <p>Price: RM 230</p> </Strong>';
                                                        if(!isset($_SESSION['email'])){ 
                                                           echo '<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>';
                                                        }
                                                        else{
                                                            if(check_if_added_to_cart(13)){
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
                                                    <h2>Marshall</h2>
                                                    <h3>ACTON II BLUETOOTH </h3>
                                                    <p>Price: RM 1,200</p></Strong>';
                                                    
                                                    if(!isset($_SESSION['email'])){ 
                                                        echo '<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>';
                                                    }
                                                    else{
                                                        if(check_if_added_to_cart(14)){
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
                                                    <h3>JBL</h3>
                                                    <h3>JBL Flip 5 </h3>
                                                    <p>Price: RM 649</p></Strong>';
                                                    if(!isset($_SESSION['email'])){ 
                                                        echo '<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>';
                                                    }
                                                    else{
                                                        if(check_if_added_to_cart(15)){
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
                                                        <h2>APPLE</h2>
                                                        <h3>IPHONE 13</h3>
                                                        <p>Price: RM 3,899</p> </Strong>';
                                                        if(!isset($_SESSION['email'])){ 
                                                           echo '<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>';
                                                        }
                                                        else{
                                                            if(check_if_added_to_cart(16)){
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
                                                    <h2>SAMSUNG</h2>
                                                    <h3>Samsung Galaxy S21</h3>
                                                    <p>Price: RM 3,199</p></Strong>';
                                                    
                                                    if(!isset($_SESSION['email'])){ 
                                                        echo '<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>';
                                                    }
                                                    else{
                                                        if(check_if_added_to_cart(17)){
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
                                                    <h2>HUAWEI</h2>
                                                    <h3>HUAWEI P50 Pro</h3>
                                                    <p>Price: RM 4,199</p></Strong>';
                                                    if(!isset($_SESSION['email'])){ 
                                                        echo '<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>';
                                                    }
                                                    else{
                                                        if(check_if_added_to_cart(18)){
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