<?php

function calcul($a, $operation, $b)
{
    $label = "le résultat de l'opération:";
    echo $label . $a . $operation . $b . "= ";
    $res = eval("echo $a $operation $b; ");

    return $res;
}
calcul(105, '/', 5);
