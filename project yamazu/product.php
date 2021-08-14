<?php
include 'connection.php';

?>




<?php
include 'connection.php';

?>
<?php
$sql='SELECT product_id,serial_no,product_name,brand,category,price,manufacturer,filename FROM  product';

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
<head>
    <link rel="stylesheet" href="social.css">
    <link rel="stylesheet" href="button.css">
    <link rel="stylesheet" href="gridhome.css">
    <link rel="stylesheet" href="search.css">
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="footter.css">
    <script src="https://kit.fontawesome.com/07796c0bdb.js" crossorigin="anonymous"></script>
<title>
</title>
</head>
<body>
    <div class="topnav">
    <nav style="font-size: xx-large;text-decoration: none;">
        <ul class="text-alg" style="background-color: rgb(14, 59, 80);">
            <input type="text" placeholder="Search...">
            <a href="Home.php">Home</a>
            <a  href="product.php">Products</a>
            <a  href="#">Profile</a>
            <a href="register.php">Sign_Up</a>
                     <a href="Login.php">Login</a>
                
    </ul>
    </nav>
</div>
<div class="grd-container">
    <div class="grd-item"> <img src="iphone7p.jpg"> <br/>
       <p> <b>Specifications</b><br/>
        Name:iPhone 7Plus<br/>
        Brand:iPhone <br/>
        Ram:4gb <br/>
        Internal storage:128gb <br/>
        camera: 12MP Real ,8MP Self <br/>
       <b> Price:RWF 280000</b> <br/> </p>
        <a href="payment.php" onmouseover="mousover1(this)" onmouseout="mousout1(this)">BUY</a></div>
    <div class="grd-item"><img src="iphone7.jpg">
        <p> <b>Specifications</b><br/>
            Name:iPhone 7 <br/>
            Brand:iPhone <br/>
            Ram:3gb <br/>
            Internal storage:128gb <br/>
            camera: 12MP Real ,8MP Self <br/>
       <b> Price:RWF 180000</b> <br/>  </p>
            <a href="payment.php" onmouseover="mousover1(this)" onmouseout="mousout1(this)">BUY</a></div>
   <div class="grd-item"><img src="iphone11p.jpg">
    <p> <b>Specifications</b><br/>
        Name:iPhone 11 <br/>
        Brand:iPhone <br/>
        Ram:6gb <br/>
        Internal storage:128gb <br/>
        camera: 3X 12MP Real ,8MP Self <br/>
       <b> Price:RWF 800000</b> <br/>  </p>
        <a href="payment.php" onmouseover="mousover1(this)" onmouseout="mousout1(this)">BUY</a> </div> 
  </div>
  <div class="grd-container">
    <div class="grd-item"> <img src="hp1.jpg"> <br/>
       <p> <b>Specifications</b><br/>
        Name:Hp ProBook<br/>
        Ram:4gb <br/>
        HDD:1TB <br/>
        Intel core i7 <br/>
       <b> Price:RWF 380000</b> <br/> </p>
        <a href="payment.php" onmouseover="mousover1(this)" onmouseout="mousout1(this)">BUY</a></div>
    <div class="grd-item"><img src="bat1.jpg">
        <p> <b>Specifications</b><br/>
            Capacity :5200mAh (58Wh) * Up to 500 charge CYCLES over the life of the battery * Plug and Play * Li-ion 6 Cell Battery * 100% OEM Compatible ...
       <b> Price:RWF 30000</b> <br/>  </p>
            <a href="payment.php" onmouseover="mousover1(this)" onmouseout="mousout1(this)">BUY</a></div>
   <div class="grd-item"><img src="leno1.jpg">
    <p> <b>Specifications</b><br/>
       
Lenovo ThinkPad E14 Intel Core i3 10th Gen 14" (35.56cms) Full HD Thin and Light Laptop (4GB RAM/ 1TB HDD/ Windows 10 <br/>
       <b> Price:RWF 400000</b> <br/>  </p>
        <a href="payment.php" onmouseover="mousover1(this)" onmouseout="mousout1(this)">BUY</a> </div> 

        </div> 
        <div class="grd-container">

        <?php foreach($dsply as $dsply): ?> 
        <div class="grd-item"> <img src="<?php echo htmlspecialchars($dsply['filename'])?>" > <br/>
        <p> <b>Specifications</b><br/>
        <?php echo htmlspecialchars($dsply['product_name'])?> <br>
        <b> Price: <?php echo htmlspecialchars($dsply['price'])?> RWF </b>
        </p>
        <a href="payment.php" onmouseover="mousover1(this)" onmouseout="mousout1(this)">BUY</a>
        </div>                
     <?php endforeach; ?>
</div>
<br> <br> <br> <br> <br> <br> <br> <br> 
  <div class="footer-basic">
    <footer>
        <div class="social "><a href="https://www.instagram.com/abdulkarim_bz/"><i class="icon ion-social-instagram"></i></a>
            <a href="https://www.linkedin.com/in/bazambanza-abdulkarim-a801b1187/"><i class="icon ion-social-linkedin"></i></a>
            <a href="https://twitter.com/bzkarim4"><i class="icon ion-social-twitter"></i></a>
            <a href="https://www.facebook.com/bazambanza.abdulkarimu"><i class="icon ion-social-facebook"></i></a></div>
        <ul class="list-inline">
            <li class="list-inline-item"><a href="home.php">Home</a></li>
            <li class="list-inline-item"><a href="product.php">Products</a></li>
            <li class="list-inline-item">Contact:+250780514840</li>
            <li class="list-inline-item"><a href="#">About</a></li>
            <li class="list-inline-item"><a href="#">Terms</a></li>
            <li class="list-inline-item"><a href="#">Privacy Policy</a></li>
        </ul>
        <p class="copyright">UNIQUE ELC SHOP &copy 2021 </p>
    </footer>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
</body>
</html>