<?php
//connect to database
include 'init.php';
//collect data from form

$productid=$_POST['ProductID'];
$name=$_POST['ProductName'];
$price= $_POST['ProductPrice'];
$image=$_POST['ProductImage'];

//build update query
$sql="UPDATE products SET name='$name',price='$price',image='$image'WHERE id='$productid'";

//run query
mysqli_query($connection, $sql);
//relocate back to main page
header("Location:index.php?content=ManageProducts");
?>