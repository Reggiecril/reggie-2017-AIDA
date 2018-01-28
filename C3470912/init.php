<?php 
session_start();
//Set up the database access credentials
$hostname = 'localhost'; 
$username = 'root'; 
$password = 'Cloud19961008'; 
$databaseName = 'c3470912'; 
//Open the database connection - exit with error message otherwise 
$connection = mysqli_connect($hostname, $username, $password, $databaseName) or exit("Unable to connect to database!");
?>
