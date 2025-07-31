<?php
for ($i = 2; $i <= 1000; $i++) {
    $premiers = true;
    for ($j = 2; $j < $i; $j++) {
        if ($i % $j == 0) {
            $premiers = false;
            break;
        }
    }

    if ($premiers) {
        echo "$i <br />";
    }
}
