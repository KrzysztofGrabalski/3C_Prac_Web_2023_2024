<?php
    $number = "abd";
    if(is_numeric($number))
        {
        if($number > 0)
        {
            echo"wprowadzona liczba jest dodatnia";
         }
        else if($number < 0)
        {
            echo"wprowadzona liczba jest ujemna";
        }
        else if($number == 0)
        {
            echo"wprowadzona liczba  jest równa zero";
        }
        else if ($number === "a")
        {
            echo"wprowadzono złe dane";
        }
    }
    else
    echo"wprowadzone dane sa bledne";
?>