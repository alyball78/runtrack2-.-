<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice de nombres jusqu'à 100</title>
</head>

<body>
    <u>Hello</u>
    <?php
    for ($i = 0; $i <= 100; $i++) {
        if ($i <= 20)

            echo "<i>$i</i><br>";
        if ($i >= 25 && $i <= 52) {
            if ($i === 42) {

                echo "<u>laplateforme</u><br>";
            } else {
                echo "<u>$i</u><br>";
            }
        } elseif ($i > 20 && $i <= 100) {
            echo "$i<br>";
        }
    }

    ?>
</body>

</html>