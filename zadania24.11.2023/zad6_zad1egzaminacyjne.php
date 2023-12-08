<?php
$suma = 0;
$liczba = 100;

for ($i = 0; $i < 100; $i++)
{
    $suma += $liczba;
    $liczba ++ 2;
}

echo "Suma liczb wynosi : $suma"