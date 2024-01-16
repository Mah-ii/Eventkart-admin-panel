<?php

include 'config/dbconn.php';

$feature_id = $_GET['feature_id'];

$query = "DELETE from features_list WHERE feature_id = '$feature_id'";
$result = mysqli_query($connection, $query);

if ($result) {
    echo "Data Deleted Successfully";
    header("Location:services.php");
} else {
    echo "Failed";
}
?>
