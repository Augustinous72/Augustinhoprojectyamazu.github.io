<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Responsive Navbar</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleAdimini2.css">
    
  </head>
  <style>
    /* Dropdown Button */
.dropbtn {
  background-color: #0082e6;
  float: right;
  color: white;
  padding: 12px;
  font-size: 16px;
  border: none;
  border-radius:12px;
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
  position: relative;
  display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #ddd;}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {display: block;}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {background-color: #3e8e41;}
    </style>
  <body >

    <nav>
      <input type="checkbox" id="check">
      <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>
      </label>
      <label class="logo" >Augustinho</label>
      <ul>
  
        <li><a class="active" href="best home.php">Home</a></li>
        <li><a href="action_contact.php">Feedback</a></li>
    
        <div class="dropdown">
  <button class="dropbtn">My Account</button>
  <div class="dropdown-content">
     <a href="transparentloginAdimin.php">Admin</a>
     <a href="logout.php">Logout</a>
    
</div>
       
      </ul>
    </nav>
    <section style="background-image: url('bg.jpg');">
  
<h1></p><br><br><br>
<div class="dropdown">
  <button class="dropbtn">Manage Posts</button>
  <div class="dropdown-content">
  <a href="action_east.php">East Post</a>
  <a href="action_west.php">West Post</a>
  <a href="action_nouth.php">Nourth Post</a>
  <a href="action_kigali.php">kigali Post</a>
  <a href="action_contact.php">Feedback </a>
  <a href="action_south.php">South Post</a>
  <a href="action_users.php">users</a>
  </div>
</div>
<h1></p>
<div class="dropdown" style="float:right; margin-right:80px;">
  <button class="dropbtn">Upload Houses</button>
  <div class="dropdown-content">
     <a href="upload_kigali.php">Upload_kigali</a>
     <a href="upload_East.php">Upload_East</a>
     <a href="upload_west.php">Upload_West</a>
     <a href="upload_Nouth.php">Upload_Nouth</a>
     <a href="upload_south.php">Upload_South</a>
  </div>
</div>
 </section>
  </body>
</html>
