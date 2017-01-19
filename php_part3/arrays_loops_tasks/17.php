<?php
/**
 * Created by PhpStorm.
 * User: Anna
 * Date: 16.12.2016
 * Time: 22:54
 */
$month = "December";

$arr =[
    'January',
    'February',
    'March',
    'April',
    'May',
    'June',
    'July',
    'August',
    'September',
    'October',
    'November',
    'December'
];
foreach ($arr as $value){
    echo ($value  == $month) ? "<b>{$value}</b><br>" : "{$value}<br>";
}