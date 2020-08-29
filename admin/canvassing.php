
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




				<hr/>

                    <div class="panel panel-default">
                        <div class="panel-heading">
							<h4 class>Canvassing Report</h4>
                        </div>

					<br/>
                       <form method="post" action="sort.php">

			<select name="position" id="position" class = "form-control pull-left" style = "width:300px;margin-left:19px; ">
				<option readonly>----Sort by Position----</option>
        <option>President</option>
        <option>Vice President</option>
        <option>Prime Minister</option>
        <option>Chief Minister</option>

			</select>

			&nbsp;
			&nbsp;
			<button id ="sort" class = "btn btn-success">Sort</button><button type="button" onclick="window.print();" style = "margin-right:14px;" id ="print" class = "pull-right btn btn-info"><i class = "fa fa-print"></i> Print</button>
</form>
                        <div class="panel-body">


			<table class="table table-striped table-bordered table-hover ">
					<thead>
						<td style = "width:600px;" class = "alert alert-success">Candidate for President</td>
						<td style = "width:200px;"class = "alert alert-success">Image</td>
						<td class = "alert alert-success">Total</td>

					</thead>
					<?php
		require 'dbcon.php';
			$query = $conn->query("SELECT * FROM candidate WHERE position = 'President'");
		while($fetch = $query->fetch_array())
		{
			$id = $fetch['candidate_id'];
			$query1 = $conn->query("SELECT COUNT(*) as total FROM `votes` WHERE candidate_id = '$id'");
			$fetch1 = $query1->fetch_assoc();

	?>
					<tbody>
						<td><?php echo $fetch ['firstname']. " ".$fetch ['lastname'];?></td>
						<td><img src = "<?php echo $fetch ['img'];?>" style = "width:100px; height:100px; border-radius:500px; " >
						<td style = "width:20px; text-align:center"><button class = "btn btn-primary"disabled><?php echo $fetch1 ['total'];?></button>	</td>
					<?php }?>
					</tbody>


			</table>



			<table class="table table-striped table-bordered table-hover ">
					<thead>
						<td style = "width:600px;"class = "alert alert-success">Candidate for Vice President</td>
						<td style = "width:200px;" class = "alert alert-success">Image</td>
						<td class = "alert alert-success">Total</td>

					</thead>
					<?php
			require 'dbcon.php';
			$query = $conn->query("SELECT * FROM candidate WHERE position = 'Vice President'");
		while($fetch = $query->fetch_array())
		{
			$id = $fetch['candidate_id'];
			$query1 = $conn->query("SELECT COUNT(*) as total FROM `votes` WHERE candidate_id = '$id'");
			$fetch1 = $query1->fetch_assoc();

	?>
					<tbody>
						<td><?php echo $fetch ['firstname']. " ".$fetch ['lastname'];?></td>
						<td><img src = "<?php echo $fetch ['img'];?>" style = "width:100px; height:100px; border-radius:500px; " >
						<td style = "width:20px; text-align:center"><button class = "btn btn-primary"disabled><?php echo $fetch1 ['total'];?></button>	</td>
					<?php }?>
					</tbody>


			</table>


			<table class="table table-striped table-bordered table-hover ">
					<thead>
						<td style = "width:600px;"class = "alert alert-success">Candidate for Prime Minister</td>
						<td style = "width:200px;" class = "alert alert-success">Image</td>
						<td class = "alert alert-success">Total</td>

					</thead>
					<?php
		require 'dbcon.php';
		$query = $conn->query("SELECT * FROM candidate WHERE position = 'Prime Minister'");
		while($fetch = $query->fetch_array())
		{
			$id = $fetch['candidate_id'];
			$query1 = $conn->query("SELECT COUNT(*) as total FROM `votes` WHERE candidate_id = '$id'");
			$fetch1 = $query1->fetch_assoc();

	?>
					<tbody>
						<td><?php echo $fetch ['firstname']. " ".$fetch ['lastname'];?></td>
						<td><img src = "<?php echo $fetch ['img'];?>" style = "width:100px; height:100px; border-radius:500px; " >
						<td style = "width:20px; text-align:center"><button class = "btn btn-primary"disabled><?php echo $fetch1 ['total'];?></button>	</td>
					<?php }?>
					</tbody>


			</table>


			<table class="table table-striped table-bordered table-hover ">
					<thead>
						<td style = "width:600px;"class = "alert alert-success">Candidate for Chief Minister</td>
						<td style = "width:200px;" class = "alert alert-success">Image</td>
						<td class = "alert alert-success">Total</td>

					</thead>
					<?php
		require 'dbcon.php';
		$query = $conn->query("SELECT * FROM candidate WHERE position = 'Chief Minister'");
		while($fetch = $query->fetch_array())
		{
			$id = $fetch['candidate_id'];
			$query1 = $conn->query("SELECT COUNT(*) as total FROM `votes` WHERE candidate_id = '$id'");
			$fetch1 = $query1->fetch_assoc();

	?>
					<tbody>
						<td><?php echo $fetch ['firstname']. " ".$fetch ['lastname'];?></td>
						<td><img src = "<?php echo $fetch ['img'];?>" style = "width:100px; height:100px; border-radius:500px; " >
						<td style = "width:20px; text-align:center"><button class = "btn btn-primary"disabled><?php echo $fetch1 ['total'];?></button>	</td>
					<?php }?>
					</tbody>


			</table>











							</div>






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
