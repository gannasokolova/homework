<?php
/**
 * Created by PhpStorm.
 * User: Anna
 * Date: 16.12.2016
 * Time: 21:38
 */
$arr =[
     "Коля" => 200,
     "Вася" => 300,
     "Петя" => 400
];

foreach ($arr as $key => $value){
    echo "{$key} — зарплата {$value} долларов.<br>";
}