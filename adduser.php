<!doctype html>
<html lang="en">
  <head>
    <title>Add user</title>
    <?php require "adminheader.php"; ?>
  </head>
  <body>
  <section class="colum-section">
  <div class="container my-3 text-center">
    <h2>Add user</h2>
  </div>
  </section>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 visible-lg"></div>
            <div class="col-lg-4">
            <form action="actionFile.php" method="post">
                <div class="form-group">
                    <label>Fullname</label>
                    <input class="form-control" type="text" name="fullname">
                </div>
                <div class="form-group">
                    <label>Account number</label>
                    <input class="form-control" type="text" name="account_number">
                </div>
                <div class="form-group">
                    <label>Phone number</label>
                    <input class="form-control" type="text" name="phone_number">
                </div>
                <div class="form-group">
                    <label>Email Address</label>
                    <input class="form-control" type="email" name="email">
                </div>
                <div class="form-group">
                    <label>Birthday</label>
                    <input class="form-control" type="date" name="birthday">
                </div>
                <div class="form-group">
                    <label>Symptom number</label>
                    <input class="form-control" type="number" name="symptom_number">
                </div>
                <div class="text-center">
                    <button class="btn bg-dark text-white text-center" type="submit" name="register">Register</button>
                </div>
            </form>
            </div>
            <div class="col-lg-4 visible-lg"></div>
        </div>
    </div>
  </body>
</html>