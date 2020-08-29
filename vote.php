<?php include ('head.php');?>
<?php include ('sess.php');?>
<body>
  <body>
      <head>
        <link rel="stylesheet" type="text/css" href="css/login_mahel.css">
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <script src='https://kit.fontawesome.com/a076d05399.js'></script>
      <!-- Add icon library -->

          <img src="https://seeklogo.com/images/E/election-commission-of-india-logo-324FF87C0E-seeklogo.com.png" alt="Vote" style="float:left;;width:160px;height:150px">
          <img src="https://www.myindiamyvote.com/wp-content/uploads/2018/08/myindiamyvotelogo.png" alt="Vote" style="float:left;width:160px;height:150px">
          <!-- <img src="https://knowindia.gov.in/assets/images/National-Emblem.png" alt="Vote" style="background: auto;float:right; width:400px;height:300px"> -->
          <style>
            body {
              background-image: url('https://knowindia.gov.in/assets/images/National-Emblem.png');
              background-repeat: repeat;
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
                <center><b><h1><font color="darkblue">Online Voting Sytem - Ballot Window</font></h1></b></center>
                <!-- <marquee bgcolor="lightgreen" behavior="scroll" direction="left">Election portal opens at 5:00 AM and closes at 12:00 AM.Please use your chance within these hours.</marquee> -->
              </div>
            <!-- </header> -->
          <center>
    <div id="wrapper">
        <?php include ('side_bar.php');?>
    </div>
	<form method = "POST" action = "vote_result.php">
	<div class="col-lg-6">

                    <div class="panel panel-primary">
                        <div class="panel-heading"><center>
                            PRESIDENT</center>
                        </div>
                        <div class="panel-body" style = "background-color:;">
						<?php
							$query = $conn->query("SELECT * FROM `candidate` WHERE `position` = 'President'") or die(mysqli_errno());
							while($fetch = $query->fetch_array())
						{
						?>
                           <div id = "position">
							<img src = "admin/<?php echo $fetch['img']?>" style ="border-radius:6px;" height = "150px" width = "150px" class = "img">

							<center><button type="button" class="btn btn-primary btn-xs" style = "border-radius:60px;margin-top:4px;"><?php echo $fetch['firstname']." ".$fetch['lastname']?></button></center>
							<center><input type = "checkbox" value = "<?php echo $fetch['candidate_id'] ?>" name = "pres_id" class = "president"></center>
							</div>

						<?php
							}
						?>

						</div>

                    </div>
     </div>


				<div class="col-lg-6">

                    <div class="panel panel-primary">
                        <div class="panel-heading"><center>
							VICE PRESIDENT</center>
                        </div>
                        <div class="panel-body" style = "background-color:;">
						<?php
							$query = $conn->query("SELECT * FROM `candidate` WHERE `position` = 'Vice President'") or die(mysqli_errno());
							while($fetch = $query->fetch_array()){
						?>
		<div id = "position">
			<img class = "image-rounded" src = "admin/<?php echo $fetch['img']?>"style ="border-radius:6px;" height = "150px" width = "150px">
		<center><button type="button" class="btn btn-primary btn-xs" style = "border-radius:60px;margin-top:4px;"><?php echo $fetch['firstname']." ".$fetch['lastname']?></button></center>
			<center><input type = "checkbox" value = "<?php echo $fetch['candidate_id'] ?>" name = "vpinternal_id" class = "vpinternal"></center>
		</div>
						<?php
							}
						?>

						</div>

                    </div>
                </div>



	<div class="col-lg-6">
	  <div class="panel panel-primary">
            <div class="panel-heading">
			<center>PRIME MINISTER</center>
            </div>
            <div class="panel-body" style = "background-color:;">
				<?php
					$query = $conn->query("SELECT * FROM `candidate` WHERE `position` = 'Prime Minister'") or die(mysqli_errno());
					while($fetch = $query->fetch_array())
					{
				?>
						<div id = "position">
							<img src = "admin/<?php echo $fetch['img']?>" style ="border-radius:6px;" height = "150px" width = "150px" class = "img">
						<center><button type="button" class="btn btn-primary btn-xs" style = "border-radius:60px;margin-top:4px;"><?php echo $fetch['firstname']." ".$fetch['lastname']?></button></center>
							<center><input type = "checkbox" value = "<?php echo $fetch['candidate_id'] ?>" name = "vpexternal_id" class = "vpexternal"></center>
						</div>

				<?php
					}
				?>
			</div>
        </div>
     </div>
	<div class="col-lg-6">
	  <div class="panel panel-primary">
            <div class="panel-heading">
			<center>CHIEF MINISTER</center>
            </div>
            <div class="panel-body" style = "background-color:;">
				<?php
					$query = $conn->query("SELECT * FROM `candidate` WHERE `position` = 'Chief Minister'") or die(mysqli_errno());
					while($fetch = $query->fetch_array())
					{
				?>
						<div id = "position">
							<img src = "admin/<?php echo $fetch['img']?>" style ="border-radius:6px;" height = "150px" width = "150px" class = "img">
							<center><button type="button" class="btn btn-primary btn-xs" style = "border-radius:60px;margin-top:4px;"><?php echo $fetch['firstname']." ".$fetch['lastname']?></button></center>
							<center><input type = "checkbox" value = "<?php echo $fetch['candidate_id'] ?>" name = "secretary_id" class = "secretary"></center>
						</div>

				<?php
					}
				?>
			</div>
        </div>
     </div>


		<center><button class = "btn btn-success ballot" type = "submit" name = "submit">Submit Ballot</button></center>
		</form>
</body>
<?php include ('script.php')?>

  <script type = "text/javascript">
		$(document).ready(function(){
			$(".president").on("change", function(){
				if($(".president:checked").length == 1)
					{
						$(".president").attr("disabled", "disabled");
						$(".president:checked").removeAttr("disabled");
					}
				else
					{
						$(".president").removeAttr("disabled");
					}
			});

			$(".vpinternal").on("change", function(){
				if($(".vpinternal:checked").length == 1)
					{
						$(".vpinternal").attr("disabled", "disabled");
						$(".vpinternal:checked").removeAttr("disabled");
					}
				else
					{
						$(".vpinternal").removeAttr("disabled");
					}
			});

			$(".vpexternal").on("change", function(){
				if($(".vpexternal:checked").length == 1)
					{
						$(".vpexternal").attr("disabled", "disabled");
						$(".vpexternal:checked").removeAttr("disabled");
					}
				else
					{
						$(".vpexternal").removeAttr("disabled");
					}
			});

			$(".secretary").on("change", function(){
				if($(".secretary:checked").length == 1)
					{
						$(".secretary").attr("disabled", "disabled");
						$(".secretary:checked").removeAttr("disabled");
					}
				else
					{
						$(".secretary").removeAttr("disabled");
					}
			});

			$(".auditor").on("change", function(){
				if($(".auditor:checked").length == 1)
					{
						$(".auditor").attr("disabled", "disabled");
						$(".auditor:checked").removeAttr("disabled");
					}
				else
					{
						$(".auditor").removeAttr("disabled");
					}
			});

			$(".treasurer").on("change", function(){
				if($(".treasurer:checked").length == 1)
					{
						$(".treasurer").attr("disabled", "disabled");
						$(".treasurer:checked").removeAttr("disabled");
					}
				else
					{
						$(".treasurer").removeAttr("disabled");
					}

			});
			$(".pio").on("change", function(){
				if($(".pio:checked").length == 1)
					{
						$(".pio").attr("disabled", "disabled");
						$(".pio:checked").removeAttr("disabled");
					}
				else
					{
						$(".pio").removeAttr("disabled");
					}
			});
			$(".busman").on("change", function(){
				if($(".busman:checked").length == 1)
				{
					$(".busman").attr("disabled", "disabled");
					$(".busman:checked").removeAttr("disabled");
				}
			else
				{
					$(".busman").removeAttr("disabled");
				}
			});
			$(".sgtarm").on("change", function(){
				if($(".sgtarm:checked").length == 1)
				{
					$(".sgtarm").attr("disabled", "disabled");
					$(".sgtarm:checked").removeAttr("disabled");
				}
			else
				{
					$(".sgtarm").removeAttr("disabled");
				}
			});
			$(".muse").on("change", function(){
				if($(".muse:checked").length == 1)
				{
					$(".muse").attr("disabled", "disabled");
					$(".muse:checked").removeAttr("disabled");
				}
			else
				{
					$(".muse").removeAttr("disabled");
				}
			});
			$(".escort").on("change", function(){
				if($(".escort:checked").length == 1)
				{
					$(".escort").attr("disabled", "disabled");
					$(".escort:checked").removeAttr("disabled");
				}
			else
				{
					$(".escort").removeAttr("disabled");
				}
			});
		});
	</script>
</html>
