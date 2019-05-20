<?php 
require'db.php';	
$get_id=$_GET['ID'];

mysql_query("delete from s5_arts where id = '$get_id' ")or die(mysql_error());
mysql_query("delete from gp_5_arts where id = '$get_id' ")or die(mysql_error());
mysql_query("delete from history_5_arts where id = '$get_id' ")or die(mysql_error());
mysql_query("delete from econ_5_arts where id = '$get_id' ")or die(mysql_error());
mysql_query("delete from luganda_5_arts where id = '$get_id' ")or die(mysql_error());
mysql_query("delete from arabic_5_arts where id = '$get_id' ")or die(mysql_error());
mysql_query("delete from f_art_5_arts where id = '$get_id' ")or die(mysql_error());
mysql_query("delete from islam_5_arts where id = '$get_id' ")or die(mysql_error());
mysql_query("delete from geog_5_arts where id = '$get_id' ")or die(mysql_error());
mysql_query("delete from ict_5_arts where id = '$get_id' ")or die(mysql_error());
mysql_query("delete from sub_math_5_arts where id = '$get_id' ")or die(mysql_error());

header('location:five_arts.php');
?>