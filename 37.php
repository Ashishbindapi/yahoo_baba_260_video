<?php
//Multidimensional Array with list
$emp = [
    [1, "Jasvant", "Manager", 50000],
    [1, "Arun", "saleman", 20000],
    [1, "Mohan", "Computer Operator", 12000],
    [1, "Amit", "Driver", 5000],
];
echo "<table border ='2px' cellpadding='5px'>
    <tr>
        <th>Emp Id.</th>
        <th>Name</th>
        <th>Designation</th>
        <th>Salary</th>
    </tr>";

foreach ($emp as list($id,$name,$designation,$salary)) {
    echo "<tr>";
    echo "<td>$id</td>";
    echo "<td>$name</td>";
    echo "<td>$designation</td>";
    echo "<td>$salary</td>";
    echo "</tr>";
}
echo '</table>';

echo "<pre>";
print_r($emp);
echo "<pre>";
