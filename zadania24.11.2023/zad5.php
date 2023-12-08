<?php

function functionxy($x) {
    
    return $x * $x - 4;
}

function bisection($functionxy, $poczatek, $koniec, $dokladnosc) {
    $wartoscPoczatkowa = $functionxy($poczatek);
    
    if ($wartoscPoczatkowa * $functionxy($koniec) > 0) {
      
        echo "Niepoprawny przedział początkowy.";
        return;
    }

    while (($koniec - $poczatek) >= $dokladnosc) {
        $srodek = ($poczatek + $koniec) / 2;
        $wartoscSrodka = $functionxy($srodek);

        if ($wartoscSrodka == 0.0) {
            echo "Znalezione zero funkcji: $srodek";
            return;
        } elseif ($wartoscSrodka * $wartoscPoczatkowa < 0) {
            $koniec = $srodek;
        } else {
            $poczatek = $srodek;
        }
    }

    $wynik = ($poczatek + $koniec) / 2;
    echo "Przybliżona wartość zera funkcji: $wynik";
}
