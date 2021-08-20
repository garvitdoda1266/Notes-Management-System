
<?php include('..\server.php')?>
<!doctype html>
<html lang="en">
  <head>
  	<title>Upload Notes</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/style.css">
  </head>
  <style>
.file-area {
  width: 100%;
  position: relative;
  
  input[type=file] {
    position: absolute;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    opacity: 0;
    cursor: pointer;
  }
  
  .file-dummy {
    width: 100%;
    padding: 30px;
    background: rgba(255,255,255,0.2);
    border: 2px dashed rgba(255,255,255,0.2);
    text-align: center;
    transition: background 0.3s ease-in-out;
    
    .success {
      display: none;
    }
  }
  
  &:hover .file-dummy {
    background: rgba(255,255,255,0.1);
  }
  
  input[type=file]:focus + .file-dummy {
    outline: 2px solid rgba(255,255,255,0.5);
    outline: -webkit-focus-ring-color auto 5px;
  }
  
  input[type=file]:valid + .file-dummy {
    border-color: rgba(0,255,0,0.4);
    background-color: rgba(0,255,0,0.3);

    .success {
      display: inline-block;
    }
    .default {
      display: none;
    }
  }
}


label {
  font-weight: 500;
  display: block;
  margin: 4px 0;
  font-size: 18px;
  overflow: hidden;
}

.form-controll {
  display: block;
  padding: 8px 16px;
  width: 100%;
  font-size: 16px;
  background-color: rgba(255,255,255,0.2);
  border: 1px solid black;
  color: black;
  font-weight: 200;
}

button {
  padding: 10px 40px;
  background: blueviolet;
  color: white;
  text-transform: uppercase;
  font-weight: 500;
  font-size: 14px;
  border: 0;
  cursor: pointer;
}

.form-group {
  max-width: 500px;
  margin: auto;
  margin-bottom: 30px;
}
  </style>
  <body style="background-image:url('back3.jpg');">
  
		<div class="wrapper d-flex align-items-stretch">
    <?php include('navigation.php')?>
      <div id="content" class="p-4 p-md-5 pt-5" style="text-align:left;">
      <form method="post" enctype="multipart/form-data">
  
  <h1 style="text-align:center;"><strong>File upload</strong></h1>
  
  <div class="form-group" >
    <label style="color:black;" for="title">Subject</label>
    <select name="subject" id="subject" class="form-controll">
    <option>Select</option>
    <option value="maths">Maths</option>
    <option value="physics">Physics</option>
    <option value="chemistry">Chemistry</option>
    <option value="english">English</option>
  </select>
  </div>
  <div class="form-group">
    <label style="color:black;" for="caption">Description</label>
    <input type="text" name="caption" id="caption" class="form-controll"/>
  </div>
  <div class="form-group file-area">
    <input type="file" name="fileToUpload" id="fileToUpload"/>
  </div>
  
  <div class="form-group">

    <button type="submit" id="submit" style="background-color:#4682B4" name="submit">Upload</button><?php include('upload.php')?>
  </div>
  
</form>
<link href='https://fonts.googleapis.com/css?family=Lato:100,200,300,400,500,600,700' rel='stylesheet' type='text/css'>
      </div>
		</div>
    
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
  
</html>









