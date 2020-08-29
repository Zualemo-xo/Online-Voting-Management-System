
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
                    <h3 class="page-header">Voted Citizens</h3>

                </div>

				<?php
					$count = $conn->query("SELECT COUNT(*) as total FROM `voters`")->fetch_array();
					$count1 =  $conn->query("SELECT COUNT(*) as total FROM `voters` WHERE `status` = 'Voted'")->fetch_array();
					$count2 = $conn->query("SELECT COUNT(*) as total FROM `voters` WHERE `status` = 'Not voted'")->fetch_array();
				?>
				<a href="voters.php" class = "btn btn-primary btn-outline">All Voters:<?php echo $count['total']?></a>
				<a href="voted.php" class = "btn btn-success btn-outline"> Voted:<?php echo $count1['total']?></a>
				<a href="unvoted.php" class = "btn btn-danger btn-outline">Not voted:<?php echo $count2['total']?> </a>

				<br/>
                <!-- /.col-lg-12 -->


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

                                            <th>Name</th>
                                            <th>UVID Number</th>
                                            <th>Password</th>
                                            <!-- <th>Year_Level</th> -->
                                            <th>Voted/Not Voted</th>


                                        </tr>
                                    </thead>
                                    <tbody>


										<?php
										require 'dbcon.php';
										$query = $conn->query("SELECT * FROM voters where status = 'Voted'");
										while($row = $query->fetch_array()){
											$voters_id=$row ['voters_id'];
										?>
										 <tr class="odd gradeX">
											<td><?php echo $row ['firstname']." ".$row['lastname'];?></td>
                                            <td><?php echo $row ['id_number'];?></td>
                                            <td><?php echo $row ['password'];?></td>
                                            <!-- <td><?php echo $row ['year_level'];?></td> -->
                                            <td><?php echo $row ['status'];?></td>
                                        </tr>
                                       <?php
											}
									   ?>
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
    <?php include ('edit_voters_modal.php');?>

</body>

</html>
