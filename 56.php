<?php
//array_map

function squre($n){
    return strtoupper($n);
}

$a = array(
    'one' => 'Lemon',
    'two' => 'Orange',
    'three' => 'banana',
);

$newarray  = array_map('squre',$a);

echo "<pre>";
print_r($newarray);
echo "<pre>";