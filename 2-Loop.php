for ($i=1; $i <= 12 ; $i++) { 
	
	echo "<h2>3*$i=".strval(3*$i)  ."</h2>";
}


for ($i=1; $i <= 100 ;$i+=5 ) { 
	echo $i;
}

for ($i=1; $i <= 100 ; ) { 
	$i+=5;
	echo $i;
}
for ($i=1;  ; ) { 
if($i <= 100)
{	$i+=5;
	echo $i;
	}
	else
	{breack;}
}
$i=1;
for (;  ; ) { 
if($i <= 100)
{	$i+=5;
	echo $i;
	}
	else
	{breack;}
}

for ($i=1; $i <= 100 ; $i++) { 
	echo ($i%5==0)?$i:"";
}


for ($i=0; $i <100 ;$i++ ) { 
		
	echo ($i%5==0 && $i%2==0)?"$i </br>":"";
}