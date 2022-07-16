<?php
	$conn = new mysqli('localhost', 'root', '', 'PG_mng');
	
	if(!$conn){
		die("Error: Failed to connect to database");
	}
?>	