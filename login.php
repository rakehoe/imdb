<?php include ("DBconnect.php")?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Teachers Login</title>

	<link rel="stylesheet" href="style.css">

</head>

<body>
  <div class="header">
  	<h1 style="color: white;">SIGN IN</h1>
  </div>
	 

	<form method="post" action="login.php">
		<?php include('errors.php'); ?>
		<div class="input-group">
			<label>Username</label>
			<input class = "input-fields" type="text" name="Username">
		</div>
		<div class="input-group">
			<label>Password</label>
			<input class = "input-fields" type="password" name="Password">
		</div>
		<div class="input-group"  style="float: left; display: block;">
			<button type="submit" name="login_user" class="btn">Login</button>
		</div>
		<div class="input-group" style="float: right;">
			<a href="register.php"><button type="button" class="btn" id="register" >Register</button></a>
		</div>
	</form>
</body>

</html>