<?php

include 'config/dbconn.php';

$id = $_GET['id'];

$query = "SELECT * FROM review WHERE id='$id'";
$result = mysqli_query($connection, $query);

$row = mysqli_fetch_assoc($result);



?>





<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Blogs & Events</title>
    <link rel="stylesheet" type="text/css"
          href="https://cdn.materialdesignicons.com/2.1.19/css/materialdesignicons.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="assests/css/blogs.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.8/css/dataTables.bootstrap4.min.css">

    <link rel="stylesheet" href=" https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">



</head>


<body>

<?php

include("includes/header.php");
include("includes/sidebar.php");
include("includes/topbar.php");

?>


<div class="container">

    <div class="row">

        <div class="col-md-12 p-0" style="margin-bottom: 20px;"> <!-- border:1px solid rgba(0,0,0,.125) -->
            <h3 class="h5 text-uppercase text-center text-muted mt-4">Event</h3>
            <h2 class="h2 text-uppercase text-center mb-4"><?php echo $row['event_type'] ?></h2>
            <div class="text-center">
                <img src="uploads/<?php echo $row['image'] ?>" class="img-fluid rounded-circle" style="width:270px;height:250px;" alt="">
            </div>
            <h5 class="h5 text-uppercase text-center mt-3"><?php echo $row['title'] ?></h5>
            <div class="font-weight-light text-center mb-3" style="font-size:16px;"><?php echo $row['location'] ?></div>
            <p class="text-center"><<?php echo $row['description'] ?></p>

        </div><!-- end of col-md-8 p-0 pl-3 -->
    </div>
</div><!-- end of container -->




<?php
include("includes/footer.php");
?>

</body>
</html>

