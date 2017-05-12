<?php
	
	function get_admin()
	{
		# Connect to database/abnvrdyjhmznmy
		$DBH = new PDO("pgsql:host=ec2-107-20-141-145.compute-1.amazonaws.com;dbname=d61nqaetpcu0lv", "abnvrdyjhmznmy", "74a0fb2b3ca5942d218a913b155f50594e945aa459a12e396197ae4c0a231090");

		# Put the parameters in an array
		$data = array();

		# Prepare the query
		$STH = $DBH->prepare('SELECT * FROM users WHERE is_admin = TRUE');
		
		# Execute the query
		$STH->execute($data);

		# Get all rows that match the query
		$user = $STH->fetchAll(PDO::FETCH_OBJ);

		# Disconnect the database
		$DBH = null;

		if ($user == NULL) {
			return NULL;
		}
		else {
			return $user[0];
		}
	}

?>