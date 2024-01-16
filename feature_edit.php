<?php
include 'config/dbconn.php'; 

// Check if 'id' is set in the URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Query to retrieve specific feature by its ID
    $query = "SELECT * FROM features_list WHERE feature_id = $id";
    $result = mysqli_query($connection, $query);

    // Check if the query was successful
    if ($result) {
        // Fetch the data from the result set
        $row = mysqli_fetch_assoc($result);

        // Assign the data to variables
        $service_type = $row['service_type'];
        $title = $row['title'];
        $description = $row['description'];
    } else {
        echo 'Error: ' . mysqli_error($connection);
        // Handle the error appropriately
    }
} else {
    // Handle the case where 'id' is not set in the URL
    echo 'Error: Feature ID not provided.';
}

// Check if the 'update' form is submitted
if (isset($_POST['update'])) {
    // Retrieve the updated values from the form
    $newServiceType = $_POST['service_type'];
    $newTitle = $_POST['title'];
    $newDescription = $_POST['description'];

    // Update the feature in the database
    $updateQuery = "UPDATE features_list SET 
                    service_type = '$newServiceType',
                    title = '$newTitle',
                    description = '$newDescription'
                    WHERE feature_id = $id";

    if (mysqli_query($connection, $updateQuery)) {
        // Redirect to the services.php page after successful update
        header('Location: services.php');
        exit;
    } else {
        echo 'Error updating feature: ' . mysqli_error($connection);
        // Handle the error appropriately
    }
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Services</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.materialdesignicons.com/2.1.19/css/materialdesignicons.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="assests/css/blogs.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.8/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">

    <style>
            body {
                margin-bottom: 2%;
            }
            .box-shadow {
                box-shadow: 0 0 2px 1px rgba(0, 0, 0, 0.3);
                font-size: 15px;
            }
            .form-control {
                font-size: 15px;
                margin-top: 8px;
                margin-bottom: 5px;
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
                <h4 class="h4 mt-4 pb-2" style="border-bottom: 1px solid #dee2e6!important;">Edit Features</h4>
                <div class="form-group">
                    <label for="service_type">Package Title</label>
                    <input type="text" name="service_type" value="<?php echo $service_type; ?>" class="form-control" id="wedding_type"  placeholder="Enter package name">
                </div>
                <div class="form-group">
                    <label for="title" style="font-size :15px;">Features Title</label>
                    <input type="text" name="title" value="<?php echo $title; ?>" class="form-control" id="title" placeholder="Enter the features" style="font-size:15px; margin-bottom:1.2rem;">
                </div>
                <div class="form-group">
                    <label for="description">Description:</label>
                    <textarea name="description" id="description" cols="30" rows="10" class="form-control" placeholder="Enter description of the features"><?php echo $description; ?></textarea>
                </div>
                <!-- Button container -->
                <div class="button-container">
                    <button type="submit" name="update" class="btn btn-lg btn-success float-right mr-2" style="font-size: 12px;">Update</button>
                    <a href="services.php" class="btn btn-lg btn-danger float-right" style="font-size: 12px;">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</div>

<?php
include("includes/footer.php");
?>

</body>
</html>
