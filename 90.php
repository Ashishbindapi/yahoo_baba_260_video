<?php
// checkdate & date_diff

echo checkdate(12, 14, 2023);

$date1 = new DateTime("2013-03-15");
$date2 = new DateTime("2013-12-12");

$diff = $date1->diff($date2);

// Output the difference
// echo "Difference: " . $diff->format('%R%a days');
echo $diff->format("%r%a %m days");

echo "<pre>";
print_r($diff);
echo "<pre>";
?>
