<?php
    $year = 1601;
    if(is_numeric($year) && $year > 0)
    {
        $century = ceil($year / 100);
        echo "stulecie $century <br>";
        
            if ($year % 4 == 0 && $year % 100 != 0 || $year % 400 == 0) 
                echo"rok przestępny";
            else
            {
                echo"rok nie przestępny";
            }
    }
    else
    {
        echo"bledne dane<br>";
    }
?>