<?php
//Multidimensional Array
$emp = [
    [1, "Jasvant", "Manager", 50000],
    [1, "Arun", "saleman", 20000],
    [1, "Mohan", "Computer Operator", 12000],
    [1, "Amit", "Driver", 5000],
];


echo "<table border ='2px' cellpadding='5px'>";
foreach ($emp as $v1) {
    echo "<tr>";
    foreach ($v1 as $v2) {
        echo "<td>$v2</td>";
    }
    echo "</tr>";
}
echo "<ul>";
