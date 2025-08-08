<?php
function leetSpeak($str)
{
    $res = str_ireplace(array("a", "b", "e", "g", "l", "s", "t"), array("4", "8", "3", "6", "1", "5", "7"), $str);
    echo "$res";
}
leetSpeak("Aly se forme à la plateforme avec un bon formateur très disponible et des collègues supergentilles. La plateforme est vraiment une école inclusive.");
