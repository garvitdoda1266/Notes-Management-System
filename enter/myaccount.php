<?php
//session_start(); //Add this
//Also you have to add your connection file before your query
require('..\server.php');
// SQL query
$strSQL = "SELECT * FROM reg WHERE username = '".$_SESSION['username']."'";
// Execute the query (the recordset $rs contains the result)
$rs = mysqli_query($db, $strSQL);
// Loop the recordset $rs
// Each row will be made into an array ($row) using mysqli_fetch_array
while($row = mysqli_fetch_array($rs)) {
  // Write the value of the column FirstName (which is now in the array $row)
  $x = $row['username'];
  $y = $row['email'];
  $z = $row['picture'];
}
// Close the database connection
mysqli_close($db);
?>
<!doctype html>
<html lang="en">
  <head>
  	<title>My Account</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <style>
        .card {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        max-width: 500px;
        margin: auto;
        text-align: center;
        }
        .title {
        color: grey;
        font-size: 18px;
        }
        button {
        border: none;
        outline: 0;
        display: inline-block;
        padding: 8px;
        color: white;
        background-color: #000;
        text-align: center;
        cursor: pointer;
        width: 100%;
        font-size: 18px;
        }
        button:hover, a:hover {
        opacity: 0.7;
        }
        /* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}
/* Modal Content */
.modal-content {
  position: relative;
  background-color: #fefefe;
  margin: auto;
  padding: 0;
  border: 1px solid #888;
  width: 80%;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
  -webkit-animation-name: animatetop;
  -webkit-animation-duration: 0.4s;
  animation-name: animatetop;
  animation-duration: 0.4s
}
/* Add Animation */
@-webkit-keyframes animatetop {
  from {top:-300px; opacity:0} 
  to {top:0; opacity:1}
}
@keyframes animatetop {
  from {top:-300px; opacity:0}
  to {top:0; opacity:1}
}
/* The Close Button */
.close {
  color: white;
  float: right;
  font-size: 28px;
  font-weight: bold;
}
.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
.modal-header {
  padding: 2px 16px;
  background-color: #4682B4;
  color: white;
}
.modal-body {
    text-align:center;
}
.modal-footer {
  padding: 2px 40px;
  background-color: #4682B4;
  color: white;
  text-align:center;
}
  </style>
  </head>
  <body style="background-image:url('back3.jpg');">
		<div class="wrapper d-flex align-items-stretch">
    <?php include('navigation.php')?>
        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5 pt-5">
        <div style="text-align:center;font-size:60px;color:black">User Profile</div>
        <div class="card">
        <img src="<?php echo $z?>" alt="John" style="width:70%; padding-left:155px; padding-top:20px">
        <h1><?php echo $x?></h1>
        <p class="title"><?php echo $y?></p>
       <p><button id= "myBtn" style="background-color:#4682B4">Edit Profile</button></p>
       <?php include('editprofile.php')?>
        <?php include('..\errors.php')?>
        </div>
      </div>
		</div>
<!-- The Modal -->
<div id="myModal" class="modal">
  <!-- Modal content -->
  <div class="modal-content">
  <span class="close" style="color:grey;font-size:50px;padding-left:10px">&times;</span>
    <div class="modal-body">
    <div class="container" style="padding:100px;">
    <h1 style="text-shadow:2px 2px 2px blue;color:pink">EDIT PROFILE</h1>
    <form method="post" action="myaccount.php" enctype="multipart/form-data" >
    <input  type="file"  id="upload" name="upload" style="display:none" onchange="readURL(this);" accept="image/*"/><a id="upload_link"><img id="blah" src="..\I1\usericon.jpg" alt="John" style="width:30%;"></a>
        <div class="row">
            <div class="col-lg-12 col-md-6 col-12">
            <div class="form-group">
                <div class="row">
                    <div class="col-lg-12">
                        <label>Username</label>
                            <input type="text" name="username" id="username" class="form-control" value="<?php echo $x?>" required>
                    </div>
                </div>
            </div>
            <div class="form-group">
            <label>Email Id</label>
            <input type="email" name="email" id="email"  class="form-control" required>
            </div>
            <div class="form-group">
            <label>Password</label>
            <input type="password" name="pass1" id="pass1" class="form-control" required>
            </div>
            <div class="form-group">
            <label>Confirm password</label>
            <input type="password" name="password_2" id="password_2" class="form-control" required>
            </div>
            <div class="form-group p-2">
            <button class="btn btn-primary" type="submit" id="submit" name="submit">SAVE</button>
            </div>
            </div>
        </div>
    </form> 
    </div>
    </div>
  </div>
</div>
<script>
// Get the modal
var modal = document.getElementById("myModal");
// Get the button that opens the modal
var btn = document.getElementById("myBtn");
// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];
// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}
// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
$(function(){
$("#upload_link").on('click', function(e){
    e.preventDefault();
    $("#upload:hidden").trigger('click');
});
});
function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#blah')
                    .attr('src', e.target.result)
                    .width(150)
                    .height(150);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
    document.getElementById("username").readOnly = true;
</script>
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>