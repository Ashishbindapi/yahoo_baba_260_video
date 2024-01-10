<?php
// array_walk & array_walk_recursive
$veggle = array('1' => "carrot", '2' => "lomatoes");
$fruits = array(
    $veggle,
    'a' => 'Lemon',
    'b' => 'Orange',
    'c' => 'banana',
    'd' => 'Apple'
);

// array_walk($fruits, "myfunction");
array_walk_recursive($fruits, "myfunction", "is a key of");

function myfunction($key, $value,$param)
{
    echo "$key $param $value<br>";
}
