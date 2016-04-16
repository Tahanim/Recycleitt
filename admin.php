<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
     <title>Recycle it</title>
    <meta name="description" content="" />
   
    <meta name="author" content="templatemo">
 
    <link rel="shortcut icon" href="./recyclet.png" />		
  
    <link href="css/font-awesome.min.css" rel="stylesheet">

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/camera.css" rel="stylesheet">
 
    <link href="css/templatemo_style.css" rel="stylesheet">


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
                	<img src="recyclet.png" id="logo_img" alt="Recycle it website template" title="Recycle it Template" />
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
        <h1>Users Requests </h1>
        <div id="templatemo_contact" class="container_wapper">
    <div class="container-fluid">
      
<table align="center" width="80%" border="2" ><tr style="background-color:#e35354; font-size:18px; color:#FFFFFF;"><td>User Name</td><td>User Email</td><td>Material</td><td>Quantity</td><td>Request Date</td><td>Location</td><td>Points</td></tr>
<?php
require_once("connectData.php");
$select = mysql_query("select custName, custEmail, matName, matQuantity, dealDate , custAddress , points from customer c, material m, custdeals d where c.id = d.custID and m.id = d.matID");
while($found = mysql_fetch_array($select))
{
	echo "<tr style='background-color:#ffffff; font-size:18px;'><td>$found[custName]</td><td>$found[custEmail]</td><td>$found[matName]</td><td>$found[matQuantity]</td><td>$found[dealDate]</td><td>$found[custAddress]</td><td>$found[points]</td></tr>";
}
?>

</table>
<p>&nbsp;</p><p>&nbsp;</p>
        </div>
    </div>
</div>
<div id="templatemo_footer">
    <div>
        <p id="footer">Copyright &copy; 2016 Recycle it</p>
    </div>
</div>
<script src="js/jquery.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.singlePageNav.min.js"></script>
<script src="js/unslider.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>
<script src="js/templatemo_script.js"></script>
</body>
</html>