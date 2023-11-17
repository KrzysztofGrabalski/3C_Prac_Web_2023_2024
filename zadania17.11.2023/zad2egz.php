<!DOCTYPE html>
<html lang="pl">
<body>

    <h1>Wybierz język:</h1>

    <?php
        $jezyk = "n";

        if ($jezyk == "a") {
            echo "Angielski";
        } elseif ($jezyk == "n") {
            echo "Niemiecki";
        } elseif ($jezyk == "h") {
            echo "Hiszpański";
        } else {
            echo "Polski";
        }
    ?>

</body>
</html>
        