
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
	<title>Teachers Page</title>

	<link rel="stylesheet" href="..//Hometabs//homestyle.css">

</head>
<body>
	<header>
			<div class="header">
			<div class="title">
            <img src="../img/Logo.png" width="70" height="70" usemap="#workmap" style="background: #ffffff;">
			<map name="workmap">
				<area shape="rect" coords="0, 0,70, 70" href="home.php" alt="Logo">
			</map>
            <h1>GRADO</h1>
			<br>
            </div>
			<a class = "tabs" id="active" href="home.php">Home</a>
			<a class = "tabs" href="student.php">Students</a>
			<a class = "tabs" href="grades.php">Grades</a>
			<a class = "tabs" href="notifications.php">Notifications</a>
			<br>
		</div>

		<h1>Welcome Home  <?php echo$_SESSION['Username'];?></h1>
	</header>

	<main>
    	<p> <a href="home.php?logout='1'" style="color: red;">logout</a> </p>
	</main>

	<footer>
		This is the footer... All Rights Reserved
	</footer>
</body>
</html>