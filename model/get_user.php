<?php
	
	function get_user($email)
	{
			# Connect to database/orhbdwfjziwauj
			$DBH = new PDO("pgsql:host=ec2-23-21-220-167.compute-1.amazonaws.com;port=5432;dbname=dcnoe38rfbqjpo", "orhbdwfjziwauj", "2d48ab6293544ae8dc28d68149127a00abd335a12a58c47f5c5f4ae4b52e3b53");

			# Put the parameters in an array
			$data = array('email' => $email);

			# Prepare the query
			$STH = $DBH->prepare('SELECT * FROM users WHERE email = :email');
			
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