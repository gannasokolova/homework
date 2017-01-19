<?php
/**
 * Created by PhpStorm.
 * User: Anna
 * Date: 16.12.2016
 * Time: 22:38
 */
$arr = [4, 2, 5, 19, 13, 0, 10];
$ret = false;
foreach ($arr as $e) {
    if($e == 2 || $e == 3 || $e ==4){
        echo "Есть!<br>";
        $ret = true;
        break;
    }
}
echo (!$ret) ? "Нет!<br>" : "";

$value =[2, 3, 4];
$ret = false;
foreach ($arr as $e) {
    if(in_array($e, $value)){
        echo "Есть!<br>";
        $ret = true;
        break;
    }
}
echo (!$ret) ? "Нет!<br>" : "";