<?php
$suma = 0;
$liczba = 10;

while ($suma <= 1000)
{
    $suma += $liczba;
    $liczba++;
}
echo "Suma kolejnych liczb naturalnych wynosi : $suma";
?>