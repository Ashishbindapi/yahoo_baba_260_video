<?php
//functions Argument by Reference

function first($num)
{
    $num += 5;
}

function second(&$num)
{
    $num += 5;
}
$number = 10;

first($number);
echo "Original Value is $number <br>";

second($number);
echo "Original Value is $number <br>";
