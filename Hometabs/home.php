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
    <title>Teachers Page</title>

    <link rel="stylesheet" href="..//Hometabs//homestyle.css">

</head>

<body>
    <header>
        <div class="header">
            <div class="title">
                <img class= "logo" src="../img/Logo.png" width="70" height="70" usemap="#workmap" style="background: #ffffff;">
                <map name="workmap">
                    <area shape="rect" coords="0, 0,70, 70" href="home.php" alt="Logo">
                </map>
                <h1>GRADO</h1>
                <br>
            </div>
            <a class="tabs" id="active" href="home.php">Home</a>
            <a class="tabs" href="student.php">Students</a>
            <a class="tabs" href="grades.php">Grades</a>
            <a class="tabs" href="notifications.php">Notifications</a>
            <br>
        </div>
    </header>

        <h1 >Welcome Home <?php echo$_SESSION['Username'];?></h1 >

    <main>
        <div class = "div1">
            <p class= "text1">Student's Progress</p><br>
            <p class="inside-text1">Washington, Yamamiyamiyamot</p><br>
            <p class="inside-text11">
                Overall GWA: 1.54<br>
                Actual Total Units Earned : 89<br>
                Academic Units : 86<br>
                Non-Academic Units : 3<br> </p><br>
             <img class="pic" src="../img/crayd.jpg">
         <br></div>

        <div class = "div2">
           <p class= "text2"> Student Deficiency</p> <br>
            <p class= "inside-text2">None to display.</p><br>
            <img class="picc" src="../img/cancel.png">
         <br>
        </div>

        <div class = "div3">
            <p class= "text3">Teacher's Info</p> <br>
            <p class= "inside-text3">
                ID No.: 1954M0021 <br>
                Name: Einstein, Albert<br>
                Department/College: CICT<br>
                Teacher’s Status: EMPLOYED - FULL TIME <br>
                Email Address: albert.einstein@wvsu.edu.ph<br>
                Mobile No.: +639999999999<br>
                Address: Basta Maalam, Iloilo</p><br>
                <img class="piccc" src="../img/albert.jpg">
         <br>
        </div>

        <div class = "div4">
           <p class="text4"> Notifications<br>
            <p class="inside-text4">Halimaya Alimaya from BSEMC 1A has submitted his wor... ></p> <br>
            <p class="inside-text41">Mr.Scruffy Matta from BLIS 4A has submitted his work in... ></p> <br>
            <p class="inside-text42">Joey Trenas from BSIS 3A has submitted his work in the... ></p> <br>
        </div>

        <div class = "div5"> 
            <p class="text5"> Things to do <br>
            <p class = "inside-text5">+ ADD TO LIST</p>
        </div>

        <div class = "cal">
            <table style = "margin:auto;">
                <tr>
                    <th colspan="7">2024 Calendar<br>
                MAY<br></th>
                    </tr>
                <tr>
                    <td>S</td>
                    <td>M</td>
                    <td>T</td>
                    <td>W</td>
                    <td>TH</td>
                    <td>F</td>
                    <td>S</td></tr>
                <tr>
                </tr>
                <tr>
                    <td>1</td>
                    <td>2</td>
                    <td>3</td>
                    <td>4</td>
                    <td>5</td>
                    <td>6</td>
                    <td>7</td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>9</td>
                    <td>10</td>
                    <td>11</td>
                    <td>12</td>
                    <td>13</td>
                    <td>14</td></tr>
                <tr>
                    <td>15</td>
                    <td>16</td>
                    <td>17</td>
                    <td>18</td>
                    <td>19</td>
                    <td>20</td>
                    <td>21</td></tr>
                <tr>
                    <td>22</td>
                    <td>23</td>
                    <td>24</td>
                    <td>25</td>
                    <td>26</td>
                    <td>27</td>
                    <td>28</td></tr>
                <tr>
                    <td>29</td>
                    <td>30</td>
                    <td>31</td>
               
             </tr>

            </table>
        </div>

        <p> <a href="home.php?logout='1'" style="color: red;">Logout</a> </p>
    </main>

</body>

</html>