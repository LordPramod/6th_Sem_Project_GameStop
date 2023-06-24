<?php
session_start();
if (!isset($_SESSION['name'])) {
  header("location:./authentication/login.php");
} ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GameStop</title>
  <!-- Styling Css -->
  <!-- <link rel="stylesheet" href="../assets/css/index.css"> -->
  <!-- To import icons from awsomefonts -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

<body>

  <?php include '../layouts/nav-bar.php'; ?>

  <?php
  // include '../layouts/carousel.php';
  ?>

  <?php
  include '../layouts/card.php';
  ?>


  <?php
  include '../layouts/footer.php';
  ?>
</body>

</html