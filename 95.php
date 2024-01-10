<?php
//date_time_set

$date = date_create("14-12-2023");

date_time_set($date,13,20);

echo date_format($date,"d-m-Y H:i:s")."<br>";

date_time_set($date,15,20,45);
echo date_format($date,"d-m-Y H:i:s")."<br>";
