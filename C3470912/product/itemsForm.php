
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<link rel="stylesheet" type="text/css" href="Stylesheet.css">

</head>
<body>
			<fieldset class="Productform" style="background-color: #E8BB9A;
    border: 2px double #000;border-radius: 15px;padding: 10px;margin: 0 auto;	margin-bottom: 20px;">
				<div style="float: right; width: 680px;height: 250px;margin: 0px 10px 10px 0;padding: 10px;">
				<p><strong>Product Name:</strong><?php  echo '&nbsp;'.escapeOutput($row['name']).'<br/>';?></p>
				<p><strong>Brand:</strong><?php  echo '&nbsp;'.escapeOutput($row['type']).'<br/>';?></p>
				<p><strong>Price:</strong><?php  echo '&nbsp;'.escapeOutput($row['price']).'';?>£</p>
				<p><strong>Country:</strong><?php  echo '&nbsp;'.escapeOutput($row['country']).'<br/>';?></p>
				<p><strong>Alcohol:</strong><?php  echo '&nbsp;'.escapeOutput($row['alcohol']).'';?>%</p>
				<p><strong>Centilitre:</strong><?php  echo '&nbsp;'.escapeOutput($row['centilitre']).'';?>cl</p>
				<p><?php  echo '&nbsp;'.escapeOutput($row['review']).'<br/>' ;?></p>
				</div>
				<div style="float: left; width: 250px; height: 250px;	">
				<?php
				 echo '<img src="'.escapeOutput($row['image']).'"width = "250px" height = "270px"/>';
				?>
				
				</div>
				</fieldset> 
</body>
</html>



















