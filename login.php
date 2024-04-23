<?php include ("DBconnect.php")?>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Teachers Login</title>

	<link rel="stylesheet" href="style.css">

</head>

<body>
  <div class="header">
  	<h1 style="color: white;">Teachers Login</h1>
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
		<div class="input-group">
			<button type="submit" class="btn" name="login_user">Login</button>
		</div>
		<p>
			Not yet a member? <a href="register.php">Sign up</a>
		</p>
	</form>
	<footer>
		This is footer... all rights reserved
	</footer>
</body>

</html>