<?php
include'topmenu.php';
require'db.php'; 
$ID=$_GET['id'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

</head>

<body>
<?php include'sidemenu.php';?>
<div id="container">
<br /><br /><br /><br />
<?php
  $query=mysql_query("select * from s6 where id='$ID'")or die(mysql_error());
$row=mysql_fetch_array($query);
  ?>
<div id="updatestudent">
<table width="239" border="0" align="center" bgcolor="#E8E7C1">
<th colspan="2" align="center" bgcolor="#46643D"><font color="#FFFFFF">Update Student</font></th>
  <tr>
  <form action="editprocess6.php" method="post">
    <td width="87">Student Id:</td>
    <td width="303"><input name="id" type="text" value="<?php echo $row['id']; ?>" readonly="readonly" /></td>
  </tr>
  <tr>
    <td>FirstName:</td>
    <td><input name="FN" type="text" value="<?php echo $row['firstname']; ?>" /></td>
  </tr>
  <tr>
    <td>MiddleName:</td>
    <td><input name="MN" type="text" value="<?php echo $row['middlename']; ?>" /></td>
  </tr>
  <tr>
    <td>LastName:</td>
    <td><input name="LN" type="text" value="<?php echo $row['lastname']; ?>" /></td>
  </tr>
  <br />
  <tr>
  <td><input name="Student_Id" type="hidden" value="<?php echo $row['id']; ?>" /></td>
  <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input name="" type="image" src="images/update.png" align="middle" /></td>
  </tr>
 </form>
</table>
</div>
<p align="right"><a href="six.php"><img src="images/back.png" /></a></p>
</div>
<?php include'footer.php';?>
</body>
</html>
