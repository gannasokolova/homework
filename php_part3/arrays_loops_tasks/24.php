<?php
/**
 * Created by PhpStorm.
 * User: Anna
 * Date: 17.12.2016
 * Time: 11:16
 */
$num = 1455555444;
$val = 5;
$arr = preg_split('//', $num, -1, PREG_SPLIT_NO_EMPTY);

foreach ($arr as $value){
    if($value == $val){
        $res += 1;
    }
}
echo "Result: {$res}";