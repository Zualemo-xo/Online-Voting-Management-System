<?php
	require_once 'dbcon.php';
	function passFunc($len, $set = "")
		{
			$gen = "";
			for($i = 0; $i < $len; $i++)
				{
					$set = str_shuffle($set);
					$gen.= $set[0]; 
				}
			return $gen;
		}
		
	$query = $conn->query("SELECT * FROM voters ORDER BY voters_id DESC");
	while($row1 = $query->fetch_array()){
		$voters_id = $row1['voters_id'];		
		$change =  passFunc(8, 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890');	
		$conn->query("UPDATE `voters` SET `password` = '$change' WHERE voters_id = '$voters_id'") or die(mysql_error());
	}
	header("location:voters.php");
?>