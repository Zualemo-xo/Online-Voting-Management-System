<?php include ('session.php');?>
<?php include ('head.php');?>

<body>
    <div id="wrapper">

        <!-- Navigation -->
        <?php include ('side_bar.php');?>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header">Voters List</h3>

                </div>
				<?php
					$count = $conn->query("SELECT COUNT(*) as total FROM `voters`")->fetch_array();
					$count1 =  $conn->query("SELECT COUNT(*) as total FROM `voters` WHERE `status` = 'Voted'")->fetch_array();
					$count2 = $conn->query("SELECT COUNT(*) as total FROM `voters` WHERE `status` = 'Not voted'")->fetch_array();
					?>
				<a href="voters.php" class = "btn btn-primary btn-outline"><i class="fas fa-users"></i> All Voters:<?php echo $count['total']?></a>
				<a href="voted.php" class = "btn btn-success btn-outline"><i class="fas fa-user-check"></i> Voted:<?php echo $count1['total']?></a>
				<a href="unvoted.php" class = "btn btn-danger btn-outline"><i class="fas fa-user-times"></i> Not Voted:<?php echo $count2['total']?> </a> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
        <a  href = "generate_password.php"class = "btn btn-primary btn-outline pull-right" style = "margin-right:12px;" name = "go"><i class="fas fa-user-lock"></i> Generate Voters Password</a>

        <a  href = "update_status_Unactive.php"class = "btn btn-danger btn-outline pull-right" style = "margin-right:12px;" name = "stop"><i class="fas fa-times-circle"></i> Deactivate All Voters Account</a>
				<a  href = "update_status_active.php"class = "btn btn-success btn-outline pull-right" style = "margin-right:12px;" name = "go"><i class="fas fa-check-circle"></i> Activate All Voters Account</a>


				<br />
				<br />
				<a href="download.php" class="btn btn-success btn-outline"><i class="glyphicon glyphicon-save"></i> Import Data (.csv file)</a>
                <a href="../register/index.php" class = "btn btn-primary btn-outline"><i class="fas fa-user-plus"></i> Add Voters</a>


				<hr/>

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="modal-title" id="myModalLabel">
												<div class="panel panel-primary">
													<div class="panel-heading"><i class = "fa fa-users"></i>
														Voters List
													</div>
												</div>
											</h4>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>

                                            <th>UVID Number</th>
                                            <th>Password</th>
                                            <th>Name</th>
                                            <!-- <th>Year Level</th> -->
                                            <th>Voted/Not Voted</th>
                                            <th>Account</th>
                                            <th>Action</th>

                                        </tr>
                                    </thead>
                                    <tbody>
										<?php
											require 'dbcon.php';

											$query = $conn->query("SELECT * FROM voters ORDER BY voters_id DESC");
											while($row1 = $query->fetch_array()){
											$voters_id=$row1['voters_id'];
										?>

											<tr>
												<td><?php echo $row1 ['id_number'];?></td>
												<td><?php echo $row1 ['password'];?></td>
												<td><?php echo $row1 ['firstname']." ". $row1 ['lastname'];?></td>
												<!-- <td><?php echo $row1 ['year_level'];?></td> -->
												<td><?php echo $row1 ['status'];?></td>
												<td><?php echo $row1 ['account'];?></td>
                        <td style="text-align:center">

     <a rel="tooltip"  title="Delete" id="<?php echo $row1['voters_id']; ?>" href="#delete_voters<?php echo $row1['voters_id']; ?>" data-target="#delete_voters<?php echo $row1['voters_id']?>" data-toggle="modal"class="btn btn-danger btn-outline"><i class="fa fa-trash"></i> Delete</a>
   <?php include ('delete_voters_modal.php');  ?>
      <a rel="tooltip"  title="Edit" id="<?php echo $row1['voters_id'] ?>" href="#edit_voters<?php echo $row1['voters_id'] ?>"  data-toggle="modal"class="btn btn-success btn-outline"><i class="fa fa-pen"></i> Edit</a>

  </td>

      <?php

      require 'edit_voters_modal.php';
    ?>
											</tr>

                                       <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->

                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->

            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->



    </div>
    <!-- /#wrapper -->

    <?php include ('script.php');?>

</body>

</html>
