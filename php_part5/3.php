<?php
function keyAlf()
{
    $alf = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z',
        'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'];
    $alf_1 = $alf;
    for ($i = 0; $i <= 51; $i++){
        $key[$alf_1[$i]] = $alf[array_rand($alf, 1)];
        unset($alf[array_search($key[$alf_1[$i]], $alf)]);
    }
    return $key;
}

$key = keyAlf();

print_r($key);

function shifr($str, $key){
    $str = str_split($str);
    foreach ($str as $value){
        $res[] = $key[$value] ? $key[$value] : $value;
    }
    return implode($res);
}

$test = "Hello world";
$test_shifr = shifr($test, $key);
echo "<br>".$test_shifr;

function de_shifr($str, $key){
    $str = str_split($str);
    foreach ($str as $value){
        $res[] = array_search($value, $key) ?   array_search($value, $key)  : $value;
    }
    return implode($res);
}

$test_shifr = de_shifr($test_shifr, $key);
echo "<br>".$test_shifr;