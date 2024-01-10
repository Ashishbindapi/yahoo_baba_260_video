<?php
// Array : Diff Functions
function compare($a, $b)
{
    if ($a === $b) {
        return 0;
    }
    return ($a > $b) ? 1 : -1;
}

$a1 = ['a' => 'red', 'b' => 'green', 'c' => 'blue', 'd' => 'yellow'];
$a2 = ['a' => 'red', 'f' => 'green', 'd' => 'purple'];

$newarray = array_udiff_assoc($a1, $a2, 'compare');

echo "<pre>";
print_r($newarray);
echo "<pre>";
?>
