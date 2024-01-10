<?php
// Switch statement
$age = 12;

switch(true){
    case ($age >= 15 && $age <= 20):
        echo "You are eigible";
    break;
    case ($age >= 21 && $age <= 30):
        echo "You are not eigible";
    break;
    default:
        echo "enter the vailaid age";
    break;
}