<?php
require "../../../backend/config/connection.php";
$token = $_GET['token'];

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

// Check if the token has expired
if (strtotime($row["reset_token_expires_at"]) <= time()) {
    die("Token has been expired !!!");
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
</head>

<body>

    <h1>Reset Password</h1>

    <form method="post" action="process-reset-password.php">
        <input type="hidden" name="token" value="<?= htmlspecialchars($token) ?>">

        <label for="password">New Password</label>
        <input type="password" id="password" name="password">

        <label for="cpassword">New Password</label>
        <input type="password" id="cpassword" name="cpassword">

        <input type="submit" value="Change">

    </form>
</body>

</html>