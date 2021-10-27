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

//making input
if(isset($_POST['add']))
{
    $date = $_POST['date'];
    $type = $_POST['type'];
    $oldcap = $_POST['oldcap'];
    $newcap = $_POST['newcap'];
    $volume = $_POST['volume'];
    $price = $_POST['price'];
    $totalprice = $price *  $volume ;

    $sql_add = "INSERT INTO gasline2 (Date,Type,Old_capacity,New_capacity,Volume,Price,Total_price) VALUES ('$date', '$type', '$oldcap', '$newcap', '$volume', '$price', '$totalprice')";
                
    if (mysqli_query($conn, $sql_add))
        {
            $alert1 = "<script>alert('New Information Entry inserted successfully!');</script>";
            echo $alert1;
        }
    else
        {
            echo "Error: " . $slq_add . "" . mysqli_error($conn);
        }
    mysqli_close($conn);
}

//making delete
if(isset($_POST['delete']))
{
    $date = $_POST['date'];
    $type = $_POST['type'];
    $sql_del = "DELETE FROM gasline2 WHERE Date='$date' and Type='$type'";
    
    if (mysqli_query($conn,$sql_del))
        {
            $alert1 = "<script>alert('Deleted successfully!');</script>";
            echo $alert1;
        }
    else
        {
            echo "Error: " . $sql_del . " " . mysqli_error($conn);
        }
    mysqli_close($conn); 
}

//making update
if(isset($_POST['update']))
{
    $date = $_POST['date'];
    $type = $_POST['type'];
    $oldcap = $_POST['oldcap'];
    $newcap = $_POST['newcap'];
    $volume = $_POST['volume'];
    $price = $_POST['price'];
    $totalprice = $price *  $volume;

    $sql_upd = "UPDATE gasline2 SET Type='".$type."', Old_capacity='".$oldcap."', New_capacity='".$newcap."', Volume='".$volume."', Price='".$totalprice."',Total_price='".$price."' WHERE Date='$date' ";
                
    if (mysqli_query($conn, $sql_upd))
        {
            $alert1 = "<script>alert('Information Updated successfully!');</script>";
            echo $alert1;
        }
    else
        {   
            echo "Error: " . $sql_upd . " " . mysqli_error($conn);
        }
    mysqli_close($conn);
}

