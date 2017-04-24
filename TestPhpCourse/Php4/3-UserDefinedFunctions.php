
<?php 
//User-defined functions
//==============================




 function printAllMonths()
 {

$months=array("jan","feb","mar","apr","may","jun","jul","aug" ,"sep","Oct","nov" , "Dec");

    foreach ($months as $key ) {
      echo "<h1>$key</h1>";
       }
 }
 

   //****************
// dynamic function

   $X="Sum"(10,20);

//lambda  function
   $func = function($value) {
    return $value * 2;
};

echo($func(4));


//===========================
//Conditional functions
//=========================
// if (function_exists('imap_open')) {
//     echo "IMAP functions are available.<br />\n";
// } else {
//     echo "IMAP functions are not available.<br />\n";
// }
$makefoo = true;

/* We can't call foo() from here 
   since it doesn't exist yet,
   but we can call bar() */

bar();

if ($makefoo) {
  function foo()
  {
    echo "I don't exist until program execution reaches me.\n";
  }
}

/* Now we can safely call foo()
   since $makefoo evaluated to true */

if ($makefoo) foo();

function bar() 
{
  echo "I exist immediately upon program start.\n";
}


//**********************************************

   // function within function

   function fun1()
   {
    echo "fun1";
         function fun2()
           {
            echo "fun2";
            }
   }

//fun2();Error
   fun1();
   fun2();





// built in function
// http://php.net/manual/en/indexes.functions.php ==  11,000




?>