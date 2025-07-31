<?php

$hauteur = 10;
$largeur = 10;
for ($i = 1; $i <= $hauteur; $i++) {
    for ($j = 1; $j <= $largeur - $i; $j++) {
        echo "&nbsp;";
    }
    for ($k = 1; $k <= $i; $k++) {
        echo "*";
    }
    echo "<br>";
}
