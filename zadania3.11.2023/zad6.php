<?php
    $sideA = 5;
    $sideB = 3;
    $sideC = 4;
    if(is_numeric($sideA) && is_numeric($sideB)  && is_numeric($sideC)) 
    {
        if($sideA == $sideB && $sideB == $sideC)
        {
            echo"trójkąt jest równoboczny";
        }
        else if(($sideA*$sideA+$sideB*$sideB==$sideC*$sideC) || ($sideA*$sideA+$sideC*$sideC==$sideB*$sideB) || ($sideC*$sideC+$sideB*$sideB==$sideA*$sideA) && $sideA == $sideB && $sideB == $sideC)
        {
            echo"trójkąt równoramienny i prostokątny";
        }
        else if($sideA == $sideB || $sideB == $sideC || $sideA == $sideC)
        {
            echo"ten trojkat to trojkat rownoramienny";
        }
        else if($sideA == $sideB && $sideB == $sideC)
        {
            echo"podane boki daja trojkat rownoboczny";
        }
        else if(($sideA*$sideA+$sideB*$sideB==$sideC*$sideC) || ($sideA*$sideA+$sideC*$sideC==$sideB*$sideB) || ($sideC*$sideC+$sideB*$sideB==$sideA*$sideA))
        {
        echo"Trojkąt prostokątny";
        }
        
        else
        {
            echo"inny";
        }
    }
    else
    echo"bledne dane";
?>