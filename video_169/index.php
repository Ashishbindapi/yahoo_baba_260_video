<?php

$var = "<h1> Yahoobaba & websiteéðý</h1>";

echo filter_var($var, FILTER_SANITIZE_STRING,FILTER_FLAG_STRIP_HIGH);