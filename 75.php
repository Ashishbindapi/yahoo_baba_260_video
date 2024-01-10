<?php
// Addslashes & Stripslashes
$str ="Hello\ Would \I am";
echo $str . "<br>";

// $newstr = addcslashes($str,"I"); 
// echo $newstr;
$newstr = addcslashes($str,"a..f"); 
echo stripslashes($newstr);
