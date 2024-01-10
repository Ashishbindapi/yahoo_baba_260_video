<?php
// Array_flip & Array_change_key_case

$a = array(
    'bil' => 10,
    'Joe' => 20,
    'Peter' => 30
);

$newarray = array_flip($a);
$newarray = array_change_key_case($a,CASE_LOWER);


echo "<pre>";
print_r($newarray);
echo "<pre>";
