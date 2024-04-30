<?php include('..//DBconnect.php') ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Teachers Registration</title>
    <link rel="stylesheet" type="text/css" href="..//Hometabs//homestyle.css">
    <link rel="stylesheet" href="..//Hometabs//Formstyle.css">
</head>

<body>
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
    <form method="post" action="newStudent.php">
        <?php include("../errors.php"); ?>
        
        <table>
        <tr>
            <h1>Student's Information
            </h1>
        </tr>
        <th class="input-group">
            <div>
                <h2>
                    Students full name
                </h2>
            </div>
        </th>
        <tr class="input-group">
            <div>
                <td><input type="text" name="LastName" placeholder="Last Name" value="<?php echo $LastName; ?>"></td>
                <td><input type="text" name="FirstName" placeholder="First Name" value="<?php echo $FirstName; ?>"></td>
            </div>
        </tr>
        <tr class="input-group">
            <div>
                <td><input type="text" name="YearLevel" placeholder="Year level" value="<?php echo $YearLevel; ?>"></td>
            </div>
        </tr>
        <tr class="input-group">
            <div>
                <td><input type="text" name="Course" placeholder="Course" value="<?php echo $Course; ?>"></td>
            </div>
        </tr>
        <tr class="input-group">
            <div>
                <td><input type="text" name="Gender" placeholder="Gender" value="<?php echo $Gender; ?>"></td>
            </div>
        </tr>

        </table>
        <div class="input-group" id="signup">
            <button type="submit" class="btn" name="reg_students">Create Account</button>
        </div>

    </form>
</body>

</html>