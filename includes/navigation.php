<style>
#navbody {
  padding: 0;
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  background-color: #333;
  position: fixed; /* Set the navbar to fixed position */
  top: 80px; /* Position the navbar at the top of the page */
  width: 100%; /* Full width */
  padding-right:100px;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
  width: 175px;
  border-right: groove white 1px;
  border-bottom: groove white 1px;
}

.topnav a:hover {
  background-color: lightgray;
  color: black;
}

.topnav a.active {
  background-color: rgb(150,150,255);
  color: black;
}

.logo{
  position: fixed;
  right: 25px;
  top: 80px;
  
}

.logo img{
  width: 50px;
  height: 45px;
}
</style>

<body id="navbody">

  <div id="myDIV" class="topnav">
    <a class="<?php if($page == "Home") {echo "active";} ?>" href = "/2022S1_WEB_APP/index.php">HOME</a>
    <a class="<?php if($page == "Laptop") {echo "active";} ?>" href = "/2022S1_WEB_APP/product.php?page=Laptop">LAPTOP</a>
    <a class="<?php if($page == "Desktop") {echo "active";} ?>" href = "/2022S1_WEB_APP/product.php?page=Desktop">DESKTOP</a>
    <a class="<?php if($page == "Monitor") {echo "active";} ?>" href = "/2022S1_WEB_APP/product.php?page=Monitor">MONITOR</a>
    <a class="<?php if($page == "Mouse") {echo "active";} ?>" href = "/2022S1_WEB_APP/product.php?page=Mouse">MOUSE</a>
    <a class="<?php if($page == "Speaker") {echo "active";} ?>" href = "/2022S1_WEB_APP/product.php?page=Speaker">SPEAKER</a>
    <a class="<?php if($page == "Smartphone") {echo "active";} ?>" href = "/2022S1_WEB_APP/product.php?page=Smartphone">SMARTPHONE</a>
  </div>
  <?php 
    if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
      echo '
      <div class="logo">
        <a href = " /2022S1_WEB_APP/login.php"><img src="/2022S1_WEB_APP/image/cart.png" alt="cart"></a>
      </div>';
    }else{
      echo '
      <div class="logo">
        <a href = " /2022S1_WEB_APP/cart.php"><img src="/2022S1_WEB_APP/image/cart.png" alt="cart"></a>
      </div>';
    }
  ?>

</body>
