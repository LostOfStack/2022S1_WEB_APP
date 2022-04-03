<!-- <nav>
	<ul>
		<a href = "/2022S1_WEB_APP/laptop.php"><li>LAPTOP</li></a>
		<a href = "/2022S1_WEB_APP/desktop.php"><li>DESKTOP</li></a>
		<a href = "/2022S1_WEB_APP/monitor.php"><li>MONITOR</li></a>
		<a href = "/2022S1_WEB_APP/mouse.php"><li>MOUSE</li></a>
        <a href = "/2022S1_WEB_APP/speaker.php"><li>SPEAKER</li></a>
        <a href = "/2022S1_WEB_APP/sphone.php"><li>SPHONE</li></a>
	</ul>
</nav> -->


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
#navbody {
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
  position: absolute;
  position: fixed;
  right: 50px;
  top: 80px;
  
}

.logo img{
  width: 60px;
  height: 45px;
}
</style>
</head>
<body id="navbody">

<div id="myDIV" class="topnav">
  <a class="<?php if($page == "home") {echo "active";} ?>" href = "/2022S1_WEB_APP/index.php">HOME</a>
	<a class="<?php if($page == "laptop") {echo "active";} ?>" href = "/2022S1_WEB_APP/laptop.php">LAPTOP</a>
	<a class="<?php if($page == "desktop") {echo "active";} ?>" href = "/2022S1_WEB_APP/desktop.php">DESKTOP</a>
	<a class="<?php if($page == "monitor") {echo "active";} ?>" href = "/2022S1_WEB_APP/monitor.php">MONITOR</a>
	<a class="<?php if($page == "mouse") {echo "active";} ?>" href = "/2022S1_WEB_APP/mouse.php">MOUSE</a>
  <a class="<?php if($page == "speaker") {echo "active";} ?>" href = "/2022S1_WEB_APP/speaker.php">SPEAKER</a>
  <a class="<?php if($page == "sphone") {echo "active";} ?>" href = "/2022S1_WEB_APP/sphone.php">SMART PHONE</a>
  
</div>
<div class="logo">
  <a href = "/2022S1_WEB_APP/cart.php"><img src="/2022S1_WEB_APP/image/white cart.png" alt="cart"></a>
</div>

<!-- <i class="fa fa-shopping-cart" style="font-size:24px; margin: -10px 0px -10px 0px"></i> -->
</body>
</html>