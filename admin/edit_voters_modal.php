<div class="modal fade" id="edit_voters<?php  echo $voters_id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
											<h4 class="modal-title" id="myModalLabel">
												<div class="panel panel-primary">
													<div class="panel-heading">
														<center>Edit Voter Details</center>
													</div>
												</div>
											</h4>
										</div>


                                        <div class="modal-body">




											<form action="update_voters.php?voters_id=<?php echo $voters_id; ?>" method = "post" >
											  <input type="hidden" name="voters_id" value="<?php echo $row1['voters_id'] ?>">
											<div class="form-group">
												<label>ID Number</label>
												<input type = "text" class = "form-control" name = "id_number" value="<?php echo $row1 ['id_number']?>"disabled	>
											</div>

											<div class="form-group">

												<label>Password</label>
													<input class="form-control" type ="text" name = "password" id = "pass" required="true" value = "<?php echo $row1 ['password']?>">
											</div>

											<div class="form-group">
												<label>First Name</label>
													<input class="form-control" type ="text" name = "firstname" required="true" value = "<?php echo $row1 ['firstname']?>">
											</div>
											<div class="form-group">
												<label>Last Name</label>
													<input class="form-control"  type = "text" name = "lastname" value = "<?php echo $row1 ['lastname']?>" required="true">
											</div>

											<!-- <div class="form-group">
												<label>Year_Level</label>
													<select class = "form-control" name = "year_level" required="true">
														<option><?php echo $row1 ['year_level']?></option>
														<option></option>
														<option>1st Year</option>
														<option>2nd Year</option>
														<option>3rd Year</option>
														<option>4th Year</option>




													</select>
											</div>
											 -->

											<div class="form-group">
												<label>Account</label>
													<select class = "form-control" name = "account">
														<option><?php echo $row1 ['account']?></option>
														<option>Unactive</option>
														<option>Active</option>

													</select>
											</div>


												 <button name = "done" type="submit" class="btn btn-primary">Save Data</button>
												 <button name = "cancel" type="reset" class="btn btn-success">Cancel All</button>





										 </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

                                        </div>
										</form>

									</div>

								</div>
									</div>
                                    <!-- /.modal-content -->
