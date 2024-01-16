<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Blogs & Events</title>
    <link rel="stylesheet" type="text/css"
          href="https://cdn.materialdesignicons.com/2.1.19/css/materialdesignicons.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700" rel="stylesheet">
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
                    <h2 class="m-0">Events And Wedding's Information Section</h2>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-8 pl-3 pb-3 box-shadow mt-4">
                <form action="code.php" method="post" enctype="multipart/form-data">
                    <h4 class="h4 mt-4 pb-2" style="border-bottom: 1px solid #dee2e6!important;">New Article
                        <a href="blog_events.php" class="btn btn-sm btn-danger float-right" style="font-size: 12px;">
                            <i class="mdi mdi-close-circle mr-2"></i> Cancel
                        </a>
                        <button type="submit" name="submit" class="btn btn-sm btn-success float-right mr-2" style="font-size: 12px;">
                            <i class="mdi mdi-account-plus mr-2"></i> Save article
                        </button>
                    </h4>
                    <div class="form-group">
                        <label for="booking_id">Event Type:</label>
                        <input type='text' class="form-control" id="event_type" name="event_type">
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
                            <input type="text" class="form-control" name="event_date" data-provide="datepicker" id="event_date" placeholder="event Date">
                            <div class="input-group-append">
                                <span class="input-group-text" style="background: white;">
                                    <i style="color:#19b5bc;" class="mdi mdi-calendar-check" id="review" aria-hidden="true"></i>
                                </span>
                            </div>
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
                <img id="preview_image" src="https://via.placeholder.com/350x350" width="300" height="350" alt="">
            </div>
        </div>
    </div>
</div>



</body>
</html>
