<?php include "../layouts/nav-bar-config.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container {
            margin: 150px 195px;
            box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;

        }


        .image-container {
            margin-top: 40px;
        }

        .image-container img {
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 135px;
        }

        .content-container {
            margin-top: 30px;
            margin-left: 35%;


        }

        .content-container h1 {
            color: crimson;
            font-family: sans-serif;
            font-weight: bolder;
        }

        .content-container p {
            margin-top: 20px;
            margin-left: 3%;

        }

        .container a {}

        .container a button {
            margin-top: 30px;
            margin-left: 15%;
            width: 170px;
            height: 40px;
            border-radius: 5px;
            border: transparent;
            font-size: .90rem;
            color: white;
            background-color: black;

            margin-bottom: 200px;
        }

        .container a :hover {
            background-color: crimson;
            border: transparent;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="image-container">
            <img src="../assets/images/404-tick.png" alt="Order Confirmed">
        </div>
        <div class="content-container">

            <h1>Your order is completed !</h1>
            <p>You can see you order detail from my orders</p>
            <a href="../pages/index.php"><button>Explore more products </button></a>
        </div>

    </div>
</body>

</html>
<?php include "../layouts/footer.php";
?>