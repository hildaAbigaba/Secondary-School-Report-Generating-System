<?php 
include'auth.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>School Report Generating System</title>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />

</head>

<body>

<div id="top">
<table width="1150" border="0" height="40px">
  <tr>
    <td width="528"><span style="font-size:18px; color:#FFCC00; font-style:oblique;">Logged In As :</span>&nbsp;<?php echo"An Administrator"?></td>
    <td width="526" align="right"><span style="font-size:15px; color:#FFCC00; font-style:oblique;">Last Seen On:</span> <?php echo 	$_SESSION['last_login']?> </td>
    <td width="82" ><a href="index.php" style="color:#FFCC00; font-size:18px;">&nbsp;logout</a></td>
  </tr>
</table>
</div>
</body>
</html>
