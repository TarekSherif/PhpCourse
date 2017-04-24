<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<form action="">
	<input type="text" 
	value="<?='Const String' ?>">

		<input type="text" 
	value="<?php echo'Const String'; ?>">
	</form>
	<div>
	<?php 
	$var1=10;
	$var2=boolval($var1);
echo($var2 );
	

	echo "<br>";
${"1"}=10;
echo ${"1"};
?>
	
	</div>

	<div>
	<?php 
define("TEST", "Welcome 2 RTC!");  echo TEST;

	?>
	</div>
</body>
</html>