<?php
session_start();
require_once("connectData.php");
$name = $_POST['name'];
$pass = $_POST['pass'];
///// check if the admin found
$select = mysql_query("select * from admin where adminName = '$name' and adminPass = '$pass'");
$num = mysql_num_rows($select);
if($num != 0)
{
	echo "<script>window.location.href = 'admin.php' </script>";
}
else 
{
	echo "<script>alert('Sorry, Username or Password error, try again');"; 
	echo "window.location.href = 'login.php' </script>";
}
?>