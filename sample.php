<?php
require'db.php';
$ID=$_GET['id'];
include'tables5.php';
?>
<?php
 $queryZ=mysql_query("select * from initials5 where id='1'")or die(mysql_error());
$rowZ=mysql_fetch_array($queryZ);
  ?>
  
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SchoolReport</title>
<style type="text/css">
<!--
#apDiv1 {
	position:absolute;
	left:-6px;
	top:75px;
	width:1035px;
	height:492px;
	z-index:1;
}
.style1 {
	font-size: 24px;
	font-weight: bold;
}
.style4 {font-size:20px; font-family:"Arial Black";}
.style5 {font-size: 36px; text-align:left; font-weight:bold; font-family:"Arial Black";}
.size{ font-family:Arial, Helvetica, sans-serif; font-size:22px;}
.post{ font-family:"Arial Black";}
-->
</style>
</head>

<body bgcolor="#FFCCCC">
<div id="apDiv1">
<p align="right"><a href="five.php" title="Go Back"><<</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#" title="Print Report" onclick="window.print()">Print </a></P>
<table width="1200px" border="6" style="border-color:#990033; border-right-style:double; border-left-style:double;" align="center">
  <tr>
    <td style="height:600px; padding-left:20px; padding-right:20px; margin-top:30px; padding-top:30px;" align="center">

<table width="1035" border="0" style="color:#57b87e;">
  <tr>
    <td width="210" rowspan="5"><img src="images/budge.png"/></td>
    <td colspan="4"><span class="style5">GREENLIGHT ISLAMIC S.S NANSANA</span></td>
    <td width="15">&nbsp;</td>
    <td width="22">&nbsp;</td>
  </tr>
  <tr>
    <td width="99">&nbsp;</td>
    <td width="499" class="post">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; P.O.BOX 2096 KAMPALA (u)&nbsp;</td>
    <td width="156">&nbsp;</td>
    <td width="9">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td class="style4">TEL:&nbsp;0705126078 / 0757152156 / 0705201594</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td bgcolor="#990033" style="color:#FFCCCC;"><span class="style1"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;A&quot; LEVEL  PROGRESS REPORT</span></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>

  <table width="1035" border="0" height="50px">
  <tr>
    <td colspan="8"  style="color:#000; text-transform:uppercase; font-family:'Arial Black';">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>NAME:</b>&nbsp;&nbsp;&nbsp;<font color="#1b5e94"><?php echo $row['firstname'];?>&nbsp;&nbsp;<?php echo $row['middlename'];?>&nbsp;&nbsp;<?php echo $row['lastname'];?></font>&nbsp;&nbsp;&nbsp;&nbsp;<b>CLASS:</b>&nbsp;&nbsp;<font color="#1b5e94"><?php echo $row['class'];?></font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>SEX:&nbsp;</b><font color="#1b5e94"><?php echo $row['sex'];?></font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>combina:</b>&nbsp;&nbsp;<font color="#1b5e94"><?php echo $row['combination'];?></font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>TERM:</b>&nbsp;&nbsp;<font color="#1b5e94"><?php echo $row['Term'];?></font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>YEAR:</b>&nbsp;&nbsp;&nbsp;<font color="#1b5e94"><?php echo $row['year'];?></font>&nbsp;&nbsp;&nbsp;&nbsp;</td>
   
  </tr>
</table>
<BR />

  <table width="1035" border="1" bordercolor="#000"  align="center" height="600px" style="background-image:url(images/t-bg.png); background-position:center; border-collapse:collapse; font-size:25px;">
    <tr height="50px">
    <td><strong>Subjects</strong></td>
    <td align="center"><strong>Award</strong></td>
    <td align="center"><strong>Paper</strong></td>
    <td align="center"><strong>MOT(%)</strong></td>
    <td align="center"><strong>EOT(%)</strong></td>
    <td align="center"><strong>Grade</strong></td>
    <td align="center"><strong>Remark</strong></td>
    <td align="center"><strong>Sign</strong></td>
    </tr>
     <tr>
    <td rowspan="2">G/PAPER</td>
     <td align="center">&nbsp;</td>
    <td align="center">1</td>
    <td align="center"><?php echo $row1['paper_one_mot']; ?></td>
    <td align="center"><?php echo $row1['paper_one_end']; ?></td>
    <td align="center"><?php 
	 $rowa['Total'];
	if($rowa['Total']=="")
	{
	$queryx1=mysql_query("update 5scs_grading set grades=null,award=null,value=null,remark=null where subject_id='GP'")or die(mysql_error());
	}
	elseif($rowa['Total']<= '34' and $rowa['Total']>='1')
	{
	echo'F9';
	$a='9'.',';
	//This code stores the grade in 5scs_grading
	$queryx1=mysql_query("update 5scs_grading set grades='$a' where subject_id='GP'")or die(mysql_error());
	
	}
	elseif($rowa['Total']<= '39' and $rowa['Total']>='35')
	{
	echo'P8';
	$b='8'.',';
	//This code stores the grade in 5scs_grading
   $queryx1=mysql_query("update 5scs_grading set grades='$b' where subject_id='GP'")or die(mysql_error());
	}
	elseif($rowa['Total']<= '49' and $rowa['Total']>='40')
	{
	echo'P7';
	$c='7'.',';
	//This code stores the grade in 5scs_grading
	$queryx1=mysql_query("update 5scs_grading set grades='$c' where subject_id='GP'")or die(mysql_error());
	}
	elseif($rowa['Total']<= '54' and $rowa['Total']>='50')
	{
	echo'C6';
	$d='6'.',';
	//This code stores the grade in 5scs_grading
	$queryx1=mysql_query("update 5scs_grading set grades='$d' where subject_id='GP'")or die(mysql_error());
	}
	elseif($rowa['Total']<= '59' and $rowa['Total']>='55')
	{
	echo'C5'; 
	$e='5'.',';
	//This code stores the grade in 5scs_grading
	$queryx1=mysql_query("update 5scs_grading set grades='$e' where subject_id='GP'")or die(mysql_error());
	}
	elseif($rowa['Total']<= '69' and $rowa['Total']>='60')
	{
	echo'C4';
	$f='4'.',';
	//This code stores the grade in 5scs_grading
	$queryx1=mysql_query("update 5scs_grading set grades='$f' where subject_id='GP'")or die(mysql_error());
	}
	elseif($rowa['Total']<= '74' and $rowa['Total']>='70')
	{
	echo'C3';
	$g='3'.',';
	//This code stores the grade in 5scs_grading
	$queryx1=mysql_query("update 5scs_grading set grades='$g' where subject_id='GP'")or die(mysql_error());
	}
	elseif($rowa['Total']<= '79' and $rowa['Total']>='75')
	{
	echo'D2';
	$h='2'.',';
	//This code stores the grade in 5scs_grading
	$queryx1=mysql_query("update 5scs_grading set grades='$h' where subject_id='GP'")or die(mysql_error());
	}
	elseif($rowa['Total']<= '100' and $rowa['Total']>='80')
	{
	echo'D1';
	$i='1'.',';
	//This code stores the grade in 5scs_grading
	$queryx1=mysql_query("update 5scs_grading set grades='$i' where subject_id='GP'")or die(mysql_error());
	}
	?></td>
      <td align="center">&nbsp;</td>
    <td align="center">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
     <td align="center">&nbsp;</td>
    <td align="center">&nbsp;</td>
    <td align="center">&nbsp;</td>
    <td align="center">&nbsp;</td>
    <td align="center" style="font-family:Bradley Hand ITC; color:#1b5e94; font-weight:bold;">&nbsp;</td>
      <td align="center">&nbsp;</td>
  </tr>
  <tr>
    <td rowspan="2">Math</td>
    <td align="center" rowspan="2" style="color:#FF0000;"><?php 
	
	//******************************* HERE IS THE MAGIC *******************************************
    //This code perfects the Grading of the student by following the UACE Stands 
	
	if($row2['paper_one_mot']=='')
	{
	$query=mysql_query("update 5scs_grading set grades=null,award=null,value=null,remark=null where subject_id='MATH'")or die(mysql_error());
	}else{
    $queryMg=mysql_query("SELECT grades from 5scs_grading where subject_id ='MATH'")or die(mysql_error());
    $rowMg=mysql_fetch_array($queryMg);
	if($rowMg['grades']== '1,1'||$rowMg['grades']== '2,2'||$rowMg['grades']== '1,2'||$rowMg['grades']== '2,1')
	{
	//This code inserts the grade in the  5scs_grading table
	$queryx1=mysql_query("update 5scs_grading set award='A' where subject_id='MATH'")or die(mysql_error());
	//This code inserts the grade value in the  5scs_grading table
	$query_value=mysql_query("update 5scs_grading set value='6' where subject_id='MATH'")or die(mysql_error());
	//This code inserts the grade remark in the  5scs_grading table
	$query_remark=mysql_query("update 5scs_grading set remark='Excellent' where subject_id='MATH'")or die(mysql_error());
	//This code updates the grade in the 5scs_grading table
	$queryAward=mysql_query("SELECT award from 5scs_grading where subject_id ='MATH'")or die(mysql_error());
    $rowAward=mysql_fetch_array($queryAward);
	echo $rowAward['award'];
	//I Assigned new variables to help in updating the s5 table data
	$logic_1=$rowAward['award'];
	$logic_2='('.$rowMg['grades'].')';
	$TRANS_GRADE= "$logic_1 $logic_2";

	//This code updates the subject grade value in the  S5 table
	$query_trans=mysql_query("update s5 set MATH='$TRANS_GRADE' where id='$ID'")or die(mysql_error());
	}
	elseif($rowMg['grades']== '3,3'||$rowMg['grades']== '3,1'||$rowMg['grades']== '1,3'||$rowMg['grades']== '2,3'||$rowMg['grades']== '3,2'||$rowMg['grades']== '1,4'||$rowMg['grades']== '4,1'||$rowMg['grades']== '4,2'||$rowMg['grades']== '2,4')
	{
	//This code inserts the grade in the  5scs_grading
	$queryx1=mysql_query("update 5scs_grading set award='B' where subject_id='MATH'")or die(mysql_error());
	//This code inserts the grade value in the  5scs_grading table
	$query_value=mysql_query("update 5scs_grading set value='5' where subject_id='MATH'")or die(mysql_error());
	//This code inserts the grade remark in the  5scs_grading table
	$query_remark=mysql_query("update 5scs_grading set remark='Very Good' where subject_id='MATH'")or die(mysql_error());
	//This code updates the grade in the 5scs_grading table
    $queryAward=mysql_query("SELECT award from 5scs_grading where subject_id ='MATH'")or die(mysql_error());
    $rowAward=mysql_fetch_array($queryAward);
	echo $rowAward['award'];
	//I Assigned new variables to help in updating the s5 table data
	$logic_1=$rowAward['award'];
	$logic_2='('.$rowMg['grades'].')';
	$TRANS_GRADE= "$logic_1 $logic_2";

	//This code updates the subject grade value in the  S5 table
	$query_trans=mysql_query("update s5 set MATH='$TRANS_GRADE' where id='$ID'")or die(mysql_error());
	}
	elseif($rowMg['grades']== '1,5'||$rowMg['grades']== '5,1'||$rowMg['grades']== '2,5'||$rowMg['grades']== '5,2'||$rowMg['grades']== '3,5'||$rowMg['grades']== '5,3'||$rowMg['grades']== '3,4'||$rowMg['grades']== '4,3'||$rowMg['grades']== '4,4')
	{
	//This code inserts the grade in the  5scs_grading
	$queryx1=mysql_query("update 5scs_grading set award='C' where subject_id='MATH'")or die(mysql_error());
	//This code inserts the grade value in the  5scs_grading table
	$query_value=mysql_query("update 5scs_grading set value='4' where subject_id='MATH'")or die(mysql_error());
	//This code inserts the grade remark in the  5scs_grading table
	$query_remark=mysql_query("update 5scs_grading set remark='Good' where subject_id='MATH'")or die(mysql_error());
	//This code updates the grade in the 5scs_grading table
    $queryAward=mysql_query("SELECT award from 5scs_grading where subject_id ='MATH'")or die(mysql_error());
    $rowAward=mysql_fetch_array($queryAward);
	echo $rowAward['award'];
	//I Assigned new variables to help in updating the s5 table data
	$logic_1=$rowAward['award'];
	$logic_2='('.$rowMg['grades'].')';
	$TRANS_GRADE= "$logic_1 $logic_2";

	//This code updates the subject grade value in the  S5 table
	$query_trans=mysql_query("update s5 set MATH='$TRANS_GRADE' where id='$ID'")or die(mysql_error());
	}
	elseif($rowMg['grades']== '1,6'||$rowMg['grades']== '6,1'||$rowMg['grades']== '2,6'||$rowMg['grades']== '6,2'||$rowMg['grades']== '3,6'||$rowMg['grades']== '6,3'||$rowMg['grades']== '6,4'||$rowMg['grades']== '4,6'||$rowMg['grades']== '5,4'||$rowMg['grades']== '4,5'||$rowMg['grades']== '5,5')
	{
	//This code inserts the grade in the  5scs_grading
	$queryx1=mysql_query("update 5scs_grading set award='D' where subject_id='MATH'")or die(mysql_error());
	//This code inserts the grade value in the  5scs_grading table
	$query_value=mysql_query("update 5scs_grading set value='3' where subject_id='MATH'")or die(mysql_error());
	//This code inserts the grade remark in the  5scs_grading table
	$query_remark=mysql_query("update 5scs_grading set remark='Fairly Good' where subject_id='MATH'")or die(mysql_error());
	//This code updates the grade in the 5scs_grading table
    $queryAward=mysql_query("SELECT award from 5scs_grading where subject_id ='MATH'")or die(mysql_error());
    $rowAward=mysql_fetch_array($queryAward);
	echo $rowAward['award'];
	//I Assigned new variables to help in updating the s5 table data
	$logic_1=$rowAward['award'];
	$logic_2='('.$rowMg['grades'].')';
	$TRANS_GRADE= "$logic_1 $logic_2";

	//This code updates the subject grade value in the  S5 table
	$query_trans=mysql_query("update s5 set MATH='$TRANS_GRADE' where id='$ID'")or die(mysql_error());
	}
	elseif($rowMg['grades']== '1,7'||$rowMg['grades']== '7,1'||$rowMg['grades']== '2,7'||$rowMg['grades']== '7,2'||$rowMg['grades']== '3,7'||$rowMg['grades']== '7,3'||$rowMg['grades']== '7,4'||$rowMg['grades']== '4,7'||$rowMg['grades']== '6,4'||$rowMg['grades']== '4,6'||$rowMg['grades']== '6,6'||$rowMg['grades']== '5,6'||$rowMg['grades']== '6,5'||$rowMg['grades']== '5,7'||$rowMg['grades']== '7,5')
	{
	//This code inserts the grade in the  5scs_grading
	$queryx1=mysql_query("update 5scs_grading set award='E' where subject_id='MATH'")or die(mysql_error());
	//This code inserts the grade value in the  5scs_grading table
	$query_value=mysql_query("update 5scs_grading set value='2' where subject_id='MATH'")or die(mysql_error());
	//This code inserts the grade remark in the  5scs_grading table
	$query_remark=mysql_query("update 5scs_grading set remark='Fair' where subject_id='MATH'")or die(mysql_error());
	//This code updates the grade in the 5scs_grading table
    $queryAward=mysql_query("SELECT award from 5scs_grading where subject_id ='MATH'")or die(mysql_error());
    $rowAward=mysql_fetch_array($queryAward);
	echo $rowAward['award'];
	//I Assigned new variables to help in updating the s5 table data
	$logic_1=$rowAward['award'];
	$logic_2='('.$rowMg['grades'].')';
	$TRANS_GRADE= "$logic_1 $logic_2";

	//This code updates the subject grade value in the  S5 table
	$query_trans=mysql_query("update s5 set MATH='$TRANS_GRADE' where id='$ID'")or die(mysql_error());
	}
	elseif($rowMg['grades']== '1,8'||$rowMg['grades']== '8,1'||$rowMg['grades']== '2,8'||$rowMg['grades']== '8,2'||$rowMg['grades']== '3,8'||$rowMg['grades']== '8,3'||$rowMg['grades']== '8,4'||$rowMg['grades']== '4,8'||$rowMg['grades']== '9,4'||$rowMg['grades']== '4,9'||$rowMg['grades']== '7,7'||$rowMg['grades']== '7,8'||$rowMg['grades']== '8,7'||$rowMg['grades']== '7,9'||$rowMg['grades']== '9,7'||$rowMg['grades']== '5,8'||$rowMg['grades']== '8,5'||$rowMg['grades']== '5,9'||$rowMg['grades']== '9,5'||$rowMg['grades']== '6,9'||$rowMg['grades']== '9,6'||$rowMg['grades']== '6,8'||$rowMg['grades']== '8,6'||$rowMg['grades']== '8,8'||$rowMg['grades']== '9,1'||$rowMg['grades']== '1,9'||$rowMg['grades']== '9,2'||$rowMg['grades']== '2,9'||$rowMg['grades']== '9,3'||$rowMg['grades']== '3,9'||$rowMg['grades']== '9,4'||$rowMg['grades']== '4,9')
	{
	//This code inserts the grade in the  5scs_grading
	$queryx1=mysql_query("update 5scs_grading set award='O' where subject_id='MATH'")or die(mysql_error());
	//This code inserts the grade value in the  5scs_grading table
	$query_value=mysql_query("update 5scs_grading set value='1' where subject_id='MATH'")or die(mysql_error());
	//This code inserts the grade remark in the  5scs_grading table
	$query_remark=mysql_query("update 5scs_grading set remark='Improve' where subject_id='MATH'")or die(mysql_error());
	//This code updates the grade in the 5scs_grading table
    $queryAward=mysql_query("SELECT award from 5scs_grading where subject_id ='MATH'")or die(mysql_error());
    $rowAward=mysql_fetch_array($queryAward);
	echo $rowAward['award'];
	//I Assigned new variables to help in updating the s5 table data
	$logic_1=$rowAward['award'];
	$logic_2='('.$rowMg['grades'].')';
	$TRANS_GRADE= "$logic_1 $logic_2";

	//This code updates the subject grade value in the  S5 table
	$query_trans=mysql_query("update s5 set MATH='$TRANS_GRADE' where id='$ID'")or die(mysql_error());
	}
	elseif($rowMg['grades']== '9,8'||$rowMg['grades']== '8,9'||$rowMg['grades']== '9,9')
	{
	//This code inserts the grade in the  5scs_grading
	$queryx1=mysql_query("update 5scs_grading set award='F' where subject_id='MATH'")or die(mysql_error());
	//This code inserts the grade value in the  5scs_grading table
	$query_value=mysql_query("update 5scs_grading set value='0' where subject_id='MATH'")or die(mysql_error());
	//This code inserts the grade remark in the  5scs_grading table
	$query_remark=mysql_query("update 5scs_grading set remark='Improve' where subject_id='MATH'")or die(mysql_error());
	//This code updates the grade in the 5scs_grading table
    $queryAward=mysql_query("SELECT award from 5scs_grading where subject_id ='MATH'")or die(mysql_error());
    $rowAward=mysql_fetch_array($queryAward);
	echo $rowAward['award'];
	//I Assigned new variables to help in updating the s5 table data
	$logic_1=$rowAward['award'];
	$logic_2='('.$rowMg['grades'].')';
	$TRANS_GRADE= "$logic_1 $logic_2";

	//This code updates the subject grade value in the  S5 table
	$query_trans=mysql_query("update s5 set MATH='$TRANS_GRADE' where id='$ID'")or die(mysql_error());
	}}
	?></td>
     <td align="center">1</td>
     <td align="center"><?php echo $row2['paper_one_mot']; ?></td>
    <td align="center"><?php echo $row2['paper_one_end']; ?></td>   
     <td align="center">
     <?php 
	 
	if($rowb['Total']=="")
	{
	$queryx1=mysql_query("update 5scs_grading set grades=null,award=null,value=null,remark=null where subject_id='MATH'")or die(mysql_error());
	}
	elseif($rowb['Total']<= '34' and $rowb['Total']>='1')
	{
	echo'F9';
	$a='9'.',';
	//This code stores the grade in 5scs_grading
	$queryx1=mysql_query("update 5scs_grading set grades='$a' where subject_id='MATH'")or die(mysql_error());
	
	}
	elseif($rowb['Total']<= '39' and $rowb['Total']>='35')
	{
	echo'P8';
	$b='8'.',';
	//This code stores the grade in 5scs_grading
   $queryx1=mysql_query("update 5scs_grading set grades='$b' where subject_id='MATH'")or die(mysql_error());
	}
	elseif($rowb['Total']<= '49' and $rowb['Total']>='40')
	{
	echo'P7';
	$c='7'.',';
	//This code stores the grade in 5scs_grading
	$queryx1=mysql_query("update 5scs_grading set grades='$c' where subject_id='MATH'")or die(mysql_error());
	}
	elseif($rowb['Total']<= '54' and $rowb['Total']>='50')
	{
	echo'C6';
	$d='6'.',';
	//This code stores the grade in 5scs_grading
	$queryx1=mysql_query("update 5scs_grading set grades='$d' where subject_id='MATH'")or die(mysql_error());
	}
	elseif($rowb['Total']<= '59' and $rowb['Total']>='55')
	{
	echo'C5'; 
	$e='5'.',';
	//This code stores the grade in 5scs_grading
	$queryx1=mysql_query("update 5scs_grading set grades='$e' where subject_id='MATH'")or die(mysql_error());
	}
	elseif($rowb['Total']<= '69' and $rowb['Total']>='60')
	{
	echo'C4';
	$f='4'.',';
	//This code stores the grade in 5scs_grading
	$queryx1=mysql_query("update 5scs_grading set grades='$f' where subject_id='MATH'")or die(mysql_error());
	}
	elseif($rowb['Total']<= '74' and $rowb['Total']>='70')
	{
	echo'C3';
	$g='3'.',';
	//This code stores the grade in 5scs_grading
	$queryx1=mysql_query("update 5scs_grading set grades='$g' where subject_id='MATH'")or die(mysql_error());
	}
	elseif($rowb['Total']<= '79' and $rowb['Total']>='75')
	{
	echo'D2';
	$h='2'.',';
	//This code stores the grade in 5scs_grading
	$queryx1=mysql_query("update 5scs_grading set grades='$h' where subject_id='MATH'")or die(mysql_error());
	}
	elseif($rowb['Total']<= '100' and $rowb['Total']>='80')
	{
	echo'D1';
	$i='1'.',';
	//This code stores the grade in 5scs_grading
	$queryx1=mysql_query("update 5scs_grading set grades='$i' where subject_id='MATH'")or die(mysql_error());
	}
	?>	</td>
      <td align="center" rowspan="2" style="color:#1b5e94;"><?php 
	  
	//This code selects the remark in the 5scs_grading table
    $query_remark=mysql_query("SELECT remark from 5scs_grading where subject_id ='MATH'")or die(mysql_error());
    $row_remark=mysql_fetch_array($query_remark);
	echo $row_remark['remark'];?></td>
    <td align="center" rowspan="2"><?php echo $rowZ['MATH'];?></td>
  </tr>
   <tr>
   
    <td align="center">2</td>
    <td align="center"><?php echo $row2['two_paper_mot']; ?>&nbsp;</td>
     <td align="center"><?php echo $row2['two_paper_end']; ?></td>
    <td align="center"><?php 
	 if($rowh['Total']=="")
	{
	$queryx2=mysql_query("update 5scs_grading set grades=null,award=null,value=null,remark=null where subject_id='MATH'")or die(mysql_error());
	}
	elseif($rowh['Total']<= '34' and $rowh['Total']>='1')
	{
	echo'F9';
	$a='9';
	//This code stores the grade in 5scs_grading
	$queryx2=mysql_query("UPDATE 5scs_grading SET grades= concat(grades,'$a') WHERE `5scs_grading`.`subject_id` = 'MATH'")or die(mysql_error());
	}
	elseif($rowh['Total']<= '39' and $rowh['Total']>='35')
	{
	echo'P8';
	$b='8';
	//This code stores the grade in 5scs_grading
	$queryx2=mysql_query("UPDATE 5scs_grading SET grades= concat(grades,'$b') WHERE `5scs_grading`.`subject_id` = 'MATH'")or die(mysql_error());
	}
	elseif($rowh['Total']<= '49' and $rowh['Total']>='40')
	{
	echo'P7';
	$c='7';
	//This code stores the grade in 5scs_grading
	$queryx2=mysql_query("UPDATE 5scs_grading SET grades= concat(grades,'$c') WHERE `5scs_grading`.`subject_id` = 'MATH'")or die(mysql_error());
	}
	elseif($rowh['Total']<= '54' and $rowh['Total']>='50')
	{
	echo'C6';
	$d='6';
	//This code stores the grade in 5scs_grading
	$queryx2=mysql_query("UPDATE 5scs_grading SET grades= concat(grades,'$d') WHERE `5scs_grading`.`subject_id` = 'MATH'")or die(mysql_error());
	}
	elseif($rowh['Total']<= '59' and $rowh['Total']>='55')
	{
	echo'C5';
	$e='5';
	//This code stores the grade in 5scs_grading
	$queryx2=mysql_query("UPDATE 5scs_grading SET grades= concat(grades,'$e') WHERE `5scs_grading`.`subject_id` = 'MATH'")or die(mysql_error());
	}
	elseif($rowh['Total']<= '69' and $rowh['Total']>='60')
	{
	echo'C4';
	$f='4';
	//This code stores the grade in 5scs_grading
	$queryx2=mysql_query("UPDATE 5scs_grading SET grades= concat(grades,'$f') WHERE `5scs_grading`.`subject_id` = 'MATH'")or die(mysql_error());
	}
	elseif($rowh['Total']<= '74' and $rowh['Total']>='70')
	{
	echo'C3';
	$g='3';
	//This code stores the grade in 5scs_grading
	$queryx2=mysql_query("UPDATE 5scs_grading SET grades= concat(grades,'$g') WHERE `5scs_grading`.`subject_id` = 'MATH'")or die(mysql_error());
	}
	elseif($rowh['Total']<= '79' and $rowh['Total']>='75')
	{
	echo'D2';
	$h='2';
	//This code stores the grade in 5scs_grading
	$queryx2=mysql_query("UPDATE 5scs_grading SET grades= concat(grades,'$h') WHERE `5scs_grading`.`subject_id` = 'MATH'")or die(mysql_error());
	}
	elseif($rowh['Total']<= '100' and $rowh['Total']>='80')
	{
	echo'D1';
	$i='1';
	//This code stores the grade in 5scs_grading
	$queryx2=mysql_query("UPDATE 5scs_grading SET grades= concat(grades,'$i') WHERE `5scs_grading`.`subject_id` = 'MATH'")or die(mysql_error());
	}
	?></td>
  </tr>
  <tr>
    <td rowspan="3">Physics</td>
    <td align="center" rowspan="3" style="color:#FF0000;"><?php 
	
	//******************************* HERE IS THE MAGIC *******************************************
    //This code perfects the Grading of the student by following the UACE Stands 
	
	
    $queryPHYS=mysql_query("SELECT grades from 5scs_grading where subject_id ='PHYS'")or die(mysql_error());
    $rowPhys=mysql_fetch_array($queryPHYS);
	if($rowPhys['grades']== '1,1'||$rowPhys['grades']== '2,2'||$rowPhys['grades']== '1,2'||$rowPhys['grades']== '2,1')
	{
	//This code inserts the grade in the  5scs_grading table
	$queryx4=mysql_query("update 5scs_grading set award='A' where subject_id='PHYS'")or die(mysql_error());
	//This code inserts the grade value in the  5scs_grading table
	$query_value=mysql_query("update 5scs_grading set value='6' where subject_id='PHYS'")or die(mysql_error());
	//This code inserts the grade remark in the  5scs_grading table
	$query_remark=mysql_query("update 5scs_grading set remark='Excellent' where subject_id='PHYS'")or die(mysql_error());
	//This code updates the grade in the 5scs_grading table
	$queryAward=mysql_query("SELECT award from 5scs_grading where subject_id ='PHYS'")or die(mysql_error());
    $rowAward=mysql_fetch_array($queryAward);
	echo $rowAward['award'];
	
	//I Assigned new variables to help in updating the s5 table data
	$logic_1=$rowAward['award'];
	$logic_2='('.$rowPhys['grades'].')';
	$TRANS_GRADE= "$logic_1 $logic_2";

	//This code updates the subject grade value in the  S5 table
	$query_trans=mysql_query("update s5 set PHYS='$TRANS_GRADE' where id='$ID'")or die(mysql_error());
	}
	elseif($rowPhys['grades']== '3,3'||$rowPhys['grades']== '3,1'||$rowPhys['grades']== '1,3'||$rowPhys['grades']== '2,3'||$rowPhys['grades']== '3,2'||$rowPhys['grades']== '1,4'||$rowPhys['grades']== '4,1'||$rowPhys['grades']== '4,2'||$rowPhys['grades']== '2,4')
	{
	//This code inserts the grade in the  5scs_grading
	$queryx4=mysql_query("update 5scs_grading set award='B' where subject_id='PHYS'")or die(mysql_error());
	//This code inserts the grade value in the  5scs_grading table
	$query_value=mysql_query("update 5scs_grading set value='5' where subject_id='PHYS'")or die(mysql_error());
	//This code inserts the grade remark in the  5scs_grading table
	$query_remark=mysql_query("update 5scs_grading set remark='Very Good' where subject_id='PHYS'")or die(mysql_error());
	//This code updates the grade in the 5scs_grading table
    $queryAward=mysql_query("SELECT award from 5scs_grading where subject_id ='PHYS'")or die(mysql_error());
    $rowAward=mysql_fetch_array($queryAward);
	echo $rowAward['award'];

		//I Assigned new variables to help in updating the s5 table data
	$logic_1=$rowAward['award'];
	$logic_2='('.$rowPhys['grades'].')';
	$TRANS_GRADE= "$logic_1 $logic_2";

	//This code updates the subject grade value in the  S5 table
	$query_trans=mysql_query("update s5 set PHYS='$TRANS_GRADE' where id='$ID'")or die(mysql_error());
	}
	elseif($rowPhys['grades']== '1,5'||$rowPhys['grades']== '5,1'||$rowPhys['grades']== '2,5'||$rowPhys['grades']== '5,2'||$rowPhys['grades']== '3,5'||$rowPhys['grades']== '5,3'||$rowPhys['grades']== '3,4'||$rowPhys['grades']== '4,3'||$rowPhys['grades']== '4,4')
	{
	//This code inserts the grade in the  5scs_grading
	$queryx4=mysql_query("update 5scs_grading set award='C' where subject_id='PHYS'")or die(mysql_error());
	//This code inserts the grade value in the  5scs_grading table
	$query_value=mysql_query("update 5scs_grading set value='4' where subject_id='PHYS'")or die(mysql_error());
	//This code inserts the grade remark in the  5scs_grading table
	$query_remark=mysql_query("update 5scs_grading set remark='Good' where subject_id='PHYS'")or die(mysql_error());
	//This code updates the grade in the 5scs_grading table
    $queryAward=mysql_query("SELECT award from 5scs_grading where subject_id ='PHYS'")or die(mysql_error());
    $rowAward=mysql_fetch_array($queryAward);
	echo $rowAward['award'];

		//I Assigned new variables to help in updating the s5 table data
	$logic_1=$rowAward['award'];
	$logic_2='('.$rowPhys['grades'].')';
	$TRANS_GRADE= "$logic_1 $logic_2";

	//This code updates the subject grade value in the  S5 table
	$query_trans=mysql_query("update s5 set PHYS='$TRANS_GRADE' where id='$ID'")or die(mysql_error());
	}
	elseif($rowPhys['grades']== '1,6'||$rowPhys['grades']== '6,1'||$rowPhys['grades']== '2,6'||$rowPhys['grades']== '6,2'||$rowPhys['grades']== '3,6'||$rowPhys['grades']== '6,3'||$rowPhys['grades']== '6,4'||$rowPhys['grades']== '4,6'||$rowPhys['grades']== '5,4'||$rowPhys['grades']== '4,5'||$rowPhys['grades']== '5,5')
	{
	//This code inserts the grade in the  5scs_grading
	$queryx4=mysql_query("update 5scs_grading set award='D' where subject_id='PHYS'")or die(mysql_error());
	//This code inserts the grade value in the  5scs_grading table
	$query_value=mysql_query("update 5scs_grading set value='3' where subject_id='PHYS'")or die(mysql_error());
	//This code inserts the grade remark in the  5scs_grading table
	$query_remark=mysql_query("update 5scs_grading set remark='Fairly Good' where subject_id='PHYS'")or die(mysql_error());
	//This code updates the grade in the 5scs_grading table
    $queryAward=mysql_query("SELECT award from 5scs_grading where subject_id ='PHYS'")or die(mysql_error());
    $rowAward=mysql_fetch_array($queryAward);
	echo $rowAward['award'];
		//I Assigned new variables to help in updating the s5 table data
	$logic_1=$rowAward['award'];
	$logic_2='('.$rowPhys['grades'].')';
	$TRANS_GRADE= "$logic_1 $logic_2";

	//This code updates the subject grade value in the  S5 table
	$query_trans=mysql_query("update s5 set PHYS='$TRANS_GRADE' where id='$ID'")or die(mysql_error());
	}
	elseif($rowPhys['grades']== '1,7'||$rowPhys['grades']== '7,1'||$rowPhys['grades']== '2,7'||$rowPhys['grades']== '7,2'||$rowPhys['grades']== '3,7'||$rowPhys['grades']== '7,3'||$rowPhys['grades']== '7,4'||$rowPhys['grades']== '4,7'||$rowPhys['grades']== '6,4'||$rowPhys['grades']== '4,6'||$rowPhys['grades']== '6,6'||$rowPhys['grades']== '5,6'||$rowPhys['grades']== '6,5'||$rowPhys['grades']== '5,7'||$rowPhys['grades']== '7,5')
	{
	//This code inserts the grade in the  5scs_grading
	$queryx4=mysql_query("update 5scs_grading set award='E' where subject_id='PHYS'")or die(mysql_error());
	//This code inserts the grade value in the  5scs_grading table
	$query_value=mysql_query("update 5scs_grading set value='2' where subject_id='PHYS'")or die(mysql_error());
	//This code inserts the grade remark in the  5scs_grading table
	$query_remark=mysql_query("update 5scs_grading set remark='Fair' where subject_id='PHYS'")or die(mysql_error());
	//This code updates the grade in the 5scs_grading table
    $queryAward=mysql_query("SELECT award from 5scs_grading where subject_id ='PHYS'")or die(mysql_error());
    $rowAward=mysql_fetch_array($queryAward);
	echo $rowAward['award'];
	
		//I Assigned new variables to help in updating the s5 table data
	$logic_1=$rowAward['award'];
	$logic_2='('.$rowPhys['grades'].')';
	$TRANS_GRADE= "$logic_1 $logic_2";

	//This code updates the subject grade value in the  S5 table
	$query_trans=mysql_query("update s5 set PHYS='$TRANS_GRADE' where id='$ID'")or die(mysql_error());
	}
	elseif($rowPhys['grades']== '1,8'||$rowPhys['grades']== '8,1'||$rowPhys['grades']== '2,8'||$rowPhys['grades']== '8,2'||$rowPhys['grades']== '3,8'||$rowPhys['grades']== '8,3'||$rowPhys['grades']== '8,4'||$rowPhys['grades']== '4,8'||$rowPhys['grades']== '9,4'||$rowPhys['grades']== '4,9'||$rowPhys['grades']== '7,7'||$rowPhys['grades']== '7,8'||$rowPhys['grades']== '8,7'||$rowPhys['grades']== '7,9'||$rowPhys['grades']== '9,7'||$rowPhys['grades']== '5,8'||$rowPhys['grades']== '8,5'||$rowPhys['grades']== '5,9'||$rowPhys['grades']== '9,5'||$rowPhys['grades']== '6,9'||$rowPhys['grades']== '9,6'||$rowPhys['grades']== '6,8'||$rowPhys['grades']== '8,6'||$rowPhys['grades']== '8,8'||$rowPhys['grades']== '9,1'||$rowPhys['grades']== '1,9'||$rowPhys['grades']== '9,2'||$rowPhys['grades']== '2,9'||$rowPhys['grades']== '9,3'||$rowPhys['grades']== '3,9'||$rowPhys['grades']== '9,4'||$rowPhys['grades']== '4,9')
	{
	//This code inserts the grade in the  5scs_grading
	$queryx4=mysql_query("update 5scs_grading set award='O' where subject_id='PHYS'")or die(mysql_error());
	//This code inserts the grade value in the  5scs_grading table
	$query_value=mysql_query("update 5scs_grading set value='1' where subject_id='PHYS'")or die(mysql_error());
	//This code inserts the grade remark in the  5scs_grading table
	$query_remark=mysql_query("update 5scs_grading set remark='Improve' where subject_id='PHYS'")or die(mysql_error());
	//This code updates the grade in the 5scs_grading table
    $queryAward=mysql_query("SELECT award from 5scs_grading where subject_id ='PHYS'")or die(mysql_error());
    $rowAward=mysql_fetch_array($queryAward);
	echo $rowAward['award'];

		//I Assigned new variables to help in updating the s5 table data
	$logic_1=$rowAward['award'];
	$logic_2='('.$rowPhys['grades'].')';
	$TRANS_GRADE= "$logic_1 $logic_2";

	//This code updates the subject grade value in the  S5 table
	$query_trans=mysql_query("update s5 set PHYS='$TRANS_GRADE' where id='$ID'")or die(mysql_error());
	}
	elseif($rowPhys['grades']== '9,8'||$rowPhys['grades']== '8,9'||$rowPhys['grades']== '9,9')
	{
	//This code inserts the grade in the  5scs_grading
	$queryx4=mysql_query("update 5scs_grading set award='F' where subject_id='PHYS'")or die(mysql_error());
	//This code inserts the grade value in the  5scs_grading table
	$query_value=mysql_query("update 5scs_grading set value='0' where subject_id='PHYS'")or die(mysql_error());
	//This code inserts the grade remark in the  5scs_grading table
	$query_remark=mysql_query("update 5scs_grading set remark='Improve' where subject_id='PHYS'")or die(mysql_error());
	//This code updates the grade in the 5scs_grading table
    $queryAward=mysql_query("SELECT award from 5scs_grading where subject_id ='PHYS'")or die(mysql_error());
    $rowAward=mysql_fetch_array($queryAward);
	echo $rowAward['award'];
		//I Assigned new variables to help in updating the s5 table data
	$logic_1=$rowAward['award'];
	$logic_2='('.$rowPhys['grades'].')';
	$TRANS_GRADE= "$logic_1 $logic_2";

	//This code updates the subject grade value in the  S5 table
	$query_trans=mysql_query("update s5 set PHYS='$TRANS_GRADE' where id='$ID'")or die(mysql_error());
	}
	?></td>
     <td align="center">1</td>
    <td align="center"><?php echo $row5['paper_one_mot']; ?></td>
    <td align="center"><?php echo $row5['paper_one_end']; ?></td>    
    <td align="center"><?php 
	 
	if($rowe['Total']=="")
	{
	$queryx1=mysql_query("update 5scs_grading set grades=null,award=null,value=null,remark=null where subject_id='PHYS'")or die(mysql_error());
	}
	elseif($rowe['Total']<= '34' and $rowe['Total']>='1')
	{
	echo'F9';
	$a='9'.',';
	//This code stores the grade in 5scs_grading
	$queryx1=mysql_query("update 5scs_grading set grades='$a' where subject_id='PHYS'")or die(mysql_error());
	
	}
	elseif($rowe['Total']<= '39' and $rowe['Total']>='35')
	{
	echo'P8';
	$b='8'.',';
	//This code stores the grade in 5scs_grading
   $queryx1=mysql_query("update 5scs_grading set grades='$b' where subject_id='PHYS'")or die(mysql_error());
	}
	elseif($rowe['Total']<= '49' and $rowe['Total']>='40')
	{
	echo'P7';
	$c='7'.',';
	//This code stores the grade in 5scs_grading
	$queryx1=mysql_query("update 5scs_grading set grades='$c' where subject_id='PHYS'")or die(mysql_error());
	}
	elseif($rowe['Total']<= '54' and $rowe['Total']>='50')
	{
	echo'C6';
	$d='6'.',';
	//This code stores the grade in 5scs_grading
	$queryx1=mysql_query("update 5scs_grading set grades='$d' where subject_id='PHYS'")or die(mysql_error());
	}
	elseif($rowe['Total']<= '59' and $rowe['Total']>='55')
	{
	echo'C5'; 
	$e='5'.',';
	//This code stores the grade in 5scs_grading
	$queryx1=mysql_query("update 5scs_grading set grades='$e' where subject_id='PHYS'")or die(mysql_error());
	}
	elseif($rowe['Total']<= '69' and $rowe['Total']>='60')
	{
	echo'C4';
	$f='4'.',';
	//This code stores the grade in 5scs_grading
	$queryx1=mysql_query("update 5scs_grading set grades='$f' where subject_id='PHYS'")or die(mysql_error());
	}
	elseif($rowe['Total']<= '74' and $rowe['Total']>='70')
	{
	echo'C3';
	$g='3'.',';
	//This code stores the grade in 5scs_grading
	$queryx1=mysql_query("update 5scs_grading set grades='$g' where subject_id='PHYS'")or die(mysql_error());
	}
	elseif($rowe['Total']<= '79' and $rowe['Total']>='75')
	{
	echo'D2';
	$h='2'.',';
	//This code stores the grade in 5scs_grading
	$queryx1=mysql_query("update 5scs_grading set grades='$h' where subject_id='PHYS'")or die(mysql_error());
	}
	elseif($rowe['Total']<= '100' and $rowe['Total']>='80')
	{
	echo'D1';
	$i='1'.',';
	//This code stores the grade in 5scs_grading
	$queryx1=mysql_query("update 5scs_grading set grades='$i' where subject_id='PHYS'")or die(mysql_error());
	}
	?></td>
      <td align="center" rowspan="3" style="color:#1b5e94;"><?php 
	//This code selects the remark in the 5scs_grading table
    $query_remark=mysql_query("SELECT remark from 5scs_grading where subject_id ='PHYS'")or die(mysql_error());
    $row_remark=mysql_fetch_array($query_remark);
	echo $row_remark['remark'];?>&nbsp;</td>
    <td align="center" rowspan="3"><?php echo $rowZ['PHYS'];?></td>
  </tr>
  <tr>
    <td align="center">2</td>
    <td align="center"><?php echo $row5['two_paper_mot']; ?></td>
    <td align="center"><?php echo $row5['two_paper_end']; ?></td>
    <td align="center"><?php 
	 if($rowe['Total']=="")
	{
	$queryx2=mysql_query("update 5scs_grading set grades=null,award=null,value=null,remark=null where subject_id='PHYS'")or die(mysql_error());
	}
	elseif($rowe['Total']<= '34' and $rowe['Total']>='1')
	{
	echo'F9';
	$a='9';
	//This code stores the grade in 5scs_grading
	$queryx2=mysql_query("UPDATE 5scs_grading SET grades= concat(grades,'$a') WHERE `5scs_grading`.`subject_id` = 'PHYS'")or die(mysql_error());
	}
	elseif($rowe['Total']<= '39' and $rowe['Total']>='35')
	{
	echo'P8';
	$b='8';
	//This code stores the grade in 5scs_grading
	$queryx2=mysql_query("UPDATE 5scs_grading SET grades= concat(grades,'$b') WHERE `5scs_grading`.`subject_id` = 'PHYS'")or die(mysql_error());
	}
	elseif($rowe['Total']<= '49' and $rowe['Total']>='40')
	{
	echo'P7';
	$c='7';
	//This code stores the grade in 5scs_grading
	$queryx2=mysql_query("UPDATE 5scs_grading SET grades= concat(grades,'$c') WHERE `5scs_grading`.`subject_id` = 'PHYS'")or die(mysql_error());
	}
	elseif($rowe['Total']<= '54' and $rowe['Total']>='50')
	{
	echo'C6';
	$d='6';
	//This code stores the grade in 5scs_grading
	$queryx2=mysql_query("UPDATE 5scs_grading SET grades= concat(grades,'$d') WHERE `5scs_grading`.`subject_id` = 'PHYS'")or die(mysql_error());
	}
	elseif($rowe['Total']<= '59' and $rowe['Total']>='55')
	{
	echo'C5';
	$e='5';
	//This code stores the grade in 5scs_grading
	$queryx2=mysql_query("UPDATE 5scs_grading SET grades= concat(grades,'$e') WHERE `5scs_grading`.`subject_id` = 'PHYS'")or die(mysql_error());
	}
	elseif($rowe['Total']<= '69' and $rowe['Total']>='60')
	{
	echo'C4';
	$f='4';
	//This code stores the grade in 5scs_grading
	$queryx2=mysql_query("UPDATE 5scs_grading SET grades= concat(grades,'$f') WHERE `5scs_grading`.`subject_id` = 'PHYS'")or die(mysql_error());
	}
	elseif($rowe['Total']<= '74' and $rowe['Total']>='70')
	{
	echo'C3';
	$g='3';
	//This code stores the grade in 5scs_grading
	$queryx2=mysql_query("UPDATE 5scs_grading SET grades= concat(grades,'$g') WHERE `5scs_grading`.`subject_id` = 'PHYS'")or die(mysql_error());
	}
	elseif($rowe['Total']<= '79' and $rowe['Total']>='75')
	{
	echo'D2';
	$h='2';
	//This code stores the grade in 5scs_grading
	$queryx2=mysql_query("UPDATE 5scs_grading SET grades= concat(grades,'$h') WHERE `5scs_grading`.`subject_id` = 'PHYS'")or die(mysql_error());
	}
	elseif($rowe['Total']<= '100' and $rowe['Total']>='80')
	{
	echo'D1';
	$i='1';
	//This code stores the grade in 5scs_grading
	$queryx2=mysql_query("UPDATE 5scs_grading SET grades= concat(grades,'$i') WHERE `5scs_grading`.`subject_id` = 'PHYS'")or die(mysql_error());
	}
	?></td>
  </tr>
  <tr>
    <td align="center">3</td>
    <td align="center">&nbsp;</td>
    <td align="center">&nbsp;</td>
    <td align="center">&nbsp;</td>
  </tr>
  <tr>
    <td rowspan="3">Biology</td>
    <td align="center" rowspan="3" style="color:#FF0000;"><?php 
	
	//******************************* HERE IS THE MAGIC *******************************************
    //This code perfects the Grading of the student by following the UACE Stands 
	
	
    $queryBIO=mysql_query("SELECT grades from 5scs_grading where subject_id ='BIO'")or die(mysql_error());
    $rowBIO=mysql_fetch_array($queryBIO);
	if($rowBIO['grades']== '1,1'||$rowBIO['grades']== '2,2'||$rowBIO['grades']== '1,2'||$rowBIO['grades']== '2,1')
	{
	//This code inserts the grade in the  5scs_grading table
	$queryx5=mysql_query("update 5scs_grading set award='A' where subject_id='BIO'")or die(mysql_error());
	//This code inserts the grade value in the  5scs_grading table
	$query_value=mysql_query("update 5scs_grading set value='6' where subject_id='BIO'")or die(mysql_error());
	//This code inserts the grade remark in the  5scs_grading table
	$query_remark=mysql_query("update 5scs_grading set remark='Excellent' where subject_id='BIO'")or die(mysql_error());
	//This code updates the grade in the 5scs_grading table
	$queryAward=mysql_query("SELECT award from 5scs_grading where subject_id ='BIO'")or die(mysql_error());
    $rowAward=mysql_fetch_array($queryAward);
	echo $rowAward['award'];
	//I Assigned new variables to help in updating the s5 table data
	$logic_1=$rowAward['award'];
	$logic_2='('.$rowBIO['grades'].')';
	$TRANS_GRADE= "$logic_1 $logic_2";

	//This code updates the subject grade value in the  S5 table
	$query_trans=mysql_query("update s5 set BIO='$TRANS_GRADE' where id='$ID'")or die(mysql_error());
	}
	elseif($rowBIO['grades']== '3,3'||$rowBIO['grades']== '3,1'||$rowBIO['grades']== '1,3'||$rowBIO['grades']== '2,3'||$rowBIO['grades']== '3,2'||$rowBIO['grades']== '1,4'||$rowBIO['grades']== '4,1'||$rowBIO['grades']== '4,2'||$rowBIO['grades']== '2,4')
	{
	//This code inserts the grade in the  5scs_grading
	$queryx5=mysql_query("update 5scs_grading set award='B' where subject_id='BIO'")or die(mysql_error());
	//This code inserts the grade value in the  5scs_grading table
	$query_value=mysql_query("update 5scs_grading set value='5' where subject_id='BIO'")or die(mysql_error());
	//This code inserts the grade remark in the  5scs_grading table
	$query_remark=mysql_query("update 5scs_grading set remark='Very Good' where subject_id='BIO'")or die(mysql_error());
	//This code updates the grade in the 5scs_grading table
    $queryAward=mysql_query("SELECT award from 5scs_grading where subject_id ='BIO'")or die(mysql_error());
    $rowAward=mysql_fetch_array($queryAward);
	echo $rowAward['award'];
	//I Assigned new variables to help in updating the s5 table data
	$logic_1=$rowAward['award'];
	$logic_2='('.$rowBIO['grades'].')';
	$TRANS_GRADE= "$logic_1 $logic_2";

	//This code updates the subject grade value in the  S5 table
	$query_trans=mysql_query("update s5 set BIO='$TRANS_GRADE' where id='$ID'")or die(mysql_error());
	}
	elseif($rowBIO['grades']== '1,5'||$rowBIO['grades']== '5,1'||$rowBIO['grades']== '2,5'||$rowBIO['grades']== '5,2'||$rowBIO['grades']== '3,5'||$rowBIO['grades']== '5,3'||$rowBIO['grades']== '3,4'||$rowBIO['grades']== '4,3'||$rowBIO['grades']== '4,4')
	{
	//This code inserts the grade in the  5scs_grading
	$queryx5=mysql_query("update 5scs_grading set award='C' where subject_id='BIO'")or die(mysql_error());
	//This code inserts the grade value in the  5scs_grading table
	$query_value=mysql_query("update 5scs_grading set value='4' where subject_id='BIO'")or die(mysql_error());
	//This code inserts the grade remark in the  5scs_grading table
	$query_remark=mysql_query("update 5scs_grading set remark='Good' where subject_id='BIO'")or die(mysql_error());
	//This code updates the grade in the 5scs_grading table
    $queryAward=mysql_query("SELECT award from 5scs_grading where subject_id ='BIO'")or die(mysql_error());
    $rowAward=mysql_fetch_array($queryAward);
	echo $rowAward['award'];
	//I Assigned new variables to help in updating the s5 table data
	$logic_1=$rowAward['award'];
	$logic_2='('.$rowBIO['grades'].')';
	$TRANS_GRADE= "$logic_1 $logic_2";

	//This code updates the subject grade value in the  S5 table
	$query_trans=mysql_query("update s5 set BIO='$TRANS_GRADE' where id='$ID'")or die(mysql_error());
	}
	elseif($rowBIO['grades']== '1,6'||$rowBIO['grades']== '6,1'||$rowBIO['grades']== '2,6'||$rowBIO['grades']== '6,2'||$rowBIO['grades']== '3,6'||$rowBIO['grades']== '6,3'||$rowBIO['grades']== '6,4'||$rowBIO['grades']== '4,6'||$rowBIO['grades']== '5,4'||$rowBIO['grades']== '4,5'||$rowBIO['grades']== '5,5')
	{
	//This code inserts the grade in the  5scs_grading
	$queryx5=mysql_query("update 5scs_grading set award='D' where subject_id='BIO'")or die(mysql_error());
	//This code inserts the grade value in the  5scs_grading table
	$query_value=mysql_query("update 5scs_grading set value='3' where subject_id='BIO'")or die(mysql_error());
	//This code inserts the grade remark in the  5scs_grading table
	$query_remark=mysql_query("update 5scs_grading set remark='Fairly Good' where subject_id='BIO'")or die(mysql_error());
	//This code updates the grade in the 5scs_grading table
    $queryAward=mysql_query("SELECT award from 5scs_grading where subject_id ='BIO'")or die(mysql_error());
    $rowAward=mysql_fetch_array($queryAward);
	echo $rowAward['award'];
	//I Assigned new variables to help in updating the s5 table data
	$logic_1=$rowAward['award'];
	$logic_2='('.$rowBIO['grades'].')';
	$TRANS_GRADE= "$logic_1 $logic_2";

	//This code updates the subject grade value in the  S5 table
	$query_trans=mysql_query("update s5 set BIO='$TRANS_GRADE' where id='$ID'")or die(mysql_error());
	}
	elseif($rowBIO['grades']== '1,7'||$rowBIO['grades']== '7,1'||$rowBIO['grades']== '2,7'||$rowBIO['grades']== '7,2'||$rowBIO['grades']== '3,7'||$rowBIO['grades']== '7,3'||$rowBIO['grades']== '7,4'||$rowBIO['grades']== '4,7'||$rowBIO['grades']== '6,4'||$rowBIO['grades']== '4,6'||$rowBIO['grades']== '6,6'||$rowBIO['grades']== '5,6'||$rowBIO['grades']== '6,5'||$rowBIO['grades']== '5,7'||$rowBIO['grades']== '7,5')
	{
	//This code inserts the grade in the  5scs_grading
	$queryx5=mysql_query("update 5scs_grading set award='E' where subject_id='BIO'")or die(mysql_error());
	//This code inserts the grade value in the  5scs_grading table
	$query_value=mysql_query("update 5scs_grading set value='2' where subject_id='BIO'")or die(mysql_error());
	//This code inserts the grade remark in the  5scs_grading table
	$query_remark=mysql_query("update 5scs_grading set remark='Fair' where subject_id='BIO'")or die(mysql_error());
	//This code updates the grade in the 5scs_grading table
    $queryAward=mysql_query("SELECT award from 5scs_grading where subject_id ='BIO'")or die(mysql_error());
    $rowAward=mysql_fetch_array($queryAward);
	echo $rowAward['award'];
	//I Assigned new variables to help in updating the s5 table data
	$logic_1=$rowAward['award'];
	$logic_2='('.$rowBIO['grades'].')';
	$TRANS_GRADE= "$logic_1 $logic_2";

	//This code updates the subject grade value in the  S5 table
	$query_trans=mysql_query("update s5 set BIO='$TRANS_GRADE' where id='$ID'")or die(mysql_error());
	}
	elseif($rowBIO['grades']== '1,8'||$rowBIO['grades']== '8,1'||$rowBIO['grades']== '2,8'||$rowBIO['grades']== '8,2'||$rowBIO['grades']== '3,8'||$rowBIO['grades']== '8,3'||$rowBIO['grades']== '8,4'||$rowBIO['grades']== '4,8'||$rowBIO['grades']== '9,4'||$rowBIO['grades']== '4,9'||$rowBIO['grades']== '7,7'||$rowBIO['grades']== '7,8'||$rowBIO['grades']== '8,7'||$rowBIO['grades']== '7,9'||$rowBIO['grades']== '9,7'||$rowBIO['grades']== '5,8'||$rowBIO['grades']== '8,5'||$rowBIO['grades']== '5,9'||$rowBIO['grades']== '9,5'||$rowBIO['grades']== '6,9'||$rowBIO['grades']== '9,6'||$rowBIO['grades']== '6,8'||$rowBIO['grades']== '8,6'||$rowBIO['grades']== '8,8'||$rowBIO['grades']== '9,1'||$rowBIO['grades']== '1,9'||$rowBIO['grades']== '9,2'||$rowBIO['grades']== '2,9'||$rowBIO['grades']== '9,3'||$rowBIO['grades']== '3,9'||$rowBIO['grades']== '9,4'||$rowBIO['grades']== '4,9')
	{
	//This code inserts the grade in the  5scs_grading
	$queryx5=mysql_query("update 5scs_grading set award='O' where subject_id='BIO'")or die(mysql_error());
	//This code inserts the grade value in the  5scs_grading table
	$query_value=mysql_query("update 5scs_grading set value='1' where subject_id='BIO'")or die(mysql_error());
	//This code inserts the grade remark in the  5scs_grading table
	$query_remark=mysql_query("update 5scs_grading set remark='Improve' where subject_id='BIO'")or die(mysql_error());
	//This code updates the grade in the 5scs_grading table
    $queryAward=mysql_query("SELECT award from 5scs_grading where subject_id ='BIO'")or die(mysql_error());
    $rowAward=mysql_fetch_array($queryAward);
	echo $rowAward['award'];
	//I Assigned new variables to help in updating the s5 table data
	$logic_1=$rowAward['award'];
	$logic_2='('.$rowBIO['grades'].')';
	$TRANS_GRADE= "$logic_1 $logic_2";

	//This code updates the subject grade value in the  S5 table
	$query_trans=mysql_query("update s5 set BIO='$TRANS_GRADE' where id='$ID'")or die(mysql_error());
	}
	elseif($rowBIO['grades']== '9,8'||$rowBIO['grades']== '8,9')
	{
	//This code inserts the grade in the  5scs_grading
	$queryx5=mysql_query("update 5scs_grading set award='F' where subject_id='BIO'")or die(mysql_error());
	//This code inserts the grade value in the  5scs_grading table
	$query_value=mysql_query("update 5scs_grading set value='0' where subject_id='BIO'")or die(mysql_error());
	//This code inserts the grade remark in the  5scs_grading table
	$query_remark=mysql_query("update 5scs_grading set remark='Improve' where subject_id='BIO'")or die(mysql_error());
	//This code updates the grade in the 5scs_grading table
    $queryAward=mysql_query("SELECT award from 5scs_grading where subject_id ='BIO'")or die(mysql_error());
    $rowAward=mysql_fetch_array($queryAward);
	echo $rowAward['award'];
	//I Assigned new variables to help in updating the s5 table data
	$logic_1=$rowAward['award'];
	$logic_2='('.$rowBIO['grades'].')';
	$TRANS_GRADE= "$logic_1 $logic_2";

	//This code updates the subject grade value in the  S5 table
	$query_trans=mysql_query("update s5 set BIO='$TRANS_GRADE' where id='$ID'")or die(mysql_error());
	}
	?></td>
    <td align="center">1</td>
    <td align="center"><?php echo $row3['paper_one_mot']; ?></td> 
    <td align="center"><?php echo $row3['paper_one_end']; ?></td>
    <td align="center"><?php 
	 
	if($rowc['Total']=="")
	{
	$queryx1=mysql_query("update 5scs_grading set grades=null,award=null,value=null,remark=null where subject_id='BIO'")or die(mysql_error());
	}
	elseif($rowc['Total']<= '34' and $rowc['Total']>='1')
	{
	echo'F9';
	$a='9'.',';
	//This code stores the grade in 5scs_grading
	$queryx1=mysql_query("update 5scs_grading set grades='$a' where subject_id='BIO'")or die(mysql_error());
	
	}
	elseif($rowc['Total']<= '39' and $rowc['Total']>='35')
	{
	echo'P8';
	$b='8'.',';
	//This code stores the grade in 5scs_grading
   $queryx1=mysql_query("update 5scs_grading set grades='$b' where subject_id='BIO'")or die(mysql_error());
	}
	elseif($rowc['Total']<= '49' and $rowc['Total']>='40')
	{
	echo'P7';
	$c='7'.',';
	//This code stores the grade in 5scs_grading
	$queryx1=mysql_query("update 5scs_grading set grades='$c' where subject_id='BIO'")or die(mysql_error());
	}
	elseif($rowc['Total']<= '54' and $rowc['Total']>='50')
	{
	echo'C6';
	$d='6'.',';
	//This code stores the grade in 5scs_grading
	$queryx1=mysql_query("update 5scs_grading set grades='$d' where subject_id='BIO'")or die(mysql_error());
	}
	elseif($rowc['Total']<= '59' and $rowc['Total']>='55')
	{
	echo'C5'; 
	$e='5'.',';
	//This code stores the grade in 5scs_grading
	$queryx1=mysql_query("update 5scs_grading set grades='$e' where subject_id='BIO'")or die(mysql_error());
	}
	elseif($rowc['Total']<= '69' and $rowc['Total']>='60')
	{
	echo'C4';
	$f='4'.',';
	//This code stores the grade in 5scs_grading
	$queryx1=mysql_query("update 5scs_grading set grades='$f' where subject_id='BIO'")or die(mysql_error());
	}
	elseif($rowc['Total']<= '74' and $rowc['Total']>='70')
	{
	echo'C3';
	$g='3'.',';
	//This code stores the grade in 5scs_grading
	$queryx1=mysql_query("update 5scs_grading set grades='$g' where subject_id='BIO'")or die(mysql_error());
	}
	elseif($rowc['Total']<= '79' and $rowc['Total']>='75')
	{
	echo'D2';
	$h='2'.',';
	//This code stores the grade in 5scs_grading
	$queryx1=mysql_query("update 5scs_grading set grades='$h' where subject_id='BIO'")or die(mysql_error());
	}
	elseif($rowc['Total']<= '100' and $rowc['Total']>='80')
	{
	echo'D1';
	$i='1'.',';
	//This code stores the grade in 5scs_grading
	$queryx1=mysql_query("update 5scs_grading set grades='$i' where subject_id='BIO'")or die(mysql_error());
	}
	?></td>
    <td align="center" rowspan="3" style="color:#1b5e94;"><?php 
	//This code selects the remark in the 5scs_grading table
    $query_remark=mysql_query("SELECT remark from 5scs_grading where subject_id ='BIO'")or die(mysql_error());
    $row_remark=mysql_fetch_array($query_remark);
	echo $row_remark['remark'];?></td>
    <td align="center" rowspan="3"><?php echo $rowZ['BIO'];?></td>
  </tr>
  <tr>
    <td align="center">2</td>
    <td align="center"><?php echo $row3['two_paper_mot']; ?></td>
    <td align="center"><?php echo $row3['two_paper_end']; ?></td>
    <td align="center"><?php 
	 if($rowi['Total']=="")
	{
	$queryx2=mysql_query("update 5scs_grading set grades=null,award=null,value=null,remark=null where subject_id='BIO'")or die(mysql_error());
	}
	elseif($rowi['Total']<= '34' and $rowi['Total']>='1')
	{
	echo'F9';
	$a='9';
	//This code stores the grade in 5scs_grading
	$queryx2=mysql_query("UPDATE 5scs_grading SET grades= concat(grades,'$a') WHERE `5scs_grading`.`subject_id` = 'BIO'")or die(mysql_error());
	}
	elseif($rowi['Total']<= '39' and $rowi['Total']>='35')
	{
	echo'P8';
	$b='8';
	//This code stores the grade in 5scs_grading
	$queryx2=mysql_query("UPDATE 5scs_grading SET grades= concat(grades,'$b') WHERE `5scs_grading`.`subject_id` = 'BIO'")or die(mysql_error());
	}
	elseif($rowi['Total']<= '49' and $rowi['Total']>='40')
	{
	echo'P7';
	$c='7';
	//This code stores the grade in 5scs_grading
	$queryx2=mysql_query("UPDATE 5scs_grading SET grades= concat(grades,'$c') WHERE `5scs_grading`.`subject_id` = 'BIO'")or die(mysql_error());
	}
	elseif($rowi['Total']<= '54' and $rowi['Total']>='50')
	{
	echo'C6';
	$d='6';
	//This code stores the grade in 5scs_grading
	$queryx2=mysql_query("UPDATE 5scs_grading SET grades= concat(grades,'$d') WHERE `5scs_grading`.`subject_id` = 'BIO'")or die(mysql_error());
	}
	elseif($rowi['Total']<= '59' and $rowi['Total']>='55')
	{
	echo'C5';
	$e='5';
	//This code stores the grade in 5scs_grading
	$queryx2=mysql_query("UPDATE 5scs_grading SET grades= concat(grades,'$e') WHERE `5scs_grading`.`subject_id` = 'BIO'")or die(mysql_error());
	}
	elseif($rowi['Total']<= '69' and $rowi['Total']>='60')
	{
	echo'C4';
	$f='4';
	//This code stores the grade in 5scs_grading
	$queryx2=mysql_query("UPDATE 5scs_grading SET grades= concat(grades,'$f') WHERE `5scs_grading`.`subject_id` = 'BIO'")or die(mysql_error());
	}
	elseif($rowi['Total']<= '74' and $rowi['Total']>='70')
	{
	echo'C3';
	$g='3';
	//This code stores the grade in 5scs_grading
	$queryx2=mysql_query("UPDATE 5scs_grading SET grades= concat(grades,'$g') WHERE `5scs_grading`.`subject_id` = 'BIO'")or die(mysql_error());
	}
	elseif($rowi['Total']<= '79' and $rowi['Total']>='75')
	{
	echo'D2';
	$h='2';
	//This code stores the grade in 5scs_grading
	$queryx2=mysql_query("UPDATE 5scs_grading SET grades= concat(grades,'$h') WHERE `5scs_grading`.`subject_id` = 'BIO'")or die(mysql_error());
	}
	elseif($rowi['Total']<= '100' and $rowi['Total']>='80')
	{
	echo'D1';
	$i='1';
	//This code stores the grade in 5scs_grading
	$queryx2=mysql_query("UPDATE 5scs_grading SET grades= concat(grades,'$i') WHERE `5scs_grading`.`subject_id` = 'BIO'")or die(mysql_error());
	}
	?></td>   
  </tr>
  <tr>
    <td align="center">3</td>
    <td align="center">&nbsp;</td>
    <td align="center">&nbsp;</td>
    <td align="center">3</td>
  </tr>
  <tr>
    <td rowspan="2">Economics</td>
    <td align="center" rowspan="2" style="color:#FF0000;">&nbsp;</td>
    <td align="center">1</td>
    <td align="center">&nbsp;</td>   
     <td align="center">&nbsp;</td>
    <td align="center">1</td>
    <td align="center">&nbsp;</td>
    <td align="center">&nbsp;</td>
  </tr>
  <tr>
    <td align="center">2</td>
    <td align="center">&nbsp;</td>
    <td align="center">&nbsp;</td>
    <td align="center">2</td>
    <td align="center">&nbsp;</td>
    <td align="center">&nbsp;</td>
  </tr>
  <tr>
    <td rowspan="2">Computer</td>
    <td align="center" rowspan="2" style="color:#FF0000;">&nbsp;</td>
    <td align="center">1</td>
    <td align="center">&nbsp;</td>
    <td align="center">&nbsp;</td>
    <td align="center">1</td>
     <td align="center">&nbsp;</td>
    <td align="center">&nbsp;</td>
  </tr>
      <tr>
    <td align="center">2</td>
    <td align="center">&nbsp;</td>
    <td align="center">&nbsp;</td>
    <td align="center">2</td>
    <td align="center">&nbsp;</td>
    <td align="center" style="font-family:Bradley Hand ITC; color:#1b5e94; font-weight:bold;">&nbsp;</td>
  </tr>
  <tr>
    <td>Sub math</td>
    <td align="center">&nbsp;</td>
    <td align="center">1</td>
    <td align="center">&nbsp;</td>
    <td align="center">&nbsp;</td>
    <td align="center">1</td>
    <td align="center">&nbsp;</td>
    <td align="center">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td align="center">&nbsp;</td>
    <td align="center">&nbsp;</td>
    <td>&nbsp;</td>
      <td align="center">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
 </table>
 <br />
</div>
<div style="padding-top:8px;">
<table width="900" border="0" height="60px" style="font-size:25px; color:#009900; font-weight:bold;">
  <tr height="60px">
    <td align="left">Princinple passes:&nbsp;&nbsp;</td>
   <td align="center">Subsidiaries:&nbsp;&nbsp;</td>
  <td></td>
  <td></td>
  <td></td>
</table>
<table width="1035" border="1" bordercolor="#000" height="80px" style=" border-collapse:collapse; font-size:25px;">
  <tr height="60px">
    <th width="158" scope="col" rowspan="2">Grade Scale</th>
    <th width="81" scope="col">D1</th>
    <th width="91" scope="col">D2</th>
    <th width="82" scope="col">C3</th>
    <th width="85" scope="col">C4</th>
    <th width="86" scope="col">C5</th>
    <th width="95" scope="col">C6</th>
    <th width="99" scope="col">P7</th>
    <th width="122" scope="col">P8</th>
    <th width="128" scope="col">F9</th>
  </tr>
  <tr height="60px" style="font-family:Bradley Hand ITC; color:#1b5e94; font-weight:bold;">
    <td align="center">85-100</td>
    <td align="center">80-84</td>
    <td align="center">70-79</td>
    <td align="center">60-69</td>
    <td align="center">55-59</td>
    <td align="center">50-54</td>
    <td align="center">40-49</td>
    <td align="center">35-39</td>
    <td align="center">0-34</td>
  </tr>
</table><br />
<table width="1000" border="0" height="200px" class="size" style="color:#009900;">
  <tr>
  <td width="900"><strong>Class-tr's comment:.................................................................................................<br />
  ...................................................................................................................................</strong></td>
    <td></td>
  <td align="right" width="100"><strong>Sign:&nbsp;..............</strong></td></tr>
  <tr>
  <td width="900"><strong>Head-tr's comment:..................................................................................................<br />
  ....................................................................................................................................</strong></td> <td></td>
  
   <td align="left" width="100"><strong>Sign:&nbsp;..............</strong></td>
  </tr>
  <tr>
    <td><strong>Next term fees:&nbsp;&nbsp;&nbsp;........................................................................................</strong>&nbsp;</td>
     <td></td>
    <td align="left"></td>
  </tr>
  <tr>
    <td><strong>Fees balance:&nbsp;&nbsp;.......................................................................Next term begins on:</strong></td>
   <td></td>
    <td align="left"><?php echo $rowdate['nextdate'];?></td>
  </tr>
  <tr>
    <td><strong>Requirements; Ream(Rotatrim), 2 Brooms and 4 toilet papers&nbsp;</strong></td>
 <td></td>
    <td align="left"></td>
</table><br>
<p>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

</p>
<P><strong></strong><font style="font-style:oblique; font-size:25px; color:#CC3300; font-family:'Arial Black';">&quot;Knowledge with piety&quot;</font></P>
</div>
</td>
  </tr>
</table>
<?PHP header("refresh:2;");?>
</body>
</html>
