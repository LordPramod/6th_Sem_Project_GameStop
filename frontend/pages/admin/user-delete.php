<?php
// Database Connection
include '../../../backend/config/connection.php';
// Deletion 


$id = $_GET['id'];
$stmt = "DELETE  FROM user_info where id = $id ";
echo $stmt;
$response  = mysqli_query($connect, $stmt);
if ($response) {
    echo "Deletion Successful";
    header('location:./customers.php');
} else {
    echo "Data Deletion Unsuccessful";
}