<?php 
  include('..//DBconnect.php');
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
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Notifications</title>

	<link rel="stylesheet" href="..//Hometabs//homestyle.css">
</head>
<body>
	<header>
			<div class="header">
			<div class="title">
            <img class= "logo" src="../img/Logo.png" width="70" height="70" usemap="#workmap" style="background: #ffffff;">
			<map name="workmap">
				<area shape="rect" coords="0, 0,70, 70" href="home.php" alt="Logo">
			</map>
            <h1>NOTIFICATIONS</h1>
			<br>
            </div>
			<a class = "tabs" href="home.php">Home</a>
			<a class = "tabs" href="student.php">Students</a>
			<a class = "tabs" href="grades.php">Grades</a>
			<a class = "tabs" id="active" href="notifications.php">Notifications</a>
			<br>
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