<div class="modal fade" id="add_user" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
											<h4 class="modal-title" id="myModalLabel">
												<div class="panel panel-primary">
													<div class="panel-heading">
														<center>Add User</center>
													</div>
												</div>
											</h4>
										</div>


                                        <div class="modal-body">
										<form method = "post" enctype = "multipart/form-data">
											<div class="form-group">
												<label>Username:</label>
												<input class ="form-control" type = "text" name = "username" placeholder = "Username" required="true">

											</div>


											<div class="form-group">
												<label>Password:</label>
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



												 <button name = "ok" type="submit" class="btn btn-primary">Save Data</button>

										 </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

                                        </div>

										</form>

							<?php

								require_once 'dbcon.php';
								if (isset($_POST['ok'])){

								$username=$_POST['username'];
								$password=$_POST['password'];
								$firstname=$_POST['firstname'];
								$lastname=$_POST['lastname'];



								$query = $conn->query("SELECT * FROM user WHERE username='$username'") or die (mysql_error());
								$count1 = $query->num_rows;

								if ($count1  > 0){
							?>
										<script>
											alert("User Already Exist");
										</script>
							<?php
								}
								else{
									$conn->query("INSERT INTO user(username,password,firstname,lastname) VALUES('$username','$password','$firstname','$lastname')");
									header('location:user.php');
							?>
									<script>
										alert('User Data Successfully Save');
									</script>
							<?php
									}
								}
							?>
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
