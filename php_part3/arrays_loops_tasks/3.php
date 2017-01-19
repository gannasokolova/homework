<?php
/**
 * Created by PhpStorm.
 * User: Anna
 * Date: 16.12.2016
 * Time: 21:22
 */
$arr = [26, 17, 136, 12, 79, 15];

foreach ($arr as $value){
    $result += $value * $value;
}
echo "{$result}<br>";
$result =0;

foreach ($arr as $value){
    $result += pow($value, 2);
}
echo "{$result}<br>";