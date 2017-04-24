<?php
/**
 * 
 */
class OneDB
{
 public $servername = "localhost";
public $username = "root";
public $password = "";

 
public function Exec($sql)
{
    
try {
    $conn = new PDO("mysql:host=$this->servername;dbname=rtc",
     $this->username, 
      $this->password);
  
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $conn->exec($sql);
  //  echo "Database created successfully";

    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }



    $conn = null;


}




}

?>