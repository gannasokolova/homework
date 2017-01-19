<?php
/**
 * Created by PhpStorm.
 * User: Anna
 * Date: 16.12.2016
 * Time: 21:47
 */
$arr = [2, 5, 9, 15, 0, 4];

foreach ($arr as $item) {
    if($item > 3 && $item < 10){
        echo "{$item} <br>";
    }
}

foreach ($arr as $item) {
    echo ($item > 3 && $item <10) ? "{$item}<br>" : "";
}