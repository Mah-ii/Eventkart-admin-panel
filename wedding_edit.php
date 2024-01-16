<?php



include 'config/dbconn.php'; 


$id = $_GET['id'];

$query = "SELECT * FROM wedding_service WHERE id='$id'";
$result = mysqli_query($connection, $query);

$row = mysqli_fetch_assoc($result);


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Services</title>
    <link rel="stylesheet" type="text/css"
          href="https://cdn.materialdesignicons.com/2.1.19/css/materialdesignicons.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="assests/css/blogs.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.8/css/dataTables.bootstrap4.min.css">

    <link rel="stylesheet" href=" https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">

    <style>

        .form-control{
            margin-top: 8px;
            margin-bottom: 5px;
        }

        .image{
            margin-top: 8px;
            margin-bottom: 5px;
        }

        .btn{
            margin-top: 15px;
            
            
        }






        </style>



</head>


<body>

<?php

include("includes/header.php");
include("includes/sidebar.php");
include("includes/topbar.php");




?>

<div class="container">

<div class="row">

    <div class="col-lg-8 pl-3 pb-3 box-shadow mt-4">
    
        <form method="post" action="" enctype="multipart/form-data">

            <h4 class="h4 mt-4 pb-2" style="border-bottom: 1px solid #dee2e6!important;">Edit Package</h4>
    
            
            
            <div class="form-group">
                <label for="service_type">Package Title</label>
                <input type="text" name="service_type" value="<?php echo $row['service_type'] ?>" class="form-control" id="wedding_type"  placeholder="Enter package name">
            </div>

            <div class="form-group">
                <label for="price">Price Of This Package</label>
                <input type="text" name="price" value="<?php echo $row['price'] ?>" class="form-control" id="price"  placeholder="Enter the price">
            </div>

            <div class="form-group">
                <label for="image">Preview Image</label>
                <input type="file" name="image" id="image" class="form-control">
           </div>

            <a href="service_list.php" class="btn btn-lg btn-danger float-right" style="font-size: 12px;">Cancel</a>

           <button type="submit" name="update" value="Update Details" class="btn btn-lg btn-success float-right mr-2" style="font-size: 12px;">Update</button>

       
    </div>
    
    <div class="col-lg-4 mt-4">
        <img src="" width="380" height="306"  alt="">
    </div>
     </form>

     <!-- end of input form -->
</div>
</div>







<?php
include("includes/footer.php");
?>

</body>
</html>


<?php


if (isset($_POST['update'])) {
    $service_type = $_POST['service_type'];
    $price = $_POST['price'];

    echo "Service Type: $service_type, Price: $price, ID: $id"; // Debugging output

    $query = "UPDATE wedding_service SET service_type='$service_type', price='$price' WHERE id = '$id' ";

    $result = mysqli_query($connection, $query);

    if ($result) {
        echo "Data Updated Successfully";
        header("Location:services.php");
    } else {
        echo "Failed";
    }
}

?>




