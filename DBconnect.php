<?php
session_start();

// initializing variables
$LastName = "";
$FirstName = "";
$Username = "";

$errors = array(); 

// connect to the database
$DataBase = mysqli_connect('localhost', 'root', '', 'imdb');


// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $LastName = mysqli_real_escape_string($DataBase, $_POST['LastName']);
  $FirstName = mysqli_real_escape_string($DataBase, $_POST['FirstName']);
  $Username = mysqli_real_escape_string($DataBase, $_POST['Username']);
  $password_1 = mysqli_real_escape_string($DataBase, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($DataBase, $_POST['password_2']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($Username)) { array_push($errors, "Username is required"); }
  if (empty($LastName)) { array_push($errors, "Last name is required"); }
  if (empty($FirstName)) { array_push($errors, "First name is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure 
  // a user does not already exist with the same Username and/or email
  $user_check_query = "SELECT * FROM teachers WHERE Username='$Username' LIMIT 1";
  $result = mysqli_query($DataBase, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['Username'] === $Username) {
      array_push($errors, "Username already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	// $password = md5($password_1);//encrypt the password before saving in the database
    $password = $password_1;

  	$query = "INSERT INTO teachers (Username, LastName, FirstName, Password)  VALUES('$Username', '$LastName', '$FirstName', '$password')";
  	mysqli_query($DataBase, $query);
  	$_SESSION['Username'] = $Username;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: index.php');
  }
}

// ... 
// LOGIN USER
if (isset($_POST['login_user'])) {
  $Username = mysqli_real_escape_string($DataBase, $_POST['Username']);
  $password = mysqli_real_escape_string($DataBase, $_POST['Password']);

  if (empty($Username)) {
    array_push($errors, "Username is required");
  }
  if (empty($password)) {
    array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
    // $password = md5($password);
    $password = $password;
    $query = "SELECT * FROM teachers WHERE Username='$Username' AND Password='$password'";
    $results = mysqli_query($DataBase, $query);
    if (mysqli_num_rows($results) == 1) {
      $_SESSION['Username'] = $Username;
      $_SESSION['success'] = "You are now logged in";
      header('location: Hometabs/home.php');
    }else {
      array_push($errors, "Wrong Username/password combination");
    }
  }
}

$SLastName = "";
$SFirstName = "";
$Course = "";
$YearLevel = "";
$Gender = "";

//REGISTER STUDENTS
if (isset($_POST['reg_students'])) {
  // receive all input values from the form
  $SLastName = mysqli_real_escape_string($DataBase, $_POST['LastName']);
  $SFirstName = mysqli_real_escape_string($DataBase, $_POST['FirstName']);
  $Course = mysqli_real_escape_string($DataBase, $_POST['Course']);
  $YearLevel = mysqli_real_escape_string($DataBase, $_POST['YearLevel']);
  $Gender = mysqli_real_escape_string($DataBase, $_POST['Gender']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($SLastName)) { array_push($errors, "Last name is required"); }
  if (empty($SFirstName)) { array_push($errors, "First name is required"); }
  if (empty($YearLevel)) { array_push($errors, "Year level is required"); }
  if (empty($Course)) { array_push($errors, "Course is required"); }
  if (empty($Gender)) { array_push($errors, "Gender is required"); }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$query = "INSERT INTO students (Course, LastName, FirstName, Gender,YearLevel)  VALUES('$Course', '$SLastName', '$SFirstName', '$Gender','$YearLevel')";
  	mysqli_query($DataBase, $query);
  	$_SESSION['success'] = "Added a students successfully";
  	header('location: ../Hometabs/student.php');
  }
}

// Initialize $Filter with an empty string or a default value
$Filter = [
  'Course' => '',
  'Year' => '',
];$defaults = [
  'Course' => '',
  'Year' => '',
];

// Check if the form has been submitted and the filter is set
  foreach ($Filter as $key => $value) {
    if (isset($_POST[$key])) {
      $Filter[$key] = $_POST[$key];
    }
  }

// Function to check and set the selected attribute
function FILTER($Value, $SValue) {
  return $Value == $SValue? 'selected' : '';
}

if (isset($_POST['reset'])) {
  // Reset the values
  $Filter = $defaults;
}


//Searching for students
$search = "";
if (isset($_POST['Search'])){
  // receive all input values from the form
  $search = mysqli_real_escape_string($DataBase, $_POST['Search']);
  
  $sql = "SELECT * FROM students";
  $result = $DataBase -> query($sql);
        if ($result==$search){
          echo "
          <tr>
          <td>".$a++."</td>
          <td>".$row['LastName'].", ".$row['FirstName']."</td>
          <td>".$row['Course']."</td>
          <td>".$row['Gender']."</td>
          </tr>
          ";

        }
  if ($result -> num_rows > 0){
      while ($row = $result -> fetch_assoc()){
      }
  }
  

}
ini_set('display_errors', 1);
error_reporting(E_ALL);

?>