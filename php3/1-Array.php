<?php

//Why Array
//===============

$month1="jan";
$month2="feb";
$month3="mar";
$month4="apr";
$month5="may";
$month6="jun";
$month7="jul";
$month8="aug";
$month9="sep";
$month10="Oct";
$month11="nov";
$month12="Dec";
echo "<ol>";
	echo "<li>$month1</li>";
	echo "<li>$month2</li>";
	echo "<li>$month3</li>";
	echo "<li>$month4</li>";
	echo "<li>$month5</li>";
	echo "<li>$month6</li>";
	echo "<li>$month7</li>";
	echo "<li>$month8</li>";
	echo "<li>$month9</li>";
	echo "<li>$month10</li>";
	echo "<li>$month11</li>";
	echo "<li>$month12</li>";
echo "</ol>";




// array()

$months=array("jan","feb","mar","apr","may","jun","jul","aug" ,"sep","Oct","nov" , "Dec");
// $months[]="";

echo $months;//error Array to string conversion
$months=array("jan","feb","mar","apr","may","jun","jul","aug" ,"sep","Oct","nov" , "Dec");
echo "<pre>";
//print_r($months);
echo "</pre>";
echo "<h1>$months[2]</h1>";

 $months [1] = "jan";
   $months [] = "feb";
   $months [] = "mar";
   $months [] = "apr";
   $months [] = "may";
   $months [] = "jun";
   $months [] = "jul";
   $months [] = "aug";
   $months [] = "sep";
   $months [] = "Oct";
    $months[] = "nov";
    $months[] = "Dec";
   
foreach ($months as $key ) {
	echo "<h1>$key</h1>";
	# code...
}



*/


// $months[]="";

// $months[]="";


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


echo "<table>
   	<caption>table title and/or explanatory text</caption>
   	<thead>
   		<tr>
   			<th>month</th>
   			<th>#Days</th>
   		</tr>
   	</thead>
   	<tbody>
   		
";
   foreach ($months as $key => $value) {
   	echo "<tr>
   			<td>$key</td>
   			<td>$value</td>
   		</tr>";
   }
   echo "
   	</tbody>
   </table>
";


