<?php

$Test="RTC";
 function F_str_split($s)
{
    $r = array();
    for($i=0; $i<strlen($s); $i++) 
         $r[$i] = $s[$i];
    return $r;
}

$Test1=F_str_split($Test);
foreach ($Test1 as $key ) {
echo $key."<br/>";
}
//================f_abs(number)=====================

 function f_abs($n)
{
   return ($n>0)?$n:$n*-1;
}

  
echo Fabs(100);
echo "<br/>";
echo Fabs(-100);
echo "<br/>";

echo 	abs(-100);
echo "<br/>";
//====================pow=========================
 function Fpow($base,$Power)
{
	$pow=1;
	for ($i=1; $i<=$Power ; $i++) { 
		$pow*=$base;
	}
	return $pow;
}

echo Fpow(2,3);

echo "<br/>";



?>