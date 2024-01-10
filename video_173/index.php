<?php

$file = fopen("readmi,txt", "a+");

ftruncate($file,50);

fclose($file);