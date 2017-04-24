<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";
// Create connection
$conn = new mysqli($servername, $username, $password,$dbname );

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

//echo "Connected successfully <br>";

// $sql = "CREATE DATABASE  if not exists myDB";

// $sql='CREATE TABLE if not exists MyGuests (
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

if ($conn->query($sql) === TRUE) {
   // echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}

$sql = "SELECT * FROM MyGuests";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"].
         " - Name: " . $row["firstname"]. 
        " " . $row["lastname"]. "<br>";
    }
} else {
    echo "0 results";
}


$conn->close();
?>