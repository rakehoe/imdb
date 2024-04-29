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
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Student List</title>

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
                <h1>STUDENTS</h1>
                <br>
            </div>
            <a class="tabs" href="home.php">Home</a>
            <a class="tabs" id="active" href="student.php">Students</a>
            <a class="tabs" href="grades.php">Grades</a>
            <a class="tabs" href="notifications.php">Notifications</a>
            <br>
        </div>
    </header>

    <h2 style="text-align:center;"><a href="newStudent.php">ADD Student</a></h2>

    <main>
        <p>This area is for content</p>
    </main>

    <footer>
        This is footer... all rights reserved
    </footer>
</body>

</html>