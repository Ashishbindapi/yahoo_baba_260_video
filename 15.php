<?php
// if elseif statement
$per = 55;

if ($per >= 80 && $per <= 100) {
    echo "You are in Marit";
} elseif ($per >= 60 && $per <= 80) {
    echo "You are in Ist division";
} elseif ($per >= 45 && $per <= 60) {
    echo "You are in IInd division";
} elseif ($per >= 33 && $per <= 45) {
    echo "You are in IIIrd division";
} elseif ($per < 33) {
    echo "You are fail";
} else {
    echo "Please enter valid percentage";
}
