<?php
  $query=mysql_query("select * from s5_arts where id='$ID'")or die(mysql_error());
$row=mysql_fetch_array($query);
  ?>
   <?php
  $query1=mysql_query("select * from gp_5_arts where id='$ID'")or die(mysql_error());
$row1=mysql_fetch_array($query1);
  ?>
    <?php
  $query2=mysql_query("select * from history_5_arts where id='$ID'")or die(mysql_error());
$row2=mysql_fetch_array($query2);
  ?>
  <?php
  $query3=mysql_query("select * from econ_5_arts where id='$ID'")or die(mysql_error());
$row3=mysql_fetch_array($query3);
  ?>
  <?php
  $query4=mysql_query("select * from luganda_5_arts where id='$ID'")or die(mysql_error());
$row4=mysql_fetch_array($query4);
  ?>
  <?php
  $query5=mysql_query("select * from arabic_5_arts where id='$ID'")or die(mysql_error());
$row5=mysql_fetch_array($query5);
  ?>
  <?php
  $query6=mysql_query("select * from f_art_5_arts where id='$ID'")or die(mysql_error());
$row6=mysql_fetch_array($query6);
  ?>
   <?php
  $query7=mysql_query("select * from islam_5_arts where id='$ID'")or die(mysql_error());
$row7=mysql_fetch_array($query7);
  ?>
   <?php
  $query8=mysql_query("select * from geog_5_arts where id='$ID'")or die(mysql_error());
$row8=mysql_fetch_array($query8);
  ?>
   
   <?php
  $query9=mysql_query("select * from ict_5_arts where id='$ID'")or die(mysql_error());
$row9=mysql_fetch_array($query9);
  ?>
     <?php
  $query10=mysql_query("select * from sub_math_5_arts where id='$ID'")or die(mysql_error());
$row10=mysql_fetch_array($query10);
  ?>
  <?php
  $query11=mysql_query("select * from ent_5_arts where id='$ID'")or die(mysql_error());
$row11=mysql_fetch_array($query11);
  ?>
 <?php 
 
  $querydate=mysql_query("select nextdate from s5_arts where id='$ID'")or die(mysql_error());
$rowdate=mysql_fetch_array($querydate);
  ?>
   <?php 
 
  $queryclass_tr=mysql_query("select class_tr from s5_arts where id='$ID'")or die(mysql_error());
$rowclass_tr=mysql_fetch_array($queryclass_tr);
  ?>
  <?php 
 
  $queryhead_tr=mysql_query("select Head_tr from s5_arts where id='$ID'")or die(mysql_error());
$rowhead_tr=mysql_fetch_array($queryhead_tr);
  ?>
  <?php
  //This code adds the Total
  $querya=mysql_query("SELECT truncate(sum(paper_one_mot+paper_one_end)/2,0) as Total from gp_5_arts where id='$ID'")or die(mysql_error());
$rowa=mysql_fetch_array($querya);

$queryb=mysql_query("SELECT truncate(sum(paper_one_mot+paper_one_end)/2,0) as Total from history_5_arts where id='$ID'")or die(mysql_error());
$rowb=mysql_fetch_array($queryb);

$queryc=mysql_query("SELECT truncate(sum(paper_one_mot+paper_one_end)/2,0) as Total from econ_5_arts where id='$ID'")or die(mysql_error());
$rowc=mysql_fetch_array($queryc);

$queryd=mysql_query("SELECT truncate(sum(paper_one_mot+paper_one_end)/2,0) as Total from luganda_5_arts where id='$ID'")or die(mysql_error());
$rowd=mysql_fetch_array($queryd);

$querye=mysql_query("SELECT truncate(sum(paper_one_mot+paper_one_end)/2,0) as Total from arabic_5_arts where id='$ID'")or die(mysql_error());
$rowe=mysql_fetch_array($querye);

$queryf=mysql_query("SELECT truncate(sum(paper_one_mot+paper_one_end)/2,0) as Total from f_art_5_arts where id='$ID'")or die(mysql_error());
$rowf=mysql_fetch_array($queryf);

$queryg=mysql_query("SELECT truncate(sum(paper_one_mot+paper_one_end)/2,0) as Total from islam_5_arts where id='$ID'")or die(mysql_error());
$rowg=mysql_fetch_array($queryg);

$queryn=mysql_query("SELECT truncate(sum(paper_one_mot+paper_one_end)/2,0) as Total from geog_5_arts where id='$ID'")or die(mysql_error());
$rown=mysql_fetch_array($queryn);

$queryq=mysql_query("SELECT truncate(sum(paper_one_mot+paper_one_end)/2,0) as Total from ict_5_arts where id='$ID'")or die(mysql_error());
$rowq=mysql_fetch_array($queryq);

$queryp=mysql_query("SELECT truncate(sum(paper_one_mot+paper_one_end)/2,0) as Total from sub_math_5_arts where id='$ID'")or die(mysql_error());
$rowp=mysql_fetch_array($queryp);

$queryz=mysql_query("SELECT truncate(sum(paper_one_mot+paper_one_end)/2,0) as Total from ent_5_arts where id='$ID'")or die(mysql_error());
$rowz=mysql_fetch_array($queryz);

//This code  adds Total for paper two


$queryh=mysql_query("SELECT truncate(sum(two_paper_mot+two_paper_end)/2,0) as Total from history_5_arts where id='$ID'")or die(mysql_error());
$rowh=mysql_fetch_array($queryh);

$queryi=mysql_query("SELECT truncate(sum(two_paper_mot+two_paper_end)/2,0) as Total from econ_5_arts where id='$ID'")or die(mysql_error());
$rowi=mysql_fetch_array($queryi);

$queryj=mysql_query("SELECT truncate(sum(two_paper_mot+two_paper_end)/2,0) as Total from luganda_5_arts where id='$ID'")or die(mysql_error());
$rowj=mysql_fetch_array($queryj);

$queryk=mysql_query("SELECT truncate(sum(two_paper_mot+two_paper_end)/2,0) as Total from arabic_5_arts where id='$ID'")or die(mysql_error());
$rowk=mysql_fetch_array($queryk);

$queryl=mysql_query("SELECT truncate(sum(two_paper_mot+two_paper_end)/2,0) as Total from f_art_5_arts where id='$ID'")or die(mysql_error());
$rowl=mysql_fetch_array($queryl);

$querym=mysql_query("SELECT truncate(sum(two_paper_mot+two_paper_end)/2,0) as Total from islam_5_arts where id='$ID'")or die(mysql_error());
$rowm=mysql_fetch_array($querym);

$queryo=mysql_query("SELECT truncate(sum(two_paper_mot+two_paper_end)/2,0) as Total from geog_5_arts where id='$ID'")or die(mysql_error());
$rowo=mysql_fetch_array($queryo);

$queryr=mysql_query("SELECT truncate(sum(two_paper_mot+two_paper_end)/2,0) as Total from ent_5_arts where id='$ID'")or die(mysql_error());
$rowr=mysql_fetch_array($queryr);

//This code is for paper three
$querykk=mysql_query("SELECT truncate(sum(paper_three_mot+paper_three_end)/2,0) as Total from arabic_5_arts where id='$ID'")or die(mysql_error());
$rowkk=mysql_fetch_array($querykk);

$queryjj=mysql_query("SELECT truncate(sum(paper_three_mot+paper_three_end)/2,0) as Total from luganda_5_arts where id='$ID'")or die(mysql_error());
$rowjj=mysql_fetch_array($queryjj);

$querycc=mysql_query("SELECT truncate(sum(paper_three_mot+paper_three_end)/2,0) as Total from econ_5_arts where id='$ID'")or die(mysql_error());
$rowcc=mysql_fetch_array($querycc);
   
$queryoo=mysql_query("SELECT truncate(sum(paper_three_mot+paper_three_end)/2,0) as Total from geog_5_arts where id='$ID'")or die(mysql_error());
$rowoo=mysql_fetch_array($queryoo);

$querymm=mysql_query("SELECT truncate(sum(paper_three_mot+paper_three_end)/2,0) as Total from islam_5_arts where id='$ID'")or die(mysql_error());
$rowmm=mysql_fetch_array($querymm);

$querys=mysql_query("SELECT truncate(sum(paper_three_mot+paper_three_end)/2,0) as Total from ent_5_arts where id='$ID'")or die(mysql_error());
$rows=mysql_fetch_array($querys);

$queryt=mysql_query("SELECT truncate(sum(paper_three_mot+paper_three_end)/2,0) as Total from f_art_5_arts where id='$ID'")or die(mysql_error());
$rowt=mysql_fetch_array($queryt);

//This code is for paper four
$queryu=mysql_query("SELECT truncate(sum(four_paper_mot+four_paper_end)/2,0) as Total from f_art_5_arts where id='$ID'")or die(mysql_error());
$rowu=mysql_fetch_array($queryu);
  ?>

  