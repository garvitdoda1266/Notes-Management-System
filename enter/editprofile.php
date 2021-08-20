<?php
$db = mysqli_connect('localhost', 'root', '', 'notes');
mysqli_query($db, "CREATE table Reg (username VARCHAR(50), email VARCHAR(50),password VARCHAR(50), types varchar(50))");
mysqli_query($db, "CREATE table upload (file_id INT(20),file_name varchar(30), file_uploaded_by varchar(40), file_uploaded_on date,subject VARCHAR(50), description VARCHAR(500), types varchar(50))" );
// REGISTER USER
if (isset($_POST["submit"])) {
	// receive all input values from the form
	$errors = array(); 
	$un = $_POST['username'];
	$em = $_POST['email'];
	$p1 = $_POST['pass1'];
	$p2 = $_POST['password_2'];
	$tdr = "profiles/";
	$fn = $_FILES["upload"]["name"];
	$tf = $tdr . basename($_FILES["upload"]["name"]);
  
	// form validation: ensure that the form is correctly filled ...
	// by adding (array_push()) corresponding error unto $errors array
	// first check the database to make sure 
	// a user does not already exist with the same username and/or email
	$user_check_query = "SELECT * FROM reg WHERE username='$username' OR email='$email' LIMIT 1";
	$result = mysqli_query($db, $user_check_query);
	$ur = mysqli_fetch_assoc($result);
	
	if ($ur) { // if user exists
	  if ($ur['username'] === $un) {
		array_push($errors, "Username already exists");
	  }
	  else{
		$query = "UPDATE reg SET username='$un' where username='".$_SESSION['username']."'";
		mysqli_query($db, $query);
	  }
	}
	if ($p1 != $p2) {
		array_push($errors, "The two passwords do not match!");
	}
	else{
		$query = "UPDATE reg SET password='$p1' where username='".$_SESSION['username']."'";
		mysqli_query($db, $query);
	}
	if($_FILES["upload"]["name"]!=NULL){
		if (move_uploaded_file($_FILES["upload"]["tmp_name"], $tf)) {
			$query = "UPDATE reg SET picture='$tf' where username='".$_SESSION['username']."'";
			mysqli_query($db, $query);
		} 
	}
	if($em!=NULL){
		$query = "UPDATE reg SET email='$em' where username='".$_SESSION['username']."'";
		mysqli_query($db, $query);
	}
  }
?>