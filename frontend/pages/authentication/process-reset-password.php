<?php
require "../../../backend/config/connection.php";
$token = $_POST['token'];

// Hash the token
$token_hash = hash("sha256", $token);

// Prepare the statement
$stmt = "SELECT * FROM user_info WHERE reset_token_hash = '$token_hash'"; // Add quotes around $token_hash

$result = mysqli_query($connect, $stmt);

// Check if the query was successful
if ($result === false) {
    die("Error in SQL query: " . mysqli_error($connect));
}

// Check if any rows were returned
if (mysqli_num_rows($result) == 0) {
    die("Token not found !!!");
}

// Fetch the row
$row = mysqli_fetch_assoc($result);
$id = $row['id'];

// Check if the token has expired
if (strtotime($row["reset_token_expires_at"]) <= time()) {
    die("Token has been expired !!!");
}

$password = $_POST['password'];

$cpassword = $_POST['cpassword'];

if ($password != $cpassword) {
    echo "Password must match";
}

$hash_passowrd = hash("md5", $password);

$change_stmt = "UPDATE user_info SET password = $hash_passowrd,
    reset_token_hash= NULL,
    reset_token_expires_at = NULL
    WHERE id = $id ";

$change_result = mysqli_query($connect, $change_stmt);

if ($change_result) {
    header('location:login.php');
}