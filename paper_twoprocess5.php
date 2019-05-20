
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
	$math = clean($_POST['MATH']);
	$bio = clean($_POST['BIO']);
	$chem = clean($_POST['CHEM']);
	$phy = clean($_POST['PHY']);
	$econ = clean($_POST['ECON']);
	$agric = clean($_POST['AGRIC']);
	$geo = clean($_POST['GEO']);
	
	$ID = clean($_POST['MM']);
	 
  //This code updates the paper_two marks  
  $query2 = "UPDATE math5 SET paper_two = '$math'  WHERE id = '$ID'";
  $result2 = mysql_query($query2) or die(mysql_error());
  $query3 = "UPDATE biology5 SET paper_two = '$bio'  WHERE id = '$ID'";
  $result3 = mysql_query($query3) or die(mysql_error());
  $query5 = "UPDATE chemistry5 SET paper_two = '$chem'  WHERE id = '$ID'";
  $result5 = mysql_query($query5) or die(mysql_error());
  $query5 = "UPDATE physics5 SET paper_two = '$phy'  WHERE id = '$ID'";
  $result5 = mysql_query($query5) or die(mysql_error());
    $query6 = "UPDATE econ5 SET paper_two = '$econ'  WHERE id = '$ID'";
  $result6 = mysql_query($query6) or die(mysql_error());
    $query7 = "UPDATE  agric5 SET paper_two = '$agric'  WHERE id = '$ID'";
  $result7 = mysql_query($query7) or die(mysql_error());
    $query8 = "UPDATE  geo5 SET paper_two = '$geo'  WHERE id = '$ID'";
  $result8 = mysql_query($query8) or die(mysql_error());
    $query9 = "UPDATE  sub_math5 SET paper_two = '$sub_math'  WHERE id = '$ID'";
  $result9 = mysql_query($query9) or die(mysql_error());
    
	header("location: five.php");
?>

