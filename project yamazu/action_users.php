<?php include 'navigation bar.php';?>
<?php
$conn= mysqli_connect('localhost','root','','housing system');
//check for connection
if(!$conn){
  die("connection failed");
}
else{

  }
$sql = "SELECT * FROM signup";
$result = mysqli_query($conn,$sql);

if(!$result) {
echo "Something is wrong".mysqli_error($conn);}
    // output data of each row
else{?><center>
<table border="3" style="margin-left: 30%; background-color:;margin-top:70px;"cellspacing="4">
  <tr>
     <th>id</th>
 <th>FirstNane</th>
 <th>LastName</th>
 <th>Email</th>
 <th colspan="3">Action</th>
  </tr></center>
<?php
    while($row = mysqli_fetch_array($result)) {?>


<tr>
<td><?php echo $row["ID"]; ?></td>
   <td><?php echo $row["FirstName"]; ?></td>
   <td><?php echo $row["LastName"]; ?></td>
   <td><?php echo $row["Email"]; ?></td>
   
<td><a href="view_deatils_users.php?id=<?php echo $row['ID']; ?>"><button style="background-color:black;">View</a></button></td>
<td><a href="adUpdate.php"><button style="background-color:black;">Update</a></button></td>
<td><a href="userDelete_users.php?id=<?php echo $row['ID']; ?>"><button style="background-color:black;">Delete</a></button></td>
</tr>
<?php
}
echo "</table>";
  }
   //
?>
<?php include 'footer.php';?>