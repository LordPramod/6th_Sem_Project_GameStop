<?php
include '../config/connection.php';
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');


if (isset($_GET['name'])) {
    $product_name = $_GET['name'];

    // Use mysqli_real_escape_string to prevent SQL injection
    $product_name = mysqli_real_escape_string($connect, $product_name);

    // Create the SQL query
    $sql = "SELECT id FROM products_details WHERE pdt_name = '$product_name'";

    // Execute query
    $result = mysqli_query($connect, $sql);

    if (!$result) {
        echo json_encode([
            'status' => 'error',
            'message' => 'Query failed: ' . mysqli_error($connect)
        ]);
        exit;
    }

    // Check if any rows were returned
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        echo json_encode([
            'status' => 'success',
            'id'=> $row['id']
            
        ]);
    } else {
        echo json_encode([
            'status' => 'error',
            'message' => 'Product not found'
        ]);
    }

    // Free result set
    mysqli_free_result($result);
} else {
    echo json_encode([
        'status' => 'error',
        'message' => 'Product name not provided'
    ]);
}

// Close connection
mysqli_close($connect);
