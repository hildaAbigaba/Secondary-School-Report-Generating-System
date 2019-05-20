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
	$GP_1 = clean($_POST['GP_1']);
	$HIST_1 = clean($_POST['HIST_1']);
	$ECON_1 = clean($_POST['ECON_1']);
	$LUGA_1 = clean($_POST['LUGA_1']);
	$ARAB_1 = clean($_POST['ARAB_1']);
	$ART_1 = clean($_POST['ART_1']);
	$ISLAM_1 = clean($_POST['ISLAM_1']);
	$GEOG_1 = clean($_POST['GEOG_1']);
	$ENT_1 = clean($_POST['ENT_1']);
	$ICT_1 = clean($_POST['ICT_1']);
	$SUB_MATH_1 = clean($_POST['SUB_MATH_1']);
	
 //Sanitize the post marks for paper two
	$HIST_2 = clean($_POST['HIST_2']);
	$ECON_2 = clean($_POST['ECON_2']);
	$LUGA_2 = clean($_POST['LUGA_2']);
	$ARAB_2 = clean($_POST['ARAB_2']);
	$ART_2 = clean($_POST['ART_2']);
	$ISLAM_2 = clean($_POST['ISLAM_2']);
	$GEOG_2 = clean($_POST['GEOG_2']);
	$ENT_2 = clean($_POST['ENT_2']);
	
//Sanitize the post marks for paper three
	$LUGA_3 = clean($_POST['LUGA_3']);
	$ARAB_3 = clean($_POST['ARAB_3']);
	$ART_3 = clean($_POST['ART_3']);
	$ISLAM_3 = clean($_POST['ISLAM_3']);
	$GEOG_3 = clean($_POST['GEOG_3']);
	$ENT_3 = clean($_POST['ENT_3']);
	
//Sanitize the post marks for paper four
     $ART_4 = clean($_POST['ART_4']);
	
	$ID = clean($_POST['MM']);
	
	//This code updates the mot marks  
  $query1 = "UPDATE gp_5_arts SET paper_one_end = '$GP_1'  WHERE id = '$ID'";
  $result1 = mysql_query($query1) or die(mysql_error());
 
  $query2 = "UPDATE history_5_arts SET paper_one_end = '$HIST_1'  WHERE id = '$ID'";
  $result2 = mysql_query($query2) or die(mysql_error());
 
  $query3 = "UPDATE econ_5_arts SET paper_one_end = '$ECON_1'  WHERE id = '$ID'";
  $result3 = mysql_query($query3) or die(mysql_error());
 
  $query4 = "UPDATE luganda_5_arts SET paper_one_end = '$LUGA_1'  WHERE id = '$ID'";
  $result4 = mysql_query($query4) or die(mysql_error());
  
  $query5 = "UPDATE arabic_5_arts SET paper_one_end = '$ARAB_1'  WHERE id = '$ID'";
  $result5 = mysql_query($query5) or die(mysql_error());
  
    $query6 = "UPDATE f_art_5_arts SET paper_one_end = '$ART_1'  WHERE id = '$ID'";
  $result6 = mysql_query($query6) or die(mysql_error());
   
    $query7 = "UPDATE  islam_5_arts SET paper_one_end = '$ISLAM_1'  WHERE id = '$ID'";
  $result7 = mysql_query($query7) or die(mysql_error());
 
  $query8 = "UPDATE  geog_5_arts SET paper_one_end = '$GEOG_1'  WHERE id = '$ID'";
  $result8 = mysql_query($query8) or die(mysql_error());
   
     $query9 = "UPDATE ict_5_arts SET paper_one_end = '$ICT_1'  WHERE id = '$ID'";
  $result9 = mysql_query($query9) or die(mysql_error());
   
    $query10 = "UPDATE  sub_math_5_arts SET paper_one_end = '$SUB_MATH_1'  WHERE id = '$ID'";
  $result10 = mysql_query($query10) or die(mysql_error());
  
   $query11 = "UPDATE  ent_5_arts SET paper_one_end = '$ENT_1'  WHERE id = '$ID'";
  $result11 = mysql_query($query11) or die(mysql_error());
  //This code updates the two_paper_end column
  
  $query2 = "UPDATE history_5_arts SET two_paper_end = '$HIST_2'  WHERE id = '$ID'";
  $result2 = mysql_query($query2) or die(mysql_error());
 
  $query3 = "UPDATE econ_5_arts SET two_paper_end = '$ECON_2'  WHERE id = '$ID'";
  $result3 = mysql_query($query3) or die(mysql_error());
  
  $query4 = "UPDATE luganda_5_arts SET two_paper_end = '$LUGA_2'  WHERE id = '$ID'";
  $result4 = mysql_query($query4) or die(mysql_error());
  
  $query5 = "UPDATE arabic_5_arts SET two_paper_end = '$ARAB_2'  WHERE id = '$ID'";
  $result5 = mysql_query($query5) or die(mysql_error());
   
    $query6 = "UPDATE f_art_5_arts SET two_paper_end= '$ART_2'  WHERE id = '$ID'";
  $result6 = mysql_query($query6) or die(mysql_error());
   
    $query7 = "UPDATE  islam_5_arts SET two_paper_end = '$ISLAM_2'  WHERE id = '$ID'";
  $result7 = mysql_query($query7) or die(mysql_error());
  
  $query8 = "UPDATE  geog_5_arts SET two_paper_end = '$GEOG_2'  WHERE id = '$ID'";
  $result8 = mysql_query($query8) or die(mysql_error());
  
  $query9 = "UPDATE  ent_5_arts SET two_paper_end = '$ENT_2'  WHERE id = '$ID'";
  $result9 = mysql_query($query9) or die(mysql_error());
  
  //This code updates the paper_three_end column
 
  $query4 = "UPDATE luganda_5_arts SET paper_three_end = '$LUGA_3'  WHERE id = '$ID'";
  $result4 = mysql_query($query4) or die(mysql_error());
 
  $query5 = "UPDATE arabic_5_arts SET paper_three_end = '$ARAB_3'  WHERE id = '$ID'";
  $result5 = mysql_query($query5) or die(mysql_error());
  
    $query6 = "UPDATE f_art_5_arts SET paper_three_end = '$ART_3'  WHERE id = '$ID'";
  $result6 = mysql_query($query6) or die(mysql_error());
   
    $query7 = "UPDATE  islam_5_arts SET paper_three_end = '$ISLAM_3'  WHERE id = '$ID'";
  $result7 = mysql_query($query7) or die(mysql_error());
  
  $query8 = "UPDATE  geog_5_arts SET paper_three_end = '$GEOG_3'  WHERE id = '$ID'";
  $result8 = mysql_query($query8) or die(mysql_error());
   
   $query9 = "UPDATE  ent_5_arts SET paper_three_end = '$ENT_3'  WHERE id = '$ID'";
  $result9 = mysql_query($query9) or die(mysql_error()); 
  
    //This code updates the four_paper_end column 
  $query10 = "UPDATE f_art_5_arts SET four_paper_end = '$ART_4'  WHERE id = '$ID'";
  $result10 = mysql_query($query10) or die(mysql_error());
  
    header("location: five_arts.php");
  
?>

