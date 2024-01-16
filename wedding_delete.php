<?php

include 'config/dbconn.php';

$id = $_GET['id'];

$query = "DELETE from wedding_service WHERE id = '$id'";
$result = mysqli_query($connection, $query);

if ($result) {
    echo "Data Deleted Successfully";
    header("Location:services.php");
} else {
    echo "Failed";
}
?>
