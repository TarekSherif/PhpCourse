<?php
require_once "OneDB.php";

//$MYDB=new DB( "localhost", "root", "");

$MYDB =new OneDB();

                    
$firstname=$_POST["firstname"];

$lastname=$_POST["lastname"];
$email=$_POST["email"];


$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('$firstname', '$lastname', '$email')";

$MYDB->Exec($sql) ;

?>