<div class="modal fade" id="add_voters" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
												<label>ID Number</label>
												<input class ="form-control" type = "text" name = "id_number" placeholder = "ID number" required="true">

											</div>


											<div class="form-group">
												<label>Password</label>
													<input class="form-control" type ="text" name = "password" placeholder="Password" required="true">
											</div>
											<div class="form-group">
												<label>First Name:</label>
													<input class="form-control" type ="text" name = "firstname" placeholder="Firstname" required="true">
											</div>
											<div class="form-group">
												<label>Last Name:</label>
													<input class="form-control"  type = "text" name = "lastname" placeholder="Please enter lastname" required="true">
											</div>

											<!-- <div class="form-group">
												<label>Year_Level</label>
													<select class = "form-control" name = "year_level">
														<option></option>
														<option>1st Year</option>
														<option>2nd Year</option>
														<option>3rd Year</option>
														<option>4th Year</option>




													</select>
											</div> -->


											<div class="form-group">
												<label>Status</label>
													<select class = "form-control" name = "gender">
														<option></option>
														<option>Male</option>
														<option>Female</option>


													</select>
											</div>


											 <div class="form-group">
                                            <label>Image</label>
                                           <input type="file" name="image"required>
                                        </div>
												 <button name = "save" type="submit" class="btn btn-primary">Save Data</button>
												 <button name = "save" type="reset" class="btn btn-success">Cancel All</button>





										 </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

                                        </div>

										</form>


										<?php include ('dbcon.php');
										if (isset ($_POST ['save'])){
										$position=$_POST['position'];
										$firstname=$_POST['firstname'];
										$lastname=$_POST['lastname'];
										// $year_level=$_POST['year_level'];
										// $gender=$_POST['gender'];
										// $image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
										// 	$image_name= addslashes($_FILES['image']['name']);
										// 	$image_size= getimagesize($_FILES['image']['tmp_name']);
                    //
										// 	move_uploaded_file($_FILES["image"]["tmp_name"],"upload/" . $_FILES["image"]["name"]);
										// 	$location="upload/" . $_FILES["image"]["name"];


										mysqli_query ($conn,"INSERT INTO voters(position,firstname,lastname,gender,img)values('$position','$firstname','$lastname','$gender','$location')")or die(mysql_error());



										}

										?>
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
