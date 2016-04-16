<?php
session_start();
require_once("connectData.php");
$email = $_POST['email'];
$ex = $_POST['exID'];
$points = 0; 

///// check if the customer found before 
$select = mysql_query("select * from customer where custEmail = '$email'");
$num = mysql_num_rows($select);
if($num != 0)
{
	$found = mysql_fetch_array($select);
	$custID = $found['id'];
	$total = 0; 
	/////// retrieve customer points //////////////////
	$selPoints = mysql_query("select points, matQuantity from custdeals c , material m where m.id = c.matID and custID = '$custID'");
	while($deals = mysql_fetch_array($selPoints))
	{
		$total = $total + ($deals['points'] * $deals['matQuantity']);
	}
	///// retrieve exchange option required points //////////////
	$selRequire = mysql_query("select * from exchange where `id` = '$ex'");
	while($requires = mysql_fetch_array($selRequire))
	{
		$points = $requires['required_points'];
	}
	
	if($total >= $points)
	{
		///// ensure exchange process 
		$insert = mysql_query("insert into cust_exchange values ('', '$ex','$custID')");
		echo "<script>alert('Thank you!! your gift card will be send soon to your email');"; 
			echo "window.location.href = 'index.php' </script>";
	}
	else
	{
		echo "<script>alert('Sorry, your exchange request could not complete, You do not have enough points');"; 
		echo "window.location.href = 'index.php' </script>";
	}
}
else 
{
		echo "<script>alert('Sorry, this email is not assigned to a user, please try again.');"; 
		echo "window.location.href = 'index.php' </script>";
}
?>