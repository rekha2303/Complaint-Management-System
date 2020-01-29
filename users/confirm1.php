<?php
session_start();
$a= $_SESSION['user'];

$con=mysqli_connect("127.0.0.1","user","user","event");
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }


$var1 = $_POST['username'];
$var2 = $_POST['games'];

$con=mysqli_connect("127.0.0.1","user","user","event");
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  mysqli_query($con,"SELECT * FROM individual");
  mysqli_query($con,"INSERT INTO individual (userid, username, games) VALUES ('$a','$var1','$var2')");
echo "<h2>WELCOME      " . $a . "</h2>"; 
echo "<br>";
echo "<h3>Your name is  ". $var1."</h3>";
echo "<br>";
echo "<h3>Your registered for these games  " . $var2."</h3>";
?>
<html>
<body>
    <head>
   
    <form method ="post" action="deletei.php">
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
</html>