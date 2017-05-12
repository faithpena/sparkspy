<?php
	
	function set_admin($user_id)
	{
		# Connect to database/abnvrdyjhmznmy
		$DBH = new PDO("pgsql:host=ec2-107-20-141-145.compute-1.amazonaws.com;dbname=d61nqaetpcu0lv", "abnvrdyjhmznmy", "74a0fb2b3ca5942d218a913b155f50594e945aa459a12e396197ae4c0a231090");

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