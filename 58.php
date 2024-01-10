<?php
//Array : Sorting functions
$food = array(
    "d"=>'Lemon',
    "a"=>'Orange',
    "b"=>'banana',
    "c"=>'Apple'
);
$a = [1, 2, 3, 4, 5];


// sort($food);
// rsort($a);
// asort($food);
// arsort($food);
// ksort($food);
// krsort($food);
$newarray = array_reverse($food);


echo "<pre>";
print_r($newarray);
echo "<pre>";
