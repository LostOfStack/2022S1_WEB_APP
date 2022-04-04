<?php
/**
 * using mysqli_connect for database connection
 */

// $databaseHost = 'localhost';
// $databaseName = 'database';
// $databaseUsername = 'root';
// $databasePassword = '';

// $mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 


session_start();
$con = mysqli_connect("localhost","root","","test");

if(isset ($_POST['save_multiple_checkbox']))
{
    $brands = $_POST['brands'];
    
    foreach($brands as $item)
    {
        echo $item . "<br>";
    }
}
?>

