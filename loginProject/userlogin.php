<?php 
	include 'config.php';
	$email = $_POST['userEmail'];
	$pass = $_POST['userPass'];

	//email purify
	$email = strip_tags($email);  // remove HTML tags
	$email = str_replace('  ', ' ', $email);
	//password
	$pass = md5($pass);
	$confirm_query = mysqli_query($con,"SELECT * from user where email='$email' and password='$pass'");
	if (mysqli_num_rows($confirm_query)) {
		$_SESSION['email'] = $email;
		header('location:welcome.php');
	}
	else{
		$_SESSION['errors'] = "<b style='color: red;
									    font-size: 20px;
									    text-align: center;
									    border-bottom: 2px solid #e02d2d;'> 
									    Username/Password is wrong
									     </b>";
		header('location:index.php');
	}

 ?>