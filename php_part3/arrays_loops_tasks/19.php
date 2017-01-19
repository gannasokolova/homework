<?php
/**
 * Created by PhpStorm.
 * User: Anna
 * Date: 16.12.2016
 * Time: 23:03
 */

$day ="Friday";
$arr =[
    'Monday',
    'Tuesday',
    'Wednesday',
    'Thursday',
    'Friday',
    'Saturday',
    'Sunday'
];
foreach ($arr as $value){
    echo ($value  ==  $day) ? "<i>{$value}</i><br>" : "{$value}<br>";
}