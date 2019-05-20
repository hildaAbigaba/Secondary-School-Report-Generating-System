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
<?php
  $query=mysql_query("select * from s5_arts where id='$ID'")or die(mysql_error());
$row=mysql_fetch_array($query);
include'tables5_arts.php';
  ?>
  
<div id="round2" style="width:300px;">
<form action="mot_process_5_arts.php" method="post">
  <table width="300" border="0">
      <th colspan="3" bgcolor="#009999"><strong><font color="#FFFFFF"><span style="color:#FFCC00; font-size:20px; font-family:Kristen ITC;">MOT</span>&nbsp;PAPER ONE(%)</font></strong></th>
    <tr>
     
      <td width="114"><strong>SUBJECTS</strong></td>
      <td width="103"><strong>MARKS</strong></td>
      <td width="20"><input type="hidden" value="" /></td>
    </tr>
    <tr>
      <td>G / PAPER</td>
      <td><input type="text" pattern="^[0-9]*$" maxlength="2" name="GP_1" value="<?php echo $row1['paper_one_mot'];?>" size="6px" /></td>
      <td width="20"><input type="hidden" value="" /></td>
    </tr>
    <tr>
 
      <td>HISTORY</td>
      <td><input type="text" pattern="^[0-9]*$" maxlength="2" name="HIST_1" value="<?php echo $row2['paper_one_mot'];?>" size="6px" /></td>
      <td width="20"><input type="hidden" value="" /></td>
    </tr>
    <tr>
   
      <td>ECONOMICS</td>
      <td><input type="text" pattern="^[0-9]*$" maxlength="2" name="ECON_1" value="<?php echo $row3['paper_one_mot'];?>" size="6px" /></td>
      <td width="20"><input type="hidden" value="" /></td>
    </tr>
    <tr>
   
      <td>LUGANDA</td>
      <td><input type="text" pattern="^[0-9]*$" maxlength="2" name="LUGA_1" value="<?php echo $row4['paper_one_mot'];?>" size="6px" /></td>
      <td width="20"><input type="hidden" value="" /></td>
    </tr>
     <td>ARABIC</td>
      <td><input type="text" pattern="^[0-9]*$" maxlength="2" name="ARAB_1" value="<?php echo $row5['paper_one_mot'];?>" size="6px" /></td>
      <td width="20"><input type="hidden" value="" /></td>
    </tr>
    <tr>
     <td>ISLAM</td>
      <td><input type="text" pattern="^[0-9]*$" maxlength="2" name="ISLAM_1" value="<?php echo $row7['paper_one_mot'];?>" size="6px" /></td>
      <td width="20"><input type="hidden" value="" /></td>
    </tr>
     <tr>
     <td>GEOGRAPHY</td>
      <td><input type="text" pattern="^[0-9]*$" maxlength="2" name="GEOG_1" value="<?php echo $row8['paper_one_mot'];?>" size="6px" /></td>
      <td width="20"><input type="hidden" value="" /></td>
    </tr>
    <tr>
     <td>ENTREP</td>
      <td><input type="text" pattern="^[0-9]*$" maxlength="2" name="ENT_1" value="<?php echo $row11['paper_one_mot'];?>" size="6px" /></td>
      <td width="20"><input type="hidden" value="" /></td>
    </tr>
    <tr>
    <td>FINE ART</td>
      <td><input type="text" pattern="^[0-9]*$" maxlength="2" name="ART_1" value="<?php echo $row6['paper_one_mot'];?>" size="6px" /></td>
      <td width="20"><input type="hidden" value="" /></td>
    </tr>
     <tr>
     <td>ICT</td>
      <td><input type="text" pattern="^[0-9]*$" maxlength="2" name="ICT_1" value="<?php echo $row9['paper_one_mot'];?>" size="6px" /></td>
      <td width="20"><input type="hidden" value="" /></td>
    </tr>
     <tr>
    <td>SUB MATH</td>
      <td><input type="text" pattern="^[0-9]*$" maxlength="2" name="SUB_MATH_1" value="<?php echo $row10['paper_one_mot'];?>" size="6px" /></td>
      <td width="20"><input type="hidden" value="" /></td>
    </tr>
    <tr>
      <td></td>
      <td width="69"><input type="hidden" name="MM" value="<?PHP echo"$ID";?>" /></td>
      <td width="20"><input type="hidden" value="" /></td>
    </tr>
    <tr><td></td>
    <td></td>
    <td width="20"></td></tr>
  </table>
</div>
<div id="round3" style="width:300px;">
 <table width="300">
      <th colspan="3" bgcolor="#009999"><strong><font color="#FFFFFF"><span style="color:#FFCC00; font-size:20px; font-family:Kristen ITC;">MOT</span>&nbsp;PAPER TWO(%)</font></strong></th>
     <tr>
     
      <td width="114"><strong>SUBJECTS</strong></td>
      <td width="103"><strong>MARKS</strong></td>
      <td width="20"><input type="hidden" value="" /></td>
    </tr>
    <tr>
      <td height="20px"></td>
      <td></td>
      <td width="20"><input type="hidden" value="" /></td>
    </tr>
    <tr>
 
      <td>HISTORY</td>
      <td><input type="text" pattern="^[0-9]*$" maxlength="2" name="HIST_2" value="<?php echo $row2['two_paper_mot'];?>" size="6px" /></td>
      <td width="20"><input type="hidden" value="" /></td>
    </tr>
    <tr>
   
      <td>ECONOMICS</td>
      <td><input type="text" pattern="^[0-9]*$" maxlength="2" name="ECON_2" value="<?php echo $row3['two_paper_mot'];?>" size="6px" /></td>
      <td width="20"><input type="hidden" value="" /></td>
    </tr>
    <tr>
   
      <td>LUGANDA</td>
      <td><input type="text" pattern="^[0-9]*$" maxlength="2" name="LUGA_2" value="<?php echo $row4['two_paper_mot'];?>" size="6px" /></td>
      <td width="20"><input type="hidden" value="" /></td>
    </tr>
     <td>ARABIC</td>
      <td><input type="text" pattern="^[0-9]*$" maxlength="2" name="ARAB_2" value="<?php echo $row5['two_paper_mot'];?>" size="6px" /></td>
      <td width="20"><input type="hidden" value="" /></td>
    </tr>
    <tr>
     <td>ISLAM</td>
      <td><input type="text" pattern="^[0-9]*$" maxlength="2" name="ISLAM_2" value="<?php echo $row7['two_paper_mot'];?>" size="6px" /></td>
      <td width="20"><input type="hidden" value="" /></td>
    </tr>
     <tr>
     <td>GEOGRAPHY</td>
      <td><input type="text" pattern="^[0-9]*$" maxlength="2" name="GEOG_2" value="<?php echo $row8['two_paper_mot'];?>" size="6px" /></td>
      <td width="20"><input type="hidden" value="" /></td>
    </tr>
     <tr>
   
      <td>ENTREP</td>
      <td><input type="text" pattern="^[0-9]*$" maxlength="2" name="ENT_2" value="<?php echo $row11['two_paper_mot'];?>" size="6px" /></td>
      <td width="20"><input type="hidden" value="" /></td>
    </tr>
     <tr>
   
      <td>FINE ART</td>
      <td><input type="text" pattern="^[0-9]*$" maxlength="2" name="ART_2" value="<?php echo $row6['two_paper_mot'];?>" size="6px" /></td>
      <td width="20"><input type="hidden" value="" /></td>
    </tr>
     <tr>
     <td></td>
      <td></td>
      <td width="20"><input type="hidden" value="" /></td>
    </tr>
     <tr>
    <td></td>
      <td></td>
      <td width="20"><input type="hidden" value="" /></td>
    </tr>
    <tr>
      <td height="20px"></td>
      <td></td>
   <td width="20"><input type="hidden" value="" /></td>
    </tr>
    <tr>
      <td height="20px"></td>
      <td width="69"><input type="hidden" name="MM" value="<?PHP echo"$ID";?>" /></td>
      <td width="20"><input type="hidden" value="" /></td>
    </tr>
    <tr><td></td>
    <td></td>
    <td width="20"></td></tr>
  </table>
</div>
<div id="round1" style="width:300px; z-index:7; position:absolute; margin-left:840px;">
 <table width="300">
      <th colspan="3" bgcolor="#009999"><strong><font color="#FFFFFF"><span style="color:#FFCC00; font-size:20px; font-family:Kristen ITC;">MOT</span>&nbsp;PAPER THREE(%)</font></strong></th>
     <tr>
     
      <td width="114"><strong>SUBJECTS</strong></td>
      <td width="103"><strong>MARKS</strong></td>
      <td width="20"><input type="hidden" value="" /></td>
    </tr>
    <tr>
      <td></td>
      <td height="20px"></td>
      <td width="20"><input type="hidden" value="" /></td>
    </tr>
    <tr>
 
      <td>&nbsp;</td>
      <td height="20px"></td>
      <td width="20"><input type="hidden" value="" /></td>
    </tr>
    <tr>
   
      <td></td>
      <td height="20px"></td>
      <td width="20"><input type="hidden" value="" /></td>
    </tr>
    <tr>
   
      <td>LUGANDA</td>
      <td><input type="text" pattern="^[0-9]*$" maxlength="2" name="LUGA_3" value="<?php echo $row4['paper_three_mot'];?>" size="6px" /></td>
      <td width="20"><input type="hidden" value="" /></td>
    </tr>
     <td>ARABIC</td>
      <td><input type="text" pattern="^[0-9]*$" maxlength="2" name="ARAB_3" value="<?php echo $row5['paper_three_mot'];?>" size="6px" /></td>
      <td width="20"><input type="hidden" value="" /></td>
    </tr>
    <tr>
     <td>ISLAM</td>
      <td><input type="text" pattern="^[0-9]*$" maxlength="2" name="ISLAM_3" value="<?php echo $row7['paper_three_mot'];?>" size="6px" /></td>
      <td width="20"><input type="hidden" value="" /></td>
    </tr>
     <tr>
     <td>GEOGRAPHY</td>
      <td><input type="text" pattern="^[0-9]*$" maxlength="2" name="GEOG_3" value="<?php echo $row8['paper_three_mot'];?>" size="6px" /></td>
      <td width="20"><input type="hidden" value="" /></td>
    </tr>
    <tr>
    <td>ENTREP</td>
      <td><input type="text" pattern="^[0-9]*$" maxlength="2" name="ENT_3" value="<?php echo $row11['paper_three_mot'];?>" size="6px" /></td>
      <td width="20"><input type="hidden" value="" /></td>
    </tr>
    <tr>
    <td>FINE ART</td>
      <td><input type="text" pattern="^[0-9]*$" maxlength="2" name="ART_3" value="<?php echo $row6['paper_three_mot'];?>" size="6px" /></td>
      <td width="20"><input type="hidden" value="" /></td>
    </tr>
     <tr>
    <td>FINE ART</td>
      <td><input type="text" pattern="^[0-9]*$" maxlength="2" name="ART_4" value="<?php echo $row6['four_paper_mot'];?>" size="6px" /></td>
      <td width="20"><input type="hidden" value="" /></td>
    </tr>
     <tr>
    <td></td>
      <td></td>
      <td width="20"><input type="hidden" value="" /></td>
    </tr>
    <tr>
      <td height="20px"></td>
      <td><input name="marks" type="image" src="images/submit.png" align="middle" /></td>
   <td width="20"><input type="hidden" value="" /></td>
    </tr>
    <tr>
      <td></td>
      <td width="69"><input type="hidden" name="MM" value="<?PHP echo"$ID";?>" /></td>
      <td width="20"><input type="hidden" value="" /></td>
    </tr>
    <tr><td></td>
    <td></td>
    <td width="20"></td></tr>
  </table>
  </form>
</div>

<div id="container" style="height:740px">
<table width="600" border="0">
  <tr>
    <td width="20"></td>
    <td width="10"><input type="hidden" name="ID" value="<?PHP echo"$ID";?>" size="10px" disabled="disabled" /></td>
    <td width="56"><strong>NAME:</strong></td>
    <td width="400" style=" text-decoration:underline; text-transform:uppercase;" ><?php echo $row['firstname'];?>&nbsp;&nbsp;<?php echo $row['middlename'];?>&nbsp;&nbsp;<?php echo $row['lastname'];?></td>
    <td><strong>COMBINATION:</strong></td>
    <td style="text-decoration:underline; text-transform:uppercase;"><?php echo $row['combination'];?></td>
  </tr>
</table>
<br />
<div id="round_a" style="width:300px;">
<form action="end_process_5_arts.php" method="post">
  <table width="300" border="0">
    <th colspan="3" bgcolor="#009999"><strong><font color="#FFFFFF"><span style="color:#FFCC00; font-size:20px; font-family:Kristen ITC;">EOT</span>&nbsp;PAPER ONE(%)</font></strong></th>
    <tr>
     
      <td width="114"><strong>SUBJECTS</strong></td>
      <td width="103"><strong>MARKS</strong></td>
      <td width="20"><input type="hidden" value="" /></td>
    </tr>
    <tr>
      <td>G / PAPER</td>
      <td><input type="text" pattern="^[0-9]*$" maxlength="2" name="GP_1" value="<?php echo $row1['paper_one_end'];?>" size="6px" /></td>
      <td width="20"><input type="hidden" value="" /></td>
    </tr>
    <tr>
 
      <td>HISTORY</td>
      <td><input type="text" pattern="^[0-9]*$" maxlength="2" name="HIST_1" value="<?php echo $row2['paper_one_end'];?>" size="6px" /></td>
      <td width="20"><input type="hidden" value="" /></td>
    </tr>
    <tr>
   
      <td>ECONOMICS</td>
      <td><input type="text" pattern="^[0-9]*$" maxlength="2" name="ECON_1" value="<?php echo $row3['paper_one_end'];?>" size="6px" /></td>
      <td width="20"><input type="hidden" value="" /></td>
    </tr>
    <tr>
   
      <td>LUGANDA</td>
      <td><input type="text" pattern="^[0-9]*$" maxlength="2" name="LUGA_1" value="<?php echo $row4['paper_one_end'];?>" size="6px" /></td>
      <td width="20"><input type="hidden" value="" /></td>
    </tr>
     <td>ARABIC</td>
      <td><input type="text" pattern="^[0-9]*$" maxlength="2" name="ARAB_1" value="<?php echo $row5['paper_one_end'];?>" size="6px" /></td>
      <td width="20"><input type="hidden" value="" /></td>
    </tr>
    <tr>
     <td>ISLAM</td>
      <td><input type="text" pattern="^[0-9]*$" maxlength="2" name="ISLAM_1" value="<?php echo $row7['paper_one_end'];?>" size="6px" /></td>
      <td width="20"><input type="hidden" value="" /></td>
    </tr>
     <tr>
     <td>GEOGRAPHY</td>
      <td><input type="text" pattern="^[0-9]*$" maxlength="2" name="GEOG_1" value="<?php echo $row8['paper_one_end'];?>" size="6px" /></td>
      <td width="20"><input type="hidden" value="" /></td>
    </tr>
     <tr>
   <td>ENTREP</td>
      <td><input type="text" pattern="^[0-9]*$" maxlength="2" name="ENT_1" value="<?php echo $row11['paper_one_end'];?>" size="6px" /></td>
      <td width="20"><input type="hidden" value="" /></td>
    </tr>
     <tr>
   <td>FINE ART</td>
      <td><input type="text" pattern="^[0-9]*$" maxlength="2" name="ART_1" value="<?php echo $row6['paper_one_end'];?>" size="6px" /></td>
      <td width="20"><input type="hidden" value="" /></td>
    </tr>
     <tr>
     <td>ICT</td>
      <td><input type="text" pattern="^[0-9]*$" maxlength="2" name="ICT_1" value="<?php echo $row9['paper_one_end'];?>" size="6px" /></td>
      <td width="20"><input type="hidden" value="" /></td>
    </tr>
     <tr>
    <td>SUB MATH</td>
      <td><input type="text" pattern="^[0-9]*$" maxlength="2" name="SUB_MATH_1" value="<?php echo $row10['paper_one_end'];?>" size="6px" /></td>
      <td width="20"><input type="hidden" value="" /></td>
    </tr>
    <tr>
      <td></td>
      <td width="69"><input type="hidden" name="MM" value="<?PHP echo"$ID";?>" /></td>
      <td width="20"><input type="hidden" value="" /></td>
    </tr>
    <tr><td></td>
    <td></td>
    <td width="20"></td></tr>
  </table>
</div>
<div id="round_b" style="width:300px;">
 <table width="300">
    <th colspan="3" bgcolor="#009999"><strong><font color="#FFFFFF"><span style="color:#FFCC00; font-size:20px; font-family:Kristen ITC;">EOT</span>&nbsp;PAPER TWO(%)</font></strong></th>
     <tr>
     
      <td width="114"><strong>SUBJECTS</strong></td>
      <td width="103"><strong>MARKS</strong></td>
      <td width="20"><input type="hidden" value="" /></td>
    </tr>
    <tr>
      <td height="20px"></td>
      <td></td>
      <td width="20"><input type="hidden" value="" /></td>
    </tr>
    <tr>
 
      <td>HISTORY</td>
      <td><input type="text" pattern="^[0-9]*$" maxlength="2" name="HIST_2" value="<?php echo $row2['two_paper_end'];?>" size="6px" /></td>
      <td width="20"><input type="hidden" value="" /></td>
    </tr>
    <tr>
   
      <td>ECONOMICS</td>
      <td><input type="text" pattern="^[0-9]*$" maxlength="2" name="ECON_2" value="<?php echo $row3['two_paper_end'];?>" size="6px" /></td>
      <td width="20"><input type="hidden" value="" /></td>
    </tr>
    <tr>
   
      <td>LUGANDA</td>
      <td><input type="text" pattern="^[0-9]*$" maxlength="2" name="LUGA_2" value="<?php echo $row4['two_paper_end'];?>" size="6px" /></td>
      <td width="20"><input type="hidden" value="" /></td>
    </tr>
     <td>ARABIC</td>
      <td><input type="text" pattern="^[0-9]*$" maxlength="2" name="ARAB_2" value="<?php echo $row5['two_paper_end'];?>" size="6px" /></td>
      <td width="20"><input type="hidden" value="" /></td>
    </tr>
    <tr>
     <td>ISLAM</td>
      <td><input type="text" pattern="^[0-9]*$" maxlength="2" name="ISLAM_2" value="<?php echo $row7['two_paper_end'];?>" size="6px" /></td>
      <td width="20"><input type="hidden" value="" /></td>
    </tr>
     <tr>
     <td>GEOGRAPHY</td>
      <td><input type="text" pattern="^[0-9]*$" maxlength="2" name="GEOG_2" value="<?php echo $row8['two_paper_end'];?>" size="6px" /></td>
      <td width="20"><input type="hidden" value="" /></td>
    </tr>
    <tr>
    <td>ENTREP</td>
      <td><input type="text" pattern="^[0-9]*$" maxlength="2" name="ENT_2" value="<?php echo $row11['two_paper_end'];?>" size="6px" /></td>
      <td width="20"><input type="hidden" value="" /></td>
    </tr>
    <tr>
   <td>FINE ART</td>
      <td><input type="text" pattern="^[0-9]*$" maxlength="2" name="ART_2" value="<?php echo $row6['two_paper_end'];?>" size="6px" /></td>
      <td width="20"><input type="hidden" value="" /></td>
    </tr>
     <tr>
     <td></td>
      <td></td>
      <td width="20"><input type="hidden" value="" /></td>
    </tr>
     <tr>
    <td></td>
      <td></td>
      <td width="20"><input type="hidden" value="" /></td>
    </tr>
    <tr>
      <td height="20px"></td>
      <td></td>
   <td width="20"><input type="hidden" value="" /></td>
    </tr>
    <tr>
      <td height="20px"></td>
      <td width="69"><input type="hidden" name="MM" value="<?PHP echo"$ID";?>" /></td>
      <td width="20"><input type="hidden" value="" /></td>
    </tr>
    <tr><td></td>
    <td></td>
    <td width="20"></td></tr>
  </table>
</div>
<div id="round_c" style="width:300px;">
 <table width="300">
    <th colspan="3" bgcolor="#009999"><strong><font color="#FFFFFF"><span style="color:#FFCC00; font-size:20px; font-family:Kristen ITC;">EOT</span>&nbsp;PAPER THREE(%)</font></strong></th>
     <tr>
     
      <td width="114"><strong>SUBJECTS</strong></td>
      <td width="103"><strong>MARKS</strong></td>
      <td width="20"><input type="hidden" value="" /></td>
    </tr>
    <tr>
      <td></td>
      <td height="20px"></td>
      <td width="20"><input type="hidden" value="" /></td>
    </tr>
    <tr>
 
      <td>&nbsp;</td>
      <td height="20px"></td>
      <td width="20"><input type="hidden" value="" /></td>
    </tr>
    <tr>
   
      <td></td>
      <td height="20px"></td>
      <td width="20"><input type="hidden" value="" /></td>
    </tr>
    <tr>
   
      <td>LUGANDA</td>
      <td><input type="text" pattern="^[0-9]*$" maxlength="2" name="LUGA_3" value="<?php echo $row4['paper_three_end'];?>" size="6px" /></td>
      <td width="20"><input type="hidden" value="" /></td>
    </tr>
     <td>ARABIC</td>
      <td><input type="text" pattern="^[0-9]*$" maxlength="2" name="ARAB_3" value="<?php echo $row5['paper_three_end'];?>" size="6px" /></td>
      <td width="20"><input type="hidden" value="" /></td>
    </tr>
    <tr>
     <td>ISLAM</td>
      <td><input type="text" pattern="^[0-9]*$" maxlength="2" name="ISLAM_3" value="<?php echo $row7['paper_three_end'];?>" size="6px" /></td>
      <td width="20"><input type="hidden" value="" /></td>
    </tr>
     <tr>
     <td>GEOGRAPHY</td>
      <td><input type="text" pattern="^[0-9]*$" maxlength="2" name="GEOG_3" value="<?php echo $row8['paper_three_end'];?>" size="6px" /></td>
      <td width="20"><input type="hidden" value="" /></td>
    </tr>
    <tr>
   <td>ENTREP</td>
      <td><input type="text" pattern="^[0-9]*$" maxlength="2" name="ENT_3" value="<?php echo $row11['paper_three_end'];?>" size="6px" /></td>
      <td width="20"><input type="hidden" value="" /></td>
    </tr>
    <tr>
    <td>FINE ART</td>
      <td><input type="text" pattern="^[0-9]*$" maxlength="2" name="ART_3" value="<?php echo $row6['paper_three_end'];?>" size="6px" /></td>
      <td width="20"><input type="hidden" value="" /></td>
    </tr>
    <tr>
    <td>FINE ART</td>
      <td><input type="text" pattern="^[0-9]*$" maxlength="2" name="ART_4" value="<?php echo $row6['four_paper_end'];?>" size="6px" /></td>
      <td width="20"><input type="hidden" value="" /></td>
    </tr>
     <tr>
     <td></td>
      <td></td>
      <td width="20"><input type="hidden" value="" /></td>
    </tr>
    <tr>
      <td height="20px"></td>
      <td><input name="marks" type="image" src="images/submit.png" align="middle" /></td>
   <td width="20"><input type="hidden" value="" /></td>
    </tr>
    <tr>
      <td></td>
      <td width="69"><input type="hidden" name="MM" value="<?PHP echo"$ID";?>" /></td>
      <td width="20"><input type="hidden" value="" /></td>
    </tr>
    <tr><td></td>
    <td></td>
    <td width="20"></td></tr>
  </table>
  </form>
</div>


  </body>
</html>
