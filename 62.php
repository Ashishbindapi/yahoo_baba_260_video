<?php

$newArray = range('h', 'a');
echo "<pre>"; print_r($newArray);
echo "</pre>";
 ////////////
foreach (range('h', 'a') as $letter) {
}
echo $letter . "<br>";
