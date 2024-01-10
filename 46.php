<?php
// array_column & array_chunk

$age = array(
    "Mohan" => "35",
    "Aman" => "37",
    "Ram" => "43",
    "Salman" => "25"
);

$newarray = array_chunk($age, 3, true);

echo "<pre>";
print_r($newarray);
echo "<pre>";
