<?php
/**
 * Created by PhpStorm.
 * User: Anna
 * Date: 16.12.2016
 * Time: 22:50
 */
$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];
foreach ($arr as $value){
    echo "{$value} ";
    echo ($value%3 != 0)? "," : " ";

}