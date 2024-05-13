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
    <title>Teachers Registration</title>
    <link rel="stylesheet" type="text/css" href="homestyle.css">
</head>

<body>
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
    <form method="post" action="newStudent.php">
        <?php include("../errors.php"); ?>
        
        <table>
        <td colspan='2' class="input-group">
            <div>
            <h1>Student's Information
            </h1>
            </div>
        </td>
        <tr class="input-group">
            <div>
                <td><input type="text" name="LastName" placeholder="Last Name" value="<?php echo $LastName; ?>"></td>
                <td><input type="text" name="FirstName" placeholder="First Name" value="<?php echo $FirstName; ?>"></td>
            </div>
        </tr>
        <tr class="input-group">
            <div>
                <td><select name="YearLevel">
                    <option value="" selected disabled hidden>Year Level</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                </select></td>
            </div>
        </tr>
        <tr class="input-group">
            <div>
                <td><select name="Course">
                    <option value="" selected disabled hidden>Course</option>
                    <option value="BSEMC">BSEMC</option>
                    <option value="BSCS">BSCS</option>
                    <option value="BSIT">BSIT</option>
                    <option value="BLIS">BLIS</option>
                    <option value="BSIS">BSIS</option>
                </select></td>
            </div>
        </tr>
        <tr class="input-group">
                <td><select name="Gender">
                    <option value="" selected disabled hidden>Gender</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select></td>
            
        </tr>
        <td class="input-group">
        <div id="signup">
            <button type="submit" class="btn" name="reg_students">Register</button>
        </div>

        </td>
        </table>

    </form>
</body>

</html>