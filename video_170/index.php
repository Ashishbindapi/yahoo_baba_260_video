<?php

$arr = array(
    "stname" => "Ashish Kumar",
    "stmarks" => "95",
    "stemail" => "as@gmail.com",
);

$filter = array(
    "stname" => FILTER_SANITIZE_STRING,
    "stmarks" => array(
        "filter" => FILTER_VALIDATE_INT,
        "options" => array(
            "min_range" => 1,
            "max_range" => 100
        )
    ),
    "stemail" => FILTER_SANITIZE_EMAIL,
);

echo "<pre>";

print_r(filter_var_array($arr,$filter));

echo "</pre>";
