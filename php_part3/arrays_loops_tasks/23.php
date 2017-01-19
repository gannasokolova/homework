<form action="23.php" method="get">
    <label>Введите целое число</label>
    <input type="text" name="num"/>
    <input class="button" type='submit' value="Вывести результат" />
</form>

<?php
/**
 * Created by PhpStorm.
 * User: Anna
 * Date: 16.12.2016
 * Time: 23:18
 */
$num = $_GET["num"];
$number = [1, 2, 3, 4, 5, 6, 7, 8, 9];
$arr = preg_split('//', $num, -1, PREG_SPLIT_NO_EMPTY);

foreach ($arr as $value){
    if(in_array($value, $number)){
        $res += $value;
    }
    else{
        echo "Ошибка при вводе данных<br>";
        $res = 0;
        break;
    }
}
echo "Result: {$res}";






