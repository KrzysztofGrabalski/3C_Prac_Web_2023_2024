<?php
$num1 = 2;
$num2 = 4;
$num3 = 8;

$lowest = $num1;
if ($num2 < $lowest) {
    $lowest = $num2;
}

if ($num3 < $lowest) {
    $lowest = $num3;
}

switch ($lowest) {
    case $num1:
        echo "Najmniejsza liczba to: " . $num1;
        break;
    case $num2:
        echo "Najmniejsza liczba to: " . $num2;
        break;
    case $num3:
        echo "Najmniejsza liczba to: " . $num3;
        break;
}
?>