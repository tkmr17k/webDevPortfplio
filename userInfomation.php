<?php 
    session_start();
    require 'classes/SQLstatements.php';
    if(!isset($_SESSION['admin_id'])) {
      echo "<script>window.location.href='loginAdmin.php'</script>";
    }
    ini_set("display_errors", 1);
    error_reporting(E_ALL);
    $user_id = $_GET['user_id'];
    $users = new User;
    $row = $users->getUserInfomation($user_id);
    
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Edit reservation</title>
    <?php require "adminheader.php"; ?>
  </head>
  <body>
  <section class="colum-section">
  <div class="container mt-5">
      <h2 class="text-center">user infomation</h2>
      <div class="row">
          <div class="col-lg-3 visible-lg"></div>
          <div class="col-lg-6 visible-lg">
            <table class="table">
                <tr>
                    <th>account_number</th>
                    <th><?php echo $row['account_number']; ?></th>
                </tr>
                <tr>
                    <th>name</th>
                    <th><?php echo $row['fullname']; ?></th>
                </tr>
                <tr>
                    <th>phonenumber</th>
                    <th><?php echo $row['phone_number']; ?></th>
                </tr>
                <tr>
                    <th>email</th>
                    <th><?php echo $row['email']; ?></th>
                </tr>
                <tr>
                    <th>birthaday</th>
                    <th><?php echo $row['birthday']; ?></th>
                </tr>
                <tr>
                    <th>symptom</th>
                    <th><?php echo $row['symptom_detail']; ?></th>
                </tr>
            </table>
          </div>
          <div class="col-lg-3 visible-lg"></div>
    </div>
  </body>
</html>