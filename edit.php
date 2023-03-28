<?php 
include  'conn.php';
// Get the userid
$userid=intval($_GET['id']);
$sql = "SELECT id,firstname,lastname,username,password,address from member where id=:uid";

//Prepare the query:
$query = $conn->prepare($sql);
//Bind the parameters
$query->bindParam(':uid',$userid,PDO::PARAM_STR);
//Execute the query:
$query->execute();
//Assign the data which you pulled from the database (in the preceding step) to a variable.
$results=$query->fetchAll(PDO::FETCH_OBJ);
// For serial number initialization
$cnt=1;
if($query->rowCount() > 0)
{
//In case that the query returned at least one record, we can echo the records within a foreach loop:
foreach($results as $result)
{
$firstname = $result->firstname;
$lastname = $result->lastname;
$username = $result->username;
$password = $result->password;

	
		}
	}
	?>
 <?php

if(isset($_POST['register']))
{
// Get the userid
$userid=intval($_GET['id']);
// Posted Values
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$username = $_POST['username'];
$password = $_POST['password'];

// Query for Updation
$sql="update member set firstname=:firstname,lastname=:lastname,username=:username,password=:password, where id=:uid";

//Prepare Query for Execution
$query = $conn->prepare($sql);
// Bind the parameters
$query->bindParam(':firstname',$firstname,PDO::PARAM_STR);
$query->bindParam(':lastname',$lastname,PDO::PARAM_STR);
$query->bindParam(':username',$username,PDO::PARAM_STR);
$query->bindParam(':password',$password,PDO::PARAM_STR);

$query->bindParam(':uid',$userid,PDO::PARAM_STR);
// Query Execution
$query->execute();
// Mesage after updation
echo "<script>alert('Record Updated successfully');</script>";
// Code for redirection
echo "<script>window.location.href='display.php'</script>";
}
	?>




<!DOCTYPE html>
<html lang="en">
	<head>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
		<link rel="stylesheet" href="registration.css">
	</head>
<body>
	<br>
	<br>
	<div class="col-md-4" ></div>
	<div class="col-md-4 well"id="pema">
		<div class="col-md-8">
			<form action="register_query.php" method="POST">	
				<h4 class="text-success">Register</h4>
				<hr style="border-top:1px groovy #000;">
				<div class="form-group">
					<label>Firstname</label>
					<input type="text" class="form-control" name="firstname" placeholder="Firstname"/>
				</div>
				<div class="form-group">
					<label>Lastname</label>
					<input type="text" class="form-control" name="lastname" placeholder="Lastname" />
				</div>
				<div class="form-group">
					<label>Username</label>
					<input type="text" class="form-control" name="username" placeholder="Username" />
				</div>
				<div class="form-group">
					<label>Password</label>
					<input type="password" class="form-control" name="password" placeholder="Password" />
				</div>
				<br />
				<div class="form-group">
					<button class="btn btn-danger form-control" name="register">Register</button>
				</div>
				<button id="loginbutton" class="btn btn-info form-control" name="register"><a href="index.php">Login</a></button>
			</form>
		</div>
	</div>
</body>
</html>
