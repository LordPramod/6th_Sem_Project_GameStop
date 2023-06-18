<?php
include "../../../../backend/config/connection.php";
if (isset($_POST["upload"]) && isset($_FILES['Pimage'])) {
    $product_name = $_POST['Pname'];
    $product_price = $_POST['Pprice'];
    $product_image = $_FILES['Pimage'];
    // $product_category = $_POST['Page'];
    print_r($product_image);
    $stmt = "INSERT INTO pdt_table (pdt_name ,pdt_price,pdt_image,pdt_category) VALUES ('$product_name','$product_price','$product_image','$product_category')";
    $response = mysqli_query($connect, $stmt);
    if ($response) {
        echo "Product Insert Succesfully";
    } else {
        echo "Product Insertion Failed";
    }
}
