<?php
require'db.php';
include'topmenu.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

<style type="text/css">
<!--
#nextdate{
	position:absolute;
	left:850px;
	top:111px;
	width:286px;
	height:65px;
	z-index:17;
}
#INITIALS {
	position:absolute;
	left:230px;
	top:80px;
	width:116px;
	height:272px;
	z-index:18;
}
-->
</style>
</head>

<body>
<?php include'sidemenu.php';
?>
<div id="nextdate">
  <form id="form1" name="form1" method="post" action="nextdateprocess5_arts.php">
    Class Teacher:&nbsp;&nbsp;&nbsp;<input value="Class trs name" type="text" required="required" pattern="^[A-Za-z ]*$" name="class_tr" id="textfield" /><br /><br />
  Head Teacher:&nbsp;&nbsp;&nbsp;&nbsp;<input  value="Head trs name"type="text"required="required" pattern="^[A-Za-z ]*$"  name="head_tr" id="textfield" /><br /><br />
   Next Term Date:<input type="text" name="date" id="textfield" /><br />
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   <input name="" type="image" src="images/submit.png" align="middle" />
  </form>
</div>
<?php
   $queryZ=mysql_query("select * from initials5_arts where id='1'")or die(mysql_error());
   $rowZ=mysql_fetch_array($queryZ);
  ?>
<div id="INITIALS" style="padding-top:60px;">
  <form id="form2" name="form2" method="post" action="fiveinitials_arts.php">
   <table width="200" border="1" style="border-collapse:collapse;">
      <tr>
        <th scope="col">SUBJECTS</th>
        <th scope="col">INITIALS</th>
      </tr>
      <tr>
        <td><strong>G/PAPER</strong></td>
        <td><input type="text" name="GP" size="12" value="<?php echo $rowZ['GP'];?>" /></td>
      </tr>
      <tr>
        <td><strong>HISTORY</strong></td>
        <td><input type="text" name="HIST" size="12" value="<?php echo $rowZ['HISTORY'];?>"/></td>
      </tr>
      <tr>
        <td><strong>ECON</strong></td>
        <td><input type="text" name="ECON" size="12" value="<?php echo $rowZ['ECON'];?>"/></td>
      </tr>
      <tr>
        <td><strong>ENTREP</strong></td>
        <td><input type="text" name="ENT" size="12" value="<?php echo $rowZ['ENT'];?>"/></td>
      </tr>
      <tr>
        <td><strong>LUGANDA</strong></td>
        <td><input type="text" name="LUGA" size="12" value="<?php echo $rowZ['LUGANDA'];?>"/></td>
      </tr>
      <tr>
        <td><strong>ARABIC</strong></td>
        <td><input type="text" name="ARAB" size="12" value="<?php echo $rowZ['ARAB'];?>"/></td>
      </tr>
      <tr>
        <td><strong>ART</strong></td>
        <td><input type="text" name="ART" size="12" value="<?php echo $rowZ['ART'];?>"/></td>
      </tr>
      <tr>
        <td><strong>ISLAM</strong></td>
        <td><input type="text" name="ISLAM" size="12" value="<?php echo $rowZ['ISLAM'];?>"/></td>
      </tr>
      <tr>
        <td><strong>GEOG</strong></td>
        <td><input type="text" name="GEO" size="12" value="<?php echo $rowZ['GEOG'];?>"/></td>
      </tr>
      <tr>
        <td><strong>ICT</strong></td>
        <td><input type="text" name="ICT" size="12" value="<?php echo $rowZ['ICT'];?>"/></td>
      </tr>
      <tr>
        <td><strong>SUB_MTC</strong></td>
        <td><input type="text" name="MATH" size="12" value="<?php echo $rowZ['MATH'];?>"/></td>
      </tr>
        <td></td>
        <td><input name="" type="image" src="images/update.png" align="middle" /></td>
        </tr>
      </tr>
    </table>
    </form>
</div>
<div id="container" style="height:600px;">
<br /><br /><br /><br />
<div id="newstudents">
<table width="239" border="0" align="center" bgcolor="#E8E7C1">
<th colspan="2" align="center" bgcolor="#45543D"><font color="#FFFFFF">Enter New Students</font></th>
  <tr>
  <form action="addstudentsprocess5_arts.php" method="post">
   <td width="87">Student Id:</td>
    <td width="303"><input name="student_id" type="text" required="required" /></td>
  </tr>
  <tr>
    <td>FirstName:</td>
    <td><input name="FN" type="text" required="required" pattern="^[A-Za-z ]*$" /></td>
  </tr>
  <tr>
    <td>MiddleName:</td>
    <td><input name="MN" type="text" pattern="^[A-Za-z ]*$" /></td>
  </tr>
  <tr>
    <td>LastName:</td>
    <td><input name="LN" type="text" pattern="^[A-Za-z ]*$" /></td>
  </tr>
    <tr>
    <td>Select Sex:</td>
    <td><select name="SEX" required="required">
      <option></option>
      <option>MALE</option>
      <option>FEMALE</option>
      </select>
     </td>
  </tr>
    <tr>
  <td>Combination:</td>
  <td><select name="COMBINA" required="required">
      <option></option>
      <option>HEG/MTC</option>
      <option>HEI/MTC</option>
      <option>LEI/MTC</option>
      <option>LEA/MTC</option>
      <option>HIL/ICT</option>
      <option>HEA/MTC</option>
      <option>LIA/MTC</option>
      <option>MEA/ICT</option>
</select>
</td>
  </tr>
    <tr>
  <td>Select House:</td>
  <td><select name="house" required="required">
      <option></option>
      <option>MECCA</option>
      <option>MEDINA</option>
      <option>JIDDAH</option>
      <option>RIYADH</option>
</select>
</td>
  </tr>
  <tr>
    <td>Select Term:</td>
    <td><select name="TERM" required="required">
      <option></option>
      <option>I</option>
      <option>II</option>
      <option>III</option>
      </select>
     </td>
  </tr>
  <tr>
    <td>Select Year:</td>
    <td><select name="YEAR" required="required">
      <option></option>
      <option>2017</option>
      <option>2018</option>
      </select>
      </td>
  </tr><br />

  <tr>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  </tr>

  <tr>
    <td>&nbsp;</td>
    <td><input name="" type="image" src="images/register.png" align="middle" /></td>
  </tr>
 </form>
</table>
</div>
<p align="right"><a href="five_arts.php"><img src="images/back.png" /></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
</div>
<?php include'footer.php';?>
</body>
</html>
