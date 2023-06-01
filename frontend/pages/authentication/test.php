<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
</head>

<body>
  <div class="container pt-5">
    <h1 class="text-center">Loign Page</h1>

    <div class="row pt-5">
      <div class="col-md-4"></div>
      <div class="col-md-4">
        <form action="test.php" method="post">
          <div class="form-group mb-2">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control mt-2" id="">
          </div>
          <div class="form-group mb-2">
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control mt-2" id="">
          </div>
          <input type="submit" value="Login" name="login" class="btn btn-primary col-12">
        </form>
        <div class="col-md-4"></div>

      </div>
    </div>
  </div>

</body>

</html>