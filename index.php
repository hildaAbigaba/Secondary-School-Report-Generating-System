<?php
	//Start session
	session_start();
	
	//Unset the variables stored in session
	unset($_SESSION['SESS_MEMBER_ID']);
	unset($_SESSION['SESS_FIRST_NAME']);
	unset($_SESSION['SESS_LAST_NAME']);
	unset($_SESSION['last_login']);
	include'header.php';
	?>
<!DOCTYPE html>

<html>

    <head>

        <meta charset="utf-8" />

        <title>School Report Generating System</title>

        <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"><style type="text/css">body {
	background-color: #009900;
}
</style></head>

    

<body>
<br><br><br><br><br><br><br>
<div id="diva"><p align="center"><font color="#fff" size="+4">GreenLight <span style="color:#FFCC00;"> <span style="color:#FFCC00"></span><span style="color:#FFCC00;">Islamic</span> <span style="color:#fff">Secondary School</span><span style="color:#FFCC00;">&nbsp;Nansana</span></font></p>
</div>


		<div id="formContainer">
        <br><br><br><br><br><br>
             <table>
			<form id="login" method="post" action="login-process.php">
               <tr><td>
               UserName:
               </td>
               <td>
				<input type="text" name="UserName" id="loginEmail" placeholder="Username" />
                   </td></tr>
                   <tr>
                    <td>Password:</td>
                    <td>
				<input type="password" name="password" id="loginPass" placeholder="Password" />
                       <td></tr>
                       <tr>
                       <td>
                       </td>
                       <td>
				<input name="" type="image" src="images/login.png" align="middle">
                     </td>
			</form>
           </table>
		</div>
        </body>

</html>



