<?php
// explode / implode
$str = 'red, green-blue-orange';
$array = explode("-", $str);
echo "<pre>"; print_r($array);
echo "</pre>";

///
$array = array('red','green', 'blue');
$str = 'red, green-blue-orange';
$array = implode("-", $array);
echo "<pre>"; print_r($array);
echo "</pre>";
