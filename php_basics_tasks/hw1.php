<pre>
    Даны два числа. Найти их сумму и произведение.

Даны два числа. Найдите сумму их квадратов.

Даны три числа. Найдите их среднее арифметическое.

Дано натуральное число. Найдите остатки от деления его на 3 и на 5.

Дано число. Увеличьте его на 30%, на 120%.

Дано два числа. Найдите сумму 40% от первого числа и 84% от второго числа.


<?php
/**
 * Created by PhpStorm.
 * User: Anna
 * Date: 09.12.2016
 * Time: 23:55
 */

$a = 5;
$b = 10;
echo 'a = 5, b = 10',"\n";
echo 'Сумма:', $a+$b,"\n";
echo "Произведение: ".$a*$b,"\n";
echo "Сумма квадратов: ".(pow($a, 2) + pow($b, 2)),"\n";
echo "Среднее: ", ($a + $b)/2,"\n";
echo "Остаток от деления 5 на 3: ", $a % 3,"\n";
echo "Остаток от деления 5 на 5: ", $b % 5,"\n";
echo "5+30% равно ", $a*=1.3,"\n";
$a = 5;
echo "5+120% равно ", ($a/100*220),"\n";
echo "40% от числа 10: ", $b*=0.4,"\n";
$b = 10;
echo "84% от числа 10: ", $b = $b/100*84,"\n";

?>
    </pre>
