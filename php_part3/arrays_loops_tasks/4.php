<?php
/**
 * Created by PhpStorm.
 * User: Anna
 * Date: 16.12.2016
 * Time: 21:31
 */
$arr = [
    'green'=>'зеленый',
    'red'=>'красный',
    'blue'=>'голубой'];
foreach ($arr as $key => $value){
    echo "{$key}<br>";
}

foreach ($arr as $key => $value){
    echo "{$value}<br>";
}