<?php
/**
 * using mysqli_connect for database connection
 */


$con = mysqli_connect("localhost","root","","database");

if($con === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

?>

