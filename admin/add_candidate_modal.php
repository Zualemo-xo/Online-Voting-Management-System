<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
        <div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="myModalLabel">
					<div class="panel panel-primary">
						<div class="panel-heading">
							<center>Add Candidate</center>
						</div>
					</div>
				</h4>
			</div>


            <div class="modal-body">
				<form method = "post" enctype = "multipart/form-data">
					<div class="form-group">
						<label>Position</label>
						<select class = "form-control" name = "position">
								<option disabled>--POSITION--</option>
								<option>President</option>
								<option>Vice President</option>
								<option>Prime Minister</option>
								<option>Chief Minister</option>
						</select>
					</div>
					<div class="form-group">
						<label>First Name:</label>
							<input class="form-control" type ="text" name = "firstname" placeholder="Please enter firstname" required="true">
					</div>
					<div class="form-group">
						<label>Last Name:</label>
							<input class="form-control"  type = "text" name = "lastname" placeholder="Please enter lastname" required="true">
					</div>



					<div class="form-group">
						<label>Gender</label>
							<select class = "form-control" name = "gender">
								<option disabled>--GENDER--</option>
								<option>Male</option>
								<option>Female</option>
							</select>
					</div>


					<div class="form-group">
                        <label>Image</label>
						<input type="file" name="image"required>
                    </div>
						<button name = "save" type="submit" class="btn btn-primary">Save Data</button>
				</form>
			</div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>




			<?php
				require_once 'dbcon.php';

				if (isset ($_POST ['save'])){
					$candidate_id=$_POST['candidate_id'];
					$position=$_POST['position'];
					$firstname=$_POST['firstname'];
					$lastname=$_POST['lastname'];
					// $year_level=$_POST['year_level'];
					$gender=$_POST['gender'];
					$image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
					$image_name= addslashes($_FILES['image']['name']);
					$image_size= getimagesize($_FILES['image']['tmp_name']);

					move_uploaded_file($_FILES["image"]["tmp_name"],"upload/" . $_FILES["image"]["name"]);
					$location="upload/" . $_FILES["image"]["name"];


					$conn->query("INSERT INTO candidate(candidate_id,position,firstname,lastname,gender,img)values('$candidate_id','$position','$firstname','$lastname','$gender','$location')")or die(mysql_error());
				}
			?>
        </div>

<!-- /.modal-content -->

	</div>

<!-- /.modal-dialog -->

</div>
