<?php
// array_splice

$color = ['red', 'green', 'blue', 'yellow'];
$fruit = ["Orange", "Apple"];

$newarray = array_splice($color, count($color),0,$fruit);

echo "<pre>";
print_r($color);
echo "<pre>";
