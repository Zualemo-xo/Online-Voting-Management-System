
<?php include ('session.php');?>
<?php include ('head.php');?>
    <div id="wrapper">

        <!-- Navigation -->
        <?php include ('side_bar.php');?>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header">Candidates List</h3>

                </div>

				<button class="btn btn-success" data-toggle="modal" data-target="#myModal">Add Candidate</button>
				<?php include ('add_candidate_modal.php');?>
                <!-- /.col-lg-12 -->


				<hr/>

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="modal-title" id="myModalLabel">
												<div class="panel panel-primary">
													<div class="panel-heading">
														Candidates List
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

                                            <th>Position</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <!-- <th>Year Level</th> -->
                                            <th>Gender</th>
                                            <th>Image</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <tr>
										<?php
											require 'dbcon.php';
											$bool = false;
											$query = $conn->query("SELECT * FROM candidate ORDER BY candidate_id DESC");
												while($row = $query->fetch_array()){
													$candidate_id=$row['candidate_id'];
										?>

											<td><?php echo $row ['position'];?></td>
                                            <td><?php echo $row ['firstname'];?></td>
                                            <td><?php echo $row ['lastname'];?></td>
                                            <!-- <td><?php echo $row ['year_level'];?></td> -->
                                            <td><?php echo $row ['gender'];?></td>
                                            <td width="50"><img src="<?php echo $row['img']; ?>" width="50" height="50" class="img-rounded"></td>

                                            <td style="text-align:center">

												 <a rel="tooltip"  title="Delete" id="<?php echo $candidate_id; ?>" href="#delete_user<?php echo $candidate_id; ?>" data-target="#delete_user<?php echo $candidate_id?>" data-toggle="modal"class="btn btn-danger btn-outline"><i class="fa fa-trash"></i> Delete</a>
											 <?php include ('delete_candidate_modal.php'); ?>
												  <a rel="tooltip"  title="Edit" id="<?php echo $row['candidate_id'] ?>" href="#edit_candidate<?php echo $row['candidate_id'] ?>"  data-toggle="modal"class="btn btn-success btn-outline"><i class="fa fa-pen"></i> Edit</a>

											</td>

											    <?php

													require 'edit_candidate_modal.php';
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
