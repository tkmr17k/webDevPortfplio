<?php
    session_start();
    require "classes/SQLstatements.php";
    ini_set("display_errors", 1);
    error_reporting(E_ALL);

    $user = new User;

    $date_schedule = $_POST['date_schedule'];
    $user->selectTime($date_schedule);

    // if(isset($_POST['data_chose'])) {
    //     $date_schedule = $_POST['date_schedule'];
        
    //     $user->selectTime($date_schedule);

    // } elseif(isset($_POST['reservation'])) {
    //     $date_schedule = $_POST['date_schedule'];
    //     $time_schedule = $_POST['time_schedule'];
    //     $accountnum = $_POST['account_number'];

    //     $user->confirmReservation($date_schedule,$time_schedule,$account_num);
    // }


?>
