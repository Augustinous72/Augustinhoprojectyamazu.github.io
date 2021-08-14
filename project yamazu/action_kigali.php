<?php include 'navigation bar.php';?>
<?php
$conn= mysqli_connect('localhost','root','','housing system');
//check for connection
if(!$conn){
  die("connection failed");
}
else{

  }
$sql = "SELECT * FROM house_kigali";
$result = mysqli_query($conn,$sql);

if(!$result) {
echo "Something is wrong".mysqli_error($conn);}
    // output data of each row
else{?>
<table border="1" style="margin-left: 30%">
  <tr>
     <th>id</th>
 <th>filenames</th>
 <th>Phone_Number</th>
 <th>HouseAddress</th>
 <th>Cost</th>
 <th colspan="3">Action</th>
  </tr>
<?php
    while($row = mysqli_fetch_array($result)) {?>


<tr>
<td><?php echo $row["ID"]; ?></td>
   <td><?php echo $row["filenames"]; ?></td>
   <td><?php echo $row["Phone_Number"]; ?></td>
   <td><?php echo $row["HouseAddress"]; ?></td>
   <td><?php echo $row["Cost"]; ?></td>
<td><a href="view_Deatils_kigali.php?id=<?php echo $row['ID']; ?>"><button style="background-color:black;">View</a></button></td>
<td><a href="update_kigali.php"><button style="background-color:black;">Update</a></button></td>
<td><a href="userDelete_kigali.php?id=<?php echo $row['ID']; ?>"><button style="background-color:black;">Delete</a></button></td>
</tr>
<?php
}
echo "</table>";
  }
   //
?>