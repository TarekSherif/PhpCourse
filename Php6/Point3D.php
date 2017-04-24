<?php
//include "Point2D.php";

//include_once "Point2D.php";
//require "Point2D.php";
  require_once "Point2D.php";


/**
 * 3D Point
 */
class Point3D extends Point2D
{
    private $Z;
   
     public function GetZ()
 {
    return $this->Z;    
 }
 public function SetZ($pZ)
 {
     if(is_numeric($pZ))
     {
             $this->Z=$pZ;    
     }
     else
     {
     $this->Z=0;
     }
   
 }

 public function Printx()
 {
     return $this->X;
 }
   
}


$p1=new Point2D(11,33);


echo $p1->GetX();
echo $p1->Y




//echo $p1->GetZ();


// $p2=new Point3D();
//  $p2->SetZ(55);
//  echo "<br/>";
// echo $p2->GetZ();
//  echo "<br/>";
// $p2->SetX(35345);
//  echo "<br/>";
// echo $p2->printx();

?>