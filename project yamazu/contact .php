
<?php
$conn= mysqli_connect('localhost','root','','housing system');
//check for connection
if(!$conn){
    echo 'connection error:'. mysqli_connect_error();

}
else{

}
if(isset($_POST['btnSubmit'])){
$YourName=$_POST['txtName'];
$YourEmail =$_POST['txtEmail'];
$YourPhoneNumber =$_POST['txtPhone'];
$YourMessage =$_POST['txtMsg'];

$sql="INSERT INTO contact (yourname,Email,Phone_Number,messages)
 VALUES('$YourName','$YourEmail','$YourPhoneNumber','$YourMessage')";
 if(mysqli_query($conn,$sql)){
     echo "";
 }
 else{
     echo '<script>
     alert("new record is not add");
     </script>';
 }
}
/*
if(isset($_POST['btnSubmit'])){

   $YourEmail=$_POST['txtEmail'];
  //$YourName=$_POST['txtName'];
  $YourPhoneNumber=$_POST['txtPhone'];
  $YourMessage=$_POST['txtMsg'];

  $sql="INSERT INTO contact(Email,Phone_Number,messages) values ('$YourEmail','$YourPhoneNumber','$YourMessage',)";
  mysqli_query($conn,$sql);

}
*/
mysqli_close($conn);
?>



<!DOCTYPE php>
<php>
  
<head>
<link rel="stylesheet" href="project css/contact.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<script src=""></script>
<script src=""></script>
<!------ 
  Include the above in your HEAD tag ---------->
</head>
<body>
  
  <div class="navbar">
  <div class="dropdown">
    <button class="dropbtn">Menu
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
     <a href="best home.php">Home</a></li></button>
           <li><a href="Home page.php">Rent</a></li>
            <a href="About.php">About Us</a>
        <a href="duhamagare.php">Contact Us</a>
        <a href="logintest.php">Log In</a>
       <a href="sinup.php">Sign UP</a>
  </div> 
</div>
<div class="container contact-form">
<form action="contact .php" method="post">
                <h3>Drop Us a Message</h3>
               <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="txtName" class="form-control" placeholder="YourName " value="" />
                        </div>
                        <div class="form-group">
                            <input type="text" name="txtEmail" class="form-control" placeholder="YourEmail *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="text" name="txtPhone" class="form-control" placeholder="YourPhoneNumber *" value="" />
                        </div>
                       
                    <div class="col-md-6">
                        <div class="form-group">
                            <textarea name="txtMsg" class="form-control" placeholder="YourMessage *" style="width: 100%; height: 150px;"></textarea>
                        </div>
                         <div class="form-group">
                            <input type="submit" name="btnSubmit" class="btnContact" value="SendMessage" />
                        </div>
                    </div>
                    </div>
                </div>
            </form>
</div>

<footer>
<div class="footer-dark">
      <div class="rowfooter">
        <div class="columnfooter">
          <center> <h1>Augustinho Media group</h1></center>
        <h2>Reach to our social Medias</h2>
            <a href="https://www.facebook.com/ketty.augustinemugisha/" class="fa fa-facebook"></a>  
            <a href="https://twitter.com/AugustinhoGroup" class="fa fa-twitter"></a>   
            <a href="https://www.linkedin.com/in/augustinho-media-group-b76b51187/" class="fa fa-linkedin"></a> 
            <a href="#" class="fa fa-instagram"></a></center>
        </div>
          <div class="columnfooter">
                          <ul type="none">
                              <h2>SERVICES</h2>
                              <li><a href="">Advertisement</a></li>
                              <li><a href="../files/party">Booking </a></li>
                              <li><a href="../files/wedding.php">Web Development</a></li>
                          </ul>
          </div>
          <div class="columnfooter">
            <ul type="none">
                <h2>PAGES OF INTEREST</h2>
                <li><a href="../files/support.php">House Rent</a></li>
                <li><a href="../files/map.php">House buy</a></li>
            </ul>
    </div>
          <div class="columnfooter">
              <ul type="none">

                  <h2>ABOUT</h2>
                  <li><a href="About.php">Augustinho media group</a></li>
                  <li><a href="">Teams</a></li>
                  <li><a href="">Contact</a></li>
                  <li><a href="">Privacy Policies</a></li>
              </ul>
          </div>
        </div>  
    <p class="copyright">Augustinho © 2021</p>
    </div> 
    </footer>
  </body>
</php>