<?php
include ('dbcon.php');
if (isset ($_POST ['done'])){
$voters_id = $_GET['voters_id'];
$id_number=$_POST['id_number'];
$password=$_POST['password'];
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
// $year_level=$_POST['year_level'];
$account=$_POST['account'];
mysqli_query($conn,"UPDATE voters SET id_number = '$id_number', password = '$password', firstname = '$firstname', lastname = '$lastname',
account = '$account' WHERE voters_id = '$voters_id'")or die(mysqli_errno());
}
header("location: voters.php");
?>
