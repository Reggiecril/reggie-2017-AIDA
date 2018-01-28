
<?php
//include connection
include 'init.php';
//get id
$id=$_GET['theid'];
//build query
$query = "DELETE FROM products WHERE id = '$id' ";

//run query and return to main page
mysqli_query($connection, $query);
header("Location: {$_SERVER['HTTP_REFERER']}");
?>