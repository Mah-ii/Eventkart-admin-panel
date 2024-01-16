<?php

include 'config/dbconn.php';

$id = $_GET['id'];

$query = "DELETE from review WHERE id = '$id'";
$result = mysqli_query($connection, $query);

if ($result) {
    echo "Data Deleted Successfully";
    header("Location:blogs_events.php");
} else {
    echo "Failed";
}
?>












