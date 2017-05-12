<?php

	require "../model/set_user.php";
	require "../model/get_user.php";
	require "../model/get_admin.php";
	require "../model/set_admin.php";

	session_start();

	$email = $_POST['email'];
	$password = $_POST['password'];
	$confirm_password = $_POST['confirm_password'];
	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];


	# Check if password and confirm_password are the same
	if ($password != $confirm_password) {
		$_SESSION['Password and confirm_password do not match'] = 1;
	}
	else {
		# Check if an account exists with the inputted email address
		if (!get_user($email)) {
			$password = password_hash($password, PASSWORD_DEFAULT);
			set_user($email, $password, $first_name, $last_name);
			$_SESSION['Successful signup'] = 1;

			if (!get_admin()) {
				set_admin(get_user($email)->user_id);
			}
		}
		else {
			$_SESSION['Account with the email already exists'] = 1;
		}
	}

	if (isset($_SESSION['user'])) {
		header ("Location: ../admin_account.php");
	}
	else {
		# Redirect to homepage
		header ("Location: ../index.php");
	}
	

?>