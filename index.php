<?php 
	$cdb = new mysqli('localhost', 'root', '');
	$DbName = "imdb";

	$sql = "SELECT COUNT(*) AS `exists` FROM INFORMATION_SCHEMA.SCHEMATA WHERE SCHEMA_NAME = '$DbName'";
	$result = $cdb->query($sql);
	$row = $result->fetch_assoc();
	$dbExists = (bool) $row['exists'];

	if ($dbExists) {
	  echo "Database '$DbName' already exists.";
	  $sql = "DROP DATABASE $DbName";
	  $cdb->query($sql);
    	$sql_create = "CREATE DATABASE $DbName";
		$cdb->query($sql_create);
	} else {
    	// Create the database
    	$sql_create = "CREATE DATABASE $DbName";
		$cdb->query($sql_create);
	}
	$cdb -> close();

	$idb = new mysqli('localhost', 'root', '', $DbName);
	$sql = "
		CREATE TABLE `grades` (
			`SLastName` varchar(11) NOT NULL,
			`SFirstName` varchar(11) NOT NULL,
			`Act1` int(11) NOT NULL,
			`Act2` int(11) NOT NULL,
			`Act3` int(11) NOT NULL,
			`Midterm` int(11) NOT NULL,
			`Finals` int(11) NOT NULL,
			`Performance` int(11) NOT NULL,
			`TotalGrades` int(11) NOT NULL,
			`GradesId` int(6) NOT NULL,
			`StudentId` int(6) NOT NULL
		) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
	
		CREATE TABLE `students` (
			`StudentId` int(6) NOT NULL,
			`LastName` varchar(15) NOT NULL,
			`FirstName` varchar(15) NOT NULL,
			`Course` varchar(6) NOT NULL,
			`Gender` varchar(7) NOT NULL,
			`YearLevel` int(2) NOT NULL
		) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
	
		CREATE TABLE `teachers` (
			`TeachersId` int(6) NOT NULL,
			`LastName` varchar(20) NOT NULL,
			`FirstName` varchar(25) NOT NULL,
			`Username` varchar(35) NOT NULL,
			`Password` varchar(12) NOT NULL
		) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

		INSERT INTO `teachers` (`TeachersId`, `LastName`, `FirstName`, `Username`, `Password`) VALUES
		(1, 'IMFINALS', 'IMFINALS', 'IMFINALS', 'IMFINALS');
	
		ALTER TABLE grades
			ADD PRIMARY KEY (`GradesId`),
			ADD CONSTRAINT `studentsId` FOREIGN KEY (`StudentId`) REFERENCES `students`(`StudentId`),
			ADD CONSTRAINT `lastname` FOREIGN KEY (`SLastName`) REFERENCES `students`(`SLastName`),
			ADD CONSTRAINT `firstname` FOREIGN KEY (`SFirstName`) REFERENCES `students`(`SFirstName`),
			MODIFY `GradesId` int(6) NOT NULL AUTO_INCREMENT;
	
		ALTER TABLE students
			ADD PRIMARY KEY (`StudentId`),
			MODIFY `StudentId` int(6) NOT NULL AUTO_INCREMENT;
	
		ALTER TABLE teachers
			ADD PRIMARY KEY (`TeachersId`),
			MODIFY `TeachersId` int(6) NOT NULL AUTO_INCREMENT;
	";
	$idb->multi_query($sql);
	
	// Close the connection
	$idb->close();

	session_start(); 

	if (isset($_SESSION['Username'])){
	header('location: Hometabs/home.php');
	}

	if (!isset($_SESSION['Username'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: login.php');
	}
	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['Username']);
		header("location: login.php");
	}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Index</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="content">
        <!-- notification message -->
        <?php if (isset($_SESSION['success'])) : ?>
        <div class="error success">
            <h3>
                <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
            </h3>
        </div>
        <?php endif ?>

        <!-- logged in user information -->
        <?php  if (isset($_SESSION['Username'])) : ?>
        <p>Welcome <strong><?php echo $_SESSION['Username']; ?></strong></p>
        <p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
        <?php endif ?>
    </div>

</body>

</html>