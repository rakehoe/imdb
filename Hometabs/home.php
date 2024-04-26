
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

	<link rel="stylesheet" href="homestyle.css">

</head>
<body>
	<header>
			<div class="header">
            <h1>TEACHER'S GRADING SYTEM AND DATABASE</h1>
			<a class = "tabs" id="active" href="home.php">Home</a>
			<a class = "tabs" href="student.php">Students</a>
			<a class = "tabs" href="grades.php">Grades</a>
			<a class = "tabs" href="notifications.php">Notifications</a>
					
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