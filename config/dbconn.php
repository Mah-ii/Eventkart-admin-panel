<?php

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'event_fam');

$connection = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);


if (!$connection) {
    die("connection Faild :" . mysqli_connect_error());
} else {
    echo "<script>alert('DB connected!')</script>";
}
?>
