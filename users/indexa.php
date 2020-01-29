 <?php
    session_start();
    
    $servername = "127.0.0.1";
    $username = "user";
    $password = "user";
    $dbname = "event";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }

    $var1= $_GET["userid"];
    $var2= $_GET["password"];

    $_SESSION['user']="$var1";
    
    $sql = "SELECT password FROM registration WHERE userid='$var1'";

    $result = mysqli_query($conn,$sql);
    $row=mysqli_fetch_assoc($result) ;
    
    if(mysqli_num_rows($result) > 0)
    {
      if($var2==$row["password"])
      {?>
      <script>
        alert("Password match!");
      </script>
      <meta http-equiv="refresh" content="1; url=index.html" />
      <?php

	if(isset($_GET['submit']))
   {
        header('Location: view.html');
   }

      }
      else
      {?>
      <script>
        alert("Wrong information!");
      </script>
      <meta http-equiv="refresh" content="1;url=index.html" />
      <?php
      }
    }
    else
    {
      ?>
      <script>
        alert("Wrong information!");
      </script>
      <meta http-equiv="refresh" content="1;url=index.html" />
      <?php
    }

    mysqli_close($conn);
    ?>


