<?php


   $manths=array(
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
  <title>calendar2</title>
 <style type="text/css" media="screen">
  body{text-align: center;}
table{
  display: inline-block;
  border: 1px  solid #c00;
width: 95px;
height: 165px;
}

td{
background-color: orange;
color: yellow;


}
td:hover{
background-color: yellow;
color: orange;


}

 
 </style>

</head>
<body>
<?php
foreach ($manths as $key => $value) {
  ?>
  <table>
    <caption><?= $key ?></caption>
    
    <tbody><tr>
      
<?php
   for ($i=1; $i <= $value ; $i++) { ?>
    <td><?=$i ?></td>
    <?= ($i%5==0 )?"</tr><tr>":"";?>

    <?php
   }
   ?>
  </tr>
    </tbody>
   </table>
 <?php

}
?>


</body>
</html>