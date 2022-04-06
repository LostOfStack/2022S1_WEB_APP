<style>
#navbody {
  padding: 0;
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #333;
  position: fixed; /* Set the navbar to fixed position */
  top: 80px; /* Position the navbar at the top of the page */
  width: 100%; /* Full width */
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
  width: 10%;
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
  right: 50px;
  top: 80px;
  
}

.logo img{
  width: 50px;
  height: 45px;
}
</style>

<body id="navbody">

  <div id="myDIV" class="topnav">
    <a class="<?php if($page == "home") {echo "active";} ?>" href = "/2022S1_WEB_APP/index.php">HOME</a>
    <a class="<?php if($page == "laptop") {echo "active";} ?>" href = "/2022S1_WEB_APP/product.php?page=laptop">LAPTOP</a>
    <a class="<?php if($page == "desktop") {echo "active";} ?>" href = "/2022S1_WEB_APP/product.php?page=desktop">DESKTOP</a>
    <a class="<?php if($page == "monitor") {echo "active";} ?>" href = "/2022S1_WEB_APP/product.php?page=monitor">MONITOR</a>
    <a class="<?php if($page == "mouse") {echo "active";} ?>" href = "/2022S1_WEB_APP/product.php?page=mouse">MOUSE</a>
    <a class="<?php if($page == "speaker") {echo "active";} ?>" href = "/2022S1_WEB_APP/product.php?page=speaker">SPEAKER</a>
    <a class="<?php if($page == "smartphone") {echo "active";} ?>" href = "/2022S1_WEB_APP/product.php?page=smartphone">SMARTPHONE</a>
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
