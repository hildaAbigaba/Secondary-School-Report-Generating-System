<?php
require'db.php';
include'topmenu.php';
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
<?php
  $query=mysql_query("select * from users where UserId='1'")or die(mysql_error());
$row=mysql_fetch_array($query);
  ?>

<br /><br /><br /><br />
<div id="updatestudent">
<table width="239" border="0" align="center" bgcolor="#E8E7C1">
<th colspan="2" align="center" bgcolor="#45543D"><font color="#FFFFFF"> Update User Password</font></th>
  <form action="userprocess.php" method="post">
   <tr>
    <td>FirstName:</td>
    <td><input name="FN" type="text" value="<?php echo $row['FirstName']; ?>" readonly="readonly" /></td>
  </tr>
  <tr>
    <td>LastName:</td>
    <td><input name="LN" type="text" value="<?php echo $row['LastName']; ?>" readonly="readonly" /></td>
  </tr>
  <tr>
    <td>UserName:</td>
    <td><input name="UN" type="text" value="<?php echo $row['UserName']; ?>" readonly="readonly" /></td>
  </tr>
  <tr>
  <td width="87">Password:</td>
    <td width="303"><input name="Password" type="password" value="<?php echo $row['Password']; ?>" /></td>
  </tr>
  <br />
  <tr>
  <td></td>
  <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input name="" type="image" src="images/update.png" /></td>
  </tr>
 </form>
</table>
</div>
<p align="right"><a href="dashboard.php"><img src="images/back.png" /></a></p>
</div>
<?php include'footer.php';?>
</body>
</html>
