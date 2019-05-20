<?php
require'db.php';
$ID=$_GET['id'];
include'tables6.php';
?>
<?php
 $queryZ=mysql_query("select * from initials6 where id='1'")or die(mysql_error());
$rowZ=mysql_fetch_array($queryZ);

  ?>
 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SchoolReport</title>
<script type='text/javascript'>

(function()
{
  if( window.localStorage )
  {
    if( !localStorage.getItem('firstLoad') )
    {
      localStorage['firstLoad'] = true;
      window.location.reload();
    }  
    else
      localStorage.removeItem('firstLoad');
  }
})();

</script>
</head>

<body>
<div style="position:absolute; padding-left:10px; top:-40px;"><?php include'sidemenu.php';?></div>
<div style=" background-color:#FFFFFF; padding-left:5px;">

<table width="1035" border="0" height="25px" align="center">
  <tr>
    <td colspan="8"  style="color:#000; text-transform:uppercase; font-weight:bold; font-family:Arial Narrow;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>NAME:</b>&nbsp;&nbsp;&nbsp;<?php echo $row['firstname'];?>&nbsp;<?php echo $row['middlename'];?>&nbsp;<?php echo $row['lastname'];?></font>&nbsp;&nbsp;&nbsp;&nbsp;<b>CLASS:</b>&nbsp;&nbsp;<font color="#1b5e94"><?php echo $row['class'];?></font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>SEX:&nbsp;</b><?php echo $row['sex'];?></font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>combina:</b>&nbsp;<?php echo $row['combination'];?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>TERM:</b>&nbsp;<?php echo $row['Term'];?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>YEAR:</b>&nbsp;&nbsp;&nbsp;<?php echo $row['year'];?>&nbsp;&nbsp;&nbsp;&nbsp;</td>
  </tr>
</table>
<form action="report_6.php" method="post">
<table width="1035" border="1" bordercolor="#000"  align="center" style="background-image:url(images/t-bg.png); background-position:center; border-collapse:collapse; font-size:22px; font-family:Arial Narrow;" cellpadding="-10px">
    <tr height="20px" bgcolor="#999999">
    <td><strong>Subjects</strong></td>
    <td><strong>Award</strong></td>
    <td align="center"><strong>Paper</strong></td>
    <td align="center"><strong>MOT(%)</strong></td>
    <td align="center"><strong>EOT(%)</strong></td>
    <td align="center"><strong>Grade</strong></td>
    <td align="center"><strong>Remark</strong></td>
    <td align="center"><strong>Sign</strong></td>
    </tr>
     <tr bgcolor="#CCCCCC">
    <td>G/PAPER</td>
     <td>
	 <input type="text" name="gp" size="2px"  style="height:20px;border:groove; font-size:24px;" value="<?php 
	 $rowa['Total'];
	if($rowa['Total']=="")
	{
	$queryx1=mysql_query("update 6scs_grading set grades=null,award=null,value=null,remark=null where subject_id='GP'")or die(mysql_error());
	$query_change=mysql_query("update s6 set GP=null where id='$ID'")or die(mysql_error());
	}
	elseif($rowa['Total']<= '34' and $rowa['Total']>='1')
	{
	echo'F9';
	$a='9'.',';
	//This code stores the grade in 6scs_grading
	$queryx1=mysql_query("update 6scs_grading set grades='$a' where subject_id='GP'")or die(mysql_error());
	//This code inserts the grade value in the  6scs_grading table
	$query_value=mysql_query("update 6scs_grading set value='0' where subject_id='GP'")or die(mysql_error());
	//This code inserts the grade award in the  6scs_grading table
	$query_award=mysql_query("update 6scs_grading set award='9' where subject_id='GP'")or die(mysql_error());
	$query_change=mysql_query("update s6 set GP='9' where id='$ID'")or die(mysql_error());
	}
	elseif($rowa['Total']<= '39' and $rowa['Total']>='35')
	{
	echo'P8';
	$b='8'.',';
	//This code stores the grade in 6scs_grading
   $queryx1=mysql_query("update 6scs_grading set grades='$b' where subject_id='GP'")or die(mysql_error());
   //This code inserts the grade value in the  6scs_grading table
	$query_value=mysql_query("update 6scs_grading set value='0' where subject_id='GP'")or die(mysql_error());
	//This code inserts the grade award in the  6scs_grading table
	$query_award=mysql_query("update 6scs_grading set award='8' where subject_id='GP'")or die(mysql_error());
	$query_change=mysql_query("update s6 set GP='8' where id='$ID'")or die(mysql_error());
	}
	elseif($rowa['Total']<= '49' and $rowa['Total']>='40')
	{
	echo'P7';
	$c='7'.',';
	//This code stores the grade in 6scs_grading
	$queryx1=mysql_query("update 6scs_grading set grades='$c' where subject_id='GP'")or die(mysql_error());
	   //This code inserts the grade value in the  6scs_grading table
	$query_value=mysql_query("update 6scs_grading set value='0' where subject_id='GP'")or die(mysql_error());
	//This code inserts the grade award in the  6scs_grading table
	$query_award=mysql_query("update 6scs_grading set award='7' where subject_id='GP'")or die(mysql_error());
	$query_change=mysql_query("update s6 set GP='7' where id='$ID'")or die(mysql_error());
	}
	elseif($rowa['Total']<= '54' and $rowa['Total']>='50')
	{
	echo'C6';
	$d='6'.',';
	//This code stores the grade in 6scs_grading
	$queryx1=mysql_query("update 6scs_grading set grades='$d' where subject_id='GP'")or die(mysql_error());
	//This code inserts the grade value in the  6scs_grading table
	$query_value=mysql_query("update 6scs_grading set value='1' where subject_id='GP'")or die(mysql_error());
	//This code inserts the grade award in the  6scs_grading table
	$query_award=mysql_query("update 6scs_grading set award='6' where subject_id='GP'")or die(mysql_error());
	$query_change=mysql_query("update s6 set GP='6' where id='$ID'")or die(mysql_error());
	}
	elseif($rowa['Total']<= '59' and $rowa['Total']>='55')
	{
	echo'C5'; 
	$e='5'.',';
	//This code stores the grade in 6scs_grading
	$queryx1=mysql_query("update 6scs_grading set grades='$e' where subject_id='GP'")or die(mysql_error());
	//This code inserts the grade value in the  6scs_grading table
	$query_value=mysql_query("update 6scs_grading set value='1' where subject_id='GP'")or die(mysql_error());
	//This code inserts the grade award in the  6scs_grading table
	$query_award=mysql_query("update 6scs_grading set award='5' where subject_id='GP'")or die(mysql_error());
	$query_change=mysql_query("update s6 set GP='5' where id='$ID'")or die(mysql_error());
	}
	elseif($rowa['Total']<= '64' and $rowa['Total']>='60')
	{
	echo'C4';
	$f='4'.',';
	//This code stores the grade in 6scs_grading
	$queryx1=mysql_query("update 6scs_grading set grades='$f' where subject_id='GP'")or die(mysql_error());
	//This code inserts the grade value in the  6scs_grading table
	$query_value=mysql_query("update 6scs_grading set value='1' where subject_id='GP'")or die(mysql_error());
	//This code inserts the grade award in the  6scs_grading table
	$query_award=mysql_query("update 6scs_grading set award='4' where subject_id='GP'")or die(mysql_error());
	$query_change=mysql_query("update s6 set GP='4' where id='$ID'")or die(mysql_error());
	}
	elseif($rowa['Total']<= '74' and $rowa['Total']>='65')
	{
	echo'C3';
	$g='3'.',';
	//This code stores the grade in 6scs_grading
	$queryx1=mysql_query("update 6scs_grading set grades='$g' where subject_id='GP'")or die(mysql_error());
	//This code inserts the grade value in the  6scs_grading table
	$query_value=mysql_query("update 6scs_grading set value='1' where subject_id='GP'")or die(mysql_error());
	//This code inserts the grade award in the  6scs_grading table
	$query_award=mysql_query("update 6scs_grading set award='3' where subject_id='GP'")or die(mysql_error());
	$query_change=mysql_query("update s6 set GP='3' where id='$ID'")or die(mysql_error());
	}
	elseif($rowa['Total']<= '79' and $rowa['Total']>='75')
	{
	echo'D2';
	$h='2'.',';
	//This code stores the grade in 6scs_grading
	$queryx1=mysql_query("update 6scs_grading set grades='$h' where subject_id='GP'")or die(mysql_error());
	//This code inserts the grade value in the  6scs_grading table
	$query_value=mysql_query("update 6scs_grading set value='1' where subject_id='GP'")or die(mysql_error());
	//This code inserts the grade award in the  6scs_grading table
	$query_award=mysql_query("update 6scs_grading set award='2' where subject_id='GP'")or die(mysql_error());
	$query_change=mysql_query("update s6 set GP='2' where id='$ID'")or die(mysql_error());
	}
	elseif($rowa['Total']<= '100' and $rowa['Total']>='80')
	{
	echo'D1';
	$i='1'.',';
	//This code stores the grade in 6scs_grading
	$queryx1=mysql_query("update 6scs_grading set grades='$i' where subject_id='GP'")or die(mysql_error());
	//This code inserts the grade value in the  6scs_grading table
	$query_value=mysql_query("update 6scs_grading set value='1' where subject_id='GP'")or die(mysql_error());
	//This code inserts the grade award in the  6scs_grading table
	$query_award=mysql_query("update 6scs_grading set award='1' where subject_id='GP'")or die(mysql_error());
	$query_change=mysql_query("update s6 set GP='1' where id='$ID'")or die(mysql_error());
	}
	?>"/></td>
    <td align="center">1</td>
    <td align="center"><?php echo $row1['paper_one_mot']; ?></td>
    <td align="center"><?php echo $row1['paper_one_end']; ?></td>
    <td align="center"><?php 
	 $rowa['Total'];
	if($rowa['Total']=="")
	{
	$queryx1=mysql_query("update 6scs_grading set grades=null,award=null,value=null,remark=null where subject_id='GP'")or die(mysql_error());
	}
	elseif($rowa['Total']<= '34' and $rowa['Total']>='1')
	{
	echo'F9';
	$a='9'.',';
	//This code stores the grade in 6scs_grading
	$queryx1=mysql_query("update 6scs_grading set grades='$a' where subject_id='GP'")or die(mysql_error());
	//This code updates the 6scs_grading table
	$query_remark=mysql_query("update 6scs_grading set remark='Improve' where subject_id='GP'")or die(mysql_error());
	
	}
	elseif($rowa['Total']<= '39' and $rowa['Total']>='35')
	{
	echo'P8';
	$b='8'.',';
	//This code stores the grade in 6scs_grading
   $queryx1=mysql_query("update 6scs_grading set grades='$b' where subject_id='GP'")or die(mysql_error());
   //This code updates the 6scs_grading table
	$query_remark=mysql_query("update 6scs_grading set remark='Improve' where subject_id='GP'")or die(mysql_error());
	}
	elseif($rowa['Total']<= '49' and $rowa['Total']>='40')
	{
	echo'P7';
	$c='7'.',';
	//This code stores the grade in 6scs_grading
	$queryx1=mysql_query("update 6scs_grading set grades='$c' where subject_id='GP'")or die(mysql_error());
	//This code updates the 6scs_grading table
	$query_remark=mysql_query("update 6scs_grading set remark='Improve' where subject_id='GP'")or die(mysql_error());
	}
	elseif($rowa['Total']<= '54' and $rowa['Total']>='50')
	{
	echo'C6';
	$d='6'.',';
	//This code stores the grade in 6scs_grading
	$queryx1=mysql_query("update 6scs_grading set grades='$d' where subject_id='GP'")or die(mysql_error());
	//This code updates the 6scs_grading table
	$query_remark=mysql_query("update 6scs_grading set remark='Improve' where subject_id='GP'")or die(mysql_error());
	}
	elseif($rowa['Total']<= '59' and $rowa['Total']>='55')
	{
	echo'C5'; 
	$e='5'.',';
	//This code stores the grade in 6scs_grading
	$queryx1=mysql_query("update 6scs_grading set grades='$e' where subject_id='GP'")or die(mysql_error());
	//This code updates the 6scs_grading table
	$query_remark=mysql_query("update 6scs_grading set remark='Fair' where subject_id='GP'")or die(mysql_error());
	}
	elseif($rowa['Total']<= '64' and $rowa['Total']>='60')
	{
	echo'C4';
	$f='4'.',';
	//This code stores the grade in 6scs_grading
	$queryx1=mysql_query("update 6scs_grading set grades='$f' where subject_id='GP'")or die(mysql_error());
	//This code updates the 6scs_grading table
	$query_remark=mysql_query("update 6scs_grading set remark='Fairly Good' where subject_id='GP'")or die(mysql_error());
	}
	elseif($rowa['Total']<= '74' and $rowa['Total']>='65')
	{
	echo'C3';
	$g='3'.',';
	//This code stores the grade in 6scs_grading
	$queryx1=mysql_query("update 6scs_grading set grades='$g' where subject_id='GP'")or die(mysql_error());
	//This code updates the 6scs_grading table
	$query_remark=mysql_query("update 6scs_grading set remark='Good' where subject_id='GP'")or die(mysql_error());
	}
	elseif($rowa['Total']<= '79' and $rowa['Total']>='75')
	{
	echo'D2';
	$h='2'.',';
	//This code stores the grade in 6scs_grading
	$queryx1=mysql_query("update 6scs_grading set grades='$h' where subject_id='GP'")or die(mysql_error());
	//This code updates the 6scs_grading table
	$query_remark=mysql_query("update 6scs_grading set remark='Very Good' where subject_id='GP'")or die(mysql_error());
	}
	elseif($rowa['Total']<= '100' and $rowa['Total']>='80')
	{
	echo'D1';
	$i='1'.',';
	//This code stores the grade in 6scs_grading
	$queryx1=mysql_query("update 6scs_grading set grades='$i' where subject_id='GP'")or die(mysql_error());
	//This code updates the 6scs_grading table
	$query_remark=mysql_query("update 6scs_grading set remark='Excellent' where subject_id='GP'")or die(mysql_error());
	}
	?></td>
      <td align="center" style="color:#1b5e94;"><?php 
	//This code selects the remark in the 6scs_grading table
    $query_remark=mysql_query("SELECT remark from 6scs_grading where subject_id ='GP'")or die(mysql_error());
    $row_remark=mysql_fetch_array($query_remark);
	echo $row_remark['remark'];?></td>
    <td align="center"><?php echo $rowZ['GP'];?></td>
  </tr>
  <tr bgcolor="#999999">
    <td rowspan="2">Math</td>
    <td  rowspan="2">
	<input type="text" name="math" size="2px"  style="height:20px;border:groove; font-size:24px;" value="<?php 
	
	//******************************* HERE IS THE MAGIC *******************************************
    //This code perfects the Grading of the student by following the UACE Stands 
	if($row2['paper_one_mot']=='')
	{
	$query=mysql_query("update 6scs_grading set grades=null,award=null,value=null,remark=null where subject_id='MATH'")or die(mysql_error());
	 $query_change=mysql_query("update s6 set MATH=null where id='$ID'")or die(mysql_error());
	}else{
	
    $queryMg=mysql_query("SELECT grades from 6scs_grading where subject_id ='MATH'")or die(mysql_error());
    $rowMg=mysql_fetch_array($queryMg);
	if($rowMg['grades']== '1,1'||$rowMg['grades']== '2,2'||$rowMg['grades']== '1,2'||$rowMg['grades']== '2,1')
	{
	//This code inserts the grade in the  6scs_grading table
	$queryx1=mysql_query("update 6scs_grading set award='A' where subject_id='MATH'")or die(mysql_error());
	//This code inserts the grade value in the  6scs_grading table
	$query_value=mysql_query("update 6scs_grading set value='6' where subject_id='MATH'")or die(mysql_error());
	//This code inserts the grade remark in the  6scs_grading table
	$query_remark=mysql_query("update 6scs_grading set remark='Excellent' where subject_id='MATH'")or die(mysql_error());
	//This code updates the grade in the 6scs_grading table
	$queryAward=mysql_query("SELECT award from 6scs_grading where subject_id ='MATH'")or die(mysql_error());
    $rowAward=mysql_fetch_array($queryAward);
	echo $rowAward['award'];
	//I Assigned new variables to help in updating the s6 table data
	$logic_1=$rowAward['award'];
	$logic_2='('.$rowMg['grades'].')';
	$TRANS_GRADE= "$logic_1 $logic_2";

	//This code updates the subject grade value in the  s6 table
	$query_trans=mysql_query("update s6 set MATH='$TRANS_GRADE' where id='$ID'")or die(mysql_error());
	}
	elseif($rowMg['grades']== '3,3'||$rowMg['grades']== '3,1'||$rowMg['grades']== '1,3'||$rowMg['grades']== '2,3'||$rowMg['grades']== '3,2'||$rowMg['grades']== '1,4'||$rowMg['grades']== '4,1'||$rowMg['grades']== '4,2'||$rowMg['grades']== '2,4')
	{
	//This code inserts the grade in the  6scs_grading
	$queryx1=mysql_query("update 6scs_grading set award='B' where subject_id='MATH'")or die(mysql_error());
	//This code inserts the grade value in the  6scs_grading table
	$query_value=mysql_query("update 6scs_grading set value='5' where subject_id='MATH'")or die(mysql_error());
	//This code inserts the grade remark in the  6scs_grading table
	$query_remark=mysql_query("update 6scs_grading set remark='Very Good' where subject_id='MATH'")or die(mysql_error());
	//This code updates the grade in the 6scs_grading table
    $queryAward=mysql_query("SELECT award from 6scs_grading where subject_id ='MATH'")or die(mysql_error());
    $rowAward=mysql_fetch_array($queryAward);
	echo $rowAward['award'];
	//I Assigned new variables to help in updating the s6 table data
	$logic_1=$rowAward['award'];
	$logic_2='('.$rowMg['grades'].')';
	$TRANS_GRADE= "$logic_1 $logic_2";

	//This code updates the subject grade value in the  s6 table
	$query_trans=mysql_query("update s6 set MATH='$TRANS_GRADE' where id='$ID'")or die(mysql_error());
	}
	elseif($rowMg['grades']== '1,5'||$rowMg['grades']== '5,1'||$rowMg['grades']== '2,5'||$rowMg['grades']== '5,2'||$rowMg['grades']== '3,5'||$rowMg['grades']== '5,3'||$rowMg['grades']== '3,4'||$rowMg['grades']== '4,3'||$rowMg['grades']== '4,4')
	{
	//This code inserts the grade in the  6scs_grading
	$queryx1=mysql_query("update 6scs_grading set award='C' where subject_id='MATH'")or die(mysql_error());
	//This code inserts the grade value in the  6scs_grading table
	$query_value=mysql_query("update 6scs_grading set value='4' where subject_id='MATH'")or die(mysql_error());
	//This code inserts the grade remark in the  6scs_grading table
	$query_remark=mysql_query("update 6scs_grading set remark='Good' where subject_id='MATH'")or die(mysql_error());
	//This code updates the grade in the 6scs_grading table
    $queryAward=mysql_query("SELECT award from 6scs_grading where subject_id ='MATH'")or die(mysql_error());
    $rowAward=mysql_fetch_array($queryAward);
	echo $rowAward['award'];
	//I Assigned new variables to help in updating the s6 table data
	$logic_1=$rowAward['award'];
	$logic_2='('.$rowMg['grades'].')';
	$TRANS_GRADE= "$logic_1 $logic_2";

	//This code updates the subject grade value in the  s6 table
	$query_trans=mysql_query("update s6 set MATH='$TRANS_GRADE' where id='$ID'")or die(mysql_error());
	}
	elseif($rowMg['grades']== '1,6'||$rowMg['grades']== '6,1'||$rowMg['grades']== '2,6'||$rowMg['grades']== '6,2'||$rowMg['grades']== '3,6'||$rowMg['grades']== '6,3'||$rowMg['grades']== '6,4'||$rowMg['grades']== '4,6'||$rowMg['grades']== '5,4'||$rowMg['grades']== '4,5'||$rowMg['grades']== '5,5')
	{
	//This code inserts the grade in the  6scs_grading
	$queryx1=mysql_query("update 6scs_grading set award='D' where subject_id='MATH'")or die(mysql_error());
	//This code inserts the grade value in the  6scs_grading table
	$query_value=mysql_query("update 6scs_grading set value='3' where subject_id='MATH'")or die(mysql_error());
	//This code inserts the grade remark in the  6scs_grading table
	$query_remark=mysql_query("update 6scs_grading set remark='Fairly Good' where subject_id='MATH'")or die(mysql_error());
	//This code updates the grade in the 6scs_grading table
    $queryAward=mysql_query("SELECT award from 6scs_grading where subject_id ='MATH'")or die(mysql_error());
    $rowAward=mysql_fetch_array($queryAward);
	echo $rowAward['award'];
	//I Assigned new variables to help in updating the s6 table data
	$logic_1=$rowAward['award'];
	$logic_2='('.$rowMg['grades'].')';
	$TRANS_GRADE= "$logic_1 $logic_2";

	//This code updates the subject grade value in the  s6 table
	$query_trans=mysql_query("update s6 set MATH='$TRANS_GRADE' where id='$ID'")or die(mysql_error());
	}
	elseif($rowMg['grades']== '1,7'||$rowMg['grades']== '7,1'||$rowMg['grades']== '2,7'||$rowMg['grades']== '7,2'||$rowMg['grades']== '3,7'||$rowMg['grades']== '7,3'||$rowMg['grades']== '7,4'||$rowMg['grades']== '4,7'||$rowMg['grades']== '6,4'||$rowMg['grades']== '4,6'||$rowMg['grades']== '6,6'||$rowMg['grades']== '5,6'||$rowMg['grades']== '6,5'||$rowMg['grades']== '5,7'||$rowMg['grades']== '7,5')
	{
	//This code inserts the grade in the  6scs_grading
	$queryx1=mysql_query("update 6scs_grading set award='E' where subject_id='MATH'")or die(mysql_error());
	//This code inserts the grade value in the  6scs_grading table
	$query_value=mysql_query("update 6scs_grading set value='2' where subject_id='MATH'")or die(mysql_error());
	//This code inserts the grade remark in the  6scs_grading table
	$query_remark=mysql_query("update 6scs_grading set remark='Fair' where subject_id='MATH'")or die(mysql_error());
	//This code updates the grade in the 6scs_grading table
    $queryAward=mysql_query("SELECT award from 6scs_grading where subject_id ='MATH'")or die(mysql_error());
    $rowAward=mysql_fetch_array($queryAward);
	echo $rowAward['award'];
	//I Assigned new variables to help in updating the s6 table data
	$logic_1=$rowAward['award'];
	$logic_2='('.$rowMg['grades'].')';
	$TRANS_GRADE= "$logic_1 $logic_2";

	//This code updates the subject grade value in the  s6 table
	$query_trans=mysql_query("update s6 set MATH='$TRANS_GRADE' where id='$ID'")or die(mysql_error());
	}
	elseif($rowMg['grades']== '1,8'||$rowMg['grades']== '8,1'||$rowMg['grades']== '2,8'||$rowMg['grades']== '8,2'||$rowMg['grades']== '3,8'||$rowMg['grades']== '8,3'||$rowMg['grades']== '8,4'||$rowMg['grades']== '4,8'||$rowMg['grades']== '9,4'||$rowMg['grades']== '4,9'||$rowMg['grades']== '7,7'||$rowMg['grades']== '7,8'||$rowMg['grades']== '8,7'||$rowMg['grades']== '7,9'||$rowMg['grades']== '9,7'||$rowMg['grades']== '5,8'||$rowMg['grades']== '8,5'||$rowMg['grades']== '5,9'||$rowMg['grades']== '9,5'||$rowMg['grades']== '6,9'||$rowMg['grades']== '9,6'||$rowMg['grades']== '6,8'||$rowMg['grades']== '8,6'||$rowMg['grades']== '8,8'||$rowMg['grades']== '9,1'||$rowMg['grades']== '1,9'||$rowMg['grades']== '9,2'||$rowMg['grades']== '2,9'||$rowMg['grades']== '9,3'||$rowMg['grades']== '3,9'||$rowMg['grades']== '9,4'||$rowMg['grades']== '4,9')
	{
	//This code inserts the grade in the  6scs_grading
	$queryx1=mysql_query("update 6scs_grading set award='O' where subject_id='MATH'")or die(mysql_error());
	//This code inserts the grade value in the  6scs_grading table
	$query_value=mysql_query("update 6scs_grading set value='1' where subject_id='MATH'")or die(mysql_error());
	//This code inserts the grade remark in the  6scs_grading table
	$query_remark=mysql_query("update 6scs_grading set remark='Improve' where subject_id='MATH'")or die(mysql_error());
	//This code updates the grade in the 6scs_grading table
    $queryAward=mysql_query("SELECT award from 6scs_grading where subject_id ='MATH'")or die(mysql_error());
    $rowAward=mysql_fetch_array($queryAward);
	echo $rowAward['award'];
	//I Assigned new variables to help in updating the s6 table data
	$logic_1=$rowAward['award'];
	$logic_2='('.$rowMg['grades'].')';
	$TRANS_GRADE= "$logic_1 $logic_2";

	//This code updates the subject grade value in the  s6 table
	$query_trans=mysql_query("update s6 set MATH='$TRANS_GRADE' where id='$ID'")or die(mysql_error());
	}
	elseif($rowMg['grades']== '9,8'||$rowMg['grades']== '8,9'||$rowMg['grades']== '9,9')
	{
	//This code inserts the grade in the  6scs_grading
	$queryx1=mysql_query("update 6scs_grading set award='F' where subject_id='MATH'")or die(mysql_error());
	//This code inserts the grade value in the  6scs_grading table
	$query_value=mysql_query("update 6scs_grading set value='0' where subject_id='MATH'")or die(mysql_error());
	//This code inserts the grade remark in the  6scs_grading table
	$query_remark=mysql_query("update 6scs_grading set remark='Improve' where subject_id='MATH'")or die(mysql_error());
	//This code updates the grade in the 6scs_grading table
    $queryAward=mysql_query("SELECT award from 6scs_grading where subject_id ='MATH'")or die(mysql_error());
    $rowAward=mysql_fetch_array($queryAward);
	echo $rowAward['award'];
	//I Assigned new variables to help in updating the s6 table data
	$logic_1=$rowAward['award'];
	$logic_2='('.$rowMg['grades'].')';
	$TRANS_GRADE= "$logic_1 $logic_2";

	//This code updates the subject grade value in the  s6 table
	$query_trans=mysql_query("update s6 set MATH='$TRANS_GRADE' where id='$ID'")or die(mysql_error());
	}
	}
	?>"/></td>
     <td align="center">1</td>
     <td align="center"><?php echo $row2['paper_one_mot']; ?></td>
    <td align="center"><?php echo $row2['paper_one_end']; ?></td>   
     <td align="center">
     <?php 
	 
	if($rowb['Total']=="")
	{
	$queryx1=mysql_query("update 6scs_grading set grades=null,award=null,value=null,remark=null where subject_id='MATH'")or die(mysql_error());
	}
	elseif($rowb['Total']<= '34' and $rowb['Total']>='1')
	{
	echo'F9';
	$a='9'.',';
	//This code stores the grade in 6scs_grading
	$queryx1=mysql_query("update 6scs_grading set grades='$a' where subject_id='MATH'")or die(mysql_error());
	
	}
	elseif($rowb['Total']<= '39' and $rowb['Total']>='35')
	{
	echo'P8';
	$b='8'.',';
	//This code stores the grade in 6scs_grading
   $queryx1=mysql_query("update 6scs_grading set grades='$b' where subject_id='MATH'")or die(mysql_error());
	}
	elseif($rowb['Total']<= '49' and $rowb['Total']>='40')
	{
	echo'P7';
	$c='7'.',';
	//This code stores the grade in 6scs_grading
	$queryx1=mysql_query("update 6scs_grading set grades='$c' where subject_id='MATH'")or die(mysql_error());
	}
	elseif($rowb['Total']<= '54' and $rowb['Total']>='50')
	{
	echo'C6';
	$d='6'.',';
	//This code stores the grade in 6scs_grading
	$queryx1=mysql_query("update 6scs_grading set grades='$d' where subject_id='MATH'")or die(mysql_error());
	}
	elseif($rowb['Total']<= '59' and $rowb['Total']>='55')
	{
	echo'C5'; 
	$e='5'.',';
	//This code stores the grade in 6scs_grading
	$queryx1=mysql_query("update 6scs_grading set grades='$e' where subject_id='MATH'")or die(mysql_error());
	}
	elseif($rowb['Total']<= '64' and $rowb['Total']>='60')
	{
	echo'C4';
	$f='4'.',';
	//This code stores the grade in 6scs_grading
	$queryx1=mysql_query("update 6scs_grading set grades='$f' where subject_id='MATH'")or die(mysql_error());
	}
	elseif($rowb['Total']<= '74' and $rowb['Total']>='65')
	{
	echo'C3';
	$g='3'.',';
	//This code stores the grade in 6scs_grading
	$queryx1=mysql_query("update 6scs_grading set grades='$g' where subject_id='MATH'")or die(mysql_error());
	}
	elseif($rowb['Total']<= '79' and $rowb['Total']>='75')
	{
	echo'D2';
	$h='2'.',';
	//This code stores the grade in 6scs_grading
	$queryx1=mysql_query("update 6scs_grading set grades='$h' where subject_id='MATH'")or die(mysql_error());
	}
	elseif($rowb['Total']<= '100' and $rowb['Total']>='80')
	{
	echo'D1';
	$i='1'.',';
	//This code stores the grade in 6scs_grading
	$queryx1=mysql_query("update 6scs_grading set grades='$i' where subject_id='MATH'")or die(mysql_error());
	}
	?>	</td>
      <td align="center" rowspan="2" style="color:#1b5e94;"><?php 
	//This code selects the remark in the 6scs_grading table
    $query_remark=mysql_query("SELECT remark from 6scs_grading where subject_id ='MATH'")or die(mysql_error());
    $row_remark=mysql_fetch_array($query_remark);
	echo $row_remark['remark'];?></td>
    <td align="center" rowspan="2"><?php echo $rowZ['MATH'];?></td>
  </tr>
   <tr bgcolor="#999999">
   
    <td align="center">2</td>
    <td align="center"><?php echo $row2['two_paper_mot']; ?>&nbsp;</td>
     <td align="center"><?php echo $row2['two_paper_end']; ?></td>
    <td align="center"><?php 
	 if($rowh['Total']=="")
	{
	$queryx2=mysql_query("update 6scs_grading set grades=null,award=null,value=null,remark=null where subject_id='MATH'")or die(mysql_error());
	}
	elseif($rowh['Total']<= '34' and $rowh['Total']>='1')
	{
	echo'F9';
	$a='9';
	//This code stores the grade in 6scs_grading
	$queryx2=mysql_query("UPDATE 6scs_grading SET grades= concat(grades,'$a') WHERE `6scs_grading`.`subject_id` = 'MATH'")or die(mysql_error());
	}
	elseif($rowh['Total']<= '39' and $rowh['Total']>='35')
	{
	echo'P8';
	$b='8';
	//This code stores the grade in 6scs_grading
	$queryx2=mysql_query("UPDATE 6scs_grading SET grades= concat(grades,'$b') WHERE `6scs_grading`.`subject_id` = 'MATH'")or die(mysql_error());
	}
	elseif($rowh['Total']<= '49' and $rowh['Total']>='40')
	{
	echo'P7';
	$c='7';
	//This code stores the grade in 6scs_grading
	$queryx2=mysql_query("UPDATE 6scs_grading SET grades= concat(grades,'$c') WHERE `6scs_grading`.`subject_id` = 'MATH'")or die(mysql_error());
	}
	elseif($rowh['Total']<= '54' and $rowh['Total']>='50')
	{
	echo'C6';
	$d='6';
	//This code stores the grade in 6scs_grading
	$queryx2=mysql_query("UPDATE 6scs_grading SET grades= concat(grades,'$d') WHERE `6scs_grading`.`subject_id` = 'MATH'")or die(mysql_error());
	}
	elseif($rowh['Total']<= '59' and $rowh['Total']>='55')
	{
	echo'C5';
	$e='5';
	//This code stores the grade in 6scs_grading
	$queryx2=mysql_query("UPDATE 6scs_grading SET grades= concat(grades,'$e') WHERE `6scs_grading`.`subject_id` = 'MATH'")or die(mysql_error());
	}
	elseif($rowh['Total']<= '64' and $rowh['Total']>='60')
	{
	echo'C4';
	$f='4';
	//This code stores the grade in 6scs_grading
	$queryx2=mysql_query("UPDATE 6scs_grading SET grades= concat(grades,'$f') WHERE `6scs_grading`.`subject_id` = 'MATH'")or die(mysql_error());
	}
	elseif($rowh['Total']<= '74' and $rowh['Total']>='65')
	{
	echo'C3';
	$g='3';
	//This code stores the grade in 6scs_grading
	$queryx2=mysql_query("UPDATE 6scs_grading SET grades= concat(grades,'$g') WHERE `6scs_grading`.`subject_id` = 'MATH'")or die(mysql_error());
	}
	elseif($rowh['Total']<= '79' and $rowh['Total']>='75')
	{
	echo'D2';
	$h='2';
	//This code stores the grade in 6scs_grading
	$queryx2=mysql_query("UPDATE 6scs_grading SET grades= concat(grades,'$h') WHERE `6scs_grading`.`subject_id` = 'MATH'")or die(mysql_error());
	}
	elseif($rowh['Total']<= '100' and $rowh['Total']>='80')
	{
	echo'D1';
	$i='1';
	//This code stores the grade in 6scs_grading
	$queryx2=mysql_query("UPDATE 6scs_grading SET grades= concat(grades,'$i') WHERE `6scs_grading`.`subject_id` = 'MATH'")or die(mysql_error());
	}
	?></td>
  </tr>
  <tr bgcolor="#CCCCCC">
    <td rowspan="3">Physics</td>
      
    <td rowspan="3"><input type="text" name="physics" size="2px"  style="height:20px;border:groove; font-size:24px;" value="<?php 
	
	//******************************* HERE IS THE MAGIC *******************************************
    //This code perfects the Grading of the student by following the UACE Stands 
	
	if($row5['paper_one_mot']=='')
	{
	$query=mysql_query("update 6scs_grading set grades=null,award=null,value=null,remark=null where subject_id='PHYS'")or die(mysql_error());
	 $query_change=mysql_query("update s6 set PHYS=null where id='$ID'")or die(mysql_error());
	}else{
    $queryPHYS=mysql_query("SELECT grades from 6scs_grading where subject_id ='PHYS'")or die(mysql_error());
    $rowPhys=mysql_fetch_array($queryPHYS);
if($rowPhys['grades']== '1,1,1'||$rowPhys['grades']== '1,1,2'||$rowPhys['grades']== '2,1,1'||$rowPhys['grades']== '1,2,1'||$rowPhys['grades']== '1,2,2'||$rowPhys['grades']== '2,1,2'||$rowPhys['grades']== '2,2,1'||$rowPhys['grades']== '2,2,2'||$rowPhys['grades']== '1,3,1'||$rowPhys['grades']== '1,1,3'||$rowPhys['grades']== '3,1,1'||$rowPhys['grades']== '1,2,3'||$rowPhys['grades']== '3,2,1'||$rowPhys['grades']== '3,1,2'||$rowPhys['grades']== '2,3,1'||$rowPhys['grades']== '1,3,2'||$rowPhys['grades']== '2,1,3'||$rowPhys['grades']== '2,3,2'||$rowPhys['grades']== '3,2,2'||$rowPhys['grades']== '2,2,3')
	{
	//This code inserts the grade in the  6scs_grading table
	$queryx4=mysql_query("update 6scs_grading set award='A' where subject_id='PHYS'")or die(mysql_error());
	//This code inserts the grade value in the  6scs_grading table
	$query_value=mysql_query("update 6scs_grading set value='6' where subject_id='PHYS'")or die(mysql_error());
	//This code inserts the grade remark in the  6scs_grading table
	$query_remark=mysql_query("update 6scs_grading set remark='Excellent' where subject_id='PHYS'")or die(mysql_error());
	//This code updates the grade in the 6scs_grading table
	$queryAward=mysql_query("SELECT award from 6scs_grading where subject_id ='PHYS'")or die(mysql_error());
    $rowAward=mysql_fetch_array($queryAward);
	echo $rowAward['award'];
	
	//I Assigned new variables to help in updating the s6 table data
	$logic_1=$rowAward['award'];
	$logic_2='('.$rowPhys['grades'].')';
	$TRANS_GRADE= "$logic_1 $logic_2";

	//This code updates the subject grade value in the  s6 table
	$query_trans=mysql_query("update s6 set PHYS='$TRANS_GRADE' where id='$ID'")or die(mysql_error());
	}
elseif($rowPhys['grades']== '1,3,3'||$rowPhys['grades']== '3,3,1'||$rowPhys['grades']== '3,1,3'||$rowPhys['grades']== '3,3,2'||$rowPhys['grades']== '2,3,3'||$rowPhys['grades']== '3,2,3'||$rowPhys['grades']== '3,3,3'||$rowPhys['grades']== '1,4,2'||$rowPhys['grades']== '2,4,1'||$rowPhys['grades']== '4,1,2'||$rowPhys['grades']== '4,2,1'||$rowPhys['grades']== '2,1,4'||$rowPhys['grades']== '1,4,3'||$rowPhys['grades']== '1,3,4'||$rowPhys['grades']== '3,4,1'||$rowPhys['grades']== '4,1,3'||$rowPhys['grades']== '3,1,4'||$rowPhys['grades']== '4,3,1'||$rowPhys['grades']== '3,4,2'||$rowPhys['grades']== '2,4,3'||$rowPhys['grades']== '4,3,2'||$rowPhys['grades']== '4,2,3'||$rowPhys['grades']== '2,3,4'||$rowPhys['grades']== '1,1,4'||$rowPhys['grades']== '4,1,1'||$rowPhys['grades']== '1,4,1'||$rowPhys['grades']== '4,2,2'||$rowPhys['grades']== '2,2,4'||$rowPhys['grades']== '2,4,2'||$rowPhys['grades']== '4,3,3'||$rowPhys['grades']== '3,3,4'||$rowPhys['grades']== '3,4,3')
	{
	//This code inserts the grade in the  6scs_grading
	$queryx4=mysql_query("update 6scs_grading set award='B' where subject_id='PHYS'")or die(mysql_error());
	//This code inserts the grade value in the  6scs_grading table
	$query_value=mysql_query("update 6scs_grading set value='5' where subject_id='PHYS'")or die(mysql_error());
	//This code inserts the grade remark in the  6scs_grading table
	$query_remark=mysql_query("update 6scs_grading set remark='Very Good' where subject_id='PHYS'")or die(mysql_error());
	//This code updates the grade in the 6scs_grading table
    $queryAward=mysql_query("SELECT award from 6scs_grading where subject_id ='PHYS'")or die(mysql_error());
    $rowAward=mysql_fetch_array($queryAward);
	echo $rowAward['award'];

		//I Assigned new variables to help in updating the s6 table data
	$logic_1=$rowAward['award'];
	$logic_2='('.$rowPhys['grades'].')';
	$TRANS_GRADE= "$logic_1 $logic_2";

	//This code updates the subject grade value in the  s6 table
	$query_trans=mysql_query("update s6 set PHYS='$TRANS_GRADE' where id='$ID'")or die(mysql_error());
	}
elseif($rowPhys['grades']== '1,1,5'||$rowPhys['grades']== '1,5,1'||$rowPhys['grades']== '5,1,1'||$rowPhys['grades']== '1,2,5'||$rowPhys['grades']== '1,5,2'||$rowPhys['grades']== '2,1,5'||$rowPhys['grades']== '2,5,1'||$rowPhys['grades']== '5,2,1'||$rowPhys['grades']== '5,1,2'||$rowPhys['grades']== '1,3,5'||$rowPhys['grades']== '1,5,3'||$rowPhys['grades']== '5,3,1'||$rowPhys['grades']== '5,1,3'||$rowPhys['grades']== '3,1,5'||$rowPhys['grades']== '3,5,1'||$rowPhys['grades']== '1,4,5'||$rowPhys['grades']== '1,5,4'||$rowPhys['grades']== '4,5,1'||$rowPhys['grades']== '4,1,5'||$rowPhys['grades']== '5,4,1'||$rowPhys['grades']== '5,1,4'||$rowPhys['grades']== '2,2,5'||$rowPhys['grades']== '2,5,2'||$rowPhys['grades']== '5,2,2'||$rowPhys['grades']== '2,3,5'||$rowPhys['grades']== '2,5,3'||$rowPhys['grades']== '5,2,3'||$rowPhys['grades']== '5,3,2'||$rowPhys['grades']== '3,5,2'||$rowPhys['grades']== '3,2,5'||$rowPhys['grades']== '2,4,5'||$rowPhys['grades']== '4,2,5'||$rowPhys['grades']== '4,5,2'||$rowPhys['grades']== '5,4,2'||$rowPhys['grades']== '5,2,4'||$rowPhys['grades']== '2,5,4'||$rowPhys['grades']== '3,3,5'||$rowPhys['grades']== '3,5,3'||$rowPhys['grades']== '5,3,3'||$rowPhys['grades']== '3,4,5'||$rowPhys['grades']== '3,5,4'||$rowPhys['grades']== '5,3,4'||$rowPhys['grades']== '5,4,3'||$rowPhys['grades']== '4,5,3'||$rowPhys['grades']== '4,3,5'||$rowPhys['grades']== '4,4,5'||$rowPhys['grades']== '4,5,4'||$rowPhys['grades']== '5,4,4'||$rowPhys['grades']== '4,4,4'||$rowPhys['grades']== '4,4,1'||$rowPhys['grades']== '4,1,4'||$rowPhys['grades']== '1,4,4'||$rowPhys['grades']== '4,4,2'||$rowPhys['grades']== '4,2,4'||$rowPhys['grades']== '2,4,4'||$rowPhys['grades']== '4,4,3'||$rowPhys['grades']== '4,3,4'||$rowPhys['grades']== '3,4,4')
	{
	//This code inserts the grade in the  6scs_grading
	$queryx4=mysql_query("update 6scs_grading set award='C' where subject_id='PHYS'")or die(mysql_error());
	//This code inserts the grade value in the  6scs_grading table
	$query_value=mysql_query("update 6scs_grading set value='4' where subject_id='PHYS'")or die(mysql_error());
	//This code inserts the grade remark in the  6scs_grading table
	$query_remark=mysql_query("update 6scs_grading set remark='Good' where subject_id='PHYS'")or die(mysql_error());
	//This code updates the grade in the 6scs_grading table
    $queryAward=mysql_query("SELECT award from 6scs_grading where subject_id ='PHYS'")or die(mysql_error());
    $rowAward=mysql_fetch_array($queryAward);
	echo $rowAward['award'];

		//I Assigned new variables to help in updating the s6 table data
	$logic_1=$rowAward['award'];
	$logic_2='('.$rowPhys['grades'].')';
	$TRANS_GRADE= "$logic_1 $logic_2";

	//This code updates the subject grade value in the  s6 table
	$query_trans=mysql_query("update s6 set PHYS='$TRANS_GRADE' where id='$ID'")or die(mysql_error());
	}
elseif($rowPhys['grades']== '1,1,6'||$rowPhys['grades']== '1,6,1'||$rowPhys['grades']== '6,1,1'||$rowPhys['grades']== '1,2,6'||$rowPhys['grades']== '1,6,2'||$rowPhys['grades']== '2,1,6'||$rowPhys['grades']== '2,6,1'||$rowPhys['grades']== '6,1,2'||$rowPhys['grades']== '6,2,1'||$rowPhys['grades']== '1,3,6'||$rowPhys['grades']== '1,6,3'||$rowPhys['grades']== '6,3,1'||$rowPhys['grades']== '6,1,3'||$rowPhys['grades']== '3,1,6'||$rowPhys['grades']== '3,6,1'||$rowPhys['grades']== '1,4,6'||$rowPhys['grades']== '1,6,4'||$rowPhys['grades']== '6,4,1'||$rowPhys['grades']== '6,1,4'||$rowPhys['grades']== '4,1,6'||$rowPhys['grades']== '4,6,1'||$rowPhys['grades']== '1,5,6'||$rowPhys['grades']== '1,6,5'||$rowPhys['grades']== '6,5,1'||$rowPhys['grades']== '6,1,5'||$rowPhys['grades']== '5,1,6'||$rowPhys['grades']== '5,6,1'||$rowPhys['grades']== '2,2,6'||$rowPhys['grades']== '2,6,2'||$rowPhys['grades']== '6,2,2'||$rowPhys['grades']== '2,3,6'||$rowPhys['grades']== '2,6,3'||$rowPhys['grades']== '6,2,3'||$rowPhys['grades']== '6,3,2'||$rowPhys['grades']== '3,6,2'||$rowPhys['grades']== '3,2,6'||$rowPhys['grades']== '2,4,6'||$rowPhys['grades']== '2,6,4'||$rowPhys['grades']== '6,2,4'||$rowPhys['grades']== '6,4,2'||$rowPhys['grades']== '4,6,2'||$rowPhys['grades']== '4,2,6'||$rowPhys['grades']== '2,5,6'||$rowPhys['grades']== '2,6,5'||$rowPhys['grades']== '5,2,6'||$rowPhys['grades']== '5,6,2'||$rowPhys['grades']== '6,2,5'||$rowPhys['grades']== '6,5,2'||$rowPhys['grades']== '3,3,6'||$rowPhys['grades']== '3,6,3'||$rowPhys['grades']== '6,3,3'||$rowPhys['grades']== '3,4,6'||$rowPhys['grades']== '3,6,4'||$rowPhys['grades']== '6,3,4'||$rowPhys['grades']== '6,4,3'||$rowPhys['grades']== '4,6,3'||$rowPhys['grades']== '4,3,6'||$rowPhys['grades']== '3,5,6'||$rowPhys['grades']== '3,6,5'||$rowPhys['grades']== '5,3,6'||$rowPhys['grades']== '5,6,3'||$rowPhys['grades']== '6,3,5'||$rowPhys['grades']== '6,5,3'||$rowPhys['grades']== '4,4,6'||$rowPhys['grades']== '4,6,4'||$rowPhys['grades']== '6,4,4'||$rowPhys['grades']== '4,5,6'||$rowPhys['grades']== '4,6,5'||$rowPhys['grades']== '5,4,6'||$rowPhys['grades']== '5,6,4'||$rowPhys['grades']== '6,4,5'||$rowPhys['grades']== '6,5,4'||$rowPhys['grades']== '1,5,5'||$rowPhys['grades']== '5,1,5'||$rowPhys['grades']== '5,5,1'||$rowPhys['grades']== '2,5,5'||$rowPhys['grades']== '5,2,5'||$rowPhys['grades']== '5,5,2'||$rowPhys['grades']== '3,5,5'||$rowPhys['grades']== '5,3,5'||$rowPhys['grades']== '5,5,3'||$rowPhys['grades']== '4,5,5'||$rowPhys['grades']== '5,4,5'||$rowPhys['grades']== '5,5,4'||$rowPhys['grades']== '5,5,5'||$rowPhys['grades']== '6,5,5'||$rowPhys['grades']== '5,6,5'||$rowPhys['grades']== '5,5,6')
	{
	//This code inserts the grade in the  6scs_grading
	$queryx4=mysql_query("update 6scs_grading set award='D' where subject_id='PHYS'")or die(mysql_error());
	//This code inserts the grade value in the  6scs_grading table
	$query_value=mysql_query("update 6scs_grading set value='3' where subject_id='PHYS'")or die(mysql_error());
	//This code inserts the grade remark in the  6scs_grading table
	$query_remark=mysql_query("update 6scs_grading set remark='Fairly Good' where subject_id='PHYS'")or die(mysql_error());
	//This code updates the grade in the 6scs_grading table
    $queryAward=mysql_query("SELECT award from 6scs_grading where subject_id ='PHYS'")or die(mysql_error());
    $rowAward=mysql_fetch_array($queryAward);
	echo $rowAward['award'];
		//I Assigned new variables to help in updating the s6 table data
	$logic_1=$rowAward['award'];
	$logic_2='('.$rowPhys['grades'].')';
	$TRANS_GRADE= "$logic_1 $logic_2";

	//This code updates the subject grade value in the  s6 table
	$query_trans=mysql_query("update s6 set PHYS='$TRANS_GRADE' where id='$ID'")or die(mysql_error());
	}
elseif($rowPhys['grades']== '1,1,7'||$rowPhys['grades']== '1,7,1'||$rowPhys['grades']== '7,1,1'||$rowPhys['grades']== '1,2,7'||$rowPhys['grades']== '1,7,2'||$rowPhys['grades']== '2,7,1'||$rowPhys['grades']== '2,1,7'||$rowPhys['grades']== '7,1,2'||$rowPhys['grades']== '7,2,1'||$rowPhys['grades']== '1,3,7'||$rowPhys['grades']== '1,7,3'||$rowPhys['grades']== '3,7,1'||$rowPhys['grades']== '3,1,7'||$rowPhys['grades']== '7,3,1'||$rowPhys['grades']== '7,1,3'||$rowPhys['grades']== '1,4,7'||$rowPhys['grades']== '1,7,4'||$rowPhys['grades']== '7,1,4'||$rowPhys['grades']== '7,4,1'||$rowPhys['grades']== '4,7,1'||$rowPhys['grades']== '4,1,7'||$rowPhys['grades']== '1,5,7'||$rowPhys['grades']== '1,7,5'||$rowPhys['grades']== '7,1,5'||$rowPhys['grades']== '7,5,1'||$rowPhys['grades']== '5,1,7'||$rowPhys['grades']== '5,7,1'||$rowPhys['grades']== '1,6,7'||$rowPhys['grades']== '1,7,6'||$rowPhys['grades']== '6,7,1'||$rowPhys['grades']== '6,1,7'||$rowPhys['grades']== '7,1,6'||$rowPhys['grades']== '7,6,1'||$rowPhys['grades']== '2,2,7'||$rowPhys['grades']== '2,7,2'||$rowPhys['grades']== '7,2,2'||$rowPhys['grades']== '2,3,7'||$rowPhys['grades']== '2,7,3'||$rowPhys['grades']== '3,2,7'||$rowPhys['grades']== '3,7,2'||$rowPhys['grades']== '7,3,2'||$rowPhys['grades']== '7,2,3'||$rowPhys['grades']== '2,4,7'||$rowPhys['grades']== '2,7,4'||$rowPhys['grades']== '4,2,7'||$rowPhys['grades']== '4,7,2'||$rowPhys['grades']== '7,2,4'||$rowPhys['grades']== '7,4,2'||$rowPhys['grades']== '2,5,7'||$rowPhys['grades']== '2,7,5'||$rowPhys['grades']== '5,7,2'||$rowPhys['grades']== '5,2,7'||$rowPhys['grades']== '7,2,5'||$rowPhys['grades']== '7,5,2'||$rowPhys['grades']== '2,6,7'||$rowPhys['grades']== '2,7,6'||$rowPhys['grades']== '6,7,2'||$rowPhys['grades']== '6,2,7'||$rowPhys['grades']== '7,6,2'||$rowPhys['grades']== '7,2,6'||$rowPhys['grades']== '3,3,7'||$rowPhys['grades']== '3,7,3'||$rowPhys['grades']== '7,3,3'||$rowPhys['grades']== '3,4,7'||$rowPhys['grades']== '3,7,4'||$rowPhys['grades']== '4,3,7'||$rowPhys['grades']== '4,7,3'||$rowPhys['grades']== '7,3,4'||$rowPhys['grades']== '7,4,3'||$rowPhys['grades']== '3,5,7'||$rowPhys['grades']== '3,7,5'||$rowPhys['grades']== '5,3,7'||$rowPhys['grades']== '5,7,3'||$rowPhys['grades']== '7,5,3'||$rowPhys['grades']== '7,3,5'||$rowPhys['grades']== '3,6,7'||$rowPhys['grades']== '3,7,6'||$rowPhys['grades']== '6,3,7'||$rowPhys['grades']== '6,7,3'||$rowPhys['grades']== '7,3,6'||$rowPhys['grades']== '7,6,3'||$rowPhys['grades']== '4,4,7'||$rowPhys['grades']== '4,7,4'||$rowPhys['grades']== '7,4,4'||$rowPhys['grades']== '4,5,7'||$rowPhys['grades']== '4,7,5'||$rowPhys['grades']== '5,7,4'||$rowPhys['grades']== '5,4,7'||$rowPhys['grades']== '7,4,5'||$rowPhys['grades']== '7,5,4'||$rowPhys['grades']== '4,6,7'||$rowPhys['grades']== '4,7,6'||$rowPhys['grades']== '6,7,4'||$rowPhys['grades']== '6,4,7'||$rowPhys['grades']== '7,4,6'||$rowPhys['grades']== '7,6,4'||$rowPhys['grades']== '5,5,7'||$rowPhys['grades']== '5,7,5'||$rowPhys['grades']== '7,5,5'||$rowPhys['grades']== '5,6,7'||$rowPhys['grades']== '5,7,6'||$rowPhys['grades']== '6,5,7'||$rowPhys['grades']== '6,7,5'||$rowPhys['grades']== '7,6,5'||$rowPhys['grades']== '7,5,6'||$rowPhys['grades']== '6,6,7'||$rowPhys['grades']== '6,7,6'||$rowPhys['grades']== '7,6,6'||$rowPhys['grades']== '1,6,6'||$rowPhys['grades']== '6,1,6'||$rowPhys['grades']== '6,6,1'||$rowPhys['grades']== '2,6,6'||$rowPhys['grades']== '6,2,6'||$rowPhys['grades']== '6,6,2'||$rowPhys['grades']== '3,6,6'||$rowPhys['grades']== '6,3,6'||$rowPhys['grades']== '6,6,3'||$rowPhys['grades']== '4,6,6'||$rowPhys['grades']== '6,4,6'||$rowPhys['grades']== '6,6,4'||$rowPhys['grades']== '5,6,6'||$rowPhys['grades']== '6,5,6'||$rowPhys['grades']== '6,6,5'||$rowPhys['grades']== '6,6,6'||
$rowPhys['grades']== '1,1,8'||$rowPhys['grades']== '1,8,1'||$rowPhys['grades']== '8,1,1'||$rowPhys['grades']== '1,2,8'||$rowPhys['grades']== '1,8,2'||$rowPhys['grades']== '2,8,1'||$rowPhys['grades']== '2,1,8'||$rowPhys['grades']== '8,1,2'||$rowPhys['grades']== '8,2,1'||$rowPhys['grades']== '1,3,8'||$rowPhys['grades']== '1,8,3'||$rowPhys['grades']== '3,8,1'||$rowPhys['grades']== '3,1,8'||$rowPhys['grades']== '8,3,1'||$rowPhys['grades']== '8,1,3'||$rowPhys['grades']== '1,4,8'||$rowPhys['grades']== '1,8,4'||$rowPhys['grades']== '8,1,4'||$rowPhys['grades']== '8,4,1'||$rowPhys['grades']== '4,8,1'||$rowPhys['grades']== '4,1,8'||$rowPhys['grades']== '1,5,8'||$rowPhys['grades']== '1,8,5'||$rowPhys['grades']== '8,1,5'||$rowPhys['grades']== '8,5,1'||$rowPhys['grades']== '5,1,8'||$rowPhys['grades']== '5,8,1'||$rowPhys['grades']== '1,6,8'||$rowPhys['grades']== '1,8,6'||$rowPhys['grades']== '6,8,1'||$rowPhys['grades']== '6,1,8'||$rowPhys['grades']== '8,1,6'||$rowPhys['grades']== '8,6,1'||$rowPhys['grades']== '2,2,8'||$rowPhys['grades']== '2,8,2'||$rowPhys['grades']== '8,2,2'||$rowPhys['grades']== '2,3,8'||$rowPhys['grades']== '2,8,3'||$rowPhys['grades']== '3,2,8'||$rowPhys['grades']== '3,8,2'||$rowPhys['grades']== '8,3,2'||$rowPhys['grades']== '8,2,3'||$rowPhys['grades']== '2,4,8'||$rowPhys['grades']== '2,8,4'||$rowPhys['grades']== '4,2,8'||$rowPhys['grades']== '4,8,2'||$rowPhys['grades']== '8,2,4'||$rowPhys['grades']== '8,4,2'||$rowPhys['grades']== '2,5,8'||$rowPhys['grades']== '2,8,5'||$rowPhys['grades']== '5,8,2'||$rowPhys['grades']== '5,2,8'||$rowPhys['grades']== '8,2,5'||$rowPhys['grades']== '8,5,2'||$rowPhys['grades']== '2,6,8'||$rowPhys['grades']== '2,8,6'||$rowPhys['grades']== '6,8,2'||$rowPhys['grades']== '6,2,8'||$rowPhys['grades']== '8,6,2'||$rowPhys['grades']== '8,2,6'||$rowPhys['grades']== '3,3,8'||$rowPhys['grades']== '3,8,3'||$rowPhys['grades']== '8,3,3'||$rowPhys['grades']== '3,4,8'||$rowPhys['grades']== '3,8,4'||$rowPhys['grades']== '4,3,8'||$rowPhys['grades']== '4,8,3'||$rowPhys['grades']== '8,3,4'||$rowPhys['grades']== '8,4,3'||$rowPhys['grades']== '3,5,8'||$rowPhys['grades']== '3,8,5'||$rowPhys['grades']== '5,3,8'||$rowPhys['grades']== '5,8,3'||$rowPhys['grades']== '8,5,3'||$rowPhys['grades']== '8,3,5'||$rowPhys['grades']== '3,6,8'||$rowPhys['grades']== '3,8,6'||$rowPhys['grades']== '6,3,8'||$rowPhys['grades']== '6,8,3'||$rowPhys['grades']== '8,3,6'||$rowPhys['grades']== '8,6,3'||$rowPhys['grades']== '4,4,8'||$rowPhys['grades']== '4,8,4'||$rowPhys['grades']== '8,4,4'||$rowPhys['grades']== '4,5,8'||$rowPhys['grades']== '4,8,5'||$rowPhys['grades']== '5,8,4'||$rowPhys['grades']== '5,4,8'||$rowPhys['grades']== '8,4,5'||$rowPhys['grades']== '8,5,4'||$rowPhys['grades']== '4,6,8'||$rowPhys['grades']== '4,8,6'||$rowPhys['grades']== '6,8,4'||$rowPhys['grades']== '6,4,8'||$rowPhys['grades']== '8,4,6'||$rowPhys['grades']== '8,6,4'||$rowPhys['grades']== '5,5,8'||$rowPhys['grades']== '5,8,5'||$rowPhys['grades']== '8,5,5'||$rowPhys['grades']== '5,6,8'||$rowPhys['grades']== '5,8,6'||$rowPhys['grades']== '6,5,8'||$rowPhys['grades']== '6,8,5'||$rowPhys['grades']== '8,6,5'||$rowPhys['grades']== '8,5,6'||$rowPhys['grades']== '6,6,8'||$rowPhys['grades']== '6,8,6'||$rowPhys['grades']== '8,6,6')
	{
	//This code inserts the grade in the  6scs_grading
	$queryx4=mysql_query("update 6scs_grading set award='E' where subject_id='PHYS'")or die(mysql_error());
	//This code inserts the grade value in the  6scs_grading table
	$query_value=mysql_query("update 6scs_grading set value='2' where subject_id='PHYS'")or die(mysql_error());
	//This code inserts the grade remark in the  6scs_grading table
	$query_remark=mysql_query("update 6scs_grading set remark='Fair' where subject_id='PHYS'")or die(mysql_error());
	//This code updates the grade in the 6scs_grading table
    $queryAward=mysql_query("SELECT award from 6scs_grading where subject_id ='PHYS'")or die(mysql_error());
    $rowAward=mysql_fetch_array($queryAward);
	echo $rowAward['award'];
	
		//I Assigned new variables to help in updating the s6 table data
	$logic_1=$rowAward['award'];
	$logic_2='('.$rowPhys['grades'].')';
	$TRANS_GRADE= "$logic_1 $logic_2";

	//This code updates the subject grade value in the  s6 table
	$query_trans=mysql_query("update s6 set PHYS='$TRANS_GRADE' where id='$ID'")or die(mysql_error());
	}
elseif($rowPhys['grades']== '1,7,7'||$rowPhys['grades']== '7,1,7'||$rowPhys['grades']== '7,7,1'||$rowPhys['grades']== '2,7,7'||$rowPhys['grades']== '7,2,7'||$rowPhys['grades']== '7,7,2'||$rowPhys['grades']== '3,7,7'||$rowPhys['grades']== '7,3,7'||$rowPhys['grades']== '7,7,3'||$rowPhys['grades']== '4,7,7'||$rowPhys['grades']== '7,4,7'||$rowPhys['grades']== '7,7,4'||$rowPhys['grades']== '5,7,7'||$rowPhys['grades']== '7,5,7'||$rowPhys['grades']== '7,7,5'||$rowPhys['grades']== '6,7,7'||$rowPhys['grades']== '7,6,7'||$rowPhys['grades']== '7,7,6'||$rowPhys['grades']== '1,8,8'||$rowPhys['grades']== '8,1,8'||$rowPhys['grades']== '8,8,1'||$rowPhys['grades']== '2,8,8'||$rowPhys['grades']== '8,2,8'||$rowPhys['grades']== '8,8,2'||$rowPhys['grades']== '3,8,8'||$rowPhys['grades']== '8,3,8'||$rowPhys['grades']== '8,8,3'||$rowPhys['grades']== '4,8,8'||$rowPhys['grades']== '8,4,8'||$rowPhys['grades']== '8,8,4'||$rowPhys['grades']== '5,8,8'||$rowPhys['grades']== '8,5,8'||$rowPhys['grades']== '8,8,5'||$rowPhys['grades']== '6,8,8'||$rowPhys['grades']== '8,6,8'||$rowPhys['grades']== '8,8,6'||$rowPhys['grades']== '1,7,8'||$rowPhys['grades']== '1,8,7'||$rowPhys['grades']== '7,8,1'||$rowPhys['grades']== '7,1,8'||$rowPhys['grades']== '8,1,7'||$rowPhys['grades']== '8,7,1'||$rowPhys['grades']== '2,7,8'||$rowPhys['grades']== '2,8,7'||$rowPhys['grades']== '7,8,2'||$rowPhys['grades']== '7,2,8'||$rowPhys['grades']== '8,2,7'||$rowPhys['grades']== '8,7,2'||$rowPhys['grades']== '3,7,8'||$rowPhys['grades']== '3,8,7'||$rowPhys['grades']== '7,8,3'||$rowPhys['grades']== '7,3,8'||$rowPhys['grades']== '8,3,7'||$rowPhys['grades']== '8,7,3'||$rowPhys['grades']== '4,7,8'||$rowPhys['grades']== '4,8,7'||$rowPhys['grades']== '7,8,4'||$rowPhys['grades']== '7,4,8'||$rowPhys['grades']== '8,4,7'||$rowPhys['grades']== '8,7,4'||$rowPhys['grades']== '5,7,8'||$rowPhys['grades']== '5,8,7'||$rowPhys['grades']== '7,8,5'||$rowPhys['grades']== '7,5,8'||$rowPhys['grades']== '8,5,7'||$rowPhys['grades']== '8,7,5'||$rowPhys['grades']== '6,7,8'||$rowPhys['grades']== '6,8,7'||$rowPhys['grades']== '7,8,6'||$rowPhys['grades']== '7,6,8'||$rowPhys['grades']== '8,6,7'||$rowPhys['grades']== '8,7,6'||$rowPhys['grades']== '1,1,9'||$rowPhys['grades']== '1,9,1'||$rowPhys['grades']== '9,1,1'||$rowPhys['grades']== '1,2,9'||$rowPhys['grades']== '1,9,2'||$rowPhys['grades']== '9,1,2'||$rowPhys['grades']== '9,2,1'||$rowPhys['grades']== '2,9,1'||$rowPhys['grades']== '2,1,9'||$rowPhys['grades']== '1,3,9'||$rowPhys['grades']== '1,9,3'||$rowPhys['grades']== '3,1,9'||$rowPhys['grades']== '3,9,1'||$rowPhys['grades']== '9,3,1'||$rowPhys['grades']== '9,1,3'||$rowPhys['grades']== '1,4,9'||$rowPhys['grades']== '1,9,4'||$rowPhys['grades']== '4,1,9'||$rowPhys['grades']== '4,9,1'||$rowPhys['grades']== '9,4,1'||$rowPhys['grades']== '9,1,4'||$rowPhys['grades']== '1,5,9'||$rowPhys['grades']== '1,9,5'||$rowPhys['grades']== '5,1,9'||$rowPhys['grades']== '5,9,1'||$rowPhys['grades']== '9,5,1'||$rowPhys['grades']== '9,1,5'||$rowPhys['grades']== '1,6,9'||$rowPhys['grades']== '1,9,6'||$rowPhys['grades']== '6,1,9'||$rowPhys['grades']== '6,9,1'||$rowPhys['grades']== '9,6,1'||$rowPhys['grades']== '9,1,6'||$rowPhys['grades']== '2,2,9'||$rowPhys['grades']== '2,9,2'||$rowPhys['grades']== '9,2,2'||$rowPhys['grades']== '2,3,9'||$rowPhys['grades']== '2,9,3'||$rowPhys['grades']== '3,2,9'||$rowPhys['grades']== '3,9,2'||$rowPhys['grades']== '9,3,2'||$rowPhys['grades']== '9,2,3'||$rowPhys['grades']== '2,4,9'||$rowPhys['grades']== '2,9,4'||$rowPhys['grades']== '4,2,9'||$rowPhys['grades']== '4,9,2'||$rowPhys['grades']== '9,4,2'||$rowPhys['grades']== '9,2,4'||$rowPhys['grades']== '2,5,9'||$rowPhys['grades']== '2,9,5'||$rowPhys['grades']== '5,2,9'||$rowPhys['grades']== '5,9,2'||$rowPhys['grades']== '9,5,2'||$rowPhys['grades']== '9,2,5'||$rowPhys['grades']== '2,6,9'||$rowPhys['grades']== '2,9,6'||$rowPhys['grades']== '6,2,9'||$rowPhys['grades']== '6,9,2'||$rowPhys['grades']== '9,6,2'||$rowPhys['grades']== '9,2,6'||$rowPhys['grades']== '3,3,9'||$rowPhys['grades']== '3,9,3'||$rowPhys['grades']== '9,3,3'||$rowPhys['grades']== '3,4,9'||$rowPhys['grades']== '3,9,4'||$rowPhys['grades']== '9,3,4'||$rowPhys['grades']== '9,4,3'||$rowPhys['grades']== '4,3,9'||$rowPhys['grades']== '4,9,3'||$rowPhys['grades']== '3,5,9'||$rowPhys['grades']== '3,9,5'||$rowPhys['grades']== '9,3,5'||$rowPhys['grades']== '9,5,3'||$rowPhys['grades']== '5,3,9'||$rowPhys['grades']== '5,9,3'||$rowPhys['grades']== '3,6,9'||$rowPhys['grades']== '3,9,6'||$rowPhys['grades']== '9,3,6'||$rowPhys['grades']== '9,6,3'||$rowPhys['grades']== '6,3,9'||$rowPhys['grades']== '6,9,3'||$rowPhys['grades']== '4,4,9'||$rowPhys['grades']== '4,9,4'||$rowPhys['grades']== '9,4,4'||$rowPhys['grades']== '4,5,9'||$rowPhys['grades']== '4,9,5'||$rowPhys['grades']== '9,4,5'||$rowPhys['grades']== '9,5,4'||$rowPhys['grades']== '5,4,9'||$rowPhys['grades']== '5,9,4'||$rowPhys['grades']== '4,6,9'||$rowPhys['grades']== '4,9,6'||$rowPhys['grades']== '9,4,6'||$rowPhys['grades']== '9,6,4'||$rowPhys['grades']== '6,4,9'||$rowPhys['grades']== '6,9,4'||$rowPhys['grades']== '5,5,9'||$rowPhys['grades']== '5,9,5'||$rowPhys['grades']== '9,5,5'||$rowPhys['grades']== '5,6,9'||$rowPhys['grades']== '5,9,6'||$rowPhys['grades']== '6,5,9'||$rowPhys['grades']== '6,9,5'||$rowPhys['grades']== '9,6,5'||$rowPhys['grades']== '9,5,6'||$rowPhys['grades']== '6,6,9'||$rowPhys['grades']== '6,9,6'||$rowPhys['grades']== '9,6,6')
	{
	//This code inserts the grade in the  6scs_grading
	$queryx4=mysql_query("update 6scs_grading set award='O' where subject_id='PHYS'")or die(mysql_error());
	//This code inserts the grade value in the  6scs_grading table
	$query_value=mysql_query("update 6scs_grading set value='1' where subject_id='PHYS'")or die(mysql_error());
	//This code inserts the grade remark in the  6scs_grading table
	$query_remark=mysql_query("update 6scs_grading set remark='Improve' where subject_id='PHYS'")or die(mysql_error());
	//This code updates the grade in the 6scs_grading table
    $queryAward=mysql_query("SELECT award from 6scs_grading where subject_id ='PHYS'")or die(mysql_error());
    $rowAward=mysql_fetch_array($queryAward);
	echo $rowAward['award'];

		//I Assigned new variables to help in updating the s6 table data
	$logic_1=$rowAward['award'];
	$logic_2='('.$rowPhys['grades'].')';
	$TRANS_GRADE= "$logic_1 $logic_2";

	//This code updates the subject grade value in the  s6 table
	$query_trans=mysql_query("update s6 set PHYS='$TRANS_GRADE' where id='$ID'")or die(mysql_error());
	}
elseif($rowPhys['grades']== '9,8,8'||$rowPhys['grades']== '8,8,9'||$rowPhys['grades']== '8,9,8'||$rowPhys['grades']== '9,9,9'||$rowPhys['grades']== '9,7,7'||$rowPhys['grades']== '7,7,9'||$rowPhys['grades']== '7,9,7'||$rowPhys['grades']== '9,9,9'||$rowPhys['grades']== '1,9,9'||$rowPhys['grades']== '9,1,9'||$rowPhys['grades']== '9,9,1'||$rowPhys['grades']== '2,9,9'||$rowPhys['grades']== '9,2,9'||$rowPhys['grades']== '9,9,2'||$rowPhys['grades']== '3,9,9'||$rowPhys['grades']== '9,3,9'||$rowPhys['grades']== '9,9,3'||$rowPhys['grades']== '4,9,9'||$rowPhys['grades']== '9,4,9'||$rowPhys['grades']== '9,9,4'||$rowPhys['grades']== '5,9,9'||$rowPhys['grades']== '9,5,9'||$rowPhys['grades']== '9,9,5'||$rowPhys['grades']== '6,9,9'||$rowPhys['grades']== '9,6,9'||$rowPhys['grades']== '9,9,6')
	{
	//This code inserts the grade in the  6scs_grading
	$queryx4=mysql_query("update 6scs_grading set award='F' where subject_id='PHYS'")or die(mysql_error());
	//This code inserts the grade value in the  6scs_grading table
	$query_value=mysql_query("update 6scs_grading set value='0' where subject_id='PHYS'")or die(mysql_error());
	//This code inserts the grade remark in the  6scs_grading table
	$query_remark=mysql_query("update 6scs_grading set remark='Improve' where subject_id='PHYS'")or die(mysql_error());
	//This code updates the grade in the 6scs_grading table
    $queryAward=mysql_query("SELECT award from 6scs_grading where subject_id ='PHYS'")or die(mysql_error());
    $rowAward=mysql_fetch_array($queryAward);
	echo $rowAward['award'];
		//I Assigned new variables to help in updating the s6 table data
	$logic_1=$rowAward['award'];
	$logic_2='('.$rowPhys['grades'].')';
	$TRANS_GRADE= "$logic_1 $logic_2";

	//This code updates the subject grade value in the  s6 table
	$query_trans=mysql_query("update s6 set PHYS='$TRANS_GRADE' where id='$ID'")or die(mysql_error());
	}
	}
	?>"/></td>
     <td align="center">1</td>
    <td align="center"><?php echo $row5['paper_one_mot']; ?></td>
    <td align="center"><?php echo $row5['paper_one_end']; ?></td>    
    <td align="center"><?php 
	 
	if($rowe['Total']=="")
	{
	$queryx1=mysql_query("update 6scs_grading set grades=null,award=null,value=null,remark=null where subject_id='PHYS'")or die(mysql_error());
	}
	elseif($rowe['Total']<= '34' and $rowe['Total']>='1')
	{
	echo'F9';
	$a='9'.',';
	//This code stores the grade in 6scs_grading
	$queryx1=mysql_query("update 6scs_grading set grades='$a' where subject_id='PHYS'")or die(mysql_error());
	
	}
	elseif($rowe['Total']<= '39' and $rowe['Total']>='35')
	{
	echo'P8';
	$b='8'.',';
	//This code stores the grade in 6scs_grading
   $queryx1=mysql_query("update 6scs_grading set grades='$b' where subject_id='PHYS'")or die(mysql_error());
	}
	elseif($rowe['Total']<= '49' and $rowe['Total']>='40')
	{
	echo'P7';
	$c='7'.',';
	//This code stores the grade in 6scs_grading
	$queryx1=mysql_query("update 6scs_grading set grades='$c' where subject_id='PHYS'")or die(mysql_error());
	}
	elseif($rowe['Total']<= '54' and $rowe['Total']>='50')
	{
	echo'C6';
	$d='6'.',';
	//This code stores the grade in 6scs_grading
	$queryx1=mysql_query("update 6scs_grading set grades='$d' where subject_id='PHYS'")or die(mysql_error());
	}
	elseif($rowe['Total']<= '59' and $rowe['Total']>='55')
	{
	echo'C5'; 
	$e='5'.',';
	//This code stores the grade in 6scs_grading
	$queryx1=mysql_query("update 6scs_grading set grades='$e' where subject_id='PHYS'")or die(mysql_error());
	}
	elseif($rowe['Total']<= '64' and $rowe['Total']>='60')
	{
	echo'C4';
	$f='4'.',';
	//This code stores the grade in 6scs_grading
	$queryx1=mysql_query("update 6scs_grading set grades='$f' where subject_id='PHYS'")or die(mysql_error());
	}
	elseif($rowe['Total']<= '74' and $rowe['Total']>='65')
	{
	echo'C3';
	$g='3'.',';
	//This code stores the grade in 6scs_grading
	$queryx1=mysql_query("update 6scs_grading set grades='$g' where subject_id='PHYS'")or die(mysql_error());
	}
	elseif($rowe['Total']<= '79' and $rowe['Total']>='75')
	{
	echo'D2';
	$h='2'.',';
	//This code stores the grade in 6scs_grading
	$queryx1=mysql_query("update 6scs_grading set grades='$h' where subject_id='PHYS'")or die(mysql_error());
	}
	elseif($rowe['Total']<= '100' and $rowe['Total']>='80')
	{
	echo'D1';
	$i='1'.',';
	//This code stores the grade in 6scs_grading
	$queryx1=mysql_query("update 6scs_grading set grades='$i' where subject_id='PHYS'")or die(mysql_error());
	}
	?></td>
      <td align="center" rowspan="3" style="color:#1b5e94;"><?php 
	//This code selects the remark in the 6scs_grading table
    $query_remark=mysql_query("SELECT remark from 6scs_grading where subject_id ='PHYS'")or die(mysql_error());
    $row_remark=mysql_fetch_array($query_remark);
	echo $row_remark['remark'];?>&nbsp;</td>
    <td align="center" rowspan="3"><?php echo $rowZ['PHYS'];?></td>
  </tr>
  <tr bgcolor="#CCCCCC">
    <td align="center">2</td>
    <td align="center"><?php echo $row5['two_paper_mot']; ?></td>
    <td align="center"><?php echo $row5['two_paper_end']; ?></td>
    <td align="center"><?php 
	 if($rowk['Total']=="")
	{
	$queryx2=mysql_query("update 6scs_grading set grades=null,award=null,value=null,remark=null where subject_id='PHYS'")or die(mysql_error());
	}
	elseif($rowk['Total']<= '34' and $rowk['Total']>='1')
	{
	echo'F9';
	$a='9'.',';
	//This code stores the grade in 6scs_grading
	$queryx2=mysql_query("UPDATE 6scs_grading SET grades= concat(grades,'$a') WHERE `6scs_grading`.`subject_id` = 'PHYS'")or die(mysql_error());
	}
	elseif($rowk['Total']<= '39' and $rowk['Total']>='35')
	{
	echo'P8';
	$b='8'.',';
	//This code stores the grade in 6scs_grading
	$queryx2=mysql_query("UPDATE 6scs_grading SET grades= concat(grades,'$b') WHERE `6scs_grading`.`subject_id` = 'PHYS'")or die(mysql_error());
	}
	elseif($rowk['Total']<= '49' and $rowk['Total']>='40')
	{
	echo'P7';
	$c='7'.',';
	//This code stores the grade in 6scs_grading
	$queryx2=mysql_query("UPDATE 6scs_grading SET grades= concat(grades,'$c') WHERE `6scs_grading`.`subject_id` = 'PHYS'")or die(mysql_error());
	}
	elseif($rowk['Total']<= '54' and $rowk['Total']>='50')
	{
	echo'C6';
	$d='6'.',';
	//This code stores the grade in 6scs_grading
	$queryx2=mysql_query("UPDATE 6scs_grading SET grades= concat(grades,'$d') WHERE `6scs_grading`.`subject_id` = 'PHYS'")or die(mysql_error());
	}
	elseif($rowk['Total']<= '59' and $rowk['Total']>='55')
	{
	echo'C5';
	$e='5'.',';
	//This code stores the grade in 6scs_grading
	$queryx2=mysql_query("UPDATE 6scs_grading SET grades= concat(grades,'$e') WHERE `6scs_grading`.`subject_id` = 'PHYS'")or die(mysql_error());
	}
	elseif($rowk['Total']<= '64' and $rowk['Total']>='60')
	{
	echo'C4';
	$f='4'.',';
	//This code stores the grade in 6scs_grading
	$queryx2=mysql_query("UPDATE 6scs_grading SET grades= concat(grades,'$f') WHERE `6scs_grading`.`subject_id` = 'PHYS'")or die(mysql_error());
	}
	elseif($rowk['Total']<= '74' and $rowk['Total']>='65')
	{
	echo'C3';
	$g='3'.',';
	//This code stores the grade in 6scs_grading
	$queryx2=mysql_query("UPDATE 6scs_grading SET grades= concat(grades,'$g') WHERE `6scs_grading`.`subject_id` = 'PHYS'")or die(mysql_error());
	}
	elseif($rowk['Total']<= '79' and $rowk['Total']>='75')
	{
	echo'D2';
	$h='2'.',';
	//This code stores the grade in 6scs_grading
	$queryx2=mysql_query("UPDATE 6scs_grading SET grades= concat(grades,'$h') WHERE `6scs_grading`.`subject_id` = 'PHYS'")or die(mysql_error());
	}
	elseif($rowk['Total']<= '100' and $rowk['Total']>='80')
	{
	echo'D1';
	$i='1'.',';
	//This code stores the grade in 6scs_grading
	$queryx2=mysql_query("UPDATE 6scs_grading SET grades= concat(grades,'$i') WHERE `6scs_grading`.`subject_id` = 'PHYS'")or die(mysql_error());
	}
	?></td>
  </tr>
  <tr bgcolor="#CCCCCC">
    <td align="center">3</td>
    <td align="center"><?php echo $row5['paper_three_mot']; ?></td>
    <td align="center"><?php echo $row5['paper_three_end']; ?></td>
    <td align="center"><?php 
	 if($rowkk['Total']=="")
	{
	$queryx2=mysql_query("update 6scs_grading set grades=null,award=null,value=null,remark=null where subject_id='PHYS'")or die(mysql_error());
	}
	elseif($rowkk['Total']<= '34' and $rowkk['Total']>='1')
	{
	echo'F9';
	$a='9';
	//This code stores the grade in 6scs_grading
	$queryx2=mysql_query("UPDATE 6scs_grading SET grades= concat(grades,'$a') WHERE `6scs_grading`.`subject_id` = 'PHYS'")or die(mysql_error());
	}
	elseif($rowkk['Total']<= '39' and $rowkk['Total']>='35')
	{
	echo'P8';
	$b='8';
	//This code stores the grade in 6scs_grading
	$queryx2=mysql_query("UPDATE 6scs_grading SET grades= concat(grades,'$b') WHERE `6scs_grading`.`subject_id` = 'PHYS'")or die(mysql_error());
	}
	elseif($rowkk['Total']<= '49' and $rowkk['Total']>='40')
	{
	echo'P7';
	$c='7';
	//This code stores the grade in 6scs_grading
	$queryx2=mysql_query("UPDATE 6scs_grading SET grades= concat(grades,'$c') WHERE `6scs_grading`.`subject_id` = 'PHYS'")or die(mysql_error());
	}
	elseif($rowkk['Total']<= '54' and $rowkk['Total']>='50')
	{
	echo'C6';
	$d='6';
	//This code stores the grade in 6scs_grading
	$queryx2=mysql_query("UPDATE 6scs_grading SET grades= concat(grades,'$d') WHERE `6scs_grading`.`subject_id` = 'PHYS'")or die(mysql_error());
	}
	elseif($rowkk['Total']<= '59' and $rowkk['Total']>='55')
	{
	echo'C5';
	$e='5';
	//This code stores the grade in 6scs_grading
	$queryx2=mysql_query("UPDATE 6scs_grading SET grades= concat(grades,'$e') WHERE `6scs_grading`.`subject_id` = 'PHYS'")or die(mysql_error());
	}
	elseif($rowkk['Total']<= '64' and $rowkk['Total']>='60')
	{
	echo'C4';
	$f='4';
	//This code stores the grade in 6scs_grading
	$queryx2=mysql_query("UPDATE 6scs_grading SET grades= concat(grades,'$f') WHERE `6scs_grading`.`subject_id` = 'PHYS'")or die(mysql_error());
	}
	elseif($rowkk['Total']<= '74' and $rowkk['Total']>='65')
	{
	echo'C3';
	$g='3';
	//This code stores the grade in 6scs_grading
	$queryx2=mysql_query("UPDATE 6scs_grading SET grades= concat(grades,'$g') WHERE `6scs_grading`.`subject_id` = 'PHYS'")or die(mysql_error());
	}
	elseif($rowkk['Total']<= '79' and $rowkk['Total']>='75')
	{
	echo'D2';
	$h='2';
	//This code stores the grade in 6scs_grading
	$queryx2=mysql_query("UPDATE 6scs_grading SET grades= concat(grades,'$h') WHERE `6scs_grading`.`subject_id` = 'PHYS'")or die(mysql_error());
	}
	elseif($rowkk['Total']<= '100' and $rowkk['Total']>='80')
	{
	echo'D1';
	$i='1';
	//This code stores the grade in 6scs_grading
	$queryx2=mysql_query("UPDATE 6scs_grading SET grades= concat(grades,'$i') WHERE `6scs_grading`.`subject_id` = 'PHYS'")or die(mysql_error());
	}
	?></td>
  </tr>
   <tr bgcolor="#999999">
    <td rowspan="3">Chemistry</td>
    <td rowspan="3"><input type="text" name="chemistry" size="2px"  style="height:20px;border:groove; font-size:24px;" value="<?php 
	
	//******************************* HERE IS THE MAGIC *******************************************
    //This code perfects the Grading of the student by following the UACE Stands 
	
	if($row4['paper_one_mot']=='')
	{
	$query=mysql_query("update 6scs_grading set grades=null,award=null,value=null,remark=null where subject_id='CHEM'")or die(mysql_error());
	 $query_change=mysql_query("update s6 set CHEM=null where id='$ID'")or die(mysql_error());
	}else{
    $queryCHEM=mysql_query("SELECT grades from 6scs_grading where subject_id ='CHEM'")or die(mysql_error());
    $rowCHEM=mysql_fetch_array($queryCHEM);
	if($rowCHEM['grades']== '1,1,1'||$rowCHEM['grades']== '1,1,2'||$rowCHEM['grades']== '2,1,1'||$rowCHEM['grades']== '1,2,1'||$rowCHEM['grades']== '1,2,2'||$rowCHEM['grades']== '2,1,2'||$rowCHEM['grades']== '2,2,1'||$rowCHEM['grades']== '2,2,2'||$rowCHEM['grades']== '1,3,1'||$rowCHEM['grades']== '1,1,3'||$rowCHEM['grades']== '3,1,1'||$rowCHEM['grades']== '1,2,3'||$rowCHEM['grades']== '3,2,1'||$rowCHEM['grades']== '3,1,2'||$rowCHEM['grades']== '2,3,1'||$rowCHEM['grades']== '1,3,2'||$rowCHEM['grades']== '2,1,3'||$rowCHEM['grades']== '2,3,2'||$rowCHEM['grades']== '3,2,2'||$rowCHEM['grades']== '2,2,3')
	{
	//This code inserts the grade in the  6scs_grading table
	$queryx6=mysql_query("update 6scs_grading set award='A' where subject_id='CHEM'")or die(mysql_error());
	//This code inserts the grade value in the  6scs_grading table
	$query_value=mysql_query("update 6scs_grading set value='6' where subject_id='CHEM'")or die(mysql_error());
	//This code inserts the grade remark in the  6scs_grading table
	$query_remark=mysql_query("update 6scs_grading set remark='Excellent' where subject_id='CHEM'")or die(mysql_error());
	//This code updates the grade in the 6scs_grading table
	$queryAward=mysql_query("SELECT award from 6scs_grading where subject_id ='CHEM'")or die(mysql_error());
    $rowAward=mysql_fetch_array($queryAward);
	echo $rowAward['award'];
	//I Assigned new variables to help in updating the s6 table data
	$logic_1=$rowAward['award'];
	$logic_2='('.$rowCHEM['grades'].')';
	$TRANS_GRADE= "$logic_1 $logic_2";

	//This code updates the subject grade value in the  s6 table
	$query_trans=mysql_query("update s6 set CHEM='$TRANS_GRADE' where id='$ID'")or die(mysql_error());
	}
	elseif($rowCHEM['grades']== '1,3,3'||$rowCHEM['grades']== '3,3,1'||$rowCHEM['grades']== '3,1,3'||$rowCHEM['grades']== '3,3,2'||$rowCHEM['grades']== '2,3,3'||$rowCHEM['grades']== '3,2,3'||$rowCHEM['grades']== '3,3,3'||$rowCHEM['grades']== '1,4,2'||$rowCHEM['grades']== '2,4,1'||$rowCHEM['grades']== '4,1,2'||$rowCHEM['grades']== '4,2,1'||$rowCHEM['grades']== '2,1,4'||$rowCHEM['grades']== '1,4,3'||$rowCHEM['grades']== '1,3,4'||$rowCHEM['grades']== '3,4,1'||$rowCHEM['grades']== '4,1,3'||$rowCHEM['grades']== '3,1,4'||$rowCHEM['grades']== '4,3,1'||$rowCHEM['grades']== '3,4,2'||$rowCHEM['grades']== '2,4,3'||$rowCHEM['grades']== '4,3,2'||$rowCHEM['grades']== '4,2,3'||$rowCHEM['grades']== '2,3,4'||$rowCHEM['grades']== '1,1,4'||$rowCHEM['grades']== '4,1,1'||$rowCHEM['grades']== '1,4,1'||$rowCHEM['grades']== '4,2,2'||$rowCHEM['grades']== '2,2,4'||$rowCHEM['grades']== '2,4,2'||$rowCHEM['grades']== '4,3,3'||$rowCHEM['grades']== '3,3,4'||$rowCHEM['grades']== '3,4,3')
	{
	//This code inserts the grade in the  6scs_grading
	$queryx6=mysql_query("update 6scs_grading set award='B' where subject_id='CHEM'")or die(mysql_error());
	//This code inserts the grade value in the  6scs_grading table
	$query_value=mysql_query("update 6scs_grading set value='5' where subject_id='CHEM'")or die(mysql_error());
	//This code inserts the grade remark in the  6scs_grading table
	$query_remark=mysql_query("update 6scs_grading set remark='Very Good' where subject_id='CHEM'")or die(mysql_error());
	//This code updates the grade in the 6scs_grading table
    $queryAward=mysql_query("SELECT award from 6scs_grading where subject_id ='CHEM'")or die(mysql_error());
    $rowAward=mysql_fetch_array($queryAward);
	echo $rowAward['award'];
		//I Assigned new variables to help in updating the s6 table data
	$logic_1=$rowAward['award'];
	$logic_2='('.$rowCHEM['grades'].')';
	$TRANS_GRADE= "$logic_1 $logic_2";

	//This code updates the subject grade value in the  s6 table
	$query_trans=mysql_query("update s6 set CHEM='$TRANS_GRADE' where id='$ID'")or die(mysql_error());
	}
elseif($rowCHEM['grades']== '1,1,5'||$rowCHEM['grades']== '1,5,1'||$rowCHEM['grades']== '5,1,1'||$rowCHEM['grades']== '1,2,5'||$rowCHEM['grades']== '1,5,2'||$rowCHEM['grades']== '2,1,5'||$rowCHEM['grades']== '2,5,1'||$rowCHEM['grades']== '5,2,1'||$rowCHEM['grades']== '5,1,2'||$rowCHEM['grades']== '1,3,5'||$rowCHEM['grades']== '1,5,3'||$rowCHEM['grades']== '5,3,1'||$rowCHEM['grades']== '5,1,3'||$rowCHEM['grades']== '3,1,5'||$rowCHEM['grades']== '3,5,1'||$rowCHEM['grades']== '1,4,5'||$rowCHEM['grades']== '1,5,4'||$rowCHEM['grades']== '4,5,1'||$rowCHEM['grades']== '4,1,5'||$rowCHEM['grades']== '5,4,1'||$rowCHEM['grades']== '5,1,4'||$rowCHEM['grades']== '2,2,5'||$rowCHEM['grades']== '2,5,2'||$rowCHEM['grades']== '5,2,2'||$rowCHEM['grades']== '2,3,5'||$rowCHEM['grades']== '2,5,3'||$rowCHEM['grades']== '5,2,3'||$rowCHEM['grades']== '5,3,2'||$rowCHEM['grades']== '3,5,2'||$rowCHEM['grades']== '3,2,5'||$rowCHEM['grades']== '2,4,5'||$rowCHEM['grades']== '4,2,5'||$rowCHEM['grades']== '4,5,2'||$rowCHEM['grades']== '5,4,2'||$rowCHEM['grades']== '5,2,4'||$rowCHEM['grades']== '2,5,4'||$rowCHEM['grades']== '3,3,5'||$rowCHEM['grades']== '3,5,3'||$rowCHEM['grades']== '5,3,3'||$rowCHEM['grades']== '3,4,5'||$rowCHEM['grades']== '3,5,4'||$rowCHEM['grades']== '5,3,4'||$rowCHEM['grades']== '5,4,3'||$rowCHEM['grades']== '4,5,3'||$rowCHEM['grades']== '4,3,5'||$rowCHEM['grades']== '4,4,5'||$rowCHEM['grades']== '4,5,4'||$rowCHEM['grades']== '5,4,4'||$rowCHEM['grades']== '4,4,4'||$rowCHEM['grades']== '4,4,1'||$rowCHEM['grades']== '4,1,4'||$rowCHEM['grades']== '1,4,4'||$rowCHEM['grades']== '4,4,2'||$rowCHEM['grades']== '4,2,4'||$rowCHEM['grades']== '2,4,4'||$rowCHEM['grades']== '4,4,3'||$rowCHEM['grades']== '4,3,4'||$rowCHEM['grades']== '3,4,4')
	{
	//This code inserts the grade in the  6scs_grading
	$queryx6=mysql_query("update 6scs_grading set award='C' where subject_id='CHEM'")or die(mysql_error());
	//This code inserts the grade value in the  6scs_grading table
	$query_value=mysql_query("update 6scs_grading set value='4' where subject_id='CHEM'")or die(mysql_error());
	//This code inserts the grade remark in the  6scs_grading table
	$query_remark=mysql_query("update 6scs_grading set remark='Good' where subject_id='CHEM'")or die(mysql_error());
	//This code updates the grade in the 6scs_grading table
    $queryAward=mysql_query("SELECT award from 6scs_grading where subject_id ='CHEM'")or die(mysql_error());
    $rowAward=mysql_fetch_array($queryAward);
	echo $rowAward['award'];
		//I Assigned new variables to help in updating the s6 table data
	$logic_1=$rowAward['award'];
	$logic_2='('.$rowCHEM['grades'].')';
	$TRANS_GRADE= "$logic_1 $logic_2";

	//This code updates the subject grade value in the  s6 table
	$query_trans=mysql_query("update s6 set CHEM='$TRANS_GRADE' where id='$ID'")or die(mysql_error());
	}
elseif($rowCHEM['grades']== '1,1,6'||$rowCHEM['grades']== '1,6,1'||$rowCHEM['grades']== '6,1,1'||$rowCHEM['grades']== '1,2,6'||$rowCHEM['grades']== '1,6,2'||$rowCHEM['grades']== '2,1,6'||$rowCHEM['grades']== '2,6,1'||$rowCHEM['grades']== '6,1,2'||$rowCHEM['grades']== '6,2,1'||$rowCHEM['grades']== '1,3,6'||$rowCHEM['grades']== '1,6,3'||$rowCHEM['grades']== '6,3,1'||$rowCHEM['grades']== '6,1,3'||$rowCHEM['grades']== '3,1,6'||$rowCHEM['grades']== '3,6,1'||$rowCHEM['grades']== '1,4,6'||$rowCHEM['grades']== '1,6,4'||$rowCHEM['grades']== '6,4,1'||$rowCHEM['grades']== '6,1,4'||$rowCHEM['grades']== '4,1,6'||$rowCHEM['grades']== '4,6,1'||$rowCHEM['grades']== '1,5,6'||$rowCHEM['grades']== '1,6,5'||$rowCHEM['grades']== '6,5,1'||$rowCHEM['grades']== '6,1,5'||$rowCHEM['grades']== '5,1,6'||$rowCHEM['grades']== '5,6,1'||$rowCHEM['grades']== '2,2,6'||$rowCHEM['grades']== '2,6,2'||$rowCHEM['grades']== '6,2,2'||$rowCHEM['grades']== '2,3,6'||$rowCHEM['grades']== '2,6,3'||$rowCHEM['grades']== '6,2,3'||$rowCHEM['grades']== '6,3,2'||$rowCHEM['grades']== '3,6,2'||$rowCHEM['grades']== '3,2,6'||$rowCHEM['grades']== '2,4,6'||$rowCHEM['grades']== '2,6,4'||$rowCHEM['grades']== '6,2,4'||$rowCHEM['grades']== '6,4,2'||$rowCHEM['grades']== '4,6,2'||$rowCHEM['grades']== '4,2,6'||$rowCHEM['grades']== '2,5,6'||$rowCHEM['grades']== '2,6,5'||$rowCHEM['grades']== '5,2,6'||$rowCHEM['grades']== '5,6,2'||$rowCHEM['grades']== '6,2,5'||$rowCHEM['grades']== '6,5,2'||$rowCHEM['grades']== '3,3,6'||$rowCHEM['grades']== '3,6,3'||$rowCHEM['grades']== '6,3,3'||$rowCHEM['grades']== '3,4,6'||$rowCHEM['grades']== '3,6,4'||$rowCHEM['grades']== '6,3,4'||$rowCHEM['grades']== '6,4,3'||$rowCHEM['grades']== '4,6,3'||$rowCHEM['grades']== '4,3,6'||$rowCHEM['grades']== '3,5,6'||$rowCHEM['grades']== '3,6,5'||$rowCHEM['grades']== '5,3,6'||$rowCHEM['grades']== '5,6,3'||$rowCHEM['grades']== '6,3,5'||$rowCHEM['grades']== '6,5,3'||$rowCHEM['grades']== '4,4,6'||$rowCHEM['grades']== '4,6,4'||$rowCHEM['grades']== '6,4,4'||$rowCHEM['grades']== '4,5,6'||$rowCHEM['grades']== '4,6,5'||$rowCHEM['grades']== '5,4,6'||$rowCHEM['grades']== '5,6,4'||$rowCHEM['grades']== '6,4,5'||$rowCHEM['grades']== '6,5,4'||$rowCHEM['grades']== '1,5,5'||$rowCHEM['grades']== '5,1,5'||$rowCHEM['grades']== '5,5,1'||$rowCHEM['grades']== '2,5,5'||$rowCHEM['grades']== '5,2,5'||$rowCHEM['grades']== '5,5,2'||$rowCHEM['grades']== '3,5,5'||$rowCHEM['grades']== '5,3,5'||$rowCHEM['grades']== '5,5,3'||$rowCHEM['grades']== '4,5,5'||$rowCHEM['grades']== '5,4,5'||$rowCHEM['grades']== '5,5,4'||$rowCHEM['grades']== '5,5,5'||$rowCHEM['grades']== '6,5,5'||$rowCHEM['grades']== '5,6,5'||$rowCHEM['grades']== '5,5,6')
	{
	//This code inserts the grade in the  6scs_grading
	$queryx6=mysql_query("update 6scs_grading set award='D' where subject_id='CHEM'")or die(mysql_error());
	//This code inserts the grade value in the  6scs_grading table
	$query_value=mysql_query("update 6scs_grading set value='3' where subject_id='CHEM'")or die(mysql_error());
	//This code inserts the grade remark in the  6scs_grading table
	$query_remark=mysql_query("update 6scs_grading set remark='Fairly Good' where subject_id='CHEM'")or die(mysql_error());
	//This code updates the grade in the 6scs_grading table
    $queryAward=mysql_query("SELECT award from 6scs_grading where subject_id ='CHEM'")or die(mysql_error());
    $rowAward=mysql_fetch_array($queryAward);
	echo $rowAward['award'];
		//I Assigned new variables to help in updating the s6 table data
	$logic_1=$rowAward['award'];
	$logic_2='('.$rowCHEM['grades'].')';
	$TRANS_GRADE= "$logic_1 $logic_2";

	//This code updates the subject grade value in the  s6 table
	$query_trans=mysql_query("update s6 set CHEM='$TRANS_GRADE' where id='$ID'")or die(mysql_error());
	}
elseif($rowCHEM['grades']== '1,1,7'||$rowCHEM['grades']== '1,7,1'||$rowCHEM['grades']== '7,1,1'||$rowCHEM['grades']== '1,2,7'||$rowCHEM['grades']== '1,7,2'||$rowCHEM['grades']== '2,7,1'||$rowCHEM['grades']== '2,1,7'||$rowCHEM['grades']== '7,1,2'||$rowCHEM['grades']== '7,2,1'||$rowCHEM['grades']== '1,3,7'||$rowCHEM['grades']== '1,7,3'||$rowCHEM['grades']== '3,7,1'||$rowCHEM['grades']== '3,1,7'||$rowCHEM['grades']== '7,3,1'||$rowCHEM['grades']== '7,1,3'||$rowCHEM['grades']== '1,4,7'||$rowCHEM['grades']== '1,7,4'||$rowCHEM['grades']== '7,1,4'||$rowCHEM['grades']== '7,4,1'||$rowCHEM['grades']== '4,7,1'||$rowCHEM['grades']== '4,1,7'||$rowCHEM['grades']== '1,5,7'||$rowCHEM['grades']== '1,7,5'||$rowCHEM['grades']== '7,1,5'||$rowCHEM['grades']== '7,5,1'||$rowCHEM['grades']== '5,1,7'||$rowCHEM['grades']== '5,7,1'||$rowCHEM['grades']== '1,6,7'||$rowCHEM['grades']== '1,7,6'||$rowCHEM['grades']== '6,7,1'||$rowCHEM['grades']== '6,1,7'||$rowCHEM['grades']== '7,1,6'||$rowCHEM['grades']== '7,6,1'||$rowCHEM['grades']== '2,2,7'||$rowCHEM['grades']== '2,7,2'||$rowCHEM['grades']== '7,2,2'||$rowCHEM['grades']== '2,3,7'||$rowCHEM['grades']== '2,7,3'||$rowCHEM['grades']== '3,2,7'||$rowCHEM['grades']== '3,7,2'||$rowCHEM['grades']== '7,3,2'||$rowCHEM['grades']== '7,2,3'||$rowCHEM['grades']== '2,4,7'||$rowCHEM['grades']== '2,7,4'||$rowCHEM['grades']== '4,2,7'||$rowCHEM['grades']== '4,7,2'||$rowCHEM['grades']== '7,2,4'||$rowCHEM['grades']== '7,4,2'||$rowCHEM['grades']== '2,5,7'||$rowCHEM['grades']== '2,7,5'||$rowCHEM['grades']== '5,7,2'||$rowCHEM['grades']== '5,2,7'||$rowCHEM['grades']== '7,2,5'||$rowCHEM['grades']== '7,5,2'||$rowCHEM['grades']== '2,6,7'||$rowCHEM['grades']== '2,7,6'||$rowCHEM['grades']== '6,7,2'||$rowCHEM['grades']== '6,2,7'||$rowCHEM['grades']== '7,6,2'||$rowCHEM['grades']== '7,2,6'||$rowCHEM['grades']== '3,3,7'||$rowCHEM['grades']== '3,7,3'||$rowCHEM['grades']== '7,3,3'||$rowCHEM['grades']== '3,4,7'||$rowCHEM['grades']== '3,7,4'||$rowCHEM['grades']== '4,3,7'||$rowCHEM['grades']== '4,7,3'||$rowCHEM['grades']== '7,3,4'||$rowCHEM['grades']== '7,4,3'||$rowCHEM['grades']== '3,5,7'||$rowCHEM['grades']== '3,7,5'||$rowCHEM['grades']== '5,3,7'||$rowCHEM['grades']== '5,7,3'||$rowCHEM['grades']== '7,5,3'||$rowCHEM['grades']== '7,3,5'||$rowCHEM['grades']== '3,6,7'||$rowCHEM['grades']== '3,7,6'||$rowCHEM['grades']== '6,3,7'||$rowCHEM['grades']== '6,7,3'||$rowCHEM['grades']== '7,3,6'||$rowCHEM['grades']== '7,6,3'||$rowCHEM['grades']== '4,4,7'||$rowCHEM['grades']== '4,7,4'||$rowCHEM['grades']== '7,4,4'||$rowCHEM['grades']== '4,5,7'||$rowCHEM['grades']== '4,7,5'||$rowCHEM['grades']== '5,7,4'||$rowCHEM['grades']== '5,4,7'||$rowCHEM['grades']== '7,4,5'||$rowCHEM['grades']== '7,5,4'||$rowCHEM['grades']== '4,6,7'||$rowCHEM['grades']== '4,7,6'||$rowCHEM['grades']== '6,7,4'||$rowCHEM['grades']== '6,4,7'||$rowCHEM['grades']== '7,4,6'||$rowCHEM['grades']== '7,6,4'||$rowCHEM['grades']== '5,5,7'||$rowCHEM['grades']== '5,7,5'||$rowCHEM['grades']== '7,5,5'||$rowCHEM['grades']== '5,6,7'||$rowCHEM['grades']== '5,7,6'||$rowCHEM['grades']== '6,5,7'||$rowCHEM['grades']== '6,7,5'||$rowCHEM['grades']== '7,6,5'||$rowCHEM['grades']== '7,5,6'||$rowCHEM['grades']== '6,6,7'||$rowCHEM['grades']== '6,7,6'||$rowCHEM['grades']== '7,6,6'||$rowCHEM['grades']== '1,6,6'||$rowCHEM['grades']== '6,1,6'||$rowCHEM['grades']== '6,6,1'||$rowCHEM['grades']== '2,6,6'||$rowCHEM['grades']== '6,2,6'||$rowCHEM['grades']== '6,6,2'||$rowCHEM['grades']== '3,6,6'||$rowCHEM['grades']== '6,3,6'||$rowCHEM['grades']== '6,6,3'||$rowCHEM['grades']== '4,6,6'||$rowCHEM['grades']== '6,4,6'||$rowCHEM['grades']== '6,6,4'||$rowCHEM['grades']== '5,6,6'||$rowCHEM['grades']== '6,5,6'||$rowCHEM['grades']== '6,6,5'||$rowCHEM['grades']== '6,6,6'||
$rowCHEM['grades']== '1,1,8'||$rowCHEM['grades']== '1,8,1'||$rowCHEM['grades']== '8,1,1'||$rowCHEM['grades']== '1,2,8'||$rowCHEM['grades']== '1,8,2'||$rowCHEM['grades']== '2,8,1'||$rowCHEM['grades']== '2,1,8'||$rowCHEM['grades']== '8,1,2'||$rowCHEM['grades']== '8,2,1'||$rowCHEM['grades']== '1,3,8'||$rowCHEM['grades']== '1,8,3'||$rowCHEM['grades']== '3,8,1'||$rowCHEM['grades']== '3,1,8'||$rowCHEM['grades']== '8,3,1'||$rowCHEM['grades']== '8,1,3'||$rowCHEM['grades']== '1,4,8'||$rowCHEM['grades']== '1,8,4'||$rowCHEM['grades']== '8,1,4'||$rowCHEM['grades']== '8,4,1'||$rowCHEM['grades']== '4,8,1'||$rowCHEM['grades']== '4,1,8'||$rowCHEM['grades']== '1,5,8'||$rowCHEM['grades']== '1,8,5'||$rowCHEM['grades']== '8,1,5'||$rowCHEM['grades']== '8,5,1'||$rowCHEM['grades']== '5,1,8'||$rowCHEM['grades']== '5,8,1'||$rowCHEM['grades']== '1,6,8'||$rowCHEM['grades']== '1,8,6'||$rowCHEM['grades']== '6,8,1'||$rowCHEM['grades']== '6,1,8'||$rowCHEM['grades']== '8,1,6'||$rowCHEM['grades']== '8,6,1'||$rowCHEM['grades']== '2,2,8'||$rowCHEM['grades']== '2,8,2'||$rowCHEM['grades']== '8,2,2'||$rowCHEM['grades']== '2,3,8'||$rowCHEM['grades']== '2,8,3'||$rowCHEM['grades']== '3,2,8'||$rowCHEM['grades']== '3,8,2'||$rowCHEM['grades']== '8,3,2'||$rowCHEM['grades']== '8,2,3'||$rowCHEM['grades']== '2,4,8'||$rowCHEM['grades']== '2,8,4'||$rowCHEM['grades']== '4,2,8'||$rowCHEM['grades']== '4,8,2'||$rowCHEM['grades']== '8,2,4'||$rowCHEM['grades']== '8,4,2'||$rowCHEM['grades']== '2,5,8'||$rowCHEM['grades']== '2,8,5'||$rowCHEM['grades']== '5,8,2'||$rowCHEM['grades']== '5,2,8'||$rowCHEM['grades']== '8,2,5'||$rowCHEM['grades']== '8,5,2'||$rowCHEM['grades']== '2,6,8'||$rowCHEM['grades']== '2,8,6'||$rowCHEM['grades']== '6,8,2'||$rowCHEM['grades']== '6,2,8'||$rowCHEM['grades']== '8,6,2'||$rowCHEM['grades']== '8,2,6'||$rowCHEM['grades']== '3,3,8'||$rowCHEM['grades']== '3,8,3'||$rowCHEM['grades']== '8,3,3'||$rowCHEM['grades']== '3,4,8'||$rowCHEM['grades']== '3,8,4'||$rowCHEM['grades']== '4,3,8'||$rowCHEM['grades']== '4,8,3'||$rowCHEM['grades']== '8,3,4'||$rowCHEM['grades']== '8,4,3'||$rowCHEM['grades']== '3,5,8'||$rowCHEM['grades']== '3,8,5'||$rowCHEM['grades']== '5,3,8'||$rowCHEM['grades']== '5,8,3'||$rowCHEM['grades']== '8,5,3'||$rowCHEM['grades']== '8,3,5'||$rowCHEM['grades']== '3,6,8'||$rowCHEM['grades']== '3,8,6'||$rowCHEM['grades']== '6,3,8'||$rowCHEM['grades']== '6,8,3'||$rowCHEM['grades']== '8,3,6'||$rowCHEM['grades']== '8,6,3'||$rowCHEM['grades']== '4,4,8'||$rowCHEM['grades']== '4,8,4'||$rowCHEM['grades']== '8,4,4'||$rowCHEM['grades']== '4,5,8'||$rowCHEM['grades']== '4,8,5'||$rowCHEM['grades']== '5,8,4'||$rowCHEM['grades']== '5,4,8'||$rowCHEM['grades']== '8,4,5'||$rowCHEM['grades']== '8,5,4'||$rowCHEM['grades']== '4,6,8'||$rowCHEM['grades']== '4,8,6'||$rowCHEM['grades']== '6,8,4'||$rowCHEM['grades']== '6,4,8'||$rowCHEM['grades']== '8,4,6'||$rowCHEM['grades']== '8,6,4'||$rowCHEM['grades']== '5,5,8'||$rowCHEM['grades']== '5,8,5'||$rowCHEM['grades']== '8,5,5'||$rowCHEM['grades']== '5,6,8'||$rowCHEM['grades']== '5,8,6'||$rowCHEM['grades']== '6,5,8'||$rowCHEM['grades']== '6,8,5'||$rowCHEM['grades']== '8,6,5'||$rowCHEM['grades']== '8,5,6'||$rowCHEM['grades']== '6,6,8'||$rowCHEM['grades']== '6,8,6'||$rowCHEM['grades']== '8,6,6')
	{
	//This code inserts the grade in the  6scs_grading
	$queryx6=mysql_query("update 6scs_grading set award='E' where subject_id='CHEM'")or die(mysql_error());
	//This code inserts the grade value in the  6scs_grading table
	$query_value=mysql_query("update 6scs_grading set value='2' where subject_id='CHEM'")or die(mysql_error());
	//This code inserts the grade remark in the  6scs_grading table
	$query_remark=mysql_query("update 6scs_grading set remark='Fair' where subject_id='CHEM'")or die(mysql_error());
	//This code updates the grade in the 6scs_grading table
    $queryAward=mysql_query("SELECT award from 6scs_grading where subject_id ='CHEM'")or die(mysql_error());
    $rowAward=mysql_fetch_array($queryAward);
	echo $rowAward['award'];
		//I Assigned new variables to help in updating the s6 table data
	$logic_1=$rowAward['award'];
	$logic_2='('.$rowCHEM['grades'].')';
	$TRANS_GRADE= "$logic_1 $logic_2";

	//This code updates the subject grade value in the  s6 table
	$query_trans=mysql_query("update s6 set CHEM='$TRANS_GRADE' where id='$ID'")or die(mysql_error());
	}
elseif($rowCHEM['grades']== '1,7,7'||$rowCHEM['grades']== '7,1,7'||$rowCHEM['grades']== '7,7,1'||$rowCHEM['grades']== '2,7,7'||$rowCHEM['grades']== '7,2,7'||$rowCHEM['grades']== '7,7,2'||$rowCHEM['grades']== '3,7,7'||$rowCHEM['grades']== '7,3,7'||$rowCHEM['grades']== '7,7,3'||$rowCHEM['grades']== '4,7,7'||$rowCHEM['grades']== '7,4,7'||$rowCHEM['grades']== '7,7,4'||$rowCHEM['grades']== '5,7,7'||$rowCHEM['grades']== '7,5,7'||$rowCHEM['grades']== '7,7,5'||$rowCHEM['grades']== '6,7,7'||$rowCHEM['grades']== '7,6,7'||$rowCHEM['grades']== '7,7,6'||$rowCHEM['grades']== '1,8,8'||$rowCHEM['grades']== '8,1,8'||$rowCHEM['grades']== '8,8,1'||$rowCHEM['grades']== '2,8,8'||$rowCHEM['grades']== '8,2,8'||$rowCHEM['grades']== '8,8,2'||$rowCHEM['grades']== '3,8,8'||$rowCHEM['grades']== '8,3,8'||$rowCHEM['grades']== '8,8,3'||$rowCHEM['grades']== '4,8,8'||$rowCHEM['grades']== '8,4,8'||$rowCHEM['grades']== '8,8,4'||$rowCHEM['grades']== '5,8,8'||$rowCHEM['grades']== '8,5,8'||$rowCHEM['grades']== '8,8,5'||$rowCHEM['grades']== '6,8,8'||$rowCHEM['grades']== '8,6,8'||$rowCHEM['grades']== '8,8,6'||$rowCHEM['grades']== '1,7,8'||$rowCHEM['grades']== '1,8,7'||$rowCHEM['grades']== '7,8,1'||$rowCHEM['grades']== '7,1,8'||$rowCHEM['grades']== '8,1,7'||$rowCHEM['grades']== '8,7,1'||$rowCHEM['grades']== '2,7,8'||$rowCHEM['grades']== '2,8,7'||$rowCHEM['grades']== '7,8,2'||$rowCHEM['grades']== '7,2,8'||$rowCHEM['grades']== '8,2,7'||$rowCHEM['grades']== '8,7,2'||$rowCHEM['grades']== '3,7,8'||$rowCHEM['grades']== '3,8,7'||$rowCHEM['grades']== '7,8,3'||$rowCHEM['grades']== '7,3,8'||$rowCHEM['grades']== '8,3,7'||$rowCHEM['grades']== '8,7,3'||$rowCHEM['grades']== '4,7,8'||$rowCHEM['grades']== '4,8,7'||$rowCHEM['grades']== '7,8,4'||$rowCHEM['grades']== '7,4,8'||$rowCHEM['grades']== '8,4,7'||$rowCHEM['grades']== '8,7,4'||$rowCHEM['grades']== '5,7,8'||$rowCHEM['grades']== '5,8,7'||$rowCHEM['grades']== '7,8,5'||$rowCHEM['grades']== '7,5,8'||$rowCHEM['grades']== '8,5,7'||$rowCHEM['grades']== '8,7,5'||$rowCHEM['grades']== '6,7,8'||$rowCHEM['grades']== '6,8,7'||$rowCHEM['grades']== '7,8,6'||$rowCHEM['grades']== '7,6,8'||$rowCHEM['grades']== '8,6,7'||$rowCHEM['grades']== '8,7,6'||$rowCHEM['grades']== '1,1,9'||$rowCHEM['grades']== '1,9,1'||$rowCHEM['grades']== '9,1,1'||$rowCHEM['grades']== '1,2,9'||$rowCHEM['grades']== '1,9,2'||$rowCHEM['grades']== '9,1,2'||$rowCHEM['grades']== '9,2,1'||$rowCHEM['grades']== '2,9,1'||$rowCHEM['grades']== '2,1,9'||$rowCHEM['grades']== '1,3,9'||$rowCHEM['grades']== '1,9,3'||$rowCHEM['grades']== '3,1,9'||$rowCHEM['grades']== '3,9,1'||$rowCHEM['grades']== '9,3,1'||$rowCHEM['grades']== '9,1,3'||$rowCHEM['grades']== '1,4,9'||$rowCHEM['grades']== '1,9,4'||$rowCHEM['grades']== '4,1,9'||$rowCHEM['grades']== '4,9,1'||$rowCHEM['grades']== '9,4,1'||$rowCHEM['grades']== '9,1,4'||$rowCHEM['grades']== '1,5,9'||$rowCHEM['grades']== '1,9,5'||$rowCHEM['grades']== '5,1,9'||$rowCHEM['grades']== '5,9,1'||$rowCHEM['grades']== '9,5,1'||$rowCHEM['grades']== '9,1,5'||$rowCHEM['grades']== '1,6,9'||$rowCHEM['grades']== '1,9,6'||$rowCHEM['grades']== '6,1,9'||$rowCHEM['grades']== '6,9,1'||$rowCHEM['grades']== '9,6,1'||$rowCHEM['grades']== '9,1,6'||$rowCHEM['grades']== '2,2,9'||$rowCHEM['grades']== '2,9,2'||$rowCHEM['grades']== '9,2,2'||$rowCHEM['grades']== '2,3,9'||$rowCHEM['grades']== '2,9,3'||$rowCHEM['grades']== '3,2,9'||$rowCHEM['grades']== '3,9,2'||$rowCHEM['grades']== '9,3,2'||$rowCHEM['grades']== '9,2,3'||$rowCHEM['grades']== '2,4,9'||$rowCHEM['grades']== '2,9,4'||$rowCHEM['grades']== '4,2,9'||$rowCHEM['grades']== '4,9,2'||$rowCHEM['grades']== '9,4,2'||$rowCHEM['grades']== '9,2,4'||$rowCHEM['grades']== '2,5,9'||$rowCHEM['grades']== '2,9,5'||$rowCHEM['grades']== '5,2,9'||$rowCHEM['grades']== '5,9,2'||$rowCHEM['grades']== '9,5,2'||$rowCHEM['grades']== '9,2,5'||$rowCHEM['grades']== '2,6,9'||$rowCHEM['grades']== '2,9,6'||$rowCHEM['grades']== '6,2,9'||$rowCHEM['grades']== '6,9,2'||$rowCHEM['grades']== '9,6,2'||$rowCHEM['grades']== '9,2,6'||$rowCHEM['grades']== '3,3,9'||$rowCHEM['grades']== '3,9,3'||$rowCHEM['grades']== '9,3,3'||$rowCHEM['grades']== '3,4,9'||$rowCHEM['grades']== '3,9,4'||$rowCHEM['grades']== '9,3,4'||$rowCHEM['grades']== '9,4,3'||$rowCHEM['grades']== '4,3,9'||$rowCHEM['grades']== '4,9,3'||$rowCHEM['grades']== '3,5,9'||$rowCHEM['grades']== '3,9,5'||$rowCHEM['grades']== '9,3,5'||$rowCHEM['grades']== '9,5,3'||$rowCHEM['grades']== '5,3,9'||$rowCHEM['grades']== '5,9,3'||$rowCHEM['grades']== '3,6,9'||$rowCHEM['grades']== '3,9,6'||$rowCHEM['grades']== '9,3,6'||$rowCHEM['grades']== '9,6,3'||$rowCHEM['grades']== '6,3,9'||$rowCHEM['grades']== '6,9,3'||$rowCHEM['grades']== '4,4,9'||$rowCHEM['grades']== '4,9,4'||$rowCHEM['grades']== '9,4,4'||$rowCHEM['grades']== '4,5,9'||$rowCHEM['grades']== '4,9,5'||$rowCHEM['grades']== '9,4,5'||$rowCHEM['grades']== '9,5,4'||$rowCHEM['grades']== '5,4,9'||$rowCHEM['grades']== '5,9,4'||$rowCHEM['grades']== '4,6,9'||$rowCHEM['grades']== '4,9,6'||$rowCHEM['grades']== '9,4,6'||$rowCHEM['grades']== '9,6,4'||$rowCHEM['grades']== '6,4,9'||$rowCHEM['grades']== '6,9,4'||$rowCHEM['grades']== '5,5,9'||$rowCHEM['grades']== '5,9,5'||$rowCHEM['grades']== '9,5,5'||$rowCHEM['grades']== '5,6,9'||$rowCHEM['grades']== '5,9,6'||$rowCHEM['grades']== '6,5,9'||$rowCHEM['grades']== '6,9,5'||$rowCHEM['grades']== '9,6,5'||$rowCHEM['grades']== '9,5,6'||$rowCHEM['grades']== '6,6,9'||$rowCHEM['grades']== '6,9,6'||$rowCHEM['grades']== '9,6,6')
	{
	//This code inserts the grade in the  6scs_grading
	$queryx6=mysql_query("update 6scs_grading set award='O' where subject_id='CHEM'")or die(mysql_error());
	//This code inserts the grade value in the  6scs_grading table
	$query_value=mysql_query("update 6scs_grading set value='1' where subject_id='CHEM'")or die(mysql_error());
	//This code inserts the grade remark in the  6scs_grading table
	$query_remark=mysql_query("update 6scs_grading set remark='Improve' where subject_id='CHEM'")or die(mysql_error());
	//This code updates the grade in the 6scs_grading table
    $queryAward=mysql_query("SELECT award from 6scs_grading where subject_id ='CHEM'")or die(mysql_error());
    $rowAward=mysql_fetch_array($queryAward);
	echo $rowAward['award'];
		//I Assigned new variables to help in updating the s6 table data
	$logic_1=$rowAward['award'];
	$logic_2='('.$rowCHEM['grades'].')';
	$TRANS_GRADE= "$logic_1 $logic_2";

	//This code updates the subject grade value in the  s6 table
	$query_trans=mysql_query("update s6 set CHEM='$TRANS_GRADE' where id='$ID'")or die(mysql_error());
	}
elseif($rowCHEM['grades']== '9,8,8'||$rowCHEM['grades']== '8,8,9'||$rowCHEM['grades']== '8,9,8'||$rowCHEM['grades']== '9,9,9'||$rowCHEM['grades']== '9,7,7'||$rowCHEM['grades']== '7,7,9'||$rowCHEM['grades']== '7,9,7'||$rowCHEM['grades']== '9,9,9'||$rowCHEM['grades']== '1,9,9'||$rowCHEM['grades']== '9,1,9'||$rowCHEM['grades']== '9,9,1'||$rowCHEM['grades']== '2,9,9'||$rowCHEM['grades']== '9,2,9'||$rowCHEM['grades']== '9,9,2'||$rowCHEM['grades']== '3,9,9'||$rowCHEM['grades']== '9,3,9'||$rowCHEM['grades']== '9,9,3'||$rowCHEM['grades']== '4,9,9'||$rowCHEM['grades']== '9,4,9'||$rowCHEM['grades']== '9,9,4'||$rowCHEM['grades']== '5,9,9'||$rowCHEM['grades']== '9,5,9'||$rowCHEM['grades']== '9,9,5'||$rowCHEM['grades']== '6,9,9'||$rowCHEM['grades']== '9,6,9'||$rowCHEM['grades']== '9,9,6')
	{
	//This code inserts the grade in the  6scs_grading
	$queryx6=mysql_query("update 6scs_grading set award='F' where subject_id='CHEM'")or die(mysql_error());
	//This code inserts the grade value in the  6scs_grading table
	$query_value=mysql_query("update 6scs_grading set value='0' where subject_id='CHEM'")or die(mysql_error());
	//This code inserts the grade remark in the  6scs_grading table
	$query_remark=mysql_query("update 6scs_grading set remark='Improve' where subject_id='CHEM'")or die(mysql_error());
	//This code updates the grade in the 6scs_grading table
    $queryAward=mysql_query("SELECT award from 6scs_grading where subject_id ='CHEM'")or die(mysql_error());
    $rowAward=mysql_fetch_array($queryAward);
	echo $rowAward['award'];
		//I Assigned new variables to help in updating the s6 table data
	$logic_1=$rowAward['award'];
	$logic_2='('.$rowCHEM['grades'].')';
	$TRANS_GRADE= "$logic_1 $logic_2";

	//This code updates the subject grade value in the  s6 table
	$query_trans=mysql_query("update s6 set CHEM='$TRANS_GRADE' where id='$ID'")or die(mysql_error());
	}}
	?>"/></td>
    <td align="center">1</td>
    <td align="center"><?php echo $row4['paper_one_mot']; ?></td>
    <td align="center"><?php echo $row4['paper_one_end']; ?></td>
    <td align="center"><?php 
	 
	if($rowd['Total']=="")
	{
	$queryx1=mysql_query("update 6scs_grading set grades=null,award=null,value=null,remark=null where subject_id='CHEM'")or die(mysql_error());
	}
	elseif($rowd['Total']<= '34' and $rowd['Total']>='1')
	{
	echo'F9';
	$a='9'.',';
	//This code stores the grade in 6scs_grading
	$queryx1=mysql_query("update 6scs_grading set grades='$a' where subject_id='CHEM'")or die(mysql_error());
	
	}
	elseif($rowd['Total']<= '39' and $rowd['Total']>='35')
	{
	echo'P8';
	$b='8'.',';
	//This code stores the grade in 6scs_grading
   $queryx1=mysql_query("update 6scs_grading set grades='$b' where subject_id='CHEM'")or die(mysql_error());
	}
	elseif($rowd['Total']<= '49' and $rowd['Total']>='40')
	{
	echo'P7';
	$c='7'.',';
	//This code stores the grade in 6scs_grading
	$queryx1=mysql_query("update 6scs_grading set grades='$c' where subject_id='CHEM'")or die(mysql_error());
	}
	elseif($rowd['Total']<= '54' and $rowd['Total']>='50')
	{
	echo'C6';
	$d='6'.',';
	//This code stores the grade in 6scs_grading
	$queryx1=mysql_query("update 6scs_grading set grades='$d' where subject_id='CHEM'")or die(mysql_error());
	}
	elseif($rowd['Total']<= '59' and $rowd['Total']>='55')
	{
	echo'C5'; 
	$e='5'.',';
	//This code stores the grade in 6scs_grading
	$queryx1=mysql_query("update 6scs_grading set grades='$e' where subject_id='CHEM'")or die(mysql_error());
	}
	elseif($rowd['Total']<= '64' and $rowd['Total']>='60')
	{
	echo'C4';
	$f='4'.',';
	//This code stores the grade in 6scs_grading
	$queryx1=mysql_query("update 6scs_grading set grades='$f' where subject_id='CHEM'")or die(mysql_error());
	}
	elseif($rowd['Total']<= '74' and $rowd['Total']>='65')
	{
	echo'C3';
	$g='3'.',';
	//This code stores the grade in 6scs_grading
	$queryx1=mysql_query("update 6scs_grading set grades='$g' where subject_id='CHEM'")or die(mysql_error());
	}
	elseif($rowd['Total']<= '79' and $rowd['Total']>='75')
	{
	echo'D2';
	$h='2'.',';
	//This code stores the grade in 6scs_grading
	$queryx1=mysql_query("update 6scs_grading set grades='$h' where subject_id='CHEM'")or die(mysql_error());
	}
	elseif($rowd['Total']<= '100' and $rowd['Total']>='80')
	{
	echo'D1';
	$i='1'.',';
	//This code stores the grade in 6scs_grading
	$queryx1=mysql_query("update 6scs_grading set grades='$i' where subject_id='CHEM'")or die(mysql_error());
	}
	?></td>
    <td align="center" rowspan="3" style="color:#1b5e94;"><?php 
	//This code selects the remark in the 6scs_grading table
    $query_remark=mysql_query("SELECT remark from 6scs_grading where subject_id ='CHEM'")or die(mysql_error());
    $row_remark=mysql_fetch_array($query_remark);
	echo $row_remark['remark'];?></td>
    <td align="center" rowspan="3"><?php echo $rowZ['CHEM'];?></td>
  </tr>
    <tr bgcolor="#999999">
    <td align="center">2</td>
    <td align="center"><?php echo $row4['two_paper_mot']; ?></td>
    <td align="center"><?php echo $row4['two_paper_end']; ?></td>
    <td align="center"><?php 
	 if($rowj['Total']=="")
	{
	$queryx2=mysql_query("update 6scs_grading set grades=null,award=null,value=null,remark=null where subject_id='CHEM'")or die(mysql_error());
	}
	elseif($rowj['Total']<= '34' and $rowj['Total']>='1')
	{
	echo'F9';
	$a='9'.',';
	//This code stores the grade in 6scs_grading
	$queryx2=mysql_query("UPDATE 6scs_grading SET grades= concat(grades,'$a') WHERE `6scs_grading`.`subject_id` = 'CHEM'")or die(mysql_error());
	}
	elseif($rowj['Total']<= '39' and $rowj['Total']>='35')
	{
	echo'P8';
	$b='8'.',';
	//This code stores the grade in 6scs_grading
	$queryx2=mysql_query("UPDATE 6scs_grading SET grades= concat(grades,'$b') WHERE `6scs_grading`.`subject_id` = 'CHEM'")or die(mysql_error());
	}
	elseif($rowj['Total']<= '49' and $rowj['Total']>='40')
	{
	echo'P7';
	$c='7'.',';
	//This code stores the grade in 6scs_grading
	$queryx2=mysql_query("UPDATE 6scs_grading SET grades= concat(grades,'$c') WHERE `6scs_grading`.`subject_id` = 'CHEM'")or die(mysql_error());
	}
	elseif($rowj['Total']<= '54' and $rowj['Total']>='50')
	{
	echo'C6';
	$d='6'.',';
	//This code stores the grade in 6scs_grading
	$queryx2=mysql_query("UPDATE 6scs_grading SET grades= concat(grades,'$d') WHERE `6scs_grading`.`subject_id` = 'CHEM'")or die(mysql_error());
	}
	elseif($rowj['Total']<= '59' and $rowj['Total']>='55')
	{
	echo'C5';
	$e='5'.',';
	//This code stores the grade in 6scs_grading
	$queryx2=mysql_query("UPDATE 6scs_grading SET grades= concat(grades,'$e') WHERE `6scs_grading`.`subject_id` = 'CHEM'")or die(mysql_error());
	}
	elseif($rowj['Total']<= '64' and $rowj['Total']>='60')
	{
	echo'C4';
	$f='4'.',';
	//This code stores the grade in 6scs_grading
	$queryx2=mysql_query("UPDATE 6scs_grading SET grades= concat(grades,'$f') WHERE `6scs_grading`.`subject_id` = 'CHEM'")or die(mysql_error());
	}
	elseif($rowj['Total']<= '74' and $rowj['Total']>='65')
	{
	echo'C3';
	$g='3'.',';
	//This code stores the grade in 6scs_grading
	$queryx2=mysql_query("UPDATE 6scs_grading SET grades= concat(grades,'$g') WHERE `6scs_grading`.`subject_id` = 'CHEM'")or die(mysql_error());
	}
	elseif($rowj['Total']<= '79' and $rowj['Total']>='75')
	{
	echo'D2';
	$h='2'.',';
	//This code stores the grade in 6scs_grading
	$queryx2=mysql_query("UPDATE 6scs_grading SET grades= concat(grades,'$h') WHERE `6scs_grading`.`subject_id` = 'CHEM'")or die(mysql_error());
	}
	elseif($rowj['Total']<= '100' and $rowj['Total']>='80')
	{
	echo'D1';
	$i='1'.',';
	//This code stores the grade in 6scs_grading
	$queryx2=mysql_query("UPDATE 6scs_grading SET grades= concat(grades,'$i') WHERE `6scs_grading`.`subject_id` = 'CHEM'")or die(mysql_error());
	}
	?></td>
  </tr>
  <tr bgcolor="#999999">
    <td align="center">3</td>
    <td align="center"><?php echo $row4['paper_three_mot']; ?></td>
    <td align="center"><?php echo $row4['paper_three_end']; ?></td>
    <td align="center"><?php 
	 if($rowjj['Total']=="")
	{
	$queryx2=mysql_query("update 6scs_grading set grades=null,award=null,value=null,remark=null where subject_id='CHEM'")or die(mysql_error());
	}
	elseif($rowjj['Total']<= '34' and $rowjj['Total']>='1')
	{
	echo'F9';
	$a='9';
	//This code stores the grade in 6scs_grading
	$queryx2=mysql_query("UPDATE 6scs_grading SET grades= concat(grades,'$a') WHERE `6scs_grading`.`subject_id` = 'CHEM'")or die(mysql_error());
	}
	elseif($rowjj['Total']<= '39' and $rowjj['Total']>='35')
	{
	echo'P8';
	$b='8';
	//This code stores the grade in 6scs_grading
	$queryx2=mysql_query("UPDATE 6scs_grading SET grades= concat(grades,'$b') WHERE `6scs_grading`.`subject_id` = 'CHEM'")or die(mysql_error());
	}
	elseif($rowjj['Total']<= '49' and $rowjj['Total']>='40')
	{
	echo'P7';
	$c='7';
	//This code stores the grade in 6scs_grading
	$queryx2=mysql_query("UPDATE 6scs_grading SET grades= concat(grades,'$c') WHERE `6scs_grading`.`subject_id` = 'CHEM'")or die(mysql_error());
	}
	elseif($rowjj['Total']<= '54' and $rowjj['Total']>='50')
	{
	echo'C6';
	$d='6';
	//This code stores the grade in 6scs_grading
	$queryx2=mysql_query("UPDATE 6scs_grading SET grades= concat(grades,'$d') WHERE `6scs_grading`.`subject_id` = 'CHEM'")or die(mysql_error());
	}
	elseif($rowjj['Total']<= '59' and $rowjj['Total']>='55')
	{
	echo'C5';
	$e='5';
	//This code stores the grade in 6scs_grading
	$queryx2=mysql_query("UPDATE 6scs_grading SET grades= concat(grades,'$e') WHERE `6scs_grading`.`subject_id` = 'CHEM'")or die(mysql_error());
	}
	elseif($rowjj['Total']<= '64' and $rowjj['Total']>='60')
	{
	echo'C4';
	$f='4';
	//This code stores the grade in 6scs_grading
	$queryx2=mysql_query("UPDATE 6scs_grading SET grades= concat(grades,'$f') WHERE `6scs_grading`.`subject_id` = 'CHEM'")or die(mysql_error());
	}
	elseif($rowjj['Total']<= '74' and $rowjj['Total']>='65')
	{
	echo'C3';
	$g='3';
	//This code stores the grade in 6scs_grading
	$queryx2=mysql_query("UPDATE 6scs_grading SET grades= concat(grades,'$g') WHERE `6scs_grading`.`subject_id` = 'CHEM'")or die(mysql_error());
	}
	elseif($rowjj['Total']<= '79' and $rowjj['Total']>='75')
	{
	echo'D2';
	$h='2';
	//This code stores the grade in 6scs_grading
	$queryx2=mysql_query("UPDATE 6scs_grading SET grades= concat(grades,'$h') WHERE `6scs_grading`.`subject_id` = 'CHEM'")or die(mysql_error());
	}
	elseif($rowjj['Total']<= '100' and $rowjj['Total']>='80')
	{
	echo'D1';
	$i='1';
	//This code stores the grade in 6scs_grading
	$queryx2=mysql_query("UPDATE 6scs_grading SET grades= concat(grades,'$i') WHERE `6scs_grading`.`subject_id` = 'CHEM'")or die(mysql_error());
	}
	?></td>
  </tr>
  <tr bgcolor="#CCCCCC">
    <td rowspan="3">Biology</td>
    <td rowspan="3">
	<input type="text" name="biology" size="2px"  style="height:20px;border:groove; font-size:24px;" value="<?php 
	
	//******************************* HERE IS THE MAGIC *******************************************
    //This code perfects the Grading of the student by following the UACE Stands 
	if($row3['paper_one_mot']=='')
	{
	$query=mysql_query("update 6scs_grading set grades=null,award=null,value=null,remark=null where subject_id='BIO'")or die(mysql_error());
	 $query_change=mysql_query("update s6 set BIO=null where id='$ID'")or die(mysql_error());
	}else{
	
    $queryBIO=mysql_query("SELECT grades from 6scs_grading where subject_id ='BIO'")or die(mysql_error());
    $rowBIO=mysql_fetch_array($queryBIO);
	if($rowBIO['grades']== '1,1,1'||$rowBIO['grades']== '1,1,2'||$rowBIO['grades']== '2,1,1'||$rowBIO['grades']== '1,2,1'||$rowBIO['grades']== '1,2,2'||$rowBIO['grades']== '2,1,2'||$rowBIO['grades']== '2,2,1'||$rowBIO['grades']== '2,2,2'||$rowBIO['grades']== '1,3,1'||$rowBIO['grades']== '1,1,3'||$rowBIO['grades']== '3,1,1'||$rowBIO['grades']== '1,2,3'||$rowBIO['grades']== '3,2,1'||$rowBIO['grades']== '3,1,2'||$rowBIO['grades']== '2,3,1'||$rowBIO['grades']== '1,3,2'||$rowBIO['grades']== '2,1,3'||$rowBIO['grades']== '2,3,2'||$rowBIO['grades']== '3,2,2'||$rowBIO['grades']== '2,2,3')
	{
	//This code inserts the grade in the  6scs_grading table
	$queryx5=mysql_query("update 6scs_grading set award='A' where subject_id='BIO'")or die(mysql_error());
	//This code inserts the grade value in the  6scs_grading table
	$query_value=mysql_query("update 6scs_grading set value='6' where subject_id='BIO'")or die(mysql_error());
	//This code inserts the grade remark in the  6scs_grading table
	$query_remark=mysql_query("update 6scs_grading set remark='Excellent' where subject_id='BIO'")or die(mysql_error());
	//This code updates the grade in the 6scs_grading table
	$queryAward=mysql_query("SELECT award from 6scs_grading where subject_id ='BIO'")or die(mysql_error());
    $rowAward=mysql_fetch_array($queryAward);
	echo $rowAward['award'];
	//I Assigned new variables to help in updating the s6 table data
	$logic_1=$rowAward['award'];
	$logic_2='('.$rowBIO['grades'].')';
	$TRANS_GRADE= "$logic_1 $logic_2";

	//This code updates the subject grade value in the  s6 table
	$query_trans=mysql_query("update s6 set BIO='$TRANS_GRADE' where id='$ID'")or die(mysql_error());
	}
	elseif($rowBIO['grades']== '1,3,3'||$rowBIO['grades']== '3,3,1'||$rowBIO['grades']== '3,1,3'||$rowBIO['grades']== '3,3,2'||$rowBIO['grades']== '2,3,3'||$rowBIO['grades']== '3,2,3'||$rowBIO['grades']== '3,3,3'||$rowBIO['grades']== '1,4,2'||$rowBIO['grades']== '2,4,1'||$rowBIO['grades']== '4,1,2'||$rowBIO['grades']== '4,2,1'||$rowBIO['grades']== '2,1,4'||$rowBIO['grades']== '1,4,3'||$rowBIO['grades']== '1,3,4'||$rowBIO['grades']== '3,4,1'||$rowBIO['grades']== '4,1,3'||$rowBIO['grades']== '3,1,4'||$rowBIO['grades']== '4,3,1'||$rowBIO['grades']== '3,4,2'||$rowBIO['grades']== '2,4,3'||$rowBIO['grades']== '4,3,2'||$rowBIO['grades']== '4,2,3'||$rowBIO['grades']== '2,3,4'||$rowBIO['grades']== '1,1,4'||$rowBIO['grades']== '4,1,1'||$rowBIO['grades']== '1,4,1'||$rowBIO['grades']== '4,2,2'||$rowBIO['grades']== '2,2,4'||$rowBIO['grades']== '2,4,2'||$rowBIO['grades']== '4,3,3'||$rowBIO['grades']== '3,3,4'||$rowBIO['grades']== '3,4,3')
	{
	//This code inserts the grade in the  6scs_grading
	$queryx5=mysql_query("update 6scs_grading set award='B' where subject_id='BIO'")or die(mysql_error());
	//This code inserts the grade value in the  6scs_grading table
	$query_value=mysql_query("update 6scs_grading set value='5' where subject_id='BIO'")or die(mysql_error());
	//This code inserts the grade remark in the  6scs_grading table
	$query_remark=mysql_query("update 6scs_grading set remark='Very Good' where subject_id='BIO'")or die(mysql_error());
	//This code updates the grade in the 6scs_grading table
    $queryAward=mysql_query("SELECT award from 6scs_grading where subject_id ='BIO'")or die(mysql_error());
    $rowAward=mysql_fetch_array($queryAward);
	echo $rowAward['award'];
	//I Assigned new variables to help in updating the s6 table data
	$logic_1=$rowAward['award'];
	$logic_2='('.$rowBIO['grades'].')';
	$TRANS_GRADE= "$logic_1 $logic_2";

	//This code updates the subject grade value in the  s6 table
	$query_trans=mysql_query("update s6 set BIO='$TRANS_GRADE' where id='$ID'")or die(mysql_error());
	}
elseif($rowBIO['grades']== '1,1,5'||$rowBIO['grades']== '1,5,1'||$rowBIO['grades']== '5,1,1'||$rowBIO['grades']== '1,2,5'||$rowBIO['grades']== '1,5,2'||$rowBIO['grades']== '2,1,5'||$rowBIO['grades']== '2,5,1'||$rowBIO['grades']== '5,2,1'||$rowBIO['grades']== '5,1,2'||$rowBIO['grades']== '1,3,5'||$rowBIO['grades']== '1,5,3'||$rowBIO['grades']== '5,3,1'||$rowBIO['grades']== '5,1,3'||$rowBIO['grades']== '3,1,5'||$rowBIO['grades']== '3,5,1'||$rowBIO['grades']== '1,4,5'||$rowBIO['grades']== '1,5,4'||$rowBIO['grades']== '4,5,1'||$rowBIO['grades']== '4,1,5'||$rowBIO['grades']== '5,4,1'||$rowBIO['grades']== '5,1,4'||$rowBIO['grades']== '2,2,5'||$rowBIO['grades']== '2,5,2'||$rowBIO['grades']== '5,2,2'||$rowBIO['grades']== '2,3,5'||$rowBIO['grades']== '2,5,3'||$rowBIO['grades']== '5,2,3'||$rowBIO['grades']== '5,3,2'||$rowBIO['grades']== '3,5,2'||$rowBIO['grades']== '3,2,5'||$rowBIO['grades']== '2,4,5'||$rowBIO['grades']== '4,2,5'||$rowBIO['grades']== '4,5,2'||$rowBIO['grades']== '5,4,2'||$rowBIO['grades']== '5,2,4'||$rowBIO['grades']== '2,5,4'||$rowBIO['grades']== '3,3,5'||$rowBIO['grades']== '3,5,3'||$rowBIO['grades']== '5,3,3'||$rowBIO['grades']== '3,4,5'||$rowBIO['grades']== '3,5,4'||$rowBIO['grades']== '5,3,4'||$rowBIO['grades']== '5,4,3'||$rowBIO['grades']== '4,5,3'||$rowBIO['grades']== '4,3,5'||$rowBIO['grades']== '4,4,5'||$rowBIO['grades']== '4,5,4'||$rowBIO['grades']== '5,4,4'||$rowBIO['grades']== '4,4,4'||$rowBIO['grades']== '4,4,1'||$rowBIO['grades']== '4,1,4'||$rowBIO['grades']== '1,4,4'||$rowBIO['grades']== '4,4,2'||$rowBIO['grades']== '4,2,4'||$rowBIO['grades']== '2,4,4'||$rowBIO['grades']== '4,4,3'||$rowBIO['grades']== '4,3,4'||$rowBIO['grades']== '3,4,4')
	{
	//This code inserts the grade in the  6scs_grading
	$queryx5=mysql_query("update 6scs_grading set award='C' where subject_id='BIO'")or die(mysql_error());
	//This code inserts the grade value in the  6scs_grading table
	$query_value=mysql_query("update 6scs_grading set value='4' where subject_id='BIO'")or die(mysql_error());
	//This code inserts the grade remark in the  6scs_grading table
	$query_remark=mysql_query("update 6scs_grading set remark='Good' where subject_id='BIO'")or die(mysql_error());
	//This code updates the grade in the 6scs_grading table
    $queryAward=mysql_query("SELECT award from 6scs_grading where subject_id ='BIO'")or die(mysql_error());
    $rowAward=mysql_fetch_array($queryAward);
	echo $rowAward['award'];
	//I Assigned new variables to help in updating the s6 table data
	$logic_1=$rowAward['award'];
	$logic_2='('.$rowBIO['grades'].')';
	$TRANS_GRADE= "$logic_1 $logic_2";

	//This code updates the subject grade value in the  s6 table
	$query_trans=mysql_query("update s6 set BIO='$TRANS_GRADE' where id='$ID'")or die(mysql_error());
	}
elseif($rowBIO['grades']== '1,1,6'||$rowBIO['grades']== '1,6,1'||$rowBIO['grades']== '6,1,1'||$rowBIO['grades']== '1,2,6'||$rowBIO['grades']== '1,6,2'||$rowBIO['grades']== '2,1,6'||$rowBIO['grades']== '2,6,1'||$rowBIO['grades']== '6,1,2'||$rowBIO['grades']== '6,2,1'||$rowBIO['grades']== '1,3,6'||$rowBIO['grades']== '1,6,3'||$rowBIO['grades']== '6,3,1'||$rowBIO['grades']== '6,1,3'||$rowBIO['grades']== '3,1,6'||$rowBIO['grades']== '3,6,1'||$rowBIO['grades']== '1,4,6'||$rowBIO['grades']== '1,6,4'||$rowBIO['grades']== '6,4,1'||$rowBIO['grades']== '6,1,4'||$rowBIO['grades']== '4,1,6'||$rowBIO['grades']== '4,6,1'||$rowBIO['grades']== '1,5,6'||$rowBIO['grades']== '1,6,5'||$rowBIO['grades']== '6,5,1'||$rowBIO['grades']== '6,1,5'||$rowBIO['grades']== '5,1,6'||$rowBIO['grades']== '5,6,1'||$rowBIO['grades']== '2,2,6'||$rowBIO['grades']== '2,6,2'||$rowBIO['grades']== '6,2,2'||$rowBIO['grades']== '2,3,6'||$rowBIO['grades']== '2,6,3'||$rowBIO['grades']== '6,2,3'||$rowBIO['grades']== '6,3,2'||$rowBIO['grades']== '3,6,2'||$rowBIO['grades']== '3,2,6'||$rowBIO['grades']== '2,4,6'||$rowBIO['grades']== '2,6,4'||$rowBIO['grades']== '6,2,4'||$rowBIO['grades']== '6,4,2'||$rowBIO['grades']== '4,6,2'||$rowBIO['grades']== '4,2,6'||$rowBIO['grades']== '2,5,6'||$rowBIO['grades']== '2,6,5'||$rowBIO['grades']== '5,2,6'||$rowBIO['grades']== '5,6,2'||$rowBIO['grades']== '6,2,5'||$rowBIO['grades']== '6,5,2'||$rowBIO['grades']== '3,3,6'||$rowBIO['grades']== '3,6,3'||$rowBIO['grades']== '6,3,3'||$rowBIO['grades']== '3,4,6'||$rowBIO['grades']== '3,6,4'||$rowBIO['grades']== '6,3,4'||$rowBIO['grades']== '6,4,3'||$rowBIO['grades']== '4,6,3'||$rowBIO['grades']== '4,3,6'||$rowBIO['grades']== '3,5,6'||$rowBIO['grades']== '3,6,5'||$rowBIO['grades']== '5,3,6'||$rowBIO['grades']== '5,6,3'||$rowBIO['grades']== '6,3,5'||$rowBIO['grades']== '6,5,3'||$rowBIO['grades']== '4,4,6'||$rowBIO['grades']== '4,6,4'||$rowBIO['grades']== '6,4,4'||$rowBIO['grades']== '4,5,6'||$rowBIO['grades']== '4,6,5'||$rowBIO['grades']== '5,4,6'||$rowBIO['grades']== '5,6,4'||$rowBIO['grades']== '6,4,5'||$rowBIO['grades']== '6,5,4'||$rowBIO['grades']== '1,5,5'||$rowBIO['grades']== '5,1,5'||$rowBIO['grades']== '5,5,1'||$rowBIO['grades']== '2,5,5'||$rowBIO['grades']== '5,2,5'||$rowBIO['grades']== '5,5,2'||$rowBIO['grades']== '3,5,5'||$rowBIO['grades']== '5,3,5'||$rowBIO['grades']== '5,5,3'||$rowBIO['grades']== '4,5,5'||$rowBIO['grades']== '5,4,5'||$rowBIO['grades']== '5,5,4'||$rowBIO['grades']== '5,5,5'||$rowBIO['grades']== '6,5,5'||$rowBIO['grades']== '5,6,5'||$rowBIO['grades']== '5,5,6')
	{
	//This code inserts the grade in the  6scs_grading
	$queryx5=mysql_query("update 6scs_grading set award='D' where subject_id='BIO'")or die(mysql_error());
	//This code inserts the grade value in the  6scs_grading table
	$query_value=mysql_query("update 6scs_grading set value='3' where subject_id='BIO'")or die(mysql_error());
	//This code inserts the grade remark in the  6scs_grading table
	$query_remark=mysql_query("update 6scs_grading set remark='Fairly Good' where subject_id='BIO'")or die(mysql_error());
	//This code updates the grade in the 6scs_grading table
    $queryAward=mysql_query("SELECT award from 6scs_grading where subject_id ='BIO'")or die(mysql_error());
    $rowAward=mysql_fetch_array($queryAward);
	echo $rowAward['award'];
	//I Assigned new variables to help in updating the s6 table data
	$logic_1=$rowAward['award'];
	$logic_2='('.$rowBIO['grades'].')';
	$TRANS_GRADE= "$logic_1 $logic_2";

	//This code updates the subject grade value in the  s6 table
	$query_trans=mysql_query("update s6 set BIO='$TRANS_GRADE' where id='$ID'")or die(mysql_error());
	}
elseif($rowBIO['grades']== '1,1,7'||$rowBIO['grades']== '1,7,1'||$rowBIO['grades']== '7,1,1'||$rowBIO['grades']== '1,2,7'||$rowBIO['grades']== '1,7,2'||$rowBIO['grades']== '2,7,1'||$rowBIO['grades']== '2,1,7'||$rowBIO['grades']== '7,1,2'||$rowBIO['grades']== '7,2,1'||$rowBIO['grades']== '1,3,7'||$rowBIO['grades']== '1,7,3'||$rowBIO['grades']== '3,7,1'||$rowBIO['grades']== '3,1,7'||$rowBIO['grades']== '7,3,1'||$rowBIO['grades']== '7,1,3'||$rowBIO['grades']== '1,4,7'||$rowBIO['grades']== '1,7,4'||$rowBIO['grades']== '7,1,4'||$rowBIO['grades']== '7,4,1'||$rowBIO['grades']== '4,7,1'||$rowBIO['grades']== '4,1,7'||$rowBIO['grades']== '1,5,7'||$rowBIO['grades']== '1,7,5'||$rowBIO['grades']== '7,1,5'||$rowBIO['grades']== '7,5,1'||$rowBIO['grades']== '5,1,7'||$rowBIO['grades']== '5,7,1'||$rowBIO['grades']== '1,6,7'||$rowBIO['grades']== '1,7,6'||$rowBIO['grades']== '6,7,1'||$rowBIO['grades']== '6,1,7'||$rowBIO['grades']== '7,1,6'||$rowBIO['grades']== '7,6,1'||$rowBIO['grades']== '2,2,7'||$rowBIO['grades']== '2,7,2'||$rowBIO['grades']== '7,2,2'||$rowBIO['grades']== '2,3,7'||$rowBIO['grades']== '2,7,3'||$rowBIO['grades']== '3,2,7'||$rowBIO['grades']== '3,7,2'||$rowBIO['grades']== '7,3,2'||$rowBIO['grades']== '7,2,3'||$rowBIO['grades']== '2,4,7'||$rowBIO['grades']== '2,7,4'||$rowBIO['grades']== '4,2,7'||$rowBIO['grades']== '4,7,2'||$rowBIO['grades']== '7,2,4'||$rowBIO['grades']== '7,4,2'||$rowBIO['grades']== '2,5,7'||$rowBIO['grades']== '2,7,5'||$rowBIO['grades']== '5,7,2'||$rowBIO['grades']== '5,2,7'||$rowBIO['grades']== '7,2,5'||$rowBIO['grades']== '7,5,2'||$rowBIO['grades']== '2,6,7'||$rowBIO['grades']== '2,7,6'||$rowBIO['grades']== '6,7,2'||$rowBIO['grades']== '6,2,7'||$rowBIO['grades']== '7,6,2'||$rowBIO['grades']== '7,2,6'||$rowBIO['grades']== '3,3,7'||$rowBIO['grades']== '3,7,3'||$rowBIO['grades']== '7,3,3'||$rowBIO['grades']== '3,4,7'||$rowBIO['grades']== '3,7,4'||$rowBIO['grades']== '4,3,7'||$rowBIO['grades']== '4,7,3'||$rowBIO['grades']== '7,3,4'||$rowBIO['grades']== '7,4,3'||$rowBIO['grades']== '3,5,7'||$rowBIO['grades']== '3,7,5'||$rowBIO['grades']== '5,3,7'||$rowBIO['grades']== '5,7,3'||$rowBIO['grades']== '7,5,3'||$rowBIO['grades']== '7,3,5'||$rowBIO['grades']== '3,6,7'||$rowBIO['grades']== '3,7,6'||$rowBIO['grades']== '6,3,7'||$rowBIO['grades']== '6,7,3'||$rowBIO['grades']== '7,3,6'||$rowBIO['grades']== '7,6,3'||$rowBIO['grades']== '4,4,7'||$rowBIO['grades']== '4,7,4'||$rowBIO['grades']== '7,4,4'||$rowBIO['grades']== '4,5,7'||$rowBIO['grades']== '4,7,5'||$rowBIO['grades']== '5,7,4'||$rowBIO['grades']== '5,4,7'||$rowBIO['grades']== '7,4,5'||$rowBIO['grades']== '7,5,4'||$rowBIO['grades']== '4,6,7'||$rowBIO['grades']== '4,7,6'||$rowBIO['grades']== '6,7,4'||$rowBIO['grades']== '6,4,7'||$rowBIO['grades']== '7,4,6'||$rowBIO['grades']== '7,6,4'||$rowBIO['grades']== '5,5,7'||$rowBIO['grades']== '5,7,5'||$rowBIO['grades']== '7,5,5'||$rowBIO['grades']== '5,6,7'||$rowBIO['grades']== '5,7,6'||$rowBIO['grades']== '6,5,7'||$rowBIO['grades']== '6,7,5'||$rowBIO['grades']== '7,6,5'||$rowBIO['grades']== '7,5,6'||$rowBIO['grades']== '6,6,7'||$rowBIO['grades']== '6,7,6'||$rowBIO['grades']== '7,6,6'||$rowBIO['grades']== '1,6,6'||$rowBIO['grades']== '6,1,6'||$rowBIO['grades']== '6,6,1'||$rowBIO['grades']== '2,6,6'||$rowBIO['grades']== '6,2,6'||$rowBIO['grades']== '6,6,2'||$rowBIO['grades']== '3,6,6'||$rowBIO['grades']== '6,3,6'||$rowBIO['grades']== '6,6,3'||$rowBIO['grades']== '4,6,6'||$rowBIO['grades']== '6,4,6'||$rowBIO['grades']== '6,6,4'||$rowBIO['grades']== '5,6,6'||$rowBIO['grades']== '6,5,6'||$rowBIO['grades']== '6,6,5'||$rowBIO['grades']== '6,6,6'||
$rowBIO['grades']== '1,1,8'||$rowBIO['grades']== '1,8,1'||$rowBIO['grades']== '8,1,1'||$rowBIO['grades']== '1,2,8'||$rowBIO['grades']== '1,8,2'||$rowBIO['grades']== '2,8,1'||$rowBIO['grades']== '2,1,8'||$rowBIO['grades']== '8,1,2'||$rowBIO['grades']== '8,2,1'||$rowBIO['grades']== '1,3,8'||$rowBIO['grades']== '1,8,3'||$rowBIO['grades']== '3,8,1'||$rowBIO['grades']== '3,1,8'||$rowBIO['grades']== '8,3,1'||$rowBIO['grades']== '8,1,3'||$rowBIO['grades']== '1,4,8'||$rowBIO['grades']== '1,8,4'||$rowBIO['grades']== '8,1,4'||$rowBIO['grades']== '8,4,1'||$rowBIO['grades']== '4,8,1'||$rowBIO['grades']== '4,1,8'||$rowBIO['grades']== '1,5,8'||$rowBIO['grades']== '1,8,5'||$rowBIO['grades']== '8,1,5'||$rowBIO['grades']== '8,5,1'||$rowBIO['grades']== '5,1,8'||$rowBIO['grades']== '5,8,1'||$rowBIO['grades']== '1,6,8'||$rowBIO['grades']== '1,8,6'||$rowBIO['grades']== '6,8,1'||$rowBIO['grades']== '6,1,8'||$rowBIO['grades']== '8,1,6'||$rowBIO['grades']== '8,6,1'||$rowBIO['grades']== '2,2,8'||$rowBIO['grades']== '2,8,2'||$rowBIO['grades']== '8,2,2'||$rowBIO['grades']== '2,3,8'||$rowBIO['grades']== '2,8,3'||$rowBIO['grades']== '3,2,8'||$rowBIO['grades']== '3,8,2'||$rowBIO['grades']== '8,3,2'||$rowBIO['grades']== '8,2,3'||$rowBIO['grades']== '2,4,8'||$rowBIO['grades']== '2,8,4'||$rowBIO['grades']== '4,2,8'||$rowBIO['grades']== '4,8,2'||$rowBIO['grades']== '8,2,4'||$rowBIO['grades']== '8,4,2'||$rowBIO['grades']== '2,5,8'||$rowBIO['grades']== '2,8,5'||$rowBIO['grades']== '5,8,2'||$rowBIO['grades']== '5,2,8'||$rowBIO['grades']== '8,2,5'||$rowBIO['grades']== '8,5,2'||$rowBIO['grades']== '2,6,8'||$rowBIO['grades']== '2,8,6'||$rowBIO['grades']== '6,8,2'||$rowBIO['grades']== '6,2,8'||$rowBIO['grades']== '8,6,2'||$rowBIO['grades']== '8,2,6'||$rowBIO['grades']== '3,3,8'||$rowBIO['grades']== '3,8,3'||$rowBIO['grades']== '8,3,3'||$rowBIO['grades']== '3,4,8'||$rowBIO['grades']== '3,8,4'||$rowBIO['grades']== '4,3,8'||$rowBIO['grades']== '4,8,3'||$rowBIO['grades']== '8,3,4'||$rowBIO['grades']== '8,4,3'||$rowBIO['grades']== '3,5,8'||$rowBIO['grades']== '3,8,5'||$rowBIO['grades']== '5,3,8'||$rowBIO['grades']== '5,8,3'||$rowBIO['grades']== '8,5,3'||$rowBIO['grades']== '8,3,5'||$rowBIO['grades']== '3,6,8'||$rowBIO['grades']== '3,8,6'||$rowBIO['grades']== '6,3,8'||$rowBIO['grades']== '6,8,3'||$rowBIO['grades']== '8,3,6'||$rowBIO['grades']== '8,6,3'||$rowBIO['grades']== '4,4,8'||$rowBIO['grades']== '4,8,4'||$rowBIO['grades']== '8,4,4'||$rowBIO['grades']== '4,5,8'||$rowBIO['grades']== '4,8,5'||$rowBIO['grades']== '5,8,4'||$rowBIO['grades']== '5,4,8'||$rowBIO['grades']== '8,4,5'||$rowBIO['grades']== '8,5,4'||$rowBIO['grades']== '4,6,8'||$rowBIO['grades']== '4,8,6'||$rowBIO['grades']== '6,8,4'||$rowBIO['grades']== '6,4,8'||$rowBIO['grades']== '8,4,6'||$rowBIO['grades']== '8,6,4'||$rowBIO['grades']== '5,5,8'||$rowBIO['grades']== '5,8,5'||$rowBIO['grades']== '8,5,5'||$rowBIO['grades']== '5,6,8'||$rowBIO['grades']== '5,8,6'||$rowBIO['grades']== '6,5,8'||$rowBIO['grades']== '6,8,5'||$rowBIO['grades']== '8,6,5'||$rowBIO['grades']== '8,5,6'||$rowBIO['grades']== '6,6,8'||$rowBIO['grades']== '6,8,6'||$rowBIO['grades']== '8,6,6')
	{
	//This code inserts the grade in the  6scs_grading
	$queryx5=mysql_query("update 6scs_grading set award='E' where subject_id='BIO'")or die(mysql_error());
	//This code inserts the grade value in the  6scs_grading table
	$query_value=mysql_query("update 6scs_grading set value='2' where subject_id='BIO'")or die(mysql_error());
	//This code inserts the grade remark in the  6scs_grading table
	$query_remark=mysql_query("update 6scs_grading set remark='Fair' where subject_id='BIO'")or die(mysql_error());
	//This code updates the grade in the 6scs_grading table
    $queryAward=mysql_query("SELECT award from 6scs_grading where subject_id ='BIO'")or die(mysql_error());
    $rowAward=mysql_fetch_array($queryAward);
	echo $rowAward['award'];
	//I Assigned new variables to help in updating the s6 table data
	$logic_1=$rowAward['award'];
	$logic_2='('.$rowBIO['grades'].')';
	$TRANS_GRADE= "$logic_1 $logic_2";

	//This code updates the subject grade value in the  s6 table
	$query_trans=mysql_query("update s6 set BIO='$TRANS_GRADE' where id='$ID'")or die(mysql_error());
	}
elseif($rowBIO['grades']== '1,7,7'||$rowBIO['grades']== '7,1,7'||$rowBIO['grades']== '7,7,1'||$rowBIO['grades']== '2,7,7'||$rowBIO['grades']== '7,2,7'||$rowBIO['grades']== '7,7,2'||$rowBIO['grades']== '3,7,7'||$rowBIO['grades']== '7,3,7'||$rowBIO['grades']== '7,7,3'||$rowBIO['grades']== '4,7,7'||$rowBIO['grades']== '7,4,7'||$rowBIO['grades']== '7,7,4'||$rowBIO['grades']== '5,7,7'||$rowBIO['grades']== '7,5,7'||$rowBIO['grades']== '7,7,5'||$rowBIO['grades']== '6,7,7'||$rowBIO['grades']== '7,6,7'||$rowBIO['grades']== '7,7,6'||$rowBIO['grades']== '1,8,8'||$rowBIO['grades']== '8,1,8'||$rowBIO['grades']== '8,8,1'||$rowBIO['grades']== '2,8,8'||$rowBIO['grades']== '8,2,8'||$rowBIO['grades']== '8,8,2'||$rowBIO['grades']== '3,8,8'||$rowBIO['grades']== '8,3,8'||$rowBIO['grades']== '8,8,3'||$rowBIO['grades']== '4,8,8'||$rowBIO['grades']== '8,4,8'||$rowBIO['grades']== '8,8,4'||$rowBIO['grades']== '5,8,8'||$rowBIO['grades']== '8,5,8'||$rowBIO['grades']== '8,8,5'||$rowBIO['grades']== '6,8,8'||$rowBIO['grades']== '8,6,8'||$rowBIO['grades']== '8,8,6'||$rowBIO['grades']== '1,7,8'||$rowBIO['grades']== '1,8,7'||$rowBIO['grades']== '7,8,1'||$rowBIO['grades']== '7,1,8'||$rowBIO['grades']== '8,1,7'||$rowBIO['grades']== '8,7,1'||$rowBIO['grades']== '2,7,8'||$rowBIO['grades']== '2,8,7'||$rowBIO['grades']== '7,8,2'||$rowBIO['grades']== '7,2,8'||$rowBIO['grades']== '8,2,7'||$rowBIO['grades']== '8,7,2'||$rowBIO['grades']== '3,7,8'||$rowBIO['grades']== '3,8,7'||$rowBIO['grades']== '7,8,3'||$rowBIO['grades']== '7,3,8'||$rowBIO['grades']== '8,3,7'||$rowBIO['grades']== '8,7,3'||$rowBIO['grades']== '4,7,8'||$rowBIO['grades']== '4,8,7'||$rowBIO['grades']== '7,8,4'||$rowBIO['grades']== '7,4,8'||$rowBIO['grades']== '8,4,7'||$rowBIO['grades']== '8,7,4'||$rowBIO['grades']== '5,7,8'||$rowBIO['grades']== '5,8,7'||$rowBIO['grades']== '7,8,5'||$rowBIO['grades']== '7,5,8'||$rowBIO['grades']== '8,5,7'||$rowBIO['grades']== '8,7,5'||$rowBIO['grades']== '6,7,8'||$rowBIO['grades']== '6,8,7'||$rowBIO['grades']== '7,8,6'||$rowBIO['grades']== '7,6,8'||$rowBIO['grades']== '8,6,7'||$rowBIO['grades']== '8,7,6'||$rowBIO['grades']== '1,1,9'||$rowBIO['grades']== '1,9,1'||$rowBIO['grades']== '9,1,1'||$rowBIO['grades']== '1,2,9'||$rowBIO['grades']== '1,9,2'||$rowBIO['grades']== '9,1,2'||$rowBIO['grades']== '9,2,1'||$rowBIO['grades']== '2,9,1'||$rowBIO['grades']== '2,1,9'||$rowBIO['grades']== '1,3,9'||$rowBIO['grades']== '1,9,3'||$rowBIO['grades']== '3,1,9'||$rowBIO['grades']== '3,9,1'||$rowBIO['grades']== '9,3,1'||$rowBIO['grades']== '9,1,3'||$rowBIO['grades']== '1,4,9'||$rowBIO['grades']== '1,9,4'||$rowBIO['grades']== '4,1,9'||$rowBIO['grades']== '4,9,1'||$rowBIO['grades']== '9,4,1'||$rowBIO['grades']== '9,1,4'||$rowBIO['grades']== '1,5,9'||$rowBIO['grades']== '1,9,5'||$rowBIO['grades']== '5,1,9'||$rowBIO['grades']== '5,9,1'||$rowBIO['grades']== '9,5,1'||$rowBIO['grades']== '9,1,5'||$rowBIO['grades']== '1,6,9'||$rowBIO['grades']== '1,9,6'||$rowBIO['grades']== '6,1,9'||$rowBIO['grades']== '6,9,1'||$rowBIO['grades']== '9,6,1'||$rowBIO['grades']== '9,1,6'||$rowBIO['grades']== '2,2,9'||$rowBIO['grades']== '2,9,2'||$rowBIO['grades']== '9,2,2'||$rowBIO['grades']== '2,3,9'||$rowBIO['grades']== '2,9,3'||$rowBIO['grades']== '3,2,9'||$rowBIO['grades']== '3,9,2'||$rowBIO['grades']== '9,3,2'||$rowBIO['grades']== '9,2,3'||$rowBIO['grades']== '2,4,9'||$rowBIO['grades']== '2,9,4'||$rowBIO['grades']== '4,2,9'||$rowBIO['grades']== '4,9,2'||$rowBIO['grades']== '9,4,2'||$rowBIO['grades']== '9,2,4'||$rowBIO['grades']== '2,5,9'||$rowBIO['grades']== '2,9,5'||$rowBIO['grades']== '5,2,9'||$rowBIO['grades']== '5,9,2'||$rowBIO['grades']== '9,5,2'||$rowBIO['grades']== '9,2,5'||$rowBIO['grades']== '2,6,9'||$rowBIO['grades']== '2,9,6'||$rowBIO['grades']== '6,2,9'||$rowBIO['grades']== '6,9,2'||$rowBIO['grades']== '9,6,2'||$rowBIO['grades']== '9,2,6'||$rowBIO['grades']== '3,3,9'||$rowBIO['grades']== '3,9,3'||$rowBIO['grades']== '9,3,3'||$rowBIO['grades']== '3,4,9'||$rowBIO['grades']== '3,9,4'||$rowBIO['grades']== '9,3,4'||$rowBIO['grades']== '9,4,3'||$rowBIO['grades']== '4,3,9'||$rowBIO['grades']== '4,9,3'||$rowBIO['grades']== '3,5,9'||$rowBIO['grades']== '3,9,5'||$rowBIO['grades']== '9,3,5'||$rowBIO['grades']== '9,5,3'||$rowBIO['grades']== '5,3,9'||$rowBIO['grades']== '5,9,3'||$rowBIO['grades']== '3,6,9'||$rowBIO['grades']== '3,9,6'||$rowBIO['grades']== '9,3,6'||$rowBIO['grades']== '9,6,3'||$rowBIO['grades']== '6,3,9'||$rowBIO['grades']== '6,9,3'||$rowBIO['grades']== '4,4,9'||$rowBIO['grades']== '4,9,4'||$rowBIO['grades']== '9,4,4'||$rowBIO['grades']== '4,5,9'||$rowBIO['grades']== '4,9,5'||$rowBIO['grades']== '9,4,5'||$rowBIO['grades']== '9,5,4'||$rowBIO['grades']== '5,4,9'||$rowBIO['grades']== '5,9,4'||$rowBIO['grades']== '4,6,9'||$rowBIO['grades']== '4,9,6'||$rowBIO['grades']== '9,4,6'||$rowBIO['grades']== '9,6,4'||$rowBIO['grades']== '6,4,9'||$rowBIO['grades']== '6,9,4'||$rowBIO['grades']== '5,5,9'||$rowBIO['grades']== '5,9,5'||$rowBIO['grades']== '9,5,5'||$rowBIO['grades']== '5,6,9'||$rowBIO['grades']== '5,9,6'||$rowBIO['grades']== '6,5,9'||$rowBIO['grades']== '6,9,5'||$rowBIO['grades']== '9,6,5'||$rowBIO['grades']== '9,5,6'||$rowBIO['grades']== '6,6,9'||$rowBIO['grades']== '6,9,6'||$rowBIO['grades']== '9,6,6')
	{
	//This code inserts the grade in the  6scs_grading
	$queryx5=mysql_query("update 6scs_grading set award='O' where subject_id='BIO'")or die(mysql_error());
	//This code inserts the grade value in the  6scs_grading table
	$query_value=mysql_query("update 6scs_grading set value='1' where subject_id='BIO'")or die(mysql_error());
	//This code inserts the grade remark in the  6scs_grading table
	$query_remark=mysql_query("update 6scs_grading set remark='Improve' where subject_id='BIO'")or die(mysql_error());
	//This code updates the grade in the 6scs_grading table
    $queryAward=mysql_query("SELECT award from 6scs_grading where subject_id ='BIO'")or die(mysql_error());
    $rowAward=mysql_fetch_array($queryAward);
	echo $rowAward['award'];
	//I Assigned new variables to help in updating the s6 table data
	$logic_1=$rowAward['award'];
	$logic_2='('.$rowBIO['grades'].')';
	$TRANS_GRADE= "$logic_1 $logic_2";

	//This code updates the subject grade value in the  s6 table
	$query_trans=mysql_query("update s6 set BIO='$TRANS_GRADE' where id='$ID'")or die(mysql_error());
	}
elseif($rowBIO['grades']== '9,8,8'||$rowBIO['grades']== '8,8,9'||$rowBIO['grades']== '8,9,8'||$rowBIO['grades']== '9,9,9'||$rowBIO['grades']== '9,7,7'||$rowBIO['grades']== '7,7,9'||$rowBIO['grades']== '7,9,7'||$rowBIO['grades']== '9,9,9'||$rowBIO['grades']== '1,9,9'||$rowBIO['grades']== '9,1,9'||$rowBIO['grades']== '9,9,1'||$rowBIO['grades']== '2,9,9'||$rowBIO['grades']== '9,2,9'||$rowBIO['grades']== '9,9,2'||$rowBIO['grades']== '3,9,9'||$rowBIO['grades']== '9,3,9'||$rowBIO['grades']== '9,9,3'||$rowBIO['grades']== '4,9,9'||$rowBIO['grades']== '9,4,9'||$rowBIO['grades']== '9,9,4'||$rowBIO['grades']== '5,9,9'||$rowBIO['grades']== '9,5,9'||$rowBIO['grades']== '9,9,5'||$rowBIO['grades']== '6,9,9'||$rowBIO['grades']== '9,6,9'||$rowBIO['grades']== '9,9,6')
	{
	//This code inserts the grade in the  6scs_grading
	$queryx5=mysql_query("update 6scs_grading set award='F' where subject_id='BIO'")or die(mysql_error());
	//This code inserts the grade value in the  6scs_grading table
	$query_value=mysql_query("update 6scs_grading set value='0' where subject_id='BIO'")or die(mysql_error());
	//This code inserts the grade remark in the  6scs_grading table
	$query_remark=mysql_query("update 6scs_grading set remark='Improve' where subject_id='BIO'")or die(mysql_error());
	//This code updates the grade in the 6scs_grading table
    $queryAward=mysql_query("SELECT award from 6scs_grading where subject_id ='BIO'")or die(mysql_error());
    $rowAward=mysql_fetch_array($queryAward);
	echo $rowAward['award'];
	//I Assigned new variables to help in updating the s6 table data
	$logic_1=$rowAward['award'];
	$logic_2='('.$rowBIO['grades'].')';
	$TRANS_GRADE= "$logic_1 $logic_2";

	//This code updates the subject grade value in the  s6 table
	$query_trans=mysql_query("update s6 set BIO='$TRANS_GRADE' where id='$ID'")or die(mysql_error());
	}
	}
	?>"/></td>
    <td align="center">1</td>
    <td align="center"><?php echo $row3['paper_one_mot']; ?></td> 
    <td align="center"><?php echo $row3['paper_one_end']; ?></td>
    <td align="center"><?php 
	 
	if($rowc['Total']=="")
	{
	$queryx1=mysql_query("update 6scs_grading set grades=null,award=null,value=null,remark=null where subject_id='BIO'")or die(mysql_error());
	
	}
	elseif($rowc['Total']<= '34' and $rowc['Total']>='1')
	{
	echo'F9';
	$a='9'.',';
	//This code stores the grade in 6scs_grading
	$queryx1=mysql_query("update 6scs_grading set grades='$a' where subject_id='BIO'")or die(mysql_error());
	
	}
	elseif($rowc['Total']<= '39' and $rowc['Total']>='35')
	{
	echo'P8';
	$b='8'.',';
	//This code stores the grade in 6scs_grading
   $queryx1=mysql_query("update 6scs_grading set grades='$b' where subject_id='BIO'")or die(mysql_error());
	}
	elseif($rowc['Total']<= '49' and $rowc['Total']>='40')
	{
	echo'P7';
	$c='7'.',';
	//This code stores the grade in 6scs_grading
	$queryx1=mysql_query("update 6scs_grading set grades='$c' where subject_id='BIO'")or die(mysql_error());
	}
	elseif($rowc['Total']<= '54' and $rowc['Total']>='50')
	{
	echo'C6';
	$d='6'.',';
	//This code stores the grade in 6scs_grading
	$queryx1=mysql_query("update 6scs_grading set grades='$d' where subject_id='BIO'")or die(mysql_error());
	}
	elseif($rowc['Total']<= '59' and $rowc['Total']>='55')
	{
	echo'C5'; 
	$e='5'.',';
	//This code stores the grade in 6scs_grading
	$queryx1=mysql_query("update 6scs_grading set grades='$e' where subject_id='BIO'")or die(mysql_error());
	}
	elseif($rowc['Total']<= '64' and $rowc['Total']>='60')
	{
	echo'C4';
	$f='4'.',';
	//This code stores the grade in 6scs_grading
	$queryx1=mysql_query("update 6scs_grading set grades='$f' where subject_id='BIO'")or die(mysql_error());
	}
	elseif($rowc['Total']<= '74' and $rowc['Total']>='65')
	{
	echo'C3';
	$g='3'.',';
	//This code stores the grade in 6scs_grading
	$queryx1=mysql_query("update 6scs_grading set grades='$g' where subject_id='BIO'")or die(mysql_error());
	}
	elseif($rowc['Total']<= '79' and $rowc['Total']>='75')
	{
	echo'D2';
	$h='2'.',';
	//This code stores the grade in 6scs_grading
	$queryx1=mysql_query("update 6scs_grading set grades='$h' where subject_id='BIO'")or die(mysql_error());
	}
	elseif($rowc['Total']<= '100' and $rowc['Total']>='80')
	{
	echo'D1';
	$i='1'.',';
	//This code stores the grade in 6scs_grading
	$queryx1=mysql_query("update 6scs_grading set grades='$i' where subject_id='BIO'")or die(mysql_error());
	}
	?></td>
    <td align="center" rowspan="3" style="color:#1b5e94;"><?php 
	//This code selects the remark in the 6scs_grading table
    $query_remark=mysql_query("SELECT remark from 6scs_grading where subject_id ='BIO'")or die(mysql_error());
    $row_remark=mysql_fetch_array($query_remark);
	echo $row_remark['remark'];?></td>
    <td align="center" rowspan="3"><?php echo $rowZ['BIO'];?></td>
  </tr>
  <tr bgcolor="#CCCCCC">
    <td align="center">2</td>
    <td align="center"><?php echo $row3['two_paper_mot']; ?></td>
    <td align="center"><?php echo $row3['two_paper_end']; ?></td>
    <td align="center"><?php 
	 if($rowi['Total']=="")
	{
	$queryx2=mysql_query("update 6scs_grading set grades=null,award=null,value=null,remark=null where subject_id='BIO'")or die(mysql_error());
	
	}
	elseif($rowi['Total']<= '34' and $rowi['Total']>='1')
	{
	echo'F9';
	$a='9'.',';
	//This code stores the grade in 6scs_grading
	$queryx2=mysql_query("UPDATE 6scs_grading SET grades= concat(grades,'$a') WHERE `6scs_grading`.`subject_id` = 'BIO'")or die(mysql_error());
	}
	elseif($rowi['Total']<= '39' and $rowi['Total']>='35')
	{
	echo'P8';
	$b='8';
	//This code stores the grade in 6scs_grading
	$queryx2=mysql_query("UPDATE 6scs_grading SET grades= concat(grades,'$b') WHERE `6scs_grading`.`subject_id` = 'BIO'")or die(mysql_error());
	}
	elseif($rowi['Total']<= '49' and $rowi['Total']>='40')
	{
	echo'P7';
	$c='7'.',';
	//This code stores the grade in 6scs_grading
	$queryx2=mysql_query("UPDATE 6scs_grading SET grades= concat(grades,'$c') WHERE `6scs_grading`.`subject_id` = 'BIO'")or die(mysql_error());
	}
	elseif($rowi['Total']<= '54' and $rowi['Total']>='50')
	{
	echo'C6';
	$d='6'.',';
	//This code stores the grade in 6scs_grading
	$queryx2=mysql_query("UPDATE 6scs_grading SET grades= concat(grades,'$d') WHERE `6scs_grading`.`subject_id` = 'BIO'")or die(mysql_error());
	}
	elseif($rowi['Total']<= '59' and $rowi['Total']>='55')
	{
	echo'C5';
	$e='5'.',';
	//This code stores the grade in 6scs_grading
	$queryx2=mysql_query("UPDATE 6scs_grading SET grades= concat(grades,'$e') WHERE `6scs_grading`.`subject_id` = 'BIO'")or die(mysql_error());
	}
	elseif($rowi['Total']<= '64' and $rowi['Total']>='60')
	{
	echo'C4';
	$f='4'.',';
	//This code stores the grade in 6scs_grading
	$queryx2=mysql_query("UPDATE 6scs_grading SET grades= concat(grades,'$f') WHERE `6scs_grading`.`subject_id` = 'BIO'")or die(mysql_error());
	}
	elseif($rowi['Total']<= '74' and $rowi['Total']>='65')
	{
	echo'C3';
	$g='3'.',';
	//This code stores the grade in 6scs_grading
	$queryx2=mysql_query("UPDATE 6scs_grading SET grades= concat(grades,'$g') WHERE `6scs_grading`.`subject_id` = 'BIO'")or die(mysql_error());
	}
	elseif($rowi['Total']<= '79' and $rowi['Total']>='75')
	{
	echo'D2';
	$h='2'.',';
	//This code stores the grade in 6scs_grading
	$queryx2=mysql_query("UPDATE 6scs_grading SET grades= concat(grades,'$h') WHERE `6scs_grading`.`subject_id` = 'BIO'")or die(mysql_error());
	}
	elseif($rowi['Total']<= '100' and $rowi['Total']>='80')
	{
	echo'D1';
	$i='1'.',';
	//This code stores the grade in 6scs_grading
	$queryx2=mysql_query("UPDATE 6scs_grading SET grades= concat(grades,'$i') WHERE `6scs_grading`.`subject_id` = 'BIO'")or die(mysql_error());
	}
	?></td>   
  </tr>
  <tr bgcolor="#CCCCCC">
    <td align="center">3</td>
    <td align="center"><?php echo $row3['paper_three_mot']; ?></td>
    <td align="center"><?php echo $row3['paper_three_end']; ?></td>
    <td align="center"><?php 
	 if($rowcc['Total']=="")
	{
	$queryx2=mysql_query("update 6scs_grading set grades=null,award=null,value=null,remark=null where subject_id='BIO'")or die(mysql_error());
	
	}
	elseif($rowcc['Total']<= '34' and $rowcc['Total']>='1')
	{
	echo'F9';
	$a='9';
	//This code stores the grade in 6scs_grading
	$queryx2=mysql_query("UPDATE 6scs_grading SET grades= concat(grades,'$a') WHERE `6scs_grading`.`subject_id` = 'BIO'")or die(mysql_error());
	}
	elseif($rowcc['Total']<= '39' and $rowcc['Total']>='35')
	{
	echo'P8';
	$b='8';
	//This code stores the grade in 6scs_grading
	$queryx2=mysql_query("UPDATE 6scs_grading SET grades= concat(grades,'$b') WHERE `6scs_grading`.`subject_id` = 'BIO'")or die(mysql_error());
	}
	elseif($rowcc['Total']<= '49' and $rowcc['Total']>='40')
	{
	echo'P7';
	$c='7';
	//This code stores the grade in 6scs_grading
	$queryx2=mysql_query("UPDATE 6scs_grading SET grades= concat(grades,'$c') WHERE `6scs_grading`.`subject_id` = 'BIO'")or die(mysql_error());
	}
	elseif($rowcc['Total']<= '54' and $rowcc['Total']>='50')
	{
	echo'C6';
	$d='6';
	//This code stores the grade in 6scs_grading
	$queryx2=mysql_query("UPDATE 6scs_grading SET grades= concat(grades,'$d') WHERE `6scs_grading`.`subject_id` = 'BIO'")or die(mysql_error());
	}
	elseif($rowcc['Total']<= '59' and $rowcc['Total']>='55')
	{
	echo'C5';
	$e='5';
	//This code stores the grade in 6scs_grading
	$queryx2=mysql_query("UPDATE 6scs_grading SET grades= concat(grades,'$e') WHERE `6scs_grading`.`subject_id` = 'BIO'")or die(mysql_error());
	}
	elseif($rowcc['Total']<= '64' and $rowcc['Total']>='60')
	{
	echo'C4';
	$f='4';
	//This code stores the grade in 6scs_grading
	$queryx2=mysql_query("UPDATE 6scs_grading SET grades= concat(grades,'$f') WHERE `6scs_grading`.`subject_id` = 'BIO'")or die(mysql_error());
	}
	elseif($rowcc['Total']<= '74' and $rowcc['Total']>='65')
	{
	echo'C3';
	$g='3';
	//This code stores the grade in 6scs_grading
	$queryx2=mysql_query("UPDATE 6scs_grading SET grades= concat(grades,'$g') WHERE `6scs_grading`.`subject_id` = 'BIO'")or die(mysql_error());
	}
	elseif($rowcc['Total']<= '79' and $rowcc['Total']>='75')
	{
	echo'D2';
	$h='2';
	//This code stores the grade in 6scs_grading
	$queryx2=mysql_query("UPDATE 6scs_grading SET grades= concat(grades,'$h') WHERE `6scs_grading`.`subject_id` = 'BIO'")or die(mysql_error());
	}
	elseif($rowcc['Total']<= '100' and $rowcc['Total']>='80')
	{
	echo'D1';
	$i='1';
	//This code stores the grade in 6scs_grading
	$queryx2=mysql_query("UPDATE 6scs_grading SET grades= concat(grades,'$i') WHERE `6scs_grading`.`subject_id` = 'BIO'")or die(mysql_error());
	}
	?></td>
  </tr>
    <tr bgcolor="#999999">
    <td rowspan="2">Economics</td>
    <td rowspan="2">
	<input type="text" name="economics" size="2px"  style="height:20px;border:groove; font-size:24px;" value="<?php 
	
	//******************************* HERE IS THE MAGIC *******************************************
    //This code perfects the Grading of the student by following the UACE Stands 
	
	if($row6['paper_one_mot']=='')
	{
	$query=mysql_query("update 6scs_grading set grades=null,award=null,value=null,remark=null where subject_id='ECON'")or die(mysql_error());
	 $query_change=mysql_query("update s6 set ECON=null where id='$ID'")or die(mysql_error());
	}else{
    $queryEcon=mysql_query("SELECT grades from 6scs_grading where subject_id ='ECON'")or die(mysql_error());
    $rowEcon=mysql_fetch_array($queryEcon);
	if($rowEcon['grades']== '1,1'||$rowEcon['grades']== '2,2'||$rowEcon['grades']== '1,2'||$rowEcon['grades']== '2,1')
	{
	//This code inserts the grade in the  6scs_grading table
	$queryx1=mysql_query("update 6scs_grading set award='A' where subject_id='ECON'")or die(mysql_error());
	//This code inserts the grade value in the  6scs_grading table
	$query_value=mysql_query("update 6scs_grading set value='6' where subject_id='ECON'")or die(mysql_error());
	//This code inserts the grade remark in the  6scs_grading table
	$query_remark=mysql_query("update 6scs_grading set remark='Excellent' where subject_id='ECON'")or die(mysql_error());
	//This code updates the grade in the 6scs_grading table
	$queryAward=mysql_query("SELECT award from 6scs_grading where subject_id ='ECON'")or die(mysql_error());
    $rowAward=mysql_fetch_array($queryAward);
	echo $rowAward['award'];
	//I Assigned new variables to help in updating the s6 table data
	$logic_1=$rowAward['award'];
	$logic_2='('.$rowEcon['grades'].')';
	$TRANS_GRADE= "$logic_1 $logic_2";

	//This code updates the subject grade value in the  s6 table
	$query_trans=mysql_query("update s6 set ECON='$TRANS_GRADE' where id='$ID'")or die(mysql_error());
	}
	elseif($rowEcon['grades']== '3,3'||$rowEcon['grades']== '3,1'||$rowEcon['grades']== '1,3'||$rowEcon['grades']== '2,3'||$rowEcon['grades']== '3,2'||$rowEcon['grades']== '1,4'||$rowEcon['grades']== '4,1'||$rowEcon['grades']== '4,2'||$rowEcon['grades']== '2,4')
	{
	//This code inserts the grade in the  6scs_grading
	$queryx1=mysql_query("update 6scs_grading set award='B' where subject_id='ECON'")or die(mysql_error());
	//This code inserts the grade value in the  6scs_grading table
	$query_value=mysql_query("update 6scs_grading set value='5' where subject_id='ECON'")or die(mysql_error());
	//This code inserts the grade remark in the  6scs_grading table
	$query_remark=mysql_query("update 6scs_grading set remark='Very Good' where subject_id='ECON'")or die(mysql_error());
	//This code updates the grade in the 6scs_grading table
    $queryAward=mysql_query("SELECT award from 6scs_grading where subject_id ='ECON'")or die(mysql_error());
    $rowAward=mysql_fetch_array($queryAward);
	echo $rowAward['award'];
	//I Assigned new variables to help in updating the s6 table data
	$logic_1=$rowAward['award'];
	$logic_2='('.$rowEcon['grades'].')';
	$TRANS_GRADE= "$logic_1 $logic_2";

	//This code updates the subject grade value in the  s6 table
	$query_trans=mysql_query("update s6 set ECON='$TRANS_GRADE' where id='$ID'")or die(mysql_error());
	}
	elseif($rowEcon['grades']== '1,5'||$rowEcon['grades']== '5,1'||$rowEcon['grades']== '2,5'||$rowEcon['grades']== '5,2'||$rowEcon['grades']== '3,5'||$rowEcon['grades']== '5,3'||$rowEcon['grades']== '3,4'||$rowEcon['grades']== '4,3'||$rowEcon['grades']== '4,4')
	{
	//This code inserts the grade in the  6scs_grading
	$queryx1=mysql_query("update 6scs_grading set award='C' where subject_id='ECON'")or die(mysql_error());
	//This code inserts the grade value in the  6scs_grading table
	$query_value=mysql_query("update 6scs_grading set value='4' where subject_id='ECON'")or die(mysql_error());
	//This code inserts the grade remark in the  6scs_grading table
	$query_remark=mysql_query("update 6scs_grading set remark='Good' where subject_id='ECON'")or die(mysql_error());
	//This code updates the grade in the 6scs_grading table
    $queryAward=mysql_query("SELECT award from 6scs_grading where subject_id ='ECON'")or die(mysql_error());
    $rowAward=mysql_fetch_array($queryAward);
	echo $rowAward['award'];
	//I Assigned new variables to help in updating the s6 table data
	$logic_1=$rowAward['award'];
	$logic_2='('.$rowEcon['grades'].')';
	$TRANS_GRADE= "$logic_1 $logic_2";

	//This code updates the subject grade value in the  s6 table
	$query_trans=mysql_query("update s6 set ECON='$TRANS_GRADE' where id='$ID'")or die(mysql_error());
	}
	elseif($rowEcon['grades']== '1,6'||$rowEcon['grades']== '6,1'||$rowEcon['grades']== '2,6'||$rowEcon['grades']== '6,2'||$rowEcon['grades']== '3,6'||$rowEcon['grades']== '6,3'||$rowEcon['grades']== '6,4'||$rowEcon['grades']== '4,6'||$rowEcon['grades']== '5,4'||$rowEcon['grades']== '4,5'||$rowEcon['grades']== '5,5')
	{
	//This code inserts the grade in the  6scs_grading
	$queryx1=mysql_query("update 6scs_grading set award='D' where subject_id='ECON'")or die(mysql_error());
	//This code inserts the grade value in the  6scs_grading table
	$query_value=mysql_query("update 6scs_grading set value='3' where subject_id='ECON'")or die(mysql_error());
	//This code inserts the grade remark in the  6scs_grading table
	$query_remark=mysql_query("update 6scs_grading set remark='Fairly Good' where subject_id='ECON'")or die(mysql_error());
	//This code updates the grade in the 6scs_grading table
    $queryAward=mysql_query("SELECT award from 6scs_grading where subject_id ='ECON'")or die(mysql_error());
    $rowAward=mysql_fetch_array($queryAward);
	echo $rowAward['award'];
	//I Assigned new variables to help in updating the s6 table data
	$logic_1=$rowAward['award'];
	$logic_2='('.$rowEcon['grades'].')';
	$TRANS_GRADE= "$logic_1 $logic_2";

	//This code updates the subject grade value in the  s6 table
	$query_trans=mysql_query("update s6 set ECON='$TRANS_GRADE' where id='$ID'")or die(mysql_error());
	}
	elseif($rowEcon['grades']== '1,7'||$rowEcon['grades']== '7,1'||$rowEcon['grades']== '2,7'||$rowEcon['grades']== '7,2'||$rowEcon['grades']== '3,7'||$rowEcon['grades']== '7,3'||$rowEcon['grades']== '7,4'||$rowEcon['grades']== '4,7'||$rowEcon['grades']== '6,4'||$rowEcon['grades']== '4,6'||$rowEcon['grades']== '6,6'||$rowEcon['grades']== '5,6'||$rowEcon['grades']== '6,5'||$rowEcon['grades']== '5,7'||$rowEcon['grades']== '7,5')
	{
	//This code inserts the grade in the  6scs_grading
	$queryx1=mysql_query("update 6scs_grading set award='E' where subject_id='ECON'")or die(mysql_error());
	//This code inserts the grade value in the  6scs_grading table
	$query_value=mysql_query("update 6scs_grading set value='2' where subject_id='ECON'")or die(mysql_error());
	//This code inserts the grade remark in the  6scs_grading table
	$query_remark=mysql_query("update 6scs_grading set remark='Fair' where subject_id='ECON'")or die(mysql_error());
	//This code updates the grade in the 6scs_grading table
    $queryAward=mysql_query("SELECT award from 6scs_grading where subject_id ='ECON'")or die(mysql_error());
    $rowAward=mysql_fetch_array($queryAward);
	echo $rowAward['award'];
	//I Assigned new variables to help in updating the s6 table data
	$logic_1=$rowAward['award'];
	$logic_2='('.$rowEcon['grades'].')';
	$TRANS_GRADE= "$logic_1 $logic_2";

	//This code updates the subject grade value in the  s6 table
	$query_trans=mysql_query("update s6 set ECON='$TRANS_GRADE' where id='$ID'")or die(mysql_error());
	}
	elseif($rowEcon['grades']== '1,8'||$rowEcon['grades']== '8,1'||$rowEcon['grades']== '2,8'||$rowEcon['grades']== '8,2'||$rowEcon['grades']== '3,8'||$rowEcon['grades']== '8,3'||$rowEcon['grades']== '8,4'||$rowEcon['grades']== '4,8'||$rowEcon['grades']== '9,4'||$rowEcon['grades']== '4,9'||$rowEcon['grades']== '7,7'||$rowEcon['grades']== '7,8'||$rowEcon['grades']== '8,7'||$rowEcon['grades']== '7,9'||$rowEcon['grades']== '9,7'||$rowEcon['grades']== '5,8'||$rowEcon['grades']== '8,5'||$rowEcon['grades']== '5,9'||$rowEcon['grades']== '9,5'||$rowEcon['grades']== '6,9'||$rowEcon['grades']== '9,6'||$rowEcon['grades']== '6,8'||$rowEcon['grades']== '8,6'||$rowEcon['grades']== '8,8'||$rowEcon['grades']== '9,1'||$rowEcon['grades']== '1,9'||$rowEcon['grades']== '9,2'||$rowEcon['grades']== '2,9'||$rowEcon['grades']== '9,3'||$rowEcon['grades']== '3,9'||$rowEcon['grades']== '9,4'||$rowEcon['grades']== '4,9')
	{
	//This code inserts the grade in the  6scs_grading
	$queryx1=mysql_query("update 6scs_grading set award='O' where subject_id='ECON'")or die(mysql_error());
	//This code inserts the grade value in the  6scs_grading table
	$query_value=mysql_query("update 6scs_grading set value='1' where subject_id='ECON'")or die(mysql_error());
	//This code inserts the grade remark in the  6scs_grading table
	$query_remark=mysql_query("update 6scs_grading set remark='Improve' where subject_id='ECON'")or die(mysql_error());
	//This code updates the grade in the 6scs_grading table
    $queryAward=mysql_query("SELECT award from 6scs_grading where subject_id ='ECON'")or die(mysql_error());
    $rowAward=mysql_fetch_array($queryAward);
	echo $rowAward['award'];
	//I Assigned new variables to help in updating the s6 table data
	$logic_1=$rowAward['award'];
	$logic_2='('.$rowEcon['grades'].')';
	$TRANS_GRADE= "$logic_1 $logic_2";

	//This code updates the subject grade value in the  s6 table
	$query_trans=mysql_query("update s6 set ECON='$TRANS_GRADE' where id='$ID'")or die(mysql_error());
	}
	elseif($rowEcon['grades']== '9,8'||$rowEcon['grades']== '8,9'||$rowEcon['grades']== '9,9')
	{
	//This code inserts the grade in the  6scs_grading
	$queryx1=mysql_query("update 6scs_grading set award='F' where subject_id='ECON'")or die(mysql_error());
	//This code inserts the grade value in the  6scs_grading table
	$query_value=mysql_query("update 6scs_grading set value='0' where subject_id='ECON'")or die(mysql_error());
	//This code inserts the grade remark in the  6scs_grading table
	$query_remark=mysql_query("update 6scs_grading set remark='Improve' where subject_id='ECON'")or die(mysql_error());
	//This code updates the grade in the 6scs_grading table
    $queryAward=mysql_query("SELECT award from 6scs_grading where subject_id ='ECON'")or die(mysql_error());
    $rowAward=mysql_fetch_array($queryAward);
	echo $rowAward['award'];
	//I Assigned new variables to help in updating the s6 table data
	$logic_1=$rowAward['award'];
	$logic_2='('.$rowEcon['grades'].')';
	$TRANS_GRADE= "$logic_1 $logic_2";

	//This code updates the subject grade value in the  s6 table
	$query_trans=mysql_query("update s6 set ECON='$TRANS_GRADE' where id='$ID'")or die(mysql_error());
	}
	}
	?>"/></td>
    <td align="center">1</td>
    <td align="center"><?php echo $row6['paper_one_mot']; ?></td>   
     <td align="center"><?php echo $row6['paper_one_end']; ?></td>
    <td align="center"><?php 
	 
	if($rowf['Total']<= '34' and $rowf['Total']>='1')
	{
	echo'F9';
	$a='9'.',';
	//This code stores the grade in 6scs_grading
	$queryx1=mysql_query("update 6scs_grading set grades='$a' where subject_id='ECON'")or die(mysql_error());
	
	}
	elseif($rowf['Total']<= '39' and $rowf['Total']>='35')
	{
	echo'P8';
	$b='8'.',';
	//This code stores the grade in 6scs_grading
   $queryx1=mysql_query("update 6scs_grading set grades='$b' where subject_id='ECON'")or die(mysql_error());
	}
	elseif($rowf['Total']<= '49' and $rowf['Total']>='40')
	{
	echo'P7';
	$c='7'.',';
	//This code stores the grade in 6scs_grading
	$queryx1=mysql_query("update 6scs_grading set grades='$c' where subject_id='ECON'")or die(mysql_error());
	}
	elseif($rowf['Total']<= '54' and $rowf['Total']>='50')
	{
	echo'C6';
	$d='6'.',';
	//This code stores the grade in 6scs_grading
	$queryx1=mysql_query("update 6scs_grading set grades='$d' where subject_id='ECON'")or die(mysql_error());
	}
	elseif($rowf['Total']<= '59' and $rowf['Total']>='55')
	{
	echo'C5'; 
	$e='5'.',';
	//This code stores the grade in 6scs_grading
	$queryx1=mysql_query("update 6scs_grading set grades='$e' where subject_id='ECON'")or die(mysql_error());
	}
	elseif($rowf['Total']<= '64' and $rowf['Total']>='60')
	{
	echo'C4';
	$f='4'.',';
	//This code stores the grade in 6scs_grading
	$queryx1=mysql_query("update 6scs_grading set grades='$f' where subject_id='ECON'")or die(mysql_error());
	}
	elseif($rowf['Total']<= '74' and $rowf['Total']>='65')
	{
	echo'C3';
	$g='3'.',';
	//This code stores the grade in 6scs_grading
	$queryx1=mysql_query("update 6scs_grading set grades='$g' where subject_id='ECON'")or die(mysql_error());
	}
	elseif($rowf['Total']<= '79' and $rowf['Total']>='75')
	{
	echo'D2';
	$h='2'.',';
	//This code stores the grade in 6scs_grading
	$queryx1=mysql_query("update 6scs_grading set grades='$h' where subject_id='ECON'")or die(mysql_error());
	}
	elseif($rowf['Total']<= '100' and $rowf['Total']>='80')
	{
	echo'D1';
	$i='1'.',';
	//This code stores the grade in 6scs_grading
	$queryx1=mysql_query("update 6scs_grading set grades='$i' where subject_id='ECON'")or die(mysql_error());
	}
	?></td>
    <td align="center" rowspan="2" style="color:#1b5e94;"><?php 
	//This code selects the remark in the 6scs_grading table
    $query_remark=mysql_query("SELECT remark from 6scs_grading where subject_id ='ECON'")or die(mysql_error());
    $row_remark=mysql_fetch_array($query_remark);
	echo $row_remark['remark'];?></td>
    <td align="center" rowspan="2"><?php echo $rowZ['ECON'];?></td>
  </tr>
  <tr bgcolor="#999999">
    <td align="center">2</td>
    <td align="center"><?php echo $row6['two_paper_mot']; ?></td>
    <td align="center"><?php echo $row6['two_paper_end']; ?></td>
    <td align="center"><?php 
	 if($rowl['Total']=="")
	{
	$queryx2=mysql_query("update 6scs_grading set grades=null,award=null,value=null,remark=null where subject_id='ECON'")or die(mysql_error());
	}
	elseif($rowl['Total']<= '34' and $rowl['Total']>='1')
	{
	echo'F9';
	$a='9';
	//This code stores the grade in 6scs_grading
	$queryx2=mysql_query("UPDATE 6scs_grading SET grades= concat(grades,'$a') WHERE `6scs_grading`.`subject_id` = 'ECON'")or die(mysql_error());
	}
	elseif($rowl['Total']<= '39' and $rowl['Total']>='35')
	{
	echo'P8';
	$b='8';
	//This code stores the grade in 6scs_grading
	$queryx2=mysql_query("UPDATE 6scs_grading SET grades= concat(grades,'$b') WHERE `6scs_grading`.`subject_id` = 'ECON'")or die(mysql_error());
	}
	elseif($rowl['Total']<= '49' and $rowl['Total']>='40')
	{
	echo'P7';
	$c='7';
	//This code stores the grade in 6scs_grading
	$queryx2=mysql_query("UPDATE 6scs_grading SET grades= concat(grades,'$c') WHERE `6scs_grading`.`subject_id` = 'ECON'")or die(mysql_error());
	}
	elseif($rowl['Total']<= '54' and $rowl['Total']>='50')
	{
	echo'C6';
	$d='6';
	//This code stores the grade in 6scs_grading
	$queryx2=mysql_query("UPDATE 6scs_grading SET grades= concat(grades,'$d') WHERE `6scs_grading`.`subject_id` = 'ECON'")or die(mysql_error());
	}
	elseif($rowl['Total']<= '59' and $rowl['Total']>='55')
	{
	echo'C5';
	$e='5';
	//This code stores the grade in 6scs_grading
	$queryx2=mysql_query("UPDATE 6scs_grading SET grades= concat(grades,'$e') WHERE `6scs_grading`.`subject_id` = 'ECON'")or die(mysql_error());
	}
	elseif($rowl['Total']<= '64' and $rowl['Total']>='60')
	{
	echo'C4';
	$f='4';
	//This code stores the grade in 6scs_grading
	$queryx2=mysql_query("UPDATE 6scs_grading SET grades= concat(grades,'$f') WHERE `6scs_grading`.`subject_id` = 'ECON'")or die(mysql_error());
	}
	elseif($rowl['Total']<= '74' and $rowl['Total']>='65')
	{
	echo'C3';
	$g='3';
	//This code stores the grade in 6scs_grading
	$queryx2=mysql_query("UPDATE 6scs_grading SET grades= concat(grades,'$g') WHERE `6scs_grading`.`subject_id` = 'ECON'")or die(mysql_error());
	}
	elseif($rowl['Total']<= '79' and $rowl['Total']>='75')
	{
	echo'D2';
	$h='2';
	//This code stores the grade in 6scs_grading
	$queryx2=mysql_query("UPDATE 6scs_grading SET grades= concat(grades,'$h') WHERE `6scs_grading`.`subject_id` = 'ECON'")or die(mysql_error());
	}
	elseif($rowl['Total']<= '100' and $rowl['Total']>='80')
	{
	echo'D1';
	$i='1';
	//This code stores the grade in 6scs_grading
	$queryx2=mysql_query("UPDATE 6scs_grading SET grades= concat(grades,'$i') WHERE `6scs_grading`.`subject_id` = 'ECON'")or die(mysql_error());
	}
	?></td>
  </tr>
  <tr bgcolor="#CCCCCC">
    <td rowspan="3">Entrep</td>
    <td rowspan="3"><input type="text" name="ent" size="2px"  style="height:20px;border:groove; font-size:24px;" value="<?php 
	
	//******************************* HERE IS THE MAGIC *******************************************
    //This code perfects the Grading of the student by following the UACE Stands 
	
	if($row7['paper_one_mot']=='')
	{
	$query=mysql_query("update 6scs_grading set grades=null,award=null,value=null,remark=null where subject_id='ENT'")or die(mysql_error());
	 $query_change=mysql_query("update s6 set ENT=null where id='$ID'")or die(mysql_error());
	}else{
    $queryENT=mysql_query("SELECT grades from 6scs_grading where subject_id ='ENT'")or die(mysql_error());
    $rowENT=mysql_fetch_array($queryENT);
	if($rowENT['grades']== '1,1,1'||$rowENT['grades']== '1,1,2'||$rowENT['grades']== '2,1,1'||$rowENT['grades']== '1,2,1'||$rowENT['grades']== '1,2,2'||$rowENT['grades']== '2,1,2'||$rowENT['grades']== '2,2,1'||$rowENT['grades']== '2,2,2'||$rowENT['grades']== '1,3,1'||$rowENT['grades']== '1,1,3'||$rowENT['grades']== '3,1,1'||$rowENT['grades']== '1,2,3'||$rowENT['grades']== '3,2,1'||$rowENT['grades']== '3,1,2'||$rowENT['grades']== '2,3,1'||$rowENT['grades']== '1,3,2'||$rowENT['grades']== '2,1,3'||$rowENT['grades']== '2,3,2'||$rowENT['grades']== '3,2,2'||$rowENT['grades']== '2,2,3')
	{
	//This code inserts the grade in the  6scs_grading table
	$queryx6=mysql_query("update 6scs_grading set award='A' where subject_id='ENT'")or die(mysql_error());
	//This code inserts the grade value in the  6scs_grading table
	$query_value=mysql_query("update 6scs_grading set value='6' where subject_id='ENT'")or die(mysql_error());
	//This code inserts the grade remark in the  6scs_grading table
	$query_remark=mysql_query("update 6scs_grading set remark='Excellent' where subject_id='ENT'")or die(mysql_error());
	//This code updates the grade in the 6scs_grading table
	$queryAward=mysql_query("SELECT award from 6scs_grading where subject_id ='ENT'")or die(mysql_error());
    $rowAward=mysql_fetch_array($queryAward);
	echo $rowAward['award'];
	//I Assigned new variables to help in updating the s6 table data
	$logic_1=$rowAward['award'];
	$logic_2='('.$rowENT['grades'].')';
	$TRANS_GRADE= "$logic_1 $logic_2";

	//This code updates the subject grade value in the  s6 table
	$query_trans=mysql_query("update s6 set ENT='$TRANS_GRADE' where id='$ID'")or die(mysql_error());
	}
	elseif($rowENT['grades']== '1,3,3'||$rowENT['grades']== '3,3,1'||$rowENT['grades']== '3,1,3'||$rowENT['grades']== '3,3,2'||$rowENT['grades']== '2,3,3'||$rowENT['grades']== '3,2,3'||$rowENT['grades']== '3,3,3'||$rowENT['grades']== '1,4,2'||$rowENT['grades']== '2,4,1'||$rowENT['grades']== '4,1,2'||$rowENT['grades']== '4,2,1'||$rowENT['grades']== '2,1,4'||$rowENT['grades']== '1,4,3'||$rowENT['grades']== '1,3,4'||$rowENT['grades']== '3,4,1'||$rowENT['grades']== '4,1,3'||$rowENT['grades']== '3,1,4'||$rowENT['grades']== '4,3,1'||$rowENT['grades']== '3,4,2'||$rowENT['grades']== '2,4,3'||$rowENT['grades']== '4,3,2'||$rowENT['grades']== '4,2,3'||$rowENT['grades']== '2,3,4'||$rowENT['grades']== '1,1,4'||$rowENT['grades']== '4,1,1'||$rowENT['grades']== '1,4,1'||$rowENT['grades']== '4,2,2'||$rowENT['grades']== '2,2,4'||$rowENT['grades']== '2,4,2'||$rowENT['grades']== '4,3,3'||$rowENT['grades']== '3,3,4'||$rowENT['grades']== '3,4,3')
	{
	//This code inserts the grade in the  6scs_grading
	$queryx6=mysql_query("update 6scs_grading set award='B' where subject_id='ENT'")or die(mysql_error());
	//This code inserts the grade value in the  6scs_grading table
	$query_value=mysql_query("update 6scs_grading set value='5' where subject_id='ENT'")or die(mysql_error());
	//This code inserts the grade remark in the  6scs_grading table
	$query_remark=mysql_query("update 6scs_grading set remark='Very Good' where subject_id='ENT'")or die(mysql_error());
	//This code updates the grade in the 6scs_grading table
    $queryAward=mysql_query("SELECT award from 6scs_grading where subject_id ='ENT'")or die(mysql_error());
    $rowAward=mysql_fetch_array($queryAward);
	echo $rowAward['award'];
		//I Assigned new variables to help in updating the s6 table data
	$logic_1=$rowAward['award'];
	$logic_2='('.$rowENT['grades'].')';
	$TRANS_GRADE= "$logic_1 $logic_2";

	//This code updates the subject grade value in the  s6 table
	$query_trans=mysql_query("update s6 set ENT='$TRANS_GRADE' where id='$ID'")or die(mysql_error());
	}
elseif($rowENT['grades']== '1,1,5'||$rowENT['grades']== '1,5,1'||$rowENT['grades']== '5,1,1'||$rowENT['grades']== '1,2,5'||$rowENT['grades']== '1,5,2'||$rowENT['grades']== '2,1,5'||$rowENT['grades']== '2,5,1'||$rowENT['grades']== '5,2,1'||$rowENT['grades']== '5,1,2'||$rowENT['grades']== '1,3,5'||$rowENT['grades']== '1,5,3'||$rowENT['grades']== '5,3,1'||$rowENT['grades']== '5,1,3'||$rowENT['grades']== '3,1,5'||$rowENT['grades']== '3,5,1'||$rowENT['grades']== '1,4,5'||$rowENT['grades']== '1,5,4'||$rowENT['grades']== '4,5,1'||$rowENT['grades']== '4,1,5'||$rowENT['grades']== '5,4,1'||$rowENT['grades']== '5,1,4'||$rowENT['grades']== '2,2,5'||$rowENT['grades']== '2,5,2'||$rowENT['grades']== '5,2,2'||$rowENT['grades']== '2,3,5'||$rowENT['grades']== '2,5,3'||$rowENT['grades']== '5,2,3'||$rowENT['grades']== '5,3,2'||$rowENT['grades']== '3,5,2'||$rowENT['grades']== '3,2,5'||$rowENT['grades']== '2,4,5'||$rowENT['grades']== '4,2,5'||$rowENT['grades']== '4,5,2'||$rowENT['grades']== '5,4,2'||$rowENT['grades']== '5,2,4'||$rowENT['grades']== '2,5,4'||$rowENT['grades']== '3,3,5'||$rowENT['grades']== '3,5,3'||$rowENT['grades']== '5,3,3'||$rowENT['grades']== '3,4,5'||$rowENT['grades']== '3,5,4'||$rowENT['grades']== '5,3,4'||$rowENT['grades']== '5,4,3'||$rowENT['grades']== '4,5,3'||$rowENT['grades']== '4,3,5'||$rowENT['grades']== '4,4,5'||$rowENT['grades']== '4,5,4'||$rowENT['grades']== '5,4,4'||$rowENT['grades']== '4,4,4'||$rowENT['grades']== '4,4,1'||$rowENT['grades']== '4,1,4'||$rowENT['grades']== '1,4,4'||$rowENT['grades']== '4,4,2'||$rowENT['grades']== '4,2,4'||$rowENT['grades']== '2,4,4'||$rowENT['grades']== '4,4,3'||$rowENT['grades']== '4,3,4'||$rowENT['grades']== '3,4,4')
	{
	//This code inserts the grade in the  6scs_grading
	$queryx6=mysql_query("update 6scs_grading set award='C' where subject_id='ENT'")or die(mysql_error());
	//This code inserts the grade value in the  6scs_grading table
	$query_value=mysql_query("update 6scs_grading set value='4' where subject_id='ENT'")or die(mysql_error());
	//This code inserts the grade remark in the  6scs_grading table
	$query_remark=mysql_query("update 6scs_grading set remark='Good' where subject_id='ENT'")or die(mysql_error());
	//This code updates the grade in the 6scs_grading table
    $queryAward=mysql_query("SELECT award from 6scs_grading where subject_id ='ENT'")or die(mysql_error());
    $rowAward=mysql_fetch_array($queryAward);
	echo $rowAward['award'];
		//I Assigned new variables to help in updating the s6 table data
	$logic_1=$rowAward['award'];
	$logic_2='('.$rowENT['grades'].')';
	$TRANS_GRADE= "$logic_1 $logic_2";

	//This code updates the subject grade value in the  s6 table
	$query_trans=mysql_query("update s6 set ENT='$TRANS_GRADE' where id='$ID'")or die(mysql_error());
	}
elseif($rowENT['grades']== '1,1,6'||$rowENT['grades']== '1,6,1'||$rowENT['grades']== '6,1,1'||$rowENT['grades']== '1,2,6'||$rowENT['grades']== '1,6,2'||$rowENT['grades']== '2,1,6'||$rowENT['grades']== '2,6,1'||$rowENT['grades']== '6,1,2'||$rowENT['grades']== '6,2,1'||$rowENT['grades']== '1,3,6'||$rowENT['grades']== '1,6,3'||$rowENT['grades']== '6,3,1'||$rowENT['grades']== '6,1,3'||$rowENT['grades']== '3,1,6'||$rowENT['grades']== '3,6,1'||$rowENT['grades']== '1,4,6'||$rowENT['grades']== '1,6,4'||$rowENT['grades']== '6,4,1'||$rowENT['grades']== '6,1,4'||$rowENT['grades']== '4,1,6'||$rowENT['grades']== '4,6,1'||$rowENT['grades']== '1,5,6'||$rowENT['grades']== '1,6,5'||$rowENT['grades']== '6,5,1'||$rowENT['grades']== '6,1,5'||$rowENT['grades']== '5,1,6'||$rowENT['grades']== '5,6,1'||$rowENT['grades']== '2,2,6'||$rowENT['grades']== '2,6,2'||$rowENT['grades']== '6,2,2'||$rowENT['grades']== '2,3,6'||$rowENT['grades']== '2,6,3'||$rowENT['grades']== '6,2,3'||$rowENT['grades']== '6,3,2'||$rowENT['grades']== '3,6,2'||$rowENT['grades']== '3,2,6'||$rowENT['grades']== '2,4,6'||$rowENT['grades']== '2,6,4'||$rowENT['grades']== '6,2,4'||$rowENT['grades']== '6,4,2'||$rowENT['grades']== '4,6,2'||$rowENT['grades']== '4,2,6'||$rowENT['grades']== '2,5,6'||$rowENT['grades']== '2,6,5'||$rowENT['grades']== '5,2,6'||$rowENT['grades']== '5,6,2'||$rowENT['grades']== '6,2,5'||$rowENT['grades']== '6,5,2'||$rowENT['grades']== '3,3,6'||$rowENT['grades']== '3,6,3'||$rowENT['grades']== '6,3,3'||$rowENT['grades']== '3,4,6'||$rowENT['grades']== '3,6,4'||$rowENT['grades']== '6,3,4'||$rowENT['grades']== '6,4,3'||$rowENT['grades']== '4,6,3'||$rowENT['grades']== '4,3,6'||$rowENT['grades']== '3,5,6'||$rowENT['grades']== '3,6,5'||$rowENT['grades']== '5,3,6'||$rowENT['grades']== '5,6,3'||$rowENT['grades']== '6,3,5'||$rowENT['grades']== '6,5,3'||$rowENT['grades']== '4,4,6'||$rowENT['grades']== '4,6,4'||$rowENT['grades']== '6,4,4'||$rowENT['grades']== '4,5,6'||$rowENT['grades']== '4,6,5'||$rowENT['grades']== '5,4,6'||$rowENT['grades']== '5,6,4'||$rowENT['grades']== '6,4,5'||$rowENT['grades']== '6,5,4'||$rowENT['grades']== '1,5,5'||$rowENT['grades']== '5,1,5'||$rowENT['grades']== '5,5,1'||$rowENT['grades']== '2,5,5'||$rowENT['grades']== '5,2,5'||$rowENT['grades']== '5,5,2'||$rowENT['grades']== '3,5,5'||$rowENT['grades']== '5,3,5'||$rowENT['grades']== '5,5,3'||$rowENT['grades']== '4,5,5'||$rowENT['grades']== '5,4,5'||$rowENT['grades']== '5,5,4'||$rowENT['grades']== '5,5,5'||$rowENT['grades']== '6,5,5'||$rowENT['grades']== '5,6,5'||$rowENT['grades']== '5,5,6')
	{
	//This code inserts the grade in the  6scs_grading
	$queryx6=mysql_query("update 6scs_grading set award='D' where subject_id='ENT'")or die(mysql_error());
	//This code inserts the grade value in the  6scs_grading table
	$query_value=mysql_query("update 6scs_grading set value='3' where subject_id='ENT'")or die(mysql_error());
	//This code inserts the grade remark in the  6scs_grading table
	$query_remark=mysql_query("update 6scs_grading set remark='Fairly Good' where subject_id='ENT'")or die(mysql_error());
	//This code updates the grade in the 6scs_grading table
    $queryAward=mysql_query("SELECT award from 6scs_grading where subject_id ='ENT'")or die(mysql_error());
    $rowAward=mysql_fetch_array($queryAward);
	echo $rowAward['award'];
		//I Assigned new variables to help in updating the s6 table data
	$logic_1=$rowAward['award'];
	$logic_2='('.$rowENT['grades'].')';
	$TRANS_GRADE= "$logic_1 $logic_2";

	//This code updates the subject grade value in the  s6 table
	$query_trans=mysql_query("update s6 set ENT='$TRANS_GRADE' where id='$ID'")or die(mysql_error());
	}
elseif($rowENT['grades']== '1,1,7'||$rowENT['grades']== '1,7,1'||$rowENT['grades']== '7,1,1'||$rowENT['grades']== '1,2,7'||$rowENT['grades']== '1,7,2'||$rowENT['grades']== '2,7,1'||$rowENT['grades']== '2,1,7'||$rowENT['grades']== '7,1,2'||$rowENT['grades']== '7,2,1'||$rowENT['grades']== '1,3,7'||$rowENT['grades']== '1,7,3'||$rowENT['grades']== '3,7,1'||$rowENT['grades']== '3,1,7'||$rowENT['grades']== '7,3,1'||$rowENT['grades']== '7,1,3'||$rowENT['grades']== '1,4,7'||$rowENT['grades']== '1,7,4'||$rowENT['grades']== '7,1,4'||$rowENT['grades']== '7,4,1'||$rowENT['grades']== '4,7,1'||$rowENT['grades']== '4,1,7'||$rowENT['grades']== '1,5,7'||$rowENT['grades']== '1,7,5'||$rowENT['grades']== '7,1,5'||$rowENT['grades']== '7,5,1'||$rowENT['grades']== '5,1,7'||$rowENT['grades']== '5,7,1'||$rowENT['grades']== '1,6,7'||$rowENT['grades']== '1,7,6'||$rowENT['grades']== '6,7,1'||$rowENT['grades']== '6,1,7'||$rowENT['grades']== '7,1,6'||$rowENT['grades']== '7,6,1'||$rowENT['grades']== '2,2,7'||$rowENT['grades']== '2,7,2'||$rowENT['grades']== '7,2,2'||$rowENT['grades']== '2,3,7'||$rowENT['grades']== '2,7,3'||$rowENT['grades']== '3,2,7'||$rowENT['grades']== '3,7,2'||$rowENT['grades']== '7,3,2'||$rowENT['grades']== '7,2,3'||$rowENT['grades']== '2,4,7'||$rowENT['grades']== '2,7,4'||$rowENT['grades']== '4,2,7'||$rowENT['grades']== '4,7,2'||$rowENT['grades']== '7,2,4'||$rowENT['grades']== '7,4,2'||$rowENT['grades']== '2,5,7'||$rowENT['grades']== '2,7,5'||$rowENT['grades']== '5,7,2'||$rowENT['grades']== '5,2,7'||$rowENT['grades']== '7,2,5'||$rowENT['grades']== '7,5,2'||$rowENT['grades']== '2,6,7'||$rowENT['grades']== '2,7,6'||$rowENT['grades']== '6,7,2'||$rowENT['grades']== '6,2,7'||$rowENT['grades']== '7,6,2'||$rowENT['grades']== '7,2,6'||$rowENT['grades']== '3,3,7'||$rowENT['grades']== '3,7,3'||$rowENT['grades']== '7,3,3'||$rowENT['grades']== '3,4,7'||$rowENT['grades']== '3,7,4'||$rowENT['grades']== '4,3,7'||$rowENT['grades']== '4,7,3'||$rowENT['grades']== '7,3,4'||$rowENT['grades']== '7,4,3'||$rowENT['grades']== '3,5,7'||$rowENT['grades']== '3,7,5'||$rowENT['grades']== '5,3,7'||$rowENT['grades']== '5,7,3'||$rowENT['grades']== '7,5,3'||$rowENT['grades']== '7,3,5'||$rowENT['grades']== '3,6,7'||$rowENT['grades']== '3,7,6'||$rowENT['grades']== '6,3,7'||$rowENT['grades']== '6,7,3'||$rowENT['grades']== '7,3,6'||$rowENT['grades']== '7,6,3'||$rowENT['grades']== '4,4,7'||$rowENT['grades']== '4,7,4'||$rowENT['grades']== '7,4,4'||$rowENT['grades']== '4,5,7'||$rowENT['grades']== '4,7,5'||$rowENT['grades']== '5,7,4'||$rowENT['grades']== '5,4,7'||$rowENT['grades']== '7,4,5'||$rowENT['grades']== '7,5,4'||$rowENT['grades']== '4,6,7'||$rowENT['grades']== '4,7,6'||$rowENT['grades']== '6,7,4'||$rowENT['grades']== '6,4,7'||$rowENT['grades']== '7,4,6'||$rowENT['grades']== '7,6,4'||$rowENT['grades']== '5,5,7'||$rowENT['grades']== '5,7,5'||$rowENT['grades']== '7,5,5'||$rowENT['grades']== '5,6,7'||$rowENT['grades']== '5,7,6'||$rowENT['grades']== '6,5,7'||$rowENT['grades']== '6,7,5'||$rowENT['grades']== '7,6,5'||$rowENT['grades']== '7,5,6'||$rowENT['grades']== '6,6,7'||$rowENT['grades']== '6,7,6'||$rowENT['grades']== '7,6,6'||$rowENT['grades']== '1,6,6'||$rowENT['grades']== '6,1,6'||$rowENT['grades']== '6,6,1'||$rowENT['grades']== '2,6,6'||$rowENT['grades']== '6,2,6'||$rowENT['grades']== '6,6,2'||$rowENT['grades']== '3,6,6'||$rowENT['grades']== '6,3,6'||$rowENT['grades']== '6,6,3'||$rowENT['grades']== '4,6,6'||$rowENT['grades']== '6,4,6'||$rowENT['grades']== '6,6,4'||$rowENT['grades']== '5,6,6'||$rowENT['grades']== '6,5,6'||$rowENT['grades']== '6,6,5'||$rowENT['grades']== '6,6,6'||
$rowENT['grades']== '1,1,8'||$rowENT['grades']== '1,8,1'||$rowENT['grades']== '8,1,1'||$rowENT['grades']== '1,2,8'||$rowENT['grades']== '1,8,2'||$rowENT['grades']== '2,8,1'||$rowENT['grades']== '2,1,8'||$rowENT['grades']== '8,1,2'||$rowENT['grades']== '8,2,1'||$rowENT['grades']== '1,3,8'||$rowENT['grades']== '1,8,3'||$rowENT['grades']== '3,8,1'||$rowENT['grades']== '3,1,8'||$rowENT['grades']== '8,3,1'||$rowENT['grades']== '8,1,3'||$rowENT['grades']== '1,4,8'||$rowENT['grades']== '1,8,4'||$rowENT['grades']== '8,1,4'||$rowENT['grades']== '8,4,1'||$rowENT['grades']== '4,8,1'||$rowENT['grades']== '4,1,8'||$rowENT['grades']== '1,5,8'||$rowENT['grades']== '1,8,5'||$rowENT['grades']== '8,1,5'||$rowENT['grades']== '8,5,1'||$rowENT['grades']== '5,1,8'||$rowENT['grades']== '5,8,1'||$rowENT['grades']== '1,6,8'||$rowENT['grades']== '1,8,6'||$rowENT['grades']== '6,8,1'||$rowENT['grades']== '6,1,8'||$rowENT['grades']== '8,1,6'||$rowENT['grades']== '8,6,1'||$rowENT['grades']== '2,2,8'||$rowENT['grades']== '2,8,2'||$rowENT['grades']== '8,2,2'||$rowENT['grades']== '2,3,8'||$rowENT['grades']== '2,8,3'||$rowENT['grades']== '3,2,8'||$rowENT['grades']== '3,8,2'||$rowENT['grades']== '8,3,2'||$rowENT['grades']== '8,2,3'||$rowENT['grades']== '2,4,8'||$rowENT['grades']== '2,8,4'||$rowENT['grades']== '4,2,8'||$rowENT['grades']== '4,8,2'||$rowENT['grades']== '8,2,4'||$rowENT['grades']== '8,4,2'||$rowENT['grades']== '2,5,8'||$rowENT['grades']== '2,8,5'||$rowENT['grades']== '5,8,2'||$rowENT['grades']== '5,2,8'||$rowENT['grades']== '8,2,5'||$rowENT['grades']== '8,5,2'||$rowENT['grades']== '2,6,8'||$rowENT['grades']== '2,8,6'||$rowENT['grades']== '6,8,2'||$rowENT['grades']== '6,2,8'||$rowENT['grades']== '8,6,2'||$rowENT['grades']== '8,2,6'||$rowENT['grades']== '3,3,8'||$rowENT['grades']== '3,8,3'||$rowENT['grades']== '8,3,3'||$rowENT['grades']== '3,4,8'||$rowENT['grades']== '3,8,4'||$rowENT['grades']== '4,3,8'||$rowENT['grades']== '4,8,3'||$rowENT['grades']== '8,3,4'||$rowENT['grades']== '8,4,3'||$rowENT['grades']== '3,5,8'||$rowENT['grades']== '3,8,5'||$rowENT['grades']== '5,3,8'||$rowENT['grades']== '5,8,3'||$rowENT['grades']== '8,5,3'||$rowENT['grades']== '8,3,5'||$rowENT['grades']== '3,6,8'||$rowENT['grades']== '3,8,6'||$rowENT['grades']== '6,3,8'||$rowENT['grades']== '6,8,3'||$rowENT['grades']== '8,3,6'||$rowENT['grades']== '8,6,3'||$rowENT['grades']== '4,4,8'||$rowENT['grades']== '4,8,4'||$rowENT['grades']== '8,4,4'||$rowENT['grades']== '4,5,8'||$rowENT['grades']== '4,8,5'||$rowENT['grades']== '5,8,4'||$rowENT['grades']== '5,4,8'||$rowENT['grades']== '8,4,5'||$rowENT['grades']== '8,5,4'||$rowENT['grades']== '4,6,8'||$rowENT['grades']== '4,8,6'||$rowENT['grades']== '6,8,4'||$rowENT['grades']== '6,4,8'||$rowENT['grades']== '8,4,6'||$rowENT['grades']== '8,6,4'||$rowENT['grades']== '5,5,8'||$rowENT['grades']== '5,8,5'||$rowENT['grades']== '8,5,5'||$rowENT['grades']== '5,6,8'||$rowENT['grades']== '5,8,6'||$rowENT['grades']== '6,5,8'||$rowENT['grades']== '6,8,5'||$rowENT['grades']== '8,6,5'||$rowENT['grades']== '8,5,6'||$rowENT['grades']== '6,6,8'||$rowENT['grades']== '6,8,6'||$rowENT['grades']== '8,6,6')
	{
	//This code inserts the grade in the  6scs_grading
	$queryx6=mysql_query("update 6scs_grading set award='E' where subject_id='ENT'")or die(mysql_error());
	//This code inserts the grade value in the  6scs_grading table
	$query_value=mysql_query("update 6scs_grading set value='2' where subject_id='ENT'")or die(mysql_error());
	//This code inserts the grade remark in the  6scs_grading table
	$query_remark=mysql_query("update 6scs_grading set remark='Fair' where subject_id='ENT'")or die(mysql_error());
	//This code updates the grade in the 6scs_grading table
    $queryAward=mysql_query("SELECT award from 6scs_grading where subject_id ='ENT'")or die(mysql_error());
    $rowAward=mysql_fetch_array($queryAward);
	echo $rowAward['award'];
		//I Assigned new variables to help in updating the s6 table data
	$logic_1=$rowAward['award'];
	$logic_2='('.$rowENT['grades'].')';
	$TRANS_GRADE= "$logic_1 $logic_2";

	//This code updates the subject grade value in the  s6 table
	$query_trans=mysql_query("update s6 set ENT='$TRANS_GRADE' where id='$ID'")or die(mysql_error());
	}
elseif($rowENT['grades']== '1,7,7'||$rowENT['grades']== '7,1,7'||$rowENT['grades']== '7,7,1'||$rowENT['grades']== '2,7,7'||$rowENT['grades']== '7,2,7'||$rowENT['grades']== '7,7,2'||$rowENT['grades']== '3,7,7'||$rowENT['grades']== '7,3,7'||$rowENT['grades']== '7,7,3'||$rowENT['grades']== '4,7,7'||$rowENT['grades']== '7,4,7'||$rowENT['grades']== '7,7,4'||$rowENT['grades']== '5,7,7'||$rowENT['grades']== '7,5,7'||$rowENT['grades']== '7,7,5'||$rowENT['grades']== '6,7,7'||$rowENT['grades']== '7,6,7'||$rowENT['grades']== '7,7,6'||$rowENT['grades']== '1,8,8'||$rowENT['grades']== '8,1,8'||$rowENT['grades']== '8,8,1'||$rowENT['grades']== '2,8,8'||$rowENT['grades']== '8,2,8'||$rowENT['grades']== '8,8,2'||$rowENT['grades']== '3,8,8'||$rowENT['grades']== '8,3,8'||$rowENT['grades']== '8,8,3'||$rowENT['grades']== '4,8,8'||$rowENT['grades']== '8,4,8'||$rowENT['grades']== '8,8,4'||$rowENT['grades']== '5,8,8'||$rowENT['grades']== '8,5,8'||$rowENT['grades']== '8,8,5'||$rowENT['grades']== '6,8,8'||$rowENT['grades']== '8,6,8'||$rowENT['grades']== '8,8,6'||$rowENT['grades']== '1,7,8'||$rowENT['grades']== '1,8,7'||$rowENT['grades']== '7,8,1'||$rowENT['grades']== '7,1,8'||$rowENT['grades']== '8,1,7'||$rowENT['grades']== '8,7,1'||$rowENT['grades']== '2,7,8'||$rowENT['grades']== '2,8,7'||$rowENT['grades']== '7,8,2'||$rowENT['grades']== '7,2,8'||$rowENT['grades']== '8,2,7'||$rowENT['grades']== '8,7,2'||$rowENT['grades']== '3,7,8'||$rowENT['grades']== '3,8,7'||$rowENT['grades']== '7,8,3'||$rowENT['grades']== '7,3,8'||$rowENT['grades']== '8,3,7'||$rowENT['grades']== '8,7,3'||$rowENT['grades']== '4,7,8'||$rowENT['grades']== '4,8,7'||$rowENT['grades']== '7,8,4'||$rowENT['grades']== '7,4,8'||$rowENT['grades']== '8,4,7'||$rowENT['grades']== '8,7,4'||$rowENT['grades']== '5,7,8'||$rowENT['grades']== '5,8,7'||$rowENT['grades']== '7,8,5'||$rowENT['grades']== '7,5,8'||$rowENT['grades']== '8,5,7'||$rowENT['grades']== '8,7,5'||$rowENT['grades']== '6,7,8'||$rowENT['grades']== '6,8,7'||$rowENT['grades']== '7,8,6'||$rowENT['grades']== '7,6,8'||$rowENT['grades']== '8,6,7'||$rowENT['grades']== '8,7,6'||$rowENT['grades']== '1,1,9'||$rowENT['grades']== '1,9,1'||$rowENT['grades']== '9,1,1'||$rowENT['grades']== '1,2,9'||$rowENT['grades']== '1,9,2'||$rowENT['grades']== '9,1,2'||$rowENT['grades']== '9,2,1'||$rowENT['grades']== '2,9,1'||$rowENT['grades']== '2,1,9'||$rowENT['grades']== '1,3,9'||$rowENT['grades']== '1,9,3'||$rowENT['grades']== '3,1,9'||$rowENT['grades']== '3,9,1'||$rowENT['grades']== '9,3,1'||$rowENT['grades']== '9,1,3'||$rowENT['grades']== '1,4,9'||$rowENT['grades']== '1,9,4'||$rowENT['grades']== '4,1,9'||$rowENT['grades']== '4,9,1'||$rowENT['grades']== '9,4,1'||$rowENT['grades']== '9,1,4'||$rowENT['grades']== '1,5,9'||$rowENT['grades']== '1,9,5'||$rowENT['grades']== '5,1,9'||$rowENT['grades']== '5,9,1'||$rowENT['grades']== '9,5,1'||$rowENT['grades']== '9,1,5'||$rowENT['grades']== '1,6,9'||$rowENT['grades']== '1,9,6'||$rowENT['grades']== '6,1,9'||$rowENT['grades']== '6,9,1'||$rowENT['grades']== '9,6,1'||$rowENT['grades']== '9,1,6'||$rowENT['grades']== '2,2,9'||$rowENT['grades']== '2,9,2'||$rowENT['grades']== '9,2,2'||$rowENT['grades']== '2,3,9'||$rowENT['grades']== '2,9,3'||$rowENT['grades']== '3,2,9'||$rowENT['grades']== '3,9,2'||$rowENT['grades']== '9,3,2'||$rowENT['grades']== '9,2,3'||$rowENT['grades']== '2,4,9'||$rowENT['grades']== '2,9,4'||$rowENT['grades']== '4,2,9'||$rowENT['grades']== '4,9,2'||$rowENT['grades']== '9,4,2'||$rowENT['grades']== '9,2,4'||$rowENT['grades']== '2,5,9'||$rowENT['grades']== '2,9,5'||$rowENT['grades']== '5,2,9'||$rowENT['grades']== '5,9,2'||$rowENT['grades']== '9,5,2'||$rowENT['grades']== '9,2,5'||$rowENT['grades']== '2,6,9'||$rowENT['grades']== '2,9,6'||$rowENT['grades']== '6,2,9'||$rowENT['grades']== '6,9,2'||$rowENT['grades']== '9,6,2'||$rowENT['grades']== '9,2,6'||$rowENT['grades']== '3,3,9'||$rowENT['grades']== '3,9,3'||$rowENT['grades']== '9,3,3'||$rowENT['grades']== '3,4,9'||$rowENT['grades']== '3,9,4'||$rowENT['grades']== '9,3,4'||$rowENT['grades']== '9,4,3'||$rowENT['grades']== '4,3,9'||$rowENT['grades']== '4,9,3'||$rowENT['grades']== '3,5,9'||$rowENT['grades']== '3,9,5'||$rowENT['grades']== '9,3,5'||$rowENT['grades']== '9,5,3'||$rowENT['grades']== '5,3,9'||$rowENT['grades']== '5,9,3'||$rowENT['grades']== '3,6,9'||$rowENT['grades']== '3,9,6'||$rowENT['grades']== '9,3,6'||$rowENT['grades']== '9,6,3'||$rowENT['grades']== '6,3,9'||$rowENT['grades']== '6,9,3'||$rowENT['grades']== '4,4,9'||$rowENT['grades']== '4,9,4'||$rowENT['grades']== '9,4,4'||$rowENT['grades']== '4,5,9'||$rowENT['grades']== '4,9,5'||$rowENT['grades']== '9,4,5'||$rowENT['grades']== '9,5,4'||$rowENT['grades']== '5,4,9'||$rowENT['grades']== '5,9,4'||$rowENT['grades']== '4,6,9'||$rowENT['grades']== '4,9,6'||$rowENT['grades']== '9,4,6'||$rowENT['grades']== '9,6,4'||$rowENT['grades']== '6,4,9'||$rowENT['grades']== '6,9,4'||$rowENT['grades']== '5,5,9'||$rowENT['grades']== '5,9,5'||$rowENT['grades']== '9,5,5'||$rowENT['grades']== '5,6,9'||$rowENT['grades']== '5,9,6'||$rowENT['grades']== '6,5,9'||$rowENT['grades']== '6,9,5'||$rowENT['grades']== '9,6,5'||$rowENT['grades']== '9,5,6'||$rowENT['grades']== '6,6,9'||$rowENT['grades']== '6,9,6'||$rowENT['grades']== '9,6,6')
	{
	//This code inserts the grade in the  6scs_grading
	$queryx6=mysql_query("update 6scs_grading set award='O' where subject_id='ENT'")or die(mysql_error());
	//This code inserts the grade value in the  6scs_grading table
	$query_value=mysql_query("update 6scs_grading set value='1' where subject_id='ENT'")or die(mysql_error());
	//This code inserts the grade remark in the  6scs_grading table
	$query_remark=mysql_query("update 6scs_grading set remark='Improve' where subject_id='ENT'")or die(mysql_error());
	//This code updates the grade in the 6scs_grading table
    $queryAward=mysql_query("SELECT award from 6scs_grading where subject_id ='ENT'")or die(mysql_error());
    $rowAward=mysql_fetch_array($queryAward);
	echo $rowAward['award'];
		//I Assigned new variables to help in updating the s6 table data
	$logic_1=$rowAward['award'];
	$logic_2='('.$rowENT['grades'].')';
	$TRANS_GRADE= "$logic_1 $logic_2";

	//This code updates the subject grade value in the  s6 table
	$query_trans=mysql_query("update s6 set ENT='$TRANS_GRADE' where id='$ID'")or die(mysql_error());
	}
	elseif($rowENT['grades']== '9,8,8'||$rowENT['grades']== '8,8,9'||$rowENT['grades']== '8,9,8'||$rowENT['grades']== '9,9,9'||$rowENT['grades']== '9,7,7'||$rowENT['grades']== '7,7,9'||$rowENT['grades']== '7,9,7'||$rowENT['grades']== '9,9,9'||$rowENT['grades']== '1,9,9'||$rowENT['grades']== '9,1,9'||$rowENT['grades']== '9,9,1'||$rowENT['grades']== '2,9,9'||$rowENT['grades']== '9,2,9'||$rowENT['grades']== '9,9,2'||$rowENT['grades']== '3,9,9'||$rowENT['grades']== '9,3,9'||$rowENT['grades']== '9,9,3'||$rowENT['grades']== '4,9,9'||$rowENT['grades']== '9,4,9'||$rowENT['grades']== '9,9,4'||$rowENT['grades']== '5,9,9'||$rowENT['grades']== '9,5,9'||$rowENT['grades']== '9,9,5'||$rowENT['grades']== '6,9,9'||$rowENT['grades']== '9,6,9'||$rowENT['grades']== '9,9,6')
	{
	//This code inserts the grade in the  6scs_grading
	$queryx6=mysql_query("update 6scs_grading set award='F' where subject_id='ENT'")or die(mysql_error());
	//This code inserts the grade value in the  6scs_grading table
	$query_value=mysql_query("update 6scs_grading set value='0' where subject_id='ENT'")or die(mysql_error());
	//This code inserts the grade remark in the  6scs_grading table
	$query_remark=mysql_query("update 6scs_grading set remark='Improve' where subject_id='ENT'")or die(mysql_error());
	//This code updates the grade in the 6scs_grading table
    $queryAward=mysql_query("SELECT award from 6scs_grading where subject_id ='ENT'")or die(mysql_error());
    $rowAward=mysql_fetch_array($queryAward);
	echo $rowAward['award'];
		//I Assigned new variables to help in updating the s6 table data
	$logic_1=$rowAward['award'];
	$logic_2='('.$rowENT['grades'].')';
	$TRANS_GRADE= "$logic_1 $logic_2";

	//This code updates the subject grade value in the  s6 table
	$query_trans=mysql_query("update s6 set ENT='$TRANS_GRADE' where id='$ID'")or die(mysql_error());
	}}
	?>" /></td>
    <td align="center">1</td>
    <td align="center"><?php echo $row7['paper_one_mot']; ?></td>   
     <td align="center"><?php echo $row7['paper_one_end']; ?></td>
    <td align="center"><?php 
	 
	if($rowr['Total']<= '34' and $rowr['Total']>='1')
	{
	echo'F9';
	$a='9'.',';
	//This code stores the grade in 6scs_grading
	$queryx1=mysql_query("update 6scs_grading set grades='$a' where subject_id='ENT'")or die(mysql_error());
	
	}
	elseif($rowr['Total']<= '39' and $rowr['Total']>='35')
	{
	echo'P8';
	$b='8'.',';
	//This code stores the grade in 6scs_grading
   $queryx1=mysql_query("update 6scs_grading set grades='$b' where subject_id='ENT'")or die(mysql_error());
	}
	elseif($rowr['Total']<= '49' and $rowr['Total']>='40')
	{
	echo'P7';
	$c='7'.',';
	//This code stores the grade in 6scs_grading
	$queryx1=mysql_query("update 6scs_grading set grades='$c' where subject_id='ENT'")or die(mysql_error());
	}
	elseif($rowr['Total']<= '54' and $rowr['Total']>='50')
	{
	echo'C6';
	$d='6'.',';
	//This code stores the grade in 6scs_grading
	$queryx1=mysql_query("update 6scs_grading set grades='$d' where subject_id='ENT'")or die(mysql_error());
	}
	elseif($rowr['Total']<= '59' and $rowr['Total']>='55')
	{
	echo'C5'; 
	$e='5'.',';
	//This code stores the grade in 6scs_grading
	$queryx1=mysql_query("update 6scs_grading set grades='$e' where subject_id='ENT'")or die(mysql_error());
	}
	elseif($rowr['Total']<= '64' and $rowr['Total']>='60')
	{
	echo'C4';
	$f='4'.',';
	//This code stores the grade in 6scs_grading
	$queryx1=mysql_query("update 6scs_grading set grades='$f' where subject_id='ENT'")or die(mysql_error());
	}
	elseif($rowr['Total']<= '74' and $rowr['Total']>='65')
	{
	echo'C3';
	$g='3'.',';
	//This code stores the grade in 6scs_grading
	$queryx1=mysql_query("update 6scs_grading set grades='$g' where subject_id='ENT'")or die(mysql_error());
	}
	elseif($rowr['Total']<= '79' and $rowr['Total']>='75')
	{
	echo'D2';
	$h='2'.',';
	//This code stores the grade in 6scs_grading
	$queryx1=mysql_query("update 6scs_grading set grades='$h' where subject_id='ENT'")or die(mysql_error());
	}
	elseif($rowr['Total']<= '100' and $rowr['Total']>='80')
	{
	echo'D1';
	$i='1'.',';
	//This code stores the grade in 6scs_grading
	$queryx1=mysql_query("update 6scs_grading set grades='$i' where subject_id='ENT'")or die(mysql_error());
	}
	?></td>
    <td align="center" rowspan="3" style="color:#1b5e94;"><?php 
	//This code selects the remark in the 6scs_grading table
    $query_remark=mysql_query("SELECT remark from 6scs_grading where subject_id ='ENT'")or die(mysql_error());
    $row_remark=mysql_fetch_array($query_remark);
	echo $row_remark['remark'];?></td>
    <td align="center" rowspan="3"><?php echo $rowZ['ENT'];?></td>
  </tr>
  <tr bgcolor="#CCCCCCC">
    <td align="center">2</td>
    <td align="center"><?php echo $row7['two_paper_mot']; ?></td>
    <td align="center"><?php echo $row7['two_paper_end']; ?></td>
    <td align="center"><?php 
	 if($rows['Total']=='')
	{
	$queryx2=mysql_query("update 6scs_grading set grades=null,award=null,value=null,remark=null where subject_id='ENT'")or die(mysql_error());
	}
	elseif($rows['Total']<= '34' and $rows['Total']>='1')
	{
	echo'F9';
	$a='9'.',';
	//This code stores the grade in 6scs_grading
	$queryx2=mysql_query("UPDATE 6scs_grading SET grades= concat(grades,'$a') WHERE `6scs_grading`.`subject_id` = 'ENT'")or die(mysql_error());
	}
	elseif($rows['Total']<= '39' and $rows['Total']>='35')
	{
	echo'P8';
	$b='8'.',';
	//This code stores the grade in 6scs_grading
	$queryx2=mysql_query("UPDATE 6scs_grading SET grades= concat(grades,'$b') WHERE `6scs_grading`.`subject_id` = 'ENT'")or die(mysql_error());
	}
	elseif($rows['Total']<= '49' and $rows['Total']>='40')
	{
	echo'P7';
	$c='7'.',';
	//This code stores the grade in 6scs_grading
	$queryx2=mysql_query("UPDATE 6scs_grading SET grades= concat(grades,'$c') WHERE `6scs_grading`.`subject_id` = 'ENT'")or die(mysql_error());
	}
	elseif($rows['Total']<= '54' and $rows['Total']>='50')
	{
	echo'C6';
	$d='6'.',';
	//This code stores the grade in 6scs_grading
	$queryx2=mysql_query("UPDATE 6scs_grading SET grades= concat(grades,'$d') WHERE `6scs_grading`.`subject_id` = 'ENT'")or die(mysql_error());
	}
	elseif($rows['Total']<= '59' and $rows['Total']>='55')
	{
	echo'C5';
	$e='5'.',';
	//This code stores the grade in 6scs_grading
	$queryx2=mysql_query("UPDATE 6scs_grading SET grades= concat(grades,'$e') WHERE `6scs_grading`.`subject_id` = 'ENT'")or die(mysql_error());
	}
	elseif($rows['Total']<= '64' and $rows['Total']>='60')
	{
	echo'C4';
	$f='4'.',';
	//This code stores the grade in 6scs_grading
	$queryx2=mysql_query("UPDATE 6scs_grading SET grades= concat(grades,'$f') WHERE `6scs_grading`.`subject_id` = 'ENT'")or die(mysql_error());
	}
	elseif($rows['Total']<= '74' and $rows['Total']>='65')
	{
	echo'C3';
	$g='3'.',';
	//This code stores the grade in 6scs_grading
	$queryx2=mysql_query("UPDATE 6scs_grading SET grades= concat(grades,'$g') WHERE `6scs_grading`.`subject_id` = 'ENT'")or die(mysql_error());
	}
	elseif($rows['Total']<= '79' and $rows['Total']>='75')
	{
	echo'D2';
	$h='2'.',';
	//This code stores the grade in 6scs_grading
	$queryx2=mysql_query("UPDATE 6scs_grading SET grades= concat(grades,'$h') WHERE `6scs_grading`.`subject_id` = 'ENT'")or die(mysql_error());
	}
	elseif($rows['Total']<= '100' and $rows['Total']>='80')
	{
	echo'D1';
	$i='1'.',';
	//This code stores the grade in 6scs_grading
	$queryx2=mysql_query("UPDATE 6scs_grading SET grades= concat(grades,'$i') WHERE `6scs_grading`.`subject_id` = 'ENT'")or die(mysql_error());
	}
	?></td>
  </tr>
   <tr bgcolor="#CCCCCC">
    <td align="center">3</td>
    <td align="center"><?php echo $row7['paper_three_mot']; ?></td>
    <td align="center"><?php echo $row7['paper_three_end']; ?></td>
    <td align="center"><?php 
	 if($rowt['Total']=='')
	{
	$queryx2=mysql_query("update 6scs_grading set grades=null,award=null,value=null,remark=null where subject_id='ENT'")or die(mysql_error());
	}
	elseif($rowt['Total']<= '34' and $rowt['Total']>='1')
	{
	echo'F9';
	$a='9';
	//This code stores the grade in 6scs_grading
	$queryx2=mysql_query("UPDATE 6scs_grading SET grades= concat(grades,'$a') WHERE `6scs_grading`.`subject_id` = 'ENT'")or die(mysql_error());
	}
	elseif($rowt['Total']<= '39' and $rowt['Total']>='35')
	{
	echo'P8';
	$b='8';
	//This code stores the grade in 6scs_grading
	$queryx2=mysql_query("UPDATE 6scs_grading SET grades= concat(grades,'$b') WHERE `6scs_grading`.`subject_id` = 'ENT'")or die(mysql_error());
	}
	elseif($rowt['Total']<= '49' and $rowt['Total']>='40')
	{
	echo'P7';
	$c='7';
	//This code stores the grade in 6scs_grading
	$queryx2=mysql_query("UPDATE 6scs_grading SET grades= concat(grades,'$c') WHERE `6scs_grading`.`subject_id` = 'ENT'")or die(mysql_error());
	}
	elseif($rowt['Total']<= '54' and $rowt['Total']>='50')
	{
	echo'C6';
	$d='6';
	//This code stores the grade in 6scs_grading
	$queryx2=mysql_query("UPDATE 6scs_grading SET grades= concat(grades,'$d') WHERE `6scs_grading`.`subject_id` = 'ENT'")or die(mysql_error());
	}
	elseif($rowt['Total']<= '59' and $rowt['Total']>='55')
	{
	echo'C5';
	$e='5';
	//This code stores the grade in 6scs_grading
	$queryx2=mysql_query("UPDATE 6scs_grading SET grades= concat(grades,'$e') WHERE `6scs_grading`.`subject_id` = 'ENT'")or die(mysql_error());
	}
	elseif($rowt['Total']<= '64' and $rowt['Total']>='60')
	{
	echo'C4';
	$f='4';
	//This code stores the grade in 6scs_grading
	$queryx2=mysql_query("UPDATE 6scs_grading SET grades= concat(grades,'$f') WHERE `6scs_grading`.`subject_id` = 'ENT'")or die(mysql_error());
	}
	elseif($rowt['Total']<= '74' and $rowt['Total']>='65')
	{
	echo'C3';
	$g='3';
	//This code stores the grade in 6scs_grading
	$queryx2=mysql_query("UPDATE 6scs_grading SET grades= concat(grades,'$g') WHERE `6scs_grading`.`subject_id` = 'ENT'")or die(mysql_error());
	}
	elseif($rowt['Total']<= '79' and $rowt['Total']>='75')
	{
	echo'D2';
	$h='2';
	//This code stores the grade in 6scs_grading
	$queryx2=mysql_query("UPDATE 6scs_grading SET grades= concat(grades,'$h') WHERE `6scs_grading`.`subject_id` = 'ENT'")or die(mysql_error());
	}
	elseif($rowt['Total']<= '100' and $rowt['Total']>='80')
	{
	echo'D1';
	$i='1';
	//This code stores the grade in 6scs_grading
	$queryx2=mysql_query("UPDATE 6scs_grading SET grades= concat(grades,'$i') WHERE `6scs_grading`.`subject_id` = 'ENT'")or die(mysql_error());
	}
	?></td>
  </tr>
  <tr bgcolor="#999999">
    <td rowspan="3">Geography</td>
    <td rowspan="3">
	<input type="text" name="geography" size="2px"  style="height:20px;border:groove; font-size:24px;" value="<?php 
	
	//******************************* HERE IS THE MAGIC *******************************************
    //This code perfects the Grading of the student by following the UACE Stands 
	
	if($row8['paper_one_mot']=='')
	{
	$query=mysql_query("update 6scs_grading set grades=null,award=null,value=null,remark=null where subject_id='GEO'")or die(mysql_error());
	 $query_change=mysql_query("update s6 set GEO=null where id='$ID'")or die(mysql_error());
	}else{
    $queryGEO=mysql_query("SELECT grades from 6scs_grading where subject_id ='GEO'")or die(mysql_error());
    $rowGEO=mysql_fetch_array($queryGEO);
	if($rowGEO['grades']== '1,1,1'||$rowGEO['grades']== '1,1,2'||$rowGEO['grades']== '2,1,1'||$rowGEO['grades']== '1,2,1'||$rowGEO['grades']== '1,2,2'||$rowGEO['grades']== '2,1,2'||$rowGEO['grades']== '2,2,1'||$rowGEO['grades']== '2,2,2'||$rowGEO['grades']== '1,3,1'||$rowGEO['grades']== '1,1,3'||$rowGEO['grades']== '3,1,1'||$rowGEO['grades']== '1,2,3'||$rowGEO['grades']== '3,2,1'||$rowGEO['grades']== '3,1,2'||$rowGEO['grades']== '2,3,1'||$rowGEO['grades']== '1,3,2'||$rowGEO['grades']== '2,1,3'||$rowGEO['grades']== '2,3,2'||$rowGEO['grades']== '3,2,2'||$rowGEO['grades']== '2,2,3')
	{
	//This code inserts the grade in the  6scs_grading table
	$queryx6=mysql_query("update 6scs_grading set award='A' where subject_id='GEO'")or die(mysql_error());
	//This code inserts the grade value in the  6scs_grading table
	$query_value=mysql_query("update 6scs_grading set value='6' where subject_id='GEO'")or die(mysql_error());
	//This code inserts the grade remark in the  6scs_grading table
	$query_remark=mysql_query("update 6scs_grading set remark='Excellent' where subject_id='GEO'")or die(mysql_error());
	//This code updates the grade in the 6scs_grading table
	$queryAward=mysql_query("SELECT award from 6scs_grading where subject_id ='GEO'")or die(mysql_error());
    $rowAward=mysql_fetch_array($queryAward);
	echo $rowAward['award'];
	//I Assigned new variables to help in updating the s6 table data
	$logic_1=$rowAward['award'];
	$logic_2='('.$rowGEO['grades'].')';
	$TRANS_GRADE= "$logic_1 $logic_2";

	//This code updates the subject grade value in the  s6 table
	$query_trans=mysql_query("update s6 set GEO='$TRANS_GRADE' where id='$ID'")or die(mysql_error());
	}
	elseif($rowGEO['grades']== '1,3,3'||$rowGEO['grades']== '3,3,1'||$rowGEO['grades']== '3,1,3'||$rowGEO['grades']== '3,3,2'||$rowGEO['grades']== '2,3,3'||$rowGEO['grades']== '3,2,3'||$rowGEO['grades']== '3,3,3'||$rowGEO['grades']== '1,4,2'||$rowGEO['grades']== '2,4,1'||$rowGEO['grades']== '4,1,2'||$rowGEO['grades']== '4,2,1'||$rowGEO['grades']== '2,1,4'||$rowGEO['grades']== '1,4,3'||$rowGEO['grades']== '1,3,4'||$rowGEO['grades']== '3,4,1'||$rowGEO['grades']== '4,1,3'||$rowGEO['grades']== '3,1,4'||$rowGEO['grades']== '4,3,1'||$rowGEO['grades']== '3,4,2'||$rowGEO['grades']== '2,4,3'||$rowGEO['grades']== '4,3,2'||$rowGEO['grades']== '4,2,3'||$rowGEO['grades']== '2,3,4'||$rowGEO['grades']== '1,1,4'||$rowGEO['grades']== '4,1,1'||$rowGEO['grades']== '1,4,1'||$rowGEO['grades']== '4,2,2'||$rowGEO['grades']== '2,2,4'||$rowGEO['grades']== '2,4,2'||$rowGEO['grades']== '4,3,3'||$rowGEO['grades']== '3,3,4'||$rowGEO['grades']== '3,4,3')
	{
	//This code inserts the grade in the  6scs_grading
	$queryx6=mysql_query("update 6scs_grading set award='B' where subject_id='GEO'")or die(mysql_error());
	//This code inserts the grade value in the  6scs_grading table
	$query_value=mysql_query("update 6scs_grading set value='5' where subject_id='GEO'")or die(mysql_error());
	//This code inserts the grade remark in the  6scs_grading table
	$query_remark=mysql_query("update 6scs_grading set remark='Very Good' where subject_id='GEO'")or die(mysql_error());
	//This code updates the grade in the 6scs_grading table
    $queryAward=mysql_query("SELECT award from 6scs_grading where subject_id ='GEO'")or die(mysql_error());
    $rowAward=mysql_fetch_array($queryAward);
	echo $rowAward['award'];
		//I Assigned new variables to help in updating the s6 table data
	$logic_1=$rowAward['award'];
	$logic_2='('.$rowGEO['grades'].')';
	$TRANS_GRADE= "$logic_1 $logic_2";

	//This code updates the subject grade value in the  s6 table
	$query_trans=mysql_query("update s6 set GEO='$TRANS_GRADE' where id='$ID'")or die(mysql_error());
	}
elseif($rowGEO['grades']== '1,1,5'||$rowGEO['grades']== '1,5,1'||$rowGEO['grades']== '5,1,1'||$rowGEO['grades']== '1,2,5'||$rowGEO['grades']== '1,5,2'||$rowGEO['grades']== '2,1,5'||$rowGEO['grades']== '2,5,1'||$rowGEO['grades']== '5,2,1'||$rowGEO['grades']== '5,1,2'||$rowGEO['grades']== '1,3,5'||$rowGEO['grades']== '1,5,3'||$rowGEO['grades']== '5,3,1'||$rowGEO['grades']== '5,1,3'||$rowGEO['grades']== '3,1,5'||$rowGEO['grades']== '3,5,1'||$rowGEO['grades']== '1,4,5'||$rowGEO['grades']== '1,5,4'||$rowGEO['grades']== '4,5,1'||$rowGEO['grades']== '4,1,5'||$rowGEO['grades']== '5,4,1'||$rowGEO['grades']== '5,1,4'||$rowGEO['grades']== '2,2,5'||$rowGEO['grades']== '2,5,2'||$rowGEO['grades']== '5,2,2'||$rowGEO['grades']== '2,3,5'||$rowGEO['grades']== '2,5,3'||$rowGEO['grades']== '5,2,3'||$rowGEO['grades']== '5,3,2'||$rowGEO['grades']== '3,5,2'||$rowGEO['grades']== '3,2,5'||$rowGEO['grades']== '2,4,5'||$rowGEO['grades']== '4,2,5'||$rowGEO['grades']== '4,5,2'||$rowGEO['grades']== '5,4,2'||$rowGEO['grades']== '5,2,4'||$rowGEO['grades']== '2,5,4'||$rowGEO['grades']== '3,3,5'||$rowGEO['grades']== '3,5,3'||$rowGEO['grades']== '5,3,3'||$rowGEO['grades']== '3,4,5'||$rowGEO['grades']== '3,5,4'||$rowGEO['grades']== '5,3,4'||$rowGEO['grades']== '5,4,3'||$rowGEO['grades']== '4,5,3'||$rowGEO['grades']== '4,3,5'||$rowGEO['grades']== '4,4,5'||$rowGEO['grades']== '4,5,4'||$rowGEO['grades']== '5,4,4'||$rowGEO['grades']== '4,4,4'||$rowGEO['grades']== '4,4,1'||$rowGEO['grades']== '4,1,4'||$rowGEO['grades']== '1,4,4'||$rowGEO['grades']== '4,4,2'||$rowGEO['grades']== '4,2,4'||$rowGEO['grades']== '2,4,4'||$rowGEO['grades']== '4,4,3'||$rowGEO['grades']== '4,3,4'||$rowGEO['grades']== '3,4,4')
	{
	//This code inserts the grade in the  6scs_grading
	$queryx6=mysql_query("update 6scs_grading set award='C' where subject_id='GEO'")or die(mysql_error());
	//This code inserts the grade value in the  6scs_grading table
	$query_value=mysql_query("update 6scs_grading set value='4' where subject_id='GEO'")or die(mysql_error());
	//This code inserts the grade remark in the  6scs_grading table
	$query_remark=mysql_query("update 6scs_grading set remark='Good' where subject_id='GEO'")or die(mysql_error());
	//This code updates the grade in the 6scs_grading table
    $queryAward=mysql_query("SELECT award from 6scs_grading where subject_id ='GEO'")or die(mysql_error());
    $rowAward=mysql_fetch_array($queryAward);
	echo $rowAward['award'];
		//I Assigned new variables to help in updating the s6 table data
	$logic_1=$rowAward['award'];
	$logic_2='('.$rowGEO['grades'].')';
	$TRANS_GRADE= "$logic_1 $logic_2";

	//This code updates the subject grade value in the  s6 table
	$query_trans=mysql_query("update s6 set GEO='$TRANS_GRADE' where id='$ID'")or die(mysql_error());
	}
elseif($rowGEO['grades']== '1,1,6'||$rowGEO['grades']== '1,6,1'||$rowGEO['grades']== '6,1,1'||$rowGEO['grades']== '1,2,6'||$rowGEO['grades']== '1,6,2'||$rowGEO['grades']== '2,1,6'||$rowGEO['grades']== '2,6,1'||$rowGEO['grades']== '6,1,2'||$rowGEO['grades']== '6,2,1'||$rowGEO['grades']== '1,3,6'||$rowGEO['grades']== '1,6,3'||$rowGEO['grades']== '6,3,1'||$rowGEO['grades']== '6,1,3'||$rowGEO['grades']== '3,1,6'||$rowGEO['grades']== '3,6,1'||$rowGEO['grades']== '1,4,6'||$rowGEO['grades']== '1,6,4'||$rowGEO['grades']== '6,4,1'||$rowGEO['grades']== '6,1,4'||$rowGEO['grades']== '4,1,6'||$rowGEO['grades']== '4,6,1'||$rowGEO['grades']== '1,5,6'||$rowGEO['grades']== '1,6,5'||$rowGEO['grades']== '6,5,1'||$rowGEO['grades']== '6,1,5'||$rowGEO['grades']== '5,1,6'||$rowGEO['grades']== '5,6,1'||$rowGEO['grades']== '2,2,6'||$rowGEO['grades']== '2,6,2'||$rowGEO['grades']== '6,2,2'||$rowGEO['grades']== '2,3,6'||$rowGEO['grades']== '2,6,3'||$rowGEO['grades']== '6,2,3'||$rowGEO['grades']== '6,3,2'||$rowGEO['grades']== '3,6,2'||$rowGEO['grades']== '3,2,6'||$rowGEO['grades']== '2,4,6'||$rowGEO['grades']== '2,6,4'||$rowGEO['grades']== '6,2,4'||$rowGEO['grades']== '6,4,2'||$rowGEO['grades']== '4,6,2'||$rowGEO['grades']== '4,2,6'||$rowGEO['grades']== '2,5,6'||$rowGEO['grades']== '2,6,5'||$rowGEO['grades']== '5,2,6'||$rowGEO['grades']== '5,6,2'||$rowGEO['grades']== '6,2,5'||$rowGEO['grades']== '6,5,2'||$rowGEO['grades']== '3,3,6'||$rowGEO['grades']== '3,6,3'||$rowGEO['grades']== '6,3,3'||$rowGEO['grades']== '3,4,6'||$rowGEO['grades']== '3,6,4'||$rowGEO['grades']== '6,3,4'||$rowGEO['grades']== '6,4,3'||$rowGEO['grades']== '4,6,3'||$rowGEO['grades']== '4,3,6'||$rowGEO['grades']== '3,5,6'||$rowGEO['grades']== '3,6,5'||$rowGEO['grades']== '5,3,6'||$rowGEO['grades']== '5,6,3'||$rowGEO['grades']== '6,3,5'||$rowGEO['grades']== '6,5,3'||$rowGEO['grades']== '4,4,6'||$rowGEO['grades']== '4,6,4'||$rowGEO['grades']== '6,4,4'||$rowGEO['grades']== '4,5,6'||$rowGEO['grades']== '4,6,5'||$rowGEO['grades']== '5,4,6'||$rowGEO['grades']== '5,6,4'||$rowGEO['grades']== '6,4,5'||$rowGEO['grades']== '6,5,4'||$rowGEO['grades']== '1,5,5'||$rowGEO['grades']== '5,1,5'||$rowGEO['grades']== '5,5,1'||$rowGEO['grades']== '2,5,5'||$rowGEO['grades']== '5,2,5'||$rowGEO['grades']== '5,5,2'||$rowGEO['grades']== '3,5,5'||$rowGEO['grades']== '5,3,5'||$rowGEO['grades']== '5,5,3'||$rowGEO['grades']== '4,5,5'||$rowGEO['grades']== '5,4,5'||$rowGEO['grades']== '5,5,4'||$rowGEO['grades']== '5,5,5'||$rowGEO['grades']== '6,5,5'||$rowGEO['grades']== '5,6,5'||$rowGEO['grades']== '5,5,6')
	{
	//This code inserts the grade in the  6scs_grading
	$queryx6=mysql_query("update 6scs_grading set award='D' where subject_id='GEO'")or die(mysql_error());
	//This code inserts the grade value in the  6scs_grading table
	$query_value=mysql_query("update 6scs_grading set value='3' where subject_id='GEO'")or die(mysql_error());
	//This code inserts the grade remark in the  6scs_grading table
	$query_remark=mysql_query("update 6scs_grading set remark='Fairly Good' where subject_id='GEO'")or die(mysql_error());
	//This code updates the grade in the 6scs_grading table
    $queryAward=mysql_query("SELECT award from 6scs_grading where subject_id ='GEO'")or die(mysql_error());
    $rowAward=mysql_fetch_array($queryAward);
	echo $rowAward['award'];
		//I Assigned new variables to help in updating the s6 table data
	$logic_1=$rowAward['award'];
	$logic_2='('.$rowGEO['grades'].')';
	$TRANS_GRADE= "$logic_1 $logic_2";

	//This code updates the subject grade value in the  s6 table
	$query_trans=mysql_query("update s6 set GEO='$TRANS_GRADE' where id='$ID'")or die(mysql_error());
	}
elseif($rowGEO['grades']== '1,1,7'||$rowGEO['grades']== '1,7,1'||$rowGEO['grades']== '7,1,1'||$rowGEO['grades']== '1,2,7'||$rowGEO['grades']== '1,7,2'||$rowGEO['grades']== '2,7,1'||$rowGEO['grades']== '2,1,7'||$rowGEO['grades']== '7,1,2'||$rowGEO['grades']== '7,2,1'||$rowGEO['grades']== '1,3,7'||$rowGEO['grades']== '1,7,3'||$rowGEO['grades']== '3,7,1'||$rowGEO['grades']== '3,1,7'||$rowGEO['grades']== '7,3,1'||$rowGEO['grades']== '7,1,3'||$rowGEO['grades']== '1,4,7'||$rowGEO['grades']== '1,7,4'||$rowGEO['grades']== '7,1,4'||$rowGEO['grades']== '7,4,1'||$rowGEO['grades']== '4,7,1'||$rowGEO['grades']== '4,1,7'||$rowGEO['grades']== '1,5,7'||$rowGEO['grades']== '1,7,5'||$rowGEO['grades']== '7,1,5'||$rowGEO['grades']== '7,5,1'||$rowGEO['grades']== '5,1,7'||$rowGEO['grades']== '5,7,1'||$rowGEO['grades']== '1,6,7'||$rowGEO['grades']== '1,7,6'||$rowGEO['grades']== '6,7,1'||$rowGEO['grades']== '6,1,7'||$rowGEO['grades']== '7,1,6'||$rowGEO['grades']== '7,6,1'||$rowGEO['grades']== '2,2,7'||$rowGEO['grades']== '2,7,2'||$rowGEO['grades']== '7,2,2'||$rowGEO['grades']== '2,3,7'||$rowGEO['grades']== '2,7,3'||$rowGEO['grades']== '3,2,7'||$rowGEO['grades']== '3,7,2'||$rowGEO['grades']== '7,3,2'||$rowGEO['grades']== '7,2,3'||$rowGEO['grades']== '2,4,7'||$rowGEO['grades']== '2,7,4'||$rowGEO['grades']== '4,2,7'||$rowGEO['grades']== '4,7,2'||$rowGEO['grades']== '7,2,4'||$rowGEO['grades']== '7,4,2'||$rowGEO['grades']== '2,5,7'||$rowGEO['grades']== '2,7,5'||$rowGEO['grades']== '5,7,2'||$rowGEO['grades']== '5,2,7'||$rowGEO['grades']== '7,2,5'||$rowGEO['grades']== '7,5,2'||$rowGEO['grades']== '2,6,7'||$rowGEO['grades']== '2,7,6'||$rowGEO['grades']== '6,7,2'||$rowGEO['grades']== '6,2,7'||$rowGEO['grades']== '7,6,2'||$rowGEO['grades']== '7,2,6'||$rowGEO['grades']== '3,3,7'||$rowGEO['grades']== '3,7,3'||$rowGEO['grades']== '7,3,3'||$rowGEO['grades']== '3,4,7'||$rowGEO['grades']== '3,7,4'||$rowGEO['grades']== '4,3,7'||$rowGEO['grades']== '4,7,3'||$rowGEO['grades']== '7,3,4'||$rowGEO['grades']== '7,4,3'||$rowGEO['grades']== '3,5,7'||$rowGEO['grades']== '3,7,5'||$rowGEO['grades']== '5,3,7'||$rowGEO['grades']== '5,7,3'||$rowGEO['grades']== '7,5,3'||$rowGEO['grades']== '7,3,5'||$rowGEO['grades']== '3,6,7'||$rowGEO['grades']== '3,7,6'||$rowGEO['grades']== '6,3,7'||$rowGEO['grades']== '6,7,3'||$rowGEO['grades']== '7,3,6'||$rowGEO['grades']== '7,6,3'||$rowGEO['grades']== '4,4,7'||$rowGEO['grades']== '4,7,4'||$rowGEO['grades']== '7,4,4'||$rowGEO['grades']== '4,5,7'||$rowGEO['grades']== '4,7,5'||$rowGEO['grades']== '5,7,4'||$rowGEO['grades']== '5,4,7'||$rowGEO['grades']== '7,4,5'||$rowGEO['grades']== '7,5,4'||$rowGEO['grades']== '4,6,7'||$rowGEO['grades']== '4,7,6'||$rowGEO['grades']== '6,7,4'||$rowGEO['grades']== '6,4,7'||$rowGEO['grades']== '7,4,6'||$rowGEO['grades']== '7,6,4'||$rowGEO['grades']== '5,5,7'||$rowGEO['grades']== '5,7,5'||$rowGEO['grades']== '7,5,5'||$rowGEO['grades']== '5,6,7'||$rowGEO['grades']== '5,7,6'||$rowGEO['grades']== '6,5,7'||$rowGEO['grades']== '6,7,5'||$rowGEO['grades']== '7,6,5'||$rowGEO['grades']== '7,5,6'||$rowGEO['grades']== '6,6,7'||$rowGEO['grades']== '6,7,6'||$rowGEO['grades']== '7,6,6'||$rowGEO['grades']== '1,6,6'||$rowGEO['grades']== '6,1,6'||$rowGEO['grades']== '6,6,1'||$rowGEO['grades']== '2,6,6'||$rowGEO['grades']== '6,2,6'||$rowGEO['grades']== '6,6,2'||$rowGEO['grades']== '3,6,6'||$rowGEO['grades']== '6,3,6'||$rowGEO['grades']== '6,6,3'||$rowGEO['grades']== '4,6,6'||$rowGEO['grades']== '6,4,6'||$rowGEO['grades']== '6,6,4'||$rowGEO['grades']== '5,6,6'||$rowGEO['grades']== '6,5,6'||$rowGEO['grades']== '6,6,5'||$rowGEO['grades']== '6,6,6'||
$rowGEO['grades']== '1,1,8'||$rowGEO['grades']== '1,8,1'||$rowGEO['grades']== '8,1,1'||$rowGEO['grades']== '1,2,8'||$rowGEO['grades']== '1,8,2'||$rowGEO['grades']== '2,8,1'||$rowGEO['grades']== '2,1,8'||$rowGEO['grades']== '8,1,2'||$rowGEO['grades']== '8,2,1'||$rowGEO['grades']== '1,3,8'||$rowGEO['grades']== '1,8,3'||$rowGEO['grades']== '3,8,1'||$rowGEO['grades']== '3,1,8'||$rowGEO['grades']== '8,3,1'||$rowGEO['grades']== '8,1,3'||$rowGEO['grades']== '1,4,8'||$rowGEO['grades']== '1,8,4'||$rowGEO['grades']== '8,1,4'||$rowGEO['grades']== '8,4,1'||$rowGEO['grades']== '4,8,1'||$rowGEO['grades']== '4,1,8'||$rowGEO['grades']== '1,5,8'||$rowGEO['grades']== '1,8,5'||$rowGEO['grades']== '8,1,5'||$rowGEO['grades']== '8,5,1'||$rowGEO['grades']== '5,1,8'||$rowGEO['grades']== '5,8,1'||$rowGEO['grades']== '1,6,8'||$rowGEO['grades']== '1,8,6'||$rowGEO['grades']== '6,8,1'||$rowGEO['grades']== '6,1,8'||$rowGEO['grades']== '8,1,6'||$rowGEO['grades']== '8,6,1'||$rowGEO['grades']== '2,2,8'||$rowGEO['grades']== '2,8,2'||$rowGEO['grades']== '8,2,2'||$rowGEO['grades']== '2,3,8'||$rowGEO['grades']== '2,8,3'||$rowGEO['grades']== '3,2,8'||$rowGEO['grades']== '3,8,2'||$rowGEO['grades']== '8,3,2'||$rowGEO['grades']== '8,2,3'||$rowGEO['grades']== '2,4,8'||$rowGEO['grades']== '2,8,4'||$rowGEO['grades']== '4,2,8'||$rowGEO['grades']== '4,8,2'||$rowGEO['grades']== '8,2,4'||$rowGEO['grades']== '8,4,2'||$rowGEO['grades']== '2,5,8'||$rowGEO['grades']== '2,8,5'||$rowGEO['grades']== '5,8,2'||$rowGEO['grades']== '5,2,8'||$rowGEO['grades']== '8,2,5'||$rowGEO['grades']== '8,5,2'||$rowGEO['grades']== '2,6,8'||$rowGEO['grades']== '2,8,6'||$rowGEO['grades']== '6,8,2'||$rowGEO['grades']== '6,2,8'||$rowGEO['grades']== '8,6,2'||$rowGEO['grades']== '8,2,6'||$rowGEO['grades']== '3,3,8'||$rowGEO['grades']== '3,8,3'||$rowGEO['grades']== '8,3,3'||$rowGEO['grades']== '3,4,8'||$rowGEO['grades']== '3,8,4'||$rowGEO['grades']== '4,3,8'||$rowGEO['grades']== '4,8,3'||$rowGEO['grades']== '8,3,4'||$rowGEO['grades']== '8,4,3'||$rowGEO['grades']== '3,5,8'||$rowGEO['grades']== '3,8,5'||$rowGEO['grades']== '5,3,8'||$rowGEO['grades']== '5,8,3'||$rowGEO['grades']== '8,5,3'||$rowGEO['grades']== '8,3,5'||$rowGEO['grades']== '3,6,8'||$rowGEO['grades']== '3,8,6'||$rowGEO['grades']== '6,3,8'||$rowGEO['grades']== '6,8,3'||$rowGEO['grades']== '8,3,6'||$rowGEO['grades']== '8,6,3'||$rowGEO['grades']== '4,4,8'||$rowGEO['grades']== '4,8,4'||$rowGEO['grades']== '8,4,4'||$rowGEO['grades']== '4,5,8'||$rowGEO['grades']== '4,8,5'||$rowGEO['grades']== '5,8,4'||$rowGEO['grades']== '5,4,8'||$rowGEO['grades']== '8,4,5'||$rowGEO['grades']== '8,5,4'||$rowGEO['grades']== '4,6,8'||$rowGEO['grades']== '4,8,6'||$rowGEO['grades']== '6,8,4'||$rowGEO['grades']== '6,4,8'||$rowGEO['grades']== '8,4,6'||$rowGEO['grades']== '8,6,4'||$rowGEO['grades']== '5,5,8'||$rowGEO['grades']== '5,8,5'||$rowGEO['grades']== '8,5,5'||$rowGEO['grades']== '5,6,8'||$rowGEO['grades']== '5,8,6'||$rowGEO['grades']== '6,5,8'||$rowGEO['grades']== '6,8,5'||$rowGEO['grades']== '8,6,5'||$rowGEO['grades']== '8,5,6'||$rowGEO['grades']== '6,6,8'||$rowGEO['grades']== '6,8,6'||$rowGEO['grades']== '8,6,6')
	{
	//This code inserts the grade in the  6scs_grading
	$queryx6=mysql_query("update 6scs_grading set award='E' where subject_id='GEO'")or die(mysql_error());
	//This code inserts the grade value in the  6scs_grading table
	$query_value=mysql_query("update 6scs_grading set value='2' where subject_id='GEO'")or die(mysql_error());
	//This code inserts the grade remark in the  6scs_grading table
	$query_remark=mysql_query("update 6scs_grading set remark='Fair' where subject_id='GEO'")or die(mysql_error());
	//This code updates the grade in the 6scs_grading table
    $queryAward=mysql_query("SELECT award from 6scs_grading where subject_id ='GEO'")or die(mysql_error());
    $rowAward=mysql_fetch_array($queryAward);
	echo $rowAward['award'];
		//I Assigned new variables to help in updating the s6 table data
	$logic_1=$rowAward['award'];
	$logic_2='('.$rowGEO['grades'].')';
	$TRANS_GRADE= "$logic_1 $logic_2";

	//This code updates the subject grade value in the  s6 table
	$query_trans=mysql_query("update s6 set GEO='$TRANS_GRADE' where id='$ID'")or die(mysql_error());
	}
elseif($rowGEO['grades']== '1,7,7'||$rowGEO['grades']== '7,1,7'||$rowGEO['grades']== '7,7,1'||$rowGEO['grades']== '2,7,7'||$rowGEO['grades']== '7,2,7'||$rowGEO['grades']== '7,7,2'||$rowGEO['grades']== '3,7,7'||$rowGEO['grades']== '7,3,7'||$rowGEO['grades']== '7,7,3'||$rowGEO['grades']== '4,7,7'||$rowGEO['grades']== '7,4,7'||$rowGEO['grades']== '7,7,4'||$rowGEO['grades']== '5,7,7'||$rowGEO['grades']== '7,5,7'||$rowGEO['grades']== '7,7,5'||$rowGEO['grades']== '6,7,7'||$rowGEO['grades']== '7,6,7'||$rowGEO['grades']== '7,7,6'||$rowGEO['grades']== '1,8,8'||$rowGEO['grades']== '8,1,8'||$rowGEO['grades']== '8,8,1'||$rowGEO['grades']== '2,8,8'||$rowGEO['grades']== '8,2,8'||$rowGEO['grades']== '8,8,2'||$rowGEO['grades']== '3,8,8'||$rowGEO['grades']== '8,3,8'||$rowGEO['grades']== '8,8,3'||$rowGEO['grades']== '4,8,8'||$rowGEO['grades']== '8,4,8'||$rowGEO['grades']== '8,8,4'||$rowGEO['grades']== '5,8,8'||$rowGEO['grades']== '8,5,8'||$rowGEO['grades']== '8,8,5'||$rowGEO['grades']== '6,8,8'||$rowGEO['grades']== '8,6,8'||$rowGEO['grades']== '8,8,6'||$rowGEO['grades']== '1,7,8'||$rowGEO['grades']== '1,8,7'||$rowGEO['grades']== '7,8,1'||$rowGEO['grades']== '7,1,8'||$rowGEO['grades']== '8,1,7'||$rowGEO['grades']== '8,7,1'||$rowGEO['grades']== '2,7,8'||$rowGEO['grades']== '2,8,7'||$rowGEO['grades']== '7,8,2'||$rowGEO['grades']== '7,2,8'||$rowGEO['grades']== '8,2,7'||$rowGEO['grades']== '8,7,2'||$rowGEO['grades']== '3,7,8'||$rowGEO['grades']== '3,8,7'||$rowGEO['grades']== '7,8,3'||$rowGEO['grades']== '7,3,8'||$rowGEO['grades']== '8,3,7'||$rowGEO['grades']== '8,7,3'||$rowGEO['grades']== '4,7,8'||$rowGEO['grades']== '4,8,7'||$rowGEO['grades']== '7,8,4'||$rowGEO['grades']== '7,4,8'||$rowGEO['grades']== '8,4,7'||$rowGEO['grades']== '8,7,4'||$rowGEO['grades']== '5,7,8'||$rowGEO['grades']== '5,8,7'||$rowGEO['grades']== '7,8,5'||$rowGEO['grades']== '7,5,8'||$rowGEO['grades']== '8,5,7'||$rowGEO['grades']== '8,7,5'||$rowGEO['grades']== '6,7,8'||$rowGEO['grades']== '6,8,7'||$rowGEO['grades']== '7,8,6'||$rowGEO['grades']== '7,6,8'||$rowGEO['grades']== '8,6,7'||$rowGEO['grades']== '8,7,6'||$rowGEO['grades']== '1,1,9'||$rowGEO['grades']== '1,9,1'||$rowGEO['grades']== '9,1,1'||$rowGEO['grades']== '1,2,9'||$rowGEO['grades']== '1,9,2'||$rowGEO['grades']== '9,1,2'||$rowGEO['grades']== '9,2,1'||$rowGEO['grades']== '2,9,1'||$rowGEO['grades']== '2,1,9'||$rowGEO['grades']== '1,3,9'||$rowGEO['grades']== '1,9,3'||$rowGEO['grades']== '3,1,9'||$rowGEO['grades']== '3,9,1'||$rowGEO['grades']== '9,3,1'||$rowGEO['grades']== '9,1,3'||$rowGEO['grades']== '1,4,9'||$rowGEO['grades']== '1,9,4'||$rowGEO['grades']== '4,1,9'||$rowGEO['grades']== '4,9,1'||$rowGEO['grades']== '9,4,1'||$rowGEO['grades']== '9,1,4'||$rowGEO['grades']== '1,5,9'||$rowGEO['grades']== '1,9,5'||$rowGEO['grades']== '5,1,9'||$rowGEO['grades']== '5,9,1'||$rowGEO['grades']== '9,5,1'||$rowGEO['grades']== '9,1,5'||$rowGEO['grades']== '1,6,9'||$rowGEO['grades']== '1,9,6'||$rowGEO['grades']== '6,1,9'||$rowGEO['grades']== '6,9,1'||$rowGEO['grades']== '9,6,1'||$rowGEO['grades']== '9,1,6'||$rowGEO['grades']== '2,2,9'||$rowGEO['grades']== '2,9,2'||$rowGEO['grades']== '9,2,2'||$rowGEO['grades']== '2,3,9'||$rowGEO['grades']== '2,9,3'||$rowGEO['grades']== '3,2,9'||$rowGEO['grades']== '3,9,2'||$rowGEO['grades']== '9,3,2'||$rowGEO['grades']== '9,2,3'||$rowGEO['grades']== '2,4,9'||$rowGEO['grades']== '2,9,4'||$rowGEO['grades']== '4,2,9'||$rowGEO['grades']== '4,9,2'||$rowGEO['grades']== '9,4,2'||$rowGEO['grades']== '9,2,4'||$rowGEO['grades']== '2,5,9'||$rowGEO['grades']== '2,9,5'||$rowGEO['grades']== '5,2,9'||$rowGEO['grades']== '5,9,2'||$rowGEO['grades']== '9,5,2'||$rowGEO['grades']== '9,2,5'||$rowGEO['grades']== '2,6,9'||$rowGEO['grades']== '2,9,6'||$rowGEO['grades']== '6,2,9'||$rowGEO['grades']== '6,9,2'||$rowGEO['grades']== '9,6,2'||$rowGEO['grades']== '9,2,6'||$rowGEO['grades']== '3,3,9'||$rowGEO['grades']== '3,9,3'||$rowGEO['grades']== '9,3,3'||$rowGEO['grades']== '3,4,9'||$rowGEO['grades']== '3,9,4'||$rowGEO['grades']== '9,3,4'||$rowGEO['grades']== '9,4,3'||$rowGEO['grades']== '4,3,9'||$rowGEO['grades']== '4,9,3'||$rowGEO['grades']== '3,5,9'||$rowGEO['grades']== '3,9,5'||$rowGEO['grades']== '9,3,5'||$rowGEO['grades']== '9,5,3'||$rowGEO['grades']== '5,3,9'||$rowGEO['grades']== '5,9,3'||$rowGEO['grades']== '3,6,9'||$rowGEO['grades']== '3,9,6'||$rowGEO['grades']== '9,3,6'||$rowGEO['grades']== '9,6,3'||$rowGEO['grades']== '6,3,9'||$rowGEO['grades']== '6,9,3'||$rowGEO['grades']== '4,4,9'||$rowGEO['grades']== '4,9,4'||$rowGEO['grades']== '9,4,4'||$rowGEO['grades']== '4,5,9'||$rowGEO['grades']== '4,9,5'||$rowGEO['grades']== '9,4,5'||$rowGEO['grades']== '9,5,4'||$rowGEO['grades']== '5,4,9'||$rowGEO['grades']== '5,9,4'||$rowGEO['grades']== '4,6,9'||$rowGEO['grades']== '4,9,6'||$rowGEO['grades']== '9,4,6'||$rowGEO['grades']== '9,6,4'||$rowGEO['grades']== '6,4,9'||$rowGEO['grades']== '6,9,4'||$rowGEO['grades']== '5,5,9'||$rowGEO['grades']== '5,9,5'||$rowGEO['grades']== '9,5,5'||$rowGEO['grades']== '5,6,9'||$rowGEO['grades']== '5,9,6'||$rowGEO['grades']== '6,5,9'||$rowGEO['grades']== '6,9,5'||$rowGEO['grades']== '9,6,5'||$rowGEO['grades']== '9,5,6'||$rowGEO['grades']== '6,6,9'||$rowGEO['grades']== '6,9,6'||$rowGEO['grades']== '9,6,6')
	{
	//This code inserts the grade in the  6scs_grading
	$queryx6=mysql_query("update 6scs_grading set award='O' where subject_id='GEO'")or die(mysql_error());
	//This code inserts the grade value in the  6scs_grading table
	$query_value=mysql_query("update 6scs_grading set value='1' where subject_id='GEO'")or die(mysql_error());
	//This code inserts the grade remark in the  6scs_grading table
	$query_remark=mysql_query("update 6scs_grading set remark='Improve' where subject_id='GEO'")or die(mysql_error());
	//This code updates the grade in the 6scs_grading table
    $queryAward=mysql_query("SELECT award from 6scs_grading where subject_id ='GEO'")or die(mysql_error());
    $rowAward=mysql_fetch_array($queryAward);
	echo $rowAward['award'];
		//I Assigned new variables to help in updating the s6 table data
	$logic_1=$rowAward['award'];
	$logic_2='('.$rowGEO['grades'].')';
	$TRANS_GRADE= "$logic_1 $logic_2";

	//This code updates the subject grade value in the  s6 table
	$query_trans=mysql_query("update s6 set GEO='$TRANS_GRADE' where id='$ID'")or die(mysql_error());
	}
	elseif($rowGEO['grades']== '9,8,8'||$rowGEO['grades']== '8,8,9'||$rowGEO['grades']== '8,9,8'||$rowGEO['grades']== '9,9,9'||$rowGEO['grades']== '9,7,7'||$rowGEO['grades']== '7,7,9'||$rowGEO['grades']== '7,9,7'||$rowGEO['grades']== '9,9,9'||$rowGEO['grades']== '1,9,9'||$rowGEO['grades']== '9,1,9'||$rowGEO['grades']== '9,9,1'||$rowGEO['grades']== '2,9,9'||$rowGEO['grades']== '9,2,9'||$rowGEO['grades']== '9,9,2'||$rowGEO['grades']== '3,9,9'||$rowGEO['grades']== '9,3,9'||$rowGEO['grades']== '9,9,3'||$rowGEO['grades']== '4,9,9'||$rowGEO['grades']== '9,4,9'||$rowGEO['grades']== '9,9,4'||$rowGEO['grades']== '5,9,9'||$rowGEO['grades']== '9,5,9'||$rowGEO['grades']== '9,9,5'||$rowGEO['grades']== '6,9,9'||$rowGEO['grades']== '9,6,9'||$rowGEO['grades']== '9,9,6')
	{
	//This code inserts the grade in the  6scs_grading
	$queryx6=mysql_query("update 6scs_grading set award='F' where subject_id='GEO'")or die(mysql_error());
	//This code inserts the grade value in the  6scs_grading table
	$query_value=mysql_query("update 6scs_grading set value='0' where subject_id='GEO'")or die(mysql_error());
	//This code inserts the grade remark in the  6scs_grading table
	$query_remark=mysql_query("update 6scs_grading set remark='Improve' where subject_id='GEO'")or die(mysql_error());
	//This code updates the grade in the 6scs_grading table
    $queryAward=mysql_query("SELECT award from 6scs_grading where subject_id ='GEO'")or die(mysql_error());
    $rowAward=mysql_fetch_array($queryAward);
	echo $rowAward['award'];
		//I Assigned new variables to help in updating the s6 table data
	$logic_1=$rowAward['award'];
	$logic_2='('.$rowGEO['grades'].')';
	$TRANS_GRADE= "$logic_1 $logic_2";

	//This code updates the subject grade value in the  s6 table
	$query_trans=mysql_query("update s6 set GEO='$TRANS_GRADE' where id='$ID'")or die(mysql_error());
	}}
	?>" /></td>
    <td align="center">1</td>
    <td align="center"><?php echo $row8['paper_one_mot']; ?></td>
    <td align="center"><?php echo $row8['paper_one_end']; ?></td>
    <td align="center"><?php 
	 
	if($rown['Total']<= '34' and $rown['Total']>='1')
	{
	echo'F9';
	$a='9'.',';
	//This code stores the grade in 6scs_grading
	$queryx1=mysql_query("update 6scs_grading set grades='$a' where subject_id='GEO'")or die(mysql_error());
	
	}
	elseif($rown['Total']<= '39' and $rown['Total']>='35')
	{
	echo'P8';
	$b='8'.',';
	//This code stores the grade in 6scs_grading
   $queryx1=mysql_query("update 6scs_grading set grades='$b' where subject_id='GEO'")or die(mysql_error());
	}
	elseif($rown['Total']<= '49' and $rown['Total']>='40')
	{
	echo'P7';
	$c='7'.',';
	//This code stores the grade in 6scs_grading
	$queryx1=mysql_query("update 6scs_grading set grades='$c' where subject_id='GEO'")or die(mysql_error());
	}
	elseif($rown['Total']<= '54' and $rown['Total']>='50')
	{
	echo'C6';
	$d='6'.',';
	//This code stores the grade in 6scs_grading
	$queryx1=mysql_query("update 6scs_grading set grades='$d' where subject_id='GEO'")or die(mysql_error());
	}
	elseif($rown['Total']<= '59' and $rown['Total']>='55')
	{
	echo'C5'; 
	$e='5'.',';
	//This code stores the grade in 6scs_grading
	$queryx1=mysql_query("update 6scs_grading set grades='$e' where subject_id='GEO'")or die(mysql_error());
	}
	elseif($rown['Total']<= '64' and $rown['Total']>='60')
	{
	echo'C4';
	$f='4'.',';
	//This code stores the grade in 6scs_grading
	$queryx1=mysql_query("update 6scs_grading set grades='$f' where subject_id='GEO'")or die(mysql_error());
	}
	elseif($rown['Total']<= '74' and $rown['Total']>='65')
	{
	echo'C3';
	$g='3'.',';
	//This code stores the grade in 6scs_grading
	$queryx1=mysql_query("update 6scs_grading set grades='$g' where subject_id='GEO'")or die(mysql_error());
	}
	elseif($rown['Total']<= '79' and $rown['Total']>='75')
	{
	echo'D2';
	$h='2'.',';
	//This code stores the grade in 6scs_grading
	$queryx1=mysql_query("update 6scs_grading set grades='$h' where subject_id='GEO'")or die(mysql_error());
	}
	elseif($rown['Total']<= '100' and $rown['Total']>='80')
	{
	echo'D1';
	$i='1'.',';
	//This code stores the grade in 6scs_grading
	$queryx1=mysql_query("update 6scs_grading set grades='$i' where subject_id='GEO'")or die(mysql_error());
	}
	?></td>
      <td align="center" rowspan="3" style="color:#1b5e94;"><?php 
	//This code selects the remark in the 6scs_grading table
    $query_remark=mysql_query("SELECT remark from 6scs_grading where subject_id ='GEO'")or die(mysql_error());
    $row_remark=mysql_fetch_array($query_remark);
	echo $row_remark['remark'];?></td>
    <td rowspan="3" align="center"><?php echo $rowZ['GEO'];?></td>
  </tr>
  
  <tr bgcolor="#999999">
    <td align="center">2</td>
    <td align="center"><?php echo $row8['two_paper_mot']; ?></td>
    <td align="center"><?php echo $row8['two_paper_end']; ?></td>
    <td align="center"><?php 
	 if($rowo['Total']=='')
	{
	$queryx2=mysql_query("update 6scs_grading set grades=null,award=null,value=null,remark=null where subject_id='GEO'")or die(mysql_error());
	}
	elseif($rowo['Total']<= '34' and $rowo['Total']>='1')
	{
	echo'F9';
	$a='9'.',';
	//This code stores the grade in 6scs_grading
	$queryx2=mysql_query("UPDATE 6scs_grading SET grades= concat(grades,'$a') WHERE `6scs_grading`.`subject_id` = 'GEO'")or die(mysql_error());
	}
	elseif($rowo['Total']<= '39' and $rowo['Total']>='35')
	{
	echo'P8';
	$b='8'.',';
	//This code stores the grade in 6scs_grading
	$queryx2=mysql_query("UPDATE 6scs_grading SET grades= concat(grades,'$b') WHERE `6scs_grading`.`subject_id` = 'GEO'")or die(mysql_error());
	}
	elseif($rowo['Total']<= '49' and $rowo['Total']>='40')
	{
	echo'P7';
	$c='7'.',';
	//This code stores the grade in 6scs_grading
	$queryx2=mysql_query("UPDATE 6scs_grading SET grades= concat(grades,'$c') WHERE `6scs_grading`.`subject_id` = 'GEO'")or die(mysql_error());
	}
	elseif($rowo['Total']<= '54' and $rowo['Total']>='50')
	{
	echo'C6';
	$d='6'.',';
	//This code stores the grade in 6scs_grading
	$queryx2=mysql_query("UPDATE 6scs_grading SET grades= concat(grades,'$d') WHERE `6scs_grading`.`subject_id` = 'GEO'")or die(mysql_error());
	}
	elseif($rowo['Total']<= '59' and $rowo['Total']>='55')
	{
	echo'C5';
	$e='5'.',';
	//This code stores the grade in 6scs_grading
	$queryx2=mysql_query("UPDATE 6scs_grading SET grades= concat(grades,'$e') WHERE `6scs_grading`.`subject_id` = 'GEO'")or die(mysql_error());
	}
	elseif($rowo['Total']<= '64' and $rowo['Total']>='60')
	{
	echo'C4';
	$f='4'.',';
	//This code stores the grade in 6scs_grading
	$queryx2=mysql_query("UPDATE 6scs_grading SET grades= concat(grades,'$f') WHERE `6scs_grading`.`subject_id` = 'GEO'")or die(mysql_error());
	}
	elseif($rowo['Total']<= '74' and $rowo['Total']>='65')
	{
	echo'C3';
	$g='3'.',';
	//This code stores the grade in 6scs_grading
	$queryx2=mysql_query("UPDATE 6scs_grading SET grades= concat(grades,'$g') WHERE `6scs_grading`.`subject_id` = 'GEO'")or die(mysql_error());
	}
	elseif($rowo['Total']<= '79' and $rowo['Total']>='75')
	{
	echo'D2';
	$h='2'.',';
	//This code stores the grade in 6scs_grading
	$queryx2=mysql_query("UPDATE 6scs_grading SET grades= concat(grades,'$h') WHERE `6scs_grading`.`subject_id` = 'GEO'")or die(mysql_error());
	}
	elseif($rowo['Total']<= '100' and $rowo['Total']>='80')
	{
	echo'D1';
	$i='1'.',';
	//This code stores the grade in 6scs_grading
	$queryx2=mysql_query("UPDATE 6scs_grading SET grades= concat(grades,'$i') WHERE `6scs_grading`.`subject_id` = 'GEO'")or die(mysql_error());
	}
	?></td>
  </tr>
  <tr bgcolor="#999999">
    <td align="center">3</td>
    <td align="center"><?php echo $row8['paper_three_mot']; ?></td>
    <td align="center"><?php echo $row8['paper_three_end']; ?></td>
    <td align="center"><?php 
	 if($rowoo['Total']=='')
	{
	$queryx2=mysql_query("update 6scs_grading set grades=null,award=null,value=null,remark=null where subject_id='GEO'")or die(mysql_error());
	}
	elseif($rowoo['Total']<= '34' and $rowoo['Total']>='1')
	{
	echo'F9';
	$a='9';
	//This code stores the grade in 6scs_grading
	$queryx2=mysql_query("UPDATE 6scs_grading SET grades= concat(grades,'$a') WHERE `6scs_grading`.`subject_id` = 'GEO'")or die(mysql_error());
	}
	elseif($rowoo['Total']<= '39' and $rowoo['Total']>='35')
	{
	echo'P8';
	$b='8';
	//This code stores the grade in 6scs_grading
	$queryx2=mysql_query("UPDATE 6scs_grading SET grades= concat(grades,'$b') WHERE `6scs_grading`.`subject_id` = 'GEO'")or die(mysql_error());
	}
	elseif($rowoo['Total']<= '49' and $rowoo['Total']>='40')
	{
	echo'P7';
	$c='7';
	//This code stores the grade in 6scs_grading
	$queryx2=mysql_query("UPDATE 6scs_grading SET grades= concat(grades,'$c') WHERE `6scs_grading`.`subject_id` = 'GEO'")or die(mysql_error());
	}
	elseif($rowoo['Total']<= '54' and $rowoo['Total']>='50')
	{
	echo'C6';
	$d='6';
	//This code stores the grade in 6scs_grading
	$queryx2=mysql_query("UPDATE 6scs_grading SET grades= concat(grades,'$d') WHERE `6scs_grading`.`subject_id` = 'GEO'")or die(mysql_error());
	}
	elseif($rowoo['Total']<= '59' and $rowoo['Total']>='55')
	{
	echo'C5';
	$e='5';
	//This code stores the grade in 6scs_grading
	$queryx2=mysql_query("UPDATE 6scs_grading SET grades= concat(grades,'$e') WHERE `6scs_grading`.`subject_id` = 'GEO'")or die(mysql_error());
	}
	elseif($rowoo['Total']<= '64' and $rowoo['Total']>='60')
	{
	echo'C4';
	$f='4';
	//This code stores the grade in 6scs_grading
	$queryx2=mysql_query("UPDATE 6scs_grading SET grades= concat(grades,'$f') WHERE `6scs_grading`.`subject_id` = 'GEO'")or die(mysql_error());
	}
	elseif($rowoo['Total']<= '74' and $rowoo['Total']>='65')
	{
	echo'C3';
	$g='3';
	//This code stores the grade in 6scs_grading
	$queryx2=mysql_query("UPDATE 6scs_grading SET grades= concat(grades,'$g') WHERE `6scs_grading`.`subject_id` = 'GEO'")or die(mysql_error());
	}
	elseif($rowoo['Total']<= '79' and $rowoo['Total']>='75')
	{
	echo'D2';
	$h='2';
	//This code stores the grade in 6scs_grading
	$queryx2=mysql_query("UPDATE 6scs_grading SET grades= concat(grades,'$h') WHERE `6scs_grading`.`subject_id` = 'GEO'")or die(mysql_error());
	}
	elseif($rowoo['Total']<= '100' and $rowoo['Total']>='80')
	{
	echo'D1';
	$i='1';
	//This code stores the grade in 6scs_grading
	$queryx2=mysql_query("UPDATE 6scs_grading SET grades= concat(grades,'$i') WHERE `6scs_grading`.`subject_id` = 'GEO'")or die(mysql_error());
	}
	?></td>
  </tr>
   <tr bgcolor="#CCCCCC">
    <td rowspan="4">Fine Art</td>
    <td rowspan="4"><input type="text" name="art" size="2px"  style="height:20px;border:groove; font-size:24px;"/>&nbsp;</td>
    <td align="center">1</td>
    <td align="center"><?php echo $row12['paper_one_mot']; ?></td>
    <td align="center"><?php echo $row12['paper_one_end']; ?></td>
    <td align="center"><?php 
	 
	if($rowu['Total']<= '34' and $rowu['Total']>='1')
	{
	echo'F9';
	$a='9'.',';
	//This code stores the grade in 6scs_grading
	$queryx1=mysql_query("update 6scs_grading set grades='$a' where subject_id='ART'")or die(mysql_error());
	
	}
	elseif($rowu['Total']<= '39' and $rowu['Total']>='35')
	{
	echo'P8';
	$b='8'.',';
	//This code stores the grade in 6scs_grading
   $queryx1=mysql_query("update 6scs_grading set grades='$b' where subject_id='ART'")or die(mysql_error());
	}
	elseif($rowu['Total']<= '49' and $rowu['Total']>='40')
	{
	echo'P7';
	$c='7'.',';
	//This code stores the grade in 6scs_grading
	$queryx1=mysql_query("update 6scs_grading set grades='$c' where subject_id='ART'")or die(mysql_error());
	}
	elseif($rowu['Total']<= '54' and $rowu['Total']>='50')
	{
	echo'C6';
	$d='6'.',';
	//This code stores the grade in 6scs_grading
	$queryx1=mysql_query("update 6scs_grading set grades='$d' where subject_id='ART'")or die(mysql_error());
	}
	elseif($rowu['Total']<= '59' and $rowu['Total']>='55')
	{
	echo'C5'; 
	$e='5'.',';
	//This code stores the grade in 6scs_grading
	$queryx1=mysql_query("update 6scs_grading set grades='$e' where subject_id='ART'")or die(mysql_error());
	}
	elseif($rowu['Total']<= '64' and $rowu['Total']>='60')
	{
	echo'C4';
	$f='4'.',';
	//This code stores the grade in 6scs_grading
	$queryx1=mysql_query("update 6scs_grading set grades='$f' where subject_id='ART'")or die(mysql_error());
	}
	elseif($rowu['Total']<= '74' and $rowu['Total']>='65')
	{
	echo'C3';
	$g='3'.',';
	//This code stores the grade in 6scs_grading
	$queryx1=mysql_query("update 6scs_grading set grades='$g' where subject_id='ART'")or die(mysql_error());
	}
	elseif($rowu['Total']<= '79' and $rowu['Total']>='75')
	{
	echo'D2';
	$h='2'.',';
	//This code stores the grade in 6scs_grading
	$queryx1=mysql_query("update 6scs_grading set grades='$h' where subject_id='ART'")or die(mysql_error());
	}
	elseif($rowu['Total']<= '100' and $rowu['Total']>='80')
	{
	echo'D1';
	$i='1'.',';
	//This code stores the grade in 6scs_grading
	$queryx1=mysql_query("update 6scs_grading set grades='$i' where subject_id='ART'")or die(mysql_error());
	}
	?></td>
  <td align="center" rowspan="4" style="color:#1b5e94;"><input type="text" name="Art_comment" size="12px"  style="height:20px;border:groove;" value="<?php 
	//This code selects the remark in the 6scs_grading table
    $query_remark=mysql_query("SELECT remark from 6scs_grading where subject_id ='ART'")or die(mysql_error());
    $row_remark=mysql_fetch_array($query_remark);
	echo $row_remark['remark'];?>" /></td>
      <td rowspan="4" align="center"><?php echo $rowZ['ART'];?></td>
  </tr>
     <tr bgcolor="#CCCCCC">
    <td align="center">2</td>
    <td align="center"><?php echo $row12['two_paper_mot']; ?></td>
    <td align="center"><?php echo $row12['two_paper_end']; ?></td>
    <td align="center"><?php 
	 if($rowv['Total']=='')
	{
	$queryx2=mysql_query("update 6scs_grading set grades=null,award=null,value=null,remark=null where subject_id='ART'")or die(mysql_error());
	}
	elseif($rowv['Total']<= '34' and $rowv['Total']>='1')
	{
	echo'F9';
	$a='9'.',';
	//This code stores the grade in 6scs_grading
	$queryx2=mysql_query("UPDATE 6scs_grading SET grades= concat(grades,'$a') WHERE `6scs_grading`.`subject_id` = 'ART'")or die(mysql_error());
	}
	elseif($rowv['Total']<= '39' and $rowv['Total']>='35')
	{
	echo'P8';
	$b='8'.',';
	//This code stores the grade in 6scs_grading
	$queryx2=mysql_query("UPDATE 6scs_grading SET grades= concat(grades,'$b') WHERE `6scs_grading`.`subject_id` = 'ART'")or die(mysql_error());
	}
	elseif($rowv['Total']<= '49' and $rowv['Total']>='40')
	{
	echo'P7';
	$c='7'.',';
	//This code stores the grade in 6scs_grading
	$queryx2=mysql_query("UPDATE 6scs_grading SET grades= concat(grades,'$c') WHERE `6scs_grading`.`subject_id` = 'ART'")or die(mysql_error());
	}
	elseif($rowv['Total']<= '54' and $rowv['Total']>='50')
	{
	echo'C6';
	$d='6'.',';
	//This code stores the grade in 6scs_grading
	$queryx2=mysql_query("UPDATE 6scs_grading SET grades= concat(grades,'$d') WHERE `6scs_grading`.`subject_id` = 'ART'")or die(mysql_error());
	}
	elseif($rowv['Total']<= '59' and $rowv['Total']>='55')
	{
	echo'C5';
	$e='5'.',';
	//This code stores the grade in 6scs_grading
	$queryx2=mysql_query("UPDATE 6scs_grading SET grades= concat(grades,'$e') WHERE `6scs_grading`.`subject_id` = 'ART'")or die(mysql_error());
	}
	elseif($rowv['Total']<= '64' and $rowv['Total']>='60')
	{
	echo'C4';
	$f='4'.',';
	//This code stores the grade in 6scs_grading
	$queryx2=mysql_query("UPDATE 6scs_grading SET grades= concat(grades,'$f') WHERE `6scs_grading`.`subject_id` = 'ART'")or die(mysql_error());
	}
	elseif($rowv['Total']<= '74' and $rowv['Total']>='65')
	{
	echo'C3';
	$g='3'.',';
	//This code stores the grade in 6scs_grading
	$queryx2=mysql_query("UPDATE 6scs_grading SET grades= concat(grades,'$g') WHERE `6scs_grading`.`subject_id` = 'ART'")or die(mysql_error());
	}
	elseif($rowv['Total']<= '79' and $rowv['Total']>='75')
	{
	echo'D2';
	$h='2'.',';
	//This code stores the grade in 6scs_grading
	$queryx2=mysql_query("UPDATE 6scs_grading SET grades= concat(grades,'$h') WHERE `6scs_grading`.`subject_id` = 'ART'")or die(mysql_error());
	}
	elseif($rowv['Total']<= '100' and $rowv['Total']>='80')
	{
	echo'D1';
	$i='1'.',';
	//This code stores the grade in 6scs_grading
	$queryx2=mysql_query("UPDATE 6scs_grading SET grades= concat(grades,'$i') WHERE `6scs_grading`.`subject_id` = 'ART'")or die(mysql_error());
	}
	?></td>
   </tr>
  <tr bgcolor="#CCCCCC">
    <td align="center">3</td>
    <td align="center"><?php echo $row12['paper_three_mot']; ?></td>
    <td align="center"><?php echo $row12['paper_three_end']; ?></td>
    <td align="center"><?php 
	 if($roww['Total']=='')
	{
	$queryx2=mysql_query("update 6scs_grading set grades=null,award=null,value=null,remark=null where subject_id='ART'")or die(mysql_error());
	}
	elseif($roww['Total']<= '34' and $roww['Total']>='1')
	{
	echo'F9';
	$a='9'.',';
	//This code stores the grade in 6scs_grading
	$queryx2=mysql_query("UPDATE 6scs_grading SET grades= concat(grades,'$a') WHERE `6scs_grading`.`subject_id` = 'ART'")or die(mysql_error());
	}
	elseif($roww['Total']<= '39' and $roww['Total']>='35')
	{
	echo'P8';
	$b='8'.',';
	//This code stores the grade in 6scs_grading
	$queryx2=mysql_query("UPDATE 6scs_grading SET grades= concat(grades,'$b') WHERE `6scs_grading`.`subject_id` = 'ART'")or die(mysql_error());
	}
	elseif($roww['Total']<= '49' and $roww['Total']>='40')
	{
	echo'P7';
	$c='7'.',';
	//This code stores the grade in 6scs_grading
	$queryx2=mysql_query("UPDATE 6scs_grading SET grades= concat(grades,'$c') WHERE `6scs_grading`.`subject_id` = 'ART'")or die(mysql_error());
	}
	elseif($roww['Total']<= '54' and $roww['Total']>='50')
	{
	echo'C6';
	$d='6'.',';
	//This code stores the grade in 6scs_grading
	$queryx2=mysql_query("UPDATE 6scs_grading SET grades= concat(grades,'$d') WHERE `6scs_grading`.`subject_id` = 'ART'")or die(mysql_error());
	}
	elseif($roww['Total']<= '59' and $roww['Total']>='55')
	{
	echo'C5';
	$e='5'.',';
	//This code stores the grade in 6scs_grading
	$queryx2=mysql_query("UPDATE 6scs_grading SET grades= concat(grades,'$e') WHERE `6scs_grading`.`subject_id` = 'ART'")or die(mysql_error());
	}
	elseif($roww['Total']<= '64' and $roww['Total']>='60')
	{
	echo'C4';
	$f='4'.',';
	//This code stores the grade in 6scs_grading
	$queryx2=mysql_query("UPDATE 6scs_grading SET grades= concat(grades,'$f') WHERE `6scs_grading`.`subject_id` = 'ART'")or die(mysql_error());
	}
	elseif($roww['Total']<= '74' and $roww['Total']>='65')
	{
	echo'C3';
	$g='3'.',';
	//This code stores the grade in 6scs_grading
	$queryx2=mysql_query("UPDATE 6scs_grading SET grades= concat(grades,'$g') WHERE `6scs_grading`.`subject_id` = 'ART'")or die(mysql_error());
	}
	elseif($roww['Total']<= '79' and $roww['Total']>='75')
	{
	echo'D2';
	$h='2'.',';
	//This code stores the grade in 6scs_grading
	$queryx2=mysql_query("UPDATE 6scs_grading SET grades= concat(grades,'$h') WHERE `6scs_grading`.`subject_id` = 'ART'")or die(mysql_error());
	}
	elseif($roww['Total']<= '100' and $roww['Total']>='80')
	{
	echo'D1';
	$i='1'.',';
	//This code stores the grade in 6scs_grading
	$queryx2=mysql_query("UPDATE 6scs_grading SET grades= concat(grades,'$i') WHERE `6scs_grading`.`subject_id` = 'ART'")or die(mysql_error());
	}
	?></td>
  </tr>
  <tr bgcolor="#CCCCCC">
    <td align="center">4</td>
    <td align="center"><?php echo $row12['four_paper_mot']; ?></td>
    <td align="center"><?php echo $row12['four_paper_end']; ?></td>
    <td align="center"><?php 
	 if($rowx['Total']=='')
	{
	$queryx2=mysql_query("update 6scs_grading set grades=null,award=null,value=null,remark=null where subject_id='ART'")or die(mysql_error());
	}
	elseif($rowx['Total']<= '34' and $rowx['Total']>='1')
	{
	echo'F9';
	$a='9';
	//This code stores the grade in 6scs_grading
	$queryx2=mysql_query("UPDATE 6scs_grading SET grades= concat(grades,'$a') WHERE `6scs_grading`.`subject_id` = 'ART'")or die(mysql_error());
	}
	elseif($rowx['Total']<= '39' and $rowx['Total']>='35')
	{
	echo'P8';
	$b='8';
	//This code stores the grade in 6scs_grading
	$queryx2=mysql_query("UPDATE 6scs_grading SET grades= concat(grades,'$b') WHERE `6scs_grading`.`subject_id` = 'ART'")or die(mysql_error());
	}
	elseif($rowx['Total']<= '49' and $rowx['Total']>='40')
	{
	echo'P7';
	$c='7';
	//This code stores the grade in 6scs_grading
	$queryx2=mysql_query("UPDATE 6scs_grading SET grades= concat(grades,'$c') WHERE `6scs_grading`.`subject_id` = 'ART'")or die(mysql_error());
	}
	elseif($rowx['Total']<= '54' and $rowx['Total']>='50')
	{
	echo'C6';
	$d='6';
	//This code stores the grade in 6scs_grading
	$queryx2=mysql_query("UPDATE 6scs_grading SET grades= concat(grades,'$d') WHERE `6scs_grading`.`subject_id` = 'ART'")or die(mysql_error());
	}
	elseif($rowx['Total']<= '59' and $rowx['Total']>='55')
	{
	echo'C5';
	$e='5';
	//This code stores the grade in 6scs_grading
	$queryx2=mysql_query("UPDATE 6scs_grading SET grades= concat(grades,'$e') WHERE `6scs_grading`.`subject_id` = 'ART'")or die(mysql_error());
	}
	elseif($rowx['Total']<= '64' and $rowx['Total']>='60')
	{
	echo'C4';
	$f='4';
	//This code stores the grade in 6scs_grading
	$queryx2=mysql_query("UPDATE 6scs_grading SET grades= concat(grades,'$f') WHERE `6scs_grading`.`subject_id` = 'ART'")or die(mysql_error());
	}
	elseif($rowx['Total']<= '74' and $rowx['Total']>='65')
	{
	echo'C3';
	$g='3';
	//This code stores the grade in 6scs_grading
	$queryx2=mysql_query("UPDATE 6scs_grading SET grades= concat(grades,'$g') WHERE `6scs_grading`.`subject_id` = 'ART'")or die(mysql_error());
	}
	elseif($rowx['Total']<= '79' and $rowx['Total']>='75')
	{
	echo'D2';
	$h='2';
	//This code stores the grade in 6scs_grading
	$queryx2=mysql_query("UPDATE 6scs_grading SET grades= concat(grades,'$h') WHERE `6scs_grading`.`subject_id` = 'ART'")or die(mysql_error());
	}
	elseif($rowx['Total']<= '100' and $rowx['Total']>='80')
	{
	echo'D1';
	$i='1';
	//This code stores the grade in 6scs_grading
	$queryx2=mysql_query("UPDATE 6scs_grading SET grades= concat(grades,'$i') WHERE `6scs_grading`.`subject_id` = 'ART'")or die(mysql_error());
	}
	?></td>
  </tr>
  <tr bgcolor="#999999">
    <td>Computer</td>
    <td>
    <input type="text" name="computer" size="2px"  style="height:20px;border:groove; font-size:24px;" value="<?php 
	if($row10['paper_one_mot']=='')
	{
	$queryx2=mysql_query("update 6scs_grading set grades=null,award=null,value=null,remark=null where subject_id='ICT'")or die(mysql_error());
	 $query_change=mysql_query("update s6 set ICT=null where id='$ID'")or die(mysql_error());
	}
	elseif($rowg['Total']<= '34' and $rowg['Total']>='1')
	{
	echo'F9';
	$a='9';
	//This code stores the grade in 6scs_grading
	$queryx2=mysql_query("UPDATE 6scs_grading SET grades= concat(grades,'$a') WHERE `6scs_grading`.`subject_id` = 'ICT'")or die(mysql_error());
	//This code inserts the grade value in the  6scs_grading table
	$query_value=mysql_query("update 6scs_grading set value='0' where subject_id='ICT'")or die(mysql_error());
	//This code inserts the grade award in the  6scs_grading table
	$query_award=mysql_query("update 6scs_grading set award='9' where subject_id='ICT'")or die(mysql_error());
	//This code inserts the grade remark in the  6scs_grading table
	$query_remark=mysql_query("update 6scs_grading set remark='Improve' where subject_id='ICT'")or die(mysql_error());
	 $query_change=mysql_query("update s6 set ICT='9' where id='$ID'")or die(mysql_error());
	}
	elseif($rowg['Total']<= '39' and $rowg['Total']>='35')
	{
	echo'P8';
	$b='8';
	//This code stores the grade in 6scs_grading
	$queryx2=mysql_query("UPDATE 6scs_grading SET grades= concat(grades,'$b') WHERE `6scs_grading`.`subject_id` = 'ICT'")or die(mysql_error());
	//This code inserts the grade value in the  6scs_grading table
	$query_value=mysql_query("update 6scs_grading set value='0' where subject_id='ICT'")or die(mysql_error());
	//This code inserts the grade award in the  6scs_grading table
	$query_award=mysql_query("update 6scs_grading set award='8' where subject_id='ICT'")or die(mysql_error());
	//This code inserts the grade remark in the  6scs_grading table
	$query_remark=mysql_query("update 6scs_grading set remark='Improve' where subject_id='ICT'")or die(mysql_error());
	 $query_change=mysql_query("update s6 set ICT='8' where id='$ID'")or die(mysql_error());
	}
	elseif($rowg['Total']<= '49' and $rowg['Total']>='40')
	{
	echo'P7';
	$c='7';
	//This code stores the grade in 6scs_grading
	$queryx2=mysql_query("UPDATE 6scs_grading SET grades= concat(grades,'$c') WHERE `6scs_grading`.`subject_id` = 'ICT'")or die(mysql_error());
	//This code inserts the grade value in the  6scs_grading table
	$query_value=mysql_query("update 6scs_grading set value='0' where subject_id='ICT'")or die(mysql_error());
	//This code inserts the grade award in the  6scs_grading table
	$query_award=mysql_query("update 6scs_grading set award='7' where subject_id='ICT'")or die(mysql_error());
	//This code inserts the grade remark in the  6scs_grading table
	$query_remark=mysql_query("update 6scs_grading set remark='Improve' where subject_id='ICT'")or die(mysql_error());
	 $query_change=mysql_query("update s6 set ICT='7' where id='$ID'")or die(mysql_error());
	}
	elseif($rowg['Total']<= '54' and $rowg['Total']>='50')
	{
	echo'C6';
	$d='6';
	//This code stores the grade in 6scs_grading
	$queryx2=mysql_query("UPDATE 6scs_grading SET grades= concat(grades,'$d') WHERE `6scs_grading`.`subject_id` = 'ICT'")or die(mysql_error());
	//This code inserts the grade value in the  6scs_grading table
	$query_value=mysql_query("update 6scs_grading set value='1' where subject_id='ICT'")or die(mysql_error());
	//This code inserts the grade award in the  6scs_grading table
	$query_award=mysql_query("update 6scs_grading set award='6' where subject_id='ICT'")or die(mysql_error());
	//This code inserts the grade remark in the  6scs_grading table
	$query_remark=mysql_query("update 6scs_grading set remark='Fair' where subject_id='ICT'")or die(mysql_error());
	 $query_change=mysql_query("update s6 set ICT='6' where id='$ID'")or die(mysql_error());
	}
	elseif($rowg['Total']<= '59' and $rowg['Total']>='55')
	{
	echo'C5';
	$e='5';
	//This code stores the grade in 6scs_grading
	$queryx2=mysql_query("UPDATE 6scs_grading SET grades= concat(grades,'$e') WHERE `6scs_grading`.`subject_id` = 'ICT'")or die(mysql_error());
	//This code inserts the grade value in the  6scs_grading table
	$query_value=mysql_query("update 6scs_grading set value='1' where subject_id='ICT'")or die(mysql_error());
	//This code inserts the grade award in the  6scs_grading table
	$query_award=mysql_query("update 6scs_grading set award='5' where subject_id='ICT'")or die(mysql_error());
	//This code inserts the grade remark in the  6scs_grading table
	$query_remark=mysql_query("update 6scs_grading set remark='Fairly Good' where subject_id='ICT'")or die(mysql_error());
	 $query_change=mysql_query("update s6 set ICT='5' where id='$ID'")or die(mysql_error());
	}
	elseif($rowg['Total']<= '64' and $rowg['Total']>='60')
	{
	echo'C4';
	$f='4';
	//This code stores the grade in 6scs_grading
	$queryx2=mysql_query("UPDATE 6scs_grading SET grades= concat(grades,'$f') WHERE `6scs_grading`.`subject_id` = 'ICT'")or die(mysql_error());
	//This code inserts the grade value in the  6scs_grading table
	$query_value=mysql_query("update 6scs_grading set value='1' where subject_id='ICT'")or die(mysql_error());
	//This code inserts the grade award in the  6scs_grading table
	$query_award=mysql_query("update 6scs_grading set award='4' where subject_id='ICT'")or die(mysql_error());
	//This code inserts the grade remark in the  6scs_grading table
	$query_remark=mysql_query("update 6scs_grading set remark='Good' where subject_id='ICT'")or die(mysql_error());
	 $query_change=mysql_query("update s6 set ICT='4' where id='$ID'")or die(mysql_error());
	}
	elseif($rowg['Total']<= '74' and $rowg['Total']>='65')
	{
	echo'C3';
	$g='3';
	//This code stores the grade in 6scs_grading
	$queryx2=mysql_query("UPDATE 6scs_grading SET grades= concat(grades,'$g') WHERE `6scs_grading`.`subject_id` = 'ICT'")or die(mysql_error());
	//This code inserts the grade value in the  6scs_grading table
	$query_value=mysql_query("update 6scs_grading set value='1' where subject_id='ICT'")or die(mysql_error());
	//This code inserts the grade award in the  6scs_grading table
	$query_award=mysql_query("update 6scs_grading set award='3' where subject_id='ICT'")or die(mysql_error());
	//This code inserts the grade remark in the  6scs_grading table
	$query_remark=mysql_query("update 6scs_grading set remark='Good' where subject_id='ICT'")or die(mysql_error());
	 $query_change=mysql_query("update s6 set ICT='3' where id='$ID'")or die(mysql_error());
	}
	elseif($rowg['Total']<= '79' and $rowg['Total']>='75')
	{
	echo'D2';
	$h='2';
	//This code stores the grade in 6scs_grading
	$queryx2=mysql_query("UPDATE 6scs_grading SET grades= concat(grades,'$h') WHERE `6scs_grading`.`subject_id` = 'ICT'")or die(mysql_error());
	//This code inserts the grade value in the  6scs_grading table
	$query_value=mysql_query("update 6scs_grading set value='1' where subject_id='ICT'")or die(mysql_error());
	//This code inserts the grade award in the  6scs_grading table
	$query_award=mysql_query("update 6scs_grading set award='2' where subject_id='ICT'")or die(mysql_error());
	//This code inserts the grade remark in the  6scs_grading table
	$query_remark=mysql_query("update 6scs_grading set remark='Very Good' where subject_id='ICT'")or die(mysql_error());
	 $query_change=mysql_query("update s6 set ICT='2' where id='$ID'")or die(mysql_error());
	}
	elseif($rowg['Total']<= '100' and $rowg['Total']>='80')
	{
	echo'D1';
	$i='1';
	//This code stores the grade in 6scs_grading
	$queryx2=mysql_query("UPDATE 6scs_grading SET grades= concat(grades,'$i') WHERE `6scs_grading`.`subject_id` = 'ICT'")or die(mysql_error());
	//This code inserts the grade value in the  6scs_grading table
	$query_value=mysql_query("update 6scs_grading set value='1' where subject_id='ICT'")or die(mysql_error());
	//This code inserts the grade award in the  6scs_grading table
	$query_award=mysql_query("update 6scs_grading set award='1' where subject_id='ICT'")or die(mysql_error());
	//This code inserts the grade remark in the  6scs_grading table
	$query_remark=mysql_query("update 6scs_grading set remark='Excellent' where subject_id='ICT'")or die(mysql_error());
	 $query_change=mysql_query("update s6 set ICT='1' where id='$ID'")or die(mysql_error());
	}
	?>"/></td>
    <td align="center">1      </td>
    <td align="center"><?php echo $row10['paper_one_mot']; ?></td>
    <td align="center"><?php echo $row10['paper_one_end']; ?></td>
    <td align="center"><?php 
	if($row10['paper_one_mot']==''){
	$query=mysql_query("update 6scs_grading set grades=null,award=null,value=null,remark=null where subject_id='ICT'")or die(mysql_error());
	 $query_change=mysql_query("update s6 set ICT=null where id='$ID'")or die(mysql_error());
	}
	 
	elseif($rowg['Total']<= '34' and $rowg['Total']>='1')
	{
	echo'F9';
	$a='9'.',';
	//This code stores the grade in 6scs_grading
	$queryx1=mysql_query("update 6scs_grading set grades='$a' where subject_id='ICT'")or die(mysql_error());
	
	}
	elseif($rowg['Total']<= '39' and $rowg['Total']>='35')
	{
	echo'P8';
	$b='8'.',';
	//This code stores the grade in 6scs_grading
   $queryx1=mysql_query("update 6scs_grading set grades='$b' where subject_id='ICT'")or die(mysql_error());
	}
	elseif($rowg['Total']<= '49' and $rowg['Total']>='40')
	{
	echo'P7';
	$c='7'.',';
	//This code stores the grade in 6scs_grading
	$queryx1=mysql_query("update 6scs_grading set grades='$c' where subject_id='ICT'")or die(mysql_error());
	}
	elseif($rowg['Total']<= '54' and $rowg['Total']>='50')
	{
	echo'C6';
	$d='6'.',';
	//This code stores the grade in 6scs_grading
	$queryx1=mysql_query("update 6scs_grading set grades='$d' where subject_id='ICT'")or die(mysql_error());
	}
	elseif($rowg['Total']<= '59' and $rowg['Total']>='55')
	{
	echo'C5'; 
	$e='5'.',';
	//This code stores the grade in 6scs_grading
	$queryx1=mysql_query("update 6scs_grading set grades='$e' where subject_id='ICT'")or die(mysql_error());
	}
	elseif($rowg['Total']<= '64' and $rowg['Total']>='60')
	{
	echo'C4';
	$f='4'.',';
	//This code stores the grade in 6scs_grading
	$queryx1=mysql_query("update 6scs_grading set grades='$f' where subject_id='ICT'")or die(mysql_error());
	}
	elseif($rowg['Total']<= '74' and $rowg['Total']>='65')
	{
	echo'C3';
	$g='3'.',';
	//This code stores the grade in 6scs_grading
	$queryx1=mysql_query("update 6scs_grading set grades='$g' where subject_id='ICT'")or die(mysql_error());
	}
	elseif($rowg['Total']<= '79' and $rowg['Total']>='75')
	{
	echo'D2';
	$h='2'.',';
	//This code stores the grade in 6scs_grading
	$queryx1=mysql_query("update 6scs_grading set grades='$h' where subject_id='ICT'")or die(mysql_error());
	}
	elseif($rowg['Total']<= '100' and $rowg['Total']>='80')
	{
	echo'D1';
	$i='1'.',';
	//This code stores the grade in 6scs_grading
	$queryx1=mysql_query("update 6scs_grading set grades='$i' where subject_id='ICT'")or die(mysql_error());
	}
	?>&nbsp;</td>
     <td align="center" style="color:#1b5e94;"><?php 
	//This code selects the remark in the 6scs_grading table
    $query_remark=mysql_query("SELECT remark from 6scs_grading where subject_id ='ICT'")or die(mysql_error());
    $row_remark=mysql_fetch_array($query_remark);
	echo $row_remark['remark'];?></td>
    <td align="center"><?php echo $rowZ['ICT'];?></td>
  </tr>
  <tr bgcolor="#CCCCCC">
    <td>Sub math</td>
    <td>
	<input type="text" name="sub_math" size="2px"  style="height:20px;border:groove; font-size:24px;" value="<?php 
	 
	if($rowp['Total']<= '34' and $rowp['Total']>='1')
	{
	echo'F9';
	$a='9'.',';
	//This code stores the grade in 6scs_grading
	$queryx1=mysql_query("update 6scs_grading set grades='$a' where subject_id='SUB_MATH'")or die(mysql_error());
	//This code updates the 6scs_grading table
	$query_remark=mysql_query("update 6scs_grading set remark='Improve' where subject_id='SUB_MATH'")or die(mysql_error());
	//This code inserts the grade Value column in the  6scs_grading table
	$query_value=mysql_query("update 6scs_grading set value='0' where subject_id='SUB_MATH'")or die(mysql_error());
	//This code inserts the grade award in the  6scs_grading table
	$query_award=mysql_query("update 6scs_grading set award='9' where subject_id='SUB_MATH'")or die(mysql_error());
	
	}
	elseif($rowp['Total']<= '39' and $rowp['Total']>='35')
	{
	echo'P8';
	$b='8'.',';
	//This code stores the grade in 6scs_grading
   $queryx1=mysql_query("update 6scs_grading set grades='$b' where subject_id='SUB_MATH'")or die(mysql_error());
   //This code updates the 6scs_grading table
	$query_remark=mysql_query("update 6scs_grading set remark='Improve' where subject_id='SUB_MATH'")or die(mysql_error());
	//This code inserts the grade Value column in the  6scs_grading table
	$query_value=mysql_query("update 6scs_grading set value='0' where subject_id='SUB_MATH'")or die(mysql_error());
	//This code inserts the grade award in the  6scs_grading table
	$query_award=mysql_query("update 6scs_grading set award='8' where subject_id='SUB_MATH'")or die(mysql_error());
	}
	elseif($rowp['Total']<= '49' and $rowp['Total']>='40')
	{
	echo'P7';
	$c='7'.',';
	//This code stores the grade in 6scs_grading
	$queryx1=mysql_query("update 6scs_grading set grades='$c' where subject_id='SUB_MATH'")or die(mysql_error());
	//This code updates the 6scs_grading table
	$query_remark=mysql_query("update 6scs_grading set remark='Improve' where subject_id='SUB_MATH'")or die(mysql_error());
	//This code inserts the grade Value column in the  6scs_grading table
	$query_value=mysql_query("update 6scs_grading set value='0' where subject_id='SUB_MATH'")or die(mysql_error());
	//This code inserts the grade award in the  6scs_grading table
	$query_award=mysql_query("update 6scs_grading set award='7' where subject_id='SUB_MATH'")or die(mysql_error());
	}
	elseif($rowp['Total']<= '54' and $rowp['Total']>='50')
	{
	echo'C6';
	$d='6'.',';
	//This code stores the grade in 6scs_grading
	$queryx1=mysql_query("update 6scs_grading set grades='$d' where subject_id='SUB_MATH'")or die(mysql_error());
	//This code updates the 6scs_grading table
	$query_remark=mysql_query("update 6scs_grading set remark='Improve' where subject_id='SUB_MATH'")or die(mysql_error());
	//This code inserts the grade Value column in the  6scs_grading table
	$query_value=mysql_query("update 6scs_grading set value='1' where subject_id='SUB_MATH'")or die(mysql_error());
	//This code inserts the grade award in the  6scs_grading table
	$query_award=mysql_query("update 6scs_grading set award='6' where subject_id='SUB_MATH'")or die(mysql_error());
	}
	elseif($rowp['Total']<= '59' and $rowp['Total']>='55')
	{
	echo'C5'; 
	$e='5'.',';
	//This code stores the grade in 6scs_grading
	$queryx1=mysql_query("update 6scs_grading set grades='$e' where subject_id='SUB_MATH'")or die(mysql_error());
	//This code updates the 6scs_grading table
	$query_remark=mysql_query("update 6scs_grading set remark='Fair' where subject_id='SUB_MATH'")or die(mysql_error());
	//This code inserts the grade Value column in the  6scs_grading table
	$query_value=mysql_query("update 6scs_grading set value='1' where subject_id='SUB_MATH'")or die(mysql_error());
	//This code inserts the grade award in the  6scs_grading table
	$query_award=mysql_query("update 6scs_grading set award='5' where subject_id='SUB_MATH'")or die(mysql_error());
	}
	elseif($rowp['Total']<= '64' and $rowp['Total']>='60')
	{
	echo'C4';
	$f='4'.',';
	//This code stores the grade in 6scs_grading
	$queryx1=mysql_query("update 6scs_grading set grades='$f' where subject_id='SUB_MATH'")or die(mysql_error());
	//This code updates the 6scs_grading table
	$query_remark=mysql_query("update 6scs_grading set remark='Fairly Good' where subject_id='SUB_MATH'")or die(mysql_error());
	//This code inserts the grade Value column in the  6scs_grading table
	$query_value=mysql_query("update 6scs_grading set value='1' where subject_id='SUB_MATH'")or die(mysql_error());
	//This code inserts the grade award in the  6scs_grading table
	$query_award=mysql_query("update 6scs_grading set award='4' where subject_id='SUB_MATH'")or die(mysql_error());
	}
	elseif($rowp['Total']<= '74' and $rowp['Total']>='65')
	{
	echo'C3';
	$g='3'.',';
	//This code stores the grade in 6scs_grading
	$queryx1=mysql_query("update 6scs_grading set grades='$g' where subject_id='SUB_MATH'")or die(mysql_error());
	//This code updates the 6scs_grading table
	$query_remark=mysql_query("update 6scs_grading set remark='Good' where subject_id='SUB_MATH'")or die(mysql_error());
	//This code inserts the grade Value column in the  6scs_grading table
	$query_value=mysql_query("update 6scs_grading set value='1' where subject_id='SUB_MATH'")or die(mysql_error());
	//This code inserts the grade award in the  6scs_grading table
	$query_award=mysql_query("update 6scs_grading set award='3' where subject_id='SUB_MATH'")or die(mysql_error());
	}
	elseif($rowp['Total']<= '79' and $rowp['Total']>='75')
	{
	echo'D2';
	$h='2'.',';
	//This code stores the grade in 6scs_grading
	$queryx1=mysql_query("update 6scs_grading set grades='$h' where subject_id='SUB_MATH'")or die(mysql_error());
	//This code updates the 6scs_grading table
	$query_remark=mysql_query("update 6scs_grading set remark='V.Good' where subject_id='SUB_MATH'")or die(mysql_error());
	//This code inserts the grade Value column in the  6scs_grading table
	$query_value=mysql_query("update 6scs_grading set value='1' where subject_id='SUB_MATH'")or die(mysql_error());
	//This code inserts the grade award in the  6scs_grading table
	$query_award=mysql_query("update 6scs_grading set award='2' where subject_id='SUB_MATH'")or die(mysql_error());
	}
	elseif($rowp['Total']<= '100' and $rowp['Total']>='80')
	{
	echo'D1';
	$i='1'.',';
	//This code stores the grade in 6scs_grading
	$queryx1=mysql_query("update 6scs_grading set grades='$i' where subject_id='SUB_MATH'")or die(mysql_error());
	//This code updates the 6scs_grading table
	$query_remark=mysql_query("update 6scs_grading set remark='Excellent' where subject_id='SUB_MATH'")or die(mysql_error());
	//This code inserts the grade Value column in the  6scs_grading table
	$query_value=mysql_query("update 6scs_grading set value='1' where subject_id='SUB_MATH'")or die(mysql_error());
	//This code inserts the grade award in the  6scs_grading table
	$query_award=mysql_query("update 6scs_grading set award='1' where subject_id='SUB_MATH'")or die(mysql_error());
	}
	?>"/></td>
    <td align="center">1</td>
    <td align="center"><?php echo $row11['paper_one_mot']; ?></td>
    <td align="center"><?php echo $row11['paper_one_end']; ?></td>
    <td align="center"><?php 
	if($row11['paper_one_mot']==''){
	$query=mysql_query("update 6scs_grading set grades=null,award=null,value=null,remark=null where subject_id='SUB_MATH'")or die(mysql_error());
	 $query_change=mysql_query("update s6 set SUB_MATH=null where id='$ID'")or die(mysql_error());
	}
	 
	elseif($rowp['Total']<= '34' and $rowp['Total']>='1')
	{
	echo'F9';
	$a='9'.',';
	//This code stores the grade in 6scs_grading
	$queryx1=mysql_query("update 6scs_grading set grades='$a' where subject_id='SUB_MATH'")or die(mysql_error());
	$query_change=mysql_query("update s6 set SUB_MATH='9' where id='$ID'")or die(mysql_error());
	
	}
	elseif($rowp['Total']<= '39' and $rowp['Total']>='35')
	{
	echo'P8';
	$b='8'.',';
	//This code stores the grade in 6scs_grading
   $queryx1=mysql_query("update 6scs_grading set grades='$b' where subject_id='SUB_MATH'")or die(mysql_error());
   $query_change=mysql_query("update s6 set SUB_MATH='8' where id='$ID'")or die(mysql_error());
	}
	elseif($rowp['Total']<= '49' and $rowp['Total']>='40')
	{
	echo'P7';
	$c='7'.',';
	//This code stores the grade in 6scs_grading
	$queryx1=mysql_query("update 6scs_grading set grades='$c' where subject_id='SUB_MATH'")or die(mysql_error());
	$query_change=mysql_query("update s6 set SUB_MATH='7' where id='$ID'")or die(mysql_error());
	}
	elseif($rowp['Total']<= '54' and $rowp['Total']>='50')
	{
	echo'C6';
	$d='6'.',';
	//This code stores the grade in 6scs_grading
	$queryx1=mysql_query("update 6scs_grading set grades='$d' where subject_id='SUB_MATH'")or die(mysql_error());
	$query_change=mysql_query("update s6 set SUB_MATH='6' where id='$ID'")or die(mysql_error());
	}
	elseif($rowp['Total']<= '59' and $rowp['Total']>='55')
	{
	echo'C5'; 
	$e='5'.',';
	//This code stores the grade in 6scs_grading
	$queryx1=mysql_query("update 6scs_grading set grades='$e' where subject_id='SUB_MATH'")or die(mysql_error());
	$query_change=mysql_query("update s6 set SUB_MATH='5' where id='$ID'")or die(mysql_error());
	}
	elseif($rowp['Total']<= '64' and $rowp['Total']>='60')
	{
	echo'C4';
	$f='4'.',';
	//This code stores the grade in 6scs_grading
	$queryx1=mysql_query("update 6scs_grading set grades='$f' where subject_id='SUB_MATH'")or die(mysql_error());
	$query_change=mysql_query("update s6 set SUB_MATH='4' where id='$ID'")or die(mysql_error());
	}
	elseif($rowp['Total']<= '74' and $rowp['Total']>='65')
	{
	echo'C3';
	$g='3'.',';
	//This code stores the grade in 6scs_grading
	$queryx1=mysql_query("update 6scs_grading set grades='$g' where subject_id='SUB_MATH'")or die(mysql_error());
	$query_change=mysql_query("update s6 set SUB_MATH='3' where id='$ID'")or die(mysql_error());
	}
	elseif($rowp['Total']<= '79' and $rowp['Total']>='75')
	{
	echo'D2';
	$h='2'.',';
	//This code stores the grade in 6scs_grading
	$queryx1=mysql_query("update 6scs_grading set grades='$h' where subject_id='SUB_MATH'")or die(mysql_error());
	$query_change=mysql_query("update s6 set SUB_MATH='2' where id='$ID'")or die(mysql_error());
	}
	elseif($rowp['Total']<= '100' and $rowp['Total']>='80')
	{
	echo'D1';
	$i='1'.',';
	//This code stores the grade in 6scs_grading
	$queryx1=mysql_query("update 6scs_grading set grades='$i' where subject_id='SUB_MATH'")or die(mysql_error());
	$query_change=mysql_query("update s6 set SUB_MATH='1' where id='$ID'")or die(mysql_error());
	}
	?></td>
    <td align="center" style="color:#1b5e94;"><?php 
	//This code selects the remark in the 6scs_grading table
    $query_remark=mysql_query("SELECT remark from 6scs_grading where subject_id ='SUB_MATH'")or die(mysql_error());
    $row_remark=mysql_fetch_array($query_remark);
	echo $row_remark['remark'];?></td>
    <td align="center"><?php echo $rowZ['SUB_MTC'];?></td>
  </tr>
  <tr bgcolor="#999999">
    <td>TOTAL</td>
    <td style="color:#FF0000; font-weight:bold; font-size:22px;">
    <input type="text" name="total" size="5" style="height:20px; font-size:20px;" value="<?PHP $queryTotalAward=mysql_query("SELECT award from 6scs_grading where subject_id='GP'")or die(mysql_error());
    $rowTotalAward=mysql_fetch_array($queryTotalAward);echo $rowTotalAward['award'];
	
	//
	$queryTotalAward=mysql_query("SELECT award from 6scs_grading where subject_id='PHYS'")or die(mysql_error());
    $rowTotalAward=mysql_fetch_array($queryTotalAward);echo $rowTotalAward['award'];
	//
	$queryTotalAward=mysql_query("SELECT award from 6scs_grading where subject_id='ECON'")or die(mysql_error());
    $rowTotalAward=mysql_fetch_array($queryTotalAward);echo $rowTotalAward['award'];
	//
	$queryTotalAward=mysql_query("SELECT award from 6scs_grading where subject_id='ENT'")or die(mysql_error());
    $rowTotalAward=mysql_fetch_array($queryTotalAward);echo $rowTotalAward['award'];
	//
	$queryTotalAward=mysql_query("SELECT award from 6scs_grading where subject_id='MATH'")or die(mysql_error());
    $rowTotalAward=mysql_fetch_array($queryTotalAward);echo $rowTotalAward['award'];
	//
	$queryTotalAward=mysql_query("SELECT award from 6scs_grading where subject_id='CHEM'")or die(mysql_error());
    $rowTotalAward=mysql_fetch_array($queryTotalAward);echo $rowTotalAward['award'];
	//
	$queryTotalAward=mysql_query("SELECT award from 6scs_grading where subject_id='BIO'")or die(mysql_error());
    $rowTotalAward=mysql_fetch_array($queryTotalAward);echo $rowTotalAward['award'];
	//
	$queryTotalAward=mysql_query("SELECT award from 6scs_grading where subject_id='GEO'")or die(mysql_error());
    $rowTotalAward=mysql_fetch_array($queryTotalAward);echo $rowTotalAward['award'];
	//
	$queryTotalAward=mysql_query("SELECT award from 6scs_grading where subject_id='ART'")or die(mysql_error());
    $rowTotalAward=mysql_fetch_array($queryTotalAward);echo $rowTotalAward['award'];
	//
	$queryTotalAward=mysql_query("SELECT award from 6scs_grading where subject_id='ICT'")or die(mysql_error());
    $rowTotalAward=mysql_fetch_array($queryTotalAward);echo $rowTotalAward['award'];
	//
	$queryTotalAward=mysql_query("SELECT award from 6scs_grading where subject_id='SUB_MATH'")or die(mysql_error());
    $rowTotalAward=mysql_fetch_array($queryTotalAward);echo $rowTotalAward['award'];
	
	?>" /></td>
    <td>&nbsp;</td>
    <td align="center">&nbsp;</td>
    <td align="center">&nbsp;</td>
    <td>&nbsp;</td>
    <td align="center">&nbsp;</td>
    <td align="center">&nbsp;</td>
  </tr>
 </table>
<table width="1103" border="0" style="font-size:24px;" align="center">
  <tr height="60px">
  <td width="107" align="right">Points&nbsp;&nbsp;</td>
  <td width="90"><font color="#1b5e94"><b>
    <input type="text" name="points" size="2"  style="height:20px;border:groove; font-size:20px;"  value=" <?php 
$querylogic=mysql_query("SELECT SUM(value)from 6scs_grading")or die(mysql_error());
$rowlogic=mysql_fetch_array($querylogic);echo $rowlogic['SUM(value)'];

//This code updates the Total points value in the  s6 table
$points = $rowlogic['SUM(value)'];
$query_points=mysql_query("update s6 set POINTS='$points' where id='$ID'")or die(mysql_error());

?>" /></td>
    <td width="132" align="left">PP:&nbsp;
      <input type="text" pattern="^[0-9]*$" maxlength="1" name="pp" size="2" style="height:20px;border:groove; font-size:20px;" /></td>
   <td width="150" align="center">Sub:&nbsp;
     <input type="text" name="sub" pattern="^[0-9]*$" maxlength="1" size="2" style="height:20px;border:groove; font-size:20px;"/></td>
  <td width="364">
      Comment:<select name="comment" required="required" style="height:30px;">
        <option></option>
        <option>Balance the papers please.</option>
        <option>Aim Higher please.</option>
        <option>Still below average.</option>
        <option>Work harder next term.</option>
        <option>Promising performance.</option>
        <option>Improve in math and english.</option>
        <option>Good work but aim higer still.</option>
        <option>More effort is needed in sciences.</option>
      </select>
      &nbsp;
    </td>
  <td width="234"><input name="" type="image" src="images/Generate.gif" align="middle" /><input name="ID" type="hidden" value="<?php echo $ID ?>" /></td>
</tr>
<tr>
<td>&nbsp;</td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
</table>
</form>
</div>
<?PHP 

//while($ID!='$ID')
//{
//header("refresh:3;");
//exit;
//}


?>
</body>
</html>
