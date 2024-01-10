<?php
//String Replace functions
$str = "Hello world. the would is nice";

$array = ['Hello'=>"hi","would"=>"earth"];

echo strtr($str,$array);