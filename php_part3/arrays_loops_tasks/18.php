<?php
/**
 * Created by PhpStorm.
 * User: Anna
 * Date: 16.12.2016
 * Time: 23:01
 */

$arr =[
    'Monday',
    'Tuesday',
    'Wednesday',
    'Thursday',
    'Friday',
    'Saturday',
    'Sunday'
];
foreach ($arr as $key => $value){
    echo ($key  == 5 || $key == 6) ? "<b>{$value}</b><br>" : "{$value}<br>";
}