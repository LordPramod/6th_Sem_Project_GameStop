<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css?v=1" />
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/css/admin-css/dashboard.css">
</head>

<body>
    <nav class="navbar navbar-light bg-dark">
        <div class="container-fluid text-white">
            <a href="./dashboard.php" class="navbar-brand text-white">
                <h1>Admin Panel</h1>
            </a>
            <span>
                <i class="fa fa-user-shield"></i>
                Hello, | <?php
                            session_start();
                            echo $_SESSION['name'] . " " . " "; ?>
                <i class="fa fa-sign-out-alt"></i>
                <a href="../logout.php" class="text-decoration-none text-white">Logout</a> |
                <a href="" class="text-decoration-none text-white">Userpanel</a>
            </span>
        </div>
    </nav>
    <!-- <div class="text-center" id="dashboard-heading">
        <h2> Dashboard </h2>
    </div>
    <div class="col-md-6 text-center m-auto" id="admin-menu">
        <a href="./product/index.php" class="text-decoration-none  fs-4 fw-bold px-5">Add Product</a>
        <a href="" class="text-decoration-none fs-4 fw-bold px-5">Add User</a>
    </div> -->
    <div id="mySidenav" class="sidenav">
        <a href="./homepage.php" class="icon-a"><i class="fa fa-dashboard icons"></i> &nbsp;&nbsp;Dashboard</a>
        <a href="./orders.php" class="icon-a"><i class="fa fa-shopping-bag icons"></i> &nbsp;&nbsp;Orders</a>
        <a href="./products.php" class="icon-a"><i class="fa fa-tasks icons"></i> &nbsp;&nbsp;Products</a>
        <a href="./viewaccounts.php" class="icon-a"><i class="fa fa-user icons"></i> &nbsp;&nbsp;Accounts</a>
        <a href="#" class="icon-a"><i class="fa fa-list-alt icons"></i> &nbsp;&nbsp;Tasks</a>
        <a href="../../layouts/category.php" class="icon-a"><i class="fa fa-list-alt icons"></i>
            &nbsp;&nbsp;Category</a>
        <!-- <a href="#" class="icon-a"><i class="fa fa-list-alt icons"></i> &nbsp;&nbsp;Category</a> -->
    </div>


</body>

</html>