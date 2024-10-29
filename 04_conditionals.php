<?php

// check if variable is false or true

$variable = true;

if ($variable == true) {
    echo 'Is true';
} else {
    echo 'Is False';
}

// check if one number is greater than another
$n1 = 1;

$n2 =2;

if ($n1 > $n2) {
    echo 'number ' . $n1 . ' is greater than ' . $n2;
} elseif ($n2 > $n1) {
    echo 'number ' . $n2 . ' is greater than ' . $n1;
}

