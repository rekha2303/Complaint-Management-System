<?php
session_start();

$con=mysqli_connect("127.0.0.1","user","user","event");
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }


$var1 = $_POST['teamname'];
 $_SESSION['u']="$var1";
 $ui =$_SESSION['u'];
$var2 = $_POST['games'];
$var3 = $_POST['members'];
$con=mysqli_connect("127.0.0.1","user","user","event");
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  mysqli_query($con,"SELECT * FROM team");

 
 
  $sql = "UPDATE team SET teamname='$var1', games='$var2', members='$var3' WHERE teamname='$ui'";
if (mysqli_query($con, $sql)) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . mysqli_error($con);}

?>

<html>
<body>
    <head>
  
     <link rel="stylesheet" href="alert1.css">

<body>
      <p>You have to selected </p>
      <form method ="post" action="u.html">
     <input type="submit" name="" value="update">
    </form> 

    <form method ="post" action="delete.php">
     <input type="submit" name="" value="DELETE">
    </form> 
    <br><form action="../index.html">
     <input type="submit" name="" value="Go To Home page">
    </form> 
    <form action="logout.html">
    <button type="submit">LOG OUT </button>
    </form>

</div>
  </body>
</head>

</html>






