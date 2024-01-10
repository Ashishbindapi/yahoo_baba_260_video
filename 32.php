<?php
//Array
$color = ["red", 20, "blue", 12.50];

echo "<ul>";
for ($i=0; $i < 4; $i++) { 
    echo "<li> $color[$i] </li>";
}
echo "</ul>";