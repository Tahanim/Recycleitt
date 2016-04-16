<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <title>Recycle it</title>
    <meta name="description" content="" />

    <meta name="author" content="templatemo">

    <link rel="shortcut icon" href="./recyclet.png" />		

    <link href="font-awesome.min.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="bootstrap.min.css" rel="stylesheet">
    <!-- Camera -->
    <link href="camera.css" rel="stylesheet">
    <!-- Template  -->
    <link href="templatemo_style.css" rel="stylesheet">


<div id="templatemo_mobile_menu">
        <ul class="nav nav-pills nav-stacked">
            <li><a href="index.php"></i> &nbsp; Home</a></li>
        </ul>
</div>
<div class="container_wapper">
    <div id="templatemo_banner_menu">
        <div class="container-fluid">
            <div class="col-xs-4 templatemo_logo">
            	<a href="">
                	<img src="recyclet.png" id="logo_img" alt="Recycle it" title="Recycle it template" />
                	<h1 id="logo_text">Recycle <span>it!</span></h1>
                </a>
            </div>
            <div class="col-sm-8 hidden-xs">
                <ul class="nav nav-justified">
                    <li><a href="index.php">Home</a></li>
                 </ul>
            </div>
            <div class="col-xs-8 visible-xs">
                <a href="" id="mobile_menu"><span class="glyphicon glyphicon-th-list"></span></a>
            </div>
        </div>
    </div>
</div>
<div id="templatemo_events" class="container_wapper">
    <div class="container-fluid">
	<br><br>
        <h1>Administrator Login</h1>
        <div id="templatemo_contact" class="container_wapper">
    <div class="container-fluid">
      
 
        </div>
        <form action="log.php" method="post" class="col-md-8">
            <div class="row">
			 <div class="col-md-6">
                <p>User Name</p>
                    <input type="text" name="name" id="name" placeholder="Your Name" required />
                </div>
                <div class="col-md-6">
                    <p>Password</p>
                    <input type="password" name="pass" id="pass" placeholder="Your Password" required />
                </div>
              
                <div class="col-xs-6 col-sm-3 col-md-offset-6">
                    <button style="background-color:#e35354; font-size:18px; color:#FFFFFF;" type="submit">Login</button> 
                </div>
            </div>
        </form>
	
    </div>
</div>
<div id="templatemo_footer">
    <div>
        <p id="footer">Copyright &copy; 2016 Recycle it</p>
    </div>
</div>
<script src="jquery.min.js"></script>
<script src="jquery-ui.min.js"></script>
<script src="bootstrap.min.js"></script>
<script src="jquery.singlePageNav.min.js"></script>
<script src="unslider.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>
<script src="templatemo_script.js"></script>
</body>
</html>
