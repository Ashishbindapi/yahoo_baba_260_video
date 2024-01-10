<?php

$file = "readme.txt";

echo $path = realpath($file) ."<br>";

echo dirname($path);
// echo "<pre>";
// print_r(pathinfo($file));
// echo "</pre>";