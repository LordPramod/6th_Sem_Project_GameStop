<?php
include '../../../backend/config/connection.php';
include './dashboard.php';
// session_start();
$stmt = "SELECT * FROM user_info ";
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
        .container {
            /* border: 8px solid red; */
            margin-top: 20px;
            margin-left: 200px;
            display: flex;
            flex-wrap: wrap;
            width: 1300px;
        }

        .content-container {
            display: flex;
        }

        .box-container {

            /* border: 4px solid green; */
            width: 355px;
            height: 200px;
            background-color: #111111;
            border-radius: 10px;
            margin-right: 10px;

        }

        .box-container:hover {
            background-color: crimson;
        }

        .box-container h5 {
            text-align: center;
            color: #FFFFFF;
        }



        .content-container img {
            margin-top: 40px;
            margin-left: 40px;
            height: 50px;
            filter: brightness(0) invert(1);
        }

        .detail-container {
            margin-left: 20px;
            color: #FFFFFF;
            padding: 20px 0px;
        }

        .detail-container h6 {
            margin-bottom: 10px;
        }

        .detail-container a {
            color: #FFFFFF;
            background-color: #111111;
            margin-left: 120px;
            padding: 4px;
            border-radius: 5px;
        }



        .detail-container input {
            color: #FFFFFF;

        }
    </style>
</head>

<body>
    <div class="container">
        <?php while ($row = mysqli_fetch_assoc($response)) { ?>
            <div class="box-container">
                <h5>User Info</h5>
                <div class="content-container">

                    <img src="../../assets/images/userlogo.png" alt="User-Account">
                    <div class="detail-container">

                        <h6>Name <?php echo $row['name']; ?></h6>
                        <h6>Email : <?php echo $row['email']; ?></h6>
                        <h6>Usertype : <?php echo strtoupper($row['usertype']); ?></h6>
                        <a href="./user-delete.php?id=<?php echo $row['id']; ?>"><input type="button" class="btn text-white" value="Delete"></a>
                    </div>
                </div>

            </div>

        <?php } ?>


    </div>

</body>

</html>