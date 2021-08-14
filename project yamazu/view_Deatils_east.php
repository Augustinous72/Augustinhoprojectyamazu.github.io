<?php
 $conn= mysqli_connect('localhost','root','','housing system');
 //check for connection
 if(!$conn){
   die("connection failed");
 }
 else{

   }
   
   $r = "SELECT * FROM house_east WHERE ID=".$_GET['id'];
   
   $dx = mysqli_query($conn, $r);
   if(!$dx){
	   echo "Failed";
   }
   while($d = mysqli_fetch_array($dx)){
	   echo "ID: ".$d["ID"]."<br/>";
	   echo "filenames: ".$d["filenames"]."<br/>";
	   echo "Phone_Number: ".$d["Phone_Number"]."<br/>";
      echo "HouseAddress: ".$d["HouseAddress"]."<br/>";
	   echo "Cost: ".$d["Cost"]."<br/>";
   }
   
?>