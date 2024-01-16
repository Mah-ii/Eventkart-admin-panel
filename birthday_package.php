<?php

include 'config/dbconn.php';


if (isset($_POST['submit'])) {
    $service_type = $_POST['service_type'];
    $features = $_POST['features'];
    $price = $_POST['price'];
    

    // File upload handling
    $image= ''; // Placeholder for image path in the database

    if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        $upload_dir = 'uploads/'; // Change this to your desired upload directory
        $image_name = basename($_FILES['image']['name']);
        $target_path = $upload_dir . $image_name;

        if (move_uploaded_file($_FILES['image']['tmp_name'], $target_path)) {
            $image_path = $target_path;
        } else {
            echo 'Image upload failed.';
            exit;
        }
    }

    // Insert data into the 'birthday_service' table
    $query2 = "INSERT INTO birthday_service (service_type, image, price)
              VALUES ( '$service_type', '$image_path', '$price')";

    if (mysqli_query($connection, $query2)) {
        header('Location: services.php');
        exit;
    } else {
        echo 'Error: ' . mysqli_error($connection);
    }

}

// Close the database connection
mysqli_close($connection);
?>




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

                <h4 class="h4 mt-4 pb-2" style="border-bottom: 1px solid #dee2e6!important;">Add New Package</h4>

                

                <div class="form-group">
                        
                        <label for="service_type" style="font-size :15px;">Package Title</label>

                        <select class="custom-select form-control" id="service_type" name="service_type" style="font-size:15px; margin-bottom:1.2rem;">
                            <option value=" " > Select Package</option>
                            <option value="Cake-Quake Fiesta"  >Cake-Quake Fiesta</option>
                            <option value="Balloon Bonanza Bash" >Balloon Bonanza Bash</option>
                            <option value="Giggles & Gumdrops Gala"  >Giggles & Gumdrops Gala</option>
                            
                            
                        </select>
                    </div>

                <div class="form-group">
                    <label for="price" style="font-size :15px;">Price Of This Package</label>
                    <input type="text" name="price" class="form-control" id="price" placeholder="Enter the price" style="font-size:15px; margin-bottom:1.2rem;">
                </div>

                <div class="form-group">
                    <label for="image" style="font-size :15px;">Preview Image</label>
                    <input type="file" name="image" style="font-size:15px; margin-bottom:1.2rem;">
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
