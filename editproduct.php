<?php
// include database connection file
include_once("config.php");

// Check if form is submitted for  update, then redirect to homepage after update
if(isset($_POST['update']))
{	
	$id = $_POST['id'];
	$ptype = $_POST['ptype'];
    $brand = $_POST['brand'];
    $pname = $_POST['pname'];
    $price = $_POST['price'];
    $pdescription = $_POST['pdescription'];
    $quantity = $_POST['quantity'];
    $img_directory =$_POST['img_directory'];

		
	// update announcement data
	$result = mysqli_query($con, "UPDATE product SET ptype='$ptype',brand='$brand',pname='$pname',price='$price', pdescription='$pdescription', quantity='$quantity', img_directory='$img_directory' WHERE id=$id");
	
	// Redirect to homepage to display updated announcement in list
	header("Location: updateproduct.php");
}
?>
<?php
// Display selected announcement data based on id
// Getting id from url
$id = $_GET['id'];

// Fetch announcement data based on id
$result = mysqli_query($con, "SELECT * FROM product WHERE id=$id");

$row = mysqli_fetch_assoc($result);

	$ptype = $row['ptype'];
    $brand = $row['brand'];
    $pname = $row['pname'];
    $price = $row['price'];
    $pdescription = $row['pdescription'];
    $quantity = $row['quantity'];
    $img_directory =$row['img_directory'];

?>
<html>
<head>	
	<title>Edit Product</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<style>
		body{ font: 14px sans-serif; }
		.wrapper{
        width: 30%; 
        padding: 20px;
        margin-top: 150px;
        margin-left: auto;
        margin-right: auto;
        padding: 10px;
        position: static;
        border-style: solid;
        border-color: black;
        border-width: 1px;
        border-radius: 30px;
        background-color: white;
        text-align: center;
        }
		input[type=text], select {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            }

            input[type=submit] {
            width: 100%;
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            }

            input[type=submit]:hover {
            background-color: #45a049;
        }

		#back{
			width:180px;
			height:35px;
		}

		#back a:link, #back a:visited {
			background-color: black;
			color: white;
			padding: 14px 25px;
			text-align: center;
			text-decoration: none;
			display: inline-block;
		}

		#back a:hover, #back a:active {
			background-color: red;
		}
	</style>
</head>

<body>
	<div id='back'>
		<a href="updateproduct.php">< Back</a>
	</div>
	<br/><br/>
	
	<div class="wrapper">
        <h1>Edit Product</h1><br>
		<form  name="update_product" method="post" action="editproduct.php" >
			<table border="0">
				<tr> 
					<td>Type of Product</td>
					<td>
					<select name="ptype">
							<option value="Laptop" <?php if($ptype == 'Laptop') echo "selected";?>>Laptop</option>
							<option value="Desktop" <?php if($ptype == 'Desktop') echo "selected";?>>Desktop</option>
							<option value="Monitor" <?php if($ptype == 'Monitor') echo "selected";?>>Monitor</option>
							<option value="Mouse" <?php if($ptype == 'Mouse') echo "selected";?>>Mouse</option>
							<option value="Speaker" <?php if($ptype == 'Speaker') echo "selected";?>>Speaker</option>
							<option value="Smartphone" <?php if($ptype == 'Smartphone') echo "selected";?>>Smartphone</option>
						</select>
					</td>
				</tr>
				<tr> 
					<td>Brand</td>
					<td><input type="text" name="brand" value="<?php echo $brand;?>"></td>
				</tr>
				<tr> 
				<tr> 
					<td>Product Name</td>
					<td><input type="text" name="pname" value="<?php echo $pname;?>"></td>
				</tr>
					<td>Price</td>
					<td><input type="text" name="price" value=<?php echo $price;?>></td>
				</tr>
				<tr> 
					<td>Product Description</td>
					<td><input type="text" name="pdescription" value="<?php echo $pdescription;?>"></td>
				</tr>
				<tr> 
					<td>Quantity</td>
					<td><input type="text" name="quantity" value=<?php echo $quantity;?>></td>
				</tr>
				<tr> 
					<td>Image Directory</td>
					<td><input type="text" name="img_directory" value="<?php echo $img_directory;?>"></td>
				</tr>			
				<tr>
					<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
					<td><input type="submit" name="update" value="Update"></td>
				</tr>
			</table>
		</form>
	</div>
</body>
</html>

