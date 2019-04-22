<?php
    require_once "classes/SQLstatements.php";
    $id = $_GET['id'];
    ini_set("display_errors", 1);
    error_reporting(E_ALL);
    $user = new User;
    $row = $user->getSpecificReservation($id);
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Edit Reservation</title>
    <?php require "adminheader.php"; ?>
  </head>
  <body>
    <section class="colum-section">
    <div class="container text-center my-3">
        <h2>Edit Reservation</h2>
    </div>
     <div class="container">
        <div class="row">
            <div class="col-lg-4 visible-lg"></div>
            <div class="col-lg-4">
                <form action="actionFile.php" method="post">
                    <div class="form-group">
                        <label>Date</label>
                        <input type="text" name="fullname" class="form-control" value="<?php echo $row['fullname']; ?>">
                    </div>
                    <div class="form-group">
                        <label>Time</label>
                        <input type="text" name="account_number" class="form-control" value="<?php echo $row['account_number'] ?>">
                    </div>
                    <div class="text-center">
                        <input type="hidden" name="user_id" value="<?php echo $schedule_id; ?>">
                        <button class="btn bg-dark text-white" type="submit" name="update">Edit</button>
                    </div>
                </form>
            </div>
            <div class="col-lg-4 visible-lg"></div>
        </div>
     </div>
  </body>
</html>