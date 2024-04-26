<!DOCTYPE html>
<?php 
  session_start(); 

  if (!isset($_SESSION['Username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: ../login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['Username']);
  	header("location: ../login.php");
  }
?>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>First Webpage!!!</title>

	<link rel="stylesheet" href="homestyle.css">
</head>
<body>
	<header>
			<div class="header">
            <h1>NOOOOOOOOOOOOTIFICATIONS</h1>
			<a class = "tabs" href="home.php">Home</a>
			<a class = "tabs" href="student.php">Students</a>
			<a class = "tabs" href="grades.php">Grades</a>
			<a class = "tabs" id="active" href="notifications.php">Notifications</a>
					
			</div>

		<h1>Notif tab</h1>
	</header>

	<main>
		<p>This area is for content</p>
	</main>

	<footer>
		This is footer... all rights reserved
	</footer>
</body>
</html>