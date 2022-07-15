<?php
	$conn = new mysqli('localhost', 'root', '', 'PG_mngt');
	
	if(!$conn){
		die("Error: Failed to connect to database");
	}
?>	