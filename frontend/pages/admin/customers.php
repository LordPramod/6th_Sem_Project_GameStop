<?php
session_start();
if (!isset($_SESSION['name'])) {
    header("location:../authentication/login.php");
}
?>
<?php
include '../../../backend/config/connection.php';
include './dashboard.php';
// session_start();
$stmt = "SELECT * FROM user_info  where usertype = 'user'";
$response = mysqli_query($connect, $stmt);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../assets//css/bootstrap.min.css">
    <style>
        .table-container table {
            margin-top: 0px;
            margin-left: 300px;
            width: 1218px;

        }
    </style>
</head>

<body>
    <div class="table-container">
        <table class="table table-dark table-striped">
            <thead style="background-color: crimson;">
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Action</th>
            </thead>
            <tbody>
                <?php
                while ($row = mysqli_fetch_assoc($response)) { ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><a href="#">Update</a></td>
                        <td><a href="./user-delete.php?id=<?php echo $row['id']; ?>">Delete</a></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>

    </div>
</body>

</html>