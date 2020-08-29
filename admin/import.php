<?php
if (isset($_POST['submit'])) {
	require_once 'dbcon.php';
	
	if (is_uploaded_file($_FILES['filename']['tmp_name'])) {
		echo "<h1>" . "File ". $_FILES['filename']['name'] ." Uploaded successfully." . "</h1>";
		echo "<h2>Displaying contents:</h2>";
		readfile($_FILES['filename']['tmp_name']);
	}

	//Import uploaded file to Database
	$handle = fopen($_FILES['filename']['tmp_name'], "r");

	while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
		$conn->query("INSERT into voters (id_number,firstname,lastname,year_level,status) values('$data[0]','$data[1]','$data[2]','$data[3]','Unvoted')");
		
		}

	fclose($handle);

	echo "<script type='text/javascript'>alert('Successfully imported a CSV file!');</script>";
	echo "<script>document.location='voters.php'</script>";
}

?>