<?php 
	ob_start();
	session_start();
	$con = mysqli_connect("localhost","root","","loginProject");
	if(!$con){
		die("Database is not connected");
	}

 ?>