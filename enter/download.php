<?php
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
    if(isset($_POST["submit1"])) {
        $sub=$_POST['subject'];
        $filter=$_POST['filter'];
        if($z=='student'&&$filter=='month'){
          $query="SELECT * FROM upload WHERE subject='".$sub."' AND types='teacher' AND MONTH(file_uploaded_on)=MONTH(SYSDATE())";
        }
        else if($z=='student'&&$filter=='week'){
          $query="SELECT * FROM upload WHERE subject='".$sub."' AND types='teacher' AND WEEK(file_uploaded_on)=WEEK(SYSDATE())";
        }
        else if($z=='student'&&$filter=='year'){
          $query="SELECT * FROM upload WHERE subject='".$sub."' AND types='teacher' AND YEAR(file_uploaded_on)=YEAR(SYSDATE())";
        }
        else if($z=='teacher'&&$filter=='month'){
          $query="SELECT * FROM upload WHERE subject='".$sub."' AND types='student' AND MONTH(file_uploaded_on)=MONTH(SYSDATE())";
        }
        else if($z=='teacher'&&$filter=='week'){
          $query="SELECT * FROM upload WHERE subject='".$sub."' AND types='student' AND WEEK(file_uploaded_on)=WEEK(SYSDATE())";
        }
        else if($z=='teacher'&&$filter=='year'){
          $query="SELECT * FROM upload WHERE subject='".$sub."' AND types='student' AND YEAR(file_uploaded_on)=YEAR(SYSDATE())";
        }
        $records = mysqli_query($db, $query);
      }
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title></title>
<link rel="stylesheet" href="css/bootstrap.min.css"/>
</head>
<body>
<div class="container">
<br>
<div class="row">    
<table class="table table-striped table-hover ">
<thead>
<th>SNO.
</th>
<th>Description</th>
<th>File Uploaded On</th>
<th>File Uploaded By</th>
<th>Download File</th>
</thead>
<tbody>
<?php $count=1;foreach($records as $record){?>
<tr>
<td><?php echo $count;$count=$count+1;?></td>
<td><?php echo $record['description']?></td>
<td><?php echo $record['file_uploaded_on']?></td>
<td><?php echo $record['file_uploaded_by']?></td>
<td><?php echo '<a href="downloadlink.php?file=' .$record['path']. '">Download</a>'?></td>
</tr>
<?php }?>
</tbody>
</table>
</div>
<script type="text/js" src="resources/js/bootstrap.min.js"></script>
</body>
</html>

