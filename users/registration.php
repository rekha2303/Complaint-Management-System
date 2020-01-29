<?php
session_start();
error_reporting(0);

		$servername = "127.0.0.1";
		$username = "user";
		$password = "user";
		

		// Create connection
		$conn = mysqli_connect($servername, $username, $password);
		// Check connection
		if (!$conn) {
			die("Connection failed: " . mysqli_connect_error());
		}


		// Create database
$sql = "CREATE DATABASE event";
if (mysqli_query($conn, $sql)) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . mysqli_error($conn);
}


mysqli_close($conn);

		$servername = "127.0.0.1";
		$username = "user";
		$password = "user";
		$dbname = "event";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


$sql = "CREATE TABLE registration(

userid VARCHAR(30) NOT NULL PRIMARY KEY,
fname VARCHAR(30) NOT NULL,
regno VARCHAR(30) NOT NULL,
email VARCHAR(30) NOT NULL,
password VARCHAR(30) NOT NULL,
contact VARCHAR(10) NOT NULL
)";


if (mysqli_query($conn, $sql)) {
    echo "Table registration created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}


$sql = "CREATE TABLE team(
userid VARCHAR(30) NOT NULL,
teamname VARCHAR(30) NOT NULL PRIMARY KEY,
games VARCHAR(30) NOT NULL,
members VARCHAR(30) NOT NULL
)";

if (mysqli_query($conn, $sql)) {
    echo "Table registration created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

$sql = "CREATE TABLE individual(

userid VARCHAR(30) NOT NULL,
username VARCHAR(30) NOT NULL,
games VARCHAR(30) NOT NULL
)";

if (mysqli_query($conn, $sql)) {
    echo "Table registration created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}


mysqli_close($conn);

		$var1 = $_POST['userid'];
		$var2 = $_POST['fname'];
		$var3 = $_POST['regno'];
		$var4 = $_POST['email'];
		$var5 = $_POST['password'];
		$var6 = $_POST['contact'];
$con=mysqli_connect("127.0.0.1","user","user","event");
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  mysqli_query($con,"SELECT * FROM registration");
  mysqli_query($con,"INSERT INTO registration (userid, fname, regno, email, password, contact) VALUES ('$var1','$var2','$var3','$var4','$var5', '$var6' )");



if(isset($_POST['submit']))
   {
        header('Location: index.html');
   }

?>