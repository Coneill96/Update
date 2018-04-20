<?php 
		//Allow the config
		$connect = mysqli_connect("localhost", "root", "", "project");

		

		$query = "SELECT user_id, Username, email, first_name, surname FROM users";

		$result = mysqli_query($connect, $query);

		$json_array = array();

		while($row = mysqli_fetch_assoc($result))
		{
			$json_array[] = $row;
		}

		echo json_encode($json_array);

		






		
	?>