<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<link rel="stylesheet" type="text/css" href="Stylesheet.css">
	<title><?php echo $title; ?></title>
</head>
<body>
	<div id="wrapper">
		<div id="banner">
		<img src="./image/LOGO.jpg" style="	width: 1050px;
		border: 5px solid #dedede; background-repeat: repeat;
		height: 200px;"/>
		</div>

		<?php
			require './home/nav.php';

			?>

		<div id="content_area">
			<?php
				require './home/content.php';
			?>
   
		</div>

		<footer>
			<p></p>
		</footer>
	</div>
</body>
</html>
