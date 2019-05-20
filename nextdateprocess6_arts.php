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
	
///////////////

	//Sanitize the POST values
	
	$Nextdate = clean($_POST['date']);
	$class_tr = clean($_POST['class_tr']);
	$head_tr = clean($_POST['head_tr']);
	
	//This code updates the next term date on all report cards 
  $query1 = "update s6_arts set nextdate = '$Nextdate'";
  $result1 = mysql_query($query1) or die(mysql_error());
  
    
  $query2 = "update s6_arts set class_tr = '$class_tr'";
  $result2 = mysql_query($query2) or die(mysql_error());
  
  $query3 = "update s6_arts set head_tr = '$head_tr'";
  $result3 = mysql_query($query3) or die(mysql_error());
	header("location: six_arts.php");
  
?>


