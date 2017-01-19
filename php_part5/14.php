<?php
function res($t){
    if((gettype($t) == integer ||gettype($t) == double) && $t >0){
        $res = $t <=5 ? $t : ($t - $t%5);
        switch ($res){
            case $res <3 || $res == 5:
                echo "зеленый<br>";
                break;
            case ($res >=3) && ($res <4):
                echo "желтый<br>";
                break;
            case ($res >=4) && ($res <5) <=3:
                echo "красный<br>";
                break;
        }
    }
    else{
        echo "Параметры в функция переданы не корректно";
    }
}

res(2.5);
res(3);
res(4);
res(5);
res(6);

