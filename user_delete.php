



<?php

include 'config/dbconn.php';

$id = $_GET['id'];

$insert = "DELETE from users WHERE id = '$id'";
$result = mysqli_query($connection, $insert);

if ($result) {
  //  echo "Data Deleted Successfully";
    echo "<script> location.href = 'client.php'</script>";
} else {
    echo "Failed";
}
?>












