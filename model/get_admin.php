<?php
	
	function get_admin()
	{
		# Connect to database/fdhlvvgglldlnl
		$DBH = new PDO("pgsql:host=ec2-50-17-236-15.compute-1.amazonaws.com;port=5432;dbname=d84e2gttg74us1", "fdhlvvgglldlnl", "987b1a1e8473cb7bcda6402ce5affe218e78f19be3fb91d66e1fad157e4eb5e1");

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