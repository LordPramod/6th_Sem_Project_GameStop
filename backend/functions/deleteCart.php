<?php
include "../config/connection.php";
$id = $_GET['id'];
$stmt = "Delete FROM pdt_cart where cart_id = '$id'";
$response = mysqli_query($connect, $stmt);
if ($response) {
    header("location:../../frontend/layouts/cart.php");
} else {
    echo "<script> alert('Somthing went wrong please try again');";
}
