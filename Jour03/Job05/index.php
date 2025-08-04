<?php
$str = "On n’est pas le meilleur quand on le croit mais quand on le sait";
$count_consonne = 0;
$count_voyelle = 0;
$voyelle = ["a", "e", "i", "o", "u", "y"];
for ($i = 0; $i < strlen($str); $i++) {
    $text = $str[$i];
    $maj = strtolower($text);
    foreach ($voyelle as $key => $value) {
        if ($maj == $value) {
            $count_voyelle++;
            break;
        }
    }
}
$lengthwithoutSapce = strlen(str_replace([' ', '’'], '', $str));
$count_consonne = $lengthwithoutSapce - $count_voyelle;
echo "$count_voyelle<br>";
echo "$count_consonne<br>";

