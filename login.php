<?php
include('config.php');

$msg='';
if(isset($_POST['submit'])){
  $email= $_POST['email'];
  $password= $_POST['password'];

  $select1= "SELECT * FROM `abood` WHERE email ='$email' AND password = '$password'";
  $select_user= mysqli_query($conn,$select1);
  if(mysqli_num_rows($select_user) > 0){
    $row1= mysqli_fetch_assoc($select_user);
    session_start();
    $_SESSION['LOGGED_IN_USER'] = $row1['id'];
    if($row1['role'] == 'user'){
      $_SESSION['user']= $row1['email'];
      $_SESSION['id']= $row1['id'];
      header('location: index.php');
    }
    elseif($row1['role'] == 'admin'){
       $_SESSION['admin']= $row1['email'];
      $_SESSION['id']= $row1['id'];
      header('location: index.php');
    }
    else{
      $msg= 'incorrect email and password!';
    }
  }
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
      <form action="login.php" method="POST">
        <h2>LOGIN</h2>
        <p class="msg"></p>
        

        <div class="textbox">
          <i class="fa-solid fa-envelope"></i>
          <input type="email" placeholder="Enter your email" id="email" name="email" class="form-control" required>
        </div>

        

        <div class="textbox">
          <i class="fa-solid fa-lock"></i>
          <input type="password" id="password" placeholder="Enter your password" name="password" class="form-control" required>
        </div>

        <button class="btn" name="submit">Login Now</button>
        <p>Don't have an Account? <a href="registration.php">Login Now</a></p>

</body>
