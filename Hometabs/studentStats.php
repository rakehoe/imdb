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
<form >
        <table>
            <tr class="input-group">
                <form action="student.php" method="post">
                    <td colspan='3'>
                        <div><input type="text" placeholder="Search students lastname, firstname"></div>
                    </td>
                    <td class="input-group">
                        <div id="signup">
                            <button type="submit" class="btn" name="Search">Search</button>
                        </div>
                    </td>

                </form>
            </tr>
        <tr><td colspan='4'><h2>Student List</h2></td></tr>
        <tr>
        <th style="width=10%">List</th>
        <th style="width=50%">Full name</th>
        <th>Course</th>
        <th>Gender</th>
        </tr>
            
            <?php
    $sql = "SELECT * FROM students";
    $result = $DataBase -> query($sql);
    if ($result -> num_rows > 0){
        $a = 1;
        while ($row = $result -> fetch_assoc()){
            echo "
            <tr>
            <td>".$a++."</td>
            <td>".$row['LastName'].", ".$row['FirstName']."</td>
            <td>".$row['Course']."</td>
            <td>".$row['Gender']."</td>
            </tr>
            ";
        }
    }else{
        echo"
        <tr>
        <td>You dont have any students yet considering registering them</td>
        </tr>";
    }
    ?>
    <th id="add-icon" style="vertical-align: 40%">
        <h2><a href="newStudent.php" style=" text-decoration: none; "> + </a></h2>
    </th>
</form>
        </table>

</body>

</html>