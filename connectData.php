<?php
$connect = mysql_connect('localhost','root','') or die ("Can not connect to server");
$data = mysql_select_db('recycle_items',$connect) or die ("Can not connect to Recycle database");


// DB connection info
$host = "br-cdbr-azure-south-b.cloudapp.net";
$user = "bb13edd72d8934";
$pwd = "c8330e63";
$db = "recycle_items";
?>