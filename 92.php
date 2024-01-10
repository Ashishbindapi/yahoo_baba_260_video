<?php
//getdate,localtime & gettimeofday
$olddate = mktime(0,0,0,03,15,2015);
// // $date = getdate();
// $date = getdate($olddate);


// echo $date['month']."-".$date['year'];

// echo "<pre>";
// print_r(getdate());
// echo "</pre>";

// echo "<pre>";
// print_r(gettimeofday());
// echo "</pre>";

// echo "<pre>";
// print_r(localtime(time(),true));
// echo "</pre>";

echo "<pre>";
print_r(localtime($olddate,true));
echo "</pre>";

// $date = gettimeofday(true);
// echo $date['sec'];
