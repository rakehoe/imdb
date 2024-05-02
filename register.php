<?php include('DBconnect.php') ?>
<!DOCTYPE html>
<html>

<head>
    <title>Teachers Registration</title>
    <link rel="stylesheet" type="text/css" href="..//..//imdb//style.css">
</head>

<body>
    <div class="header">
        <?php include('errors.php'); 
		echo("<br>")
		?>
    <img src="..//..//imdb//img//Logo.png" width="70" height="70" style="background: #ffffff;">
        <h1>GRADO</h1>
        <br>
        <h2>SIGN UP</h2>
    </div>

    <form method="post" action="register.php">
        <div class="container">
            <div class="input-group">
                <input placeholder="Last Name" type="text" name="LastName" value="<?php echo $LastName; ?>">
            </div>
            <div class="input-group">
                <input placeholder="First Name" type="text" name="FirstName" value="<?php echo $FirstName; ?>">
            </div>
            <div class="input-group">
                <input placeholder="Username" type="text" name="Username" value="<?php echo $Username; ?>">
            </div>
            <div class="input-group">
                <input placeholder="Password" type="password" name="password_1">
            </div>
            <div class="input-group">
                <input placeholder="Confirm password" type="password" name="password_2">
            </div>
            <div class="input-group" style="margin-left: 15%; float: left; display: block;">
                <button type="submit" class="btn" name="reg_user">Create Account</button>
            </div>

            <div class="input-group">
                <br><br>
                <label style="margin-left: 15%">Already a member? <a href="login.php" id="links">Sign in</a></label>
            </div>

        </div>
    </form>
</body>

</html>