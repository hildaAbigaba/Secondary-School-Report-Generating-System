<?php
require'db.php';
include('header.php');
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

<div id="container" style=" background:none; top:20px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;<font color="#66FFCC" size="+2" style="font-weight:bold; font-style:oblique">SENIOR SIX ARTS</font>
<br /><br />
 <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example"><a href="Arts_6_performance_statement.php" target="_blank" style="padding-left:839px;"><img src="images/datasheet.png" title="Generate data sheet" /></a>
                            <div class="alert alert-info">
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                <strong><i class="icon-user icon-large"></i>Search students by name</strong>
                            </div>
                            <thead>
                            <tr><td bgcolor="#45543D" style="text-align:center;"><a href="addstudents6_arts.php"><font color="#FFFFCC"><b>New Student</b></a></td><td colspan="6" bgcolor="#45543D"></td></tr>
                                <tr>
                                  
                                    <th style="text-align:center;">Student ID</th>
                                    <th style="text-align:center;">First Name</th>
                                    <th style="text-align:center;">Middle Name</th>
                                    <th style="text-align:center;">Last Name</th>
									<th style="text-align:center;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
								<?php
								
								$result= mysql_query("select * from s6_arts order by id ASC" ) or die (mysql_error());
								while ($row= mysql_fetch_array ($result) ){
								$id=$row['id'];
								?>
								<tr>
								<td style="text-align:center; word-break:break-all; width:150px; text-transform:uppercase;"><?php echo $row ['id']; ?></td>
								<td style="text-align:center; word-break:break-all; width:200px; text-transform:uppercase;"> <?php echo $row ['firstname']; ?></td>
								<td style="text-align:center; word-break:break-all; width:200px; text-transform:uppercase;"> <?php echo $row ['middlename']; ?></td>
								<td style="text-align:center; word-break:break-all; width:200px; text-transform:uppercase;"> <?php echo $row ['lastname']; ?></td>
								<td style="text-align:center; width:500px;">
									 <?php echo "<a href=viewreport6_arts.php?id=".$row['id']." > <img src='images/view.png'></a>";  ?>
                                     
									 <?php echo "<a href=addmarks6_arts.php?id=".$row['id']." > <img src='images/addmarks.png' border=0></a>"; ?>
                                     <?php echo "<a href=edit6_arts.php?id=".$row['id']." > <img src='images/edit.png' border=0></a>"; ?>
                                     <?php echo "<a href=check_delete6_arts.php?id=".$row['id']." > <img src='images/delete.png' border=0></a>"; ?>
								</td>
									
										<!-- Modal -->
								<div id="delete<?php  echo $id;?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
								<div class="modal-header">
								<h3 id="myModalLabel">Delete</h3>
								</div>
								<div class="modal-body">
								<p><div class="alert alert-danger">Are you Sure you want Delete?</p>
								</div>
								<hr>
								<div class="modal-footer">
								<button class="btn btn-inverse" data-dismiss="modal" aria-hidden="true">No</button>
								<a href="delete.php<?php echo '?id='.$id; ?>" class="btn btn-danger">Yes</a>
								</div>
								</div>
								</div>
								</tr>

								<!-- Modal Bigger Image -->
								<div class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
								<div class="modal-header">

								<h3 id="myModalLabel"><b></b></h3>
								

								<?php } ?>
                            </tbody>
                        </table>
                        </div>
                        
                          </div>
        </div>
        </div>
</div>
</body>
</html>
