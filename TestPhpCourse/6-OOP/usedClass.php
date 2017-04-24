<?php
include ("PointClass.php");
include ("DB.php");
$P=new Point(7,9);



$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('111', '1111', '1111')";
DB::exec($sql);

?>