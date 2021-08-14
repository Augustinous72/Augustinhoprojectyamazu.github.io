<?php

	include('config/db_connect.php');

	$email = $title = $ingredients = '';
	$errors = array('email' => '', 'title' => '', 'ingredients' => '');

	if(isset($_POST['submit'])){
		
		// check email
		if(empty($_POST['email'])){
			$errors['email'] = 'An email is required';
		} else{
			$email = $_POST['email'];
			if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
				$errors['email'] = 'Email must be a valid email address';
			}
		}

		// check title
		if(empty($_POST['title'])){
			$errors['title'] = 'A title is required';
		} else{
			$title = $_POST['title'];
			if(!preg_match('/^[a-zA-Z\s]+$/', $title)){
				$errors['title'] = 'Title must be letters and spaces only';
			}
		}

		// check ingredients
		if(empty($_POST['ingredients'])){
			$errors['ingredients'] = 'At least one ingredient is required';
		} else{
			$ingredients = $_POST['ingredients'];
			if(!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/', $ingredients)){
				$errors['ingredients'] = 'Ingredients must be a comma separated list';
			}
		}

		if(array_filter($errors)){
			//echo 'errors in form';
		} else {
			// escape sql chars
			$email = mysqli_real_escape_string($conn, $_POST['email']);
			$title = mysqli_real_escape_string($conn, $_POST['title']);
			$ingredients = mysqli_real_escape_string($conn, $_POST['ingredients']);

			// create sql
			$sql = "INSERT INTO pizzas(title,email,ingredients) VALUES('$title','$email','$ingredients')";

			// save to db and check
			if(mysqli_query($conn, $sql)){
				// success
				header('Location: index.php');
			} else {
				echo 'query error: '. mysqli_error($conn);
			}
			
		}

	} // end POST check

?>
if(!$conn){
    echo 'connection error:'. mysqli_connect_error();

}
else{
    echo 'your database connected successfully';
}
<!DOCTYPE html>
<html>
	
	<?php include('templates/header.php'); ?>

	<section class="container grey-text">
		<h4 class="center">Add a Pizza</h4>
		<form class="white" action="add.php" method="POST">
			<label>Your Email</label>
			<input type="text" name="email" value="<?php echo htmlspecialchars($email) ?>">
			<div class="red-text"><?php echo $errors['email']; ?></div>
			<label>Pizza Title</label>
			<input type="text" name="title" value="<?php echo htmlspecialchars($title) ?>">
			<div class="red-text"><?php echo $errors['title']; ?></div>
			<label>Ingredients (comma separated)</label>
			<input type="text" name="ingredients" value="<?php echo htmlspecialchars($ingredients) ?>">
			<div class="red-text"><?php echo $errors['ingredients']; ?></div>
			<div class="center">
				<input type="submit" name="submit" value="Submit" class="btn brand z-depth-0">
			</div>
		</form>
	</section>

	<?php include('templates/footer.php'); ?>

</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($fname)) {
    $fname_error = "FName is required";
  } else {
    $fname = test_input($_POST["txtfname"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$fname)) {
      $fname_error = "Only letters and white space allowed";
    }
  }
}
  
$conn= mysqli_connect('localhost','root','','housing system');
//check for connection
if(!$conn){
    echo 'connection error:'. mysqli_connect_error();

}
else{
    echo 'your database connected successfully';
}

if(isset($_POST['Submit'])){
$FirstName=$_POST['txtfname'];
$LastName =$_POST['txtlname'];
$Email =$_POST['txtEmail']; 
$Passwords =$_POST['txtpassword'];

$sql="INSERT INTO signup (FirstName,LastName,Email,	Passwords)
 VALUES('$FirstName','$LastName','$Email','$Passwords')";
 if(mysqli_query($conn,$sql)){
     echo "new record has been added successfully";
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