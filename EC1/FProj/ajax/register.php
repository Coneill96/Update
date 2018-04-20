<?php 
		//Allow the config
		define('__CONFIG__', true);
		//Require the config
		require_once "../inc/config.php";

		if($_SERVER['REQUEST_METHOD'] == 'POST') {
		//	header('Content-Type: application/json');
		$return = [];

		$Username = Filter::String( $_POST['Username'] );

		$user_found = User::Find($Username);

		if($user_found) {
			$return['error'] = "You already have an account";
			$return['is_logged_in'] = false;
		} else {
			$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

			$email = Filter::String( $_POST['email'] );
			$first_name = Filter::String( $_POST['first_name'] );
			$surname = Filter::String( $_POST['surname'] );

			$addUser = $con->prepare("INSERT INTO users(Username, email, first_name, surname, password) VALUES(:Username, :email, :first_name, :surname, :password)"); 
			$addUser->bindParam(':Username', $Username, PDO::PARAM_STR);
			$addUser->bindParam(':email', $email, PDO::PARAM_STR);
			$addUser->bindParam(':first_name', $first_name, PDO::PARAM_STR);
			$addUser->bindParam(':surname', $surname, PDO::PARAM_STR);
			$addUser->bindParam(':password', $password, PDO::PARAM_STR);
			$addUser->execute();
			$user_id = $con->lastInsertID();
			$_SESSION['user_id'] = (int) $user_id;
			$return['redirect'] = 'dashboard.php?message=welcome';
			$return['is_logged_in'] = true;
		}
			echo json_encode($return, JSON_PRETTY_PRINT); exit;
		} else {
			//Kill the script
			exit('Invalid URL');
		}
?>