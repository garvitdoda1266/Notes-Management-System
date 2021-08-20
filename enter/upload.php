
<?php
$db = mysqli_connect('localhost', 'root', '', 'notes');
mysqli_query($db, "CREATE table Reg (username VARCHAR(50), email VARCHAR(50),password VARCHAR(50), types varchar(50))");
mysqli_query($db, "CREATE table upload (file_id INT(20),file_name varchar(30), file_uploaded_by varchar(40), file_uploaded_on date,subject VARCHAR(50), description VARCHAR(500), types varchar(50))" );
// REGISTER USER
if(isset($_POST["submit"])) {
  $errors = array(); 
$subject=$_POST['subject'];
$description=$_POST['caption'];
$target_dir = "uploads/";
$file_name=$_FILES["fileToUpload"]["name"];
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
//require('..\server.php');
// Check if image file is a actual image or fake image
if($_FILES["fileToUpload"]["name"]==NULL){
  array_push($errors, "Please Choose A File!");
    $uploadOk=0;
    goto x;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 50000000) {
  array_push($errors, "Sorry, your file is too large.");
  $uploadOk = 0;
}
x:
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  array_push($errors, "Sorry, your file was not uploaded.");
  include('window.php');
// if everything is ok, try to upload file
} 
else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    array_push($errors, "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.");
    $strSQL = "SELECT * FROM reg WHERE username = '".$_SESSION['username']."'";
    $rs = mysqli_query($db, $strSQL);
    while($row = mysqli_fetch_array($rs)) {
      $x = $row['username'];
      $y = $row['types'];
    }
    echo $y;
    $da=date("Y/m/d");
    $query = "INSERT INTO upload (file_name,file_uploaded_by,file_uploaded_on,subject,description,types,path) VALUES('$file_name', '".$_SESSION['username']."','$da','$subject','$description','$y','$target_file')";
  	mysqli_query($db, $query);
    include('window.php');;
  } 
  else {
    array_push($errors, "Sorry, there was an error uploading your file.");
    include('window.php');
  }
}
}
?>