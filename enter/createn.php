
<!doctype html>
<html lang="en">
  <head>
  	<title>Create Notes</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous">
    </script>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" 
          href=
"https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" 
          integrity=
"sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" 
          crossorigin="anonymous">
    <!-- fontawesome cdn For Icons -->
    <link rel="stylesheet"
          href=
"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" 
          integrity=
"sha512-PgQMlq+nqFLV4ylk1gwUOgm6CtIIXkKwaIHp/PAIWHzig/lKZSEGKEysh0TCVbHJXCLN7WetD8TFecIky75ZfQ==" 
          crossorigin="anonymous" />
    <link rel="stylesheet"
          href=
"https://pro.fontawesome.com/releases/v5.10.0/css/all.css" 
          integrity=
"sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p"
          crossorigin="anonymous" />
  </head>
  <style>
  h1 {
            padding-top: 40px;
            padding-bottom: 40px;
            text-align: center;
            color: #957dad;
            font-family: 'Montserrat', sans-serif;
        }
          
        section {
            padding: 5%;
            padding-top: 0;
            height: 100vh;
        }
          
        .side {
            margin-left: 0;
        }
          
        button {
            margin: 10px;
            border-color: #957dad !important;
            color: #888888 !important;
            margin-bottom: 25px;
        }
          
        button:hover {
            background-color: #fec8d8 !important;
        }
          
        textarea {
            padding: 3%;
            border-color: #957dad;
            border-width: thick;
        }
          
        .flex-box {
            display: flex;
            justify-content: center;
        }
</style>
  <body style="background-image:url('back3.jpg');">
		<div class="wrapper d-flex align-items-stretch">
		<?php include('navigation.php')?>
      <div id="content" class="p-4 p-md-5 pt-5">
      <form action="write.php" enctype="multipart/form-data" method="post">
      <section class="">
        <h1 class="shadow-sm">TEXT EDITOR</h1>
        <div class="flex-box">
            <div class="row">
                <div class="col">
                    <!-- Adding different buttons for
                         different functionality-->
                    <!--onclick attribute is added to give 
                        button a work to do when it is clicked-->
                        <div>
                    <button type="button" 
                            onclick="f6()" 
                            class="btn shadow-sm btn-outline-secondary" 
                            data-toggle="tooltip" 
                            data-placement="top" 
                            title="Uppercase Text">
            Upper Case</button>
                    <button type="button" 
                            onclick="f7()" 
                            class="btn shadow-sm btn-outline-primary" 
                            data-toggle="tooltip" 
                            data-placement="top" 
                            title="Lowercase Text">
            Lower Case</button>
                    <button type="button" 
                            onclick="f8()" 
                            class="btn shadow-sm btn-outline-primary" 
                            data-toggle="tooltip" 
                            data-placement="top" 
                            title="Capitalize Text">
            Capitalize</button>
                    <button type="button" 
                            onclick="f9()" 
                            class="btn shadow-sm btn-outline-primary side" 
                            data-toggle="tooltip" 
                            data-placement="top" 
                            title="Tooltip on top">
            Clear Text</button>
            </div>
                        <div style="padding-left:80px">
                    <button type="button" 
                            onclick="f1()" 
                            class=" shadow-sm btn btn-outline-secondary" 
                            data-toggle="tooltip"
                            data-placement="top" 
                            title="Bold Text">
            Bold</button>
                    <button type="button" 
                            onclick="f2()" 
                            class="shadow-sm btn btn-outline-success" 
                            data-toggle="tooltip" 
                            data-placement="top" 
                            title="Italic Text">
            Italic</button>
                    <button type="button" 
                            onclick="f3()" 
                            class=" shadow-sm btn btn-outline-primary" 
                            data-toggle="tooltip" 
                            data-placement="top"
                            title="Left Align">
            <i class="fas fa-align-left"></i></button>
                    <button type="button" 
                            onclick="f4()" 
                            class="btn shadow-sm btn-outline-secondary" 
                            data-toggle="tooltip" 
                            data-placement="top" 
                            title="Center Align">
            <i class="fas fa-align-center"></i></button>
                    <button type="button" 
                            onclick="f5()" 
                            class="btn shadow-sm btn-outline-primary" 
                            data-toggle="tooltip" 
                            data-placement="top" 
                            title="Right Align">
                            
                            
            <i class="fas fa-align-right"></i></button> </div>
            

                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-3 col-sm-3">
            </div>
            <div class="col-md-6 col-sm-9">
                <div class="flex-box">
                    <textarea id="textarea1" 
                              class="input shadow" 
                              name="textarea1" 
                              rows="10" 
                              cols="100" 
                              placeholder="Your text here ">
                    </textarea>
                    <br>
                </div>
            </div>
        </div>

        <div class="container" style="padding-left:390px;padding-top:30px;">
    <input type="submit" name="submit" id="submit" value="Submit">
    </section>
    
      </form>
      
		</div></div>
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <script>
    function f1() {
    //function to make the text bold using DOM method
    document.getElementById("textarea1").style.fontWeight = "bold";
}
  
function f2() {
    //function to make the text italic using DOM method
    document.getElementById("textarea1").style.fontStyle = "italic";
}
  
function f3() {
    //function to make the text alignment left using DOM method
    document.getElementById("textarea1").style.textAlign = "left";
}
  
function f4() {
    //function to make the text alignment center using DOM method
    document.getElementById("textarea1").style.textAlign = "center";
}
  
function f5() {
    //function to make the text alignment right using DOM method
    document.getElementById("textarea1").style.textAlign = "right";
}
  
function f6() {
    //function to make the text in Uppercase using DOM method
    document.getElementById("textarea1").style.textTransform = "uppercase";
}
  
function f7() {
    //function to make the text in Lowercase using DOM method
    document.getElementById("textarea1").style.textTransform = "lowercase";
}
  
function f8() {
    //function to make the text capitalize using DOM method
    document.getElementById("textarea1").style.textTransform = "capitalize";
}
  
function f9() {
    //function to make the text back to normal by removing all the methods applied 
    //using DOM method
    document.getElementById("textarea1").style.fontWeight = "normal";
    document.getElementById("textarea1").style.textAlign = "left";
    document.getElementById("textarea1").style.fontStyle = "normal";
    document.getElementById("textarea1").style.textTransform = "capitalize";
    document.getElementById("textarea1").value = " ";
}
    </script>
  </body>
</html>
