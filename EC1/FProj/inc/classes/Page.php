<?php

if(!defined('__CONFIG__')) {
	exit('You do not have a config file');
}

class Page {

	static function ForceLogin() {
		if(isset($_SESSION['user_id'])) {
		} else {
			// The iser is not allowed here.
			header("Location: login.php"); exit;
		}
	}
	static function ForceDashboard() {
		if(isset($_SESSION['user_id'])) {
			// The User is not allowed here.
			header("Location: dashboard.php"); exit;
		} else {
			//User not allowed here.

		}
	
	}

}
?>