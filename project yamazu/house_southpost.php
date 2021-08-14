<?php
$conn= mysqli_connect('localhost','root','','housing system');
//check for connection
if(!$conn){
    echo 'connection error:'. mysqli_connect_error();

}
else{
   
}
?>
<?php include 'navigation bar.php';?>
<?php
$sql='SELECT ID,Phone_Number,HouseAddress,Cost,Details,filenames FROM  house_south';

//$sql= mysql_query("SELECT id,fname,lname,email,sex,age,created_at FROM  users", $conn);
//query for result
$result=mysqli_query($conn,$sql);
//query to fetch results
$dsply=mysqli_fetch_all($result,MYSQLI_ASSOC);
//print_r($login);

/* foreach($dsply as $dsply) { //the 1st login is for table name 
    
echo htmlspecialchars($dsply['id']); //login is that varialble used to fetch data 
echo "<br>";
 echo htmlspecialchars($dsply['fname']); 
 echo "<br>";
 echo htmlspecialchars($dsply['lname']); 
 echo "<br>";
 echo htmlspecialchars($dsply['email']); 
 echo "<br>";
 echo htmlspecialchars($dsply['sex']); 
 echo "<br>";
 echo htmlspecialchars($dsply['age']); 
 echo "<br>";
 echo htmlspecialchars($dsply['created_at']);
    
 }  */
?>




<html>
<style>
body {margin:1px;}

div.polaroid {
  width: 60%;
  background-color: none;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  margin-bottom: 25px;
}

div.container {
  text-align: center;
  padding: 10px 20px;
}
div.polaroid img {
  border: 1px solid #ddd;
  border-radius: 9px;
  padding: 5px;
 height: 40%;
  width: 50%;
  font: left;
}
div.polaroid button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  border-radius: 16px;
}
div.polaroid button a {
    text-decoration: none;
}
 </style>
<link rel="stylesheet" href="footer.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<body>
  

        <?php foreach($dsply as $dsply): ?> 
          
<div class="polaroid"><img src="<?php echo htmlspecialchars($dsply['filenames'])?>"style ="border: 1px solid #ddd;"> <br/>
        <b>Phone:<?php echo htmlspecialchars($dsply['Phone_Number'])?> <br>
        <b>Address: <?php echo htmlspecialchars($dsply['HouseAddress'])?> </b><br/>
        <b> Details: <?php echo htmlspecialchars($dsply['Details'])?> </b><br>
        <b> Cost: <?php echo htmlspecialchars($dsply['Cost'])?> RWF </b><br>
       
        </p>
       <button> <a href="buying details.php" onmouseover="mousover1(this)" onmouseout="mousout1(this)">BUY</a></button>
        </div>                
     <?php endforeach; ?>
        </div>
        </div> 
        </div>
        
<footer>
  
  <div class="footer-dark" style="margin-top: 720px;">
        <div class="rowfooter">
          <div class="columnfooter">
            <h1>Augustinho Media group</h1>
          <h2>Reach to our social Medias</h2>
              <a href="#" class="fa fa-facebook"></a>  
              <a href="#" class="fa fa-twitter"></a>   
              <a href="#" class="fa fa-linkedin"></a>  
              
          </div>
            <div class="columnfooter">
                            <ul type="none">
                                <h2>SERVICES</h2>
                                <li><a href="#">Advertisement</a></li>
                                <li><a href="#">Booking </a></li>
                                <li><a href="#">Web Development</a></li>
                            </ul>
            </div>
            <div class="columnfooter">
              <ul type="none">
                  <h2>PAGES OF INTEREST</h2>
                  <li><a href="#">House Rent</a></li>
                  <li><a href="#">House buy</a></li>
              </ul>
      </div>
            <div class="columnfooter">
                <ul type="none">
                    <h2>ABOUT</h2>
                    <li><a href="">Augustinho media group</a></li>
                    <li><a href="">Teams</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="contact.html">Contact</a></li>
                    <li><a href="">Privacy Policies</a></li>
                </ul>
            </div>
          </div>  
      <p class="copyright">Augustinho © 2021</p>
      </div> 
      </footer>
  
</body>
</html>