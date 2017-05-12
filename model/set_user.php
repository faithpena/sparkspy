<?php
	
	function set_user($email, $password, $first_name, $last_name)
	{
		# Connect to database/fdhlvvgglldlnl
		$DBH = new PDO("pgsql:host=ec2-50-17-236-15.compute-1.amazonaws.com;port=5432;dbname=d84e2gttg74us1", "fdhlvvgglldlnl", "987b1a1e8473cb7bcda6402ce5affe218e78f19be3fb91d66e1fad157e4eb5e1");

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