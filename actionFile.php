<?php
    session_start();
    require "classes/SQLstatements.php";
    ini_set("display_errors", 1);
    error_reporting(E_ALL);

    $user = new User;
    
    //adduser
    if(isset($_POST['register'])) {
        $fullname = $_POST['fullname'];
        $accountnum = $_POST['account_number'];
        $phonenum = $_POST['phone_number'];
        $email = $_POST['email'];
        $birthday = $_POST['birthday'];
        $symptomnum = $_POST['symptom_number'];
       
        $user->addUser($fullname,$accountnum,$phonenum,$email,$birthday,$symptomnum);

    } elseif(isset($_POST['loginuser'])) {
        $account = $_POST['account_number'];
        $phone = $_POST['phone_number'];

        $login = $user->loginUser($account,$phone);

    } elseif(isset($_POST['loginhome'])) {
        $account = $_POST['account_number'];
        $phone = $_POST['phone_number'];

        $login = $user->loginUserhome($account,$phone);

    } elseif(isset($_POST['loginadmin'])) {
        $username = $_POST['username'];
        $pass = $_POST['pass'];

        $login = $user->loginAdmin($username,$pass);

        // if($login) {
        //     $_SESSION['login_id']=$login;
        //     // echo "<script>window.location.href='displayall.php'</script>";
        //     header("Location: displayall.php");
        // }else {
        //     echo "INVALID USERNAME AND PASSWORD";
        //     // echo "<script>window.location.href='login.php'</script>";
        // }
    } elseif(isset($_POST['save'])) {
        $itemname = $_POST['itemname'];
        $unitprice = $_POST['unitprice'];
        $quantity = $_POST['quantity'];

        $user->createItem($itemname,$unitprice,$quantity);

    }elseif(isset($_POST['update'])) {
        $id = $_POST['user_id'];
        $fullname = $_POST['fullname'];
        $accountnum = $_POST['account_number'];
        $phonenum = $_POST['phone_number'];
        $email = $_POST['email'];
        $birthday = $_POST['birthday'];
        $symptomnum = $_POST['symptom_number'];

        $user->updateUser($id,$fullname,$accountnum,$phonenum,$email,$birthday,$symptomnum);

    } elseif(isset($_POST['data_chose'])) {
        $date_schedule = $_POST['date_schedule'];
        
        $user->selectTime($date_schedule);

    } elseif(isset($_POST['reservation'])) {
        $date_schedule = $_POST['date_schedule'];
        $time_schedule = $_POST['time_schedule'];
        $accountnum = $_POST['account_number'];

        $user->confirmReservation($date_schedule,$time_schedule,$account_num);
    }
    
    
    
    
    
    // elseif(isset($_POST['date_schedule'])) {
    //     $date_schedule = $_POST['date_schedule'];

    //     $user->selectTime($date_schedule);
    // }

    
    //delete the date
    elseif($_GET['actiontype'] == 'delete') {
        $id = $_GET['id'];
        $user->deleteUser($id);
    }

    elseif($_GET['actiontype'] == 'deletereserv') {
        $id = $_GET['id'];
        $user->deleteReservation($id);
    }



?>