<?php
$var = "10E";

$var = filter_var($var,FILTER_SANITIZE_NUMBER_FLOAT,FILTER_FLAG_ALLOW_THOUSAND);

if (filter_var($var, FILTER_VALIDATE_FLOAT)) {
    echo "<br> $var is valid Float.";
}else {
    echo "<br> $var is not an valid Float.";
}