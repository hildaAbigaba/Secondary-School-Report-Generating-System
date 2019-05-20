<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<p style=" padding-left:1000px;"><a href="five.php" title="Go Back"><<</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#" title="Print Report" onclick="window.print()">Print </a></P> 
<table   width="1110" border="0" style="border-collapse:collapse; margin-top:20px;" align="center">
<tr>
<td colspan="13" style="font-weight:600; color:#009900;" align="center">UACE   RESULTS (SCIENCES) GREEN  LIGHT  SECONDARY  SCHOOL  NANSANA</td>
</tr>
<tr>
<td colspan="13" height="10"></td>
</tr>
    <tr style="color:#FFFFFF; background-color:#666666;">
        <td width="100"><b>ID</b></td> 
        <td width="100"><b> FIRSTNAME</b></td> 
        <td width="100"><b> MIDDLENAME</b></td>
        <td width="100"><b> LASTNAME</b></td>
        <td width="100"><b>COMBINA</b></td>
        <td width="100"><b>MATH</b></td>
        <td width="100"><b>ECON</b></td>
        <td width="100"><b>PHYS</b></td>
        <td width="100"><b>CHEM</b></td>
        <td width="100"><b>GP</b></td>
        <td width="100"><b>ICT</b></td>
        <td width="100"><b>SUB_MTC</b></td>
        <td width="100"><b>POINTS</b></td>
    </tr> 
	<?php
mysql_connect("localhost", "root","")or die("failed to connect to the server").mysql_error();
mysql_select_db("advanced_green_light")or die("failed to select the database").mysql_error();
// Define your colors for the alternating rows 
$color1 = "#CCFFCC";  
$color2 = "#BFD8BC";  
$row_count = 0; 
// Perform an statndard SQL query: 
$sql_events = mysql_query("select * from s5 ") or die (mysql_error()); 
// We are going to use the "$row" method for this query. This is just my preference.
while ($row = mysql_fetch_array($sql_events)) { 
    $id = $row["id"]; 
     $firstname = $row["firstname"]; 
	 $middlename = $row["middlename"];
	 $lastname = $row["lastname"];
	 $combination = $row["combination"];
	 $math = $row["MATH"];
	 $econ = $row["ECON"];
	 $phys = $row["PHYS"];
	 $chem = $row["CHEM"];
	 $gp = $row["GP"];
	 $ict = $row["ICT"];
	 $sub_math = $row["SUB_MATH"];
	 $points = $row["POINTS"];
    /* Now we do this small line which is basically going to tell 
    PHP to alternate the colors between the two colors we defined above. */ 
    $row_color = ($row_count % 2) ? $color1 : $color2; 
    // Echo your table row and table data that you want to be looped over and over here.
    echo "<tr>";
    echo"<td  bgcolor='$row_color' nowrap>"; 
    echo"$id</td>";
    echo"<td bgcolor='$row_color'>"; 
	echo"$firstname</td>";
    echo"<td bgcolor='$row_color'>"; 
	echo"$middlename</td>";
    echo"<td bgcolor='$row_color'>"; 
	echo"$lastname</td>"; 
    echo"<td bgcolor='$row_color'>"; 
	echo"$combination</td>";
    echo"<td bgcolor='$row_color'>"; 
	echo"$math</td>";
	echo"<td bgcolor='$row_color'>"; 
	echo"$econ</td>";
	echo"<td bgcolor='$row_color'>"; 
	echo"$phys</td>";
	echo"<td bgcolor='$row_color'>"; 
	echo"$chem</td>";
	echo"<td bgcolor='$row_color'>"; 
	echo"$gp</td>";
	echo"<td bgcolor='$row_color'>"; 
	echo"$ict</td>";
	echo"<td bgcolor='$row_color'>"; 
	echo"$sub_math</td>";
	echo"<td bgcolor='$row_color'>"; 
	echo"$points</td>";
    echo"</tr>"; 
    // Add 1 to the row count 
    $row_count++; 
} 
// Close out your table. 
echo "</table>";
?>
</body>
</html>
