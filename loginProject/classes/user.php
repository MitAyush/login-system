<?php 
	class User
	{
		private $user;
		private $con;
		function __construct($con,$email)
		{	
			// $this->$con = $con;
			$user_detail = mysqli_query($con,"SELECT * from user where email='$email'");
			$this->user = mysqli_fetch_array($user_detail);
		}
		public function getFirstName()
		{
			return $this->user['first_name'];
		}
		public function getLastName()
		{
			return $this->user['last_name'];
		}
		
	}

 ?>