<?php
    define("EURO", 4.32);
    define("DOLAR", 3.21);
    define("FRANK", 3.98);

    $sumPLN = 100;

    $currency = "euro";

    $sumcurrency = 0;

    switch ($Waluta) {
        case "euro":
            $sumcurrency = $sumPLN / EURO;
            echo "<p>Przeliczona na: $sumcurrency Euro</p>";
            break;
        case "dolar":
            $przeliczonaKwota = $sumPLN / DOLAR;
            echo "<p>Przeliczona na: $sumcurrency Dolarów</p>";
            break;
        case "frank":
            $przeliczonaKwota = $sumPLN / FRANK;
            echo "<p>Przeliczona na: $sumcurrency Franków</p>";
            break;
        default:
            echo "Niepoprawny wybór waluty.";
    }
    ?>