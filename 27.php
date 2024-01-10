<?php
//functions with return Value

function sum($a, $b, $c)
{
    return $a + $b + $c;
}

function persentage($st)
{
    $per = $st / 3;
    echo  $per . "%";
}


$total = sum(23, 40, 90);

persentage($total);
