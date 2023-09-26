<?php
include "../config/connection.php";
$id = $_GET['id'];
echo $id;
$status = "Cancelled";
$stmt = "UPDATE  orders SET order_status = '$status' where order_id = $id";
$resposne = mysqli_query($connect, $stmt);
header('location:../../frontend/pages/admin/pendingOrder.php');
