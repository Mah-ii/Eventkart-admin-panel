<?php
include 'config/dbconn.php';

$query = "SELECT * FROM wedding_service";
$result = mysqli_query($connection, $query);

$query1 = "SELECT * FROM features_list";
$result1 = mysqli_query($connection, $query1);

$query2 = "SELECT * FROM birthday_service";
$result2 = mysqli_query($connection, $query2);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Services</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.materialdesignicons.com/2.1.19/css/materialdesignicons.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.8/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">

    <style>
        .button-container {
            display: flex;
            justify-content: flex-end;
        }
    </style>
</head>

<body>

    <?php
    include("includes/header.php");
    include("includes/sidebar.php");
    include("includes/topbar.php");
    ?>

    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-12">
                        <h2 style="margin-top: 1.5rem;">Services & Packages</h2>
                    </div>
                </div>
            </div>
        </div>

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4> Wedding Packages</h4>
                                <div class="button-container">
                                    <a href="wedding_package.php" class="btn btn-md btn-success"><i class="mdi mdi-buffer mr-2"></i>Add New Package.</a>
                                </div>
                            </div>

                            <div class="card-body">
                                <table id="example" class="table table-bordered table-hover" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Service Type</th>
                                            <th>Price</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo "<tr>";
                                            echo "<td>" . $row['id'] . "</td>";
                                            echo "<td>" . $row['service_type'] . "</td>";
                                            echo "<td>" . $row['price'] . "</td>";
                                            echo "<td>
                                                  <a href='wedding_edit.php?id=" . $row['id'] . "' class='btn btn-info btn-sm active'><i class='mdi mdi-account-edit'></i></a>
                                                  <a href='wedding_delete.php?id=" . $row['id'] . "' class='btn btn-danger btn-sm active'><i class='mdi mdi-delete' onclick='return checkdelete()'></i></a>
                                                  <button type='button' name='view' value='view' id='" . $row['id'] . "' class='btn btn-info btn-sm view_data'>
                                                  <i class='mdi mdi-eye-outline'></i> 
                                              </button>
                                              </td>";
                                            echo "</tr>";
                                        }
                                        ?>
                                    </tbody>
                                </table>


                                <div class="card-header">
                                <h4>Birthday Packages</h4>
                                <div class="button-container">
                                    <a href="birthday_package.php" class="btn btn-md btn-success"><i class="mdi mdi-buffer mr-2"></i>Add New Package.</a>
                                </div>
                            </div>

                            <div class="card-body">
                                <table id="example3" class="table table-bordered table-hover" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Service Type</th>
                                            <th>Price</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        while ($row2 = mysqli_fetch_assoc($result2)) {
                                            echo "<tr>";
                                            echo "<td>" . $row2['id'] . "</td>";
                                            echo "<td>" . $row2['service_type'] . "</td>";
                                            echo "<td>" . $row2['price'] . "</td>";
                                            echo "<td>
                                                  <a href='birthday_edit.php?id=" . $row2['id'] . "' class='btn btn-info btn-sm active'><i class='mdi mdi-account-edit'></i></a>
                                                  <a href='birthday_delete.php?id=" . $row2['id'] . "' class='btn btn-danger btn-sm active'><i class='mdi mdi-delete' onclick='return checkdelete()'></i></a>
                                                  <button type='button' name='view' value='view' id='" . $row2['id'] . "' class='btn btn-info btn-sm view_data1' >
                                                  <i class='mdi mdi-eye-outline'></i> 
                                              </button>
                                              </td>";
                                            echo "</tr>";
                                        }
                                        ?>
                                    </tbody>
                                </table>

                                
                                

                                <hr>
                                <hr>

                                <div class="card-header">
                                <h4>Features List</h4>
                                    <div class="button-container">
                                        <a href="feature_add.php" class="btn btn-md btn-success"><i class="mdi mdi-account-plus"></i>Add New Features.</a>
                                    </div>
                                </div>

                                <table id="example2" class="table table-bordered table-hover" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Service Type</th>
                                            <th>Features</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        while ($row1 = mysqli_fetch_assoc($result1)) {
                                            echo "<tr>";
                                            echo "<td>" . $row1['feature_id'] . "</td>";
                                            echo "<td>" . $row1['service_type'] . "</td>";
                                            echo "<td>" . $row1['title'] . " </td>";
                                            echo "<td>
                                                  <a href='feature_edit.php?feature_id=" . $row1['feature_id'] . "' class='btn btn-secondary btn-sm' data-toggle='tooltip' data-placement='top' title='Edit This feature'><i class='mdi mdi-pen'></i></a>
                                                  <a href='feature_delete.php?feature_id=" . $row1['feature_id'] . "' class='btn btn-danger btn-sm active'><i class='mdi mdi-delete' onclick='return checkdelete()'></i></a>

                                                </td>";
                                            echo "</tr>";
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.8/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.8/js/dataTables.bootstrap4.min.js"></script>

    <script>
        new DataTable('#example');
        new DataTable('#example2');
        new DataTable('#example3');
    </script>

    <script>
        function checkdelete() {
            return confirm('Are you sure you want to delete this Service?');
        }
    </script>

    <!-- View Details Modal -->
    <div id="packageDetailsModal" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Package Features Details</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body" id="packageDetailContent">
                    <!-- Package details will be loaded here dynamically -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).on('click', '.view_data', function () {
            var id = $(this).attr("id");
            if (id !== '') {
                $.ajax({
                    url: "select.php",
                    method: "POST",
                    data: { id: id },
                    success: function (data) {
                        $('#packageDetailContent').html(data);
                        $('#packageDetailsModal').modal('show');
                    }
                });
            }
        });
    </script>

<script>
        $(document).on('click', '.view_data1', function () {
            var id = $(this).attr("id");
            if (id !== '') {
                $.ajax({
                    url: "select1.php",
                    method: "POST",
                    data: { id: id },
                    success: function (data) {
                        $('#packageDetailContent').html(data);
                        $('#packageDetailsModal').modal('show');
                    }
                });
            }
        });
    </script>

  

    

   

    <?php
    include("includes/footer.php");
    ?>

</body>

</html>
