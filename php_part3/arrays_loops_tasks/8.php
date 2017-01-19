<?php
/**
 * Created by PhpStorm.
 * User: Anna
 * Date: 16.12.2016
 * Time: 21:52
 */
$arr =[1, 2, 3, 4, 5, 6, 7, 8, 9];
foreach ($arr as $value){
    $str .= $value;
}

echo "{$str}<br>";
$str ="";
$count = count($arr);

for ($i = 0; $i <=$count; $i++){
    $str .= $arr[$i];
}

echo "{$str}<br>";
$str ="";
$i = 0;
while ($i <=$count){
    $str .= $arr[$i];;
    $i++;
}

echo "{$str}<br>";