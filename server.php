<?php
session_start();

// initializing variables
$username = "";
$email    = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'notes');
mysqli_query($db, "CREATE table Reg (username VARCHAR(50), email VARCHAR(50),password VARCHAR(50), types varchar(50),picture varchar(255))");
mysqli_query($db, "CREATE table upload (file_id INT(20) NOT NULL AUTO_INCREMENT,file_name varchar(30), file_uploaded_by varchar(40), file_uploaded_on date,subject VARCHAR(50), description VARCHAR(500), types varchar(50),path varchar(500), PRIMARY KEY (file_id))" );
mysqli_query($db, "CREATE table mynote(file_name VARCHAR(50), file_uploaded_by VARCHAR(50))" );
// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
  $types= mysqli_real_escape_string($db, $_POST['type']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM reg WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = $password_1;//encrypt the password before saving in the database
  	$query = "INSERT INTO reg (username, email, password, types, picture) 
  			  VALUES('$username', '$email', '$password','$types','../I1/usericon.jpg')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: enter\index1.php');
  }
}


  if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($username)) {
  	array_push($errors, "Username is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	$password = $password;
  	$query = "SELECT * FROM reg WHERE username='$username' AND password='$password'";
  	$results = mysqli_query($db, $query);
    echo $password.$username.mysqli_num_rows($results) ;
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['username'] = $username;
      $_SESSION['types'] = $types;
      $_SESSION['email'] = $email;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: enter\index1.php');
  	}else {
  		array_push($errors, "Wrong username/password combination");
  	}
  }
}
?>
