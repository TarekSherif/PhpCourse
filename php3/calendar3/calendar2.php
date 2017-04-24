<?php


   $months=array(
 "jan"=>31,
 "feb"=>28,
  "mar"=>31,
  "apr"=>30,
  "may"=>31,
  "jun"=>30,
  "jul"=>31,
  "aug"=>31,
  "sep"=>30,
  "Oct"=>31,
  "nov"=>30,
  "Dec"=>31);

 

  ?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="Main.css">

</head>
<body>
<div  id="calendar">
<input type="text" id="TxtCalendar" />
<?php
foreach ($months as $key => $value) {
  ?>
  <table class="<?= $key ?>">
  <thead>
    <tr>
      <th><button class="btnPre"> &lt; </button></th>
      <th colspan="4" class="Showmonths"><?= $key ?><th>
      <th><button class="btnNext">&gt;</button></th>
    </tr>
  </thead>
   
    <tbody><tr>
      
<?php
   for ($i=1; $i <= $value ; $i++) { ?>
    <td  data-day="<?= $key."-".strval($i); ?>"><?=$i; ?></td>
    <?= ($i%7==0 )?"</tr><tr>":"";?>

    <?php
   }
   ?>
  </tr>
    </tbody>
   </table>
 <?php

}
?>

<table id="Tblmonths">
   <tbody>
    <tr>
     
  <?php
  $index=0;
foreach ($months as $key => $value) {
  ?>

   <?php
   $index++;

   echo " <td data-month='$key'>$key</td>";
    echo ($index%4==0 )?"</tr><tr>":"";
}
  ?>

    </tr>
  </tbody>
</table>
</div>


<script type="text/javascript" src="jquery-1.10.2.js"></script>
    <script type="text/javascript" src="MyScript.js"></script>
</body>
</html>