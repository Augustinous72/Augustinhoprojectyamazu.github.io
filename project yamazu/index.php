
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script>document.getElementsByTagName("html")[0].className += " js";</script>
  <link rel="stylesheet" href="assets/css/style.css">
  <title>Responsive Sidebar Navigation | CodyHouse</title>
</head>
<body>

  <header class="cd-main-header js-cd-main-header">
    <div class="cd-logo-wrapper">
      <a href="best home.php" class="cd-logo"><img src="pics/Augustinho_log.jpg" alt="Logo"></a>
    </div>
    
    <div class="cd-search js-cd-search">
      <form>
        <input class="reset" type="search" placeholder="Search...">
      </form>
    </div>
  
    <button class="reset cd-nav-trigger js-cd-nav-trigger" aria-label="Toggle menu"><span></span></button>
  
    <ul class="cd-nav__list js-cd-nav__list">
     
      <li class="cd-nav__item"><a href="upload_kigali.php">Upload_kigali</a></li>
        <li class="cd-nav__item"><a href="upload_East.php">Upload_East</a></li>
          <li class="cd-nav__item"><a href="upload_west.php">Upload_West</a></li>
            <li class="cd-nav__item"><a href="upload_Nouth.php">Upload_Nouth</a></li>
              <li class="cd-nav__item"><a href="upload_south.php">Upload_South</a></li>
      <li class="cd-nav__item cd-nav__item--has-children cd-nav__item--account js-cd-item--has-children">
        <a href="#0">
          <img src="assets/img/Aug_profile_pic.jfif" alt="avatar">
          <span>Account</span>
        </a>
    
        <ul class="cd-nav__sub-list">
          <li class="cd-nav__sub-item"><a href="Admin_login.php">My Account</a></li>
          <li class="cd-nav__sub-item"><a href="#0">Edit Account</a></li>
          <li class="cd-nav__sub-item"><a href="logout.php">Logout</a></li>
        </ul>
      </li>
    </ul>
    
  </header> <!-- .cd-main-header -->
  
        
  <main class="cd-main-content">
    <nav class="cd-side-nav js-cd-side-nav">
      <ul class="cd-side__list js-cd-side__list">
   
        <li class="cd-side__label"><span>Main</span></li>
        <li class="cd-side__item cd-side__item--has-children cd-side__item--overview js-cd-item--has-children">
          <a href="#0">action</a>
          
          <ul class="cd-side__sub-list">
            <li class="cd-side__sub-item"><a href="#0">All users</a></li>
            <li class="cd-side__sub-item"><a href="#0">delete users</a></li>
            <li class="cd-side__sub-item"><a href="#0">view users</a></li>
         
         
         
          </ul>
        </li>

      
    
    <li class="cd-side__item cd-side__item--has-children cd-side__item--comments js-cd-item--has-children">
          <a href="#0">Comments</a>
     
          <ul class="cd-side__sub-list">
            <li class="cd-side__sub-item"><a href="action.php">All Comments</a></li>
            <li class="cd-side__sub-item"><a href="#0">Edit Comment</a></li>
            <li class="cd-side__sub-item"><a href="#0">Delete Comment</a></li>
          </ul>
        </li>
      </ul>
 
      
        <li class="cd-side__item cd-side__item--has-children cd-side__item--images js-cd-item--has-children">
          <a href="#0">Houses</a>
          
          <ul class="cd-side__sub-list">
            <li class="cd-side__sub-item"><a href="#0">All Houses</a></li>
            <li class="cd-side__sub-item"><a href="#0">Edit House</a></li>
            <li class="cd-side__sub-item"><a href="#0">Delete house</a></li>
          </ul>
        </li>
    
        <li class="cd-side__item cd-side__item--has-children cd-side__item--users js-cd-item--has-children">
          <a href="#0">Users</a>
          
          <ul class="cd-side__sub-list">
            <li class="cd-side__sub-item"><a href="view_Deatils.php">All Users</a></li>
            <li class="cd-side__sub-item"><a href="#0">Edit User</a></li>
            <li class="cd-side__sub-item"><a href="#0">Add User</a></li>
          </ul>
        </li>
      </ul>
     
    </nav>
  </div>
  <?php include 'action_kigali.php';?>
  <body>
  
  <ul class="cd-nav__list js-cd-nav__list" style="margin-top:78px;text-decoration: none ";>
 
    <button class="button button1"style="background-color: white; color:black;"><a href="action_east.php">East Post</button><br>

  <button class="button "style="background-color: white;"><a href="action_west.php">West Post</button></br>
  
  <button class="button"style="background-color: white;"><a href="action_nouth.php">Nourth Post</button><br>
  <button class="button "style="background-color: white;"><a href="action_kigali.php">kigali Post</button><br>

  <button class="button " style=" text-decoration: none; background-color: white";><a href="action_south.php">South Post</button>

    </div> <!-- .content-wrapper -->
    <button class="button "style="background-color: white;"><a href="action_kigali.php">Feedback table</button><br>
    
  </main> <!-- .cd-main-content -->
  
  <script src="assets/js/util.js"></script> <!-- util functions included in the CodyHouse framework -->
  <script src="assets/js/menu-aim.js"></script>
  <script src="assets/js/main.js"></script>
</body>
</html>