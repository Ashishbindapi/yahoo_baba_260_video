<?php
// array_fill & array_fill_keys

$a = array('red', 'green', 'blue', 'yellow');

// $newarray = array_fill_keys($a,"Testing");
$newarray = array_fill(3,4,"Testing");

echo "<pre>";
print_r($newarray);
echo "<pre>";
