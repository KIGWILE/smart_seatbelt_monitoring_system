<?php
include('config.php');
session_start();
if(isset($_POST['submit'])){
  $firstName= $_POST['firstName'];
  $lastName= $_POST['lastName'];
  $userName= $_POST['userName'];
  $email= $_POST['email'];
  $password= $_POST['password'];
  $cpassword= $_POST['cpassword'];
  $role= $_POST['role'];

  // if(preg_match('/^(?=.[a-z])(?=.[A-z])(?=.\d)(?=.[!@#$%^&*])[A-Za-z\d!@#$%^&*]{8,}$/', $password)){
    $hashed_password= password_hash($password, PASSWORD_DEFAULT);print_r($_POST);

    $select1= "SELECT * FROM `abood` WHERE email ='$email'";
    $select_user= mysqli_query($conn,$select1);
    if(mysqli_num_rows($select_user) > 0){
      $_SESSION['message'] = "user already exist!";
    }else{
      $insert1= "INSERT INTO `abood`( `firstname`, `lastname`, `username`, `email`, `password`,`role`) VALUES ('$firstName','$lastName','$userName','$email','$hashed_password','$role')";
      mysqli_query($conn,$insert1);
      header('location:login.php');
      exit;
    }
  // }else{
    // $_SESSION['message'] = "Password must be at least 8 characters long, contain at least one uppercase letter, one lowercase letter, one digit, and one special character ";
  // }
  header('Location: ' . $_SERVER['PHP_SELF']);
  exit;
}
?>



<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>smart seatbelt</title>

  
  <!--
  Stacked Template
  https://templatemo.com/tm-505-stacked
  -->
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="apple-touch-icon" href="apple-touch-icon.png">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/bootstrap-theme.min.css">
  <link rel="stylesheet" href="css/registration.css">
  <link rel="stylesheet" href="fontawesome-free-6.7.2-web/css/all.min.css">

  <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
</head>
<body>
</div>
    <div class="form">
      <form action="" method="POST">
        <h2>REGISTRATION</h2>
        <p class="msg">
          <?php 
            if(isset($_SESSION['message'])) {
              echo htmlspecialchars($_SESSION['message']);
              unset($_SESSION['message']); 
            }
          ?>
        </p>
        <div class="textbox">
          <i class="fa-solid fa-user"></i>
          <input type="text" id="firstName" placeholder="Enter your firstName" name="firstName" class="form-control" required>
        </div>

        <div class="textbox">
          <i class="fa-solid fa-user"></i>
          <input type="text" id="lastName" placeholder="Enter your lastName" name="lastName" class="form-control" required>
        </div>

        <div class="textbox">
          <i class="fa-solid fa-user"></i>
          <input type="text" id="userName" placeholder="Enter your userName" name="userName" class="form-control" required>
        </div>

        <div class="textbox">
          <i class="fa-solid fa-envelope"></i>
          <input type="email" placeholder="Enter your email" id="email" name="email" class="form-control" required>
        </div>

        <div class="textbox">
          <select name="role" id="" class="form-control">
            <option value="user">Driver</option>
            <option value="admin">Conductor</option>
          </select>
        </div>  

        <div class="textbox">
          <i class="fa-solid fa-lock"></i>
          <input type="password" id="password" placeholder="Enter your password" name="password" class="form-control" required>
        </div>

        <div class="textbox">
          <i class="fa-solid fa-lock"></i>
          <input type="password" id="cpassword" placeholder="confirm your passwords" name="cpassword" class="form-control" required>
        </div>

        <!-- ,<input type="button" value="submit"> -->

        <button class="btn" name="submit" value="submit">Register Now</button>
        <p>Already have an Account? <a href="login.php">Login Now</a></p>

</body>
