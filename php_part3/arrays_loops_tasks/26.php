<?php
/**
 * Created by PhpStorm.
 * User: Anna
 * Date: 17.12.2016
 * Time: 11:25
 */
for($i=1; $i<10; $i++) {
    $arr[$i] = rand(0,10);
}

echo "<pre>";
print_r($arr);
echo "</pre>";
$res_2  = 1;
foreach ($arr as $key => $item) {
    ($key%2 != 0 && $item > 0) ?  $res_1 .= $item : $res_1;
    ($key%2 == 0 && $item > 0) ? $res_2 *= $item : $res_2;
}
$arr = preg_split('//', $res_1, -1, PREG_SPLIT_NO_EMPTY);
echo "<pre>";
print_r($arr);
echo "</pre>";
echo  "{$res_2}";