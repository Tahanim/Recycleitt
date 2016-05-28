

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recycle it</title>
    <meta name="description" content="" />
    <meta name="author" content="templatemo">
    <!-- Favicon-->
    <link rel="shortcut icon" href="./recyclet.png" />		
    <!-- Font Awesome -->
    <link href="font-awesome.min.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="bootstrap.min.css" rel="stylesheet">
    <!-- Camera -->
    <link href="camera.css" rel="stylesheet">
    <!-- Template  -->
    <link href="templatemo_style.css" rel="stylesheet">
  

                
 <div align="middle"  class="container_wapper" class="banner" id="templatemo_banner_slide">
<body> 
 <video width="290" style="margin-top: 50px;" height="190.5" controls>
  <source src="movie.webm" type="video/webm" >
  <source src="movie.mp4" type="video/mp4">
  <source src="movie.ogg" type="video/ogg">
Your browser does not support the video tag.
</video>
</body>
</div>

<script>
var x = document.getElementById("demo");

function getLocation() {
    <!-- check email and phone -->
    if (navigator.geolocation) {
        navigator.geolocation.watchPosition(showPosition);
    } else { 
        x.innerHTML = "Geolocation is not supported by this browser.";}
    }
    
function showPosition(position) {
   var lat = position.coords.latitude;
   var long = position.coords.longitude;
   var loc = lat + "," + long;


  <!-- window.location.href = 'index.php?a='+loc;-->


  document.getElementById('addressText').value = loc;

}
</script>


<div id="templatemo_mobile_menu">
        <ul class="nav nav-pills nav-stacked">
            <li><a href="#templatemo_banner_slide"><i class="glyphicon glyphicon-home"></i> &nbsp; Home</a></li>
            <li><a href="#templatemo_about"><i class="glyphicon glyphicon-briefcase"></i> &nbsp; About</a></li>
            <li><a href="#templatemo_events"><i class="glyphicon glyphicon-bullhorn"></i> &nbsp; Send a Request</a></li>
            <li><a href="#templatemo_timeline"><i class="glyphicon glyphicon-calendar"></i> &nbsp; Exchange</a></li>
            <li><a href="#templatemo_contact"><i class="glyphicon glyphicon-phone-alt"></i> &nbsp; Contact</a></li>
        </ul>
</div>
<div class="container_wapper">
    <div id="templatemo_banner_menu">
        <div class="container-fluid">
            <div class="col-xs-4 templatemo_logo">
            	<a href="">
                	<img src="recyclet.png" id="logo_img" alt="Recycle it website template" title="Recycle it Template" />
                	<!--<h1 id="logo_text">Recycle <span>it!</span></h1>-->
                </a>
            </div>
            <div class="col-sm-8 hidden-xs">
                <ul class="nav nav-justified">
                    <li><a href="#templatemo_banner_slide">Home</a></li>
                    <li><a href="#templatemo_about">About</a></li>
                    <li><a href="#templatemo_events">Request Us</a></li>
                    <li><a href="#templatemo_timeline">Exchange</a></li>
                    <li><a href="#templatemo_contact">Contact Us</a></li>
                 </ul>
            </div>
            <div class="col-xs-8 visible-xs">
                <a href="" id="mobile_menu"><span class="glyphicon glyphicon-th-list"></span></a>
            </div>
        </div>
    </div>
</div>
<div id="templatemo_about" class="container_wapper">
    <div class="container-fluid">
        <h1>About Recycle it</h1>
        <div class="clearfix testimonial_top_bottom_spacer"></div>
        <div class="col-xs-1 pre_next_wap" id="prev_testimonial">
            <a href=""><span class="glyphicon glyphicon-chevron-left pre_next"></span></a>
        </div>
        <div id="testimonial_text_wap" class="col-xs-9 col-sm-10">
              <div class="testimonial_text">
                <div class="col-sm-3">
                    <img src="Recycle-points.png" class="img-responsive" alt="Business Development Manager" />
                </div>
                <div class="col-sm-9">
                    <h2>Who we are?</h2>
                   
                    <p> <b style="color:rgb(204, 0, 82);">  Recycle</b> <b style="color:rgb(136, 204, 0);">it</b> is an idea and a website that encourage the Saudi society to protect and save its environment by promoting and rewarding the recycling behavior. Recycle it aims to help developing a cleaner, healthier environment that benefits our nation and society.</p>
                </div>
            </div><!--.testimonial_text-->
            <div class="testimonial_text">
                <div class="col-sm-3">
                    <img src="car.png" class="img-responsive" alt="Chief Public Relation Officer" />
                </div>
                <div class="col-sm-9">
                    <h2>What we do?</h2>
         <p> We collect recyclable items from users and deliver it to factories that will recycle them. This process goes through the following steps: <b style="color:rgb(255, 153, 51);">First </b> <b style="color:rgb(136, 204, 0);">users request our service by sending a request. </b> <b style="color:rgb(255, 153, 51);">Then,</b> <b style="color:rgb(136, 204, 0);"> we contact them to schedule a pickup time and data.</b> <b style="color:rgb(255, 153, 51);">After that,</b> <b style="color:rgb(136, 204, 0);">we send our drivers to collect the items from users.</b> <b style="color:rgb(255, 153, 51);"> Finally,</b> <b style="color:rgb(136, 204, 0);"> we send items to factories that recycle them.</b></p>
                </div>
            </div><!--.testimonial_text-->
            <div class="testimonial_text">
                <div class="col-sm-3">
                    <img src="waste.png" class="img-responsive" alt="Marketing Executive" />
                </div>
                <div class="col-sm-9">
                    <h2>What we take?</h2>

               <p> We collect <b style="color:rgb(51, 153, 255)"> any </b> and <b style="color:rgb(51, 153, 255)"> all</b> recyclable materials from <b style="color:rgb(51, 153, 255)">  blastic bottles </b> to <b style="color:rgb(51, 153, 255)"> electronic devices.</b> Any extra junk is very <b>valuable </b> in our trunk &#9786;!</p>
                </div>
            </div><!--.testimonial_text-->
            <div class="testimonial_text">
                <div class="col-sm-3">
                    <img src="recycle-tree.png" class="img-responsive" alt="Chief Executive Officer" />
                </div>
                <div class="col-sm-9">
                    <h2>What you get in return?</h2>
                   
                    <p><b style="color:rgb(0, 204, 102)">Trash for cash,</b> this is what we provide for our great users. In return for <b>your recyclable items</b>, you will receive many rewards to encourage you to give us all the useless junk in your house. And remember, <b style="color:rgb(0, 204, 102)"> more trash means more cash.</b></p>
                </div>


                
            </div><!--.testimonial_text-->        </div><!--#testimonial_text_wap-->

        <div class="col-xs-1 pre_next_wap" id="next_testimonial">
            <a href=""><span class="glyphicon glyphicon-chevron-right pre_next"></span></a>
        </div>
        <div class="clearfix testimonial_top_bottom_spacer"></div>
    </div>
    
</div><!--templatemo_about-->
<div id="templatemo_events" class="container_wapper">
    <div class="container-fluid">
        <h1>Send a Request to us</h1>
        
<h4 style="color:rgb(242, 242, 242)"> If you reached this page, it means that you made up your mind and finally you are ready to say goodbye to 
   <br> your junk that has long lived with you. We promise you that we will reward you for your heroic behavior towards our lovely environment. &#9851;&#9851;</h4>
 
 <h4 style="color:rgb(191, 191, 191);"> The <b style="color:rgb(255, 128, 191)"> following steps </b> will help you understand the process and guide through it:  </h4>

<p ><b> &#9758;</b> <b style="color:rgb(136, 204, 0);"> First,</b> you just need to fill out your personal information. </p>

<p> &#9758; <b style="color:rgb(136, 204, 0);"> Second, </b> tell us about your junk, what are you giving away? What are they made of? And some approximate measurements of the items.</p>
<p> &#9758; <b style="color:rgb(136, 204, 0);"> Third,</b> we will contact you for some more details, and to schedule a pick-up date and time.</p>

<p> &#9758; <b style="color:rgb(136, 204, 0);">Finally, </b> we will inform you of your points and how you can exchange them for great rewards.</p> 
      
        <div id="templatemo_events" class="container_wapper">
    <div class="container-fluid">
      
        <div class="col-md-4">
          
<figure>
            <img src="areaMap.png" width="350" height="350" alt="our location">
             <figcaption><em>*Please note that we currently collect items only from this area. <em></figcaption>
</figure>
 
			<?php
	   $points = "";
	   if(isset($_GET['p']))
	   {
	   	  $points = $_GET['p']; 
          echo "<script/> window.history.pushState('o','RI', 'http://recycleit.azurewebsites.net/'); </script>";
	   }
	   ?>		
 <div class="col-md-6">
      <p>Your current points</p>
     <input  readonly type="text" name="point" id="point" style="background-color: #e35354; color:#FFFFFF;"  placeholder= "Your points"   value="<?php echo $points; ?>"  required /> 
     
                </div>
        </div>
        <form action="send.php" method="post" class="col-md-8">
            <div class="row">
                
                <div class="col-md-6">
                    <p>Name</p>
                    <input type="text" name="name" id="name" placeholder="Your Name" required />
                </div>
                <div class="col-md-6">
                    <p>Phone</p>
                    <input type="text" name="phone" id="phone" placeholder="Your Phone" required />
                </div>
                 <div class="col-md-12">
                    <p>Email</p>
                    <input type="text" name="email" id="email"  placeholder="Your Email" required />
                </div>
                
             <div class="col-md-6">

                    <p>Location</p>
                    <textarea  rows="1" cols="1" name="address" id="addressText" required />
                 
                        <?php
$address = "";
$loc = "";
$latitude = 0;
$longitude = 0;
if(isset($_GET['a'])) 
{
	$loc = $_GET['a'];
} 
$geolocation = $loc;
$request = 'http://maps.googleapis.com/maps/api/geocode/json?latlng='.$geolocation.'&sensor=false'; 
$file_contents = file_get_contents($request);
$json_decode = json_decode($file_contents);
if(isset($json_decode->results[0])) {
    $response = array();
    foreach($json_decode->results[0]->address_components as $addressComponet) {
        if(in_array('political', $addressComponet->types)) {
                $response[] = $addressComponet->long_name; 
        }
    }

    if(isset($response[0])){ $first  =  $response[0];  } else { $first  = 'null'; }
    if(isset($response[1])){ $second =  $response[1];  } else { $second = 'null'; } 
    if(isset($response[2])){ $third  =  $response[2];  } else { $third  = 'null'; }
    if(isset($response[3])){ $fourth =  $response[3];  } else { $fourth = 'null'; }
    if(isset($response[4])){ $fifth  =  $response[4];  } else { $fifth  = 'null'; }

    if( $first != 'null' && $second != 'null' && $third != 'null' && $fourth != 'null' && $fifth != 'null' ) {
        $address = "Address: " . $first . ", City: " . $second . ", State: " . $fourth . ", Country: " . $fifth;  
    }
    else if ( $first != 'null' && $second != 'null' && $third != 'null' && $fourth != 'null' && $fifth == 'null'  ) {
        $address = "Address: " . $first . ", City: " . $second . ", State: " . $third . ", Country: " . $fourth;  
    }
    else if ( $first != 'null' && $second != 'null' && $third != 'null' && $fourth == 'null' && $fifth == 'null' ) {
        $address = "City: " . $first . ", State: " . $second . ", Country: " . $third ;  
    }
    else if ( $first != 'null' && $second != 'null' && $third == 'null' && $fourth == 'null' && $fifth == 'null'  ) {
        $address = "State: " . $first . ", Country: " . $second;  
    }
    else if ( $first != 'null' && $second == 'null' && $third == 'null' && $fourth == 'null' && $fifth == 'null'  ) {
        $address = "Country: " . $first ;  
    }
  }
  if($address == "")
	echo "";
	 else
	  echo $address;
?></textarea>
				 </div>
				<div class="col-md-6">
				   <br><br>
				   	 <button style="background-color:#e35354; font-size:18px; color:#FFFFFF;" onClick="getLocation()" type="button" class="booknow">Determine Your Current Location</button>
<p id="demo"></p> 
					<p>&nbsp;</p><p>&nbsp;</p>

                </div>
                 <div class="col-md-6">
                    <p>Material</p>
					<select name="material"><option selected="selected" value="0">- Select Material -</option>
					<?php
					require_once("connectData.php");
					$select = mysql_query("select * from material");
					while($found = mysql_fetch_array($select))
					{
						echo "<option value='$found[id]'>$found[matName]</option>";
					}
					?>
					</select>
                </div>
                <div class="col-md-6">
                    <p>Amount &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Measure Unit</p>
                    <select name="amount" style="width:46%;"><option selected="selected" value="0">-Select Amount-</option>
					<option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option><option>9</option><option>10</option>
					</select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<select name="unit" style="width:46%;"><option selected="selected" value="0">-Select Unit-</option>
					<option>KG</option><option>Device</option>
					</select>
                </div>
                <div class="col-xs-6 col-sm-3 col-md-offset-6">
                    <button style="background-color:#e35354; font-size:18px; color:#FFFFFF;" type="submit">Send</button>
                </div>
                <div class="col-xs-6 col-sm-3">
                    <button style="background-color:#e35354; font-size:18px; color:#FFFFFF;" type="reset">Reset</button>
                </div>
            </div>
        </form>
	
    </div>
</div>
<p>&nbsp;</p><p>&nbsp;</p>

<div id="templatemo_timeline" class="container_wapper">
    <h1 style="color:#000000;">Exchange Points</h1>
	<h4 style="color:rgb(255, 128, 191);" align="center" > Welcome to Rewards land &#9786;&#10083; !!  </h4>
        <h4  align="center"> Here you can exchange your points for some awesome  gift.  Make sure to check the points table to understand our points system.</h4>

<p style="color:#000000;" align="center" > &#10112; <b style="color:rgb(136, 204, 0);"> First,</b> enter your email. </p>
      <p style="color:#000000;" align="center"> &#10113; <b style="color:rgb(136, 204, 0);"> Second,</b> choose your gift card.</p>
      <p style="color:#000000;" align="center"> &#10114; <b style="color:rgb(136, 204, 0);"> Third,</b> check your e-mail to find your gift.</p>
       <p style="color:#000000;" align="center"> &#10061; <b style="color:rgb(136, 204, 0);">  Finally, </b> enjoy your praise along with your cleaner environment.</p>



	           <form action="exchange.php" method="post" class="col-md-8">
            <div class="row">
                <div class="col-md-12">
                    <p>Email</p>
                    <input type="text" name="email" id="email" placeholder= "Your Email" required />
                </div>
               
				 <div class="col-md-12">
                    <p>Exchange Options</p>
					<select name="exID"><option selected="selected" value="0">- Select your gift card -</option>
					<?php
					require_once("connectData.php");
					$select = mysql_query("select * from exchange");
					while($found = mysql_fetch_array($select))
					{
						echo "<option value='$found[id]'>$found[exchange_offer] . ($found[required_points]) </option>";
					}
					?>
					</select>
                </div>
                <div class="col-xs-6 col-sm-3 col-md-offset-6">
                    <button style="background-color:#e35354; font-size:18px; color:#FFFFFF;" type="submit">Exchange</button>
                </div>
                <div class="col-xs-6 col-sm-3">
                    <button style="background-color:#e35354; font-size:18px; color:#FFFFFF;" type="reset">Reset</button>
                </div>
				</div>
				</form>	
				<img src="images/table.png" width="350" height="300" alt="Material Points">	
				<p>&nbsp;</p><p>&nbsp;</p>
</div>
    
<div id="templatemo_contact" class="container_wapper">
    <div class="container-fluid">
        <h1>Contact Us</h1>
        <div class="col-xs-12">
          
        </div>
        <div class="col-md-4">
            <h2>Tell us your feedback &#10084;&#10084;</h2>
            <p>We love to hear from you &#10084; tell us what you like, what you don't, to be served better.</p>
            <br>
            <p><strong>Email:</strong> recycle.it.c@gmail.com<br /><strong>Phone:</strong> +966541406055<br /><strong>Website:</strong> www.Recycleit.com<br /><strong>Address:</strong> An Nuzhah, City: Riyadh, State: Riyadh Province, Country: Saudi Arabia</p>
            <ul class="list-inline social-link">
                <li>
                    <a href="https://twitter.com/Recycle_it2"><i class="fa fa-twitter"></i></a> 
                </li>
                <li>
                    <a href="https://www.facebook.com/profile.php?id=100011815686278"><i class="fa fa-facebook"></i></a> 
                </li>
                <li>
                    <a href="https://youtu.be/tW4UgFC6m5Y"><i class="fa fa-youtube"></i></a> 
                </li>
              
           </ul>
        </div>
        <form action="" method="post" class="col-md-8">
            <div class="row">
                <div class="col-md-12">
                
                </div>
                <div class="col-md-6">
                    <p>Name</p>
                    <input type="text" name="name" id="name" placeholder="Your Name" />
                </div>
                <div class="col-md-6">
                    <p>Email</p>
                    <input type="text" name="email" id="email" placeholder="Your Email" />
                </div>
                <div class="col-md-12">
                    <p>Subject</p>
                    <input type="text" name="subject" id="subject" placeholder="Subject" />
                </div>
                <div class="col-md-12">
                    <p>Message</p>
                    <textarea name="message" id="message"  placeholder="Write your message here..."></textarea>
                </div>
                <div class="col-xs-6 col-sm-3 col-md-offset-6">
                    <button type="submit">Send</button>
                </div>
                <div class="col-xs-6 col-sm-3">
                    <button type="reset">Reset</button>
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
<script src="js/jquery.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.singlePageNav.min.js"></script>
<script src="js/unslider.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>
<script src="js/templatemo_script.js"></script>
</body>
</html>
