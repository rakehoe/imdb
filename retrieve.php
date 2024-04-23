<?php include('login.php')?>
<?php include('grades.php')?>
<?php

    $sql = "SELECT * FROM teachers";
    $result = $conn -> query($sql);
    if ($result -> num_rows > 0){
        echo "<table>";
        while ($row = $result -> fetch_assoc()){
            echo "<tr><td>" .$row['LastName']."</tr></td>";
             echo  "Name: " .$row['LastName'] ." " .$row['FirstName'];
             echo "<br>";
        }
       echo "</table>";
    }

?>