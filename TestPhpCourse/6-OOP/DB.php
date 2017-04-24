<?php
//DB  
class DB
{
 public static $servername = "localhost";
 public static $username = "root";
 public static $password = "";
 public static   $dbname = "rtc";

  public static function  exec($sql)
  {


try {
        $conn = new PDO("mysql:host=".self::$servername.";dbname=".self::$dbname, self::$username, self::$password);
    // set the PDO error mode to exception
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

