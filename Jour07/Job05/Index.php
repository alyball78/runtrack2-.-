<?php
function occurrences($str, $char)
{
    echo substr_count($str, $char);
}

occurrences("plaisir de se faire former à la plateforme", "l");
