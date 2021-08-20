<?php include('..\server.php')?>
<?php

$db = mysqli_connect('localhost', 'root', '', 'notes');
mysqli_query($db, "CREATE table Reg (username VARCHAR(50), email VARCHAR(50),password VARCHAR(50), types varchar(50))");
mysqli_query($db, "CREATE table upload (file_id INT(20),file_name varchar(30), file_uploaded_by varchar(40), file_uploaded_on date,subject VARCHAR(50), description VARCHAR(500), types varchar(50))" );
mysqli_query($db, "CREATE table mynote(file_name VARCHAR(50), file_uploaded_by VARCHAR(50))" );
// REGISTER USER
if(isset($_POST["submit"])) {
    $text=$_POST['textarea1'];
    $file_name="file".rand(1,100);
    $myfile = fopen('./mynotes/'.$file_name.'.txt', "w");
    fwrite($myfile, $text);
    fclose($myfile);
    $dir="mynotes/";
      $dest=$dir.$file_name.".txt";
    
      $query = "INSERT INTO mynote (file_name,file_uploaded_by) VALUES('$dest', '".$_SESSION['username']."')";
 
        mysqli_query($db, $query);
      header('location: createn.php');
  }
 
?>