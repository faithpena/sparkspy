<?php
	
	function set_admin($user_id)
	{
		# Connect to database/fdhlvvgglldlnl
		$DBH = new PDO("pgsql:host=ec2-50-17-236-15.compute-1.amazonaws.com;port=5432;dbname=d84e2gttg74us1", "fdhlvvgglldlnl", "987b1a1e8473cb7bcda6402ce5affe218e78f19be3fb91d66e1fad157e4eb5e1");

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