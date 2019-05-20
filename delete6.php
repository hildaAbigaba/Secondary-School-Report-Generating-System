<?php 
require'db.php';	
$get_id=$_GET['ID'];

mysql_query("delete from s6 where id = '$get_id' ")or die(mysql_error());
mysql_query("delete from gp6 where id = '$get_id' ")or die(mysql_error());
mysql_query("delete from math6 where id = '$get_id' ")or die(mysql_error());
mysql_query("delete from biology6 where id = '$get_id' ")or die(mysql_error());
mysql_query("delete from chemistry6 where id = '$get_id' ")or die(mysql_error());
mysql_query("delete from physics6 where id = '$get_id' ")or die(mysql_error());
mysql_query("delete from econ6 where id = '$get_id' ")or die(mysql_error());
mysql_query("delete from geo6 where id = '$get_id' ")or die(mysql_error());
mysql_query("delete from gp6 where id = '$get_id' ")or die(mysql_error());
mysql_query("delete from ict6 where id = '$get_id' ")or die(mysql_error());
mysql_query("delete from sub_math6 where id = '$get_id' ")or die(mysql_error());

header('location:six.php');
?>