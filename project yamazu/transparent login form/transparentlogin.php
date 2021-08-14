


<?php
$usr = "admin";
$psw = "password";
if(isset($_POST['login'])){
$username = $_POST['username'];
$password = $_POST['password'];
//$usr == $username && $psw == $password
if ($_SESSION['login']==true || ($_POST['username']=="admin" && $_POST['password']=="password")) {
   header( 'location:adimini2.php');
}else {
    echo "incorrect login";
}}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="transparentlogin.css">
  </head>
  <body>
<div class="login-box">
    
<form name="input" action="best home.php" method="get">
          
  <h1>Login</h1>
  <div class="textbox">
    <i class="fas fa-user"></i>
    <input type="text"  placeholder="Username">
  </div>

  <div class="textbox">
    <i class="fas fa-lock"></i>
    <input type="password"  placeholder="Password">
  </div>
  <input type="submit"name="login" value="Home">
        </form>
</div>
  </body>
</html>
