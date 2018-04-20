<?php

if(!defined('__CONFIG__')) {
	exit('You do not have a config file');
}


class User {

	private $con;

	public $user_id;
	public $Username;
	public $reg_time;
	public $first_name;
	public $surname;
	public $email;
	public $role;

	public function __construct(int $user_id) {
	$this->con = DB::getConnection();

	$user_id = Filter::Int( $user_id );

	$user = $this->con->prepare("SELECT user_id, Username, reg_time, first_name, surname, email, password, role FROM users WHERE user_id = :user_id LIMIT 1");
	$user->bindParam(':user_id', $user_id, PDO::PARAM_INT);
	$user->execute();

	if($user->rowCount() == 1) {
		$user = $user->fetch(PDO::FETCH_OBJ);

		$this->Username 	= (string) $user->Username;
		$this->user_id 		= (int)    $user->user_id;
		$this->reg_time		= (string) $user->reg_time;
		$this->first_name	= (string) $user->first_name;
		$this->surname		= (string) $user->surname;
		$this->email		= (string) $user->email;
		$this->role 		= (string) $user->role;


	} else {

		header("Location: logout.php"); exit;

	}

}

	public static function Find($Username, $return_assoc = false) {

		$con = DB::getConnection();

		$Username = (string) Filter::String( $Username );

		$findUser = $con->prepare("SELECT user_id, password, role FROM users WHERE Username = '$Username' LIMIT 1");
		$findUser->bindParam(':Username', $Username, PDO::PARAM_STR);
		$findUser->bindParam(':role', $role, PDO::PARAM_STR);
		$findUser->execute();

		if($return_assoc) {
			return $findUser->fetch(PDO::FETCH_ASSOC);
		}

		$user_found = (boolean) $findUser->rowCount();

		return $user_found;

	}
}
?>