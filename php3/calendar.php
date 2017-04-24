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

 foreach ($months as $key => $value) {
    echo  "<table>
    <caption>$key </caption>
    
    <tbody><tr>
      
";
   for ($i=1; $i <= $value ; $i++) { 
    echo "<td>$i</td>";
    echo ($i%5==0 )?"</tr><tr>":"";

    
   }
   echo "</tr>
    </tbody>
   </table>
";

}


  ?>