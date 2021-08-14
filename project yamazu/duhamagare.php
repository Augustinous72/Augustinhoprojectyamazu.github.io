<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form | By Code Info</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">  
</head>
<?php include 'navigation bar.php';?>
<style>

body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  padding: 50px;
  text-align: center;
  background-color: #474e5d;
  color: white;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}

/* Style all font awesome icons */
.fa {
  padding: 20px;
  font-size: 30px;
  width: 50px;
  text-align: center;
  text-decoration: none;
}

/* Add a hover effect if you want */
.fa:hover {
  opacity: 0.7;
}

/* Set a specific color for each brand */

/* Facebook */
.fa-facebook {
  background: none;
  color: white;
}

/* Twitter */
.fa-twitter {
  background: none;
  color: white;
}
/* linkedin*/
.fa-linkedin {
  background: none;
  color: white;
}
/* instagram */
.fa-instagram {
  background: none;
  color: white;
}
/* youtube */
.fa-youtube{
  background: none;
  color: white;
}
/* tiktok */
.fa-tiktok {
  background: none;
  color: white;
}

/* Footer */
.footer-dark{
                padding:3px 0;
                color:#f0f9ff;
                background-color:black;
                font-weight:bold;
                font-family: serif;
              }
              
    .footer-dark h2 {
                margin-top:0;
                margin-bottom:12px;
                font-weight:bold;
                font-size:20px;
              }
              
    .footer-dark ul {
      text-align: left;
                padding:0;
                list-style:none;
                line-height:1.6;
                font-size:14px;
                margin-bottom:0;
                margin-left: 30px;
                margin-right: 30px;
              }
              
    .footer-dark ul a {
                color:inherit;
                text-decoration:none;
                opacity:0.6;
                font-size:20px
                
              }
    .footer-dark ul a:hover {
                opacity:1.3;
              }
    h1
    {
      color:rgb(228, 228, 228);
      padding-top:20px;
      text-align: center;
      opacity: 0.7;
      padding-bottom: 0px;

        }
              
              @media (max-width:767px) {
                .footer-dark .item:not(.social) {
                  text-align:center;
                  padding-bottom:20px;
                }
              }
              .footer-dark  p {
                opacity:0.6;
                margin-bottom:0;
              }
              .footer-dark .copyright {
                text-align:center;
                padding-top:24px;
                opacity:0.5;
                font-size:13px;
                margin-bottom:0;
              }
      .columnfooter {
    text-align:center;
    float: left;
    width: 25%;
    }
    
    /* Clear floats after the columns */
    .rowfooter:after {
      content: " ";
      display: table;
      clear: both;
    } 
    div #newsletter
    {
     background-color: rgb(0, 70, 145); 
     font: size 16px;
     padding:20px;
    }



</style>

<div class="about-section">
  <h1>You May contact us if intrested.</h1>
 <h4>Southern Province</h4>
 <h4>Huye,UR campus</h4>
  <li class="fa fa-phone">+250781345944</li><br>
  <li class="fa fa-phone">+250735233477</li><br>
  <a href="#" class="fa fa-facebook"></a>
  <a href="#" class="fa fa-twitter"></a>
  <a href="#" class="fa fa-linkedin"></a>
  <a href="#" class="fa fa-instagram"></a>
  <a href="#" class="fa fa-youtube"></a>
</div>

<h2 style="text-align:center">Our Services</h2>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="pics/house1.jpg" alt="Jane" style="width:100%">
      <div class="container">
        <h2>House for rent</h2>
       
       
      </div>
    </div>
  </div>

  <div class="row">
  <div class="column">
    <div class="card">
      <img src="pics/house2.jpg" alt="Jane" style="width:100%">
      <div class="container">
        <h2>House For Buy</h2>
       
       
      </div>
    </div>
  </div>


  <div class="row">
  <div class="column">
    <div class="card">
      <img src="pics/house4.jpg" alt="Jane" style="width:100%">
      <div class="container">
        <h2>Weekend Booking</h2>
       
       
      </div>
    </div>
  </div>
  </div>

<footer>
  
<div class="footer-dark" style="margin-top: 0px;">
      <div class="rowfooter">
        <div class="columnfooter">
          <center> <h1>Augustinho Media group</h1></center>
        <h2>Reach to our social Medias</h2>
            <a href="#" class="fa fa-facebook"></a>  
            <a href="#" class="fa fa-twitter"></a>   
            <a href="#" class="fa fa-linkedin"></a>  
            <a href="#" class="fa fa-instagram"></a></center> 
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