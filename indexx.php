<html>
<body>
  <body>
      <head>
        <link rel="stylesheet" type="text/css" href="css/login_mahel.css">
        <link rel="icon" href="https://eci.gov.in/img/logo-eci.png" type="image/x-icon">

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
              background-blend-mode:luminosity;
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
                <center><b><h1><font color="darkblue"><b>Online Voting System - Voter Login</b></font></h1></b></center>
                <!-- <marquee bgcolor="lightgreen" behavior="scroll" direction="left">Election portal opens at 5:00 AM and closes at 12:00 AM.Please use your chance within these hours.</marquee> -->
              </div>
            <!-- </header> -->
          <center>

            <div class="col-md-4 col-md-offset-4">

                <div class="login-panel panel panel-primary">

                    <div class="panel-heading">
                        <center><h3 class="panel-title"> Log In</h3></center>
                    </div>
                    <div class="panel-body">
                        <form role="form" method = "post" enctype = "multipart/form-data">
                            <fieldset>

                                <div class="form-group" align="left">
									<label for = "username" >UVID Number</label>
										<input class="form-control" placeholder="Please Enter Voter's UVID Number" name="idno" type="text" required = "required" autofocus>
                                </div>

                                <div class="form-group" align="left">
									<label for = "username" >Password</label>
										<input class="form-control" placeholder="Password" name="password" type="password" required = "required">
                                </div>


                                <button class="btn btn-lg btn-success btn-block " name = "login">Login</a>


                            </fieldset>

									<?php include ('login_query.php');?>
                        </form>
                        <h4><b>Note:</b> <i><font color="red" size=3>A voter can only vote/login once. Please type in your UVID number and password for login, else you will not be able to login</i></font> </h4>
                    </div>
                </div>
            </div>
        </div>
    </div>

  <?php include ('script.php');?>

</body>

</html>



<?php include ('head.php');?>
