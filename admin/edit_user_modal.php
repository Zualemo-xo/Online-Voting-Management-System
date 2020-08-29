<?php
	if(!$bool){
?>
<div class="modal fade" id="edit_user<?php  echo $user_id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
				<h4 class="modal-title" id="myModalLabel">
					<div class="panel panel-primary">
						<div class="panel-heading">
							<center>Edit Candidate</center>
						</div>
					</div>
				</h4>
			</div>


            <div class="modal-body">
				<form action="update_user.php?user_id=<?php echo $user_id; ?>" method = "post" >
					<input type="hidden" name="user_id" value="<?php echo $row['user_id'] ?>">

					<div class="form-group">
						<label>Username</label>
							<input class="form-control" type ="text" name = "username" required="true" value = "<?php echo $row ['username']?>">
					</div>
					<div class="form-group">
						<label>Password</label>
							<input class="form-control" type ="text" name = "password" required="true" value = "<?php echo $row ['password']?>">
					</div>
					<div class="form-group">
						<label>First Name</label>
							<input class="form-control" type ="text" name = "firstname" required="true" value = "<?php echo $row ['firstname']?>">
					</div>
					<div class="form-group">
						<label>Last Name</label>
							<input class="form-control"  type = "text" name = "lastname" value = "<?php echo $row ['lastname']?>" required="true">
					</div>

					<button name = "change" type="submit" class="btn btn-primary">Save Data</button>
				</form>
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>

		</div>
	</div>
</div>
<?php
	}
?>
<!-- /.modal-content -->
