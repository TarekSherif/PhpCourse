<?php
/**
 * 
 */
class DB
{
 public $servername ;
public $username ;
public $password ;
 public   function DB($PSN,$PUN,$PUP)
    {
      
       $this->servername=$PSN;
        $this->username=$PUN;
         $this->password=$PUP;
    }
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