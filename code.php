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
