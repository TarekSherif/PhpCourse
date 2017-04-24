<?php

// BasicArrayFunction
// ======================
// 1-count(&array);
// ========
// search
// =======
// 1-mixed  array_search(mixed ,array ,[bool] = false ] )
// 2-bool   in_array(mixed ,array ,[bool] = false ] );
// 3-bool   array_key_exists(mixed ,array );
// ======================
// Add Item to array
// =================
// 1-int array_push ( &array , mixed [, mixed $... ] ) at last
// 2-int array_unshift ( &array , mixed [, mixed $... ] ) at first
// ======================
// Remove Item From array
// ======================
// 1-mixed array_pop ( &array )from last
// 2-mixed array_shift ( &array )from first
// ===================
// sort indexed array
// ================
// 1-sort(&array[, int $sort_flags = SORT_REGULAR ] );
// 2-rsort(&array[, int $sort_flags = SORT_REGULAR ] );
// ===================
// Sort Associative Array
// ================
// 1-asort(&array[, int $sort_flags = SORT_REGULAR ] );
// 2-arsort(&array[, int $sort_flags = SORT_REGULAR ] );
// ========================



// 1-Getting array range(x,y)     =>
//range("A","Z");
//range(number,number);

$months=array("jan","feb","mar","apr","may","jun","jul","aug" ,"sep","Oct","nov" , "Dec");


echo count($months);
echo("<br/>");

echo array_search('mar', $months); // $key = 2;
echo("<br/>");

echo(in_array('mar', $months));
echo("<br/>");

echo(array_key_exists('mar', $months));
echo("<br/>");



function PrintArray($array)
{
	if(is_array($array))
	{
	echo("<per>");
	print_r($array);
	echo "</per>";
	}
}

PrintArray($months);

array_shift ( $months );//from first
PrintArray($months);

array_pop ( $months );//from last
PrintArray($months);


 array_push ( $months , "Dec");// at last
 PrintArray($months);

 array_unshift ( $months ,"jan" ); //at first
 PrintArray($months);

 sort($months);
 PrintArray($months);

rsort($months);
 PrintArray($months);
 
// function small_numbers()
// {
//     return array (0, 1, 2);
// }
// list ($zero, $one, $two) = small_numbers();

// echo $one;

?>

