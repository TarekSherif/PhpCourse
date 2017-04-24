
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>




<?php
/*
//•	Dynamic function
$x="FMT";
echo $x();


//•	lambda  function
   $func = function($value) {
    return $value * 2;
};

echo($func(4));





//===========================
//Conditional functions
//•	function within function
//=========================
// if (function_exists('imap_open')) {
//     echo "IMAP functions are available.<br />\n";
// } else {
//     echo "IMAP functions are not available.<br />\n";
// }

$makefoo = 1;




if ($makefoo) {
	
  function foo()
  {
    echo "foofoofoofoofoofoofoo <br>";
     function poo()
    {
    	echo "poopooo <br>";
    }

  }
}
foo();
  poo();




 //•	Passing arrays to functions
$arr=array(1,2,3,4);
function Sum($x)
{
	$sum=0;
	if(is_array($x))
	{
		foreach ($x as $key) {
		$sum+=$key;	

		}
	}
	return $sum;
}
echo Sum($arr);

//•	Passing arguments by reference
$x="RTC";
 function Freference(&$val)
{
	$val.=" 000000";
}
Freference($x);
echo($x);



//•	Default argument values
 function FDefaultval($name,$p="RTC")
{
	echo "my name is $name,  i lave $p";
}
FDefaultval("tarek");


// •	variable arguments
*/

 function sum(...$value)
{
$sum=0;
	foreach ($value as $i ) {
	$sum+=$i;	
	}
return $sum;
}
echo sum(1,2,3,4,5);
?>
</body>
</html>


<?php
 function FMT($TableNo=-1)
{
	if($TableNo==-1)
	{
for ($j=1; $j <=12 ; $j++) { 
FMT($j);
}
		
		}


		
			echo "<table>

	<thead>
		<tr>
			<th>MultiplicationTable $TableNo</th>
		</tr>
	</thead>
	<tbody>
";
for ($i=1; $i <= 12 ; $i++) { 
	 echo "
		<tr>
			<td> $i* $TableNo =" .strval( $i * $TableNo )
			. "</td>
		</tr>
		";
}


	echo "</tbody>
</table>";
	


			
}
?>