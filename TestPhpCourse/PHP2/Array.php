<?php
//•	Variable
$manth1="jan";
$manth2="feb";
$manth3="mar";
$manth4="apr";
$manth5="may";
$manth6="jun";
$manth7="jul";
$manth8="aug";
$manth9="sep";
$manth10="oct";
$manth11="nov";
$manth12="dec";

echo "<ul>";
echo "<li>$manth1</li>";
echo "<li>$manth2</li>";
echo "<li>$manth3</li>";
echo "<li>$manth4</li>";
echo "<li>$manth5</li>";
echo "<li>$manth6</li>";
echo "<li>$manth7</li>";
echo "<li>$manth8</li>";
echo "<li>$manth9</li>";
echo "<li>$manth10</li>";
echo "<li>$manth11</li>";
echo "<li>$manth12</li>";
echo "</ul>";
/*
//Indexed Array Syntax
$x=array(Element,Element,Element);
*/
$manths = array("jan","feb","mar","apr","may","jun","jul","aug","sep","oct","nov","dec" );

echo "<ul>";
	echo "<li>$manths</li>";//Error  Array to string conversion
echo "</ul>";


echo "<pre>";
	print_r($manths) ;
echo "</pre>";


echo "<ul>";
foreach ($manths as $manth) {
	echo "<li>$manth</li>";
}
echo "</ul>";



$manths[1] = "jan" ;
$manths[] ="feb";
$manths[] = "mar" ;
$manths[] = "apr";
$manths[] = "may" ;
$manths[] = "jun";
$manths[] = "jul";
$manths[] = "aug" ;
$manths[] = "sep" ;
$manths[] = "oct";
$manths[] = "nov" ;
$manths[] = "dec" ;

echo "<pre>";
	print_r($manths) ;
echo "</pre>";


/*
//Associative  Array Syntax
$x=array(key1=>value ,
key2=>value ,
key3=>value );
*/

$manths = array("jan"=>31,"feb"=>28,"mar"=>31,"apr"=>30,"may"=>31,"jun"=>30,"jul"=>31,"aug"=>31,"sep"=>30,"oct"=>31,"nov"=>30,"dec" =>31);
echo"<table>
	<caption>manths</caption>
	<thead>
		<tr>
			<th>Manth</th>
		
			<th>#Days</th>
		</tr>
	</thead>
	<tbody>";
foreach ($manths as $key => $value) {
	echo "	

		<tr>
			<th>$key</th>
			<td>$value</td>
		</tr>";

}
echo "	</tbody>
</table>";


foreach ($manths as $key => $value) {


echo"<table>
	<caption>$key</caption>

	<tbody><tr>";
for ($i=1;$i<=$value;$i++) {

	echo "<td>$i</td>";
echo(($i%5==0)?"</tr><tr>":"");
}
echo "	</tbody>
</table>";
}