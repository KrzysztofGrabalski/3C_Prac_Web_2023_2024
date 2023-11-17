<?php
    $percent = -101;
    if(is_numeric($percent) && $percent >= 0 && $percent <= 100)
    { 
        if($percent >= 0 && $percent <= 30)
        {
            echo"ocena to 1";
        }
        else if($percent > 30 && $percent <= 45)
        {
            echo"ocena to 2";
        }
        else if($percent > 45 && $percent <= 60)
        {
            echo"ocena to 3";
        }
        else if($percent > 60 && $percent <= 74)
        {
            echo"ocena to 4";
        }
        else if($percent > 74 && $percent <= 95)
        {
            echo"ocena to 5";
        }
        else if($percent > 95)
        {
            echo"ocena to 6";
        }
    }
    else
    {
        echo"bledne dane";
    }
?>