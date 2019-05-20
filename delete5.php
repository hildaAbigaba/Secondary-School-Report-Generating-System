<?php 
require'db.php';	
$get_id=$_GET['ID'];

mysql_query("delete from s5 where id = '$get_id' ")or die(mysql_error());
mysql_query("delete from gp5 where id = '$get_id' ")or die(mysql_error());
mysql_query("delete from math5 where id = '$get_id' ")or die(mysql_error());
mysql_query("delete from biology5 where id = '$get_id' ")or die(mysql_error());
mysql_query("delete from chemistry5 where id = '$get_id' ")or die(mysql_error());
mysql_query("delete from physics5 where id = '$get_id' ")or die(mysql_error());
mysql_query("delete from econ5 where id = '$get_id' ")or die(mysql_error());
mysql_query("delete from geo5 where id = '$get_id' ")or die(mysql_error());
mysql_query("delete from gp5 where id = '$get_id' ")or die(mysql_error());
mysql_query("delete from ict5 where id = '$get_id' ")or die(mysql_error());
mysql_query("delete from sub_math5 where id = '$get_id' ")or die(mysql_error());

header('location:five.php');
?>