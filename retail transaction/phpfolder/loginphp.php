<?php
$servername = "localhost";
$username = "root";
$password = "";
$database_name = "retail_transaction";

//connecting sql = sqli
$conn = mysqli_connect($servername, $username, $password, $database_name);
if (!$conn)
    {
        die("Connection failed: " . mysqli_connect_error());
    }

if(isset($_POST['login']))
    {
    $sql_sel = "SELECT Email,Password FROM account";
    $result = $conn->query($sql_sel);

    $email = $_POST['logemail'];
    $password = $_POST['logpass'];
    if (mysqli_query($conn,$sql_sel))
    {
        $row = mysqli_fetch_assoc($result);
        if($email == $row["Email"] && $password == $row["Password"])
            {
                header("Location: http://localhost/project/retail%20transaction/index.php");
            }
        else
            {
                echo "Wrong account!";
            }
    }            
}