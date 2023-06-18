<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/checkout.css">
</head>

<body>
    <section class="my-5 py-5">
        <div class="container text-center mt-3 pt-5">

            <h2 class="form-weight-bold">Check Out</h2>
            <hr class="mx-auto">
        </div>
        <div class="mx-auto container">
            <form action="#" method="post" id="checkout-form">
                <div class="form-group checkout-small-element">
                    <label for="">Name</label>
                    <input type="text" class="form-control" name="name" id="checkout-name" placeholder="Name" required>
                </div>
                <div class="form-group checkout-small-element">
                    <label for="">Email</label>
                    <input type="email" class="form-control" name="email" id="checkout-email" placeholder="Email" required>
                </div>
                <div class="form-group checkout-small-element">
                    <label for="">Phone</label>
                    <input type="tel" class="form-control" name="phone" id="checkout-phone" placeholder="Phone" required>
                </div>
                <div class="form-group checkout-small-element">
                    <label for="">city</label>
                    <input type="text" class="form-control" name="city" id="checkout-city" placeholder="City" required>
                </div>
                <div class="form-group checkout-small-element">
                    <label for="">Address</label>
                    <input type="text" class="form-control" name="city" id="checkout-address" placeholder="Address" required>
                </div>
                <div class="form-group checkout-btn-container">
                    <input type="submit" class="btn" id="checkout-btn" value="Check out">
                </div>
            </form>
        </div>

    </section>
</body>

</html>