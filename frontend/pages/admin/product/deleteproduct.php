<?php
// Database Connection
include '../../../../backend/config/connection.php';
// Deletion 


    $id = $_GET['id'];
    $stmt = "DELETE  FROM pdt_table where pdt_id = $id ";
    echo $stmt;
    $response  = mysqli_query($connect, $stmt);
    if ($response) {
        echo "Deletion Successful";
        header('location:../products.php');
    } else {
        echo "Data Deletion Unsuccessful";
    }

