<?php
include 'config/dbconn.php'; 

if (isset($_POST['submit'])) {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $event_date = $_POST['event_date'];
    $location = $_POST['location'];
    $status = $_POST['status'];
    $event_type = $_POST['event_type'];

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

    // Insert data into the 'review' table
    $query = "INSERT INTO review (title, description, event_date, location, status, event_type, image)
              VALUES ('$title', '$description', '$event_date', '$location', '$status', '$event_type', '$image_path')";

    if (mysqli_query($connection, $query)) {
        header('Location: blogs_events.php');
        exit;
    } else {
        echo 'Error: ' . mysqli_error($connection);
    }
}

// Close the database connection
mysqli_close($connection);
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


</head>

<body>

<?php

include("includes/header.php");
include("includes/sidebar.php");
include("includes/topbar.php");

?>



<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h2 style="margin-top: 1.5rem;">Events And Wedding's Information Section</h2>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-8 pl-3 pb-3 box-shadow mt-4">
                <form action="" method="post" enctype="multipart/form-data">
                    <h4 class="h4 mt-4 pb-2" style="border-bottom: 1px solid #dee2e6!important;">New Article
                        <a href="blog_events.php" class="btn btn-sm btn-danger float-right" style="font-size: 12px;">
                            <i class="mdi mdi-close-circle mr-2"></i> Cancel
                        </a>
                        <button type="submit" name="submit" class="btn btn-sm btn-success float-right mr-2" style="font-size: 12px;">
                            <i class="mdi mdi-account-plus mr-2"></i> Save article
                        </button>
                    </h4>
                    <div class="form-group">
                        
                        <label for="event_type">Event Type:</label>

                        <select class="custom-select form-control" id="event_type" name="event_type">
                            <option value=" " > Select Event</option>
                            <option value="Wedding"  >Wedding</option>
                            <option value="Birthday" >Birthday</option>
                            <option value="Corporate Event"  >Corporate Event</option>
                            <!-- Add more options as needed -->
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" name="title" class="form-control" id="title" placeholder="Enter article title">
                    </div>
                    <div class="form-group">
                        <label for="description">Description:</label>
                        <textarea name="description" id="description" cols="30" rows="10" class="form-control" placeholder="Enter description and vendor of this wedding"></textarea>
                    </div>

                    <div class="form-group">
                        <input type="file" name="image" onchange="document.getElementById('image').src = window.URL.createObjectURL(this.files[0])">
                    </div>
                    
                    <div class="form-group">
                        <div class="input-group">
                            <input type="date" class="form-control" name="event_date" data-provide="datepicker" id="event_date" placeholder="event Date">
                            
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="location">Location</label>
                        <input type="text" name="location" class="form-control" id="location" placeholder="Enter location">
                    </div>
                    <div class="form-group">
                        <label for="">Status:</label>
                        <select name="status" id="status" class="form-control">
                            <option value="0">Draft</option>
                            <option value="1">Publish</option>
                        </select>
                    </div>
                </form><!-- end of input form -->
            </div>
            <div class="col-lg-3 mt-4">
                <img id="image" src="https://via.placeholder.com/350x350" width="300" height="350" alt="">
            </div>
        </div>
    </div>
</div>








<?php
include("includes/footer.php");
?>




</body>
</html>
