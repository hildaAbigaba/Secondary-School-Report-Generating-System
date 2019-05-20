
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
	$StudentId = clean($_POST['student_id']);
	$FirstName = clean($_POST['FN']);
	$MiddleName = clean($_POST['MN']);
	$LastName = clean($_POST['LN']);
	$Term = clean($_POST['TERM']);
	$Year = clean($_POST['YEAR']);
	$Sex = clean($_POST['SEX']);
	$Combina = clean($_POST['COMBINA']);
	$House = clean($_POST['house']);
	$Class = 'S.5';
 
 if(!isset($_POST['TERM']))
{
  $errmsg_arr[] = "Please Select TERM!";
  $errflag = true;
}
  
   if(!isset($_POST['YEAR']))
{
  $errmsg_arr[] = "Please Select YEAR!";
  $errflag = true;
}
  
   if($StudentId == '') {
		$errmsg_arr[] = 'Student id missing';
		$errflag = true;
	}
	if($FirstName == '') {
		$errmsg_arr[] = 'FirstName missing';
		$errflag = true;
	}
	if($LastName == '') {
		$errmsg_arr[] = 'LastName missing';
		$errflag = true;
	}
		
	//Check for duplicate login ID
	if($StudentId != '') {
		$qry = "SELECT * FROM s5_arts WHERE id='$StudentId'";
		$result = mysql_query($qry);
		if($result) {
			if(mysql_num_rows($result) > 0) {
				$errmsg_arr[] = 'UserName already in use';
				$errflag = true;
			}
			@mysql_free_result($result);
		}
		else {
			die("Query failed");
		}
	}
	
	
	//If there are input validations, redirect back to the registration form
	if($errflag) {
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		session_write_close();
		header("location: addstudents5_arts.php");
		exit();
	}
	///////////////
	
	//Create INSERT query
	$qry = "INSERT INTO s5_arts(id,firstname,middlename,lastname,class,sex,combination,Term,year,House)VALUES('$StudentId','$FirstName','$MiddleName','$LastName','$Class','$Sex','$Combina','$Term','$Year','$House')";
	$result = @mysql_query($qry);
	//This code inserts ids in the suject tables
	$qry1 = "INSERT INTO gp_5_arts(id)VALUES('$StudentId')";
	$result1 = @mysql_query($qry1);
	
	$qry2 = "INSERT INTO history_5_arts(id)VALUES('$StudentId')";
	$result2 = @mysql_query($qry2);
	
	 $qry3 = "INSERT INTO econ_5_arts(id)VALUES('$StudentId')";
	$result3 = @mysql_query($qry3);
	
	 $qry5 = "INSERT INTO luganda_5_arts(id)VALUES('$StudentId')";
	$result5 = @mysql_query($qry5);
	
	$qry5 = "INSERT INTO arabic_5_arts(id)VALUES('$StudentId')";
	$result5 = @mysql_query($qry5);
	
	 $qry6 = "INSERT INTO f_art_5_arts(id)VALUES('$StudentId')";
	$result6 = @mysql_query($qry6);
	
	$qry7 = "INSERT INTO islam_5_arts(id)VALUES('$StudentId')";
	$result7 = @mysql_query($qry7);
	
	$qry8 = "INSERT INTO geog_5_arts(id)VALUES('$StudentId')";
	$result8 = @mysql_query($qry8);
	
	$qry9 = "INSERT INTO ict_5_arts(id)VALUES('$StudentId')";
	$result9 = @mysql_query($qry9);
	
	$qry10 = "INSERT INTO sub_math_5_arts(id)VALUES('$StudentId')";
	$result10 = @mysql_query($qry10);
	
	$qry11 = "INSERT INTO ent_5_arts(id)VALUES('$StudentId')";
	$result11 = @mysql_query($qry11);
	
	$qry12 = "INSERT INTO f_art_5_arts(id)VALUES('$StudentId')";
	$result12 = @mysql_query($qry12);
	
	
	//Check whether the query was successful or not
	if($result) {
		header("location: five_arts.php");
		exit();
	}else {
		die("Student Already Exists In The System");
	}
?>

