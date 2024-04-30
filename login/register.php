<?php include('login.php')?>
<?php include('home.php')?>
<?php
    $LastName = $_POST['LastName'];
    $FirstName = $_POST['FirstName'];
    $Password = $_POST['Password'];

    $sql = $conn -> prepare ("INSERT INTO teachers (LastName, FirstName, Password) VALUES (?, ?, ?)");
    $sql -> bind_param ("sss", $LastName, $FirstName, $Password);
    echo "Registered";
    $sql -> execute();

    $conn->close();
?>