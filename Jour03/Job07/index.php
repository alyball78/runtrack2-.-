<?php
$str = "Certaines choses changent, et d'autres ne changeront jamais";
for ($i = 1; $i <= strlen($str); $i++) {
    if (strlen($str) == $i) {
        echo $str[0];
    } else {
        echo $str[$i];
    }
}
