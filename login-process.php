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
	$Name = clean($_POST['UserName']);
	$password = clean($_POST['password']);
	//Input Validations
	if($Name == '') {
		$errmsg_arr[] = 'UserName  missing';
		$errflag = true;
	}
	if($password == '') {
		$errmsg_arr[] = 'Password missing';
		$errflag = true;
	}
	
	//If there are input validations, redirect back to the login form
	if($errflag) {
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		session_write_close();
		header("location: index.php");
		exit();
	}
	
	
	//Create query
	$qry ="SELECT * FROM users WHERE UserName='$Name' AND Password='$password'";
    $result=mysql_query($qry);
	$rows=mysql_fetch_assoc($result);
	//Check whether the query was successful or not
	
		if(mysql_num_rows($result) == 1 && $rows['Access_Level']=="Admin") {
		
		//This code stores time the user last logged in:
  $row = mysql_fetch_assoc($result2);
  $_SESSION['last_login'] = $rows['Time'];
  $update = "UPDATE  users SET Time = NOW() WHERE  UserName = '$Name'";
  $result2 = mysql_query($update) or die(mysql_error());
  
			//Login Successful
			session_regenerate_id();
			$_SESSION['SESS_MEMBER_ID'] = $rows['UserId'];
			$_SESSION['SESS_FIRST_NAME'] = $rows['FirstName'];
			$_SESSION['SESS_LAST_NAME'] = $rows['LastName'];
			
			session_write_close();
			header("location: dashboard.php");
			exit();
		}
		elseif(mysql_num_rows($result) == 1 && $rows['Access_Level']=="BasicUser")
		
		{
		
		//This code stores time the user last logged in:
  $row = mysql_fetch_assoc($result2);
  $_SESSION['last_login'] = $rows['Time'];
  $update = "UPDATE  users SET Time = NOW() WHERE  UserName = '$Name'";
  $result2 = mysql_query($update) or die(mysql_error());
  
			//Login Successful
			session_regenerate_id();
			$_SESSION['SESS_MEMBER_ID'] = $rows['UserId'];
			$_SESSION['SESS_FIRST_NAME'] = $rows['FirstName'];
			$_SESSION['SESS_LAST_NAME'] = $rows['LastName'];
			session_write_close();
			header("location:dashboard.php");
			exit();
		
		}
		
		else
		 {
	    //Login failed
			header("location: login-failed.php");
			
		  }
	

?>