<?php
$connect = mysql_connect('br-cdbr-azure-south-b.cloudapp.net','bb13edd72d8934','c8330e63','recycle_items') or die ("Can not connect to server");
$data = mysql_select_db('recycle_items',$connect) or die ("Can not connect to Recycle database");


?>
