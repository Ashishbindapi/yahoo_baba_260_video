<?php
//Foreach Loop
$age = [
    "bill" => 25,
    "steve" => 42.50,
    "elon" => 22
];


echo "<ul>";
foreach ($age as $key => $value) {
    echo "<li>$key = $value</li>";
}
echo "<ul>";
