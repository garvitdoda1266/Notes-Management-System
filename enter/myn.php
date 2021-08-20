

<?php
session_start();
    $db = mysqli_connect('localhost', 'root', '', 'notes');
    mysqli_query($db, "CREATE table Reg (username VARCHAR(50), email VARCHAR(50),password VARCHAR(50), types varchar(50))");
    mysqli_query($db, "CREATE table upload (file_id INT(20),file_name varchar(30), file_uploaded_by varchar(40), file_uploaded_on date,subject VARCHAR(50), description VARCHAR(500), types varchar(50))" );
    // REGISTER USER
    $strSQL = "SELECT * FROM reg WHERE username = '".$_SESSION['username']."'";
// Execute the query (the recordset $rs contains the result)
$rs = mysqli_query($db, $strSQL);
// Loop the recordset $rs
// Each row will be made into an array ($row) using mysqli_fetch_array
while($row = mysqli_fetch_array($rs)) {
  // Write the value of the column FirstName (which is now in the array $row)
  $x = $row['username'];
  $y = $row['email'];
  $z = $row['types'];
}
    $records=array();
          $query="SELECT * FROM mynote WHERE file_uploaded_by='".$x."'";
        $records = mysqli_query($db, $query);
?>
<!doctype html>
<html lang="en">
  <head>
  	<title>Sidebar 02</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/style.css">
  </head>
  <style>
  
  </style>
  <body style="background-image:url('back3.jpg');">
		
		<div class="wrapper d-flex align-items-stretch">
    <?php include('navigation.php')?>
        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5 pt-5">

        <div style="text-align:center;font-size:50px;color:black"><b>My Notes</b></div>
        <div style="text-align:center;font-size:20px;color:black">
        View your created notes and download them!
        </div>
        <div class="container">
<br>
<div class="row">    
<table class="table table-striped table-hover ">
<thead>
<th>SNO.
</th>
<th>File Name</th>
<th>Download File</th>
</thead>
<tbody>
<?php $count=1;foreach($records as $record){?>
<tr>
<td><?php echo $count;$count=$count+1;?></td>
<td><?php echo $record['file_name']?></td>
<td><?php echo '<a href="downloadlink.php?file=' .$record['file_name']. '">Download</a>'?></td>
</tr>
<?php }?>
</tbody>
</table>
</div>
      </div>
		</div>
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>