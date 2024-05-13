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
    <title>Grades list</title>

    <link rel="stylesheet" href="homestyle.css">

</head>

<body>
    <header>
        <div class="header">
            <div class="title">
                <img class="logo" src="../img/Logo.png" width="70" height="70" usemap="#workmap"
                    style="background: #ffffff;">
                <map name="workmap">
                    <area shape="rect" coords="0, 0,70, 70" href="home.php" alt="Logo">
                </map>
                <h1>GRADES</h1>
                <br>
            </div>
            <a class="tabs" href="home.php">Home</a>
            <a class="tabs" href="student.php">Students</a>
            <a class="tabs" id="active" href="grades.php">Grades</a>   
            <a class="tabs" href="notifications.php">Notifications</a>
            <br>
        </div>
    </header>
    <div>

    </div>
    <div>
        <form action='grades.php' method='post' style="width:100%">
        <table>
            </tr>
            <tr>
                <th></th>
                <th class="Tcontent">Full name</th>
                <th class="Tcontent" style="font-size:10px">Activity 1</th>
                <th class="Tcontent" style="font-size:10px">Activity 2</th>
                <th class="Tcontent" style="font-size:10px">Activity 3</th>
                <th class="Tcontent" style="font-size:10px">Midterm</th>
                <th class="Tcontent" style="font-size:10px">Finals</th>
                <th class="Tcontent" style="font-size:10px">Performance</th>
                <th class="Tcontent" style="font-size:10px">Total Grade</th>
            </tr>
                <?php
		 $List = $DataBase->prepare("
		 SELECT * FROM grades 
		 ORDER BY  SLastName ASC");

	 	 // Execute the prepared statement
	 	 $List -> execute();
 
	 	 // Get the result set from the executed statement
	 	 $result = $List->get_result();
		  if ($result->num_rows > 0) {
			while ($row = $result->fetch_assoc()) {
				// Create a form for each row
				echo "<tr>";
				echo "<td>
				<div>
					<button class='btn' style='font-size: 10px' type='sumbit name='update' value='save'>Save</button>
				</div></td>";
				echo "<td style='font-size:15px;'>" .$row['SLastName'] .", " .$row['SFirstName'] . "</td>";
				echo "<div><input style='width:90px' type='text' hidden name='Lastname' value='". $row['SLastName']."'></div>";
				echo "<div><input style='width:90px' type='text' hidden name='Firstname' value='". $row['SFirstName']."'></div>";
				echo "<div><input style='width:90px' type='text' hidden name='gradeid' value='". $row['GradesId']."'></div>";
				echo "<td><div><input style='width:90px' type='text' name='act1' value='". $row['Act1']."'></div></td>";
				echo "<td><div><input style='width:90px' type='text' name='act2' value='". $row['Act2']."'></div></td>";
				echo "<td><div><input style='width:90px' type='text' name='act3' value='". $row['Act3']."'></div></td>";
				echo "<td><div><input style='width:90px' type='text' name='midterm' value='". $row['Midterm']."'></div></td>";
				echo "<td><div><input style='width:90px' type='text' name='finals' value='". $row['Finals']."'></div></td>";
				echo "<td><div><input style='width:90px' type='text' name='performance' value='". $row['Performance']."'></div></td>";
				echo "<td><div><input style='width:90px' type='text' name='totalgrades' value='". $row['TotalGrades']."'></div></td>";
				echo "</tr>";
			}
		}
		?>
<td colspan='3'>
            </table>    

        </form>

    </div>

</body>

</html>