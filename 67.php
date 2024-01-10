<?php
// string find position functions
$str = "Hello WORLD. The World is nice";

echo "strpos : " . strpos($str, "world") . "<br>";
echo "strrpos : " . strrpos($str, "world") . "<br>";

echo "strripos : " . strripos($str, "world", 10) . "<br>";
echo "stripos : " . stripos($str, "world") . "<br>";

?>
