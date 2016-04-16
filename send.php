<?php
session_start();
require_once("connectData.php");
$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$address = $_POST['address'];
$material = $_POST['material'];
$amount = $_POST['amount'];
$unit = $_POST['unit'];
$date = date('y-m-d');

///// check if the customer found before 
$select = mysql_query("select * from customer where custEmail = '$email'");
$num = mysql_num_rows($select);
if($num != 0)
{
	$found = mysql_fetch_array($select);
	$custID = $found['id'];
	$total = 0; 
	///// Add new deal for the given customer /////
	$insert = mysql_query("insert into custdeals values ('', '$custID' , '$material', '$amount', '$date')");
	/////// retrieve customer points //////////////////
	$selPoints = mysql_query("select matID, points, matQuantity from custdeals c , material m where m.id = c.matID and custID = '$custID'");
	while($deals = mysql_fetch_array($selPoints))
	{
		$total = $total + ($deals['points'] * $deals['matQuantity']);
	}
}
else 
{
	/////// add new customer and add new deal for the new customer 
	$insert_cust = mysql_query("insert into customer values ('' , '$name' , '$email' , '$phone' , '$address')");
	///// read the customer ID to add new deal for him ///////
	$sel_cust = mysql_query("select * from customer order by `id` desc");
	if($fnd_cust = mysql_fetch_array($sel_cust))
	{
		$custID = $fnd_cust['id'];
		///// insert new deal for the given customer 
		$insert_deal = mysql_query("insert into custdeals values ('', '$custID' , '$material', '$amount', '$date')");
		//// read the customer points /////////
		$sel_points = mysql_query("select points, matQuantity from custdeals c , material m where m.id = c.matID and custID = '$custID'");
		while($point_deals = mysql_fetch_array($sel_points))
		{
			$total = $point_deals['points'] * $point_deals['matQuantity'];
		}
	}
}
echo "<script>alert('Thank you so much! For helping the environment with us :) your request has been sent successfully. Please check your email for more details');"; 


			echo "window.location.href = 'index.php?p=$total' </script>";

?>