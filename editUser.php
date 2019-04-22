<?php
    require_once "classes/SQLstatements.php";
    $id = $_GET['id'];
    ini_set("display_errors", 1);
    error_reporting(E_ALL);
    $user = new User;
    $row = $user->getSpecificUser($id);
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Edit User</title>
    <?php require "adminheader.php"; ?>
  </head>
  <body>
    <div class="container text-center my-3">
        <h2>Edit User</h2>
    </div>
     <div class="container">
        <div class="row">
            <div class="col-lg-4 visible-lg"></div>
            <div class="col-lg-4">
                <form action="actionFile.php" method="post">
                    <div class="form-group">
                        <label>Fullname</label>
                        <input type="text" name="fullname" class="form-control" value="<?php echo $row['fullname']; ?>">
                    </div>
                    <div class="form-group">
                        <label>Accountnumber</label>
                        <input type="text" name="account_number" class="form-control" value="<?php echo $row['account_number'] ?>">
                    </div>
                    <div class="form-group">
                        <label>Phonenumber</label>
                        <input type="number" name="phone_number" class="form-control" value="<?php echo $row['phone_number'] ?>">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control" value="<?php echo $row['email'] ?>">
                    </div>
                    <div class="form-group">
                        <label>Birthday</label>
                        <input type="date" name="birthday" class="form-control" value="<?php echo $row['birthday'] ?>">
                    </div>
                    <div class="form-group">
                        <label>Symptom</label>
                        <input type="number" name="symptom_number" class="form-control" value="<?php echo $row['symptom_number'] ?>">
                    </div>
                    <div class="text-center">
                        <input type="hidden" name="user_id" value="<?php echo $id; ?>">
                        <button class="btn bg-dark text-white" type="submit" name="update">Edit</button>
                    </div>
                </form>
            </div>
            <div class="col-lg-4 visible-lg"></div>
        </div>
     </div>
  </body>
</html>