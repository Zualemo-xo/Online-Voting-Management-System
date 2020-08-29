<nav class="navbar navbar-default navbar-static-top navbar-primary navbar-fixed" role="navigation" style="margin-bottom:6px;background-color:orange;color:white;">

            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <b><a class="navbar-brand" href="" style = "color:black; ">Online Voting System</a></b>

            </div>


            <ul class="nav navbar-top-links navbar-right">

				<?php
					require 'admin/dbcon.php';
					$query = $conn->query("SELECT * from voters where voters_id ='$_SESSION[voters_id]'")or die (mysqli_errno ());
					$row = $query->fetch_array();
				?>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" style = "color:black;font-size:14pt;"><b><i class="fa fa-arrow fa-fw"></i>Welcome: <?php echo $row['firstname']." ".$row['lastname'];?></b>
					</a>
                </li>
            </ul>
