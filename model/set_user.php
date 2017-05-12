<?php
	
	function set_user($email, $password, $first_name, $last_name)
	{
		# Connect to database/orhbdwfjziwauj
		$DBH = new PDO("pgsql:host=ec2-23-21-220-167.compute-1.amazonaws.com;port=5432;dbname=dcnoe38rfbqjpo", "orhbdwfjziwauj", "2d48ab6293544ae8dc28d68149127a00abd335a12a58c47f5c5f4ae4b52e3b53");

		# Put the parameters in an array
		$data = array('email' => $email, 'password' => $password, 'firstname' => $first_name, 'lastname' => $last_name);

		# Prepare the query
		$STH = $DBH->prepare('INSERT INTO users (email, password, first_name, last_name) VALUES (:email, :password, :firstname, :lastname)');
		
		# Execute the query
		$STH->execute($data);

		# Disconnect the database
		$DBH = null;
	}

?>