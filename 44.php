<?php
// Array_slice

$color = ['a'=>'red','b'=>'green','42'=>'blue','d'=>'yellow'];


$newarray = array_slice($color,1,3,true);

echo "<pre>";
print_r($newarray);
echo "<pre>";