<?php include ("DBconnect.php")?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Teachers Login</title>

    <link rel="stylesheet" href="..//..//imdb//style.css">

</head>

<body>
    <div class="header">
        <?php include('errors.php'); 
		echo("<br>")
		?>
        <img src="..//..//imdb//img//Logo.png" width="70" height="70" style="background: #ffffff;">
        <h1>GRADO</h1>
        <br>
        <h2>SIGN IN</h2>
    </div>
    <form method="post" action="login.php">
        <div class="input-group">
            <p style="text-align:center; font-size:15px">Please enter your credentials to access your account</p>
            <br>
            <input placeholder="Username" class="input-fields" type="text" name="Username">
        </div>
        <div class="input-group">
            <input placeholder="Password" class="input-fields" type="password" name="Password">
            <br><br><br>
        </div>
        <div class="input-group" style="margin-left: 15%; float: left; display: block;">
            <button type="submit" name="login_user" class="btn">Login</button>
        </div>
        <div class="input-group" style="margin-right: 15%; float: right;">
            <a href="register.php"><button type="button" class="btn" id="register">Register</button></a>
        </div>
    </form>
</body>

</html>