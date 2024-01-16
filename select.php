<?php
include 'config/dbconn.php';

if (isset($_POST["id"])) {
    $output = '';
    $package_id = $_POST["id"];

    $query = "SELECT * FROM features_list WHERE service_type = (SELECT service_type FROM wedding_service WHERE id = $package_id)";
    $result = mysqli_query($connection, $query);

    $output .= '<div class="table-responsive">
                    <table class="table table-bordered">
                        <tr>
                            <th width="30%"><label>Title</label></th>
                            <th width="70%">Description</th>
                        </tr>';

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            $output .= '<tr>
                             <td width="30%"><label>' . $row["title"] . '</label></td>
                             <td width="70%">' . $row["description"] . '</td>
                        </tr>';
        }
    } else {
        $output .= '<tr>
                         <td colspan="2" align="center">No Feature Yet!</td>
                    </tr>';
    }

    $output .= '</table></div>';
    echo $output;
}

mysqli_close($connection);
?>
