<?php 
include '../config/connection.php';
session_status();
$id = $_GET['id'];
$stmt1 = mysqli_query($connect, "SELECT * FROM pdt_cart where cart_id = '{$id}'");
$cart_stmt = mysqli_query($connect, "SELECT * FROM pdt_cart ");
$row = mysqli_fetch_assoc($cart_stmt);
// echo $row['cart_id'];
// echo $stmt1;
// Deletion 
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $quantity = $_POST['quantity'];
    $total = $quantity * $row['product_price'];
    $stmt = mysqli_query($connect, "UPDATE pdt_cart SET product_quantity=$quantity, total_amount=$total where cart_id=$id");
    header("location: ../../frontend/layouts/cart.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* Add styles for the card and button */
        .card {
            width: 300px;
            border: 1px solid #ccc;
            border-radius: 10px;
            padding: 20px;
            text-align: center;
            margin: 50px auto; /* Center the card */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .card img {
            width: 100%; /* Responsive image */
            border-radius: 10px;
        }

        .update-button {
            background-color: #f44336; /* Crimson color */
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .update-button:hover {
            background-color: #d32f2f; /* Darker crimson on hover */
        }
    </style>
</head>

<body>
    <div class="container-quantity">
        <div class="card">
            <img src="../../frontend/assets/images/<?php echo $row['image'];?>" alt="Product Image"> <!-- Add product image -->
            <h2><?php echo $row['product_name']; ?></h2> <!-- Display product name -->
            <form action="updateCart.php" method="post">
                <label for="Quantity">Quantity</label>
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <input type="text" name="quantity" id="" placeholder="Enter New Quantity">
                <br>
                <input type="submit" value="Update" name="update" class="update-button"> <!-- Update button -->
            </form>
        </div>
    </div>
</body>

</html>