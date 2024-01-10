<?php
//array_reduce()

function myfunction($n, $m)
{
    $n *= $m;
    return $n;
}

$a = [1, 2, 3, 4, 5];

$newarray  = array_reduce($a, 'myfunction', 10);

echo "<pre>";
print_r($newarray);
echo "<pre>";
