<?php
if (isset ($_POST{'weight'})) && isset($_POST{'height'})) 
    $weight = $_POST['weight'];
    $height = $_POST['height'];

    if ($weight == "" || $height == "") {
    }
    else {
        $bmi = $weight / ($height * $height);
        if ($bmi < 18.5) {
            echo "Twoje BMI to" . $BMI . ". Niedowaga.";
        }
        elseif ($bmi <= 24.9) {
            echo "Twoje BMI to" . $BMI . ". Twoja waga jest optymalna.";
        }
        elseif ($bmi <= 29.9) {
            echo "Twoje BMI to" . $BMI . ". Masz nadwagę.";
        }
        else {
            echo "Twoje BMI to"  . $BMI . ". Jesteś otyły.";
        }

}
