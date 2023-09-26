<?php
// Database Connection
include '../../../../backend/config/connection.php';
// Deletion 


$id = $_GET['id'];
echo $id;
$stmt = "DELETE FROM products_details where id = $id ";
$response  = mysqli_query($connect, $stmt);
if ($response) {
    echo "Deletion Successful";
    header('location:../products.php');
} else {
    echo "Data Deletion Unsuccessful";
}
