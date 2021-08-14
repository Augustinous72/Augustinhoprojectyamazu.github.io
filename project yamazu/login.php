<?php
$conn= mysqli_connect('localhost','root','','housing system');
//check for connection
if(!$conn){
  die("connection failed");
}
else{
echo 'your database connected successfully';
  }
?>
  <?php
session_start();
$conn = mysqli_connect('localhost', 'root', '','housing system');

$email=$_POST['txtEmail'];
$pwd=$_POST['txtpassword'];

if(empty($email) || empty($pwd))
{
  header("Location:logintest.php ?error=empty");
  exit();
}
else
{
    $sql="SELECT* FROM signup WHERE Email='$email';";
    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)<1)
    {
        header("Location:logintest.php ?error=email");
        exit();
    }
    else
    {
        while ($row=mysqli_fetch_assoc($result))
        {
            if($pwd==$row['password'])
            {
                $_SESSION['name']=$row['firstname'];
                header("Location:Home page.php");
                exit();
            }
            else
            {
               header("Location:logintest.php?error=pwd");
               exit();
            }
        }
    }
}
?>
