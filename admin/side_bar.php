<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom:0; background-color:orange;">
  <head>
    <!-- <link rel="stylesheet" type="text/css" href="css/login_mahel.css"> -->
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <script src='https://kit.fontawesome.com/a076d05399.js'></script>
  <!-- Add icon library -->

      <img src="https://seeklogo.com/images/E/election-commission-of-india-logo-324FF87C0E-seeklogo.com.png" alt="Vote" style="float:left;;width:160px;height:130px">
      <img src="https://www.myindiamyvote.com/wp-content/uploads/2018/08/myindiamyvotelogo.png" alt="Vote" style="float:left;width:160px;height:130px">
      <!-- <img src="https://knowindia.gov.in/assets/images/National-Emblem.png" alt="Vote" style="background: auto;float:right; width:400px;height:300px"> -->
      <style>
        body {
          background-image: url('https://knowindia.gov.in/assets/images/National-Emblem.png');
          background-repeat: repeat;
          background-blend-mode: luminosity;
          background-position:bottom;
          background-attachment:inherit;
          background-size:auto;
              }
      </style>
    </body>
   <!-- actual size:300px 200 px 100px 200 px -->
      </head>
    <!-- </body> -->
        <!-- <header> -->
          <div class="panel">
            <h1 align="center"><b>Welcome Responsible Citizen of India</b></h1>
            <center><b><h1><font color="darkblue">Online Voting Sytem - Admin Panel</font></h1></b></center>
            <!-- <marquee bgcolor="lightgreen" behavior="scroll" direction="left">Election portal opens at 5:00 AM and closes at 12:00 AM.Please use your chance within these hours.</marquee> -->
          </div>
        <!-- </header> -->
      <center>
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="" style = "color:black;"><i class="fas fa-poll-h"></i><b> Online Voting System</b></a>

            </div>


            <ul class="nav navbar-top-links navbar-right">

               <?php require 'dbcon.php';
				$query = $conn->query("SELECT * from user where user_id ='$session_id'")or die (mysql_error ());

				while ($row = $query->fetch_array()){


			 ?>

                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" style = "color: black">
					<i class="fa fa-cog fa-spin fa-fw"></i>Welcome: <?php echo $user_username = $user_row['firstname']." ".$user_row['lastname'];?>

                    </a>


                </li>

            </ul>
			<?php }?>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">

                        <li>
                            <a href="candidate.php"><i class="fa fa-menu fa-fw"></i>Menu </a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-users fa-fw"></i> Candidate List<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="candidate.php"><i class = "fa fa-user fa-fw"></i> View Candidates</a>
                                </li>

                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
						<li>
                            <a href="#"><i class="fa fa-users"></i> Voters List<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="voters.php"><i class = "fa fa-user fa-fw"></i> View Voters</a>
                                </li>
                                <!-- <li>
                                    <a href="../register/index.php"><i class = "fa fa-user fa-fw"></i> Add Voters</a>
                                </li> -->
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>

                        <li>
                            <a href="canvassing.php"><i class="fas fa-chart-bar"></i> Vote Statistics</a>
                        </li>



                        <li>
                            <a href="#"><i class="fa fa-user fa-fw"></i> Administrators<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="user.php"> <i class = "fa fa-users" ></i> View Admins</a>
                                </li>
                                <li>
                                    <a href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>

                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
