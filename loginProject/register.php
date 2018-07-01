<?php 
	require 'config.php';
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['emailId'];
	$pass = $_POST['pass'];

	//email
	$email = strip_tags($email); //remove html tags
	$email = str_replace('  ', ' ', $email);
	$email = strtolower($email);
	$checkemail = mysqli_query($con,"SELECT * from user where email='$email'");
	if (mysqli_num_rows($checkemail)) {
		$_SESSION['errors'] = "<b style='color: red;
									    font-size: 20px;
									    text-align: center;
									    border-bottom: 2px solid #e02d2d;'> 
									    Email ID already Exist.
									     </b>";
		header('location:index.php#');
	}
	else{
		//pass hash
		$pass = md5($pass);
		if (mysqli_query($con,"INSERT into user values('','$fname','$lname','$email','$pass')")) {
			$_SESSION['email'] = $email;
			header('location:welcome.php');
		}
		else
			echo "Fail To Insert";
	}

?>