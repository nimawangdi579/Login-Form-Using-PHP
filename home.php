<!DOCTYPE html>
<?php
	require 'conn.php';
	session_start();
	
	if(!ISSET($_SESSION['user'])){
		header('location:index.php');
	}
?>
<html lang="en">
	<head>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
		<link rel="stylesheet" href="home.css">
	</head>
<body>
	<br>
	<br>
	<br>
	<br>
	<div class="col-md-3"></div>
	<div class="col-md-6 well">
		<h2 class="text-primary"><em>Joenpalekso</em></h2>
		<hr style="border-top:1px dotted #ccc;"/>
		<div class="col-md-2"></div>
		<div class="col-md-8">
			 <h3>Welcome to the page!</h3>
			<br />
			<?php
				$id = $_SESSION['user'];
				$sql = $conn->prepare("SELECT * FROM `member` WHERE `mem_id`='$id'");
				$sql->execute();
				$fetch = $sql->fetch();
			?>
			<center><h4><?php echo $fetch['firstname']." ". $fetch['lastname']?></h4></center>
			<a href = "logout.php">	<button class="btn btn-info form-control" style="width:100px;" name="logout" >Logout</button></a>
		</div>
	</div>
</body>
</html>