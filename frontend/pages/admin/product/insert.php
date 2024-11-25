<?php
include "../../../../backend/config/connection.php";
if (isset($_POST["upload"]) && isset($_FILES['Pimage'])) {
    $product_name = $_POST['Pname'];
    $product_price = $_POST['Pprice'];
    $product_image = $_FILES['Pimage'];
    $product_category = $_POST['Pages'];
    $filename = $product_image['name'];
    $tmp_name = $product_image['tmp_name'];
    $file = "../../../assets/images/" . $filename;
    $description = $_POST['description'];
    
    move_uploaded_file($tmp_name, $file);
    $stmt = $connect->prepare("INSERT INTO products_details (pdt_name, pdt_price, product_image, products_category, description) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $product_name, $product_price, $filename, $product_category, $description);
    $response = $stmt->execute();
    
    if ($response) {
        echo "<script>alert('Product Insertion Successfully');</script>";
        header("location:../products.php");
    } else {
        echo "Product Insertion Failed";
    }
}
