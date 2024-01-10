<?php
// Count() & Sizeof()

$food = array('Orange','banana','apple','orange','grapes');

// $food = array(
//     'fruits' => array('Orange','banana','apple'),
//     'veggie' => array('carrot','collard','pea'),

// );

echo "<pre>";
print_r(array_count_values($food));
echo "<pre>";
