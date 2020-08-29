<?php
	include("admin/dbcon.php");
	session_start();
	session_destroy();
		$conn->query("INSERT INTO `votes` VALUES('', '$_SESSION[pres_id]', '$_SESSION[voters_id]')") or die(mysql_error());
		$conn->query("INSERT INTO `votes` VALUES('', '$_SESSION[vpinternal_id]', '$_SESSION[voters_id]')") or die(mysql_error());
		$conn->query("INSERT INTO `votes` VALUES('', '$_SESSION[vpexternal_id]', '$_SESSION[voters_id]')") or die(mysql_error());
		$conn->query("INSERT INTO `votes` VALUES('', '$_SESSION[secretary_id]', '$_SESSION[voters_id]')") or die(mysql_error());
		$conn->query("UPDATE `voters` SET `status` = 'Voted' WHERE `voters_id` = '$_SESSION[voters_id]'") or die(mysql_error());
		header("location:indexx.php");

?>
