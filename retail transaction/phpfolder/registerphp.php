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

if(isset($_POST['register']))
{
    $first_name = $_POST['firstname'];
    $last_name = $_POST['lastname'];
    $mail = $_POST['email'];
    $password = $_POST['password'];
    $repassword = $_POST['repassword'];

    if($repassword == $password)
    {

    $sql_add = "INSERT INTO account (First_Name,Last_Name,Email,Password) VALUES ('$first_name', '$last_name', '$mail', '$password')";
                
    if (mysqli_query($conn, $sql_add))
        {
            header("Location: http://localhost/project/retail%20transaction/login.php");
            
            $alert1 = "<script>alert('Registered successfully!');</script>";
            echo $alert1;
            
        }
    }
    
    else
        {
            echo "Wrong Confirm Password!";
            
        }
    mysqli_close($conn);
    
}


//    if(isset($_POST['Delacc']))
//    {
//        $email = $_POST['email'];
//        $pass = $_POST['password'];
//        $sql_del = "DELETE FROM account WHERE Email='$email' and Password='$pass'";
//        
//        if (mysqli_query($conn,$sql_del))
//            {
//                $alert1 = "<script>alert('Deleted successfully!');</script>";
//                echo $alert1;
//            }
//        else
//            {
//                echo "Error: " . $sql_del . " " . mysqli_error($conn);
//            }
//        mysqli_close($conn); 
//    }
