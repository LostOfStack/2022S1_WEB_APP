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
	$result = mysqli_query($mysqli, "UPDATE product SET ptype='$ptype',brand='$brand',pname='$pname',price='$price', pdescription='$pdescription', quantity='$quantity', img_directory='img_directory' WHERE id=$id");
	
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
</head>

<body>
	<a href="updateproduct.php">< Back</a>
	<br/><br/>
	
	<form  name="update_product" method="post" action="editproduct.php" >
		<table border="0">
            <tr> 
				<td>Type of Product</td>
				<td>
				<select name="type">
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
				<td><input type="text" name="brand" value=<?php echo $brand;?>></td>
			</tr>
			<tr> 
            <tr> 
                <td>Product Name</td>
                <td><input type="text" name="pname" value=<?php echo $pname;?>></td>
            </tr>
				<td>Price</td>
				<td><input type="text" name="price" value=<?php echo $price;?>></td>
			</tr>
            <tr> 
				<td>Product Description</td>
				<td><input type="text" name="pdescription" value=<?php echo $pdescription;?>></td>
			</tr>
            <tr> 
				<td>Quantity</td>
				<td><input type="text" name="quantity" value=<?php echo $quantity;?>></td>
			</tr>
            <tr> 
				<td>Image Directory</td>
				<td><input type="text" name="img_directory" value=<?php echo $img_directory;?>></td>
			</tr>			
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>

