<?php session_start(); 
	if (isset($_SESSION['email'])) {
		header('location:welcome.php');
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<link rel="stylesheet" href="css/demo.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	
</head>
<body>
	<div class="container">
		<?php if(isset($_SESSION['errors'])){
			echo $_SESSION['errors'];
			unset($_SESSION['errors']);
		} ?>
		<h1 id="header">Our Project</h1>
		<div id="login">
			<h2>Login</h2> <br>
			<form action="userlogin.php" method="post" autocomplete="off" name="student" onsubmit="return finalLoginCheck()">
				<div class="col-3 input-effect">
		        	<input class="effect-16" type="email" placeholder="Email" name="userEmail" required/>    
		            <span class="focus-border"></span>
		        </div>
		        <div class="col-3 input-effect">
		        	<input class="effect-17" type="password" placeholder="password" name="userPass" onkeyup="checkpass(this.id)" id="password" required/> 
		            <span class="focus-border"></span> <div id="loginPass" class="alertbox"></div>
		        </div>
				
				<input type="submit" value="Login">
			</form>
			<a href="#" id="ancor1">Register Here</a>
		</div>
		<div id="register">
			<h2>Register</h2> <br>
			<form action="register.php" method="post" onsubmit="return finalRegCheck()">
				<div class="col-3 input-effect">
		        	<input class="effect-21" type="text" onkeypress="return (event.charCode>=65 && event.charCode<=90) || (event.charCode>=97 && event.charCode<=122)" placeholder="First Name" onkeyup="upperletter(this.id),checkFirstName(this.id)"  id="myname" name="fname" required/ >
		            <span class="focus-border"></span> <div id="regFirstName" class="alertbox">.</div>
		        </div>
		        <div class="col-3 input-effect">
		        	<input class="effect-21" type="text" onkeypress="return (event.charCode>=65 && event.charCode<=90) || (event.charCode>=97 && event.charCode<=122)" placeholder="Last Name"  onkeyup="upperletter(this.id),checkLastName(this.id)"  id="lastname" name="lname" required/>
		            <span class="focus-border"></span> <div id="regLastName" class="alertbox">.</div>
		        </div>
		        <div id="loginPass"></div>
		        <div class="col-3 input-effect">
		        	<input class="effect-19" type="email" placeholder="Email" name="emailId" required />
		            <span class="focus-border"></span>
		        </div>
		        <div class="col-3 input-effect">
		        	<input class="effect-20" type="password" placeholder="Password" id="regPass" onkeyup="checkRegpass(this.id)" required/>
		            <span class="focus-border"></span> <div id="RegPassAlert" class="alertbox">.</div>
		        </div>
		        <div id="loginPass"></div>
		        <div class="col-3 input-effect">
		        	<input class="effect-21" type="password" placeholder="Repeat Password" id="repeatPass" name="pass" onkeyup="matchPass(this.id)" required/>
		            <span class="focus-border"></span> <div id="repeatPassCheck" class="alertbox">.</div>
		        </div>
		        <div id="loginPass"></div>
		        <input type="submit" value="Register">
			</form>
			<a href="#" id="ancor2">Already Register</a>
		</div>
		<br><br>
	</div>
	<script src="js/demo.js"></script>
</body>
</html>