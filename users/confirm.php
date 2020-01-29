<?php
session_start();
$a= $_SESSION['user'];
 $_SESSION['use']="$a";
$con=mysqli_connect("127.0.0.1","user","user","event");
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }


$var1 = $_POST['teamname'];
$var2 = $_POST['games'];
$var3 = $_POST['members'];
$con=mysqli_connect("127.0.0.1","user","user","event");
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  mysqli_query($con,"SELECT * FROM team");
  mysqli_query($con,"INSERT INTO team (userid, teamname, games, members) VALUES ('$a','$var1','$var2','$var3')");
echo "<h2>WELCOME      " . $a . "</h2>"; 
echo "<br>";
echo "<h3>Your teamname is  ". $var1."</h3>";
echo "<h3>Your registered for these games  " . $var2."</h3>";
echo "<h3>Number of team members is  " . $var3."</h3>";
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
