<?php
session_start();

$a= $_SESSION['use'];

		$con=mysqli_connect("127.0.0.1","user","user","event");
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  

echo "<h2>WELCOME      " . $a . "</h2>"; 
echo "<br>";
$sql = "DELETE FROM individual WHERE userid='$a'";

if ($con->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $con->error;
}


?>