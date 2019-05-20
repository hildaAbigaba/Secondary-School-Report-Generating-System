<?php
require'db.php';
$ID=$_GET['id'];
?>
<?php
 include'topmenu.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script>
function confirmDelete(delUrl) {
  if (confirm("Are you sure you want to delete this student")) {
   document.location = delUrl;
  }
}
</script>
</head>

<body>
<?php include'sidemenu.php';?>
<div id="container">
<?php
  $query=mysql_query("select * from s5 where id='$ID'")or die(mysql_error());
$row=mysql_fetch_array($query);
  ?>

<br /><br /><br /><br />
<div id="updatestudent" style="height:200px;">
<table width="239" border="0" align="center" bgcolor="#E8E7C1" height="160px">
<th colspan="2" align="center" bgcolor="#45543D"><font color="#FFFFFF"> Delete Student</font></th>
  <form action="delete5.php" method="get">
   <tr>
    <td>FirstName:</td>
    <td><input name="FN" type="text" value="<?php echo $row['firstname']; ?>" readonly="readonly" /></td>
  </tr>
  <tr>
    <td>MiddleName:</td>
    <td><input name="MN" type="text" value="<?php echo $row['middlename']; ?>" readonly="readonly" /></td>
  </tr>
  <tr>
    <td>LastName:</td>
    <td><input name="LN" type="text" value="<?php echo $row['lastname']; ?>" readonly="readonly" /></td>
  </tr>
  <tr>
  <td width="87"></td>
    <td width="303"></td>
  </tr>
  <br />
  <tr>
  <td></td>
  <td><input type="hidden" name="ID" value="<?php echo $ID ?>"/></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input name="" type="image" src="images/delete.png" onClick="return confirm('Are you sure you want to delete this student?')" /></td>
  </tr>
 </form>
</table>
</div>
<p align="right"><a href="five.php"><img src="images/back.png" /></a></p>
</div>
<?php include'footer.php';?>
</body>
</html>
