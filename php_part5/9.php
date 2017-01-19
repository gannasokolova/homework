<?php

function col(){
    $numargs = func_num_args();
    echo "Количество аргументов: {$numargs}";
}

col(5, 8, 8);