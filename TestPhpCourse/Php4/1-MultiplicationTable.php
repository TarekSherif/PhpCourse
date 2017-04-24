
<!DOCTYPE html>
<html>
<head>
	<title>MultiplicationTable</title>
	<style type="text/css" >
	 body{text-align: center;}
table{
  display: inline-block;
  border: 1px  solid #c00;
width: 150px;
height: 300px;
}

td{
background-color: orange;
color: yellow;
text-align:left;

padding-left: 10px;


}
td:hover{
background-color: yellow;
color: orange;
padding-left: 15px;
font-weight: bold;

}

 
 </style>


</head>
<body>
<!-- MultiplicationTable 1 without loop -->
<table>
  
  <thead>
    <tr>
      <th>MultiplicationTable 2</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>1*2=<?= 1*2 ?></td>
      </tr><tr>
      <td>2*2=<?= 2*2 ?></td>
      </tr><tr>
      <td>3*2=<?= 3*2 ?></td>
      </tr><tr>
      <td>4*2=<?= 4*2 ?></td>
      </tr><tr>
      <td>5*2=<?= 5*2 ?></td>
      </tr><tr>
      <td>6*2=<?= 6*2 ?></td>
      </tr><tr>
      <td>7*2=<?= 7*2 ?></td>
      </tr><tr>
      <td>8*2=<?= 8*2 ?></td>
      </tr><tr>
      <td>9*2=<?= 9*2 ?></td>
      </tr><tr>
      <td>10*2=<?= 10*2 ?></td>
      </tr><tr>
      <td>11*2=<?= 11*2 ?></td>
      </tr><tr>
      <td>12*2=<?= 12*2 ?></td>
      </tr>
    
  </tbody>
</table>

<!-- MultiplicationTable 2 with  loop -->
<table>

  <thead>
    <tr>
      <th>MultiplicationTable 4</th>
    </tr>
  </thead>
  <tbody>
<?php
for ($i=1; $i <= 12 ; $i++) { 
  echo "
    <tr>
      <td> $i* 4 =" .strval( $i * 4 )
      . "</td>
    </tr>
    ";
}

?>
  </tbody>
</table>
<!-- MultiplicationTable 3 with  Function -->
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
</body>
</html>