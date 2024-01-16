<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Eventkart Admin</title>
    <link rel="stylesheet" type="text/css"
          href="https://cdn.materialdesignicons.com/2.1.19/css/materialdesignicons.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700" rel="stylesheet">
</head>

<body>

<?php
include("includes/header.php");
include("includes/topbar.php");
include("includes/sidebar.php");
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0">Events And Wedding's Information Section</h1>
                </div><!-- /.col -->

            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <a class="btn btn-md btn-success" style="font-size: 12px;" href="blogs_add.php"><i
                                        class="mdi mdi-account-plus mr-2"></i> Add New Info.
                            </a>
                        </div>

                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Location</th>
                                    <th>Event Date</th>
                                    <!-- Removed "Date Created" column header -->
                                    <th>Tools</th>
                                </tr>
                                </thead>

                                <tbody>
                                <tr>
                                    <td class="special"></td>
                                    <td class="special"></td>
                                    <td class="special"></td>
                                    <td class="special"></td>
                                    <!-- Removed "Date Created" column data -->
                                    <td>
                                        <a href="blog_events_edit.php?id=" class="btn btn-info btn-sm active"><i
                                                    class="mdi mdi-account-edit"></i></a>
                                        <a href="blog_events_delete.php?id=" class="btn btn-danger btn-sm active"><i
                                                    class="mdi mdi-delete"></i></a>
                                        <a href="../wedding_details.php?id=" target="_blank"
                                           class="btn btn-warning btn-sm active"><i class="mdi mdi-eye"></i></a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<?php
include("includes/footer.php");
?>

</body>
</html>
