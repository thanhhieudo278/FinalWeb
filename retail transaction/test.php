<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT Namee, phone FROM aaa";
$result = $conn->query($sql);

if ($result->num_rows > 0) {  
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo "<tr><td>" . $row["Namee"]."</td><td>". $row["phone"]."</td></tr>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>