<?php
//Make connection to database
include 'init.php';
//gather id for record to be amended
$id=$_GET['theid'];
//generate query to select record
$query="SELECT * FROM products WHERE id='$id'";
//echo $query;
//exit;
//run query
$results=mysqli_query($connection, $query);
//select row for amending and details to populate form below
$row=mysqli_fetch_assoc($results);

?>

		<form method="post" action="index.php?content=UpdateProduct">
			<fieldset class="fieldset-width">
				<legend>
					Enter Product Details
				</legend>
				<input type="hidden" name="ProductID" value="<?php  echo $row['id']; ?>" />
				<label for="txtProductName">Product Name: </label>
				<input type="text" name="ProductName"  value="<?php  echo $row['name']; ?>"/>
				<br />
				<br />
				<label for="txtProductPrice">Price: </label>
				<input type="text" name="ProductPrice" value="<?php  echo $row['price']; ?>" />
				<br />
				<br />
				<label for="txtProductImage">Image Filename: </label>
				<input type="text" name="ProductImage"  value="<?php  echo $row['image']; ?>"/>

			</fieldset>

			<input type="submit" value="Submit" name='submit' />
			<input type="reset" value="Clear" />
		</form>
