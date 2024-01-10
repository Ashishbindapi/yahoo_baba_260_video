<?php
//functions with parameters

function hello($firstname = "first", $lastname = "Last")
{
    echo "hello $firstname $lastname <br>";
}

function add($a, $b)
{
    echo $a + $b;
}

hello("Ashish","Bindra");
add(23,26);