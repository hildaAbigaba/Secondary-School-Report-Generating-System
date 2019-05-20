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
	
   //Sanitize the post marks for paper one
	$gp_1 = clean($_POST['GP_1']);
	$math_1 = clean($_POST['MATH_1']);
	$bio_1 = clean($_POST['BIO_1']);
	$chem_1 = clean($_POST['CHEM_1']);
	$phy_1 = clean($_POST['PHY_1']);
	$econ_1 = clean($_POST['ECON_1']);
	$geo_1 = clean($_POST['GEO_1']);
	$ent_1 = clean($_POST['ENT_1']);
	$art_1 = clean($_POST['ART_1']);
	$sub_math_1 = clean($_POST['SUB_MATH_1']);
	$ict_1 = clean($_POST['ICT_1']);
	
 //Sanitize the post marks for paper two
	$math_2 = clean($_POST['MATH_2']);
	$bio_2 = clean($_POST['BIO_2']);
	$chem_2 = clean($_POST['CHEM_2']);
	$phy_2 = clean($_POST['PHY_2']);
	$econ_2 = clean($_POST['ECON_2']);
	$geo_2 = clean($_POST['GEO_2']);
	$ent_2 = clean($_POST['ENT_2']);
	$art_2 = clean($_POST['ART_2']);
	
//Sanitize the post marks for paper three

	$bio_3 = clean($_POST['BIO_3']);
	$chem_3 = clean($_POST['CHEM_3']);
	$phy_3 = clean($_POST['PHY_3']);
	$econ_3 = clean($_POST['ECON_3']);
	$geo_3 = clean($_POST['GEO_3']);
	$ent_3 = clean($_POST['ENT_3']);
	$art_3 = clean($_POST['ART_3']);
	$art_4 = clean($_POST['ART_4']);
	$ID = clean($_POST['MM']);
	
	//This code updates the mot marks  
  $query1 = "UPDATE gp6 SET paper_one_mot = '$gp_1'  WHERE id = '$ID'";
  $result1 = mysql_query($query1) or die(mysql_error());
  $query2 = "UPDATE math6 SET paper_one_mot = '$math_1'  WHERE id = '$ID'";
  $result2 = mysql_query($query2) or die(mysql_error());
  $query3 = "UPDATE biology6 SET paper_one_mot = '$bio_1'  WHERE id = '$ID'";
  $result3 = mysql_query($query3) or die(mysql_error());
  $query4 = "UPDATE chemistry6 SET paper_one_mot = '$chem_1'  WHERE id = '$ID'";
  $result4 = mysql_query($query4) or die(mysql_error());
  $query5 = "UPDATE physics6 SET paper_one_mot = '$phy_1'  WHERE id = '$ID'";
  $result5 = mysql_query($query5) or die(mysql_error());
    $query6 = "UPDATE econ6 SET paper_one_mot = '$econ_1'  WHERE id = '$ID'";
  $result6 = mysql_query($query6) or die(mysql_error());
    $query7 = "UPDATE  geo6 SET paper_one_mot = '$geo_1'  WHERE id = '$ID'";
  $result7 = mysql_query($query7) or die(mysql_error());
     $query9 = "UPDATE ict6 SET paper_one_mot = '$ict_1'  WHERE id = '$ID'";
  $result9 = mysql_query($query9) or die(mysql_error());
    $query10 = "UPDATE  sub_math6 SET paper_one_mot = '$sub_math_1'  WHERE id = '$ID'";
  $result10 = mysql_query($query10) or die(mysql_error());
  $query11 = "UPDATE  ent_6 SET paper_one_mot = '$ent_1'  WHERE id = '$ID'";
  $result11 = mysql_query($query11) or die(mysql_error());
  $query12 = "UPDATE  f_art_6 SET paper_one_mot = '$art_1'  WHERE id = '$ID'";
  $result12 = mysql_query($query12) or die(mysql_error());
  
  //This code updates the two_paper_mot column
  
  $query2 = "UPDATE math6 SET two_paper_mot = '$math_2'  WHERE id = '$ID'";
  $result2 = mysql_query($query2) or die(mysql_error());
  $query3 = "UPDATE biology6 SET two_paper_mot = '$bio_2'  WHERE id = '$ID'";
  $result3 = mysql_query($query3) or die(mysql_error());
  $query4 = "UPDATE chemistry6 SET two_paper_mot = '$chem_2'  WHERE id = '$ID'";
  $result4 = mysql_query($query4) or die(mysql_error());
  $query5 = "UPDATE physics6 SET two_paper_mot = '$phy_2'  WHERE id = '$ID'";
  $result5 = mysql_query($query5) or die(mysql_error());
    $query6 = "UPDATE econ6 SET two_paper_mot = '$econ_2'  WHERE id = '$ID'";
  $result6 = mysql_query($query6) or die(mysql_error());
    $query7 = "UPDATE  geo6 SET two_paper_mot = '$geo_2'  WHERE id = '$ID'";
  $result7 = mysql_query($query7) or die(mysql_error());
    $query10 = "UPDATE ent_6 SET two_paper_mot = '$ent_2'  WHERE id = '$ID'";
  $result10 = mysql_query($query10) or die(mysql_error());
  $query11 = "UPDATE f_art_6 SET two_paper_mot = '$art_2'  WHERE id = '$ID'";
  $result11 = mysql_query($query11) or die(mysql_error());
  
  //This code updates the paper_three_mot column
  
  $query3 = "UPDATE biology6 SET paper_three_mot = '$bio_3'  WHERE id = '$ID'";
  $result3 = mysql_query($query3) or die(mysql_error());
  $query4 = "UPDATE chemistry6 SET paper_three_mot = '$chem_3'  WHERE id = '$ID'";
  $result4 = mysql_query($query4) or die(mysql_error());
  $query5 = "UPDATE physics6 SET paper_three_mot = '$phy_3'  WHERE id = '$ID'";
  $result5 = mysql_query($query5) or die(mysql_error());
  $query6 = "UPDATE  geo6 SET paper_three_mot = '$geo_3'  WHERE id = '$ID'";
  $result6 = mysql_query($query6) or die(mysql_error());
  $query7 = "UPDATE  ent_6 SET paper_three_mot = '$ent_3'  WHERE id = '$ID'";
  $result7 = mysql_query($query7) or die(mysql_error());
  $query8 = "UPDATE  f_art_6 SET paper_three_mot = '$art_3'  WHERE id = '$ID'";
  $result8 = mysql_query($query8) or die(mysql_error());
  $query9 = "UPDATE  f_art_6 SET four_paper_mot = '$art_4'  WHERE id = '$ID'";
  $result9 = mysql_query($query9) or die(mysql_error());
    
   header("location: six.php");
  
?>

