<?php

$var = "FA-F9-DB-B2-5E";

if (filter_var($var, FILTER_VALIDATE_MAC)) {
    echo "<br> $var is valid MAC";
}else{
    echo "<br> $var is not an valid MAC";
}