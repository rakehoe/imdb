<?php include('..//DBconnect.php') ?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Teachers Registration</title>
    <link rel="stylesheet" href="..//Formstyle.css">
    <link rel="stylesheet" type="text/css" href="..//Hometabs//homestyle.css">
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
    <form method="post" action="register.php">
        <?php include('errors.php'); ?>
        <div class="input-group">
            <label>Last Name</label>
            <input type="text" name="LastName" value="<?php echo $LastName; ?>">
        </div>
        <div class="input-group">
            <label>First Name</label>
            <input type="text" name="FirstName" value="<?php echo $FirstName; ?>">
        </div>
        <div class="input-group">
            <label>Username</label>
            <input type="text" name="Username" value="<?php echo $Username; ?>">
        </div>
        <div class="input-group">
            <label>Password</label>
            <input type="password" name="password_1">
        </div>
        <div class="input-group">
            <label>Confirm password</label>
            <input type="password" name="password_2">
        </div>
        <div class="input-group" id="signup">
            <button type="submit" class="btn" name="reg_user">Create Account</button>
        </div>

        <p>
            Already a member? <a href="login.php" id="links">Sign in</a>
        </p>
    </form>
</body>

</html>