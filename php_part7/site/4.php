<?php
include_once ('setCookie.php');
$page_1 = 'index';
$page_2 = '2';
$page_3 = '3';

function echoInfo($page){
    if($_COOKIE [$page]){
        $str = explode(';', $_COOKIE [$page]);
        foreach ($str as $value){
            echo "Page: {$page}, Time: {$value}<br>";
        }
    }
}
echoInfo($page_1);
echoInfo($page_2);
echoInfo($page_3);