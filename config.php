<?php
/**
 * using mysqli_connect for database connection
 */

// $databaseHost = 'localhost';
// $databaseName = 'database';
// $databaseUsername = 'root';
// $databasePassword = '';

// $mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 


// session_start();
$con = mysqli_connect("localhost","root","","database");

if($con === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

?>

