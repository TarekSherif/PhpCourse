 <?php

 //Passing arguments
   function GetMonthName($i)
   {
   $months [1] = "jan";
   $months [] = "feb";
   $months [] = "mar";
   $months [] = "apr";
   $months [] = "may";
   $months [] = "jun";
   $months [] = "jul";
   $months [] = "aug";
   $months [] = "sep";
   $months [] = "Oct";
   $months[] = "nov";
   $months[] = "Dec";

   echo  $months [i];
   }



 //Passing arguments by reference

function add_some_extra(&$string)
{
    $string .= 'and something extra.';
}
$str = 'This is a string, ';
add_some_extra($str);
echo $str;    // outputs 'This is a string, and something extra.'

//Default argument values 

function makecoffee($type = "cappuccino")
{
    return "Making a cup of $type.\n";
}
echo makecoffee();            //Making a cup of cappuccino.
echo makecoffee(null);        //Making a cup of .
echo makecoffee("espresso");  //Making a cup of espresso.
//===============================
//Error
function wellcomeMassage($place = "RTC" , $name)
{
    return "<h2> wellcome $name .\n in  $place.</h2>";
}
echo wellcomeMassage("Tarek");
echo wellcomeMassage("Cairo" ,"Tarek"); 



//Example #2 Passing arrays to functions
function takes_array($input)
{
    echo "$input[0] + $input[1] = ", $input[0]+$input[1];
}

 

//****************
//variable arguments
//****************
   function sum(...$numbers) {
      //$numargs = func_num_args();
    $acc = 0;
    foreach ($numbers as $n) {
        $acc += $n;
    }
    return $acc;
}

   function avg(...$numbers) {
       return sum(...$numbers)/func_num_args();
}



echo avg(1, 2, 3,0, 4);
 
 ?>
