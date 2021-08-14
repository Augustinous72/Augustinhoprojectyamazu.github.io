<?php
$conn= mysqli_connect('localhost','root','','housing system');
//check for connection
if(!$conn){
    echo 'connection error:'. mysqli_connect_error();

}
else{
   
}
if(isset($_POST['Submit']))
{
  $firstname=$_POST['txtfname'];
  $lastname=$_POST['txtlname'];
  $email=$_POST['txtEmail'];
  $password=$_POST['txtpassword'];
   $conpassword=$_POST['confpassword'];
  $sql="INSERT INTO signup(FirstName,	LastName	,Email, Passwords,confpassword	) values ('$firstname','$lastname','$email','$password',' $conpassword')";
if ( preg_match("/^[a-zA-Z]*$/",$firstname) and preg_match("/^[a-zA-Z]*$/",$lastname)  and $_POST["txtpassword"] === $_POST["confpassword"]) {
   // success!
    mysqli_query($conn,$sql);
   header("Location: logintest.php");
echo 'your account has been created succssfully';

}else{
  echo 'note yet!!!!';
  ini_set('display_errors', 1);
}
}
/*/retriving data from data base
$sql = "SELECT id, FirstName, LastName,	Email,Passwords,confpassword FROM signup";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Name: " . $row["FirstName"]. " " . $row["LastName"]. " ". $row["Email"]." ". $row["Passwords"]." ". $row["confpassword"]."<br>";
  }
} else {
  echo "0 results";
}*/
$conn->close();

?>

<!DOCTYPE html>
<html>
  <head>
    <title>T| By Code Info</title>
    <link rel="stylesheet" href="project css/logintest.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap"
      rel="stylesheet"/>
    </head>
  <nav class="navbar background">
        <ul class="nav-list">
            <div class="logo"><a href="best home.html"><img src="pics/Augustinho_log.jpg"></a></div>
</ul>
  
</nav>
  <body>

    <div class="signup-box">
    <form action="sinup.php" method="POST" auto_complete="off">
      <h1><strong>Sign Up</strong></h1>
      <h4>It's free and only takes a minute</h4>
      <form>
        <label>First Name</label>
        <input type="text" name="txtfname"  placeholder=""required />
       
        <label>Last Name</label>
        <input type="text" name="txtlname"  placeholder="" required />
    <label>Email</label>
        <input type="email" name="txtEmail" placeholder=""required  />
        
        <label>Password</label>
        <input type="password" name="txtpassword"  placeholder="" required />
        
        <label>Confirm Password</label>
        <input type="password" name="confpassword"  placeholder="" required />
       
          <button type="submit" name="Submit" value="Sign Up"class="sb">Sign Up<br>
     </button>
        
      </form><br> <br> <br> <br> <br> <br> <br> <br> <br> <br>

      
    </div>
    <p class="para-2">
      Already have an account? <a href="logintest.php">Login here</a>
    </p>
    <div class="footer-dark">
      <div class="rowfooter">
        <div class="columnfooter">
          <center> <h1>Augustinho Media group</h1></center>
        <h2>Reach to our social Medias</h2>
            <a href="https://www.facebook.com/ketty.augustinemugisha/" class="fa fa-facebook"></a>  
            <a href="https://twitter.com/AugustinhoGroup" class="fa fa-twitter"></a>   
            <a href="https://www.linkedin.com/in/nshimiimana-augustine-b76b51187/detail/contact-info/" class="fa fa-linkedin"></a> 
            <a href="#" class="fa fa-instagram"></a></center>
            <a href="#" class="fa fa-whatsapp"></a> 
        </div>
          <div class="columnfooter">
                          <ul type="none">
                              <h2>SERVICES</h2>
                              <li><a href="">Advertisement</a></li>
                              <li><a href="../files/party">Booking </a></li>
                              <li><a href="../files/wedding.html">Web Development</a></li>
                          </ul>
          </div>
          <div class="columnfooter">
            <ul type="none">
                <h2>PAGES OF INTEREST</h2>
                <li><a href="../files/support.html">House Rent</a></li>
                <li><a href="../files/map.html">House buy</a></li>
            </ul>
    </div>
          <div class="columnfooter">
              <ul type="none">

                  <h2>ABOUT</h2>
                  <li><a href="">Augustinho media group</a></li>
                  <li><a href="">Teams</a></li>
                  <li><a href=contact.html">Contact</a></li>
                  <li><a href="">Privacy Policies</a></li>
              </ul>
          </div>
        </div>  
    <p class="copyright">Augustinho © 2021</p>
    </div> 
  </body>
</html>