<html>
  <body>

  <?php
  require "REGISTRATION_PAGE.html";

// print("<br>");
//
// print("$name"."<br>");
// print("$email"."<br>");
// print("$institute_id"."<br>");
// print("$contact"."<br>");
// print("$subject"."<br>");
// print("$body"."<br>");
//
// echo gettype($name)."\n";
// echo gettype($email)."\n";
// echo gettype($institute_id)."\n";
// echo gettype($contact)."\n";
// echo gettype($subject)."\n";
// echo gettype($body)."\n";




define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'Administrator');
define('DB_PASSWORD', '#Kalizen0123');
define('DB_NAME', 'users');

/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Check connection
if($link === false)
{
    die("ERROR: Could not connect. " . mysqli_connect_error());
}








// if(isset($_POST['but_upload']))
// {

//
$first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];
$aadhar_no=$_POST['aadhar_no'];
$username=$_POST['username'];
$password=$_POST['password'];
$confirm_password=$_POST['confirm_password'];
// $name = $_FILES['file']['name'];
  // $target_dir = "upload/";
  // $target_file = $target_dir . basename($_FILES["file"]["name"]);
  //
  // // Select file type
  // $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
  //
  // // Valid file extensions
  // $extensions_arr = array("jpg","jpeg","png","gif");
  //
  // // Check extension
  // if( in_array($imageFileType,$extensions_arr) ){
  //
  //   // Convert to base64
  //   $image_base64 = base64_encode(file_get_contents($_FILES['file']['tmp_name']) );
  //   $image = 'data:image/'.$imageFileType.';base64,'.$image_base64;
    // Insert record
    $sql = "INSERT INTO users_details(first_name,last_name,aadhar_no,username,password,confirm_password)VALUES('$first_name','$last_name','$aadhar_no','$username','$password','$confirm_password')";

    if ($link->query($sql) === TRUE)
    {
        echo "<br>"."User created successfully";
    }
    // else
    // {
    //     echo "Error:Couldn't create user ";
    //     // .$sql . "<br>" . $link->error;
    // }
      // move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$name);
  // }
    $link->close();
// }
    //mysqli_query($con,$query);

    // Upload file


// $Profile_Picture=$_FILES['Profile_Picture'];
//$sql = "INSERT INTO alumni_details2 (name,email,campus,contact,subject,message)
//VALUES ('$name', '$email', '$campus','$contact','$subject','$message')";
?>

  </body>
</html>
