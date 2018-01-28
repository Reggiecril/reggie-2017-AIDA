 
<?php
//start session so session vars are avaialble on this page
//connection to database
session_start();
require_once 'init.php';
//if data has been submitted to this page collect it
if (isset($_POST['submit'])){
	$email=$_POST['email'];
	$password=$_POST['password'];
	//build and run query to see if user details entered match any in user table
	$query="SELECT * FROM users WHERE email='$email' AND password='$password'";
	$result=mysqli_query($connection, $query);
	
	//is there a matching record?

	if ($row = mysqli_fetch_assoc($result)) {
		//matching record found save user and message and userID to sending page
		$_SESSION['email']=$row['email'];
		$_SESSION['type']=$row['type'];
		header('Location: ' . $_SERVER['HTTP_REFERER']);
	} else {
			if($_SESSION['email']!=$email){
				$_SESSION['emailmessage']='email used is not registered';
			}
		//no matching record return fail message to sending page
		$_SESSION['message']='invalid user or wrong password';
		header('Location: ' . $_SERVER['HTTP_REFERER']);
	}
}else{
	header('location:./index.php?content=login');
}
?>

