<?php 
    session_start();
    require 'classes/SQLstatements.php';
    ini_set("display_errors", 1);
    error_reporting(E_ALL);
    $users = new User;
    $result = $users->getUsers();
?>

<!doctype html>
<html lang="en">
  <head>
    <title>Display all</title>
    <?php require "adminheader.php"; ?>
  </head>
  <body>
    <div class="container mt-5">
    <table class="table">
        <thead>
            <th>User ID</th>
            <th>Username</th>
            <th>Account number</th>
            <th>Phone number</th>
            <th>Email</th>
            <th>Birthday</th>
            <th>Symptom</th>
            <th>Action</th>
        </thead>
        <tbody>
            <?php
                // echo $_SESSION["user_id"];
                foreach($result as $key => $row) {
                    // $rows = $result->fetch_assoc();
                    $id = $row["user_id"];
                    echo "<tr>";
                        echo "<td>".$row['user_id']."</td>";
                        echo "<td>".$row['fullname']."</td>";
                        echo "<td>".$row['account_number']."</td>";
                        echo "<td>".$row['phone_number']."</td>";
                        echo "<td>".$row['email']."</td>";
                        echo "<td>".$row['birthday']."</td>";
                        echo "<td>".$row['symptom_number']."</td>";
                        echo "<td><a href='editUser.php?id=$id' class='btn btn-info btn-sm'>Edit</a>
                        <a href='actionFile.php?actiontype=delete&id=$id' class='btn btn-danger btn-sm'>Delete</a></td>";
                    echo "</tr>";
                }
            ?>
        </tbody>
        </table>
    </div>
  </body>
</html>