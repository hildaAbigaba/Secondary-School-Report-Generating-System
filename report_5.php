<?php
require'db.php';
$ID=$_POST['ID'];
$gp=$_POST['gp'];
$math=$_POST['math'];
$physics=$_POST['physics'];
$chemistry=$_POST['chemistry'];
$biology=$_POST['biology'];
$economics=$_POST['economics'];
$geography=$_POST['geography'];
$ent=$_POST['ent'];
$art=$_POST['art'];$art_comment=$_POST['Art_comment'];
$computer=$_POST['computer'];
$sub_math=$_POST['sub_math'];
$total=$_POST['total'];
$points=$_POST['points'];
$PP=$_POST['pp'];
$sub=$_POST['sub'];
$comment=$_POST['comment'];
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
	top:-10px;
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

<body>
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
  <td colspan="8"  style="color:#000; text-transform:uppercase; font-family:Arial Narrow; font-weight:bold; font-size:20px;">&nbsp;NAME:&nbsp;<font color="#1b5e94"><?php echo $row['firstname'];?>&nbsp;<?php echo $row['middlename'];?>&nbsp;<?php echo $row['lastname'];?></font>&nbsp;&nbsp;CLASS:&nbsp;<font color="#1b5e94"><?php echo $row['class'];?></font>&nbsp;&nbsp;SEX:&nbsp;</b><font color="#1b5e94"><?php echo $row['sex'];?></font>&nbsp;&nbsp;combina:&nbsp;<font color="#1b5e94"><?php echo $row['combination'];?></font>&nbsp;HOUSE:&nbsp;<font color="#1b5e94"><?php echo $row['House']?></font>&nbsp;&nbsp;TERM:&nbsp;<font color="#1b5e94"><?php echo $row['Term'];?></font>&nbsp;&nbsp;YEAR:&nbsp;<font color="#1b5e94"><?php echo $row['year'];?></font></td>
  </tr>
</table>
<BR />
    <table width="1035" border="1" bordercolor="#000" cellpadding="-10px"  align="center" height="600px" style="background-image:url(images/t-bg.png); background-position:center; border-collapse:collapse; font-size:22px; font-family:Arial Narrow;">
      <tr height="50px">
        <td><strong>Subjects</strong></td>
        <td align="center"><strong>Paper</strong></td>
        <td align="center"><strong>MOT(%)</strong></td>
        <td align="center"><strong>EOT(%)</strong></td>
        <td align="center"><strong>Grade</strong></td>
        <td align="center"><strong>Award</strong></td>
        <td align="center"><strong>Remark</strong></td>
        <td align="center"><strong>Sign</strong></td>
      </tr>
      <tr>
        <td rowspan="2">G/PAPER</td>
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
	//This code updates the 5scs_grading table
	$query_remark=mysql_query("update 5scs_grading set remark='Improve' where subject_id='GP'")or die(mysql_error());
	
	}
	elseif($rowa['Total']<= '39' and $rowa['Total']>='35')
	{
	echo'P8';
	$b='8'.',';
	//This code stores the grade in 5scs_grading
   $queryx1=mysql_query("update 5scs_grading set grades='$b' where subject_id='GP'")or die(mysql_error());
   //This code updates the 5scs_grading table
	$query_remark=mysql_query("update 5scs_grading set remark='Improve' where subject_id='GP'")or die(mysql_error());
	}
	elseif($rowa['Total']<= '49' and $rowa['Total']>='40')
	{
	echo'P7';
	$c='7'.',';
	//This code stores the grade in 5scs_grading
	$queryx1=mysql_query("update 5scs_grading set grades='$c' where subject_id='GP'")or die(mysql_error());
	//This code updates the 5scs_grading table
	$query_remark=mysql_query("update 5scs_grading set remark='Improve' where subject_id='GP'")or die(mysql_error());
	}
	elseif($rowa['Total']<= '54' and $rowa['Total']>='50')
	{
	echo'C6';
	$d='6'.',';
	//This code stores the grade in 5scs_grading
	$queryx1=mysql_query("update 5scs_grading set grades='$d' where subject_id='GP'")or die(mysql_error());
	//This code updates the 5scs_grading table
	$query_remark=mysql_query("update 5scs_grading set remark='Improve' where subject_id='GP'")or die(mysql_error());
	}
	elseif($rowa['Total']<= '59' and $rowa['Total']>='55')
	{
	echo'C5'; 
	$e='5'.',';
	//This code stores the grade in 5scs_grading
	$queryx1=mysql_query("update 5scs_grading set grades='$e' where subject_id='GP'")or die(mysql_error());
	//This code updates the 5scs_grading table
	$query_remark=mysql_query("update 5scs_grading set remark='Fair' where subject_id='GP'")or die(mysql_error());
	}
	elseif($rowa['Total']<= '64' and $rowa['Total']>='60')
	{
	echo'C4';
	$f='4'.',';
	//This code stores the grade in 5scs_grading
	$queryx1=mysql_query("update 5scs_grading set grades='$f' where subject_id='GP'")or die(mysql_error());
	//This code updates the 5scs_grading table
	$query_remark=mysql_query("update 5scs_grading set remark='Fairly Good' where subject_id='GP'")or die(mysql_error());
	}
	elseif($rowa['Total']<= '74' and $rowa['Total']>='65')
	{
	echo'C3';
	$g='3'.',';
	//This code stores the grade in 5scs_grading
	$queryx1=mysql_query("update 5scs_grading set grades='$g' where subject_id='GP'")or die(mysql_error());
	//This code updates the 5scs_grading table
	$query_remark=mysql_query("update 5scs_grading set remark='Good' where subject_id='GP'")or die(mysql_error());
	}
	elseif($rowa['Total']<= '79' and $rowa['Total']>='75')
	{
	echo'D2';
	$h='2'.',';
	//This code stores the grade in 5scs_grading
	$queryx1=mysql_query("update 5scs_grading set grades='$h' where subject_id='GP'")or die(mysql_error());
	//This code updates the 5scs_grading table
	$query_remark=mysql_query("update 5scs_grading set remark='Very Good' where subject_id='GP'")or die(mysql_error());
	}
	elseif($rowa['Total']<= '100' and $rowa['Total']>='80')
	{
	echo'D1';
	$i='1'.',';
	//This code stores the grade in 5scs_grading
	$queryx1=mysql_query("update 5scs_grading set grades='$i' where subject_id='GP'")or die(mysql_error());
	//This code updates the 5scs_grading table
	$query_remark=mysql_query("update 5scs_grading set remark='Excellent' where subject_id='GP'")or die(mysql_error());
	}
	?></td>
        <td rowspan="2" align="center"><span style="color:#FF0000;font-size:32px; font-weight:bold;"><?php echo"$gp"?></span></td>
        <td rowspan="2" align="center" style="color:#1b5e94;"><?php 
	//This code selects the remark in the 5scs_grading table
    $query_remark=mysql_query("SELECT remark from 5scs_grading where subject_id ='GP'")or die(mysql_error());
    $row_remark=mysql_fetch_array($query_remark);
	echo $row_remark['remark'];?></td>
        <td rowspan="2" align="center"><?php echo $rowZ['GP'];?></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td align="center">&nbsp;</td>
        <td align="center">&nbsp;</td>
        <td align="center">&nbsp;</td>
      </tr>
      <tr>
        <td rowspan="2">MATH</td>
        <td align="center">1</td>
        <td align="center"><?php echo $row2['paper_one_mot']; ?></td>
        <td align="center"><?php echo $row2['paper_one_end']; ?></td>
        <td align="center"><?php 
	 
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
	elseif($rowb['Total']<= '64' and $rowb['Total']>='60')
	{
	echo'C4';
	$f='4'.',';
	//This code stores the grade in 5scs_grading
	$queryx1=mysql_query("update 5scs_grading set grades='$f' where subject_id='MATH'")or die(mysql_error());
	}
	elseif($rowb['Total']<= '74' and $rowb['Total']>='65')
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
	?>        </td>
        <td rowspan="2" align="center"><span style="color:#FF0000; font-size:36px; font-weight:bold;"><?php echo"$math"?></span></td>
        
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
	elseif($rowh['Total']<= '64' and $rowh['Total']>='60')
	{
	echo'C4';
	$f='4';
	//This code stores the grade in 5scs_grading
	$queryx2=mysql_query("UPDATE 5scs_grading SET grades= concat(grades,'$f') WHERE `5scs_grading`.`subject_id` = 'MATH'")or die(mysql_error());
	}
	elseif($rowh['Total']<= '74' and $rowh['Total']>='65')
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
        <td rowspan="3">PHYSICS</td>
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
	elseif($rowe['Total']<= '64' and $rowe['Total']>='60')
	{
	echo'C4';
	$f='4'.',';
	//This code stores the grade in 5scs_grading
	$queryx1=mysql_query("update 5scs_grading set grades='$f' where subject_id='PHYS'")or die(mysql_error());
	}
	elseif($rowe['Total']<= '74' and $rowe['Total']>='65')
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
     <td rowspan="3" align="center"><span style="color:#FF0000; font-size:36px; font-weight:bold;"><?php echo"$physics";?></span></td>
        <td align="center" rowspan="3" style="color:#1b5e94;"><?php 
	//This code selects the remark in the 5scs_grading table
    $query_remark=mysql_query("SELECT remark from 5scs_grading where subject_id ='PHYS'")or die(mysql_error());
    $row_remark=mysql_fetch_array($query_remark);
	echo $row_remark['remark'];?>
          &nbsp;</td>
        <td align="center" rowspan="3"><?php echo $rowZ['PHYS'];?></td>
      </tr>
      <tr>
        <td align="center">2</td>
        <td align="center"><?php echo $row5['two_paper_mot']; ?></td>
        <td align="center"><?php echo $row5['two_paper_end']; ?></td>
        <td align="center"><?php 
	 if($rowk['Total']=="")
	{
	$queryx2=mysql_query("update 5scs_grading set grades=null,award=null,value=null,remark=null where subject_id='PHYS'")or die(mysql_error());
	}
	elseif($rowk['Total']<= '34' and $rowk['Total']>='1')
	{
	echo'F9';
	$a='9'.',';
	//This code stores the grade in 5scs_grading
	$queryx2=mysql_query("UPDATE 5scs_grading SET grades= concat(grades,'$a') WHERE `5scs_grading`.`subject_id` = 'PHYS'")or die(mysql_error());
	}
	elseif($rowk['Total']<= '39' and $rowk['Total']>='35')
	{
	echo'P8';
	$b='8'.',';
	//This code stores the grade in 5scs_grading
	$queryx2=mysql_query("UPDATE 5scs_grading SET grades= concat(grades,'$b') WHERE `5scs_grading`.`subject_id` = 'PHYS'")or die(mysql_error());
	}
	elseif($rowk['Total']<= '49' and $rowk['Total']>='40')
	{
	echo'P7';
	$c='7'.',';
	//This code stores the grade in 5scs_grading
	$queryx2=mysql_query("UPDATE 5scs_grading SET grades= concat(grades,'$c') WHERE `5scs_grading`.`subject_id` = 'PHYS'")or die(mysql_error());
	}
	elseif($rowk['Total']<= '54' and $rowk['Total']>='50')
	{
	echo'C6';
	$d='6'.',';
	//This code stores the grade in 5scs_grading
	$queryx2=mysql_query("UPDATE 5scs_grading SET grades= concat(grades,'$d') WHERE `5scs_grading`.`subject_id` = 'PHYS'")or die(mysql_error());
	}
	elseif($rowk['Total']<= '59' and $rowk['Total']>='55')
	{
	echo'C5';
	$e='5'.',';
	//This code stores the grade in 5scs_grading
	$queryx2=mysql_query("UPDATE 5scs_grading SET grades= concat(grades,'$e') WHERE `5scs_grading`.`subject_id` = 'PHYS'")or die(mysql_error());
	}
	elseif($rowk['Total']<= '64' and $rowk['Total']>='60')
	{
	echo'C4';
	$f='4'.',';
	//This code stores the grade in 5scs_grading
	$queryx2=mysql_query("UPDATE 5scs_grading SET grades= concat(grades,'$f') WHERE `5scs_grading`.`subject_id` = 'PHYS'")or die(mysql_error());
	}
	elseif($rowk['Total']<= '74' and $rowk['Total']>='65')
	{
	echo'C3';
	$g='3'.',';
	//This code stores the grade in 5scs_grading
	$queryx2=mysql_query("UPDATE 5scs_grading SET grades= concat(grades,'$g') WHERE `5scs_grading`.`subject_id` = 'PHYS'")or die(mysql_error());
	}
	elseif($rowk['Total']<= '79' and $rowk['Total']>='75')
	{
	echo'D2';
	$h='2'.',';
	//This code stores the grade in 5scs_grading
	$queryx2=mysql_query("UPDATE 5scs_grading SET grades= concat(grades,'$h') WHERE `5scs_grading`.`subject_id` = 'PHYS'")or die(mysql_error());
	}
	elseif($rowk['Total']<= '100' and $rowk['Total']>='80')
	{
	echo'D1';
	$i='1'.',';
	//This code stores the grade in 5scs_grading
	$queryx2=mysql_query("UPDATE 5scs_grading SET grades= concat(grades,'$i') WHERE `5scs_grading`.`subject_id` = 'PHYS'")or die(mysql_error());
	}
	?></td>
      </tr>
      <tr>
        <td align="center">3</td>
        <td align="center"><?php echo $row5['paper_three_mot']; ?></td>
        <td align="center"><?php echo $row5['paper_three_end']; ?></td>
        <td align="center"><?php 
	 if($rowkk['Total']=="")
	{
	$queryx2=mysql_query("update 5scs_grading set grades=null,award=null,value=null,remark=null where subject_id='PHYS'")or die(mysql_error());
	}
	elseif($rowkk['Total']<= '34' and $rowkk['Total']>='1')
	{
	echo'F9';
	$a='9';
	//This code stores the grade in 5scs_grading
	$queryx2=mysql_query("UPDATE 5scs_grading SET grades= concat(grades,'$a') WHERE `5scs_grading`.`subject_id` = 'PHYS'")or die(mysql_error());
	}
	elseif($rowkk['Total']<= '39' and $rowkk['Total']>='35')
	{
	echo'P8';
	$b='8';
	//This code stores the grade in 5scs_grading
	$queryx2=mysql_query("UPDATE 5scs_grading SET grades= concat(grades,'$b') WHERE `5scs_grading`.`subject_id` = 'PHYS'")or die(mysql_error());
	}
	elseif($rowkk['Total']<= '49' and $rowkk['Total']>='40')
	{
	echo'P7';
	$c='7';
	//This code stores the grade in 5scs_grading
	$queryx2=mysql_query("UPDATE 5scs_grading SET grades= concat(grades,'$c') WHERE `5scs_grading`.`subject_id` = 'PHYS'")or die(mysql_error());
	}
	elseif($rowkk['Total']<= '54' and $rowkk['Total']>='50')
	{
	echo'C6';
	$d='6';
	//This code stores the grade in 5scs_grading
	$queryx2=mysql_query("UPDATE 5scs_grading SET grades= concat(grades,'$d') WHERE `5scs_grading`.`subject_id` = 'PHYS'")or die(mysql_error());
	}
	elseif($rowkk['Total']<= '59' and $rowkk['Total']>='55')
	{
	echo'C5';
	$e='5';
	//This code stores the grade in 5scs_grading
	$queryx2=mysql_query("UPDATE 5scs_grading SET grades= concat(grades,'$e') WHERE `5scs_grading`.`subject_id` = 'PHYS'")or die(mysql_error());
	}
	elseif($rowkk['Total']<= '64' and $rowkk['Total']>='60')
	{
	echo'C4';
	$f='4';
	//This code stores the grade in 5scs_grading
	$queryx2=mysql_query("UPDATE 5scs_grading SET grades= concat(grades,'$f') WHERE `5scs_grading`.`subject_id` = 'PHYS'")or die(mysql_error());
	}
	elseif($rowkk['Total']<= '74' and $rowkk['Total']>='65')
	{
	echo'C3';
	$g='3';
	//This code stores the grade in 5scs_grading
	$queryx2=mysql_query("UPDATE 5scs_grading SET grades= concat(grades,'$g') WHERE `5scs_grading`.`subject_id` = 'PHYS'")or die(mysql_error());
	}
	elseif($rowkk['Total']<= '79' and $rowkk['Total']>='75')
	{
	echo'D2';
	$h='2';
	//This code stores the grade in 5scs_grading
	$queryx2=mysql_query("UPDATE 5scs_grading SET grades= concat(grades,'$h') WHERE `5scs_grading`.`subject_id` = 'PHYS'")or die(mysql_error());
	}
	elseif($rowkk['Total']<= '100' and $rowkk['Total']>='80')
	{
	echo'D1';
	$i='1';
	//This code stores the grade in 5scs_grading
	$queryx2=mysql_query("UPDATE 5scs_grading SET grades= concat(grades,'$i') WHERE `5scs_grading`.`subject_id` = 'PHYS'")or die(mysql_error());
	}
	?></td>
      </tr>
      <tr>
        <td rowspan="3">CHEMISTRY</td>
        <td align="center">1</td>
        <td align="center"><?php echo $row4['paper_one_mot']; ?></td>
        <td align="center"><?php echo $row4['paper_one_end']; ?></td>
        <td align="center"><?php 
	 
	if($rowd['Total']=="")
	{
	$queryx1=mysql_query("update 5scs_grading set grades=null,award=null,value=null,remark=null where subject_id='CHEM'")or die(mysql_error());
	}
	elseif($rowd['Total']<= '34' and $rowd['Total']>='1')
	{
	echo'F9';
	$a='9'.',';
	//This code stores the grade in 5scs_grading
	$queryx1=mysql_query("update 5scs_grading set grades='$a' where subject_id='CHEM'")or die(mysql_error());
	
	}
	elseif($rowd['Total']<= '39' and $rowd['Total']>='35')
	{
	echo'P8';
	$b='8'.',';
	//This code stores the grade in 5scs_grading
   $queryx1=mysql_query("update 5scs_grading set grades='$b' where subject_id='CHEM'")or die(mysql_error());
	}
	elseif($rowd['Total']<= '49' and $rowd['Total']>='40')
	{
	echo'P7';
	$c='7'.',';
	//This code stores the grade in 5scs_grading
	$queryx1=mysql_query("update 5scs_grading set grades='$c' where subject_id='CHEM'")or die(mysql_error());
	}
	elseif($rowd['Total']<= '54' and $rowd['Total']>='50')
	{
	echo'C6';
	$d='6'.',';
	//This code stores the grade in 5scs_grading
	$queryx1=mysql_query("update 5scs_grading set grades='$d' where subject_id='CHEM'")or die(mysql_error());
	}
	elseif($rowd['Total']<= '59' and $rowd['Total']>='55')
	{
	echo'C5'; 
	$e='5'.',';
	//This code stores the grade in 5scs_grading
	$queryx1=mysql_query("update 5scs_grading set grades='$e' where subject_id='CHEM'")or die(mysql_error());
	}
	elseif($rowd['Total']<= '64' and $rowd['Total']>='60')
	{
	echo'C4';
	$f='4'.',';
	//This code stores the grade in 5scs_grading
	$queryx1=mysql_query("update 5scs_grading set grades='$f' where subject_id='CHEM'")or die(mysql_error());
	}
	elseif($rowd['Total']<= '74' and $rowd['Total']>='65')
	{
	echo'C3';
	$g='3'.',';
	//This code stores the grade in 5scs_grading
	$queryx1=mysql_query("update 5scs_grading set grades='$g' where subject_id='CHEM'")or die(mysql_error());
	}
	elseif($rowd['Total']<= '79' and $rowd['Total']>='75')
	{
	echo'D2';
	$h='2'.',';
	//This code stores the grade in 5scs_grading
	$queryx1=mysql_query("update 5scs_grading set grades='$h' where subject_id='CHEM'")or die(mysql_error());
	}
	elseif($rowd['Total']<= '100' and $rowd['Total']>='80')
	{
	echo'D1';
	$i='1'.',';
	//This code stores the grade in 5scs_grading
	$queryx1=mysql_query("update 5scs_grading set grades='$i' where subject_id='CHEM'")or die(mysql_error());
	}
	?></td>
     <td rowspan="3" align="center"><span style="color:#FF0000; font-size:36px; font-weight:bold;"><?php echo"$chemistry";?></span></td>
        <td align="center" rowspan="3" style="color:#1b5e94;"><?php 
	//This code selects the remark in the 5scs_grading table
    $query_remark=mysql_query("SELECT remark from 5scs_grading where subject_id ='CHEM'")or die(mysql_error());
    $row_remark=mysql_fetch_array($query_remark);
	echo $row_remark['remark'];?></td>
        <td align="center" rowspan="3"><?php echo $rowZ['CHEM'];?></td>
      </tr>
      <tr>
        <td align="center">2</td>
        <td align="center"><?php echo $row4['two_paper_mot']; ?></td>
        <td align="center"><?php echo $row4['two_paper_end']; ?></td>
        <td align="center"><?php 
	 if($rowj['Total']=="")
	{
	$queryx2=mysql_query("update 5scs_grading set grades=null,award=null,value=null,remark=null where subject_id='CHEM'")or die(mysql_error());
	}
	elseif($rowj['Total']<= '34' and $rowj['Total']>='1')
	{
	echo'F9';
	$a='9'.',';
	//This code stores the grade in 5scs_grading
	$queryx2=mysql_query("UPDATE 5scs_grading SET grades= concat(grades,'$a') WHERE `5scs_grading`.`subject_id` = 'CHEM'")or die(mysql_error());
	}
	elseif($rowj['Total']<= '39' and $rowj['Total']>='35')
	{
	echo'P8';
	$b='8'.',';
	//This code stores the grade in 5scs_grading
	$queryx2=mysql_query("UPDATE 5scs_grading SET grades= concat(grades,'$b') WHERE `5scs_grading`.`subject_id` = 'CHEM'")or die(mysql_error());
	}
	elseif($rowj['Total']<= '49' and $rowj['Total']>='40')
	{
	echo'P7';
	$c='7'.',';
	//This code stores the grade in 5scs_grading
	$queryx2=mysql_query("UPDATE 5scs_grading SET grades= concat(grades,'$c') WHERE `5scs_grading`.`subject_id` = 'CHEM'")or die(mysql_error());
	}
	elseif($rowj['Total']<= '54' and $rowj['Total']>='50')
	{
	echo'C6';
	$d='6'.',';
	//This code stores the grade in 5scs_grading
	$queryx2=mysql_query("UPDATE 5scs_grading SET grades= concat(grades,'$d') WHERE `5scs_grading`.`subject_id` = 'CHEM'")or die(mysql_error());
	}
	elseif($rowj['Total']<= '59' and $rowj['Total']>='55')
	{
	echo'C5';
	$e='5'.',';
	//This code stores the grade in 5scs_grading
	$queryx2=mysql_query("UPDATE 5scs_grading SET grades= concat(grades,'$e') WHERE `5scs_grading`.`subject_id` = 'CHEM'")or die(mysql_error());
	}
	elseif($rowj['Total']<= '64' and $rowj['Total']>='60')
	{
	echo'C4';
	$f='4'.',';
	//This code stores the grade in 5scs_grading
	$queryx2=mysql_query("UPDATE 5scs_grading SET grades= concat(grades,'$f') WHERE `5scs_grading`.`subject_id` = 'CHEM'")or die(mysql_error());
	}
	elseif($rowj['Total']<= '74' and $rowj['Total']>='65')
	{
	echo'C3';
	$g='3'.',';
	//This code stores the grade in 5scs_grading
	$queryx2=mysql_query("UPDATE 5scs_grading SET grades= concat(grades,'$g') WHERE `5scs_grading`.`subject_id` = 'CHEM'")or die(mysql_error());
	}
	elseif($rowj['Total']<= '79' and $rowj['Total']>='75')
	{
	echo'D2';
	$h='2'.',';
	//This code stores the grade in 5scs_grading
	$queryx2=mysql_query("UPDATE 5scs_grading SET grades= concat(grades,'$h') WHERE `5scs_grading`.`subject_id` = 'CHEM'")or die(mysql_error());
	}
	elseif($rowj['Total']<= '100' and $rowj['Total']>='80')
	{
	echo'D1';
	$i='1'.',';
	//This code stores the grade in 5scs_grading
	$queryx2=mysql_query("UPDATE 5scs_grading SET grades= concat(grades,'$i') WHERE `5scs_grading`.`subject_id` = 'CHEM'")or die(mysql_error());
	}
	?></td>
      </tr>
      <tr>
        <td align="center">3</td>
        <td align="center"><?php echo $row4['paper_three_mot']; ?></td>
        <td align="center"><?php echo $row4['paper_three_end']; ?></td>
        <td align="center"><?php 
	 if($rowjj['Total']=="")
	{
	$queryx2=mysql_query("update 5scs_grading set grades=null,award=null,value=null,remark=null where subject_id='CHEM'")or die(mysql_error());
	}
	elseif($rowjj['Total']<= '34' and $rowjj['Total']>='1')
	{
	echo'F9';
	$a='9';
	//This code stores the grade in 5scs_grading
	$queryx2=mysql_query("UPDATE 5scs_grading SET grades= concat(grades,'$a') WHERE `5scs_grading`.`subject_id` = 'CHEM'")or die(mysql_error());
	}
	elseif($rowjj['Total']<= '39' and $rowjj['Total']>='35')
	{
	echo'P8';
	$b='8';
	//This code stores the grade in 5scs_grading
	$queryx2=mysql_query("UPDATE 5scs_grading SET grades= concat(grades,'$b') WHERE `5scs_grading`.`subject_id` = 'CHEM'")or die(mysql_error());
	}
	elseif($rowjj['Total']<= '49' and $rowjj['Total']>='40')
	{
	echo'P7';
	$c='7';
	//This code stores the grade in 5scs_grading
	$queryx2=mysql_query("UPDATE 5scs_grading SET grades= concat(grades,'$c') WHERE `5scs_grading`.`subject_id` = 'CHEM'")or die(mysql_error());
	}
	elseif($rowjj['Total']<= '54' and $rowjj['Total']>='50')
	{
	echo'C6';
	$d='6';
	//This code stores the grade in 5scs_grading
	$queryx2=mysql_query("UPDATE 5scs_grading SET grades= concat(grades,'$d') WHERE `5scs_grading`.`subject_id` = 'CHEM'")or die(mysql_error());
	}
	elseif($rowjj['Total']<= '59' and $rowjj['Total']>='55')
	{
	echo'C5';
	$e='5';
	//This code stores the grade in 5scs_grading
	$queryx2=mysql_query("UPDATE 5scs_grading SET grades= concat(grades,'$e') WHERE `5scs_grading`.`subject_id` = 'CHEM'")or die(mysql_error());
	}
	elseif($rowjj['Total']<= '64' and $rowjj['Total']>='60')
	{
	echo'C4';
	$f='4';
	//This code stores the grade in 5scs_grading
	$queryx2=mysql_query("UPDATE 5scs_grading SET grades= concat(grades,'$f') WHERE `5scs_grading`.`subject_id` = 'CHEM'")or die(mysql_error());
	}
	elseif($rowjj['Total']<= '74' and $rowjj['Total']>='65')
	{
	echo'C3';
	$g='3';
	//This code stores the grade in 5scs_grading
	$queryx2=mysql_query("UPDATE 5scs_grading SET grades= concat(grades,'$g') WHERE `5scs_grading`.`subject_id` = 'CHEM'")or die(mysql_error());
	}
	elseif($rowjj['Total']<= '79' and $rowjj['Total']>='75')
	{
	echo'D2';
	$h='2';
	//This code stores the grade in 5scs_grading
	$queryx2=mysql_query("UPDATE 5scs_grading SET grades= concat(grades,'$h') WHERE `5scs_grading`.`subject_id` = 'CHEM'")or die(mysql_error());
	}
	elseif($rowjj['Total']<= '100' and $rowjj['Total']>='80')
	{
	echo'D1';
	$i='1';
	//This code stores the grade in 5scs_grading
	$queryx2=mysql_query("UPDATE 5scs_grading SET grades= concat(grades,'$i') WHERE `5scs_grading`.`subject_id` = 'CHEM'")or die(mysql_error());
	}
	?></td>
      </tr>
      <tr>
        <td rowspan="3">BIOLOGY</td>
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
	elseif($rowc['Total']<= '64' and $rowc['Total']>='60')
	{
	echo'C4';
	$f='4'.',';
	//This code stores the grade in 5scs_grading
	$queryx1=mysql_query("update 5scs_grading set grades='$f' where subject_id='BIO'")or die(mysql_error());
	}
	elseif($rowc['Total']<= '74' and $rowc['Total']>='65')
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
     <td rowspan="3" align="center"><span style="color:#FF0000; font-size:36px; font-weight:bold;"><?php echo"$biology";?></span></td>
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
	$a='9'.',';
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
	$c='7'.',';
	//This code stores the grade in 5scs_grading
	$queryx2=mysql_query("UPDATE 5scs_grading SET grades= concat(grades,'$c') WHERE `5scs_grading`.`subject_id` = 'BIO'")or die(mysql_error());
	}
	elseif($rowi['Total']<= '54' and $rowi['Total']>='50')
	{
	echo'C6';
	$d='6'.',';
	//This code stores the grade in 5scs_grading
	$queryx2=mysql_query("UPDATE 5scs_grading SET grades= concat(grades,'$d') WHERE `5scs_grading`.`subject_id` = 'BIO'")or die(mysql_error());
	}
	elseif($rowi['Total']<= '59' and $rowi['Total']>='55')
	{
	echo'C5';
	$e='5'.',';
	//This code stores the grade in 5scs_grading
	$queryx2=mysql_query("UPDATE 5scs_grading SET grades= concat(grades,'$e') WHERE `5scs_grading`.`subject_id` = 'BIO'")or die(mysql_error());
	}
	elseif($rowi['Total']<= '64' and $rowi['Total']>='60')
	{
	echo'C4';
	$f='4'.',';
	//This code stores the grade in 5scs_grading
	$queryx2=mysql_query("UPDATE 5scs_grading SET grades= concat(grades,'$f') WHERE `5scs_grading`.`subject_id` = 'BIO'")or die(mysql_error());
	}
	elseif($rowi['Total']<= '74' and $rowi['Total']>='65')
	{
	echo'C3';
	$g='3'.',';
	//This code stores the grade in 5scs_grading
	$queryx2=mysql_query("UPDATE 5scs_grading SET grades= concat(grades,'$g') WHERE `5scs_grading`.`subject_id` = 'BIO'")or die(mysql_error());
	}
	elseif($rowi['Total']<= '79' and $rowi['Total']>='75')
	{
	echo'D2';
	$h='2'.',';
	//This code stores the grade in 5scs_grading
	$queryx2=mysql_query("UPDATE 5scs_grading SET grades= concat(grades,'$h') WHERE `5scs_grading`.`subject_id` = 'BIO'")or die(mysql_error());
	}
	elseif($rowi['Total']<= '100' and $rowi['Total']>='80')
	{
	echo'D1';
	$i='1'.',';
	//This code stores the grade in 5scs_grading
	$queryx2=mysql_query("UPDATE 5scs_grading SET grades= concat(grades,'$i') WHERE `5scs_grading`.`subject_id` = 'BIO'")or die(mysql_error());
	}
	?></td>
      </tr>
      <tr>
        <td align="center">3</td>
        <td align="center"><?php echo $row3['paper_three_mot']; ?></td>
        <td align="center"><?php echo $row3['paper_three_end']; ?></td>
        <td align="center"><?php 
	 if($rowcc['Total']=="")
	{
	$queryx2=mysql_query("update 5scs_grading set grades=null,award=null,value=null,remark=null where subject_id='BIO'")or die(mysql_error());
	
	}
	elseif($rowcc['Total']<= '34' and $rowcc['Total']>='1')
	{
	echo'F9';
	$a='9';
	//This code stores the grade in 5scs_grading
	$queryx2=mysql_query("UPDATE 5scs_grading SET grades= concat(grades,'$a') WHERE `5scs_grading`.`subject_id` = 'BIO'")or die(mysql_error());
	}
	elseif($rowcc['Total']<= '39' and $rowcc['Total']>='35')
	{
	echo'P8';
	$b='8';
	//This code stores the grade in 5scs_grading
	$queryx2=mysql_query("UPDATE 5scs_grading SET grades= concat(grades,'$b') WHERE `5scs_grading`.`subject_id` = 'BIO'")or die(mysql_error());
	}
	elseif($rowcc['Total']<= '49' and $rowcc['Total']>='40')
	{
	echo'P7';
	$c='7';
	//This code stores the grade in 5scs_grading
	$queryx2=mysql_query("UPDATE 5scs_grading SET grades= concat(grades,'$c') WHERE `5scs_grading`.`subject_id` = 'BIO'")or die(mysql_error());
	}
	elseif($rowcc['Total']<= '54' and $rowcc['Total']>='50')
	{
	echo'C6';
	$d='6';
	//This code stores the grade in 5scs_grading
	$queryx2=mysql_query("UPDATE 5scs_grading SET grades= concat(grades,'$d') WHERE `5scs_grading`.`subject_id` = 'BIO'")or die(mysql_error());
	}
	elseif($rowcc['Total']<= '59' and $rowcc['Total']>='55')
	{
	echo'C5';
	$e='5';
	//This code stores the grade in 5scs_grading
	$queryx2=mysql_query("UPDATE 5scs_grading SET grades= concat(grades,'$e') WHERE `5scs_grading`.`subject_id` = 'BIO'")or die(mysql_error());
	}
	elseif($rowcc['Total']<= '64' and $rowcc['Total']>='60')
	{
	echo'C4';
	$f='4';
	//This code stores the grade in 5scs_grading
	$queryx2=mysql_query("UPDATE 5scs_grading SET grades= concat(grades,'$f') WHERE `5scs_grading`.`subject_id` = 'BIO'")or die(mysql_error());
	}
	elseif($rowcc['Total']<= '74' and $rowcc['Total']>='65')
	{
	echo'C3';
	$g='3';
	//This code stores the grade in 5scs_grading
	$queryx2=mysql_query("UPDATE 5scs_grading SET grades= concat(grades,'$g') WHERE `5scs_grading`.`subject_id` = 'BIO'")or die(mysql_error());
	}
	elseif($rowcc['Total']<= '79' and $rowcc['Total']>='75')
	{
	echo'D2';
	$h='2';
	//This code stores the grade in 5scs_grading
	$queryx2=mysql_query("UPDATE 5scs_grading SET grades= concat(grades,'$h') WHERE `5scs_grading`.`subject_id` = 'BIO'")or die(mysql_error());
	}
	elseif($rowcc['Total']<= '100' and $rowcc['Total']>='80')
	{
	echo'D1';
	$i='1';
	//This code stores the grade in 5scs_grading
	$queryx2=mysql_query("UPDATE 5scs_grading SET grades= concat(grades,'$i') WHERE `5scs_grading`.`subject_id` = 'BIO'")or die(mysql_error());
	}
	?></td>
      </tr>
      <tr>
        <td rowspan="2">ECONOMICS</td>
        <td align="center">1</td>
        <td align="center"><?php echo $row6['paper_one_mot']; ?></td>
        <td align="center"><?php echo $row6['paper_one_end']; ?></td>
        <td align="center"><?php 
	 
	if($rowf['Total']<= '34' and $rowf['Total']>='1')
	{
	echo'F9';
	$a='9'.',';
	//This code stores the grade in 5scs_grading
	$queryx1=mysql_query("update 5scs_grading set grades='$a' where subject_id='ECON'")or die(mysql_error());
	
	}
	elseif($rowf['Total']<= '39' and $rowf['Total']>='35')
	{
	echo'P8';
	$b='8'.',';
	//This code stores the grade in 5scs_grading
   $queryx1=mysql_query("update 5scs_grading set grades='$b' where subject_id='ECON'")or die(mysql_error());
	}
	elseif($rowf['Total']<= '49' and $rowf['Total']>='40')
	{
	echo'P7';
	$c='7'.',';
	//This code stores the grade in 5scs_grading
	$queryx1=mysql_query("update 5scs_grading set grades='$c' where subject_id='ECON'")or die(mysql_error());
	}
	elseif($rowf['Total']<= '54' and $rowf['Total']>='50')
	{
	echo'C6';
	$d='6'.',';
	//This code stores the grade in 5scs_grading
	$queryx1=mysql_query("update 5scs_grading set grades='$d' where subject_id='ECON'")or die(mysql_error());
	}
	elseif($rowf['Total']<= '59' and $rowf['Total']>='55')
	{
	echo'C5'; 
	$e='5'.',';
	//This code stores the grade in 5scs_grading
	$queryx1=mysql_query("update 5scs_grading set grades='$e' where subject_id='ECON'")or die(mysql_error());
	}
	elseif($rowf['Total']<= '64' and $rowf['Total']>='60')
	{
	echo'C4';
	$f='4'.',';
	//This code stores the grade in 5scs_grading
	$queryx1=mysql_query("update 5scs_grading set grades='$f' where subject_id='ECON'")or die(mysql_error());
	}
	elseif($rowf['Total']<= '74' and $rowf['Total']>='65')
	{
	echo'C3';
	$g='3'.',';
	//This code stores the grade in 5scs_grading
	$queryx1=mysql_query("update 5scs_grading set grades='$g' where subject_id='ECON'")or die(mysql_error());
	}
	elseif($rowf['Total']<= '79' and $rowf['Total']>='75')
	{
	echo'D2';
	$h='2'.',';
	//This code stores the grade in 5scs_grading
	$queryx1=mysql_query("update 5scs_grading set grades='$h' where subject_id='ECON'")or die(mysql_error());
	}
	elseif($rowf['Total']<= '100' and $rowf['Total']>='80')
	{
	echo'D1';
	$i='1'.',';
	//This code stores the grade in 5scs_grading
	$queryx1=mysql_query("update 5scs_grading set grades='$i' where subject_id='ECON'")or die(mysql_error());
	}
	?></td>
     <td rowspan="2" align="center"><span style="color:#FF0000; font-size:36px; font-weight:bold;"><?php echo"$economics"?></span></td>
        <td align="center" rowspan="2" style="color:#1b5e94;"><?php 
	//This code selects the remark in the 5scs_grading table
    $query_remark=mysql_query("SELECT remark from 5scs_grading where subject_id ='ECON'")or die(mysql_error());
    $row_remark=mysql_fetch_array($query_remark);
	echo $row_remark['remark'];?></td>
        <td align="center" rowspan="2"><?php echo $rowZ['ECON'];?></td>
      </tr>
      <tr>
        <td align="center">2</td>
        <td align="center"><?php echo $row6['two_paper_mot']; ?></td>
        <td align="center"><?php echo $row6['two_paper_end']; ?></td>
        <td align="center"><?php 
	 if($rowl['Total']=="")
	{
	$queryx2=mysql_query("update 5scs_grading set grades=null,award=null,value=null,remark=null where subject_id='ECON'")or die(mysql_error());
	}
	elseif($rowl['Total']<= '34' and $rowl['Total']>='1')
	{
	echo'F9';
	$a='9';
	//This code stores the grade in 5scs_grading
	$queryx2=mysql_query("UPDATE 5scs_grading SET grades= concat(grades,'$a') WHERE `5scs_grading`.`subject_id` = 'ECON'")or die(mysql_error());
	}
	elseif($rowl['Total']<= '39' and $rowl['Total']>='35')
	{
	echo'P8';
	$b='8';
	//This code stores the grade in 5scs_grading
	$queryx2=mysql_query("UPDATE 5scs_grading SET grades= concat(grades,'$b') WHERE `5scs_grading`.`subject_id` = 'ECON'")or die(mysql_error());
	}
	elseif($rowl['Total']<= '49' and $rowl['Total']>='40')
	{
	echo'P7';
	$c='7';
	//This code stores the grade in 5scs_grading
	$queryx2=mysql_query("UPDATE 5scs_grading SET grades= concat(grades,'$c') WHERE `5scs_grading`.`subject_id` = 'ECON'")or die(mysql_error());
	}
	elseif($rowl['Total']<= '54' and $rowl['Total']>='50')
	{
	echo'C6';
	$d='6';
	//This code stores the grade in 5scs_grading
	$queryx2=mysql_query("UPDATE 5scs_grading SET grades= concat(grades,'$d') WHERE `5scs_grading`.`subject_id` = 'ECON'")or die(mysql_error());
	}
	elseif($rowl['Total']<= '59' and $rowl['Total']>='55')
	{
	echo'C5';
	$e='5';
	//This code stores the grade in 5scs_grading
	$queryx2=mysql_query("UPDATE 5scs_grading SET grades= concat(grades,'$e') WHERE `5scs_grading`.`subject_id` = 'ECON'")or die(mysql_error());
	}
	elseif($rowl['Total']<= '64' and $rowl['Total']>='60')
	{
	echo'C4';
	$f='4';
	//This code stores the grade in 5scs_grading
	$queryx2=mysql_query("UPDATE 5scs_grading SET grades= concat(grades,'$f') WHERE `5scs_grading`.`subject_id` = 'ECON'")or die(mysql_error());
	}
	elseif($rowl['Total']<= '74' and $rowl['Total']>='65')
	{
	echo'C3';
	$g='3';
	//This code stores the grade in 5scs_grading
	$queryx2=mysql_query("UPDATE 5scs_grading SET grades= concat(grades,'$g') WHERE `5scs_grading`.`subject_id` = 'ECON'")or die(mysql_error());
	}
	elseif($rowl['Total']<= '79' and $rowl['Total']>='75')
	{
	echo'D2';
	$h='2';
	//This code stores the grade in 5scs_grading
	$queryx2=mysql_query("UPDATE 5scs_grading SET grades= concat(grades,'$h') WHERE `5scs_grading`.`subject_id` = 'ECON'")or die(mysql_error());
	}
	elseif($rowl['Total']<= '100' and $rowl['Total']>='80')
	{
	echo'D1';
	$i='1';
	//This code stores the grade in 5scs_grading
	$queryx2=mysql_query("UPDATE 5scs_grading SET grades= concat(grades,'$i') WHERE `5scs_grading`.`subject_id` = 'ECON'")or die(mysql_error());
	}
	?></td>
      </tr>
      <tr>
    <td rowspan="3">ENTREP</td>
    <td align="center">1</td>
    <td align="center"><?php echo $row7['paper_one_mot']; ?></td>
    <td align="center"><?php echo $row7['paper_one_end']; ?></td>   
     <td align="center"><?php 
	 
	if($rowr['Total']<= '34' and $rowr['Total']>='1')
	{
	echo'F9';
	$a='9'.',';
	//This code stores the grade in 5scs_grading
	$queryx1=mysql_query("update 5scs_grading set grades='$a' where subject_id='ENT'")or die(mysql_error());
	
	}
	elseif($rowr['Total']<= '39' and $rowr['Total']>='35')
	{
	echo'P8';
	$b='8'.',';
	//This code stores the grade in 5scs_grading
   $queryx1=mysql_query("update 5scs_grading set grades='$b' where subject_id='ENT'")or die(mysql_error());
	}
	elseif($rowr['Total']<= '49' and $rowr['Total']>='40')
	{
	echo'P7';
	$c='7'.',';
	//This code stores the grade in 5scs_grading
	$queryx1=mysql_query("update 5scs_grading set grades='$c' where subject_id='ENT'")or die(mysql_error());
	}
	elseif($rowr['Total']<= '54' and $rowr['Total']>='50')
	{
	echo'C6';
	$d='6'.',';
	//This code stores the grade in 5scs_grading
	$queryx1=mysql_query("update 5scs_grading set grades='$d' where subject_id='ENT'")or die(mysql_error());
	}
	elseif($rowr['Total']<= '59' and $rowr['Total']>='55')
	{
	echo'C5'; 
	$e='5'.',';
	//This code stores the grade in 5scs_grading
	$queryx1=mysql_query("update 5scs_grading set grades='$e' where subject_id='ENT'")or die(mysql_error());
	}
	elseif($rowr['Total']<= '64' and $rowr['Total']>='60')
	{
	echo'C4';
	$f='4'.',';
	//This code stores the grade in 5scs_grading
	$queryx1=mysql_query("update 5scs_grading set grades='$f' where subject_id='ENT'")or die(mysql_error());
	}
	elseif($rowr['Total']<= '74' and $rowr['Total']>='65')
	{
	echo'C3';
	$g='3'.',';
	//This code stores the grade in 5scs_grading
	$queryx1=mysql_query("update 5scs_grading set grades='$g' where subject_id='ENT'")or die(mysql_error());
	}
	elseif($rowr['Total']<= '79' and $rowr['Total']>='75')
	{
	echo'D2';
	$h='2'.',';
	//This code stores the grade in 5scs_grading
	$queryx1=mysql_query("update 5scs_grading set grades='$h' where subject_id='ENT'")or die(mysql_error());
	}
	elseif($rowr['Total']<= '100' and $rowr['Total']>='80')
	{
	echo'D1';
	$i='1'.',';
	//This code stores the grade in 5scs_grading
	$queryx1=mysql_query("update 5scs_grading set grades='$i' where subject_id='ENT'")or die(mysql_error());
	}
	?></td>
    <td rowspan="3" align="center"><span style="color:#FF0000; font-size:36px; font-weight:bold;"><?php echo"$ent";?></span></td>
    <td align="center" rowspan="3" style="color:#1b5e94;"><?php 
	//This code selects the remark in the 5scs_grading table
    $query_remark=mysql_query("SELECT remark from 5scs_grading where subject_id ='ENT'")or die(mysql_error());
    $row_remark=mysql_fetch_array($query_remark);
	echo $row_remark['remark'];?></td>
    <td rowspan="3" align="center"><?php echo $rowZ['ENT'];?></td>
  </tr>
  <tr>
    <td align="center">2</td>
    <td align="center"><?php echo $row7['two_paper_mot']; ?></td>
    <td align="center"><?php echo $row7['two_paper_end']; ?></td>
    <td align="center"><?php 
	 if($rows['Total']=='')
	{
	$queryx2=mysql_query("update 5scs_grading set grades=null,award=null,value=null,remark=null where subject_id='ENT'")or die(mysql_error());
	}
	elseif($rows['Total']<= '34' and $rows['Total']>='1')
	{
	echo'F9';
	$a='9'.',';
	//This code stores the grade in 5scs_grading
	$queryx2=mysql_query("UPDATE 5scs_grading SET grades= concat(grades,'$a') WHERE `5scs_grading`.`subject_id` = 'ENT'")or die(mysql_error());
	}
	elseif($rows['Total']<= '39' and $rows['Total']>='35')
	{
	echo'P8';
	$b='8'.',';
	//This code stores the grade in 5scs_grading
	$queryx2=mysql_query("UPDATE 5scs_grading SET grades= concat(grades,'$b') WHERE `5scs_grading`.`subject_id` = 'ENT'")or die(mysql_error());
	}
	elseif($rows['Total']<= '49' and $rows['Total']>='40')
	{
	echo'P7';
	$c='7'.',';
	//This code stores the grade in 5scs_grading
	$queryx2=mysql_query("UPDATE 5scs_grading SET grades= concat(grades,'$c') WHERE `5scs_grading`.`subject_id` = 'ENT'")or die(mysql_error());
	}
	elseif($rows['Total']<= '54' and $rows['Total']>='50')
	{
	echo'C6';
	$d='6'.',';
	//This code stores the grade in 5scs_grading
	$queryx2=mysql_query("UPDATE 5scs_grading SET grades= concat(grades,'$d') WHERE `5scs_grading`.`subject_id` = 'ENT'")or die(mysql_error());
	}
	elseif($rows['Total']<= '59' and $rows['Total']>='55')
	{
	echo'C5';
	$e='5'.',';
	//This code stores the grade in 5scs_grading
	$queryx2=mysql_query("UPDATE 5scs_grading SET grades= concat(grades,'$e') WHERE `5scs_grading`.`subject_id` = 'ENT'")or die(mysql_error());
	}
	elseif($rows['Total']<= '64' and $rows['Total']>='60')
	{
	echo'C4';
	$f='4'.',';
	//This code stores the grade in 5scs_grading
	$queryx2=mysql_query("UPDATE 5scs_grading SET grades= concat(grades,'$f') WHERE `5scs_grading`.`subject_id` = 'ENT'")or die(mysql_error());
	}
	elseif($rows['Total']<= '74' and $rows['Total']>='65')
	{
	echo'C3';
	$g='3'.',';
	//This code stores the grade in 5scs_grading
	$queryx2=mysql_query("UPDATE 5scs_grading SET grades= concat(grades,'$g') WHERE `5scs_grading`.`subject_id` = 'ENT'")or die(mysql_error());
	}
	elseif($rows['Total']<= '79' and $rows['Total']>='75')
	{
	echo'D2';
	$h='2'.',';
	//This code stores the grade in 5scs_grading
	$queryx2=mysql_query("UPDATE 5scs_grading SET grades= concat(grades,'$h') WHERE `5scs_grading`.`subject_id` = 'ENT'")or die(mysql_error());
	}
	elseif($rows['Total']<= '100' and $rows['Total']>='80')
	{
	echo'D1';
	$i='1'.',';
	//This code stores the grade in 5scs_grading
	$queryx2=mysql_query("UPDATE 5scs_grading SET grades= concat(grades,'$i') WHERE `5scs_grading`.`subject_id` = 'ENT'")or die(mysql_error());
	}
	?></td>
  </tr>
   <tr>
    <td align="center">3</td>
    <td align="center"><?php echo $row7['paper_three_mot']; ?></td>
    <td align="center"><?php echo $row7['paper_three_end']; ?></td>
    <td align="center"><?php 
	 if($rowt['Total']=='')
	{
	$queryx2=mysql_query("update 5scs_grading set grades=null,award=null,value=null,remark=null where subject_id='ENT'")or die(mysql_error());
	}
	elseif($rowt['Total']<= '34' and $rowt['Total']>='1')
	{
	echo'F9';
	$a='9';
	//This code stores the grade in 5scs_grading
	$queryx2=mysql_query("UPDATE 5scs_grading SET grades= concat(grades,'$a') WHERE `5scs_grading`.`subject_id` = 'ENT'")or die(mysql_error());
	}
	elseif($rowt['Total']<= '39' and $rowt['Total']>='35')
	{
	echo'P8';
	$b='8';
	//This code stores the grade in 5scs_grading
	$queryx2=mysql_query("UPDATE 5scs_grading SET grades= concat(grades,'$b') WHERE `5scs_grading`.`subject_id` = 'ENT'")or die(mysql_error());
	}
	elseif($rowt['Total']<= '49' and $rowt['Total']>='40')
	{
	echo'P7';
	$c='7';
	//This code stores the grade in 5scs_grading
	$queryx2=mysql_query("UPDATE 5scs_grading SET grades= concat(grades,'$c') WHERE `5scs_grading`.`subject_id` = 'ENT'")or die(mysql_error());
	}
	elseif($rowt['Total']<= '54' and $rowt['Total']>='50')
	{
	echo'C6';
	$d='6';
	//This code stores the grade in 5scs_grading
	$queryx2=mysql_query("UPDATE 5scs_grading SET grades= concat(grades,'$d') WHERE `5scs_grading`.`subject_id` = 'ENT'")or die(mysql_error());
	}
	elseif($rowt['Total']<= '59' and $rowt['Total']>='55')
	{
	echo'C5';
	$e='5';
	//This code stores the grade in 5scs_grading
	$queryx2=mysql_query("UPDATE 5scs_grading SET grades= concat(grades,'$e') WHERE `5scs_grading`.`subject_id` = 'ENT'")or die(mysql_error());
	}
	elseif($rowt['Total']<= '64' and $rowt['Total']>='60')
	{
	echo'C4';
	$f='4';
	//This code stores the grade in 5scs_grading
	$queryx2=mysql_query("UPDATE 5scs_grading SET grades= concat(grades,'$f') WHERE `5scs_grading`.`subject_id` = 'ENT'")or die(mysql_error());
	}
	elseif($rowt['Total']<= '74' and $rowt['Total']>='65')
	{
	echo'C3';
	$g='3';
	//This code stores the grade in 5scs_grading
	$queryx2=mysql_query("UPDATE 5scs_grading SET grades= concat(grades,'$g') WHERE `5scs_grading`.`subject_id` = 'ENT'")or die(mysql_error());
	}
	elseif($rowt['Total']<= '79' and $rowt['Total']>='75')
	{
	echo'D2';
	$h='2';
	//This code stores the grade in 5scs_grading
	$queryx2=mysql_query("UPDATE 5scs_grading SET grades= concat(grades,'$h') WHERE `5scs_grading`.`subject_id` = 'ENT'")or die(mysql_error());
	}
	elseif($rowt['Total']<= '100' and $rowt['Total']>='80')
	{
	echo'D1';
	$i='1';
	//This code stores the grade in 5scs_grading
	$queryx2=mysql_query("UPDATE 5scs_grading SET grades= concat(grades,'$i') WHERE `5scs_grading`.`subject_id` = 'ENT'")or die(mysql_error());
	}
	?></td>
  </tr>
      <tr>
        <td rowspan="3">GEOGRAPHY</td>
        <td align="center">1</td>
        <td align="center"><?php echo $row8['paper_one_mot']; ?></td>
        <td align="center"><?php echo $row8['paper_one_end']; ?></td>
        <td align="center"><?php 
	 
	if($rown['Total']<= '34' and $rown['Total']>='1')
	{
	echo'F9';
	$a='9'.',';
	//This code stores the grade in 5scs_grading
	$queryx1=mysql_query("update 5scs_grading set grades='$a' where subject_id='GEO'")or die(mysql_error());
	
	}
	elseif($rown['Total']<= '39' and $rown['Total']>='35')
	{
	echo'P8';
	$b='8'.',';
	//This code stores the grade in 5scs_grading
   $queryx1=mysql_query("update 5scs_grading set grades='$b' where subject_id='GEO'")or die(mysql_error());
	}
	elseif($rown['Total']<= '49' and $rown['Total']>='40')
	{
	echo'P7';
	$c='7'.',';
	//This code stores the grade in 5scs_grading
	$queryx1=mysql_query("update 5scs_grading set grades='$c' where subject_id='GEO'")or die(mysql_error());
	}
	elseif($rown['Total']<= '54' and $rown['Total']>='50')
	{
	echo'C6';
	$d='6'.',';
	//This code stores the grade in 5scs_grading
	$queryx1=mysql_query("update 5scs_grading set grades='$d' where subject_id='GEO'")or die(mysql_error());
	}
	elseif($rown['Total']<= '59' and $rown['Total']>='55')
	{
	echo'C5'; 
	$e='5'.',';
	//This code stores the grade in 5scs_grading
	$queryx1=mysql_query("update 5scs_grading set grades='$e' where subject_id='GEO'")or die(mysql_error());
	}
	elseif($rown['Total']<= '64' and $rown['Total']>='60')
	{
	echo'C4';
	$f='4'.',';
	//This code stores the grade in 5scs_grading
	$queryx1=mysql_query("update 5scs_grading set grades='$f' where subject_id='GEO'")or die(mysql_error());
	}
	elseif($rown['Total']<= '74' and $rown['Total']>='65')
	{
	echo'C3';
	$g='3'.',';
	//This code stores the grade in 5scs_grading
	$queryx1=mysql_query("update 5scs_grading set grades='$g' where subject_id='GEO'")or die(mysql_error());
	}
	elseif($rown['Total']<= '79' and $rown['Total']>='75')
	{
	echo'D2';
	$h='2'.',';
	//This code stores the grade in 5scs_grading
	$queryx1=mysql_query("update 5scs_grading set grades='$h' where subject_id='GEO'")or die(mysql_error());
	}
	elseif($rown['Total']<= '100' and $rown['Total']>='80')
	{
	echo'D1';
	$i='1'.',';
	//This code stores the grade in 5scs_grading
	$queryx1=mysql_query("update 5scs_grading set grades='$i' where subject_id='GEO'")or die(mysql_error());
	}
	?></td>
     <td rowspan="3" align="center"><span style="color:#FF0000; font-size:36px; font-weight:bold;"><?php echo"$geography";?></span></td>
        <td align="center" rowspan="3" style="color:#1b5e94;"><?php 
	//This code selects the remark in the 5scs_grading table
    $query_remark=mysql_query("SELECT remark from 5scs_grading where subject_id ='GEO'")or die(mysql_error());
    $row_remark=mysql_fetch_array($query_remark);
	echo $row_remark['remark'];?></td>
        <td rowspan="3" align="center"><?php echo $rowZ['GEO'];?></td>
      </tr>
      <tr>
        <td align="center">2</td>
        <td align="center"><?php echo $row8['two_paper_mot']; ?></td>
        <td align="center"><?php echo $row8['two_paper_end']; ?></td>
        <td align="center"><?php 
	 if($rowo['Total']=='')
	{
	$queryx2=mysql_query("update 5scs_grading set grades=null,award=null,value=null,remark=null where subject_id='GEO'")or die(mysql_error());
	}
	elseif($rowo['Total']<= '34' and $rowo['Total']>='1')
	{
	echo'F9';
	$a='9';
	//This code stores the grade in 5scs_grading
	$queryx2=mysql_query("UPDATE 5scs_grading SET grades= concat(grades,'$a') WHERE `5scs_grading`.`subject_id` = 'GEO'")or die(mysql_error());
	}
	elseif($rowo['Total']<= '39' and $rowo['Total']>='35')
	{
	echo'P8';
	$b='8';
	//This code stores the grade in 5scs_grading
	$queryx2=mysql_query("UPDATE 5scs_grading SET grades= concat(grades,'$b') WHERE `5scs_grading`.`subject_id` = 'GEO'")or die(mysql_error());
	}
	elseif($rowo['Total']<= '49' and $rowo['Total']>='40')
	{
	echo'P7';
	$c='7';
	//This code stores the grade in 5scs_grading
	$queryx2=mysql_query("UPDATE 5scs_grading SET grades= concat(grades,'$c') WHERE `5scs_grading`.`subject_id` = 'GEO'")or die(mysql_error());
	}
	elseif($rowo['Total']<= '54' and $rowo['Total']>='50')
	{
	echo'C6';
	$d='6';
	//This code stores the grade in 5scs_grading
	$queryx2=mysql_query("UPDATE 5scs_grading SET grades= concat(grades,'$d') WHERE `5scs_grading`.`subject_id` = 'GEO'")or die(mysql_error());
	}
	elseif($rowo['Total']<= '59' and $rowo['Total']>='55')
	{
	echo'C5';
	$e='5';
	//This code stores the grade in 5scs_grading
	$queryx2=mysql_query("UPDATE 5scs_grading SET grades= concat(grades,'$e') WHERE `5scs_grading`.`subject_id` = 'GEO'")or die(mysql_error());
	}
	elseif($rowo['Total']<= '64' and $rowo['Total']>='60')
	{
	echo'C4';
	$f='4';
	//This code stores the grade in 5scs_grading
	$queryx2=mysql_query("UPDATE 5scs_grading SET grades= concat(grades,'$f') WHERE `5scs_grading`.`subject_id` = 'GEO'")or die(mysql_error());
	}
	elseif($rowo['Total']<= '74' and $rowo['Total']>='65')
	{
	echo'C3';
	$g='3';
	//This code stores the grade in 5scs_grading
	$queryx2=mysql_query("UPDATE 5scs_grading SET grades= concat(grades,'$g') WHERE `5scs_grading`.`subject_id` = 'GEO'")or die(mysql_error());
	}
	elseif($rowo['Total']<= '79' and $rowo['Total']>='75')
	{
	echo'D2';
	$h='2';
	//This code stores the grade in 5scs_grading
	$queryx2=mysql_query("UPDATE 5scs_grading SET grades= concat(grades,'$h') WHERE `5scs_grading`.`subject_id` = 'GEO'")or die(mysql_error());
	}
	elseif($rowo['Total']<= '100' and $rowo['Total']>='80')
	{
	echo'D1';
	$i='1';
	//This code stores the grade in 5scs_grading
	$queryx2=mysql_query("UPDATE 5scs_grading SET grades= concat(grades,'$i') WHERE `5scs_grading`.`subject_id` = 'GEO'")or die(mysql_error());
	}
	?></td>
      </tr>
      <tr>
        <td align="center">3</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td align="center">&nbsp;</td>
      </tr>
      <tr>
    <td rowspan="4">FINE ART</td>
    <td align="center">1</td>
    <td align="center"><?php echo $row12['paper_one_mot']; ?></td>
    <td align="center"><?php echo $row12['paper_one_end']; ?></td>
    <td align="center"><?php 
	 
	if($rowu['Total']<= '34' and $rowu['Total']>='1')
	{
	echo'F9';
	$a='9'.',';
	//This code stores the grade in 5scs_grading
	$queryx1=mysql_query("update 5scs_grading set grades='$a' where subject_id='ART'")or die(mysql_error());
	
	}
	elseif($rowu['Total']<= '39' and $rowu['Total']>='35')
	{
	echo'P8';
	$b='8'.',';
	//This code stores the grade in 5scs_grading
   $queryx1=mysql_query("update 5scs_grading set grades='$b' where subject_id='ART'")or die(mysql_error());
	}
	elseif($rowu['Total']<= '49' and $rowu['Total']>='40')
	{
	echo'P7';
	$c='7'.',';
	//This code stores the grade in 5scs_grading
	$queryx1=mysql_query("update 5scs_grading set grades='$c' where subject_id='ART'")or die(mysql_error());
	}
	elseif($rowu['Total']<= '54' and $rowu['Total']>='50')
	{
	echo'C6';
	$d='6'.',';
	//This code stores the grade in 5scs_grading
	$queryx1=mysql_query("update 5scs_grading set grades='$d' where subject_id='ART'")or die(mysql_error());
	}
	elseif($rowu['Total']<= '59' and $rowu['Total']>='55')
	{
	echo'C5'; 
	$e='5'.',';
	//This code stores the grade in 5scs_grading
	$queryx1=mysql_query("update 5scs_grading set grades='$e' where subject_id='ART'")or die(mysql_error());
	}
	elseif($rowu['Total']<= '64' and $rowu['Total']>='60')
	{
	echo'C4';
	$f='4'.',';
	//This code stores the grade in 5scs_grading
	$queryx1=mysql_query("update 5scs_grading set grades='$f' where subject_id='ART'")or die(mysql_error());
	}
	elseif($rowu['Total']<= '74' and $rowu['Total']>='65')
	{
	echo'C3';
	$g='3'.',';
	//This code stores the grade in 5scs_grading
	$queryx1=mysql_query("update 5scs_grading set grades='$g' where subject_id='ART'")or die(mysql_error());
	}
	elseif($rowu['Total']<= '79' and $rowu['Total']>='75')
	{
	echo'D2';
	$h='2'.',';
	//This code stores the grade in 5scs_grading
	$queryx1=mysql_query("update 5scs_grading set grades='$h' where subject_id='ART'")or die(mysql_error());
	}
	elseif($rowu['Total']<= '100' and $rowu['Total']>='80')
	{
	echo'D1';
	$i='1'.',';
	//This code stores the grade in 5scs_grading
	$queryx1=mysql_query("update 5scs_grading set grades='$i' where subject_id='ART'")or die(mysql_error());
	}
	?></td>
   <td rowspan="4" align="center"><span style="color:#FF0000; font-size:36px; font-weight:bold;"><?php echo"$art";?></span></td>
   <td align="center" rowspan="4" style="color:#1b5e94;"><?php echo"$art_comment"?>&nbsp;</td>
      <td rowspan="4" align="center"><?php echo $rowZ['ART'];?></td>
  </tr>
     <tr>
    <td align="center">2</td>
    <td align="center"><?php echo $row12['two_paper_mot']; ?></td>
    <td align="center"><?php echo $row12['two_paper_end']; ?></td>
    <td align="center"><?php 
	 if($rowv['Total']=='')
	{
	$queryx2=mysql_query("update 5scs_grading set grades=null,award=null,value=null,remark=null where subject_id='ART'")or die(mysql_error());
	}
	elseif($rowv['Total']<= '34' and $rowv['Total']>='1')
	{
	echo'F9';
	$a='9'.',';
	//This code stores the grade in 5scs_grading
	$queryx2=mysql_query("UPDATE 5scs_grading SET grades= concat(grades,'$a') WHERE `5scs_grading`.`subject_id` = 'ART'")or die(mysql_error());
	}
	elseif($rowv['Total']<= '39' and $rowv['Total']>='35')
	{
	echo'P8';
	$b='8'.',';
	//This code stores the grade in 5scs_grading
	$queryx2=mysql_query("UPDATE 5scs_grading SET grades= concat(grades,'$b') WHERE `5scs_grading`.`subject_id` = 'ART'")or die(mysql_error());
	}
	elseif($rowv['Total']<= '49' and $rowv['Total']>='40')
	{
	echo'P7';
	$c='7'.',';
	//This code stores the grade in 5scs_grading
	$queryx2=mysql_query("UPDATE 5scs_grading SET grades= concat(grades,'$c') WHERE `5scs_grading`.`subject_id` = 'ART'")or die(mysql_error());
	}
	elseif($rowv['Total']<= '54' and $rowv['Total']>='50')
	{
	echo'C6';
	$d='6'.',';
	//This code stores the grade in 5scs_grading
	$queryx2=mysql_query("UPDATE 5scs_grading SET grades= concat(grades,'$d') WHERE `5scs_grading`.`subject_id` = 'ART'")or die(mysql_error());
	}
	elseif($rowv['Total']<= '59' and $rowv['Total']>='55')
	{
	echo'C5';
	$e='5'.',';
	//This code stores the grade in 5scs_grading
	$queryx2=mysql_query("UPDATE 5scs_grading SET grades= concat(grades,'$e') WHERE `5scs_grading`.`subject_id` = 'ART'")or die(mysql_error());
	}
	elseif($rowv['Total']<= '64' and $rowv['Total']>='60')
	{
	echo'C4';
	$f='4'.',';
	//This code stores the grade in 5scs_grading
	$queryx2=mysql_query("UPDATE 5scs_grading SET grades= concat(grades,'$f') WHERE `5scs_grading`.`subject_id` = 'ART'")or die(mysql_error());
	}
	elseif($rowv['Total']<= '74' and $rowv['Total']>='65')
	{
	echo'C3';
	$g='3'.',';
	//This code stores the grade in 5scs_grading
	$queryx2=mysql_query("UPDATE 5scs_grading SET grades= concat(grades,'$g') WHERE `5scs_grading`.`subject_id` = 'ART'")or die(mysql_error());
	}
	elseif($rowv['Total']<= '79' and $rowv['Total']>='75')
	{
	echo'D2';
	$h='2'.',';
	//This code stores the grade in 5scs_grading
	$queryx2=mysql_query("UPDATE 5scs_grading SET grades= concat(grades,'$h') WHERE `5scs_grading`.`subject_id` = 'ART'")or die(mysql_error());
	}
	elseif($rowv['Total']<= '100' and $rowv['Total']>='80')
	{
	echo'D1';
	$i='1'.',';
	//This code stores the grade in 5scs_grading
	$queryx2=mysql_query("UPDATE 5scs_grading SET grades= concat(grades,'$i') WHERE `5scs_grading`.`subject_id` = 'ART'")or die(mysql_error());
	}
	?></td>
   </tr>
  <tr>
    <td align="center">3</td>
    <td align="center"><?php echo $row12['paper_three_mot']; ?></td>
    <td align="center"><?php echo $row12['paper_three_end']; ?></td>
    <td align="center"><?php 
	 if($roww['Total']=='')
	{
	$queryx2=mysql_query("update 5scs_grading set grades=null,award=null,value=null,remark=null where subject_id='ART'")or die(mysql_error());
	}
	elseif($roww['Total']<= '34' and $roww['Total']>='1')
	{
	echo'F9';
	$a='9'.',';
	//This code stores the grade in 5scs_grading
	$queryx2=mysql_query("UPDATE 5scs_grading SET grades= concat(grades,'$a') WHERE `5scs_grading`.`subject_id` = 'ART'")or die(mysql_error());
	}
	elseif($roww['Total']<= '39' and $roww['Total']>='35')
	{
	echo'P8';
	$b='8'.',';
	//This code stores the grade in 5scs_grading
	$queryx2=mysql_query("UPDATE 5scs_grading SET grades= concat(grades,'$b') WHERE `5scs_grading`.`subject_id` = 'ART'")or die(mysql_error());
	}
	elseif($roww['Total']<= '49' and $roww['Total']>='40')
	{
	echo'P7';
	$c='7'.',';
	//This code stores the grade in 5scs_grading
	$queryx2=mysql_query("UPDATE 5scs_grading SET grades= concat(grades,'$c') WHERE `5scs_grading`.`subject_id` = 'ART'")or die(mysql_error());
	}
	elseif($roww['Total']<= '54' and $roww['Total']>='50')
	{
	echo'C6';
	$d='6'.',';
	//This code stores the grade in 5scs_grading
	$queryx2=mysql_query("UPDATE 5scs_grading SET grades= concat(grades,'$d') WHERE `5scs_grading`.`subject_id` = 'ART'")or die(mysql_error());
	}
	elseif($roww['Total']<= '59' and $roww['Total']>='55')
	{
	echo'C5';
	$e='5'.',';
	//This code stores the grade in 5scs_grading
	$queryx2=mysql_query("UPDATE 5scs_grading SET grades= concat(grades,'$e') WHERE `5scs_grading`.`subject_id` = 'ART'")or die(mysql_error());
	}
	elseif($roww['Total']<= '64' and $roww['Total']>='60')
	{
	echo'C4';
	$f='4'.',';
	//This code stores the grade in 5scs_grading
	$queryx2=mysql_query("UPDATE 5scs_grading SET grades= concat(grades,'$f') WHERE `5scs_grading`.`subject_id` = 'ART'")or die(mysql_error());
	}
	elseif($roww['Total']<= '74' and $roww['Total']>='65')
	{
	echo'C3';
	$g='3'.',';
	//This code stores the grade in 5scs_grading
	$queryx2=mysql_query("UPDATE 5scs_grading SET grades= concat(grades,'$g') WHERE `5scs_grading`.`subject_id` = 'ART'")or die(mysql_error());
	}
	elseif($roww['Total']<= '79' and $roww['Total']>='75')
	{
	echo'D2';
	$h='2'.',';
	//This code stores the grade in 5scs_grading
	$queryx2=mysql_query("UPDATE 5scs_grading SET grades= concat(grades,'$h') WHERE `5scs_grading`.`subject_id` = 'ART'")or die(mysql_error());
	}
	elseif($roww['Total']<= '100' and $roww['Total']>='80')
	{
	echo'D1';
	$i='1'.',';
	//This code stores the grade in 5scs_grading
	$queryx2=mysql_query("UPDATE 5scs_grading SET grades= concat(grades,'$i') WHERE `5scs_grading`.`subject_id` = 'ART'")or die(mysql_error());
	}
	?></td>
  </tr>
  <tr>
    <td align="center">4</td>
    <td align="center"><?php echo $row12['four_paper_mot']; ?></td>
    <td align="center"><?php echo $row12['four_paper_end']; ?></td>
    <td align="center"><?php 
	 if($rowx['Total']=='')
	{
	$queryx2=mysql_query("update 5scs_grading set grades=null,award=null,value=null,remark=null where subject_id='ART'")or die(mysql_error());
	}
	elseif($rowx['Total']<= '34' and $rowx['Total']>='1')
	{
	echo'F9';
	$a='9';
	//This code stores the grade in 5scs_grading
	$queryx2=mysql_query("UPDATE 5scs_grading SET grades= concat(grades,'$a') WHERE `5scs_grading`.`subject_id` = 'ART'")or die(mysql_error());
	}
	elseif($rowx['Total']<= '39' and $rowx['Total']>='35')
	{
	echo'P8';
	$b='8';
	//This code stores the grade in 5scs_grading
	$queryx2=mysql_query("UPDATE 5scs_grading SET grades= concat(grades,'$b') WHERE `5scs_grading`.`subject_id` = 'ART'")or die(mysql_error());
	}
	elseif($rowx['Total']<= '49' and $rowx['Total']>='40')
	{
	echo'P7';
	$c='7';
	//This code stores the grade in 5scs_grading
	$queryx2=mysql_query("UPDATE 5scs_grading SET grades= concat(grades,'$c') WHERE `5scs_grading`.`subject_id` = 'ART'")or die(mysql_error());
	}
	elseif($rowx['Total']<= '54' and $rowx['Total']>='50')
	{
	echo'C6';
	$d='6';
	//This code stores the grade in 5scs_grading
	$queryx2=mysql_query("UPDATE 5scs_grading SET grades= concat(grades,'$d') WHERE `5scs_grading`.`subject_id` = 'ART'")or die(mysql_error());
	}
	elseif($rowx['Total']<= '59' and $rowx['Total']>='55')
	{
	echo'C5';
	$e='5';
	//This code stores the grade in 5scs_grading
	$queryx2=mysql_query("UPDATE 5scs_grading SET grades= concat(grades,'$e') WHERE `5scs_grading`.`subject_id` = 'ART'")or die(mysql_error());
	}
	elseif($rowx['Total']<= '64' and $rowx['Total']>='60')
	{
	echo'C4';
	$f='4';
	//This code stores the grade in 5scs_grading
	$queryx2=mysql_query("UPDATE 5scs_grading SET grades= concat(grades,'$f') WHERE `5scs_grading`.`subject_id` = 'ART'")or die(mysql_error());
	}
	elseif($rowx['Total']<= '74' and $rowx['Total']>='65')
	{
	echo'C3';
	$g='3';
	//This code stores the grade in 5scs_grading
	$queryx2=mysql_query("UPDATE 5scs_grading SET grades= concat(grades,'$g') WHERE `5scs_grading`.`subject_id` = 'ART'")or die(mysql_error());
	}
	elseif($rowx['Total']<= '79' and $rowx['Total']>='75')
	{
	echo'D2';
	$h='2';
	//This code stores the grade in 5scs_grading
	$queryx2=mysql_query("UPDATE 5scs_grading SET grades= concat(grades,'$h') WHERE `5scs_grading`.`subject_id` = 'ART'")or die(mysql_error());
	}
	elseif($rowx['Total']<= '100' and $rowx['Total']>='80')
	{
	echo'D1';
	$i='1';
	//This code stores the grade in 5scs_grading
	$queryx2=mysql_query("UPDATE 5scs_grading SET grades= concat(grades,'$i') WHERE `5scs_grading`.`subject_id` = 'ART'")or die(mysql_error());
	}
	?></td>
  </tr>
      <tr>
        <td rowspan="2">COMPUTER</td>
        <td align="center">1</td>
        <td align="center">&nbsp;</td>
        <td align="center">&nbsp;</td>
        <td align="center">&nbsp;</td>
         <td rowspan="2" align="center"><span style="color:#FF0000; font-size:32px; font-weight:bold;"><?php echo"$computer"?></span></td>
        <td align="center" rowspan="2" style="color:#1b5e94;"><?php 
	//This code selects the remark in the 5scs_grading table
    $query_remark=mysql_query("SELECT remark from 5scs_grading where subject_id ='ICT'")or die(mysql_error());
    $row_remark=mysql_fetch_array($query_remark);
	echo $row_remark['remark'];?></td>
        <td align="center" rowspan="2"><?php echo $rowZ['ICT'];?></td>
      </tr>
      <tr>
        <td align="center">2</td>
        <td align="center"><?php echo $row10['two_paper_mot']; ?></td>
        <td align="center"><?php echo $row10['two_paper_end']; ?></td>
        <td align="center"><?php 
	 if($rowm['Total']=='')
	{
	$queryx2=mysql_query("update 5scs_grading set grades=null,award=null,value=null,remark=null where subject_id='ICT'")or die(mysql_error());
	}
	elseif($rowm['Total']<= '34' and $rowm['Total']>='1')
	{
	echo'F9';
	$a='9';
	//This code stores the grade in 5scs_grading
	$queryx2=mysql_query("UPDATE 5scs_grading SET grades= concat(grades,'$a') WHERE `5scs_grading`.`subject_id` = 'ICT'")or die(mysql_error());
	}
	elseif($rowm['Total']<= '39' and $rowm['Total']>='35')
	{
	echo'P8';
	$b='8';
	//This code stores the grade in 5scs_grading
	$queryx2=mysql_query("UPDATE 5scs_grading SET grades= concat(grades,'$b') WHERE `5scs_grading`.`subject_id` = 'ICT'")or die(mysql_error());
	}
	elseif($rowm['Total']<= '49' and $rowm['Total']>='40')
	{
	echo'P7';
	$c='7';
	//This code stores the grade in 5scs_grading
	$queryx2=mysql_query("UPDATE 5scs_grading SET grades= concat(grades,'$c') WHERE `5scs_grading`.`subject_id` = 'ICT'")or die(mysql_error());
	}
	elseif($rowm['Total']<= '54' and $rowm['Total']>='50')
	{
	echo'C6';
	$d='6';
	//This code stores the grade in 5scs_grading
	$queryx2=mysql_query("UPDATE 5scs_grading SET grades= concat(grades,'$d') WHERE `5scs_grading`.`subject_id` = 'ICT'")or die(mysql_error());
	}
	elseif($rowm['Total']<= '59' and $rowm['Total']>='55')
	{
	echo'C5';
	$e='5';
	//This code stores the grade in 5scs_grading
	$queryx2=mysql_query("UPDATE 5scs_grading SET grades= concat(grades,'$e') WHERE `5scs_grading`.`subject_id` = 'ICT'")or die(mysql_error());
	}
	elseif($rowm['Total']<= '64' and $rowm['Total']>='60')
	{
	echo'C4';
	$f='4';
	//This code stores the grade in 5scs_grading
	$queryx2=mysql_query("UPDATE 5scs_grading SET grades= concat(grades,'$f') WHERE `5scs_grading`.`subject_id` = 'ICT'")or die(mysql_error());
	}
	elseif($rowm['Total']<= '74' and $rowm['Total']>='65')
	{
	echo'C3';
	$g='3';
	//This code stores the grade in 5scs_grading
	$queryx2=mysql_query("UPDATE 5scs_grading SET grades= concat(grades,'$g') WHERE `5scs_grading`.`subject_id` = 'ICT'")or die(mysql_error());
	}
	elseif($rowm['Total']<= '79' and $rowm['Total']>='75')
	{
	echo'D2';
	$h='2';
	//This code stores the grade in 5scs_grading
	$queryx2=mysql_query("UPDATE 5scs_grading SET grades= concat(grades,'$h') WHERE `5scs_grading`.`subject_id` = 'ICT'")or die(mysql_error());
	}
	elseif($rowm['Total']<= '100' and $rowm['Total']>='80')
	{
	echo'D1';
	$i='1';
	//This code stores the grade in 5scs_grading
	$queryx2=mysql_query("UPDATE 5scs_grading SET grades= concat(grades,'$i') WHERE `5scs_grading`.`subject_id` = 'ICT'")or die(mysql_error());
	}
	?></td>
      </tr>
      <tr>
        <td>SUB MATH</td>
        <td align="center">1</td>
        <td align="center"><?php echo $row11['paper_one_mot']; ?></td>
        <td align="center"><?php echo $row11['paper_one_end']; ?></td>
        <td align="center"><?php 
	if($row11['paper_one_mot']==''){
	$query=mysql_query("update 5scs_grading set grades=null,award=null,value=null,remark=null where subject_id='SUB_MATH'")or die(mysql_error());
	 $query_change=mysql_query("update s5 set SUB_MATH=null where id='$ID'")or die(mysql_error());
	}
	 
	elseif($rowp['Total']<= '34' and $rowp['Total']>='1')
	{
	echo'F9';
	$a='9'.',';
	//This code stores the grade in 5scs_grading
	$queryx1=mysql_query("update 5scs_grading set grades='$a' where subject_id='SUB_MATH'")or die(mysql_error());
	
	}
	elseif($rowp['Total']<= '39' and $rowp['Total']>='35')
	{
	echo'P8';
	$b='8'.',';
	//This code stores the grade in 5scs_grading
   $queryx1=mysql_query("update 5scs_grading set grades='$b' where subject_id='SUB_MATH'")or die(mysql_error());
	}
	elseif($rowp['Total']<= '49' and $rowp['Total']>='40')
	{
	echo'P7';
	$c='7'.',';
	//This code stores the grade in 5scs_grading
	$queryx1=mysql_query("update 5scs_grading set grades='$c' where subject_id='SUB_MATH'")or die(mysql_error());
	}
	elseif($rowp['Total']<= '54' and $rowp['Total']>='50')
	{
	echo'C6';
	$d='6'.',';
	//This code stores the grade in 5scs_grading
	$queryx1=mysql_query("update 5scs_grading set grades='$d' where subject_id='SUB_MATH'")or die(mysql_error());
	}
	elseif($rowp['Total']<= '59' and $rowp['Total']>='55')
	{
	echo'C5'; 
	$e='5'.',';
	//This code stores the grade in 5scs_grading
	$queryx1=mysql_query("update 5scs_grading set grades='$e' where subject_id='SUB_MATH'")or die(mysql_error());
	}
	elseif($rowp['Total']<= '64' and $rowp['Total']>='60')
	{
	echo'C4';
	$f='4'.',';
	//This code stores the grade in 5scs_grading
	$queryx1=mysql_query("update 5scs_grading set grades='$f' where subject_id='SUB_MATH'")or die(mysql_error());
	}
	elseif($rowp['Total']<= '74' and $rowp['Total']>='65')
	{
	echo'C3';
	$g='3'.',';
	//This code stores the grade in 5scs_grading
	$queryx1=mysql_query("update 5scs_grading set grades='$g' where subject_id='SUB_MATH'")or die(mysql_error());
	}
	elseif($rowp['Total']<= '79' and $rowp['Total']>='75')
	{
	echo'D2';
	$h='2'.',';
	//This code stores the grade in 5scs_grading
	$queryx1=mysql_query("update 5scs_grading set grades='$h' where subject_id='SUB_MATH'")or die(mysql_error());
	}
	elseif($rowp['Total']<= '100' and $rowp['Total']>='80')
	{
	echo'D1';
	$i='1'.',';
	//This code stores the grade in 5scs_grading
	$queryx1=mysql_query("update 5scs_grading set grades='$i' where subject_id='SUB_MATH'")or die(mysql_error());
	}
	?></td>
     <td align="center"><span style="color:#FF0000; font-size:32px; font-weight:bold;"><?php echo"$sub_math"?></span></td>
        <td align="center" style="color:#1b5e94;"><?php 
	//This code selects the remark in the 5scs_grading table
    $query_remark=mysql_query("SELECT remark from 5scs_grading where subject_id ='SUB_MATH'")or die(mysql_error());
    $row_remark=mysql_fetch_array($query_remark);
	echo $row_remark['remark'];?></td>
        <td align="center"><?php echo $rowZ['SUB_MTC'];?></td>
      </tr>
      <tr>
        <td>TOTAL</td>
        <td>&nbsp;</td>
        <td align="center">&nbsp;</td>
        <td align="center">&nbsp;</td>
        <td>&nbsp;</td>
         <td align="center"><span style="color:#FF0000; font-weight:bold; font-size:25px;">
           <?php
       echo"$total";	
	       ?>
         </span></td>
        <td align="center">&nbsp;</td>
        <td align="center">&nbsp;</td>
      </tr>
    </table>
  </div>
<div style="padding-top:1px;">
<table width="900" border="0" height="60px" style="font-size:22px; font-family:Arial Narrow; font-size:25px; font-weight:bold;">
  <tr height="60px">
  <td></td>
  <td>TOTAL POINTS&nbsp;&nbsp;<font color="#1b5e94"><b>
  <?php echo"$points";?></b></font></td>
    <td align="left">PRINCIPLE PASSES:&nbsp;&nbsp;<?php echo "$PP";?></td>
   <td align="center">SUBSIDIARIES:&nbsp;&nbsp;<?php echo "$sub";?></td>
  <td></td>
</table>
<table width="1030px"  border="1" bordercolor="#000" height="80px" style="font-family:Arial Narrow; border-collapse:collapse; font-weight:bold; font-size:24px;">
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
     <td align="center">Grade</td>
     <td align="center">A</td>
     <td align="center">B</td>
     <td align="center">C</td>
     <td align="center">D</td>
     <td align="center">E</td>
     <td align="center">O</td>
     <td align="center">F</td>
  </tr>
  <tr height="60px" style="color:#1b5e94;">
    <td align="center">80-100</td>
    <td align="center">75-79</td>
    <td align="center">65-74</td>
    <td align="center">60-64</td>
    <td align="center">55-59</td>
    <td align="center">50-54</td>
    <td align="center">40-49</td>
    <td align="center">35-39</td>
    <td align="center">0-34</td>
    <td align="center">Points</td>
    <td width="30px" align="center">6</td>
    <td width="30px" align="center">5</td>
    <td width="30px" align="center">4</td>
    <td width="30px" align="center">3</td>
    <td width="30px" align="center">2</td>
    <td width="30px" align="center">1</td>
    <td width="30px" align="center">0</td>
  </tr>
</table>
<br>
<table width="1030" border="0" height="200px" class="size" style="color:#009900; font-size:24px; font-family:Arial Narrow; border-collapse:collapse;">

  <tr>
  <td width="500px"><strong><font color="#000">Class-teacher:</font></strong></td>
  <td width="500px"><strong>Class-tr's comment:.....................................................</strong></td>
  <td align="left" width="100"><strong>Sign:&nbsp;</strong></td>
  </tr>
  <tr>
<td style="font-size:20px;"><font color="#1b5e94"><strong><?php echo $rowclass_tr['class_tr'];?></strong></font></td>
<td><strong>........................................................................................</strong></td>
<td><strong>........................</strong></td>
</tr>
  <tr>
  <td><strong><font color="#000">Head-teacher</font> </strong>:</td>
 <td width="900"><strong>Head-tr's comment:</strong><font color="#1b5e94">&nbsp;<?php echo "$comment";?></font><br /></td> 
  
   <td align="left" width="100"><strong>Sign:&nbsp;</strong></td>
  </tr>
<tr>
<td style="font-size:20px;"><font color="#1b5e94"><strong><?php echo $rowhead_tr['Head_tr'];?></strong></font></td>
<td><strong>........................................................................................</strong></td>
<td><strong>........................</strong></td>
</tr>
  <tr>
  <td><strong><font color="#000">Next term Start:</font></strong></td>
    <td><strong>&nbsp;<font color="#000000"><?php echo $rowdate['nextdate'];?></font></strong></td>
     <td>&nbsp;</td>
  </tr>
  <tr>
    <td></td>
   <td></td>
    <td align="left"></td>
  </tr>
  <tr>
<td></td>
<td></td>
<td align="left"></td>
</tr>
</table>
<P><strong></strong><font style="font-style:oblique; font-size:26px; color:#CC3300; font-family:'Arial Black';">&quot;Knowledge with piety&quot;</font></P>
</div>
</body>
</html>
