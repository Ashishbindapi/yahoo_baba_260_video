<?php
//Array : Traversing functions
$food = array(
    'Lemon',
    'Orange',
    'banana',
    'Apple'
);

echo "<b>Current :</b>" . current($food) . "<br>";
echo "<b>key :</b>" . key($food) . "<br>";
echo "<b>pos :</b>" . pos($food) . "<br>";

next($food);
echo "<b>Current :</b>" . current($food) . "<br>";

next($food);
echo "<b>Current :</b>" . current($food) . "<br>";

prev($food);
echo "<b>Current :</b>" . current($food) . "<br>";

end($food);
echo "<b>Current :</b>" . current($food) . "<br>";
echo "<b>key :</b>" . key($food) . "<br>";

// echo "<pre>";
// print_r(each($food));

