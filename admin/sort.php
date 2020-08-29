
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
                    
					
                </div>
				
				
				<?php include ('add_candidate_modal.php');?>
                <!-- /.col-lg-12 -->
				
				
				<hr/>
				
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="modal-title" id="myModalLabel">         
												<div class="panel panel-primary">
							<?php
									require 'dbcon.php';
									
									$position = $_POST['position'];
									$sort = $position;
									$query = $conn->query("SELECT * FROM candidate WHERE position = '$sort'");
									$fetch = $query->fetch_array();
									{
										
										
								?>
					<div class="panel-heading">
							<center><?php echo $fetch ['position'];?>
								<?php }?>
								
					</div>  </center>  
									
												</div>
											</h4>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
						<a href = "canvassing.php" id="back" class = "btn btn-warning" ><i class = "fa fa-refresh"> </i> Back</a>
						<button onclick="window.print();" style = "margin-right:14px; margin-bottom:12px;" id ="print" class = "pull-right btn btn-info"><i class = "fa fa-print"></i> Print</button>	
                            <div class="table-responsive">
                              <table class="table table-striped table-bordered table-hover ">
					<thead>
						<td style = "width:600px;" class = "alert alert-success">Candidate </td>
						<td style = "width:200px;"class = "alert alert-success">Image</td>
						<td class = "alert alert-success">Total</td>
					
					</thead>
					<?php
		require 'dbcon.php';
		
		$position = $_POST['position'];
		$sort = $position;
		$query = $conn->query("SELECT * FROM candidate WHERE position = '$sort'");
		while($fetch = $query->fetch_array())
		{
			$id = $fetch['candidate_id'];
			$query1 = $conn->query("SELECT COUNT(*) as total FROM `votes` WHERE candidate_id = '$id'");
			$fetch1 = $query1->fetch_assoc();
			
	?>
					<tbody> 
						<td><?php echo $fetch ['firstname']. " ".$fetch ['lastname'];?></td>
						<td><img src = "<?php echo $fetch ['img'];?>" style = "width:40px; height:40px; border-radius:500px; " >
						<td style = "width:20px; text-align:center"><button class = "btn btn-primary"disabled><?php echo $fetch1 ['total'];?></button>	</td>
					<?php }?>
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

