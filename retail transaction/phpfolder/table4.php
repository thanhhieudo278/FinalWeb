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

$sql = "SELECT Date, Type, Old_capacity, New_capacity, Volume, Price, Total_price FROM gasline4 ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {  
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo "<tr><td>" . $row["Date"]."</td><td>". $row["Type"]."</td><td>" . $row["Old_capacity"].
    "</td><td>".$row["New_capacity"]."</td><td>".$row["Volume"]."</td><td>".$row["Price"]."</td><td>".$row["Total_price"]."</td></tr>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>