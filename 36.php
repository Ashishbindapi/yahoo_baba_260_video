<?php
//Multidimensional Array
$marks = [
    "Krishana" => [
        "physics" => 85,
        "maths" => 78,
        "chemistry" => 89
    ],
    "Ram" => [
        "physics" => 68,
        "maths" => 73,
        "chemistry" => 79
    ],
    "Mohan" => [
        "physics" => 62,
        "maths" => 67,
        "chemistry" => 92
    ]
];
echo "<table border ='2px' cellpadding='5px'>
    <tr>
        <th>Student name</th>
        <th>Physics</th>
        <th>Maths</th>
        <th>Chemestry</th>
    </tr>";

foreach ($marks as $key => $v1) {
    echo "<tr>";
    echo "<td>$key</td>";
    foreach ($v1 as $v2) {
        echo "<td>$v2</td>";
    }
    echo "</tr>";
}
echo '</table>';

echo "<pre>";
print_r($marks);
echo "<pre>";
