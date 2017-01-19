<?php
/**
 * Created by PhpStorm.
 * User: Anna
 * Date: 16.12.2016
 * Time: 22:09
 */
for ($i = 2; $i <= 100; print "{$i}<br>", $i += 2);
echo "<br>";
$a = 1;
while ($a <=100){
    if($a % 2 == 0){
        echo "{$a}<br>";
    }
    $a++;
}
echo "<br>";
$b = 1;
do{
    echo ($b % 2 == 0) ? "{$b}<br>" : "";
    $b++;
}while($b <= 100);