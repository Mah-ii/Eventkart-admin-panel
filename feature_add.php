<?php

include 'config/dbconn.php';


if (isset($_POST['submit'])) {
    $service_type = $_POST['service_type'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    
    // Insert data into the 'features_list' table
    $query1 = "INSERT INTO features_list (service_type, title, description)
              VALUES ( '$service_type', '$title', '$description')";

    if (mysqli_query($connection, $query1)) {
        header('Location: services.php');
        exit;
    } else {
        echo 'Error: ' . mysqli_error($connection);
    }
}

// Close the database connection
mysqli_close($connection);
?>








<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Services</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.materialdesignicons.com/2.1.19/css/materialdesignicons.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700" rel="stylesheet">

    <style>
        body {
            margin-bottom: 20%;
        }

        .box-shadow {
            box-shadow: 0 0 2px 1px rgba(0, 0, 0, 0.3);
            font-size: 12px;
        }

        .form-control {
            font-size: 15px;
        }

        .button-container {
            display: flex;
            justify-content: flex-end;
            margin-top: 1.5rem;
        }

        .button-container button {
            margin-left: 1rem;
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

        <div class="col-lg-8 offset-2 pl-3 pb-3 box-shadow mt-4">

            <form method="post" action="" enctype="multipart/form-data">

            

                <h4 class="h4 mt-4 pb-2" style="color:black">Add New Features</h4>

                <div class="form-group">
                        
                        <label for="service_type" style="font-size :15px;">Package Title</label>

                        <select class="custom-select form-control" id="service_type" name="service_type" style="font-size:15px; margin-bottom:1.2rem;">
                            <option value=" " > Select Package</option>
                            <option value="Classic Box"  >Classic Box</option>
                            <option value="Elegant Box" >Elegant Box</option>
                            <option value="Elite Box"  >Elite Box</option>
                            <option value="Gold Box"  >Gold Box</option>
                            <option value="Premium Box"  >Premium Box</option>
                            
                        </select>
                    </div>

                <div class="form-group">
                    <label for="title" style="font-size :15px;">Features Title</label>
                    <input type="text" name="title" class="form-control" id="title" placeholder="Enter the features" style="font-size:15px; margin-bottom:1.2rem;">
                </div>

                <div class="form-group">
                        <label for="description">Description:</label>
                        <textarea name="description" id="description" cols="30" rows="10" class="form-control" placeholder="Enter description of the features"></textarea>
                </div>


                <!-- Button container -->
                <div class="button-container">
                    <button type="submit" name="submit" class="btn btn-primary btn-danger mdi mdi-content-save">Save</button>
                    <a href="services.php" class="btn btn-secondary btn-success float mdi mdi-cancel" style="margin-left:8px;">Cancel</a>
                </div>

            </form><!-- end of input form -->
        </div>
    </div>
</div>

<?php
include("includes/footer.php");
?>

</body>
</html>
