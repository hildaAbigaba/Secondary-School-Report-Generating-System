<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>performance_statement</title>
<style>

-->This code forces most browsers to repeat table headers on every generated page
@media print {
   thead {display: table-header-group;}
}
</style>
</head>
<body>
<?php require'db.php';?>
<p style=" padding-left:900px;">Date:<?php $date= date("d/m/Y");echo'&nbsp;';
echo'<font color="#FF0000" size="+1">';echo"$date";echo'</font>';?>&nbsp;&nbsp;<a href="five.php" title="Go Back"><<</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#" title="Print Report" onclick="window.print()">Print </a></P> 
<table   width="1000" border="1" style="border-collapse:collapse; margin-top:20px; font-family:'Agency FB';" align="center">
<thead>
<tr>
<th colspan="16" style="font-weight:600; color:#009900; font-family:'Agency FB';" align="left"><?php $result = mysql_query( "select count(id) as num_rows from s5" );
$row = mysql_fetch_object( $result );
$total = $row->num_rows;?><font color="#000000">Students in class:&nbsp;</font><font color="#FF0000"><?php echo "$total"?></font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;UACE   RESULTS (SCIENCES) GREEN  LIGHT  SECONDARY  SCHOOL  NANSANA</th>
</tr>
<tr>
<td colspan="16" height="10"></td>
</tr>
    <tr style="color:#FFFFFF; background-color:#666666;">
           <th>FIRST_NAME</th> 
           <th>LAST_NAME</th>
           <th>HOUSE</th>
           <th>COMBINA</th>
           <th>MATH</th>
           <th>ECON</th>
           <th>ENTREP</th>
           <th>BIOS</th>
           <th>PHYS</th>
           <th>CHEM</th>
           <th>GEO</th>
           <th>FINE/ART</th>
           <th>G/PAPER</th>
           <th>SUB_ICT</th>
           <th>SUB_MTC</th>
           <th>POINTS</th>
    </tr> 
    </thead>
    <tbody>
    	<?php
mysql_connect("localhost", "root","")or die("failed to connect to the server").mysql_error();
mysql_select_db("advanced_green_light")or die("failed to select the database").mysql_error();
// Define your colors for the alternating rows 
$color1 = "#CCFFCC";  
$color2 = "#BFD8BC";  
$row_count = 0; 
// Perform an statndard SQL query: 
$sql_events = mysql_query("select * from s5 order by points DESC") or die (mysql_error()); 
// We are going to use the "$row" method for this query. This is just my preference.
while ($row = mysql_fetch_array($sql_events)) {  
     $firstname = $row["firstname"]; 
	 $lastname = $row["lastname"];
	 $house = $row["House"];
	 $combination = $row["combination"];
	 $math = $row["MATH"];
	 $econ = $row["ECON"];
	 $ent = $row["ENT"];
	 $bio = $row["BIO"];
	 $phys = $row["PHYS"];
	 $chem = $row["CHEM"];
	 $geo = $row["GEO"];
	 $art = $row["ART"];
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
	echo"$firstname</td>";
    echo"<td bgcolor='$row_color'>";
	echo"$lastname</td>"; 
    echo"<td bgcolor='$row_color'>"; 
	echo"$house</td>"; 
    echo"<td bgcolor='$row_color'>";
	echo"$combination</td>";
    echo"<td bgcolor='$row_color'>"; 
	echo"$math</td>";
	echo"<td bgcolor='$row_color'>"; 
	echo"$econ</td>";
	echo"<td bgcolor='$row_color'>"; 
	echo"$ent</td>";
	echo"<td bgcolor='$row_color'>"; 
	echo"$bio</td>";
	echo"<td bgcolor='$row_color'>"; 
	echo"$phys</td>";
	echo"<td bgcolor='$row_color'>"; 
	echo"$chem</td>";
	echo"<td bgcolor='$row_color'>"; 
	echo"$geo</td>";
	echo"<td bgcolor='$row_color'>";
	echo"$art</td>";
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
echo"</tbody>"; 
echo "</table>";

?>
</body>
</html>
