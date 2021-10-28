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




//making update
if(isset($_POST['Change']))
{
    
    $cpass = $_POST['cpass'];
    $npass = $_POST['npass'];
    $cfpass = $_POST['cfpass'];

    if($cfpass == $npass)
    {
   
    $sql_change = "UPDATE account SET Password= '$npass'  WHERE Password= '$cpass' ";
                
    if (mysqli_query($conn, $sql_change))
        {
            header("Location: http://localhost/project/retail%20transaction/login.php");
            
            $alert1 = "<script>alert('Registered successfully!');</script>";
            echo $alert1;
        }
    
    }
    else
        {   
            echo "Error: " . $sql_upd . " " . mysqli_error($conn);
        }
    mysqli_close($conn);
}

