	<?php
			 session_start();
			 
			 if (isset($_SESSION['email'])) {
				echo'welcome '.$_SESSION['email'];
				echo'<a href="index.php?content=logout">logout</a><br />';
				
				require './product/displayItems.php';
			}else{
				include './login/loginform.php';
			}
				?>
			

