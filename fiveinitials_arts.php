<?php
	//Start session
	session_start();
	
	//Include database connection details
	require_once('config.php');
	
	//Array to store validation errors
	$errmsg_arr = array();
	
	//Validation error flag
	$errflag = false;
	
	//Connect to mysql server
	$link = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);
	if(!$link) {
		die('Failed to connect to server: ' . mysql_error());
	}
	
	//Select database
	$db = mysql_select_db(DB_DATABASE);
	if(!$db) {
		die("Unable to select database");
	}
	
	//Function to sanitize values received from the form. Prevents SQL injection
	function clean($str) {
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		return mysql_real_escape_string($str);
	}
	
//Sanitize the POST values
	
	$GP = clean($_POST['GP']);
	$HIST = clean($_POST['HIST']);
	$ECON = clean($_POST['ECON']);
	$ENT = clean($_POST['ENT']);
	$LUGA = clean($_POST['LUGA']);
	$ARAB = clean($_POST['ARAB']);
	$ART = clean($_POST['ART']);
	$ISLAM = clean($_POST['ISLAM']);
	$GEO = clean($_POST['GEO']);
	$ICT= clean($_POST['ICT']);
	$MATH= clean($_POST['MATH']);
	
	//This code updates the initials table   
  $query1 = "update initials5_arts set GP = '$GP'";
  $result1 = mysql_query($query1) or die(mysql_error());
  
  $query2 = "update initials5_arts set HISTORY = '$HIST'";
  $result2 = mysql_query($query2) or die(mysql_error());
  
   $query3 = "update initials5_arts set ECON = '$ECON'";
  $result3 = mysql_query($query3) or die(mysql_error());
  
   $query4 = "update initials5_arts set LUGANDA = '$LUGA'";
  $result4 = mysql_query($query4) or die(mysql_error());
  
   $query5 = "update initials5_arts set ARAB = '$ARAB'";
  $result5 = mysql_query($query5) or die(mysql_error());
  
   $query6 = "update initials5_arts set ART = '$ART'";
  $result6 = mysql_query($query6) or die(mysql_error());
  
   $query7 = "update initials5_arts set ISLAM = '$ISLAM'";
  $result7 = mysql_query($query7) or die(mysql_error());
  
   $query8 = "update initials5_arts set GEOG = '$GEO'";
  $result8 = mysql_query($query8) or die(mysql_error());
  
   $query9 = "update initials5_arts set ICT = '$ICT'";
  $result9 = mysql_query($query9) or die(mysql_error());
  
   $query10 = "update initials5_arts set MATH = '$MATH'";
  $result10 = mysql_query($query10) or die(mysql_error());
  
 $query11 = "update initials5_arts set ENT = '$ENT'";
  $result11 = mysql_query($query11) or die(mysql_error());
 
	header("location: five_arts.php");
  
?>


