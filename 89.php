<?php
// date_create & date_format

$date = date_create("2023-12-15 18:19:00",timezone_open("Asia/Kolkata"));

echo date_format($date, "d/m/Y h:i:s");
?>
