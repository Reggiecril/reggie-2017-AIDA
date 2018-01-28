<?php
session_start();
//Check to see if someone is logged in, display login form or welcome message

if (isset($_SESSION['email'])) {
   
	if ($_SESSION['type']=='admin'){
		include './admin/ManageProducts.php';
	}else{
		include'./login/persondetail.php';
	}

 }else {
	include './login/loginform.php';
}


    	?>