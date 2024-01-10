<?php
// if in compriesion 
$age = 22;

if ($age >= 18 && $age <= 21) {
    echo "You are eligible";
}
echo "<br>";

if ($age >= 18 and $age <= 21) {
    echo "You are eligible";
}

echo "<br>";

// In this condition will be one condition will be true then echo 
if ($age >= 18 || $age <= 21) {
    echo "You are eligible";
}
echo "<br>";

if ($age >= 18 or $age <= 21) {
    echo "You are eligible";
}

// ! comprision change true condition in false
echo "<br>";

if (!($age <= 18)) {
    echo "You are eligible";
}

// xor condision in when two condition will be true then give you false
echo "<br>";

if ($age <= 18 xor $age <= 21) {
    echo "You are eligible";
}
