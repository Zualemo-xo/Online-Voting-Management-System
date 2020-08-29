<?php 
	require_once 'dbcon.php';
	$conn->query("UPDATE voters SET account = 'Active'")or die(mysql_error());
	echo "<script> window.location='voters.php' </script>";
?>
