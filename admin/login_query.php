<?php
	require_once 'dbcon.php';

	if(isset($_POST['login']))
	{
		$username=$_POST['username'];
		$password=$_POST['password'];


		$query = $conn->query("SELECT * FROM user WHERE username = 	'$username' AND password = '$password'") or die(mysql_error());
		$rows = $query->num_rows;
		$fetch = $query->fetch_array();

			if ($rows == 0)
					{
						echo " <br><center><font color= 'red' size='3'>Please fill up the fields correctly</center></font>";
					}
				else if ($rows > 0)
					{
					session_start();
					$_SESSION['id'] = $fetch['user_id'];
					header("location:candidate.php");

			}

	}
	?>
