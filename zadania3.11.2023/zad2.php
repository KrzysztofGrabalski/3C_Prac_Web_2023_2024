<?php
    $number = 3;
    if(is_numeric($number))
    {
        if($number % 2 == 0)
        {
            echo"liczba jest parzysta";
        }
        else if($number % 2 != 0)
        {
            echo"liczba nie jest parzysta";
        }
    }
    else
    echo"wprowadzono błedne dane";
?>