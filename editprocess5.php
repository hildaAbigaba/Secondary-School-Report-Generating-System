
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
	$FirstName = clean($_POST['FN']);
	$MiddleName = clean($_POST['MN']);
	$LastName = clean($_POST['LN']);
    $Student_Id = clean($_POST['Student_Id']);
	
     if($FirstName == '') {
		$errmsg_arr[] = 'FirstName missing';
		$errflag = true;
	}
	if($MiddleName == '') {
		$errmsg_arr[] = 'MiddleName missing';
		$errflag = true;
	}
	if($LastName == '') {
		$errmsg_arr[] = 'LastName missing';
		$errflag = true;
	}
	
			
//Create INSERT query
	$qry = "UPDATE s5 SET firstname = '$FirstName' , middlename = '$MiddleName', lastname = '$LastName'  WHERE id = '$Student_Id'";
	$result = @mysql_query($qry);
	
	//Check whether the query was successful or not
	if($result) {
		header("location: five.php");
		exit();
	}else {
		die("User Already Exists In The System");
	}
?>

