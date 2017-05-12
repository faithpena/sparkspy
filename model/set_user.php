<?php
	
	function set_user($email, $password, $first_name, $last_name)
	{
		# Connect to database/abnvrdyjhmznmy
		$DBH = new PDO("pgsql:host=ec2-107-20-141-145.compute-1.amazonaws.com;dbname=d61nqaetpcu0lv", "abnvrdyjhmznmy", "74a0fb2b3ca5942d218a913b155f50594e945aa459a12e396197ae4c0a231090");

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