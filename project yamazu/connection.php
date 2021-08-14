
<?php
//$conn= mysqli_connect('localhost','root','','housing system');
//check for connection
//if(!$conn){
    //echo 'connection error:'. mysqli_connect_error();

//}
//else{
    //echo 'your database connected successfully';
//}
///if($_SERVER['REQUEST_METHOD']=="POST")
//{
  // $fname=$_POST['txtfname'];
 // $lname=$_POST['txtlname'];
 // $Email=$_POST['txtEmail'];
 // $password=$_POST['txtpassword'];
   //$conpassword=$_POST['confpassword'];
  //$sql="INSERT INTO signup(FirstName,lname,Email,passwords, confpassword) values ('$fname','$lname','$Email','$password',' $conpassword')";
//if (preg_match("/^[a-zA-Z]*$/", $fname) and preg_match("/^[a-zA-Z]*$/",$lname)  and $_POST["txtpassword"] ===$_POST["confpassword"]) {
   // success!
   // mysqli_query($conn,$sql);
    //header("location:uplading.html");
//}
  //else {
   // echo 'not done';
 // }
//}
$conn= mysqli_connect('localhost','root','','housing system');
//check for connection
if(!$conn){
  die("connection failed");
}
else{
echo 'your database connected successfully';
  }
?>