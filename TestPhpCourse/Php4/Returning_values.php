<?php
//================================
//#1 Use of return
//================================
function square($num)
{
    return $num * $num;
}
echo square(4);   // outputs '16'.

//==========================================
// #2 Returning an array to get multiple values
//==========================================
function small_numbers()
{
    return array (0, 1, 2);
}
list ($zero, $one, $two) = small_numbers();

//==========================================
 #3 Returning a reference from a function
//==========================================

function &returns_reference()
{
    return $someref;
}

$newref =& returns_reference();

//==========================================
 #4 Return type declarations 
//==========================================

function sum($a, $b): float {
    return $a + $b;
}

// Note that a float will be returned.
var_dump(sum(1, 2));//float(3)



//==========================================
  #5 Strict mode in action
//==========================================
declare(strict_types=1);

function sum($a, $b): int {
    return $a + $b;
}

var_dump(sum(1, 2));//int(3)
var_dump(sum(1, 2.5));//Fatal error


//==========================================
  #6 Returning an object
//==========================================

class C {}

function getC(): C {
    return new C;
}

var_dump(getC());//object(C)#1 (0) {}




?>