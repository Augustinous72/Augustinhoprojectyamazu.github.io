<?php
 $conn= mysqli_connect('localhost','root','','housing system');
 //check for connection
 if(!$conn){
   die("connection failed");
 }
 else{

   }
   
   $r = "SELECT * FROM signup WHERE ID=".$_GET['id'];
   
   $dx = mysqli_query($conn, $r);
   if(!$dx){
	   echo "Failed";
   }
   while($d = mysqli_fetch_array($dx)){
	   echo "ID : ".$d["ID"]."<br/>";
	   echo "FirstName: ".$d["FirstName"]."<br/>";
	   echo "LastName: ".$d["LastName"]."<br/>";
      echo "Email: ".$d["Email"]."<br/>";
	   
   }
   
?>