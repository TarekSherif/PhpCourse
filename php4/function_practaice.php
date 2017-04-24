<?php
 function Fabs($value)
{
	return ($value<0)?$value*-1:$value;
}
echo Fabs(100);
echo "<br/>";
echo Fabs(-100);
echo "<br/>";

echo 	abs(-100);
echo "<br/>";

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

echo 	pow(2,3);
echo "<br/>";

echo 	rand(100,200);

echo "<br/>";

echo 	rand(200,400);
echo "<br/>";
echo ceil(1.1);
echo "<br/>";
echo floor(1.9);
echo "<br/>";
echo round(1.4);
echo "<br/>";
echo round(1.6);

	
?>