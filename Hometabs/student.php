<?php include('..//DBconnect.php')?>
<?php 
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

    <link rel="stylesheet" href="homestyle.css">
</head>

<body>
    <header>
        <div class="header">
            <div class="title">
                <img class= "logo" src="../img/Logo.png" width="70" height="70" usemap="#workmap" style="background: #ffffff;">
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
    <form method="post" action="student.php">
        <?php
        [$fcourse, $fyear] = mine();
        ?>
        <table>
            <tr class="input-group">
                <td colspan='2'>
                    <div><input type="text" placeholder="Search students lastname, firstname"></div>
                </td>
                <td class="input-group">
                    <div id="signup">
                        <button type="submit" class="btn" name="Search">Search</button>
                    </div>
                </td>
        </table>
        <table>
            <tr>
                <td class="input-group"><select name="Course" onchange="this.form.submit()">
                        <option value="" disable hidden>COURSE</option>
                        <!-- The all option cause an error that resets the select -->
                        <option <?php echo FILTER('all', $Filter['Course']); ?> value="">ALL</option>
                        <option <?php echo FILTER('BSEMC', $Filter['Course']); ?> value="BSEMC" >BSEMC</option>
                        <option <?php echo FILTER('BSCS', $Filter['Course']); ?> value="BSCS">BSCS</option>
                        <option <?php echo FILTER('BSIT', $Filter['Course']); ?> value="BSIT">BSIT</option>
                        <option <?php echo FILTER('BLIS', $Filter['Course']); ?> value="BLIS">BLIS</option>
                        <option <?php echo FILTER('BSIS', $Filter['Course']); ?> value="BSIS">BSIS</option>
                    </select></td>
                <td class="input-group"><select name="Year" onchange="this.form.submit()">
                        <option value="" disable hidden>Year Level</option>
                        <!-- The all option cause an error that resets the select -->
                        <option <?php echo FILTER('all', $Filter['Year']); ?> value="">ALL</option>
                        <option <?php echo FILTER('1', $Filter['Year']); ?> value="1">1st Year</option>
                        <option <?php echo FILTER('2', $Filter['Year']); ?> value="2">2nd Year</option>
                        <option <?php echo FILTER('3', $Filter['Year']); ?> value="3">3rd Year</option>
                        <option <?php echo FILTER('4', $Filter['Year']); ?> value="4">4th Year</option>
                    </select></td>
                <td>
                    <div>
                        <button class="btn" type="sumbit" name="reset" value="Reset">Reset </button>
                    </div>
                </td>
            </tr>
        </table>
        <table class="list">
            </tr>
            <tr>
                <td colspan='3'>
                    <h2>Student List</h2>
                </td>
            </tr>
            <tr>
                <th class="Tcontent">Full name</th>
                <th class="Tcontent">Course</th>
                <th class="Tcontent">Year</th>
            </tr>
            <?php


        $Filcourse = $DataBase->prepare("
            SELECT * FROM students 
            WHERE (Course = ? OR ? ='') 
            AND (YearLevel = ? OR ? = '')
            ORDER BY Course ASC, LastName ASC, YearLevel ASC");

        $Filcourse->bind_param('ssss', $fcourse, $fcourse, $fyear, $fyear);

        // Execute the prepared statement
        $Filcourse -> execute();

        // Get the result set from the executed statement
        $result = $Filcourse->get_result();

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                    <td class='Tcontent'>".$row['LastName'].", ".$row['FirstName']."</td>
                    <td class='Tcontent'>".$row['Course']."</td>
                    <td class='Tcontent'>".$row['YearLevel']."</td>
                    </tr>"; 
            }
        } else {
            echo "<tr><td colspan='4'>You don't have any students. </td></tr>" .$fcourse;
        }
        $Filcourse -> close();
        ?>
        <tr>
        <td colspan='3'>
            <div>
                <button class="btn" type="sumbit" name="deletelist" value="Reset">Delete All </button>
            </div>
        </td>
        </tr>

        </table>
        <table style="width:70px">
        <th id="add-icon" style="vertical-align: 40%">
            <h2><a href="newStudent.php" style=" text-decoration: none; "> + </a></h2>
        </th>

        </table>
    </form>

</body>

</html>