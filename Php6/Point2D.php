<?php
/**
 * Point
 */
class Point2D 
{
 //private $X;
 protected $X;
 public $Y;

public function Point2D($px,$py)
{
$this->X=$px;
$this->Y=$py;
}

 public function GetX()
 {
    return $this->X;    
 }
 public function SetX($px)
 {
     if(is_numeric($px))
     {
             $this->X=$px;    
     }
     else
     {
     $this->X=0;
     }
   
 }
}