<?php
/**
 * Created by PhpStorm.
 * User: Anna
 * Date: 16.12.2016
 * Time: 21:41
 */
$arr = [
    'green'=>'зеленый',
    'red'=>'красный',
    'blue'=>'голубой'
];

foreach ($arr as $key => $value) {
    $en[] = $key;
    $ru[] = $value;
}
echo "<pre>";
print_r($en);
print_r($ru);
echo "</pre>";


