<?php
    session_start();
    require "classes/SQLstatements.php";
    ini_set("display_errors", 1);
    error_reporting(E_ALL);

    $user = new User;
    
    //adduser
    if(isset($_POST['register'])) {
        $name = $_POST['name'];
        $address = $_POST['address'];
        $number = $_POST['number'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        $conpass = $_POST['conpass'];
       
        $user->createUser($name,$address,$number,$email,$pass,$conpass);

    } elseif(isset($_POST['loginuser'])) {
        $account = $_POST['account'];
        $phone = $_POST['phone'];

        $login = $user->loginUser($account,$phone);
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
        $id = $_POST['id'];
        $fullname = $_POST['fullname'];
        $accountnum = $_POST['accountnum'];
        $phonenum = $_POST['phonenum'];
        $email = $_POST['email'];
        $birthday = $_POST['birthday'];
        $symptomnum = $_POST['symptomnum'];

        $user->updateUser($id,$fullname,$accountnum,$phonenum,$email,$birthday,$symptomnum);
    }

?>