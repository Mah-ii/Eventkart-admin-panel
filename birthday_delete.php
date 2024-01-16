<?php

include 'config/dbconn.php';

$b_id = $_GET['b_id'];

$query = "DELETE from birthday_service WHERE b_id = '$b_id'";
$result = mysqli_query($connection, $query);

if ($result) {
    echo "Data Deleted Successfully";
    header("Location:services.php");
} else {
    echo "Failed";
}
?>
