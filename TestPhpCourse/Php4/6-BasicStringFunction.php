

<?php

// String Function
//======================
// 1-Getting length     =>  Strlen(string);
// 2-Counting  of words =>	 Str_word_count(string);
// 3-Reversing a String =>  Strev(string);
// 4-searching in String=>  strpos(string,string);
// 5-Replacing the String=>	 Str_replace(string,string,string)
// 6-Converting first alphabet 
// of every word  to UPPERCASE=>  ucwords(string);
// 7-Converting To UPPERCASE =>  Strtoupper(string);
// 8-Converting To lowercase =>	 Strtolower(string);

// 9-Repeating a  String =>  Str_repeat(string,number);
// 10-Get part of String   => substr(string,start,[length])
// 11-Removing spaces from a String =>trim(string,[charlist])

echo strlen(“Welcome to RTC”);
echo "<br/>";

echo str_word_count(“Welcome to RTC”);
echo "<br/>";

echo strrev(“Welcome to RTC”);
echo "<br/>";

echo strpos(“Welcome to RTC”,”RTC”);
echo "<br/>";

echo str_replace(“RTC”, “the programming world”, “Welcome to 
	RTC”);
echo "<br/>";

echo ucwords(“welcome to the php world”);
echo "<br/>";

echo strtoupper(“welcome to RTC”);
echo "<br/>";

echo strtolower(“WELCOME TO RTC”);
echo "<br/>";

echo str_repeat(“<h3>RTC</h3>”,9);
echo "<br/>";

echo substr(“Welcome to RTC”,10).”<br>”;
echo "<br/>";

 echo trim(“  RTC  ”);
 echo "<br/>";

 $Arr=str_split("Welcome to RTC");
//  function F_str_split($s)
// {
//     $r = array();
//     for($i=0; $i<strlen($s); $i++) 
//          $r[$i] = $s[$i];
//     return $r;
// }
?>