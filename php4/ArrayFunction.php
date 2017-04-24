<?php
$months=array("Jan","Feb","Mar","Apr","May","Jun","Jul","Aug" ,"Sep","Oct","Nov" , "Dec");

echo in_array("Oct",$months);
echo "<br/>";
echo array_search("Oct",$months);
echo "<br/>";

echo array_key_exists(90,$months);
echo "<br/>";

PrintArray($months);
array_pop($months);
PrintArray($months);

array_shift($months);
PrintArray($months);

array_push($months,"Dec");
PrintArray($months);

array_unshift($months,"jan");
PrintArray($months);
sort($months);
PrintArray($months);
function PrintArray($Arr)
{
	echo "<pre>";
	print_r($Arr);
	echo "</pre>";
}


?>
