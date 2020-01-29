<?php

$conn = new mysqli("127.0.0.1","user","user","event");
if(mysqli_connect_errno()) {
    printf("Connect Failed: %s\n", mysqli_connect_errno());
    exit();
}



$result = mysqli_query($conn,"SELECT * FROM registration");

echo "<table border='1'>
<tr>
<th>userid</th>
<th>Name</th>
<th>REG.NO</th>
<th>email</th>
<th>contact</th>
</tr>";

while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['userid'] . "</td>";
  echo "<td>" . $row['fname'] . "</td>";
   echo "<td>" . $row['regno'] . "</td>";
  echo "<td>" . $row['email'] . "</td>";
    echo "<td>" . $row['contact'] . "</td>";
      echo "</tr>";
  }
echo "</table>";

mysqli_close($conn);
?>