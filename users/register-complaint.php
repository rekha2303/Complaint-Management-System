<?php
session_start();
//$_SESSION['userid'] = "active";
$active= $_SESSION['userid'] ;
//error_reporting(0);

		$var6 = $_POST['subject'];
		$var7 = $_POST['complaintfire'];
		echo $var6;
		echo $var7;

$con=mysqli_connect("127.0.0.1","user","user","complaint");
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  mysqli_query($con,"SELECT * FROM registration");
 // mysqli_query($con,"UPDATE INTO registration (subject, complaintfire) VALUES ('$var6','$var7')");
  $sql = "UPDATE registration SET subject='$var6', complaintfire='$var7' WHERE userid='$active'";
if (mysqli_query($con, $sql)) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}

if(isset($_POST['submit']))
   {    
        header('Location: dashboard.html');
        ?>
      <script>
        alert("Wrong information!");
      </script>
      <meta http-equiv="refresh" content="1;url=register-complaint.html" />
      <?php
   }

?>


