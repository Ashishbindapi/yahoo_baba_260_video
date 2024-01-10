<?php
// Array : Intersect Functions
function compare($a, $b)
{
    if ($a === $b) {
        return 0;
    }
    return ($a > $b) ? 1 : -1;
}

function compareValue($a, $b)
{
    if ($a === $b) {
        return 0;
    }
    return ($a > $b) ? 1 : -1;
}

$a1 = ['a' => 'red', 'b' => 'green', 'c' => 'blue', 'd' => 'yellow'];
$a2 = ['a' => 'red', 'f' => 'green', 'd' => 'purple'];

// $newarray = array_intersect_key($a1, $a2);
// $newarray = array_intersect_assoc($a1, $a2);
$newarray = array_uintersect_uassoc($a1, $a2,"compare","compareValue");


echo "<pre>";
print_r($newarray);
echo "<pre>";
