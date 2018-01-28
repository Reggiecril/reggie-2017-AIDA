<?php
include 'init.php';
//Check to see form has been submitted		
if(isset($_POST['subProduct'])){
	

	//gather data from form
	$name=$_POST['txtName'];
	$type=$_POST['txtBrand'];
	$price=$_POST['txtPrice'];
	$country=$_POST['txtCountry'];
	$alcohol=$_POST['txtAlcohol'];
	$centilitre=$_POST['txtCentilitre'];
	$review=$_POST['txtReview'];
	$image = $_POST['Image'];
	//prepare query
	$query= "INSERT INTO products
	(name,type,price,country,alcohol,centilitre,image,review)
	VALUES
	('$name', '$type', '$price', '$country' , '$alcohol', '$centilitre' , '$image', '$review' )";
	
	//run query to INSERT new record
	mysqli_query($connection, $query);
	//relocate back to front page
	header("location:index.php?content=ManageProducts");

}

?>