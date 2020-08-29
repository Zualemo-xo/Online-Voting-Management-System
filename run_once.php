<html>
<head>
  <style>
  body
  {
    background-color: lightblue;

  }
  </style>
</head>
<body>

<!-- //Code to create database -->

<?php
//i am using Example (MySQLi Object-Oriented) with php to create a connection to the database.
$servername = "localhost";
$username = "Administrator";
$password = "#Kalizen0123";
$dbname="voting";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully<br>";

// Create database ---initialize only once
$sql = "CREATE DATABASE voting";
if ($conn->query($sql) === TRUE) {
    echo "Database 'voting' created successfully<br>";
} else {
    echo "Error creating database:" . $conn->error;
    echo "<br>";
}

$conn->close();
?>



<!-- //Code to create tables -->

<?php
//i am using Example (MySQLi Object-Oriented) with php to create a connection to the database.
$servername = "localhost";
$username = "Administrator";
$password = "#Kalizen0123";
$dbname="voting";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully<br>";


// sql to create table
$sql = "CREATE TABLE candidate (
candidate_id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
position VARCHAR(100) NOT NULL,
firstname VARCHAR(100) NOT NULL,
lastname VARCHAR(100) NOT NULL,
gender VARCHAR(100) NOT NULL,
img VARCHAR(100)
)";

if ($conn->query($sql) === TRUE) {
    echo "Table candidate created successfully<br>";
} else {
    echo "Error creating table:" . $conn->error;
    echo "<br>";
}


$sql = "CREATE TABLE user (
user_id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
username VARCHAR(100) NOT NULL,
password VARCHAR(100) NOT NULL,
firstname VARCHAR(100) NOT NULL,
lastname VARCHAR(100) NOT NULL
)";

if ($conn->query($sql) === TRUE) {
    echo "Table user created successfully<br>";
} else {
    echo "Error creating table:" . $conn->error;
    echo "<br>";
}


//FOREIGN KEY FOR ID NUMBER YET TO BE IN PLACE
$sql = "CREATE TABLE  voters (
voters_id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
id_number INT(11) NOT NULL,
password VARCHAR(100) NOT NULL,
firstname VARCHAR(100) NOT NULL,
lastname VARCHAR(100) NOT NULL,
status VARCHAR(100) NOT NULL,
account VARCHAR(100) NOT NULL
)";

if ($conn->query($sql) === TRUE) {
    echo "Table voters created successfully<br>";
} else {
    echo "Error creating table:" . $conn->error;
    echo "<br>";
}

//WEAK ENTITY SET need foreign keys
$sql = "CREATE TABLE votes(
vote_id int(255) NOT NULL,
candidate_id varchar(255) NOT NULL,
voter_id VARCHAR(255) NOT NULL
)";

if ($conn->query($sql) === TRUE) {
    echo "Table votes created successfully<br>";
} else {
    echo "Error creating table:" . $conn->error;
    echo "<br>";
}



$conn->close();
?>

</body>
</html>
