<!-- 
	Name: 			Richard Kubik
	Assignment #:	Project Phase 2
	Purpose: 		Provide a simple set of functions to enable logging in and out of the database
-->
<?php
	include("connect.php");
	//Test to see if the username is empty, if not, test to see if the entered
	//string is valid. If so, test to see if the user is allowed to login with that password.
	//If not, run an error message. If so, log in the user.
	function login($email, $psw){
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$sql = "SELECT * FROM Users WHERE email = '$email' and pwd = '$psw'";
			$result = mysqli_query($db,$sql);
			$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
			$active = $row['active'];
     
			$count = mysqli_num_rows($result);
	
			if($count == 1){
				//session_register("$uname");
				$_SESSION['login_user'] = $email;
			}
			else{
				logout();
			}	
		}
	}
	//Blows up the session to log out the user.
	function logout(){
		unset($_SESSION);
		session_destroy();
	}
	
?>