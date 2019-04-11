<?php
    require_once "classes/SQLstatement.php";
    $id = $_GET['id'];
    ini_set("display_errors", 1);
    error_reporting(E_ALL);
    $user = new User;
    $row = $user->getSpecificUser($id);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>User management</title>

  <!-- css -->
  <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
  <link href="css/nivo-lightbox.css" rel="stylesheet" />
  <link href="css/nivo-lightbox-theme/default/default.css" rel="stylesheet" type="text/css" />
  <link href="css/owl.carousel.css" rel="stylesheet" media="screen" />
  <link href="css/owl.theme.css" rel="stylesheet" media="screen" />
  <link href="css/flexslider.css" rel="stylesheet" />
  <link href="css/animate.css" rel="stylesheet" />
  <link href="css/style.css" rel="stylesheet">
  <link href="color/default.css" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <!-- =======================================================
    Theme Name: Shuffle
    Theme URL: https://bootstrapmade.com/bootstrap-3-one-page-template-free-shuffle/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
  ======================================================= -->

</head>

  <body id="page-top" data-spy="scroll" data-target=".navbar-custom">
  <!-- Navigation -->
  <div id="navigation">
    <nav class="navbar navbar-custom" role="navigation">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="site-logo">
              <a href="index.html" class="brand">愛＆D歯科</a>
            </div>
          </div>
          <div class="col-md-8">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu"><i class="fa fa-bars"></i></button>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="menu">
              <ul class="nav navbar-nav navbar-right">
                <li class="active"><a href="#intro">Home</a></li>
                <li><a href="userdisplay.php">User</a></li>
                <li><a href="datedisplay.php">Reservation</a></li>
                <li><a href="blogdisplay.php">Blog</a></li>
                <li><a href="logout.php">Logout</a></li>
              </ul>
            </div>
            <!-- /.Navbar-collapse -->

          </div>
        </div>
      </div>
      <!-- /.container -->
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
                        <input type="text" name="accountnum" class="form-control" value="<?php echo $row['accountnum'] ?>">
                    </div>
                    <div class="form-group">
                        <label>Phonenumber</label>
                        <input type="number" name="phonenum" class="form-control" value="<?php echo $row['phonenum'] ?>">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control" value="<?php echo $row['email'] ?>">
                    </div>
                    <div class="form-group">
                        <label>Birthday</label>
                        <input type="number" name="birthday" class="form-control" value="<?php echo $row['birthday'] ?>">
                    </div>
                    <div class="form-group">
                        <label>Symptom</label>
                        <input type="number" name="symptomnum" class="form-control" value="<?php echo $row['symptomnum'] ?>">
                    </div>
                    <div class="text-center">
                        <input type="hidden" name="userid" value="<?php echo $id; ?>">
                        <button class="btn bg-dark text-white" type="submit" name="update">Edit</button>
                    </div>
                </form>
            </div>
            <div class="col-lg-4 visible-lg"></div>
        </div>
     </div>
  </body>
</html>