


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="transparentlogin.css">
  </head>
  <body>
<div class="login-box">
    
<form name="input" action="transparentloginAdimin.php" method="POST">
          
  <h1>Login</h1>
  <div class="textbox">
    <i class="fas fa-user"></i>
    <input type="text" name="username"  placeholder="Username">
  </div>

  <div class="textbox">
    <i class="fas fa-lock"></i>
    <input type="password" name="password" placeholder="Password">
  </div>
  <input type="submit" name="login" value="Log In">
        </form>
</div>
  </body>
</html>

<?php
$usr = "Augustinous72@gmail.com";
$psw = "A7u2gustinho72";
if(isset($_POST['login'])){
$username = $_POST['username'];
$password = $_POST['password'];
if (strcmp($username,$usr)==0 && strcmp($password, $psw)==0) {
   header( 'location:adimini2.php');
}else {
    echo "incorrect login";
}}
?>
