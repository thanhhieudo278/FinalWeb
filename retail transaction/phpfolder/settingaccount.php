<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "retail_transaction";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT First_Name, Last_Name, Email FROM account ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {  
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo "<tr><td>" . $row["Last_Name"]."</td><td>". $row["First_Name"]."</td><td>" . $row["Email"]."</td></tr>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>