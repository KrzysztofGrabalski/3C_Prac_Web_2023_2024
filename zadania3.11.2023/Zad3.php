<?php
    $price = 5;
    $category = 1;
if(is_numeric($category) && $category > 0)
    switch($category)
    {
        case 1:
            echo"electronics" .$price * 0.23;
            break;
        case 2:
            echo"clothes" .$price * 0.50;
            break;
        case 3:
            echo"bread" .$price * 2;
            break;
    }
else
echo"błede dane"
?>