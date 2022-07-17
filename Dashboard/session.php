<?php
	require '../DatabaseConnection/dbcon.php';
	session_start(); 
	
	//Check whether the session variable SESS_MEMBER_ID is present or not
	if (!isset($_SESSION['email']) || (trim($_SESSION['email']) == '')) { ?>
		<script>
			window.location = "../index.php";
		</script>
<?php 
	}
		$session_id=$_SESSION['email'];
		$user_query = $conn->query("SELECT * FROM user WHERE user_email = '$session_id'") or die ($conn->error);
		$user_row = $user_query->fetch_array();
		$user_username = $user_row['user_name'] ;
?>