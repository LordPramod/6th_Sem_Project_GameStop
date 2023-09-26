<?php
// Database Connection
include '../../../backend/config/connection.php';
// Deletion 


$id = $_GET['id'];
$stmt = "DELETE  FROM user_info where id = $id ";
$response  = mysqli_query($connect, $stmt);
if ($response) {
    echo "Deletion Successful";
    header('location:./viewaccounts.php');
} else {
    echo "Data Deletion Unsuccessful";
}
