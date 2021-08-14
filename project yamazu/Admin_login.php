<?php
session_start();
$conn= mysqli_connect('localhost','root','','housing system');
//check for connection
if(!$conn){
  die("connection failed");
}
else{

  }
if($_SERVER["REQUEST_METHOD"] == "POST") {
   // username and password sent from form 
   
   $myusername = mysqli_real_escape_string($conn,$_POST['Username']);
   $mypassword = mysqli_real_escape_string($conn,$_POST['password']); 
   
   $sql = "SELECT * FROM signup WHERE Email = '$myusername' and Passwords = '$mypassword'";
   $result = mysqli_query($conn,$sql);
   $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
//    $active = $row['active'];
   
   $count = mysqli_num_rows($result);
   
   // If result matched $myusername and $mypassword, table row must be 1 row
 
   if($count == 1) {
      $_SESSION['LastName'] = $myusername;
      echo 'done';
      header("location: index.php");
   }else {
      $error = "Your Login Name or Password is invalid";
      echo $error;
   }
}
?>

<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form | By Code Info</title>
    <link rel="stylesheet" href="style.css">
</head>
<style>
body{
    background: peru;
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;

}
.loginbox{
    width: 300px;
    height: 380px;
    background: #1c2833;
    color: white;
    margin: 70px auto;
    border-radius: 10px;
}
.logo{

    width: 100px;
    height:100px;
    position: relative;
    top: -70px;
    left: calc(50% - 50px);

}
h1{
    text-align: center;
    margin-top: -60px;
}

label{

    font-size: 18px;
    display: block;
    margin-left: 20px;
}

input{

    width: 80%;
    margin: 0 0 20px 20px;
}

input[type="text"],input[type="password"]{
    border: none;
    background: transparent;
    border-bottom: 1px solid #fff;
    height: 40px;
    outline: none;
    color: white;
    font-size: 16px;
}

input[type="submit"]{
    border: none;
    outline: none;
    height: 40px;
    border-radius: 20px;
    background: #fb2525;
    color: white;
    font-size: 20px;
    cursor: pointer;
}

a{
    text-decoration: none;
    color: white;
    margin-left: 30%;
}

input[type="submit"]:hover{
    background: blueviolet;
}
.button {
  background-color: #4CAF50; /* Green */
  border radius: 15px;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

</style>

<button class="button"><a href="best home.php">Home</a></button>

<body>

    <div class="loginbox">
        <img class="logo" src="pics/Augustinho_log.jpg">
     
        <h1>Welcome to Admin log In</h1>
        <form method="POST" action="Admin_login.php">
            <label>Username</label>
            <input type="text" name="Username" placeholder="Enter Username">
            <label>Password</label>
            <input type="password"name="password" placeholder="Enter Password">
            <input type="submit" name="submit" value="Sign In">
        </form>
        <a href="sinup.php">No account yet? Sign Up</a>
        
    </div>
</body>
</html>