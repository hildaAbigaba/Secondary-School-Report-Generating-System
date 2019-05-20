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
	$MATH = clean($_POST['MATH']);
	$BIO = clean($_POST['BIO']);
	$CHEM = clean($_POST['CHEM']);
	$PHYS = clean($_POST['PHYS']);
	$CHEM = clean($_POST['CHEM']);
	$ECON = clean($_POST['ECON']);
	$ENT = clean($_POST['ENT']);
	$GEO = clean($_POST['GEO']);
	$ART = clean($_POST['ART']);
	$ICT= clean($_POST['ICT']);
	$SUB_MTC= clean($_POST['SUB_MTC']);
	
	//This code updates the initials table   
  $query1 = "update initials5 set GP = '$GP'";
  $result1 = mysql_query($query1) or die(mysql_error());
  
  $query2 = "update initials5 set MATH = '$MATH'";
  $result2 = mysql_query($query2) or die(mysql_error());
  
   $query3 = "update initials5 set  BIO = '$BIO'";
  $result3 = mysql_query($query3) or die(mysql_error());
  
   $query4 = "update initials5 set CHEM = '$CHEM'";
  $result4 = mysql_query($query4) or die(mysql_error());
  
   $query5 = "update initials5 set PHYS = '$PHYS'";
  $result5 = mysql_query($query5) or die(mysql_error());
  
   $query6 = "update initials5 set ECON = '$ECON'";
  $result6 = mysql_query($query6) or die(mysql_error());
  
  $query8 = "update initials5 set GEO = '$GEO'";
  $result8 = mysql_query($query8) or die(mysql_error());
  
   $query9 = "update initials5 set ICT = '$ICT'";
  $result9 = mysql_query($query9) or die(mysql_error());
  
   $query10 = "update initials5 set SUB_MTC = '$SUB_MTC'";
  $result10 = mysql_query($query10) or die(mysql_error());
  
  $query11 = "update initials5 set ENT = '$ENT'";
  $result11 = mysql_query($query11) or die(mysql_error());
  
  $query12 = "update initials5 set ART = '$ART'";
  $result12 = mysql_query($query12) or die(mysql_error());
  
 
	header("location: five.php");
  
?>


