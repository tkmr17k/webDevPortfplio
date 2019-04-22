<?php 
    session_start();
    require 'classes/SQLstatements.php';
    if(!isset($_SESSION['admin_id'])) {
      echo "<script>window.location.href='loginAdmin.php'</script>";
    }
    ini_set("display_errors", 1);
    error_reporting(E_ALL);
    $users = new User;
    $result = $users->getReservation();
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Edit reservation</title>
    <?php require "adminheader.php"; ?>
  </head>
  <body>
  <div class="container mt-5">
    <table class="table">
      <thead>
            <th>Date</th>
            <th>Time</th>
            <th>User_id</th>
            <th>Action</th>
        </thead>
        <tbody>
            <?php
                // echo $_SESSION["user_id"];
                foreach($result as $key => $row) {
                    // $rows = $result->fetch_assoc();
                    $id = $row["schedule_id"];
                    $user_id = $row["user_id"];
                    echo "<tr>";
                        echo "<td>".$row['date']."</td>";
                        echo "<td>".$row['time']."</td>";
                        echo "<td><a href='userInfomation.php?user_id=$user_id'>".$row['user_id']."</a></td>";
                        echo "<td><a href='editResevation.php?id=$id' class='btn btn-info btn-sm'>Edit</a>
                        <a href='actionFile.php?actiontype=deletereserv&id=$id' class='btn btn-danger btn-sm'>Delete</a></td>";
                    echo "</tr>";
                }
                
            ?>
        </tbody>
        </table>
    </div>
  </body>
</html>