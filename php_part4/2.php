<?php
function cubNum_1($n){
    return($n * $n * $n);
}
$a = array(1, 2, 3, 4, 5);
$b = array_map("cubNum_1", $a);
print_r($b);

function cubNum ($num){
    if (gettype($num) == integer || gettype($num) == double){
        $total = $num;
        for ($i = 1; $i <= 2; $i++, $total *= $num);
        return $total;
    }
    else{
        echo "В функцию передано не корректное значение параметра<br>";

    }
}


$b = cubNum(3);

echo $b;

function cubNum_2 ($num){
    if (gettype($num) == integer || gettype($num) == double){
        $total = $num*$num*$num;
        return $total;
    }
    else{
        echo "В функцию передано не корректное значение параметра<br>";

    }
}


$b = cubNum_2(3);

echo $b;