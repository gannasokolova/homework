<?php
/**
 * Created by PhpStorm.
 * User: Anna
 * Date: 16.12.2016
 * Time: 22:11
 */
$n = 1000;
while ($n >50){
    $n = $n/2;
    $num++;
}
echo "n = {$n}, num = {$num}<br>";
$n = 1000;
do{
    $n = $n/2;
    $num++;
}
while ($n >50);
echo "n = {$n}, num = {$num}<br>";

