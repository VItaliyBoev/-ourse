<?php

function test($pref, $arr):string{
    return implode(', ', preg_grep('/^s*' . str_ireplace('/', '\/', preg_quote($pref)) . '/ui', $arr));
}

$arr = ['один', 'id_два', 'три', 'четid_ыре', 'id_пять'];

$pref = 'id_';

echo test($pref, $arr);