<?php
// Array_merge() & Array_combine()

$name = array('Ram','Mohan','Sera');
$age = array('35','37','43');

$newarray = array_combine($name,$age);

echo "<pre>";
print_r($newarray);
echo "<pre>";