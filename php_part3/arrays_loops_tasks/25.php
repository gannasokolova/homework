<?php
/**
 * Created by PhpStorm.
 * User: Anna
 * Date: 17.12.2016
 * Time: 11:18
 */
for($i=0; $i<10; $i++) {
    $arr[$i] = rand(0,10);
}

echo "<pre>";
print_r($arr);
echo "</pre>";
$max = $arr[0];
$min = $arr[0];
$keyMax = 0;
$keyMin = 0;

foreach ($arr as $key => $item) {
    if($item > $max){
        $max = $item;
        $keyMax =$key;
    }
    if($item < $min){
        $min = $item;
        $keyMin =$key;
    }
}
$arr[$keyMax] = $min;
$arr[$keyMin] = $max;

echo "<pre>";
print_r($arr);
echo "</pre>";