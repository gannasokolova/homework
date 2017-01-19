<?php
function is_polidndrom($str){
    $str = str_split($str);
    $size = count($str)/2 -1;
    $i = count($str)-1;
    foreach ($str as $key => $value) {
        $ret = true;
        if ($key <= $size && $value == $str[$i]) {
            $i--;
        }
        elseif($key >= $size){
            return true;
    }
    else{
            return false;
    }

        return $ret;
    }
}

$ret = is_polidndrom("rrr222rrr");
var_dump($ret);