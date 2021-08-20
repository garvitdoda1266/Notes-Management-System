<?php session_start();?>
<!doctype html>
<html lang="en">
  <head>
  	<title>Welcome</title>
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
        <div style="width:600px;color:black;font-size:60px;margin-top:130px;margin-left:140px;text-shadow:8px 8px 4px skyblue">
        <b>Welcome!</b><i class="fa fa-home" aria-hidden="true"></i><br>
        <?php echo $_SESSION['username']?>
        </div>
        <div  style="width:600px;color:black;font-size:20px;margin-left:140px;">Enjoy our website! Create Upload Download Repeat!</div>
        </div>
		</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>