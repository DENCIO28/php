<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container">
        <h3>List of employees</h3>
        <?php include("dbconfig.php")?>
    </div>

    <div class="list">
        <table class="table table-striped table-hover">
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Position</th>
                <th>Action</th>
            </tr>
            <!-- Start -->

            <?php
                $sql = "SELECT * FROM tblEmployee";
                $result = $conn->query($sql);
                // print_r ($result);

                if ($result->num_rows >0){
                    while($row = $result->fetch_assoc()){
                        // print_r ($row);
                        // echo $row["ID"]. "<br>"
                        // echo $row["FNAME"]. "<br>"
            ?>

            <tr>
                <td><?=$row["ID"]?></td>
                <td><?=$row["FNAME"]?></td>
                <td><?=$row["LNAME"]?></td>
                <td><?=$row["POSITION"]?></td>
                <td>
                    <button class="btn btn-Warning">Edit</button>
                    <button class="btn btn-danger">Remove</button>
                </td>
            </tr>

            <?php
                }
            }
            ?>
            <!-- End -->
        </table>
    </div>
</body>
</html>