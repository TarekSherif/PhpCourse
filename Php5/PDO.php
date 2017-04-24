<?php
$servername = "localhost";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$servername;dbname=rtc", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully <br>";
// $sql = "CREATE DATABASE  if not exists myDB";

//     $sql='CREATE TABLE if not exists MyGuests (
// id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
// firstname VARCHAR(30) NOT NULL,
// lastname VARCHAR(30) NOT NULL,
// email VARCHAR(50),
// reg_date TIMESTAMP
// )';


$firstname=$_POST["firstname"];

$lastname=$_POST["lastname"];
$email=$_POST["email"];


$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('$firstname', '$lastname', '$email')";

        $conn->exec($sql);
  //  echo "Database created successfully";
$query = $conn->prepare("SELECT * FROM MyGuests");
$query->execute();
$result = $query;
 echo "<table>";
foreach($result as $row){
 echo "<tr>";
    echo "<td>" . $row['firstname'] . "</td>";
    echo "<td>" . $row['lastname'] . "</td>";
     echo "<td>" . $row['email'] . "</td>";

  echo "</tr>";

}
echo "</table>";
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }



    $conn = null;
?>
