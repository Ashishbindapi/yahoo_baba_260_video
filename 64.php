<?php
$str = "Yahoo Baba";
$array = str_split($str, 2);
echo "<pre>"; print_r($array); echo "</pre>";

//////
$str = "Yahoo Baba";
$newstr = chunk_split($str, 3,"<br>");
echo $newstr;
