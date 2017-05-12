<?php
	
	function set_admin($user_id)
	{
		# Connect to database/orhbdwfjziwauj
		$DBH = new PDO("pgsql:host=ec2-23-21-220-167.compute-1.amazonaws.com;dbname=dcnoe38rfbqjpo", "orhbdwfjziwauj", "2d48ab6293544ae8dc28d68149127a00abd335a12a58c47f5c5f4ae4b52e3b53");

		# Put the parameters in an array
		$data = array('userid' => $user_id);

		# Prepare the query
		$STH = $DBH->prepare('UPDATE users SET is_admin = TRUE WHERE user_id = :userid');
		
		# Execute the query
		$STH->execute($data);

		# Disconnect the database
		$DBH = null;
	}

?>