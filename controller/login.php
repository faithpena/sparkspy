<?php

	session_start();

	include "../model/get_user.php";
	include "../model/get_admin_user.php";

	$email = $_POST['email'];
	$password = $_POST['password'];

	$user = get_user($email);

	# If current user is not null and the password matches
	# Successful Login
	if(isset($user) && password_verify($password, $user->password)) {
		$_SESSION['user_id'] = $user->user_id;
		$_SESSION['email'] = $user->email;
		
		if($user->is_admin == true) {
			$_SESSION['admin'] = 1;
		}
		header("Location: ../home.php");
	}
	else {
		$_SESSION['Unsuccessful login'] = 1;
		header("Location: ../index.php");
	}

	

?>