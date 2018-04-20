<?php 
		//Allow the config
		$connect = mysqli_connect("localhost", "root", "", "project");

		$input = filter_input_array(INPUT_POST);

		$Username = mysqli_real_escape_string($connect, $input["Username"]);
		$email = mysqli_real_escape_string($connect, $input["email"]);
		$first_name = mysqli_real_escape_string($connect, $input["first_name"]);
		$surname = mysqli_real_escape_string($connect, $input["surname"]);

		if($input["action"] === 'edit')
		{
			$query = "
			UPDATE users
			SET Username = '".$Username."',
			email = '".$email."'
			first_name = '".$first_name."',
			surname = '".$surname."'
			WHERE user_id = '".$input["user_id"]."'
			";

			mysqli_query($connect, $query);
		}
		if($input["action"] === 'delete')
		{
			$query = "
			DELETE FROM users
			WHERE user_id = '".$input["user_id"]."'
			";
			mysqli_query($connect, $query);
		}

		echo json_encode($input);
?>