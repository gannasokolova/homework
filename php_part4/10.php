<?php

function str_correct($str, $n){
    return mb_substr($str, 0, $n, "UTF-8")."...";
}

var_dump(str_correct('тестовая строка', 3));