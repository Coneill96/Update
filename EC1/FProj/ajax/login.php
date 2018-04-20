<?php 
		//Allow the config
		define('__CONFIG__', true);
		//Require the config
		require_once "../inc/config.php";

		if($_SERVER['REQUEST_METHOD'] == 'POST') {
			//header('Content-Type: application/json');

		$return = [];

		$Username = Filter::String( $_POST['Username'] );
		$password = $_POST['password'];

		$user_found = User::Find($Username, true);
		
		if($user_found) {
			$user_id = (int) $user_found['user_id'];
			$hash = (string) $user_found['password'];
			
			if(password_verify($password, $hash)) {
				// User is signed in
				$return['redirect'] = 'dashboard.php';

				$_SESSION['user_id'] = $user_id;
			} else {
				$return['error'] = "Invalid Username/Password";
			}
			
		} else {
			//They need to create a new account
			$return['error'] = "You do not have an account. <a href='register.php'>Create one now?</a>";
		}
			echo json_encode($return, JSON_PRETTY_PRINT); exit;
		} else {
			//Kill the script
			exit('Invalid URL');
		}
?>