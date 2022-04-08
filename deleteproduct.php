<?php
// include database connection file
include_once("config.php");

// Get id from URL to delete that announcement
$id = $_GET['id'];

// Delete announcement row from table based on given id
$result = mysqli_query($con, "DELETE FROM product WHERE id=$id");

// After delete redirect to Home, so that latest announcement list will be displayed.
header("Location:updateproduct.php");
?>

