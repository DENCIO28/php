<?php
    $servername = "localhost"; //server ipaddress
    $username = "root";
    $password = "";    
    $dbname = "crud-demo";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if (!$conn){
        die("DB Connection failed: ".$conn->connect_error);
    }

    echo "
        <div class='alert alert-success'>
        <button type='button' class='btn-close' data-bs-dismiss='alert'></button>
            <strong>Success!</strong> Database connnection successful.
            
        </div>";

?>

