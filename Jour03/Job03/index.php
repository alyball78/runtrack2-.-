<?php
$str = "I'm sorry Dave I'm afraid I can't do that";
$voy = ["a", "e", "i", "o", "y", "u"];
for ($i = 0; $i < strlen($str); $i++) {
    $text = $str[$i];
    $maj = strtolower($text);
    foreach ($voy as $v) {
        if ($maj === $v) {
            echo $text;
            break;
        }
    }
}
