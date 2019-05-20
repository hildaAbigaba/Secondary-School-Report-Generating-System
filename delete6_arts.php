<?php 
require'db.php';	
$get_id=$_GET['ID'];

mysql_query("delete from s6_arts where id = '$get_id' ")or die(mysql_error());
mysql_query("delete from gp_6_arts where id = '$get_id' ")or die(mysql_error());
mysql_query("delete from history_6_arts where id = '$get_id' ")or die(mysql_error());
mysql_query("delete from econ_6_arts where id = '$get_id' ")or die(mysql_error());
mysql_query("delete from luganda_6_arts where id = '$get_id' ")or die(mysql_error());
mysql_query("delete from arabic_6_arts where id = '$get_id' ")or die(mysql_error());
mysql_query("delete from f_art_6_arts where id = '$get_id' ")or die(mysql_error());
mysql_query("delete from islam_6_arts where id = '$get_id' ")or die(mysql_error());
mysql_query("delete from geog_6_arts where id = '$get_id' ")or die(mysql_error());
mysql_query("delete from ict_6_arts where id = '$get_id' ")or die(mysql_error());
mysql_query("delete from sub_math_6_arts where id = '$get_id' ")or die(mysql_error());

header('location:six_arts.php');
?>