<p>ЗАДАНИЕ: Создать форму, которая содержит поля name, email, phone. Задать скрипт,
    который выведет на экран отправленные данные - $_POST или $_GET (в зависимости от свойств формы)</p>

<form action="devionity_php_26.php" method = "get">
    <table>
        <span>ЗАДАТЬ ВОПРОС</span>
        <tr>
            <td> <label>Имя:</label></td>
            <td><input type="text" name="name"/></td>
        </tr>
        <tr>
            <td><label>Контактный email:</label></td>
            <td><input type="email" name="email"/></td>
        </tr>
        <tr>
            <td><label>Контактный телефон:</label></td>
            <td><input type="phone" name="phone" /></td>
        </tr>
        <tr>
            <td  colspan="2"><textarea name="message" placeholder="Суть вопроса"></textarea></td>
        </tr>
        <tr>
            <td colspan="2"><input class="button" type='submit' value="Отправить" /></td>
        </tr>
    </table>
</form>

<?php
    print_r($_GET);

?>

<p>ЗАДАНИЕ: Создать форму с полями username, email, message.
    Сериализовать данные, полученные при отправке формы и вывести полученную строку на экран</p>
<?php
$str = serialize($_GET);
var_dump($str);
?>
<p>ЗАДАНИЕ: Вычислить количество секунд в году и присвоить это значение переменной. Вычислить остаток от деления этого значения на 2</p>
<?php
$day = 365;
$hours = 24;
$minutes = 60;
$seconds = 60;
$year = $seconds * $minutes * $hours * $day;
echo $year%2;
?>
<p>ЗАДАНИЕ: Создать строку, содержащую число 12345 используя лишь отдельные цифры 1,2,3,4,5 и операцию конкатенации</p>
<?php
echo "1"."2"."3"."4"."5";
?>
<p>ЗАДАНИЕ: Вычислить значение выражения: false && true || false && true || !false && true.
    Вывести на экран true/false в зависимости о того, делится переменная $x на 2 или нет.</p>
<?php
//var_dump(false && true || false && true || !false && true);
$x=11;
if($x%2 == 0){
    var_dump(true);
}
else{
    var_dump(false);
}
?>
<p>ЗАДАНИЕ: Создать алгоритм обмена значениями двух переменных не используя третьей.</p>
<?php
$a =15;
$b =12;
$a = $a + $b;
$b = $a - $b;
$a = $a - $b;
echo "a = {$a}, b = {$b}"
?>
<p>ЗАДАНИЕ: Создать алгоритм вычисления максимального значения двух заданных переменных</p>
<?php
if ($a>$b){
    echo "a > b";
}
else{
    echo "b < a";
}
?>
<p>ЗАДАНИЕ: Создать алгоритм вычисления максимального значения двух заданных переменных при помощи тернарного оператора</p>
<?php
echo ($a>$b ? "a > b" :  "a < b");
?>
<p>ЗАДАНИЕ: Создать алгоритм вычисления максимального значения двух переменных при помощи switch</p>
<?php
switch ($a > $b) {
    case true: echo "a > b"; break;
    default: echo "a < b";
}
?>
<p>ЗАДАНИЕ: Создать алгоритм определения всех простых чисел в промежутке от 1 до 100 при помощи for.
    Простое число - это число которое делится только на себя и на 1</p>
<?php
for ($i = 2; $i < 100; $i++){
    for($a = $i-1; $a > 1; $a--){
        if($i%$a == 0){
            continue 2;
        }
    }
    echo "$i, ";
}
?>
<p>ЗАДАНИЕ: Создать алгоритм определения всех простых чисел в промежутке от 1 до 100 при помощи while.
    Простое число - это число которое делится только на себя и на 1</p>
<?php
$i = 2;

while ($i < 100){
    $a = $i-1;
    while($a > 1){
        if($i%$a == 0){
			$i++;
            continue 2;			
        }
        $a--;
    }
    echo "$i, ";
    $i++;
}
?>
    <p>ЗАДАНИЕ: Создать массив из 10 любых числовых значений. При помощи foreach вывести на экран те значения, которые делятся на 3</p>
<?php
$arr = [5, 6, 7, 4, 3, 7, 7, 9 , 0, 10];

foreach ($arr as $value){
if($value%3 == 0 && $value){
echo "{$value} <br>";
}
}
?>
    <p>ЗАДАНИЕ: Выполнить предыдущие задания при помощи альтернативного синтаксиса</p>
<?php
$i = 2;

while ($i < 100):
    $a = $i-1;
    while($a > 1):
        if($i%$a == 0):
			$i++;
            continue 2;
        endif;
        $a--;
    endwhile;
    echo "$i, ";
    $i++;
endwhile;
?>
    <p>ЗАДАНИЕ: Создать алгоритм для определения первого найденного простого числа в промежутке от 200 до 400.</p>
<?php
for ($i = 200; $i <= 400; $i++){
    for($a = $i-1; $a > 1; $a--){
        if($i%$a == 0){
            continue 2;
        }
    }
    echo "$i";
	break;
}
?>
<p>ЗАДАНИЕ: Как можно упростить функцию test() в данном скрипте?</p>
<?php
function test($x, $y)
{
	if ($y == 0) {
		exit('Error');
	}

	return $x / $y;

}

echo test(1, 0);
echo 'Unreached line';
?>

<?php
function test($x, $y)
{
	if ($y == 0) {
		return false;
	}

	return $x / $y;

}

echo test(1, 0) or die('Error');
echo 'Unreached line';


https://github.com/thawy-dev/php-academy/