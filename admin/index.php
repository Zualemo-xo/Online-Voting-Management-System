<html>
<body>
    <head>
      <link rel="stylesheet" type="text/css" href="css/login_mahel.css">
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
              <center><b><h1><font color="darkblue"><b>Online Voting Sytem - Admin Panel</b></font></h1></b></center>
              <!-- <marquee bgcolor="lightgreen" behavior="scroll" direction="left">Election portal opens at 5:00 AM and closes at 12:00 AM.Please use your chance within these hours.</marquee> -->
            </div>
          <!-- </header> -->
        <center>
<!---Login template-->


            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-primary">
                    <div class="panel-heading">
                        <center><h3 class="panel-title">Admin Login</h3></center>
                    </div>
                    <div class="panel-body">
                        <form role="form" method = "post" enctype = "multipart/form-data">
                            <fieldset>

                                <div class="form-group">
									<label for = "username" >Username</label>
										<input class="form-control" placeholder="Please Enter your Username" name="username" type="text" autofocus>
                                </div>

                                <div class="form-group">
									<label for = "username" >Password</label>
										<input class="form-control" placeholder="Password" name="password" type="password" value="">
                                </div>



                                <button class="btn btn-lg btn-success btn-block " name = "login">Login</a>


                            </fieldset>

									<?php include ('login_query.php');?>
                        </form>
                    </div>
                </div>
            </div>

  <?php include ('script.php');?>
</html>

<?php include ('head.php');?>
