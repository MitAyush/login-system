<?php 
	// if (!$_SESSION['email']) {
	// 	header('location:index.php');
	// }
	include 'config.php';
	include 'classes/user.php';
	$email = $_SESSION['email'];
	$myuser = new User($con,$email);
	
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Hello <?php echo $myuser->getFirstName(); ?></title>
 	<link href="https://fonts.googleapis.com/css?family=Shrikhand" rel="stylesheet">
 	<link rel="stylesheet" href="css/welcome.css">
 </head>
 <body>
 	<div class="userDetail">
 		<h2>Welcome <?php echo $myuser->getFirstName()." ".$myuser->getLastName(); ?></h2>
 	</div>
 	<div class="menu">
 		<a href="logout"><button>Logout</button></a>
 	</div>
 </body>
 </html>