<?php
class Point
{
    private $X;
    private $Y;



//Constructor     __construct     __destruct

public function Point ($Px,$Py){
 $this->X=$Px;
 $this->Y=$Py;
 echo  $this->Y ."  ".  $this->X;
}

    public function GetX(){
        return $this->X;

    }
    public function SetX($Px){
         $this->X=$x;
       }

    public function GetY(){
        return $this->Y;

    }
    public function SetY($Py){
         $this->Y=$y;
       }
}

$p1=new Point(4,5);

?>