<!doctype html>
<html lang="en">
  <head>
    <title>Signup</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <div class="container my-3 text-center">
    <h2>Login</h2>
  </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 visible-lg"></div>
            <div class="col-lg-4">
            <form action="actionFile.php" method="post">
                <div class="form-group">
                    <label>Fullname</label>
                    <input class="form-control" type="text" name="name">
                </div>
                <div class="form-group">
                    <label>Address</label>
                    <input class="form-control" type="text" name="address">
                </div>
                <div class="form-group">
                    <label>Number</label>
                    <input class="form-control" type="number" name="number">
                </div>
                <div class="form-group">
                    <label>Email Address</label>
                    <input class="form-control" type="email" name="email">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input class="form-control" type="password" name="pass">
                </div>
                <div class="form-group">
                    <label>ConfirmPassword</label>
                    <input class="form-control" type="password" name="conpass">
                </div>
                <div class="container text-center">
                    <button class="btn bg-dark text-white text-center" type="submit" name="register">Register</button>
                </div>
                </form>
            </div>
            <div class="col-lg-4 visible-lg"></div>
        </div>
    </div>
  </body>
</html>