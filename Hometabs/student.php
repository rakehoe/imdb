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

    <link rel="stylesheet" href="..//Hometabs//homestyle.css">
    <link rel="stylesheet" href="..//Hometabs//Formstyle.css">
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

    <h2 style="
    width: 150px;
    line-height: 150px;
    vertical-align: 50%;
    text-align:center; 
    border-radius:50%; 
    font-size:95px; 
    text-decoration: none;
    border: 1px solid #8D5103;
    background: white;" ><a href="newStudent.php"> + </a></h2>
    <table>
        <?php
    $sql = "SELECT * FROM students";
    $result = $DataBase -> query($sql);
    if ($result -> num_rows > 0){
        $a = 1;
        echo "<tr><th colspan='4'><h2>Student List</h2></th></tr>";
        echo "<tr>
        <th>List</th>
        <th>Full name</th>
        <th>Course</th>
        <th>Gender</th>
        </tr>";
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
    }
    ?>
    </table>
</body>

</html>