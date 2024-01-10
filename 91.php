<?php
//date_add ,date_sub & date_modify
$date = date_create("2023-12-14");
// date_sub($date,date_interval_create_from_date_string("10 days"));
date_modify($date,"-10 days");

echo date_format($date, "d-m-y");