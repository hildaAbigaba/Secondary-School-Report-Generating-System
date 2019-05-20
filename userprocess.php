<?php
 include'topmenu.php';
?>
<?php include'sidemenu.php';?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />

</head>
<body>
<div id="container">
<br /><br /><br /><br />
<div id="updatestudent">
<table width="260" border="0" align="center" bgcolor="#45543D" height="203">
  <th colspan="2" align="center"><font color="#FFFFFF"> Password  Successfully Changed!!</font></th>
</table>
</div>
</div>
</body>
</html>
<?php
	//Start session
	//session_start();
	
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
    $Password = clean($_POST['Password']);
	
     if($Password == '') {
		$errmsg_arr[] = 'password missing';
		$errflag = true;
	}
	
	
			
//Create INSERT query
	$qry = "UPDATE users SET Password = '$Password'  WHERE UserId = '1'";
	$result = @mysql_query($qry);
	
	//Check whether the query was successful or not
	if($result) {
	    
		header("refresh:4;url=dashboard.php");
		//header("location: dashboard.php");
		exit();
	}else {
		die("Cannot Update The System");
	}
?>
