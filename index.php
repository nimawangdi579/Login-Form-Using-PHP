<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
		<link rel="stylesheet" href="style.css">
	</head>
<body>
	<br>
	<br>
	<br>
	<br>
	<br>
	
	<div class="col-md-4" ></div>
	<div class="col-md-4 well" id="sangay">
	<img id="img1" src="https://dziseldra.com/images/company_logos/1619611065.jpg" alt=""><img id="img2"src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQHk2Mtmn3wTHENR_gDTlst75v1z7I8iwRy1uWaUQaTExu0gxyp8puMQjh-zmVl7dQIQ2g&usqp=CAU" alt="">
	
		<!-- <hr style="border-top:3px dotted #ccc;"/> -->
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<?php if(isset($_SESSION['message'])): ?>
				<div class="alert alert-<?php echo $_SESSION['message']['alert'] ?> msg"><?php echo $_SESSION['message']['text'] ?></div>
			<script>
				(function() {
					// removing the message 3 seconds after the page load
					setTimeout(function(){
						document.querySelector('.msg').remove();
					},3000)
				})();
			</script>
			<?php 
				endif;
				// clearing the message
				unset($_SESSION['message']);
			?>
			<form action="login_query.php" method="POST">	
				<h4 class="text-success">Login</h4>
				<hr style="border-top:1px groovy #000;">
				<div class="form-group">
					<label>Username</label>
					<input type="text" class="form-control" name="username" placeholder="Enter the username" />
				</div>
				<div class="form-group">
					<label>Password</label>
					<input type="password" class="form-control" name="password" placeholder="Enter Password" />
				</div>
				<br />
				<div class="form-group">
					<button class="btn btn-danger form-control" name="login" >Login</button>
				</div>
				<a href="registration.php" style="color:blue;"><h3>Registration</h3></a>
			</form>
		</div>
	</div>
</body>
</html>